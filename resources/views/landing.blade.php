<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Software &amp; AI Strategy Call London | Nexteck Solutions</title>
    <meta name="description" content="Book a free 45-min Software Architecture &amp; AI Strategy Call with Nexteck London. Get an objective, costed 90-day custom software &amp; IT roadmap for your business.">
    <meta name="keywords" content="Software Development Company London, Custom Software Solutions London, Book IT Strategy Call UK, AI Audit London, Nexteck">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="{{ url('/landing') }}">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Nexteck">
    <meta property="og:title" content="Book Software &amp; AI Strategy Call London | Nexteck Solutions">
    <meta property="og:description" content="Book a free 45-min Software Architecture &amp; AI Strategy Call with Nexteck London. Get a costed 90-day custom software &amp; IT roadmap for your business.">
    <meta property="og:url" content="{{ url('/landing') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Book Software &amp; AI Strategy Call London | Nexteck Solutions">
    <meta name="twitter:description" content="Book a free 45-min Software Architecture &amp; AI Strategy Call with Nexteck London. Get a costed 90-day custom software &amp; IT roadmap for your business.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/wipro-theme.css') }}">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "Nexteck — Software Development Company London",
      "url": "{{ url('/landing') }}",
      "description": "End-to-end business, bespoke software architecture, IT strategy and AI readiness audits for SMEs in London & UK.",
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
      "areaServed": ["London", "United Kingdom"]
    }
    </script>

    <style>
        /* Landing Page Enterprise Grand Hero with Video Background */
        .lp-hero {
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
            background-image: url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=2000&q=80');
            animation-delay: 0s;
        }
        .wp-hero-bg-slide:nth-child(2) {
            background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=2000&q=80');
            animation-delay: 6s;
        }
        .wp-hero-bg-slide:nth-child(3) {
            background-image: url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=2000&q=80');
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

        .lp-hero-content-wrap {
            position: relative;
            z-index: 4;
            width: 100%;
            margin: auto 0;
            padding: 1.5rem;
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

        .lp-hero-center {
            position: relative;
            z-index: 2;
            max-width: 880px;
            margin: 0 auto;
            text-align: center;
            width: 100%;
        }

        .lp-hero-center::after {
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

        /* Staged Entrance Animations */
        @keyframes lpEntrance {
            0% {
                opacity: 0;
                transform: translateY(18px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .lp-hero .wp-hero-badge {
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
            animation: lpEntrance 0.75s cubic-bezier(0.16, 1, 0.3, 1) 0.1s both;
        }
        .lp-hero .wp-hero-badge .spectrum-disc {
            display: flex;
            align-items: center;
            gap: 3px;
        }
        .lp-hero .wp-hero-badge .spectrum-disc span {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            display: inline-block;
        }

        .lp-hero-center h1 {
            color: #FFFFFF !important;
            font-size: clamp(1.85rem, 3.2vw, 2.75rem);
            font-weight: 600;
            line-height: 1.32;
            letter-spacing: -0.022em;
            margin: 0 auto clamp(1rem, 2vh, 1.4rem);
            max-width: 860px;
            animation: lpEntrance 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.22s both;
            text-shadow: 0 2px 20px rgba(0, 0, 0, 0.75), 0 1px 4px rgba(0, 0, 0, 0.9);
        }

        .lp-hero-center h1 em {
            font-style: normal;
            font-weight: 700;
            background: linear-gradient(120deg, #38BDF8 0%, #818CF8 50%, #F472B6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
            filter: drop-shadow(0 2px 12px rgba(0, 0, 0, 0.95));
        }

        .lp-hero-center p.lead {
            font-size: clamp(0.94rem, 1.1vw, 1.05rem);
            color: #F1F5F9;
            max-width: 680px;
            margin: 0 auto clamp(1.5rem, 3vh, 2.25rem);
            line-height: 1.72;
            font-weight: 400;
            letter-spacing: -0.005em;
            animation: lpEntrance 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.36s both;
            text-shadow: 0 1px 12px rgba(0, 0, 0, 0.85);
        }

        .lp-hero-actions {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1.15rem;
            margin-bottom: clamp(1.75rem, 3.5vh, 2.75rem);
            animation: lpEntrance 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.5s both;
        }

        .lp-hero-trust-bar {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0.75rem;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            padding-top: clamp(1.35rem, 2.6vh, 1.85rem);
            max-width: 920px;
            margin: 0 auto;
            text-align: left;
            animation: lpEntrance 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.65s both;
        }
        .trust-item {
            display: flex;
            align-items: center;
            gap: 0.55rem;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: var(--wp-radius-pill);
            padding: 0.45rem 0.95rem;
            backdrop-filter: blur(10px);
            font-size: 0.8rem;
            color: #94A3B8;
            line-height: 1.35;
            transition: all 0.25s ease;
        }
        .trust-item:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(56, 189, 248, 0.3);
            color: #E2E8F0;
        }
        .trust-item i {
            font-size: 0.82rem;
            color: #38BDF8;
            flex-shrink: 0;
        }
        .trust-item b {
            color: #F8FAFC;
            font-weight: 600;
        }
        @media (max-width: 900px) {
            .lp-hero-trust-bar {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 560px) {
            .lp-hero-trust-bar {
                grid-template-columns: 1fr;
            }
        }

        /* ================= WIPRO-STYLE CONSULTATION SECTION ================= */
        .wp-wipro-contact-sec {
            background: #F8FAFC;
            padding: 5.5rem 0 6.5rem;
            position: relative;
            border-top: 1px solid var(--wp-border);
            border-bottom: 1px solid var(--wp-border);
        }
        .wp-wipro-form-container {
            max-width: 780px;
            margin: 0 auto;
            background: #FFFFFF;
            border: 1px solid var(--wp-border);
            border-radius: 20px;
            padding: clamp(2rem, 5vw, 3.75rem);
            box-shadow: 0 25px 60px -15px rgba(0, 27, 58, 0.08), 0 0 0 1px rgba(0, 82, 204, 0.04);
        }
        .wp-wipro-form-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }
        .wp-wipro-form-header h2 {
            font-size: clamp(1.85rem, 3.2vw, 2.5rem);
            color: var(--wp-navy-900);
            margin-bottom: 0.75rem;
            font-weight: 800;
            letter-spacing: -0.025em;
        }
        .wp-wipro-form-header p {
            font-size: 1.05rem;
            color: var(--wp-text-muted);
            max-width: 620px;
            margin: 0 auto 1.25rem;
            line-height: 1.6;
        }
        .wipro-cd-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: #EFF6FF;
            border: 1px solid #BFDBFE;
            color: #1E40AF;
            font-size: 0.85rem;
            padding: 0.4rem 1.15rem;
            border-radius: 9999px;
            font-weight: 600;
        }
        .wipro-cd-pill b {
            color: #382356;
            font-weight: 800;
        }
        .wp-wipro-form {
            display: flex;
            flex-direction: column;
            gap: 1.35rem;
        }
        .wp-wipro-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.35rem;
        }
        @media (max-width: 640px) {
            .wp-wipro-grid-2 {
                grid-template-columns: 1fr;
            }
        }
        .wp-wipro-field {
            display: flex;
            flex-direction: column;
            gap: 0.45rem;
        }
        .wp-wipro-field label {
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--wp-navy-900);
            letter-spacing: 0.01em;
        }
        .wp-wipro-input,
        .wp-wipro-select,
        .wp-wipro-textarea {
            background: #FFFFFF;
            border: 1px solid #CBD5E1;
            border-radius: 10px;
            padding: 0.85rem 1.15rem;
            font-size: 0.96rem;
            color: var(--wp-navy-900);
            font-family: inherit;
            transition: all 0.2s ease;
            box-sizing: border-box;
            width: 100%;
        }
        .wp-wipro-input:focus,
        .wp-wipro-select:focus,
        .wp-wipro-textarea:focus {
            outline: none;
            border-color: #382356;
            box-shadow: 0 0 0 4px rgba(56, 35, 86, 0.12);
        }
        .wp-wipro-textarea {
            resize: vertical;
            min-height: 125px;
            line-height: 1.55;
        }
        .wp-wipro-consents {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            padding: 0.75rem 0;
        }
        .wp-wipro-check-label {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            font-size: 0.85rem;
            color: var(--wp-text-body);
            cursor: pointer;
            line-height: 1.5;
        }
        .wp-wipro-checkbox {
            width: 18px;
            height: 18px;
            margin-top: 2px;
            accent-color: #001B3A;
            cursor: pointer;
            flex-shrink: 0;
        }
        .wp-wipro-submit-wrap {
            text-align: center;
            margin-top: 1rem;
        }
        .wp-wipro-submit-btn {
            background: #382356;
            color: #FFFFFF !important;
            border: none;
            border-radius: 9999px;
            padding: 1rem 3.5rem;
            font-size: 1.05rem;
            font-weight: 700;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.65rem;
            transition: all 0.25s ease;
            box-shadow: 0 10px 25px -5px rgba(56, 35, 86, 0.35);
        }
        .wp-wipro-submit-btn:hover {
            background: #26163D;
            transform: translateY(-2px);
            box-shadow: 0 15px 35px -5px rgba(56, 35, 86, 0.45);
        }
        .wp-wipro-guarantee {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 1rem;
            font-size: 0.82rem;
            color: var(--wp-text-muted);
        }

        .form-note {
            font-size: 0.8rem;
            color: var(--wp-text-muted);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.4rem;
            margin-top: 0.85rem;
            text-align: center;
        }

        .form-trust {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-top: 1.5rem;
            padding-top: 1.25rem;
            border-top: 1px solid var(--wp-border-subtle);
        }
        .form-trust img {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--wp-blue);
        }
        .form-trust p {
            font-size: 0.82rem;
            color: var(--wp-text-body);
            line-height: 1.45;
            margin: 0;
        }
        .form-trust b {
            color: var(--wp-navy-900);
            display: block;
            font-size: 0.88rem;
        }

        .capacity-note {
            text-align: center;
            font-size: 0.84rem;
            color: #CBD5E1;
            margin-top: 0.95rem;
        }

        /* Success Card */
        .form-success {
            display: none;
            text-align: center;
            padding: 2rem 1rem;
        }
        .form-success .tick {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            background: #DCFCE7;
            color: #166534;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.25rem;
        }

        /* Marquee ticker */
        .wp-marquee {
            background: var(--wp-navy-950);
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            padding: 0.85rem 0;
            overflow: hidden;
            white-space: nowrap;
        }
        .wp-marquee-track {
            display: inline-flex;
            animation: marqueeRoll 32s linear infinite;
            font-family: var(--wp-font-display);
            font-size: 0.84rem;
            font-weight: 600;
            color: #94A3B8;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }
        .wp-marquee-track span {
            display: inline-flex;
            align-items: center;
            gap: 1.5rem;
            padding-right: 1.5rem;
        }
        .wp-marquee-track i {
            color: var(--wp-spectrum-blue);
            font-style: normal;
        }
        @keyframes marqueeRoll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        /* Testimonials Carousel */
        .tst-wrap {
            position: relative;
            max-width: 860px;
            margin: 0 auto;
        }
        .tst {
            display: none;
            text-align: center;
        }
        .tst.active {
            display: block;
            animation: fadeIn 0.4s ease;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(6px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .tst blockquote {
            font-family: var(--wp-font-display);
            font-size: clamp(1.2rem, 2.2vw, 1.55rem);
            font-weight: 600;
            color: var(--wp-navy-900);
            line-height: 1.45;
            margin-bottom: 1.75rem;
        }
        .tst .who {
            display: inline-flex;
            align-items: center;
            gap: 0.85rem;
        }
        .tst .who img {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--wp-border);
        }
        .tst .who b {
            display: block;
            font-size: 0.95rem;
            color: var(--wp-navy-900);
            font-family: var(--wp-font-display);
        }
        .tst .who span {
            font-size: 0.82rem;
            color: var(--wp-text-muted);
        }
        .tst-dots {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 2rem;
        }
        .tst-dots button {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            border: none;
            background: var(--wp-border);
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .tst-dots button.on {
            background: var(--wp-blue);
            width: 26px;
            border-radius: var(--wp-radius-pill);
        }

        .result-chips {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
            margin-top: 3.5rem;
            text-align: center;
        }
        .result-chips div {
            background: #FFFFFF;
            border: 1px solid var(--wp-border);
            border-radius: var(--wp-radius-md);
            padding: 1.5rem 1rem;
            box-shadow: var(--wp-shadow-xs);
        }
        .result-chips b {
            display: block;
            font-family: var(--wp-font-display);
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--wp-navy-900);
            line-height: 1.1;
            margin-bottom: 0.35rem;
        }

        /* Pack Deliverables Grid - Exact Wipro Outline Top-Intersecting Cards */
        .pack-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 3.5rem 1.5rem;
            margin-top: 3.5rem;
        }
        .pack {
            background: #FFFFFF;
            border: 1px solid #D5DCE5;
            border-radius: 16px;
            padding: 3.25rem 1.75rem 2rem;
            position: relative;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 4px 20px rgba(0, 27, 58, 0.03);
        }
        .pack:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 36px rgba(46, 30, 84, 0.09);
            border-color: #B8C7D9;
        }
        .pack-top-icon {
            position: absolute;
            top: -24px;
            left: 50%;
            transform: translateX(-50%);
            background: #FFFFFF;
            padding: 0 14px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
        }
        .pack-top-icon svg {
            width: 44px;
            height: 44px;
            display: block;
        }
        .pack h3 {
            font-family: var(--wp-font-display);
            font-size: 1.15rem;
            font-weight: 700;
            color: #2E1E54 !important;
            line-height: 1.35;
            letter-spacing: -0.02em;
            margin: 0 0 0.85rem 0;
            text-align: center;
        }
        .pack p {
            font-size: 0.9rem;
            color: #475569;
            line-height: 1.6;
            margin: 0 0 1.25rem 0;
            text-align: center;
            flex-grow: 1;
        }
        .pack .val {
            font-family: var(--wp-font-display);
            font-size: 0.74rem;
            font-weight: 700;
            color: #382356;
            background: #F8F5FA;
            border: 1px solid #EFEAF4;
            border-radius: 9999px;
            padding: 0.3rem 0.85rem;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            margin-top: auto;
        }

        .value-bar {
            margin-top: 3.5rem;
            background: #FFFFFF;
            border: 1px solid var(--wp-border);
            border-radius: var(--wp-radius-lg);
            padding: 2.25rem 3rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1.5rem;
            box-shadow: var(--wp-shadow-card);
        }
        .value-bar .total {
            font-family: var(--wp-font-display);
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--wp-navy-900);
        }
        .value-bar .total s {
            color: #94A3B8;
            font-weight: 500;
        }
        .value-bar .total b {
            color: var(--wp-blue);
            font-size: 1.6rem;
        }

        /* Comparison Table */
        .cmp-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.94rem;
            background: #FFFFFF;
            border: 1px solid var(--wp-border);
            border-radius: var(--wp-radius-md);
            overflow: hidden;
            box-shadow: var(--wp-shadow-card);
        }
        .cmp-table th {
            background: var(--wp-navy-900);
            color: #FFFFFF;
            font-family: var(--wp-font-display);
            font-size: 0.85rem;
            font-weight: 700;
            padding: 1.2rem 1.4rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }
        .cmp-table td {
            padding: 1.15rem 1.4rem;
            border-bottom: 1px solid var(--wp-border-subtle);
            color: var(--wp-text-body);
        }
        .cmp-table tr:last-child td {
            border-bottom: none;
        }
        .cmp-table .x {
            color: #EF4444;
            font-weight: 800;
            margin-right: 0.35rem;
        }
        .cmp-table .ok {
            color: #10B981;
            font-weight: 800;
            margin-right: 0.35rem;
        }

        /* 21 Days Timeline Steps */
        .steps2 {
            display: flex;
            align-items: flex-start;
            gap: 1.5rem;
            padding: 1.85rem 0;
            border-bottom: 1px solid var(--wp-border-subtle);
        }
        .steps2:last-child {
            border-bottom: none;
        }
        .steps2 .dot {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: var(--wp-navy-900);
            color: #FFFFFF;
            font-family: var(--wp-font-display);
            font-weight: 800;
            font-size: 1.15rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .steps2 h3 {
            font-size: 1.2rem;
            color: var(--wp-navy-900);
            margin-bottom: 0.4rem;
        }
        .steps2 p {
            font-size: 0.92rem;
            color: var(--wp-text-body);
            line-height: 1.6;
            margin: 0;
        }
        .steps2 .when {
            font-family: var(--wp-font-display);
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--wp-blue);
            background: rgba(0, 82, 204, 0.08);
            padding: 0.28rem 0.65rem;
            border-radius: var(--wp-radius-pill);
            white-space: nowrap;
        }

        /* Pricing Tiers */
        .tier {
            padding: 2.5rem 2rem;
        }
        .tier.featured {
            border: 2px solid var(--wp-blue);
            box-shadow: var(--wp-shadow-lg);
            position: relative;
        }
        .tier .pop {
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--wp-blue);
            color: #FFFFFF;
            font-family: var(--wp-font-display);
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            padding: 0.25rem 0.85rem;
            border-radius: var(--wp-radius-pill);
        }
        .tier .price {
            font-family: var(--wp-font-display);
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--wp-navy-900);
            margin: 0.85rem 0 1.5rem;
        }
        .tier .price small {
            font-size: 0.9rem;
            color: var(--wp-text-muted);
            font-weight: 500;
        }
        .tier ul {
            list-style: none;
            padding: 0;
            margin: 0 0 2rem;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }
        .tier li {
            font-size: 0.92rem;
            color: var(--wp-text-body);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .tier li::before {
            content: "\f00c";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            color: var(--wp-blue);
            font-size: 0.85rem;
        }

        /* Guarantee Box */
        .guarantee {
            background: #FFFFFF;
            border: 1px solid var(--wp-border);
            border-left: 4px solid var(--wp-blue);
            border-radius: var(--wp-radius-md);
            padding: 2.25rem 2.5rem;
            display: flex;
            align-items: flex-start;
            gap: 1.5rem;
            box-shadow: var(--wp-shadow-card);
        }
        .guarantee .ic {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: rgba(0, 82, 204, 0.08);
            color: var(--wp-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .guarantee h3 {
            font-size: 1.25rem;
            color: var(--wp-navy-900);
            margin-bottom: 0.45rem;
        }
        .guarantee p {
            color: var(--wp-text-body);
            font-size: 0.95rem;
            line-height: 1.62;
            margin: 0;
        }

        /* FAQ Accordion */
        details {
            background: #FFFFFF;
            border: 1px solid var(--wp-border);
            border-radius: var(--wp-radius-sm);
            margin-bottom: 1rem;
            transition: border-color 0.2s ease;
        }
        details[open] {
            border-color: #CBD5E1;
            box-shadow: var(--wp-shadow-xs);
        }
        summary {
            font-family: var(--wp-font-display);
            font-size: 1.05rem;
            font-weight: 600;
            color: var(--wp-navy-900);
            padding: 1.25rem 1.5rem;
            cursor: pointer;
            outline: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        summary::-webkit-details-marker {
            display: none;
        }
        summary::after {
            content: "+";
            font-size: 1.35rem;
            font-weight: 400;
            color: var(--wp-blue);
            transition: transform 0.2s ease;
        }
        details[open] summary::after {
            content: "−";
        }
        .ans {
            padding: 0 1.5rem 1.5rem;
            font-size: 0.95rem;
            color: var(--wp-text-body);
            line-height: 1.65;
        }

        /* Final Closing LP Section */
        .final-lp {
            background: radial-gradient(circle at 70% 30%, #002856 0%, #001B3A 55%, #000F24 100%);
            color: #FFFFFF;
            padding: 100px 0;
            text-align: center;
            position: relative;
        }
        .final-lp-in {
            max-width: 820px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }
        .final-lp h2,
        .final-lp-in h2 {
            color: #FFFFFF !important;
            font-size: clamp(2rem, 3.8vw, 3.2rem);
            margin-bottom: 1.25rem;
        }
        .final-lp-in p {
            color: #CBD5E1;
            font-size: 1.15rem;
            line-height: 1.7;
            margin-bottom: 2.5rem;
        }

        /* Toast notification */
        .toast {
            position: fixed;
            bottom: 6rem;
            left: 1.5rem;
            z-index: 999;
            background: #FFFFFF;
            border: 1px solid var(--wp-border);
            border-radius: var(--wp-radius-md);
            padding: 0.85rem 1.15rem;
            box-shadow: var(--wp-shadow-lg);
            display: flex;
            align-items: center;
            gap: 0.85rem;
            max-width: 380px;
            opacity: 0;
            transform: translateY(20px);
            pointer-events: none;
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .toast.show {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }
        .toast img {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            object-fit: cover;
        }
        .toast b {
            display: block;
            font-size: 0.84rem;
            color: var(--wp-navy-900);
            font-family: var(--wp-font-display);
        }
        .toast span {
            font-size: 0.74rem;
            color: var(--wp-text-muted);
            display: block;
        }
        .toast .when2 {
            font-size: 0.7rem;
            color: #94A3B8;
            margin-left: auto;
            white-space: nowrap;
        }

        @media (max-width: 992px) {
            .lp-hero-grid {
                grid-template-columns: 1fr;
                gap: 3rem;
            }
            .pack-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 3.5rem 1.5rem;
            }
            .result-chips {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 640px) {
            .checks {
                grid-template-columns: 1fr;
            }
            .pack-grid {
                grid-template-columns: 1fr;
                gap: 3.25rem 1rem;
            }
            .result-chips {
                grid-template-columns: 1fr;
            }
            .form-card {
                padding: 1.75rem 1.4rem;
            }
            .toast {
                left: 1rem;
                right: 1rem;
                max-width: none;
            }
        }
    </style>
</head>

<body>
    @include('partials.header')

    <!-- ================= 1. GRAND ENTERPRISE HERO WITH ANIMATED BACKGROUND & MARQUEE ================= -->
    <header class="lp-hero">
        <!-- Animated Background Slideshow (Ken Burns & Smooth Crossfade) -->
        <div class="wp-hero-bg-slider" aria-hidden="true">
            <div class="wp-hero-bg-slide"></div>
            <div class="wp-hero-bg-slide"></div>
            <div class="wp-hero-bg-slide"></div>
            <div class="wp-hero-bg-slide"></div>
            <div class="wp-hero-bg-overlay"></div>
        </div>

        <div class="lp-hero-content-wrap">
            <div class="wp-wrap" style="position:relative; z-index:2; width:100%;">
                <div class="lp-hero-center">
                    <div class="wp-hero-badge">
                        <div class="spectrum-disc" aria-hidden="true">
                            <span style="background:#0072CE;"></span>
                            <span style="background:#00A3AD;"></span>
                            <span style="background:#78BE20;"></span>
                            <span style="background:#FFB81C;"></span>
                            <span style="background:#E4007C;"></span>
                        </div>
                        <span>Free 45-Minute Strategy Call — Q4 2026 Cohort Open</span>
                    </div>

                    <h1>
                        Find out exactly which <em>AI &amp; technology</em> your business needs —
                        <span style="color:#FFFFFF;">before you spend a single pound on it.</span>
                    </h1>

                    <p class="lead">
                        The Nexteck Business &amp; AI Audit examines your processes, systems, data, and talent, then hands you a costed, prioritised 90-day roadmap — impact-scored and urgency-ranked using the same architecture Mohammed Nasar delivered for tier-1 institutions.
                    </p>

                    <!-- Hero Action Buttons -->
                    <div class="lp-hero-actions">
                        <a href="#book" class="btn-wp btn-wp-primary btn-wp-lg">
                            Schedule Your Strategy Call <i class="fa-solid fa-arrow-down" style="margin-left:6px;"></i>
                        </a>
                        <a href="#outcomes" class="btn-wp btn-wp-ghost-light btn-wp-lg">
                            Explore What's Included <i class="fa-solid fa-arrow-right" style="margin-left:6px;"></i>
                        </a>
                    </div>

                    <!-- 4 Trust Proof Points -->
                    <div class="lp-hero-trust-bar">
                        <div class="trust-item">
                            <i class="fa-solid fa-shield-halved"></i>
                            <span><b>25+ Years</b> Boardroom IT Delivery</span>
                        </div>
                        <div class="trust-item">
                            <i class="fa-solid fa-layer-group"></i>
                            <span><b>Nexteck SME Toolkit™</b> 40+ Engagements</span>
                        </div>
                        <div class="trust-item">
                            <i class="fa-solid fa-code"></i>
                            <span><b>100% Client IP</b> Ownership of Code</span>
                        </div>
                        <div class="trust-item">
                            <i class="fa-solid fa-handshake"></i>
                            <span><b>Bilateral NDA</b> &amp; Straight Verdict</span>
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

    <!-- ================= 2. WIPRO-INSPIRED CONSULTATION & CONTACT SECTION ================= -->
    <section class="wp-wipro-contact-sec" id="book">
        <div class="wp-wrap">
            <div class="wp-wipro-form-container rv in">
                <div class="wp-wipro-form-header">
                    <div class="scarcity" style="margin-bottom:0.75rem;">
                        <span style="width:7px; height:7px; border-radius:50%; background:var(--wp-blue); display:inline-block;"></span>
                        <b>Executive Consultation</b> &bull; Limited UK Engagements
                    </div>
                    <h2>Schedule Your Architecture &amp; AI Strategy Call</h2>
                    <p>
                        A complimentary 45-minute live consultation with Mohammed Nasar. We evaluate your current bottlenecks, score your readiness, and deliver an objective roadmap. Strictly confidential under mutual NDA.
                    </p>
                    <div class="wipro-cd-pill">
                        <i class="fa-regular fa-calendar-days" style="color:var(--wp-blue);"></i>
                        <span>Q4 2026 Audit Window:</span>
                        <b id="cd3-d">--</b> days &bull; <b id="cd3-h">--</b> hrs &bull; <b id="cd3-m">--</b> min &bull; <b id="cd3-s">--</b> sec remaining
                    </div>
                </div>

                <form id="leadForm" class="wp-wipro-form">
                    @csrf
                    <div class="wp-wipro-grid-2">
                        <div class="wp-wipro-field">
                            <label for="f-first-name">First Name *</label>
                            <input type="text" id="f-first-name" class="wp-wipro-input" placeholder="First Name" required>
                        </div>
                        <div class="wp-wipro-field">
                            <label for="f-last-name">Last Name *</label>
                            <input type="text" id="f-last-name" class="wp-wipro-input" placeholder="Last Name" required>
                        </div>
                    </div>
                    <input type="hidden" id="f-name" name="full_name" value="">

                    <div class="wp-wipro-field">
                        <label for="f-email">Work Email *</label>
                        <input type="email" id="f-email" name="work_email" class="wp-wipro-input" placeholder="Work Email" required>
                    </div>

                    <div class="wp-wipro-grid-2">
                        <div class="wp-wipro-field">
                            <label for="f-company">Company *</label>
                            <input type="text" id="f-company" name="company" class="wp-wipro-input" placeholder="Company" required>
                        </div>
                        <div class="wp-wipro-field">
                            <label for="f-size">Team Size</label>
                            <select id="f-size" name="team_size" class="wp-wipro-select">
                                <option>Just me</option>
                                <option>2–10</option>
                                <option selected>11–50</option>
                                <option>51–200</option>
                                <option>200+</option>
                            </select>
                        </div>
                    </div>

                    <div class="wp-wipro-field">
                        <label for="f-pain">Primary Technology Bottleneck / Area of Interest</label>
                        <select id="f-pain" name="pain_point" class="wp-wipro-select">
                            <option>Manual processes eating our week</option>
                            <option>Disconnected systems &amp; re-keyed data</option>
                            <option>Can't scale — I'm the bottleneck</option>
                            <option>Unsure where AI genuinely helps</option>
                            <option>Outdated / legacy technology</option>
                            <option>Off-the-shelf software can't deliver our model</option>
                        </select>
                    </div>

                    <div class="wp-wipro-field">
                        <label for="f-message">Message / Context (Optional)</label>
                        <textarea id="f-message" name="message" class="wp-wipro-textarea" placeholder="Briefly describe your systems, current bottlenecks, or software objectives..." rows="4"></textarea>
                    </div>

                    <!-- Wipro-Style Checkbox Agreements -->
                    <div class="wp-wipro-consents">
                        <label class="wp-wipro-check-label">
                            <input type="checkbox" required checked class="wp-wipro-checkbox">
                            <span>I confirm I have read and agree to Nexteck's <a href="{{ url('/privacy-policy') }}" target="_blank" style="color:var(--wp-blue); text-decoration:underline; font-weight:600;">Privacy Policy</a> and consent to sharing my business details under mutual NDA. *</span>
                        </label>
                        <label class="wp-wipro-check-label">
                            <input type="checkbox" checked class="wp-wipro-checkbox">
                            <span>I would like to receive technology strategy insights, benchmark updates, and automation guides from Nexteck.</span>
                        </label>
                    </div>

                    <!-- Wipro-Style Centered Pill Submit Button -->
                    <div class="wp-wipro-submit-wrap">
                        <button type="submit" id="submitBtn" class="wp-wipro-submit-btn">
                            Submit Consultation Request <i class="fa-solid fa-arrow-right" style="margin-left:6px;"></i>
                        </button>
                        <div class="wp-wipro-guarantee">
                            <i class="fa-solid fa-shield-halved" style="color:var(--wp-blue);"></i>
                            <span>Protected by bilateral Non-Disclosure Agreement (NDA). Zero sales pressure.</span>
                        </div>
                    </div>
                </form>

                <div class="form-success" id="formSuccess" style="display:none; text-align:center; padding:3rem 1.5rem;">
                    <div class="tick" style="width:64px; height:64px; border-radius:50%; background:#DCFCE7; color:#16A34A; display:flex; align-items:center; justify-content:center; margin:0 auto 1.5rem; font-size:1.8rem;">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <h3 style="color:var(--wp-navy-900); font-size:1.8rem; margin-bottom:0.75rem;">Consultation Request Received</h3>
                    <p style="color:var(--wp-text-body); max-width:580px; margin:0 auto; font-size:1.05rem; line-height:1.6;">
                        Thank you for reaching out. Mohammed Nasar or our advisory team will review your requirements and contact you within one business day with scheduled call availability and calendar invite.
                    </p>
                </div>

                <div style="margin-top:2.5rem; padding-top:1.5rem; border-top:1px solid var(--wp-border-subtle); display:flex; align-items:center; justify-content:center; gap:1.25rem; flex-wrap:wrap;">
                    <img src="{{ asset('images/nasar.jpeg') }}" alt="Mohammed Nasar" style="width:52px; height:52px; border-radius:50%; object-fit:cover; border:2px solid var(--wp-blue);">
                    <p style="margin:0; font-size:0.88rem; color:var(--wp-text-body); line-height:1.45; text-align:left;">
                        <b>Direct consultation with Mohammed Nasar:</b><br>
                        <span style="color:var(--wp-text-muted);">"If our architecture audit cannot demonstrate quantifiable ROI for your business, we will state so directly on the call."</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Marquee Ticker -->
    <div class="wp-marquee">
        <div class="wp-marquee-track">
            <span>Banking <i class="fa-solid fa-circle" style="font-size:0.35rem; vertical-align:middle; margin:0 10px; color:#38BDF8;"></i> Insurance <i class="fa-solid fa-circle" style="font-size:0.35rem; vertical-align:middle; margin:0 10px; color:#38BDF8;"></i> Manufacturing <i class="fa-solid fa-circle" style="font-size:0.35rem; vertical-align:middle; margin:0 10px; color:#38BDF8;"></i> Railway Sourcing <i class="fa-solid fa-circle" style="font-size:0.35rem; vertical-align:middle; margin:0 10px; color:#38BDF8;"></i> Oil &amp; Gas <i class="fa-solid fa-circle" style="font-size:0.35rem; vertical-align:middle; margin:0 10px; color:#38BDF8;"></i> E-Commerce <i class="fa-solid fa-circle" style="font-size:0.35rem; vertical-align:middle; margin:0 10px; color:#38BDF8;"></i> IT Strategy <i class="fa-solid fa-circle" style="font-size:0.35rem; vertical-align:middle; margin:0 10px; color:#38BDF8;"></i> AI Readiness <i class="fa-solid fa-circle" style="font-size:0.35rem; vertical-align:middle; margin:0 10px; color:#38BDF8;"></i> Process Automation <i class="fa-solid fa-circle" style="font-size:0.35rem; vertical-align:middle; margin:0 10px; color:#38BDF8;"></i> Systems Integration <i class="fa-solid fa-circle" style="font-size:0.35rem; vertical-align:middle; margin:0 10px; color:#38BDF8;"></i></span>
            <span>Banking <i class="fa-solid fa-circle" style="font-size:0.35rem; vertical-align:middle; margin:0 10px; color:#38BDF8;"></i> Insurance <i class="fa-solid fa-circle" style="font-size:0.35rem; vertical-align:middle; margin:0 10px; color:#38BDF8;"></i> Manufacturing <i class="fa-solid fa-circle" style="font-size:0.35rem; vertical-align:middle; margin:0 10px; color:#38BDF8;"></i> Railway Sourcing <i class="fa-solid fa-circle" style="font-size:0.35rem; vertical-align:middle; margin:0 10px; color:#38BDF8;"></i> Oil &amp; Gas <i class="fa-solid fa-circle" style="font-size:0.35rem; vertical-align:middle; margin:0 10px; color:#38BDF8;"></i> E-Commerce <i class="fa-solid fa-circle" style="font-size:0.35rem; vertical-align:middle; margin:0 10px; color:#38BDF8;"></i> IT Strategy <i class="fa-solid fa-circle" style="font-size:0.35rem; vertical-align:middle; margin:0 10px; color:#38BDF8;"></i> AI Readiness <i class="fa-solid fa-circle" style="font-size:0.35rem; vertical-align:middle; margin:0 10px; color:#38BDF8;"></i> Process Automation <i class="fa-solid fa-circle" style="font-size:0.35rem; vertical-align:middle; margin:0 10px; color:#38BDF8;"></i> Systems Integration <i class="fa-solid fa-circle" style="font-size:0.35rem; vertical-align:middle; margin:0 10px; color:#38BDF8;"></i></span>
        </div>
    </div>

    <!-- ================= 2. CLIENT OUTCOMES CAROUSEL ================= -->
    <section class="wp-section wp-section-light">
        <div class="wp-wrap">
            <div class="wp-sec-head rv">
                <span class="wp-eyebrow"><span class="wp-dot"></span> Owner to Owner</span>
                <h2>What happens when the audit lands</h2>
            </div>

            <div class="tst-wrap rv" id="tstWrap">
                <div class="tst active">
                    <blockquote>
                        "We were paying for six disconnected tools and using none of them properly. The audit showed us three did the job of six — and the integrations paid for the whole engagement in nine weeks."
                    </blockquote>
                    <div class="who">
                        <img src="{{ asset('images/0.jpg') }}" alt="Manufacturing Leader">
                        <div>
                            <b>Operations Director</b>
                            <span>50-person precision manufacturing firm · Midlands</span>
                        </div>
                    </div>
                </div>

                <div class="tst">
                    <blockquote>
                        "I stopped being the bottleneck. SOPs, delegation, automation — my week went from firefighting to actually leading business development. First true holiday in three years."
                    </blockquote>
                    <div class="who">
                        <img src="{{ asset('images/1.jpg') }}" alt="E-Commerce Founder">
                        <div>
                            <b>Founder &amp; CEO</b>
                            <span>E-commerce brand · 11–50 staff · London</span>
                        </div>
                    </div>
                </div>

                <div class="tst">
                    <blockquote>
                        "We'd been pitched AI multiple times by vendors. Nexteck was the first to objectively score where it genuinely helped and where it was unproven hype. We delivered phase one with zero AI — and it was exactly right."
                    </blockquote>
                    <div class="who">
                        <img src="{{ asset('images/2.jpg') }}" alt="Financial Services Managing Partner">
                        <div>
                            <b>Managing Partner</b>
                            <span>Financial services consultancy · UK</span>
                        </div>
                    </div>
                </div>

                <div class="tst-dots" id="tstDots"></div>
            </div>

            <div class="result-chips rv">
                <div>
                    <b>12 hrs/wk</b>
                    <span style="font-size:0.9rem; color:var(--wp-text-muted);">Executive time returned, on average</span>
                </div>
                <div>
                    <b>9 weeks</b>
                    <span style="font-size:0.9rem; color:var(--wp-text-muted);">Typical payback on audit fee</span>
                </div>
                <div>
                    <b>9h <i class="fa-solid fa-arrow-right" style="font-size:0.8em; margin:0 3px;"></i> 1h</b>
                    <span style="font-size:0.9rem; color:var(--wp-text-muted);">Customer response time after triage</span>
                </div>
                <div>
                    <b>100%</b>
                    <span style="font-size:0.9rem; color:var(--wp-text-muted);">Of documents &amp; code yours permanently</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= 3. AUDIT PACK DELIVERABLES ================= -->
    <section class="wp-section" style="background:#F8FAFC; padding: 6rem 0;">
        <div class="wp-wrap">
            <div class="wp-sec-head rv" style="text-align:center; max-width:820px; margin: 0 auto 3.75rem;">
                <span class="wp-eyebrow" style="justify-content:center;"><span class="wp-dot"></span> Complete Transparency</span>
                <h2 style="color:#2E1E54; font-size:clamp(2rem, 3.2vw, 2.75rem); font-weight:700; letter-spacing:-0.025em; margin-bottom:1rem;">Everything inside your audit pack</h2>
                <p style="color:#475569; font-size:1.05rem; line-height:1.65; max-width:680px; margin:0 auto;">Seven working tools — not a generic slide deck that gathers dust. The complete Nexteck SME Strategy Toolkit™, populated with your proprietary operational data.</p>
            </div>

            <div class="pack-grid">
                <!-- 1. Client Diagnostic -->
                <div class="pack rv">
                    <div class="pack-top-icon">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" stroke="#18181B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="8" y="7" width="28" height="32" rx="4"/>
                            <path d="M15 7V4a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v3"/>
                            <path d="M14 19l4 4 8-8"/>
                            <path d="M14 29h16"/>
                        </svg>
                    </div>
                    <h3>Client Diagnostic</h3>
                    <p>All 8 pain points scored for severity on the discovery call. Anything rated 4–5 becomes a tracked sprint action.</p>
                    <span class="val">Value £750</span>
                </div>

                <!-- 2. Industry Benchmark -->
                <div class="pack rv">
                    <div class="pack-top-icon">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" stroke="#18181B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 38h32"/>
                            <rect x="10" y="22" width="6" height="16" rx="2"/>
                            <rect x="19" y="14" width="6" height="24" rx="2"/>
                            <rect x="28" y="7" width="6" height="31" rx="2"/>
                        </svg>
                    </div>
                    <h3>Industry Benchmark</h3>
                    <p>Your scores vs. 3–5 sector leaders across 5 lenses, with staged actions, owners, and dates to close each gap.</p>
                    <span class="val">Value £900</span>
                </div>

                <!-- 3. Competitor Tracker -->
                <div class="pack rv">
                    <div class="pack-top-icon">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" stroke="#18181B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="22" cy="22" r="16"/>
                            <circle cx="22" cy="22" r="9"/>
                            <circle cx="22" cy="22" r="2.5" fill="#18181B"/>
                            <path d="M22 3v5M22 36v5M3 22h5M36 22h5"/>
                        </svg>
                    </div>
                    <h3>Competitor Tracker</h3>
                    <p>Direct competitors mapped — category norms vs. genuine whitespace, so you differentiate where it wins clients.</p>
                    <span class="val">Value £600</span>
                </div>

                <!-- 4. AI & IT Opportunity Log (Microchip Outline from Wipro Style) -->
                <div class="pack rv">
                    <div class="pack-top-icon">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" stroke="#18181B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="10" y="10" width="24" height="24" rx="4"/>
                            <rect x="16" y="16" width="12" height="12" rx="2"/>
                            <path d="M15 5v5M22 5v5M29 5v5"/>
                            <path d="M15 34v5M22 34v5M29 34v5"/>
                            <path d="M5 15h5M5 22h5M5 29h5"/>
                            <path d="M34 15h5M34 22h5M34 29h5"/>
                        </svg>
                    </div>
                    <h3>AI &amp; IT Opportunity Log</h3>
                    <p>Every founder-dependent process scored Impact &times; Urgency with monthly costs — sequenced into a 90-day roadmap.</p>
                    <span class="val">Value £1,500</span>
                </div>

                <!-- 5. SOP & Delegation Register (Padlock Outline from Wipro Style) -->
                <div class="pack rv">
                    <div class="pack-top-icon">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" stroke="#18181B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="9" y="18" width="26" height="21" rx="4"/>
                            <path d="M14 18V11a8 8 0 0 1 16 0v7"/>
                            <circle cx="22" cy="27" r="2.5" fill="#18181B"/>
                            <path d="M22 29.5v4"/>
                        </svg>
                    </div>
                    <h3>SOP &amp; Delegation Register</h3>
                    <p>Recurring tasks documented, assigned, and automated — so the architecture outlives any single person.</p>
                    <span class="val">Value £700</span>
                </div>

                <!-- 6. KPI Dashboard -->
                <div class="pack rv">
                    <div class="pack-top-icon">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" stroke="#18181B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 29a16 16 0 1 1 30 0"/>
                            <path d="M22 23l7-7"/>
                            <circle cx="22" cy="23" r="3" fill="#18181B"/>
                            <path d="M9 34h26"/>
                        </svg>
                    </div>
                    <h3>KPI Dashboard</h3>
                    <p>Monthly targets vs. actuals across sales, marketing, finance, ops, and customer — reviewed in 60 minutes a week.</p>
                    <span class="val">Value £850</span>
                </div>

                <!-- 7. Tool Stack Plan -->
                <div class="pack rv">
                    <div class="pack-top-icon">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" stroke="#18181B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 5L5 14l17 9 17-9-17-9z"/>
                            <path d="M5 22l17 9 17-9"/>
                            <path d="M5 30l17 9 17-9"/>
                        </svg>
                    </div>
                    <h3>Tool Stack Plan</h3>
                    <p>Recommended software at Starter / Growth / Established tiers — buy once, correctly, at the right budget.</p>
                    <span class="val">Value £500</span>
                </div>

                <!-- 8. Walkthrough & Handover (Cloud Upload Outline from Wipro Style) -->
                <div class="pack rv">
                    <div class="pack-top-icon">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" stroke="#18181B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M13 32h19a8 8 0 0 0 1.6-15.8 10 10 0 0 0-19.6-2.5A7 7 0 0 0 13 32z"/>
                            <path d="M22 21v11M17 26l5-5 5 5"/>
                        </svg>
                    </div>
                    <h3>Walkthrough &amp; Handover</h3>
                    <p>A full working session with your executive team, plus 30 days of email support on the roadmap.</p>
                    <span class="val" style="background:#382356; color:#FFFFFF; border-color:#382356;">Included</span>
                </div>
            </div>

            <div class="value-bar rv">
                <div class="total"><s>£5,800</s> bundled value <i class="fa-solid fa-arrow-right" style="font-size:0.85em; margin:0 6px;"></i> audit fee <b>£2,950</b> fixed</div>
                <p style="color:var(--wp-text-body); margin:0;">
                    And the discovery call that starts it all is completely free. If the audit shows your tech is already optimal, we say so in writing.
                </p>
                <a class="btn-wp btn-wp-primary" href="#book">Start Free Call <i class="fa-solid fa-arrow-right" style="margin-left:6px;"></i></a>
            </div>
        </div>
    </section>

    <!-- ================= 4. COMPARISON: GUESSING VS KNOWING ================= -->
    <section class="wp-section wp-section-light">
        <div class="wp-wrap" style="max-width:960px;">
            <div class="wp-sec-head rv">
                <span class="wp-eyebrow"><span class="wp-dot"></span> Honest Evaluation</span>
                <h2>Guessing vs. Knowing</h2>
                <p>Most companies still choose technology reactively — based on vendor marketing and peer hearsay. Here is the difference a rigorous audit makes:</p>
            </div>

            <table class="cmp-table rv">
                <thead>
                    <tr>
                        <th style="width:30%;">Decision Area</th>
                        <th style="width:35%;">Without the Audit</th>
                        <th>With Nexteck Architecture</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><b>Buying Software</b></td>
                        <td><span class="x"><i class="fa-solid fa-xmark"></i></span> Reactive — bought under sales pressure, shelfware within months</td>
                        <td><span class="ok"><i class="fa-solid fa-check"></i></span> Every purchase tied to a scored opportunity with an agreed budget ceiling</td>
                    </tr>
                    <tr>
                        <td><b>AI Investments</b></td>
                        <td><span class="x"><i class="fa-solid fa-xmark"></i></span> Hype-driven, or avoided entirely while faster competitors compound</td>
                        <td><span class="ok"><i class="fa-solid fa-check"></i></span> Impact &times; urgency scored for your exact workflow — hype called out</td>
                    </tr>
                    <tr>
                        <td><b>Executive Week</b></td>
                        <td><span class="x"><i class="fa-solid fa-xmark"></i></span> 10+ hours lost to administrative friction, approvals, and re-keyed data</td>
                        <td><span class="ok"><i class="fa-solid fa-check"></i></span> Delegated, documented, automated — management by exception only</td>
                    </tr>
                    <tr>
                        <td><b>Performance Reporting</b></td>
                        <td><span class="x"><i class="fa-solid fa-xmark"></i></span> Hours of manual CSV exports, compiled at 9pm, already out-of-date</td>
                        <td><span class="ok"><i class="fa-solid fa-check"></i></span> Live KPI dashboard, evaluated cleanly in under 60 minutes weekly</td>
                    </tr>
                    <tr>
                        <td><b>Scaling Operations</b></td>
                        <td><span class="x"><i class="fa-solid fa-xmark"></i></span> Service quality drops and leadership becomes the bottleneck at 2&times; volume</td>
                        <td><span class="ok"><i class="fa-solid fa-check"></i></span> Standard Operating Procedures and integrated systems that absorb growth</td>
                    </tr>
                    <tr>
                        <td><b>Intellectual Property</b></td>
                        <td><span class="x"><i class="fa-solid fa-xmark"></i></span> Vendor lock-in, undocumented workarounds, and key-person risk</td>
                        <td><span class="ok"><i class="fa-solid fa-check"></i></span> 100% full IP ownership of all documentation, code, and dashboards</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- ================= 5. PROCESS: 21 DAYS TO ROADMAP ================= -->
    <section class="wp-section">
        <div class="wp-wrap">
            <div class="wp-sec-head rv">
                <span class="wp-eyebrow"><span class="wp-dot"></span> How The Audit Works</span>
                <h2>From First Call to Scored Roadmap in 21 Days</h2>
                <p>A defined, milestone-driven process — you always know what is happening, what is next, and what it costs.</p>
            </div>

            <div style="max-width:860px; margin:0 auto; background:#FFFFFF; border:1px solid var(--wp-border); border-radius:var(--wp-radius-lg); padding:1rem 2.5rem; box-shadow:var(--wp-shadow-card);">
                <div class="steps2 rv">
                    <div class="dot">1</div>
                    <div style="flex-grow:1;">
                        <h3>Discovery Call &amp; Client Diagnostic</h3>
                        <p>A 45-minute discovery consultation scoring your business against the 8 most common operational friction points (rated 1–5). High-severity items become sprint priorities.</p>
                    </div>
                    <span class="when">Day 1</span>
                </div>

                <div class="steps2 rv">
                    <div class="dot" style="background:#382356;">2</div>
                    <div style="flex-grow:1;">
                        <h3>Industry Benchmark &amp; Competitor Tracker</h3>
                        <p>Scored against 3–5 recognized leaders in your sector across five lenses, plus a competitive positioning matrix separating industry hygiene from market whitespace.</p>
                    </div>
                    <span class="when">Days 2–7</span>
                </div>

                <div class="steps2 rv">
                    <div class="dot" style="background:#72246C;">3</div>
                    <div style="flex-grow:1;">
                        <h3>AI &amp; IT Opportunity Log</h3>
                        <p>Every founder-dependent task becomes a scored opportunity — Impact &times; Urgency, monthly software cost, and precisely what administrative tasks are eliminated.</p>
                    </div>
                    <span class="when">Days 8–14</span>
                </div>

                <div class="steps2 rv">
                    <div class="dot" style="background:#00A3AD;">4</div>
                    <div style="flex-grow:1;">
                        <h3>Roadmap, KPI Dashboard &amp; Walkthrough</h3>
                        <p>A sequenced 90-day execution roadmap, SOP &amp; delegation register, tiered tool-stack plan, and a KPI dashboard your team can manage in under 60 minutes per week.</p>
                    </div>
                    <span class="when">Days 15–21</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= 6. ENGAGEMENT TIERS ================= -->
    <section class="wp-section wp-section-light">
        <div class="wp-wrap">
            <div class="wp-sec-head rv">
                <span class="wp-eyebrow"><span class="wp-dot"></span> Engagement Options</span>
                <h2>Choose how deep you want to go</h2>
                <p>Fixed-fee engagements. Phased spend. Every pound costed and approved by you before commitment.</p>
            </div>

            <div class="wp-grid wp-g3" style="align-items:stretch;">
                <div class="wp-card tier rv">
                    <h3>The Audit</h3>
                    <div class="price">£2,950 <small>fixed fee</small></div>
                    <ul>
                        <li>Full 4-stage toolkit diagnostic</li>
                        <li>Industry benchmark &amp; competitor map</li>
                        <li>AI &amp; IT Opportunity Log, scored &amp; costed</li>
                        <li>90-day prioritised roadmap</li>
                        <li>KPI dashboard + tool-stack plan</li>
                        <li>Everything is 100% yours to keep</li>
                    </ul>
                    <a class="btn-wp btn-wp-outline" href="#book" style="margin-top:auto;">Start with the Audit</a>
                </div>

                <div class="wp-card tier featured rv">
                    <span class="pop">Most Chosen</span>
                    <h3>Audit + 90-Day Implementation</h3>
                    <div class="price">£2,950 <small>+ phased build</small></div>
                    <ul>
                        <li>Everything included in The Audit</li>
                        <li>We implement the roadmap alongside your team</li>
                        <li>Automations, integrations &amp; AI tools live</li>
                        <li>SOPs documented, delegated &amp; staff trained</li>
                        <li>Weekly 60-minute KPI governance reviews</li>
                        <li>Founder escalation-only guarantee</li>
                    </ul>
                    <a class="btn-wp btn-wp-primary" href="#book" style="margin-top:auto;">Book the Audit <i class="fa-solid fa-arrow-right" style="margin-left:6px;"></i></a>
                </div>

                <div class="wp-card tier rv">
                    <h3>Custom Software Platform</h3>
                    <div class="price">Scoped <small>after audit</small></div>
                    <ul>
                        <li>For unique models no off-the-shelf tool fits</li>
                        <li>Custom software engineered by Nexteck</li>
                        <li>Integration layer across your entire stack</li>
                        <li>Full documentation, source code &amp; handover</li>
                        <li>Only recommended where ROI is proven</li>
                    </ul>
                    <a class="btn-wp btn-wp-outline" href="#book" style="margin-top:auto;">Discuss Your Case</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= 7. GUARANTEE & FAQS ================= -->
    <section class="wp-section">
        <div class="wp-wrap" style="max-width:880px;">
            <div class="guarantee rv" style="margin-bottom:4rem;">
                <div class="ic">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" /><polyline points="9 12 11 14 15 10" /></svg>
                </div>
                <div>
                    <h3>The Straight-Talking Guarantee</h3>
                    <p>If the audit concludes your current technology and processes are already optimal for your stage — we will say so in writing, hand you the evidence, and shake hands. You keep the entire analysis. We would rather earn your trust than your invoice.</p>
                </div>
            </div>

            <div class="wp-sec-head rv">
                <span class="wp-eyebrow"><span class="wp-dot"></span> Questions Founders Ask</span>
                <h2>Frequently asked questions</h2>
            </div>

            <details class="rv">
                <summary>We're not technical. Will we understand the roadmap?</summary>
                <div class="ans">Yes — the roadmap is written for business owners, not engineers. Every recommendation states the business outcome, the monthly cost, what tasks you stop doing, and the impact &times; urgency score. Anything unclear is walked through directly on a call.</div>
            </details>

            <details class="rv">
                <summary>Do we have to buy specific software you recommend?</summary>
                <div class="ans">No. Recommendations come in three budget tiers — Starter, Growth, and Established — and always include a "do nothing" cost of delay. Buy directly from vendors, through us, or not at all. There are zero affiliate kickbacks behind our advice.</div>
            </details>

            <details class="rv">
                <summary>How is our proprietary business data handled?</summary>
                <div class="ans">Strictly under a mutual Non-Disclosure Agreement (NDA) from day one. We work from exports and read-only access where possible, never take ownership of your data, and delete working copies at the end of the engagement on written confirmation.</div>
            </details>

            <details class="rv">
                <summary>Will AI be forced on us because it's trendy?</summary>
                <div class="ans">The opposite. Each AI opportunity is scored by measurable commercial impact and urgency for your business, and hype is flagged as hype. Several client roadmaps conclude with zero AI in phase one — operational discipline first, AI where it clearly earns its place.</div>
            </details>

            <details class="rv">
                <summary>What if our business model needs software that doesn't exist?</summary>
                <div class="ans">That is the eighth friction point in our diagnostic. Where your model genuinely cannot be served off-the-shelf, we scope a bespoke software build — honest costings, phased sprints, so you only invest in what delivers a defensible advantage.</div>
            </details>

            <details class="rv">
                <summary>Why only 6 slots per quarter?</summary>
                <div class="ans">Because the audit is run personally by Mohammed Nasar, not handed to junior analysts. Cohorts are strictly capped to guarantee the rigorous quality of every diagnostic, benchmark, and roadmap we put our name to.</div>
            </details>
        </div>
    </section>

    <!-- ================= 8. CLOSING BANNER ================= -->
    <section class="final-lp">
        <div class="wp-wrap">
            <div class="final-lp-in rv">
                <span class="wp-eyebrow on-navy"><span class="wp-dot"></span> Last Call</span>
                <h2>Your competitors are auditing <em>right now.</em></h2>
                <p>
                    Q4 2026 closes in <b style="color:#38BDF8;"><i class="fa-regular fa-calendar-days" style="margin-right:5px; color:#38BDF8;"></i><span id="cd4-d">--</span> days</b>. When the quarter turns, businesses holding a costed AI &amp; technology roadmap will be executing — while everyone else is still debating options.
                </p>
                <div style="display:flex; justify-content:center; gap:1.25rem; flex-wrap:wrap;">
                    <a class="btn-wp btn-wp-primary btn-wp-lg" href="#book">
                        Claim One of 4 Remaining Slots <i class="fa-solid fa-arrow-right arrow-icon" style="margin-left:6px;"></i>
                    </a>
                    <a class="btn-wp btn-wp-ghost-light btn-wp-lg" href="{{ route('home') }}">
                        Explore Nexteck First
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Floating Toast Notification -->
    <div class="toast" id="toast">
        <img id="toastImg" src="{{ asset('images/0.jpg') }}" alt="Client Consultation">
        <div>
            <b id="toastName">A founder just requested a call</b>
            <span id="toastMeta">E-commerce · London</span>
        </div>
        <span class="when2" id="toastWhen">2 min ago</span>
    </div>

    @include('partials.footer')

    <!-- ================= SCRIPTS ================= -->
    <script>
        const target = new Date("2026-12-31T23:59:59+00:00").getTime();
        function tick() {
            let d = target - Date.now();
            if (d < 0) d = 0;
            const dd = Math.floor(d / 864e5);
            const hh = Math.floor(d / 36e5) % 24;
            const mm = Math.floor(d / 6e4) % 60;
            const ss = Math.floor(d / 1e3) % 60;
            
            const set = (id, v) => {
                const e = document.getElementById(id);
                if (e) e.textContent = String(v).padStart(2, "0");
            };
            set("cd3-d", dd); set("cd3-h", hh); set("cd3-m", mm); set("cd3-s", ss);
            set("cd4-d", dd);
        }
        tick();
        setInterval(tick, 1000);

        const io = new IntersectionObserver(es => es.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add("in");
                io.unobserve(e.target);
            }
        }), { threshold: 0.12 });
        document.querySelectorAll(".rv").forEach(el => io.observe(el));

        // Testimonial Rotator
        const tsts = [...document.querySelectorAll("#tstWrap .tst")];
        const dots = document.getElementById("tstDots");
        let ti = 0, tTimer;
        if (dots && tsts.length > 0) {
            tsts.forEach((_, i) => {
                const b = document.createElement("button");
                if (i === 0) b.classList.add("on");
                b.onclick = () => { showT(i); resetT(); };
                dots.appendChild(b);
            });
            function showT(i) {
                ti = i;
                tsts.forEach((t, k) => t.classList.toggle("active", k === i));
                [...dots.children].forEach((d, k) => d.classList.toggle("on", k === i));
            }
            function resetT() {
                clearInterval(tTimer);
                tTimer = setInterval(() => showT((ti + 1) % tsts.length), 6500);
            }
            resetT();
        }

        // Live Social Proof Toast
        const toast = document.getElementById("toast");
        const toastData = [
            { img: "{{ asset('images/0.jpg') }}", name: "Sarah, a Midlands manufacturer", meta: "requested an audit call", when: "just now" },
            { img: "{{ asset('images/1.jpg') }}", name: "A fintech founder", meta: "booked a Q4 slot", when: "7 min ago" },
            { img: "{{ asset('images/2.jpg') }}", name: "An e-commerce owner", meta: "requested the strategy call", when: "19 min ago" },
            { img: "{{ asset('images/3.jpg') }}", name: "A training-provider director", meta: "booked a diagnostic", when: "34 min ago" },
            { img: "{{ asset('images/4.jpg') }}", name: "An engineering supplier", meta: "requested an audit call", when: "52 min ago" },
        ];
        let tsi = 0;
        function showToast() {
            if (!toast) return;
            const d = toastData[tsi % toastData.length];
            tsi++;
            document.getElementById("toastImg").src = d.img;
            document.getElementById("toastName").textContent = d.name;
            document.getElementById("toastMeta").textContent = d.meta;
            document.getElementById("toastWhen").textContent = d.when;
            toast.classList.add("show");
            setTimeout(() => toast.classList.remove("show"), 5200);
        }
        setTimeout(showToast, 9000);
        setInterval(showToast, 24000);

        // Lead Form Submission
        const leadForm = document.getElementById("leadForm");
        if (leadForm) {
            leadForm.addEventListener("submit", function (ev) {
                ev.preventDefault();

                // Concatenate First Name + Last Name
                const fn = document.getElementById("f-first-name");
                const ln = document.getElementById("f-last-name");
                const fullEl = document.getElementById("f-name");
                if (fn && ln && fullEl) {
                    fullEl.value = (fn.value + " " + ln.value).trim();
                }

                const btn = document.getElementById("submitBtn");
                if (btn) {
                    btn.disabled = true;
                    btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin" style="margin-right:6px;"></i> Submitting...';
                }

                const formData = new FormData(this);

                fetch("{{ route('lead.submit') }}", {
                    method: "POST",
                    headers: {
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        leadForm.style.display = "none";
                        const formHeader = document.querySelector(".wp-wipro-form-header");
                        if (formHeader) formHeader.style.display = "none";
                        document.getElementById("formSuccess").style.display = "block";
                    } else {
                        alert(data.message || "Something went wrong. Please check your inputs.");
                        if (btn) {
                            btn.disabled = false;
                            btn.innerHTML = 'Submit Consultation Request <i class="fa-solid fa-arrow-right" style="margin-left:6px;"></i>';
                        }
                    }
                })
                .catch(err => {
                    console.error(err);
                    alert("An error occurred during submission. Please try again.");
                    if (btn) {
                        btn.disabled = false;
                        btn.innerHTML = 'Submit Consultation Request <i class="fa-solid fa-arrow-right" style="margin-left:6px;"></i>';
                    }
                });
            });
        }

        // Prefill leadForm from URL parameters or localStorage
        (function() {
            try {
                const params = new URLSearchParams(window.location.search);
                const hashParams = window.location.hash.includes('?') ? new URLSearchParams(window.location.hash.split('?')[1]) : null;
                const getVal = (key) => params.get(key) || (hashParams ? hashParams.get(key) : null);
                
                const name = getVal('full_name') || localStorage.getItem('nxt_lead_name');
                const email = getVal('work_email') || localStorage.getItem('nxt_lead_email');
                const company = getVal('company') || localStorage.getItem('nxt_lead_company');
                const size = getVal('team_size');
                const pain = getVal('pain_point') || localStorage.getItem('nxt_lead_challenge');

                const fn = document.getElementById('f-name');
                const fe = document.getElementById('f-email');
                const fc = document.getElementById('f-company');
                const fs = document.getElementById('f-size');
                const fp = document.getElementById('f-pain');

                if (fn && name) fn.value = name;
                if (fe && email) fe.value = email;
                if (fc && company) fc.value = company;
                if (fs && size) {
                    for (let opt of fs.options) {
                        if (opt.text.includes(size) || size.includes(opt.text)) {
                            opt.selected = true;
                            break;
                        }
                    }
                }
                if (fp && pain) {
                    let matched = false;
                    for (let opt of fp.options) {
                        if (opt.text.toLowerCase().includes(pain.toLowerCase()) || pain.toLowerCase().includes(opt.text.toLowerCase())) {
                            opt.selected = true;
                            matched = true;
                            break;
                        }
                    }
                    if (!matched) {
                        const newOpt = document.createElement('option');
                        newOpt.text = pain;
                        newOpt.value = pain;
                        newOpt.selected = true;
                        fp.add(newOpt, 0);
                    }
                }
            } catch (e) {}
        })();
    </script>
</body>

</html>
