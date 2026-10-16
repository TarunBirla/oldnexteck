<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class AssessmentLead extends Model
{
    use HasFactory;

    protected $table = 'assessment_leads';

    protected $fillable = [
        'full_name',
        'email',
        'company',
        'phone',
        'industry',
        'company_size',
        'primary_challenge',
        'additional_notes',
        'responses',
        'score',
        'maturity_level',
        'calculator_inputs',
        'calculator_results',
        'status',
        'admin_notes',
        'consultation_requested',
        'ip_address',
        'user_agent',
        'session_id',
    ];

    protected $casts = [
        'responses'              => 'array',
        'calculator_inputs'      => 'array',
        'calculator_results'     => 'array',
        'score'                  => 'integer',
        'consultation_requested' => 'boolean',
    ];

    /**
     * Deterministic scoring calculation based on transparent, documented methodology:
     * - Operational Efficiency: 4 questions (raw 4..20, scaled 0..100) -> 60% of total maturity
     * - Practical AI Usage: 2 questions (raw 2..8, scaled 0..100)       -> 25% of total maturity
     * - AI Risk & Data Governance: 1 question (raw 1..4, scaled 0..100) -> 15% of total maturity
     * Total score is normalized from combined raw points [7..32] mapped to 5..100% ensuring
     * deterministic reproducibility across identical inputs.
     */
    public static function calculateScore(array $responses): array
    {
        // 1. Operational Efficiency Scoring (4 questions, 5-point scale + Not sure)
        $mapOperational = [
            'Not at all' => 5, // For routine manual work, less manual = higher score
            'Slightly'   => 4,
            'Partially'  => 3,
            'Mostly'     => 2,
            'Fully'      => 1,
            'Not sure'   => 3, // Neutral midpoint
        ];
        $mapPositive = [
            'Fully'      => 5,
            'Mostly'     => 4,
            'Partially'  => 3,
            'Slightly'   => 2,
            'Not at all' => 1,
            'Not sure'   => 3, // Neutral midpoint
        ];

        // Q1: Routine work manual (inverted: less manual = higher efficiency)
        $qManual = $responses['q_manual_work'] ?? 'Partially';
        $scoreManual = self::mapScoreValue($mapOperational, $qManual, 3);

        // Q2: Systems integration
        $qIntegration = $responses['q_systems_integration'] ?? 'Partially';
        $scoreIntegration = self::mapScoreValue($mapPositive, $qIntegration, 3);

        // Q3: Reports & visibility
        $qReports = $responses['q_reports_visibility'] ?? 'Partially';
        $scoreReports = self::mapScoreValue($mapPositive, $qReports, 3);

        // Q4: Technology roadmap
        $qRoadmap = $responses['q_tech_roadmap'] ?? 'Partially';
        $scoreRoadmap = self::mapScoreValue($mapPositive, $qRoadmap, 3);

        $operationalRaw = $scoreManual + $scoreIntegration + $scoreReports + $scoreRoadmap; // 4 to 20

        // 2. AI Readiness Scoring: Assessed separately as AI Usage vs AI Governance
        $mapAiUsage = [
            'Already implemented'            => 4,
            'Already part of daily workflow' => 4,
            'Clear implementation backlog'   => 4,
            'Piloting'                       => 3,
            'Piloting in some teams'         => 3,
            'Multiple use cases mapped'      => 3,
            'Exploring'                      => 2,
            'Exploring / Evaluating'         => 2,
            'A few ideas in discussion'      => 2,
            'Not yet'                        => 1,
            'Not yet identified'             => 1,
            'Not sure'                       => 2,
        ];

        $mapAiGov = [
            'Already implemented'            => 4,
            'Formal policy & security'       => 4,
            'Formal policy & review process' => 4,
            'Piloting'                       => 3,
            'Basic staff guidelines'         => 3,
            'Basic staff guidelines in place'=> 3,
            'Exploring'                      => 2,
            'Informal discussions only'      => 2,
            'Not yet'                        => 1,
            'No formal guidelines yet'       => 1,
            'Not sure'                       => 2,
        ];

        // Q5: Practical AI Tool Usage
        $qAiUse = $responses['q_ai_current_use'] ?? 'Exploring';
        $scoreAiUse = self::mapScoreValue($mapAiUsage, $qAiUse, 2);

        // Q6: Identified AI Opportunities & Use Cases
        $qAiOpp = $responses['q_ai_opportunities'] ?? 'Exploring';
        $scoreAiOpp = self::mapScoreValue($mapAiUsage, $qAiOpp, 2);

        // Q7: AI Governance & Data Privacy Safeguards (Assessed Separately)
        $qAiRisk = $responses['q_ai_risk_privacy'] ?? 'Not yet';
        $scoreAiRisk = self::mapScoreValue($mapAiGov, $qAiRisk, 1);

        $aiUsageRaw = $scoreAiUse + $scoreAiOpp; // 2 to 8
        $aiGovRaw   = $scoreAiRisk;              // 1 to 4
        $aiRaw      = $aiUsageRaw + $aiGovRaw;   // 3 to 12

        // Component percentages (rounded integers)
        $opScorePercent   = (int) round(($operationalRaw / 20) * 100);
        $aiUsagePercent   = (int) round(($aiUsageRaw / 8) * 100);
        $aiGovPercent     = (int) round(($aiGovRaw / 4) * 100);
        $aiCombinedPercent= (int) round(($aiRaw / 12) * 100);

        // Overall Maturity Index: min raw 7, max raw 32
        $totalRaw = $operationalRaw + $aiRaw;
        $scorePercent = (int) round((($totalRaw - 7) / (32 - 7)) * 100);
        $scorePercent = max(5, min(100, $scorePercent));

        // Maturity Tier Classification
        if ($scorePercent < 40) {
            $maturity = 'Emerging';
            $badgeColor = '#DC2626';
            $summary = 'Significant manual dependencies and tool fragmentation identified across core operations, indicating substantial immediate ROI from targeted workflow systematisation.';
        } elseif ($scorePercent < 65) {
            $maturity = 'Developing';
            $badgeColor = '#D97706';
            $summary = 'Foundational business software is established, but departmental silos remain. Priority focus is unified data integration, automated handoffs, and basic AI security guidelines.';
        } elseif ($scorePercent < 85) {
            $maturity = 'Strategic';
            $badgeColor = '#2563EB';
            $summary = 'Structured technology stack with good operational visibility. Primed for automated API bridges, operational copilot pilots, and executive dashboard centralization.';
        } else {
            $maturity = 'Optimized';
            $badgeColor = '#059669';
            $summary = 'High technology maturity with an aligned roadmap and governed practices. Poised for predictive automation, advanced integrations, and custom competitive differentiators.';
        }

        // Tailored observations derived from individual inputs
        $observations = [];

        // Manual workload observation
        if ($scoreManual <= 2) {
            $observations[] = 'Routine Manual Overhead: Repetitive administrative tasks and manual data re-keying occupy substantial team hours, constraining capacity and increasing error rates.';
        } elseif ($scoreManual >= 4) {
            $observations[] = 'Operational Systematisation: Routine administrative overhead is well-contained, allowing team capacity to focus on revenue-generating activities.';
        } else {
            $observations[] = 'Workflow Automation Potential: Core operations involve moderate manual touchpoints that could be streamlined through automated data pipelines.';
        }

        // Systems integration observation
        if ($scoreIntegration <= 2) {
            $observations[] = 'System Silos: Disparate software tools (CRM, accounting, operations) operate in isolation, requiring manual reconciliation and dual entry.';
        } elseif ($scoreIntegration >= 4) {
            $observations[] = 'Connected Systems: Existing software platforms demonstrate solid interoperability, creating an agile foundation for automated triggers.';
        } else {
            $observations[] = 'Integration Opportunities: Basic software connections exist, but key departmental handoffs between systems still require manual supervision.';
        }

        // Reporting visibility observation
        if ($scoreReports <= 2) {
            $observations[] = 'Reporting Latency: Decision-makers lack real-time visibility due to delayed or manually assembled reports, limiting proactive operational adjustments.';
        } elseif ($scoreReports >= 4) {
            $observations[] = 'Management Visibility: Leadership enjoys rapid access to accurate performance metrics and consolidated operational reporting.';
        } else {
            $observations[] = 'Reporting Consolidation: Reports are accessible but require periodic manual collation; an automated single source of truth would improve decision speed.';
        }

        // Technology roadmap observation
        if ($scoreRoadmap <= 2) {
            $observations[] = 'Strategic IT Roadmap: Technology investments are currently reactive rather than roadmap-driven, increasing risk of software sprawl and unaligned expenditures.';
        } elseif ($scoreRoadmap >= 4) {
            $observations[] = 'Strategic Alignment: A clear technology roadmap guides quarterly digital priorities and vendor investments.';
        }

        // AI Usage observation
        if ($scoreAiUse <= 2) {
            $observations[] = 'AI Adoption Curve: Artificial intelligence adoption is in the exploratory phase; starting with proven, pragmatic copilots for routine tasks will yield fast ROI.';
        } else {
            $observations[] = 'Active AI Adoption: Practical AI usage is already underway; focus can expand to systematising high-value multi-step automations.';
        }

        // AI Governance observation (assessed separately)
        if ($scoreAiRisk <= 2) {
            $observations[] = 'AI Risk & Data Governance: No formal AI governance or corporate data safety policy is active. Establishing an Acceptable AI Use Policy is essential to prevent proprietary data or client information from leaking into public training models.';
        } else {
            $observations[] = 'Governed AI Practice: Sound data protection guardrails and risk evaluation practices are established, supporting compliant AI scalability under UK GDPR.';
        }

        // Personalised recommended next steps based on selected challenges & responses
        $recommendedNextSteps = [];
        $challenges = $responses['challenges'] ?? [];
        if (is_string($challenges)) {
            $challenges = [$challenges];
        }
        $primaryChal = $responses['primary_challenge'] ?? '';
        if ($primaryChal && !in_array($primaryChal, $challenges)) {
            $challenges[] = $primaryChal;
        }

        $allChalStr = strtolower(implode(' ', $challenges));

        if (str_contains($allChalStr, 'manual')) {
            $recommendedNextSteps[] = 'Process Audit & SOP Systematisation: Map the top 3 manual administrative bottlenecks to calculate immediate capacity returns.';
        }
        if (str_contains($allChalStr, 'disconnect') || str_contains($allChalStr, 'silo')) {
            $recommendedNextSteps[] = 'Unified API Integration Architecture: Deploy automated webhooks and secure API bridges between your CRM, accounting, and operations tools.';
        }
        if (str_contains($allChalStr, 'report') || str_contains($allChalStr, 'visib')) {
            $recommendedNextSteps[] = 'Executive Dashboard & Single Source of Truth: Consolidate scattered spreadsheets into an automated, real-time management dashboard.';
        }
        if (str_contains($allChalStr, 'ai')) {
            $recommendedNextSteps[] = 'Pragmatic AI Opportunity Diagnostic: Run a 45-minute use-case prioritization session to separate high-ROI AI solutions from vanity tech.';
        }
        if (str_contains($allChalStr, 'cost')) {
            $recommendedNextSteps[] = 'Software Stack & Vendor Rationalisation: Audit existing subscriptions and unused licenses to lower operational software spend by 15–25%.';
        }
        if (str_contains($allChalStr, 'strategy') || str_contains($allChalStr, 'roadmap') || empty($recommendedNextSteps)) {
            $recommendedNextSteps[] = '12-Month Technology & Automation Roadmap: Establish a structured, quarterly IT roadmap aligned with your commercial growth goals.';
        }

        $recommendedNextSteps[] = 'Complimentary Advisory Review: Discuss your specific results and priority actions on a 30-minute discovery call with The Nexteck engineering team.';

        return [
            'score'                => $scorePercent,
            'maturity_level'       => $maturity,
            'badge_color'          => $badgeColor,
            'summary'              => $summary,
            'operational_score'    => $opScorePercent,
            'ai_readiness_score'   => $aiCombinedPercent,
            'ai_usage_score'       => $aiUsagePercent,
            'ai_governance_score'  => $aiGovPercent,
            'methodology_note'     => 'Weighted index evaluating Operational Efficiency (60%), Practical AI Adoption (25%), and Data Privacy & Governance (15%).',
            'observations'         => $observations,
            'recommended_steps'    => $recommendedNextSteps,
            'suggested_services'   => [
                'Nexteck 21-Day SME IT & AI Strategy Audit',
                'Custom API & Systems Integration Bridge',
                'Pragmatic AI Readiness & Data Governance Programme',
            ],
        ];
    }

    /**
     * Helper to safely map answer strings to points with fuzzy substring fallback.
     */
    protected static function mapScoreValue(array $map, ?string $value, int $default): int
    {
        if ($value === null || trim($value) === '') {
            return $default;
        }
        $val = trim($value);
        if (isset($map[$val])) {
            return $map[$val];
        }
        foreach ($map as $key => $points) {
            if (strcasecmp($key, $val) === 0 || stripos($val, $key) !== false || stripos($key, $val) !== false) {
                return $points;
            }
        }
        return $default;
    }

    /**
     * Ensure table exists on server.
     */
    public static function ensureTableExists(): void
    {
        if (!Schema::hasTable('assessment_leads')) {
            Schema::create('assessment_leads', function (Blueprint $table) {
                $table->id();
                $table->string('full_name');
                $table->string('email');
                $table->string('company');
                $table->string('phone')->nullable();
                $table->string('industry')->nullable();
                $table->string('company_size')->nullable();
                $table->string('primary_challenge')->nullable();
                $table->text('additional_notes')->nullable();
                $table->json('responses')->nullable();
                $table->integer('score')->default(0);
                $table->string('maturity_level')->default('Emerging');
                $table->json('calculator_inputs')->nullable();
                $table->json('calculator_results')->nullable();
                $table->string('status')->default('New');
                $table->text('admin_notes')->nullable();
                $table->boolean('consultation_requested')->default(false);
                $table->string('ip_address', 64)->nullable();
                $table->text('user_agent')->nullable();
                $table->string('session_id', 128)->nullable();
                $table->timestamps();
            });
        }
    }
}
