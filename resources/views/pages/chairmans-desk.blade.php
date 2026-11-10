@extends('layouts.app')

@section('title', "Advaita School of Excellence")

@section('content')
<main id="main" class="main-content-wrapper chairman-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Building Stronger Foundations for Brighter Tomorrows
         ========================================================================= -->
    <section class="chairman-hero-section">
        <div class="chairman-hero-canvas chairman-hero-centered-canvas">
            <!-- Background Image & Subtle Ambient Overlay -->
            <div class="chairman-hero-bg-visual" aria-hidden="true">
                <img src="{{ asset($content['hero_image'] ?? 'assets/images/about-hero-building.jpg') }}" alt="Advaita School of Excellence Campus" class="chairman-hero-bg-img" loading="eager">
                <div class="chairman-hero-overlay-center"></div>
            </div>

            <!-- Centered Content Panel -->
            <div class="chairman-hero-center-panel">
                <div class="chairman-hero-content-inner text-center">
                    <!-- Breadcrumbs Centered -->
                    <nav class="chairman-breadcrumb chairman-breadcrumb-center" aria-label="Breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="{{ route('about-us') }}">About Us</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Chairman's Desk</span>
                    </nav>

                    <div class="chairman-eyebrow-pill">
                        <i class="fa-solid fa-user-tie"></i>
                        <span>{{ $content['hero_eyebrow'] ?? "FROM THE CHAIRMAN'S DESK" }}</span>
                    </div>

                    <h1 class="chairman-hero-title">
                        {{ $content['hero_title'] ?? 'Building Stronger Foundations for' }}
                        <span class="text-orange">{{ $content['hero_highlight'] ?? 'Brighter Tomorrows.' }}</span>
                    </h1>

                    <!-- Pipeline Sub-list Centered -->
                    <div class="chairman-hero-pillars chairman-hero-pillars-center">
                        <span>Education</span>
                        <span class="pillar-pipe">&bull;</span>
                        <span>Values</span>
                        <span class="pillar-pipe">&bull;</span>
                        <span>Discipline</span>
                        <span class="pillar-pipe">&bull;</span>
                        <span>Opportunities</span>
                        <span class="pillar-pipe">&bull;</span>
                        <span>A Better Society</span>
                    </div>

                    <p class="chairman-hero-desc">
                        At Advaita School of Excellence, we go beyond textbooks to create a nurturing environment where every child is encouraged to learn, grow and shape a brighter future.
                    </p>

                    <!-- Hero Action Buttons Centered -->
                    <div class="chairman-hero-actions chairman-hero-actions-center">
                        <a href="#message" class="chairman-btn-orange">
                            <span>Read Chairman's Message</span>
                            <i class="fa-solid fa-arrow-down"></i>
                        </a>
                        <a href="{{ route('vision-mission') }}" class="chairman-btn-video">
                            <span>Our Vision &amp; Mission</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. CHAIRMAN'S MESSAGE SECTION
         ========================================================================= -->
    <section class="chairman-message-section">
        <!-- Background Side Dot Matrices -->
        <div class="chairman-message-dots-left" aria-hidden="true"></div>
        <div class="chairman-message-dots-right" aria-hidden="true"></div>

        <div class="chairman-message-container">
            <div class="chairman-message-card">

                <!-- Left: Message Content -->
                <div class="chairman-message-content">
                    <span class="chairman-message-eyebrow">CHAIRMAN'S MESSAGE</span>
                    <h2 class="chairman-message-title">
                        A Few Words from<br>
                        <span>Our Chairman.</span>
                    </h2>

                    <div class="chairman-salutation">
                        Dear Students, Parents and Well-wishers,
                    </div>

                    <p>
                        At Advaita School of Excellence, our vision has always been to create an education ecosystem that goes beyond textbooks. We believe in nurturing young minds with the right blend of knowledge, values, discipline and life skills, so that they grow into confident, compassionate and responsible global citizens.
                    </p>

                    <p>
                        In today's rapidly evolving world, academic excellence alone is not enough. That is why Advaita is committed to providing a strong foundation for NEET, IIT and various competitive exams along with holistic development in a supportive and inspiring environment.
                    </p>

                    <p>
                        Our focus is on creating opportunities where curiosity is encouraged, creativity is nurtured and every child is given the confidence to excel — not just in exams, but in life.
                    </p>

                    <!-- Quote Box -->
                    <div class="chairman-quote-box">
                        <div class="chairman-quote-icon" aria-hidden="true"><i class="fa-solid fa-quote-left"></i></div>
                        <p class="chairman-quote-text">
                            {{ $content['chairman_quote'] ?? 'With a strong foundation in education, ethics and innovation, we aim to develop responsible individuals who contribute positively to society.' }}
                        </p>
                    </div>
                </div>

                <!-- Right: Chairman Profile Column -->
                <div class="chairman-profile-col">
                    <div class="chairman-profile-card-wrapper">
                        <!-- Blue Accent Tab on Left -->
                        <div class="chairman-profile-blue-tab" aria-hidden="true"></div>
                        <!-- Dot Grid Background Accent -->
                        <div class="chairman-profile-dots-decor" aria-hidden="true"></div>

                        <div class="chairman-profile-card">
                            <div class="chairman-profile-photo-wrap">
                                <img src="{{ asset($content['chairman_image'] ?? 'assets/images/chairman-real.png') }}" alt="Shri. Vishal Vishal Wattamwar - Chairman" class="chairman-profile-photo" loading="lazy">
                            </div>
                            <div class="chairman-profile-info">
                                <h3 class="chairman-name">{{ $content['chairman_name'] ?? 'Shri. Vishal Wattamwar' }}</h3>
                                <div class="chairman-role">Chairman,</div>
                                <p class="chairman-org">{{ $content['chairman_designation'] ?? 'Sanmati Sevabhavi Sansthan, Parbhani' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. COMMITMENT SECTION: Four Beliefs That Guide Us (4 Cards)
         ========================================================================= -->
    <section class="chairman-commitment-section">
        <div class="chairman-commitment-container">
            <div class="about-section-header text-center">
                <span class="about-eyebrow">OUR COMMITMENT</span>
                <h2 class="about-section-heading">
                    Four Beliefs That <span>Guide Us.</span>
                </h2>
            </div>

            <!-- 4 Commitment Cards -->
            <div class="chairman-commitment-grid">
                <!-- Card 1: Excellence -->
                <div class="chairman-commitment-card">
                    <div class="chairman-commitment-icon icon-blue">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="chairman-commitment-card-title">Excellence</h3>
                    <p class="chairman-commitment-desc">
                        Consistent pursuit of academic and personal growth.
                    </p>
                </div>

                <!-- Card 2: Opportunity -->
                <div class="chairman-commitment-card">
                    <div class="chairman-commitment-icon icon-orange">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h3 class="chairman-commitment-card-title">Opportunity</h3>
                    <p class="chairman-commitment-desc">
                        Creating platforms to help every child discover their potential.
                    </p>
                </div>

                <!-- Card 3: Values -->
                <div class="chairman-commitment-card">
                    <div class="chairman-commitment-icon icon-blue">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <h3 class="chairman-commitment-card-title">Values</h3>
                    <p class="chairman-commitment-desc">
                        Nurturing integrity, empathy and responsible citizenship.
                    </p>
                </div>

                <!-- Card 4: Future Ready -->
                <div class="chairman-commitment-card">
                    <div class="chairman-commitment-icon icon-rose">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h3 class="chairman-commitment-card-title">Future Ready</h3>
                    <p class="chairman-commitment-desc">
                        Preparing students for NEET, IIT and a wide range of competitive exams, along with life skills.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. CTA BANNER SECTION: Be A Part of Advaita (Full Width Layout)
         ========================================================================= -->
    <section class="staff-join-section">
        <!-- Background Shapes -->
        <div class="shape-one"></div>
        <div class="shape-two"></div>
        <div class="shape-three"></div>

        <!-- Left Graphic: Paper Airplane SVG -->
        <div class="staff-join-plane-left" aria-hidden="true">
            <svg class="staff-join-plane-img" viewBox="0 0 360 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Dotted Loop Flight Path -->
                <path d="M 15 205 C 70 150, 110 98, 165 98 C 215 98, 235 145, 205 165 C 175 180, 178 125, 255 58" 
                      stroke="#0284C7" 
                      stroke-width="2.4" 
                      stroke-dasharray="6 6" 
                      stroke-linecap="round" 
                      opacity="0.85" />
                <!-- Classic Straight Paper Airplane -->
                <g transform="translate(255, 58) rotate(-38)">
                    <polygon points="46,0 0,-18 16,0" fill="#E0F2FE" stroke="#0284C7" stroke-width="1.8" stroke-linejoin="round"/>
                    <polygon points="46,0 16,0 0,18" fill="#38BDF8" stroke="#0284C7" stroke-width="1.8" stroke-linejoin="round"/>
                    <polygon points="16,0 0,18 6,6" fill="#0284C7" stroke="#0284C7" stroke-width="1.2" stroke-linejoin="round"/>
                    <line x1="46" y1="0" x2="16" y2="0" stroke="#0284C7" stroke-width="1.8" stroke-linecap="round"/>
                </g>
            </svg>
        </div>

        <!-- Center Content -->
        <div class="banner-content-center">
            <div class="copy-center">
                <div class="eyebrow">BE A PART OF ADVAITA</div>
                <h2 class="headline">
                    Together, let’s build <span class="text-orange">brighter tomorrows.</span>
                </h2>
                <p class="subtext">
                    Give your child the right start with strong academics, values and endless opportunities.
                </p>
                <div class="buttons">
                    <a href="{{ route('home') }}#admissions" class="staff-btn-orange">
                        <span>Book a Campus Visit</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="{{ route('home') }}#contact" class="staff-btn-outline">
                        <span>Enquire Now</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Dots Pattern on Right before students -->
        <div class="dot-pattern"></div>

        <!-- Students Image on Right -->
        <div class="students">
            <img src="{{ asset('assets/images/about-cta-students-trio.png') }}" alt="Advaita Students" loading="lazy">
        </div>
    </section>

</main>
@endsection
