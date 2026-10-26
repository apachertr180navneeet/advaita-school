@extends('layouts.app')

@section('title', "Primary School (Classes 1 to 5) - Advaita School of Excellence, Parbhani | Abacus & Olympiads")
@section('meta_description', "Advaita Primary Wing (Classes 1 to 5) combines CBSE academics with specialized Abacus mental arithmetic, Olympiad mentorship, STEAM activities, and experiential learning.")

@section('content')
<main id="main" class="main-content-wrapper acad-page-wrapper primary-page">

    <!-- =========================================================================
         1. HERO SECTION: Primary School Theme
         ========================================================================= -->
    <section class="admission-hero-section primary-hero">
        <div class="admission-hero-canvas">
            <!-- Hero Visual -->
            <div class="admission-hero-bg-visual" aria-hidden="true">
                <img src="{{ asset($content['hero_image'] ?? 'assets/images/gallery/gallery-classroom-learning.jpg') }}" alt="Primary School Students at Advaita" class="admission-hero-bg-img" width="1024" height="682">
            </div>

            <!-- SVG Wave Overlay -->
            <div class="admission-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1200 440" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H560C600 130 530 280 640 440H0V0Z" fill="#EEF6FC" fill-opacity="0.97"/>
                    <path d="M540 0C580 140 510 280 620 440H590C490 280 550 140 510 0H540Z" fill="#0284C7" fill-opacity="0.2"/>
                </svg>
            </div>

            <!-- Handwritten Script Tag -->
            <div class="admission-hero-script-tag" aria-hidden="true">
                <span class="script-title">Foundations<br>for Genius</span>
                <svg class="script-underline" viewBox="0 0 120 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 12C38 3 84 4 116 14" stroke="#083B7A" stroke-width="3" stroke-linecap="round"/>
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
                        <span class="active">Primary (Classes 1–5)</span>
                    </nav>

                    <!-- Eyebrow -->
                    <div class="admission-eyebrow">
                        <i class="fa-solid fa-book-open-reader text-orange me-1"></i>
                        {{ $content['hero_badge'] ?? 'PRIMARY WING (CLASSES 1 TO 5)' }}
                    </div>

                    <!-- Main Headline -->
                    <h1 class="admission-hero-title">
                        {{ $content['hero_title'] ?? 'Building Strong Fundamentals in' }}
                        <span class="highlight-orange">{{ $content['hero_highlight'] ?? 'Young Inquiring Minds.' }}</span>
                    </h1>

                    <!-- Description -->
                    <p class="admission-hero-desc">
                        {{ $content['hero_desc'] ?? 'Empowering primary students with deep conceptual clarity, linguistic confidence, and competitive exam readiness through joyful learning.' }}
                    </p>

                    <div class="d-flex align-items-center gap-12 mt-20 flex-wrap">
                        <a href="{{ route('online-registration') }}" class="btn-primary-pill">
                            <span>Apply for Primary Wing</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="#abacus-section" class="btn-outline-pill">
                            <i class="fa-solid fa-calculator"></i>
                            <span>Abacus &amp; Olympiads</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Container -->
    <div class="acad-container">

        <!-- =========================================================================
             2. CURRICULUM & SUBJECTS OFFERED (CLASSES 1 TO 5)
             ========================================================================= -->
        <section class="acad-section" id="curriculum">
            <div class="acad-section-header">
                <span class="acad-eyebrow">— CBSE PRIMARY CURRICULUM —</span>
                <h2 class="acad-section-title">
                    Subjects &amp; <span class="highlight-orange">Foundational Learning.</span>
                </h2>
                <p class="acad-section-desc">
                    Our primary curriculum is designed in alignment with CBSE benchmarks to foster critical thinking, language articulation, and scientific curiosity.
                </p>
            </div>

            <div class="subjects-grid">
                <!-- Subject 1 -->
                <div class="subject-card">
                    <div class="subject-icon icon-blue"><i class="fa-solid fa-spell-check"></i></div>
                    <h3>English Language &amp; Literacy</h3>
                    <p>Phonics mastery, vocabulary expansion, reading fluency, and creative writing circles.</p>
                </div>

                <!-- Subject 2 -->
                <div class="subject-card">
                    <div class="subject-icon icon-orange"><i class="fa-solid fa-calculator"></i></div>
                    <h3>Mathematics &amp; Mental Math</h3>
                    <p>Conceptual arithmetic, geometric shapes, spatial logic, and speed calculation drills.</p>
                </div>

                <!-- Subject 3 -->
                <div class="subject-card">
                    <div class="subject-icon icon-teal"><i class="fa-solid fa-seedling"></i></div>
                    <h3>Environmental Studies (EVS)</h3>
                    <p>Understanding nature, social environments, basic science concepts, and green ecology.</p>
                </div>

                <!-- Subject 4 -->
                <div class="subject-card">
                    <div class="subject-icon icon-purple"><i class="fa-solid fa-language"></i></div>
                    <h3>Regional &amp; National Languages</h3>
                    <p>Hindi and Marathi language instruction for cultural grounding and multilingual articulation.</p>
                </div>

                <!-- Subject 5 -->
                <div class="subject-card">
                    <div class="subject-icon icon-indigo"><i class="fa-solid fa-laptop-code"></i></div>
                    <h3>Computer &amp; Digital Skills</h3>
                    <p>Early coding logic, typing skills, digital presentation tools, and internet safety basics.</p>
                </div>

                <!-- Subject 6 -->
                <div class="subject-card">
                    <div class="subject-icon icon-pink"><i class="fa-solid fa-palette"></i></div>
                    <h3>Art, Music &amp; Physical Activity</h3>
                    <p>Visual arts, theatre, rhythm drills, yoga, and team games for physical well-being.</p>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             3. DEDICATED ABACUS & MENTAL ARITHMETIC SECTION
             ========================================================================= -->
        <section class="special-track-section abacus-track" id="abacus-section">
            <div class="special-track-card">
                <div class="special-track-grid">
                    <div class="special-track-visual">
                        <img src="{{ asset($content['abacus_image'] ?? 'assets/images/gallery/gallery-math-science-lab.jpg') }}" alt="Abacus and Mental Math at Advaita">
                        <div class="track-badge-floating">
                            <i class="fa-solid fa-brain"></i>
                            <span>Brain Development Track</span>
                        </div>
                    </div>

                    <div class="special-track-content">
                        <span class="track-eyebrow">INTEGRATED IN PRIMARY CURRICULUM</span>
                        <h2 class="track-heading">
                            {{ $content['abacus_title'] ?? 'Abacus & Mental Arithmetic Programme' }}
                        </h2>
                        <p class="track-desc">
                            {{ $content['abacus_desc'] ?? 'Integrated into the weekly curriculum to stimulate both brain hemispheres, enhance concentration, and build lightning-fast numerical calculation skills.' }}
                        </p>

                        <div class="track-benefits-grid">
                            <div class="benefit-box">
                                <i class="fa-solid fa-bolt text-orange"></i>
                                <div>
                                    <strong>Lightning Speed</strong>
                                    <span>Calculations faster than calculators without pen or paper.</span>
                                </div>
                            </div>
                            <div class="benefit-box">
                                <i class="fa-solid fa-eye text-blue"></i>
                                <div>
                                    <strong>Photographic Memory</strong>
                                    <span>Enhances visual recall, attention span, and active listening.</span>
                                </div>
                            </div>
                            <div class="benefit-box">
                                <i class="fa-solid fa-medal text-teal"></i>
                                <div>
                                    <strong>State &amp; National Podiums</strong>
                                    <span>Advaita students regularly win prestigious championship trophies.</span>
                                </div>
                            </div>
                            <div class="benefit-box">
                                <i class="fa-solid fa-circle-check text-green"></i>
                                <div>
                                    <strong>Zero Math Anxiety</strong>
                                    <span>Transforms math into an intuitive, enjoyable mental game.</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-20">
                            <a href="{{ route('results', ['category' => 'abacus']) }}" class="btn-track-results">
                                <i class="fa-solid fa-trophy"></i>
                                <span>View Abacus Competition Results</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             4. DEDICATED OLYMPIADS & COMPETITIVE EXAMINATIONS
             ========================================================================= -->
        <section class="special-track-section olympiad-track" id="olympiad-section">
            <div class="special-track-card reverse">
                <div class="special-track-grid">
                    <div class="special-track-content">
                        <span class="track-eyebrow">COMPETITIVE EXCELLENCE FROM CLASS 1</span>
                        <h2 class="track-heading">
                            {{ $content['olympiad_title'] ?? 'National & International Olympiad Mentorship' }}
                        </h2>
                        <p class="track-desc">
                            {{ $content['olympiad_desc'] ?? 'Structured training for SOF NSO, IMO, NCO, and IEO competitions with regular mock tests, concept worksheets, and state/national awards.' }}
                        </p>

                        <div class="olympiad-exams-list">
                            <div class="exam-pill">
                                <i class="fa-solid fa-flask text-teal"></i>
                                <div>
                                    <strong>SOF NSO (Science)</strong>
                                    <span>National Science Olympiad</span>
                                </div>
                            </div>
                            <div class="exam-pill">
                                <i class="fa-solid fa-square-root-variable text-orange"></i>
                                <div>
                                    <strong>SOF IMO (Math)</strong>
                                    <span>International Mathematics Olympiad</span>
                                </div>
                            </div>
                            <div class="exam-pill">
                                <i class="fa-solid fa-network-wired text-blue"></i>
                                <div>
                                    <strong>SOF NCO (Cyber)</strong>
                                    <span>National Cyber Olympiad</span>
                                </div>
                            </div>
                            <div class="exam-pill">
                                <i class="fa-solid fa-book text-purple"></i>
                                <div>
                                    <strong>SOF IEO (English)</strong>
                                    <span>International English Olympiad</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-20">
                            <a href="{{ route('results', ['category' => 'olympiad']) }}" class="btn-track-results">
                                <i class="fa-solid fa-award"></i>
                                <span>Explore Olympiad Achievers</span>
                            </a>
                        </div>
                    </div>

                    <div class="special-track-visual">
                        <img src="{{ asset($content['activity_image'] ?? 'assets/images/gallery/gallery-foundation-achievers.jpg') }}" alt="Olympiad Achievers at Advaita">
                        <div class="track-badge-floating right">
                            <i class="fa-solid fa-medal"></i>
                            <span>Gold &amp; Merit Medals</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             5. LEARNING ACTIVITIES & CLASS-WISE EXPERIENCES
             ========================================================================= -->
        <section class="acad-section" id="learning-activities">
            <div class="acad-section-header">
                <span class="acad-eyebrow">— CLASSROOM LIFE —</span>
                <h2 class="acad-section-title">
                    Learning Activities That <span class="highlight-orange">Inspire Discovery.</span>
                </h2>
                <p class="acad-section-desc">
                    Inside our classrooms, science lab, computer hub, and library, learning comes to life through hands-on projects and peer experiments.
                </p>
            </div>

            <div class="pre-gallery-grid">
                <div class="pre-gallery-card">
                    <div class="pre-gallery-thumb">
                        <img src="{{ asset('assets/images/gallery/gallery-math-science-lab.jpg') }}" alt="Science Experiments at Advaita" loading="lazy">
                        <div class="pre-gallery-overlay">
                            <span class="pre-tag">Science Lab</span>
                            <h4>Junior Science Experiments</h4>
                            <p>Magnets, prisms, and microscope observations for experiential science learning.</p>
                        </div>
                    </div>
                </div>

                <div class="pre-gallery-card">
                    <div class="pre-gallery-thumb">
                        <img src="{{ asset('assets/images/gallery/computer-lab.png') }}" alt="Computer Lab" loading="lazy">
                        <div class="pre-gallery-overlay">
                            <span class="pre-tag">IT &amp; Coding</span>
                            <h4>Smart Digital Lab</h4>
                            <p>Individual computer workstations with curated educational software.</p>
                        </div>
                    </div>
                </div>

                <div class="pre-gallery-card">
                    <div class="pre-gallery-thumb">
                        <img src="{{ asset('assets/images/gallery/gallery-sports-field-agility.jpg') }}" alt="Sports and Athletics" loading="lazy">
                        <div class="pre-gallery-overlay">
                            <span class="pre-tag">Physical Ed</span>
                            <h4>Athletics &amp; Field Games</h4>
                            <p>Football, basketball, cricket nets, and gymnastics for physical fitness.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             6. ADMISSION CTA
             ========================================================================= -->
        <section class="acad-cta-banner">
            <div class="acad-cta-card">
                <div class="acad-cta-content">
                    <span class="acad-cta-eyebrow">ADMISSIONS OPEN FOR CLASSES 1 TO 5</span>
                    <h2 class="acad-cta-heading">
                        Enroll Your Child for Primary Excellence.
                    </h2>
                    <p class="acad-cta-subtext">
                        Give your child the lifelong advantages of conceptual clarity, Abacus mental speed, and competitive confidence.
                    </p>
                    <div class="acad-cta-btn-group">
                        <a href="{{ route('online-registration') }}" class="btn-acad-cta-primary">
                            <span>Register for Admission</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="{{ route('fee-structure') }}" class="btn-acad-cta-call">
                            <i class="fa-solid fa-indian-rupee-sign"></i>
                            <span>View Fee Structure</span>
                        </a>
                        <a href="{{ route('contact') }}" class="btn-acad-cta-wa">
                            <i class="fa-solid fa-envelope"></i>
                            <span>Contact Campus</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div><!-- /.acad-container -->

</main>
@endsection
