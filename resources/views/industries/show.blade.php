@php
    $industryTitle = is_object($industry) ? $industry->title : $industry['title'];
    $industrySlug = is_object($industry) ? $industry->slug : $industry['slug'];
    $industryTagline = is_object($industry) ? $industry->tagline : $industry['tagline'];
    $industryShortDesc = is_object($industry) ? $industry->short_desc : $industry['short_desc'];
    $industryImage = is_object($industry) ? ($industry->image_url ?? asset($industry->image ?? 'images/A3.png')) : (isset($industry['image_url']) ? $industry['image_url'] : asset($industry['image'] ?? 'images/A3.png'));
    $industryHighlights = is_object($industry) ? ($industry->highlights ?? []) : ($industry['highlights'] ?? []);
    $industryWhyNexteck = is_object($industry) ? ($industry->why_nexteck ?? '') : ($industry['why_nexteck'] ?? '');
    $industrySeoTitle = is_object($industry) ? ($industry->seo_title ?: ($industryTitle . ' Sourcing & Technology | Nexteck')) : ($industry['seo_title'] ?? $industryTitle);
    $industryMetaDesc = is_object($industry) ? ($industry->meta_desc ?: $industryTagline) : ($industry['meta_desc'] ?? $industryTagline);
    $industryKeywords = is_object($industry) ? ($industry->keywords ?? []) : ($industry['keywords'] ?? []);
    $industryKeywordsStr = is_array($industryKeywords) ? implode(', ', $industryKeywords) : (string)$industryKeywords;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $industrySeoTitle }}</title>
    <meta name="description" content="{{ $industryMetaDesc }}">
    <meta name="keywords" content="{{ $industryKeywordsStr }}, Nexteck London, UK Engineering Supply">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="{{ url('/industries/' . $industrySlug) }}">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Nexteck">
    <meta property="og:title" content="{{ $industrySeoTitle }}">
    <meta property="og:description" content="{{ $industryMetaDesc }}">
    <meta property="og:image" content="{{ $industryImage }}">
    <meta property="og:url" content="{{ url('/industries/' . $industrySlug) }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $industrySeoTitle }}">
    <meta name="twitter:description" content="{{ $industryMetaDesc }}">
    <meta name="twitter:image" content="{{ $industryImage }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/wipro-theme.css') }}">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "{{ $industryTitle }} — Sourcing & Technology Solutions",
      "serviceType": "Industrial Sourcing & Technology Consulting",
      "provider": {
        "@type": "ProfessionalService",
        "name": "Nexteck",
        "url": "{{ url('/') }}",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "London",
          "addressCountry": "GB"
        }
      },
      "areaServed": ["United Kingdom", "London", "Global"],
      "description": "{{ $industryMetaDesc }}"
    }
    </script>

    <style>
        .detail-hero {
            position: relative;
            background: 
                linear-gradient(135deg, rgba(0, 15, 36, 0.92) 0%, rgba(0, 27, 58, 0.88) 50%, rgba(0, 15, 36, 0.95) 100%),
                radial-gradient(ellipse at 50% 30%, rgba(56, 189, 248, 0.22) 0%, transparent 60%),
                url('{{ $industryImage }}') center center / cover no-repeat;
            color: #FFFFFF;
            padding: 85px 0 70px;
            overflow: hidden;
            border-bottom: 3px solid var(--wp-spectrum-blue);
        }

        .breadcrumbs {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.82rem;
            color: #94A3B8;
            font-family: var(--wp-font-display);
            margin-bottom: 1.5rem;
        }
        .breadcrumbs a {
            color: #CBD5E1;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        .breadcrumbs a:hover {
            color: #38BDF8;
        }

        .detail-hero h1 {
            font-size: clamp(2.2rem, 4vw, 3.4rem);
            color: #FFFFFF;
            margin: 0.85rem 0 1rem;
            line-height: 1.18;
        }

        .detail-hero p.tagline {
            font-size: 1.25rem;
            color: #38BDF8;
            font-family: var(--wp-font-display);
            font-weight: 600;
            margin-bottom: 1.25rem;
        }

        .detail-hero p.desc {
            font-size: 1.1rem;
            color: #CBD5E1;
            max-width: 780px;
            line-height: 1.7;
        }

        .detail-layout {
            display: grid;
            grid-template-columns: 1.8fr 1fr;
            gap: 3.5rem;
            padding: 4.5rem 0 6.5rem;
        }

        .detail-main-img {
            width: 100%;
            height: 380px;
            object-fit: cover;
            border-radius: var(--wp-radius-md);
            border: 1px solid var(--wp-border);
            margin-bottom: 2.75rem;
            box-shadow: var(--wp-shadow-md);
        }

        .detail-section-title {
            font-size: 1.6rem;
            color: var(--wp-navy-900);
            margin-bottom: 1.25rem;
            font-family: var(--wp-font-display);
            position: relative;
            padding-bottom: 0.5rem;
        }
        .detail-section-title::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 36px;
            height: 3px;
            background: var(--wp-blue);
            border-radius: 2px;
        }

        .scope-list {
            list-style: none;
            padding: 0;
            margin: 0 0 3rem;
            display: flex;
            flex-direction: column;
            gap: 1.15rem;
        }
        .scope-item {
            background: #FFFFFF;
            border: 1px solid var(--wp-border);
            border-left: 4px solid var(--wp-blue);
            border-radius: 0 var(--wp-radius-sm) var(--wp-radius-sm) 0;
            padding: 1.2rem 1.5rem;
            box-shadow: var(--wp-shadow-xs);
            font-size: 0.96rem;
            color: var(--wp-text-body);
            line-height: 1.55;
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
        }
        .scope-item svg {
            color: var(--wp-blue);
            flex-shrink: 0;
            margin-top: 3px;
        }

        .why-card {
            background: var(--wp-bg-light);
            border: 1px solid var(--wp-border);
            border-radius: var(--wp-radius-md);
            padding: 2.25rem;
            margin-bottom: 3rem;
        }
        .why-card p {
            font-size: 1.02rem;
            color: var(--wp-text-body);
            line-height: 1.7;
            margin: 0;
        }

        /* Sidebar Cards */
        .sidebar-card {
            background: #FFFFFF;
            border: 1px solid var(--wp-border);
            border-radius: var(--wp-radius-md);
            padding: 2.25rem;
            box-shadow: var(--wp-shadow-card);
            margin-bottom: 2rem;
            position: sticky;
            top: 96px;
        }
        .sidebar-card h3 {
            font-size: 1.25rem;
            color: var(--wp-navy-900);
            margin-bottom: 0.75rem;
        }
        .sidebar-card p {
            font-size: 0.92rem;
            color: var(--wp-text-muted);
            line-height: 1.55;
            margin-bottom: 1.5rem;
        }

        .rail-callout {
            background: rgba(0, 114, 206, 0.06);
            border: 1px solid rgba(0, 114, 206, 0.2);
            border-radius: var(--wp-radius-sm);
            padding: 1.25rem;
            margin-top: 1.5rem;
            font-size: 0.88rem;
            color: var(--wp-navy-900);
            line-height: 1.5;
        }

        @media (max-width: 960px) {
            .detail-layout {
                grid-template-columns: 1fr;
                gap: 3rem;
            }
            .sidebar-card {
                position: static;
            }
        }
    </style>
</head>

<body>
    @include('partials.header')

    <!-- ================= HERO ================= -->
    <header class="detail-hero">
        <div class="wp-wrap">
            <nav class="breadcrumbs" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span aria-hidden="true">&rsaquo;</span>
                <a href="{{ route('industries.index') }}">Industries</a>
                <span aria-hidden="true">&rsaquo;</span>
                <span style="color:#94A3B8;">{{ $industryTitle }}</span>
            </nav>

            <span class="wp-badge wp-badge-blue">Industry Specialisation</span>
            <h1>{{ $industryTitle }}</h1>
            <p class="tagline">{{ $industryTagline }}</p>
            <p class="desc">{{ $industryShortDesc }}</p>
        </div>
    </header>

    <!-- ================= MAIN DETAIL LAYOUT ================= -->
    <main class="wp-wrap detail-layout">
        <!-- Left Content Area -->
        <div>
            <img src="{{ $industryImage }}" alt="{{ $industryTitle }}" class="detail-main-img">

            <h2 class="detail-section-title">Technical Capabilities &amp; Supply Scope</h2>
            
            @if(count($industryHighlights) > 0)
                <ul class="scope-list">
                    @foreach($industryHighlights as $highlight)
                        <li class="scope-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>{{ $highlight }}</span>
                        </li>
                    @endforeach
                </ul>
            @endif

            @if(!empty($industryWhyNexteck))
                <h2 class="detail-section-title">The Nexteck Advantage in {{ $industryTitle }}</h2>
                <div class="why-card">
                    <p>{{ $industryWhyNexteck }}</p>
                </div>
            @endif

            @if($industrySlug === 'railways-pearlconrail' || str_contains($industrySlug, 'rail'))
                <div class="rail-callout" style="background:#FFFFFF; border:1px solid var(--wp-border); border-left:4px solid var(--wp-spectrum-teal); border-radius:var(--wp-radius-md); padding:1.75rem; box-shadow:var(--wp-shadow-xs); margin-bottom:3rem;">
                    <span class="wp-badge wp-badge-teal" style="margin-bottom:0.75rem;">Strategic Partner Collaboration</span>
                    <h3 style="font-size:1.25rem; color:var(--wp-navy-900); margin-bottom:0.5rem;">Pearlcon Rail UK Supply Ecosystem</h3>
                    <p style="color:var(--wp-text-body); font-size:0.95rem; line-height:1.6; margin:0;">
                        In direct partnership with <a href="https://pearlconrail.co.uk" target="_blank" rel="noopener" style="color:var(--wp-blue); font-weight:700;">pearlconrail.co.uk</a>, Nexteck supports UK rolling stock operators and maintenance contractors with verified European and Asian component sourcing, EN 45545 fire standards compliance, and real-time fleet telematics.
                    </p>
                </div>
            @endif

            <div style="display:flex; gap:1.25rem; flex-wrap:wrap; margin-top:2rem;">
                <a href="{{ route('landing') }}#book" class="btn-wp btn-wp-primary btn-wp-lg">
                    Schedule Sector Consultation <i class="fa-solid fa-arrow-right" style="margin-left:5px;"></i>
                </a>
                <a href="{{ route('industries.index') }}" class="btn-wp btn-wp-outline btn-wp-lg">
                    <i class="fa-solid fa-arrow-left" style="margin-right:5px;"></i> View All Industries
                </a>
            </div>
        </div>

        <!-- Right Sticky Action Card -->
        <aside>
            <div class="sidebar-card">
                <span class="wp-eyebrow"><span class="wp-dot"></span> Fast Track</span>
                <h3>Need {{ $industryTitle }} Support?</h3>
                <p>Discuss your operational bottlenecks, custom software integration, or OEM spares procurement with our specialist architecture team.</p>

                <div style="display:flex; flex-direction:column; gap:0.85rem; margin-bottom:1.75rem; font-size:0.88rem; color:var(--wp-text-body);">
                    <div><i class="fa-solid fa-location-dot" style="color:var(--wp-blue); width:18px;"></i> <b>UK Office:</b> London, United Kingdom</div>
                    <div><i class="fa-solid fa-bolt" style="color:#FFB81C; width:18px;"></i> <b>Delivery:</b> 25+ Years Boardroom Experience</div>
                    <div><i class="fa-solid fa-shield-halved" style="color:#10B981; width:18px;"></i> <b>Confidentiality:</b> Bilateral NDA Upfront</div>
                </div>

                <a href="{{ route('landing') }}#book" class="btn-wp btn-wp-primary" style="width:100%; justify-content:center;">
                    Book Strategy Session <i class="fa-solid fa-arrow-right" style="margin-left:5px;"></i>
                </a>
                
                <a href="tel:+447879175585" class="btn-wp btn-wp-outline" style="width:100%; justify-content:center; margin-top:0.75rem;">
                    <i class="fa-solid fa-phone" style="margin-right:6px; color:var(--wp-blue);"></i> +44 (0)78 7917 5585
                </a>
            </div>
        </aside>
    </main>

    @include('partials.footer')
</body>

</html>
