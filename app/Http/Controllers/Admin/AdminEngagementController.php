<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AssessmentLead;
use App\Models\EngagementEvent;
use App\Models\EngagementSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AdminEngagementController extends Controller
{
    /**
     * Display assessment leads with search and filtering.
     */
    public function index(Request $request)
    {
        AssessmentLead::ensureTableExists();

        $query = AssessmentLead::query();

        // Search by name, email, or company
        if ($request->filled('search')) {
            $s = trim($request->search);
            $query->where(function ($q) use ($s) {
                $q->where('full_name', 'like', "%{$s}%")
                  ->orWhere('email', 'like', "%{$s}%")
                  ->orWhere('company', 'like', "%{$s}%");
            });
        }

        // Filter by status
        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        // Filter by maturity level
        if ($request->filled('maturity') && $request->maturity !== 'all') {
            $query->where('maturity_level', $request->maturity);
        }

        // Filter by industry
        if ($request->filled('industry') && $request->industry !== 'all') {
            $query->where('industry', $request->industry);
        }

        $leads = $query->orderByDesc('id')->paginate(15)->withQueryString();

        // Distinct industries for filter dropdown
        $industries = AssessmentLead::whereNotNull('industry')
            ->where('industry', '!=', '')
            ->distinct()
            ->pluck('industry');

        // Summary counts
        $counts = [
            'total'       => AssessmentLead::count(),
            'new'         => AssessmentLead::where('status', 'New')->count(),
            'contacted'   => AssessmentLead::where('status', 'Contacted')->count(),
            'qualified'   => AssessmentLead::where('status', 'Qualified')->count(),
            'closed'      => AssessmentLead::where('status', 'Closed')->count(),
            'avg_score'   => round(AssessmentLead::avg('score') ?? 0),
        ];

        return view('admin.engagement.leads_index', compact('leads', 'industries', 'counts'));
    }

    /**
     * Show lead details modal/view.
     */
    public function show($id)
    {
        AssessmentLead::ensureTableExists();
        $lead = AssessmentLead::findOrFail($id);

        if (request()->wantsJson()) {
            return response()->json([
                'success' => true,
                'lead'    => $lead,
            ]);
        }

        return view('admin.engagement.leads_show', compact('lead'));
    }

    /**
     * Update lead status and admin notes.
     */
    public function update(Request $request, $id)
    {
        AssessmentLead::ensureTableExists();
        $lead = AssessmentLead::findOrFail($id);

        $validated = $request->validate([
            'status'      => 'required|string|in:New,Contacted,Qualified,Closed',
            'admin_notes' => 'nullable|string|max:5000',
        ]);

        $lead->status = $validated['status'];
        $lead->admin_notes = $validated['admin_notes'];
        $lead->save();

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Lead updated successfully.',
            ]);
        }

        return redirect()->back()->with('success', 'Lead record updated successfully.');
    }

    /**
     * Delete an assessment lead.
     */
    public function destroy($id)
    {
        AssessmentLead::ensureTableExists();
        $lead = AssessmentLead::findOrFail($id);
        $lead->delete();

        return redirect()->route('admin.engagement.leads')->with('success', 'Lead record removed.');
    }

    /**
     * Export leads to CSV.
     */
    public function exportCsv(Request $request)
    {
        AssessmentLead::ensureTableExists();

        $query = AssessmentLead::query();

        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }
        if ($request->filled('maturity') && $request->maturity !== 'all') {
            $query->where('maturity_level', $request->maturity);
        }

        $leads = $query->orderByDesc('id')->get();

        $filename = 'nexteck_assessment_leads_' . date('Y-m-d_H-i') . '.csv';

        $headers = [
            'Content-Type'        => 'text/csv; charset=UTF-8',
            'Content-Disposition' => "attachment; filename=\"{$filename}\"",
        ];

        $callback = function () use ($leads) {
            $file = fopen('php://output', 'w');
            fputcsv($file, [
                'ID', 'Date', 'Full Name', 'Email', 'Company', 'Phone',
                'Industry', 'Company Size', 'Primary Challenge', 'Score',
                'Maturity Level', 'Status', 'Consultation Requested', 'Admin Notes'
            ]);

            foreach ($leads as $l) {
                fputcsv($file, [
                    $l->id,
                    $l->created_at ? $l->created_at->format('Y-m-d H:i') : '',
                    $l->full_name,
                    $l->email,
                    $l->company,
                    $l->phone,
                    $l->industry,
                    $l->company_size,
                    $l->primary_challenge,
                    $l->score,
                    $l->maturity_level,
                    $l->status,
                    $l->consultation_requested ? 'Yes' : 'No',
                    $l->admin_notes,
                ]);
            }
            fclose($file);
        };

        return Response::stream($callback, 200, $headers);
    }

    /**
     * Engagement Settings Form.
     */
    public function settings()
    {
        EngagementSetting::ensureTableExists();
        $settings = EngagementSetting::getAllSettings();

        return view('admin.engagement.settings', compact('settings'));
    }

    /**
     * Update Engagement Settings.
     */
    public function updateSettings(Request $request)
    {
        EngagementSetting::ensureTableExists();

        $validated = $request->validate([
            'popup_enabled'         => 'nullable|string',
            'popup_delay_seconds'   => 'required|integer|min:1|max:120',
            'popup_frequency_days'  => 'required|integer|min:0|max:90',
            'popup_exit_intent'     => 'nullable|string',
            'popup_headline'        => 'required|string|max:255',
            'popup_description'     => 'required|string|max:500',
            'popup_primary_cta'     => 'required|string|max:100',
            'popup_secondary_cta'   => 'required|string|max:100',
            'popup_close_text'      => 'required|string|max:50',
            'popup_supporting_text' => 'nullable|string|max:255',
            'calculator_enabled'    => 'nullable|string',
            'widget_enabled'        => 'nullable|string',
        ]);

        $settingsToSave = [
            'popup_enabled'         => $request->has('popup_enabled') ? '1' : '0',
            'popup_delay_seconds'   => (string) $validated['popup_delay_seconds'],
            'popup_frequency_days'  => (string) $validated['popup_frequency_days'],
            'popup_exit_intent'     => $request->has('popup_exit_intent') ? '1' : '0',
            'popup_headline'        => $validated['popup_headline'],
            'popup_description'     => $validated['popup_description'],
            'popup_primary_cta'     => $validated['popup_primary_cta'],
            'popup_secondary_cta'   => $validated['popup_secondary_cta'],
            'popup_close_text'      => $validated['popup_close_text'],
            'popup_supporting_text' => $validated['popup_supporting_text'] ?? '',
            'calculator_enabled'    => $request->has('calculator_enabled') ? '1' : '0',
            'widget_enabled'        => $request->has('widget_enabled') ? '1' : '0',
        ];

        foreach ($settingsToSave as $k => $v) {
            EngagementSetting::set($k, $v);
        }

        return redirect()->back()->with('success', 'Engagement settings updated successfully.');
    }

    /**
     * Funnel Conversion and Engagement Analytics Dashboard.
     */
    public function analytics(Request $request)
    {
        EngagementEvent::ensureTableExists();
        AssessmentLead::ensureTableExists();

        $popupViews      = EngagementEvent::where('event_name', 'welcome_popup_viewed')->count();
        $popupClicks     = EngagementEvent::where('event_name', 'welcome_popup_clicked')->count();
        $popupDismissals = EngagementEvent::where('event_name', 'welcome_popup_dismissed')->count();
        $assessmentStarts = EngagementEvent::where('event_name', 'assessment_started')->count();
        $assessmentCompletions = EngagementEvent::where('event_name', 'assessment_completed')->count();
        $calcUsages      = EngagementEvent::where('event_name', 'calculator_used')->count();
        $consultations   = EngagementEvent::where('event_name', 'consultation_requested')->count();

        // Calculate Conversion Rates safely
        $popupCtr = $popupViews > 0 ? round(($popupClicks / $popupViews) * 100, 1) : 0;
        $assessmentCompletionRate = $assessmentStarts > 0 ? round(($assessmentCompletions / $assessmentStarts) * 100, 1) : ($assessmentCompletions > 0 ? 100 : 0);
        $overallConversionRate = ($popupViews + $assessmentStarts) > 0 ? round(($consultations / max(1, $popupViews + $assessmentStarts)) * 100, 1) : 0;

        // Maturity breakdown
        $maturityBreakdown = AssessmentLead::selectRaw('maturity_level, count(*) as count')
            ->groupBy('maturity_level')
            ->pluck('count', 'maturity_level')
            ->toArray();

        // Recent 7 days activity
        $recentDays = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = now()->subDays($i)->format('Y-m-d');
            $recentDays[] = [
                'label'       => now()->subDays($i)->format('d M'),
                'completions' => AssessmentLead::whereDate('created_at', $date)->count(),
                'events'      => EngagementEvent::whereDate('created_at', $date)->count(),
            ];
        }

        return view('admin.engagement.analytics', compact(
            'popupViews',
            'popupClicks',
            'popupDismissals',
            'popupCtr',
            'assessmentStarts',
            'assessmentCompletions',
            'assessmentCompletionRate',
            'calcUsages',
            'consultations',
            'overallConversionRate',
            'maturityBreakdown',
            'recentDays'
        ));
    }
}
