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
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "{{ $industryTitle }} — Supply & Technology Solutions",
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
        :root {
            --ink: #090D16;
            --ink-2: #131926;
            --muted: #64748B;
            --line: #E2E8F0;
            --paper: #FFFFFF;
            --cream: #F8FAFC;
            --gold: #0EA5E9;
            --gold-2: #38BDF8;
            --sky-dark: #0284C7;
            --sky-soft: rgba(14, 165, 233, 0.08);
            --shadow: 0 16px 36px -12px rgba(9, 13, 22, 0.08);
            --radius: 12px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', system-ui, sans-serif; color: var(--ink); background: var(--paper); line-height: 1.6; -webkit-font-smoothing: antialiased; overflow-x: hidden; }
        h1, h2, h3, .serif { font-family: 'Fraunces', Georgia, serif; font-weight: 600; line-height: 1.15; letter-spacing: -.01em; }
        a { color: inherit; text-decoration: none; }
        .wrap { width: min(1180px, 92%); margin: 0 auto; }

        /* Announcement + Nav */
        .topbar { background: var(--ink); color: #fff; font-size: .82rem; text-align: center; padding: .55rem 1rem; position: relative; z-index: 60; }
        .topbar b { color: var(--gold-2); }
        .topbar .cd { font-variant-numeric: tabular-nums; font-weight: 700; color: var(--gold-2); }
        nav { position: sticky; top: 0; z-index: 50; background: rgba(255, 255, 255, .94); backdrop-filter: blur(14px); border-bottom: 1px solid var(--line); }
        .nav-in { display: flex; align-items: center; justify-content: space-between; height: 74px; }
        .logo { font-family: 'Fraunces', serif; font-size: 1.55rem; font-weight: 700; letter-spacing: -.02em; }
        .logo span { color: var(--gold); }
        .logo small { display: block; font-family: 'Inter'; font-size: .58rem; letter-spacing: .34em; color: var(--muted); font-weight: 600; margin-top: -4px; }
        .nav-links { display: flex; gap: 2rem; align-items: center; font-size: .92rem; font-weight: 500; }
        .nav-links a { color: var(--ink-2); position: relative; }
        .nav-links a:hover { color: var(--gold); }
        .btn { display: inline-flex; align-items: center; gap: .6rem; font-weight: 600; font-size: .95rem; padding: .85rem 1.6rem; border-radius: 8px; cursor: pointer; border: 1.5px solid transparent; transition: all .2s ease; }
        .btn-gold { background: var(--gold); color: #fff; box-shadow: 0 4px 14px rgba(14, 165, 233, .35); }
        .btn-gold:hover { background: #0284C7; transform: translateY(-2px); box-shadow: 0 8px 24px rgba(14, 165, 233, .45); }
        .btn-outline { background: #fff; color: var(--ink); border: 1px solid var(--line); }
        .btn-outline:hover { border-color: var(--gold); color: var(--gold); }
        .nav-cta { padding: .68rem 1.35rem; }
        .burger { display: none; background: none; border: 0; font-size: 1.5rem; cursor: pointer; }

        /* Detail Hero */
        .detail-hero { background: var(--ink); color: #fff; position: relative; padding: 4.5rem 0 3.5rem; overflow: hidden; }
        .detail-hero-bg { position: absolute; inset: 0; opacity: 0.18; }
        .detail-hero-bg img { width: 100%; height: 100%; object-fit: cover; }
        .detail-hero .wrap { position: relative; z-index: 2; }
        .breadcrumbs { font-size: .84rem; color: #94A3B8; margin-bottom: 1.2rem; }
        .breadcrumbs a:hover { color: var(--gold-2); }
        .eyebrow { display: inline-flex; align-items: center; gap: .55rem; font-size: .74rem; font-weight: 700; letter-spacing: .16em; text-transform: uppercase; color: var(--gold-2); margin-bottom: .8rem; }
        .detail-hero h1 { font-size: clamp(2.3rem, 4.2vw, 3.4rem); color: #fff; margin-bottom: .85rem; }
        .detail-hero .tagline { font-size: 1.25rem; color: #E2E8F0; max-width: 820px; font-weight: 500; line-height: 1.5; margin-bottom: 1.5rem; }

        /* Main Content Layout */
        .content-sec { padding: 4rem 0 6rem; background: var(--paper); }
        .content-grid { display: grid; grid-template-columns: 2fr 1fr; gap: 3.5rem; }

        /* Featured Image Card */
        .featured-img-wrap { border-radius: var(--radius); overflow: hidden; box-shadow: var(--shadow); margin-bottom: 2.5rem; height: 380px; }
        .featured-img-wrap img { width: 100%; height: 100%; object-fit: cover; }

        .article-body h2 { font-size: 1.75rem; color: var(--ink); margin: 2rem 0 1rem; }
        .article-body p { font-size: 1.04rem; color: #334155; line-height: 1.7; margin-bottom: 1.4rem; }

        /* Specifications / Highlights */
        .specs-list { list-style: none; display: flex; flex-direction: column; gap: 1rem; margin: 1.5rem 0 2.5rem; }
        .specs-item { display: flex; align-items: flex-start; gap: 1rem; background: var(--cream); border: 1px solid var(--line); padding: 1.1rem 1.4rem; border-radius: 12px; font-size: .98rem; color: var(--ink); }
        .specs-item-icon { width: 24px; height: 24px; border-radius: 50%; background: var(--gold); color: #fff; display: flex; align-items: center; justify-content: center; font-size: .8rem; font-weight: 700; flex-shrink: 0; margin-top: .15rem; }

        /* Why Nexteck Box */
        .why-box { background: linear-gradient(135deg, #FFFDF8 0%, #FBF6EB 100%); border: 1.5px solid #E5D5B0; border-radius: var(--radius); padding: 2rem; margin: 2.5rem 0; }
        .why-box h3 { font-size: 1.3rem; color: var(--ink); margin-bottom: .75rem; display: flex; align-items: center; gap: .5rem; }
        .why-box p { font-size: 1rem; color: #475569; line-height: 1.65; margin-bottom: 0; }

        /* Sidebar CTA & Keywords */
        .sidebar-card { background: var(--cream); border: 1px solid var(--line); border-radius: var(--radius); padding: 2rem; margin-bottom: 2rem; }
        .sidebar-card h3 { font-size: 1.25rem; color: var(--ink); margin-bottom: 1rem; }
        .sidebar-card p { font-size: .92rem; color: var(--muted); margin-bottom: 1.5rem; }
        .kw-list { display: flex; flex-direction: column; gap: .6rem; }
        .kw-item { background: #fff; border: 1px solid var(--line); border-radius: 8px; padding: .55rem .85rem; font-size: .82rem; font-weight: 600; color: var(--ink-2); }

        /* Related Industries */
        .related-sec { background: var(--cream); padding: 4.5rem 0 5rem; border-top: 1px solid var(--line); }
        .related-sec h2 { font-size: 2rem; text-align: center; margin-bottom: 2.5rem; }
        .related-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; }
        .rel-card { background: #fff; border: 1px solid var(--line); border-radius: var(--radius); overflow: hidden; display: flex; flex-direction: column; transition: transform .25s; }
        .rel-card:hover { transform: translateY(-5px); border-color: var(--gold); }
        .rel-img { height: 180px; width: 100%; object-fit: cover; }
        .rel-body { padding: 1.4rem; flex-grow: 1; display: flex; flex-direction: column; }
        .rel-title { font-family: 'Fraunces', serif; font-size: 1.18rem; margin-bottom: .5rem; }
        .rel-tagline { font-size: .86rem; color: var(--muted); margin-bottom: 1rem; flex-grow: 1; }

        footer { background: var(--ink); color: #fff; padding: 4rem 0 2rem; }
        .foot-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1.2fr; gap: 2rem; margin-bottom: 3rem; }
        .foot-grid h4 { color: #fff; margin-bottom: 1.2rem; font-size: 1rem; }
        .foot-links { display: flex; flex-direction: column; gap: 0.6rem; }
        .foot-links a { color: #8E99AD; text-decoration: none; font-size: 0.88rem; transition: color .2s; }
        .foot-links a:hover { color: #fff; }
        .foot-bottom { border-top: 1px solid rgba(255,255,255,.1); padding-top: 1.8rem; display: flex; justify-content: space-between; font-size: 0.82rem; color: #8E99AD; }

        @media (max-width: 960px) {
            .content-grid { grid-template-columns: 1fr; }
            .related-grid { grid-template-columns: 1fr; }
            .foot-grid { grid-template-columns: 1fr 1fr; }
        }
        @media (max-width: 640px) {
            .foot-grid { grid-template-columns: 1fr; }
            .detail-hero { padding: 4rem 0 3rem; }
            .detail-hero h1 { font-size: clamp(1.85rem, 6.5vw, 2.6rem); }
            .content-area { padding: 3rem 0 4rem; }
            .specs-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <section class="detail-hero">
        <div class="detail-hero-bg">
            <img src="{{ $industryImage }}" alt="{{ $industryTitle }}">
        </div>
        <div class="wrap">
            <div class="breadcrumbs">
                <a href="{{ route('home') }}">Home</a> &nbsp;/&nbsp;
                <a href="{{ route('industries.index') }}">Industries</a> &nbsp;/&nbsp;
                <span>{{ $industryTitle }}</span>
            </div>
            <div class="eyebrow">Sector Sourcing &amp; Engineering Solutions</div>
            <h1>{{ $industryTitle }}</h1>
            <p class="tagline">{{ $industryTagline }}</p>
            <div style="display:flex; gap:1rem; flex-wrap:wrap;">
                <a href="{{ route('landing') }}#book" class="btn btn-gold">Inquire for {{ $industryTitle }} Sourcing &rarr;</a>
                <a href="{{ route('toolkit.index') }}" class="btn btn-outline" style="background:rgba(255,255,255,.1); color:#fff; border-color:rgba(255,255,255,.3);">Assess in SME Toolkit</a>
            </div>
        </div>
    </section>

    <main class="content-sec">
        <div class="wrap">
            <div class="content-grid">
                <!-- Main Body -->
                <article class="article-body">
                    <div class="featured-img-wrap">
                        <img src="{{ $industryImage }}" alt="{{ $industryTitle }} procurement and technology supply">
                    </div>

                    <h2>Strategic Sourcing &amp; Operational Excellence in {{ $industryTitle }}</h2>
                    <p>{{ $industryShortDesc }}</p>

                    @if(!empty($industryHighlights) && count($industryHighlights) > 0)
                        <h2>Key Supply Scope &amp; Engineering Specifications</h2>
                        <ul class="specs-list">
                            @foreach($industryHighlights as $hl)
                                <li class="specs-item">
                                    <span class="specs-item-icon">✓</span>
                                    <div>{{ $hl }}</div>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    @if(!empty($industryWhyNexteck))
                        <div class="why-box">
                            <h3>⭐ The Nexteck Advantage</h3>
                            <p>{{ $industryWhyNexteck }}</p>
                        </div>
                    @endif

                    @if($industrySlug === 'railways')
                        <div style="background:#090D16; border: 1px solid rgba(56, 189, 248, 0.2); color:#fff; padding:1.8rem 2rem; border-radius:12px; margin-top:2rem;">
                            <h3 style="color:var(--gold-2); margin-bottom:.6rem;">Verified Partner: pearlconrail.co.uk</h3>
                            <p style="color:#CBD5E1; font-size:.95rem; margin-bottom:1rem;">All railway rolling stock, braking systems, and infrastructure components are supplied in coordination with verified specialist networks at <a href="https://pearlconrail.co.uk" target="_blank" style="color:var(--gold-2); text-decoration:underline; font-weight:700;">pearlconrail.co.uk</a>.</p>
                            <a href="https://pearlconrail.co.uk" target="_blank" class="btn btn-gold" style="padding:.6rem 1.2rem; font-size:.85rem;">Visit pearlconrail.co.uk &rarr;</a>
                        </div>
                    @endif
                </article>

                <!-- Sidebar -->
                <aside>
                    <div class="sidebar-card">
                        <h3>Book a Sector Audit Call</h3>
                        <p>Need costed spare parts sourcing, custom fabrication, or digital supply chain automation for {{ $industryTitle }}? Speak directly with principal consultant Mohammed Nasar.</p>
                        <a href="{{ route('landing') }}#book" class="btn btn-gold" style="width:100%; justify-content:center;">Book Discovery Call &rarr;</a>
                    </div>
                </aside>
            </div>
        </div>
    </main>

    <!-- Related Industries -->
    @if(isset($related) && count($related) > 0)
        <section class="related-sec">
            <div class="wrap">
                <h2>Explore Other Sectors</h2>
                <div class="related-grid">
                    @foreach($related as $rel)
                        @php
                            $relTitle = is_object($rel) ? $rel->title : $rel['title'];
                            $relSlug = is_object($rel) ? $rel->slug : $rel['slug'];
                            $relTagline = is_object($rel) ? $rel->tagline : $rel['tagline'];
                            $relImg = is_object($rel) ? ($rel->image_url ?? asset($rel->image ?? 'images/A3.png')) : (isset($rel['image_url']) ? $rel['image_url'] : asset($rel['image'] ?? 'images/A3.png'));
                        @endphp
                        <article class="rel-card">
                            <img src="{{ $relImg }}" alt="{{ $relTitle }}" class="rel-img">
                            <div class="rel-body">
                                <h3 class="rel-title"><a href="{{ route('industries.show', $relSlug) }}">{{ $relTitle }}</a></h3>
                                <p class="rel-tagline">{{ Str::limit($relTagline, 75) }}</p>
                                <a href="{{ route('industries.show', $relSlug) }}" style="color:var(--gold); font-weight:700; font-size:.88rem; margin-top:auto;">
                                    Read More &rarr;
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @include('partials.footer')
</body>
</html>
