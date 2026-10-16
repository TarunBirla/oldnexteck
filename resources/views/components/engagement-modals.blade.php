<!-- The Nexteck Smart Customer Engagement System -->
<style>
    /* ================= Nexteck Engagement Modals & Widget Styles ================= */
    :root {
        --nxt-navy: #0C1B33;
        --nxt-navy-deep: #081224;
        --nxt-navy-light: #162B4D;
        --nxt-gold: #B8933F;
        --nxt-gold-light: #D9BC7A;
        --nxt-gold-hover: #9E7D33;
        --nxt-cream: #F7F5F0;
        --nxt-surface: #FFFFFF;
        --nxt-border: #E5E7EB;
        --nxt-text: #1E293B;
        --nxt-muted: #64748B;
        --nxt-radius: 18px;
        --nxt-shadow: 0 25px 60px -15px rgba(12, 27, 51, 0.35), 0 10px 25px -5px rgba(0,0,0,0.12);
    }

    .nxt-overlay {
        position: fixed;
        inset: 0;
        z-index: 100000;
        background: rgba(12, 27, 51, 0.72);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        display: none;
        align-items: center;
        justify-content: center;
        padding: 1.2rem;
        opacity: 0;
        transition: opacity 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .nxt-overlay.nxt-active {
        display: flex;
        opacity: 1;
    }

    .nxt-modal {
        background: var(--nxt-surface);
        width: min(720px, 100%);
        max-height: 90vh;
        overflow-y: auto;
        border-radius: var(--nxt-radius);
        box-shadow: var(--nxt-shadow);
        border: 1px solid rgba(255, 255, 255, 0.25);
        position: relative;
        transform: translateY(20px) scale(0.98);
        transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        font-family: 'Inter', system-ui, -apple-system, sans-serif;
        color: var(--nxt-text);
        /* Completely hide scrollbars on all browsers while keeping smooth scrolling */
        scrollbar-width: none !important;
        -ms-overflow-style: none !important;
    }

    .nxt-modal::-webkit-scrollbar,
    .nxt-modal *::-webkit-scrollbar,
    .nxt-modal-body::-webkit-scrollbar {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
        background: transparent !important;
    }

    /* Enhanced wider width for Business Technology Health Check modal */
    #nxtAssessmentOverlay .nxt-modal {
        width: min(920px, 95vw) !important;
        max-width: 920px !important;
        scrollbar-width: none !important;
        -ms-overflow-style: none !important;
    }

    #nxtAssessmentOverlay .nxt-modal::-webkit-scrollbar {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
    }

    .nxt-overlay.nxt-active .nxt-modal {
        transform: translateY(0) scale(1);
    }

    .nxt-modal-close {
        position: absolute;
        top: 1.2rem;
        right: 1.2rem;
        background: rgba(255, 255, 255, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.25);
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #FFFFFF;
        cursor: pointer;
        font-size: 1.2rem;
        transition: all 0.2s;
        z-index: 20;
    }
    .nxt-modal-close:hover {
        background: rgba(255, 255, 255, 0.3);
        color: #FFFFFF;
        transform: rotate(90deg);
    }

    /* Modal Content Elements */
    .nxt-modal-header {
        background: linear-gradient(135deg, var(--nxt-navy) 0%, var(--nxt-navy-light) 100%);
        color: #fff;
        padding: 2.2rem 2.2rem 1.8rem;
        border-top-left-radius: var(--nxt-radius);
        border-top-right-radius: var(--nxt-radius);
        position: relative;
    }

    .nxt-modal-header .nxt-tag {
        display: inline-block;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--nxt-gold-light);
        margin-bottom: 0.6rem;
    }

    .nxt-modal-header h3 {
        font-family: 'Fraunces', Georgia, serif;
        font-size: clamp(1.3rem, 2.5vw, 1.7rem);
        font-weight: 700;
        color: #fff;
        line-height: 1.3;
        margin: 0 0 0.6rem 0;
    }

    .nxt-modal-header p {
        font-size: 0.94rem;
        color: #CBD5E1;
        line-height: 1.5;
        margin: 0;
        max-width: 52ch;
    }

    .nxt-modal-body {
        padding: 2rem 2.2rem;
    }

    /* Step Indicators */
    .nxt-steps-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1.8rem;
        position: relative;
    }
    .nxt-steps-bar::before {
        content: '';
        position: absolute;
        top: 14px;
        left: 20px;
        right: 20px;
        height: 2px;
        background: #E2E8F0;
        z-index: 1;
    }
    .nxt-step-item {
        position: relative;
        z-index: 2;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.35rem;
    }
    .nxt-step-num {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: #F1F5F9;
        color: var(--nxt-muted);
        font-size: 0.82rem;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid #fff;
        transition: all 0.25s;
    }
    .nxt-step-label {
        font-size: 0.72rem;
        font-weight: 600;
        color: var(--nxt-muted);
        text-transform: uppercase;
        letter-spacing: 0.04em;
    }
    .nxt-step-item.active .nxt-step-num {
        background: var(--nxt-gold);
        color: #fff;
        box-shadow: 0 0 0 4px rgba(184, 147, 63, 0.2);
    }
    .nxt-step-item.active .nxt-step-label {
        color: var(--nxt-navy);
        font-weight: 700;
    }
    .nxt-step-item.completed .nxt-step-num {
        background: var(--nxt-navy);
        color: #fff;
    }

    /* Form Fields */
    .nxt-field {
        margin-bottom: 1.3rem;
    }
    .nxt-field label {
        display: block;
        font-size: 0.88rem;
        font-weight: 600;
        color: var(--nxt-navy);
        margin-bottom: 0.45rem;
    }
    .nxt-field .nxt-hint {
        font-size: 0.78rem;
        color: var(--nxt-muted);
        margin-bottom: 0.45rem;
        display: block;
    }
    .nxt-field input[type="text"],
    .nxt-field input[type="email"],
    .nxt-field input[type="tel"],
    .nxt-field input[type="number"],
    .nxt-field select,
    .nxt-field textarea {
        width: 100%;
        border: 1.5px solid var(--nxt-border);
        border-radius: 10px;
        padding: 0.75rem 1rem;
        font-size: 0.95rem;
        font-family: inherit;
        background: #FAF9F6;
        color: var(--nxt-text);
        transition: all 0.2s;
    }
    .nxt-field input:focus,
    .nxt-field select:focus,
    .nxt-field textarea:focus {
        outline: none;
        border-color: var(--nxt-gold);
        background: #fff;
        box-shadow: 0 0 0 4px rgba(184, 147, 63, 0.15);
    }

    /* Radio / Choice Pill Grid */
    .nxt-options-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(130px, 1fr));
        gap: 0.6rem;
    }
    .nxt-option-pill {
        border: 1.5px solid var(--nxt-border);
        background: #FAF9F6;
        border-radius: 10px;
        padding: 0.7rem 0.85rem;
        text-align: center;
        font-size: 0.88rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .nxt-option-pill:hover {
        border-color: var(--nxt-gold);
        background: #FFFDF9;
    }
    .nxt-option-pill.selected {
        border-color: var(--nxt-gold);
        background: #FDF9EE;
        color: var(--nxt-navy);
        font-weight: 700;
        box-shadow: 0 2px 8px rgba(184, 147, 63, 0.18);
    }

    /* Buttons */
    .nxt-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        font-size: 0.95rem;
        font-weight: 600;
        padding: 0.85rem 1.6rem;
        border-radius: 999px;
        cursor: pointer;
        transition: all 0.25s;
        border: none;
        text-decoration: none;
    }
    .nxt-btn-gold {
        background: var(--nxt-gold);
        color: #fff;
        box-shadow: 0 8px 20px -4px rgba(184, 147, 63, 0.5);
    }
    .nxt-btn-gold:hover {
        background: var(--nxt-navy);
        transform: translateY(-2px);
        box-shadow: 0 10px 24px -4px rgba(12, 27, 51, 0.4);
    }
    .nxt-btn-ghost {
        background: transparent;
        color: var(--nxt-navy);
        border: 1.5px solid var(--nxt-navy);
    }
    .nxt-btn-ghost:hover {
        background: var(--nxt-navy);
        color: #fff;
    }
    .nxt-btn-subtle {
        background: #F1F5F9;
        color: var(--nxt-muted);
    }
    .nxt-btn-subtle:hover {
        background: #E2E8F0;
        color: var(--nxt-text);
    }

    /* Results Step Components */
    .nxt-result-score-card {
        background: linear-gradient(135deg, #0C1B33 0%, #162B4D 100%);
        color: #fff;
        border-radius: 14px;
        padding: 1.8rem;
        margin-bottom: 1.5rem;
        text-align: center;
    }
    .nxt-score-circle {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.08);
        border: 3px solid var(--nxt-gold);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 0.8rem;
        font-family: 'Fraunces', serif;
        font-size: 2rem;
        font-weight: 700;
        color: var(--nxt-gold-light);
    }

    /* Persistent Quick Launcher Widget */
    .nxt-quick-pill {
        position: fixed;
        bottom: 2.5rem;
        right: 1.5rem;
        z-index: 9998;
        background: #FFFFFF;
        color: var(--nxt-navy);
        padding: 0.6rem 1.1rem;
        border-radius: 50px;
        display: flex;
        align-items: center;
        gap: 0.6rem;
        font-size: 0.85rem;
        font-weight: 600;
        box-shadow: 0 10px 30px rgba(12, 27, 51, 0.18), 0 2px 8px rgba(0,0,0,0.06);
        border: 1.5px solid rgba(184, 147, 63, 0.35);
        cursor: pointer;
        transition: all 0.25s ease;
        text-decoration: none;
    }
    .nxt-quick-pill:hover {
        transform: translateY(-2px);
        border-color: var(--nxt-gold);
        box-shadow: 0 14px 35px rgba(12, 27, 51, 0.24);
        background: #FFFDF9;
    }
    .nxt-quick-pill .nxt-spark {
        color: var(--nxt-gold);
        font-size: 1rem;
    }

    /* Calculator Styles */
    .nxt-calc-range-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 0.4rem;
    }
    .nxt-calc-range-val {
        font-weight: 700;
        color: var(--nxt-gold);
        font-size: 1.1rem;
    }
    .nxt-calc-result-box {
        background: #F8FAFC;
        border: 1.5px solid var(--nxt-border);
        border-radius: 12px;
        padding: 1.2rem;
        margin-top: 1.5rem;
    }

    /* Welcome Assessment Card */
    .nxt-welcome-assessment-card {
        background: #FAF9F6;
        border-radius: 14px;
        padding: 1.15rem 1.35rem;
        border: 1.5px solid #E5E7EB;
        margin-bottom: 1.3rem;
        cursor: pointer;
        transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        text-align: left;
        width: 100%;
    }
    .nxt-welcome-assessment-card:hover,
    .nxt-welcome-assessment-card:focus-visible {
        background: #FFFDF9;
        border-color: var(--nxt-gold);
        transform: translateY(-2px);
        box-shadow: 0 10px 24px -6px rgba(184, 147, 63, 0.22);
        outline: none;
    }
    .nxt-welcome-assessment-card .nxt-icon-box {
        flex-shrink: 0;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: var(--nxt-navy);
        color: var(--nxt-gold-light);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1.05rem;
        transition: transform 0.25s;
    }
    .nxt-welcome-assessment-card:hover .nxt-icon-box {
        transform: scale(1.08);
    }
    .nxt-welcome-assessment-card .nxt-arrow-indicator {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: #fff;
        border: 1.5px solid var(--nxt-border);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--nxt-navy);
        font-size: 0.95rem;
        font-weight: 700;
        transition: all 0.25s ease;
    }
    .nxt-welcome-assessment-card:hover .nxt-arrow-indicator {
        background: var(--nxt-gold);
        color: #fff;
        border-color: var(--nxt-gold);
        transform: translateX(4px);
    }
    .nxt-trust-badge {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.45rem;
        font-size: 0.78rem;
        color: var(--nxt-muted);
        margin: 0.75rem 0 0.9rem;
        font-weight: 500;
        text-align: center;
    }
    .nxt-trust-badge svg {
        color: #10B981;
        flex-shrink: 0;
    }

    /* Inline accessible validation error */
    .nxt-step-error {
        background: #FEF2F2;
        border: 1px solid #FCA5A5;
        color: #991B1B;
        padding: 0.75rem 1rem;
        border-radius: 8px;
        margin-top: 1rem;
        margin-bottom: 0.5rem;
        font-size: 0.85rem;
        line-height: 1.45;
        display: none;
    }

    /* Multi-select Pills */
    .nxt-multi-pill {
        user-select: none;
    }
    .nxt-multi-pill.selected::before {
        content: "✓ ";
        color: var(--nxt-gold);
        font-weight: 700;
        margin-right: 0.25rem;
    }

    @media (max-width: 640px) {
        .nxt-modal { border-radius: 14px; width: 95vw !important; }
        .nxt-modal-header { padding: 1.6rem 1.4rem; }
        .nxt-modal-body { padding: 1.4rem; }
        .nxt-options-grid { grid-template-columns: 1fr 1fr; }
        .nxt-quick-pill { bottom: 5rem; right: 1rem; padding: 0.5rem 0.85rem; font-size: 0.78rem; }
        .nxt-btn { min-height: 44px; }
    }

    @media (prefers-reduced-motion: reduce) {
        .nxt-overlay, .nxt-modal, .nxt-btn, .nxt-quick-pill, .nxt-welcome-assessment-card {
            transition: none !important;
            animation: none !important;
        }
    }

    /* Branded PDF / Print Stylesheet for Diagnostic Scorecard */
    @media print {
        body {
            background: #FFFFFF !important;
            color: #0C1B33 !important;
            font-size: 11pt !important;
        }
        body > *:not(#nxtAssessmentOverlay) {
            display: none !important;
        }
        .nxt-overlay {
            position: static !important;
            background: transparent !important;
            backdrop-filter: none !important;
            display: block !important;
            padding: 0 !important;
        }
        .nxt-modal {
            border: none !important;
            box-shadow: none !important;
            max-width: 100% !important;
            width: 100% !important;
            overflow: visible !important;
            padding: 0 !important;
        }
        .nxt-modal-close,
        .nxt-steps-bar,
        .nxt-btn,
        #nxtQuickLauncher,
        #nxtWelcomeOverlay,
        #nxtCalculatorOverlay,
        .nxt-step-error {
            display: none !important;
        }
        .nxt-modal-header {
            background: #0C1B33 !important;
            color: #FFFFFF !important;
            padding: 1.8rem !important;
            border-radius: 8px !important;
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }
        .nxt-modal-header h3 {
            color: #FFFFFF !important;
        }
        .nxt-step-pane:not(#nxtStep5) {
            display: none !important;
        }
        #nxtStep5 {
            display: block !important;
            padding: 1rem 0 !important;
        }
        .nxt-result-score-card {
            background: #0C1B33 !important;
            color: #FFFFFF !important;
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
            border-radius: 8px !important;
            page-break-inside: avoid;
        }
        .nxt-score-circle {
            border-color: #B8933F !important;
            color: #D9BC7A !important;
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }
    }
</style>

<!-- 1. SMART WELCOME POPUP MODAL -->
<div class="nxt-overlay" id="nxtWelcomeOverlay" role="dialog" aria-modal="true" aria-labelledby="nxtWelcomeHeading">
    <div class="nxt-modal" style="max-width: 580px; width: min(580px, 94vw);">
        <button type="button" class="nxt-modal-close" id="nxtWelcomeCloseBtn" aria-label="Close dialog">&times;</button>
        <div class="nxt-modal-header">
            <span class="nxt-tag">The Nexteck Advisory</span>
            <h3 id="nxtWelcomeHeading">{{ \App\Models\EngagementSetting::get('popup_headline', "Let's Find the Right Technology Solutions for Your Business") }}</h3>
            <p id="nxtWelcomeDesc">{{ \App\Models\EngagementSetting::get('popup_description', "Discover how smarter technology, automation and AI could help your business work more efficiently.") }}</p>
        </div>
        <div class="nxt-modal-body">
            <!-- Clickable Interactive Assessment Card -->
            <div class="nxt-welcome-assessment-card" id="nxtWelcomeCardTrigger" role="button" tabindex="0" aria-label="Start 2-Minute Business Health Check">
                <div style="display:flex; gap:0.95rem; align-items:center;">
                    <div class="nxt-icon-box" aria-hidden="true">✦</div>
                    <div>
                        <strong style="display:block; font-size:0.96rem; color:var(--nxt-navy); margin-bottom:0.2rem; font-weight:700;">2-Minute Business Health Check</strong>
                        <p style="font-size:0.86rem; color:var(--nxt-muted); margin:0; line-height:1.45;">
                            Identify opportunities to improve your operations and technology.
                        </p>
                    </div>
                </div>
                <div class="nxt-arrow-indicator" aria-hidden="true">&rarr;</div>
            </div>

            <!-- Primary CTA & Actions -->
            <div style="display:flex; flex-direction:column;">
                <button type="button" class="nxt-btn nxt-btn-gold" id="nxtWelcomeStartAssessmentBtn" style="width:100%; min-height:46px; font-size:0.98rem;">
                    {{ \App\Models\EngagementSetting::get('popup_primary_cta', 'Discover My Business Opportunities →') }}
                </button>

                <!-- Trust Line -->
                <div class="nxt-trust-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span>Free &bull; Takes 2 minutes &bull; No obligation</span>
                </div>

                <!-- Secondary Actions -->
                <div style="display:flex; justify-content:space-between; align-items:center; gap:0.75rem; margin-top:0.2rem;">
                    <a href="{{ route('industries.index') }}" class="nxt-btn nxt-btn-ghost" id="nxtWelcomeExploreBtn" style="flex:1; font-size:0.88rem; padding:0.7rem 1rem; min-height:44px; text-align:center;">
                        {{ \App\Models\EngagementSetting::get('popup_secondary_cta', 'Explore Our Services') }}
                    </a>
                    <button type="button" class="nxt-btn nxt-btn-subtle" id="nxtWelcomeDismissBtn" style="flex:1; font-size:0.88rem; padding:0.7rem 1rem; min-height:44px;">
                        {{ \App\Models\EngagementSetting::get('popup_close_text', 'Maybe Later') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 2. BUSINESS TECHNOLOGY HEALTH CHECK MODAL -->
<div class="nxt-overlay" id="nxtAssessmentOverlay" role="dialog" aria-modal="true" aria-labelledby="nxtAssessmentHeading">
    <div class="nxt-modal" style="max-width: 920px; width: min(920px, 95vw);">
        <button type="button" class="nxt-modal-close" id="nxtAssessmentCloseBtn" aria-label="Close dialog">&times;</button>
        
        <div class="nxt-modal-header">
            <span class="nxt-tag">Interactive Diagnostic</span>
            <h3 id="nxtAssessmentHeading">Business Technology Health Check</h3>
            <p>A transparent evaluation of your operational bottlenecks, system integration, and pragmatic AI readiness.</p>
        </div>

        <div class="nxt-modal-body">
            <!-- Steps Progress Bar -->
            <div class="nxt-steps-bar" id="nxtStepsBar">
                <div class="nxt-step-item active" data-step="1">
                    <div class="nxt-step-num">1</div>
                    <span class="nxt-step-label">Profile</span>
                </div>
                <div class="nxt-step-item" data-step="2">
                    <div class="nxt-step-num">2</div>
                    <span class="nxt-step-label">Operations</span>
                </div>
                <div class="nxt-step-item" data-step="3">
                    <div class="nxt-step-num">3</div>
                    <span class="nxt-step-label">AI Readiness</span>
                </div>
                <div class="nxt-step-item" data-step="4">
                    <div class="nxt-step-num">4</div>
                    <span class="nxt-step-label">Contact</span>
                </div>
                <div class="nxt-step-item" data-step="5">
                    <div class="nxt-step-num">5</div>
                    <span class="nxt-step-label">Results</span>
                </div>
            </div>

            <!-- Form Container -->
            <form id="nxtAssessmentForm" onsubmit="return false;" novalidate>
                <!-- Anti-spam Honeypot -->
                <div style="position:absolute; left:-9999px; top:-9999px; opacity:0; pointer-events:none;" aria-hidden="true">
                    <input type="text" name="nxt_hp_company_url" id="nxt_hp_company_url" tabindex="-1" autocomplete="off">
                </div>

                <!-- STEP 1: BUSINESS PROFILE -->
                <div class="nxt-step-pane" id="nxtStep1">
                    <div class="nxt-field">
                        <label for="nxt_industry">What industry does your business operate in? *</label>
                        <select id="nxt_industry" name="industry" required onchange="NxtEngagement.toggleIndustryOther(this.value)">
                            <option value="">Select your sector</option>
                            <option value="Oil & Gas / Energy">Oil &amp; Gas / Energy</option>
                            <option value="Industrial Plants & Mining">Industrial Plants &amp; Mining</option>
                            <option value="UK Railway & Infrastructure">UK Railway &amp; Infrastructure</option>
                            <option value="Supply Chain & Global Sourcing">Supply Chain &amp; Global Sourcing</option>
                            <option value="Water Treatment & Smart Automation">Water Treatment &amp; Smart Automation</option>
                            <option value="Manufacturing & Fabrication">Manufacturing &amp; Engineering</option>
                            <option value="Fintech & Professional Services">Fintech &amp; Professional Services</option>
                            <option value="E-Commerce & Logistics">E-Commerce &amp; Logistics</option>
                            <option value="Healthcare & Pharmaceuticals">Healthcare &amp; Pharmaceuticals</option>
                            <option value="Construction & Real Estate">Construction &amp; Real Estate</option>
                            <option value="Other">Other (Please specify)</option>
                        </select>
                        <div id="nxt_industry_other_wrap" style="display:none; margin-top:0.6rem;">
                            <label for="nxt_industry_other" style="font-size:0.82rem; font-weight:600; color:var(--nxt-navy);">Please specify your industry *</label>
                            <input type="text" id="nxt_industry_other" name="industry_other" placeholder="e.g. Legal Services, Hospitality, Aerospace">
                        </div>
                    </div>

                    <div class="nxt-field">
                        <label>What is your approximate company size? *</label>
                        <div class="nxt-options-grid" data-group="company_size" role="radiogroup" aria-label="Company Size">
                            <div class="nxt-option-pill" data-val="1–10 employees" role="radio" tabindex="0">1–10 employees</div>
                            <div class="nxt-option-pill selected" data-val="11–50 employees" role="radio" tabindex="0" aria-checked="true">11–50 employees</div>
                            <div class="nxt-option-pill" data-val="51–200 employees" role="radio" tabindex="0">51–200 employees</div>
                            <div class="nxt-option-pill" data-val="201+ employees" role="radio" tabindex="0">201+ employees</div>
                        </div>
                        <input type="hidden" name="company_size" id="nxt_company_size" value="11–50 employees">
                    </div>

                    <div class="nxt-field">
                        <label>What are your primary business challenges? *</label>
                        <span class="nxt-hint">Select all that apply to your operations.</span>
                        <div class="nxt-options-grid nxt-multi-grid" id="nxtChallengesGrid" role="group" aria-label="Business Challenges">
                            <div class="nxt-option-pill nxt-multi-pill selected" data-val="Too many manual processes" role="checkbox" aria-checked="true" tabindex="0">
                                <span>Too many manual processes</span>
                            </div>
                            <div class="nxt-option-pill nxt-multi-pill" data-val="Disconnected systems and tools" role="checkbox" aria-checked="false" tabindex="0">
                                <span>Disconnected systems and tools</span>
                            </div>
                            <div class="nxt-option-pill nxt-multi-pill" data-val="Limited reporting and visibility" role="checkbox" aria-checked="false" tabindex="0">
                                <span>Limited reporting &amp; visibility</span>
                            </div>
                            <div class="nxt-option-pill nxt-multi-pill" data-val="Exploring AI adoption" role="checkbox" aria-checked="false" tabindex="0">
                                <span>Exploring AI adoption</span>
                            </div>
                            <div class="nxt-option-pill nxt-multi-pill" data-val="High operational costs" role="checkbox" aria-checked="false" tabindex="0">
                                <span>High operational costs</span>
                            </div>
                            <div class="nxt-option-pill nxt-multi-pill" data-val="Unclear technology strategy" role="checkbox" aria-checked="false" tabindex="0">
                                <span>Unclear technology strategy</span>
                            </div>
                            <div class="nxt-option-pill nxt-multi-pill" data-val="Other" id="nxtChallengeOtherPill" role="checkbox" aria-checked="false" tabindex="0">
                                <span>Other challenge</span>
                            </div>
                        </div>
                        <input type="hidden" name="primary_challenge" id="nxt_challenge" value="Too many manual processes">
                        <div id="nxt_challenge_other_wrap" style="display:none; margin-top:0.6rem;">
                            <label for="nxt_challenge_other" style="font-size:0.82rem; font-weight:600; color:var(--nxt-navy);">Please describe your challenge *</label>
                            <input type="text" id="nxt_challenge_other" name="challenge_other" placeholder="e.g. Legacy ERP migration, multi-branch stock reconciliation">
                        </div>
                    </div>

                    <div id="nxtStep1Error" class="nxt-step-error"></div>

                    <div style="display:flex; justify-content:flex-end; margin-top:1.8rem;">
                        <button type="button" class="nxt-btn nxt-btn-gold" onclick="NxtEngagement.validateAndAdvanceStep1()">
                            Next: Operational Efficiency &rarr;
                        </button>
                    </div>
                </div>

                <!-- STEP 2: OPERATIONAL EFFICIENCY -->
                <div class="nxt-step-pane" id="nxtStep2" style="display:none;">
                    <div class="nxt-field">
                        <label>1. How much of your routine work is still manual?</label>
                        <span class="nxt-hint">e.g. data re-keying, copy-pasting spreadsheets, manual invoicing</span>
                        <div class="nxt-options-grid" data-group="q_manual_work">
                            <div class="nxt-option-pill" data-val="Not at all">Not at all</div>
                            <div class="nxt-option-pill" data-val="Slightly">Slightly</div>
                            <div class="nxt-option-pill selected" data-val="Partially">Partially</div>
                            <div class="nxt-option-pill" data-val="Mostly">Mostly</div>
                            <div class="nxt-option-pill" data-val="Fully">Fully</div>
                            <div class="nxt-option-pill" data-val="Not sure">Not sure</div>
                        </div>
                        <input type="hidden" name="q_manual_work" id="nxt_q_manual_work" value="Partially">
                    </div>

                    <div class="nxt-field">
                        <label>2. How well do your current business systems work together?</label>
                        <span class="nxt-hint">e.g. automated syncing between CRM, ERP, finance, and operations</span>
                        <div class="nxt-options-grid" data-group="q_systems_integration">
                            <div class="nxt-option-pill" data-val="Not at all">Not at all</div>
                            <div class="nxt-option-pill" data-val="Slightly">Slightly</div>
                            <div class="nxt-option-pill selected" data-val="Partially">Partially</div>
                            <div class="nxt-option-pill" data-val="Mostly">Mostly</div>
                            <div class="nxt-option-pill" data-val="Fully">Fully</div>
                            <div class="nxt-option-pill" data-val="Not sure">Not sure</div>
                        </div>
                        <input type="hidden" name="q_systems_integration" id="nxt_q_systems_integration" value="Partially">
                    </div>

                    <div class="nxt-field">
                        <label>3. How easy is it to access accurate business reports?</label>
                        <span class="nxt-hint">e.g. instant visibility of cash flow, operational KPIs, or inventory</span>
                        <div class="nxt-options-grid" data-group="q_reports_visibility">
                            <div class="nxt-option-pill" data-val="Not at all">Not at all</div>
                            <div class="nxt-option-pill" data-val="Slightly">Slightly</div>
                            <div class="nxt-option-pill selected" data-val="Partially">Partially</div>
                            <div class="nxt-option-pill" data-val="Mostly">Mostly</div>
                            <div class="nxt-option-pill" data-val="Fully">Fully</div>
                            <div class="nxt-option-pill" data-val="Not sure">Not sure</div>
                        </div>
                        <input type="hidden" name="q_reports_visibility" id="nxt_q_reports_visibility" value="Partially">
                    </div>

                    <div class="nxt-field">
                        <label>4. Do you have a clear technology roadmap?</label>
                        <span class="nxt-hint">e.g. planned digital priorities and budget for the next 12–24 months</span>
                        <div class="nxt-options-grid" data-group="q_tech_roadmap">
                            <div class="nxt-option-pill" data-val="Not at all">Not at all</div>
                            <div class="nxt-option-pill" data-val="Slightly">Slightly</div>
                            <div class="nxt-option-pill selected" data-val="Partially">Partially</div>
                            <div class="nxt-option-pill" data-val="Mostly">Mostly</div>
                            <div class="nxt-option-pill" data-val="Fully">Fully</div>
                            <div class="nxt-option-pill" data-val="Not sure">Not sure</div>
                        </div>
                        <input type="hidden" name="q_tech_roadmap" id="nxt_q_tech_roadmap" value="Partially">
                    </div>

                    <div style="display:flex; justify-content:space-between; margin-top:1.8rem;">
                        <button type="button" class="nxt-btn nxt-btn-subtle" onclick="NxtEngagement.goToStep(1)">&larr; Back</button>
                        <button type="button" class="nxt-btn nxt-btn-gold" onclick="NxtEngagement.goToStep(3)">Next: AI Readiness &rarr;</button>
                    </div>
                </div>

                <!-- STEP 3: AI READINESS -->
                <div class="nxt-step-pane" id="nxtStep3" style="display:none;">
                    <div style="background:#F0FDF4; border:1px solid #BBF7D0; border-radius:10px; padding:0.9rem; margin-bottom:1.4rem; font-size:0.82rem; color:#166534; line-height:1.45;">
                        <strong>Indicative Guidance Notice:</strong> This questionnaire provides preliminary technology advisory insights. It is not an ISO certification or formal compliance audit.
                    </div>

                    <div class="nxt-field">
                        <label>1. Is your business currently using AI tools in daily work?</label>
                        <span class="nxt-hint">e.g. ChatGPT, Microsoft Copilot, automated draft replies, or intelligent document search</span>
                        <div class="nxt-options-grid" data-group="q_ai_current_use">
                            <div class="nxt-option-pill" data-val="Not yet">Not yet</div>
                            <div class="nxt-option-pill selected" data-val="Exploring">Exploring / Evaluating</div>
                            <div class="nxt-option-pill" data-val="Piloting">Piloting in some teams</div>
                            <div class="nxt-option-pill" data-val="Already implemented">Part of daily workflow</div>
                            <div class="nxt-option-pill" data-val="Not sure">Not sure</div>
                        </div>
                        <input type="hidden" name="q_ai_current_use" id="nxt_q_ai_current_use" value="Exploring">
                    </div>

                    <div class="nxt-field">
                        <label>2. Have you identified specific workflows that could benefit from AI?</label>
                        <span class="nxt-hint">e.g. proposal drafting, invoice data capture, customer triage, inventory prediction</span>
                        <div class="nxt-options-grid" data-group="q_ai_opportunities">
                            <div class="nxt-option-pill" data-val="Not yet">Not yet identified</div>
                            <div class="nxt-option-pill selected" data-val="Exploring">A few ideas in discussion</div>
                            <div class="nxt-option-pill" data-val="Piloting">Multiple use cases mapped</div>
                            <div class="nxt-option-pill" data-val="Already implemented">Clear backlog ready</div>
                            <div class="nxt-option-pill" data-val="Not sure">Not sure</div>
                        </div>
                        <input type="hidden" name="q_ai_opportunities" id="nxt_q_ai_opportunities" value="Exploring">
                    </div>

                    <div class="nxt-field">
                        <label>3. Do you have guidelines for AI data privacy, risk management, and client confidentiality?</label>
                        <span class="nxt-hint">e.g. ensuring proprietary company IP and client data are not shared with public AI models</span>
                        <div class="nxt-options-grid" data-group="q_ai_risk_privacy">
                            <div class="nxt-option-pill selected" data-val="Not yet">No formal guidelines yet</div>
                            <div class="nxt-option-pill" data-val="Exploring">Informal discussions only</div>
                            <div class="nxt-option-pill" data-val="Piloting">Basic staff guidelines in place</div>
                            <div class="nxt-option-pill" data-val="Already implemented">Formal policy &amp; security review</div>
                            <div class="nxt-option-pill" data-val="Not sure">Not sure</div>
                        </div>
                        <input type="hidden" name="q_ai_risk_privacy" id="nxt_q_ai_risk_privacy" value="Not yet">
                    </div>

                    <div style="display:flex; justify-content:space-between; margin-top:1.8rem;">
                        <button type="button" class="nxt-btn nxt-btn-subtle" onclick="NxtEngagement.goToStep(2)">&larr; Back</button>
                        <button type="button" class="nxt-btn nxt-btn-gold" onclick="NxtEngagement.goToStep(4)">Next: Contact Details &rarr;</button>
                    </div>
                </div>

                <!-- STEP 4: CONTACT DETAILS -->
                <div class="nxt-step-pane" id="nxtStep4" style="display:none;">
                    <div style="margin-bottom:1.2rem;">
                        <h4 style="font-size:1.15rem; font-weight:700; color:var(--nxt-navy); margin:0 0 0.35rem 0;">Where should we send your preliminary scorecard?</h4>
                        <p style="font-size:0.86rem; color:var(--nxt-muted); margin:0; line-height:1.45;">
                            We calculate your technology maturity score immediately on the next screen and generate personalised observations.
                        </p>
                    </div>

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                        <div class="nxt-field">
                            <label for="nxt_full_name">Full Name *</label>
                            <input type="text" id="nxt_full_name" name="full_name" required placeholder="e.g. David Campbell" autocomplete="name">
                        </div>
                        <div class="nxt-field">
                            <label for="nxt_email">Business Email *</label>
                            <input type="email" id="nxt_email" name="email" required placeholder="david@company.co.uk" autocomplete="email">
                        </div>
                    </div>

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                        <div class="nxt-field">
                            <label for="nxt_company">Company Name *</label>
                            <input type="text" id="nxt_company" name="company" required placeholder="e.g. Campbell Engineering Ltd" autocomplete="organization">
                        </div>
                        <div class="nxt-field">
                            <label for="nxt_phone">Direct Phone (Optional)</label>
                            <input type="tel" id="nxt_phone" name="phone" placeholder="+44 (0)7000 000000" autocomplete="tel">
                        </div>
                    </div>

                    <div class="nxt-field">
                        <label for="nxt_notes">Specific questions, tool evaluations, or goals? (Optional)</label>
                        <textarea id="nxt_notes" name="additional_notes" rows="2" placeholder="Tell us if you are evaluating ERP migration, CRM integration, or automating specific workflows..."></textarea>
                    </div>

                    <!-- UK GDPR Compliant Consents (Unchecked by default) -->
                    <div style="margin-bottom:1.3rem;">
                        <label style="display:flex; align-items:flex-start; gap:0.65rem; font-size:0.82rem; color:var(--nxt-text); cursor:pointer; margin-bottom:0.75rem; line-height:1.45;">
                            <input type="checkbox" id="nxt_consent_assessment" required style="margin-top:3px; accent-color:var(--nxt-gold); width:16px; height:16px; flex-shrink:0;">
                            <span>I consent to The Nexteck processing my business details to generate and send my Technology Health Check scorecard and recommendations in accordance with the <a href="{{ route('privacy-policy') }}" target="_blank" rel="noopener" style="color:var(--nxt-navy); text-decoration:underline; font-weight:600;">Privacy Policy</a>. *</span>
                        </label>

                        <label style="display:flex; align-items:flex-start; gap:0.65rem; font-size:0.82rem; color:var(--nxt-muted); cursor:pointer; line-height:1.45;">
                            <input type="checkbox" id="nxt_consent_marketing" style="margin-top:3px; accent-color:var(--nxt-gold); width:16px; height:16px; flex-shrink:0;">
                            <span>Keep me updated with occasional technology strategy insights, industry benchmarks, and automation guides. (Optional)</span>
                        </label>
                    </div>

                    <div id="nxtStep4Error" class="nxt-step-error"></div>

                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <button type="button" class="nxt-btn nxt-btn-subtle" onclick="NxtEngagement.goToStep(3)">&larr; Back</button>
                        <button type="button" class="nxt-btn nxt-btn-gold" id="nxtSubmitAssessmentBtn" onclick="NxtEngagement.submitAssessment()">
                            Generate My Health Check Results &rarr;
                        </button>
                    </div>
                </div>

                <!-- STEP 5: RESULTS -->
                <div class="nxt-step-pane" id="nxtStep5" style="display:none;">
                    <div class="nxt-result-score-card">
                        <span style="font-size:0.75rem; font-weight:700; text-transform:uppercase; letter-spacing:0.1em; color:var(--nxt-gold-light);">
                            Indicative Technology Maturity
                        </span>
                        <div class="nxt-score-circle" id="nxtResultScore">--%</div>
                        <h4 style="font-size:1.35rem; margin:0 0 0.4rem 0; color:#fff;" id="nxtResultTier">Emerging</h4>
                        <p style="font-size:0.92rem; color:#CBD5E1; max-width:54ch; margin:0 auto; line-height:1.5;" id="nxtResultSummary">
                            Calculating assessment findings...
                        </p>
                        <div style="font-size:0.75rem; color:#94A3B8; margin-top:0.9rem; border-top:1px solid rgba(255,255,255,0.12); padding-top:0.6rem;" id="nxtResultMethodology">
                            Scoring Methodology: Weighted evaluation of Operational Efficiency (60%), Practical AI Adoption (25%), and Data Privacy &amp; Governance (15%).
                        </div>
                    </div>

                    <!-- Metrics Breakdown (Operations, AI Adoption, AI Governance) -->
                    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(180px, 1fr)); gap:0.9rem; margin-bottom:1.4rem;">
                        <div style="background:#FAF9F6; border:1px solid #E5E7EB; border-radius:10px; padding:1rem; text-align:center;">
                            <span style="font-size:0.74rem; color:var(--nxt-muted); text-transform:uppercase; font-weight:700; letter-spacing:0.04em;">Operational Efficiency</span>
                            <div style="font-size:1.5rem; font-weight:700; color:var(--nxt-navy); margin-top:0.25rem;" id="nxtResultOpScore">--%</div>
                        </div>
                        <div style="background:#FAF9F6; border:1px solid #E5E7EB; border-radius:10px; padding:1rem; text-align:center;">
                            <span style="font-size:0.74rem; color:var(--nxt-muted); text-transform:uppercase; font-weight:700; letter-spacing:0.04em;">Practical AI Adoption</span>
                            <div style="font-size:1.5rem; font-weight:700; color:var(--nxt-navy); margin-top:0.25rem;" id="nxtResultAiUsageScore">--%</div>
                        </div>
                        <div style="background:#FAF9F6; border:1px solid #E5E7EB; border-radius:10px; padding:1rem; text-align:center;">
                            <span style="font-size:0.74rem; color:var(--nxt-muted); text-transform:uppercase; font-weight:700; letter-spacing:0.04em;">AI Governance &amp; Safety</span>
                            <div style="font-size:1.5rem; font-weight:700; color:var(--nxt-navy); margin-top:0.25rem;" id="nxtResultAiGovScore">--%</div>
                        </div>
                    </div>

                    <!-- Key Observations & Next Steps -->
                    <div style="background:#FAF9F6; border:1px solid #E5E7EB; border-radius:12px; padding:1.3rem; margin-bottom:1.5rem;">
                        <h5 style="font-size:0.85rem; font-weight:700; text-transform:uppercase; color:var(--nxt-navy); margin:0 0 0.6rem 0; letter-spacing:0.05em;">
                            Strategic Observations
                        </h5>
                        <ul id="nxtResultObservations" style="padding-left:1.2rem; margin:0 0 1.2rem 0; font-size:0.88rem; color:var(--nxt-text); line-height:1.55;">
                        </ul>

                        <h5 style="font-size:0.85rem; font-weight:700; text-transform:uppercase; color:var(--nxt-navy); margin:0 0 0.6rem 0; letter-spacing:0.05em;">
                            Recommended Next Steps
                        </h5>
                        <ul id="nxtResultNextSteps" style="padding-left:1.2rem; margin:0; font-size:0.88rem; color:var(--nxt-text); line-height:1.55;">
                        </ul>
                    </div>

                    <!-- Indicative Disclaimer Notice -->
                    <p style="font-size:0.75rem; color:var(--nxt-muted); text-align:center; margin:-0.5rem 0 1.2rem; line-height:1.45;">
                        <em>Note:</em> Results provide indicative strategic orientation based on self-reported inputs. They do not constitute a formal compliance certification or statutory audit.
                    </p>

                    <!-- CTAs & Actions -->
                    <div style="display:flex; flex-direction:column; gap:0.65rem;">
                        <button type="button" class="nxt-btn nxt-btn-gold" id="nxtBookFromResultsBtn" onclick="NxtEngagement.bookDiscoveryCallFromResults()" style="width:100%; font-size:1rem; padding:0.95rem;">
                            Discuss Your Results With Our Team &rarr;
                        </button>
                        <div style="display:flex; gap:0.6rem; justify-content:center; align-items:center;">
                            <button type="button" class="nxt-btn nxt-btn-ghost" onclick="NxtEngagement.printReport()" style="flex:1; font-size:0.86rem; padding:0.65rem 1rem;">
                                Download / Print Scorecard (PDF)
                            </button>
                            <button type="button" class="nxt-btn nxt-btn-subtle" onclick="NxtEngagement.goToStep(1)" style="flex:1; font-size:0.86rem; padding:0.65rem 1rem;">
                                &larr; Edit Answers
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- 3. AUTOMATION SAVINGS CALCULATOR MODAL -->
<div class="nxt-overlay" id="nxtCalculatorOverlay" role="dialog" aria-modal="true" aria-labelledby="nxtCalcHeading">
    <div class="nxt-modal" style="max-width: 620px;">
        <button type="button" class="nxt-modal-close" id="nxtCalcCloseBtn" aria-label="Close dialog">&times;</button>
        <div class="nxt-modal-header">
            <span class="nxt-tag">ROI &amp; Capacity Model</span>
            <h3 id="nxtCalcHeading">Automation Savings Calculator</h3>
            <p>Estimate weekly hours returned and indicative annual cost equivalent through streamlined workflow automation.</p>
        </div>

        <div class="nxt-modal-body">
            <!-- Inputs -->
            <div class="nxt-field">
                <div class="nxt-calc-range-row">
                    <label for="nxt_calc_employees">Employees involved in repetitive processes</label>
                    <span class="nxt-calc-range-val" id="nxt_calc_employees_val">5 staff</span>
                </div>
                <input type="range" id="nxt_calc_employees" min="1" max="50" value="5" step="1" oninput="NxtEngagement.recalcSavings()" style="width:100%; accent-color:var(--nxt-gold);">
            </div>

            <div class="nxt-field">
                <div class="nxt-calc-range-row">
                    <label for="nxt_calc_hours">Hours spent per person each week on repetitive work</label>
                    <span class="nxt-calc-range-val" id="nxt_calc_hours_val">8 hrs/wk</span>
                </div>
                <input type="range" id="nxt_calc_hours" min="1" max="30" value="8" step="1" oninput="NxtEngagement.recalcSavings()" style="width:100%; accent-color:var(--nxt-gold);">
            </div>

            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                <div class="nxt-field">
                    <label for="nxt_calc_rate">Estimated hourly labour cost (£/hr)</label>
                    <input type="number" id="nxt_calc_rate" min="15" max="300" value="32" oninput="NxtEngagement.recalcSavings()">
                </div>
                <div class="nxt-field">
                    <label for="nxt_calc_cost">Estimated implementation cost (£, optional)</label>
                    <input type="number" id="nxt_calc_cost" min="0" max="100000" value="2950" oninput="NxtEngagement.recalcSavings()">
                </div>
            </div>

            <div class="nxt-field">
                <div class="nxt-calc-range-row">
                    <label for="nxt_calc_pct">Estimated percentage of work that could be automated</label>
                    <span class="nxt-calc-range-val" id="nxt_calc_pct_val">40%</span>
                </div>
                <input type="range" id="nxt_calc_pct" min="10" max="80" value="40" step="5" oninput="NxtEngagement.recalcSavings()" style="width:100%; accent-color:var(--nxt-gold);">
            </div>

            <!-- Real-Time Calculation Output Box -->
            <div class="nxt-calc-result-box">
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem; margin-bottom:1rem; text-align:center;">
                    <div style="background:#fff; padding:0.9rem; border-radius:8px; border:1px solid #E2E8F0;">
                        <span style="font-size:0.75rem; color:var(--nxt-muted); text-transform:uppercase; font-weight:700;">Weekly Hours Saved</span>
                        <div style="font-size:1.5rem; font-weight:700; color:var(--nxt-navy);" id="nxt_res_weekly_hours">16 hrs</div>
                    </div>
                    <div style="background:#fff; padding:0.9rem; border-radius:8px; border:1px solid #E2E8F0;">
                        <span style="font-size:0.75rem; color:var(--nxt-muted); text-transform:uppercase; font-weight:700;">Annual Hours Saved</span>
                        <div style="font-size:1.5rem; font-weight:700; color:var(--nxt-navy);" id="nxt_res_annual_hours">768 hrs</div>
                    </div>
                </div>

                <div style="background:#ECFDF5; border:1px solid #A7F3D0; border-radius:10px; padding:1.1rem; display:grid; grid-template-columns:1fr 1fr; gap:1rem; text-align:center;">
                    <div>
                        <span style="font-size:0.75rem; color:#065F46; text-transform:uppercase; font-weight:700;">Annual Labour Value</span>
                        <div style="font-size:1.5rem; font-weight:700; color:#065F46;" id="nxt_res_annual_value">£24,576</div>
                    </div>
                    <div>
                        <span style="font-size:0.75rem; color:#065F46; text-transform:uppercase; font-weight:700;">Indicative Payback</span>
                        <div style="font-size:1.5rem; font-weight:700; color:#065F46;" id="nxt_res_payback">1.4 months</div>
                    </div>
                </div>

                <p style="font-size:0.75rem; color:var(--nxt-muted); margin:0.9rem 0 0 0; line-height:1.45;">
                    <em>Disclaimer:</em> Theoretical labour-cost equivalent reflects recovered productive capacity. Actual cash savings depend on specific process complexity, tool licensing, and staff redeployment.
                </p>
            </div>

            <!-- CTA -->
            <div style="margin-top:1.5rem; display:flex; gap:0.8rem;">
                <button type="button" class="nxt-btn nxt-btn-gold" onclick="NxtEngagement.discussAutomation()" style="flex:1;">
                    Discuss Automation Opportunities &rarr;
                </button>
            </div>
        </div>
    </div>
</div>

<!-- 4. PERSISTENT FLOATING QUICK TRIGGER WIDGET -->
@if((\App\Models\EngagementSetting::get('widget_enabled', '1')) == '1')
<div class="nxt-quick-pill" id="nxtQuickLauncher" onclick="NxtEngagement.openAssessmentModal()" title="Take our 2-minute AI Assistant">
    <span class="nxt-spark">✦</span>
    <span>AI Assistant</span>
</div>
@endif

<!-- ================= Nexteck Engagement Core JS Engine ================= -->
<script>
(function() {
    window.NxtEngagement = {
        settings: {
            popupEnabled: {{ (\App\Models\EngagementSetting::get('popup_enabled', '1')) == '1' ? 'true' : 'false' }},
            delaySeconds: {{ (int) \App\Models\EngagementSetting::get('popup_delay_seconds', 8) }},
            frequencyDays: {{ (int) \App\Models\EngagementSetting::get('popup_frequency_days', 7) }},
            exitIntentEnabled: {{ (\App\Models\EngagementSetting::get('popup_exit_intent', '1')) == '1' ? 'true' : 'false' }},
            calcEnabled: {{ (\App\Models\EngagementSetting::get('calculator_enabled', '1')) == '1' ? 'true' : 'false' }},
        },
        currentStep: 1,
        lastLeadId: null,
        lastResults: null,
        lastFocusedElement: null,

        init: function() {
            this.bindEvents();
            this.scheduleWelcomePopup();
            this.initPillGroups();
            this.recalcSavings();
            this.autoFillFromParams();
        },

        bindEvents: function() {
            const self = this;

            // Welcome popup handlers
            const welcomeOverlay = document.getElementById('nxtWelcomeOverlay');
            const welcomeCardTrigger = document.getElementById('nxtWelcomeCardTrigger');
            const welcomeCloseBtn = document.getElementById('nxtWelcomeCloseBtn');
            const welcomeDismissBtn = document.getElementById('nxtWelcomeDismissBtn');
            const welcomeStartBtn = document.getElementById('nxtWelcomeStartAssessmentBtn');
            const welcomeExploreBtn = document.getElementById('nxtWelcomeExploreBtn');

            // Interactive assessment card click / keypress
            if (welcomeCardTrigger) {
                welcomeCardTrigger.onclick = () => {
                    self.trackEvent('welcome_popup_clicked', { action: 'assessment_card' });
                    self.hideModal('nxtWelcomeOverlay');
                    setTimeout(() => self.openAssessmentModal(), 200);
                };
                welcomeCardTrigger.onkeydown = (e) => {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        welcomeCardTrigger.click();
                    }
                };
            }

            // Primary Gold CTA
            if (welcomeStartBtn) {
                welcomeStartBtn.onclick = () => {
                    self.trackEvent('welcome_popup_clicked', { action: 'start_assessment' });
                    self.hideModal('nxtWelcomeOverlay');
                    setTimeout(() => self.openAssessmentModal(), 200);
                };
            }

            // Secondary Explore Services CTA
            if (welcomeExploreBtn) {
                welcomeExploreBtn.onclick = () => {
                    self.trackEvent('welcome_popup_service_clicked', { href: welcomeExploreBtn.getAttribute('href') });
                };
            }

            // Close & Dismiss actions
            if (welcomeCloseBtn) welcomeCloseBtn.onclick = () => self.dismissWelcomePopup('button_x');
            if (welcomeDismissBtn) welcomeDismissBtn.onclick = () => self.dismissWelcomePopup('maybe_later');

            // Backdrop click to dismiss
            document.querySelectorAll('.nxt-overlay').forEach(overlay => {
                overlay.addEventListener('click', function(e) {
                    if (e.target === overlay) {
                        if (overlay.id === 'nxtWelcomeOverlay') {
                            self.dismissWelcomePopup('backdrop_click');
                        } else {
                            self.hideModal(overlay.id);
                        }
                    }
                });
            });

            // Assessment modal handlers
            const assessmentCloseBtn = document.getElementById('nxtAssessmentCloseBtn');
            if (assessmentCloseBtn) {
                assessmentCloseBtn.onclick = () => {
                    if (self.currentStep > 1 && self.currentStep < 5 && !localStorage.getItem('nxt_assessment_completed')) {
                        self.trackEvent('assessment_abandoned', { step: self.currentStep });
                    }
                    self.hideModal('nxtAssessmentOverlay');
                    try {
                        localStorage.setItem('nxt_engagement_seen', 'true');
                        const days = self.settings.frequencyDays || 7;
                        const expiry = Date.now() + (days * 24 * 60 * 60 * 1000);
                        localStorage.setItem('nxt_popup_dismissed_until', expiry.toString());
                    } catch (e) {}
                };
            }

            // Calculator modal handlers
            const calcCloseBtn = document.getElementById('nxtCalcCloseBtn');
            if (calcCloseBtn) calcCloseBtn.onclick = () => self.hideModal('nxtCalculatorOverlay');

            // Escape key dismiss
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    if (document.getElementById('nxtWelcomeOverlay')?.classList.contains('nxt-active')) {
                        self.dismissWelcomePopup('escape_key');
                    } else {
                        if (self.currentStep > 1 && self.currentStep < 5 && !localStorage.getItem('nxt_assessment_completed')) {
                            self.trackEvent('assessment_abandoned', { step: self.currentStep });
                        }
                        self.hideModal('nxtAssessmentOverlay');
                        self.hideModal('nxtCalculatorOverlay');
                    }
                }
            });

            // Accessible focus trap within active modal
            document.addEventListener('keydown', function(e) {
                if (e.key !== 'Tab') return;
                const activeModal = document.querySelector('.nxt-overlay.nxt-active .nxt-modal');
                if (!activeModal) return;

                const focusable = activeModal.querySelectorAll('button:not([disabled]), [href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])');
                if (!focusable.length) return;

                const firstEl = focusable[0];
                const lastEl = focusable[focusable.length - 1];

                if (e.shiftKey) {
                    if (document.activeElement === firstEl) {
                        e.preventDefault();
                        lastEl.focus();
                    }
                } else {
                    if (document.activeElement === lastEl) {
                        e.preventDefault();
                        firstEl.focus();
                    }
                }
            });

            // Desktop Exit-Intent
            if (self.settings.exitIntentEnabled && !self.isMobile()) {
                document.addEventListener('mouseleave', function(e) {
                    if (e.clientY <= 12 && !self.isFrequencyCapped() && !self.isAnyModalOpen()) {
                        self.showWelcomePopup('exit_intent');
                    }
                });
            }
        },

        isMobile: function() {
            return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
        },

        isAnyModalOpen: function() {
            return document.querySelector('.nxt-overlay.nxt-active') !== null;
        },

        isFrequencyCapped: function() {
            try {
                if (localStorage.getItem('nxt_assessment_completed') === 'true') return true;
                if (localStorage.getItem('nxt_welcome_dismissed') === 'true') return true;
                if (localStorage.getItem('nxt_engagement_seen') === 'true') return true;

                const dismissedUntil = localStorage.getItem('nxt_popup_dismissed_until');
                if (dismissedUntil && Date.now() < parseInt(dismissedUntil, 10)) {
                    return true;
                }
            } catch (e) {}
            return false;
        },

        scheduleWelcomePopup: function() {
            const self = this;
            if (!self.settings.popupEnabled || self.isFrequencyCapped()) return;

            const delayMs = (parseInt(self.settings.delaySeconds, 10) || 8) * 1000;
            setTimeout(function() {
                if (!self.isFrequencyCapped() && !self.isAnyModalOpen()) {
                    self.showWelcomePopup('time_delay');
                }
            }, delayMs);
        },

        showWelcomePopup: function(trigger) {
            if (this.isAnyModalOpen()) return;
            this.showModal('nxtWelcomeOverlay');
            this.trackEvent('welcome_popup_viewed', { trigger: trigger });
        },

        dismissWelcomePopup: function(reason) {
            this.hideModal('nxtWelcomeOverlay');
            this.trackEvent('welcome_popup_dismissed', { reason: reason });

            // Store in browser cache/localStorage so it does not auto-open again
            try {
                const days = this.settings.frequencyDays || 7;
                const expiry = Date.now() + (days * 24 * 60 * 60 * 1000);
                localStorage.setItem('nxt_popup_dismissed_until', expiry.toString());
                localStorage.setItem('nxt_welcome_dismissed', 'true');
                localStorage.setItem('nxt_welcome_seen', 'true');
                localStorage.setItem('nxt_engagement_seen', 'true');
            } catch (e) {}
        },

        openAssessmentModal: function() {
            this.showModal('nxtAssessmentOverlay');
            this.goToStep(1);
            this.trackEvent('assessment_started', { source: 'modal' });
        },

        openCalculatorModal: function() {
            this.showModal('nxtCalculatorOverlay');
            this.trackEvent('calculator_used', { source: 'modal' });
        },

        showModal: function(modalId) {
            const el = document.getElementById(modalId);
            if (!el) return;

            // Ensure no other modal remains active simultaneously
            document.querySelectorAll('.nxt-overlay.nxt-active').forEach(m => {
                if (m.id !== modalId) m.classList.remove('nxt-active');
            });

            this.lastFocusedElement = document.activeElement;
            el.classList.add('nxt-active');
            document.body.style.overflow = 'hidden';

            // Focus management
            const focusable = el.querySelectorAll('button:not([disabled]), [href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])');
            if (focusable.length) {
                setTimeout(() => focusable[0].focus(), 50);
            }
        },

        hideModal: function(modalId) {
            const el = document.getElementById(modalId);
            if (el) el.classList.remove('nxt-active');

            if (!this.isAnyModalOpen()) {
                document.body.style.overflow = '';
                if (this.lastFocusedElement && typeof this.lastFocusedElement.focus === 'function') {
                    try {
                        this.lastFocusedElement.focus();
                    } catch (e) {}
                }
            }
        },

        initPillGroups: function() {
            document.querySelectorAll('.nxt-options-grid:not(.nxt-multi-grid)').forEach(grid => {
                const hiddenInput = grid.nextElementSibling;
                grid.querySelectorAll('.nxt-option-pill').forEach(pill => {
                    const selectOption = () => {
                        grid.querySelectorAll('.nxt-option-pill').forEach(p => {
                            p.classList.remove('selected');
                            p.setAttribute('aria-checked', 'false');
                        });
                        pill.classList.add('selected');
                        pill.setAttribute('aria-checked', 'true');
                        if (hiddenInput && hiddenInput.tagName === 'INPUT') {
                            hiddenInput.value = pill.getAttribute('data-val');
                        }
                    };
                    pill.onclick = selectOption;
                    pill.onkeydown = (e) => {
                        if (e.key === 'Enter' || e.key === ' ') {
                            e.preventDefault();
                            selectOption();
                        }
                    };
                });
            });
            this.initChallengePills();
        },

        initChallengePills: function() {
            const grid = document.getElementById('nxtChallengesGrid');
            if (!grid) return;
            const otherWrap = document.getElementById('nxt_challenge_other_wrap');
            const hiddenInput = document.getElementById('nxt_challenge');

            grid.querySelectorAll('.nxt-multi-pill').forEach(pill => {
                const toggle = () => {
                    const isSelected = pill.classList.toggle('selected');
                    pill.setAttribute('aria-checked', isSelected ? 'true' : 'false');

                    if (pill.id === 'nxtChallengeOtherPill') {
                        if (otherWrap) {
                            otherWrap.style.display = isSelected ? 'block' : 'none';
                            if (isSelected) {
                                setTimeout(() => document.getElementById('nxt_challenge_other')?.focus(), 50);
                            }
                        }
                    }

                    const selectedVals = Array.from(grid.querySelectorAll('.nxt-multi-pill.selected'))
                        .map(p => p.getAttribute('data-val'))
                        .filter(v => v !== 'Other');

                    if (hiddenInput) {
                        hiddenInput.value = selectedVals.length ? selectedVals.join(', ') : '';
                    }

                    const err = document.getElementById('nxtStep1Error');
                    if (err) err.style.display = 'none';
                };

                pill.onclick = toggle;
                pill.onkeydown = (e) => {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        toggle();
                    }
                };
            });
        },

        toggleIndustryOther: function(val) {
            const wrap = document.getElementById('nxt_industry_other_wrap');
            const err = document.getElementById('nxtStep1Error');
            if (err) err.style.display = 'none';
            if (wrap) {
                if (val === 'Other') {
                    wrap.style.display = 'block';
                    setTimeout(() => document.getElementById('nxt_industry_other')?.focus(), 50);
                } else {
                    wrap.style.display = 'none';
                }
            }
        },

        validateAndAdvanceStep1: function() {
            const indSelect = document.getElementById('nxt_industry');
            const indVal = indSelect ? indSelect.value : '';
            const indOther = document.getElementById('nxt_industry_other');
            const err = document.getElementById('nxtStep1Error');

            if (!indVal) {
                if (err) {
                    err.innerText = 'Please select your industry sector to continue.';
                    err.style.display = 'block';
                }
                indSelect?.focus();
                return;
            }

            if (indVal === 'Other' && (!indOther || !indOther.value.trim())) {
                if (err) {
                    err.innerText = 'Please specify your industry in the provided field.';
                    err.style.display = 'block';
                }
                indOther?.focus();
                return;
            }

            const selectedPills = document.querySelectorAll('#nxtChallengesGrid .nxt-multi-pill.selected');
            if (selectedPills.length === 0) {
                if (err) {
                    err.innerText = 'Please select at least one primary operational challenge.';
                    err.style.display = 'block';
                }
                return;
            }

            const otherPill = document.getElementById('nxtChallengeOtherPill');
            const otherInput = document.getElementById('nxt_challenge_other');
            if (otherPill && otherPill.classList.contains('selected') && (!otherInput || !otherInput.value.trim())) {
                if (err) {
                    err.innerText = 'Please describe your operational challenge in the text field.';
                    err.style.display = 'block';
                }
                otherInput?.focus();
                return;
            }

            if (err) err.style.display = 'none';
            this.goToStep(2);
        },

        goToStep: function(step) {
            this.currentStep = step;
            for (let i = 1; i <= 5; i++) {
                const pane = document.getElementById('nxtStep' + i);
                if (pane) pane.style.display = (i === step) ? 'block' : 'none';
            }

            // Update step bar
            document.querySelectorAll('#nxtStepsBar .nxt-step-item').forEach(item => {
                const num = parseInt(item.getAttribute('data-step'), 10);
                item.classList.remove('active', 'completed');
                if (num === step) item.classList.add('active');
                else if (num < step) item.classList.add('completed');
            });

            // Focus top of active pane
            const activePane = document.getElementById('nxtStep' + step);
            if (activePane) {
                const focusable = activePane.querySelectorAll('button:not([disabled]), [href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])');
                if (focusable.length) {
                    setTimeout(() => focusable[0].focus(), 50);
                }
            }

            if (step > 1 && step < 5) {
                this.trackEvent('assessment_step_completed', { step: step - 1 });
            }
        },

        submitAssessment: function() {
            const self = this;
            if (self.isSubmitting) return;

            const nameEl = document.getElementById('nxt_full_name');
            const emailEl = document.getElementById('nxt_email');
            const compEl = document.getElementById('nxt_company');
            const phoneEl = document.getElementById('nxt_phone');
            const notesEl = document.getElementById('nxt_notes');
            const consentAssessEl = document.getElementById('nxt_consent_assessment');
            const consentMktgEl = document.getElementById('nxt_consent_marketing');
            const errBox = document.getElementById('nxtStep4Error');
            const btn = document.getElementById('nxtSubmitAssessmentBtn');

            const name = nameEl ? nameEl.value.trim() : '';
            const email = emailEl ? emailEl.value.trim() : '';
            const company = compEl ? compEl.value.trim() : '';
            const phone = phoneEl ? phoneEl.value.trim() : '';
            const notes = notesEl ? notesEl.value.trim() : '';
            const honeypot = document.getElementById('nxt_hp_company_url')?.value || '';

            // Honeypot spam check
            if (honeypot) return;

            // Input Validation
            if (!name) {
                if (errBox) { errBox.innerText = 'Please provide your full name.'; errBox.style.display = 'block'; }
                nameEl?.focus();
                return;
            }
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email || !emailRegex.test(email)) {
                if (errBox) { errBox.innerText = 'Please provide a valid business email address.'; errBox.style.display = 'block'; }
                emailEl?.focus();
                return;
            }
            if (!company) {
                if (errBox) { errBox.innerText = 'Please provide your company or organisation name.'; errBox.style.display = 'block'; }
                compEl?.focus();
                return;
            }
            if (!consentAssessEl || !consentAssessEl.checked) {
                if (errBox) { errBox.innerText = 'Please agree to allow processing of your inputs to generate your preliminary results.'; errBox.style.display = 'block'; }
                consentAssessEl?.focus();
                return;
            }

            if (errBox) errBox.style.display = 'none';

            // Extract challenges array
            const selectedChallenges = [];
            document.querySelectorAll('#nxtChallengesGrid .nxt-multi-pill.selected').forEach(pill => {
                const val = pill.getAttribute('data-val');
                if (val === 'Other') {
                    const customChal = document.getElementById('nxt_challenge_other')?.value.trim();
                    if (customChal) selectedChallenges.push('Other: ' + customChal);
                } else if (val) {
                    selectedChallenges.push(val);
                }
            });

            // Extract Industry
            let industryVal = document.getElementById('nxt_industry')?.value || '';
            const industryOther = document.getElementById('nxt_industry_other')?.value.trim();
            if (industryVal === 'Other' && industryOther) {
                industryVal = 'Other: ' + industryOther;
            }

            self.isSubmitting = true;
            if (btn) {
                btn.disabled = true;
                btn.innerText = 'Analyzing Responses & Generating Score...';
            }

            const payload = {
                full_name: name,
                email: email,
                company: company,
                phone: phone,
                industry: industryVal,
                industry_other: industryOther,
                company_size: document.getElementById('nxt_company_size')?.value || '11–50 employees',
                primary_challenge: selectedChallenges.length ? selectedChallenges[0] : (document.getElementById('nxt_challenge')?.value || ''),
                challenges: selectedChallenges,
                additional_notes: notes,
                consent_assessment: true,
                consent_marketing: consentMktgEl ? consentMktgEl.checked : false,
                responses: {
                    industry: industryVal,
                    company_size: document.getElementById('nxt_company_size')?.value || '11–50 employees',
                    primary_challenge: selectedChallenges.length ? selectedChallenges[0] : '',
                    challenges: selectedChallenges,
                    q_manual_work: document.getElementById('nxt_q_manual_work')?.value || 'Partially',
                    q_systems_integration: document.getElementById('nxt_q_systems_integration')?.value || 'Partially',
                    q_reports_visibility: document.getElementById('nxt_q_reports_visibility')?.value || 'Partially',
                    q_tech_roadmap: document.getElementById('nxt_q_tech_roadmap')?.value || 'Partially',
                    q_ai_current_use: document.getElementById('nxt_q_ai_current_use')?.value || 'Exploring',
                    q_ai_opportunities: document.getElementById('nxt_q_ai_opportunities')?.value || 'Exploring',
                    q_ai_risk_privacy: document.getElementById('nxt_q_ai_risk_privacy')?.value || 'Not yet',
                },
                calculator_inputs: self.getCalcInputs(),
                calculator_results: self.getCalcOutputs(),
            };

            fetch('/api/engagement/assessment', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                },
                body: JSON.stringify(payload),
            })
            .then(res => res.json())
            .then(data => {
                self.isSubmitting = false;
                if (btn) {
                    btn.disabled = false;
                    btn.innerText = 'Generate My Health Check Results →';
                }

                if (data.success) {
                    self.lastLeadId = data.lead_id;
                    self.lastResults = data;
                    self.renderResults(data);
                    self.goToStep(5);

                    try {
                        localStorage.setItem('nxt_assessment_completed', 'true');
                        localStorage.setItem('nxt_lead_name', name);
                        localStorage.setItem('nxt_lead_email', email);
                        localStorage.setItem('nxt_lead_company', company);
                        localStorage.setItem('nxt_lead_challenge', payload.primary_challenge);
                    } catch (e) {}

                    self.trackEvent('assessment_completed', { score: data.score, maturity: data.maturity_level });
                    self.trackEvent('assessment_results_viewed', { score: data.score });
                } else {
                    if (errBox) {
                        errBox.innerText = data.message || 'Error generating assessment results. Please check your inputs.';
                        errBox.style.display = 'block';
                    } else {
                        alert(data.message || 'Error generating assessment results.');
                    }
                }
            })
            .catch(err => {
                self.isSubmitting = false;
                if (btn) {
                    btn.disabled = false;
                    btn.innerText = 'Generate My Health Check Results →';
                }
                if (errBox) {
                    errBox.innerText = 'Connection error. Please check your network and try again.';
                    errBox.style.display = 'block';
                } else {
                    alert('Connection error. Please try again.');
                }
            });
        },

        renderResults: function(data) {
            document.getElementById('nxtResultScore').innerText = data.score + '%';
            document.getElementById('nxtResultTier').innerText = data.maturity_level + ' Technology Maturity';
            document.getElementById('nxtResultSummary').innerText = data.summary;
            document.getElementById('nxtResultOpScore').innerText = data.operational_score + '%';
            document.getElementById('nxtResultAiUsageScore').innerText = (data.ai_usage_score || data.ai_readiness_score) + '%';
            document.getElementById('nxtResultAiGovScore').innerText = (data.ai_governance_score || 25) + '%';
            if (data.methodology_note) {
                const methEl = document.getElementById('nxtResultMethodology');
                if (methEl) methEl.innerText = 'Scoring Methodology: ' + data.methodology_note;
            }

            const obsUl = document.getElementById('nxtResultObservations');
            if (obsUl) {
                obsUl.innerHTML = '';
                (data.observations || []).forEach(obs => {
                    const li = document.createElement('li');
                    li.innerText = obs;
                    obsUl.appendChild(li);
                });
            }

            const stepsUl = document.getElementById('nxtResultNextSteps');
            if (stepsUl) {
                stepsUl.innerHTML = '';
                (data.recommended_steps || []).forEach(step => {
                    const li = document.createElement('li');
                    li.innerText = step;
                    stepsUl.appendChild(li);
                });
            }
        },

        printReport: function() {
            window.print();
        },

        bookDiscoveryCallFromResults: function() {
            const self = this;
            const btn = document.getElementById('nxtBookFromResultsBtn');
            if (btn) {
                btn.disabled = true;
                btn.innerText = 'Requesting Advisory Slot...';
            }

            const name = document.getElementById('nxt_full_name')?.value.trim() || localStorage.getItem('nxt_lead_name') || '';
            const email = document.getElementById('nxt_email')?.value.trim() || localStorage.getItem('nxt_lead_email') || '';
            const company = document.getElementById('nxt_company')?.value.trim() || localStorage.getItem('nxt_lead_company') || '';
            const phone = document.getElementById('nxt_phone')?.value.trim() || '';
            const size = document.getElementById('nxt_company_size')?.value || '11–50 employees';
            const chal = document.getElementById('nxt_challenge')?.value || 'Technology Health Check Diagnostic';

            fetch('/api/engagement/consultation', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({
                    lead_id: self.lastLeadId,
                    full_name: name,
                    work_email: email,
                    company: company,
                    phone: phone,
                    team_size: size,
                    pain_point: 'Health Check: ' + chal + ' (Maturity: ' + (self.lastResults ? self.lastResults.maturity_level : 'Evaluated') + ')',
                    source: 'health_check_results',
                }),
            })
            .then(res => res.json())
            .then(data => {
                if (btn) {
                    btn.disabled = false;
                    btn.innerText = '✓ Advisory Call Slot Requested!';
                    btn.style.background = '#059669';
                }
                self.trackEvent('consultation_requested', { lead_id: self.lastLeadId });
                alert(data.message || 'Your consultation request has been received! Our advisory team will contact you within one business day.');
                setTimeout(() => self.hideModal('nxtAssessmentOverlay'), 1800);
            })
            .catch(() => {
                window.location.href = "{{ route('landing') }}#book?full_name=" + encodeURIComponent(name) + "&work_email=" + encodeURIComponent(email) + "&company=" + encodeURIComponent(company);
            });
        },

        // Automation Savings Calculator Math
        recalcSavings: function() {
            const empEl = document.getElementById('nxt_calc_employees');
            const hrsEl = document.getElementById('nxt_calc_hours');
            const rateEl = document.getElementById('nxt_calc_rate');
            const costEl = document.getElementById('nxt_calc_cost');
            const pctEl = document.getElementById('nxt_calc_pct');

            if (!empEl || !hrsEl || !rateEl || !pctEl) return;

            const employees = parseInt(empEl.value, 10) || 5;
            const hoursPerWeek = parseFloat(hrsEl.value) || 8;
            const rate = parseFloat(rateEl.value) || 32;
            const cost = parseFloat(costEl.value) || 2950;
            const pct = parseFloat(pctEl.value) || 40;

            document.getElementById('nxt_calc_employees_val').innerText = employees + ' staff';
            document.getElementById('nxt_calc_hours_val').innerText = hoursPerWeek + ' hrs/wk';
            document.getElementById('nxt_calc_pct_val').innerText = pct + '%';

            // Weekly hours saved = employees * hoursPerWeek * (pct / 100)
            const weeklyHoursSaved = Math.round(employees * hoursPerWeek * (pct / 100));
            // Annual working weeks = 48
            const annualHoursSaved = Math.round(weeklyHoursSaved * 48);
            // Annual labour cost equivalent = annualHoursSaved * rate
            const annualLabourVal = Math.round(annualHoursSaved * rate);

            // Payback period (months) = cost / (annualLabourVal / 12)
            let paybackMonths = annualLabourVal > 0 ? (cost / (annualLabourVal / 12)).toFixed(1) : '—';
            if (cost <= 0) paybackMonths = 'Immediate';

            document.getElementById('nxt_res_weekly_hours').innerText = weeklyHoursSaved + ' hrs';
            document.getElementById('nxt_res_annual_hours').innerText = annualHoursSaved.toLocaleString() + ' hrs';
            document.getElementById('nxt_res_annual_value').innerText = '£' + annualLabourVal.toLocaleString();
            document.getElementById('nxt_res_payback').innerText = (paybackMonths === 'Immediate') ? 'Immediate' : paybackMonths + ' months';
        },

        getCalcInputs: function() {
            const emp = document.getElementById('nxt_calc_employees');
            if (!emp) return null;
            return {
                employees: parseInt(emp.value, 10),
                hours_per_week: parseFloat(document.getElementById('nxt_calc_hours').value),
                hourly_rate: parseFloat(document.getElementById('nxt_calc_rate').value),
                implementation_cost: parseFloat(document.getElementById('nxt_calc_cost').value),
                automation_pct: parseFloat(document.getElementById('nxt_calc_pct').value),
            };
        },

        getCalcOutputs: function() {
            const wh = document.getElementById('nxt_res_weekly_hours');
            if (!wh) return null;
            const ah = document.getElementById('nxt_res_annual_hours').innerText.replace(/[^0-9]/g, '');
            const av = document.getElementById('nxt_res_annual_value').innerText.replace(/[^0-9]/g, '');
            const pb = document.getElementById('nxt_res_payback').innerText;
            return {
                weekly_hours_saved: parseInt(wh.innerText, 10),
                annual_hours_saved: parseInt(ah, 10) || 0,
                annual_labour_cost_equiv: parseInt(av, 10) || 0,
                payback_months: pb,
            };
        },

        discussAutomation: function() {
            const outputs = this.getCalcOutputs();
            const desc = outputs ? 'Automation potential: ' + outputs.weekly_hours_saved + ' hrs/wk returned, £' + outputs.annual_labour_cost_equiv.toLocaleString() + ' labour equiv.' : 'Discussing process automation savings';
            this.hideModal('nxtCalculatorOverlay');

            // Prefill into landing page book form if present, else redirect
            const fPain = document.getElementById('f-pain');
            if (fPain) {
                fPain.value = 'Manual processes eating our week';
                window.location.hash = 'book';
            } else {
                window.location.href = "{{ route('landing') }}#book?pain_point=" + encodeURIComponent(desc);
            }
        },

        // Prefill existing #leadForm if on landing page
        autoFillFromParams: function() {
            try {
                const params = new URLSearchParams(window.location.search);
                const name = params.get('full_name') || localStorage.getItem('nxt_lead_name');
                const email = params.get('work_email') || localStorage.getItem('nxt_lead_email');
                const company = params.get('company') || localStorage.getItem('nxt_lead_company');

                const fName = document.getElementById('f-name');
                const fEmail = document.getElementById('f-email');
                const fCompany = document.getElementById('f-company');

                if (fName && name && !fName.value) fName.value = name;
                if (fEmail && email && !fEmail.value) fEmail.value = email;
                if (fCompany && company && !fCompany.value) fCompany.value = company;
            } catch (e) {}
        },

        trackEvent: function(eventName, meta) {
            try {
                fetch('/api/engagement/event', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                    },
                    body: JSON.stringify({
                        event_name: eventName,
                        page_path: window.location.pathname,
                        meta: meta || {},
                    }),
                }).catch(() => {});
            } catch (e) {}
        }
    };

    // Auto-initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            window.NxtEngagement.init();
        });
    } else {
        window.NxtEngagement.init();
    }
})();
</script>
