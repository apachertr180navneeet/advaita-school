<?php
/**
 * Blog Page - Advaita School of Excellence
 * Insights, Stories and Updates
 * Strictly 1:1 match with official reference design mockup
 * Clean Semantic HTML - Header and Footer Preserved
 */
$pageTitle = "Blog & News - Advaita School of Excellence | Insights, Stories and Updates";
$activePage = "blog";

require_once __DIR__ . '/includes/header.php';
?>

<!-- Dedicated Blog Page Stylesheet -->
<link rel="stylesheet" href="assets/css/blog.css?v=<?php echo file_exists(__DIR__ . '/assets/css/blog.css') ? filemtime(__DIR__ . '/assets/css/blog.css') : '1.0'; ?>">

<main id="main" class="main-content-wrapper adv-blog-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: "OUR STORIES" & SCULPTED CAMPUS VISUAL
         ========================================================================= -->
    <section class="adv-blog-hero-section">
        <div class="adv-blog-hero-dots-decor" aria-hidden="true"></div>
        <div class="adv-blog-hero-dots-decor-right" aria-hidden="true"></div>

        <div class="adv-blog-container">
            <!-- Breadcrumbs -->
            <nav class="adv-blog-breadcrumb" aria-label="Breadcrumb">
                <a href="index.php">Home</a>
                <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                <span class="current">Blog</span>
            </nav>

            <div class="adv-blog-hero-grid">
                <!-- Left Content -->
                <div class="adv-blog-hero-content">
                    <div class="adv-blog-kicker">
                        <span class="kicker-line">—</span> OUR STORIES <span class="kicker-line">—</span>
                    </div>

                    <h1 class="adv-blog-hero-title">
                        Insights, stories and <span class="adv-blog-highlight">updates.</span>
                    </h1>

                    <p class="adv-blog-hero-desc">
                        Discover the latest news, achievements, events and stories from Advaita School of Excellence.
                    </p>
                </div>

                <!-- Right Visual: Sculpted Campus Frame with "More Than A School" Overlay -->
                <div class="adv-blog-hero-visual-wrap">
                    <div class="adv-blog-hero-card-frame">
                        <img src="assets/images/about-hero-building.jpg" alt="Advaita School of Excellence Campus Building" class="adv-blog-hero-img">

                        <!-- "More Than A School" Script Badge -->
                        <div class="adv-blog-hero-badge" aria-label="More Than A School">
                            <span class="badge-text">More<br>Than A School</span>
                            <svg class="badge-underline" viewBox="0 0 76 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 9.5C24 3.5 54 2 74 6" stroke="#0084FF" stroke-width="2.5" stroke-linecap="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. CATEGORY TABS ROW: 7 Pill Cards
         ========================================================================= -->
    <section class="adv-blog-categories-section">
        <div class="adv-blog-container">
            <div class="adv-blog-filters-scroll" role="tablist" aria-label="Blog categories filter">
                <!-- 1. All Posts (Active by default) -->
                <button type="button" class="adv-blog-cat-btn active" data-category="all" role="tab" aria-selected="true">
                    <span class="cat-icon"><i class="fa-solid fa-border-all"></i></span>
                    <span class="cat-name">All Posts</span>
                </button>

                <!-- 2. School News -->
                <button type="button" class="adv-blog-cat-btn" data-category="news" role="tab" aria-selected="false">
                    <span class="cat-icon"><i class="fa-solid fa-newspaper"></i></span>
                    <span class="cat-name">School News</span>
                </button>

                <!-- 3. Events -->
                <button type="button" class="adv-blog-cat-btn" data-category="events" role="tab" aria-selected="false">
                    <span class="cat-icon"><i class="fa-solid fa-calendar-days"></i></span>
                    <span class="cat-name">Events</span>
                </button>

                <!-- 4. Achievements -->
                <button type="button" class="adv-blog-cat-btn" data-category="achievements" role="tab" aria-selected="false">
                    <span class="cat-icon"><i class="fa-solid fa-trophy"></i></span>
                    <span class="cat-name">Achievements</span>
                </button>

                <!-- 5. Academic Insights -->
                <button type="button" class="adv-blog-cat-btn" data-category="insights" role="tab" aria-selected="false">
                    <span class="cat-icon"><i class="fa-solid fa-book-open"></i></span>
                    <span class="cat-name">Academic Insights</span>
                </button>

                <!-- 6. Student Life -->
                <button type="button" class="adv-blog-cat-btn" data-category="student-life" role="tab" aria-selected="false">
                    <span class="cat-icon"><i class="fa-solid fa-users"></i></span>
                    <span class="cat-name">Student Life</span>
                </button>

                <!-- 7. Parent Corner -->
                <button type="button" class="adv-blog-cat-btn" data-category="parent-corner" role="tab" aria-selected="false">
                    <span class="cat-icon"><i class="fa-solid fa-user-group"></i></span>
                    <span class="cat-name">Parent Corner</span>
                </button>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. SEARCH & SORT TOOLBAR
         ========================================================================= -->
    <section class="adv-blog-toolbar-section">
        <div class="adv-blog-container">
            <div class="adv-blog-toolbar">
                <!-- Search Box -->
                <div class="adv-blog-search-box">
                    <i class="fa-solid fa-magnifying-glass search-icon" aria-hidden="true"></i>
                    <input type="text" id="advBlogSearch" class="adv-blog-search-input" placeholder="Search articles, news, events..." aria-label="Search blog articles">
                    <button type="button" id="advBlogSearchClear" class="adv-blog-search-clear" aria-label="Clear search text">&times;</button>
                </div>

                <!-- Sort Dropdown -->
                <div class="adv-blog-sort-box">
                    <i class="fa-solid fa-arrow-down-short-wide sort-icon" aria-hidden="true"></i>
                    <select id="advBlogSort" class="adv-blog-sort-select" aria-label="Sort blog articles">
                        <option value="latest">Latest First</option>
                        <option value="oldest">Oldest First</option>
                        <option value="title-asc">Title (A-Z)</option>
                    </select>
                    <i class="fa-solid fa-chevron-down sort-chevron" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. MAIN CONTENT SECTION (3-Col Grid + Right Sidebar)
         ========================================================================= -->
    <section class="adv-blog-main-section" id="advBlogMainSection">
        <div class="adv-blog-container">
            <div class="adv-blog-main-grid">

                <!-- Left Column: Blog Posts Grid (3 Columns x 2 Rows) -->
                <div class="adv-blog-posts-grid" id="advBlogPostsGrid">

                    <!-- Card 1: School News -->
                    <article class="adv-blog-card" data-category="news" data-title="A New Academic Session Begins with New Aspirations" data-index="1">
                        <div class="adv-blog-card-thumb">
                            <span class="adv-blog-badge news">
                                <i class="fa-solid fa-newspaper"></i> School News
                            </span>
                            <img src="assets/images/gallery/academic.jpg" alt="A New Academic Session Begins with New Aspirations" loading="lazy">
                        </div>
                        <div class="adv-blog-card-body">
                            <span class="adv-blog-card-date">
                                <i class="fa-regular fa-calendar"></i> 20 May 2025
                            </span>
                            <h3 class="adv-blog-card-title">
                                <a href="javascript:void(0);">A New Academic Session Begins with New Aspirations</a>
                            </h3>
                            <p class="adv-blog-card-excerpt">
                                The campus came alive as we welcomed our students for the new academic session 2025–26 with enthusiasm, hope and big dreams.
                            </p>
                            <a href="javascript:void(0);" class="adv-blog-card-link">
                                <span>Read More</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>

                    <!-- Card 2: Events -->
                    <article class="adv-blog-card" data-category="events" data-title="Annual Cultural Fest 2025 A Celebration of Creativity" data-index="2">
                        <div class="adv-blog-card-thumb">
                            <span class="adv-blog-badge events">
                                <i class="fa-solid fa-calendar-days"></i> Events
                            </span>
                            <img src="assets/images/gallery/dance.jpg" alt="Annual Cultural Fest 2025 A Celebration of Creativity" loading="lazy">
                        </div>
                        <div class="adv-blog-card-body">
                            <span class="adv-blog-card-date">
                                <i class="fa-regular fa-calendar"></i> 15 May 2025
                            </span>
                            <h3 class="adv-blog-card-title">
                                <a href="javascript:void(0);">Annual Cultural Fest 2025 A Celebration of Creativity</a>
                            </h3>
                            <p class="adv-blog-card-excerpt">
                                Our Annual Cultural Fest 2025 showcased the exceptional talent and creativity of our students through music, dance, drama and art.
                            </p>
                            <a href="javascript:void(0);" class="adv-blog-card-link">
                                <span>Read More</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>

                    <!-- Card 3: Achievements -->
                    <article class="adv-blog-card" data-category="achievements" data-title="Advaita Students Shine in CBSE Class X Result 2025" data-index="3">
                        <div class="adv-blog-card-thumb">
                            <span class="adv-blog-badge achievements">
                                <i class="fa-solid fa-trophy"></i> Achievements
                            </span>
                            <img src="assets/images/gallery/achievements.jpg" alt="Advaita Students Shine in CBSE Class X Result 2025" loading="lazy">
                        </div>
                        <div class="adv-blog-card-body">
                            <span class="adv-blog-card-date">
                                <i class="fa-regular fa-calendar"></i> 10 May 2025
                            </span>
                            <h3 class="adv-blog-card-title">
                                <a href="javascript:void(0);">Advaita Students Shine in CBSE Class X Result 2025</a>
                            </h3>
                            <p class="adv-blog-card-excerpt">
                                We are proud to announce an outstanding performance in the CBSE Class X Board Examination 2025, with several students scoring above 90%.
                            </p>
                            <a href="javascript:void(0);" class="adv-blog-card-link">
                                <span>Read More</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>

                    <!-- Card 4: Academic Insights -->
                    <article class="adv-blog-card" data-category="insights" data-title="Learning Beyond Textbooks The Power of Practical Education" data-index="4">
                        <div class="adv-blog-card-thumb">
                            <span class="adv-blog-badge insights">
                                <i class="fa-solid fa-book-open"></i> Academic Insights
                            </span>
                            <img src="assets/images/gallery/workshops.jpg" alt="Learning Beyond Textbooks The Power of Practical Education" loading="lazy">
                        </div>
                        <div class="adv-blog-card-body">
                            <span class="adv-blog-card-date">
                                <i class="fa-regular fa-calendar"></i> 28 Apr 2025
                            </span>
                            <h3 class="adv-blog-card-title">
                                <a href="javascript:void(0);">Learning Beyond Textbooks The Power of Practical Education</a>
                            </h3>
                            <p class="adv-blog-card-excerpt">
                                At Advaita, we believe in hands-on learning. Our well-equipped laboratories help students explore, experiment and innovate beyond the classroom.
                            </p>
                            <a href="javascript:void(0);" class="adv-blog-card-link">
                                <span>Read More</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>

                    <!-- Card 5: Student Life -->
                    <article class="adv-blog-card" data-category="student-life" data-title="Sports Build Stronger Minds and Friendships" data-index="5">
                        <div class="adv-blog-card-thumb">
                            <span class="adv-blog-badge student-life">
                                <i class="fa-solid fa-users"></i> Student Life
                            </span>
                            <img src="assets/images/gallery/sports.jpg" alt="Sports Build Stronger Minds and Friendships" loading="lazy">
                        </div>
                        <div class="adv-blog-card-body">
                            <span class="adv-blog-card-date">
                                <i class="fa-regular fa-calendar"></i> 21 Apr 2025
                            </span>
                            <h3 class="adv-blog-card-title">
                                <a href="javascript:void(0);">Sports Build Stronger Minds and Friendships</a>
                            </h3>
                            <p class="adv-blog-card-excerpt">
                                From football to athletics, our sports programs empower students to stay fit, learn teamwork and develop a winning attitude.
                            </p>
                            <a href="javascript:void(0);" class="adv-blog-card-link">
                                <span>Read More</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>

                    <!-- Card 6: Community Outreach -->
                    <article class="adv-blog-card" data-category="outreach" data-title="Students Spread Smiles Through Community Service" data-index="6">
                        <div class="adv-blog-card-thumb">
                            <span class="adv-blog-badge outreach">
                                <i class="fa-solid fa-hand-holding-heart"></i> Community Outreach
                            </span>
                            <img src="assets/images/gallery/outreach.jpg" alt="Students Spread Smiles Through Community Service" loading="lazy">
                        </div>
                        <div class="adv-blog-card-body">
                            <span class="adv-blog-card-date">
                                <i class="fa-regular fa-calendar"></i> 18 Apr 2025
                            </span>
                            <h3 class="adv-blog-card-title">
                                <a href="javascript:void(0);">Students Spread Smiles Through Community Service</a>
                            </h3>
                            <p class="adv-blog-card-excerpt">
                                Our students visited a nearby village as part of the community outreach program, spreading awareness about education and hygiene.
                            </p>
                            <a href="javascript:void(0);" class="adv-blog-card-link">
                                <span>Read More</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>

                    <!-- Empty state when search has 0 results -->
                    <div class="adv-blog-empty-state" id="advBlogEmpty">
                        <i class="fa-regular fa-folder-open"></i>
                        <h3>No articles found</h3>
                        <p>Try searching for a different keyword or selecting another category.</p>
                    </div>

                </div>

                <!-- Right Column: Sidebar -->
                <aside class="adv-blog-sidebar">

                    <!-- Widget 1: Popular Posts -->
                    <div class="adv-blog-widget">
                        <h4 class="adv-blog-widget-title">Popular Posts</h4>
                        <div class="adv-blog-popular-list">

                            <!-- Popular Item 1 -->
                            <a href="javascript:void(0);" class="adv-blog-popular-item">
                                <div class="adv-blog-popular-thumb">
                                    <img src="assets/images/gallery/academic.jpg" alt="A New Academic Session Begins with New Aspirations">
                                </div>
                                <div class="adv-blog-popular-info">
                                    <h5 class="adv-blog-popular-title">A New Academic Session Begins with New Aspirations</h5>
                                    <span class="adv-blog-popular-date"><i class="fa-regular fa-calendar"></i> 20 May 2025</span>
                                </div>
                            </a>

                            <!-- Popular Item 2 -->
                            <a href="javascript:void(0);" class="adv-blog-popular-item">
                                <div class="adv-blog-popular-thumb">
                                    <img src="assets/images/gallery/dance.jpg" alt="Annual Cultural Fest 2025">
                                </div>
                                <div class="adv-blog-popular-info">
                                    <h5 class="adv-blog-popular-title">Annual Cultural Fest 2025</h5>
                                    <span class="adv-blog-popular-date"><i class="fa-regular fa-calendar"></i> 15 May 2025</span>
                                </div>
                            </a>

                            <!-- Popular Item 3 -->
                            <a href="javascript:void(0);" class="adv-blog-popular-item">
                                <div class="adv-blog-popular-thumb">
                                    <img src="assets/images/gallery/science-exhibition.jpg" alt="Science Exhibition Showcases Innovative Ideas">
                                </div>
                                <div class="adv-blog-popular-info">
                                    <h5 class="adv-blog-popular-title">Science Exhibition Showcases Innovative Ideas</h5>
                                    <span class="adv-blog-popular-date"><i class="fa-regular fa-calendar"></i> 28 Apr 2025</span>
                                </div>
                            </a>

                            <!-- Popular Item 4 -->
                            <a href="javascript:void(0);" class="adv-blog-popular-item">
                                <div class="adv-blog-popular-thumb">
                                    <img src="assets/images/gallery/yoga.jpg" alt="Yoga for a Healthier Tomorrow">
                                </div>
                                <div class="adv-blog-popular-info">
                                    <h5 class="adv-blog-popular-title">Yoga for a Healthier Tomorrow</h5>
                                    <span class="adv-blog-popular-date"><i class="fa-regular fa-calendar"></i> 21 Apr 2025</span>
                                </div>
                            </a>

                        </div>
                    </div>

                    <!-- Widget 2: Categories -->
                    <div class="adv-blog-widget">
                        <h4 class="adv-blog-widget-title">Categories</h4>
                        <ul class="adv-blog-cat-list">
                            <li class="adv-blog-cat-item news">
                                <a href="javascript:void(0);" data-category="news">
                                    <div class="adv-blog-cat-item-left">
                                        <div class="adv-blog-cat-item-icon"><i class="fa-solid fa-newspaper"></i></div>
                                        <span class="adv-blog-cat-item-name">School News</span>
                                    </div>
                                    <span class="adv-blog-cat-item-count">(12)</span>
                                </a>
                            </li>

                            <li class="adv-blog-cat-item events">
                                <a href="javascript:void(0);" data-category="events">
                                    <div class="adv-blog-cat-item-left">
                                        <div class="adv-blog-cat-item-icon"><i class="fa-solid fa-calendar-days"></i></div>
                                        <span class="adv-blog-cat-item-name">Events</span>
                                    </div>
                                    <span class="adv-blog-cat-item-count">(18)</span>
                                </a>
                            </li>

                            <li class="adv-blog-cat-item achievements">
                                <a href="javascript:void(0);" data-category="achievements">
                                    <div class="adv-blog-cat-item-left">
                                        <div class="adv-blog-cat-item-icon"><i class="fa-solid fa-trophy"></i></div>
                                        <span class="adv-blog-cat-item-name">Achievements</span>
                                    </div>
                                    <span class="adv-blog-cat-item-count">(15)</span>
                                </a>
                            </li>

                            <li class="adv-blog-cat-item insights">
                                <a href="javascript:void(0);" data-category="insights">
                                    <div class="adv-blog-cat-item-left">
                                        <div class="adv-blog-cat-item-icon"><i class="fa-solid fa-book-open"></i></div>
                                        <span class="adv-blog-cat-item-name">Academic Insights</span>
                                    </div>
                                    <span class="adv-blog-cat-item-count">(10)</span>
                                </a>
                            </li>

                            <li class="adv-blog-cat-item student-life">
                                <a href="javascript:void(0);" data-category="student-life">
                                    <div class="adv-blog-cat-item-left">
                                        <div class="adv-blog-cat-item-icon"><i class="fa-solid fa-users"></i></div>
                                        <span class="adv-blog-cat-item-name">Student Life</span>
                                    </div>
                                    <span class="adv-blog-cat-item-count">(14)</span>
                                </a>
                            </li>

                            <li class="adv-blog-cat-item parent-corner">
                                <a href="javascript:void(0);" data-category="parent-corner">
                                    <div class="adv-blog-cat-item-left">
                                        <div class="adv-blog-cat-item-icon"><i class="fa-solid fa-user-group"></i></div>
                                        <span class="adv-blog-cat-item-name">Parent Corner</span>
                                    </div>
                                    <span class="adv-blog-cat-item-count">(6)</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </aside>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. PAGINATION
         ========================================================================= -->
    <section class="adv-blog-pagination-section">
        <div class="adv-blog-container">
            <div class="adv-blog-pagination" role="navigation" aria-label="Blog pagination">
                <button type="button" class="adv-blog-page-btn prev-btn" aria-label="Previous Page">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button type="button" class="adv-blog-page-btn active" aria-label="Page 1">1</button>
                <button type="button" class="adv-blog-page-btn" aria-label="Page 2">2</button>
                <button type="button" class="adv-blog-page-btn" aria-label="Page 3">3</button>
                <button type="button" class="adv-blog-page-btn" aria-label="Page 4">4</button>
                <button type="button" class="adv-blog-page-btn" aria-label="Page 5">5</button>
                <button type="button" class="adv-blog-page-btn next-btn" aria-label="Next Page">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         6. CTA NEWSLETTER BANNER: "BE PART OF OUR JOURNEY"
         ========================================================================= -->
    <section class="adv-blog-cta-section">
        <div class="adv-blog-container">
            <div class="adv-blog-cta-card">
                <div class="adv-blog-cta-content">
                    <span class="adv-blog-cta-tag">BE PART OF OUR JOURNEY</span>
                    <h2 class="adv-blog-cta-title">
                        Stay connected with <span class="adv-blog-cta-highlight">Advaita.</span>
                    </h2>
                    <p class="adv-blog-cta-desc">
                        Get the latest updates, stories and achievements delivered to you.
                    </p>
                </div>

                <!-- Newsletter Subscription Form -->
                <form class="adv-blog-cta-form" id="advBlogSubscribeForm" action="#" method="POST">
                    <div class="adv-blog-input-wrap">
                        <i class="fa-regular fa-envelope mail-icon" aria-hidden="true"></i>
                        <input type="email" class="adv-blog-email-input" placeholder="Enter your email address" required aria-label="Your email address">
                    </div>
                    <button type="submit" class="adv-blog-subscribe-btn">
                        <span>Subscribe</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </form>

                <!-- Decorative Paper Airplane Doodle -->
                <div class="adv-blog-cta-doodle" aria-hidden="true">
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

<!-- Dedicated Blog JavaScript -->
<script src="assets/js/blog.js?v=<?php echo file_exists(__DIR__ . '/assets/js/blog.js') ? filemtime(__DIR__ . '/assets/js/blog.js') : '1.0'; ?>"></script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
