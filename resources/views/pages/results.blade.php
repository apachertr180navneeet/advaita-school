@extends('layouts.app')

@section('title', "Board Results & Achievements - Advaita School of Excellence, Parbhani | 100% CBSE Results")

@section('content')
<!-- Dedicated Results Page Stylesheet -->
<link rel="stylesheet" href="{{ asset('assets/css/results.css?v=' . (file_exists(public_path('assets/css/results.css')) ? filemtime(public_path('assets/css/results.css')) : '1.0')) }}">

<main id="main" class="main-content-wrapper results-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Clean layout, Breadcrumbs, Headline & Campus Facade
         ========================================================================= -->
    <section class="results-hero-section">
        <div class="results-hero-container">
            <div class="results-hero-grid">
                <!-- Left Text Content -->
                <div class="results-hero-text">
                    <!-- Breadcrumbs -->
                    <nav class="results-breadcrumb" aria-label="Breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="{{ route('academics') }}">Programmes</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Results</span>
                    </nav>

                    <!-- Eyebrow -->
                    <div class="results-eyebrow">
                        <span class="results-eyebrow-line"></span>
                        <span>{{ $content['badge'] ?? 'OUR PERFORMANCE' }}</span>
                        <span class="results-eyebrow-line"></span>
                    </div>

                    <!-- Main Title matching mockup exactly -->
                    <h1 class="results-hero-title">
                        {{ $content['title'] ?? 'Results that' }}
                        <span class="results-title-orange">{{ $content['subtitle'] ?? 'speak for themselves.' }}</span>
                    </h1>

                    <!-- Subtitle -->
                    <p class="results-hero-desc">
                        {{ $content['hero_desc'] ?? 'Year after year, our students continue to excel, making us proud with outstanding academic and competitive examination results.' }}
                    </p>

                    <!-- Jump Filter Buttons -->
                    <div class="d-flex align-items-center gap-10 mt-20 flex-wrap">
                        <a href="#results-hub" class="btn-primary-pill" onclick="filterCategory('board')">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Board Results</span>
                        </a>
                        <a href="#results-hub" class="btn-outline-pill" onclick="filterCategory('olympiad')">
                            <i class="fa-solid fa-medal"></i>
                            <span>Olympiad Podiums</span>
                        </a>
                        <a href="#results-hub" class="btn-outline-pill" onclick="filterCategory('abacus')">
                            <i class="fa-solid fa-calculator"></i>
                            <span>Abacus Champions</span>
                        </a>
                    </div>
                </div>

                <!-- Right Campus Image with Swoop Border & "More Than A School" -->
                <div class="results-hero-visual">
                    <img src="{{ asset($content['hero_image'] ?? 'assets/images/results-hero-campus-right.jpg') }}" alt="Advaita School of Excellence - More Than A School" class="results-hero-campus-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Main Container -->
    <div class="results-container">

        <!-- =========================================================================
             2. FOUR STAT CARDS (Metrics Bar)
             ========================================================================= -->
        <div class="results-stats-row">
            <!-- Card 1 -->
            <div class="results-stat-card">
                <div class="results-stat-icon" aria-hidden="true">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <div class="results-stat-info">
                    <span class="results-stat-kicker">Back-to-back</span>
                    <strong class="results-stat-val">{{ $content['pass_rate'] ?? '100%' }} Result</strong>
                    <span class="results-stat-sub">in CBSE Grade 10</span>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="results-stat-card">
                <div class="results-stat-icon" aria-hidden="true">
                    <i class="fa-solid fa-chart-column"></i>
                </div>
                <div class="results-stat-info">
                    <strong class="results-stat-val">{{ $content['stat_90_plus'] ?? '35%' }}</strong>
                    <span class="results-stat-kicker">Students scored</span>
                    <span class="results-stat-sub">90% and above</span>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="results-stat-card">
                <div class="results-stat-icon" aria-hidden="true">
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="results-stat-info">
                    <strong class="results-stat-val">{{ $content['stat_80_plus'] ?? '~33%' }}</strong>
                    <span class="results-stat-kicker">Students scored</span>
                    <span class="results-stat-sub">80% – 90%</span>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="results-stat-card">
                <div class="results-stat-icon" aria-hidden="true">
                    <i class="fa-solid fa-trophy"></i>
                </div>
                <div class="results-stat-info">
                    <span class="results-stat-kicker">District 1st Rank</span>
                    <strong class="results-stat-val">{{ $content['top_score'] ?? '98.40%' }}</strong>
                    <span class="results-stat-sub">Highest Score in Parbhani</span>
                </div>
            </div>
        </div>

        <!-- =========================================================================
             3. DISTRICT TOPPER SPOTLIGHT CARD
             ========================================================================= -->
        <div class="results-spotlight-card">
            <div class="spotlight-badge">
                <i class="fa-solid fa-crown text-amber"></i>
                <span>DISTRICT TOPPER SPOTLIGHT · CBSE CLASS X</span>
            </div>
            <div class="spotlight-grid">
                <div class="spotlight-visual">
                    <div class="spotlight-photo-frame">
                        <img src="{{ asset('assets/images/om-dhoot-clean.jpg') }}" alt="Om Dhoot - CBSE Class 10th District 1st Rank Topper">
                        <div class="spotlight-score-tag">98.40%</div>
                    </div>
                </div>
                <div class="spotlight-content">
                    <div class="spotlight-laurel-wrap">
                        <span class="laurel-title">PARBHANI DISTRICT 1ST RANK</span>
                    </div>
                    <h2 class="spotlight-student-name">Master Om Dhoot</h2>
                    <p class="spotlight-exam-title">CBSE Class X Board Examination · Session 2025–26</p>
                    <p class="spotlight-quote">
                        "Secured the overall 1st position across the entire district with an exceptional aggregate score of 98.40%. Exemplifying Advaita's culture of dedicated faculty mentorship, conceptual mastery, and disciplined excellence."
                    </p>
                    <div class="spotlight-actions">
                        <button type="button" class="btn-spotlight-preview" onclick="openResultsModal('{{ asset('assets/images/results-poster-toppers.jpg') }}', 'Om Dhoot - CBSE Class 10 District 1st Topper 98.40%')">
                            <i class="fa-solid fa-award"></i>
                            <span>View Official Topper Poster</span>
                        </button>
                        <a href="{{ route('online-registration') }}" class="btn-spotlight-enquire">
                            <span>Join the League of Achievers</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- =========================================================================
             4. CENTRALIZED RESULTS HUB WITH INTERACTIVE CATEGORY & YEAR FILTERS
             ========================================================================= -->
        <div class="results-hub-section" id="results-hub">
            <div class="results-hub-header">
                <div>
                    <span class="acad-eyebrow">— EXAMINATION ACHIEVEMENTS &amp; PODIUMS —</span>
                    <h2 class="results-hub-title">
                        Centralized <span class="highlight-orange">Results &amp; Honors.</span>
                    </h2>
                    <p class="results-hub-desc">
                        Explore verified school examination results, national Olympiad medalists, Abacus champions, and NEET/IIT Foundation achievements.
                    </p>
                </div>

                <!-- Academic Session Year Filter Selector -->
                <div class="results-year-filter-box">
                    <label for="resultsYearSelect" class="year-label"><i class="fa-regular fa-calendar-days"></i> Academic Session:</label>
                    <select id="resultsYearSelect" class="results-year-select" onchange="filterYear(this.value)">
                        <option value="all" {{ ($selectedYear ?? 'all') === 'all' ? 'selected' : '' }}>All Academic Sessions</option>
                        @foreach($academicYears as $year)
                            <option value="{{ $year }}" {{ ($selectedYear ?? '') === $year ? 'selected' : '' }}>Session {{ $year }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Category Filter Tabs Bar -->
            <div class="results-filter-bar" role="tablist" aria-label="Result Categories">
                <button type="button" class="results-filter-pill {{ ($selectedCategory ?? 'all') === 'all' ? 'active' : '' }}" data-cat="all" onclick="filterCategory('all')">
                    <i class="fa-solid fa-border-all"></i>
                    <span>All Achievements</span>
                    <span class="pill-count">{{ $categoryCounts['all'] ?? count($results) }}</span>
                </button>

                <button type="button" class="results-filter-pill {{ ($selectedCategory ?? '') === 'board' ? 'active' : '' }}" data-cat="board" onclick="filterCategory('board')">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <span>Board Exam</span>
                    <span class="pill-count">{{ $categoryCounts['board'] ?? 0 }}</span>
                </button>

                <button type="button" class="results-filter-pill {{ ($selectedCategory ?? '') === 'olympiad' ? 'active' : '' }}" data-cat="olympiad" onclick="filterCategory('olympiad')">
                    <i class="fa-solid fa-medal"></i>
                    <span>Olympiad Results</span>
                    <span class="pill-count">{{ $categoryCounts['olympiad'] ?? 0 }}</span>
                </button>

                <button type="button" class="results-filter-pill {{ ($selectedCategory ?? '') === 'abacus' ? 'active' : '' }}" data-cat="abacus" onclick="filterCategory('abacus')">
                    <i class="fa-solid fa-calculator"></i>
                    <span>Abacus Competitions</span>
                    <span class="pill-count">{{ $categoryCounts['abacus'] ?? 0 }}</span>
                </button>

                <button type="button" class="results-filter-pill {{ ($selectedCategory ?? '') === 'iit_foundation' ? 'active' : '' }}" data-cat="iit_foundation" onclick="filterCategory('iit_foundation')">
                    <i class="fa-solid fa-atom"></i>
                    <span>IIT / NEET Foundation</span>
                    <span class="pill-count">{{ $categoryCounts['iit_foundation'] ?? 0 }}</span>
                </button>

                <button type="button" class="results-filter-pill {{ ($selectedCategory ?? '') === 'competitive' ? 'active' : '' }}" data-cat="competitive" onclick="filterCategory('competitive')">
                    <i class="fa-solid fa-award"></i>
                    <span>Competitive Exams</span>
                    <span class="pill-count">{{ $categoryCounts['competitive'] ?? 0 }}</span>
                </button>
            </div>

            <!-- Dynamic Achievements Grid -->
            <div class="results-achievements-grid" id="achievementsGrid">
                @forelse($results as $res)
                    <div class="result-item-card" data-category="{{ $res->category }}" data-year="{{ $res->academic_year }}">
                        <!-- Card Header -->
                        <div class="result-card-top">
                            <span class="result-category-badge cat-{{ $res->category }}">
                                @switch($res->category)
                                    @case('board')
                                        <i class="fa-solid fa-graduation-cap"></i> Board Result
                                        @break
                                    @case('olympiad')
                                        <i class="fa-solid fa-medal"></i> Olympiad Podiums
                                        @break
                                    @case('abacus')
                                        <i class="fa-solid fa-calculator"></i> Abacus Championship
                                        @break
                                    @case('iit_foundation')
                                        <i class="fa-solid fa-atom"></i> IIT Foundation
                                        @break
                                    @case('competitive')
                                        <i class="fa-solid fa-award"></i> Competitive Exam
                                        @break
                                    @default
                                        <i class="fa-solid fa-star"></i> Achievement
                                @endswitch
                            </span>
                            <span class="result-year-badge">Session {{ $res->academic_year }}</span>
                        </div>

                        <!-- Student Visual & Details -->
                        <div class="result-student-row">
                            <div class="result-avatar-box">
                                @if($res->photo)
                                    <img src="{{ $res->photo_url }}" alt="{{ $res->student_name }}" class="result-avatar-img" onclick="openResultsModal('{{ $res->photo_url }}', '{{ $res->student_name }} - {{ $res->title }}')">
                                @else
                                    <div class="result-avatar-placeholder">
                                        <i class="fa-solid fa-user-graduate"></i>
                                    </div>
                                @endif
                            </div>
                            <div class="result-student-info">
                                <h3 class="result-student-name">{{ $res->student_name }}</h3>
                                @if($res->class_grade)
                                    <span class="result-student-grade"><i class="fa-solid fa-school text-orange"></i> {{ $res->class_grade }}</span>
                                @endif
                                <h4 class="result-exam-title">{{ $res->title }}</h4>
                            </div>
                        </div>

                        <!-- Exam & Scores Bar -->
                        <div class="result-exam-subtext">
                            <i class="fa-regular fa-id-badge text-navy"></i>
                            <span>{{ $res->exam_name }}</span>
                        </div>

                        <div class="result-scores-row">
                            @if($res->score)
                                <div class="result-score-tag">
                                    <span class="score-label">Score / Marks</span>
                                    <strong class="score-value">{{ $res->score }}</strong>
                                </div>
                            @endif

                            @if($res->rank)
                                <div class="result-rank-tag">
                                    <span class="rank-label">Rank / Medal</span>
                                    <strong class="rank-value">{{ $res->rank }}</strong>
                                </div>
                            @endif
                        </div>

                        <!-- Description -->
                        @if($res->description)
                            <p class="result-card-desc">{{ $res->description }}</p>
                        @endif

                        <!-- Card Footer -->
                        <div class="result-card-footer">
                            @if($res->certificate)
                                <button type="button" class="btn-view-cert" onclick="openResultsModal('{{ $res->certificate_url }}', '{{ $res->student_name }} - {{ $res->title }} Certificate')">
                                    <i class="fa-solid fa-file-certificate"></i>
                                    <span>View Certificate</span>
                                </button>
                            @elseif($res->photo)
                                <button type="button" class="btn-view-cert" onclick="openResultsModal('{{ $res->photo_url }}', '{{ $res->student_name }} - {{ $res->title }}')">
                                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                                    <span>Zoom Photograph</span>
                                </button>
                            @else
                                <span class="verified-result-badge">
                                    <i class="fa-solid fa-circle-check text-green"></i> Verified School Record
                                </span>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="results-empty-state">
                        <i class="fa-solid fa-folder-open empty-icon"></i>
                        <h3>No achievements found</h3>
                        <p>No result entries currently recorded for the selected category or session.</p>
                        <button type="button" class="btn-primary-pill" onclick="filterCategory('all'); filterYear('all');">
                            <span>Reset Filters</span>
                        </button>
                    </div>
                @endforelse
            </div>

            <!-- Client-Side Empty State Placeholder (when filtered JS hides everything) -->
            <div id="noResultsFilterMessage" class="results-empty-state" style="display: none;">
                <i class="fa-solid fa-filter empty-icon"></i>
                <h3>No achievements match your filters</h3>
                <p>Try switching to another category or academic session above.</p>
                <button type="button" class="btn-primary-pill" onclick="resetFilters()">
                    <span>View All Achievements</span>
                </button>
            </div>
        </div>

        <!-- =========================================================================
             5. MAIN RESULTS SHOWCASE CARD (OFFICIAL POSTERS CAROUSEL)
             ========================================================================= -->
        <div class="results-main-showcase-card" id="resultsShowcaseSection">
            <div class="results-showcase-header">
                <div class="results-showcase-title-group">
                    <div class="results-trophy-symbol" aria-hidden="true">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <div class="results-showcase-heading-wrap">
                        <h2 class="results-showcase-title">
                            CBSE Class 10 Board <span class="highlight-orange">Official Posters</span>
                        </h2>
                        <p class="results-showcase-tagline">Another year of hard work, dedication and excellence!</p>
                        <p class="results-showcase-desc">Our students have once again made us proud with an outstanding performance in the CBSE Class 10 Board Examinations.</p>
                    </div>
                </div>

                <!-- Laurel Wreath Badge -->
                <div class="results-laurel-badge" aria-label="100% Result in Grade 10">
                    <svg class="laurel-branch left" viewBox="0 0 40 80" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M35 75C25 65 15 45 18 10" stroke="#E5A93C" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M30 68C22 66 18 58 24 55C30 52 32 60 30 68Z" fill="#F37021" opacity="0.85"/>
                        <path d="M24 53C16 50 14 42 20 40C26 38 28 46 24 53Z" fill="#E5A93C"/>
                        <path d="M21 38C13 34 13 26 19 25C25 24 26 32 21 38Z" fill="#F37021" opacity="0.85"/>
                        <path d="M20 23C14 18 16 11 22 12C27 13 26 20 20 23Z" fill="#E5A93C"/>
                        <path d="M22 10C19 5 23 2 27 4C30 7 27 11 22 10Z" fill="#F37021"/>
                    </svg>
                    <div class="results-laurel-inner">
                        <span class="laurel-number">100%</span>
                        <span class="laurel-label">Result in Grade 10</span>
                    </div>
                    <svg class="laurel-branch right" viewBox="0 0 40 80" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M5 75C15 65 25 45 22 10" stroke="#E5A93C" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M10 68C18 66 22 58 16 55C10 52 8 60 10 68Z" fill="#F37021" opacity="0.85"/>
                        <path d="M16 53C24 50 26 42 20 40C14 38 12 46 16 53Z" fill="#E5A93C"/>
                        <path d="M19 38C27 34 27 26 21 25C15 24 14 32 19 38Z" fill="#F37021" opacity="0.85"/>
                        <path d="M20 23C26 18 24 11 18 12C13 13 14 20 20 23Z" fill="#E5A93C"/>
                        <path d="M18 10C21 5 17 2 13 4C10 7 13 11 18 10Z" fill="#F37021"/>
                    </svg>
                </div>
            </div>

            <!-- Poster Showcase Slider Viewport -->
            <div class="results-slider-box">
                <button type="button" class="results-arrow-btn prev" id="sliderPrevBtn" aria-label="Previous Slide">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <div class="results-posters-container">
                    <div class="results-posters-pair" id="postersGrid">
                        <!-- Left Poster: Toppers Om Dhoot 98.40% -->
                        <div class="results-poster-frame" onclick="openResultsModal('{{ asset($content['poster_toppers'] ?? 'assets/images/results-poster-toppers.jpg') }}', 'CBSE Class 10th District Toppers 2025-26 - Om Dhoot 98.40%')">
                            <img src="{{ asset($content['poster_toppers'] ?? 'assets/images/results-poster-toppers.jpg') }}" alt="Advaita School CBSE Results 2025-26 - District Toppers Om Dhoot 98.40%">
                            <div class="poster-overlay-hint">
                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                                <span>Click to view full</span>
                            </div>
                        </div>

                        <!-- Right Poster: Class 10th Board Result Above 90% -->
                        <div class="results-poster-frame" onclick="openResultsModal('{{ asset($content['poster_achievers'] ?? 'assets/images/results-poster-achievers.jpg') }}', 'CBSE Class 10th Board Result Above 90% Achievers')">
                            <img src="{{ asset($content['poster_achievers'] ?? 'assets/images/results-poster-achievers.jpg') }}" alt="Advaita School CBSE Results 2025-26 - Class 10th Board Result Above 90%">
                            <div class="poster-overlay-hint">
                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                                <span>Click to view full</span>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" class="results-arrow-btn next" id="sliderNextBtn" aria-label="Next Slide">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>

            <!-- 5 Pagination Dots -->
            <div class="results-dots-nav" role="tablist" aria-label="Poster Carousel Pagination">
                <button type="button" class="dot-item active" aria-label="Slide 1"></button>
                <button type="button" class="dot-item" aria-label="Slide 2"></button>
                <button type="button" class="dot-item" aria-label="Slide 3"></button>
                <button type="button" class="dot-item" aria-label="Slide 4"></button>
                <button type="button" class="dot-item" aria-label="Slide 5"></button>
            </div>
        </div>

        <!-- =========================================================================
             6. CONSISTENT ACADEMIC EXCELLENCE & DOWNLOAD PDF BANNER
             ========================================================================= -->
        <div class="results-excellence-banner">
            <div class="excellence-left">
                <div class="excellence-medal-badge" aria-hidden="true">
                    <i class="fa-solid fa-award"></i>
                </div>
                <div class="excellence-copy">
                    <h3 class="excellence-title">{{ $content['excellence_title'] ?? 'Consistent Academic Excellence' }}</h3>
                    <p class="excellence-desc">{{ $content['excellence_desc'] ?? 'Our results reflect the hard work of our students, the guidance of our teachers and the trust of our parents. Together, we continue to set higher benchmarks.' }}</p>
                </div>
            </div>

            <a href="{{ asset($content['poster_full'] ?? 'assets/images/results-posters-full.jpg') }}" download="Advaita-CBSE-Class-10-Results-2025-26.jpg" class="btn-excellence-download" target="_blank">
                <i class="fa-solid fa-download"></i>
                <span>Download Full Result PDF</span>
            </a>
        </div>

        <!-- =========================================================================
             7. PRE-FOOTER CTA BOX (Have Questions?)
             ========================================================================= -->
        <div class="results-bottom-cta">
            <div class="cta-left">
                <span class="cta-pill-tag">HAVE QUESTIONS?</span>
                <h3 class="cta-heading">Want to know more about <span class="highlight-orange">our results?</span></h3>
                <p class="cta-sub">Our admissions and academic teams will be happy to share detailed results and guide you with your child's education journey.</p>
            </div>

            <div class="cta-buttons">
                <a href="tel:+919689998973" class="btn-cta-office">
                    <i class="fa-solid fa-phone"></i>
                    <span>Contact the Office</span>
                </a>
                <a href="https://wa.me/919689998973?text=Hello%20Advaita%20School,%20I%20would%20like%20to%20know%20more%20about%20your%20CBSE%20results." target="_blank" rel="noopener noreferrer" class="btn-cta-wa">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span>Chat on WhatsApp</span>
                </a>
            </div>
        </div>

    </div><!-- /.results-container -->

</main>

<!-- Lightbox Modal for Full View & Certificates -->
<div class="results-modal-backdrop" id="resultsModal" onclick="closeResultsModal(event)">
    <div class="results-modal-content">
        <button type="button" class="results-modal-close" onclick="closeResultsModal(event)" aria-label="Close Preview">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <img src="{{ asset('assets/images/results-posters-full.jpg') }}" alt="Full Board Results Preview" class="results-modal-img" id="modalResultImg">
    </div>
</div>

<!-- Interactive Modal & Instant Filtering Scripts -->
<script>
var activeCategory = '{{ $selectedCategory ?? "all" }}';
var activeYear = '{{ $selectedYear ?? "all" }}';

function openResultsModal(imgSrc, title) {
    var modal = document.getElementById('resultsModal');
    var modalImg = document.getElementById('modalResultImg');
    if (modal && modalImg) {
        modalImg.src = imgSrc || 'assets/images/results-posters-full.jpg';
        if (title) modalImg.alt = title;
        modal.classList.add('open');
        document.body.style.overflow = 'hidden';
    }
}

function closeResultsModal(e) {
    if (e.target.classList.contains('results-modal-backdrop') || e.target.closest('.results-modal-close')) {
        var modal = document.getElementById('resultsModal');
        if (modal) {
            modal.classList.remove('open');
            document.body.style.overflow = '';
        }
    }
}

function filterCategory(cat) {
    activeCategory = cat;
    document.querySelectorAll('.results-filter-pill').forEach(function(pill) {
        if (pill.getAttribute('data-cat') === cat) {
            pill.classList.add('active');
        } else {
            pill.classList.remove('active');
        }
    });
    applyFilters();
}

function filterYear(yr) {
    activeYear = yr;
    var select = document.getElementById('resultsYearSelect');
    if (select) select.value = yr;
    applyFilters();
}

function resetFilters() {
    filterCategory('all');
    filterYear('all');
}

function applyFilters() {
    var cards = document.querySelectorAll('.result-item-card');
    var visibleCount = 0;

    cards.forEach(function(card) {
        var cardCat = card.getAttribute('data-category');
        var cardYr = card.getAttribute('data-year');

        var matchCat = (activeCategory === 'all' || cardCat === activeCategory);
        var matchYr = (activeYear === 'all' || cardYr === activeYear);

        if (matchCat && matchYr) {
            card.style.display = '';
            visibleCount++;
        } else {
            card.style.display = 'none';
        }
    });

    var emptyMsg = document.getElementById('noResultsFilterMessage');
    if (emptyMsg) {
        if (visibleCount === 0 && cards.length > 0) {
            emptyMsg.style.display = 'block';
        } else {
            emptyMsg.style.display = 'none';
        }
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // Initial Filter Apply if category is set in URL
    if (activeCategory !== 'all' || activeYear !== 'all') {
        applyFilters();
    }

    // Slider arrows toggle effect & pagination dots
    var prevBtn = document.getElementById('sliderPrevBtn');
    var nextBtn = document.getElementById('sliderNextBtn');
    var dots = document.querySelectorAll('.dot-item');

    if (prevBtn && nextBtn) {
        var currentSlide = 0;
        function updateDots(idx) {
            dots.forEach(function(d, i) {
                if (i === idx) d.classList.add('active');
                else d.classList.remove('active');
            });
        }
        nextBtn.addEventListener('click', function() {
            currentSlide = (currentSlide + 1) % dots.length;
            updateDots(currentSlide);
        });
        prevBtn.addEventListener('click', function() {
            currentSlide = (currentSlide - 1 + dots.length) % dots.length;
            updateDots(currentSlide);
        });
        dots.forEach(function(d, idx) {
            d.addEventListener('click', function() {
                currentSlide = idx;
                updateDots(currentSlide);
            });
        });
    }

    // Close modal on Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            var modal = document.getElementById('resultsModal');
            if (modal && modal.classList.contains('open')) {
                modal.classList.remove('open');
                document.body.style.overflow = '';
            }
        }
    });
});
</script>
@endsection
