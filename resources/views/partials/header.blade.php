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
        box-shadow: 0 24px 60px -12px rgba(0, 15, 36, 0.4), 0 0 0 1px rgba(0, 82, 204, 0.15);
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
        background: #0052CC;
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
        background: #0052CC;
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
        background: #003D99;
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
            width: calc(100vw - 2.5rem);
            right: 1.25rem;
        }
    }

    /* Main Sticky Navigation Bar */
    .wp-navbar {
        position: sticky;
        top: 0;
        z-index: 1000;
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        border-bottom: 1px solid var(--wp-border, #E2E8F0);
        box-shadow: 0 4px 20px -2px rgba(0, 27, 58, 0.05);
        transition: all 0.3s ease;
    }
    .wp-nav-in {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 76px;
    }

    /* Wipro Connected Logo Motif */
    .wp-logo {
        display: flex;
        align-items: center;
        gap: 0.85rem;
        text-decoration: none;
        color: var(--wp-navy-900, #001B3A);
    }
    .wp-logo-emblem {
        width: 38px;
        height: 38px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .wp-logo-text {
        display: flex;
        flex-direction: column;
    }
    .wp-logo-title {
        font-family: var(--wp-font-display, 'Plus Jakarta Sans', sans-serif);
        font-size: 1.55rem;
        font-weight: 800;
        letter-spacing: -0.03em;
        line-height: 1;
        color: var(--wp-navy-900, #001B3A);
    }
    .wp-logo-title span {
        color: var(--wp-blue, #0052CC);
    }
    .wp-logo-subtitle {
        font-family: var(--wp-font-display, 'Plus Jakarta Sans', sans-serif);
        font-size: 0.58rem;
        font-weight: 700;
        letter-spacing: 0.26em;
        color: var(--wp-text-muted, #64748B);
        margin-top: 3px;
        text-transform: uppercase;
    }

    /* Navigation Menu */
    .wp-nav-menu {
        display: flex;
        align-items: center;
        gap: 1.85rem;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .wp-nav-item {
        position: relative;
    }

    .wp-nav-link {
        font-family: var(--wp-font-display, 'Plus Jakarta Sans', sans-serif);
        font-size: 0.92rem;
        font-weight: 600;
        color: var(--wp-text-main, #0B132B);
        text-decoration: none;
        position: relative;
        padding: 0.6rem 0;
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        background: none;
        border: none;
        cursor: pointer;
        transition: color 0.2s ease;
    }
    .wp-nav-link:hover,
    .wp-nav-link.is-active {
        color: var(--wp-blue, #0052CC);
    }
    .wp-nav-link::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background: var(--wp-blue, #0052CC);
        transition: width 0.25s ease;
        border-radius: 1px;
    }
    .wp-nav-link:hover::after,
    .wp-nav-link.is-active::after {
        width: 100%;
    }

    .wp-nav-link .caret {
        font-size: 0.65rem;
        margin-left: 0.35rem;
        display: inline-block;
        transition: transform 0.25s ease;
    }
    .wp-nav-item:hover .wp-nav-link .caret,
    .wp-nav-item.is-open .wp-nav-link .caret {
        transform: rotate(180deg);
    }

    /* Dropdown Menus */
    .wp-dropdown {
        position: absolute;
        top: 100%;
        left: 0;
        min-width: 270px;
        background: #FFFFFF;
        border: 1px solid var(--wp-border, #E2E8F0);
        border-radius: var(--wp-radius-md, 12px);
        box-shadow: 0 16px 36px -6px rgba(0, 27, 58, 0.12), 0 4px 12px rgba(0,0,0,0.04);
        padding: 0.75rem 0;
        opacity: 0;
        visibility: hidden;
        transform: translateY(8px);
        transition: all 0.22s var(--wp-ease, ease);
        z-index: 1050;
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
        padding: 0.65rem 1.25rem;
        text-decoration: none;
        color: var(--wp-text-main, #0B132B);
        transition: background 0.15s ease, color 0.15s ease;
    }
    .wp-drop-item:hover {
        background: var(--wp-bg-light, #F8FAFC);
        color: var(--wp-blue, #0052CC);
    }
    .wp-drop-title {
        font-family: var(--wp-font-display, 'Plus Jakarta Sans', sans-serif);
        font-weight: 600;
        font-size: 0.88rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .wp-drop-sub {
        font-size: 0.76rem;
        color: var(--wp-text-muted, #64748B);
        margin-top: 2px;
    }

    .wp-drop-divider {
        height: 1px;
        background: var(--wp-border-subtle, #EEF2F6);
        margin: 0.4rem 0;
    }

    /* Mini Badge on nav item */
    .wp-nav-pill {
        font-size: 0.65rem;
        font-weight: 700;
        padding: 0.12rem 0.45rem;
        border-radius: 9999px;
        background: rgba(0, 114, 206, 0.08);
        color: var(--wp-blue, #0052CC);
        border: 1px solid rgba(0, 114, 206, 0.2);
    }

    /* Mobile Hamburger */
    .wp-burger {
        display: none;
        background: transparent;
        border: 1px solid var(--wp-border, #E2E8F0);
        border-radius: 8px;
        width: 44px;
        height: 44px;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        color: var(--wp-navy-900, #001B3A);
        font-size: 1.35rem;
        transition: all 0.2s ease;
    }
    .wp-burger:hover {
        background: var(--wp-bg-light, #F8F9FA);
        border-color: var(--wp-blue, #0052CC);
        color: var(--wp-blue, #0052CC);
    }

    @media (max-width: 1040px) {
        .wp-nav-menu {
            gap: 1.25rem;
        }
    }

    @media (max-width: 960px) {
        .wp-burger {
            display: flex;
        }
        .wp-nav-menu {
            position: absolute;
            top: 76px;
            left: 0;
            right: 0;
            background: #FFFFFF;
            flex-direction: column;
            align-items: stretch;
            gap: 0;
            padding: 0 1.25rem;
            border-bottom: 1px solid var(--wp-border, #E2E8F0);
            box-shadow: 0 25px 45px -10px rgba(0, 27, 58, 0.15);
            max-height: 0;
            opacity: 0;
            overflow-y: auto;
            pointer-events: none;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .wp-nav-menu.is-open {
            max-height: 80vh;
            opacity: 1;
            padding: 1.2rem 1.25rem 2rem;
            pointer-events: auto;
        }
        .wp-nav-item {
            width: 100%;
        }
        .wp-nav-link {
            padding: 0.85rem 0.25rem;
            border-bottom: 1px solid var(--wp-border-subtle, #EEF2F6);
            font-size: 1rem;
            display: flex;
            justify-content: space-between;
            width: 100%;
        }
        .wp-nav-link::after {
            display: none;
        }
        .wp-dropdown {
            position: static;
            box-shadow: none;
            border: none;
            padding: 0.25rem 0 0.5rem 1rem;
            background: #F8FAFC;
            border-radius: 8px;
            margin: 0.25rem 0 0.5rem;
            display: none;
            opacity: 1;
            visibility: visible;
            transform: none;
        }
        .wp-nav-item.is-open .wp-dropdown {
            display: block;
        }
        .wp-nav-menu .btn-wp {
            margin-top: 1.25rem;
            width: 100%;
        }
    }

    @media (max-width: 600px) {
        .wp-nav-in {
            height: 68px;
        }
        .wp-nav-menu {
            top: 68px;
        }
    }
</style>

<!-- Wipro Main Sticky Navigation Bar -->
<nav class="wp-navbar" aria-label="Main Navigation">
    <div class="wp-wrap wp-nav-in">
        <!-- Nexteck Logo with Wipro-Inspired Interconnected Nodes Motif -->
        <a class="wp-logo" href="{{ route('home') }}" aria-label="Nexteck Home">
            <div class="wp-logo-emblem" aria-hidden="true">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="18" cy="4.5" r="3.2" fill="#0072CE"/>
                    <circle cx="29.5" cy="11.5" r="3.2" fill="#00A3AD"/>
                    <circle cx="31.5" cy="24.5" r="3.2" fill="#78BE20"/>
                    <circle cx="22.5" cy="32" r="3.2" fill="#FFB81C"/>
                    <circle cx="10" cy="30" r="3.2" fill="#E4007C"/>
                    <circle cx="5" cy="17.5" r="3.2" fill="#72246C"/>
                    <circle cx="18" cy="18" r="7.5" stroke="#001B3A" stroke-width="2.2" stroke-dasharray="2 2" opacity="0.6"/>
                    <circle cx="18" cy="18" r="3.2" fill="#0052CC"/>
                </svg>
            </div>
            <div class="wp-logo-text">
                <span class="wp-logo-title">Nexte<span>c</span>k</span>
                <span class="wp-logo-subtitle">Strategy &amp; Technology</span>
            </div>
        </a>

        <!-- Navigation Menu -->
        <div class="wp-nav-menu" id="wpNavLinks">
            <div class="wp-nav-item">
                <a href="{{ route('home') }}" class="wp-nav-link {{ request()->routeIs('home') ? 'is-active' : '' }}">Home</a>
            </div>

            <!-- Capabilities & Solutions Dropdown -->
            <div class="wp-nav-item">
                <button type="button" class="wp-nav-link" aria-haspopup="true" aria-expanded="false" id="navSolutionsBtn">
                    Solutions <i class="fa-solid fa-chevron-down caret" aria-hidden="true"></i>
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

            <!-- Industries Dropdown -->
            <div class="wp-nav-item">
                <a href="{{ route('industries.index') }}" class="wp-nav-link {{ request()->routeIs('industries.*') ? 'is-active' : '' }}">
                    Industries <span class="wp-nav-pill">9 Sectors</span>
                </a>
                <div class="wp-dropdown" style="min-width:300px;">
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
                    <a href="{{ route('industries.index') }}" class="wp-drop-item" style="color:var(--wp-blue); font-weight:700;">
                        <span>View All 9 Specialized Sectors <i class="fa-solid fa-arrow-right" style="margin-left:5px;"></i></span>
                    </a>
                </div>
            </div>

            <div class="wp-nav-item">
                <a href="{{ route('toolkit.index') }}" class="wp-nav-link {{ request()->routeIs('toolkit.*') ? 'is-active' : '' }}">SME Toolkit</a>
            </div>

            <div class="wp-nav-item">
                <a href="{{ route('blogs.index') }}" class="wp-nav-link {{ request()->routeIs('blogs.*') ? 'is-active' : '' }}">Insights</a>
            </div>

            <div class="wp-nav-item">
                <a href="{{ route('home') }}#urgency" class="wp-nav-link">Why Now</a>
            </div>

            <a href="{{ route('landing') }}#book" class="btn-wp btn-wp-primary btn-wp-sm">
                Book Strategy Call <i class="fa-solid fa-arrow-right arrow-icon" style="margin-left:6px;"></i>
            </a>
        </div>

        <!-- Mobile Hamburger Toggle -->
        <button class="wp-burger" id="wpBurgerBtn" aria-label="Toggle Navigation Menu" aria-expanded="false" aria-controls="wpNavLinks"><i class="fa-solid fa-bars"></i></button>
    </div>
</nav>

<script>
    (function() {
        const btn = document.getElementById('wpBurgerBtn');
        const menu = document.getElementById('wpNavLinks');
        if (!btn || !menu) return;

        function toggleMenu() {
            const isOpen = menu.classList.toggle('is-open');
            btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            btn.innerHTML = isOpen ? '<i class="fa-solid fa-xmark"></i>' : '<i class="fa-solid fa-bars"></i>';
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
                    if (window.innerWidth <= 960) {
                        if (linkOrBtn.tagName.toLowerCase() === 'button') {
                            e.preventDefault();
                            item.classList.toggle('is-open');
                        }
                    }
                });
            }
        });

        document.addEventListener('click', function(e) {
            if (!menu.contains(e.target) && !btn.contains(e.target) && menu.classList.contains('is-open')) {
                toggleMenu();
            }
        });

        menu.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 960 && !link.classList.contains('has-children')) {
                    menu.classList.remove('is-open');
                    btn.setAttribute('aria-expanded', 'false');
                    btn.innerHTML = '<i class="fa-solid fa-bars"></i>';
                }
            });
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
