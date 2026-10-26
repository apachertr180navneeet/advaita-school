@extends('layouts.app')

@section('title', "Pre-Primary Wing (Nursery, LKG, UKG) - Advaita School of Excellence, Parbhani")
@section('meta_description', "Explore Advaita's Pre-Primary Wing featuring play-based learning, creative teaching methods, child-safe infrastructure, and our upcoming new state-of-the-art school building.")

@section('content')
<main id="main" class="main-content-wrapper acad-page-wrapper pre-primary-page">

    <!-- =========================================================================
         1. HERO SECTION: Playful & Engaging Early Childhood Theme
         ========================================================================= -->
    <section class="admission-hero-section pre-primary-hero">
        <div class="admission-hero-canvas">
            <!-- Hero Early Years Visual -->
            <div class="admission-hero-bg-visual" aria-hidden="true">
                <img src="{{ asset($content['hero_image'] ?? 'assets/images/gallery/gallery-painted-hands-girl.jpg') }}" alt="Pre-Primary Kids at Advaita School of Excellence" class="admission-hero-bg-img" width="1024" height="682">
            </div>

            <!-- SVG Wave Overlay for Smooth Translucent Backdrop -->
            <div class="admission-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1200 440" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H560C600 130 530 280 640 440H0V0Z" fill="#EEF6FC" fill-opacity="0.97"/>
                    <path d="M540 0C580 140 510 280 620 440H590C490 280 550 140 510 0H540Z" fill="#F37021" fill-opacity="0.25"/>
                </svg>
            </div>

            <!-- Floating Handwritten Script Tag at Top Right -->
            <div class="admission-hero-script-tag" aria-hidden="true">
                <span class="script-title">Joyful Early<br>Discovery</span>
                <svg class="script-underline" viewBox="0 0 120 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 12C38 3 84 4 116 14" stroke="#F37021" stroke-width="3" stroke-linecap="round"/>
                </svg>
            </div>

            <!-- Left Content Panel -->
            <div class="admission-hero-left-panel">
                <div class="admission-hero-content-inner">
                    <!-- Breadcrumbs -->
                    <nav class="admission-breadcrumb" aria-label="Breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="{{ route('academics') }}">Programmes</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Pre-Primary</span>
                    </nav>

                    <!-- Eyebrow -->
                    <div class="admission-eyebrow">
                        <i class="fa-solid fa-shapes text-orange me-1"></i>
                        {{ $content['hero_badge'] ?? 'PRE-PRIMARY WING (NURSERY · LKG · UKG)' }}
                    </div>

                    <!-- Main Headline -->
                    <h1 class="admission-hero-title">
                        {{ $content['hero_title'] ?? 'Nurturing Curiosity in their' }}
                        <span class="highlight-orange">{{ $content['hero_highlight'] ?? 'Most Wonder-Filled Years.' }}</span>
                    </h1>

                    <!-- Description -->
                    <p class="admission-hero-desc">
                        {{ $content['hero_subtitle'] ?? 'A joyful, play-based early childhood environment blending Montessori methods, sensory learning, and creative discovery.' }}
                    </p>

                    <div class="d-flex align-items-center gap-12 mt-20 flex-wrap">
                        <a href="{{ route('online-registration') }}" class="btn-primary-pill">
                            <span>Enquire for Pre-Primary</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="#new-building" class="btn-outline-pill">
                            <i class="fa-solid fa-building-flag"></i>
                            <span>Upcoming New Building</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Container -->
    <div class="acad-container">

        <!-- =========================================================================
             2. HIGHLIGHT BANNER: UPCOMING NEW SCHOOL BUILDING (PRIORITY FEATURE)
             ========================================================================= -->
        <section class="pre-building-spotlight" id="new-building">
            <div class="pre-building-card">
                <div class="pre-building-grid">
                    <div class="pre-building-visual">
                        <div class="pre-building-img-box">
                            <img src="{{ asset($content['building_image'] ?? 'assets/images/gallery/campus-building.png') }}" alt="Upcoming New Pre-Primary Building - Advaita School of Excellence">
                            <div class="building-status-badge">
                                <span class="status-pulse"></span>
                                <span>{{ $content['new_building_status'] ?? 'Under Construction · Opening Next Session' }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="pre-building-content">
                        <div class="building-kicker">
                            <i class="fa-solid fa-sparkles"></i>
                            <span>{{ $content['new_building_badge'] ?? 'NEW BUILDING HIGHLIGHT' }}</span>
                        </div>
                        <h2 class="building-heading">
                            {{ $content['new_building_title'] ?? 'Our State-of-the-Art New Pre-Primary Wing' }}
                        </h2>
                        <p class="building-desc">
                            {{ $content['new_building_desc'] ?? 'Designed specifically for early learners with air-conditioned thematic classrooms, splash pool, indoor sensory play stations, and child-safe infrastructure.' }}
                        </p>

                        <!-- Distinction Between Current & Planned -->
                        <div class="building-specs-tabs">
                            <div class="spec-column planned-features">
                                <div class="spec-header">
                                    <i class="fa-solid fa-compass-drafting text-orange"></i>
                                    <strong>Planned 2026 Features</strong>
                                </div>
                                <ul class="spec-list">
                                    <li><i class="fa-solid fa-circle-check text-orange"></i> Temperature-Controlled Splash Pool</li>
                                    <li><i class="fa-solid fa-circle-check text-orange"></i> Thematic Theatrette &amp; Storytelling Amphitheatre</li>
                                    <li><i class="fa-solid fa-circle-check text-orange"></i> Indoor Soft-Play Gymnasium &amp; Crawl Tunnels</li>
                                    <li><i class="fa-solid fa-circle-check text-orange"></i> Anti-Bacterial Rubberized Outdoor Activity Lawn</li>
                                </ul>
                            </div>

                            <div class="spec-column current-facilities">
                                <div class="spec-header">
                                    <i class="fa-solid fa-school-circle-check text-navy"></i>
                                    <strong>Completed &amp; Active Facilities</strong>
                                </div>
                                <ul class="spec-list">
                                    <li><i class="fa-solid fa-circle-check text-green"></i> Montessori-Inspired Hands-on Activity Corners</li>
                                    <li><i class="fa-solid fa-circle-check text-green"></i> 100% High-Resolution CCTV Coverage</li>
                                    <li><i class="fa-solid fa-circle-check text-green"></i> Child-Height Washrooms &amp; Sanitization Stations</li>
                                    <li><i class="fa-solid fa-circle-check text-green"></i> Dedicated Certified Caretakers &amp; Gentle Mentors</li>
                                </ul>
                            </div>
                        </div>

                        <div class="building-cta-row">
                            <a href="{{ route('online-registration') }}" class="btn-building-cta">
                                <i class="fa-solid fa-calendar-check"></i>
                                <span>Book a Campus Preview Tour</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             3. EARLY YEARS CURRICULUM & METHODOLOGY (4 Pillared Cards)
             ========================================================================= -->
        <section class="acad-section" id="pedagogy">
            <div class="acad-section-header">
                <span class="acad-eyebrow">— PLAY-WAY PEDAGOGY —</span>
                <h2 class="acad-section-title">
                    Learning That Feels Like <span class="highlight-orange">Pure Play.</span>
                </h2>
                <p class="acad-section-desc">
                    Children learn best when they are active participants. Our pre-primary curriculum builds foundational literacy, numeracy, and emotional intelligence through joyful sensory exploration.
                </p>
            </div>

            <div class="acad-curriculum-grid">
                <!-- Card 1 -->
                <div class="acad-curriculum-card">
                    <div class="acad-curr-icon orange" aria-hidden="true">
                        <i class="fa-solid fa-shapes"></i>
                    </div>
                    <h3 class="acad-curr-title">Sensory &amp; Hands-On Play</h3>
                    <p class="acad-curr-desc">Montessori sensorial blocks, textured materials, and clay modeling to foster tactile brain development.</p>
                </div>

                <!-- Card 2 -->
                <div class="acad-curriculum-card">
                    <div class="acad-curr-icon blue" aria-hidden="true">
                        <i class="fa-solid fa-music"></i>
                    </div>
                    <h3 class="acad-curr-title">Language &amp; Phonics Immersion</h3>
                    <p class="acad-curr-desc">Jolly Phonics, musical rhymes, storytelling circles, and picture books to cultivate effortless speech and listening habits.</p>
                </div>

                <!-- Card 3 -->
                <div class="acad-curriculum-card">
                    <div class="acad-curr-icon teal" aria-hidden="true">
                        <i class="fa-solid fa-cubes"></i>
                    </div>
                    <h3 class="acad-curr-title">Number Readiness &amp; Logic</h3>
                    <p class="acad-curr-desc">Counting beads, pattern puzzles, and spatial sorting games that build an early natural love for mathematics.</p>
                </div>

                <!-- Card 4 -->
                <div class="acad-curriculum-card">
                    <div class="acad-curr-icon pink" aria-hidden="true">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h3 class="acad-curr-title">Social &amp; Emotional Warmth</h3>
                    <p class="acad-curr-desc">Sharing routines, guided emotional expression, and cooperative games in a safe, loving peer circle.</p>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             4. CLASSROOMS & PLAY FACILITIES SHOWCASE (Photo Gallery with Lightbox)
             ========================================================================= -->
        <section class="acad-section" id="facilities-gallery">
            <div class="acad-section-header">
                <span class="acad-eyebrow">— INFRASTRUCTURE SHOWCASE —</span>
                <h2 class="acad-section-title">
                    Classrooms, Play Lawns &amp; <span class="highlight-orange">Activity Spaces.</span>
                </h2>
                <p class="acad-section-desc">
                    Every square foot is thoughtfully child-proofed, colorfully curated, and equipped with safe learning instruments to inspire creativity.
                </p>
            </div>

            <div class="pre-gallery-grid">
                <!-- Item 1: Splash Pool -->
                <div class="pre-gallery-card">
                    <div class="pre-gallery-thumb" onclick="openPreModal('{{ asset('assets/images/gallery/gallery-splash-pool-kids-play.jpg') }}', 'Splash Pool Water Fun')">
                        <img src="{{ asset('assets/images/gallery/gallery-splash-pool-kids-play.jpg') }}" alt="Pre-Primary Splash Pool Fun" loading="lazy">
                        <div class="pre-gallery-overlay">
                            <span class="pre-tag">Recreation</span>
                            <h4>Splash Pool &amp; Water Play</h4>
                            <p>Safe, shallow splash pool for summer sensory fun under certified supervision.</p>
                            <i class="fa-solid fa-magnifying-glass-plus zoom-icon"></i>
                        </div>
                    </div>
                </div>

                <!-- Item 2: Crawl Tunnels & Soft Gym -->
                <div class="pre-gallery-card">
                    <div class="pre-gallery-thumb" onclick="openPreModal('{{ asset('assets/images/gallery/gallery-crawl-tunnel-kids.jpg') }}', 'Indoor Crawl Tunnels & Soft Play')">
                        <img src="{{ asset('assets/images/gallery/gallery-crawl-tunnel-kids.jpg') }}" alt="Indoor Crawl Tunnels and Soft Play" loading="lazy">
                        <div class="pre-gallery-overlay">
                            <span class="pre-tag">Motor Skills</span>
                            <h4>Crawl Tunnels &amp; Soft Gym</h4>
                            <p>Padded obstacles and colorful crawl tunnels for coordination and agility.</p>
                            <i class="fa-solid fa-magnifying-glass-plus zoom-icon"></i>
                        </div>
                    </div>
                </div>

                <!-- Item 3: Creative Art & Craft Studio -->
                <div class="pre-gallery-card">
                    <div class="pre-gallery-thumb" onclick="openPreModal('{{ asset('assets/images/gallery/gallery-art-circle-kids.jpg') }}', 'Creative Expression & Finger Art')">
                        <img src="{{ asset('assets/images/gallery/gallery-art-circle-kids.jpg') }}" alt="Creative Art Studio at Advaita School" loading="lazy">
                        <div class="pre-gallery-overlay">
                            <span class="pre-tag">Creativity</span>
                            <h4>Art, Craft &amp; Finger Painting</h4>
                            <p>Non-toxic finger colors, origami, and collage activities to unleash imagination.</p>
                            <i class="fa-solid fa-magnifying-glass-plus zoom-icon"></i>
                        </div>
                    </div>
                </div>

                <!-- Item 4: Outdoor Parachute & Lawn Games -->
                <div class="pre-gallery-card">
                    <div class="pre-gallery-thumb" onclick="openPreModal('{{ asset('assets/images/gallery/gallery-parachute-activity.jpg') }}', 'Outdoor Parachute Team Games')">
                        <img src="{{ asset('assets/images/gallery/gallery-parachute-activity.jpg') }}" alt="Outdoor Parachute Team Play" loading="lazy">
                        <div class="pre-gallery-overlay">
                            <span class="pre-tag">Outdoor Lawn</span>
                            <h4>Parachute Play &amp; Lawn Games</h4>
                            <p>Sunlit green lawns for parachute drills, ring games, and joyful physical games.</p>
                            <i class="fa-solid fa-magnifying-glass-plus zoom-icon"></i>
                        </div>
                    </div>
                </div>

                <!-- Item 5: Early Phonics & Classroom Learning -->
                <div class="pre-gallery-card">
                    <div class="pre-gallery-thumb" onclick="openPreModal('{{ asset('assets/images/gallery/gallery-classroom-learning.jpg') }}', 'Interactive Thematic Classrooms')">
                        <img src="{{ asset('assets/images/gallery/gallery-classroom-learning.jpg') }}" alt="Pre-Primary Interactive Smart Classroom" loading="lazy">
                        <div class="pre-gallery-overlay">
                            <span class="pre-tag">Smart Class</span>
                            <h4>Interactive Phonics Classrooms</h4>
                            <p>Spacious, naturally ventilated rooms with smart boards and low-height desks.</p>
                            <i class="fa-solid fa-magnifying-glass-plus zoom-icon"></i>
                        </div>
                    </div>
                </div>

                <!-- Item 6: Hula Hoop & Motor Agility -->
                <div class="pre-gallery-card">
                    <div class="pre-gallery-thumb" onclick="openPreModal('{{ asset('assets/images/gallery/gallery-hula-hoop-kid.jpg') }}', 'Gymnastics & Balance Play')">
                        <img src="{{ asset('assets/images/gallery/gallery-hula-hoop-kid.jpg') }}" alt="Toddler Gymnastics and Balance Play" loading="lazy">
                        <div class="pre-gallery-overlay">
                            <span class="pre-tag">Agility</span>
                            <h4>Hula Hoop &amp; Gymnastics</h4>
                            <p>Guided movement drills to develop body balance, rhythm, and confidence.</p>
                            <i class="fa-solid fa-magnifying-glass-plus zoom-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             5. LEARNING INSTRUMENTS & ACTIVITY AREAS
             ========================================================================= -->
        <section class="acad-section" id="learning-instruments">
            <div class="acad-section-header">
                <span class="acad-eyebrow">— HANDS-ON INSTRUMENTS —</span>
                <h2 class="acad-section-title">
                    Educational Toys &amp; <span class="highlight-orange">Activity Instruments.</span>
                </h2>
                <p class="acad-section-desc">
                    We replace passive screen time with real-world tangible learning tools that stimulate cognitive curiosity and motor control.
                </p>
            </div>

            <div class="instruments-grid">
                <div class="instrument-item">
                    <div class="ins-icon"><i class="fa-solid fa-puzzle-piece"></i></div>
                    <h4>Montessori Tactile Blocks</h4>
                    <p>Wooden geometry blocks, sorting cylinders, and sensory touch boards.</p>
                </div>

                <div class="instrument-item">
                    <div class="ins-icon"><i class="fa-solid fa-drum"></i></div>
                    <h4>Orff Musical Instruments</h4>
                    <p>Xylophones, rhythm shakers, and hand cymbals to develop auditory discrimination.</p>
                </div>

                <div class="instrument-item">
                    <div class="ins-icon"><i class="fa-solid fa-seedling"></i></div>
                    <h4>Nature &amp; Sensory Sand Pit</h4>
                    <p>Safe fine-grain kinetic sand tables and botany discovery garden boxes.</p>
                </div>

                <div class="instrument-item">
                    <div class="ins-icon"><i class="fa-solid fa-book-sparkles"></i></div>
                    <h4>Storybooks &amp; Puppet Theatre</h4>
                    <p>Hand puppets and bilingual storybooks for vocabulary development.</p>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             6. SAFETY, HYGIENE & CHILD-FRIENDLY INFRASTRUCTURE
             ========================================================================= -->
        <section class="pre-safety-section">
            <div class="pre-safety-card">
                <div class="pre-safety-header">
                    <span class="safety-badge"><i class="fa-solid fa-shield-heart"></i> SAFETY FIRST</span>
                    <h2>Uncompromising Child Safety &amp; Hygiene</h2>
                    <p>We treat every child in our care with the gentleness and vigilance of a second home.</p>
                </div>

                <div class="safety-pillars-grid">
                    <div class="safety-pillar">
                        <div class="safety-icon-wrap"><i class="fa-solid fa-video"></i></div>
                        <h4>24×7 CCTV Surveillance</h4>
                        <p>Complete campus and corridor video coverage accessible to administrators.</p>
                    </div>

                    <div class="safety-pillar">
                        <div class="safety-icon-wrap"><i class="fa-solid fa-person-breastfeeding"></i></div>
                        <h4>Female Nannies &amp; Caretakers</h4>
                        <p>Warm, trained female attendants present at all times for bathroom and meal assistance.</p>
                    </div>

                    <div class="safety-pillar">
                        <div class="safety-icon-wrap"><i class="fa-solid fa-pump-soap"></i></div>
                        <h4>Daily Medical-Grade Sanitization</h4>
                        <p>Toys, play mats, and learning tools are thoroughly sanitized after every session.</p>
                    </div>

                    <div class="safety-pillar">
                        <div class="safety-icon-wrap"><i class="fa-solid fa-couch"></i></div>
                        <h4>Rounded Ergonomic Furniture</h4>
                        <p>No sharp corners. All desks, chairs, and play zones meet international infant safety norms.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             7. ADMISSION ENQUIRY CTA BANNER
             ========================================================================= -->
        <section class="acad-cta-banner">
            <div class="acad-cta-card">
                <div class="acad-cta-content">
                    <span class="acad-cta-eyebrow">ADMISSIONS OPEN FOR SESSION 2026–27</span>
                    <h2 class="acad-cta-heading">
                        {{ $content['cta_headline'] ?? 'Give Your Child the Best Start in Life.' }}
                    </h2>
                    <p class="acad-cta-subtext">
                        {{ $content['cta_subtext'] ?? 'Admissions are now open for Nursery, LKG, and UKG for the upcoming session.' }}
                    </p>
                    <div class="acad-cta-btn-group">
                        <a href="{{ route('online-registration') }}" class="btn-acad-cta-primary">
                            <span>Register Online Now</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="tel:09413062851" class="btn-acad-cta-call">
                            <i class="fa-solid fa-phone"></i>
                            <span>Call: 094130 62851</span>
                        </a>
                        <a href="https://wa.me/919413062851?text=Hello%20Advaita%20School,%20I%20am%20inquiring%20about%20Pre-Primary%20Admissions." target="_blank" rel="noopener noreferrer" class="btn-acad-cta-wa">
                            <i class="fa-brands fa-whatsapp"></i>
                            <span>WhatsApp Enquiry</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div><!-- /.acad-container -->

</main>

<!-- Lightbox Modal for Gallery Image Preview -->
<div class="results-modal-backdrop" id="preModal" onclick="closePreModal(event)">
    <div class="results-modal-content">
        <button type="button" class="results-modal-close" onclick="closePreModal(event)" aria-label="Close Preview">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <img src="{{ asset('assets/images/gallery/gallery-splash-pool-kids-play.jpg') }}" alt="Pre-Primary Facility Preview" class="results-modal-img" id="modalPreImg">
    </div>
</div>

<script>
function openPreModal(imgSrc, title) {
    var modal = document.getElementById('preModal');
    var modalImg = document.getElementById('modalPreImg');
    if (modal && modalImg) {
        modalImg.src = imgSrc;
        if (title) modalImg.alt = title;
        modal.classList.add('open');
        document.body.style.overflow = 'hidden';
    }
}

function closePreModal(e) {
    if (e.target.classList.contains('results-modal-backdrop') || e.target.closest('.results-modal-close')) {
        var modal = document.getElementById('preModal');
        if (modal) {
            modal.classList.remove('open');
            document.body.style.overflow = '';
        }
    }
}
</script>
@endsection
