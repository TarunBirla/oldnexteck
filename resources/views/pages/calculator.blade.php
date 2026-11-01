<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automation Savings Calculator | Nexteck London</title>
    <meta name="description" content="Calculate your potential return on process automation and software integration. Estimate weekly hours returned and indicative annual cost equivalent.">
    <link rel="canonical" href="{{ url('/calculator') }}">

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
                url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=2000&q=80') center center / cover no-repeat;
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
            margin: 0 auto;
            position: relative;
            z-index: 2;
            line-height: 1.68;
        }

        .calc-container {
            background: #FFFFFF;
            border-radius: var(--wp-radius-lg);
            box-shadow: var(--wp-shadow-card);
            border: 1px solid var(--wp-border);
            padding: 3rem;
            max-width: 920px;
            margin: -3rem auto 4.5rem;
            position: relative;
            z-index: 10;
        }

        .range-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.5rem;
            font-family: var(--wp-font-display);
            font-weight: 600;
            font-size: 0.95rem;
            color: var(--wp-navy-900);
        }

        .range-val {
            font-size: 1.15rem;
            font-weight: 800;
            color: var(--wp-blue);
        }

        .calc-field {
            margin-bottom: 1.85rem;
        }

        .calc-field input[type="range"] {
            width: 100%;
            accent-color: var(--wp-blue);
            height: 6px;
            cursor: pointer;
        }

        .calc-field input[type="number"] {
            width: 100%;
            border: 1.5px solid var(--wp-border);
            border-radius: var(--wp-radius-sm);
            padding: 0.82rem 1.1rem;
            font-size: 0.95rem;
            font-family: inherit;
            background: #FFFFFF;
            color: var(--wp-navy-900);
            transition: all 0.2s ease;
        }
        .calc-field input[type="number"]:focus {
            outline: none;
            border-color: var(--wp-blue);
            box-shadow: 0 0 0 3px rgba(56, 35, 86, 0.15);
        }

        .kpi-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.25rem;
            margin: 2.5rem 0;
        }

        .kpi-box {
            background: var(--wp-bg-light);
            border: 1px solid var(--wp-border);
            border-radius: var(--wp-radius-md);
            padding: 1.6rem 1.25rem;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: all 0.25s ease;
        }
        .kpi-box span {
            font-family: var(--wp-font-display);
            font-size: 0.76rem;
            font-weight: 700;
            text-transform: uppercase;
            color: var(--wp-text-muted);
            letter-spacing: 0.08em;
            display: block;
        }
        .kpi-box .val {
            font-family: var(--wp-font-display);
            font-size: 1.95rem;
            font-weight: 800;
            color: var(--wp-navy-900);
            margin-top: 0.35rem;
            line-height: 1.15;
        }

        .kpi-highlight {
            background: rgba(16, 185, 129, 0.08);
            border-color: rgba(16, 185, 129, 0.3);
        }
        .kpi-highlight span {
            color: #065F46;
        }
        .kpi-highlight .val {
            color: #065F46;
        }

        @media (max-width: 640px) {
            .hero-sec { padding: 65px 0 50px; }
            .calc-container { padding: 1.75rem 1.25rem; margin-top: -1.75rem; }
            .kpi-grid { grid-template-columns: 1fr 1fr; gap: 0.85rem; }
        }
        @media (max-width: 480px) {
            .kpi-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>

<body>
    @include('partials.header')

    <!-- ================= HERO ================= -->
    <header class="hero-sec">
        <div class="wp-wrap">
            <span class="wp-eyebrow on-navy"><span class="wp-dot"></span> ROI &amp; Capacity Model</span>
            <h1>Automation Savings Calculator</h1>
            <p>
                Estimate recaptured executive capacity, annual labour-cost equivalent, and indicative payback from workflow automation and custom API integrations.
            </p>
        </div>
    </header>

    <!-- ================= CALCULATOR CARD ================= -->
    <main class="wp-wrap">
        <section class="calc-container rv in">
            <h2 style="font-size:1.55rem; margin-bottom:1.75rem; color:var(--wp-navy-900); border-bottom:1px solid var(--wp-border-subtle); padding-bottom:1rem;">
                Interactive ROI Parameters
            </h2>

            <!-- Sliders -->
            <div class="calc-field">
                <div class="range-row">
                    <label for="page_calc_emp">Team members involved in repetitive manual processes</label>
                    <span class="range-val" id="page_calc_emp_val">5 staff</span>
                </div>
                <input type="range" id="page_calc_emp" min="1" max="100" value="5" step="1" oninput="runPageCalc()">
            </div>

            <div class="calc-field">
                <div class="range-row">
                    <label for="page_calc_hrs">Average hours spent per employee each week on manual admin</label>
                    <span class="range-val" id="page_calc_hrs_val">10 hrs/wk</span>
                </div>
                <input type="range" id="page_calc_hrs" min="1" max="40" value="10" step="1" oninput="runPageCalc()">
            </div>

            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.5rem;" class="calc-grid-inputs">
                <div class="calc-field">
                    <label style="display:block; font-family:var(--wp-font-display); font-weight:600; font-size:0.86rem; color:var(--wp-navy-900); margin-bottom:0.4rem;" for="page_calc_rate">Estimated hourly fully loaded cost (£/hr)</label>
                    <input type="number" id="page_calc_rate" min="15" max="300" value="32" oninput="runPageCalc()">
                </div>
                <div class="calc-field">
                    <label style="display:block; font-family:var(--wp-font-display); font-weight:600; font-size:0.86rem; color:var(--wp-navy-900); margin-bottom:0.4rem;" for="page_calc_cost">Estimated implementation budget (£, optional)</label>
                    <input type="number" id="page_calc_cost" min="0" max="100000" value="2950" oninput="runPageCalc()">
                </div>
            </div>

            <div class="calc-field">
                <div class="range-row">
                    <label for="page_calc_pct">Estimated percentage of process automatable</label>
                    <span class="range-val" id="page_calc_pct_val">40%</span>
                </div>
                <input type="range" id="page_calc_pct" min="10" max="85" value="40" step="5" oninput="runPageCalc()">
            </div>

            <!-- Output Metric Cards -->
            <div class="kpi-grid">
                <div class="kpi-box">
                    <span>Weekly Hours Recaptured</span>
                    <div class="val" id="page_res_weekly">20 hrs</div>
                </div>
                <div class="kpi-box">
                    <span>Annual Hours Recaptured</span>
                    <div class="val" id="page_res_annual">960 hrs</div>
                </div>
                <div class="kpi-box kpi-highlight">
                    <span>Annual Value Equivalent</span>
                    <div class="val" id="page_res_cost_saving">£30,720</div>
                </div>
                <div class="kpi-box">
                    <span>Estimated 1st-Year ROI</span>
                    <div class="val" id="page_res_roi">941%</div>
                </div>
                <div class="kpi-box">
                    <span>Estimated Payback</span>
                    <div class="val" id="page_res_payback">1.2 mos</div>
                </div>
            </div>

            <button type="button" class="btn-wp btn-wp-primary btn-wp-lg" style="width:100%; justify-content:center;" onclick="NxtEngagement.openConsultationModal('roi_calculator')">
                Discuss Your ROI Model on a Strategy Call <i class="fa-solid fa-arrow-right arrow-icon" style="margin-left:6px;"></i>
            </button>

            <p style="text-align:center; font-size:0.84rem; color:var(--wp-text-muted); margin-top:1.25rem;">
                Indicative modeling based on a standard 48-week commercial working year. All estimates validated live during your initial audit.
            </p>
        </section>
    </main>

    @include('partials.footer')

    <script>
        function runPageCalc() {
            const emp = parseInt(document.getElementById('page_calc_emp').value, 10) || 1;
            const hrs = parseInt(document.getElementById('page_calc_hrs').value, 10) || 1;
            const rate = parseFloat(document.getElementById('page_calc_rate').value) || 25;
            const cost = parseFloat(document.getElementById('page_calc_cost').value) || 0;
            const pct = parseInt(document.getElementById('page_calc_pct').value, 10) || 30;

            document.getElementById('page_calc_emp_val').textContent = emp + (emp === 1 ? ' person' : ' staff');
            document.getElementById('page_calc_hrs_val').textContent = hrs + ' hrs/wk';
            document.getElementById('page_calc_pct_val').textContent = pct + '%';

            const totalHoursWk = emp * hrs;
            const savedHoursWk = Math.round(totalHoursWk * (pct / 100));
            const savedHoursYr = Math.round(savedHoursWk * 48);
            const savedCostYr = Math.round(savedHoursYr * rate);

            document.getElementById('page_res_weekly').textContent = savedHoursWk.toLocaleString() + ' hrs';
            document.getElementById('page_res_annual').textContent = savedHoursYr.toLocaleString() + ' hrs';
            document.getElementById('page_res_cost_saving').textContent = '£' + savedCostYr.toLocaleString();

            if (cost > 0) {
                const netAnnual = savedCostYr - cost;
                const roiPct = Math.round((netAnnual / cost) * 100);
                const paybackMonths = ((cost / (savedCostYr / 12))).toFixed(1);

                document.getElementById('page_res_roi').textContent = roiPct + '%';
                document.getElementById('page_res_payback').textContent = paybackMonths + ' mos';
            } else {
                document.getElementById('page_res_roi').textContent = 'N/A';
                document.getElementById('page_res_payback').textContent = 'Immediate';
            }
        }

        document.addEventListener('DOMContentLoaded', runPageCalc);
    </script>
</body>

</html>
