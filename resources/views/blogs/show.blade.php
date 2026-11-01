<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ Str::limit($blog->title, 55, '') }} | Nexteck London</title>
    <meta name="description" content="{{ Str::limit(strip_tags($blog->description), 155) }}">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="{{ url('/blogs/' . $blog->slug) }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url('/blogs/' . $blog->slug) }}">
    <meta property="og:title" content="{{ $blog->title }} — Nexteck Insights">
    <meta property="og:description" content="{{ Str::limit(strip_tags($blog->description), 160) }}">
    @if($blog->image)
        <meta property="og:image" content="{{ asset($blog->image) }}">
    @endif

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $blog->title }} — Nexteck Insights">
    <meta name="twitter:description" content="{{ Str::limit(strip_tags($blog->description), 160) }}">

    <!-- Schema.org Article Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BlogPosting",
      "headline": "{{ addslashes($blog->title) }}",
      "description": "{{ addslashes(Str::limit(strip_tags($blog->description), 160)) }}",
      "datePublished": "{{ $blog->created_at ? $blog->created_at->toIso8601String() : now()->toIso8601String() }}",
      "author": {
        "@type": "Person",
        "name": "Mohammed Nasar",
        "jobTitle": "Principal Consultant & Software Architect"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Nexteck Consulting Ltd",
        "url": "{{ url('/') }}"
      }
    }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/wipro-theme.css') }}">

    <style>
        .blog-hero {
            position: relative;
            background: 
                linear-gradient(135deg, rgba(0, 15, 36, 0.93) 0%, rgba(0, 27, 58, 0.89) 50%, rgba(0, 15, 36, 0.96) 100%),
                radial-gradient(ellipse at 50% 30%, rgba(56, 189, 248, 0.22) 0%, transparent 60%),
                url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=2000&q=80') center center / cover no-repeat;
            color: #FFFFFF;
            padding: 75px 0 65px;
            overflow: hidden;
            border-bottom: 3px solid var(--wp-spectrum-blue);
        }

        .blog-hero-in {
            max-width: 860px;
            margin: 0 auto;
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

        .blog-hero h1 {
            font-size: clamp(2rem, 3.8vw, 3rem);
            color: #FFFFFF;
            line-height: 1.2;
            letter-spacing: -0.03em;
            margin-bottom: 1.5rem;
        }

        .author-bar {
            display: flex;
            align-items: center;
            gap: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.12);
            padding-top: 1.25rem;
        }
        .author-bar img {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--wp-blue);
        }
        .author-info b {
            display: block;
            font-size: 0.92rem;
            color: #FFFFFF;
            font-family: var(--wp-font-display);
        }
        .author-info span {
            font-size: 0.8rem;
            color: #94A3B8;
        }

        .blog-detail-container {
            max-width: 860px;
            margin: 3.5rem auto 6.5rem;
            padding: 0 1.5rem;
        }

        .blog-cover {
            width: 100%;
            max-height: 440px;
            object-fit: cover;
            border-radius: var(--wp-radius-md);
            margin-bottom: 3rem;
            border: 1px solid var(--wp-border);
            box-shadow: var(--wp-shadow-md);
        }

        /* Editorial Content Styling */
        .blog-body {
            font-size: 1.12rem;
            color: var(--wp-text-body);
            line-height: 1.85;
        }

        .blog-body p {
            margin-bottom: 1.75rem;
        }

        .blog-body h2,
        .blog-body .blog-heading {
            font-family: var(--wp-font-display);
            font-weight: 700;
            color: var(--wp-navy-900);
            margin: 2.75rem 0 1.15rem;
            font-size: 1.75rem;
            line-height: 1.28;
            letter-spacing: -0.02em;
        }

        .blog-body h3 {
            font-family: var(--wp-font-display);
            font-weight: 600;
            color: var(--wp-navy-900);
            margin: 2.2rem 0 0.9rem;
            font-size: 1.38rem;
            line-height: 1.32;
        }

        .blog-body strong,
        .blog-body b,
        .highlight-word {
            color: var(--wp-navy-900);
            font-weight: 700;
        }

        .blog-body blockquote,
        .blog-tagline {
            background: var(--wp-bg-light);
            border-left: 4px solid var(--wp-blue);
            padding: 1.5rem 2rem;
            border-radius: 0 var(--wp-radius-md) var(--wp-radius-md) 0;
            margin: 2.25rem 0;
            font-family: var(--wp-font-display);
            font-size: 1.2rem;
            font-style: italic;
            color: var(--wp-navy-900);
            box-shadow: var(--wp-shadow-xs);
            line-height: 1.6;
        }

        .blog-body ul,
        .blog-body ol {
            margin: 1.25rem 0 2rem 1.75rem;
            display: flex;
            flex-direction: column;
            gap: 0.65rem;
        }

        .blog-body li {
            color: var(--wp-text-body);
        }

        .blog-body a,
        .blog-ext-link {
            color: var(--wp-blue) !important;
            font-weight: 600 !important;
            text-decoration: underline !important;
            text-underline-offset: 4px !important;
            transition: color 0.2s ease !important;
        }
        .blog-body a:hover,
        .blog-ext-link:hover {
            color: var(--wp-blue-hover) !important;
        }

        /* Bottom Conversion CTA Banner */
        .cta-banner {
            background: linear-gradient(135deg, #00132E 0%, #002856 100%);
            color: #FFFFFF;
            border-radius: var(--wp-radius-lg);
            padding: 3rem 2.5rem;
            margin-top: 4.5rem;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: var(--wp-shadow-lg);
        }
        .cta-banner h3 {
            color: #FFFFFF;
            font-size: 1.75rem;
            margin-bottom: 0.85rem;
        }
        .cta-banner p {
            color: #CBD5E1;
            font-size: 1.05rem;
            max-width: 60ch;
            margin: 0 auto 1.85rem;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .blog-detail-container {
                margin: 2rem auto 4.5rem;
            }
            .blog-body {
                font-size: 1.02rem;
                line-height: 1.75;
            }
            .cta-banner {
                padding: 2.25rem 1.5rem;
            }
        }
    </style>
</head>

<body>
    @include('partials.header')

    <!-- ================= HERO HEADER ================= -->
    <header class="blog-hero">
        <div class="wp-wrap">
            <div class="blog-hero-in">
                <nav class="breadcrumbs" aria-label="Breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span aria-hidden="true">&rsaquo;</span>
                    <a href="{{ route('blogs.index') }}">Insights</a>
                    <span aria-hidden="true">&rsaquo;</span>
                    <span style="color:#94A3B8;">{{ Str::limit($blog->title, 40) }}</span>
                </nav>

                <span class="wp-badge wp-badge-blue" style="margin-bottom:1rem;">Executive Whitepaper</span>
                <h1>{{ $blog->title }}</h1>

                <div class="author-bar">
                    <img src="{{ asset('images/nasar.jpeg') }}" alt="Mohammed Nasar">
                    <div class="author-info">
                        <b>Mohammed Nasar</b>
                        <span>Principal Consultant &amp; Software Architect &nbsp;·&nbsp; <i class="fa-regular fa-calendar-days" style="margin-right:4px; color:#38BDF8;"></i>Published {{ $blog->created_at ? $blog->created_at->format('F d, Y') : 'Recently' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ================= ARTICLE BODY ================= -->
    <main class="blog-detail-container">
        <article>
            @php
                $imageUrl = null;
                if (!empty($blog->image)) {
                    if (str_starts_with($blog->image, 'http') || str_starts_with($blog->image, 'images/')) {
                        $imageUrl = asset($blog->image);
                    } else {
                        $imageUrl = asset('storage/' . $blog->image);
                    }
                }
            @endphp

            @if($imageUrl)
                <img class="blog-cover" src="{{ $imageUrl }}" alt="{{ $blog->title }}">
            @endif

            <div class="blog-body">
                {!! $blog->rendered_content !!}
            </div>

            <!-- Conversion Consultation Banner -->
            <div class="cta-banner">
                <span class="wp-eyebrow on-navy"><span class="wp-dot"></span> Next Steps</span>
                <h3>Ready to Audit Your Business &amp; AI Readiness?</h3>
                <p>Book a free 45-minute live strategy consultation with Mohammed Nasar to review your systems and uncover practical automation gains.</p>
                <a href="{{ route('landing') }}#book" class="btn-wp btn-wp-primary btn-wp-lg" style="background:#38BDF8; color:#001B3A !important; font-weight:800;">
                    Book Your Free Strategy Call <i class="fa-solid fa-arrow-right arrow-icon" style="margin-left:6px;"></i>
                </a>
            </div>
        </article>
    </main>

    @include('partials.footer')

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const links = document.querySelectorAll('.blog-body a');
            links.forEach(function (link) {
                link.setAttribute('target', '_blank');
                link.setAttribute('rel', 'noopener noreferrer');
            });
        });
    </script>
</body>

</html>
