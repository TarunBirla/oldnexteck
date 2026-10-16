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
     * Deterministic scoring calculation based on documented transparent rules.
     */
    public static function calculateScore(array $responses): array
    {
        // 1. Operational Efficiency Scoring (4 questions, raw 1..5)
        $mapOperational = [
            'Not at all' => 5, // For routine manual work, less manual = higher score
            'Slightly'   => 4,
            'Partially'  => 3,
            'Mostly'     => 2,
            'Fully'      => 1,
        ];
        $mapPositive = [
            'Fully'      => 5,
            'Mostly'     => 4,
            'Partially'  => 3,
            'Slightly'   => 2,
            'Not at all' => 1,
        ];

        // Q1: Routine work manual (inverted)
        $qManual = $responses['q_manual_work'] ?? 'Partially';
        $scoreManual = $mapOperational[$qManual] ?? 3;

        // Q2: Systems integration
        $qIntegration = $responses['q_systems_integration'] ?? 'Partially';
        $scoreIntegration = $mapPositive[$qIntegration] ?? 3;

        // Q3: Reports & visibility
        $qReports = $responses['q_reports_visibility'] ?? 'Partially';
        $scoreReports = $mapPositive[$qReports] ?? 3;

        // Q4: Technology roadmap
        $qRoadmap = $responses['q_tech_roadmap'] ?? 'Partially';
        $scoreRoadmap = $mapPositive[$qRoadmap] ?? 3;

        $operationalRaw = $scoreManual + $scoreIntegration + $scoreReports + $scoreRoadmap; // 4 to 20

        // 2. AI Readiness Scoring (3 questions, raw 1..4)
        $mapAi = [
            'Already implemented' => 4,
            'Piloting'            => 3,
            'Exploring'           => 2,
            'Not yet'             => 1,
        ];

        $qAiUse = $responses['q_ai_current_use'] ?? 'Exploring';
        $scoreAiUse = $mapAi[$qAiUse] ?? 2;

        $qAiOpp = $responses['q_ai_opportunities'] ?? 'Exploring';
        $scoreAiOpp = $mapAi[$qAiOpp] ?? 2;

        $qAiRisk = $responses['q_ai_risk_privacy'] ?? 'Not yet';
        $scoreAiRisk = $mapAi[$qAiRisk] ?? 1;

        $aiRaw = $scoreAiUse + $scoreAiOpp + $scoreAiRisk; // 3 to 12

        // Total points: min 7, max 32
        $totalRaw = $operationalRaw + $aiRaw;
        $scorePercent = (int) round((($totalRaw - 7) / (32 - 7)) * 100);
        $scorePercent = max(5, min(100, $scorePercent));

        // Maturity Tier
        if ($scorePercent < 40) {
            $maturity = 'Emerging';
            $badgeColor = '#DC2626';
            $summary = 'Significant manual dependencies identified across core workflows with high immediate potential for workflow automation.';
        } elseif ($scorePercent < 65) {
            $maturity = 'Developing';
            $badgeColor = '#D97706';
            $summary = 'Foundational digital tools are in place, but systems remain fragmented. Priority is unified system integration and eliminating data re-keying.';
        } elseif ($scorePercent < 85) {
            $maturity = 'Strategic';
            $badgeColor = '#2563EB';
            $summary = 'Structured IT stack with good operational visibility. Prime candidate for pragmatic AI copilots, automated triage, and API bridges.';
        } else {
            $maturity = 'Optimized';
            $badgeColor = '#059669';
            $summary = 'High technology maturity with established roadmap. Poised for advanced predictive automation and bespoke competitive differentiators.';
        }

        // Tailored insights
        $observations = [];
        if ($scoreManual <= 2) {
            $observations[] = 'Manual tasks occupy disproportionate leadership time; standard operating procedures (SOPs) need systematization.';
        } else {
            $observations[] = 'Routine operational tasks demonstrate manageable manual overhead.';
        }

        if ($scoreIntegration <= 2) {
            $observations[] = 'Software silos and disparate spreadsheets are creating avoidable operational friction.';
        } else {
            $observations[] = 'System interoperability is developing well; focus can shift to automation triggers.';
        }

        if ($scoreAiUse <= 2) {
            $observations[] = 'AI readiness is in exploratory phase; initial focus should be on clean data hygiene before tool adoption.';
        } else {
            $observations[] = 'AI experimentation is underway; robust data privacy governance is the next critical milestone.';
        }

        $recommendedNextSteps = [
            'Conduct a 45-minute Nexteck Client Diagnostic to map your top 3 friction points.',
            'Establish an AI & IT Opportunity Log to separate high-impact automations from vanity tech.',
            'Review vendor consolidation options to reduce recurring subscription overhead.',
        ];

        return [
            'score'                => $scorePercent,
            'maturity_level'       => $maturity,
            'badge_color'          => $badgeColor,
            'summary'              => $summary,
            'operational_score'    => (int) round(($operationalRaw / 20) * 100),
            'ai_readiness_score'   => (int) round(($aiRaw / 12) * 100),
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
