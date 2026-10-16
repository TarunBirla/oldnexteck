@extends('admin.layouts.app')

@section('title', 'Assessment Leads')
@section('page_header', 'Business Technology Health Check Leads')

@section('content')
<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.5rem; flex-wrap:wrap; gap:1rem;">
    <div>
        <h2 style="font-size:1.25rem; font-weight:700; color:var(--text);">All Diagnostic Submissions</h2>
        <p style="font-size:0.88rem; color:var(--muted); margin-top:0.2rem;">Track qualified SME leads, operational scores, and discovery call requests.</p>
    </div>
    <div style="display:flex; gap:0.6rem; align-items:center;">
        <a href="{{ route('admin.engagement.export', request()->all()) }}" class="btn-sm btn-secondary" style="border:1px solid var(--border); padding:0.55rem 1rem;">
            <i class="fa-solid fa-file-csv"></i> Export CSV
        </a>
        <a href="{{ route('admin.engagement.settings') }}" class="btn-sm btn-primary" style="padding:0.55rem 1rem;">
            <i class="fa-solid fa-sliders"></i> Engagement Settings
        </a>
    </div>
</div>

<!-- Quick Metric Cards -->
<div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(180px, 1fr)); gap:1rem; margin-bottom:1.5rem;">
    <div class="card" style="padding:1.1rem; margin-bottom:0;">
        <span style="font-size:0.75rem; color:var(--muted); text-transform:uppercase; font-weight:700; letter-spacing:0.05em;">Total Leads</span>
        <div style="font-size:1.6rem; font-weight:700; color:var(--text); margin-top:0.3rem;">{{ $counts['total'] }}</div>
    </div>
    <div class="card" style="padding:1.1rem; margin-bottom:0; border-left:4px solid #3B82F6;">
        <span style="font-size:0.75rem; color:var(--muted); text-transform:uppercase; font-weight:700; letter-spacing:0.05em;">New Leads</span>
        <div style="font-size:1.6rem; font-weight:700; color:#2563EB; margin-top:0.3rem;">{{ $counts['new'] }}</div>
    </div>
    <div class="card" style="padding:1.1rem; margin-bottom:0; border-left:4px solid #10B981;">
        <span style="font-size:0.75rem; color:var(--muted); text-transform:uppercase; font-weight:700; letter-spacing:0.05em;">Qualified</span>
        <div style="font-size:1.6rem; font-weight:700; color:#059669; margin-top:0.3rem;">{{ $counts['qualified'] }}</div>
    </div>
    <div class="card" style="padding:1.1rem; margin-bottom:0; border-left:4px solid #F59E0B;">
        <span style="font-size:0.75rem; color:var(--muted); text-transform:uppercase; font-weight:700; letter-spacing:0.05em;">Contacted</span>
        <div style="font-size:1.6rem; font-weight:700; color:#D97706; margin-top:0.3rem;">{{ $counts['contacted'] }}</div>
    </div>
    <div class="card" style="padding:1.1rem; margin-bottom:0; border-left:4px solid #8B5CF6;">
        <span style="font-size:0.75rem; color:var(--muted); text-transform:uppercase; font-weight:700; letter-spacing:0.05em;">Avg Maturity Score</span>
        <div style="font-size:1.6rem; font-weight:700; color:#6D28D9; margin-top:0.3rem;">{{ $counts['avg_score'] }}%</div>
    </div>
</div>

<!-- Filters & Search Form -->
<div class="card" style="padding:1.2rem; margin-bottom:1.5rem;">
    <form method="GET" action="{{ route('admin.engagement.leads') }}" style="display:grid; grid-template-columns:2fr 1fr 1fr 1fr auto; gap:0.8rem; align-items:end;">
        <div>
            <label style="font-size:0.8rem; font-weight:600; color:var(--muted); margin-bottom:0.3rem; display:block;">Search</label>
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name, company, email..." class="form-control" style="padding:0.6rem 0.9rem;">
        </div>
        <div>
            <label style="font-size:0.8rem; font-weight:600; color:var(--muted); margin-bottom:0.3rem; display:block;">Status</label>
            <select name="status" class="form-control" style="padding:0.6rem 0.9rem;">
                <option value="all">All Statuses</option>
                <option value="New" {{ request('status') === 'New' ? 'selected' : '' }}>New</option>
                <option value="Contacted" {{ request('status') === 'Contacted' ? 'selected' : '' }}>Contacted</option>
                <option value="Qualified" {{ request('status') === 'Qualified' ? 'selected' : '' }}>Qualified</option>
                <option value="Closed" {{ request('status') === 'Closed' ? 'selected' : '' }}>Closed</option>
            </select>
        </div>
        <div>
            <label style="font-size:0.8rem; font-weight:600; color:var(--muted); margin-bottom:0.3rem; display:block;">Maturity Tier</label>
            <select name="maturity" class="form-control" style="padding:0.6rem 0.9rem;">
                <option value="all">All Tiers</option>
                <option value="Emerging" {{ request('maturity') === 'Emerging' ? 'selected' : '' }}>Emerging (<40%)</option>
                <option value="Developing" {{ request('maturity') === 'Developing' ? 'selected' : '' }}>Developing (40-64%)</option>
                <option value="Strategic" {{ request('maturity') === 'Strategic' ? 'selected' : '' }}>Strategic (65-84%)</option>
                <option value="Optimized" {{ request('maturity') === 'Optimized' ? 'selected' : '' }}>Optimized (85%+)</option>
            </select>
        </div>
        <div>
            <label style="font-size:0.8rem; font-weight:600; color:var(--muted); margin-bottom:0.3rem; display:block;">Industry</label>
            <select name="industry" class="form-control" style="padding:0.6rem 0.9rem;">
                <option value="all">All Industries</option>
                @foreach($industries as $ind)
                    <option value="{{ $ind }}" {{ request('industry') === $ind ? 'selected' : '' }}>{{ $ind }}</option>
                @endforeach
            </select>
        </div>
        <div style="display:flex; gap:0.4rem;">
            <button type="submit" class="btn-sm btn-primary" style="height:38px; padding:0 1rem;">Filter</button>
            <a href="{{ route('admin.engagement.leads') }}" class="btn-sm btn-secondary" style="height:38px; padding:0 0.8rem;">Reset</a>
        </div>
    </form>
</div>

<!-- Leads Table -->
<div class="card" style="padding:0; overflow:hidden;">
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th style="width:60px;">ID</th>
                    <th>Lead Contact</th>
                    <th>Company &amp; Industry</th>
                    <th>Primary Challenge</th>
                    <th>Maturity Score</th>
                    <th>Status</th>
                    <th>Call?</th>
                    <th>Date</th>
                    <th style="text-align:right;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($leads as $lead)
                    <tr>
                        <td><strong>#{{ $lead->id }}</strong></td>
                        <td>
                            <div style="font-weight:600; color:var(--text);">{{ $lead->full_name }}</div>
                            <div style="font-size:0.82rem; color:var(--muted);">
                                <a href="mailto:{{ $lead->email }}" style="color:var(--primary); text-decoration:none;">{{ $lead->email }}</a>
                                @if($lead->phone) &bull; <a href="tel:{{ $lead->phone }}" style="color:var(--muted); text-decoration:none;">{{ $lead->phone }}</a>@endif
                            </div>
                        </td>
                        <td>
                            <div style="font-weight:600;">{{ $lead->company }}</div>
                            <div style="font-size:0.82rem; color:var(--muted);">
                                {{ $lead->industry ?: 'Sector not specified' }} &bull; {{ $lead->company_size ?: 'Size N/A' }}
                            </div>
                        </td>
                        <td>
                            <span style="font-size:0.84rem; color:var(--text); display:inline-block; max-width:200px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;" title="{{ $lead->primary_challenge }}">
                                {{ $lead->primary_challenge ?: 'General Assessment' }}
                            </span>
                        </td>
                        <td>
                            @php
                                $badgeStyle = match($lead->maturity_level) {
                                    'Optimized'  => 'background:#DCFCE7; color:#166534;',
                                    'Strategic'  => 'background:#DBEAFE; color:#1E40AF;',
                                    'Developing' => 'background:#FEF3C7; color:#92400E;',
                                    default      => 'background:#FEE2E2; color:#991B1B;'
                                };
                            @endphp
                            <span class="badge" style="{{ $badgeStyle }}">
                                {{ $lead->score }}% &bull; {{ $lead->maturity_level }}
                            </span>
                        </td>
                        <td>
                            <form action="{{ route('admin.engagement.leads.update', $lead->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PUT')
                                <select name="status" onchange="this.form.submit()" style="font-size:0.8rem; padding:0.25rem 0.5rem; border-radius:6px; border:1px solid var(--border); background:#fff; font-weight:600; cursor:pointer;">
                                    <option value="New" {{ $lead->status === 'New' ? 'selected' : '' }}>New</option>
                                    <option value="Contacted" {{ $lead->status === 'Contacted' ? 'selected' : '' }}>Contacted</option>
                                    <option value="Qualified" {{ $lead->status === 'Qualified' ? 'selected' : '' }}>Qualified</option>
                                    <option value="Closed" {{ $lead->status === 'Closed' ? 'selected' : '' }}>Closed</option>
                                </select>
                            </form>
                        </td>
                        <td>
                            @if($lead->consultation_requested)
                                <span class="badge" style="background:#DEF7EC; color:#03543F;" title="Requested discovery call"><i class="fa-solid fa-check"></i> Requested</span>
                            @else
                                <span style="font-size:0.8rem; color:var(--muted);">Assessment only</span>
                            @endif
                        </td>
                        <td style="font-size:0.82rem; color:var(--muted); white-space:nowrap;">
                            {{ $lead->created_at ? $lead->created_at->format('d M Y, H:i') : '—' }}
                        </td>
                        <td style="text-align:right; white-space:nowrap;">
                            <a href="{{ route('admin.engagement.leads.show', $lead->id) }}" class="btn-sm btn-secondary" title="View details">
                                <i class="fa-solid fa-eye"></i> View
                            </a>
                            <form action="{{ route('admin.engagement.leads.destroy', $lead->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this lead?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-sm btn-danger" style="padding:0.4rem 0.6rem;" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" style="text-align:center; padding:3rem 1rem; color:var(--muted);">
                            <i class="fa-solid fa-inbox" style="font-size:2rem; margin-bottom:0.5rem; display:block; opacity:0.4;"></i>
                            No assessment leads found matching your criteria.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($leads->hasPages())
        <div class="pagination-container" style="padding:1rem 1.5rem;">
            {{ $leads->links() }}
        </div>
    @endif
</div>
@endsection
