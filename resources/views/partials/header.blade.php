<!-- Wipro-Inspired Enterprise Header System -->
<link rel="stylesheet" href="{{ asset('css/wipro-theme.css') }}">

<style>
    /* Floating UK Enterprise Tab & Popover Drawer */
    .wp-float-enterprise-wrap {
        position: fixed;
        right: 0;
        top: 45%;
        transform: translateY(-50%);
        z-index: 1005;
        font-family: var(--wp-font-display, 'Plus Jakarta Sans', sans-serif);
    }
    .wp-float-enterprise-tab {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: #000F24;
        color: #FFFFFF;
        border: 1px solid rgba(56, 189, 248, 0.4);
        border-right: none;
        border-radius: 12px 0 0 12px;
        padding: 0.65rem 0.95rem;
        font-size: 0.82rem;
        font-weight: 700;
        cursor: pointer;
        box-shadow: -4px 12px 30px rgba(0, 0, 0, 0.45);
        transition: transform 0.25s ease, background 0.2s ease, padding 0.2s ease;
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
    }
    .wp-float-enterprise-tab:hover {
        background: #001B3A;
        transform: translateX(-4px);
        padding-left: 1.15rem;
        border-color: #38BDF8;
    }
    .wp-float-enterprise-tab .tag-dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #38BDF8;
        box-shadow: 0 0 8px #38BDF8;
        flex-shrink: 0;
    }
    .wp-enterprise-drawer {
        position: fixed;
        right: 1.25rem;
        top: 45%;
        transform: translateY(-50%) translateX(20px);
        width: 320px;
        background: #FFFFFF;
        border-radius: 20px;
        box-shadow: 0 24px 60px -12px rgba(0, 15, 36, 0.4), 0 0 0 1px rgba(56, 35, 86, 0.15);
        border: 1px solid #E2E8F0;
        opacity: 0;
        pointer-events: none;
        visibility: hidden;
        transition: opacity 0.3s cubic-bezier(0.16, 1, 0.3, 1), transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.3s;
        overflow: hidden;
        z-index: 1006;
    }
    .wp-enterprise-drawer.is-open {
        opacity: 1;
        pointer-events: auto;
        visibility: visible;
        transform: translateY(-50%) translateX(0);
    }
    .wp-enterprise-drawer .drawer-header {
        background: #000F24;
        padding: 0.9rem 1.25rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    .wp-enterprise-drawer .drawer-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        background: rgba(0, 114, 206, 0.25);
        color: #38BDF8;
        font-size: 0.72rem;
        font-weight: 800;
        letter-spacing: 0.08em;
        padding: 0.2rem 0.6rem;
        border-radius: 6px;
        border: 1px solid rgba(56, 189, 248, 0.4);
    }
    .wp-enterprise-drawer .drawer-close-btn {
        background: transparent;
        border: none;
        color: #94A3B8;
        font-size: 1.4rem;
        line-height: 1;
        cursor: pointer;
        padding: 0.2rem;
        transition: color 0.2s;
    }
    .wp-enterprise-drawer .drawer-close-btn:hover {
        color: #FFFFFF;
    }
    .wp-enterprise-drawer .drawer-body {
        padding: 1.25rem 1.25rem 1.1rem;
        color: #0F172A;
    }
    .wp-enterprise-drawer .drawer-title {
        font-size: 1rem;
        font-weight: 700;
        color: #000F24;
        line-height: 1.35;
        margin: 0 0 0.4rem 0;
    }
    .wp-enterprise-drawer .drawer-desc {
        font-size: 0.82rem;
        color: #64748B;
        line-height: 1.45;
        margin: 0 0 1rem 0;
    }
    .wp-enterprise-drawer .drawer-phone-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem 0.9rem;
        background: #F8FAFC;
        border-radius: 12px;
        border: 1px solid #E2E8F0;
        text-decoration: none;
        color: inherit;
        transition: all 0.2s ease;
        margin-bottom: 0.75rem;
    }
    .wp-enterprise-drawer .drawer-phone-item:hover {
        background: #F0F9FF;
        border-color: #38BDF8;
        transform: translateY(-1px);
    }
    .wp-enterprise-drawer .drawer-phone-icon {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #382356;
        color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.85rem;
        flex-shrink: 0;
    }
    .wp-enterprise-drawer .phone-label {
        font-size: 0.72rem;
        font-weight: 600;
        color: #64748B;
        text-transform: uppercase;
        letter-spacing: 0.04em;
    }
    .wp-enterprise-drawer .phone-number {
        font-size: 0.92rem;
        font-weight: 700;
        color: #000F24;
    }
    .wp-enterprise-drawer .drawer-btn-cta {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        background: #382356;
        color: #FFFFFF !important;
        text-decoration: none;
        padding: 0.7rem 1.25rem;
        border-radius: 9999px;
        font-size: 0.85rem;
        font-weight: 700;
        width: 100%;
        text-align: center;
        box-sizing: border-box;
        transition: background 0.2s, transform 0.2s;
    }
    .wp-enterprise-drawer .drawer-btn-cta:hover {
        background: #26163D;
        transform: translateY(-1px);
    }
    .wp-enterprise-drawer .drawer-nda-note {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.4rem;
        font-size: 0.72rem;
        color: #64748B;
        margin-top: 0.85rem;
        text-align: center;
    }
    @media (max-width: 600px) {
        .wp-float-enterprise-tab .tab-text {
            display: none;
        }
        .wp-float-enterprise-tab {
            padding: 0.65rem 0.7rem;
            border-radius: 10px 0 0 10px;
        }
        .wp-enterprise-drawer {
            width: min(340px, calc(100vw - 2rem));
            right: 1rem;
        }
    }

    /* Wipro Main Clean White Sticky Navigation Bar */
    .wp-navbar {
        position: sticky;
        top: 0;
        z-index: 1000;
        background: #FFFFFF;
        border-bottom: 1px solid #ECEFF3;
        box-shadow: 0 2px 14px rgba(0, 0, 0, 0.03);
        transition: all 0.25s ease;
    }
    .wp-nav-in {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 74px;
        max-width: 1440px;
        margin: 0 auto;
        padding: 0 clamp(1rem, 2.5vw, 2.5rem);
    }

    /* Wipro Brand Logo: Lowercase 'nexteck' + Multi-Color Arc Dots */
    .wp-logo-brand {
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        text-decoration: none;
        color: #2E1E54;
        flex-shrink: 0;
    }
    .wp-brand-text {
        font-family: var(--wp-font-display, 'Plus Jakarta Sans', Arial, sans-serif);
        font-size: clamp(1.55rem, 2.2vw, 1.85rem);
        font-weight: 800;
        color: #2E1E54;
        letter-spacing: -0.04em;
        line-height: 1;
    }
    .wp-brand-dots {
        display: inline-flex;
        align-items: center;
        margin-top: -2px;
    }

    /* Navigation Menu */
    .wp-nav-menu {
        display: flex;
        align-items: center;
        gap: clamp(0.75rem, 1.4vw, 1.85rem);
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .wp-nav-item {
        position: relative;
    }

    .wp-nav-link {
        font-family: var(--wp-font-display, 'Plus Jakarta Sans', Arial, sans-serif);
        font-size: clamp(0.82rem, 0.95vw, 0.94rem);
        font-weight: 500;
        color: #111827;
        text-decoration: none;
        position: relative;
        padding: 0.5rem 0.15rem;
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        background: none;
        border: none;
        cursor: pointer;
        transition: color 0.2s ease;
        white-space: nowrap;
    }
    .wp-nav-link:hover,
    .wp-nav-link.is-active {
        color: #2E1E54;
    }

    .wp-nav-link .caret {
        font-size: 0.6rem;
        margin-left: 0.25rem;
        display: inline-block;
        transition: transform 0.22s ease;
        opacity: 0.75;
    }
    .wp-nav-item:hover .wp-nav-link .caret,
    .wp-nav-item.is-open .wp-nav-link .caret {
        transform: rotate(180deg);
    }

    /* Dropdown Menus */
    .wp-dropdown {
        position: absolute;
        top: calc(100% + 8px);
        left: 0;
        min-width: 290px;
        background: #FFFFFF;
        border: 1px solid #E2E8F0;
        border-radius: 12px;
        box-shadow: 0 16px 36px -6px rgba(0, 27, 58, 0.12), 0 4px 12px rgba(0,0,0,0.04);
        padding: 0.75rem 0;
        opacity: 0;
        visibility: hidden;
        transform: translateY(8px);
        transition: all 0.2s ease;
        z-index: 1050;
    }
    .wp-dropdown-partners {
        min-width: 320px;
        max-width: min(390px, 92vw);
    }
    .wp-drop-badge {
        display: inline-block;
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 0.04em;
        text-transform: uppercase;
        padding: 0.15rem 0.45rem;
        border-radius: 4px;
        margin-left: 0.45rem;
        vertical-align: middle;
    }
    .wp-nav-item:hover .wp-dropdown,
    .wp-nav-item:focus-within .wp-dropdown,
    .wp-nav-item.is-open .wp-dropdown {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .wp-drop-item {
        display: flex;
        flex-direction: column;
        padding: 0.65rem 1.35rem;
        text-decoration: none;
        color: #1E293B;
        transition: background 0.15s ease, color 0.15s ease;
    }
    .wp-drop-item:hover {
        background: #F8FAFC;
        color: #2E1E54;
    }
    .wp-drop-title {
        font-family: var(--wp-font-display, 'Plus Jakarta Sans', Arial, sans-serif);
        font-weight: 600;
        font-size: 0.88rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .wp-drop-sub {
        font-size: 0.76rem;
        color: #64748B;
        margin-top: 2px;
        line-height: 1.35;
    }
    .wp-drop-divider {
        height: 1px;
        background: #EEF2F6;
        margin: 0.4rem 0;
    }

    /* Language Switcher */
    .wp-lang-wrap {
        position: relative;
    }
    .wp-lang-btn {
        font-family: var(--wp-font-display, 'Plus Jakarta Sans', Arial, sans-serif);
        font-size: 0.92rem;
        font-weight: 500;
        color: #111827;
        background: none;
        border: none;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.5rem 0.25rem;
        transition: color 0.2s ease;
        white-space: nowrap;
    }
    .wp-lang-btn:hover {
        color: #2E1E54;
    }
    .wp-lang-dropdown {
        position: absolute;
        top: calc(100% + 8px);
        right: 0;
        min-width: 220px;
        background: #FFFFFF;
        border: 1px solid #E2E8F0;
        border-radius: 12px;
        box-shadow: 0 16px 36px -6px rgba(0, 27, 58, 0.12);
        padding: 0.5rem 0;
        opacity: 0;
        visibility: hidden;
        transform: translateY(8px);
        transition: all 0.2s ease;
        z-index: 1050;
    }
    .wp-lang-wrap:hover .wp-lang-dropdown,
    .wp-lang-wrap:focus-within .wp-lang-dropdown,
    .wp-lang-wrap.is-open .wp-lang-dropdown {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    .wp-lang-opt {
        padding: 0.55rem 1.15rem;
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.84rem;
        color: #334155;
        text-decoration: none;
        transition: background 0.15s ease;
    }
    .wp-lang-opt:hover {
        background: #F8FAFC;
        color: #2E1E54;
    }
    .wp-lang-opt.is-active {
        font-weight: 700;
        color: #2E1E54;
    }

    /* Mobile Hamburger */
    .wp-burger {
        display: none;
        background: transparent;
        border: 1px solid #E2E8F0;
        border-radius: 8px;
        width: 42px;
        height: 42px;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        color: #111827;
        font-size: 1.25rem;
        transition: all 0.2s ease;
    }
    .wp-burger:hover {
        background: #F8FAFC;
        border-color: #CBD5E1;
    }

    /* Desktop Compact Viewport (1081px - 1280px) */
    @media (min-width: 1081px) and (max-width: 1280px) {
        .wp-nav-in {
            padding: 0 1rem;
        }
        .wp-nav-menu {
            gap: 0.75rem;
        }
        .wp-nav-link {
            font-size: 0.84rem;
            padding: 0.5rem 0.1rem;
        }
        .wp-brand-text {
            font-size: 1.6rem;
        }
    }

    /* Full Mobile & Tablet Responsive Navigation (<= 1080px) */
    @media (max-width: 1080px) {
        .wp-burger {
            display: flex;
        }
        .wp-nav-menu {
            position: absolute;
            top: 74px;
            left: 0;
            right: 0;
            background: #FFFFFF;
            flex-direction: column;
            align-items: stretch;
            gap: 0;
            padding: 0 1.25rem;
            border-bottom: 1px solid #E2E8F0;
            box-shadow: 0 25px 45px -10px rgba(0, 27, 58, 0.15);
            max-height: 0;
            opacity: 0;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            pointer-events: none;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            z-index: 1050;
        }
        .wp-nav-menu.is-open {
            max-height: calc(100vh - 74px);
            max-height: calc(100dvh - 74px);
            opacity: 1;
            padding: 1rem 1.25rem 2.5rem;
            pointer-events: auto;
        }
        .wp-nav-item {
            width: 100%;
        }
        .wp-nav-link {
            padding: 0.85rem 0.25rem;
            border-bottom: 1px solid #EEF2F6;
            font-size: 1rem;
            display: flex;
            justify-content: space-between;
            width: 100%;
        }
        .wp-dropdown {
            position: static;
            box-shadow: none;
            border: 1px solid #E2E8F0;
            padding: 0.35rem 0;
            background: #F8FAFC;
            border-radius: 10px;
            margin: 0.25rem 0 0.5rem;
            display: none;
            opacity: 1;
            visibility: visible;
            transform: none;
            min-width: 100%;
        }
        .wp-nav-item.is-open .wp-dropdown {
            display: block;
        }
        .wp-drop-item {
            padding: 0.65rem 1rem;
        }
        .wp-lang-wrap {
            padding: 0.85rem 0.25rem;
            border-bottom: 1px solid #EEF2F6;
        }
        .wp-lang-btn {
            width: 100%;
            justify-content: space-between;
            padding: 0;
        }
        .wp-lang-dropdown {
            position: static;
            box-shadow: none;
            border: 1px solid #E2E8F0;
            padding: 0.35rem 0;
            background: #F8FAFC;
            border-radius: 10px;
            margin: 0.25rem 0 0.5rem;
            display: none;
            opacity: 1;
            visibility: visible;
            transform: none;
            min-width: 100%;
        }
        .wp-lang-wrap.is-open .wp-lang-dropdown {
            display: block;
        }
    }
</style>

<!-- Wipro-Inspired Main Clean Navigation Bar -->
<nav class="wp-navbar" aria-label="Main Navigation">
    <div class="wp-nav-in">
        <!-- Logo: wipro style 'nexteck' + spectrum dot arc -->
        <a class="wp-logo-brand" href="{{ route('home') }}" aria-label="Nexteck Home">
            <span class="wp-brand-text">nexteck</span>
            <span class="wp-brand-dots" aria-hidden="true">
                <svg width="28" height="28" viewBox="0 0 30 30" fill="none">
                    <circle cx="15" cy="3.5" r="2.4" fill="#78BE20"/>
                    <circle cx="23" cy="7.5" r="2.4" fill="#00A3AD"/>
                    <circle cx="26.5" cy="15" r="2.8" fill="#2E1E54"/>
                    <circle cx="23" cy="22.5" r="2.4" fill="#E4007C"/>
                    <circle cx="15" cy="26.5" r="2.4" fill="#FFB81C"/>
                    <circle cx="7" cy="22.5" r="2.2" fill="#0072CE"/>
                </svg>
            </span>
        </a>

        <!-- Navigation Menu -->
        <div class="wp-nav-menu" id="wpNavLinks">
            <!-- What We Do (Solutions) Dropdown -->
            <div class="wp-nav-item">
                <button type="button" class="wp-nav-link" aria-haspopup="true" aria-expanded="false" id="navSolutionsBtn">
                    What We Do <i class="fa-solid fa-chevron-down caret" aria-hidden="true"></i>
                </button>
                <div class="wp-dropdown" aria-labelledby="navSolutionsBtn">
                    <a href="{{ route('home') }}#method" class="wp-drop-item">
                        <span class="wp-drop-title">The Nexteck Method</span>
                        <span class="wp-drop-sub">4-Stage diagnostic framework &amp; governance</span>
                    </a>
                    <a href="{{ route('toolkit.index') }}" class="wp-drop-item">
                        <span class="wp-drop-title">SME Strategy Toolkit</span>
                        <span class="wp-drop-sub">7-Stage interactive benchmarking &amp; KPI suite</span>
                    </a>
                    <div class="wp-drop-divider"></div>
                    <a href="{{ route('assessment.index') }}" class="wp-drop-item">
                        <span class="wp-drop-title">Technology Health Check</span>
                        <span class="wp-drop-sub">2-Minute AI readiness &amp; bottleneck assessment</span>
                    </a>
                    <a href="{{ route('calculator.index') }}" class="wp-drop-item">
                        <span class="wp-drop-title">Automation ROI Calculator</span>
                        <span class="wp-drop-sub">Model weekly hours returned &amp; annual savings</span>
                    </a>
                </div>
            </div>

            <!-- What We Think (Insights / Blogs) -->
            <div class="wp-nav-item">
                <a href="{{ route('blogs.index') }}" class="wp-nav-link {{ request()->routeIs('blogs.*') ? 'is-active' : '' }}">What We Think</a>
            </div>

            <!-- About Nexteck Dropdown (Why Now, Alliances, Methodology) -->
            <div class="wp-nav-item">
                <button type="button" class="wp-nav-link" aria-haspopup="true" aria-expanded="false" id="navAboutBtn">
                    About Nexteck <i class="fa-solid fa-chevron-down caret" aria-hidden="true"></i>
                </button>
                <div class="wp-dropdown" aria-labelledby="navAboutBtn">
                    <a href="{{ route('home') }}#urgency" class="wp-drop-item">
                        <span class="wp-drop-title">Why Now</span>
                        <span class="wp-drop-sub">The compounding cost of delay &amp; capacity tracker</span>
                    </a>
                    <a href="{{ route('home') }}#alliances" class="wp-drop-item">
                        <span class="wp-drop-title">Platform Alliances</span>
                        <span class="wp-drop-sub">SAP, Oracle, Salesforce, Microsoft &amp; Snowflake</span>
                    </a>
                    <a href="{{ route('home') }}#insights" class="wp-drop-item">
                        <span class="wp-drop-title">Research &amp; Case Studies</span>
                        <span class="wp-drop-sub">Field intelligence &amp; supply chain analysis</span>
                    </a>
                </div>
            </div>

            <!-- Industries Dropdown (9 Sectors) -->
            <div class="wp-nav-item">
                <button type="button" class="wp-nav-link" aria-haspopup="true" aria-expanded="false" id="navIndustriesBtn">
                    Industries <i class="fa-solid fa-chevron-down caret" aria-hidden="true"></i>
                </button>
                <div class="wp-dropdown" style="min-width:300px;" aria-labelledby="navIndustriesBtn">
                    <a href="{{ route('industries.show', 'banking-fintech') }}" class="wp-drop-item">
                        <span class="wp-drop-title">Banking &amp; Fintech</span>
                        <span class="wp-drop-sub">KYC, AML, Open Banking, FCA compliance</span>
                    </a>
                    <a href="{{ route('industries.show', 'oil-gas-petrochemicals') }}" class="wp-drop-item">
                        <span class="wp-drop-title">Oil, Gas &amp; Petrochemicals</span>
                        <span class="wp-drop-sub">API 6D valves, telemetry &amp; OEM sourcing</span>
                    </a>
                    <a href="{{ route('industries.show', 'railways-pearlconrail') }}" class="wp-drop-item">
                        <span class="wp-drop-title">Railways (pearlconrail.co.uk)</span>
                        <span class="wp-drop-sub">Rolling stock, bogies &amp; signalling spares</span>
                    </a>
                    <a href="{{ route('industries.show', 'smart-factory-automation') }}" class="wp-drop-item">
                        <span class="wp-drop-title">Smart Factory &amp; Automation</span>
                        <span class="wp-drop-sub">SCADA, PLC, sensors &amp; predictive maintenance</span>
                    </a>
                    <div class="wp-drop-divider"></div>
                    <a href="{{ route('industries.index') }}" class="wp-drop-item" style="color:#382356; font-weight:700;">
                        <span>View All 9 Specialized Sectors <i class="fa-solid fa-arrow-right" style="margin-left:5px;"></i></span>
                    </a>
                </div>
            </div>

            <!-- Our Partners Dropdown (Pearlcon, HYST, BizConn, BRNDS, BI Manager, Boltix, Yodoc) -->
            <div class="wp-nav-item">
                <button type="button" class="wp-nav-link" aria-haspopup="true" aria-expanded="false" id="navPartnersBtn">
                    Our Partners <i class="fa-solid fa-chevron-down caret" aria-hidden="true"></i>
                </button>
                <div class="wp-dropdown wp-dropdown-partners" aria-labelledby="navPartnersBtn">
                    <a href="{{ route('home') }}#partner-pearlcon" class="wp-drop-item">
                        <span class="wp-drop-title">Pearlcon Engineering <span class="wp-drop-badge" style="background:#E0F2FE; color:#0369A1;">Rail &amp; OEM</span></span>
                        <span class="wp-drop-sub">Rolling stock, bogies, precision casting &amp; railway spares</span>
                    </a>
                    <a href="{{ route('home') }}#partner-hyst" class="wp-drop-item">
                        <span class="wp-drop-title">HYST <span class="wp-drop-badge" style="background:#CCFBF1; color:#0F766E;">Heavy Industry</span></span>
                        <span class="wp-drop-sub">High-yield systems, plant engineering &amp; industrial machinery</span>
                    </a>
                    <a href="{{ route('home') }}#partner-bizconn" class="wp-drop-item">
                        <span class="wp-drop-title">BizConn <span class="wp-drop-badge" style="background:#F3E8FF; color:#6B21A8;">B2B Integration</span></span>
                        <span class="wp-drop-sub">Enterprise business connectivity, EDI pipelines &amp; supplier hubs</span>
                    </a>
                    <a href="{{ route('home') }}#partner-brnds" class="wp-drop-item">
                        <span class="wp-drop-title">BRNDS <span class="wp-drop-badge" style="background:#FCE7F3; color:#9D174D;">Brand &amp; Growth</span></span>
                        <span class="wp-drop-sub">Brand architecture, omnichannel strategy &amp; digital commerce</span>
                    </a>
                    <a href="{{ route('home') }}#partner-bi-manager" class="wp-drop-item">
                        <span class="wp-drop-title">BI Manager <span class="wp-drop-badge" style="background:#FEF3C7; color:#92400E;">Analytics</span></span>
                        <span class="wp-drop-sub">Executive BI dashboards, KPI governance &amp; predictive models</span>
                    </a>
                    <a href="{{ route('home') }}#partner-boltix" class="wp-drop-item">
                        <span class="wp-drop-title">Boltix <span class="wp-drop-badge" style="background:#E0E7FF; color:#3730A3;">Cloud &amp; DevOps</span></span>
                        <span class="wp-drop-sub">Rapid cloud modernization, automated CI/CD &amp; microservices</span>
                    </a>
                    <a href="{{ route('home') }}#partner-yodoc" class="wp-drop-item">
                        <span class="wp-drop-title">Yodoc <span class="wp-drop-badge" style="background:#DCFCE7; color:#166534;">Compliance Docs</span></span>
                        <span class="wp-drop-sub">Intelligent document management, compliance &amp; workflow automation</span>
                    </a>
                    <div class="wp-drop-divider"></div>
                    <a href="{{ route('home') }}#partners" class="wp-drop-item" style="color:#382356; font-weight:700;">
                        <span>Explore Strategic Partner Ecosystem <i class="fa-solid fa-arrow-right" style="margin-left:5px;"></i></span>
                    </a>
                </div>
            </div>

            <!-- SME Toolkit -->
            <div class="wp-nav-item">
                <a href="{{ route('toolkit.index') }}" class="wp-nav-link {{ request()->routeIs('toolkit.*') ? 'is-active' : '' }}">SME Toolkit</a>
            </div>

            <!-- Contact Us (Clean Text Nav Link as in Image) -->
            <div class="wp-nav-item">
                <a href="{{ route('landing') }}#book" class="wp-nav-link" style="font-weight:600;">Contact Us</a>
            </div>

            <!-- Region / Language Selector (🌐 EN ⌄ from Image) -->
            <div class="wp-lang-wrap">
                <button type="button" class="wp-lang-btn" aria-haspopup="true" aria-expanded="false" id="wpLangBtn" aria-label="Select Language and Region">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#1E293B" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="2" y1="12" x2="22" y2="12"></line>
                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1 4-10z"></path>
                    </svg>
                    <span>EN</span>
                    <i class="fa-solid fa-chevron-down caret" style="font-size:0.58rem; margin-left:2px; opacity:0.75;" aria-hidden="true"></i>
                </button>
                <div class="wp-lang-dropdown" aria-labelledby="wpLangBtn">
                    <a href="#" class="wp-lang-opt is-active" onclick="event.preventDefault();">
                        <i class="fa-solid fa-check" style="color:#2E1E54; font-size:0.75rem;"></i>
                        <span>English (UK) &bull; London</span>
                    </a>
                    <a href="#" class="wp-lang-opt" onclick="event.preventDefault();">
                        <span style="display:inline-block; width:12px;"></span>
                        <span>English (US) &bull; Global</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Mobile Hamburger Toggle -->
        <button class="wp-burger" id="wpBurgerBtn" aria-label="Toggle Navigation Menu" aria-expanded="false" aria-controls="wpNavLinks">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</nav>

<script>
    (function() {
        const btn = document.getElementById('wpBurgerBtn');
        const menu = document.getElementById('wpNavLinks');
        const langWrap = document.querySelector('.wp-lang-wrap');
        const langBtn = document.getElementById('wpLangBtn');
        if (!btn || !menu) return;

        function isMobileView() {
            return window.innerWidth <= 1080 || (btn && window.getComputedStyle(btn).display !== 'none');
        }

        function toggleMenu() {
            const isOpen = menu.classList.toggle('is-open');
            btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            btn.innerHTML = isOpen ? '<i class="fa-solid fa-xmark"></i>' : '<i class="fa-solid fa-bars"></i>';
            if (isOpen) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        }

        function closeMenu() {
            if (menu.classList.contains('is-open')) {
                menu.classList.remove('is-open');
                btn.setAttribute('aria-expanded', 'false');
                btn.innerHTML = '<i class="fa-solid fa-bars"></i>';
                document.body.style.overflow = '';
            }
        }

        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            toggleMenu();
        });

        // Mobile dropdown toggles
        const itemsWithDropdowns = menu.querySelectorAll('.wp-nav-item');
        itemsWithDropdowns.forEach(function(item) {
            const linkOrBtn = item.querySelector('.wp-nav-link');
            const dropdown = item.querySelector('.wp-dropdown');
            if (dropdown && linkOrBtn) {
                linkOrBtn.addEventListener('click', function(e) {
                    if (isMobileView() && linkOrBtn.tagName.toLowerCase() === 'button') {
                        e.preventDefault();
                        e.stopPropagation();
                        // Close other sibling dropdowns for clean mobile accordion
                        itemsWithDropdowns.forEach(function(sibling) {
                            if (sibling !== item) sibling.classList.remove('is-open');
                        });
                        if (langWrap) langWrap.classList.remove('is-open');
                        item.classList.toggle('is-open');
                    }
                });
            }
        });

        // Language toggle on mobile / touch
        if (langBtn && langWrap) {
            langBtn.addEventListener('click', function(e) {
                if (isMobileView()) {
                    e.preventDefault();
                    e.stopPropagation();
                    itemsWithDropdowns.forEach(function(item) {
                        item.classList.remove('is-open');
                    });
                    langWrap.classList.toggle('is-open');
                }
            });
        }

        // Close menu on clicking outside
        document.addEventListener('click', function(e) {
            if (!menu.contains(e.target) && !btn.contains(e.target) && menu.classList.contains('is-open')) {
                closeMenu();
            }
        });

        // Close mobile drawer when an inner link is clicked
        menu.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function(e) {
                if (isMobileView()) {
                    closeMenu();
                }
            });
        });

        // Window resize safeguard
        window.addEventListener('resize', function() {
            if (!isMobileView() && menu.classList.contains('is-open')) {
                closeMenu();
            }
        });
    })();
</script>

<!-- Floating UK Enterprise & Direct Advisory Widget -->
<aside class="wp-float-enterprise-wrap" aria-label="UK Enterprise Contact">
    <button type="button" class="wp-float-enterprise-tab" id="wpEnterpriseTab" aria-expanded="false" aria-controls="wpEnterpriseDrawer" title="UK Enterprise Direct Advisory & Consultation">
        <span class="tag-dot" aria-hidden="true"></span>
        <i class="fa-solid fa-phone" style="font-size:0.8rem; color:#38BDF8;"></i>
        <span class="tab-text">UK Enterprise</span>
    </button>

    <div id="wpEnterpriseDrawer" class="wp-enterprise-drawer" role="region" aria-label="UK Enterprise Information">
        <div class="drawer-header">
            <span class="drawer-badge">
                <span class="tag-dot"></span> UK ENTERPRISE
            </span>
            <button type="button" class="drawer-close-btn" id="wpCloseEnterpriseDrawer" aria-label="Close panel">&times;</button>
        </div>
        <div class="drawer-body">
            <h4 class="drawer-title">Bespoke Software Architecture &amp; IT Strategy</h4>
            <p class="drawer-desc">Accelerating Regulated Industries &amp; SMEs across the UK, Europe &amp; Global Supply Chains.</p>
            
            <div class="drawer-contact-block">
                <a href="tel:+447879175585" class="drawer-phone-item">
                    <div class="drawer-phone-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div>
                        <div class="phone-label">Direct Advisory Line</div>
                        <div class="phone-number">+44 (0)78 7917 5585</div>
                    </div>
                </a>
            </div>

            <div class="drawer-action-block">
                <a href="{{ route('landing') }}#book" class="drawer-btn-cta">
                    Request Consultation <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <div class="drawer-nda-note">
                <i class="fa-solid fa-shield-halved" style="color:#FFB81C;"></i>
                <span>Protected by Bilateral Mutual NDA</span>
            </div>
        </div>
    </div>
</aside>

<script>
    (function() {
        const entTab = document.getElementById('wpEnterpriseTab');
        const entDrawer = document.getElementById('wpEnterpriseDrawer');
        const entClose = document.getElementById('wpCloseEnterpriseDrawer');

        if (entTab && entDrawer) {
            entTab.addEventListener('click', function(e) {
                e.stopPropagation();
                const isOpen = entDrawer.classList.toggle('is-open');
                entTab.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            });

            if (entClose) {
                entClose.addEventListener('click', function(e) {
                    e.stopPropagation();
                    entDrawer.classList.remove('is-open');
                    entTab.setAttribute('aria-expanded', 'false');
                });
            }

            document.addEventListener('click', function(e) {
                if (!entDrawer.contains(e.target) && !entTab.contains(e.target)) {
                    entDrawer.classList.remove('is-open');
                    entTab.setAttribute('aria-expanded', 'false');
                }
            });
        }
    })();
</script>
