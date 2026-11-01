<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy &amp; Data Security | Nexteck London</title>
    <meta name="description" content="Privacy Policy for Nexteck Consulting Ltd. Explaining how we collect, process, and protect corporate client data and assessment inputs under UK GDPR and bilateral NDAs.">
    <link rel="canonical" href="{{ url('/privacy-policy') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/wipro-theme.css') }}">

    <style>
        .hero {
            background: radial-gradient(circle at 80% 20%, #002856 0%, #001B3A 55%, #000F24 100%);
            color: #FFFFFF;
            padding: 85px 0 65px;
            text-align: center;
            border-bottom: 3px solid var(--wp-spectrum-blue);
            position: relative;
        }

        .hero h1 {
            font-size: clamp(2rem, 3.8vw, 3rem);
            font-weight: 800;
            margin: 0.85rem 0 1rem;
            color: #FFFFFF;
        }

        .hero p {
            color: #CBD5E1;
            font-size: 1.1rem;
            max-width: 60ch;
            margin: 0 auto;
        }

        .policy-container {
            max-width: 900px;
            margin: 3.5rem auto 6rem;
            padding: 0 1.5rem;
        }

        .policy-content {
            background: #FFFFFF;
            border: 1px solid var(--wp-border);
            border-radius: var(--wp-radius-md);
            padding: 3rem;
            box-shadow: var(--wp-shadow-card);
        }

        .policy-content h2 {
            font-size: 1.45rem;
            color: var(--wp-navy-900);
            margin: 2.5rem 0 0.85rem;
            border-bottom: 1px solid var(--wp-border-subtle);
            padding-bottom: 0.5rem;
        }
        .policy-content h2:first-of-type {
            margin-top: 0;
        }

        .policy-content h3 {
            font-size: 1.15rem;
            color: var(--wp-navy-900);
            margin: 1.5rem 0 0.5rem;
        }

        .policy-content p {
            color: var(--wp-text-body);
            font-size: 0.96rem;
            line-height: 1.7;
            margin-bottom: 1.15rem;
        }

        .policy-content ul {
            margin: 0 0 1.5rem 1.5rem;
            color: var(--wp-text-body);
            font-size: 0.95rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .badge-box {
            background: var(--wp-bg-light);
            border: 1px solid var(--wp-border);
            border-left: 4px solid var(--wp-blue);
            border-radius: var(--wp-radius-sm);
            padding: 1.5rem 1.75rem;
            margin: 2rem 0;
            font-size: 0.95rem;
            line-height: 1.6;
        }
        .badge-box strong {
            color: var(--wp-navy-900);
        }

        @media (max-width: 768px) {
            .policy-content {
                padding: 1.75rem 1.25rem;
            }
        }
    </style>
</head>

<body>
    @include('partials.header')

    <header class="hero">
        <div class="wp-wrap">
            <span class="wp-eyebrow on-navy"><span class="wp-dot"></span> Legal &amp; Compliance</span>
            <h1>Privacy Policy &amp; Data Security</h1>
            <p>How Nexteck Consulting Ltd collects, processes, and safeguards corporate client data and operational inputs under UK GDPR and bilateral NDAs.</p>
        </div>
    </header>

    <main class="policy-container">
        <div class="policy-content rv in">
            <div class="badge-box">
                <strong>Executive Summary:</strong> All diagnostic assessments, system credentials, process diagrams, and commercial metrics shared with Nexteck are treated under strict confidentiality and covered by a mutual Non-Disclosure Agreement (NDA) prior to technical review. We never sell, licence, or monetise client data.
            </div>

            <h2>1. Company Identity &amp; Data Controller</h2>
            <p>
                This privacy notice applies to <strong>Nexteck Consulting Ltd</strong> ("Nexteck", "we", "our", or "us"), registered in England and Wales. We act as the Data Controller under the UK Data Protection Act 2018 and UK General Data Protection Regulation (UK GDPR).
            </p>
            <p>
                For any inquiries regarding data protection or confidentiality, please contact our data governance team at <a href="mailto:info@nexteck.co.uk">info@nexteck.co.uk</a>.
            </p>

            <h2>2. Information We Collect</h2>
            <p>When you interact with our website, request a consultation, or complete an advisory assessment, we collect:</p>
            <ul>
                <li><strong>Identity Data:</strong> Full name, professional job title, company name.</li>
                <li><strong>Contact Data:</strong> Corporate email address, telephone number, business headquarters location.</li>
                <li><strong>Operational Inputs:</strong> Responses provided in our Technology Health Check, Automation Calculator, or SME Strategy Toolkit (e.g., software stacks, team size, process bottlenecks).</li>
                <li><strong>Technical Data:</strong> Internet protocol (IP) address, browser type, operating system, and diagnostic session logs collected strictly for security monitoring and fraud prevention.</li>
            </ul>

            <h2>3. How We Use Your Information</h2>
            <p>We process your data strictly on the basis of legitimate commercial interest and pre-contractual requests:</p>
            <ul>
                <li>To evaluate operational friction points and prepare your custom 90-day technology roadmap.</li>
                <li>To respond to inbound strategy call requests and schedule video discovery consultations.</li>
                <li>To calculate indicative ROI and weekly recaptured capacity based on your inputs.</li>
                <li>To uphold IT security standards and prevent abuse of our public diagnostic calculators.</li>
            </ul>

            <h2>4. Mutual Non-Disclosure &amp; IP Ownership</h2>
            <p>
                We recognize that reviewing internal business processes involves sensitive commercial operational details. We execute a mutual NDA before receiving proprietary file exports, database credentials, or financial ledgers.
            </p>
            <p>
                <strong>100% Client IP:</strong> All deliverables — including bespoke software code, custom APIs, SOP registers, KPI dashboards, and architectural blueprints — remain the sole and exclusive intellectual property of the client.
            </p>

            <h2>5. Data Retention &amp; Deletion</h2>
            <p>
                We retain client engagement data only for as long as necessary to fulfil the purposes of the advisory project. Working data copies used during technical audits are permanently deleted upon project completion and written client sign-off.
            </p>

            <h2>6. Your Statutory Rights</h2>
            <p>Under the UK GDPR, you have the right to request access to your personal data, rectify inaccuracies, request erasure, or object to processing. To exercise any of these rights, contact <a href="mailto:info@nexteck.co.uk">info@nexteck.co.uk</a>.</p>
        </div>
    </main>

    @include('partials.footer')
</body>

</html>
