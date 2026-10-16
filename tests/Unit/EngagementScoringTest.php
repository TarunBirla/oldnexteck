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
}
