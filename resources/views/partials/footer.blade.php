<style>
    footer { background: #090D16 !important; color: #FFFFFF !important; padding: 4.5rem 0 2.2rem !important; border-top: 1px solid rgba(255,255,255,0.08) !important; font-family: 'Inter', system-ui, sans-serif !important; }
    footer .wrap { width: min(1180px, 92%) !important; margin: 0 auto !important; }
    .foot-grid { display: grid !important; grid-template-columns: 2fr 1fr 1fr 1.2fr !important; gap: 2.5rem !important; margin-bottom: 3.2rem !important; }
    .foot-grid h4 { color: #FFFFFF !important; margin-bottom: 1.2rem !important; font-size: 0.95rem !important; font-family: 'Inter', system-ui, sans-serif !important; font-weight: 700 !important; letter-spacing: 0.04em !important; text-transform: uppercase !important; }
    .foot-links { display: flex !important; flex-direction: column !important; gap: 0.7rem !important; }
    .foot-links a { color: #94A3B8 !important; text-decoration: none !important; font-size: 0.88rem !important; transition: all .2s ease !important; line-height: 1.5 !important; }
    .foot-links a:hover { color: #38BDF8 !important; transform: translateX(2px) !important; }
    .foot-bottom { border-top: 1px solid rgba(255,255,255,.08) !important; padding-top: 1.8rem !important; display: flex !important; justify-content: space-between !important; align-items: center !important; flex-wrap: wrap !important; gap: 1rem !important; font-size: 0.82rem !important; color: #94A3B8 !important; }
    .sticky-cta {
        position: fixed !important;
        bottom: 1.5rem !important;
        right: 1.5rem !important;
        left: auto !important;
        top: auto !important;
        z-index: 9999 !important;
        background: #090D16 !important;
        color: #FFFFFF !important;
        padding: 0.75rem 1.45rem !important;
        border-radius: 12px !important;
        display: flex !important;
        align-items: center !important;
        gap: 1.25rem !important;
        box-shadow: 0 20px 45px -10px rgba(0, 0, 0, 0.6), 0 0 0 1px rgba(56, 189, 248, 0.25) !important;
        border: 1px solid rgba(255, 255, 255, 0.1) !important;
        backdrop-filter: blur(14px) !important;
        -webkit-backdrop-filter: blur(14px) !important;
        font-family: 'Inter', system-ui, sans-serif !important;
        transition: transform 0.25s ease, box-shadow 0.25s ease !important;
    }
    .sticky-cta:hover {
        transform: translateY(-2px) !important;
        box-shadow: 0 24px 50px -10px rgba(0, 0, 0, 0.75), 0 0 0 1px rgba(56, 189, 248, 0.45) !important;
    }
    .sticky-cta span {
        color: #FFFFFF !important;
        font-size: 0.92rem !important;
        font-weight: 500 !important;
        white-space: nowrap !important;
        letter-spacing: -0.01em !important;
    }
    .sticky-cta .btn-gold {
        background: #0EA5E9 !important;
        color: #FFFFFF !important;
        padding: 0.65rem 1.35rem !important;
        border-radius: 8px !important;
        text-decoration: none !important;
        font-weight: 600 !important;
        font-size: 0.88rem !important;
        display: inline-flex !important;
        align-items: center !important;
        gap: 0.4rem !important;
        white-space: nowrap !important;
        border: none !important;
        transition: all 0.2s ease !important;
        box-shadow: 0 4px 14px rgba(14, 165, 233, 0.35) !important;
        cursor: pointer !important;
    }
    .sticky-cta .btn-gold:hover {
        background: #0284C7 !important;
        transform: translateY(-1px) !important;
        box-shadow: 0 6px 20px rgba(14, 165, 233, 0.5) !important;
    }

    @media (max-width: 900px) {
        .foot-grid { grid-template-columns: 1fr 1fr !important; gap: 2rem !important; }
    }
    @media (max-width: 640px) {
        .foot-grid { grid-template-columns: 1fr !important; gap: 2rem !important; }
        .foot-bottom { flex-direction: column; text-align: center; gap: 0.6rem; }
        .sticky-cta {
            left: 1rem !important;
            right: 1rem !important;
            bottom: 1rem !important;
            justify-content: space-between !important;
            padding: 0.65rem 1rem !important;
            gap: 0.6rem !important;
            border-radius: 12px !important;
        }
        .sticky-cta span {
            font-size: 0.82rem !important;
            white-space: normal !important;
            line-height: 1.3 !important;
        }
        .sticky-cta .btn-gold {
            padding: 0.55rem 1rem !important;
            font-size: 0.82rem !important;
            flex-shrink: 0 !important;
        }
    }
    @media (max-width: 420px) {
        .sticky-cta {
            flex-direction: column !important;
            align-items: stretch !important;
            text-align: center !important;
            gap: 0.5rem !important;
            padding: 0.65rem 0.85rem !important;
        }
        .sticky-cta .btn-gold {
            width: 100% !important;
            justify-content: center !important;
        }
    }
</style>
<footer>
    <div class="wrap">
        <div class="foot-grid">
            <div>
                <a class="logo" href="{{ route('home') }}" style="color:#FFFFFF">Nexte<span style="color:#0EA5E9">c</span>k<small style="color:#94A3B8">STRATEGY &amp; TECHNOLOGY</small></a>
                <p style="margin-top:1rem; max-width:36ch; font-size:.9rem; color:#94A3B8; line-height:1.6;">
                    Leading Software Development &amp; Technology Strategy Consultancy in London. Delivering custom software architectures, IT audits, and AI roadmaps for UK enterprises &amp; SMEs.
                </p>
                <div style="margin-top:1.2rem; font-size:.84rem; color:#94A3B8;">
                    📍 London, United Kingdom &nbsp;|&nbsp; Global Technology &amp; Sourcing
                </div>
            </div>
            <div>
                <h4>Explore</h4>
                <div class="foot-links">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('industries.index') }}">Industries (9 Sectors)</a>
                    <a href="{{ route('toolkit.index') }}">SME Strategy Toolkit</a>
                    <a href="{{ route('assessment.index') }}">Technology Health Check</a>
                    <a href="{{ route('calculator.index') }}">Automation Calculator</a>
                    <a href="{{ route('blogs.index') }}">Insights &amp; Blogs</a>
                    <a href="{{ route('home') }}#method">Methodology</a>
                    <a href="{{ route('home') }}#urgency">Why Now</a>
                </div>
            </div>
            <div>
                <h4>SME Toolkit</h4>
                <div class="foot-links">
                    <a href="{{ route('toolkit.index') }}">Client Diagnostic</a>
                    <a href="{{ route('toolkit.index') }}">Industry Benchmark</a>
                    <a href="{{ route('toolkit.index') }}">Competitor Tracker</a>
                    <a href="{{ route('toolkit.index') }}">AI Opportunity Log</a>
                    <a href="{{ route('toolkit.index') }}">SOP Register</a>
                    <a href="{{ route('toolkit.index') }}">KPI Dashboard</a>
                </div>
            </div>
            <div>
                <h4>Contact &amp; Book</h4>
                <div class="foot-links">
                    <a href="{{ route('landing') }}#book" style="color:#38BDF8 !important; font-weight:700;">Book Free Strategy Call &rarr;</a>
                    <a href="mailto:info@nexteck.co.uk">info@nexteck.co.uk</a>
                    <a href="tel:+447879175585">+44 (0)78 7917 5585</a>
                    <a href="https://pearlconrail.co.uk" target="_blank" style="color:#94A3B8;">Rail Partner: pearlconrail.co.uk</a>
                </div>
            </div>
        </div>
        <div class="foot-bottom">
            <span>&copy; {{ date('Y') }} Nexteck Consulting Ltd. All rights reserved. London, UK.</span>
            <span>Built on the Nexteck SME Strategy &amp; Tracking Toolkit™</span>
        </div>
    </div>
</footer>

@include('components.engagement-modals')
