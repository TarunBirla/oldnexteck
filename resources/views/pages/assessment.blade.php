<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Technology Health Check &amp; AI Readiness Assessment | Nexteck London</title>
    <meta name="description" content="Take our free 2-minute Business Technology Health Check. Evaluate operational bottlenecks, system integration maturity, and pragmatic AI readiness for your UK business.">
    <link rel="canonical" href="{{ url('/assessment') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/wipro-theme.css') }}">

    <style>
        .hero-sec {
            position: relative;
            background: 
                linear-gradient(135deg, rgba(0, 15, 36, 0.92) 0%, rgba(0, 27, 58, 0.88) 50%, rgba(0, 15, 36, 0.95) 100%),
                radial-gradient(ellipse at 50% 30%, rgba(56, 189, 248, 0.22) 0%, transparent 60%),
                url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=2000&q=80') center center / cover no-repeat;
            color: #FFFFFF;
            padding: 95px 0 85px;
            text-align: center;
            overflow: hidden;
            border-bottom: 3px solid var(--wp-spectrum-blue);
        }

        .hero-sec::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: 
                radial-gradient(rgba(255, 255, 255, 0.08) 1.5px, transparent 1.5px),
                radial-gradient(rgba(0, 114, 206, 0.12) 1.5px, transparent 1.5px);
            background-size: 36px 36px, 72px 72px;
            opacity: 0.45;
            pointer-events: none;
        }

        .hero-sec h1 {
            color: #FFFFFF !important;
            font-size: clamp(2.2rem, 4vw, 3.4rem);
            font-weight: 800;
            max-width: 26ch;
            margin: 0.85rem auto 1.25rem;
            line-height: 1.18;
            position: relative;
            z-index: 2;
        }

        .hero-sec p {
            font-size: 1.12rem;
            color: #CBD5E1;
            max-width: 66ch;
            margin: 0 auto 2.25rem;
            position: relative;
            z-index: 2;
            line-height: 1.68;
        }

        .assessment-card {
            background: #FFFFFF;
            border-radius: var(--wp-radius-lg);
            box-shadow: var(--wp-shadow-card);
            border: 1px solid var(--wp-border);
            padding: 3rem;
            max-width: 960px;
            margin: -3rem auto 4.5rem;
            position: relative;
            z-index: 10;
        }

        .guide-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.75rem;
            margin: 3.5rem 0;
        }
        .guide-card {
            background: #FFFFFF;
            border: 1px solid var(--wp-border);
            border-radius: var(--wp-radius-md);
            padding: 2.2rem 1.85rem;
            box-shadow: var(--wp-shadow-xs);
        }
        .guide-card h3 {
            font-size: 1.25rem;
            color: var(--wp-navy-900);
            margin-bottom: 0.65rem;
        }
        .guide-card p {
            font-size: 0.92rem;
            color: var(--wp-text-body);
            line-height: 1.6;
            margin: 0;
        }

        @media (max-width: 768px) {
            .hero-sec { padding: 65px 0 50px; }
            .assessment-card { padding: 1.75rem 1.25rem; margin-top: -1.75rem; }
            .guide-grid { grid-template-columns: 1fr; gap: 1.25rem; }
        }
    </style>
</head>

<body>
    @include('partials.header')

    <!-- ================= HERO ================= -->
    <header class="hero-sec">
        <div class="wp-wrap">
            <span class="wp-eyebrow on-navy"><span class="wp-dot"></span> The Nexteck Diagnostic System</span>
            <h1>Business Technology Health Check &amp; AI Readiness Assessment</h1>
            <p>
                Evaluate your operational bottlenecks, system integration maturity, and pragmatic AI readiness in under 2 minutes. Get an objective, staged score designed for UK enterprise leaders.
            </p>
            <button type="button" class="btn-wp btn-wp-primary btn-wp-lg" onclick="NxtEngagement.openAssessmentModal()">
                Launch Free Health Check <i class="fa-solid fa-arrow-right arrow-icon" style="margin-left:6px;"></i>
            </button>
        </div>
    </header>

    <!-- ================= ADVISORY FRAMEWORK CARD ================= -->
    <main class="wp-wrap">
        <section class="assessment-card rv in">
            <div style="display:flex; justify-content:space-between; align-items:center; border-bottom:1px solid var(--wp-border-subtle); padding-bottom:1.5rem; margin-bottom:2rem; flex-wrap:wrap; gap:1.25rem;">
                <div>
                    <h2 style="font-size:1.6rem; color:var(--wp-navy-900); margin:0;">
                        Structured 5-Stage Advisory Framework
                    </h2>
                    <p style="font-size:0.94rem; color:var(--wp-text-muted); margin:0.35rem 0 0 0;">
                        Documented criteria designed for founders and executives navigating technology growth.
                    </p>
                </div>
                <button type="button" class="btn-wp btn-wp-primary" onclick="NxtEngagement.openAssessmentModal()">
                    Start Assessment <i class="fa-solid fa-arrow-right arrow-icon" style="margin-left:6px;"></i>
                </button>
            </div>

            <div style="display:grid; gap:1.75rem;">
                <div style="display:flex; gap:1.35rem; align-items:flex-start;">
                    <div style="width:42px; height:42px; border-radius:12px; background:var(--wp-navy-900); color:#38BDF8; font-family:var(--wp-font-display); font-weight:800; font-size:1.1rem; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        1
                    </div>
                    <div>
                        <strong style="font-size:1.08rem; color:var(--wp-navy-900); font-family:var(--wp-font-display);">Business Profile &amp; Sector Benchmark</strong>
                        <p style="font-size:0.94rem; color:var(--wp-text-body); margin-top:0.3rem; line-height:1.6;">
                            Categorises your operational scale, workforce distribution, and core pain points against relevant industry norms across our 9 core sectors.
                        </p>
                    </div>
                </div>

                <div style="display:flex; gap:1.35rem; align-items:flex-start;">
                    <div style="width:42px; height:42px; border-radius:12px; background:var(--wp-navy-900); color:#38BDF8; font-family:var(--wp-font-display); font-weight:800; font-size:1.1rem; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        2
                    </div>
                    <div>
                        <strong style="font-size:1.08rem; color:var(--wp-navy-900); font-family:var(--wp-font-display);">Operational Efficiency &amp; Data Hygiene</strong>
                        <p style="font-size:0.94rem; color:var(--wp-text-body); margin-top:0.3rem; line-height:1.6;">
                            Identifies routine manual re-keying, disparate spreadsheets, and disconnected software tools eating away leadership capacity.
                        </p>
                    </div>
                </div>

                <div style="display:flex; gap:1.35rem; align-items:flex-start;">
                    <div style="width:42px; height:42px; border-radius:12px; background:var(--wp-navy-900); color:#38BDF8; font-family:var(--wp-font-display); font-weight:800; font-size:1.1rem; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        3
                    </div>
                    <div>
                        <strong style="font-size:1.08rem; color:var(--wp-navy-900); font-family:var(--wp-font-display);">Pragmatic AI Readiness</strong>
                        <p style="font-size:0.94rem; color:var(--wp-text-body); margin-top:0.3rem; line-height:1.6;">
                            Separates practical automation from artificial hype. Focuses on data privacy, API connectivity, and risk management before investing in tooling.
                        </p>
                    </div>
                </div>

                <div style="display:flex; gap:1.35rem; align-items:flex-start;">
                    <div style="width:42px; height:42px; border-radius:12px; background:var(--wp-navy-900); color:#38BDF8; font-family:var(--wp-font-display); font-weight:800; font-size:1.1rem; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        4
                    </div>
                    <div>
                        <strong style="font-size:1.08rem; color:var(--wp-navy-900); font-family:var(--wp-font-display);">Deterministic Scoring Engine</strong>
                        <p style="font-size:0.94rem; color:var(--wp-text-body); margin-top:0.3rem; line-height:1.6;">
                            Delivers an indicative 0–100% maturity score across 4 tiers: <em>Emerging, Developing, Strategic, or Optimized</em>, with transparent formula criteria.
                        </p>
                    </div>
                </div>

                <div style="display:flex; gap:1.35rem; align-items:flex-start;">
                    <div style="width:42px; height:42px; border-radius:12px; background:var(--wp-navy-900); color:#38BDF8; font-family:var(--wp-font-display); font-weight:800; font-size:1.1rem; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        5
                    </div>
                    <div>
                        <strong style="font-size:1.08rem; color:var(--wp-navy-900); font-family:var(--wp-font-display);">Actionable 90-Day Implementation Sprint</strong>
                        <p style="font-size:0.94rem; color:var(--wp-text-body); margin-top:0.3rem; line-height:1.6;">
                            Connects directly to an optional 45-minute discovery consultation with Mohammed Nasar to translate assessment outputs into a costed roadmap.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Guide Cards Grid -->
        <div class="guide-grid">
            <div class="guide-card rv">
                <h3>Clear, No-Obligation Output</h3>
                <p>You receive immediate benchmark metrics on screen with zero obligation. If your existing technology stack is already optimal, we tell you straight.</p>
            </div>

            <div class="guide-card rv">
                <h3>Full Confidentiality &amp; UK GDPR</h3>
                <p>Assessment inputs are processed securely under strict UK GDPR standards and mutual Non-Disclosure Agreement protections.</p>
            </div>

            <div class="guide-card rv">
                <h3>Direct Architect Review</h3>
                <p>Every submission is reviewed by Mohammed Nasar personally — applying 25+ years of tier-1 banking, rail, and manufacturing architecture expertise.</p>
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>

</html>
