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
            min-height: calc(100vh - 85px);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            box-sizing: border-box;
            padding: clamp(3rem, 7vh, 5rem) 0 0;
            color: #FFFFFF;
            overflow: hidden;
            background: #000F24;
        }

        /* Animated Hero Background Slideshow (Ken Burns & Crossfade) */
        .wp-hero-bg-slider {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
            pointer-events: none;
        }
        .wp-hero-bg-slide {
            position: absolute;
            inset: -4%;
            width: 108%;
            height: 108%;
            background-size: cover;
            background-position: center center;
            opacity: 0;
            will-change: transform, opacity;
            animation: heroKenBurns 24s infinite;
        }
        .wp-hero-bg-slide:nth-child(1) {
            background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=2000&q=80');
            animation-delay: 0s;
        }
        .wp-hero-bg-slide:nth-child(2) {
            background-image: url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=2000&q=80');
            animation-delay: 6s;
        }
        .wp-hero-bg-slide:nth-child(3) {
            background-image: url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=2000&q=80');
            animation-delay: 12s;
        }
        .wp-hero-bg-slide:nth-child(4) {
            background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=2000&q=80');
            animation-delay: 18s;
        }

        @keyframes heroKenBurns {
            0% {
                opacity: 0;
                transform: scale(1) translate(0, 0);
            }
            5% {
                opacity: 0.85;
            }
            25% {
                opacity: 0.85;
                transform: scale(1.08) translate(-1%, -1%);
            }
            30% {
                opacity: 0;
                transform: scale(1.1) translate(-1.5%, -1.5%);
            }
            100% {
                opacity: 0;
                transform: scale(1) translate(0, 0);
            }
        }

        .wp-hero-bg-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(8, 12, 22, 0.50) 0%, rgba(8, 12, 22, 0.32) 50%, rgba(8, 12, 22, 0.65) 100%);
            z-index: 2;
            pointer-events: none;
        }

        .wp-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: 
                radial-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px);
            background-size: 36px 36px;
            opacity: 0.2;
            pointer-events: none;
            z-index: 3;
        }

        .wp-hero-content-wrap {
            position: relative;
            z-index: 4;
            width: 100%;
            margin: auto 0;
            padding: 1.5rem;
        }

        .wp-hero-content {
            position: relative;
            z-index: 2;
            max-width: 880px;
            margin: 0 auto;
            text-align: center;
            width: 100%;
        }

        /* Hero Infinite Scrolling Marquee Banner */
        .wp-hero-marquee {
            width: 100%;
            background: rgba(0, 15, 36, 0.85);
            border-top: 1px solid rgba(255, 255, 255, 0.09);
            backdrop-filter: blur(12px);
            padding: 0.95rem 0;
            overflow: hidden;
            position: relative;
            z-index: 5;
            mask-image: linear-gradient(to right, transparent 0%, black 8%, black 92%, transparent 100%);
            -webkit-mask-image: linear-gradient(to right, transparent 0%, black 8%, black 92%, transparent 100%);
        }
        .wp-hero-marquee:hover .wp-marquee-track {
            animation-play-state: paused;
        }
        .wp-marquee-track {
            display: flex;
            align-items: center;
            width: max-content;
            gap: 2.25rem;
            animation: marqueeSlide 36s linear infinite;
        }
        @keyframes marqueeSlide {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }
        .wp-marquee-item {
            display: inline-flex;
            align-items: center;
            gap: 0.65rem;
            white-space: nowrap;
            font-family: var(--wp-font-display);
            font-size: 0.84rem;
            font-weight: 500;
            color: #CBD5E1;
            letter-spacing: 0.02em;
        }
        .wp-marquee-item b {
            color: #FFFFFF;
            font-weight: 700;
        }
        .wp-marquee-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #38BDF8;
            box-shadow: 0 0 8px #38BDF8;
            display: inline-block;
            flex-shrink: 0;
        }
        .wp-marquee-pill {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.12);
            padding: 0.22rem 0.75rem;
            border-radius: 9999px;
            color: #E0F2FE;
            font-size: 0.78rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
        }
        .wp-marquee-pill i {
            color: #38BDF8;
            font-size: 0.8rem;
        }

        .wp-hero-content::after {
            content: "";
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: min(850px, 92vw);
            height: 380px;
            background: radial-gradient(ellipse at center, rgba(5, 8, 16, 0.65) 0%, rgba(5, 8, 16, 0.35) 55%, transparent 75%);
            pointer-events: none;
            z-index: -1;
            filter: blur(25px);
        }

        /* Hero Staged Entrance Animations */
        @keyframes heroEntrance {
            0% {
                opacity: 0;
                transform: translateY(18px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .wp-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.65rem;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(16px);
            padding: 0.35rem 1.05rem;
            border-radius: var(--wp-radius-pill);
            font-family: var(--wp-font-display);
            font-size: 0.74rem;
            font-weight: 600;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #BAE6FD;
            margin-bottom: clamp(1.2rem, 2.4vh, 1.75rem);
            box-shadow: 0 2px 14px rgba(0, 0, 0, 0.25);
            animation: heroEntrance 0.75s cubic-bezier(0.16, 1, 0.3, 1) 0.1s both;
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
            font-size: clamp(1.85rem, 3.2vw, 2.75rem);
            font-weight: 600;
            line-height: 1.32;
            letter-spacing: -0.022em;
            margin: 0 auto clamp(1rem, 2vh, 1.4rem);
            max-width: 860px;
            animation: heroEntrance 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.22s both;
            text-shadow: 0 2px 20px rgba(0, 0, 0, 0.75), 0 1px 4px rgba(0, 0, 0, 0.9);
        }

        .wp-hero h1 em {
            font-style: normal;
            font-weight: 700;
            background: linear-gradient(120deg, #38BDF8 0%, #818CF8 50%, #F472B6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
            filter: drop-shadow(0 2px 12px rgba(0, 0, 0, 0.95));
        }

        /* Smooth Rotating Text Highlight */
        .wp-rotator-wrap {
            display: inline-block;
            position: relative;
            vertical-align: baseline;
        }
        .wp-rotator-text {
            display: inline-block;
            background: linear-gradient(120deg, #38BDF8 0%, #818CF8 50%, #F472B6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
            filter: drop-shadow(0 2px 12px rgba(0, 0, 0, 0.95));
            transition: transform 0.45s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.45s cubic-bezier(0.16, 1, 0.3, 1), filter 0.45s cubic-bezier(0.16, 1, 0.3, 1);
            transform: translateY(0);
            opacity: 1;
        }
        .wp-rotator-text.fade-out {
            transform: translateY(-14px);
            opacity: 0;
            filter: blur(5px) drop-shadow(0 2px 12px rgba(0, 0, 0, 0.95));
        }
        .wp-rotator-text.prepare-in {
            transform: translateY(14px);
            opacity: 0;
            filter: blur(5px) drop-shadow(0 2px 12px rgba(0, 0, 0, 0.95));
            transition: none !important;
        }

        .wp-hero-lead {
            font-size: clamp(0.94rem, 1.1vw, 1.05rem);
            color: #F1F5F9;
            max-width: 680px;
            margin: 0 auto clamp(1.5rem, 3vh, 2.25rem);
            line-height: 1.72;
            font-weight: 400;
            letter-spacing: -0.005em;
            animation: heroEntrance 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.36s both;
            text-shadow: 0 1px 12px rgba(0, 0, 0, 0.85);
        }

        .wp-hero-actions {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1.15rem;
            margin-bottom: clamp(1.75rem, 3.5vh, 2.75rem);
            animation: heroEntrance 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.5s both;
        }
        @media (max-width: 520px) {
            .wp-hero-actions {
                flex-direction: column;
                width: 100%;
                gap: 0.85rem;
            }
            .wp-hero-actions .wp-btn {
                width: 100%;
                justify-content: center;
                text-align: center;
            }
        }

        .wp-hero-chips {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 0.75rem 1.25rem;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            padding-top: clamp(1.35rem, 2.6vh, 1.85rem);
            max-width: 900px;
            margin: 0 auto;
            animation: heroEntrance 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.65s both;
        }
        .wp-hero-chip-item {
            display: inline-flex;
            align-items: center;
            gap: 0.55rem;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: var(--wp-radius-pill);
            padding: 0.4rem 1rem;
            backdrop-filter: blur(10px);
            font-size: 0.81rem;
            color: #94A3B8;
            transition: all 0.25s ease;
        }
        .wp-hero-chip-item:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(56, 189, 248, 0.3);
            color: #E2E8F0;
        }
        .wp-hero-chip-item b {
            color: #F8FAFC;
            font-weight: 600;
        }
        .wp-hero-chip-item i {
            color: #38BDF8;
            font-size: 0.82rem;
            flex-shrink: 0;
        }

        /* ================= 2. EXPERIENCE & STATS BANNER (WIPRO STYLE) ================= */
        .wp-stats-section {
            background: #EDF0F5;
            border-bottom: 1px solid rgba(0, 0, 0, 0.06);
            padding: 3.75rem 0 3.25rem;
            position: relative;
            z-index: 10;
            overflow: hidden;
        }
        .wp-experience-grid {
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center;
            gap: clamp(2rem, 4vw, 4rem);
        }
        .wp-experience-left {
            display: flex;
            flex-direction: column;
            min-width: 0;
        }
        .wp-experience-headline {
            font-family: var(--wp-font-display);
            font-size: clamp(1.2rem, 1.85vw, 1.6rem);
            font-weight: 700;
            line-height: 1.32;
            letter-spacing: -0.015em;
            color: #1F1B4E;
            max-width: 480px;
            margin: 0 0 2.25rem 0;
        }
        .wp-experience-metrics {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: clamp(1.25rem, 2.5vw, 2.5rem);
        }
        .wp-experience-stat {
            display: flex;
            flex-direction: column;
            min-width: 0;
        }
        .wp-experience-number {
            font-family: var(--wp-font-display);
            font-size: clamp(2.5rem, 3.8vw, 3.5rem);
            font-weight: 800;
            letter-spacing: -0.035em;
            color: #274D8C;
            line-height: 1;
            margin-bottom: 0.65rem;
            display: flex;
            align-items: baseline;
            gap: 2px;
        }
        .wp-experience-number i {
            font-style: normal;
            font-weight: 700;
            font-size: 0.75em;
            color: #274D8C;
        }
        .wp-experience-label {
            font-size: 0.95rem;
            color: #1E293B;
            font-weight: 500;
            line-height: 1.4;
            max-width: 195px;
        }

        /* 3 Overlapping Circles Graphic */
        .wp-experience-right {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .wp-bubble-cluster {
            position: relative;
            width: 440px;
            height: 275px;
            display: flex;
            align-items: center;
            justify-content: center;
            user-select: none;
            flex-shrink: 0;
        }
        .wp-bubble-circle {
            position: absolute;
            border-radius: 50%;
        }
        .wp-bubble-teal {
            width: 210px;
            height: 210px;
            background: #1793A6;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1;
        }
        .wp-bubble-yellow {
            width: 210px;
            height: 210px;
            background: #F9BF15;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1;
        }
        .wp-bubble-shadow {
            position: absolute;
            width: 180px;
            height: 44px;
            background: #000000;
            border-radius: 50%;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
        }
        .wp-bubble-center {
            position: relative;
            width: 265px;
            height: 265px;
            background: #274C8B;
            border-radius: 50%;
            z-index: 3;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #FFFFFF;
            padding: 1.5rem 1.25rem;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.16);
        }
        .wp-bubble-number {
            font-family: var(--wp-font-display);
            font-size: clamp(3.2rem, 4.4vw, 4rem);
            font-weight: 800;
            color: #FFFFFF;
            line-height: 1;
            letter-spacing: -0.035em;
            margin-bottom: 0.45rem;
            display: flex;
            align-items: baseline;
            justify-content: center;
            gap: 2px;
        }
        .wp-bubble-number i {
            font-style: normal;
            color: #FFFFFF;
            font-weight: 700;
            font-size: 0.72em;
        }
        .wp-bubble-label {
            font-size: 0.95rem;
            color: #FFFFFF;
            font-weight: 500;
            line-height: 1.35;
            max-width: 185px;
            margin: 0 auto;
            text-align: center;
        }

        @media (max-width: 1140px) {
            .wp-experience-grid {
                grid-template-columns: 1fr;
                gap: 3rem;
            }
            .wp-experience-headline {
                max-width: 100%;
                text-align: center;
            }
            .wp-experience-metrics {
                justify-content: center;
            }
            .wp-experience-stat {
                align-items: center;
                text-align: center;
            }
            .wp-experience-right {
                margin: 0 auto;
            }
        }

        @media (max-width: 680px) {
            .wp-experience-metrics {
                grid-template-columns: 1fr;
                gap: 1.75rem;
                text-align: center;
            }
            .wp-experience-number {
                justify-content: center;
            }
            .wp-experience-label {
                max-width: 280px;
                margin: 0 auto;
            }
            .wp-bubble-cluster {
                width: 320px;
                height: 200px;
            }
            .wp-bubble-teal,
            .wp-bubble-yellow {
                width: 150px;
                height: 150px;
            }
            .wp-bubble-center {
                width: 195px;
                height: 195px;
                padding: 0.75rem;
            }
            .wp-bubble-shadow {
                width: 130px;
                height: 30px;
                bottom: 8px;
            }
            .wp-bubble-number {
                font-size: 2.5rem;
            }
            .wp-bubble-label {
                font-size: 0.82rem;
                max-width: 150px;
            }
        }

        @media (max-width: 480px) {
            .wp-bubble-cluster {
                transform: scale(min(1, calc((100vw - 3rem) / 330)));
                transform-origin: center center;
                margin: -10px auto;
            }
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

        /* Methodology (Wipro Style Cards) */
        .wp-section-method {
            background: #F3F5F9;
            border-top: 1px solid #E2E8F0;
            border-bottom: 1px solid #E2E8F0;
        }
        .wp-method-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
        }
        .wp-method-card {
            background: #FFFFFF;
            border: 1px solid #E2E8F0;
            border-radius: 14px;
            padding: 2.2rem 1.85rem;
            position: relative;
            display: flex;
            flex-direction: column;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 4px 14px rgba(0, 20, 50, 0.04);
        }
        .wp-method-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 30px rgba(46, 30, 84, 0.12);
            border-color: #CBD5E1;
        }
        .wp-method-stage-pill {
            display: inline-block;
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #2E1E54;
            background: rgba(46, 30, 84, 0.08);
            padding: 0.25rem 0.65rem;
            border-radius: 6px;
            width: fit-content;
            margin-bottom: 0.85rem;
        }
        .wp-method-card h3 {
            font-family: var(--wp-font-display);
            font-size: 1.22rem;
            font-weight: 700;
            color: #231B4D;
            line-height: 1.32;
            margin: 0 0 0.85rem 0;
            letter-spacing: -0.015em;
        }
        .wp-method-card p {
            font-size: 0.92rem;
            color: #475569;
            line-height: 1.6;
            margin: 0 0 1.25rem 0;
        }
        .wp-method-deliverable {
            border-top: 1px dashed #E2E8F0;
            padding-top: 0.95rem;
            font-size: 0.83rem;
            color: #64748B;
            line-height: 1.48;
            margin-bottom: 1.65rem;
            flex-grow: 1;
        }
        .wp-method-deliverable b {
            color: #1E293B;
            font-weight: 600;
        }
        .wp-method-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #2E1E54;
            color: #FFFFFF !important;
            padding: 0.55rem 1.45rem;
            border-radius: 9999px;
            font-family: var(--wp-font-display);
            font-size: 0.88rem;
            font-weight: 600;
            text-decoration: none;
            width: fit-content;
            transition: all 0.25s ease;
            box-shadow: 0 2px 8px rgba(46, 30, 84, 0.18);
        }
        .wp-method-btn:hover {
            background: #1C1036;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(46, 30, 84, 0.3);
            color: #FFFFFF !important;
        }

        @media (max-width: 1100px) {
            .wp-method-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.25rem;
            }
        }
        @media (max-width: 640px) {
            .wp-method-grid {
                grid-template-columns: 1fr;
                gap: 1.25rem;
            }
        }

        /* ================= 5. REDESIGNED EXECUTIVE ROADMAP SHOWCASE (WIPRO INSPIRED) ================= */
        .wp-roadmap-section {
            background: #F8FAFD;
            border-top: 1px solid #E2E8F0;
            border-bottom: 1px solid #E2E8F0;
            padding: 5.5rem 0 6rem;
            position: relative;
        }

        /* 1. Split Strategic Hero Banner (50/50 - Image 3) */
        .wp-road-split-banner {
            display: grid;
            grid-template-columns: 1fr 1fr;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 16px 40px rgba(0, 27, 58, 0.1);
            margin-bottom: 3.5rem;
            border: 1px solid #CBD5E1;
            min-height: 440px;
        }
        .wp-road-split-left {
            position: relative;
            background: #000B1A;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: clamp(2.5rem, 5vw, 4rem);
            overflow: hidden;
        }
        .wp-road-split-left-bg {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            opacity: 0.65;
            transform: scale(1.05);
            transition: transform 6s ease;
        }
        .wp-road-split-banner:hover .wp-road-split-left-bg {
            transform: scale(1.12);
        }
        .wp-road-split-left-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(8, 11, 26, 0.94) 0%, rgba(20, 10, 42, 0.88) 100%);
            z-index: 2;
        }
        .wp-road-split-left-content {
            position: relative;
            z-index: 3;
            max-width: 480px;
            text-align: center;
        }
        .wp-road-split-tag {
            font-size: 0.74rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: #38BDF8;
            margin-bottom: 1rem;
            display: inline-block;
        }
        .wp-road-split-left-content h3 {
            font-family: var(--wp-font-display);
            font-size: clamp(1.6rem, 2.5vw, 2.25rem);
            font-weight: 700;
            color: #FFFFFF !important;
            line-height: 1.25;
            letter-spacing: -0.025em;
            margin-bottom: 1rem;
        }
        .wp-road-split-left-content p {
            color: #94A3B8;
            font-size: 0.96rem;
            line-height: 1.6;
            margin: 0;
        }

        .wp-road-split-right {
            position: relative;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: clamp(2.5rem, 5vw, 4rem);
            overflow: hidden;
        }
        .wp-road-split-right-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(15, 23, 42, 0.45) 0%, rgba(15, 23, 42, 0.88) 100%);
            z-index: 2;
        }
        .wp-road-split-right-content {
            position: relative;
            z-index: 3;
            max-width: 480px;
            text-align: center;
            color: #FFFFFF;
        }
        .wp-road-split-right-content h3 {
            font-family: var(--wp-font-display);
            font-size: clamp(1.75rem, 2.7vw, 2.4rem);
            font-weight: 700;
            color: #FFFFFF !important;
            line-height: 1.25;
            margin-bottom: 0.9rem;
        }
        .wp-road-split-right-content p {
            color: #E2E8F0;
            font-size: 0.96rem;
            line-height: 1.6;
            margin-bottom: 1.75rem;
        }
        .wp-road-split-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #FFFFFF;
            color: #2E1E54 !important;
            padding: 0.75rem 2.25rem;
            border-radius: 9999px;
            font-family: var(--wp-font-display);
            font-size: 0.95rem;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.25);
        }
        .wp-road-split-btn:hover {
            background: #F1F5F9;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.35);
        }

        /* 2. Vibrant 8-Block Color Mosaic Grid (Image 1) */
        .wp-road-mosaic-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 16px 36px rgba(0, 27, 58, 0.08);
            margin-bottom: 3.5rem;
        }
        .wp-mosaic-tile {
            position: relative;
            min-height: 275px;
            padding: 2.25rem 1.85rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
            color: #FFFFFF;
            transition: transform 0.3s ease;
        }
        .wp-mosaic-tile-media {
            padding: 0;
            background: #000F24;
        }
        .wp-mosaic-tile-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.65s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .wp-mosaic-tile-media:hover img {
            transform: scale(1.08);
        }
        .wp-mosaic-tile-tag {
            position: absolute;
            bottom: 1.25rem;
            left: 1.25rem;
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 0.35rem 0.85rem;
            border-radius: 9999px;
            font-size: 0.72rem;
            font-weight: 700;
            color: #BAE6FD;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        /* Solid Color Tiles from Image 1 */
        .wp-mosaic-tile-teal {
            background: #0E858D;
        }
        .wp-mosaic-tile-emerald {
            background: #009E7E;
        }
        .wp-mosaic-tile-mint {
            background: #12B4A3;
        }
        .wp-mosaic-tile-blue {
            background: #2E5BFF;
        }
        .wp-mosaic-tile h4 {
            font-family: var(--wp-font-display);
            font-size: 1.15rem;
            font-weight: 700;
            color: #FFFFFF !important;
            line-height: 1.35;
            letter-spacing: -0.015em;
            margin: 0 0 1rem 0;
        }
        .wp-mosaic-tile p {
            font-size: 0.86rem;
            color: rgba(255, 255, 255, 0.88);
            line-height: 1.55;
            margin: 0;
        }
        .wp-mosaic-tile-link {
            font-family: var(--wp-font-display);
            font-size: 0.78rem;
            font-weight: 800;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #FFFFFF !important;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 1.5rem;
            transition: transform 0.25s ease;
        }
        .wp-mosaic-tile-link:hover {
            transform: translateX(4px);
        }

        /* 3. Three High-Impact Outcome Cards (Image 2) */
        .wp-road-cards-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.75rem;
        }
        .wp-road-card {
            border-radius: 16px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 420px;
            box-shadow: 0 12px 32px rgba(0, 27, 58, 0.08);
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
            position: relative;
        }
        .wp-road-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 44px rgba(0, 27, 58, 0.14);
        }

        /* Card 1: Deep Purple Stats Card */
        .wp-road-card-purple-stats {
            background: linear-gradient(145deg, #1C0A35 0%, #2A1050 60%, #150628 100%);
            color: #FFFFFF;
            padding: 2.75rem 2.25rem;
            border: 1px solid rgba(255, 255, 255, 0.12);
        }
        .wp-purple-stats-header {
            margin-bottom: 2rem;
        }
        .wp-purple-stats-badge {
            font-size: 0.74rem;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: #F472B6;
            margin-bottom: 0.5rem;
            display: block;
        }
        .wp-purple-stats-title {
            font-family: var(--wp-font-display);
            font-size: 2.4rem;
            font-weight: 800;
            color: #FFFFFF;
            line-height: 1;
            letter-spacing: -0.03em;
        }
        .wp-purple-stats-title span {
            font-size: 1.1rem;
            font-weight: 600;
            color: #E2E8F0;
            display: block;
            margin-top: 0.35rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }
        .wp-purple-stats-list {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
            border-top: 1px solid rgba(255, 255, 255, 0.12);
            padding-top: 1.75rem;
        }
        .wp-purple-stat-row {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
        }
        .wp-purple-stat-label {
            font-size: 0.88rem;
            color: #CBD5E1;
        }
        .wp-purple-stat-value {
            font-family: var(--wp-font-display);
            font-size: 1.18rem;
            font-weight: 700;
            color: #FFFFFF;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .wp-purple-stat-value i {
            font-size: 0.75rem;
            color: #38BDF8;
        }

        /* Card 2: "Proof in a Scope" 3D Disc Theme */
        .wp-road-card-proof {
            background: linear-gradient(145deg, #18092F 0%, #301357 70%, #1A0735 100%);
            color: #FFFFFF;
            padding: 2.75rem 2.25rem;
            border: 1px solid rgba(255, 255, 255, 0.12);
        }
        .wp-proof-heading {
            font-family: var(--wp-font-display);
            font-size: 2.25rem;
            font-weight: 800;
            color: #FFFFFF;
            line-height: 1.15;
            margin-bottom: 0.65rem;
            letter-spacing: -0.025em;
        }
        .wp-proof-sub {
            font-size: 0.9rem;
            color: #CBD5E1;
            margin-bottom: 1.75rem;
            line-height: 1.5;
        }
        .wp-proof-items {
            list-style: none;
            padding: 0;
            margin: 0 0 2rem 0;
            display: flex;
            flex-direction: column;
            gap: 0.65rem;
        }
        .wp-proof-items li {
            font-size: 0.88rem;
            color: #E2E8F0;
            display: flex;
            align-items: center;
            gap: 9px;
            font-style: italic;
        }
        .wp-proof-items li::before {
            content: "•";
            color: #F472B6;
            font-size: 1.3rem;
            line-height: 0;
        }
        .wp-proof-badge {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 9999px;
            padding: 0.45rem 1rem;
            font-size: 0.76rem;
            font-weight: 700;
            color: #FFFFFF;
            width: fit-content;
            letter-spacing: 0.04em;
        }

        /* Card 3: Sustainable Resilient Architecture */
        .wp-road-card-nature {
            position: relative;
            background-size: cover;
            background-position: center;
            color: #FFFFFF;
            padding: 2.75rem 2.25rem;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            border: 1px solid rgba(255, 255, 255, 0.12);
        }
        .wp-road-card-nature-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(8, 14, 28, 0.25) 0%, rgba(8, 14, 28, 0.88) 75%, rgba(8, 14, 28, 0.96) 100%);
            z-index: 1;
        }
        .wp-road-card-nature-content {
            position: relative;
            z-index: 2;
        }
        .wp-nature-tag {
            font-size: 0.74rem;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: #4ADE80;
            margin-bottom: 0.75rem;
            display: block;
        }
        .wp-road-card-nature-content h4 {
            font-family: var(--wp-font-display);
            font-size: 1.55rem;
            font-weight: 700;
            color: #FFFFFF !important;
            line-height: 1.3;
            margin-bottom: 0.75rem;
        }
        .wp-road-card-nature-content p {
            color: #E2E8F0;
            font-size: 0.9rem;
            line-height: 1.55;
            margin-bottom: 1.5rem;
        }
        .wp-nature-link {
            color: #38BDF8 !important;
            font-family: var(--wp-font-display);
            font-weight: 700;
            font-size: 0.88rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.25s ease;
        }
        .wp-nature-link:hover {
            color: #FFFFFF !important;
            transform: translateX(4px);
        }

        @media (max-width: 1100px) {
            .wp-road-mosaic-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .wp-road-cards-3 {
                grid-template-columns: 1fr;
            }
        }
        @media (max-width: 820px) {
            .wp-road-split-banner {
                grid-template-columns: 1fr;
            }
            .wp-road-mosaic-grid {
                grid-template-columns: 1fr;
            }
        }

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

        /* Trust & Assurance (Wipro Centered Top-Intersecting Outline Icons) */
        .wp-trust-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3.25rem 1.75rem;
            margin-top: 3.25rem;
        }
        .wp-trust-card {
            background: #FFFFFF;
            border: 1px solid #D5DCE5;
            border-radius: 16px;
            padding: 3.5rem 2rem 2.25rem;
            position: relative;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 4px 20px rgba(0, 27, 58, 0.03);
        }
        .wp-trust-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 36px rgba(46, 30, 84, 0.09);
            border-color: #B8C7D9;
        }
        .wp-trust-top-icon {
            position: absolute;
            top: -24px;
            left: 50%;
            transform: translateX(-50%);
            background: #FFFFFF;
            padding: 0 16px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
        }
        .wp-trust-top-icon svg {
            display: block;
        }
        .wp-trust-card h3 {
            font-family: var(--wp-font-display);
            font-size: 1.25rem;
            font-weight: 700;
            color: #2E1E54 !important;
            line-height: 1.35;
            letter-spacing: -0.02em;
            margin: 0 0 1.15rem 0;
            text-align: center;
        }
        .wp-trust-card p {
            font-size: 0.92rem;
            color: #475569;
            line-height: 1.62;
            margin: 0;
            text-align: center;
            max-width: 330px;
        }

        @media (max-width: 980px) {
            .wp-trust-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 3rem 1.5rem;
            }
        }
        @media (max-width: 640px) {
            .wp-trust-grid {
                grid-template-columns: 1fr;
                gap: 3rem 1.25rem;
            }
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
        @media (max-width: 640px) {
            .wp-urgency-box {
                padding: 1.75rem 1.25rem;
                border-radius: 14px;
            }
            .wp-timer-card {
                padding: 1.5rem 1rem;
            }
            .wp-closing-banner {
                padding: 3.5rem 0;
            }
            .wp-closing-in p {
                font-size: 1rem;
                margin-bottom: 2rem;
            }
        }

        /* ================= 6C. ENTERPRISE SPOTLIGHT BANNER ================= */
        .wp-spotlight-section {
            position: relative;
            width: 100%;
            min-height: 520px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: #000F24;
            color: #FFFFFF;
        }
        .wp-spotlight-bg {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center right;
            transform: scale(1.02);
            transition: transform 8s cubic-bezier(0.16, 1, 0.3, 1);
            z-index: 1;
        }
        .wp-spotlight-section:hover .wp-spotlight-bg {
            transform: scale(1.06);
        }
        .wp-spotlight-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(8, 14, 28, 0.96) 0%, rgba(8, 14, 28, 0.88) 45%, rgba(8, 14, 28, 0.38) 100%);
            z-index: 2;
        }
        .wp-spotlight-content {
            max-width: 680px;
            padding: clamp(4.5rem, 8vh, 6.5rem) 0;
        }
        .wp-spotlight-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #38BDF8;
            margin-bottom: 1.25rem;
        }
        .wp-spotlight-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #38BDF8;
            box-shadow: 0 0 10px #38BDF8;
        }
        .wp-spotlight-content h2 {
            color: #FFFFFF !important;
            font-size: clamp(2.1rem, 3.4vw, 3rem);
            font-weight: 700;
            line-height: 1.22;
            letter-spacing: -0.025em;
            margin-bottom: 1.25rem;
        }
        .wp-spotlight-content p {
            color: #E2E8F0;
            font-size: clamp(1rem, 1.2vw, 1.12rem);
            line-height: 1.7;
            margin-bottom: 2.25rem;
            max-width: 620px;
        }
        .wp-spotlight-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #FFFFFF;
            color: #2E1E54 !important;
            padding: 0.75rem 2.25rem;
            border-radius: 9999px;
            font-family: var(--wp-font-display);
            font-size: 0.95rem;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.25);
        }
        .wp-spotlight-btn:hover {
            background: #F1F5F9;
            transform: translateY(-3px);
            box-shadow: 0 10px 28px rgba(0, 0, 0, 0.35);
            color: #1C1036 !important;
        }

        /* ================= 6D. CHECKERBOARD MOSAIC GRID ================= */
        .wp-checkerboard-section {
            background: #FFFFFF;
            position: relative;
        }
        .wp-mosaic-container {
            width: 100%;
            display: flex;
            flex-direction: column;
        }
        .wp-mosaic-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 420px;
            align-items: stretch;
            border-top: 1px solid #E5E9F0;
        }
        .wp-mosaic-row:last-child {
            border-bottom: 1px solid #E5E9F0;
        }
        .wp-mosaic-cell {
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .wp-mosaic-text {
            background: #F3F5F9;
            padding: clamp(2.5rem, 5vw, 4.5rem) clamp(2.5rem, 5vw, 5rem);
        }
        .wp-mosaic-pill {
            font-size: 0.76rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: #382356;
            margin-bottom: 0.85rem;
            display: inline-block;
        }
        .wp-mosaic-title {
            font-family: var(--wp-font-display);
            font-size: clamp(1.45rem, 2.3vw, 2.1rem);
            font-weight: 700;
            color: #2E1E54;
            line-height: 1.28;
            letter-spacing: -0.025em;
            margin-bottom: 1.15rem;
        }
        .wp-mosaic-desc {
            font-size: clamp(0.92rem, 1.05vw, 1rem);
            color: #475569;
            line-height: 1.68;
            margin-bottom: 1.75rem;
            max-width: 580px;
        }
        .wp-mosaic-link {
            font-family: var(--wp-font-display);
            font-size: 0.92rem;
            font-weight: 700;
            color: #2E1E54;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.25s ease;
        }
        .wp-mosaic-link i {
            transition: transform 0.25s ease;
        }
        .wp-mosaic-link:hover {
            color: #382356;
        }
        .wp-mosaic-link:hover i {
            transform: translateX(5px);
        }
        .wp-mosaic-media {
            background: #000F24;
            min-height: 340px;
        }
        .wp-mosaic-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.65s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .wp-mosaic-row:hover .wp-mosaic-media img {
            transform: scale(1.05);
        }
        .wp-mosaic-media-badge {
            position: absolute;
            bottom: 1.5rem;
            left: 1.75rem;
            display: flex;
            align-items: center;
            gap: 12px;
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 0.5rem 1.15rem;
            border-radius: 9999px;
            color: #FFFFFF;
            font-size: 0.82rem;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.3);
            z-index: 2;
        }
        .wp-mosaic-brand {
            font-weight: 700;
            letter-spacing: 0.05em;
            color: #38BDF8;
        }
        .wp-mosaic-brand b {
            color: #FFFFFF;
        }
        .wp-mosaic-sublabel {
            color: #E2E8F0;
            font-weight: 500;
        }

        @media (max-width: 900px) {
            .wp-mosaic-row {
                grid-template-columns: 1fr;
            }
            .wp-mosaic-reverse {
                display: flex;
                flex-direction: column-reverse;
            }
            .wp-mosaic-media {
                height: 280px;
                min-height: 280px;
            }
            .wp-mosaic-text {
                padding: 2.5rem 1.75rem;
            }
        }
    </style>
</head>

<body>
    @include('partials.header')

    <!-- ================= 1. WIPRO-INSPIRED ENTERPRISE HERO ================= -->
    <header class="wp-hero">
        <!-- Animated Background Slideshow (Ken Burns & Smooth Crossfade) -->
        <div class="wp-hero-bg-slider" aria-hidden="true">
            <div class="wp-hero-bg-slide"></div>
            <div class="wp-hero-bg-slide"></div>
            <div class="wp-hero-bg-slide"></div>
            <div class="wp-hero-bg-slide"></div>
            <div class="wp-hero-bg-overlay"></div>
        </div>

        <div class="wp-hero-content-wrap">
            <div class="wp-wrap" style="position:relative; z-index:2; width:100%;">
                <div class="wp-hero-content">
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
                        Is your business running on <span class="wp-rotator-wrap"><span class="wp-rotator-text" id="heroRotator">the right technology?</span></span>
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
                            <i class="fa-solid fa-circle-check"></i>
                            <span><b>25+ Years</b> Boardroom IT Strategy Experience</span>
                        </div>
                        <div class="wp-hero-chip-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Banking &bull; Insurance &bull; Manufacturing &bull; Education &bull; Rail</span>
                        </div>
                        <div class="wp-hero-chip-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Nexteck SME Strategy &amp; Tracking Toolkit™</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Infinite Scrolling Capability & Trust Marquee Banner -->
        <div class="wp-hero-marquee" aria-hidden="true">
            <div class="wp-marquee-track">
                <!-- Set 1 -->
                <div class="wp-marquee-item"><span class="wp-marquee-dot"></span> <b>25+ Years</b> Boardroom IT Delivery</div>
                <div class="wp-marquee-item"><span class="wp-marquee-pill"><i class="fa-solid fa-code"></i> 100% Client IP Ownership</span></div>
                <div class="wp-marquee-item"><span class="wp-marquee-dot"></span> End-to-End Business &amp; AI Audits</div>
                <div class="wp-marquee-item"><span class="wp-marquee-pill"><i class="fa-solid fa-shield-halved"></i> Bilateral NDA Guaranteed</span></div>
                <div class="wp-marquee-item"><span class="wp-marquee-dot"></span> Custom Enterprise Software Architecture</div>
                <div class="wp-marquee-item"><span class="wp-marquee-pill"><i class="fa-solid fa-bolt"></i> 90-Day Execution Roadmaps</span></div>
                <div class="wp-marquee-item"><span class="wp-marquee-dot"></span> Banking &bull; Insurance &bull; Manufacturing &bull; Rail</div>
                <div class="wp-marquee-item"><span class="wp-marquee-pill"><i class="fa-solid fa-layer-group"></i> Nexteck SME Toolkit™</span></div>
                <div class="wp-marquee-item"><span class="wp-marquee-dot"></span> Zero Vendor Lock-in &bull; Zero Tech Hype</div>
                <div class="wp-marquee-item"><span class="wp-marquee-pill"><i class="fa-solid fa-chart-line"></i> 60% Admin Hours Reduced</span></div>

                <!-- Set 2 (Seamless Infinite Duplicate) -->
                <div class="wp-marquee-item"><span class="wp-marquee-dot"></span> <b>25+ Years</b> Boardroom IT Delivery</div>
                <div class="wp-marquee-item"><span class="wp-marquee-pill"><i class="fa-solid fa-code"></i> 100% Client IP Ownership</span></div>
                <div class="wp-marquee-item"><span class="wp-marquee-dot"></span> End-to-End Business &amp; AI Audits</div>
                <div class="wp-marquee-item"><span class="wp-marquee-pill"><i class="fa-solid fa-shield-halved"></i> Bilateral NDA Guaranteed</span></div>
                <div class="wp-marquee-item"><span class="wp-marquee-dot"></span> Custom Enterprise Software Architecture</div>
                <div class="wp-marquee-item"><span class="wp-marquee-pill"><i class="fa-solid fa-bolt"></i> 90-Day Execution Roadmaps</span></div>
                <div class="wp-marquee-item"><span class="wp-marquee-dot"></span> Banking &bull; Insurance &bull; Manufacturing &bull; Rail</div>
                <div class="wp-marquee-item"><span class="wp-marquee-pill"><i class="fa-solid fa-layer-group"></i> Nexteck SME Toolkit™</span></div>
                <div class="wp-marquee-item"><span class="wp-marquee-dot"></span> Zero Vendor Lock-in &bull; Zero Tech Hype</div>
                <div class="wp-marquee-item"><span class="wp-marquee-pill"><i class="fa-solid fa-chart-line"></i> 60% Admin Hours Reduced</span></div>
            </div>
        </div>
    </header>

    <!-- ================= 2. EXPERIENCE & STATS BANNER (WIPRO STYLE) ================= -->
    <section class="wp-stats-section" aria-label="Key Performance Statistics">
        <div class="wp-wrap">
            <div class="wp-experience-grid">
                <!-- Left Column: Headline & Stats -->
                <div class="wp-experience-left rv">
                    <h2 class="wp-experience-headline">Elevate with Real-World Experience and Industry Expertise</h2>
                    <div class="wp-experience-metrics">
                        <!-- Metric 1 -->
                        <div class="wp-experience-stat">
                            <div class="wp-experience-number"><span data-count="9">0</span></div>
                            <div class="wp-experience-label">Specialised industry sectors &amp; global supply chains</div>
                        </div>

                        <!-- Metric 2 -->
                        <div class="wp-experience-stat">
                            <div class="wp-experience-number"><span data-count="40">0</span><i>+</i></div>
                            <div class="wp-experience-label">Large-scale transformation programmes delivered</div>
                        </div>

                        <!-- Metric 3 -->
                        <div class="wp-experience-stat">
                            <div class="wp-experience-number"><span data-count="60">0</span><i>%</i></div>
                            <div class="wp-experience-label">Average admin hours reduced in the first 90 days</div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: 3 Overlapping Circles Graphic with 25+ Stat -->
                <div class="wp-experience-right rv">
                    <div class="wp-bubble-cluster">
                        <!-- Left Teal Bubble -->
                        <div class="wp-bubble-circle wp-bubble-teal" aria-hidden="true"></div>
                        <!-- Bottom Crescent Shadow -->
                        <div class="wp-bubble-shadow" aria-hidden="true"></div>
                        <!-- Right Yellow Bubble -->
                        <div class="wp-bubble-circle wp-bubble-yellow" aria-hidden="true"></div>
                        <!-- Center Navy Bubble with Flagship Stat -->
                        <div class="wp-bubble-center">
                            <div class="wp-bubble-number"><span data-count="25">0</span><i>+</i></div>
                            <div class="wp-bubble-label">Years defining enterprise IT strategy &amp; software roadmaps</div>
                        </div>
                    </div>
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
                            <span class="wp-split-card-impact"><i class="fa-solid fa-chart-pie" style="color:#382356;"></i> Cost: <b>3x reporting lag</b></span>
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
                            <span class="wp-split-card-impact"><i class="fa-solid fa-arrows-rotate" style="color:#382356;"></i> Cost: <b>12% billing discrepancies</b></span>
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
                    <a href="{{ route('assessment.index') }}" class="btn-wp btn-wp-primary" style="background:#382356; color:#fff; border-radius:9999px; padding:0.85rem 2.2rem; font-weight:700;">
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
    <section class="wp-section wp-section-method" id="method">
        <div class="wp-wrap">
            <div class="wp-sec-head rv">
                <span class="wp-eyebrow"><span class="wp-dot"></span> The Nexteck Method</span>
                <h2>One Engagement. Four Stages. Zero Guesswork.</h2>
                <p>
                    Every engagement runs through the <b>Nexteck SME Strategy &amp; Tracking Toolkit™</b> &mdash; the same diagnostic architecture Mohammed Nasar used to guide IT transformation across tier-1 banks, insurance firms, manufacturers, and e-commerce leaders.
                </p>
            </div>

            <div class="wp-method-grid">
                <!-- Stage 01 -->
                <div class="wp-method-card rv">
                    <span class="wp-method-stage-pill">Stage 01</span>
                    <h3>Industry Benchmarking</h3>
                    <p>We score your operational maturity against 3&ndash;5 recognized leaders in your sector across five lenses: customer experience, technology, marketing, operations, and talent.</p>
                    <div class="wp-method-deliverable">
                        <b>Deliverable:</b> Industry Benchmark Matrix &mdash; gap scores, staged actions, owners, and milestones.
                    </div>
                    <div>
                        <a href="{{ route('landing') }}#book" class="wp-method-btn">Read More</a>
                    </div>
                </div>

                <!-- Stage 02 -->
                <div class="wp-method-card rv">
                    <span class="wp-method-stage-pill">Stage 02</span>
                    <h3>Competitor Analysis</h3>
                    <p>We map your competitive landscape to separate baseline industry hygiene from defensible market whitespace &mdash; ensuring you differentiate where it directly wins enterprise clients.</p>
                    <div class="wp-method-deliverable">
                        <b>Deliverable:</b> Competitor Tracker &mdash; positioning, pricing models, feature sets, and white space.
                    </div>
                    <div>
                        <a href="{{ route('landing') }}#book" class="wp-method-btn">Read More</a>
                    </div>
                </div>

                <!-- Stage 03 -->
                <div class="wp-method-card rv">
                    <span class="wp-method-stage-pill">Stage 03</span>
                    <h3>AI, IT &amp; Autonomy Planning</h3>
                    <p>Every founder-dependent task becomes a scored line item: Impact &times; Urgency, costed per month, sequenced into a practical 90-day roadmap. You eliminate single points of failure.</p>
                    <div class="wp-method-deliverable">
                        <b>Deliverable:</b> AI &amp; IT Opportunity Log + SOP &amp; Delegation Register.
                    </div>
                    <div>
                        <a href="{{ route('landing') }}#book" class="wp-method-btn">Read More</a>
                    </div>
                </div>

                <!-- Stage 04 -->
                <div class="wp-method-card rv">
                    <span class="wp-method-stage-pill">Stage 04</span>
                    <h3>KPI Governance</h3>
                    <p>Monthly targets vs. actuals across sales pipeline, digital operations, finance, and client delivery &mdash; evaluated in under 60 minutes per week. Management by exception, not stress.</p>
                    <div class="wp-method-deliverable">
                        <b>Deliverable:</b> KPI Dashboard &mdash; automated data feeds with red-flag alerts.
                    </div>
                    <div>
                        <a href="{{ route('landing') }}#book" class="wp-method-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= 5. EXECUTIVE ROADMAP SHOWCASE (REDESIGNED WIPRO STYLE) ================= -->
    <section class="wp-roadmap-section" id="roadmap">
        <div class="wp-wrap">
            <div class="wp-sec-head rv" style="text-align:center;">
                <span class="wp-eyebrow"><span class="wp-dot"></span> The Executive Architecture Blueprint</span>
                <h2>This is what your executive roadmap looks like</h2>
                <p>
                    A visual walkthrough of the strategic blueprints, operational architectures, and validated commercial deliverables engineered for our UK &amp; global enterprise clients.
                </p>
            </div>

            <!-- Part 1: Split Strategic Hero Banner (Image 3) -->
            <div class="wp-road-split-banner rv">
                <!-- Left: Deep Neon Curves Graphic + Bold Insight -->
                <div class="wp-road-split-left">
                    <div class="wp-road-split-left-bg" style="background-image: url('https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=1200&q=80');"></div>
                    <div class="wp-road-split-left-overlay"></div>
                    <div class="wp-road-split-left-content">
                        <span class="wp-road-split-tag">Executive Diagnostic Verdict</span>
                        <h3>AI is Ready, but your Operating Model and Change Muscle are Not</h3>
                        <p>Bridging the structural gap between technology hype and sustained commercial return across people, data, and workflows.</p>
                    </div>
                </div>

                <!-- Right: Warm Boardroom Handshake & Customer Success -->
                <div class="wp-road-split-right" style="background-image: url('https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=1200&q=80');">
                    <div class="wp-road-split-right-overlay"></div>
                    <div class="wp-road-split-right-content">
                        <h3>Customer Success Stories.</h3>
                        <p>How Nexteck uses consulting-led, AI-powered strategies to help founders and executive leaders realize their commercial ambitions.</p>
                        <a href="{{ route('landing') }}#book" class="wp-road-split-btn">
                            Learn More <i class="fa-solid fa-arrow-right" style="margin-left:6px; font-size:0.85em;"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Part 2: Vibrant 8-Block Color Mosaic Grid (Image 1) -->
            <div class="wp-road-mosaic-grid rv">
                <!-- Row 1: Block 1 (Image: Hex Open Data) -->
                <div class="wp-mosaic-tile wp-mosaic-tile-media">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=800&q=80" alt="Open Data and Cloud Infrastructure" loading="lazy">
                    <span class="wp-mosaic-tile-tag">Open Data &amp; Systems</span>
                </div>

                <!-- Row 1: Block 2 (Solid Teal: Unstructured Data) -->
                <div class="wp-mosaic-tile wp-mosaic-tile-teal">
                    <div>
                        <h4>From Unstructured Data to Trusted Knowledge: The Foundation for Enterprise AI</h4>
                        <p>Unifying fragmented ERP exports, client files, and manual spreadsheets into a reliable, single source of boardroom truth.</p>
                    </div>
                    <a href="{{ route('blogs.index') }}" class="wp-mosaic-tile-link">
                        Read More <i class="fa-solid fa-play" style="font-size:0.65rem;"></i>
                    </a>
                </div>

                <!-- Row 1: Block 3 (Image: Neural Cloud Network) -->
                <div class="wp-mosaic-tile wp-mosaic-tile-media">
                    <img src="https://images.unsplash.com/photo-1507499739999-097706ad8914?auto=format&fit=crop&w=800&q=80" alt="Industry Cloud Neural Network" loading="lazy">
                    <span class="wp-mosaic-tile-tag">Cloud Infrastructure</span>
                </div>

                <!-- Row 1: Block 4 (Solid Emerald: Industry Clouds) -->
                <div class="wp-mosaic-tile wp-mosaic-tile-emerald">
                    <div>
                        <h4>Why the Next Wave of Enterprise Strategy is Industry Clouds</h4>
                        <p>Deploying composable cloud architectures tailored to specific sector compliance, security, and supply chain telemetry.</p>
                    </div>
                    <a href="{{ route('blogs.index') }}" class="wp-mosaic-tile-link">
                        Read More <i class="fa-solid fa-play" style="font-size:0.65rem;"></i>
                    </a>
                </div>

                <!-- Row 2: Block 5 (Solid Mint: Change Management) -->
                <div class="wp-mosaic-tile wp-mosaic-tile-mint">
                    <div>
                        <h4>Organizational Change Management and AI Adoption: Choosing the Right Partner</h4>
                        <p>Transforming enterprise culture with clear delegation matrices, step-by-step SOPs, and internal leadership enablement.</p>
                    </div>
                    <a href="{{ route('blogs.index') }}" class="wp-mosaic-tile-link">
                        Read More <i class="fa-solid fa-play" style="font-size:0.65rem;"></i>
                    </a>
                </div>

                <!-- Row 2: Block 6 (Image: Boardroom Collaboration) -->
                <div class="wp-mosaic-tile wp-mosaic-tile-media">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80" alt="Executive Strategy Alignment" loading="lazy">
                    <span class="wp-mosaic-tile-tag">Executive Alignment</span>
                </div>

                <!-- Row 2: Block 7 (Solid Royal Blue: Quantum-Enhanced ML) -->
                <div class="wp-mosaic-tile wp-mosaic-tile-blue">
                    <div>
                        <h4>Rethinking Fraud Detection &amp; Risk Beyond Classical Models with Machine Learning</h4>
                        <p>Implementing real-time transaction monitoring and anomaly detection to safeguard margins and reduce operational leakage.</p>
                    </div>
                    <a href="{{ route('blogs.index') }}" class="wp-mosaic-tile-link">
                        Read More <i class="fa-solid fa-play" style="font-size:0.65rem;"></i>
                    </a>
                </div>

                <!-- Row 2: Block 8 (Image: 3D Purple Wave Mesh) -->
                <div class="wp-mosaic-tile wp-mosaic-tile-media">
                    <img src="https://images.unsplash.com/photo-1634017839464-5c339ebe3cb4?auto=format&fit=crop&w=800&q=80" alt="Future-Proof Continuum Architecture" loading="lazy">
                    <span class="wp-mosaic-tile-tag">Continuous Scalability</span>
                </div>
            </div>

            <!-- Part 3: Three High-Impact Outcome Cards (Image 2) -->
            <div class="wp-road-cards-3 rv">
                <!-- Card 1: Q4 Earnings & Metrics Style -->
                <div class="wp-road-card wp-road-card-purple-stats">
                    <div class="wp-purple-stats-header">
                        <span class="wp-purple-stats-badge">Audit Performance Impact</span>
                        <div class="wp-purple-stats-title">
                            Q4 2026
                            <span>Roadmap Impact</span>
                        </div>
                    </div>
                    <div class="wp-purple-stats-list">
                        <div class="wp-purple-stat-row">
                            <span class="wp-purple-stat-label">Admin Hours Reduced</span>
                            <span class="wp-purple-stat-value"><i class="fa-solid fa-arrow-up"></i> 60% YoY</span>
                        </div>
                        <div class="wp-purple-stat-row">
                            <span class="wp-purple-stat-label">Reporting Lag Time</span>
                            <span class="wp-purple-stat-value"><i class="fa-solid fa-arrow-down"></i> 0 Days (Real-Time)</span>
                        </div>
                        <div class="wp-purple-stat-row">
                            <span class="wp-purple-stat-label">Client IP Ownership</span>
                            <span class="wp-purple-stat-value"><i class="fa-solid fa-check"></i> 100% Retained</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2: "Proof in a Scope" (Wipro Intelligence Style) -->
                <div class="wp-road-card wp-road-card-proof">
                    <div>
                        <div class="wp-proof-heading">Proof in a scope.</div>
                        <div class="wp-proof-sub">What your executive team receives within 10 business days:</div>
                        <ul class="wp-proof-items">
                            <li>End-to-end Process Bottleneck Heatmap</li>
                            <li>Costed 30-60-90 Day Execution Sprints</li>
                            <li>Impact &times; Urgency Prioritization Matrix</li>
                            <li>Vendor-Neutral Software Stack Selection</li>
                            <li>Staff Delegation SOPs &amp; Training Register</li>
                        </ul>
                    </div>
                    <div class="wp-proof-badge">
                        Nexteck Intelligence™ &bull; Proof over promise.
                    </div>
                </div>

                <!-- Card 3: Sustainable Architecture (High-Contrast Natural Resiliency) -->
                <div class="wp-road-card wp-road-card-nature" style="background-image: url('https://images.unsplash.com/photo-1448375240586-882707db888b?auto=format&fit=crop&w=800&q=80');">
                    <div class="wp-road-card-nature-overlay"></div>
                    <div class="wp-road-card-nature-content">
                        <span class="wp-nature-tag">Long-Term Resilience</span>
                        <h4>Sustainable Architecture 2026&ndash;2030: Built to Outlast Tech Hype</h4>
                        <p>We build independent, self-sufficient software architectures that your in-house team owns and manages &mdash; eliminating expensive recurring retainer lock-in.</p>
                        <a href="{{ route('landing') }}#book" class="wp-nature-link">
                            Explore Strategy Consultation <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
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

    <!-- ================= 6C. OUR STRATEGIC PARTNERS (ECOSYSTEM) ================= -->
    <section class="wp-section" style="background:#FFFFFF; border-bottom:1px solid #E5E7EB;" id="partners">
        <div class="wp-wrap">
            <div class="wp-sec-head rv">
                <span class="wp-eyebrow"><span class="wp-dot" style="background:#0072CE;"></span> Strategic Ecosystem &amp; Alliances</span>
                <h2>Our Partners</h2>
                <p>
                    Collaborating with specialized engineering firms, digital accelerators, and domain authorities across rail, industrial manufacturing, enterprise connectivity, and business intelligence to deliver end-to-end transformation.
                </p>
            </div>

            <div class="wp-partner-grid wp-partner-grid-3">
                <!-- 1. Pearlcon Engineering Card -->
                <div class="wp-partner-card rv" id="partner-pearlcon" data-spectrum="blue">
                    <div class="wp-partner-media" style="background: linear-gradient(135deg, #F0F9FF 0%, #E0F2FE 100%);">
                        <svg viewBox="0 0 180 50" width="165" height="46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="8" y="10" width="30" height="30" rx="8" fill="#0072CE"/>
                            <path d="M15 28L23 18L31 28H15Z" fill="#FFFFFF"/>
                            <circle cx="23" cy="28" r="3" fill="#38BDF8"/>
                            <text x="46" y="27" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-size="16" font-weight="800" fill="#001B3A" letter-spacing="-0.03em">PEARLCON</text>
                            <text x="46" y="38" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-size="9" font-weight="700" fill="#0072CE" letter-spacing="0.1em">ENGINEERING</text>
                        </svg>
                    </div>
                    <div class="wp-partner-info">
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:0.5rem; flex-wrap:wrap; gap:6px;">
                            <div class="wp-partner-title" style="margin:0;">Pearlcon Engineering</div>
                            <span class="wp-badge wp-badge-blue" style="font-size:0.7rem; padding:0.18rem 0.6rem;">Rail &amp; OEM</span>
                        </div>
                        <p class="wp-partner-desc">
                            Direct strategic rail engineering partner (<a href="https://pearlconrail.co.uk" target="_blank" rel="noopener" style="color:#0072CE; font-weight:700;">pearlconrail.co.uk</a>). Providing verified European &amp; Asian supply chain bridges for UK rolling stock operators, bogies, track materials, and EN 45545 fire-certified precision engineering.
                        </p>
                        <div style="margin-top:auto; padding-top:1rem; border-top:1px solid #F1F5F9; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:8px;">
                            <span style="font-size:0.76rem; color:#64748B; font-weight:600;"><i class="fa-solid fa-train" style="color:#0072CE; margin-right:4px;"></i> Rail &amp; Infrastructure</span>
                            <a href="https://pearlconrail.co.uk" target="_blank" rel="noopener" style="font-size:0.82rem; font-weight:700; color:#0072CE; display:inline-flex; align-items:center; gap:4px;">Visit Website <i class="fa-solid fa-arrow-up-right-from-square" style="font-size:0.72rem;"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 2. HYST Card -->
                <div class="wp-partner-card rv" id="partner-hyst" data-spectrum="teal">
                    <div class="wp-partner-media" style="background: linear-gradient(135deg, #F0FDFA 0%, #CCFBF1 100%);">
                        <svg viewBox="0 0 160 50" width="145" height="46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="12" y="10" width="30" height="30" rx="8" fill="#00A3AD"/>
                            <path d="M20 18V32M20 25H34M34 18V32" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round"/>
                            <text x="50" y="32" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-size="20" font-weight="900" fill="#001B3A" letter-spacing="-0.02em">HYST</text>
                        </svg>
                    </div>
                    <div class="wp-partner-info">
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:0.5rem; flex-wrap:wrap; gap:6px;">
                            <div class="wp-partner-title" style="margin:0;">HYST</div>
                            <span class="wp-badge" style="font-size:0.7rem; padding:0.18rem 0.6rem; background:#CCFBF1; color:#0F766E;">Heavy Industry</span>
                        </div>
                        <p class="wp-partner-desc">
                            High-Yield Systems Technology for heavy manufacturing, smart plant infrastructure, and predictive machinery telemetry. Integrating SCADA controls and industrial automation for high-volume, defect-free production lines.
                        </p>
                        <div style="margin-top:auto; padding-top:1rem; border-top:1px solid #F1F5F9; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:8px;">
                            <span style="font-size:0.76rem; color:#64748B; font-weight:600;"><i class="fa-solid fa-industry" style="color:#00A3AD; margin-right:4px;"></i> Industrial Automation</span>
                            <a href="{{ route('landing') }}#book" style="font-size:0.82rem; font-weight:700; color:#00A3AD; display:inline-flex; align-items:center; gap:4px;">Explore Solutions <i class="fa-solid fa-arrow-right" style="font-size:0.72rem;"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 3. BizConn Card -->
                <div class="wp-partner-card rv" id="partner-bizconn" data-spectrum="purple">
                    <div class="wp-partner-media" style="background: linear-gradient(135deg, #FAF5FF 0%, #F3E8FF 100%);">
                        <svg viewBox="0 0 170 50" width="150" height="46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="10" y="10" width="30" height="30" rx="8" fill="#72246C"/>
                            <circle cx="20" cy="20" r="3.5" fill="#FFFFFF"/>
                            <circle cx="30" cy="30" r="3.5" fill="#FFFFFF"/>
                            <path d="M20 20L30 30" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round"/>
                            <text x="48" y="32" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-size="20" font-weight="800" fill="#001B3A" letter-spacing="-0.03em">Biz<tspan fill="#72246C">Conn</tspan></text>
                        </svg>
                    </div>
                    <div class="wp-partner-info">
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:0.5rem; flex-wrap:wrap; gap:6px;">
                            <div class="wp-partner-title" style="margin:0;">BizConn</div>
                            <span class="wp-badge" style="font-size:0.7rem; padding:0.18rem 0.6rem; background:#F3E8FF; color:#6B21A8;">B2B Integration</span>
                        </div>
                        <p class="wp-partner-desc">
                            Next-generation enterprise business connectivity, B2B gateway orchestration, and seamless EDI pipelines. Bridges legacy ERPs with modern cloud networks to eliminate data fragmentation across supply chains.
                        </p>
                        <div style="margin-top:auto; padding-top:1rem; border-top:1px solid #F1F5F9; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:8px;">
                            <span style="font-size:0.76rem; color:#64748B; font-weight:600;"><i class="fa-solid fa-network-wired" style="color:#72246C; margin-right:4px;"></i> Enterprise Gateway</span>
                            <a href="{{ route('landing') }}#book" style="font-size:0.82rem; font-weight:700; color:#72246C; display:inline-flex; align-items:center; gap:4px;">Explore Solutions <i class="fa-solid fa-arrow-right" style="font-size:0.72rem;"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 4. BRNDS Card -->
                <div class="wp-partner-card rv" id="partner-brnds" data-spectrum="pink">
                    <div class="wp-partner-media" style="background: linear-gradient(135deg, #FDF2F8 0%, #FCE7F3 100%);">
                        <svg viewBox="0 0 170 50" width="150" height="46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="10" y="10" width="30" height="30" rx="8" fill="#E4007C"/>
                            <path d="M17 17H26C28.5 17 30 18.5 30 20.5C30 22 29 23 27.5 23.5C29.5 24 30.5 25.5 30.5 27.5C30.5 29.8 28.5 31.5 26 31.5H17V17ZM20.5 22.5H25C26 22.5 26.8 21.8 26.8 20.8C26.8 19.8 26 19.2 25 19.2H20.5V22.5ZM20.5 29.2H25.5C26.5 29.2 27.2 28.5 27.2 27.5C27.2 26.5 26.5 25.8 25.5 25.8H20.5V29.2Z" fill="#FFFFFF"/>
                            <text x="48" y="32" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-size="19" font-weight="900" fill="#001B3A" letter-spacing="0.04em">BRNDS</text>
                        </svg>
                    </div>
                    <div class="wp-partner-info">
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:0.5rem; flex-wrap:wrap; gap:6px;">
                            <div class="wp-partner-title" style="margin:0;">BRNDS</div>
                            <span class="wp-badge" style="font-size:0.7rem; padding:0.18rem 0.6rem; background:#FCE7F3; color:#9D174D;">Brand &amp; Commerce</span>
                        </div>
                        <p class="wp-partner-desc">
                            Digital brand acceleration, omnichannel design systems, and conversion-focused customer experiences. Aligning brand positioning with enterprise software frontends to elevate customer acquisition and retention.
                        </p>
                        <div style="margin-top:auto; padding-top:1rem; border-top:1px solid #F1F5F9; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:8px;">
                            <span style="font-size:0.76rem; color:#64748B; font-weight:600;"><i class="fa-solid fa-palette" style="color:#E4007C; margin-right:4px;"></i> Brand Experience</span>
                            <a href="{{ route('landing') }}#book" style="font-size:0.82rem; font-weight:700; color:#E4007C; display:inline-flex; align-items:center; gap:4px;">Explore Solutions <i class="fa-solid fa-arrow-right" style="font-size:0.72rem;"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 5. BI Manager Card -->
                <div class="wp-partner-card rv" id="partner-bi-manager" data-spectrum="yellow">
                    <div class="wp-partner-media" style="background: linear-gradient(135deg, #FEFCE8 0%, #FEF3C7 100%);">
                        <svg viewBox="0 0 180 50" width="160" height="46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="8" y="10" width="30" height="30" rx="8" fill="#FFB81C"/>
                            <rect x="14" y="24" width="4" height="10" rx="1" fill="#FFFFFF"/>
                            <rect x="21" y="18" width="4" height="16" rx="1" fill="#FFFFFF"/>
                            <rect x="28" y="14" width="4" height="20" rx="1" fill="#FFFFFF"/>
                            <text x="46" y="28" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-size="16" font-weight="900" fill="#001B3A" letter-spacing="-0.02em">BI MANAGER</text>
                            <text x="46" y="38" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-size="8.5" font-weight="700" fill="#B45309" letter-spacing="0.08em">DATA &amp; GOVERNANCE</text>
                        </svg>
                    </div>
                    <div class="wp-partner-info">
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:0.5rem; flex-wrap:wrap; gap:6px;">
                            <div class="wp-partner-title" style="margin:0;">BI Manager</div>
                            <span class="wp-badge" style="font-size:0.7rem; padding:0.18rem 0.6rem; background:#FEF3C7; color:#92400E;">Business Intelligence</span>
                        </div>
                        <p class="wp-partner-desc">
                            Enterprise Business Intelligence platform providing real-time executive cockpits, automated KPI telemetry, and predictive revenue modeling. Turns disparate operational logs into actionable boardroom governance.
                        </p>
                        <div style="margin-top:auto; padding-top:1rem; border-top:1px solid #F1F5F9; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:8px;">
                            <span style="font-size:0.76rem; color:#64748B; font-weight:600;"><i class="fa-solid fa-chart-line" style="color:#D97706; margin-right:4px;"></i> Analytics Cockpit</span>
                            <a href="{{ route('calculator.index') }}" style="font-size:0.82rem; font-weight:700; color:#D97706; display:inline-flex; align-items:center; gap:4px;">Calculate ROI <i class="fa-solid fa-arrow-right" style="font-size:0.72rem;"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 6. Boltix Card -->
                <div class="wp-partner-card rv" id="partner-boltix" data-spectrum="blue">
                    <div class="wp-partner-media" style="background: linear-gradient(135deg, #EEF2FF 0%, #E0E7FF 100%);">
                        <svg viewBox="0 0 170 50" width="150" height="46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="10" y="10" width="30" height="30" rx="8" fill="#4338CA"/>
                            <path d="M26 14L16 26H24L22 36L32 24H24L26 14Z" fill="#38BDF8"/>
                            <text x="48" y="32" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-size="20" font-weight="900" fill="#001B3A" letter-spacing="-0.03em">BOLTIX</text>
                        </svg>
                    </div>
                    <div class="wp-partner-info">
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:0.5rem; flex-wrap:wrap; gap:6px;">
                            <div class="wp-partner-title" style="margin:0;">Boltix</div>
                            <span class="wp-badge" style="font-size:0.7rem; padding:0.18rem 0.6rem; background:#E0E7FF; color:#3730A3;">Cloud &amp; DevOps</span>
                        </div>
                        <p class="wp-partner-desc">
                            High-velocity software engineering accelerator delivering automated CI/CD pipelines, containerized microservices, and serverless workflows. Speeds up software delivery cycles while hardening cloud resilience.
                        </p>
                        <div style="margin-top:auto; padding-top:1rem; border-top:1px solid #F1F5F9; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:8px;">
                            <span style="font-size:0.76rem; color:#64748B; font-weight:600;"><i class="fa-solid fa-bolt" style="color:#4338CA; margin-right:4px;"></i> Velocity Accelerator</span>
                            <a href="{{ route('landing') }}#book" style="font-size:0.82rem; font-weight:700; color:#4338CA; display:inline-flex; align-items:center; gap:4px;">Explore Solutions <i class="fa-solid fa-arrow-right" style="font-size:0.72rem;"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 7. Yodoc Card -->
                <div class="wp-partner-card rv" id="partner-yodoc" data-spectrum="green">
                    <div class="wp-partner-media" style="background: linear-gradient(135deg, #F0FDF4 0%, #DCFCE7 100%);">
                        <svg viewBox="0 0 170 50" width="150" height="46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="10" y="10" width="30" height="30" rx="8" fill="#15803D"/>
                            <path d="M18 16H28L32 20V34H18V16Z" fill="#FFFFFF"/>
                            <path d="M22 25L25 28L30 22" stroke="#15803D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="48" y="32" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-size="20" font-weight="900" fill="#001B3A" letter-spacing="-0.03em">Yodoc</text>
                        </svg>
                    </div>
                    <div class="wp-partner-info">
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:0.5rem; flex-wrap:wrap; gap:6px;">
                            <div class="wp-partner-title" style="margin:0;">Yodoc</div>
                            <span class="wp-badge" style="font-size:0.7rem; padding:0.18rem 0.6rem; background:#DCFCE7; color:#166534;">Smart Docs</span>
                        </div>
                        <p class="wp-partner-desc">
                            Intelligent enterprise documentation and compliance platform. Automates standard operating procedure (SOP) digitization, verifiable audit trails, and strict regulatory documentation workflows for regulated industries.
                        </p>
                        <div style="margin-top:auto; padding-top:1rem; border-top:1px solid #F1F5F9; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:8px;">
                            <span style="font-size:0.76rem; color:#64748B; font-weight:600;"><i class="fa-solid fa-file-shield" style="color:#15803D; margin-right:4px;"></i> Compliance Docs</span>
                            <a href="{{ route('assessment.index') }}" style="font-size:0.82rem; font-weight:700; color:#15803D; display:inline-flex; align-items:center; gap:4px;">Audit Docs <i class="fa-solid fa-arrow-right" style="font-size:0.72rem;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= 6C. ENTERPRISE TRANSFORMATION SPOTLIGHT BANNER (WIPRO STYLE) ================= -->
    <section class="wp-spotlight-section" aria-label="Enterprise Transformation Spotlight">
        <div class="wp-spotlight-bg" style="background-image: url('https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=2000&q=80');"></div>
        <div class="wp-spotlight-overlay"></div>
        <div class="wp-wrap" style="position:relative; z-index:3;">
            <div class="wp-spotlight-content rv">
                <span class="wp-spotlight-tag">
                    <span class="wp-spotlight-dot"></span> Enterprise Transformation Case Study
                </span>
                <h2>Build AI-Ready Ways of Working Across the Enterprise</h2>
                <p>
                    Nexteck partners with enterprise leadership to embed AI into everyday work, strengthening leadership alignment, workforce capability, and long-term enterprise readiness beyond tools alone.
                </p>
                <div class="wp-spotlight-actions">
                    <a href="{{ route('landing') }}#book" class="wp-spotlight-btn">
                        Read More <i class="fa-solid fa-arrow-right" style="margin-left:6px; font-size:0.85em;"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= 6D. PERSPECTIVES, RESEARCH & REAL-WORLD IMPACT (WIPRO CHECKERBOARD) ================= -->
    <section class="wp-checkerboard-section" id="insights">
        <!-- Section Header -->
        <div class="wp-wrap" style="padding-top: 5.5rem; padding-bottom: 2.75rem;">
            <div class="wp-sec-head rv" style="margin-bottom: 0;">
                <span class="wp-eyebrow"><span class="wp-dot"></span> Strategic Research &amp; Field Intelligence</span>
                <h2>Perspectives, Research &amp; Real-World Impact</h2>
                <p>
                    Executive briefings, supply chain impact assessments, and empirical sector playbooks crafted by Nexteck’s enterprise architecture practice.
                </p>
            </div>
        </div>

        <!-- Full-Width Alternating 2x2 Checkerboard Grid -->
        <div class="wp-mosaic-container">
            <!-- Row 1: Item 1 (Text Left, Image Right) - From Image 2 -->
            <div class="wp-mosaic-row">
                <div class="wp-mosaic-cell wp-mosaic-text rv">
                    <span class="wp-mosaic-pill">Executive Briefing</span>
                    <h3 class="wp-mosaic-title">AI is ready, but your operating model and change muscle are not</h3>
                    <p class="wp-mosaic-desc">Nexteck-Executive Briefing: 100+ CXOs say AI is scaling rapidly across departments, but realised business value and operational adoption are lagging.</p>
                    <a href="{{ route('blogs.index') }}" class="wp-mosaic-link">
                        Read Full Briefing <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <div class="wp-mosaic-cell wp-mosaic-media rv">
                    <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=1200&q=80" alt="Enterprise AI Operating Model Data Stream" loading="lazy">
                    <div class="wp-mosaic-media-badge">
                        <span class="wp-mosaic-brand">NEXTECK<b>•AI</b></span>
                        <span class="wp-mosaic-sublabel">C-Suite Intelligence</span>
                    </div>
                </div>
            </div>

            <!-- Row 2: Item 2 (Image Left, Text Right) - From Image 2 & 4 -->
            <div class="wp-mosaic-row wp-mosaic-reverse">
                <div class="wp-mosaic-cell wp-mosaic-media rv">
                    <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=1200&q=80" alt="Global Trade and Container Logistics Vessel" loading="lazy">
                    <div class="wp-mosaic-media-badge">
                        <span class="wp-mosaic-sublabel"><i class="fa-solid fa-ship" style="margin-right:5px;"></i> Maritime &amp; Global Trade</span>
                    </div>
                </div>
                <div class="wp-mosaic-cell wp-mosaic-text rv">
                    <span class="wp-mosaic-pill">Global Supply Chains</span>
                    <h3 class="wp-mosaic-title">Global trade needs AI and leaders willing to invest despite uncertainty</h3>
                    <p class="wp-mosaic-desc">The global business landscape is being reshaped in real time. Sweeping tariffs and compliance mandates prompt international enterprises to prepare for disruption while major exporters deploy autonomous visibility.</p>
                    <a href="{{ route('industries.index') }}" class="wp-mosaic-link">
                        Explore Supply Chain Solutions <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Row 3: Item 3 (Text Left, Image Right) - From Image 3 -->
            <div class="wp-mosaic-row">
                <div class="wp-mosaic-cell wp-mosaic-text rv">
                    <span class="wp-mosaic-pill">Logistics &amp; Fulfillment</span>
                    <h3 class="wp-mosaic-title">From Complexity to Clarity: Optimizing Supply Chains with GenAI</h3>
                    <p class="wp-mosaic-desc">How GenAI creates efficient supply chains by streamlining inventory management, forecasting demand, identifying bottlenecks, and optimizing logistics to improve efficiency, reduce costs, and satisfy customers.</p>
                    <a href="{{ route('blogs.index') }}" class="wp-mosaic-link">
                        Read Case Analysis <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <div class="wp-mosaic-cell wp-mosaic-media rv">
                    <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1200&q=80" alt="High-Bay Automated Logistics Warehouse" loading="lazy">
                    <div class="wp-mosaic-media-badge">
                        <span class="wp-mosaic-sublabel"><i class="fa-solid fa-boxes-stacked" style="margin-right:5px;"></i> Autonomous Warehousing</span>
                    </div>
                </div>
            </div>

            <!-- Row 4: Item 4 (Image Left, Text Right) - From Image 3 -->
            <div class="wp-mosaic-row wp-mosaic-reverse">
                <div class="wp-mosaic-cell wp-mosaic-media rv">
                    <img src="https://images.unsplash.com/photo-1534452203293-494d7ddbf7e0?auto=format&fit=crop&w=1200&q=80" alt="Consumer Goods and Retail Technology Intelligence" loading="lazy">
                    <div class="wp-mosaic-media-badge">
                        <span class="wp-mosaic-sublabel"><i class="fa-solid fa-store" style="margin-right:5px;"></i> Omnichannel &amp; Retail</span>
                    </div>
                </div>
                <div class="wp-mosaic-cell wp-mosaic-text rv">
                    <span class="wp-mosaic-pill">Consumer Goods Intelligence</span>
                    <h3 class="wp-mosaic-title">The Next Big Thing: Supply Chain Intelligence</h3>
                    <p class="wp-mosaic-desc">A Consumer Goods &amp; Multi-site Distribution report in collaboration with Nexteck Advisory. Delivering real-time inventory visibility across distributed physical networks without software fragmentation.</p>
                    <a href="{{ route('industries.index') }}" class="wp-mosaic-link">
                        Explore Retail Case Study <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Row 5: Item 5 (Text Left, Image Right) - From Image 5 -->
            <div class="wp-mosaic-row">
                <div class="wp-mosaic-cell wp-mosaic-text rv">
                    <span class="wp-mosaic-pill">Change Architecture</span>
                    <h3 class="wp-mosaic-title">Scaling Generative AI: A Change Management Challenge, Not Just a Technology One</h3>
                    <p class="wp-mosaic-desc">AI’s potential is unlocked when centered on people — requiring cultural readiness, thoughtful integration, and strategic change, not just technical deployment.</p>
                    <a href="{{ route('landing') }}#book" class="wp-mosaic-link">
                        Read Whitepaper <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <div class="wp-mosaic-cell wp-mosaic-media rv">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80" alt="Enterprise Leadership and Change Management Workshop" loading="lazy">
                    <div class="wp-mosaic-media-badge">
                        <span class="wp-mosaic-sublabel"><i class="fa-solid fa-users-gear" style="margin-right:5px;"></i> People &amp; Culture</span>
                    </div>
                </div>
            </div>

            <!-- Row 6: Item 6 (Image Left, Text Right) - From Image 5 -->
            <div class="wp-mosaic-row wp-mosaic-reverse">
                <div class="wp-mosaic-cell wp-mosaic-media rv">
                    <img src="https://images.unsplash.com/photo-1520437358207-323b43b50729?auto=format&fit=crop&w=1200&q=80" alt="UK and International Transport Hub Operations" loading="lazy">
                    <div class="wp-mosaic-media-badge">
                        <span class="wp-mosaic-sublabel"><i class="fa-solid fa-plane-departure" style="margin-right:5px;"></i> Infrastructure &amp; Rail</span>
                    </div>
                </div>
                <div class="wp-mosaic-cell wp-mosaic-text rv">
                    <span class="wp-mosaic-pill">Transportation &amp; Rail</span>
                    <h3 class="wp-mosaic-title">Travel &amp; Transportation: UK &amp; International Hubs Data and AI Strategy</h3>
                    <p class="wp-mosaic-desc">Consolidating safety and security data, passenger flow telemetry, and tracking sustainability metrics for high-efficiency enterprise transit networks.</p>
                    <a href="{{ route('industries.show', 'rail-engineering') }}" class="wp-mosaic-link">
                        Explore Transportation Case Study <i class="fa-solid fa-arrow-right"></i>
                    </a>
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

            <div class="wp-trust-grid">
                <!-- Trust 1 (Processor / Microchip outline icon from Image 1) -->
                <div class="wp-trust-card rv">
                    <div class="wp-trust-top-icon">
                        <svg width="42" height="42" viewBox="0 0 48 48" fill="none" stroke="#111827" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="12" y="12" width="24" height="24" rx="4"></rect>
                            <rect x="19" y="19" width="10" height="10" rx="1.5"></rect>
                            <line x1="18" y1="6" x2="18" y2="12"></line>
                            <line x1="24" y1="6" x2="24" y2="12"></line>
                            <line x1="30" y1="6" x2="30" y2="12"></line>
                            <line x1="18" y1="36" x2="18" y2="42"></line>
                            <line x1="24" y1="36" x2="24" y2="42"></line>
                            <line x1="30" y1="36" x2="30" y2="42"></line>
                            <line x1="6" y1="18" x2="12" y2="18"></line>
                            <line x1="6" y1="24" x2="12" y2="24"></line>
                            <line x1="6" y1="30" x2="12" y2="30"></line>
                            <line x1="36" y1="18" x2="42" y2="18"></line>
                            <line x1="36" y1="24" x2="42" y2="24"></line>
                            <line x1="36" y1="30" x2="42" y2="30"></line>
                        </svg>
                    </div>
                    <h3>Strategy and Business Consulting: 100% Client IP Ownership</h3>
                    <p>The entire roadmap, custom code, diagrams, and dashboards remain exclusively your property. Zero licensing hostage-taking, zero proprietary lock-in.</p>
                </div>

                <!-- Trust 2 (Padlock outline icon from Image 2) -->
                <div class="wp-trust-card rv">
                    <div class="wp-trust-top-icon">
                        <svg width="40" height="42" viewBox="0 0 48 48" fill="none" stroke="#111827" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 20V14C16 9.58 19.58 6 24 6C28.42 6 32 9.58 32 14V20"></path>
                            <rect x="12" y="20" width="24" height="22" rx="4"></rect>
                        </svg>
                    </div>
                    <h3>Reimagining Enterprise Applications: Bilateral NDA Upfront</h3>
                    <p>Everything discussed during diagnostic sessions is strictly confidential. We execute a comprehensive bilateral NDA before any operational details or credentials are shared.</p>
                </div>

                <!-- Trust 3 (Cloud with Upward Arrow outline icon from Image 3) -->
                <div class="wp-trust-card rv">
                    <div class="wp-trust-top-icon">
                        <svg width="44" height="42" viewBox="0 0 48 48" fill="none" stroke="#111827" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M13 36H35C39.42 36 43 32.42 43 28C43 23.8 39.8 20.35 35.65 20.05C34.45 13.1 28.5 8 21.5 8C13.5 8 7 14.5 7 22.5C7 23.4 7.1 24.3 7.3 25.15C4.2 26.85 2.5 30.15 3 33.7C3.5 37.25 6.5 40 10.1 40H13"></path>
                            <line x1="24" y1="34" x2="24" y2="19"></line>
                            <polyline points="18,25 24,19 30,25"></polyline>
                        </svg>
                    </div>
                    <h3>Designing Experiences: Costed Before You Commit</h3>
                    <p>Connect people, processes, and technology to create personalized, scalable systems. Every recommendation carries estimated hours and fees so you approve spend upfront.</p>
                </div>

                <!-- Trust 4 (Scale / Balance outline icon) -->
                <div class="wp-trust-card rv">
                    <div class="wp-trust-top-icon">
                        <svg width="42" height="42" viewBox="0 0 48 48" fill="none" stroke="#111827" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="24" y1="6" x2="24" y2="42"></line>
                            <line x1="8" y1="13" x2="40" y2="13"></line>
                            <path d="M8 13L4 26C4 28.5 7 30 10 30C13 30 16 28.5 16 26L12 13"></path>
                            <path d="M36 13L32 26C32 28.5 35 30 38 30C41 30 44 28.5 44 26L40 13"></path>
                            <line x1="16" y1="42" x2="32" y2="42"></line>
                        </svg>
                    </div>
                    <h3>Enterprise Rigour, Scaled For SME Agility</h3>
                    <p>Boardroom-grade frameworks scaled for agile, founder-led businesses &mdash; structured in bite-sized sprints so you never over-invest ahead of actual ROI.</p>
                </div>

                <!-- Trust 5 (Team & Organization Network outline icon) -->
                <div class="wp-trust-card rv">
                    <div class="wp-trust-top-icon">
                        <svg width="42" height="42" viewBox="0 0 48 48" fill="none" stroke="#111827" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="24" cy="11" r="5"></circle>
                            <path d="M14 27C14 22.5 18.5 20.5 24 20.5C29.5 20.5 34 22.5 34 27"></path>
                            <circle cx="11" cy="22" r="3.5"></circle>
                            <path d="M4 35C4 32 7 30.5 11 30.5C13 30.5 14.8 31 16 32"></path>
                            <circle cx="37" cy="22" r="3.5"></circle>
                            <path d="M32 32C33.2 31 35 30.5 37 30.5C41 30.5 44 32 44 35"></path>
                        </svg>
                    </div>
                    <h3>Team Enablement: Built For Your Internal Team</h3>
                    <p>Step-by-step Standard Operating Procedures (SOPs), delegation matrixes, and staff training ensure the new architecture runs smoothly without permanent external reliance.</p>
                </div>

                <!-- Trust 6 (Precision Clock & Dashboard Governance outline icon) -->
                <div class="wp-trust-card rv">
                    <div class="wp-trust-top-icon">
                        <svg width="42" height="42" viewBox="0 0 48 48" fill="none" stroke="#111827" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="24" cy="24" r="17"></circle>
                            <polyline points="24,13 24,24 32,24"></polyline>
                            <line x1="24" y1="3" x2="24" y2="7"></line>
                            <line x1="41" y1="24" x2="45" y2="24"></line>
                        </svg>
                    </div>
                    <h3>Governance By Exception: 60-Minute Weekly Reviews</h3>
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
        }, { threshold: 0.2 });

        document.querySelectorAll("[data-count]").forEach(el => counterObserver.observe(el));

        // ---- Refined Smooth Rotating Text Animation ----
        (function() {
            const el = document.getElementById("heroRotator");
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
            const intervalTime = 3200; // Display each phrase cleanly for 3.2s

            function rotatePhrase() {
                el.classList.add("fade-out");
                setTimeout(() => {
                    phraseIndex = (phraseIndex + 1) % phrases.length;
                    el.textContent = phrases[phraseIndex];
                    el.classList.remove("fade-out");
                    el.classList.add("prepare-in");
                    void el.offsetWidth; // Force DOM reflow
                    requestAnimationFrame(() => {
                        el.classList.remove("prepare-in");
                    });
                }, 450);
            }

            setInterval(rotatePhrase, intervalTime);
        })();

        // ---- Opportunity Matrix Interactive Tabs ----
        (function() {
            const tabs = document.querySelectorAll(".wp-matrix-tab-btn");
            const rows = document.querySelectorAll(".wp-matrix-table tbody tr");
            if (!tabs.length || !rows.length) return;

            tabs.forEach(tab => {
                tab.addEventListener("click", function() {
                    tabs.forEach(t => t.classList.remove("active"));
                    this.classList.add("active");
                    const filter = this.dataset.filter;

                    rows.forEach(row => {
                        if (filter === "all" || row.dataset.sprint === filter) {
                            row.style.display = "";
                        } else {
                            row.style.display = "none";
                        }
                    });
                });
            });
        })();
    </script>
</body>

</html>
