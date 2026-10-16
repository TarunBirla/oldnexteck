<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\AssessmentLead;

class EngagementScoringTest extends TestCase
{
    /**
     * Test deterministic score calculation for minimal maturity.
     */
    public function test_deterministic_scoring_for_minimal_maturity()
    {
        $responses = [
            'q_manual_work'          => 'Fully', // 1 pt
            'q_systems_integration'  => 'Not at all', // 1 pt
            'q_reports_visibility'   => 'Not at all', // 1 pt
            'q_tech_roadmap'         => 'Not at all', // 1 pt
            'q_ai_current_use'       => 'Not yet', // 1 pt
            'q_ai_opportunities'     => 'Not yet', // 1 pt
            'q_ai_risk_privacy'      => 'Not yet', // 1 pt
        ];

        $result = AssessmentLead::calculateScore($responses);

        $this->assertEquals(5, $result['score'], 'Score should be at minimum bound');
        $this->assertEquals('Emerging', $result['maturity_level']);
        $this->assertNotEmpty($result['observations']);
        $this->assertNotEmpty($result['recommended_steps']);
    }

    /**
     * Test deterministic score calculation for optimal maturity.
     */
    public function test_deterministic_scoring_for_optimal_maturity()
    {
        $responses = [
            'q_manual_work'          => 'Not at all', // 5 pts
            'q_systems_integration'  => 'Fully', // 5 pts
            'q_reports_visibility'   => 'Fully', // 5 pts
            'q_tech_roadmap'         => 'Fully', // 5 pts
            'q_ai_current_use'       => 'Already implemented', // 4 pts
            'q_ai_opportunities'     => 'Already implemented', // 4 pts
            'q_ai_risk_privacy'      => 'Already implemented', // 4 pts
        ];

        $result = AssessmentLead::calculateScore($responses);

        $this->assertEquals(100, $result['score']);
        $this->assertEquals('Optimized', $result['maturity_level']);
    }

    /**
     * Test deterministic score calculation for developing maturity.
     */
    public function test_deterministic_scoring_for_developing_maturity()
    {
        $responses = [
            'q_manual_work'          => 'Partially', // 3 pts
            'q_systems_integration'  => 'Partially', // 3 pts
            'q_reports_visibility'   => 'Partially', // 3 pts
            'q_tech_roadmap'         => 'Partially', // 3 pts
            'q_ai_current_use'       => 'Exploring', // 2 pts
            'q_ai_opportunities'     => 'Exploring', // 2 pts
            'q_ai_risk_privacy'      => 'Not yet', // 1 pt
        ];

        $result = AssessmentLead::calculateScore($responses);

        $this->assertGreaterThanOrEqual(40, $result['score']);
        $this->assertLessThan(65, $result['score']);
        $this->assertEquals('Developing', $result['maturity_level']);
    }

    /**
     * Test automation calculator formulas.
     */
    public function test_automation_calculator_math()
    {
        $employees = 5;
        $hoursPerWeek = 8;
        $rate = 32;
        $cost = 2950;
        $pct = 40;

        $weeklyHoursSaved = round($employees * $hoursPerWeek * ($pct / 100));
        $annualHoursSaved = round($weeklyHoursSaved * 48);
        $annualLabourVal = round($annualHoursSaved * $rate);
        $netFirstYear = max(0, $annualLabourVal - $cost);
        $paybackMonths = round($cost / ($annualLabourVal / 12), 1);

        $this->assertEquals(16, $weeklyHoursSaved);
        $this->assertEquals(768, $annualHoursSaved);
        $this->assertEquals(24576, $annualLabourVal);
        $this->assertEquals(21626, $netFirstYear);
        $this->assertEquals(1.4, $paybackMonths);
    }

    /**
     * Test that AI usage and AI governance are scored separately.
     */
    public function test_ai_usage_and_governance_are_assessed_separately()
    {
        // High AI usage, but no governance
        $responses = [
            'q_manual_work'         => 'Partially',
            'q_systems_integration' => 'Partially',
            'q_reports_visibility'  => 'Partially',
            'q_tech_roadmap'        => 'Partially',
            'q_ai_current_use'      => 'Already implemented', // high usage (4/4)
            'q_ai_opportunities'    => 'Already implemented', // high opportunities (4/4)
            'q_ai_risk_privacy'     => 'Not yet',             // low governance (1/4)
        ];

        $result = AssessmentLead::calculateScore($responses);

        $this->assertArrayHasKey('ai_usage_score', $result);
        $this->assertArrayHasKey('ai_governance_score', $result);
        $this->assertEquals(100, $result['ai_usage_score'], 'AI usage score should be 100%');
        $this->assertEquals(25, $result['ai_governance_score'], 'AI governance score should reflect 1 pt (25%)');

        // Check that observations specifically highlight the governance gap
        $obsText = implode(' ', $result['observations']);
        $this->assertStringContainsString('AI Risk & Data Governance', $obsText);
    }

    /**
     * Test that "Not sure" choices are handled with neutral baseline scoring.
     */
    public function test_not_sure_responses_handled_neutrally()
    {
        $responses = [
            'q_manual_work'         => 'Not sure',
            'q_systems_integration' => 'Not sure',
            'q_reports_visibility'  => 'Not sure',
            'q_tech_roadmap'        => 'Not sure',
            'q_ai_current_use'      => 'Not sure',
            'q_ai_opportunities'    => 'Not sure',
            'q_ai_risk_privacy'     => 'Not sure',
        ];

        $result = AssessmentLead::calculateScore($responses);

        $this->assertGreaterThan(20, $result['score']);
        $this->assertLessThan(75, $result['score']);
        $this->assertEquals('Developing', $result['maturity_level']);
    }

    /**
     * Test tailored recommendations reflect selected business challenges.
     */
    public function test_tailored_recommendations_reflect_selected_challenges()
    {
        $responses = [
            'q_manual_work'          => 'Mostly',
            'q_systems_integration'  => 'Slightly',
            'q_reports_visibility'   => 'Partially',
            'q_tech_roadmap'         => 'Partially',
            'challenges'             => ['Too many manual processes', 'Disconnected systems and tools'],
            'primary_challenge'      => 'Disconnected systems and tools',
        ];

        $result = AssessmentLead::calculateScore($responses);

        $recText = implode(' ', $result['recommended_steps']);
        $this->assertStringContainsString('Process Audit', $recText);
        $this->assertStringContainsString('API Integration', $recText);
    }

    /**
     * Test identical responses always produce identical results (deterministic).
     */
    public function test_identical_responses_always_produce_identical_results()
    {
        $responses = [
            'q_manual_work'          => 'Partially',
            'q_systems_integration'  => 'Mostly',
            'q_reports_visibility'   => 'Slightly',
            'q_tech_roadmap'         => 'Partially',
            'q_ai_current_use'       => 'Exploring',
            'q_ai_opportunities'     => 'Piloting',
            'q_ai_risk_privacy'      => 'Basic staff guidelines',
        ];

        $run1 = AssessmentLead::calculateScore($responses);
        $run2 = AssessmentLead::calculateScore($responses);

        $this->assertEquals($run1, $run2);
    }
}
