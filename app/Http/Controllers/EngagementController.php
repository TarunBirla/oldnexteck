<?php

namespace App\Http\Controllers;

use App\Models\AssessmentLead;
use App\Models\EngagementEvent;
use App\Models\EngagementSetting;
use App\Models\LeadRequest;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EngagementController extends Controller
{
    /**
     * Return public settings for engagement components.
     */
    public function getSettings()
    {
        $settings = EngagementSetting::getAllSettings();
        return response()->json([
            'success' => true,
            'settings' => $settings,
        ]);
    }

    /**
     * Record an engagement event safely.
     */
    public function trackEvent(Request $request)
    {
        $validated = $request->validate([
            'event_name' => 'required|string|max:100',
            'session_id' => 'nullable|string|max:128',
            'page_path'  => 'nullable|string|max:255',
            'meta'       => 'nullable|array',
        ]);

        EngagementEvent::record(
            $validated['event_name'],
            $validated['session_id'] ?? null,
            $validated['page_path'] ?? null,
            $validated['meta'] ?? []
        );

        return response()->json(['success' => true]);
    }

    /**
     * Handle submission of Business Technology Health Check.
     */
    public function submitAssessment(Request $request)
    {
        $validated = $request->validate([
            'full_name'          => 'required|string|max:255',
            'email'              => 'required|email|max:255',
            'company'            => 'required|string|max:255',
            'phone'              => 'nullable|string|max:50',
            'industry'           => 'nullable|string|max:255',
            'company_size'       => 'nullable|string|max:100',
            'primary_challenge'  => 'nullable|string|max:255',
            'additional_notes'   => 'nullable|string|max:2000',
            'responses'          => 'nullable|array',
            'calculator_inputs'  => 'nullable|array',
            'calculator_results' => 'nullable|array',
            'session_id'         => 'nullable|string|max:128',
        ]);

        $responses = $validated['responses'] ?? [];
        $scoring = AssessmentLead::calculateScore($responses);

        AssessmentLead::ensureTableExists();

        $lead = AssessmentLead::create([
            'full_name'          => $validated['full_name'],
            'email'              => $validated['email'],
            'company'            => $validated['company'],
            'phone'              => $validated['phone'] ?? null,
            'industry'           => $validated['industry'] ?? null,
            'company_size'       => $validated['company_size'] ?? null,
            'primary_challenge'  => $validated['primary_challenge'] ?? null,
            'additional_notes'   => $validated['additional_notes'] ?? null,
            'responses'          => $responses,
            'score'              => $scoring['score'],
            'maturity_level'     => $scoring['maturity_level'],
            'calculator_inputs'  => $validated['calculator_inputs'] ?? null,
            'calculator_results' => $validated['calculator_results'] ?? null,
            'status'             => 'New',
            'ip_address'         => $request->ip(),
            'user_agent'         => $request->userAgent(),
            'session_id'         => $validated['session_id'] ?? session()->getId(),
        ]);

        // Track in Visitor analytics
        try {
            Visitor::recordFormSubmission($request, 'Technology Health Check Assessment', [
                'name'     => $lead->full_name,
                'email'    => $lead->email,
                'company'  => $lead->company,
                'score'    => $scoring['score'],
                'maturity' => $scoring['maturity_level'],
            ]);
        } catch (\Throwable $e) {
            Log::warning('Failed recording visitor assessment submission: ' . $e->getMessage());
        }

        // Record funnel completion event
        EngagementEvent::record(
            'assessment_completed',
            $validated['session_id'] ?? null,
            $request->path(),
            [
                'lead_id'  => $lead->id,
                'score'    => $scoring['score'],
                'maturity' => $scoring['maturity_level'],
                'industry' => $lead->industry,
            ]
        );

        return response()->json([
            'success'            => true,
            'lead_id'            => $lead->id,
            'score'              => $scoring['score'],
            'maturity_level'     => $scoring['maturity_level'],
            'badge_color'        => $scoring['badge_color'],
            'summary'            => $scoring['summary'],
            'operational_score'  => $scoring['operational_score'],
            'ai_readiness_score' => $scoring['ai_readiness_score'],
            'observations'       => $scoring['observations'],
            'recommended_steps'  => $scoring['recommended_steps'],
            'suggested_services' => $scoring['suggested_services'],
        ]);
    }

    /**
     * Convert assessment or quick action to consultation booking.
     */
    public function requestConsultation(Request $request)
    {
        $validated = $request->validate([
            'lead_id'      => 'nullable|integer',
            'full_name'    => 'required|string|max:255',
            'work_email'   => 'required|email|max:255',
            'company'      => 'required|string|max:255',
            'phone'        => 'nullable|string|max:50',
            'team_size'    => 'nullable|string|max:100',
            'pain_point'   => 'nullable|string|max:1000',
            'source'       => 'nullable|string|max:100',
            'session_id'   => 'nullable|string|max:128',
        ]);

        $leadId = $validated['lead_id'] ?? null;
        if ($leadId) {
            try {
                $assessmentLead = AssessmentLead::find($leadId);
                if ($assessmentLead) {
                    $assessmentLead->consultation_requested = true;
                    if ($assessmentLead->status === 'New') {
                        $assessmentLead->status = 'Qualified';
                    }
                    $assessmentLead->save();
                }
            } catch (\Throwable $e) {
                Log::warning('Could not mark assessment lead as consultation requested: ' . $e->getMessage());
            }
        }

        // Sync into LeadRequest for existing admin lead workflow without duplication
        try {
            $painPoint = $validated['pain_point'] ?? 'Requested from Smart Engagement Assessment';
            if (!empty($validated['source'])) {
                $painPoint = "[Source: {$validated['source']}] " . $painPoint;
            }

            LeadRequest::create([
                'full_name'  => $validated['full_name'],
                'work_email' => $validated['work_email'],
                'company'    => $validated['company'],
                'team_size'  => $validated['team_size'] ?? '11–50',
                'pain_point' => $painPoint,
            ]);
        } catch (\Throwable $e) {
            Log::warning('Error creating LeadRequest: ' . $e->getMessage());
        }

        // Record event
        EngagementEvent::record(
            'consultation_requested',
            $validated['session_id'] ?? null,
            $request->path(),
            [
                'lead_id' => $leadId,
                'email'   => $validated['work_email'],
                'source'  => $validated['source'] ?? 'engagement_modal',
            ]
        );

        return response()->json([
            'success' => true,
            'message' => 'Your consultation request has been received. Our advisory team will contact you within one business day.',
        ]);
    }

    /**
     * Dedicated Standalone Health Check & AI Readiness Page.
     */
    public function showAssessmentPage()
    {
        $settings = EngagementSetting::getAllSettings();
        return view('pages.assessment', compact('settings'));
    }

    /**
     * Dedicated Standalone Automation Savings Calculator Page.
     */
    public function showCalculatorPage()
    {
        $settings = EngagementSetting::getAllSettings();
        return view('pages.calculator', compact('settings'));
    }
}
