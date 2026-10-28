<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automation Savings Calculator | The Nexteck London</title>
    <meta name="description" content="Calculate your potential return on process automation and software integration. Estimate weekly hours returned and indicative annual cost equivalent.">
    <link rel="canonical" href="{{ url('/calculator') }}">

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
        .hero-sec p { font-size:1.1rem; color:#CBD5E1; max-width:64ch; margin:0 auto; }

        .calc-container {
            background:#fff;
            border-radius:var(--radius);
            box-shadow:var(--shadow);
            border:1px solid var(--line);
            padding:2.5rem;
            max-width:880px;
            margin:-2.5rem auto 4rem;
            position:relative;
            z-index:10;
        }

        .range-row { display:flex; justify-content:space-between; align-items:center; margin-bottom:0.4rem; font-weight:600; }
        .range-val { font-size:1.15rem; font-weight:700; color:var(--gold); }
        .calc-field { margin-bottom:1.6rem; }
        .calc-field input[type="range"] { width:100%; accent-color:var(--gold); height:6px; cursor:pointer; }
        .calc-field input[type="number"] { width:100%; border:1.5px solid var(--line); border-radius:10px; padding:0.75rem 1rem; font-size:0.95rem; font-family:inherit; background:#FAF9F6; }

        .kpi-grid { display:grid; grid-template-columns:repeat(auto-fit, minmax(180px, 1fr)); gap:1.2rem; margin:2rem 0; }
        .kpi-box { background:#F8FAFC; border:1px solid var(--line); border-radius:12px; padding:1.4rem; text-align:center; }
        .kpi-box span { font-size:0.76rem; font-weight:700; text-transform:uppercase; color:var(--muted); letter-spacing:0.04em; }
        .kpi-box .val { font-size:1.75rem; font-weight:700; color:var(--ink); margin-top:0.3rem; }

        .kpi-highlight { background:#ECFDF5; border-color:#A7F3D0; }
        .kpi-highlight span { color:#065F46; }
        .kpi-highlight .val { color:#065F46; }

        .btn-discuss {
            display:inline-flex;
            align-items:center;
            justify-content:center;
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
            width:100%;
        }
        .btn-discuss:hover { background:var(--sky-dark); transform:translateY(-2px); box-shadow:0 10px 25px rgba(14, 165, 233, 0.45); }

        @media (max-width: 640px) {
            .hero-sec { padding:3.5rem 0 3rem; }
            .hero-sec h1 { font-size:clamp(1.75rem, 6.5vw, 2.4rem); }
            .calc-container { padding:1.5rem 1.15rem; margin-top:-1.5rem; }
            .kpi-grid { grid-template-columns:1fr 1fr; gap:0.75rem; }
        }
        @media (max-width: 480px) {
            .kpi-grid { grid-template-columns:1fr; }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <header class="hero-sec">
        <div class="wrap">
            <span style="display:inline-block; font-size:0.8rem; font-weight:700; letter-spacing:0.12em; text-transform:uppercase; color:var(--gold-2); margin-bottom:0.8rem;">
                ROI &amp; Capacity Model
            </span>
            <h1>Automation Savings Calculator</h1>
            <p>
                Estimate recaptured staff capacity, annual labour-cost equivalent, and indicative payback from workflow automation and API integrations.
            </p>
        </div>
    </header>

    <main class="wrap">
        <section class="calc-container">
            <h2 style="font-family:'Fraunces', serif; font-size:1.5rem; margin-bottom:1.5rem; color:var(--ink); border-bottom:1px solid var(--line); padding-bottom:0.8rem;">
                Interactive ROI Parameters
            </h2>

            <!-- Sliders -->
            <div class="calc-field">
                <div class="range-row">
                    <label for="page_calc_emp">Number of employees involved in repetitive processes</label>
                    <span class="range-val" id="page_calc_emp_val">5 staff</span>
                </div>
                <input type="range" id="page_calc_emp" min="1" max="100" value="5" step="1" oninput="runPageCalc()">
            </div>

            <div class="calc-field">
                <div class="range-row">
                    <label for="page_calc_hrs">Average hours spent per employee each week on repetitive work</label>
                    <span class="range-val" id="page_calc_hrs_val">10 hrs/wk</span>
                </div>
                <input type="range" id="page_calc_hrs" min="1" max="40" value="10" step="1" oninput="runPageCalc()">
            </div>

            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.2rem;">
                <div class="calc-field">
                    <label style="display:block; font-weight:600; margin-bottom:0.4rem;" for="page_calc_rate">Estimated hourly labour cost (£/hr)</label>
                    <input type="number" id="page_calc_rate" min="15" max="300" value="32" oninput="runPageCalc()">
                </div>
                <div class="calc-field">
                    <label style="display:block; font-weight:600; margin-bottom:0.4rem;" for="page_calc_cost">Estimated implementation cost (£, optional)</label>
                    <input type="number" id="page_calc_cost" min="0" max="100000" value="2950" oninput="runPageCalc()">
                </div>
            </div>

            <div class="calc-field">
                <div class="range-row">
                    <label for="page_calc_pct">Estimated percentage of work that could be automated</label>
                    <span class="range-val" id="page_calc_pct_val">40%</span>
                </div>
                <input type="range" id="page_calc_pct" min="10" max="85" value="40" step="5" oninput="runPageCalc()">
            </div>

            <!-- Calculated Output Boxes -->
            <div class="kpi-grid">
                <div class="kpi-box">
                    <span>Weekly Hours Saved</span>
                    <div class="val" id="page_res_weekly">20 hrs</div>
                </div>
                <div class="kpi-box">
                    <span>Annual Hours Saved</span>
                    <div class="val" id="page_res_annual">960 hrs</div>
                </div>
                <div class="kpi-box kpi-highlight">
                    <span>Annual Labour Value</span>
                    <div class="val" id="page_res_value">£30,720</div>
                </div>
                <div class="kpi-box kpi-highlight">
                    <span>Net 1st-Year Benefit</span>
                    <div class="val" id="page_res_net">£27,770</div>
                </div>
                <div class="kpi-box kpi-highlight" style="grid-column:1 / -1;">
                    <span>Indicative Payback Period</span>
                    <div class="val" id="page_res_payback">1.2 months</div>
                </div>
            </div>

            <!-- Mathematical Formula Documentation -->
            <div style="background:#FAF9F6; border:1px solid var(--line); border-radius:12px; padding:1.4rem; margin-bottom:2rem; font-size:0.86rem; color:var(--muted); line-height:1.6;">
                <strong style="color:var(--ink); display:block; margin-bottom:0.4rem;">Transparent Calculation Methodology:</strong>
                <ul style="padding-left:1.2rem; margin:0;">
                    <li><strong>Weekly Hours Saved:</strong> <em>Employees × Hours/Week × Automation Percentage</em></li>
                    <li><strong>Annual Hours Saved:</strong> <em>Weekly Hours × 48 standard working weeks/year</em></li>
                    <li><strong>Annual Labour-Cost Equivalent:</strong> <em>Annual Hours × Hourly Labour Rate</em></li>
                    <li><strong>Estimated Net 1st-Year Benefit:</strong> <em>Annual Labour-Cost Equivalent minus Implementation Cost</em></li>
                    <li><strong>Indicative Payback:</strong> <em>Implementation Cost ÷ (Annual Labour-Cost Equivalent ÷ 12 months)</em></li>
                </ul>
                <p style="margin-top:0.8rem; font-size:0.8rem; font-style:italic;">
                    Disclaimer: Theoretical labour-cost equivalent reflects recovered operational capacity and staff reallocation value. Actual bottom-line savings depend on individual process design, vendor contracts, and business adoption.
                </p>
            </div>

            <button type="button" class="btn-discuss" onclick="bookAutomationCall()">
                Discuss Automation Opportunities With Our Team &rarr;
            </button>
        </section>
    </main>

    @include('partials.footer')

    <script>
        function runPageCalc() {
            const emp = parseInt(document.getElementById('page_calc_emp').value, 10) || 5;
            const hrs = parseFloat(document.getElementById('page_calc_hrs').value) || 10;
            const rate = parseFloat(document.getElementById('page_calc_rate').value) || 32;
            const cost = parseFloat(document.getElementById('page_calc_cost').value) || 2950;
            const pct = parseFloat(document.getElementById('page_calc_pct').value) || 40;

            document.getElementById('page_calc_emp_val').innerText = emp + ' staff';
            document.getElementById('page_calc_hrs_val').innerText = hrs + ' hrs/wk';
            document.getElementById('page_calc_pct_val').innerText = pct + '%';

            const weeklyHours = Math.round(emp * hrs * (pct / 100));
            const annualHours = Math.round(weeklyHours * 48);
            const annualLabourVal = Math.round(annualHours * rate);
            const netFirstYear = Math.max(0, annualLabourVal - cost);

            let payback = annualLabourVal > 0 ? (cost / (annualLabourVal / 12)).toFixed(1) : '—';
            if (cost <= 0) payback = 'Immediate';

            document.getElementById('page_res_weekly').innerText = weeklyHours + ' hrs';
            document.getElementById('page_res_annual').innerText = annualHours.toLocaleString() + ' hrs';
            document.getElementById('page_res_value').innerText = '£' + annualLabourVal.toLocaleString();
            document.getElementById('page_res_net').innerText = '£' + netFirstYear.toLocaleString();
            document.getElementById('page_res_payback').innerText = (payback === 'Immediate') ? 'Immediate' : payback + ' months';
        }

        function bookAutomationCall() {
            const weeklyHours = document.getElementById('page_res_weekly').innerText;
            const annualVal = document.getElementById('page_res_value').innerText;
            const desc = 'Automation Calculator: ' + weeklyHours + ' returned/wk, ' + annualVal + ' annual labour equivalent.';
            window.location.href = "{{ route('landing') }}#book?pain_point=" + encodeURIComponent(desc);
        }

        runPageCalc();
    </script>
</body>
</html>
