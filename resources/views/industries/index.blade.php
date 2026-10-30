<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industries &amp; Engineering Supply Chains | Nexteck London</title>
    <meta name="description" content="Explore Nexteck's 9 targeted industries: Oil &amp; Gas, Mining &amp; Drilling, Industrial Plants, Railways, Water Treatment, Chemicals, Manufacturing, Medical &amp; Global Sourcing.">
    <meta name="keywords" content="Industrial Sourcing London, Oil Gas Petrochemicals Sourcing, Mining Drilling Consumables, Railways pearlconrail.co.uk, Manufacturing Plants Supply, Low Cost Country Sourcing India Asia, UK Engineering Procurement">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="{{ url('/industries') }}">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Nexteck">
    <meta property="og:title" content="Industries &amp; Engineering Supply Chains | Nexteck London">
    <meta property="og:description" content="Explore Nexteck's 9 targeted industries: Oil &amp; Gas, Mining &amp; Drilling, Industrial Plants, Railways, Water Treatment, Chemicals, Manufacturing, Medical &amp; Global Sourcing.">
    <meta property="og:url" content="{{ url('/industries') }}">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/wipro-theme.css') }}">

    <style>
        .ind-hero {
            position: relative;
            background: 
                linear-gradient(135deg, rgba(0, 15, 36, 0.92) 0%, rgba(0, 27, 58, 0.88) 50%, rgba(0, 15, 36, 0.95) 100%),
                radial-gradient(ellipse at 50% 30%, rgba(56, 189, 248, 0.22) 0%, transparent 60%),
                url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=2000&q=80') center center / cover no-repeat;
            color: #FFFFFF;
            padding: 95px 0 85px;
            text-align: center;
            overflow: hidden;
            border-bottom: 3px solid var(--wp-spectrum-blue);
        }

        .ind-hero::before {
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

        .ind-hero h1 {
            font-size: clamp(2.3rem, 4.4vw, 3.6rem);
            margin: 0.85rem 0 1.25rem;
            color: #FFFFFF !important;
            position: relative;
            z-index: 2;
        }

        .ind-hero p {
            max-width: 820px;
            margin: 0 auto;
            color: #CBD5E1;
            font-size: 1.15rem;
            line-height: 1.7;
            position: relative;
            z-index: 2;
        }

        .ind-section {
            padding: 5rem 0 6.5rem;
            background: var(--wp-bg-light);
        }

        .ind-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2.25rem;
        }

        .ind-card {
            background: #FFFFFF;
            border: 1px solid #E5E7EB;
            border-radius: 6px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.25s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.25s ease;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.05), 0 1px 3px rgba(0, 0, 0, 0.02);
            position: relative;
        }

        .ind-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 32px -6px rgba(0, 27, 58, 0.12), 0 6px 16px -4px rgba(0, 0, 0, 0.05);
            border-color: #CBD5E1;
        }

        .ind-img-wrap {
            height: 200px;
            width: 100%;
            background: var(--wp-navy-900);
            overflow: hidden;
            position: relative;
            border-bottom: 1px solid #E5E7EB;
        }

        .ind-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.45s ease;
        }

        .ind-card:hover .ind-img {
            transform: scale(1.05);
        }

        .ind-body {
            padding: 1.5rem 1.4rem 1.75rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            text-align: left;
        }

        .ind-body h3 {
            font-size: 1.15rem;
            color: #071124;
            margin: 0.65rem 0 0.45rem;
            line-height: 1.35;
            font-weight: 700;
        }

        .ind-body p {
            font-size: 0.9rem;
            color: #4B5563;
            line-height: 1.55;
            margin-bottom: 1.35rem;
            flex-grow: 1;
        }

        .ind-link {
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
        .ind-card:hover .ind-link {
            gap: 0.65rem;
            color: var(--wp-blue-hover);
        }

        /* Banner Box */
        .sourcing-banner {
            margin-top: 4rem;
            background: #FFFFFF;
            border: 1px solid var(--wp-border);
            border-radius: var(--wp-radius-lg);
            padding: 2.75rem 3.25rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 2rem;
            box-shadow: var(--wp-shadow-card);
        }

        @media (max-width: 960px) {
            .ind-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 640px) {
            .ind-grid {
                grid-template-columns: 1fr;
            }
            .sourcing-banner {
                padding: 2rem 1.5rem;
            }
        }
    </style>
</head>

<body>
    @include('partials.header')

    <!-- ================= HERO ================= -->
    <section class="ind-hero">
        <div class="wp-wrap">
            <span class="wp-eyebrow on-navy"><span class="wp-dot"></span> Regulated Sectors &amp; Supply Chains</span>
            <h1>Industries &amp; Engineering Sourcing</h1>
            <p>From financial architecture to heavy rail rolling stock and precision pumps: Nexteck delivers end-to-end technology, systems integration, and global supply procurement.</p>
        </div>
    </section>

    <!-- ================= INDUSTRIES GRID ================= -->
    <main class="ind-section">
        <div class="wp-wrap">
            <div class="ind-grid">
                @foreach($industries as $index => $ind)
                    @php
                        $spectrumAccents = ['blue', 'teal', 'green', 'yellow', 'pink', 'purple'];
                        $accent = $spectrumAccents[$index % count($spectrumAccents)];
                        
                        $title = is_object($ind) ? $ind->title : $ind['title'];
                        $slug = is_object($ind) ? $ind->slug : $ind['slug'];
                        $tagline = is_object($ind) ? $ind->tagline : $ind['tagline'];
                        $shortDesc = is_object($ind) ? $ind->short_desc : $ind['short_desc'];
                        $image = is_object($ind) ? ($ind->image_url ?? asset($ind->image ?? 'images/A3.png')) : (isset($ind['image_url']) ? $ind['image_url'] : asset($ind['image'] ?? 'images/A3.png'));
                    @endphp

                    <article class="ind-card rv" data-spectrum="{{ $accent }}">
                        <div class="ind-img-wrap">
                            <img src="{{ $image }}" alt="{{ $title }}" class="ind-img" loading="lazy">
                        </div>
                        <div class="ind-body">
                            <span class="wp-badge wp-badge-{{ $accent }}" style="align-self:flex-start;">{{ $title }}</span>
                            <h3>
                                <a href="{{ route('industries.show', $slug) }}" style="color:inherit; text-decoration:none;">{{ $tagline }}</a>
                            </h3>
                            <p>{{ Str::limit($shortDesc, 115) }}</p>
                            <a href="{{ route('industries.show', $slug) }}" class="ind-link">
                                Explore Sector Scope <i class="fa-solid fa-arrow-right" style="font-size:0.82rem; margin-left:4px;"></i>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <!-- Global Low-Cost Country Sourcing & Rail Partnership Banner -->
            <div class="sourcing-banner rv">
                <div style="max-width:760px;">
                    <span class="wp-badge wp-badge-teal" style="margin-bottom:0.85rem;">Global Supply &amp; Strategic Rail Bridge</span>
                    <h3 style="font-size:1.55rem; color:var(--wp-navy-900); margin-bottom:0.5rem;">
                        International Engineering Procurement &amp; Low-Cost Country Sourcing
                    </h3>
                    <p style="color:var(--wp-text-body); font-size:0.96rem; line-height:1.6; margin:0;">
                        Nexteck de-risks overseas procurement by bridging vetted Tier-1 manufacturing capacity across India (Pune, Chennai, Gujarat) and Europe into UK supply chains. Partnered strategically with <a href="https://pearlconrail.co.uk" target="_blank" rel="noopener" style="color:var(--wp-blue); font-weight:700;">pearlconrail.co.uk</a> for railway bogies, track materials, and rolling stock components.
                    </p>
                </div>
                <a href="{{ route('landing') }}#book" class="btn-wp btn-wp-primary" style="white-space:nowrap;">
                    Inquire About Sourcing <i class="fa-solid fa-arrow-right" style="font-size:0.82rem; margin-left:4px;"></i>
                </a>
            </div>
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
