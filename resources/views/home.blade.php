<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enterprise Software Architecture &amp; Technology Strategy | Nexteck London</title>
    <meta name="description" content="Nexteck is a premier Software Architecture &amp; Technology Strategy Consultancy in London delivering bespoke enterprise platforms, IT audits, and AI roadmaps for UK enterprises &amp; SMEs.">
    <meta name="keywords" content="Enterprise Software Development London, Custom Software Solutions London, Web Application Development London, Bespoke Software Architecture UK, AI Strategy Consultant London, IT Strategy Audit SMEs, Nexteck">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="author" content="Nexteck Consulting Ltd">
    <meta name="geo.region" content="GB-LND">
    <meta name="geo.placename" content="London">
    <link rel="canonical" href="{{ url('/') }}">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Nexteck">
    <meta property="og:title" content="Enterprise Software Architecture &amp; Technology Strategy | Nexteck London">
    <meta property="og:description" content="Nexteck delivers end-to-end business audits, bespoke software engineering, and AI roadmaps for UK enterprises and SMEs.">
    <meta property="og:url" content="{{ url('/') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Enterprise Software Architecture &amp; Technology Strategy | Nexteck London">
    <meta name="twitter:description" content="Nexteck delivers end-to-end business audits, bespoke software engineering, and AI roadmaps for UK enterprises and SMEs.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/wipro-theme.css') }}">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "ProfessionalService",
          "@id": "{{ url('/') }}#organization",
          "name": "Nexteck — Enterprise Software Architecture London",
          "url": "{{ url('/') }}",
          "description": "Premier Software Development Company and IT Strategy Consultancy in London providing custom software solutions, end-to-end business audits, and AI readiness roadmaps for UK SMEs.",
          "founder": {
            "@type": "Person",
            "name": "Mohammed Nasar",
            "jobTitle": "Principal Consultant & Software Architect"
          },
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "London",
            "addressCountry": "GB"
          },
          "areaServed": ["London", "United Kingdom"],
          "knowsAbout": [
            "Custom Software Development London",
            "Web Application Development",
            "Bespoke SaaS & CRM Solutions",
            "AI Strategy & Workflow Automation",
            "SME IT Roadmaps & Business Audits"
          ]
        },
        {
          "@type": "WebSite",
          "@id": "{{ url('/') }}#website",
          "url": "{{ url('/') }}",
          "name": "Nexteck — Enterprise Software Architecture London",
          "publisher": { "@id": "{{ url('/') }}#organization" }
        }
      ]
    }
    </script>

    <style>
        /* Enterprise Full-Screen Hero */
        .wp-hero {
            position: relative;
            min-height: calc(100vh - 110px);
            display: flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            padding: clamp(2rem, 5vh, 4rem) 1.5rem;
            color: #FFFFFF;
            overflow: hidden;
            background: 
                linear-gradient(135deg, rgba(0, 15, 36, 0.90) 0%, rgba(0, 27, 58, 0.88) 50%, rgba(0, 15, 36, 0.95) 100%),
                radial-gradient(ellipse at 50% 25%, rgba(0, 114, 206, 0.28) 0%, transparent 65%),
                url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=2000&q=80') center center / cover no-repeat;
        }

        .wp-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: 
                radial-gradient(rgba(255, 255, 255, 0.08) 1.5px, transparent 1.5px),
                radial-gradient(rgba(0, 114, 206, 0.14) 1.5px, transparent 1.5px);
            background-size: 40px 40px, 80px 80px;
            background-position: 0 0, 20px 20px;
            opacity: 0.5;
            pointer-events: none;
        }

        .wp-hero-content {
            position: relative;
            z-index: 2;
            max-width: 1040px;
            margin: 0 auto;
            text-align: center;
            width: 100%;
        }

        .wp-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.65rem;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.18);
            backdrop-filter: blur(12px);
            padding: 0.4rem 1.15rem;
            border-radius: var(--wp-radius-pill);
            font-family: var(--wp-font-display);
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: #E0F2FE;
            margin-bottom: clamp(1rem, 2.2vh, 1.6rem);
            box-shadow: 0 4px 20px rgba(0, 114, 206, 0.25);
        }
        .wp-hero-badge .spectrum-disc {
            display: flex;
            align-items: center;
            gap: 3px;
        }
        .wp-hero-badge .spectrum-disc span {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            display: inline-block;
        }

        .wp-hero h1 {
            color: #FFFFFF !important;
            font-size: clamp(2.2rem, 4.4vw, 3.85rem);
            font-weight: 800;
            line-height: 1.16;
            letter-spacing: -0.03em;
            margin-bottom: clamp(0.85rem, 2vh, 1.4rem);
        }

        .wp-hero h1 em {
            font-style: normal;
            background: linear-gradient(120deg, #38BDF8 0%, #0072CE 50%, #E4007C 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        .wp-hero-lead {
            font-size: clamp(0.98rem, 1.25vw, 1.18rem);
            color: #CBD5E1;
            max-width: 820px;
            margin: 0 auto clamp(1.2rem, 2.5vh, 2rem);
            line-height: 1.62;
            font-weight: 400;
        }

        .wp-hero-actions {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1.15rem;
            margin-bottom: clamp(1.2rem, 2.5vh, 2.2rem);
        }

        .wp-hero-chips {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1.4rem;
            border-top: 1px solid rgba(255, 255, 255, 0.12);
            padding-top: clamp(1rem, 2vh, 1.5rem);
            font-size: 0.85rem;
            color: #94A3B8;
        }
        .wp-hero-chip-item {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        .wp-hero-chip-item svg {
            color: #38BDF8;
            flex-shrink: 0;
        }

        /* Stats Bar */
        .wp-stats-section {
            background: #FFFFFF;
            border-bottom: 1px solid var(--wp-border);
            padding: 3.5rem 0;
            position: relative;
            z-index: 10;
        }
        .wp-stat-card {
            background: #FFFFFF;
            border: 1px solid var(--wp-border);
            border-radius: var(--wp-radius-md);
            padding: 2rem 1.6rem;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: var(--wp-shadow-xs);
        }
        .wp-stat-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--wp-shadow-md);
            border-color: #CBD5E1;
        }
        .wp-stat-bar {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
        }
        .wp-stat-number {
            font-family: var(--wp-font-display);
            font-size: clamp(2.4rem, 4vw, 3.2rem);
            font-weight: 800;
            letter-spacing: -0.03em;
            color: var(--wp-navy-900);
            line-height: 1;
            margin-bottom: 0.6rem;
            display: flex;
            align-items: baseline;
            gap: 2px;
        }
        .wp-stat-number i {
            font-style: normal;
            color: var(--wp-blue);
            font-size: 0.75em;
        }
        .wp-stat-label {
            font-size: 0.92rem;
            color: var(--wp-text-muted);
            font-weight: 500;
            line-height: 1.45;
        }

        /* Bento Cards */
        .wp-pain-card {
            background: #FFFFFF;
            border: 1px solid var(--wp-border);
            border-radius: var(--wp-radius-md);
            padding: 2.2rem 1.85rem;
            display: flex;
            flex-direction: column;
            position: relative;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: var(--wp-shadow-xs);
        }
        .wp-pain-card:hover {
            transform: translateY(-5px);
            border-color: #CBD5E1;
            box-shadow: var(--wp-shadow-md);
        }
        .wp-pain-card-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.35rem;
        }
        .wp-card-num {
            font-family: var(--wp-font-display);
            font-size: 0.85rem;
            font-weight: 700;
            color: #94A3B8;
            letter-spacing: 0.05em;
        }
        .wp-pain-card h3 {
            font-size: 1.25rem;
            color: var(--wp-navy-900);
            margin-bottom: 0.85rem;
            line-height: 1.35;
        }
        .wp-pain-card p {
            font-size: 0.92rem;
            color: var(--wp-text-body);
            line-height: 1.62;
            margin: 0;
            flex-grow: 1;
        }

        /* Methodology */
        .wp-method-card {
            background: #FFFFFF;
            border: 1px solid var(--wp-border);
            border-radius: var(--wp-radius-md);
            padding: 2.4rem 2rem;
            position: relative;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
            box-shadow: var(--wp-shadow-xs);
        }
        .wp-method-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--wp-shadow-md);
            border-color: #CBD5E1;
        }
        .wp-method-step {
            width: 46px;
            height: 46px;
            border-radius: 12px;
            background: var(--wp-navy-900);
            color: #FFFFFF;
            font-family: var(--wp-font-display);
            font-weight: 800;
            font-size: 1.15rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.45rem;
            box-shadow: 0 4px 14px rgba(0, 27, 58, 0.2);
        }
        .wp-method-card h3 {
            font-size: 1.28rem;
            color: var(--wp-navy-900);
            margin-bottom: 0.85rem;
        }
        .wp-method-card p {
            font-size: 0.92rem;
            color: var(--wp-text-body);
            line-height: 1.62;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }
        .wp-method-deliverable {
            border-top: 1px solid var(--wp-border-subtle);
            padding-top: 1.1rem;
            font-size: 0.84rem;
            color: var(--wp-text-muted);
            line-height: 1.48;
        }
        .wp-method-deliverable b {
            color: var(--wp-navy-900);
        }

        /* Score Pills for Table */
        .score-pill {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-family: var(--wp-font-display);
            font-weight: 700;
            font-size: 0.88rem;
            padding: 0.22rem 0.65rem;
            border-radius: 6px;
        }
        .score-high { background: rgba(228, 0, 124, 0.12); color: #BE185D; }
        .score-med { background: rgba(255, 184, 28, 0.15); color: #B45309; }
        .score-low { background: rgba(120, 190, 32, 0.15); color: #15803D; }

        /* Industries Section */
        .wp-ind-card {
            background: #FFFFFF;
            border: 1px solid #E5E7EB;
            border-radius: 6px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.25s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.25s ease;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.05), 0 1px 3px rgba(0, 0, 0, 0.02);
        }
        .wp-ind-card:hover {
            transform: translateY(-5px);
            border-color: #CBD5E1;
            box-shadow: 0 16px 32px -6px rgba(0, 27, 58, 0.12), 0 6px 16px -4px rgba(0, 0, 0, 0.05);
        }
        .wp-ind-img-wrap {
            height: 200px;
            overflow: hidden;
            position: relative;
            background: var(--wp-navy-900);
            border-bottom: 1px solid #E5E7EB;
        }
        .wp-ind-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        .wp-ind-card:hover .wp-ind-img-wrap img {
            transform: scale(1.05);
        }
        .wp-ind-body {
            padding: 1.5rem 1.4rem 1.75rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            text-align: left;
        }
        .wp-ind-body h3 {
            font-size: 1.15rem;
            color: var(--wp-navy-900);
            margin: 0.65rem 0 0.45rem;
            line-height: 1.35;
            font-weight: 700;
        }
        .wp-ind-body p {
            font-size: 0.9rem;
            color: #4B5563;
            line-height: 1.55;
            margin-bottom: 1.35rem;
            flex-grow: 1;
        }
        .wp-ind-link {
            font-family: var(--wp-font-display);
            font-size: 0.88rem;
            font-weight: 700;
            color: var(--wp-blue);
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            transition: gap 0.2s ease;
        }
        .wp-ind-card:hover .wp-ind-link {
            gap: 0.65rem;
            color: var(--wp-blue-hover);
        }

        /* Trust & Assurance */
        .wp-trust-card {
            background: #FFFFFF;
            border: 1px solid var(--wp-border);
            border-radius: var(--wp-radius-md);
            padding: 2.25rem 1.85rem;
            transition: all 0.3s ease;
            box-shadow: var(--wp-shadow-xs);
        }
        .wp-trust-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--wp-shadow-md);
            border-color: #CBD5E1;
        }
        .wp-trust-icon {
            width: 52px;
            height: 52px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.45rem;
        }
        .wp-trust-card h3 {
            font-size: 1.25rem;
            color: var(--wp-navy-900);
            margin-bottom: 0.65rem;
        }
        .wp-trust-card p {
            font-size: 0.92rem;
            color: var(--wp-text-body);
            line-height: 1.62;
            margin: 0;
        }

        /* Urgency Section */
        .wp-urgency-box {
            background: linear-gradient(135deg, #00132E 0%, #002856 100%);
            color: #FFFFFF;
            border-radius: var(--wp-radius-lg);
            padding: 4.25rem 3.75rem;
            box-shadow: var(--wp-shadow-lg);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .wp-urgency-grid {
            display: grid;
            grid-template-columns: 1.4fr 1fr;
            gap: 3.75rem;
            align-items: center;
        }
        .wp-timer-card {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: var(--wp-radius-md);
            padding: 2.4rem 2rem;
            backdrop-filter: blur(14px);
            text-align: center;
        }
        .wp-timer-card h4 {
            color: #FFFFFF;
            font-size: 0.92rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
        }
        .wp-countdown-digits {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 1.85rem;
        }
        .wp-countdown-block {
            background: rgba(0, 15, 36, 0.65);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 8px;
            padding: 0.85rem 0.95rem;
            min-width: 66px;
        }
        .wp-countdown-block b {
            font-family: var(--wp-font-display);
            font-size: 1.95rem;
            font-weight: 800;
            color: #38BDF8;
            line-height: 1;
            display: block;
        }
        .wp-countdown-block span {
            font-size: 0.68rem;
            color: #94A3B8;
            text-transform: uppercase;
            font-weight: 600;
            margin-top: 4px;
            display: block;
        }
        .wp-slot-tracker {
            background: rgba(0, 15, 36, 0.45);
            border-radius: 8px;
            padding: 1.15rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .wp-progress-rail {
            height: 8px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 9999px;
            overflow: hidden;
            margin-bottom: 0.75rem;
        }
        .wp-progress-fill {
            height: 100%;
            width: 66.6%;
            background: linear-gradient(90deg, #38BDF8, #0072CE);
            border-radius: 9999px;
        }

        /* Closing Banner */
        .wp-closing-banner {
            background: radial-gradient(circle at 20% 50%, #002856 0%, #000F24 85%);
            color: #FFFFFF;
            padding: 100px 0;
            text-align: center;
            position: relative;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }
        .wp-closing-in {
            max-width: 860px;
            margin: 0 auto;
        }
        .wp-closing-banner h2,
        .wp-closing-in h2 {
            color: #FFFFFF !important;
            font-size: clamp(2rem, 3.8vw, 3.25rem);
            margin-bottom: 1.35rem;
        }
        .wp-closing-in p {
            color: #CBD5E1;
            font-size: 1.15rem;
            line-height: 1.7;
            margin-bottom: 2.75rem;
        }

        @media (max-width: 900px) {
            .wp-urgency-grid {
                grid-template-columns: 1fr;
                gap: 2.75rem;
            }
            .wp-urgency-box {
                padding: 2.75rem 2rem;
            }
        }
    </style>
</head>

<body>
    @include('partials.header')

    <!-- ================= 1. WIPRO-INSPIRED ENTERPRISE HERO ================= -->
    <header class="wp-hero">
        <!-- Background Video Layer -->
        <div class="wp-hero-media-wrap" aria-hidden="true">
            <video class="wp-hero-bg-video" autoplay muted loop playsinline poster="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=2000&q=80">
                <source src="{{ asset('videos/software-company.mp4') }}" type="video/mp4">
            </video>
            <div class="wp-hero-video-overlay"></div>
        </div>

        <div class="wp-wrap" style="position:relative; z-index:2; width:100%;">
            <div class="wp-hero-content rv">
                <!-- Spectrum Pill Eyebrow -->
                <div class="wp-hero-badge">
                    <div class="spectrum-disc" aria-hidden="true">
                        <span style="background:#0072CE;"></span>
                        <span style="background:#00A3AD;"></span>
                        <span style="background:#78BE20;"></span>
                        <span style="background:#FFB81C;"></span>
                        <span style="background:#E4007C;"></span>
                    </div>
                    <span>2026 Audit &amp; Bespoke Software Architecture &mdash; London &amp; UK</span>
                </div>

                <h1>
                    Everyone's talking about <em>AI</em>.<br>
                    Is your business running on <span class="wp-typing-target" id="heroTypewriter">the right technology?</span><span class="wp-cursor">|</span>
                </h1>

                <p class="wp-hero-lead">
                    Nexteck performs a rigorous, end-to-end business audit &mdash; processes, systems, data, and talent &mdash; then hands you a costed, prioritised IT &amp; AI roadmap engineered to hit your commercial targets. Zero hype. Zero vendor lock-in. Real operational return.
                </p>

                <div class="wp-hero-actions">
                    <a href="{{ route('landing') }}#book" class="btn-wp btn-wp-primary btn-wp-lg">
                        Schedule Your Free Strategy Call <i class="fa-solid fa-arrow-right" style="margin-left:5px;"></i>
                    </a>
                    <a href="#audit" class="btn-wp btn-wp-ghost-light btn-wp-lg">
                        Explore How the Audit Works <i class="fa-solid fa-arrow-down" style="margin-left:5px;"></i>
                    </a>
                </div>

                <!-- Proof Badges -->
                <div class="wp-hero-chips">
                    <div class="wp-hero-chip-item">
                        <i class="fa-solid fa-circle-check" style="color:#38BDF8; font-size:1rem;"></i>
                        <span><b>25+ Years</b> Boardroom IT Strategy Experience</span>
                    </div>
                    <div class="wp-hero-chip-item">
                        <i class="fa-solid fa-circle-check" style="color:#38BDF8; font-size:1rem;"></i>
                        <span>Banking &bull; Insurance &bull; Manufacturing &bull; Education &bull; Rail Sourcing</span>
                    </div>
                    <div class="wp-hero-chip-item">
                        <i class="fa-solid fa-circle-check" style="color:#38BDF8; font-size:1rem;"></i>
                        <span>Nexteck SME Strategy &amp; Tracking Toolkit™</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ================= 2. WIPRO SCALE & METRICS BAR ================= -->
    <section class="wp-stats-section" aria-label="Key Performance Statistics">
        <div class="wp-wrap">
            <div class="wp-grid wp-g4">
                <!-- Stat 1 (Blue) -->
                <div class="wp-stat-card rv">
                    <div class="wp-stat-bar" style="background:var(--wp-spectrum-blue);"></div>
                    <div class="wp-stat-number"><span data-count="25">0</span><i>+</i></div>
                    <div class="wp-stat-label">Years defining enterprise IT strategy &amp; software roadmaps</div>
                </div>

                <!-- Stat 2 (Teal) -->
                <div class="wp-stat-card rv">
                    <div class="wp-stat-bar" style="background:var(--wp-spectrum-teal);"></div>
                    <div class="wp-stat-number"><span data-count="9">0</span><i></i></div>
                    <div class="wp-stat-label">Specialised industry sectors &amp; global supply chains</div>
                </div>

                <!-- Stat 3 (Pink) -->
                <div class="wp-stat-card rv">
                    <div class="wp-stat-bar" style="background:var(--wp-spectrum-pink);"></div>
                    <div class="wp-stat-number"><span data-count="40">0</span><i>+</i></div>
                    <div class="wp-stat-label">Large-scale transformation programmes delivered</div>
                </div>

                <!-- Stat 4 (Green) -->
                <div class="wp-stat-card rv">
                    <div class="wp-stat-bar" style="background:var(--wp-spectrum-green);"></div>
                    <div class="wp-stat-number"><span data-count="60">0</span><i>%</i></div>
                    <div class="wp-stat-label">Average admin hours reduced in the first 90 days</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= 3. THE UNCOMFORTABLE QUESTION (WIPRO SPLIT CARDS) ================= -->
    <section class="wp-section wp-section-dark-plum" id="audit">
        <div class="wp-wrap">
            <div class="wp-sec-head rv" style="text-align:center;">
                <span class="wp-eyebrow" style="color:#F472B6; background:rgba(244,114,182,0.12); border-color:rgba(244,114,182,0.25);">
                    <span class="wp-dot" style="background:#F472B6;"></span> The Uncomfortable Question
                </span>
                <h2>Which of these is quietly costing your business growth?</h2>
                <p>
                    These are the eight operational friction points uncovered in almost every company we audit. On our initial discovery call, we score each for severity &mdash; anything rated 4&ndash;5 becomes a prioritized sprint in your 90-day action plan:
                </p>
            </div>

            <div class="wp-split-grid">
                <!-- Card 01 -->
                <div class="wp-split-card rv">
                    <div class="wp-split-card-media">
                        <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&w=800&q=80" alt="Manual processes eating your week" loading="lazy">
                        <div class="wp-split-card-overlay"></div>
                        <span class="wp-split-card-num">01</span>
                    </div>
                    <div class="wp-split-card-content">
                        <div class="wp-split-card-meta">
                            <span class="wp-badge wp-badge-pink">Most Common</span>
                            <span class="wp-card-severity"><i class="fa-solid fa-triangle-exclamation"></i> Severity 4&ndash;5</span>
                        </div>
                        <h3>Manual processes eating your week</h3>
                        <p>Data entry, invoicing, and scheduling &mdash; the same steps completed by hand every single week by skilled professionals who should be driving revenue.</p>
                        <div class="wp-split-card-footer">
                            <span class="wp-split-card-impact"><i class="fa-solid fa-clock" style="color:#F472B6;"></i> Cost: <b>15&ndash;20 hrs/wk lost</b></span>
                            <a href="{{ route('assessment.index') }}" class="wp-split-card-link">
                                Audit Friction <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 02 -->
                <div class="wp-split-card rv">
                    <div class="wp-split-card-media">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80" alt="Disconnected systems and silos" loading="lazy">
                        <div class="wp-split-card-overlay"></div>
                        <span class="wp-split-card-num">02</span>
                    </div>
                    <div class="wp-split-card-content">
                        <div class="wp-split-card-meta">
                            <span class="wp-badge wp-badge-blue">System Bottleneck</span>
                            <span class="wp-card-severity"><i class="fa-solid fa-triangle-exclamation"></i> Severity 4&ndash;5</span>
                        </div>
                        <h3>Disconnected systems &amp; silos</h3>
                        <p>The same client entered into four disconnected tools. No single source of truth. Executive reports compiled manually from spreadsheet exports at 9pm.</p>
                        <div class="wp-split-card-footer">
                            <span class="wp-split-card-impact"><i class="fa-solid fa-chart-pie" style="color:#0072CE;"></i> Cost: <b>3x reporting lag</b></span>
                            <a href="{{ route('assessment.index') }}" class="wp-split-card-link">
                                Audit Friction <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 03 -->
                <div class="wp-split-card rv">
                    <div class="wp-split-card-media">
                        <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=800&q=80" alt="Operations that will not scale" loading="lazy">
                        <div class="wp-split-card-overlay"></div>
                        <span class="wp-split-card-num">03</span>
                    </div>
                    <div class="wp-split-card-content">
                        <div class="wp-split-card-meta">
                            <span class="wp-badge wp-badge-teal">Growth Blocker</span>
                            <span class="wp-card-severity"><i class="fa-solid fa-triangle-exclamation"></i> Severity 4&ndash;5</span>
                        </div>
                        <h3>Operations that won't scale</h3>
                        <p>Service quality drops or leadership becomes the bottleneck the instant volume doubles. Adding headcount only increases friction instead of output.</p>
                        <div class="wp-split-card-footer">
                            <span class="wp-split-card-impact"><i class="fa-solid fa-arrow-trend-down" style="color:#00B2A9;"></i> Cost: <b>Growth ceiling capped</b></span>
                            <a href="{{ route('assessment.index') }}" class="wp-split-card-link">
                                Audit Friction <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 04 -->
                <div class="wp-split-card rv">
                    <div class="wp-split-card-media">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80" alt="Repetitive administrative load" loading="lazy">
                        <div class="wp-split-card-overlay"></div>
                        <span class="wp-split-card-num">04</span>
                    </div>
                    <div class="wp-split-card-content">
                        <div class="wp-split-card-meta">
                            <span class="wp-badge wp-badge-yellow">Time Drain</span>
                            <span class="wp-card-severity"><i class="fa-solid fa-triangle-exclamation"></i> Severity 4&ndash;5</span>
                        </div>
                        <h3>Repetitive administrative load</h3>
                        <p>Invoices, status inquiries, vendor chasing &mdash; none of it requires executive judgment, yet all of it lands squarely on leadership's desk.</p>
                        <div class="wp-split-card-footer">
                            <span class="wp-split-card-impact"><i class="fa-solid fa-hourglass-half" style="color:#FFB81C;"></i> Cost: <b>30% executive overhead</b></span>
                            <a href="{{ route('assessment.index') }}" class="wp-split-card-link">
                                Audit Friction <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 05 -->
                <div class="wp-split-card rv">
                    <div class="wp-split-card-media">
                        <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=800&q=80" alt="AI uncertainty and fatigue" loading="lazy">
                        <div class="wp-split-card-overlay"></div>
                        <span class="wp-split-card-num">05</span>
                    </div>
                    <div class="wp-split-card-content">
                        <div class="wp-split-card-meta">
                            <span class="wp-badge wp-badge-purple">Right Now</span>
                            <span class="wp-card-severity"><i class="fa-solid fa-triangle-exclamation"></i> Severity 4&ndash;5</span>
                        </div>
                        <h3>AI uncertainty &amp; fatigue</h3>
                        <p>You recognize AI could transform workflows, but cannot separate genuine commercial value from vendor noise with zero demonstrable ROI.</p>
                        <div class="wp-split-card-footer">
                            <span class="wp-split-card-impact"><i class="fa-solid fa-brain" style="color:#7C3AED;"></i> Cost: <b>Misdirected pilot budgets</b></span>
                            <a href="{{ route('assessment.index') }}" class="wp-split-card-link">
                                Audit Friction <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 06 -->
                <div class="wp-split-card rv">
                    <div class="wp-split-card-media">
                        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=800&q=80" alt="Outdated technology debt" loading="lazy">
                        <div class="wp-split-card-overlay"></div>
                        <span class="wp-split-card-num">06</span>
                    </div>
                    <div class="wp-split-card-content">
                        <div class="wp-split-card-meta">
                            <span class="wp-badge wp-badge-green">Legacy Risk</span>
                            <span class="wp-card-severity"><i class="fa-solid fa-triangle-exclamation"></i> Severity 4&ndash;5</span>
                        </div>
                        <h3>Outdated technology debt</h3>
                        <p>Legacy software stacks, unaddressed security exposure, and staff quietly inventing brittle personal workarounds instead of utilizing standard systems.</p>
                        <div class="wp-split-card-footer">
                            <span class="wp-split-card-impact"><i class="fa-solid fa-shield-halved" style="color:#009A44;"></i> Cost: <b>Security &amp; outage risks</b></span>
                            <a href="{{ route('assessment.index') }}" class="wp-split-card-link">
                                Audit Friction <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 07 -->
                <div class="wp-split-card rv">
                    <div class="wp-split-card-media">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80" alt="Software that does not talk" loading="lazy">
                        <div class="wp-split-card-overlay"></div>
                        <span class="wp-split-card-num">07</span>
                    </div>
                    <div class="wp-split-card-content">
                        <div class="wp-split-card-meta">
                            <span class="wp-badge wp-badge-blue">Integration Void</span>
                            <span class="wp-card-severity"><i class="fa-solid fa-triangle-exclamation"></i> Severity 4&ndash;5</span>
                        </div>
                        <h3>Software that doesn't talk</h3>
                        <p>Manual CSV transfers between platforms, mismatched records, and avoidable human errors caused by keying data between CRM, ERP, and accounting.</p>
                        <div class="wp-split-card-footer">
                            <span class="wp-split-card-impact"><i class="fa-solid fa-arrows-rotate" style="color:#0072CE;"></i> Cost: <b>12% billing discrepancies</b></span>
                            <a href="{{ route('assessment.index') }}" class="wp-split-card-link">
                                Audit Friction <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 08 -->
                <div class="wp-split-card rv">
                    <div class="wp-split-card-media">
                        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?auto=format&fit=crop&w=800&q=80" alt="Tools limiting your business model" loading="lazy">
                        <div class="wp-split-card-overlay"></div>
                        <span class="wp-split-card-num">08</span>
                    </div>
                    <div class="wp-split-card-content">
                        <div class="wp-split-card-meta">
                            <span class="wp-badge wp-badge-pink">Architecture Gap</span>
                            <span class="wp-card-severity"><i class="fa-solid fa-triangle-exclamation"></i> Severity 4&ndash;5</span>
                        </div>
                        <h3>Tools limiting your business model</h3>
                        <p>Your unique competitive advantage does not fit generic off-the-shelf software &mdash; business expansion is artificially capped by third-party limitations.</p>
                        <div class="wp-split-card-footer">
                            <span class="wp-split-card-impact"><i class="fa-solid fa-lock" style="color:#E4007C;"></i> Cost: <b>Revenue potential capped</b></span>
                            <a href="{{ route('assessment.index') }}" class="wp-split-card-link">
                                Audit Friction <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bento Callout Footer -->
            <div class="rv" style="margin-top:4rem; text-align:center;">
                <p style="font-size:1.2rem; color:#FFFFFF; font-weight:600; margin-bottom:1.5rem;">
                    If two or more of these sound familiar, an independent IT audit will rapidly pay for itself.
                </p>
                <div style="display:flex; justify-content:center; gap:1rem; flex-wrap:wrap;">
                    <a href="{{ route('assessment.index') }}" class="btn-wp btn-wp-primary" style="background:#0052CC; color:#fff; border-radius:9999px; padding:0.85rem 2.2rem; font-weight:700;">
                        Launch Free Health Check <i class="fa-solid fa-arrow-right" style="margin-left:6px;"></i>
                    </a>
                    <a href="{{ route('landing') }}#book" class="btn-wp" style="background:rgba(255,255,255,0.12); color:#FFFFFF; border:1px solid rgba(255,255,255,0.25); border-radius:9999px; padding:0.85rem 2.2rem; font-weight:600;">
                        Schedule Free Strategy Call <i class="fa-solid fa-calendar-days" style="margin-left:6px;"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
        </div>
    </section>

    <!-- ================= 4. METHODOLOGY (CONNECTED INSIGHTS FRAMEWORK) ================= -->
    <section class="wp-section" id="method">
        <div class="wp-wrap">
            <div class="wp-sec-head rv">
                <span class="wp-eyebrow"><span class="wp-dot"></span> The Nexteck Method</span>
                <h2>One Engagement. Four Stages. Zero Guesswork.</h2>
                <p>
                    Every engagement runs through the <b>Nexteck SME Strategy &amp; Tracking Toolkit™</b> &mdash; the same diagnostic architecture Mohammed Nasar used to guide IT transformation across tier-1 banks, insurance firms, manufacturers, and e-commerce leaders.
                </p>
            </div>

            <div class="wp-grid wp-g4">
                <!-- Stage 01 -->
                <div class="wp-method-card rv">
                    <div class="wp-method-step">01</div>
                    <h3>Industry Benchmarking</h3>
                    <p>We score your operational maturity against 3&ndash;5 recognized leaders in your sector across five lenses: customer experience, technology, marketing, operations, and talent.</p>
                    <div class="wp-method-deliverable">
                        Deliverable: <b>Industry Benchmark Matrix</b> &mdash; gap scores, staged actions, owners, and milestones.
                    </div>
                </div>

                <!-- Stage 02 -->
                <div class="wp-method-card rv">
                    <div class="wp-method-step" style="background:#0052CC;">02</div>
                    <h3>Competitor Analysis</h3>
                    <p>We map your competitive landscape to separate baseline industry hygiene from defensible market whitespace &mdash; ensuring you differentiate where it directly wins enterprise clients.</p>
                    <div class="wp-method-deliverable">
                        Deliverable: <b>Competitor Tracker</b> &mdash; positioning, pricing models, feature sets, and white space.
                    </div>
                </div>

                <!-- Stage 03 -->
                <div class="wp-method-card rv">
                    <div class="wp-method-step" style="background:#72246C;">03</div>
                    <h3>AI, IT &amp; Autonomy Planning</h3>
                    <p>Every founder-dependent task becomes a scored line item: Impact &times; Urgency, costed per month, sequenced into a practical 90-day roadmap. You eliminate single points of failure.</p>
                    <div class="wp-method-deliverable">
                        Deliverable: <b>AI &amp; IT Opportunity Log</b> + <b>SOP &amp; Delegation Register</b>.
                    </div>
                </div>

                <!-- Stage 04 -->
                <div class="wp-method-card rv">
                    <div class="wp-method-step" style="background:#00A3AD;">04</div>
                    <h3>KPI Governance</h3>
                    <p>Monthly targets vs. actuals across sales pipeline, digital operations, finance, and client delivery &mdash; evaluated in under 60 minutes per week. Management by exception, not stress.</p>
                    <div class="wp-method-deliverable">
                        Deliverable: <b>KPI Dashboard</b> &mdash; automated data feeds with red-flag alerts.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= 5. SAMPLE OUTPUT (DATA & MATRIX TABLE) ================= -->
    <section class="wp-section wp-section-light">
        <div class="wp-wrap">
            <div class="wp-sec-head rv">
                <span class="wp-eyebrow"><span class="wp-dot"></span> Measurable Output</span>
                <h2>This is what your executive roadmap looks like</h2>
                <p>
                    A real excerpt from a client <b>AI &amp; IT Opportunity Log</b>. Every initiative is objectively scored by <b>Impact &times; Urgency</b> &mdash; we tackle the highest-leverage band first so efficiency gains compound immediately.
                </p>
            </div>

            <div class="wp-table-card rv">
                <table class="wp-table">
                    <thead>
                        <tr>
                            <th>Business Process</th>
                            <th>Current Friction</th>
                            <th>Proposed AI / IT Solution</th>
                            <th>Impact &times; Urgency</th>
                            <th>Implementation Phase</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <b>Answering Inbound Sales Enquiries</b><br>
                                <span style="color:#64748B; font-size:0.82rem;">8 hrs/week · Senior Leadership Bottleneck</span>
                            </td>
                            <td>8 hrs/wk manual response</td>
                            <td>CRM + Custom AI Lead-Qualification Agent &mdash; leadership only handles pre-qualified high-value meetings</td>
                            <td>5 &times; 4 = <span class="score-pill score-high">20</span></td>
                            <td><span class="wp-badge wp-badge-pink">Sprint 1 (Days 1–30)</span></td>
                        </tr>
                        <tr>
                            <td>
                                <b>Re-keying Booking &amp; Accounting Data</b><br>
                                <span style="color:#64748B; font-size:0.82rem;">5 hrs/week · Operations Staff</span>
                            </td>
                            <td>5 hrs/wk manual entry</td>
                            <td>Webhook API Integration syncing booking engine directly into ledger &mdash; eliminates clerical errors</td>
                            <td>4 &times; 5 = <span class="score-pill score-high">20</span></td>
                            <td><span class="wp-badge wp-badge-pink">Sprint 1 (Days 1–30)</span></td>
                        </tr>
                        <tr>
                            <td>
                                <b>Bespoke Logistics &amp; Sourcing Workflow</b><br>
                                <span style="color:#64748B; font-size:0.82rem;">10 hrs/week · Spreadsheets &amp; WhatsApp</span>
                            </td>
                            <td>10 hrs/wk manual tracking</td>
                            <td>Custom Software Portal built to exact business logic &mdash; centralising orders, supplier specs, and dispatch</td>
                            <td>5 &times; 3 = <span class="score-pill score-med">15</span></td>
                            <td><span class="wp-badge wp-badge-blue">Sprint 2 (Days 31–60)</span></td>
                        </tr>
                        <tr>
                            <td>
                                <b>Billing &amp; Receivables Chasing</b><br>
                                <span style="color:#64748B; font-size:0.82rem;">4 hrs/week · Accounts Team</span>
                            </td>
                            <td>4 hrs/wk chasing invoices</td>
                            <td>Automated invoicing workflows with smart follow-up sequences, human-approved before sending</td>
                            <td>4 &times; 3 = <span class="score-pill score-med">12</span></td>
                            <td><span class="wp-badge wp-badge-blue">Sprint 2 (Days 31–60)</span></td>
                        </tr>
                        <tr>
                            <td>
                                <b>Monthly Executive KPI Reporting</b><br>
                                <span style="color:#64748B; font-size:0.82rem;">6 hrs/month · Compiled manually</span>
                            </td>
                            <td>6 hrs/mo manual compilation</td>
                            <td>Automated Executive Dashboard fed from CRM, banking, and ERP &mdash; reviewed in 60 minutes weekly</td>
                            <td>3 &times; 2 = <span class="score-pill score-low">6</span></td>
                            <td><span class="wp-badge wp-badge-teal">Sprint 3 (Days 61–90)</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="rv" style="text-align:center; color:var(--wp-text-muted); font-size:0.92rem; margin-top:1.5rem;">
                All clients receive full IP ownership of the SOP &amp; Delegation Register, KPI Dashboard, and Tool Architecture recommendation &mdash; yours to retain permanently.
            </p>
        </div>
    </section>

    <!-- ================= 6. INDUSTRIES & SOURCING SHOWCASE ================= -->
    <section class="wp-section" id="industries">
        <div class="wp-wrap">
            <div class="wp-sec-head rv">
                <span class="wp-eyebrow"><span class="wp-dot"></span> Sector Depth &amp; Enterprise Reach</span>
                <h2>Industry Experience. One Standard: Results.</h2>
                <p>
                    Enterprise-grade strategy is no longer reserved for FTSE 100 conglomerates. Nexteck translates 25 years of cross-sector execution into practical, high-ROI moves for growing businesses.
                </p>
            </div>

            <div class="wp-grid wp-g3">
                @foreach($topIndustries as $ind)
                    <article class="wp-ind-card rv">
                        <div class="wp-ind-img-wrap">
                            <img src="{{ $ind->image_url ?? (asset($ind->image ?? 'images/A3.png')) }}" alt="{{ $ind->title }}" loading="lazy">
                        </div>
                        <div class="wp-ind-body">
                            <span class="wp-badge wp-badge-blue" style="align-self:flex-start;">{{ $ind->title }}</span>
                            <h3><a href="{{ route('industries.show', $ind->slug) }}" style="color:inherit;">{{ $ind->tagline }}</a></h3>
                            <p>{{ Str::limit($ind->short_desc, 100) }}</p>
                            <a href="{{ route('industries.show', $ind->slug) }}" class="wp-ind-link">
                                Explore Capability Details <i class="fa-solid fa-arrow-right" style="font-size:0.82rem; margin-left:4px;"></i>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <!-- Engineering Sourcing & Supply Chain Sectors Banner -->
            <div class="rv" style="margin-top:3.5rem; background:#FFFFFF; border:1px solid var(--wp-border); border-radius:var(--wp-radius-lg); padding:2.5rem 3rem; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1.75rem; box-shadow:var(--wp-shadow-card);">
                <div style="max-width:720px;">
                    <span class="wp-badge wp-badge-teal" style="margin-bottom:0.75rem;">Specialised Engineering Sourcing &amp; Rail</span>
                    <h3 style="font-size:1.45rem; color:var(--wp-navy-900); margin-bottom:0.45rem;">Looking for Industrial OEM Spares, Rail &amp; Plant Equipment?</h3>
                    <p style="color:var(--wp-text-body); font-size:0.95rem; margin:0; line-height:1.55;">
                        Explore our full catalog of 9 industrial engineering sectors, international low-cost country sourcing (India, Asia), and our rail engineering collaboration with <a href="https://pearlconrail.co.uk" target="_blank" rel="noopener" style="color:var(--wp-blue); font-weight:600;">pearlconrail.co.uk</a>.
                    </p>
                </div>
                <a href="{{ route('industries.index') }}" class="btn-wp btn-wp-primary" style="white-space:nowrap;">
                    Explore All 9 Sectors <i class="fa-solid fa-arrow-right" style="margin-left:5px;"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ================= 6B. ENTERPRISE PLATFORMS & ALLIANCES (WIPRO STYLE CARDS) ================= -->
    <section class="wp-section" style="background:#F8FAFD; border-top:1px solid #E5E7EB; border-bottom:1px solid #E5E7EB;" id="alliances">
        <div class="wp-wrap">
            <div class="wp-sec-head rv">
                <span class="wp-eyebrow"><span class="wp-dot"></span> Ecosystem &amp; Technology Stack</span>
                <h2>Enterprise Platform Alliances</h2>
                <p>
                    Certified integration and architecture expertise across leading enterprise platforms. We eliminate software silos and deploy scalable automation pipelines tailored to your business model.
                </p>
            </div>

            <div class="wp-partner-grid">
                <!-- SAP Card -->
                <div class="wp-partner-card rv">
                    <div class="wp-partner-media">
                        <svg viewBox="0 0 160 60" width="135" height="50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 8H96L72 52H4V8Z" fill="#0072CE"/>
                            <path d="M22 34C18 34 16 32 16 29H21C21 30.5 22 31.5 24 31.5C26 31.5 27 30.5 27 29.5C27 28 26 27.5 23 27C18.5 26.2 16.5 24.5 16.5 21C16.5 17.5 19.5 15.5 24 15.5C28 15.5 31 17.5 31.2 21H26.5C26.5 19.8 25.5 18.5 24 18.5C22.5 18.5 21.5 19.5 21.5 20.5C21.5 21.8 22.5 22.2 25.5 22.8C30 23.5 32 25.5 32 29C32 32.5 29 34 22 34Z" fill="#FFFFFF"/>
                            <path d="M44 34L41.5 28.5H35.5L33 34H28L36.5 16H40.5L49 34H44ZM38.5 21L36.5 25.5H40.5L38.5 21Z" fill="#FFFFFF"/>
                            <path d="M51 34V16H58.5C62.5 16 65 18.5 65 22.5C65 26.5 62.5 29 58.5 29H55.5V34H51ZM55.5 25.5H58C60 25.5 61 24.5 61 22.5C61 20.5 60 19.5 58 19.5H55.5V25.5Z" fill="#FFFFFF"/>
                            <path d="M72 24L78 12H150V38H72V24Z" fill="#F8FAFC" stroke="#CBD5E1" stroke-width="1"/>
                            <text x="83" y="24" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-size="8.5" font-weight="700" fill="#0072CE">Global</text>
                            <text x="83" y="34" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-size="8.5" font-weight="700" fill="#0072CE">Partner</text>
                        </svg>
                    </div>
                    <div class="wp-partner-info">
                        <div class="wp-partner-title">SAP</div>
                        <p class="wp-partner-desc">Innovative SAP solutions for global success</p>
                    </div>
                </div>

                <!-- Oracle Card -->
                <div class="wp-partner-card rv">
                    <div class="wp-partner-media">
                        <svg viewBox="0 0 160 40" width="135" height="34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 7C9.7 7 3 13.7 3 22C3 30.3 9.7 37 18 37C26.3 37 33 30.3 33 22C33 13.7 26.3 7 18 7ZM18 31.8C12.6 31.8 8.2 27.4 8.2 22C8.2 16.6 12.6 12.2 18 12.2C23.4 12.2 27.8 16.6 27.8 22C27.8 27.4 23.4 31.8 18 31.8Z" fill="#000000"/>
                            <path d="M38 7.5H50.5C57.5 7.5 62 11.5 62 17.5C62 22 59 25.5 54 26.8L63 36.5H56.5L48.5 27H43.2V36.5H38V7.5ZM49.5 22.2C54 22.2 56.5 20.5 56.5 17.2C56.5 14 54 12.2 49.5 12.2H43.2V22.2H49.5Z" fill="#000000"/>
                            <path d="M78 7.5L90.5 36.5H84.8L82.2 30.2H71.5L68.8 36.5H63.2L75.8 7.5H78ZM73.4 25.5H80.2L76.8 17.2L73.4 25.5Z" fill="#000000"/>
                            <path d="M107 12.2C102 12.2 98 16 98 22C98 28 102 31.8 107 31.8C111.5 31.8 114.5 29.5 115.5 25.5H121C119.5 32.5 114 37 107 37C98.8 37 92.5 30.3 92.5 22C92.5 13.7 98.8 7 107 7C114 7 119.5 11.5 121 18.5H115.5C114.5 14.5 111.5 12.2 107 12.2Z" fill="#000000"/>
                            <path d="M125 7.5H130.5V31.8H144.5V36.5H125V7.5Z" fill="#000000"/>
                            <path d="M148 7.5H164V12.2H153.5V19.5H162V24.2H153.5V31.8H164.5V36.5H148V7.5Z" fill="#000000"/>
                        </svg>
                    </div>
                    <div class="wp-partner-info">
                        <div class="wp-partner-title">Oracle</div>
                        <p class="wp-partner-desc">Empowering businesses with cutting-edge Oracle infrastructure &amp; cloud ERP</p>
                    </div>
                </div>

                <!-- Salesforce Card -->
                <div class="wp-partner-card rv">
                    <div class="wp-partner-media">
                        <svg viewBox="0 0 160 55" width="135" height="46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M80 6C89 6 96.5 12 98.5 20C101.5 18 105.5 17 109.5 17C121 17 130 25.5 130 36C130 46.5 121 55 109.5 55C108 55 106.5 54.8 105 54.5C102 58 97.5 60 92 60C89 60 86.5 59 84 57.5C81 60 76.5 61.5 71.5 61.5C59 61.5 49 52 49 40C49 39 49.2 38 49.5 37C45 36.5 41.5 32.5 41.5 27.5C41.5 22 46 17.5 51.5 17.5C52.5 17.5 53.5 17.7 54.5 18C58 10.5 66 6 80 6Z" fill="#00A1E0" transform="translate(0, -5)"/>
                            <text x="80" y="32" font-family="'Segoe UI', Roboto, 'Helvetica Neue', sans-serif" font-size="16" font-style="italic" font-weight="700" fill="#FFFFFF" text-anchor="middle">salesforce</text>
                        </svg>
                    </div>
                    <div class="wp-partner-info">
                        <div class="wp-partner-title">Salesforce</div>
                        <p class="wp-partner-desc">Innovative processes that elevate experiences with unified CRM workflows</p>
                    </div>
                </div>

                <!-- ServiceNow Card -->
                <div class="wp-partner-card rv">
                    <div class="wp-partner-media">
                        <svg viewBox="0 0 160 40" width="145" height="36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <text x="12" y="27" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-size="22" font-weight="800" fill="#032D42" letter-spacing="-0.04em">service<tspan fill="#81B5A1">now</tspan></text>
                            <circle cx="83" cy="11" r="3.2" fill="#81B5A1"/>
                        </svg>
                    </div>
                    <div class="wp-partner-info">
                        <div class="wp-partner-title">ServiceNow</div>
                        <p class="wp-partner-desc">Elevate digital excellence across industries with automated service management</p>
                    </div>
                </div>

                <!-- Microsoft Card -->
                <div class="wp-partner-card rv">
                    <div class="wp-partner-media">
                        <svg viewBox="0 0 160 40" width="140" height="35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="14" y="9" width="10" height="10" fill="#F25022"/>
                            <rect x="26" y="9" width="10" height="10" fill="#7FBA00"/>
                            <rect x="14" y="21" width="10" height="10" fill="#00A4EF"/>
                            <rect x="26" y="21" width="10" height="10" fill="#FFB900"/>
                            <text x="44" y="26" font-family="'Segoe UI', 'Plus Jakarta Sans', sans-serif" font-size="18" font-weight="600" fill="#5E5E5E" letter-spacing="-0.02em">Microsoft</text>
                        </svg>
                    </div>
                    <div class="wp-partner-info">
                        <div class="wp-partner-title">Microsoft</div>
                        <p class="wp-partner-desc">Cloud modernization, Azure governance &amp; enterprise security architecture</p>
                    </div>
                </div>

                <!-- AWS Card -->
                <div class="wp-partner-card rv">
                    <div class="wp-partner-media">
                        <svg viewBox="0 0 160 45" width="125" height="38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <text x="38" y="26" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-size="22" font-weight="800" fill="#232F3E" letter-spacing="-0.02em">aws</text>
                            <path d="M35 32C52 39 88 39 105 32" stroke="#FF9900" stroke-width="3" stroke-linecap="round"/>
                            <path d="M103 28L108 32L101 35" fill="#FF9900"/>
                        </svg>
                    </div>
                    <div class="wp-partner-info">
                        <div class="wp-partner-title">AWS</div>
                        <p class="wp-partner-desc">High-availability microservices, zero-trust cloud VPCs &amp; serverless architectures</p>
                    </div>
                </div>

                <!-- Google Cloud Card -->
                <div class="wp-partner-card rv">
                    <div class="wp-partner-media">
                        <svg viewBox="0 0 160 40" width="145" height="36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26 12C28.5 12 30.7 13 32.3 14.5L35.5 11.3C33 9 29.7 7.5 26 7.5C19.5 7.5 14 11.5 12 17.3L16.5 20.8C17.7 15.7 21.4 12 26 12Z" fill="#EA4335"/>
                            <path d="M38.8 22.5C39 21.7 39 20.8 39 20C39 19.3 38.9 18.7 38.8 18H26V23H33.3C32.7 24.8 31.5 26.2 30 27.2L34.3 30.5C36.8 28.2 38.8 24.8 38.8 22.5Z" fill="#4285F4"/>
                            <path d="M16.5 20.8C16.2 21.8 16 22.9 16 24C16 25.1 16.2 26.2 16.5 27.2L12 30.7C10.7 28.2 10 25.2 10 24C10 22.8 10.7 19.8 12 17.3L16.5 20.8Z" fill="#FBBC05"/>
                            <path d="M26 36C29.7 36 33 34.7 35.5 32.5L31.2 29.2C30 30 28.2 30.7 26 30.7C21.4 30.7 17.7 27 16.5 22.2L12 25.7C14 31.5 19.5 36 26 36Z" fill="#34A853"/>
                            <text x="46" y="27" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-size="15" font-weight="700" fill="#3C4043">Google Cloud</text>
                        </svg>
                    </div>
                    <div class="wp-partner-info">
                        <div class="wp-partner-title">Google Cloud</div>
                        <p class="wp-partner-desc">BigQuery data engineering, real-time analytics &amp; enterprise AI deployment</p>
                    </div>
                </div>

                <!-- Snowflake Card -->
                <div class="wp-partner-card rv">
                    <div class="wp-partner-media">
                        <svg viewBox="0 0 160 40" width="140" height="35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 8V32M10 14L34 26M10 26L34 14" stroke="#29B5E8" stroke-width="3" stroke-linecap="round"/>
                            <text x="44" y="26" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-size="17" font-weight="700" fill="#29B5E8" letter-spacing="-0.02em">snowflake</text>
                        </svg>
                    </div>
                    <div class="wp-partner-info">
                        <div class="wp-partner-title">Snowflake</div>
                        <p class="wp-partner-desc">Unified cloud data warehousing, automated reporting pipelines &amp; governance</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= 7. TRUST & GOVERNANCE PILLARS ================= -->
    <section class="wp-section wp-section-light">
        <div class="wp-wrap">
            <div class="wp-sec-head rv">
                <span class="wp-eyebrow"><span class="wp-dot"></span> Governance &amp; Risk Reversal</span>
                <h2>Why founders trust Nexteck with their architecture</h2>
                <p>
                    You are handing an external advisor your proprietary processes, system credentials, and growth plans. Here is exactly how we ensure complete protection and transparency from day one:
                </p>
            </div>

            <div class="wp-grid wp-g3">
                <!-- Trust 1 -->
                <div class="wp-trust-card rv">
                    <div class="wp-trust-icon" style="background:rgba(0, 114, 206, 0.1); color:var(--wp-spectrum-blue);">
                        <i class="fa-solid fa-file-shield" style="font-size:1.5rem;"></i>
                    </div>
                    <h3>100% IP Ownership</h3>
                    <p>The entire roadmap, custom code, diagrams, and dashboards remain exclusively your property. Zero licensing hostage-taking, zero proprietary lock-in.</p>
                </div>

                <!-- Trust 2 -->
                <div class="wp-trust-card rv">
                    <div class="wp-trust-icon" style="background:rgba(228, 0, 124, 0.1); color:var(--wp-spectrum-pink);">
                        <i class="fa-solid fa-lock" style="font-size:1.5rem;"></i>
                    </div>
                    <h3>Mutual NDA Upfront</h3>
                    <p>Everything discussed during diagnostic sessions is strictly confidential. We execute a comprehensive bilateral NDA before any operational details are shared.</p>
                </div>

                <!-- Trust 3 -->
                <div class="wp-trust-card rv">
                    <div class="wp-trust-icon" style="background:rgba(255, 184, 28, 0.15); color:#B45309;">
                        <i class="fa-solid fa-scale-balanced" style="font-size:1.5rem;"></i>
                    </div>
                    <h3>Costed Before You Commit</h3>
                    <p>Every single recommendation carries estimated implementation hours, monthly software fees, and measurable impact scores. You approve capital spend before work starts.</p>
                </div>

                <!-- Trust 4 -->
                <div class="wp-trust-card rv">
                    <div class="wp-trust-icon" style="background:rgba(120, 190, 32, 0.12); color:#15803D;">
                        <i class="fa-solid fa-award" style="font-size:1.5rem;"></i>
                    </div>
                    <h3>Enterprise Rigour, SME Prices</h3>
                    <p>Boardroom-grade frameworks scaled for agile, founder-led businesses &mdash; structured in bite-sized sprints so you never over-invest ahead of actual ROI.</p>
                </div>

                <!-- Trust 5 -->
                <div class="wp-trust-card rv">
                    <div class="wp-trust-icon" style="background:rgba(0, 163, 173, 0.1); color:var(--wp-spectrum-teal);">
                        <i class="fa-solid fa-users-gear" style="font-size:1.5rem;"></i>
                    </div>
                    <h3>Built for Your Internal Team</h3>
                    <p>Step-by-step Standard Operating Procedures (SOPs), delegation matrixes, and staff training ensure the new architecture runs smoothly without permanent external reliance.</p>
                </div>

                <!-- Trust 6 -->
                <div class="wp-trust-card rv">
                    <div class="wp-trust-icon" style="background:rgba(114, 36, 108, 0.1); color:var(--wp-spectrum-purple);">
                        <i class="fa-solid fa-clock-rotate-left" style="font-size:1.5rem;"></i>
                    </div>
                    <h3>60-Minute Weekly Reviews</h3>
                    <p>KPI governance by exception: review critical performance flags in under an hour a week &mdash; staying completely informed without drowning in unnecessary status meetings.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= 8. URGENCY & CAPACITY TRACKER ================= -->
    <section class="wp-section" id="urgency">
        <div class="wp-wrap">
            <div class="wp-urgency-box rv">
                <div class="wp-urgency-grid">
                    <div>
                        <span class="wp-badge wp-badge-yellow" style="margin-bottom:1rem;">The Compounding Cost of Waiting</span>
                        <h2 style="color:#FFFFFF; margin-bottom:1rem; font-size:clamp(1.9rem, 3.2vw, 2.5rem);">
                            Every month you delay, faster competitors are capturing your market.
                        </h2>
                        <p style="color:#CBD5E1; font-size:1.05rem; line-height:1.65; margin-bottom:1.75rem;">
                            AI and workflow automation adoption has shifted beyond early exploration. The performance gap between organizations running connected systems and those relying on disconnected spreadsheets widens each quarter.
                        </p>
                        <div style="display:flex; flex-direction:column; gap:0.75rem; margin-bottom:2rem; font-size:0.95rem; color:#E2E8F0;">
                            <div><b style="color:#38BDF8;"><i class="fa-solid fa-arrow-right" style="font-size:0.8rem; margin-right:6px;"></i> 10+ hours/week</b> of leadership time wasted on administrative bottlenecks.</div>
                            <div><b style="color:#38BDF8;"><i class="fa-solid fa-arrow-right" style="font-size:0.8rem; margin-right:6px;"></i> 2&times; the clerical error rate</b> caused by re-entering customer records across silos.</div>
                            <div><b style="color:#38BDF8;"><i class="fa-solid fa-arrow-right" style="font-size:0.8rem; margin-right:6px;"></i> Compounding AI leverage</b> realized by competitors in lead velocity and service response.</div>
                        </div>
                        <a href="{{ route('landing') }}#book" class="btn-wp btn-wp-primary" style="background:#38BDF8; color:#001B3A !important; font-weight:800;">
                            Claim a Q4 Audit Slot <i class="fa-solid fa-arrow-right" style="margin-left:5px;"></i>
                        </a>
                    </div>

                    <!-- Live Countdown Card -->
                    <div class="wp-timer-card">
                        <h4><i class="fa-regular fa-calendar-days" style="margin-right:6px; color:#38BDF8;"></i> Q4 2026 Audit Window Closes In:</h4>
                        <div class="wp-countdown-digits">
                            <div class="wp-countdown-block">
                                <b id="cd2-d">--</b>
                                <span>Days</span>
                            </div>
                            <div class="wp-countdown-block">
                                <b id="cd2-h">--</b>
                                <span>Hours</span>
                            </div>
                            <div class="wp-countdown-block">
                                <b id="cd2-m">--</b>
                                <span>Min</span>
                            </div>
                            <div class="wp-countdown-block">
                                <b id="cd2-s">--</b>
                                <span>Sec</span>
                            </div>
                        </div>

                        <div class="wp-slot-tracker">
                            <div class="wp-progress-rail">
                                <div class="wp-progress-fill"></div>
                            </div>
                            <div style="font-size:0.92rem; color:#FFFFFF; font-weight:700;">
                                4 of 6 engagements allocated
                            </div>
                            <div style="font-size:0.8rem; color:#94A3B8; margin-top:0.35rem;">
                                Nexteck caps quarterly cohorts at 6 businesses to guarantee hands-on partner delivery.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= 9. FINAL CLOSING CONVERSION BANNER ================= -->
    <section class="wp-closing-banner">
        <div class="wp-wrap">
            <div class="wp-closing-in rv">
                <span class="wp-eyebrow on-navy"><span class="wp-dot"></span> Next Steps</span>
                <h2>Let's uncover in one call what is truly constraining your growth.</h2>
                <p>
                    A complimentary 45-minute discovery consultation. We review your current tools, score your friction points, and provide an honest assessment of whether an end-to-end architecture audit is appropriate. No commercial pressure, no obligations.
                </p>
                <div style="display:flex; justify-content:center; gap:1.25rem; flex-wrap:wrap;">
                    <a href="{{ route('landing') }}#book" class="btn-wp btn-wp-primary btn-wp-lg">
                        Book My Free Strategy Call <i class="fa-solid fa-arrow-right arrow-icon" style="margin-left:6px;"></i>
                    </a>
                    <a href="#method" class="btn-wp btn-wp-ghost-light btn-wp-lg">
                        Review Methodology
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <!-- ================= SCRIPTS ================= -->
    <script>
        // ---- Q4 Countdown Timer ----
        const targetDate = new Date("2026-12-31T23:59:59+00:00").getTime();
        function updateTimer() {
            let diff = targetDate - Date.now();
            if (diff < 0) diff = 0;
            const d = Math.floor(diff / 864e5);
            const h = Math.floor(diff / 36e5) % 24;
            const m = Math.floor(diff / 6e4) % 60;
            const s = Math.floor(diff / 1e3) % 60;
            
            const setVal = (id, val) => {
                const el = document.getElementById(id);
                if (el) el.textContent = String(val).padStart(2, "0");
            };
            setVal("cd2-d", d);
            setVal("cd2-h", h);
            setVal("cd2-m", m);
            setVal("cd2-s", s);
        }
        updateTimer();
        setInterval(updateTimer, 1000);

        // ---- Reveal on Scroll ----
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("in");
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });

        document.querySelectorAll(".rv").forEach(el => observer.observe(el));

        // ---- Animated Counter Numbers ----
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                counterObserver.unobserve(entry.target);
                const el = entry.target;
                const end = +el.dataset.count;
                const startTime = performance.now();
                const duration = 1600;

                function step(currentTime) {
                    const progress = Math.min((currentTime - startTime) / duration, 1);
                    const easeOut = 1 - Math.pow(1 - progress, 3);
                    el.textContent = Math.round(end * easeOut);
                    if (progress < 1) requestAnimationFrame(step);
                }
                requestAnimationFrame(step);
            });
        }, { threshold: 0.5 });

        document.querySelectorAll("[data-count]").forEach(el => counterObserver.observe(el));

        // ---- Dynamic Hero Typing Animation ----
        (function() {
            const el = document.getElementById("heroTypewriter");
            if (!el) return;
            const phrases = [
                "the right technology?",
                "scalable software architecture?",
                "automated workflows?",
                "bespoke software platforms?",
                "high-margin systems?",
                "a defensible tech advantage?"
            ];
            let phraseIndex = 0;
            let charIndex = phrases[0].length;
            let isDeleting = false;
            let typingSpeed = 90;

            function typeLoop() {
                const currentPhrase = phrases[phraseIndex];
                if (isDeleting) {
                    el.textContent = currentPhrase.substring(0, charIndex - 1);
                    charIndex--;
                    typingSpeed = 40;
                } else {
                    el.textContent = currentPhrase.substring(0, charIndex + 1);
                    charIndex++;
                    typingSpeed = 75;
                }

                if (!isDeleting && charIndex === currentPhrase.length) {
                    typingSpeed = 2400; // Pause at end of completed phrase
                    isDeleting = true;
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    phraseIndex = (phraseIndex + 1) % phrases.length;
                    typingSpeed = 450; // Pause before typing next
                }

                setTimeout(typeLoop, typingSpeed);
            }

            // Start typing loop after initial render
            setTimeout(() => {
                isDeleting = true;
                typeLoop();
            }, 2600);
        })();
    </script>
</body>

</html>
