<style>
    footer { background: #0C1B33 !important; color: #fff !important; padding: 4.5rem 0 2.2rem !important; border-top: 1px solid rgba(255,255,255,0.08); font-family: 'Inter', system-ui, sans-serif !important; }
    footer .wrap { width: min(1180px, 92%) !important; margin: 0 auto !important; }
    .foot-grid { display: grid !important; grid-template-columns: 2fr 1fr 1fr 1.2fr !important; gap: 2.5rem !important; margin-bottom: 3.2rem !important; }
    .foot-grid h4 { color: #fff !important; margin-bottom: 1.2rem !important; font-size: 1rem !important; font-family: 'Fraunces', Georgia, serif !important; font-weight: 600 !important; letter-spacing: normal !important; text-transform: none !important; }
    .foot-links { display: flex !important; flex-direction: column !important; gap: 0.65rem !important; }
    .foot-links a { color: #8E99AD !important; text-decoration: none !important; font-size: 0.88rem !important; transition: color .2s ease !important; line-height: 1.5 !important; }
    .foot-links a:hover { color: #fff !important; }
    .foot-bottom { border-top: 1px solid rgba(255,255,255,.1) !important; padding-top: 1.8rem !important; display: flex !important; justify-content: space-between !important; align-items: center !important; flex-wrap: wrap !important; gap: 1rem !important; font-size: 0.82rem !important; color: #8E99AD !important; }
    .sticky-cta {
        position: fixed !important;
        bottom: 1.5rem !important;
        right: 1.5rem !important;
        left: auto !important;
        top: auto !important;
        z-index: 9999 !important;
        background: #0C1B33 !important;
        color: #fff !important;
        padding: 0.75rem 1.45rem !important;
        border-radius: 50px !important;
        display: flex !important;
        align-items: center !important;
        gap: 1.25rem !important;
        box-shadow: 0 14px 40px -6px rgba(12, 27, 51, 0.45), 0 4px 12px rgba(0,0,0,0.15) !important;
        border: 1px solid rgba(255, 255, 255, 0.16) !important;
        backdrop-filter: blur(12px) !important;
        -webkit-backdrop-filter: blur(12px) !important;
        font-family: 'Inter', system-ui, sans-serif !important;
        transition: transform 0.25s ease, box-shadow 0.25s ease !important;
    }
    .sticky-cta:hover {
        transform: translateY(-2px) !important;
        box-shadow: 0 18px 45px -4px rgba(12, 27, 51, 0.55) !important;
    }
    .sticky-cta span {
        color: #FFFFFF !important;
        font-size: 0.92rem !important;
        font-weight: 500 !important;
        white-space: nowrap !important;
        letter-spacing: -0.01em !important;
    }
    .sticky-cta .btn-gold {
        background: #B8933F !important;
        color: #FFFFFF !important;
        padding: 0.65rem 1.35rem !important;
        border-radius: 999px !important;
        text-decoration: none !important;
        font-weight: 600 !important;
        font-size: 0.88rem !important;
        display: inline-flex !important;
        align-items: center !important;
        gap: 0.4rem !important;
        white-space: nowrap !important;
        border: none !important;
        transition: all 0.25s ease !important;
        box-shadow: 0 8px 22px -5px rgba(184, 147, 63, 0.6) !important;
        cursor: pointer !important;
    }
    .sticky-cta .btn-gold:hover {
        background: #000000 !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 10px 25px -4px rgba(0, 0, 0, 0.5) !important;
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
            border-radius: 16px !important;
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
</style>
<footer>
    <div class="wrap">
        <div class="foot-grid">
            <div>
                <a class="logo" href="{{ route('home') }}" style="color:#fff">Nexte<span>c</span>k<small style="color:#8E99AD">STRATEGY &amp; TECHNOLOGY</small></a>
                <p style="margin-top:1rem; max-width:36ch; font-size:.9rem; color:#8E99AD; line-height:1.6;">
                    Premier Software Development &amp; Industrial Sourcing Company in London. End-to-end business, custom software, IT strategy and AI readiness audits for founders.
                </p>
                <div style="margin-top:1.2rem; font-size:.84rem; color:#CBD5E1;">
                    📍 London, United Kingdom &nbsp;|&nbsp; Global Sourcing Bridge
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
                    <a href="{{ route('home') }}#nasar">About Nasar</a>
                    <a href="{{ route('home') }}#method">Methodology</a>
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
                    <a href="{{ route('landing') }}#book" style="color:var(--gold-2); font-weight:700;">Book Free Strategy Call &rarr;</a>
                    <a href="mailto:info@nexteck.co.uk">info@nexteck.co.uk</a>
                    <a href="tel:+447879175585">+44 (0)78 7917 5585</a>
                    <a href="https://pearlconrail.co.uk" target="_blank" style="color:#CBD5E1;">Rail Partner: pearlconrail.co.uk</a>
                </div>
            </div>
        </div>
        <div class="foot-bottom">
            <span>&copy; {{ date('Y') }} Nexteck Consulting Ltd. All rights reserved. London, UK.</span>
            <span>Built on the Nexteck SME Strategy &amp; Tracking Toolkit™</span>
        </div>
    </div>
</footer>
<!-- <div class="sticky-cta">
    <span>Ready to eliminate operational bottlenecks?</span>
    <a class="btn btn-gold" href="{{ route('landing') }}#book">Book Free Call &rarr;</a>
</div> -->

@include('components.engagement-modals')

