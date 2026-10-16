@extends('admin.layouts.app')

@section('title', 'Conversion & Funnel Analytics')
@section('page_header', 'Engagement Funnel & Conversion Analytics')

@section('content')
<div style="margin-bottom:1.5rem;">
    <h2 style="font-size:1.25rem; font-weight:700; color:var(--text);">Engagement Funnel Overview</h2>
    <p style="font-size:0.88rem; color:var(--muted); margin-top:0.2rem;">Detailed metrics on welcome popup interactions, health check drop-off, calculator usage, and consultation conversions.</p>
</div>

<!-- Primary Funnel KPI Cards -->
<div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(220px, 1fr)); gap:1.2rem; margin-bottom:1.5rem;">
    <div class="card" style="padding:1.3rem; margin-bottom:0; border-top:4px solid #3B82F6;">
        <span style="font-size:0.75rem; color:var(--muted); text-transform:uppercase; font-weight:700; letter-spacing:0.05em;">Popup Impressions</span>
        <div style="font-size:1.8rem; font-weight:700; color:var(--text); margin-top:0.3rem;">{{ number_format($popupViews) }}</div>
        <div style="font-size:0.8rem; color:var(--muted); margin-top:0.3rem;">
            Clicks: <strong>{{ number_format($popupClicks) }}</strong> (CTR: <strong style="color:#2563EB;">{{ $popupCtr }}%</strong>)
        </div>
    </div>

    <div class="card" style="padding:1.3rem; margin-bottom:0; border-top:4px solid #8B5CF6;">
        <span style="font-size:0.75rem; color:var(--muted); text-transform:uppercase; font-weight:700; letter-spacing:0.05em;">Assessments Started</span>
        <div style="font-size:1.8rem; font-weight:700; color:var(--text); margin-top:0.3rem;">{{ number_format($assessmentStarts) }}</div>
        <div style="font-size:0.8rem; color:var(--muted); margin-top:0.3rem;">
            Completed: <strong>{{ number_format($assessmentCompletions) }}</strong> (<strong style="color:#7C3AED;">{{ $assessmentCompletionRate }}%</strong> finish rate)
        </div>
    </div>

    <div class="card" style="padding:1.3rem; margin-bottom:0; border-top:4px solid #F59E0B;">
        <span style="font-size:0.75rem; color:var(--muted); text-transform:uppercase; font-weight:700; letter-spacing:0.05em;">Calculator Runs</span>
        <div style="font-size:1.8rem; font-weight:700; color:#D97706; margin-top:0.3rem;">{{ number_format($calcUsages) }}</div>
        <div style="font-size:0.8rem; color:var(--muted); margin-top:0.3rem;">
            Estimated savings interactions
        </div>
    </div>

    <div class="card" style="padding:1.3rem; margin-bottom:0; border-top:4px solid #10B981;">
        <span style="font-size:0.75rem; color:var(--muted); text-transform:uppercase; font-weight:700; letter-spacing:0.05em;">Consultation Conversions</span>
        <div style="font-size:1.8rem; font-weight:700; color:#059669; margin-top:0.3rem;">{{ number_format($consultations) }}</div>
        <div style="font-size:0.8rem; color:var(--muted); margin-top:0.3rem;">
            Overall Conversion Rate: <strong style="color:#059669;">{{ $overallConversionRate }}%</strong>
        </div>
    </div>
</div>

<!-- Funnel Visualization Step-by-Step -->
<div class="card" style="margin-bottom:1.5rem;">
    <h3 style="font-size:1.15rem; font-weight:700; margin-bottom:1.2rem; color:var(--text);">Step-by-Step Funnel Progression</h3>

    <div style="display:flex; flex-direction:column; gap:1rem;">
        <!-- Step 1: Popup Impression -->
        <div>
            <div style="display:flex; justify-content:space-between; font-size:0.88rem; font-weight:600; margin-bottom:0.3rem;">
                <span>1. Welcome Popup Displayed</span>
                <span>{{ number_format($popupViews) }} visitors (100%)</span>
            </div>
            <div style="height:24px; background:#F1F5F9; border-radius:6px; overflow:hidden;">
                <div style="height:100%; width:100%; background:#94A3B8; border-radius:6px;"></div>
            </div>
        </div>

        <!-- Step 2: Assessment Started -->
        @php
            $startWidth = $popupViews > 0 ? min(100, round(($assessmentStarts / max(1, $popupViews)) * 100)) : ($assessmentStarts > 0 ? 100 : 0);
        @endphp
        <div>
            <div style="display:flex; justify-content:space-between; font-size:0.88rem; font-weight:600; margin-bottom:0.3rem;">
                <span>2. Assessment Questionnaire Initiated</span>
                <span>{{ number_format($assessmentStarts) }} visitors ({{ $startWidth }}%)</span>
            </div>
            <div style="height:24px; background:#F1F5F9; border-radius:6px; overflow:hidden;">
                <div style="height:100%; width:{{ max(4, $startWidth) }}%; background:#3B82F6; border-radius:6px;"></div>
            </div>
        </div>

        <!-- Step 3: Assessment Completed -->
        @php
            $compWidth = $popupViews > 0 ? min(100, round(($assessmentCompletions / max(1, $popupViews)) * 100)) : ($assessmentCompletions > 0 ? 100 : 0);
        @endphp
        <div>
            <div style="display:flex; justify-content:space-between; font-size:0.88rem; font-weight:600; margin-bottom:0.3rem;">
                <span>3. Health Check Assessment Completed &amp; Lead Captured</span>
                <span>{{ number_format($assessmentCompletions) }} leads ({{ $compWidth }}%)</span>
            </div>
            <div style="height:24px; background:#F1F5F9; border-radius:6px; overflow:hidden;">
                <div style="height:100%; width:{{ max(4, $compWidth) }}%; background:#8B5CF6; border-radius:6px;"></div>
            </div>
        </div>

        <!-- Step 4: Consultation Requested -->
        @php
            $convWidth = $popupViews > 0 ? min(100, round(($consultations / max(1, $popupViews)) * 100)) : ($consultations > 0 ? 100 : 0);
        @endphp
        <div>
            <div style="display:flex; justify-content:space-between; font-size:0.88rem; font-weight:600; margin-bottom:0.3rem;">
                <span>4. High-Intent Discovery Call Requested</span>
                <span style="color:#059669;">{{ number_format($consultations) }} calls ({{ $convWidth }}%)</span>
            </div>
            <div style="height:24px; background:#F1F5F9; border-radius:6px; overflow:hidden;">
                <div style="height:100%; width:{{ max(4, $convWidth) }}%; background:#10B981; border-radius:6px;"></div>
            </div>
        </div>
    </div>
</div>

<div style="display:grid; grid-template-columns:1fr 1fr; gap:1.5rem;">
    <!-- Maturity Tier Breakdown -->
    <div class="card">
        <h3 style="font-size:1.1rem; font-weight:700; margin-bottom:1.2rem; color:var(--text);">Technology Maturity Distribution</h3>
        <div style="display:flex; flex-direction:column; gap:0.8rem;">
            @php
                $tiers = [
                    'Emerging'   => ['color' => '#EF4444', 'desc' => 'High manual friction, immediate automation ROI'],
                    'Developing' => ['color' => '#F59E0B', 'desc' => 'Fragmented systems, integration priority'],
                    'Strategic'  => ['color' => '#3B82F6', 'desc' => 'Solid IT base, ready for AI pilot workflow'],
                    'Optimized'  => ['color' => '#10B981', 'desc' => 'Advanced, bespoke intelligence candidate'],
                ];
                $totalTierLeads = max(1, array_sum($maturityBreakdown));
            @endphp

            @foreach($tiers as $tierName => $tierMeta)
                @php
                    $count = $maturityBreakdown[$tierName] ?? 0;
                    $pct = round(($count / $totalTierLeads) * 100);
                @endphp
                <div style="border:1px solid var(--border); border-radius:8px; padding:0.9rem;">
                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <strong style="color:{{ $tierMeta['color'] }}; font-size:0.95rem;">{{ $tierName }}</strong>
                        <span style="font-weight:700; font-size:0.95rem;">{{ $count }} ({{ $pct }}%)</span>
                    </div>
                    <div style="font-size:0.78rem; color:var(--muted); margin-top:0.2rem;">{{ $tierMeta['desc'] }}</div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Recent 7 Days Activity Table -->
    <div class="card">
        <h3 style="font-size:1.1rem; font-weight:700; margin-bottom:1.2rem; color:var(--text);">Recent 7 Days Engagement Trend</h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Completed Assessments</th>
                        <th>Total Tracked Events</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recentDays as $day)
                        <tr>
                            <td><strong>{{ $day['label'] }}</strong></td>
                            <td><span class="badge badge-success">{{ $day['completions'] }}</span></td>
                            <td>{{ $day['events'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
