<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enterprise IT Strategy, AI &amp; Software Insights | Nexteck London</title>
    <meta name="description" content="Expert insights and executive whitepapers on bespoke software architecture, AI readiness, workflow automation, and enterprise scaling by Nexteck London.">
    <meta name="keywords" content="Software Development Blog London, Custom Software Insights UK, AI Readiness SMEs, Web Development London, Nexteck Insights">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="{{ url('/blogs') }}">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Nexteck">
    <meta property="og:title" content="Enterprise IT Strategy, AI &amp; Software Insights | Nexteck London">
    <meta property="og:description" content="Expert insights on bespoke software development, AI readiness, workflow automation, and SME growth by Nexteck London.">
    <meta property="og:url" content="{{ url('/blogs') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Enterprise IT Strategy, AI &amp; Software Insights | Nexteck London">
    <meta name="twitter:description" content="Expert insights on bespoke software development, AI readiness, workflow automation, and SME growth by Nexteck London.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/wipro-theme.css') }}">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Blog",
      "name": "Nexteck Insights — Enterprise Software & AI Strategy London",
      "url": "{{ url('/blogs') }}",
      "description": "Executive articles on custom software development, web applications, IT strategy, and AI automation for SMEs in London and the UK.",
      "publisher": {
        "@type": "Organization",
        "name": "Nexteck — Software Development Company London",
        "url": "{{ url('/') }}"
      }
    }
    </script>

    <style>
        .blogs-hero {
            position: relative;
            background: 
                linear-gradient(135deg, rgba(0, 15, 36, 0.92) 0%, rgba(0, 27, 58, 0.88) 50%, rgba(0, 15, 36, 0.95) 100%),
                radial-gradient(ellipse at 50% 30%, rgba(56, 189, 248, 0.22) 0%, transparent 60%),
                url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=2000&q=80') center center / cover no-repeat;
            padding: 95px 0 85px;
            text-align: center;
            color: #FFFFFF;
            overflow: hidden;
            border-bottom: 3px solid var(--wp-spectrum-blue);
        }

        .blogs-hero::before {
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

        .blogs-hero h1 {
            font-size: clamp(2.3rem, 4.4vw, 3.6rem);
            color: #FFFFFF;
            margin: 0.85rem 0 1.25rem;
            position: relative;
            z-index: 2;
        }

        .blogs-hero p {
            max-width: 760px;
            margin: 0 auto;
            color: #CBD5E1;
            font-size: 1.15rem;
            line-height: 1.7;
            position: relative;
            z-index: 2;
        }

        .blogs-container {
            padding: 5rem 0 6.5rem;
            background: var(--wp-bg-light);
        }

        .blogs-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2.25rem;
        }

        .blog-card {
            background: #FFFFFF;
            border: 1px solid var(--wp-border);
            border-radius: var(--wp-radius-md);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: var(--wp-shadow-xs);
            position: relative;
        }

        .blog-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--wp-shadow-md);
            border-color: #CBD5E1;
        }

        .blog-img-wrap {
            height: 220px;
            width: 100%;
            background: var(--wp-navy-900);
            overflow: hidden;
            position: relative;
        }

        .blog-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.45s ease;
        }

        .blog-card:hover .blog-img {
            transform: scale(1.06);
        }

        .blog-content {
            padding: 2rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .blog-meta-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 0.85rem;
            font-size: 0.78rem;
            color: var(--wp-text-muted);
            font-family: var(--wp-font-display);
            font-weight: 600;
        }

        .blog-date {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
        }

        .blog-title {
            font-size: 1.32rem;
            color: var(--wp-navy-900);
            margin-bottom: 0.85rem;
            line-height: 1.35;
        }
        .blog-title a {
            color: inherit;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        .blog-title a:hover {
            color: var(--wp-blue);
        }

        .blog-excerpt {
            color: var(--wp-text-body);
            font-size: 0.92rem;
            margin-bottom: 1.75rem;
            flex-grow: 1;
            line-height: 1.62;
        }

        .blog-link {
            font-family: var(--wp-font-display);
            font-weight: 700;
            font-size: 0.9rem;
            color: var(--wp-blue);
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            transition: gap 0.2s ease;
            margin-top: auto;
        }
        .blog-card:hover .blog-link {
            gap: 0.65rem;
            color: var(--wp-blue-hover);
        }

        .no-blogs {
            text-align: center;
            padding: 5rem 0;
            color: var(--wp-text-muted);
            font-size: 1.15rem;
        }

        .pagination-wrap {
            margin-top: 4rem;
        }

        @media (max-width: 960px) {
            .blogs-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 640px) {
            .blogs-grid {
                grid-template-columns: 1fr;
            }
            .blogs-hero {
                padding: 65px 0 50px;
            }
        }
    </style>
</head>

<body>
    @include('partials.header')

    <!-- ================= HERO ================= -->
    <section class="blogs-hero">
        <div class="wp-wrap">
            <span class="wp-eyebrow on-navy"><span class="wp-dot"></span> Enterprise Thought Leadership</span>
            <h1>Insights, Strategy &amp; AI Roadmaps</h1>
            <p>Practical frameworks on custom software architecture, AI readiness, workflow automation, and enterprise scaling for UK business leaders.</p>
        </div>
    </section>

    <!-- ================= BLOG ARTICLES GRID ================= -->
    <main class="blogs-container">
        <div class="wp-wrap">
            @if($blogs->count() > 0)
                <div class="blogs-grid">
                    @foreach($blogs as $index => $blog)
                        @php
                            $spectrumAccents = ['blue', 'teal', 'green', 'yellow', 'pink', 'purple'];
                            $accent = $spectrumAccents[$index % count($spectrumAccents)];
                            
                            $imageUrl = null;
                            if (!empty($blog->image)) {
                                if (str_starts_with($blog->image, 'http') || str_starts_with($blog->image, 'images/')) {
                                    $imageUrl = asset($blog->image);
                                } else {
                                    $imageUrl = asset('storage/' . $blog->image);
                                }
                            } else {
                                $fallbacks = ['images/0.jpg', 'images/1.jpg', 'images/2.jpg', 'images/3.jpg', 'images/A3.png', 'images/A4.png'];
                                $imageUrl = asset($fallbacks[$index % count($fallbacks)]);
                            }
                        @endphp

                        <article class="blog-card rv" data-spectrum="{{ $accent }}">
                            <div class="blog-img-wrap">
                                <img src="{{ $imageUrl }}" alt="{{ $blog->title }}" class="blog-img" loading="lazy">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta-bar">
                                    <span class="blog-date"><i class="fa-regular fa-calendar-days" style="margin-right:5px; color:var(--wp-blue);"></i>{{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'Recent' }}</span>
                                    <span class="wp-badge wp-badge-{{ $accent }}">Executive Insight</span>
                                </div>
                                <h2 class="blog-title">
                                    <a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a>
                                </h2>
                                <p class="blog-excerpt">
                                    {{ Str::limit(strip_tags($blog->description ?? $blog->content), 135) }}
                                </p>
                                <a href="{{ route('blogs.show', $blog->slug) }}" class="blog-link">
                                    Read Analysis <i class="fa-solid fa-arrow-right" style="margin-left:5px;"></i>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="pagination-wrap">
                    {{ $blogs->links('partials.pagination') }}
                </div>
            @else
                <div class="no-blogs">
                    <p>No published articles found at this time. Check back soon for new enterprise publications.</p>
                </div>
            @endif
        </div>
    </main>

    @include('partials.footer')

    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("in");
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });
        document.querySelectorAll(".rv").forEach(el => observer.observe(el));
    </script>
</body>

</html>
