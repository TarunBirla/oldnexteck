<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.analytics')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>Nexteck Cyber Security | Protect Your Business from Cyber Threats | UK SMEs</title>
    <meta name="description" content="Comprehensive Cyber Security Solutions for UK SMEs. End-to-End System Audits, NCSC Cyber Essentials certification, vulnerability assessments, and compliance by Nexteck London.">
    <meta name="keywords" content="Cyber Security UK SMEs, NCSC Cyber Essentials, Cyber Essentials Plus, System Security Audit, Vulnerability Assessment London, UK GDPR Compliance, Cyber Threat Protection">
    <link rel="canonical" href="{{ url('/cyber-security') }}">

    <!-- Open Graph / Social Sharing -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/cyber-security') }}">
    <meta property="og:title" content="Nexteck Cyber Security — Protect Your Business from Cyber Threats">
    <meta property="og:description" content="Comprehensive Cyber Security Solutions for UK SMEs. End-to-End System Audit, NCSC Cyber Essentials Certification, and robust threat protection.">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/nexteck-theme.css') }}">

    <style>
        /* ==========================================================================
           NEXTECK ENTERPRISE CYBER SECURITY DESIGN SYSTEM
           Inspired by Wipro CyberTransform™ / CyberShield™ Enterprise Architecture
           ========================================================================== */

        :root {
            --cyber-dark-950: #000B1A;
            --cyber-dark-900: #001226;
            --cyber-dark-850: #031B38;
            --cyber-dark-800: #07254C;
            --cyber-blue-neon: #00D4FF;
            --cyber-blue-electric: #38BDF8;
            --cyber-blue-deep: #0072CE;
            --cyber-gold: #FFB81C;
            --cyber-gold-hover: #E5A510;
            --cyber-gold-dark: #B45309;
            --cyber-green: #10B981;
            --cyber-purple: #382356;
            --cyber-border-glow: rgba(0, 212, 255, 0.25);
            --cyber-border-card: rgba(56, 189, 248, 0.18);
        }

        *, *::before, *::after {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        body {
            background-color: #F8FAFC;
            color: var(--wp-text-body);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            width: 100%;
        }

        /* ---------------- SECTION 1: HERO & THREAT PROTECTION ---------------- */
        .sec-cyber-hero {
            position: relative;
            background: 
                linear-gradient(180deg, rgba(0, 11, 26, 0.94) 0%, rgba(0, 23, 54, 0.92) 60%, rgba(0, 18, 40, 0.97) 100%),
                radial-gradient(circle at 85% 25%, rgba(0, 212, 255, 0.22) 0%, transparent 50%),
                radial-gradient(circle at 15% 75%, rgba(56, 35, 86, 0.5) 0%, transparent 55%),
                url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&w=2000&q=80') center center / cover no-repeat;
            color: #FFFFFF;
            padding: clamp(3.5rem, 6.5vw, 5.5rem) 0 clamp(2.5rem, 4.5vw, 4rem);
            overflow: hidden;
            border-bottom: 2px solid rgba(0, 212, 255, 0.35);
            width: 100%;
        }

        .sec-cyber-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: 
                linear-gradient(rgba(0, 212, 255, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 212, 255, 0.05) 1px, transparent 1px);
            background-size: 38px 38px;
            opacity: 0.65;
            pointer-events: none;
        }

        .cyber-hero-grid {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: clamp(2rem, 4vw, 3.5rem);
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .cyber-badge-tag {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(0, 212, 255, 0.12);
            border: 1px solid rgba(0, 212, 255, 0.45);
            padding: 0.4rem 1.1rem;
            border-radius: 9999px;
            font-size: clamp(0.75rem, 1.8vw, 0.84rem);
            font-weight: 700;
            color: #38BDF8;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            margin-bottom: 1.25rem;
            box-shadow: 0 0 16px rgba(0, 212, 255, 0.18);
            max-width: 100%;
            flex-wrap: wrap;
        }

        .cyber-pulse-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #10B981;
            box-shadow: 0 0 10px #10B981;
            animation: cyberPulse 2s infinite;
            flex-shrink: 0;
        }

        @keyframes cyberPulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.35; transform: scale(1.35); }
        }

        .cyber-hero-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(1.9rem, 5.2vw, 3.8rem);
            font-weight: 800;
            line-height: 1.12;
            margin: 0 0 1.15rem;
            color: #FFFFFF;
            letter-spacing: -0.02em;
        }

        .cyber-text-gradient {
            background: linear-gradient(135deg, #FFB81C 15%, #FDE047 50%, #38BDF8 95%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        .cyber-hero-sub {
            font-size: clamp(1rem, 2.2vw, 1.22rem);
            font-weight: 400;
            color: #93C5FD;
            line-height: 1.6;
            margin: 0 0 1.75rem;
            max-width: 580px;
        }

        .cyber-hero-pillars {
            display: flex;
            gap: clamp(0.5rem, 1.5vw, 1rem);
            margin: 1.5rem 0 2rem;
            flex-wrap: wrap;
        }

        .cyber-pillar-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: clamp(0.45rem, 1.2vw, 0.6rem) clamp(0.85rem, 2vw, 1.2rem);
            border-radius: 10px;
            font-size: clamp(0.85rem, 1.8vw, 0.95rem);
            font-weight: 700;
            color: #FFFFFF;
            transition: all 0.25s ease;
        }

        .cyber-pillar-pill:hover {
            border-color: #38BDF8;
            background: rgba(56, 189, 248, 0.15);
            transform: translateY(-2px);
        }

        .cyber-pillar-pill i {
            color: #FFB81C;
        }

        .cyber-hero-actions {
            display: flex;
            gap: 1rem;
            align-items: center;
            flex-wrap: wrap;
        }

        .btn-cyber-gold {
            background: linear-gradient(135deg, #FFB81C 0%, #F59E0B 100%);
            color: #000B1A !important;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 800;
            font-size: clamp(0.92rem, 2vw, 1.05rem);
            padding: clamp(0.8rem, 1.8vw, 0.95rem) clamp(1.4rem, 3vw, 2rem);
            border-radius: 12px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.65rem;
            box-shadow: 0 10px 25px rgba(255, 184, 28, 0.38);
            transition: all 0.25s ease;
            border: none;
            cursor: pointer;
            min-height: 48px;
            text-align: center;
        }

        .btn-cyber-gold:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 32px rgba(255, 184, 28, 0.52);
            background: linear-gradient(135deg, #FFC43B 0%, #FBBF24 100%);
        }

        .btn-cyber-ghost {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.24);
            color: #FFFFFF !important;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            font-size: clamp(0.92rem, 2vw, 1rem);
            padding: clamp(0.8rem, 1.8vw, 0.95rem) clamp(1.25rem, 2.5vw, 1.85rem);
            border-radius: 12px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.65rem;
            transition: all 0.25s ease;
            min-height: 48px;
            text-align: center;
        }

        .btn-cyber-ghost:hover {
            background: rgba(255, 255, 255, 0.16);
            border-color: #38BDF8;
            color: #38BDF8 !important;
            transform: translateY(-2px);
        }

        /* Hero Visual Card (Image + London Skyline + Shield) */
        .cyber-shield-card {
            background: radial-gradient(circle at 50% 30%, rgba(0, 212, 255, 0.16) 0%, rgba(3, 27, 56, 0.92) 65%, rgba(0, 11, 26, 0.98) 100%);
            border: 2px solid rgba(0, 212, 255, 0.38);
            border-radius: 24px;
            padding: clamp(1.5rem, 3.5vw, 2.2rem) clamp(1rem, 2.5vw, 1.8rem);
            position: relative;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.55), inset 0 0 35px rgba(0, 212, 255, 0.15);
            text-align: center;
            overflow: hidden;
            width: 100%;
            max-width: 480px;
            margin: 0 auto;
        }

        .hero-img-backdrop {
            position: absolute;
            inset: 0;
            background-image: url('https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=800&q=80');
            background-size: cover;
            background-position: center;
            opacity: 0.2;
            filter: saturate(1.8) brightness(0.8);
            pointer-events: none;
        }

        .shield-icon-wrapper {
            width: clamp(100px, 18vw, 130px);
            height: clamp(120px, 20vw, 150px);
            margin: 0 auto 1rem;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .shield-svg-shape {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            filter: drop-shadow(0 0 22px rgba(0, 212, 255, 0.65));
        }

        .shield-lock-icon {
            font-size: clamp(2.4rem, 5vw, 3rem);
            color: #FFFFFF;
            position: relative;
            z-index: 2;
            text-shadow: 0 0 20px rgba(0, 212, 255, 0.95);
            animation: lockGlow 3s ease-in-out infinite alternate;
        }

        @keyframes lockGlow {
            from { transform: scale(1); filter: drop-shadow(0 0 10px #00D4FF); }
            to { transform: scale(1.06); filter: drop-shadow(0 0 25px #38BDF8); }
        }

        .london-skyline-silhouette {
            width: 100%;
            height: auto;
            max-height: 75px;
            margin-top: 0.75rem;
            position: relative;
            z-index: 1;
            opacity: 0.9;
            display: block;
        }

        .cyber-shield-caption {
            font-size: clamp(0.78rem, 2vw, 0.88rem);
            color: #94A3B8;
            margin-top: 0.85rem;
            position: relative;
            z-index: 2;
            line-height: 1.45;
        }

        .cyber-shield-caption strong {
            color: #FFB81C;
        }

        /* ---------------- WIPRO-STYLE ENTERPRISE TRUST METRICS BAR ---------------- */
        .cyber-metrics-strip {
            position: relative;
            z-index: 10;
            margin-top: -2.25rem;
            margin-bottom: 2.5rem;
        }

        .cyber-metrics-card {
            background: linear-gradient(135deg, #001228 0%, #082142 50%, #001B3A 100%);
            border: 1px solid rgba(0, 212, 255, 0.35);
            border-radius: 20px;
            padding: 1.5rem clamp(1rem, 2.5vw, 2.5rem);
            box-shadow: 0 16px 40px rgba(0, 15, 36, 0.35), 0 0 25px rgba(0, 212, 255, 0.12);
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
            align-items: center;
        }

        .metric-col {
            text-align: center;
            position: relative;
        }

        .metric-col:not(:last-child)::after {
            content: "";
            position: absolute;
            right: -0.75rem;
            top: 15%;
            height: 70%;
            width: 1px;
            background: rgba(255, 255, 255, 0.12);
        }

        .metric-number {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(1.8rem, 3.5vw, 2.4rem);
            font-weight: 800;
            color: #FFB81C;
            line-height: 1.1;
            margin-bottom: 0.25rem;
            letter-spacing: -0.02em;
        }

        .metric-label {
            font-size: clamp(0.78rem, 1.8vw, 0.85rem);
            color: #CBD5E1;
            line-height: 1.4;
            font-weight: 500;
        }

        /* ---------------- IN-PAGE CAPABILITY & FRAMEWORK NAVIGATOR ---------------- */
        /* Replaces the sticky subnav that was jammed in the header! */
        .sec-framework-navigator {
            padding: 1.5rem 0 3rem;
            background: #F8FAFC;
        }

        .framework-nav-box {
            background: #FFFFFF;
            border: 1px solid #E2E8F0;
            border-radius: 20px;
            padding: 1.75rem clamp(1rem, 3vw, 2rem);
            box-shadow: 0 6px 25px rgba(0, 15, 36, 0.05);
        }

        .framework-nav-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.25rem;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .framework-nav-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 1.05rem;
            font-weight: 800;
            color: var(--wp-navy-950);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .framework-nav-badge {
            font-size: 0.78rem;
            font-weight: 700;
            color: #0369A1;
            background: #E0F2FE;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        .framework-pills-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 0.85rem;
        }

        .framework-pill-item {
            background: #F8FAFC;
            border: 1px solid #E2E8F0;
            border-radius: 14px;
            padding: 1rem 0.85rem;
            text-decoration: none;
            color: var(--wp-navy-950);
            transition: all 0.25s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 0.5rem;
        }

        .framework-pill-item:hover,
        .framework-pill-item.is-active {
            background: #001B3A;
            border-color: #00D4FF;
            color: #FFFFFF;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 27, 58, 0.18);
        }

        .framework-pill-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: rgba(0, 212, 255, 0.12);
            color: #0284C7;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.15rem;
            transition: all 0.25s ease;
        }

        .framework-pill-item:hover .framework-pill-icon,
        .framework-pill-item.is-active .framework-pill-icon {
            background: rgba(255, 184, 28, 0.2);
            color: #FFB81C;
        }

        .framework-pill-name {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.88rem;
            font-weight: 700;
            line-height: 1.3;
        }

        .framework-pill-desc {
            font-size: 0.74rem;
            color: var(--wp-text-muted);
            line-height: 1.3;
        }

        .framework-pill-item:hover .framework-pill-desc,
        .framework-pill-item.is-active .framework-pill-desc {
            color: #93C5FD;
        }

        /* ---------------- SECTION 2: END-TO-END SYSTEM AUDIT ---------------- */
        .sec-system-audit {
            padding: clamp(3.5rem, 6vw, 5.5rem) 0;
            background: #FFFFFF;
            position: relative;
            width: 100%;
        }

        .sec-header {
            text-align: center;
            max-width: 820px;
            margin: 0 auto clamp(2rem, 4vw, 3.5rem);
            padding: 0 0.5rem;
        }

        .sec-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(0.74rem, 1.8vw, 0.82rem);
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--wp-blue);
            background: var(--wp-blue-50);
            padding: 0.35rem 0.95rem;
            border-radius: 9999px;
            border: 1px solid var(--wp-blue-100);
            margin-bottom: 0.85rem;
            max-width: 100%;
            flex-wrap: wrap;
        }

        .sec-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(1.75rem, 4vw, 2.9rem);
            font-weight: 800;
            color: var(--wp-navy-950);
            line-height: 1.2;
            margin: 0 0 0.85rem;
            letter-spacing: -0.01em;
        }

        .sec-sub {
            font-size: clamp(0.95rem, 2vw, 1.1rem);
            color: var(--wp-text-muted);
            line-height: 1.6;
            margin: 0;
        }

        /* Wipro-Style Visual Split Banner (Image + Key Insights) */
        .audit-showcase-split {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: clamp(1.5rem, 3.5vw, 3rem);
            align-items: center;
            margin-bottom: 3.5rem;
            background: #F8FAFC;
            border: 1px solid #E2E8F0;
            border-radius: 24px;
            overflow: hidden;
            padding: clamp(1.5rem, 3vw, 2.5rem);
        }

        .audit-showcase-img-wrap {
            position: relative;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 12px 35px rgba(0, 15, 36, 0.12);
            height: 100%;
            min-height: 300px;
        }

        .audit-showcase-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .audit-showcase-img-wrap:hover img {
            transform: scale(1.03);
        }

        .audit-showcase-overlay-tag {
            position: absolute;
            bottom: 15px;
            left: 15px;
            right: 15px;
            background: rgba(0, 15, 36, 0.88);
            backdrop-filter: blur(10px);
            padding: 0.85rem 1.15rem;
            border-radius: 12px;
            border: 1px solid rgba(0, 212, 255, 0.3);
            color: #FFFFFF;
            font-size: 0.82rem;
            line-height: 1.45;
        }

        .audit-showcase-overlay-tag strong {
            color: #FFB81C;
            display: block;
            margin-bottom: 2px;
            font-size: 0.9rem;
        }

        /* Audit 3-Node Cards Grid */
        .audit-nodes-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: clamp(1.25rem, 2.5vw, 2rem);
            margin-bottom: clamp(2rem, 4vw, 3.5rem);
            width: 100%;
        }

        .audit-node-card {
            background: #FFFFFF;
            border: 1px solid #E2E8F0;
            border-radius: 20px;
            padding: clamp(1.5rem, 3vw, 2.4rem) clamp(1.15rem, 2.5vw, 2rem);
            box-shadow: 0 8px 30px rgba(0, 15, 36, 0.05);
            position: relative;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            width: 100%;
            overflow: hidden;
        }

        .audit-node-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #0284C7 0%, #38BDF8 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .audit-node-card:hover {
            transform: translateY(-6px);
            border-color: #38BDF8;
            box-shadow: 0 16px 40px rgba(0, 114, 206, 0.12);
        }

        .audit-node-card:hover::before {
            opacity: 1;
        }

        .audit-node-badge {
            width: clamp(48px, 6vw, 58px);
            height: clamp(48px, 6vw, 58px);
            border-radius: 16px;
            background: linear-gradient(135deg, #001B3A 0%, #082A54 100%);
            color: #38BDF8;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: clamp(1.3rem, 2.5vw, 1.6rem);
            margin-bottom: 1.25rem;
            box-shadow: 0 8px 18px rgba(0, 27, 58, 0.2);
            transition: all 0.3s ease;
            flex-shrink: 0;
        }

        .audit-node-card:hover .audit-node-badge {
            background: linear-gradient(135deg, #382356 0%, #26163D 100%);
            color: #FFB81C;
            transform: rotate(5deg) scale(1.05);
        }

        .audit-node-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(1.15rem, 2.5vw, 1.35rem);
            font-weight: 800;
            color: var(--wp-navy-950);
            margin: 0 0 0.35rem;
            line-height: 1.3;
        }

        .audit-node-sub {
            font-size: clamp(0.78rem, 1.8vw, 0.88rem);
            font-weight: 700;
            color: #0369A1;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            margin-bottom: 1.15rem;
        }

        .audit-node-checklist {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
        }

        .audit-node-checklist li {
            font-size: clamp(0.88rem, 1.8vw, 0.94rem);
            color: var(--wp-text-body);
            line-height: 1.5;
            display: flex;
            align-items: flex-start;
            gap: 0.65rem;
        }

        .audit-node-checklist li i {
            color: #10B981;
            margin-top: 0.2rem;
            font-size: 0.9rem;
            flex-shrink: 0;
        }

        /* Audit Deliverables Banner */
        .audit-deliverables-banner {
            background: linear-gradient(135deg, #001228 0%, #001F45 100%);
            border: 1px solid rgba(0, 212, 255, 0.25);
            border-radius: 20px;
            padding: clamp(1.5rem, 3vw, 2.2rem) clamp(1.2rem, 3vw, 2.5rem);
            color: #FFFFFF;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: clamp(1.25rem, 2.5vw, 2rem);
            box-shadow: 0 12px 35px rgba(0, 15, 36, 0.15);
            width: 100%;
        }

        .audit-deliv-item {
            display: flex;
            align-items: flex-start;
            gap: 0.95rem;
        }

        .deliv-check-icon {
            width: clamp(32px, 4vw, 36px);
            height: clamp(32px, 4vw, 36px);
            border-radius: 50%;
            background: rgba(255, 184, 28, 0.16);
            border: 1px solid rgba(255, 184, 28, 0.4);
            color: #FFB81C;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.95rem;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .deliv-content h4 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(0.98rem, 2vw, 1.08rem);
            font-weight: 700;
            color: #FFFFFF;
            margin: 0 0 0.35rem;
            line-height: 1.35;
        }

        .deliv-content p {
            font-size: clamp(0.82rem, 1.8vw, 0.88rem);
            color: #CBD5E1;
            margin: 0;
            line-height: 1.5;
        }

        /* ---------------- SECTION 3: GET CERTIFIED WITH CONFIDENCE ---------------- */
        .sec-certification {
            padding: clamp(3.5rem, 6vw, 5.5rem) 0;
            background: 
                linear-gradient(180deg, rgba(0, 11, 26, 0.96) 0%, rgba(0, 23, 54, 0.94) 100%),
                url('https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&w=2000&q=80') center center / cover no-repeat;
            color: #FFFFFF;
            position: relative;
            border-top: 1px solid rgba(0, 212, 255, 0.25);
            border-bottom: 1px solid rgba(0, 212, 255, 0.25);
            width: 100%;
        }

        .cert-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: clamp(2rem, 4vw, 3.5rem);
            align-items: center;
            position: relative;
            z-index: 2;
            width: 100%;
        }

        .ncsc-certificate-wrapper {
            position: relative;
            background: #FFFFFF;
            border-radius: 16px;
            padding: clamp(1.5rem, 3.5vw, 2.5rem) clamp(1.15rem, 3vw, 2.25rem);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.55), 0 0 35px rgba(0, 212, 255, 0.25);
            border: 4px solid #CBD5E1;
            color: #0F172A;
            text-align: center;
            transition: all 0.35s ease;
            width: 100%;
            max-width: 480px;
            margin: 0 auto;
        }

        .ncsc-certificate-wrapper:hover {
            transform: scale(1.02);
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.65), 0 0 45px rgba(0, 212, 255, 0.4);
        }

        .ncsc-cert-border-inner {
            border: 2px solid #001B3A;
            padding: clamp(1.2rem, 2.5vw, 1.8rem) clamp(0.85rem, 2vw, 1.4rem);
            border-radius: 8px;
            position: relative;
        }

        .ncsc-crest-header {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            margin-bottom: 1.15rem;
        }

        .ncsc-crest-logo {
            width: clamp(34px, 5vw, 44px);
            height: auto;
            flex-shrink: 0;
        }

        .ncsc-crest-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(0.88rem, 2vw, 1.05rem);
            font-weight: 800;
            color: #001B3A;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            line-height: 1.2;
            text-align: left;
        }

        .ncsc-cert-main-badge {
            margin: 1.25rem 0 1rem;
        }

        .ncsc-cert-headline {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(1.45rem, 4vw, 2.1rem);
            font-weight: 800;
            color: #001B3A;
            margin: 0;
            letter-spacing: -0.01em;
        }

        .ncsc-cert-tick-box {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: clamp(54px, 8vw, 70px);
            height: clamp(54px, 8vw, 70px);
            border-radius: 50%;
            background: linear-gradient(135deg, #0284C7 0%, #0369A1 100%);
            color: #FFFFFF;
            font-size: clamp(1.8rem, 4vw, 2.4rem);
            margin: 0.85rem 0;
            box-shadow: 0 8px 20px rgba(2, 132, 199, 0.35);
        }

        .ncsc-cert-subhead {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(0.95rem, 2.5vw, 1.15rem);
            font-weight: 800;
            color: #0284C7;
            text-transform: uppercase;
            letter-spacing: 0.15em;
            margin: 0.25rem 0 1.25rem;
        }

        .ncsc-gold-rosette {
            position: absolute;
            bottom: 12px;
            right: 12px;
            width: clamp(48px, 7vw, 72px);
            height: clamp(48px, 7vw, 72px);
            border-radius: 50%;
            background: radial-gradient(circle, #FDE047 0%, #EAB308 60%, #B45309 100%);
            box-shadow: 0 6px 16px rgba(180, 83, 9, 0.45);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #78350F;
            font-size: clamp(1.2rem, 3vw, 1.8rem);
            border: 2px dashed #FEF08A;
        }

        .cert-info-col h2 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(1.75rem, 4vw, 2.7rem);
            font-weight: 800;
            margin: 0 0 1rem;
            color: #FFFFFF;
            line-height: 1.2;
            letter-spacing: -0.01em;
        }

        .cert-info-col p {
            font-size: clamp(0.95rem, 2vw, 1.05rem);
            color: #CBD5E1;
            line-height: 1.65;
            margin-bottom: 1.5rem;
        }

        .cert-highlight-box {
            background: rgba(0, 212, 255, 0.08);
            border-left: 4px solid #FFB81C;
            border-radius: 0 12px 12px 0;
            padding: clamp(1rem, 2.5vw, 1.25rem) clamp(1rem, 2.5vw, 1.4rem);
            margin-bottom: 1.75rem;
        }

        .cert-highlight-box strong {
            color: #FFB81C;
            display: block;
            margin-bottom: 0.35rem;
            font-size: clamp(0.92rem, 2vw, 1rem);
            line-height: 1.4;
        }

        .cert-highlight-box span {
            font-size: clamp(0.85rem, 1.8vw, 0.92rem);
            color: #E2E8F0;
            line-height: 1.55;
            display: block;
        }

        .cert-benefits-list {
            list-style: none;
            padding: 0;
            margin: 0 0 2rem;
            display: flex;
            flex-direction: column;
            gap: 0.95rem;
        }

        .cert-benefits-list li {
            font-size: clamp(0.88rem, 1.8vw, 0.96rem);
            color: #E2E8F0;
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            line-height: 1.55;
        }

        .cert-benefits-list li i {
            color: #38BDF8;
            font-size: 1.05rem;
            margin-top: 0.15rem;
            flex-shrink: 0;
        }

        /* ---------------- SECTION 4: STRENGTHEN YOUR DEFENCES ---------------- */
        .sec-strengthen-defences {
            padding: clamp(3.5rem, 6vw, 5.5rem) 0;
            background: #F8FAFC;
            position: relative;
            width: 100%;
        }

        .defences-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: clamp(1rem, 2vw, 1.5rem);
            margin-bottom: clamp(2rem, 4vw, 3.5rem);
            width: 100%;
        }

        .defence-card {
            background: #FFFFFF;
            border: 1px solid #E2E8F0;
            border-radius: 18px;
            padding: clamp(1.5rem, 3vw, 2.2rem) clamp(1.15rem, 2vw, 1.6rem);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
            transition: all 0.28s ease;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .defence-card:hover {
            transform: translateY(-6px);
            border-color: #0284C7;
            box-shadow: 0 16px 35px rgba(2, 132, 199, 0.12);
        }

        .defence-icon-ring {
            width: clamp(56px, 7vw, 72px);
            height: clamp(56px, 7vw, 72px);
            border-radius: 50%;
            background: linear-gradient(135deg, #001B3A 0%, #003366 100%);
            border: 2px solid rgba(0, 212, 255, 0.35);
            color: #38BDF8;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: clamp(1.4rem, 2.5vw, 1.8rem);
            margin-bottom: 1.25rem;
            box-shadow: 0 8px 20px rgba(0, 27, 58, 0.18);
            transition: all 0.3s ease;
            flex-shrink: 0;
        }

        .defence-card:hover .defence-icon-ring {
            background: linear-gradient(135deg, #382356 0%, #1D102E 100%);
            border-color: #FFB81C;
            color: #FFB81C;
            transform: scale(1.08);
        }

        .defence-card h3 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(1.05rem, 2.2vw, 1.15rem);
            font-weight: 800;
            color: var(--wp-navy-950);
            margin: 0 0 0.65rem;
            line-height: 1.35;
        }

        .defence-card p {
            font-size: clamp(0.84rem, 1.8vw, 0.88rem);
            color: var(--wp-text-body);
            line-height: 1.55;
            margin: 0;
        }

        /* Ascending Resilience Bar Chart Container */
        .resilience-chart-banner {
            background: linear-gradient(135deg, #001228 0%, #001E42 100%);
            border-radius: 20px;
            padding: clamp(1.5rem, 3.5vw, 2.5rem) clamp(1.2rem, 3.5vw, 3rem);
            color: #FFFFFF;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: clamp(1.75rem, 3vw, 2.5rem);
            align-items: center;
            border: 1px solid rgba(0, 212, 255, 0.25);
            box-shadow: 0 14px 40px rgba(0, 15, 36, 0.18);
            width: 100%;
        }

        .resilience-chart-text h3 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(1.3rem, 3vw, 1.65rem);
            font-weight: 800;
            color: #FFFFFF;
            margin: 0 0 0.75rem;
            line-height: 1.3;
        }

        .resilience-chart-text p {
            font-size: clamp(0.88rem, 1.8vw, 0.96rem);
            color: #CBD5E1;
            line-height: 1.6;
            margin: 0 0 1.25rem;
        }

        .bars-chart-wrapper {
            display: flex;
            align-items: flex-end;
            justify-content: center;
            gap: clamp(8px, 1.8vw, 14px);
            height: clamp(120px, 18vw, 140px);
            padding: 10px 10px 24px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            position: relative;
            width: 100%;
            max-width: 320px;
            margin: 0 auto;
        }

        .chart-bar {
            width: clamp(22px, 5.5vw, 36px);
            border-radius: 6px 6px 0 0;
            background: linear-gradient(180deg, #38BDF8 0%, #0369A1 100%);
            box-shadow: 0 0 12px rgba(56, 189, 248, 0.3);
            transition: all 0.4s ease;
            position: relative;
            flex-shrink: 0;
        }

        .chart-bar:hover {
            background: linear-gradient(180deg, #FFB81C 0%, #D97706 100%);
            box-shadow: 0 0 18px rgba(255, 184, 28, 0.5);
        }

        .bar-label {
            position: absolute;
            bottom: -22px;
            left: 50%;
            transform: translateX(-50%);
            font-size: clamp(0.64rem, 1.5vw, 0.72rem);
            font-weight: 700;
            color: #94A3B8;
            white-space: nowrap;
        }

        .chart-arrow-tag {
            text-align: center;
            margin-top: 1.85rem;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(0.78rem, 1.8vw, 0.92rem);
            font-weight: 800;
            color: #38BDF8;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            line-height: 1.4;
        }

        /* ---------------- SECTION 5: WHY CHOOSE NEXTECK? ---------------- */
        .sec-why-nexteck {
            padding: clamp(3.5rem, 6vw, 5.5rem) 0;
            background: #FFFFFF;
            position: relative;
            width: 100%;
        }

        .why-nexteck-grid {
            display: grid;
            grid-template-columns: 1.05fr 0.95fr;
            gap: clamp(2rem, 4vw, 3.5rem);
            align-items: center;
            width: 100%;
        }

        .why-points-list {
            display: flex;
            flex-direction: column;
            gap: 1.35rem;
            margin: 1.75rem 0 2.25rem;
        }

        .why-point-item {
            display: flex;
            align-items: flex-start;
            gap: clamp(0.85rem, 2vw, 1.15rem);
        }

        .why-point-icon {
            width: clamp(38px, 5vw, 44px);
            height: clamp(38px, 5vw, 44px);
            border-radius: 12px;
            background: rgba(255, 184, 28, 0.15);
            border: 1px solid rgba(255, 184, 28, 0.4);
            color: #FFB81C;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: clamp(1.1rem, 2vw, 1.25rem);
            flex-shrink: 0;
            margin-top: 2px;
        }

        .why-point-text h4 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(1.05rem, 2.2vw, 1.2rem);
            font-weight: 800;
            color: var(--wp-navy-950);
            margin: 0 0 0.35rem;
            line-height: 1.35;
        }

        .why-point-text p {
            font-size: clamp(0.86rem, 1.8vw, 0.94rem);
            color: var(--wp-text-body);
            line-height: 1.55;
            margin: 0;
        }

        /* Senior Advisory Team Visual Card */
        .advisory-team-card {
            background: #F8FAFC;
            border: 1px solid #E2E8F0;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 2rem;
            box-shadow: 0 10px 30px rgba(0, 15, 36, 0.05);
        }

        .advisory-team-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            display: block;
        }

        .advisory-team-body {
            padding: 1.25rem 1.5rem;
        }

        .advisory-team-body h4 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 1.05rem;
            font-weight: 800;
            color: var(--wp-navy-950);
            margin: 0 0 0.35rem;
        }

        .advisory-team-body p {
            font-size: 0.86rem;
            color: var(--wp-text-body);
            margin: 0;
            line-height: 1.5;
        }

        /* Glowing UK Cyber Map Visual */
        .uk-map-card {
            background: radial-gradient(circle at 50% 50%, rgba(3, 27, 56, 0.95) 0%, rgba(0, 11, 26, 0.98) 100%);
            border: 2px solid rgba(0, 212, 255, 0.3);
            border-radius: 24px;
            padding: clamp(1.75rem, 3.5vw, 2.75rem) clamp(1.15rem, 3vw, 2rem);
            text-align: center;
            color: #FFFFFF;
            position: relative;
            box-shadow: 0 20px 50px rgba(0, 15, 36, 0.25), inset 0 0 35px rgba(0, 212, 255, 0.1);
            width: 100%;
            max-width: 460px;
            margin: 0 auto;
        }

        .uk-map-svg {
            max-width: clamp(190px, 35vw, 260px);
            width: 100%;
            height: auto;
            margin: 0 auto 1.25rem;
            filter: drop-shadow(0 0 20px rgba(0, 212, 255, 0.45));
            display: block;
        }

        .uk-map-seal-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(1.2rem, 3vw, 1.45rem);
            font-weight: 800;
            color: #FFFFFF;
            margin: 0 0 0.35rem;
            line-height: 1.3;
        }

        .uk-map-seal-sub {
            font-size: clamp(0.82rem, 2vw, 0.92rem);
            color: #38BDF8;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
        }

        .cyber-bottom-contact-bar {
            background: linear-gradient(135deg, #FFB81C 0%, #F59E0B 100%);
            border-radius: 12px;
            padding: 0.85rem 1.25rem;
            color: #000F24;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(0.92rem, 2vw, 1.05rem);
            font-weight: 800;
            box-shadow: 0 6px 18px rgba(255, 184, 28, 0.35);
            text-decoration: none;
            width: 100%;
            max-width: 380px;
            margin: 0 auto;
            transition: all 0.2s ease;
            min-height: 48px;
            flex-wrap: wrap;
        }

        .cyber-bottom-contact-bar:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 24px rgba(255, 184, 28, 0.45);
        }

        /* ---------------- SECTION: INTERACTIVE AUDIT BOOKING FORM ---------------- */
        .sec-audit-form {
            padding: clamp(3.5rem, 6vw, 5.5rem) 0 clamp(4rem, 7vw, 6rem);
            background: 
                linear-gradient(180deg, rgba(0, 16, 38, 0.96) 0%, rgba(0, 11, 26, 0.98) 100%),
                url('https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=2000&q=80') center center / cover no-repeat;
            color: #FFFFFF;
            position: relative;
            border-top: 2px solid rgba(0, 212, 255, 0.35);
            width: 100%;
        }

        .audit-form-container {
            max-width: 900px;
            margin: 0 auto;
            background: rgba(3, 27, 56, 0.85);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid rgba(0, 212, 255, 0.35);
            border-radius: 24px;
            padding: clamp(1.5rem, 4vw, 3rem) clamp(1rem, 3vw, 3rem);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.45), 0 0 35px rgba(0, 212, 255, 0.15);
            position: relative;
            width: 100%;
        }

        .form-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: clamp(1rem, 2vw, 1.5rem);
            margin-bottom: 1.25rem;
            width: 100%;
        }

        .cyber-form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            margin-bottom: 1.25rem;
            width: 100%;
        }

        .cyber-form-group label {
            font-size: clamp(0.82rem, 1.8vw, 0.88rem);
            font-weight: 700;
            color: #E2E8F0;
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }

        .cyber-form-input,
        .cyber-form-select,
        .cyber-form-textarea {
            width: 100%;
            background: rgba(0, 15, 36, 0.9);
            border: 1px solid rgba(56, 189, 248, 0.35);
            border-radius: 10px;
            padding: 0.85rem 1.15rem;
            color: #FFFFFF;
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            outline: none;
            transition: all 0.22s ease;
            box-sizing: border-box;
            min-height: 48px;
        }

        .cyber-form-input:focus,
        .cyber-form-select:focus,
        .cyber-form-textarea:focus {
            border-color: #00D4FF;
            box-shadow: 0 0 14px rgba(0, 212, 255, 0.35);
            background: rgba(0, 15, 36, 0.98);
        }

        .cyber-form-select option {
            background: #001228;
            color: #FFFFFF;
        }

        .cyber-form-textarea {
            min-height: 110px;
            resize: vertical;
        }

        .form-feedback-alert {
            display: none;
            padding: 1.15rem 1.4rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .form-feedback-alert.is-success {
            display: block;
            background: rgba(16, 185, 129, 0.15);
            border: 1px solid #10B981;
            color: #6EE7B7;
        }

        .form-feedback-alert.is-error {
            display: block;
            background: rgba(239, 68, 68, 0.15);
            border: 1px solid #EF4444;
            color: #FCA5A5;
        }

        /* ---------------- SECTION: INTERACTIVE RISK SELF-CHECKER ---------------- */
        .sec-risk-checker {
            padding: clamp(3rem, 5vw, 4.5rem) 0;
            background: #F1F5F9;
            border-top: 1px solid #E2E8F0;
            width: 100%;
        }

        .checker-card {
            background: #FFFFFF;
            border: 1px solid #E2E8F0;
            border-radius: 20px;
            padding: clamp(1.5rem, 3.5vw, 2.5rem) clamp(1.15rem, 3vw, 2.5rem);
            max-width: 900px;
            margin: 0 auto;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.04);
            width: 100%;
        }

        .checker-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.1rem 0;
            border-bottom: 1px solid #F1F5F9;
            gap: 1.25rem;
            width: 100%;
        }

        .checker-item:last-child {
            border-bottom: none;
        }

        .checker-label {
            font-size: clamp(0.88rem, 2vw, 0.98rem);
            font-weight: 600;
            color: var(--wp-navy-950);
            line-height: 1.45;
        }

        .checker-toggle-wrap {
            display: flex;
            gap: 0.5rem;
            flex-shrink: 0;
        }

        .checker-btn-opt {
            padding: 0.45rem 1rem;
            border-radius: 8px;
            border: 1px solid #CBD5E1;
            background: #FFFFFF;
            font-size: 0.85rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s ease;
            min-height: 40px;
            min-width: 60px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .checker-btn-opt.selected-yes {
            background: #10B981;
            color: #FFFFFF;
            border-color: #10B981;
        }

        .checker-btn-opt.selected-no {
            background: #EF4444;
            color: #FFFFFF;
            border-color: #EF4444;
        }

        .checker-score-output {
            margin-top: 1.85rem;
            padding: clamp(1.25rem, 2.5vw, 1.5rem) clamp(1.2rem, 3vw, 1.8rem);
            border-radius: 14px;
            background: #001228;
            color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1.25rem;
            flex-wrap: wrap;
            width: 100%;
        }

        /* ---------------- SECTION: FAQ ACCORDION ---------------- */
        .sec-cyber-faq {
            padding: clamp(3.5rem, 6vw, 5rem) 0 clamp(4rem, 6vw, 6rem);
            background: #FFFFFF;
            width: 100%;
        }

        .faq-accordion-list {
            max-width: 860px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            width: 100%;
        }

        .faq-item {
            background: #FFFFFF;
            border: 1px solid #E2E8F0;
            border-radius: 14px;
            overflow: hidden;
            transition: all 0.25s ease;
            width: 100%;
        }

        .faq-item.is-open {
            border-color: #38BDF8;
            box-shadow: 0 6px 20px rgba(56, 189, 248, 0.1);
        }

        .faq-question-btn {
            width: 100%;
            text-align: left;
            background: none;
            border: none;
            padding: clamp(1rem, 2vw, 1.25rem) clamp(1rem, 2.5vw, 1.5rem);
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(0.95rem, 2vw, 1.05rem);
            font-weight: 700;
            color: var(--wp-navy-950);
            cursor: pointer;
            gap: 1rem;
            min-height: 48px;
            line-height: 1.4;
        }

        .faq-chevron {
            font-size: 0.85rem;
            color: #64748B;
            transition: transform 0.25s ease;
            flex-shrink: 0;
        }

        .faq-item.is-open .faq-chevron {
            transform: rotate(180deg);
            color: #0284C7;
        }

        .faq-answer-content {
            padding: 0 clamp(1rem, 2.5vw, 1.5rem) 1.25rem;
            font-size: clamp(0.88rem, 1.8vw, 0.95rem);
            line-height: 1.65;
            color: var(--wp-text-body);
            display: none;
        }

        .faq-item.is-open .faq-answer-content {
            display: block;
        }

        /* ---------------- RESPONSIVE BREAKPOINTS ---------------- */
        @media (max-width: 1200px) {
            .defences-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.25rem;
            }
            .framework-pills-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 1080px) {
            .cyber-hero-grid,
            .cert-grid,
            .why-nexteck-grid,
            .audit-showcase-split {
                grid-template-columns: 1fr;
                gap: 2.25rem;
            }
            .cyber-shield-card,
            .ncsc-certificate-wrapper,
            .uk-map-card {
                max-width: 520px;
            }
            .cyber-metrics-card {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.75rem;
            }
            .metric-col:nth-child(2)::after {
                display: none;
            }
            .audit-nodes-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }
            .audit-nodes-grid .audit-node-card:nth-child(3) {
                grid-column: span 2;
            }
            .audit-deliverables-banner {
                grid-template-columns: 1fr;
                gap: 1.35rem;
            }
            .resilience-chart-banner {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 2rem;
            }
            .resilience-chart-text div {
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .framework-pills-grid {
                grid-template-columns: 1fr;
                gap: 0.65rem;
            }
            .framework-pill-item {
                flex-direction: row;
                text-align: left;
                padding: 0.85rem 1rem;
            }
            .cyber-metrics-card {
                grid-template-columns: 1fr 1fr;
                padding: 1.25rem 1rem;
                gap: 1rem;
            }
            .metric-col::after {
                display: none !important;
            }
            .audit-nodes-grid {
                grid-template-columns: 1fr;
            }
            .audit-nodes-grid .audit-node-card:nth-child(3) {
                grid-column: auto;
            }
            .defences-grid {
                grid-template-columns: 1fr;
            }
            .form-grid-2 {
                grid-template-columns: 1fr;
                gap: 0;
            }
            .audit-form-container {
                padding: 2rem 1.25rem;
            }
            .cyber-hero-actions {
                flex-direction: column;
                align-items: stretch;
            }
            .btn-cyber-gold,
            .btn-cyber-ghost {
                width: 100%;
                justify-content: center;
            }
            .resilience-chart-banner {
                padding: 1.75rem 1.25rem;
            }
            .ncsc-certificate-wrapper {
                transform: none !important;
            }
        }

        @media (max-width: 576px) {
            .sec-cyber-hero {
                padding: 3rem 0 3.5rem;
            }
            .cyber-hero-pillars {
                display: grid;
                grid-template-columns: 1fr;
                gap: 0.5rem;
                width: 100%;
            }
            .cyber-pillar-pill {
                justify-content: center;
                width: 100%;
            }
            .cyber-metrics-card {
                grid-template-columns: 1fr;
                gap: 1.25rem;
            }
            .checker-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.85rem;
            }
            .checker-toggle-wrap {
                width: 100%;
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 0.5rem;
            }
            .checker-btn-opt {
                width: 100%;
                min-height: 44px;
            }
            .checker-score-output {
                flex-direction: column;
                align-items: stretch;
                text-align: center;
                gap: 1.15rem;
            }
            .checker-score-output a {
                width: 100%;
                justify-content: center;
            }
            .ncsc-certificate-wrapper {
                padding: 1.25rem 0.85rem;
                border-width: 3px;
            }
            .ncsc-cert-border-inner {
                padding: 1.15rem 0.65rem;
            }
            .ncsc-gold-rosette {
                width: 48px;
                height: 48px;
                font-size: 1.2rem;
                bottom: 8px;
                right: 8px;
            }
            .cyber-bottom-contact-bar {
                font-size: 0.95rem;
                padding: 0.75rem 1rem;
                gap: 0.65rem;
            }
        }

        @media (max-width: 380px) {
            .cyber-hero-title {
                font-size: 1.65rem;
            }
            .bars-chart-wrapper {
                max-width: 270px;
                gap: 6px;
            }
            .chart-bar {
                width: 22px;
            }
            .bar-label {
                font-size: 0.62rem;
            }
            .ncsc-cert-headline {
                font-size: 1.35rem;
            }
            .audit-form-container {
                padding: 1.5rem 0.85rem;
            }
        }
    </style>
</head>

<body>
    @include('partials.header')

    <!-- ==========================================================================
         SECTION 1: HERO & THREAT PROTECTION OVERVIEW (Matching Column 1)
         ========================================================================== -->
    <section class="sec-cyber-hero" id="overview">
        <div class="wp-wrap">
            <div class="cyber-hero-grid">
                <div>
                    <div class="cyber-badge-tag">
                        <span class="cyber-pulse-dot"></span>
                        <span>Nexteck &bull; Secure Today. Stronger Tomorrow.</span>
                    </div>

                    <h1 class="cyber-hero-title">
                        Protect Your Business from <span class="cyber-text-gradient">Cyber Threats</span>
                    </h1>

                    <p class="cyber-hero-sub">
                        Comprehensive Cyber Security Solutions for UK SMEs. Technical infrastructure audits, NCSC Cyber Essentials certification, and end-to-end resilience frameworks.
                    </p>

                    <!-- Assess | Secure | Comply Pillars -->
                    <div class="cyber-hero-pillars">
                        <div class="cyber-pillar-pill">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Assess</span>
                        </div>
                        <div class="cyber-pillar-pill">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Secure</span>
                        </div>
                        <div class="cyber-pillar-pill">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Comply</span>
                        </div>
                    </div>

                    <div class="cyber-hero-actions">
                        <a href="#audit-form" class="btn-cyber-gold">
                            <span>Get Your Cyber Security Audit Today</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="tel:07879175585" class="btn-cyber-ghost" title="Direct Cyber Security Consultation Hotline">
                            <i class="fa-solid fa-phone" style="color:#10B981;"></i>
                            <span>07879 175585</span>
                        </a>
                    </div>

                    <div style="margin-top:1.85rem; display:flex; align-items:center; gap:0.9rem; font-size:clamp(0.78rem, 1.8vw, 0.85rem); color:#94A3B8; flex-wrap:wrap;">
                        <i class="fa-solid fa-shield-virus" style="color:#38BDF8; font-size:1.1rem; flex-shrink:0;"></i>
                        <span>Over 50% of UK SMEs suffer a cyber breach annually &bull; 80% preventable with Cyber Essentials</span>
                    </div>
                </div>

                <!-- London Skyline & Glowing Cyber Shield Card Visual (from Column 1) -->
                <div>
                    <div class="cyber-shield-card">
                        <div class="hero-img-backdrop"></div>
                        <div class="shield-icon-wrapper">
                            <!-- SVG Glowing Cyber Shield -->
                            <svg class="shield-svg-shape" viewBox="0 0 140 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M70 5 L130 25 V85 C130 120 70 152 70 152 C70 152 10 120 10 85 V25 L70 5 Z" 
                                      fill="url(#shieldGrad)" stroke="#00D4FF" stroke-width="3" />
                                <defs>
                                    <linearGradient id="shieldGrad" x1="10" y1="5" x2="130" y2="152" gradientUnits="userSpaceOnUse">
                                        <stop offset="0%" stop-color="#001B3A" stop-opacity="0.9" />
                                        <stop offset="50%" stop-color="#0284C7" stop-opacity="0.3" />
                                        <stop offset="100%" stop-color="#000F24" stop-opacity="0.95" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <i class="fa-solid fa-lock shield-lock-icon"></i>
                        </div>

                        <!-- London Landmarks Silhouette (Big Ben, London Eye, Tower Bridge) -->
                        <svg class="london-skyline-silhouette" viewBox="0 0 400 90" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                            <!-- Thames water line -->
                            <line x1="0" y1="85" x2="400" y2="85" stroke="#00D4FF" stroke-width="1.5" stroke-dasharray="4 4" opacity="0.6"/>
                            <!-- Big Ben / Elizabeth Tower -->
                            <rect x="75" y="25" width="22" height="60" fill="#002244" stroke="#00D4FF" stroke-width="1"/>
                            <polygon points="75,25 86,5 97,25" fill="#0284C7" stroke="#00D4FF" stroke-width="1"/>
                            <circle cx="86" cy="36" r="5" fill="#FFB81C" />
                            <!-- Westminster Palace roofline -->
                            <rect x="40" y="55" width="35" height="30" fill="#001A36"/>
                            <rect x="97" y="55" width="45" height="30" fill="#001A36"/>
                            <!-- The Shard silhouette -->
                            <polygon points="180,85 200,10 220,85" fill="#001F3F" stroke="#38BDF8" stroke-width="1"/>
                            <!-- London Eye wheel -->
                            <circle cx="280" cy="45" r="32" stroke="#38BDF8" stroke-width="1.8" stroke-dasharray="3 3"/>
                            <circle cx="280" cy="45" r="6" fill="#FFB81C"/>
                            <line x1="280" y1="45" x2="280" y2="85" stroke="#38BDF8" stroke-width="2"/>
                            <!-- London Gherkin / 30 St Mary Axe -->
                            <ellipse cx="345" cy="55" rx="14" ry="28" fill="#002244" stroke="#00D4FF" stroke-width="1"/>
                        </svg>

                        <div class="cyber-shield-caption">
                            <strong>UK SME Cyber Defense Hub</strong> &bull; Fortified London &amp; National Coverage
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         WIPRO-STYLE ENTERPRISE TRUST METRICS STRIP
         ========================================================================== -->
    <div class="wp-wrap cyber-metrics-strip">
        <div class="cyber-metrics-card">
            <div class="metric-col">
                <div class="metric-number">50%+</div>
                <div class="metric-label">UK SMEs targeted by cyber breaches annually</div>
            </div>
            <div class="metric-col">
                <div class="metric-number">£12,050</div>
                <div class="metric-label">Average financial impact of an SME data breach</div>
            </div>
            <div class="metric-col">
                <div class="metric-number">80%+</div>
                <div class="metric-label">Common attacks blocked via Cyber Essentials</div>
            </div>
            <div class="metric-col">
                <div class="metric-number">100%</div>
                <div class="metric-label">UK Government &amp; Enterprise tender qualification</div>
            </div>
        </div>
    </div>

    <!-- ==========================================================================
         IN-PAGE CAPABILITY & FRAMEWORK NAVIGATOR
         (Placed organically inside page content - clean & unencumbered header!)
         ========================================================================== -->
    <section class="sec-framework-navigator">
        <div class="wp-wrap">
            <div class="framework-nav-box">
                <div class="framework-nav-header">
                    <div class="framework-nav-title">
                        <i class="fa-solid fa-compass" style="color:#0284C7;"></i>
                        <span>Explore The 5 Core Cyber Security Pillars</span>
                    </div>
                    <span class="framework-nav-badge">Interactive Module Navigator</span>
                </div>

                <div class="framework-pills-grid">
                    <a href="#overview" class="framework-pill-item is-active">
                        <div class="framework-pill-icon"><i class="fa-solid fa-shield-halved"></i></div>
                        <span class="framework-pill-name">1. Threat Protection</span>
                        <span class="framework-pill-desc">Perimeter &amp; attack defense</span>
                    </a>

                    <a href="#audit" class="framework-pill-item">
                        <div class="framework-pill-icon"><i class="fa-solid fa-laptop-code"></i></div>
                        <span class="framework-pill-name">2. System Audit</span>
                        <span class="framework-pill-desc">Technical &amp; operational review</span>
                    </a>

                    <a href="#certification" class="framework-pill-item">
                        <div class="framework-pill-icon"><i class="fa-solid fa-certificate"></i></div>
                        <span class="framework-pill-name">3. NCSC Cert</span>
                        <span class="framework-pill-desc">Cyber Essentials accreditation</span>
                    </a>

                    <a href="#defences" class="framework-pill-item">
                        <div class="framework-pill-icon"><i class="fa-solid fa-lock"></i></div>
                        <span class="framework-pill-name">4. Defences</span>
                        <span class="framework-pill-desc">Data &amp; regulatory resilience</span>
                    </a>

                    <a href="#why-us" class="framework-pill-item">
                        <div class="framework-pill-icon"><i class="fa-solid fa-award"></i></div>
                        <span class="framework-pill-name">5. Why Nexteck</span>
                        <span class="framework-pill-desc">Senior UK architect advantage</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         SECTION 2: END-TO-END SYSTEM AUDIT (Matching Column 2)
         ========================================================================== -->
    <section class="sec-system-audit" id="audit">
        <div class="wp-wrap">
            <div class="sec-header">
                <span class="sec-eyebrow"><i class="fa-solid fa-microchip"></i> Section 2 &bull; Technical &amp; Operational</span>
                <h2 class="sec-title">End-to-End System Audit</h2>
                <p class="sec-sub">
                    A rigorous 360-degree review of your digital estate. We uncover hidden vulnerabilities, inspect daily operational processes, and ensure bulletproof compliance across your entire technology stack.
                </p>
            </div>

            <!-- Enterprise Image & Technical Audit Showcase (Wipro Style) -->
            <div class="audit-showcase-split">
                <div class="audit-showcase-img-wrap">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=1200&q=80" alt="Cloud and server infrastructure cybersecurity audit" loading="lazy">
                    <div class="audit-showcase-overlay-tag">
                        <strong><i class="fa-solid fa-shield-halved"></i> Active Vulnerability &amp; Cloud Tenant Scanning</strong>
                        <span>Inspecting Microsoft 365, AWS, Azure, on-prem firewalls, and active directory permissions.</span>
                    </div>
                </div>

                <div>
                    <span class="sec-eyebrow" style="background:#E0F2FE; color:#0369A1; border-color:#BAE6FD;">
                        <i class="fa-solid fa-chart-pie"></i> Diagnostic Scope
                    </span>
                    <h3 style="font-family:'Plus Jakarta Sans'; font-size:clamp(1.35rem, 2.5vw, 1.75rem); font-weight:800; color:var(--wp-navy-950); margin:0.5rem 0 1rem; line-height:1.25;">
                        Complete Infrastructure Visibility Before Threat Actors Intervene
                    </h3>
                    <p style="font-size:0.95rem; color:var(--wp-text-body); line-height:1.65; margin-bottom:1.5rem;">
                        Our senior ethical penetration testers simulate real-world commodity and targeted attacks against your external IP addresses, domain registrars, remote-access VPNs, and internal cloud configurations.
                    </p>

                    <div style="display:flex; flex-direction:column; gap:0.75rem;">
                        <div style="display:flex; align-items:center; gap:0.75rem; font-size:0.92rem; color:var(--wp-navy-950); font-weight:600;">
                            <i class="fa-solid fa-circle-check" style="color:#10B981; font-size:1.1rem;"></i>
                            <span>Zero-downtime non-intrusive scanning protocol</span>
                        </div>
                        <div style="display:flex; align-items:center; gap:0.75rem; font-size:0.92rem; color:var(--wp-navy-950); font-weight:600;">
                            <i class="fa-solid fa-circle-check" style="color:#10B981; font-size:1.1rem;"></i>
                            <span>Prioritised 1-to-30 day fix list ranked by risk severity</span>
                        </div>
                        <div style="display:flex; align-items:center; gap:0.75rem; font-size:0.92rem; color:var(--wp-navy-950); font-weight:600;">
                            <i class="fa-solid fa-circle-check" style="color:#10B981; font-size:1.1rem;"></i>
                            <span>Boardroom-ready executive summary &amp; technical reports</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- The 3 Node Cards matching Column 2 Graphic -->
            <div class="audit-nodes-grid">
                <!-- 1. Technical Audit -->
                <div class="audit-node-card">
                    <div class="audit-node-badge">
                        <i class="fa-solid fa-server"></i>
                    </div>
                    <h3 class="audit-node-title">Technical Audit</h3>
                    <div class="audit-node-sub">Network &amp; Perimeter Defense</div>
                    <ul class="audit-node-checklist">
                        <li><i class="fa-solid fa-circle-check"></i> <strong>Port &amp; IP Vulnerability Scans:</strong> Detect open listening ports, insecure protocols &amp; legacy hardware.</li>
                        <li><i class="fa-solid fa-circle-check"></i> <strong>Firewall &amp; Gateway Rules:</strong> Deep inspection of router configurations, NAT rules &amp; DMZ security.</li>
                        <li><i class="fa-solid fa-circle-check"></i> <strong>Cloud Tenant Posture:</strong> Microsoft 365, Azure, AWS and Google Workspace security benchmarks.</li>
                        <li><i class="fa-solid fa-circle-check"></i> <strong>Patch &amp; OS Hygiene:</strong> Identification of end-of-life operating systems and zero-day vulnerabilities.</li>
                    </ul>
                </div>

                <!-- 2. Operational Review -->
                <div class="audit-node-card">
                    <div class="audit-node-badge">
                        <i class="fa-solid fa-user-shield"></i>
                    </div>
                    <h3 class="audit-node-title">Operational Review</h3>
                    <div class="audit-node-sub">Processes &amp; Access Controls</div>
                    <ul class="audit-node-checklist">
                        <li><i class="fa-solid fa-circle-check"></i> <strong>Identity &amp; Privileged Access:</strong> Review administrative rights, least-privilege policies &amp; orphaned accounts.</li>
                        <li><i class="fa-solid fa-circle-check"></i> <strong>MFA &amp; Credential Hygiene:</strong> Verify multi-factor authentication enforcement across all staff logins.</li>
                        <li><i class="fa-solid fa-circle-check"></i> <strong>BYOD &amp; Remote Work Policies:</strong> Secure mobile device management (MDM) and encrypted home-worker access.</li>
                        <li><i class="fa-solid fa-circle-check"></i> <strong>Backup &amp; Disaster Recovery:</strong> Verify immutable offsite backups and ransomware restoration readiness.</li>
                    </ul>
                </div>

                <!-- 3. Risk Assessment -->
                <div class="audit-node-card">
                    <div class="audit-node-badge">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <h3 class="audit-node-title">Risk Assessment</h3>
                    <div class="audit-node-sub">Business Impact &amp; Threat Surface</div>
                    <ul class="audit-node-checklist">
                        <li><i class="fa-solid fa-circle-check"></i> <strong>Attack Surface Mapping:</strong> Assess third-party vendor risks, external APIs &amp; supply chain links.</li>
                        <li><i class="fa-solid fa-circle-check"></i> <strong>Phishing Simulation:</strong> Benchmark employee susceptibility to modern social engineering schemes.</li>
                        <li><i class="fa-solid fa-circle-check"></i> <strong>Business Impact Analysis:</strong> Model operational downtime costs and financial impact of an incident.</li>
                        <li><i class="fa-solid fa-circle-check"></i> <strong>Prioritised Remediation Plan:</strong> Clear, non-technical 30-day action plan ranked by business criticality.</li>
                    </ul>
                </div>
            </div>

            <!-- Deliverables Highlight Banner matching Column 2 Checkpoints -->
            <div class="audit-deliverables-banner">
                <div class="audit-deliv-item">
                    <div class="deliv-check-icon">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <div class="deliv-content">
                        <h4>Identify Vulnerabilities</h4>
                        <p>Locate technical loopholes, unpatched software, and configuration oversights before threat actors find them.</p>
                    </div>
                </div>

                <div class="audit-deliv-item">
                    <div class="deliv-check-icon">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <div class="deliv-content">
                        <h4>Review Processes &amp; Access</h4>
                        <p>Lock down privileged accounts, enforce strong multi-factor authentication, and govern third-party contractor access.</p>
                    </div>
                </div>

                <div class="audit-deliv-item">
                    <div class="deliv-check-icon">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <div class="deliv-content">
                        <h4>Assess Compliance</h4>
                        <p>Benchmark systems against UK GDPR, Data Protection Act 2018, and corporate supply chain tender requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         SECTION 3: GET CERTIFIED WITH CONFIDENCE (Matching Column 3)
         ========================================================================== -->
    <section class="sec-certification" id="certification">
        <div class="wp-wrap">
            <div class="cert-grid">
                <!-- Left: Certificate Showcase from Column 3 -->
                <div>
                    <div class="ncsc-certificate-wrapper">
                        <div class="ncsc-cert-border-inner">
                            <!-- NCSC Crown Logo & Header -->
                            <div class="ncsc-crest-header">
                                <svg class="ncsc-crest-logo" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 4 L30 14 L42 16 L32 24 L35 36 L24 30 L13 36 L16 24 L6 16 L18 14 Z" fill="#001B3A"/>
                                    <circle cx="24" cy="24" r="8" fill="#FFB81C"/>
                                </svg>
                                <div class="ncsc-crest-title">
                                    National Cyber<br>Security Centre
                                </div>
                            </div>

                            <div class="ncsc-cert-main-badge">
                                <h3 class="ncsc-cert-headline">Cyber Essentials</h3>
                                <div class="ncsc-cert-tick-box">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <div class="ncsc-cert-subhead">CERTIFIED</div>
                            </div>

                            <p style="font-size:clamp(0.8rem, 1.8vw, 0.85rem); color:#475569; margin:0 0 1rem; line-height:1.45;">
                                This certifies that the organization has been independently evaluated and adheres to the five technical controls of the UK Cyber Essentials scheme.
                            </p>

                            <!-- IASME Licensed Body Badge Stamp -->
                            <div style="font-size:clamp(0.72rem, 1.6vw, 0.75rem); color:#64748B; font-weight:600; border-top:1px dashed #CBD5E1; padding-top:0.75rem; line-height:1.35;">
                                Assessed &amp; Awarded through an IASME-licensed Certification Body
                            </div>

                            <!-- Gold Ribbon Rosette Stamp in corner -->
                            <div class="ncsc-gold-rosette" title="Official Gold Verification Seal">
                                <i class="fa-solid fa-award"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Information & Why UK SMEs Need Certification -->
                <div class="cert-info-col">
                    <span class="sec-eyebrow" style="background:rgba(0,212,255,0.1); color:#38BDF8; border-color:rgba(0,212,255,0.3);">
                        <i class="fa-solid fa-shield"></i> Section 3 &bull; Official NCSC Accreditation
                    </span>

                    <h2>Get Certified with Confidence</h2>

                    <p>
                        Receive an official Cyber Security Certificate from the <strong>National Cyber Security Centre (NCSC)</strong>, UK. Nexteck guides your team end-to-end through every phase of the assessment to ensure a guaranteed, stress-free pass.
                    </p>

                    <div class="cert-highlight-box">
                        <strong><i class="fa-solid fa-certificate"></i> Verified IASME-Licensed Certification</strong>
                        <span>Certification is assessed and awarded through an IASME-licensed Certification Body, recognized by the UK Cabinet Office, Ministry of Defence, and NHS England.</span>
                    </div>

                    <ul class="cert-benefits-list">
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span><strong>Win High-Value UK Contracts:</strong> Mandatory requirement for bidding on UK Government, public sector, and enterprise supply chain tenders.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span><strong>Defend Against 80% of Cyber Attacks:</strong> Enforces the 5 essential technical controls (firewalls, secure configuration, access control, malware defence, patch management).</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span><strong>Lower Cyber Insurance Premiums:</strong> UK insurers prioritize certified SMEs, offering significantly discounted policy premiums.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span><strong>Cyber Essentials Plus Available:</strong> Upgrade to full technical vulnerability testing and hands-on verified assurance.</span>
                        </li>
                    </ul>

                    <a href="#audit-form" class="btn-cyber-gold">
                        <span>Start Your Certification Pathway</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         SECTION 4: STRENGTHEN YOUR DEFENCES (Matching Column 4)
         ========================================================================== -->
    <section class="sec-strengthen-defences" id="defences">
        <div class="wp-wrap">
            <div class="sec-header">
                <span class="sec-eyebrow"><i class="fa-solid fa-shield-virus"></i> Section 4 &bull; Reduce Risk &bull; Build Resilience</span>
                <h2 class="sec-title">Strengthen Your Defences</h2>
                <p class="sec-sub">
                    Transform your security posture from reactive firefighter to proactive fortress. We protect what matters most: your revenue, customer data, and commercial reputation.
                </p>
            </div>

            <!-- The 4 Defense Pillar Cards with Icons from Column 4 -->
            <div class="defences-grid">
                <!-- 1. Prevent Cyber Attacks (Shield Icon) -->
                <div class="defence-card">
                    <div class="defence-icon-ring">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3>Prevent Cyber Attacks</h3>
                    <p>
                        Block ransomware, phishing campaigns, zero-day malware, and DDoS attempts before they disrupt business continuity.
                    </p>
                </div>

                <!-- 2. Protect Sensitive Data (Padlock Icon) -->
                <div class="defence-card">
                    <div class="defence-icon-ring">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <h3>Protect Sensitive Data</h3>
                    <p>
                        Secure client financial records, employee PII, intellectual property, and payment systems with military-grade encryption.
                    </p>
                </div>

                <!-- 3. Build Customer Trust (Handshake Icon) -->
                <div class="defence-card">
                    <div class="defence-icon-ring">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <h3>Build Customer Trust</h3>
                    <p>
                        Prove to clients, enterprise procurement directors, and partners that their confidential data is guarded by vetted professionals.
                    </p>
                </div>

                <!-- 4. Stay Compliant with UK Regulations (Scales of Justice Icon) -->
                <div class="defence-card">
                    <div class="defence-icon-ring">
                        <i class="fa-solid fa-scale-balanced"></i>
                    </div>
                    <h3>Stay Compliant with UK Regulations</h3>
                    <p>
                        Safeguard against crippling Information Commissioner’s Office (ICO) fines by strictly complying with UK GDPR &amp; DPA 2018.
                    </p>
                </div>
            </div>

            <!-- Ascending Resilience Growth Chart Banner matching Column 4 graphic -->
            <div class="resilience-chart-banner">
                <div class="resilience-chart-text">
                    <span class="sec-eyebrow" style="background:rgba(255,184,28,0.15); color:#FFB81C; border-color:rgba(255,184,28,0.3); margin-bottom:0.75rem;">
                        <i class="fa-solid fa-chart-line"></i> Enterprise Resilience Trajectory
                    </span>
                    <h3>A More Secure and Resilient Business</h3>
                    <p>
                        Moving from unmonitored legacy IT to active continuous protection reduces annual cyber downtime by up to 94% and insulates your business against operational disruption.
                    </p>
                    <div style="display:flex; gap:1.25rem; flex-wrap:wrap; font-size:clamp(0.82rem, 1.8vw, 0.88rem); color:#93C5FD;">
                        <span><i class="fa-solid fa-check" style="color:#10B981;"></i> 99.9% Uptime Protection</span>
                        <span><i class="fa-solid fa-check" style="color:#10B981;"></i> Real-Time Threat Alerts</span>
                        <span><i class="fa-solid fa-check" style="color:#10B981;"></i> Zero Ransomware Liability</span>
                    </div>
                </div>

                <!-- Ascending 5-bar resilience chart visualization -->
                <div>
                    <div class="bars-chart-wrapper">
                        <div class="chart-bar" style="height: 30px;" title="Stage 1: Vulnerable Legacy IT">
                            <span class="bar-label">Stage 1</span>
                        </div>
                        <div class="chart-bar" style="height: 55px;" title="Stage 2: Audit &amp; Fixes">
                            <span class="bar-label">Stage 2</span>
                        </div>
                        <div class="chart-bar" style="height: 80px;" title="Stage 3: Cyber Essentials">
                            <span class="bar-label">Stage 3</span>
                        </div>
                        <div class="chart-bar" style="height: 105px;" title="Stage 4: Active Defense">
                            <span class="bar-label">Stage 4</span>
                        </div>
                        <div class="chart-bar" style="height: 130px; background:linear-gradient(180deg,#FFB81C 0%,#D97706 100%); box-shadow:0 0 18px rgba(255,184,28,0.6);" title="Stage 5: Fully Certified Resilience">
                            <span class="bar-label" style="color:#FFB81C;">Resilient</span>
                        </div>
                    </div>
                    <div class="chart-arrow-tag">
                        <i class="fa-solid fa-arrow-trend-up"></i> Measurable Risk Reduction &amp; Growth
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         SECTION 5: WHY CHOOSE NEXTECK? (Matching Column 5)
         ========================================================================== -->
    <section class="sec-why-nexteck" id="why-us">
        <div class="wp-wrap">
            <div class="why-nexteck-grid">
                <div>
                    <span class="sec-eyebrow"><i class="fa-solid fa-star"></i> Section 5 &bull; The Nexteck Advantage</span>
                    <h2 class="sec-title">Why Choose Nexteck?</h2>
                    <p class="sec-sub">
                        Unlike generic IT ticketing companies that resell software packages, Nexteck is a dedicated UK architecture and cyber consultancy designed specifically for growing SMEs.
                    </p>

                    <!-- Senior Advisory Image Card (Wipro Enterprise Style) -->
                    <div class="advisory-team-card">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1000&q=80" alt="Nexteck Senior Cyber Security Architecture Consultation" loading="lazy">
                        <div class="advisory-team-body">
                            <h4>Direct Access to Principal Cyber Architects</h4>
                            <p>Every assessment is spearheaded by seasoned UK engineers with tier-1 enterprise backgrounds across banking, rail, and manufacturing.</p>
                        </div>
                    </div>

                    <div class="why-points-list">
                        <!-- 1. Expert-Led Assessments -->
                        <div class="why-point-item">
                            <div class="why-point-icon">
                                <i class="fa-solid fa-user-check"></i>
                            </div>
                            <div class="why-point-text">
                                <h4>Expert-Led Assessments</h4>
                                <p>Every audit is personally directed by senior UK security architects with tier-1 enterprise experience — never handed off to junior trainees or automated bots.</p>
                            </div>
                        </div>

                        <!-- 2. Government-Backed Certification -->
                        <div class="why-point-item">
                            <div class="why-point-icon">
                                <i class="fa-solid fa-landmark"></i>
                            </div>
                            <div class="why-point-text">
                                <h4>Government-Backed Certification</h4>
                                <p>Official pathways to NCSC Cyber Essentials and Cyber Essentials Plus, assessed through an accredited IASME-licensed certification body.</p>
                            </div>
                        </div>

                        <!-- 3. Practical Action Plan -->
                        <div class="why-point-item">
                            <div class="why-point-icon">
                                <i class="fa-solid fa-list-check"></i>
                            </div>
                            <div class="why-point-text">
                                <h4>Practical Action Plan</h4>
                                <p>No 200-page academic PDFs or confusing acronyms. You receive a crystal-clear, prioritised 30-day remediation roadmap that fits your SME budget.</p>
                            </div>
                        </div>

                        <!-- 4. Ongoing Support -->
                        <div class="why-point-item">
                            <div class="why-point-icon">
                                <i class="fa-solid fa-headset"></i>
                            </div>
                            <div class="why-point-text">
                                <h4>Ongoing Support</h4>
                                <p>Continuous security advisory, quarterly compliance check-ins, annual re-certification management, and rapid incident assistance whenever you need us.</p>
                            </div>
                        </div>
                    </div>

                    <a href="#audit-form" class="btn-cyber-gold">
                        <span>Secure Your Business Today</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Right: UK Cyber Network Map Card Visual from Column 5 -->
                <div>
                    <div class="uk-map-card">
                        <!-- Glowing Digital UK Map SVG -->
                        <svg class="uk-map-svg" viewBox="0 0 260 340" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                            <!-- British Isles Simplified Mesh Silhouette -->
                            <!-- Scotland -->
                            <path d="M120 15 L145 25 L160 50 L140 75 L115 85 L95 65 L105 35 Z" stroke="#38BDF8" stroke-width="1.5" fill="rgba(0,212,255,0.06)"/>
                            <!-- Northern England & Midlands -->
                            <path d="M115 85 L145 95 L165 140 L150 185 L110 185 L95 135 Z" stroke="#38BDF8" stroke-width="1.5" fill="rgba(0,212,255,0.08)"/>
                            <!-- Wales -->
                            <path d="M85 160 L110 165 L105 210 L75 200 L70 175 Z" stroke="#38BDF8" stroke-width="1.5" fill="rgba(0,212,255,0.06)"/>
                            <!-- Southern England & London -->
                            <path d="M110 185 L150 185 L195 210 L190 255 L85 250 L85 220 Z" stroke="#38BDF8" stroke-width="1.5" fill="rgba(0,212,255,0.12)"/>
                            <!-- Northern Ireland -->
                            <path d="M45 110 L70 105 L75 135 L50 145 Z" stroke="#38BDF8" stroke-width="1.5" fill="rgba(0,212,255,0.05)"/>

                            <!-- Interconnecting Mesh Lines -->
                            <line x1="125" y1="50" x2="135" y2="120" stroke="#00D4FF" stroke-width="1" stroke-dasharray="2 3"/>
                            <line x1="135" y1="120" x2="155" y2="230" stroke="#00D4FF" stroke-width="1" stroke-dasharray="2 3"/>
                            <line x1="155" y1="230" x2="100" y2="185" stroke="#00D4FF" stroke-width="1" stroke-dasharray="2 3"/>
                            <line x1="135" y1="120" x2="60" y2="125" stroke="#00D4FF" stroke-width="1" stroke-dasharray="2 3"/>

                            <!-- Hub Nodes (Glowing Dots) -->
                            <!-- London (Major Hub) -->
                            <circle cx="155" cy="230" r="7" fill="#FFB81C" filter="drop-shadow(0 0 10px #FFB81C)"/>
                            <circle cx="155" cy="230" r="14" stroke="#FFB81C" stroke-width="1" opacity="0.6"/>
                            <text x="170" y="235" fill="#FFFFFF" font-size="11" font-weight="700" font-family="'Plus Jakarta Sans'">London HQ</text>

                            <!-- Manchester / Leeds -->
                            <circle cx="130" cy="130" r="4.5" fill="#00D4FF"/>
                            <text x="142" y="134" fill="#93C5FD" font-size="10" font-family="'Plus Jakarta Sans'">North Hub</text>

                            <!-- Birmingham / Midlands -->
                            <circle cx="125" cy="180" r="4.5" fill="#00D4FF"/>
                            <text x="137" y="184" fill="#93C5FD" font-size="10" font-family="'Plus Jakarta Sans'">Midlands</text>

                            <!-- Edinburgh / Glasgow -->
                            <circle cx="125" cy="55" r="4.5" fill="#00D4FF"/>
                            <text x="137" y="59" fill="#93C5FD" font-size="10" font-family="'Plus Jakarta Sans'">Scotland</text>
                        </svg>

                        <div class="uk-map-seal-title">Nexteck Cyber Security</div>
                        <div class="uk-map-seal-sub">Trusted. Certified. Ready.</div>

                        <!-- Contact Banner matching flyer bottom -->
                        <a href="tel:07879175585" class="cyber-bottom-contact-bar" title="Direct Phone Helpline">
                            <i class="fa-solid fa-phone"></i>
                            <span>07879 175585</span>
                        </a>

                        <div style="margin-top:1rem; font-size:clamp(0.75rem, 1.6vw, 0.8rem); color:#94A3B8; line-height:1.4;">
                            <span>Official UK SME Security Operations &bull; London &bull; Nationwide</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         INTERACTIVE FEATURE: SME CYBER RISK SELF-CHECKER
         ========================================================================== -->
    <section class="sec-risk-checker" id="risk-check">
        <div class="wp-wrap">
            <div class="sec-header" style="margin-bottom:2rem;">
                <span class="sec-eyebrow"><i class="fa-solid fa-gauge"></i> Interactive Tool</span>
                <h2 class="sec-title" style="font-size:clamp(1.6rem, 3.5vw, 2.2rem);">Quick SME Cyber Risk Self-Checker</h2>
                <p class="sec-sub">Answer 5 simple yes/no questions to test your business readiness against common UK attack vectors.</p>
            </div>

            <div class="checker-card">
                <div class="checker-item">
                    <span class="checker-label">1. Is Multi-Factor Authentication (MFA) strictly enforced on all employee emails &amp; cloud accounts?</span>
                    <div class="checker-toggle-wrap">
                        <button type="button" class="checker-btn-opt" onclick="setChecker(0, true, this)">YES</button>
                        <button type="button" class="checker-btn-opt" onclick="setChecker(0, false, this)">NO</button>
                    </div>
                </div>

                <div class="checker-item">
                    <span class="checker-label">2. Are all company data backups stored offsite, fully encrypted, and tested for recovery within the last 90 days?</span>
                    <div class="checker-toggle-wrap">
                        <button type="button" class="checker-btn-opt" onclick="setChecker(1, true, this)">YES</button>
                        <button type="button" class="checker-btn-opt" onclick="setChecker(1, false, this)">NO</button>
                    </div>
                </div>

                <div class="checker-item">
                    <span class="checker-label">3. Do you have an active software patch management policy updating operating systems within 14 days of release?</span>
                    <div class="checker-toggle-wrap">
                        <button type="button" class="checker-btn-opt" onclick="setChecker(2, true, this)">YES</button>
                        <button type="button" class="checker-btn-opt" onclick="setChecker(2, false, this)">NO</button>
                    </div>
                </div>

                <div class="checker-item">
                    <span class="checker-label">4. Have all staff completed cyber security awareness &amp; phishing prevention training in the past 12 months?</span>
                    <div class="checker-toggle-wrap">
                        <button type="button" class="checker-btn-opt" onclick="setChecker(3, true, this)">YES</button>
                        <button type="button" class="checker-btn-opt" onclick="setChecker(3, false, this)">NO</button>
                    </div>
                </div>

                <div class="checker-item">
                    <span class="checker-label">5. Has your organisation achieved or renewed NCSC Cyber Essentials certification within the last year?</span>
                    <div class="checker-toggle-wrap">
                        <button type="button" class="checker-btn-opt" onclick="setChecker(4, true, this)">YES</button>
                        <button type="button" class="checker-btn-opt" onclick="setChecker(4, false, this)">NO</button>
                    </div>
                </div>

                <!-- Instant Score Output -->
                <div class="checker-score-output" id="checkerResultBox">
                    <div>
                        <div style="font-size:0.85rem; color:#94A3B8; text-transform:uppercase; letter-spacing:0.05em;">Estimated Security Health</div>
                        <div id="checkerScoreTitle" style="font-family:'Plus Jakarta Sans'; font-size:clamp(1.15rem, 2.5vw, 1.4rem); font-weight:800; color:#FFB81C; margin-top:0.25rem;">
                            Select answers above to calculate score
                        </div>
                    </div>
                    <a href="#audit-form" class="btn-cyber-gold" style="font-size:0.9rem; padding:0.65rem 1.4rem;">
                        <span>Get Audit Recommendation</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         INTERACTIVE LEAD FORM: BOOK YOUR CYBER SECURITY AUDIT TODAY
         ========================================================================== -->
    <section class="sec-audit-form" id="audit-form">
        <div class="wp-wrap">
            <div class="sec-header" style="margin-bottom: clamp(1.75rem, 3vw, 2.75rem);">
                <span class="sec-eyebrow" style="background:rgba(0,212,255,0.1); color:#38BDF8; border-color:rgba(0,212,255,0.3);">
                    <i class="fa-solid fa-calendar-check"></i> Book With Confidence &bull; UK GDPR Protected
                </span>
                <h2 class="sec-title" style="color:#FFFFFF;">Book Your Cyber Security Audit Today</h2>
                <p class="sec-sub" style="color:#CBD5E1;">
                    Take the first step toward government-backed certification and total threat resilience. Speak directly with a Principal Cyber Security Specialist.
                </p>
            </div>

            <div class="audit-form-container">
                <!-- Feedback Alert Container -->
                <div class="form-feedback-alert" id="auditAlertBox"></div>

                <form id="cyberAuditForm" action="{{ route('cybersecurity.submit') }}" method="POST">
                    @csrf
                    <!-- Honeypot anti-spam field -->
                    <input type="text" name="nxt_website_hp" style="display:none;" tabindex="-1" autocomplete="off">

                    <div class="form-grid-2">
                        <div class="cyber-form-group">
                            <label for="auditFullName"><i class="fa-solid fa-user"></i> Full Name *</label>
                            <input type="text" id="auditFullName" name="full_name" class="cyber-form-input" placeholder="e.g. Richard Davies" required>
                        </div>

                        <div class="cyber-form-group">
                            <label for="auditWorkEmail"><i class="fa-solid fa-envelope"></i> Work Email *</label>
                            <input type="email" id="auditWorkEmail" name="work_email" class="cyber-form-input" placeholder="e.g. r.davies@company.co.uk" required>
                        </div>
                    </div>

                    <div class="form-grid-2">
                        <div class="cyber-form-group">
                            <label for="auditCompany"><i class="fa-solid fa-building"></i> Company / Organization Name *</label>
                            <input type="text" id="auditCompany" name="company" class="cyber-form-input" placeholder="e.g. Davies Logistics Ltd" required>
                        </div>

                        <div class="cyber-form-group">
                            <label for="auditPhone"><i class="fa-solid fa-phone"></i> UK Contact Number *</label>
                            <input type="tel" id="auditPhone" name="phone" class="cyber-form-input" placeholder="e.g. 07879 175585 or 020 8000 0000" required>
                        </div>
                    </div>

                    <div class="form-grid-2">
                        <div class="cyber-form-group">
                            <label for="auditTeamSize"><i class="fa-solid fa-users"></i> Company / Team Size</label>
                            <select id="auditTeamSize" name="team_size" class="cyber-form-select">
                                <option value="1-10 employees">1 - 10 employees (Micro / Startup)</option>
                                <option value="11-50 employees" selected>11 - 50 employees (Growing SME)</option>
                                <option value="51-250 employees">51 - 250 employees (Mid-Market)</option>
                                <option value="250+ employees">250+ employees (Enterprise)</option>
                            </select>
                        </div>

                        <div class="cyber-form-group">
                            <label for="auditInterest"><i class="fa-solid fa-shield-halved"></i> Primary Objective / Focus</label>
                            <select id="auditInterest" name="audit_interest" class="cyber-form-select">
                                <option value="Full End-to-End System Audit">Full End-to-End System Audit (Technical &amp; Operational)</option>
                                <option value="NCSC Cyber Essentials Certification">NCSC Cyber Essentials Certification</option>
                                <option value="Cyber Essentials Plus Technical Audit">Cyber Essentials Plus (Hands-on Technical Audit)</option>
                                <option value="Vulnerability Scanning & Penetration Testing">Vulnerability Scanning &amp; Penetration Testing</option>
                                <option value="UK GDPR & Regulatory Compliance Review">UK GDPR &amp; Regulatory Compliance Review</option>
                                <option value="Supply Chain Tender Qualification">Supply Chain / Government Tender Qualification</option>
                            </select>
                        </div>
                    </div>

                    <div class="cyber-form-group">
                        <label for="auditNotes"><i class="fa-solid fa-comment-dots"></i> Specific Concerns, Deadlines or Existing Setup (Optional)</label>
                        <textarea id="auditNotes" name="notes" class="cyber-form-textarea" placeholder="Tell us about your IT setup (e.g. Microsoft 365, AWS, on-prem servers), upcoming tender deadlines, or previous security incidents..."></textarea>
                    </div>

                    <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1rem; margin-top:1.75rem;">
                        <button type="submit" class="btn-cyber-gold" id="auditSubmitBtn" style="min-width:240px;">
                            <span id="auditBtnText">Request Cyber Security Audit</span>
                            <i class="fa-solid fa-arrow-right" id="auditBtnIcon"></i>
                        </button>

                        <div style="font-size:0.85rem; color:#94A3B8; display:flex; align-items:center; gap:0.5rem; flex-wrap:wrap;">
                            <i class="fa-solid fa-lock" style="color:#10B981;"></i>
                            <span>Protected by Non-Disclosure Agreement (NDA) &bull; No Obligation</span>
                        </div>
                    </div>
                </form>

                <!-- Direct Callout Alternative -->
                <div style="margin-top:2.25rem; padding-top:1.75rem; border-top:1px solid rgba(255,255,255,0.12); text-align:center;">
                    <span style="font-size:0.92rem; color:#CBD5E1;">Prefer to discuss your requirements immediately?</span>
                    <div style="margin-top:0.75rem;">
                        <a href="tel:07879175585" style="color:#FFB81C; font-size:clamp(1.15rem, 3vw, 1.35rem); font-weight:800; font-family:'Plus Jakarta Sans'; text-decoration:none; display:inline-flex; align-items:center; gap:0.55rem;">
                            <i class="fa-solid fa-phone-volume"></i> 07879 175585
                        </a>
                        <div style="font-size:0.82rem; color:#94A3B8; margin-top:0.25rem;">Direct Cyber Security Advisory Hotline (Mon - Fri, 9am - 6pm UK)</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         SECTION: FREQUENTLY ASKED QUESTIONS (FAQ ACCORDION)
         ========================================================================== -->
    <section class="sec-cyber-faq" id="faq">
        <div class="wp-wrap">
            <div class="sec-header">
                <span class="sec-eyebrow"><i class="fa-solid fa-circle-question"></i> Clear Guidance</span>
                <h2 class="sec-title">Frequently Asked Questions</h2>
                <p class="sec-sub">Everything UK SME business owners need to know about our audits and Cyber Essentials certification.</p>
            </div>

            <div class="faq-accordion-list">
                <div class="faq-item">
                    <button type="button" class="faq-question-btn" onclick="toggleFaq(this)">
                        <span>What is the difference between Cyber Essentials and Cyber Essentials Plus?</span>
                        <i class="fa-solid fa-chevron-down faq-chevron"></i>
                    </button>
                    <div class="faq-answer-content">
                        <strong>Cyber Essentials (Standard)</strong> involves a verified self-assessment questionnaire where you declare compliance across the 5 core technical security controls, which is reviewed and scored by an IASME-licensed assessor. 
                        <br><br>
                        <strong>Cyber Essentials Plus</strong> includes the standard certification plus an independent hands-on technical audit, including external and internal vulnerability scans, workstation tests, and malware simulation by a qualified assessor to independently verify your technical defences.
                    </div>
                </div>

                <div class="faq-item">
                    <button type="button" class="faq-question-btn" onclick="toggleFaq(this)">
                        <span>How long does an End-to-End System Audit take to complete?</span>
                        <i class="fa-solid fa-chevron-down faq-chevron"></i>
                    </button>
                    <div class="faq-answer-content">
                        For typical UK SMEs (10 to 100 users), the assessment process typically spans <strong>3 to 5 business days</strong>. Initial discovery and remote vulnerability scanning take 24–48 hours, followed by operational reviews with your IT/management team and deliverable report synthesis. We schedule all sessions around your daily business so there is zero interruption to your work.
                    </div>
                </div>

                <div class="faq-item">
                    <button type="button" class="faq-question-btn" onclick="toggleFaq(this)">
                        <span>Will the security audit cause any downtime for our business operations?</span>
                        <i class="fa-solid fa-chevron-down faq-chevron"></i>
                    </button>
                    <div class="faq-answer-content">
                        <strong>No.</strong> Our vulnerability scanning and architecture audits are purely non-intrusive and passive. They run safely in the background during designated maintenance windows or normal business hours without slowing down your network, email, or client communications.
                    </div>
                </div>

                <div class="faq-item">
                    <button type="button" class="faq-question-btn" onclick="toggleFaq(this)">
                        <span>What happens if critical vulnerabilities are discovered during the audit?</span>
                        <i class="fa-solid fa-chevron-down faq-chevron"></i>
                    </button>
                    <div class="faq-answer-content">
                        If an urgent zero-day vulnerability or severe misconfiguration is discovered, our Principal Security Architect immediately alerts your management with a rapid mitigation patch before continuing the broader review. Our final report provides a prioritised 30-day remediation matrix detailing exactly how to resolve each issue cleanly.
                    </div>
                </div>

                <div class="faq-item">
                    <button type="button" class="faq-question-btn" onclick="toggleFaq(this)">
                        <span>Is Cyber Essentials mandatory for winning UK government or public sector contracts?</span>
                        <i class="fa-solid fa-chevron-down faq-chevron"></i>
                    </button>
                    <div class="faq-answer-content">
                        <strong>Yes.</strong> Since 2014, the UK Government has mandated that all suppliers bidding for contracts that handle sensitive or personal information must hold a valid Cyber Essentials certificate. Increasingly, private enterprise supply chains (banking, rail, construction, healthcare) also mandate it as a non-negotiable procurement standard.
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <!-- Interactive Scripts for In-Page Pill Switcher, FAQ, Risk Checker & AJAX Form Submission -->
    <script>
        // In-page Framework Switcher smooth active state
        document.querySelectorAll('.framework-pill-item').forEach(pill => {
            pill.addEventListener('click', function(e) {
                document.querySelectorAll('.framework-pill-item').forEach(p => p.classList.remove('is-active'));
                this.classList.add('is-active');
            });
        });

        // FAQ Accordion Toggle
        function toggleFaq(btn) {
            const item = btn.closest('.faq-item');
            const wasOpen = item.classList.contains('is-open');
            document.querySelectorAll('.faq-item').forEach(el => el.classList.remove('is-open'));
            if (!wasOpen) {
                item.classList.add('is-open');
            }
        }

        // Quick Risk Checker Logic
        const checkerAnswers = [null, null, null, null, null];
        function setChecker(index, val, btn) {
            checkerAnswers[index] = val;
            const parent = btn.parentElement;
            parent.querySelectorAll('.checker-btn-opt').forEach(b => {
                b.classList.remove('selected-yes', 'selected-no');
            });
            if (val) {
                btn.classList.add('selected-yes');
            } else {
                btn.classList.add('selected-no');
            }

            // Calculate Score
            const answered = checkerAnswers.filter(a => a !== null).length;
            const yesCount = checkerAnswers.filter(a => a === true).length;
            const titleEl = document.getElementById('checkerScoreTitle');

            if (answered < 5) {
                titleEl.innerHTML = `<span style="color:#38BDF8;">${answered}/5 answered</span> &bull; Continue answering...`;
            } else {
                if (yesCount === 5) {
                    titleEl.innerHTML = '<span style="color:#10B981;"><i class="fa-solid fa-circle-check"></i> High Defense Level (5/5)</span> — Eligible for Cyber Essentials Plus!';
                } else if (yesCount >= 3) {
                    titleEl.innerHTML = '<span style="color:#FFB81C;"><i class="fa-solid fa-triangle-exclamation"></i> Moderate Exposure (' + yesCount + '/5)</span> — Audit recommended to fix vulnerabilities.';
                } else {
                    titleEl.innerHTML = '<span style="color:#EF4444;"><i class="fa-solid fa-skull-crossbones"></i> High Cyber Risk (' + yesCount + '/5)</span> — Immediate System Audit strongly advised!';
                }
            }
        }

        // AJAX Form Submission
        document.getElementById('cyberAuditForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const form = this;
            const submitBtn = document.getElementById('auditSubmitBtn');
            const btnText = document.getElementById('auditBtnText');
            const alertBox = document.getElementById('auditAlertBox');

            btnText.textContent = 'Submitting Request...';
            submitBtn.disabled = true;
            alertBox.className = 'form-feedback-alert';
            alertBox.style.display = 'none';

            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                submitBtn.disabled = false;
                btnText.textContent = 'Request Cyber Security Audit';

                if (data.success) {
                    alertBox.className = 'form-feedback-alert is-success';
                    alertBox.innerHTML = '<i class="fa-solid fa-circle-check"></i> ' + (data.message || 'Your Cyber Security Audit consultation request has been received.');
                    alertBox.style.display = 'block';
                    form.reset();
                    alertBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
                } else {
                    alertBox.className = 'form-feedback-alert is-error';
                    alertBox.innerHTML = '<i class="fa-solid fa-triangle-exclamation"></i> ' + (data.message || 'An error occurred while submitting your request. Please try calling 07879 175585.');
                    alertBox.style.display = 'block';
                }
            })
            .catch(err => {
                submitBtn.disabled = false;
                btnText.textContent = 'Request Cyber Security Audit';
                alertBox.className = 'form-feedback-alert is-error';
                alertBox.innerHTML = '<i class="fa-solid fa-triangle-exclamation"></i> An unexpected network error occurred. Please contact us directly at <a href="tel:07879175585" style="color:#FFF; text-decoration:underline;">07879 175585</a>.';
                alertBox.style.display = 'block';
            });
        });
    </script>
</body>

</html>
