<!-- Wipro-Inspired Enterprise Footer System -->
<style>
    .wp-footer {
        background: var(--wp-navy-950, #000F24);
        color: #94A3B8;
        padding: 5.5rem 0 2.5rem;
        position: relative;
        font-family: var(--wp-font-body, 'Inter', sans-serif);
        border-top: 1px solid rgba(255, 255, 255, 0.08);
    }

    /* Wipro Rainbow Spectrum Top Border Bar */
    .wp-footer-spectrum {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, 
            var(--wp-spectrum-blue, #0072CE) 0%, 
            var(--wp-spectrum-teal, #00A3AD) 20%, 
            var(--wp-spectrum-green, #78BE20) 40%, 
            var(--wp-spectrum-yellow, #FFB81C) 60%, 
            var(--wp-spectrum-pink, #E4007C) 80%, 
            var(--wp-spectrum-purple, #72246C) 100%
        );
    }

    .wp-foot-grid {
        display: grid;
        grid-template-columns: 2.2fr 1fr 1fr 1.3fr;
        gap: 3.5rem;
        margin-bottom: 4rem;
    }

    .wp-foot-col h4 {
        color: #FFFFFF;
        font-family: var(--wp-font-display, 'Plus Jakarta Sans', sans-serif);
        font-size: 0.84rem;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        margin-bottom: 1.5rem;
        position: relative;
        display: inline-block;
    }
    .wp-foot-col h4::after {
        content: "";
        position: absolute;
        bottom: -6px;
        left: 0;
        width: 24px;
        height: 2px;
        background: var(--wp-blue, #0052CC);
    }

    .wp-foot-links {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }
    .wp-foot-links a {
        color: #94A3B8 !important;
        text-decoration: none;
        font-size: 0.9rem;
        transition: all 0.2s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
    }
    .wp-foot-links a:hover {
        color: #FFFFFF !important;
        transform: translateX(3px);
    }

    .wp-foot-brand-desc {
        margin: 1.25rem 0;
        font-size: 0.92rem;
        line-height: 1.65;
        color: #94A3B8;
        max-width: 40ch;
    }

    .wp-foot-meta {
        font-size: 0.84rem;
        color: #64748B;
        display: flex;
        flex-direction: column;
        gap: 0.45rem;
    }
    .wp-foot-meta span {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .wp-foot-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.08);
        padding-top: 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1.25rem;
        font-size: 0.84rem;
        color: #64748B;
    }

    .wp-foot-bottom a {
        color: #64748B;
        text-decoration: none;
        transition: color 0.2s;
    }
    .wp-foot-bottom a:hover {
        color: #CBD5E1;
    }

    /* Floating Pill Quick-Action CTA - Collapsed by default, expands on hover */
    .wp-sticky-cta {
        position: fixed;
        bottom: 1.75rem;
        left: 1.75rem;
        right: auto;
        z-index: 999;
        font-family: var(--wp-font-display, 'Plus Jakarta Sans', sans-serif);
    }
    .wp-sticky-cta .wp-sticky-cta-link {
        background: rgba(0, 15, 36, 0.95);
        color: #FFFFFF;
        padding: 0.55rem 0.95rem;
        border-radius: var(--wp-radius-pill, 9999px);
        display: inline-flex;
        align-items: center;
        gap: 0.55rem;
        box-shadow: 0 12px 32px -6px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(0, 114, 206, 0.35);
        border: 1px solid rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        text-decoration: none;
        cursor: pointer;
        transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        white-space: nowrap;
    }
    .wp-sticky-cta:hover .wp-sticky-cta-link,
    .wp-sticky-cta:focus-within .wp-sticky-cta-link {
        padding: 0.65rem 1.15rem;
        gap: 0.9rem;
        transform: translateY(-2px);
        box-shadow: 0 20px 42px -6px rgba(0, 0, 0, 0.65), 0 0 0 1px rgba(0, 114, 206, 0.6);
        border-color: rgba(56, 189, 248, 0.4);
    }
    .wp-sticky-cta .cta-label {
        font-size: 0.86rem;
        font-weight: 600;
        color: #F8FAFC;
        white-space: nowrap;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .wp-sticky-cta .cta-pulse-dot {
        width: 8px;
        height: 8px;
        min-width: 8px;
        border-radius: 50%;
        background: #10B981;
        box-shadow: 0 0 8px #10B981;
        flex-shrink: 0;
    }
    .wp-sticky-cta .cta-cal-icon {
        color: #38BDF8;
        font-size: 0.85rem;
        flex-shrink: 0;
    }
    .wp-sticky-cta .cta-short-title {
        color: #F8FAFC;
        font-weight: 700;
    }
    /* Collapsible extra info - expands smoothly on hover */
    .wp-sticky-cta .cta-extra-info {
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        display: inline-block;
        white-space: nowrap;
        color: #CBD5E1;
        font-weight: 400;
        transition: max-width 0.35s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.25s ease;
    }
    .wp-sticky-cta:hover .cta-extra-info,
    .wp-sticky-cta:focus-within .cta-extra-info {
        max-width: 220px;
        opacity: 1;
        margin-left: 2px;
    }
    .wp-sticky-cta .cta-extra-info b {
        color: #FFFFFF;
        font-weight: 600;
    }
    /* Collapsible action button - expands smoothly on hover */
    .wp-sticky-cta .btn-cta-action {
        background: var(--wp-blue, #0052CC);
        color: #FFFFFF !important;
        padding: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        border-radius: var(--wp-radius-pill, 9999px);
        text-decoration: none;
        font-weight: 700;
        font-size: 0.84rem;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        white-space: nowrap;
        pointer-events: none;
        transition: max-width 0.35s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.25s ease, padding 0.35s ease, background 0.2s ease;
    }
    .wp-sticky-cta:hover .btn-cta-action,
    .wp-sticky-cta:focus-within .btn-cta-action {
        max-width: 140px;
        opacity: 1;
        padding: 0.48rem 1rem;
        pointer-events: auto;
    }
    .wp-sticky-cta .btn-cta-action:hover {
        background: #003D99;
    }

    @media (max-width: 640px) {
        .wp-sticky-cta {
            bottom: 4.8rem;
            left: 1rem;
            right: auto;
        }
        .wp-sticky-cta .wp-sticky-cta-link {
            padding: 0.5rem 0.85rem;
            gap: 0.5rem;
        }
        .wp-sticky-cta .cta-label {
            font-size: 0.78rem;
        }
        .wp-sticky-cta:hover .btn-cta-action,
        .wp-sticky-cta:focus-within .btn-cta-action {
            padding: 0.4rem 0.8rem;
            font-size: 0.78rem;
        }
    }

    @media (max-width: 992px) {
        .wp-foot-grid {
            grid-template-columns: 1fr 1fr;
            gap: 2.75rem;
        }
    }

    @media (max-width: 640px) {
        .wp-foot-grid {
            grid-template-columns: 1fr;
            gap: 2.25rem;
        }
        .wp-foot-bottom {
            flex-direction: column;
            text-align: center;
            gap: 0.75rem;
        }
    }
</style>

<footer class="wp-footer">
    <!-- Wipro Rainbow Spectrum Line Accent -->
    <div class="wp-footer-spectrum" aria-hidden="true"></div>

    <div class="wp-wrap">
        <div class="wp-foot-grid">
            <!-- Brand & Headquarters Info -->
            <div class="wp-foot-col">
                <a class="wp-logo" href="{{ route('home') }}" style="color:#FFFFFF;">
                    <div class="wp-logo-emblem">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="18" cy="4.5" r="3.2" fill="#0072CE"/>
                            <circle cx="29.5" cy="11.5" r="3.2" fill="#00A3AD"/>
                            <circle cx="31.5" cy="24.5" r="3.2" fill="#78BE20"/>
                            <circle cx="22.5" cy="32" r="3.2" fill="#FFB81C"/>
                            <circle cx="10" cy="30" r="3.2" fill="#E4007C"/>
                            <circle cx="5" cy="17.5" r="3.2" fill="#72246C"/>
                            <circle cx="18" cy="18" r="7.5" stroke="#FFFFFF" stroke-width="2.2" stroke-dasharray="2 2" opacity="0.6"/>
                            <circle cx="18" cy="18" r="3.2" fill="#38BDF8"/>
                        </svg>
                    </div>
                    <div class="wp-logo-text">
                        <span class="wp-logo-title" style="color:#FFFFFF;">Nexte<span style="color:#38BDF8;">c</span>k</span>
                        <span class="wp-logo-subtitle" style="color:#94A3B8;">Strategy &amp; Technology</span>
                    </div>
                </a>

                <p class="wp-foot-brand-desc">
                    Enterprise Software Architecture &amp; Technology Strategy Consultancy in London. Delivering bespoke software platforms, end-to-end IT audits, and actionable AI roadmaps for UK enterprises and growing businesses.
                </p>

                <div class="wp-foot-meta">
                    <span><i class="fa-solid fa-location-dot" style="color:#38BDF8; width:18px;"></i> Headquarters: London, United Kingdom</span>
                    <span><i class="fa-solid fa-globe" style="color:#00A3AD; width:18px;"></i> Global Sourcing: UK, Europe &amp; Asia-Pacific</span>
                    <span><i class="fa-solid fa-train" style="color:#FFB81C; width:18px;"></i> Strategic Rail Engineering Partner: <a href="https://pearlconrail.co.uk" target="_blank" rel="noopener" style="color:#38BDF8;">pearlconrail.co.uk</a></span>
                </div>
            </div>

            <!-- Capabilities & Solutions -->
            <div class="wp-foot-col">
                <h4>Capabilities</h4>
                <div class="wp-foot-links">
                    <a href="{{ route('home') }}">Platform Overview</a>
                    <a href="{{ route('home') }}#method">Methodology (4 Stages)</a>
                    <a href="{{ route('industries.index') }}">Industries (9 Sectors)</a>
                    <a href="{{ route('toolkit.index') }}">SME Strategy Toolkit</a>
                    <a href="{{ route('assessment.index') }}">Technology Health Check</a>
                    <a href="{{ route('calculator.index') }}">Automation ROI Calculator</a>
                    <a href="{{ route('blogs.index') }}">Insights &amp; Whitepapers</a>
                    <a href="{{ route('home') }}#urgency">Why Now &amp; Risk Reversal</a>
                </div>
            </div>

            <!-- SME Strategy Framework -->
            <div class="wp-foot-col">
                <h4>SME Toolkit</h4>
                <div class="wp-foot-links">
                    <a href="{{ route('toolkit.index') }}">Diagnostic Assessment</a>
                    <a href="{{ route('toolkit.index') }}">Industry Benchmark Matrix</a>
                    <a href="{{ route('toolkit.index') }}">Competitor Tracker</a>
                    <a href="{{ route('toolkit.index') }}">AI &amp; IT Opportunity Log</a>
                    <a href="{{ route('toolkit.index') }}">SOP &amp; Delegation Register</a>
                    <a href="{{ route('toolkit.index') }}">KPI Governance Dashboard</a>
                    <a href="{{ route('privacy-policy') }}">Privacy &amp; Data Security</a>
                </div>
            </div>

            <!-- Direct Contact & Engagement -->
            <div class="wp-foot-col">
                <h4>Connect With Us</h4>
                <div class="wp-foot-links">
                    <a href="{{ route('landing') }}#book" style="color:#38BDF8 !important; font-weight:700;">
                        Schedule Strategy Call <i class="fa-solid fa-arrow-right" style="font-size:0.8rem; margin-left:4px;"></i>
                    </a>
                    <a href="mailto:info@nexteck.co.uk" class="wp-foot-link">
                        <i class="fa-solid fa-envelope" style="color:#38BDF8; width:18px;"></i> info@nexteck.co.uk
                    </a>
                    <a href="tel:+447879175585" class="wp-foot-link">
                        <i class="fa-solid fa-phone" style="color:#10B981; width:18px;"></i> +44 (0)78 7917 5585
                    </a>
                    <div style="margin-top:1rem; padding:0.9rem 1rem; background:rgba(255,255,255,0.04); border-radius:8px; border:1px solid rgba(255,255,255,0.08); font-size:0.8rem; line-height:1.45; color:#94A3B8;">
                        <i class="fa-solid fa-shield-halved" style="color:#FFB81C; margin-right:6px;"></i> All client conversations are protected by a signed mutual Non-Disclosure Agreement (NDA).
                    </div>
                </div>
            </div>
        </div>

        <!-- Foot Bottom Legal -->
        <div class="wp-foot-bottom">
            <span>&copy; {{ date('Y') }} Nexteck Consulting Ltd. All rights reserved. Registered in England &amp; Wales.</span>
            <div style="display:flex; gap:1.5rem; align-items:center;">
                <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                <span aria-hidden="true">&bull;</span>
                <span>Powered by Nexteck SME Strategy &amp; Tracking Toolkit™</span>
            </div>
        </div>
    </div>
</footer>

<!-- Wipro Floating Sticky Quick Action Pill (Compact badge, expands smoothly on hover) -->
<aside class="wp-sticky-cta" id="wpStickyCta" aria-label="Quick Action">
    <a href="{{ route('landing') }}#book" class="wp-sticky-cta-link" title="Click to view availability or book call">
        <div class="cta-label">
            <span class="cta-pulse-dot" aria-hidden="true"></span>
            <i class="fa-solid fa-calendar-check cta-cal-icon"></i>
            <span class="cta-short-title">Q4 Slots Open</span>
            <span class="cta-extra-info">: <b>4 of 6 Remaining</b></span>
        </div>
        <span class="btn-cta-action">
            Book Call <i class="fa-solid fa-arrow-right" style="font-size:0.75rem;"></i>
        </span>
    </a>
</aside>

@include('components.engagement-modals')
