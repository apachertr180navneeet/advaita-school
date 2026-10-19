@extends('layouts.app')

@section('title', $seo['title'] ?? 'Advaita School of Excellence, Parbhani · CBSE Affiliated (No. 1130920)')
@section('meta_description', $seo['description'] ?? 'Advaita School of Excellence, Parbhani - CBSE Affiliated English Medium School (No. 1130920). Offering future-ready education, modern robotics & science labs, holistic sports, and values-based learning from Pre-Primary to Class 10.')
@section('meta_keywords', $seo['keywords'] ?? 'Advaita School of Excellence, Parbhani School, CBSE School Parbhani, Best School in Parbhani, CBSE Affiliated School 1130920, Robotics Lab School, English Medium School Parbhani')

@section('content')
<main id="main" class="main-content-wrapper">

    <!-- ====================================================================
         SECTION 1: HERO SECTION & SLIDER
         ==================================================================== -->
    <section class="adv-hero-slider-section" id="hero" aria-label="Advaita School of Excellence Hero Banner">
        <div class="adv-slider-container">
            <div class="adv-slider-wrapper">

                @php
                    $sliderList = isset($sliders) && $sliders->count() > 0 ? $sliders : collect();
                @endphp

                @forelse($sliderList as $index => $slide)
                <div class="adv-slide {{ $loop->first ? 'active' : '' }}" data-slide-index="{{ $index }}">
                    <div class="adv-slide-banner-wrap">
                        <img src="{{ $slide->image_url }}" alt="{{ $slide->title_1 }} {{ $slide->title_2 }}" class="adv-slide-banner-img" loading="{{ $loop->first ? 'eager' : 'lazy' }}">
                        
                        <!-- Dot Grid Matrix Accents (Top Left & Bottom Right) -->
                        <div class="adv-hero-dots-decor top-left" aria-hidden="true"></div>
                        <div class="adv-hero-dots-decor bottom-right" aria-hidden="true"></div>

                        <!-- Premium Hero Content Overlay (Text Rendered on Banner Image) -->
                        <div class="adv-hero-text-overlay">
                            <!-- Taglines: Title 1 and Title 2 -->
                            @if($slide->title_1 || $slide->title_2)
                                <h1 class="adv-hero-taglines">
                                    @if($slide->title_1)
                                        <span class="tagline-white">{{ $slide->title_1 }}</span>
                                    @endif
                                    @if($slide->title_2)
                                        <span class="tagline-orange">{{ $slide->title_2 }}</span>
                                    @endif
                                </h1>
                                <!-- Orange Underline Accent Bar -->
                                <div class="adv-hero-title-bar" aria-hidden="true"></div>
                            @endif

                            <!-- Descriptive Paragraph -->
                            @if($slide->description)
                                <p class="adv-hero-lead-desc">
                                    {{ $slide->description }}
                                </p>
                            @endif

                            <!-- Interactive CTA Action Buttons -->
                            @php
                                $hasBtn1 = ! empty($slide->btn_1_text) && ! empty($slide->btn_1_url);
                                $hasBtn2 = ! empty($slide->btn_2_text) && ! empty($slide->btn_2_url);
                            @endphp
                            @if($hasBtn1 || $hasBtn2)
                                <div class="adv-hero-actions-group">
                                    @if($hasBtn1)
                                        <a href="{{ $slide->btn_1_url }}" class="adv-hero-real-btn adv-hero-btn-apply" title="{{ $slide->btn_1_text }}">
                                            <span>{{ $slide->btn_1_text }}</span>
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    @endif
                                    @if($hasBtn2)
                                        <a href="{{ $slide->btn_2_url }}" class="adv-hero-real-btn adv-hero-btn-explore" title="{{ $slide->btn_2_text }}">
                                            <span class="adv-hero-play-circle" aria-hidden="true">
                                                <i class="fa-solid fa-play"></i>
                                            </span>
                                            <span>{{ $slide->btn_2_text }}</span>
                                        </a>
                                    @endif
                                </div>
                            @endif
                        </div>

                        <!-- Right Sky Script Tag Accent -->
                        <div class="adv-hero-sky-badge" aria-hidden="true">
                            <span class="adv-sky-script">Excellence.<br>In Every Child</span>
                            <svg class="adv-sky-swoosh" viewBox="0 0 140 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 16 C 45 4, 95 4, 136 18" stroke="#F37021" stroke-width="3" stroke-linecap="round"/>
                            </svg>
                        </div>

                    </div>
                </div>
                @empty
                <!-- Fallback slide if empty -->
                <div class="adv-slide active" data-slide-index="0">
                    <div class="adv-slide-banner-wrap">
                        <img src="{{ asset('assets/images/hero-slider-campus.png') }}" alt="Advaita School of Excellence - Building Curious Minds. Shaping Confident Futures." class="adv-slide-banner-img" loading="eager">
                        
                        <!-- Dot Grid Matrix Accents (Top Left & Bottom Right) -->
                        <div class="adv-hero-dots-decor top-left" aria-hidden="true"></div>
                        <div class="adv-hero-dots-decor bottom-right" aria-hidden="true"></div>

                        <div class="adv-hero-text-overlay">
                            <h1 class="adv-hero-taglines">
                                <span class="tagline-white">Building Curious Minds.</span>
                                <span class="tagline-orange">Shaping Confident Futures.</span>
                            </h1>
                            <div class="adv-hero-title-bar" aria-hidden="true"></div>
                            <p class="adv-hero-lead-desc">
                                Where knowledge meets values, creativity meets opportunity, and every child is encouraged to discover their true potential.
                            </p>
                            <div class="adv-hero-actions-group">
                                <a href="#admissions" class="adv-hero-real-btn adv-hero-btn-apply" title="Apply for Admission">
                                    <span>Apply for Admission</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <a href="#about" class="adv-hero-real-btn adv-hero-btn-explore" title="Explore Our School">
                                    <span class="adv-hero-play-circle" aria-hidden="true">
                                        <i class="fa-solid fa-play"></i>
                                    </span>
                                    <span>Explore Our School</span>
                                </a>
                            </div>
                        </div>

                        <div class="adv-hero-sky-badge" aria-hidden="true">
                            <span class="adv-sky-script">Excellence.<br>In Every Child</span>
                            <svg class="adv-sky-swoosh" viewBox="0 0 140 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 16 C 45 4, 95 4, 136 18" stroke="#F37021" stroke-width="3" stroke-linecap="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
                @endforelse

            </div>

            <!-- Slider Arrows (Rendered when multiple slides exist) -->
            @php
                $totalSlideCount = isset($sliderList) && $sliderList->count() > 0 ? $sliderList->count() : 1;
            @endphp
            @if($totalSlideCount > 1)
                <button type="button" class="adv-slider-arrow prev-arrow" aria-label="Previous Slide">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button type="button" class="adv-slider-arrow next-arrow" aria-label="Next Slide">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>

                <!-- Slider Dots -->
                <div class="adv-slider-dots" role="tablist" aria-label="Slide Selection">
                    @for($i = 0; $i < $totalSlideCount; $i++)
                        <button type="button" class="adv-slider-dot {{ $i === 0 ? 'active' : '' }}" role="tab" aria-selected="{{ $i === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $i + 1 }}"></button>
                    @endfor
                </div>
            @endif
        </div>
    </section>

    <!-- Mobile Quick Action CTA Bar (Visible on Mobile & Tablet) -->
    <div class="adv-mobile-hero-cta-bar">
        <a href="#admissions" class="adv-mobile-hero-btn primary">
            <i class="fa-solid fa-paper-plane"></i>
            <span>Apply for Admission</span>
        </a>
        <a href="#about" class="adv-mobile-hero-btn secondary">
            <i class="fa-solid fa-compass"></i>
            <span>Explore Our School</span>
        </a>
    </div>


    <!-- ====================================================================
         SECTION 2: QUICK INFORMATION / HIGHLIGHTS STATS STRIP (5 STATS)
         ==================================================================== -->
    <section class="parshv-stats-section" aria-label="School Key Highlights">
        <div class="parshv-container">
            <div class="parshv-stats-grid five-cols">
                <!-- Stat 1: 100% Class 10th Result -->
                <div class="parshv-stat-card">
                    <div class="parshv-stat-icon-wrap trophy-icon">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <div class="parshv-stat-info">
                        <span class="parshv-stat-num">100%</span>
                        <span class="parshv-stat-label">Class 10th Result (2025–26)</span>
                    </div>
                </div>

                <!-- Stat 2: 15+ Students Scored 90%+ -->
                <div class="parshv-stat-card">
                    <div class="parshv-stat-icon-wrap team-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="parshv-stat-info">
                        <span class="parshv-stat-num">15+</span>
                        <span class="parshv-stat-label">Students Scored 90% and Above</span>
                    </div>
                </div>

                <!-- Stat 3: 8+ Students Scored 80%+ -->
                <div class="parshv-stat-card">
                    <div class="parshv-stat-icon-wrap chart-icon">
                        <i class="fa-solid fa-chart-column"></i>
                    </div>
                    <div class="parshv-stat-info">
                        <span class="parshv-stat-num">8+</span>
                        <span class="parshv-stat-label">Students Scored 80% and Above</span>
                    </div>
                </div>

                <!-- Stat 4: 35% in 90%+ Bracket -->
                <div class="parshv-stat-card">
                    <div class="parshv-stat-icon-wrap group-icon">
                        <i class="fa-solid fa-user-group"></i>
                    </div>
                    <div class="parshv-stat-info">
                        <span class="parshv-stat-num">35%</span>
                        <span class="parshv-stat-label">Students in 90%+ Bracket</span>
                    </div>
                </div>

                <!-- Stat 5: Back-to-Back 100% Results -->
                <div class="parshv-stat-card">
                    <div class="parshv-stat-icon-wrap badge-icon">
                        <i class="fa-solid fa-certificate"></i>
                    </div>
                    <div class="parshv-stat-info">
                        <span class="parshv-stat-sub-badge">Back-to-Back</span>
                        <span class="parshv-stat-num">100%</span>
                        <span class="parshv-stat-label">Results</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ====================================================================
         SECTION 3: WELCOME / ABOUT SCHOOL SECTION
         ==================================================================== -->
    <section class="adv-welcome-section" id="about" aria-label="About Advaita School of Excellence">
        <!-- Subtle Ambient Background Accents -->
        <div class="adv-welcome-bg-glow" aria-hidden="true"></div>
        <div class="adv-welcome-dots-pattern" aria-hidden="true"></div>

        <div class="adv-welcome-container">
            <div class="adv-welcome-grid">
                
                <!-- Left Visual Column with Multi-layer Campus Frame -->
                <div class="adv-welcome-visual-col">
                    <div class="adv-welcome-frame-wrap">
                        <!-- Decorative Backdrop Offset Accent -->
                        <div class="adv-welcome-backdrop-accent" aria-hidden="true"></div>

                        <!-- Main Clean Campus Image Card -->
                        <div class="adv-welcome-image-card">
                            <img src="{{ asset('assets/images/about-advaita-visual-clean.jpg?v=3') }}" alt="Advaita School of Excellence Campus - Premier CBSE School Parbhani" class="adv-welcome-img" loading="eager">
                            <div class="adv-welcome-img-overlay" aria-hidden="true"></div>
                            
                            <!-- Floating Tag on Image -->
                            <div class="adv-welcome-script-pill">
                                <i class="fa-solid fa-sparkles"></i>
                                <span>Excellence in Every Child</span>
                            </div>
                        </div>

                        <!-- Floating Stat & Affiliation Trust Badge -->
                        <div class="adv-welcome-trust-badge">
                            <div class="adv-trust-badge-icon">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="adv-trust-badge-content">
                                <span class="adv-trust-num">Play Group to XII</span>
                                <span class="adv-trust-sub">CBSE Affiliation No. 1130920</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Content Column -->
                <div class="adv-welcome-content-col">
                    
                    <!-- Eyebrow Pill Badge -->
                    <div class="adv-welcome-pill-badge">
                        <span class="badge-dot"></span>
                        <i class="fa-solid fa-landmark"></i>
                        <span>ABOUT OUR SCHOOL</span>
                    </div>

                    <!-- Main Section Heading -->
                    <h2 class="adv-welcome-heading">
                        <span class="adv-heading-prefix">Welcome to</span>
                        <span class="adv-heading-brand">Advaita School of Excellence</span>
                    </h2>
                    <div class="adv-heading-underline-bar"></div>

                    <!-- Refined Quote Callout Box -->
                    <div class="adv-welcome-quote-card">
                        <div class="adv-quote-mark" aria-hidden="true">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>
                        <p class="adv-welcome-quote-text">
                            &ldquo;At Advaita School of Excellence, we believe education is more than academic achievement. It is about developing confident, responsible and compassionate individuals who are prepared for the future.&rdquo;
                        </p>
                    </div>

                    <!-- Explanatory Paragraph -->
                    <p class="adv-welcome-desc">
                        Established with a deep commitment to educational excellence, Advaita School of Excellence provides a seamless educational journey from Play Group through Class XII. We harmonize rigorous CBSE academic standards with experiential learning, cultural values, and modern 21st-century competencies.
                    </p>

                    <!-- 4 Core Feature Cards (2x2 Grid) -->
                    <div class="adv-welcome-features-grid">
                        
                        <!-- Feature 1: Academic Excellence -->
                        <div class="adv-welcome-feature-card feature-theme-orange">
                            <div class="adv-feature-icon-box">
                                <i class="fa-solid fa-book-open"></i>
                            </div>
                            <div class="adv-feature-info">
                                <h3 class="adv-feature-heading">Academic Excellence</h3>
                                <p class="adv-feature-subtext">Strong foundation for brighter futures</p>
                            </div>
                        </div>

                        <!-- Feature 2: Holistic Development -->
                        <div class="adv-welcome-feature-card feature-theme-blue">
                            <div class="adv-feature-icon-box">
                                <i class="fa-solid fa-user-group"></i>
                            </div>
                            <div class="adv-feature-info">
                                <h3 class="adv-feature-heading">Holistic Development</h3>
                                <p class="adv-feature-subtext">Nurturing mind, body and character</p>
                            </div>
                        </div>

                        <!-- Feature 3: Safe & Supportive Campus -->
                        <div class="adv-welcome-feature-card feature-theme-teal">
                            <div class="adv-feature-icon-box">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div class="adv-feature-info">
                                <h3 class="adv-feature-heading">Safe & Supportive Campus</h3>
                                <p class="adv-feature-subtext">A second home for every child</p>
                            </div>
                        </div>

                        <!-- Feature 4: Future-Ready Learning -->
                        <div class="adv-welcome-feature-card feature-theme-amber">
                            <div class="adv-feature-icon-box">
                                <i class="fa-regular fa-lightbulb"></i>
                            </div>
                            <div class="adv-feature-info">
                                <h3 class="adv-feature-heading">Future-Ready Learning</h3>
                                <p class="adv-feature-subtext">Skills for a changing world</p>
                            </div>
                        </div>

                    </div>

                    <!-- Bottom Action Buttons -->
                    <div class="adv-welcome-actions">
                        <a href="#why-advaita" class="adv-btn-welcome-orange">
                            <span>Know More About Us</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="#gallery" class="adv-btn-welcome-outline">
                            <i class="fa-solid fa-building-columns"></i>
                            <span>Take a Campus Tour</span>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- ====================================================================
         SECTION 4: WHAT MAKES ADVAITA SPECIAL (THREE PILLARS)
         ==================================================================== -->
    <section class="adv-pillars-section" id="why-advaita" aria-label="What Makes Advaita Special - Three Pillars">
        <div class="adv-pillars-container">
            
            <!-- Section Header -->
            <div class="adv-pillars-header text-center">
                <div class="adv-pillars-eyebrow">
                    <i class="fa-solid fa-landmark"></i>
                    <span>{{ $pillarSettings['eyebrow'] ?? 'WHAT MAKES ADVAITA SPECIAL' }}</span>
                </div>
                <h2 class="adv-pillars-title">
                    <span class="title-dark">{{ $pillarSettings['title_1'] ?? 'Three pillars that shape' }}</span>
                    @if(!empty($pillarSettings['title_2']))
                        <span class="title-orange">{{ $pillarSettings['title_2'] }}</span>
                    @endif
                </h2>
                <div class="adv-pillars-underline-bar"></div>
                @if(!empty($pillarSettings['subtitle']))
                    <p class="adv-pillars-subtitle">
                        {{ $pillarSettings['subtitle'] }}
                    </p>
                @endif
            </div>

            <!-- Dynamic Pillar Cards -->
            <div class="adv-pillars-grid">
                @php
                    $pillarList = isset($pillars) && $pillars->count() > 0 ? $pillars : collect();
                @endphp

                @forelse($pillarList as $pillar)
                <div class="adv-pillar-card theme-{{ $pillar->theme_color ?: 'orange' }}">
                    <div class="adv-pillar-image-wrap">
                        <img src="{{ $pillar->image_url }}" alt="{{ $pillar->title }}" class="adv-pillar-img" loading="lazy">
                        <div class="adv-pillar-num-badge">{{ $pillar->badge_label }}</div>
                    </div>
                    <div class="adv-pillar-content">
                        <h3 class="adv-pillar-heading">{{ $pillar->title }}</h3>
                        @if($pillar->description)
                            <p class="adv-pillar-desc">
                                {{ $pillar->description }}
                            </p>
                        @endif
                        @if(!empty($pillar->tags) && is_array($pillar->tags))
                            <div class="adv-pillar-tags-grid">
                                @foreach($pillar->tags as $tag)
                                    @php
                                        $tagLabel = is_array($tag) ? ($tag['label'] ?? '') : $tag;
                                        $tagIcon = is_array($tag) ? ($tag['icon'] ?? 'fa-solid fa-check') : 'fa-solid fa-check';
                                    @endphp
                                    @if(!empty($tagLabel))
                                    <div class="adv-pillar-tag">
                                        <i class="{{ $tagIcon }}"></i>
                                        <span>{{ $tagLabel }}</span>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                @empty
                <div class="adv-pillar-card theme-orange">
                    <div class="adv-pillar-image-wrap">
                        <img src="{{ asset('assets/images/pillar-card-1.jpg') }}" alt="Future-ready Labs & Smart Classrooms" class="adv-pillar-img" loading="lazy">
                        <div class="adv-pillar-num-badge">01</div>
                    </div>
                    <div class="adv-pillar-content">
                        <h3 class="adv-pillar-heading">Future-ready Labs &amp; Smart Classrooms</h3>
                        <p class="adv-pillar-desc">
                            From robotics for the youngest to digital language for senior school — learning that comes alive when you can touch it.
                        </p>
                    </div>
                </div>
                @endforelse

            </div>

            <!-- Bottom CTA Button -->
            <div class="adv-pillars-cta-wrap text-center">
                <a href="{{ $pillarSettings['cta_url'] ?? '#why-choose' }}" class="adv-btn-pillars-primary">
                    <span>{{ $pillarSettings['cta_text'] ?? 'Discover the Advaita Difference' }}</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

        </div>
    </section>


    <!-- ====================================================================
         SECTION 5: WHY CHOOSE ADVAITA? (MATCHING DESIGN SPEC)
         ==================================================================== -->
    <section class="adv-why-section" id="why-choose" aria-label="Why Choose Advaita School of Excellence">
        
        <!-- Subtle text watermarks and background accents -->
        <div class="adv-why-watermark-left" aria-hidden="true">
            <span>L E A R N</span>
            <span>G R O W</span>
            <span>B E L O N G</span>
            <span>E X C E L</span>
        </div>

        <div class="adv-why-watermark-right" aria-hidden="true">
            <div class="adv-why-cursive-wrap">
                <span class="adv-why-cursive-text">Excellence<br><em>in Every Child</em></span>
                <svg width="110" height="14" viewBox="0 0 110 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 4C35 12 75 13 107 5" stroke="#F37021" stroke-width="2.5" stroke-linecap="round"/>
                </svg>
            </div>
        </div>

        <div class="adv-why-container">
            
            <!-- Section Header -->
            <div class="adv-why-header text-center">
                <div class="adv-why-eyebrow">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <span>{{ $whyChooseSettings['eyebrow'] ?? 'WHY CHOOSE ADVAITA?' }}</span>
                </div>
                <h2 class="adv-why-title">
                    <span class="title-dark">{{ $whyChooseSettings['title_1'] ?? 'Why Choose' }}</span>
                    @if(!empty($whyChooseSettings['title_2']))
                        <span class="title-orange">{{ $whyChooseSettings['title_2'] }}</span>
                    @endif
                </h2>
                <div class="adv-why-underline-bar"></div>
                @if(!empty($whyChooseSettings['subtitle']))
                    <p class="adv-why-subtitle">
                        {{ $whyChooseSettings['subtitle'] }}
                    </p>
                @endif
            </div>

            <!-- Advantage Cards (Dynamic Slider) -->
            <div class="adv-why-slider-wrap">

                <!-- Left Nav Arrow -->
                <button type="button" class="adv-why-arrow prev" aria-label="Previous card">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <div class="adv-why-slider-viewport">
                    <div class="adv-why-grid six-cards">
                        @php
                            $cardList = isset($whyChooseCards) && $whyChooseCards->count() > 0 ? $whyChooseCards : collect();
                        @endphp

                        @forelse($cardList as $card)
                            <!-- Card {{ $card->badge_label }}: {{ $card->title }} ({{ $card->theme_color }}) -->
                            <div class="adv-why-card {{ $card->theme_class }}">
                                <div class="adv-why-image-wrap">
                                    <img src="{{ $card->image_url }}" alt="{{ $card->title }} at Advaita" class="adv-why-img" loading="lazy">
                                    <div class="adv-why-num-badge">{{ $card->badge_label }}</div>
                                </div>
                                <div class="adv-why-content">
                                    <h3 class="adv-why-card-title">{{ $card->title }}</h3>
                                    <p class="adv-why-card-desc">
                                        {{ $card->description }}
                                    </p>
                                </div>
                            </div>
                        @empty
                            <p class="text-center adv-empty-grid-msg">No advantage cards available at the moment.</p>
                        @endforelse
                    </div>
                </div>

                <!-- Right Nav Arrow -->
                <button type="button" class="adv-why-arrow next" aria-label="Next card">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>

            </div>

            @php
                $cardCount = $cardList->count();
                $totalPages = ceil($cardCount / 3);
            @endphp
            @if($totalPages > 1)
                <!-- Slider Dots -->
                <div class="adv-why-dots" role="tablist" aria-label="Why Choose Advaita slide navigation">
                    @for($i = 0; $i < $totalPages; $i++)
                        <button type="button" class="adv-why-dot {{ $i === 0 ? 'active' : '' }}" role="tab" aria-selected="{{ $i === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $i + 1 }}"></button>
                    @endfor
                </div>
            @endif

            @if(!empty($whyChooseSettings['cta_text']))
                <!-- Bottom CTA Button -->
                <div class="adv-why-cta-wrap text-center">
                    <a href="{{ $whyChooseSettings['cta_url'] ?? '#admissions' }}" class="adv-btn-why-primary">
                        <span>{{ $whyChooseSettings['cta_text'] }}</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            @endif

        </div>
    </section>


    <!-- ====================================================================
         SECTION 6: CAMPUS VISIT / ADMISSIONS CTA BANNER (DESIGN SPEC)
         ==================================================================== -->
    <section class="adv-visit-banner-section" id="admissions" aria-label="Book A Campus Visit">
        <div class="adv-visit-container">
            <div class="adv-visit-card">
                
                <!-- Left Content Area -->
                @php
                    $visitImg = $campusVisit['image'] ?? 'assets/images/campus-visit-visual.jpg';
                    if (str_starts_with($visitImg, 'assets/')) {
                        $visitImgUrl = asset($visitImg);
                    } elseif (str_starts_with($visitImg, 'http')) {
                        $visitImgUrl = $visitImg;
                    } else {
                        $visitImgUrl = asset('storage/' . ltrim($visitImg, '/'));
                    }

                    $phoneClean = preg_replace('/[^0-9+]/', '', $campusVisit['phone_number'] ?? '+919413062851');
                @endphp

                <!-- Left Content Area -->
                <div class="adv-visit-content-side">
                    
                    @if(!empty($campusVisit['badge']))
                    <!-- Top Eyebrow Badge -->
                    <div class="adv-visit-pill-badge">
                        <i class="fa-solid fa-calendar-check"></i>
                        <span>{{ $campusVisit['badge'] }}</span>
                    </div>
                    @endif

                    <!-- Main Heading with Plane Accent -->
                    <div class="adv-visit-heading-wrap">
                        <h2 class="adv-visit-heading">
                            {{ $campusVisit['title_1'] ?? 'Come see the school' }} <br>
                            @if(!empty($campusVisit['title_2']))
                                @php
                                    $rawTitle2 = trim($campusVisit['title_2']);
                                    $highlightWord = str_starts_with(strtolower($rawTitle2), 'for ') ? trim(substr($rawTitle2, 4)) : $rawTitle2;
                                @endphp
                                for <span class="highlight-orange">{{ $highlightWord }}
                                    <svg class="heading-swoosh" width="140" height="12" viewBox="0 0 140 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 5C45 11 95 12 137 5" stroke="#F37021" stroke-width="3" stroke-linecap="round"/>
                                    </svg>
                                </span>
                            @endif
                        </h2>
                        <!-- Paper plane vector icon with dotted loop trail -->
                        <div class="adv-visit-plane-icon" aria-hidden="true">
                            <svg width="92" height="54" viewBox="0 0 92 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 46 C 20 50, 36 38, 28 24 C 20 10, 42 8, 52 18 C 58 24, 66 18, 72 14" stroke="#93C5FD" stroke-width="1.75" stroke-dasharray="3.5 3.5" stroke-linecap="round"/>
                                <g transform="translate(60, 2) rotate(6)">
                                    <path d="M2 13L28 2L18 26L12 16L2 13Z" stroke="#93C5FD" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" fill="rgba(239, 246, 255, 0.5)"/>
                                    <path d="M28 2L12 16" stroke="#93C5FD" stroke-width="1.75" stroke-linecap="round"/>
                                </g>
                            </svg>
                        </div>
                    </div>

                    <!-- Description & Cursive Tag Row -->
                    <div class="adv-visit-desc-row">
                        <p class="adv-visit-desc">
                            {{ $campusVisit['description'] ?? 'Walk our campus, meet our faculty, experience our learning environment, and get all your questions answered — the best way to know if Advaita is the right home for your child.' }}
                        </p>
                        @if(!empty($campusVisit['cursive_tag']))
                        <!-- Experience it Yourself Cursive Tag -->
                        <div class="adv-visit-cursive-tag" aria-hidden="true">
                            <span>{{ $campusVisit['cursive_tag'] }}</span>
                            <svg width="86" height="12" viewBox="0 0 86 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 4C28 10 58 11 83 4" stroke="#F37021" stroke-width="2.5" stroke-linecap="round"/>
                            </svg>
                        </div>
                        @endif
                    </div>

                    <div class="adv-visit-separator"></div>

                    <!-- 3 Feature Points -->
                    <div class="adv-visit-features-row">
                        <!-- Point 1 -->
                        <div class="adv-visit-feat-item">
                            <div class="adv-visit-feat-icon">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div class="adv-visit-feat-info">
                                <span class="feat-title">{{ $campusVisit['feat_1_title'] ?? 'Counsellors available' }}</span>
                                <span class="feat-sub">{{ $campusVisit['feat_1_sub'] ?? 'Mon–Sat · 9 AM to 5 PM' }}</span>
                            </div>
                        </div>

                        <!-- Point 2 -->
                        <div class="adv-visit-feat-item">
                            <div class="adv-visit-feat-icon">
                                <i class="fa-solid fa-comment-dots"></i>
                            </div>
                            <div class="adv-visit-feat-info">
                                <span class="feat-title">{{ $campusVisit['feat_2_title'] ?? 'Hindi · English' }}</span>
                                <span class="feat-sub">{{ $campusVisit['feat_2_sub'] ?? 'On-call & on-campus' }}</span>
                            </div>
                        </div>

                        <!-- Point 3 -->
                        <div class="adv-visit-feat-item">
                            <div class="adv-visit-feat-icon">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <div class="adv-visit-feat-info">
                                <span class="feat-title">{{ $campusVisit['feat_3_title'] ?? 'No obligation' }}</span>
                                <span class="feat-sub">{{ $campusVisit['feat_3_sub'] ?? 'Just a friendly chat' }}</span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right Visual Area with Floating Pods -->
                <div class="adv-visit-visual-side">
                    <img src="{{ $visitImgUrl }}" alt="{{ $campusVisit['title_1'] ?? 'Advaita School of Excellence Campus Visit' }}" class="adv-visit-campus-img" loading="lazy">
                    
                    <!-- Curved Arch Divider -->
                    <div class="adv-visit-curve-mask" aria-hidden="true">
                        <svg viewBox="0 0 100 500" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Warm apricot accent curve -->
                            <path d="M0 0 L18 0 C46 125 78 230 50 370 C38 430 22 480 8 500 L0 500 Z" fill="#FDF3E8"/>
                            <!-- Crisp white card curve -->
                            <path d="M0 0 L9 0 C37 125 69 230 41 370 C29 430 13 480 4 500 L0 500 Z" fill="#FFFFFF"/>
                        </svg>
                    </div>

                    <!-- Floating Action Pods -->
                    <div class="adv-visit-action-pods">
                        
                        <!-- Pod 1: Book A Campus Visit -->
                        <a href="{{ $campusVisit['btn_url'] ?? '#contact' }}" class="adv-visit-pod-orange">
                            <div class="pod-icon-box">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <div class="pod-text-box">
                                <span class="pod-title">{{ $campusVisit['btn_title'] ?? 'Book A Campus Visit' }}</span>
                                <span class="pod-sub">{{ $campusVisit['btn_sub'] ?? 'Pick A Slot · Free' }}</span>
                            </div>
                            <div class="pod-arrow-btn">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </a>

                        <!-- Pod 2: Call Counsellor -->
                        <a href="tel:{{ $phoneClean }}" class="adv-visit-pod-white">
                            <div class="pod-phone-circle">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="pod-phone-info">
                                <span class="phone-label">{{ $campusVisit['phone_label'] ?? 'TALK TO OUR COUNSELLOR' }}</span>
                                <span class="phone-number">{{ $campusVisit['phone_number'] ?? '094130 62851' }}</span>
                            </div>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ====================================================================
         SECTION 7: CAMPUS GALLERY (A DAY AT ADVAITA, IN PICTURES)
         ==================================================================== -->
    <section class="adv-gallery-section" id="gallery" aria-label="A Day at Advaita Campus Gallery">
        <div class="adv-gallery-container">
            
            <!-- Section Header -->
            <div class="adv-gallery-header text-center">
                <div class="adv-gallery-eyebrow">
                    <i class="fa-solid fa-camera"></i>
                    <span>{{ $gallerySettings['eyebrow'] ?? 'CAMPUS GALLERY' }}</span>
                </div>
                <h2 class="adv-gallery-title">
                    <span class="title-dark">{{ $gallerySettings['title_1'] ?? 'A day at Advaita,' }}</span>
                    @if(!empty($gallerySettings['title_2']))
                        <span class="title-orange">{{ $gallerySettings['title_2'] }}</span>
                    @endif
                </h2>
                @if(!empty($gallerySettings['subtitle']))
                    <p class="adv-gallery-subtitle">
                        {{ $gallerySettings['subtitle'] }}
                    </p>
                @endif
            </div>

            @php
                $activeGalleryItems = isset($galleryItems) && $galleryItems->count() > 0 ? $galleryItems : collect();
            @endphp

            @if($activeGalleryItems->isNotEmpty())
            <!-- Gallery Cards Slider Container -->
            <div class="adv-gallery-slider-wrap">
                
                <!-- Left Nav Arrow -->
                <button type="button" class="adv-gallery-arrow prev" aria-label="Previous gallery slide">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <!-- Slider Viewport -->
                <div class="adv-gallery-viewport">
                    <!-- Cards Track -->
                    <div class="adv-gallery-grid">
                        @foreach($activeGalleryItems as $item)
                            <!-- Card {{ $loop->iteration }} -->
                            <div class="adv-gallery-card" data-category="{{ $item->category }}">
                                <div class="adv-gallery-img-box">
                                    <img src="{{ $item->image_url }}" alt="{{ $item->caption ?? $item->category ?? 'Advaita School Campus' }}" class="adv-gallery-img {{ $item->custom_class }}" loading="lazy">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Right Nav Arrow -->
                <button type="button" class="adv-gallery-arrow next" aria-label="Next gallery slide">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>

            </div>

            <!-- Slider Pagination Dots -->
            <div class="adv-gallery-dots" role="tablist" aria-label="Gallery slide navigation">
                @foreach($activeGalleryItems as $item)
                    <button type="button" class="adv-gallery-dot {{ $loop->first ? 'active' : '' }}" role="tab" aria-selected="{{ $loop->first ? 'true' : 'false' }}" aria-label="Slide {{ $loop->iteration }}"></button>
                @endforeach
            </div>
            @endif

            <!-- Bottom Action Buttons -->
            <div class="adv-gallery-actions">
                @if(!empty($gallerySettings['btn_1_text']))
                    <a href="{{ $gallerySettings['btn_1_url'] ?? route('gallery') }}" class="adv-btn-gallery-primary">
                        <span>{{ $gallerySettings['btn_1_text'] }}</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                @endif
                @if(!empty($gallerySettings['btn_2_text']))
                    <a href="{{ $gallerySettings['btn_2_url'] ?? '#hero' }}" class="adv-btn-gallery-video">
                        <div class="video-play-circle">
                            <i class="fa-solid fa-play"></i>
                        </div>
                        <span>{{ $gallerySettings['btn_2_text'] }}</span>
                    </a>
                @endif
            </div>

        </div>
    </section>


    <!-- ====================================================================
         SECTION 8: PARENT TESTIMONIALS (VOICES THAT INSPIRE US)
         ==================================================================== -->
    <section class="adv-testimonials-section" id="testimonials" aria-label="Parent Testimonials">
        <div class="adv-testimonials-container">
            
            <!-- Section Header -->
            <div class="adv-testimonials-header text-center">
                <div class="adv-testimonials-eyebrow">
                    <i class="fa-solid fa-comment-dots"></i>
                    <span>{{ $testimonialSettings['eyebrow'] ?? 'TESTIMONIALS' }}</span>
                </div>
                <h2 class="adv-testimonials-title">
                    <span class="title-dark">{{ $testimonialSettings['title_1'] ?? 'Voices That' }}</span>
                    @if(!empty($testimonialSettings['title_2']))
                        <span class="title-orange">{{ $testimonialSettings['title_2'] }}</span>
                    @endif
                </h2>
                <div class="adv-testimonials-underline-bar"></div>
                @if(!empty($testimonialSettings['subtitle']))
                    <p class="adv-testimonials-subtitle">
                        {{ $testimonialSettings['subtitle'] }}
                    </p>
                @endif
            </div>

            @php
                $activeTestimonials = isset($testimonials) && $testimonials->count() > 0 ? $testimonials : collect();
            @endphp

            @if($activeTestimonials->isNotEmpty())
            <!-- Testimonial Cards Single-Line Carousel Slider -->
            <div class="adv-testimonials-slider-wrap">

                <!-- Left Nav Arrow -->
                <button type="button" class="adv-testi-arrow prev" aria-label="Previous testimonial">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <!-- Slider Viewport (Strictly 1 Row) -->
                <div class="adv-testimonials-viewport">
                    <div class="adv-testimonials-grid">
                        @foreach($activeTestimonials as $testi)
                            <!-- Card: {{ $testi->parent_name }} -->
                            <div class="adv-testi-card {{ $testi->theme_color === 'blue' ? 'theme-blue' : 'theme-orange' }}">
                                <div class="adv-testi-top-bar">
                                    <span class="adv-testi-quote-mark {{ $testi->theme_color === 'blue' ? 'blue' : 'orange' }}">&ldquo;</span>
                                    <div class="adv-testi-stars">
                                        @for($i = 1; $i <= ($testi->rating ?: 5); $i++)
                                            <i class="fa-solid fa-star"></i>
                                        @endfor
                                    </div>
                                </div>
                                <p class="adv-testi-text">
                                    {{ $testi->content }}
                                </p>
                                <div class="adv-testi-footer">
                                    <div class="adv-testi-avatar-box">
                                        <img src="{{ $testi->avatar_url }}" alt="{{ $testi->parent_name }} - Parent at Advaita" class="adv-testi-avatar" loading="lazy">
                                    </div>
                                    <div class="adv-testi-author-info">
                                        <h3 class="adv-testi-name">{{ $testi->parent_name }}</h3>
                                        @if(!empty($testi->child_info))
                                            <span class="adv-testi-role">{!! nl2br(e($testi->child_info)) !!}</span>
                                        @endif
                                    </div>
                                    <span class="adv-testi-close-quote {{ $testi->theme_color === 'blue' ? 'blue' : 'orange' }}">&rdquo;</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Right Nav Arrow -->
                <button type="button" class="adv-testi-arrow next" aria-label="Next testimonial">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>

            </div>

            <!-- Carousel Pagination Dots -->
            <div class="adv-testimonials-dots" role="tablist" aria-label="Testimonials pagination">
                @foreach($activeTestimonials as $testi)
                    <button type="button" class="adv-testi-dot {{ $loop->first ? 'active' : '' }}" role="tab" aria-selected="{{ $loop->first ? 'true' : 'false' }}" aria-label="Testimonial {{ $loop->iteration }}"></button>
                @endforeach
            </div>
            @endif

        </div>
    </section>


    <!-- ====================================================================
         SECTION 9: FREQUENTLY ASKED QUESTIONS (FAQ ACCORDION)
         ==================================================================== -->
    <section class="adv-faq-section" id="faq" aria-label="Frequently Asked Questions">
        <!-- Background decorative floating dots and glowing accents -->
        <div class="adv-faq-bg-glow-left" aria-hidden="true"></div>
        <div class="adv-faq-bg-glow-right" aria-hidden="true"></div>
        <div class="adv-faq-floating-dot" aria-hidden="true"></div>

        <div class="adv-faq-container">
            
            <!-- Section Header -->
            <div class="adv-faq-header text-center">
                <div class="adv-faq-eyebrow">
                    <span class="faq-dash"></span>
                    <span class="faq-eyebrow-text">{{ $faqSettings['eyebrow'] ?? 'FAQ' }}</span>
                    <span class="faq-dash"></span>
                </div>
                <h2 class="adv-faq-title">
                    <span class="title-dark">{{ $faqSettings['title_1'] ?? 'Frequently Asked' }}</span>
                    @if(!empty($faqSettings['title_2']))
                        <span class="title-orange">{{ $faqSettings['title_2'] }}</span>
                    @endif
                </h2>
                @if(!empty($faqSettings['subtitle']))
                    <p class="adv-faq-subtitle">
                        {!! nl2br(e($faqSettings['subtitle'])) !!}
                    </p>
                @endif
            </div>

            @php
                $activeFaqs = isset($faqs) && $faqs->count() > 0 ? $faqs->take(5) : collect();
            @endphp

            @if($activeFaqs->isNotEmpty())
            <!-- Accordion List Container -->
            <div class="adv-faq-accordion" id="advFaqAccordion">
                @foreach($activeFaqs as $faq)
                    <!-- FAQ Item {{ sprintf('%02d', $loop->iteration) }} -->
                    <div class="adv-faq-item {{ $loop->first ? 'active' : '' }}">
                        <button type="button" class="adv-faq-btn" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="faq-ans-{{ $faq->id }}">
                            <span class="adv-faq-num">{{ sprintf('%02d', $loop->iteration) }}</span>
                            <span class="adv-faq-question">{{ $faq->question }}</span>
                            <span class="adv-faq-icon">
                                <i class="fa-solid {{ $loop->first ? 'fa-minus' : 'fa-plus' }}"></i>
                            </span>
                        </button>
                        <div class="adv-faq-answer {{ $loop->first ? 'active' : '' }}" id="faq-ans-{{ $faq->id }}">
                            <div class="adv-faq-answer-inner">
                                <p>
                                    {{ $faq->answer }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif

        </div>
    </section>

</main>
@endsection
