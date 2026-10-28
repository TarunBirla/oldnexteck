<style>
    /* Global Self-Contained Responsive Header */
    .topbar {
        background: #090D16;
        color: #FFFFFF;
        font-size: clamp(0.72rem, 1.8vw, 0.82rem);
        text-align: center;
        padding: 0.55rem 1rem;
        position: relative;
        z-index: 60;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 0.5rem;
        line-height: 1.4;
    }
    .topbar-badge {
        display: inline-block;
        background: rgba(14, 165, 233, 0.15);
        color: #38BDF8;
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        padding: 0.15rem 0.5rem;
        border-radius: 4px;
        border: 1px solid rgba(56, 189, 248, 0.3);
    }
    .topbar-link {
        color: #38BDF8 !important;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.2s;
    }
    .topbar-link:hover {
        color: #FFFFFF !important;
        text-decoration: underline;
    }

    nav {
        position: sticky;
        top: 0;
        z-index: 999;
        background: rgba(255, 255, 255, 0.94);
        backdrop-filter: blur(14px);
        -webkit-backdrop-filter: blur(14px);
        border-bottom: 1px solid var(--line, #E2E8F0);
        transition: background 0.3s;
    }
    .nav-in {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 74px;
        position: relative;
    }
    .logo {
        font-family: 'Fraunces', Georgia, serif;
        font-size: clamp(1.35rem, 3.5vw, 1.55rem);
        font-weight: 700;
        letter-spacing: -0.02em;
        text-decoration: none;
        color: var(--ink, #090D16);
        display: inline-block;
        line-height: 1.1;
    }
    .logo span {
        color: var(--gold, #0EA5E9);
    }
    .logo small {
        display: block;
        font-family: 'Inter', system-ui, sans-serif;
        font-size: 0.56rem;
        letter-spacing: 0.34em;
        color: var(--muted, #64748B);
        font-weight: 600;
        margin-top: -2px;
    }
    .nav-links {
        display: flex;
        gap: 1.8rem;
        align-items: center;
        font-size: 0.92rem;
        font-weight: 500;
    }
    .nav-links a {
        color: var(--ink-2, #131926);
        text-decoration: none;
        position: relative;
        transition: color 0.2s;
    }
    .nav-links a:hover {
        color: var(--gold, #0EA5E9);
    }
    .nav-cta {
        padding: 0.65rem 1.35rem !important;
        font-size: 0.9rem !important;
        color: #FFFFFF !important;
        white-space: nowrap;
    }
    .burger {
        display: none;
        background: transparent;
        border: 1px solid var(--line, #E2E8F0);
        border-radius: 8px;
        width: 42px;
        height: 42px;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        color: var(--ink, #090D16);
        font-size: 1.35rem;
        transition: all 0.2s ease;
    }
    .burger:hover {
        background: var(--cream, #F8FAFC);
        border-color: var(--gold, #0EA5E9);
        color: var(--gold, #0EA5E9);
    }

    @media (max-width: 960px) {
        .burger {
            display: flex;
        }
        .nav-links {
            position: absolute;
            top: 74px;
            left: 0;
            right: 0;
            background: #FFFFFF;
            flex-direction: column;
            align-items: stretch;
            gap: 0;
            padding: 0 1.25rem;
            border-bottom: 1px solid var(--line, #E2E8F0);
            box-shadow: 0 20px 40px -10px rgba(9, 13, 22, 0.14);
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            pointer-events: none;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .nav-links.is-open {
            max-height: 520px;
            opacity: 1;
            padding: 1rem 1.25rem 1.5rem;
            pointer-events: auto;
        }
        .nav-links a {
            padding: 0.75rem 0.25rem;
            border-bottom: 1px solid rgba(226, 232, 240, 0.7);
            font-size: 0.98rem;
            display: block;
        }
        .nav-links a.nav-cta {
            border-bottom: none;
            margin-top: 1rem;
            text-align: center;
            display: flex;
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .topbar {
            padding: 0.45rem 0.6rem;
            font-size: 0.72rem;
            gap: 0.35rem;
        }
        .topbar-badge {
            font-size: 0.62rem;
            padding: 0.1rem 0.4rem;
        }
        .nav-in {
            height: 64px;
        }
        .nav-links {
            top: 64px;
        }
    }
</style>

<div class="topbar">
    <span class="topbar-badge">UK ENTERPRISE</span>
    <span><b>Bespoke Software &amp; IT Strategy Framework</b> &nbsp;·&nbsp; Accelerating UK SMEs &amp; Regulated Industries &nbsp;·&nbsp;</span>
    <a href="{{ route('landing') }}#book" class="topbar-link">Request Consultation →</a>
</div>

<nav>
    <div class="wrap nav-in">
        <a class="logo" href="{{ route('home') }}">Nexte<span>c</span>k<small>STRATEGY &amp; TECHNOLOGY</small></a>
        <div class="nav-links" id="mainNavLinks">
            <a href="{{ route('home') }}#audit">Home</a>
            <a href="{{ route('home') }}#method">Methodology</a>
            <a href="{{ route('industries.index') }}" style="{{ request()->routeIs('industries.*') ? 'color: var(--gold); font-weight: 700;' : '' }}">Industries</a>
            <a href="{{ route('toolkit.index') }}" style="{{ request()->routeIs('toolkit.*') ? 'color: var(--gold); font-weight: 700;' : '' }}">SME Toolkit</a>
            <a href="{{ route('blogs.index') }}" style="{{ request()->routeIs('blogs.*') ? 'color: var(--gold); font-weight: 700;' : '' }}">Blogs</a>
            <a href="{{ route('home') }}#urgency">Why Now</a>
            <a class="btn btn-gold nav-cta" style="color: white;" href="{{ route('landing') }}#book">Book Strategy Call</a>
        </div>
        <button class="burger" id="navBurgerBtn" aria-label="Toggle navigation" aria-expanded="false" aria-controls="mainNavLinks">☰</button>
    </div>
</nav>

<script>
    (function() {
        const btn = document.getElementById('navBurgerBtn');
        const menu = document.getElementById('mainNavLinks');
        if (!btn || !menu) return;

        function toggleMenu() {
            const isOpen = menu.classList.toggle('is-open');
            btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            btn.textContent = isOpen ? '✕' : '☰';
        }

        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            toggleMenu();
        });

        // Close on outside click
        document.addEventListener('click', function(e) {
            if (!menu.contains(e.target) && !btn.contains(e.target) && menu.classList.contains('is-open')) {
                toggleMenu();
            }
        });

        // Close on link click (especially hash anchors)
        menu.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                if (menu.classList.contains('is-open')) {
                    toggleMenu();
                }
            });
        });
    })();
</script>
