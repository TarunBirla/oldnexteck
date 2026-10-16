@extends('admin.layouts.app')

@section('title', 'Lead #' . $lead->id . ' — ' . $lead->full_name)
@section('page_header', 'Lead Details: ' . $lead->full_name)

@section('content')
<div style="margin-bottom:1.5rem;">
    <a href="{{ route('admin.engagement.leads') }}" class="btn-sm btn-secondary" style="border:1px solid var(--border); padding:0.5rem 0.9rem;">
        <i class="fa-solid fa-arrow-left"></i> Back to All Leads
    </a>
</div>

<div style="display:grid; grid-template-columns:2fr 1fr; gap:1.5rem; align-items:start;">
    <!-- Main Column: Responses & Scoring -->
    <div>
        <!-- Lead Header Card -->
        <div class="card" style="margin-bottom:1.5rem;">
            <div style="display:flex; justify-content:space-between; align-items:flex-start; flex-wrap:wrap; gap:1rem;">
                <div>
                    <span style="font-size:0.78rem; font-weight:700; color:var(--muted); text-transform:uppercase; letter-spacing:0.06em;">Lead Record #{{ $lead->id }}</span>
                    <h2 style="font-size:1.45rem; font-weight:700; color:var(--text); margin-top:0.2rem;">{{ $lead->full_name }}</h2>
                    <div style="font-size:0.95rem; color:var(--muted); margin-top:0.2rem;">
                        <strong>{{ $lead->company }}</strong> &bull; {{ $lead->industry ?: 'Sector not specified' }} &bull; {{ $lead->company_size ?: 'Size N/A' }}
                    </div>
                </div>
                <div>
                    @php
                        $badgeStyle = match($lead->maturity_level) {
                            'Optimized'  => 'background:#DCFCE7; color:#166534; font-size:0.95rem; padding:0.4rem 0.9rem;',
                            'Strategic'  => 'background:#DBEAFE; color:#1E40AF; font-size:0.95rem; padding:0.4rem 0.9rem;',
                            'Developing' => 'background:#FEF3C7; color:#92400E; font-size:0.95rem; padding:0.4rem 0.9rem;',
                            default      => 'background:#FEE2E2; color:#991B1B; font-size:0.95rem; padding:0.4rem 0.9rem;'
                        };
                    @endphp
                    <span class="badge" style="{{ $badgeStyle }}">
                        {{ $lead->score }}% &bull; {{ $lead->maturity_level }} Maturity
                    </span>
                </div>
            </div>

            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(180px, 1fr)); gap:1rem; margin-top:1.5rem; padding-top:1.2rem; border-top:1px solid var(--border);">
                <div>
                    <span style="font-size:0.75rem; color:var(--muted); text-transform:uppercase; font-weight:700;">Email Address</span>
                    <div style="font-size:0.95rem; font-weight:600; margin-top:0.2rem;">
                        <a href="mailto:{{ $lead->email }}" style="color:var(--primary); text-decoration:none;">{{ $lead->email }}</a>
                    </div>
                </div>
                <div>
                    <span style="font-size:0.75rem; color:var(--muted); text-transform:uppercase; font-weight:700;">Phone Number</span>
                    <div style="font-size:0.95rem; font-weight:600; margin-top:0.2rem;">
                        @if($lead->phone)
                            <a href="tel:{{ $lead->phone }}" style="color:var(--text); text-decoration:none;">{{ $lead->phone }}</a>
                        @else
                            <span style="color:var(--muted);">Not provided</span>
                        @endif
                    </div>
                </div>
                <div>
                    <span style="font-size:0.75rem; color:var(--muted); text-transform:uppercase; font-weight:700;">Discovery Call</span>
                    <div style="font-size:0.95rem; font-weight:600; margin-top:0.2rem;">
                        @if($lead->consultation_requested)
                            <span style="color:#059669;"><i class="fa-solid fa-circle-check"></i> Requested</span>
                        @else
                            <span style="color:var(--muted);">Self-service assessment</span>
                        @endif
                    </div>
                </div>
                <div>
                    <span style="font-size:0.75rem; color:var(--muted); text-transform:uppercase; font-weight:700;">Submission Date</span>
                    <div style="font-size:0.95rem; font-weight:600; margin-top:0.2rem;">
                        {{ $lead->created_at ? $lead->created_at->format('d M Y, H:i') : '—' }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Diagnostic Questionnaire Answers -->
        <div class="card" style="margin-bottom:1.5rem;">
            <h3 style="font-size:1.15rem; font-weight:700; margin-bottom:1.2rem; color:var(--text); border-bottom:1px solid var(--border); padding-bottom:0.6rem;">
                <i class="fa-solid fa-clipboard-check" style="color:var(--primary); margin-right:0.4rem;"></i>
                Health Check Questionnaire Responses
            </h3>

            @php
                $resp = is_array($lead->responses) ? $lead->responses : [];
            @endphp

            <div style="display:grid; gap:1.2rem;">
                <div>
                    <span style="font-size:0.78rem; text-transform:uppercase; color:var(--muted); font-weight:700;">Primary Stated Challenge</span>
                    <p style="font-size:0.98rem; font-weight:600; color:var(--text); margin-top:0.2rem;">
                        {{ $lead->primary_challenge ?: ($resp['primary_challenge'] ?? 'Not specified') }}
                    </p>
                </div>

                <div style="background:#F8FAFC; border-radius:8px; padding:1.2rem; border:1px solid var(--border);">
                    <h4 style="font-size:0.9rem; font-weight:700; text-transform:uppercase; letter-spacing:0.04em; color:var(--muted); margin-bottom:0.8rem;">
                        Operational Efficiency
                    </h4>
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                        <div>
                            <span style="font-size:0.8rem; color:var(--muted); display:block;">Routine work still manual:</span>
                            <strong style="font-size:0.95rem; color:var(--text);">{{ $resp['q_manual_work'] ?? 'Not answered' }}</strong>
                        </div>
                        <div>
                            <span style="font-size:0.8rem; color:var(--muted); display:block;">Current systems integration:</span>
                            <strong style="font-size:0.95rem; color:var(--text);">{{ $resp['q_systems_integration'] ?? 'Not answered' }}</strong>
                        </div>
                        <div>
                            <span style="font-size:0.8rem; color:var(--muted); display:block;">Ease of accessing accurate reports:</span>
                            <strong style="font-size:0.95rem; color:var(--text);">{{ $resp['q_reports_visibility'] ?? 'Not answered' }}</strong>
                        </div>
                        <div>
                            <span style="font-size:0.8rem; color:var(--muted); display:block;">Clear technology roadmap:</span>
                            <strong style="font-size:0.95rem; color:var(--text);">{{ $resp['q_tech_roadmap'] ?? 'Not answered' }}</strong>
                        </div>
                    </div>
                </div>

                <div style="background:#F8FAFC; border-radius:8px; padding:1.2rem; border:1px solid var(--border);">
                    <h4 style="font-size:0.9rem; font-weight:700; text-transform:uppercase; letter-spacing:0.04em; color:var(--muted); margin-bottom:0.8rem;">
                        AI Readiness &amp; Governance
                    </h4>
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                        <div>
                            <span style="font-size:0.8rem; color:var(--muted); display:block;">Currently using AI tools:</span>
                            <strong style="font-size:0.95rem; color:var(--text);">{{ $resp['q_ai_current_use'] ?? 'Not answered' }}</strong>
                        </div>
                        <div>
                            <span style="font-size:0.8rem; color:var(--muted); display:block;">Identified processes for AI:</span>
                            <strong style="font-size:0.95rem; color:var(--text);">{{ $resp['q_ai_opportunities'] ?? 'Not answered' }}</strong>
                        </div>
                        <div style="grid-column:1 / -1;">
                            <span style="font-size:0.8rem; color:var(--muted); display:block;">Risk &amp; data privacy evaluation process:</span>
                            <strong style="font-size:0.95rem; color:var(--text);">{{ $resp['q_ai_risk_privacy'] ?? 'Not answered' }}</strong>
                        </div>
                    </div>
                </div>

                @if(!empty($lead->additional_notes))
                    <div>
                        <span style="font-size:0.78rem; text-transform:uppercase; color:var(--muted); font-weight:700;">Additional Visitor Requirements</span>
                        <div style="margin-top:0.3rem; padding:1rem; background:#FFFBEB; border:1px solid #FDE68A; border-radius:8px; font-size:0.92rem; color:#92400E; white-space:pre-wrap;">
                            {{ $lead->additional_notes }}
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Calculator Results if Available -->
        @if(!empty($lead->calculator_inputs) || !empty($lead->calculator_results))
            <div class="card" style="margin-bottom:1.5rem;">
                <h3 style="font-size:1.15rem; font-weight:700; margin-bottom:1.2rem; color:var(--text); border-bottom:1px solid var(--border); padding-bottom:0.6rem;">
                    <i class="fa-solid fa-calculator" style="color:var(--primary); margin-right:0.4rem;"></i>
                    Automation Savings Calculator Estimates
                </h3>

                @php
                    $cIn = is_array($lead->calculator_inputs) ? $lead->calculator_inputs : [];
                    $cOut = is_array($lead->calculator_results) ? $lead->calculator_results : [];
                @endphp

                <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(180px, 1fr)); gap:1rem; margin-bottom:1.2rem;">
                    <div style="background:#F8FAFC; padding:0.9rem; border-radius:8px; border:1px solid var(--border);">
                        <span style="font-size:0.75rem; color:var(--muted); text-transform:uppercase;">Employees</span>
                        <div style="font-size:1.2rem; font-weight:700; color:var(--text);">{{ $cIn['employees'] ?? '—' }} staff</div>
                    </div>
                    <div style="background:#F8FAFC; padding:0.9rem; border-radius:8px; border:1px solid var(--border);">
                        <span style="font-size:0.75rem; color:var(--muted); text-transform:uppercase;">Hours / Week / Person</span>
                        <div style="font-size:1.2rem; font-weight:700; color:var(--text);">{{ $cIn['hours_per_week'] ?? '—' }} hrs</div>
                    </div>
                    <div style="background:#F8FAFC; padding:0.9rem; border-radius:8px; border:1px solid var(--border);">
                        <span style="font-size:0.75rem; color:var(--muted); text-transform:uppercase;">Hourly Labour Rate</span>
                        <div style="font-size:1.2rem; font-weight:700; color:var(--text);">£{{ $cIn['hourly_rate'] ?? '—' }}/hr</div>
                    </div>
                    <div style="background:#F8FAFC; padding:0.9rem; border-radius:8px; border:1px solid var(--border);">
                        <span style="font-size:0.75rem; color:var(--muted); text-transform:uppercase;">Automation Potential</span>
                        <div style="font-size:1.2rem; font-weight:700; color:var(--text);">{{ $cIn['automation_pct'] ?? '—' }}%</div>
                    </div>
                </div>

                <div style="background:#ECFDF5; border:1px solid #A7F3D0; border-radius:8px; padding:1.2rem; display:grid; grid-template-columns:1fr 1fr 1fr; gap:1rem;">
                    <div>
                        <span style="font-size:0.75rem; color:#065F46; text-transform:uppercase; font-weight:700;">Annual Hours Saved</span>
                        <div style="font-size:1.35rem; font-weight:700; color:#065F46;">{{ number_format($cOut['annual_hours_saved'] ?? 0) }} hrs</div>
                    </div>
                    <div>
                        <span style="font-size:0.75rem; color:#065F46; text-transform:uppercase; font-weight:700;">Annual Labour Value</span>
                        <div style="font-size:1.35rem; font-weight:700; color:#065F46;">£{{ number_format($cOut['annual_labour_cost_equiv'] ?? 0) }}</div>
                    </div>
                    <div>
                        <span style="font-size:0.75rem; color:#065F46; text-transform:uppercase; font-weight:700;">Est. Payback</span>
                        <div style="font-size:1.35rem; font-weight:700; color:#065F46;">{{ $cOut['payback_months'] ?? '—' }} months</div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <!-- Sidebar: Status Management & Admin Notes -->
    <div>
        <div class="card" style="margin-bottom:1.5rem;">
            <h3 style="font-size:1.1rem; font-weight:700; margin-bottom:1.2rem; color:var(--text);">Lead Status &amp; Notes</h3>

            <form action="{{ route('admin.engagement.leads.update', $lead->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="status">Lead Status</label>
                    <select name="status" id="status" class="form-control" style="font-weight:600;">
                        <option value="New" {{ $lead->status === 'New' ? 'selected' : '' }}>New</option>
                        <option value="Contacted" {{ $lead->status === 'Contacted' ? 'selected' : '' }}>Contacted</option>
                        <option value="Qualified" {{ $lead->status === 'Qualified' ? 'selected' : '' }}>Qualified</option>
                        <option value="Closed" {{ $lead->status === 'Closed' ? 'selected' : '' }}>Closed</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="admin_notes">Internal Admin Notes</label>
                    <textarea name="admin_notes" id="admin_notes" class="form-control" rows="6" placeholder="Add follow-up notes, call scheduled date, audit quote details...">{{ $lead->admin_notes }}</textarea>
                </div>

                <button type="submit" class="btn-sm btn-primary" style="width:100%; justify-content:center; padding:0.75rem 1rem;">
                    <i class="fa-solid fa-floppy-disk"></i> Save Lead Updates
                </button>
            </form>
        </div>

        <div class="card">
            <h4 style="font-size:0.95rem; font-weight:700; margin-bottom:0.8rem; color:var(--text);">Audit &amp; Session Info</h4>
            <div style="font-size:0.82rem; color:var(--muted); display:grid; gap:0.5rem;">
                <div><strong>IP Address:</strong> {{ $lead->ip_address ?: 'Unknown' }}</div>
                <div><strong>Session ID:</strong> {{ $lead->session_id ? substr($lead->session_id, 0, 16) . '...' : 'N/A' }}</div>
                <div><strong>Created:</strong> {{ $lead->created_at ? $lead->created_at->toDayDateTimeString() : '—' }}</div>
                <div><strong>Last Updated:</strong> {{ $lead->updated_at ? $lead->updated_at->toDayDateTimeString() : '—' }}</div>
            </div>

            <div style="margin-top:1.2rem; padding-top:1rem; border-top:1px solid var(--border);">
                <form action="{{ route('admin.engagement.leads.destroy', $lead->id) }}" method="POST" onsubmit="return confirm('Permanently delete this assessment lead record?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-sm btn-danger" style="width:100%; justify-content:center;">
                        <i class="fa-solid fa-trash"></i> Delete Lead
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
