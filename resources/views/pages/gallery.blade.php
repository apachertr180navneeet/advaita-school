@extends('layouts.app')

@section('title', "Gallery - Advaita School of Excellence | Moments That Matter")

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/gallery.css') }}?v={{ file_exists(public_path('assets/css/gallery.css')) ? filemtime(public_path('assets/css/gallery.css')) : '1.0' }}">
@endsection

@section('content')
<main id="main" class="main-content-wrapper adv-gallery-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: "MOMENTS THAT MATTER" & SCULPTED CAMPUS VISUAL
         ========================================================================= -->
    <section class="adv-gal-hero-section">


        <!-- Full-Bleed Right Visual: Sculpted Campus Panorama with Royal Blue Ribbon -->
        <div class="adv-gal-hero-curved-visual">
            <svg class="adv-gal-hero-curved-svg" viewBox="0 0 1000 480" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                    <clipPath id="advHeroCurveClip">
                        <path d="M 0 -10 C 25 130, 80 270, 220 365 C 360 450, 600 475, 1000 480 L 1000 -10 Z" />
                    </clipPath>
                </defs>

                <!-- Campus Photo clipped to the organic curve -->
                <image href="{{ asset('assets/images/about-hero-building.jpg') }}" xlink:href="{{ asset('assets/images/about-hero-building.jpg') }}" x="0" y="0" width="1000" height="480" preserveAspectRatio="xMidYMid slice" clip-path="url(#advHeroCurveClip)"/>

                <!-- Royal Blue Organic Ribbon Stroke along the curved boundary -->
                <path d="M 0 -10 C 25 130, 80 270, 220 365 C 360 450, 600 475, 1000 480" stroke="#0084FF" stroke-width="26" fill="none" stroke-linecap="round"/>
            </svg>

            <!-- "More Than A School" Script Badge in Top-Right Sky Area -->
            <div class="adv-gal-hero-badge" aria-label="More Than A School">
                <span class="badge-text">More<br>Than A School</span>
                <svg class="badge-underline" viewBox="0 0 76 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 9.5C24 3.5 54 2 74 6" stroke="#F37021" stroke-width="2.8" stroke-linecap="round"/>
                </svg>
            </div>
        </div>

        <div class="adv-gal-container">
            <!-- Breadcrumbs -->
            <nav class="adv-gal-breadcrumb" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                <span class="current">Gallery</span>
            </nav>

            <div class="adv-gal-hero-grid">
                <!-- Left Content -->
                <div class="adv-gal-hero-content">
                    <div class="adv-gal-kicker">
                        MOMENTS THAT MATTER
                    </div>

                    <h1 class="adv-gal-hero-title">Gallery</h1>

                    <h2 class="adv-gal-hero-subtitle">
                        A glimpse into our <span class="adv-gal-accent-text">vibrant journey.</span>
                    </h2>

                    <p class="adv-gal-hero-desc">
                        Explore moments of learning, celebration, creativity, and community life at Advaita School of Excellence.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. CATEGORY FILTER ROW: 9 Rounded Pill Cards
         ========================================================================= -->
    <section class="adv-gal-categories-section">
        <div class="adv-gal-container">
            <div class="adv-gal-filters-scroll" role="tablist" aria-label="Gallery category filter">
                <!-- 1. All Photos -->
                <button type="button" class="adv-gal-cat-btn active" data-category="all" role="tab" aria-selected="true">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-camera"></i>
                    </div>
                    <span class="cat-name">All Photos</span>
                </button>

                <!-- 2. Life at Advaita -->
                <button type="button" class="adv-gal-cat-btn" data-category="life-at-advaita" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-school-flag"></i>
                    </div>
                    <span class="cat-name">Life at<br>Advaita</span>
                </button>

                <!-- 3. Campus & Facilities -->
                <button type="button" class="adv-gal-cat-btn" data-category="campus-facilities" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-landmark"></i>
                    </div>
                    <span class="cat-name">Campus &amp;<br>Facilities</span>
                </button>

                <!-- 4. Advaita Kids -->
                <button type="button" class="adv-gal-cat-btn" data-category="advaita-kids" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-child-reaching"></i>
                    </div>
                    <span class="cat-name">Advaita<br>Kids</span>
                </button>

                <!-- 5. Events & Celebrations -->
                <button type="button" class="adv-gal-cat-btn" data-category="events-celebrations" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-cake-candles"></i>
                    </div>
                    <span class="cat-name">Events &amp;<br>Celebrations</span>
                </button>

                <!-- 6. Academics and Science Activities -->
                <button type="button" class="adv-gal-cat-btn" data-category="academics-science" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-flask-vial"></i>
                    </div>
                    <span class="cat-name">Academics &amp;<br>Science</span>
                </button>

                <!-- 7. Educational Tours & Excursions -->
                <button type="button" class="adv-gal-cat-btn" data-category="educational-tours" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-bus-simple"></i>
                    </div>
                    <span class="cat-name">Tours &amp;<br>Excursions</span>
                </button>

                <!-- 8. Sports & Competitions -->
                <button type="button" class="adv-gal-cat-btn" data-category="sports-competitions" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <span class="cat-name">Sports &amp;<br>Competitions</span>
                </button>

                <!-- 9. Student Leadership & Achievements -->
                <button type="button" class="adv-gal-cat-btn" data-category="student-leadership" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <span class="cat-name">Leadership &amp;<br>Achievements</span>
                </button>

                <!-- 10. Art, Culture & Creativity -->
                <button type="button" class="adv-gal-cat-btn" data-category="art-culture" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-palette"></i>
                    </div>
                    <span class="cat-name">Art, Culture<br>&amp; Creativity</span>
                </button>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. SEARCH & SORT TOOLBAR
         ========================================================================= -->
    <section class="adv-gal-toolbar-section">
        <div class="adv-gal-container">
            <div class="adv-gal-toolbar">
                <!-- Search Box -->
                <div class="adv-gal-search-box">
                    <i class="fa-solid fa-magnifying-glass search-icon" aria-hidden="true"></i>
                    <input type="text" id="advGallerySearch" class="adv-gal-search-input" placeholder="Search in gallery..." aria-label="Search gallery albums">
                    <button type="button" id="advSearchClear" class="adv-gal-search-clear" aria-label="Clear search text">&times;</button>
                </div>

                <!-- Sort Dropdown -->
                <div class="adv-gal-sort-box">
                    <i class="fa-solid fa-arrow-down-short-wide sort-lead-icon" aria-hidden="true"></i>
                    <select id="advGallerySort" class="adv-gal-sort-select" aria-label="Sort gallery albums">
                        <option value="latest">Latest First</option>
                        <option value="oldest">Oldest First</option>
                        <option value="photos-desc">Most Photos</option>
                        <option value="title-asc">A to Z</option>
                    </select>
                    <i class="fa-solid fa-chevron-down sort-chevron" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. GALLERY GRID: 27 CURATED ALBUM CARDS ACROSS 9 CATEGORIES
         ========================================================================= -->
    <section class="adv-gal-grid-section" id="advGalleryGridSection">
        <div class="adv-gal-container">
            <div class="adv-gal-grid" id="advGalleryGrid">
@forelse($galleryItems as $item)
    @php
        $catSlug = $item->category_slug;
        $themeColor = $item->theme_color;
        $icon = $item->category_icon;
        $captionTitle = $item->caption ?: 'Advaita Campus Photo';
    @endphp
    <article class="adv-gal-card" data-category="{{ $catSlug }}" data-title="{{ $captionTitle }}" data-count="{{ $item->order }}" data-index="{{ $loop->iteration }}">
        <div class="adv-gal-card-thumb">
            <img src="{{ $item->image_url }}" alt="{{ $captionTitle }}" loading="lazy">
            <div class="adv-gal-card-overlay">
                <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
            </div>
        </div>
        <div class="adv-gal-card-info">
            <div class="adv-gal-card-meta">
                <div class="adv-gal-card-icon gal-theme-{{ $themeColor }}">
                    <i class="{{ $icon }}"></i>
                </div>
                <div class="adv-gal-card-text">
                    <h3 class="adv-gal-card-title">{{ $captionTitle }}</h3>
                    <span class="adv-gal-card-count">{{ $item->category }}</span>
                </div>
            </div>
            <button type="button" class="adv-gal-card-btn gal-theme-{{ $themeColor }}" aria-label="View {{ $captionTitle }}">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
    </article>
@empty
    <div class="adv-gal-empty-state visible">
        <i class="fa-regular fa-folder-open"></i>
        <h3>No gallery photos found</h3>
        <p>Photos added from the admin panel will appear here.</p>
    </div>
@endforelse
<!-- Empty state when search has 0 results -->
                <div class="adv-gal-empty-state" id="advGalleryEmpty">
                    <i class="fa-regular fa-folder-open"></i>
                    <h3>No gallery albums found</h3>
                    <p>Try searching for a different keyword or selecting another category.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. PAGINATION BAR
         ========================================================================= -->
    <section class="adv-gal-pagination-section">
        <div class="adv-gal-container">
            <div class="adv-gal-pagination" role="navigation" aria-label="Gallery pagination">
                <button type="button" class="adv-gal-page-btn prev-btn" aria-label="Previous Page">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button type="button" class="adv-gal-page-btn active" aria-label="Page 1">1</button>
                <button type="button" class="adv-gal-page-btn" aria-label="Page 2">2</button>
                <button type="button" class="adv-gal-page-btn" aria-label="Page 3">3</button>
                <button type="button" class="adv-gal-page-btn" aria-label="Page 4">4</button>
                <button type="button" class="adv-gal-page-btn" aria-label="Page 5">5</button>
                <button type="button" class="adv-gal-page-btn next-btn" aria-label="Next Page">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         6. CTA BANNER: "WANT TO SEE MORE?"
         ========================================================================= -->
    <section class="adv-gal-cta-section">
        <div class="adv-gal-container">
            <div class="adv-gal-cta-card">
                <div class="adv-gal-cta-content">
                    <span class="adv-gal-cta-tag">WANT TO SEE MORE?</span>
                    <h2 class="adv-gal-cta-title">
                        Be a part of <span class="adv-gal-cta-highlight">our story.</span>
                    </h2>
                    <p class="adv-gal-cta-desc">
                        Follow us on social media for the latest updates, events and campus highlights.
                    </p>
                </div>

                <div class="adv-gal-cta-actions">
                    <div class="adv-gal-cta-socials" aria-label="Follow us on social media">
                        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="social-circle fb" title="Facebook" aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="social-circle insta" title="Instagram" aria-label="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="social-circle yt" title="YouTube" aria-label="YouTube">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="social-circle in" title="LinkedIn" aria-label="LinkedIn">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>

                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="adv-gal-cta-btn">
                        <span>Follow Us</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Decorative Paper Airplane Doodle -->
                <div class="adv-gal-cta-doodle" aria-hidden="true">
                    <svg viewBox="0 0 74 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M72.5 1.5L1.5 32.5L28.5 44.5L59.5 12.5L34.5 47.5L55.5 59.5L72.5 1.5Z" stroke="#2563EB" stroke-width="2.2" stroke-linejoin="round" stroke-dasharray="3 2" fill="none"/>
                        <path d="M28.5 44.5V58.5L36.5 48.5" stroke="#2563EB" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 56 C2 52 -2 40 4 32 C10 24 22 28 20 38" stroke="#93C5FD" stroke-width="1.8" stroke-dasharray="3 3" fill="none"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- =========================================================================
     7. FULLSCREEN LIGHTBOX MODAL
     ========================================================================= -->
<div class="adv-gal-lightbox-backdrop" id="advGalleryLightbox" role="dialog" aria-modal="true" aria-label="Photo Lightbox">
    <div class="adv-gal-lightbox-header">
        <div class="adv-gal-lightbox-title-box">
            <h3 class="adv-gal-lightbox-title" id="advLightboxTitle">Album Title</h3>
            <span class="adv-gal-lightbox-counter" id="advLightboxCounter">1 / 1</span>
        </div>
        <div class="adv-gal-lightbox-controls">
            <button type="button" class="adv-gal-lightbox-btn" id="advLightboxClose" aria-label="Close Lightbox">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
    </div>

    <div class="adv-gal-lightbox-stage">
        <button type="button" class="adv-gal-lightbox-nav prev" id="advLightboxPrev" aria-label="Previous Image">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="adv-gal-lightbox-img-wrap">
            <img src="" alt="" class="adv-gal-lightbox-img" id="advLightboxImg">
        </div>

        <button type="button" class="adv-gal-lightbox-nav next" id="advLightboxNext" aria-label="Next Image">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>

    <div class="adv-gal-lightbox-thumbs" id="advLightboxThumbs">
        <!-- Dynamically populated thumbnail strip -->
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/gallery.js') }}?v={{ file_exists(public_path('assets/js/gallery.js')) ? filemtime(public_path('assets/js/gallery.js')) : '1.0' }}"></script>
@endsection
