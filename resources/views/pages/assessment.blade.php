<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Technology Health Check &amp; AI Readiness Assessment | The Nexteck London</title>
    <meta name="description" content="Take our free 2-minute Business Technology Health Check. Evaluate operational bottlenecks, system integration maturity, and pragmatic AI readiness for your UK business.">
    <link rel="canonical" href="{{ url('/assessment') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --ink: #090D16;
            --ink-2: #131926;
            --gold: #0EA5E9;
            --gold-2: #38BDF8;
            --sky-dark: #0284C7;
            --sky-soft: rgba(14, 165, 233, 0.08);
            --cream: #F8FAFC;
            --line: #E2E8F0;
            --muted: #64748B;
            --radius: 12px;
            --shadow: 0 16px 36px -12px rgba(9, 13, 22, 0.08);
        }

        * { margin:0; padding:0; box-sizing:border-box; }
        body { font-family:'Inter', system-ui, sans-serif; background:#fff; color:var(--ink); line-height:1.6; overflow-x:hidden; }

        .wrap { width:min(1180px, 92%); margin:0 auto; }
        .hero-sec { background:linear-gradient(135deg, var(--ink) 0%, var(--ink-2) 100%); color:#fff; padding:5rem 0 4rem; text-align:center; position:relative; overflow:hidden; }
        .hero-sec h1 { font-family:'Fraunces', serif; font-size:clamp(2rem, 3.8vw, 3.2rem); font-weight:700; max-width:24ch; margin:0 auto 1.2rem; line-height:1.2; }
        .hero-sec p { font-size:1.1rem; color:#CBD5E1; max-width:64ch; margin:0 auto 2rem; }

        .assessment-card {
            background:#fff;
            border-radius:var(--radius);
            box-shadow:var(--shadow);
            border:1px solid var(--line);
            padding:2.5rem;
            max-width:920px;
            margin:-2.5rem auto 4rem;
            position:relative;
            z-index:10;
        }

        .guide-grid { display:grid; grid-template-columns:repeat(auto-fit, minmax(260px, 1fr)); gap:1.5rem; margin:3rem 0; }
        .guide-card { background:#F8FAFC; border:1px solid var(--line); border-radius:12px; padding:1.8rem; }
        .guide-card h3 { font-family:'Fraunces', serif; font-size:1.2rem; color:var(--ink); margin-bottom:0.5rem; }
        .guide-card p { font-size:0.92rem; color:var(--muted); line-height:1.55; margin:0; }

        .btn-launch {
            display:inline-flex;
            align-items:center;
            gap:0.6rem;
            background:var(--gold);
            color:#fff;
            font-weight:700;
            font-size:1.05rem;
            padding:0.9rem 2rem;
            border-radius:8px;
            text-decoration:none;
            box-shadow:0 8px 20px rgba(14, 165, 233, 0.35);
            cursor:pointer;
            border:none;
            transition:all 0.25s;
        }
        .btn-launch:hover { background:var(--sky-dark); transform:translateY(-2px); box-shadow:0 10px 25px rgba(14, 165, 233, 0.45); }

        @media (max-width: 640px) {
            .hero-sec { padding:3.5rem 0 3rem; }
            .hero-sec h1 { font-size:clamp(1.75rem, 6.5vw, 2.4rem); }
            .assessment-card { padding:1.5rem 1.15rem; margin-top:-1.5rem; }
            .guide-grid { grid-template-columns:1fr; gap:1rem; }
            .btn-launch { width:100%; justify-content:center; text-align:center; }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <header class="hero-sec">
        <div class="wrap">
            <span style="display:inline-block; font-size:0.8rem; font-weight:700; letter-spacing:0.12em; text-transform:uppercase; color:var(--gold-2); margin-bottom:0.8rem;">
                The Nexteck Diagnostic System
            </span>
            <h1>Welcome to The Nexteck, Let\'s Grow Together</h1>
            <p>
                From custom software to digital solutions, we help businesses work smarter. Book a free consultation and see how we can help.
            </p>
            <button type="button" class="btn-launch" onclick="NxtEngagement.openAssessmentModal()">
                Launch Free Health Check &rarr;
            </button>
        </div>
    </header>

    <main class="wrap">
        <section class="assessment-card">
            <div style="display:flex; justify-content:space-between; align-items:center; border-bottom:1px solid var(--line); padding-bottom:1.2rem; margin-bottom:1.5rem; flex-wrap:wrap; gap:1rem;">
                <div>
                    <h2 style="font-family:'Fraunces', serif; font-size:1.5rem; color:var(--ink); margin:0;">
                        Structured 5-Stage Advisory Framework
                    </h2>
                    <p style="font-size:0.9rem; color:var(--muted); margin:0.2rem 0 0 0;">
                        Documented criteria designed for founders and executives navigating technology growth.
                    </p>
                </div>
                <button type="button" class="btn-launch" style="padding:0.7rem 1.4rem; font-size:0.9rem;" onclick="NxtEngagement.openAssessmentModal()">
                    Start Assessment &rarr;
                </button>
            </div>

            <div style="display:grid; gap:1.5rem;">
                <div style="display:flex; gap:1.2rem; align-items:flex-start;">
                    <div style="width:38px; height:38px; border-radius:50%; background:var(--ink); color:var(--gold-2); font-weight:700; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        1
                    </div>
                    <div>
                        <strong style="font-size:1rem; color:var(--ink);">Business Profile &amp; Sector Benchmark</strong>
                        <p style="font-size:0.92rem; color:var(--muted); margin-top:0.2rem;">
                            Categorises your operational scale, workforce distribution, and core pain points against relevant industry norms across our 9 core sectors.
                        </p>
                    </div>
                </div>

                <div style="display:flex; gap:1.2rem; align-items:flex-start;">
                    <div style="width:38px; height:38px; border-radius:50%; background:var(--ink); color:var(--gold-2); font-weight:700; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        2
                    </div>
                    <div>
                        <strong style="font-size:1rem; color:var(--ink);">Operational Efficiency Scoring</strong>
                        <p style="font-size:0.92rem; color:var(--muted); margin-top:0.2rem;">
                            Identifies routine manual re-keying, disparate spreadsheets, and disconnected software tools eating away leadership capacity.
                        </p>
                    </div>
                </div>

                <div style="display:flex; gap:1.2rem; align-items:flex-start;">
                    <div style="width:38px; height:38px; border-radius:50%; background:var(--ink); color:var(--gold-2); font-weight:700; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        3
                    </div>
                    <div>
                        <strong style="font-size:1rem; color:var(--ink);">Pragmatic AI Readiness &amp; Data Hygiene</strong>
                        <p style="font-size:0.92rem; color:var(--muted); margin-top:0.2rem;">
                            Separates practical automation from artificial hype. Focuses on data privacy, API connectivity, and risk management before investing in tooling.
                        </p>
                    </div>
                </div>

                <div style="display:flex; gap:1.2rem; align-items:flex-start;">
                    <div style="width:38px; height:38px; border-radius:50%; background:var(--ink); color:var(--gold-2); font-weight:700; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        4
                    </div>
                    <div>
                        <strong style="font-size:1rem; color:var(--ink);">Deterministic Scoring Engine</strong>
                        <p style="font-size:0.92rem; color:var(--muted); margin-top:0.2rem;">
                            Delivers an indicative 0–100% maturity score across 4 tiers: <em>Emerging, Developing, Strategic, or Optimized</em>, with transparent formula criteria.
                        </p>
                    </div>
                </div>

                <div style="display:flex; gap:1.2rem; align-items:flex-start;">
                    <div style="width:38px; height:38px; border-radius:50%; background:var(--ink); color:var(--gold-2); font-weight:700; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        5
                    </div>
                    <div>
                        <strong style="font-size:1rem; color:var(--ink);">Executive Advisory Consultation</strong>
                        <p style="font-size:0.92rem; color:var(--muted); margin-top:0.2rem;">
                            Seamless 1-click option to discuss your specific findings directly with Mohammed Nasar on a confidential 45-minute discovery call.
                        </p>
                    </div>
                </div>
            </div>

            <div style="margin-top:2.2rem; text-align:center;">
                <button type="button" class="btn-launch" onclick="NxtEngagement.openAssessmentModal()" style="width:100%; justify-content:center;">
                    Launch Interactive Health Check Questionnaire &rarr;
                </button>
            </div>
        </section>

        <!-- AI Readiness Guidance Section -->
        <section style="margin-bottom:5rem;">
            <div style="text-align:center; max-width:680px; margin:0 auto 2.5rem;">
                <span style="font-size:0.8rem; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:var(--gold);">
                    Pragmatic Technology Advisory
                </span>
                <h2 style="font-family:'Fraunces', serif; font-size:2rem; color:var(--ink); margin-top:0.4rem;">
                    The 4 Stages of Business AI Readiness
                </h2>
                <p style="color:var(--muted); font-size:0.95rem;">
                    Before committing capital to AI products, determine where your processes stand and what prerequisites are essential.
                </p>
            </div>

            <div class="guide-grid">
                <div class="guide-card" style="border-top:4px solid #EF4444;">
                    <span style="font-size:0.75rem; font-weight:700; color:#DC2626; text-transform:uppercase;">Stage 1</span>
                    <h3>Exploring</h3>
                    <p>Ad-hoc experimentation with public LLMs. Primary prerequisite is establishing clean data hygiene and preventing company secrets from being fed to public bots.</p>
                </div>

                <div class="guide-card" style="border-top:4px solid #F59E0B;">
                    <span style="font-size:0.75rem; font-weight:700; color:#D97706; text-transform:uppercase;">Stage 2</span>
                    <h3>Piloting</h3>
                    <p>Scoping 1–2 specific operational bottlenecks (e.g. customer triage, document parsing). Requires unified APIs and measurable SLA targets.</p>
                </div>

                <div class="guide-card" style="border-top:4px solid #3B82F6;">
                    <span style="font-size:0.75rem; font-weight:700; color:#2563EB; text-transform:uppercase;">Stage 3</span>
                    <h3>Scaling</h3>
                    <p>Embedded automated triggers across CRM, finance, and logistics. High emphasis on human-in-the-loop exception handling and governance.</p>
                </div>

                <div class="guide-card" style="border-top:4px solid #10B981;">
                    <span style="font-size:0.75rem; font-weight:700; color:#059669; text-transform:uppercase;">Stage 4</span>
                    <h3>Optimized</h3>
                    <p>Predictive automation and bespoke software algorithms that serve as true proprietary competitive differentiators.</p>
                </div>
            </div>

            <div style="background:var(--cream); border:1px solid var(--line); border-radius:var(--radius); padding:2rem; text-align:center;">
                <h3 style="font-family:'Fraunces', serif; font-size:1.4rem; color:var(--ink); margin-bottom:0.6rem;">
                    Want to run the complete diagnostic with an advisor?
                </h3>
                <p style="font-size:0.95rem; color:var(--muted); max-width:54ch; margin:0 auto 1.4rem;">
                    We score your current technology stack live on a 45-minute video call and hand you a costed 90-day action plan.
                </p>
                <a href="{{ route('landing') }}#book" class="btn-launch">
                    Book Free Strategy Call &rarr;
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')
</body>
</html>
