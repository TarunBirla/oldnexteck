@extends('admin.layouts.app')

@section('title', 'Engagement Settings')
@section('page_header', 'Smart Customer Engagement Settings')

@section('content')
<div style="max-width:900px;">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.5rem; flex-wrap:wrap; gap:1rem;">
        <div>
            <h2 style="font-size:1.25rem; font-weight:700; color:var(--text);">Engagement System Configuration</h2>
            <p style="font-size:0.88rem; color:var(--muted); margin-top:0.2rem;">Control the smart welcome popup triggers, frequency capping, copy, and calculators.</p>
        </div>
        <div>
            <a href="{{ route('admin.engagement.leads') }}" class="btn-sm btn-secondary" style="border:1px solid var(--border); padding:0.55rem 1rem;">
                <i class="fa-solid fa-list-check"></i> View Assessment Leads
            </a>
        </div>
    </div>

    <form action="{{ route('admin.engagement.settings.update') }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Smart Welcome Popup Card -->
        <div class="card" style="margin-bottom:1.5rem;">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.2rem; border-bottom:1px solid var(--border); padding-bottom:0.8rem;">
                <h3 style="font-size:1.15rem; font-weight:700; color:var(--text);">
                    <i class="fa-solid fa-bullhorn" style="color:var(--primary); margin-right:0.4rem;"></i>
                    Smart Welcome Popup
                </h3>
                <label style="display:flex; align-items:center; gap:0.5rem; cursor:pointer; font-weight:600; font-size:0.9rem;">
                    <input type="checkbox" name="popup_enabled" value="1" {{ ($settings['popup_enabled'] ?? '1') == '1' ? 'checked' : '' }} style="width:18px; height:18px; accent-color:var(--primary);">
                    Enable Popup
                </label>
            </div>

            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.2rem; margin-bottom:1.2rem;">
                <div class="form-group" style="margin-bottom:0;">
                    <label for="popup_delay_seconds">Trigger Delay (Seconds)</label>
                    <input type="number" name="popup_delay_seconds" id="popup_delay_seconds" min="1" max="120" value="{{ $settings['popup_delay_seconds'] ?? '8' }}" class="form-control" required>
                    <small style="color:var(--muted); font-size:0.8rem;">Default: 8 seconds after page load before displaying.</small>
                </div>
                <div class="form-group" style="margin-bottom:0;">
                    <label for="popup_frequency_days">Frequency Cap (Days)</label>
                    <input type="number" name="popup_frequency_days" id="popup_frequency_days" min="0" max="90" value="{{ $settings['popup_frequency_days'] ?? '7' }}" class="form-control" required>
                    <small style="color:var(--muted); font-size:0.8rem;">Do not re-trigger popup for dismissed visitors for X days.</small>
                </div>
            </div>

            <div class="form-group">
                <label style="display:flex; align-items:center; gap:0.5rem; cursor:pointer; font-size:0.92rem; font-weight:500;">
                    <input type="checkbox" name="popup_exit_intent" value="1" {{ ($settings['popup_exit_intent'] ?? '1') == '1' ? 'checked' : '' }} style="width:16px; height:16px; accent-color:var(--primary);">
                    Enable Exit-Intent trigger on desktop (displays when user cursor leaves top of browser window)
                </label>
            </div>

            <div class="form-group">
                <label for="popup_headline">Popup Headline</label>
                <input type="text" name="popup_headline" id="popup_headline" value="{{ $settings['popup_headline'] ?? 'Is Your Business Using Technology to Its Full Potential?' }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="popup_description">Popup Description</label>
                <textarea name="popup_description" id="popup_description" rows="2" class="form-control" required>{{ $settings['popup_description'] ?? 'Discover opportunities to streamline operations, improve efficiency, and make smarter technology decisions.' }}</textarea>
            </div>

            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.2rem;">
                <div class="form-group">
                    <label for="popup_primary_cta">Primary CTA Label</label>
                    <input type="text" name="popup_primary_cta" id="popup_primary_cta" value="{{ $settings['popup_primary_cta'] ?? 'Start Your Free Assessment' }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="popup_secondary_cta">Secondary CTA Label</label>
                    <input type="text" name="popup_secondary_cta" id="popup_secondary_cta" value="{{ $settings['popup_secondary_cta'] ?? 'Explore Our Services' }}" class="form-control" required>
                </div>
            </div>

            <div style="display:grid; grid-template-columns:1fr 2fr; gap:1.2rem;">
                <div class="form-group">
                    <label for="popup_close_text">Dismiss Action Label</label>
                    <input type="text" name="popup_close_text" id="popup_close_text" value="{{ $settings['popup_close_text'] ?? 'Maybe Later' }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="popup_supporting_text">Supporting Reassurance Text</label>
                    <input type="text" name="popup_supporting_text" id="popup_supporting_text" value="{{ $settings['popup_supporting_text'] ?? 'Get a clearer picture of where technology could make the biggest difference to your business.' }}" class="form-control">
                </div>
            </div>
        </div>

        <!-- Automation Calculator & Widget Controls -->
        <div class="card" style="margin-bottom:1.5rem;">
            <h3 style="font-size:1.15rem; font-weight:700; color:var(--text); margin-bottom:1.2rem; border-bottom:1px solid var(--border); padding-bottom:0.8rem;">
                <i class="fa-solid fa-shapes" style="color:var(--primary); margin-right:0.4rem;"></i>
                Additional Modules &amp; Widget Visibility
            </h3>

            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.5rem;">
                <div style="background:#F8FAFC; border:1px solid var(--border); border-radius:8px; padding:1.2rem;">
                    <label style="display:flex; align-items:center; gap:0.6rem; cursor:pointer; font-weight:700; font-size:0.95rem; margin-bottom:0.5rem;">
                        <input type="checkbox" name="calculator_enabled" value="1" {{ ($settings['calculator_enabled'] ?? '1') == '1' ? 'checked' : '' }} style="width:18px; height:18px; accent-color:var(--primary);">
                        Automation Savings Calculator
                    </label>
                    <p style="font-size:0.82rem; color:var(--muted); margin:0;">
                        Enables the interactive ROI calculator modal and dedicated route at <code>/calculator</code>.
                    </p>
                </div>

                <div style="background:#F8FAFC; border:1px solid var(--border); border-radius:8px; padding:1.2rem;">
                    <label style="display:flex; align-items:center; gap:0.6rem; cursor:pointer; font-weight:700; font-size:0.95rem; margin-bottom:0.5rem;">
                        <input type="checkbox" name="widget_enabled" value="1" {{ ($settings['widget_enabled'] ?? '1') == '1' ? 'checked' : '' }} style="width:18px; height:18px; accent-color:var(--primary);">
                        Persistent Engagement Quick-Launcher
                    </label>
                    <p style="font-size:0.82rem; color:var(--muted); margin:0;">
                        Adds an assessment &amp; calculator trigger pill next to the sticky consultation banner on all pages.
                    </p>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div style="display:flex; justify-content:flex-end;">
            <button type="submit" class="btn-sm btn-primary" style="padding:0.8rem 1.8rem; font-size:0.95rem;">
                <i class="fa-solid fa-check"></i> Save Settings
            </button>
        </div>
    </form>
</div>
@endsection
