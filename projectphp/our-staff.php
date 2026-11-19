<?php
/**
 * Our Faculty - Advaita School of Excellence, Parbhani
 * CBSE Affiliated (Affiliation No. 1130920)
 * Exact Visual Layout matching the Official Design
 */
$pageTitle = 'Our Faculty - Advaita School of Excellence, Parbhani';
$activePage = 'our-staff';

require_once __DIR__.'/includes/header.php';
?>
<link rel="stylesheet" href="assets/css/our-staff.css?v=<?php echo file_exists(__DIR__.'/assets/css/our-staff.css') ? filemtime(__DIR__.'/assets/css/our-staff.css') : '1'; ?>">

<div class="faculty-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Meet the Educators
         ========================================================================= -->
    <section class="staff-hero-section">
        <div class="staff-hero-canvas">
            <!-- Background Image & Sky on the Right -->
            <div class="staff-hero-bg-visual" aria-hidden="true">
                <img src="assets/images/about-hero-building.jpg" alt="Advaita School of Excellence Campus" class="staff-hero-bg-img" loading="eager">
                <!-- Floating Script Badge in Sky -->
                <div class="staff-hero-script-tag">
                    <span class="script-title">More<br>Than A School</span>
                    <svg class="script-underline" viewBox="0 0 140 18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M4 10C36 4 98 4 136 12" stroke="#F37021" stroke-width="3.5" stroke-linecap="round"/>
                        <path d="M18 14C48 9 92 8 126 15" stroke="#F37021" stroke-width="2.5" stroke-linecap="round" opacity="0.75"/>
                    </svg>
                </div>
            </div>

            <!-- Full Width Wave Mask Overlay with ambient blue contour -->
            <div class="staff-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1440 480" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="staffWaveGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#0284C7"/>
                            <stop offset="50%" stop-color="#38BDF8"/>
                            <stop offset="100%" stop-color="#60A5FA"/>
                        </linearGradient>
                    </defs>
                    <!-- Ambient soft blue aura at far left -->
                    <path d="M0,60 C90,60 140,160 140,260 C140,360 85,430 0,450 Z" fill="#E8F4FE" opacity="0.85"/>
                    <!-- Outer vibrant sky-blue contour wave -->
                    <path d="M0,0 L615,0 C680,110 720,230 685,330 C655,410 590,455 535,480 L0,480 Z" fill="url(#staffWaveGrad)" opacity="0.95"/>
                    <!-- Mid soft blue contour wave -->
                    <path d="M0,0 L600,0 C665,110 705,230 670,330 C640,410 575,455 520,480 L0,480 Z" fill="#BAE6FD"/>
                    <!-- Main solid white wave panel covering left side completely -->
                    <path d="M0,0 L585,0 C650,110 690,230 655,330 C625,410 560,455 505,480 L0,480 Z" fill="#FFFFFF"/>
                </svg>
            </div>



            <!-- Left Content Panel -->
            <div class="staff-hero-left-panel">
                <div class="staff-hero-content-inner">
                    <!-- Breadcrumbs -->
                    <div class="staff-breadcrumb">
                        <a href="index.php">Home</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="about-us.php">About Us</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Our Faculty</span>
                    </div>

                    <div class="staff-eyebrow">OUR FACULTY</div>
                    <h1 class="staff-hero-title">
                        Meet the Educators<br>
                        Who Inspire Every<br>
                        <span class="text-orange">Advaita</span> Learner.
                    </h1>
                    
                    <p class="staff-hero-desc">
                        Our teachers are more than subject experts — they are mentors, role models and lifelong guides who nurture curiosity, build confidence and inspire every child to excel in academics and in life.
                    </p>
                </div>
            </div>
        </div>

        <!-- Floating Stats Strip -->
        <div class="staff-stats-strip-wrapper">
            <div class="staff-stats-strip">
                <div class="staff-stat-item">
                    <div class="staff-stat-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="staff-stat-info">
                        <span class="staff-stat-num">80+</span>
                        <span class="staff-stat-label">Total Faculty</span>
                    </div>
                </div>

                <div class="staff-stat-item">
                    <div class="staff-stat-icon">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <div class="staff-stat-info">
                        <span class="staff-stat-num">12+</span>
                        <span class="staff-stat-label">Departments</span>
                    </div>
                </div>

                <div class="staff-stat-item">
                    <div class="staff-stat-icon">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <div class="staff-stat-info">
                        <span class="staff-stat-num">10+</span>
                        <span class="staff-stat-label">Avg. Years Experience</span>
                    </div>
                </div>

                <div class="staff-stat-item">
                    <div class="staff-stat-icon">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div class="staff-stat-info">
                        <span class="staff-stat-num">100%</span>
                        <span class="staff-stat-label">Postgraduate Trained</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. EDUCATORS GRID SECTION (8 Cards)
         ========================================================================= -->
    <section class="staff-grid-section">
        <!-- Ambient decorative dot patterns -->
        <div class="staff-decor-dots-left" aria-hidden="true"></div>
        <div class="staff-decor-dots-right" aria-hidden="true"></div>

        <div class="staff-grid-container">
            <div class="staff-section-header">
                <span class="staff-educators-eyebrow">— OUR EDUCATORS —</span>
                <h2 class="staff-section-title">
                    The Teachers Behind Every <span class="text-orange">Advaita Learner.</span>
                </h2>
                <p class="staff-section-desc">
                    Each one is here because they love what they teach — and because they care deeply about how every child grows. Our faculty bring expertise, experience and a genuine passion for guiding students towards academic and personal excellence.
                </p>
            </div>

            <div class="staff-cards-grid">
                <?php
                $staffMembers = [
                    [
                        'name' => 'Ms. Ivy Brown',
                        'designation' => 'Principal',
                        'qualification' => 'M.A., M.Ed.',
                        'pill_class' => 'role-orange',
                        'qual_class' => 'qual-orange',
                        'photo' => 'assets/images/staff/ivy-brown.jpeg',
                    ],
                    [
                        'name' => 'Mr. Amit Thakare',
                        'designation' => 'Accountant',
                        'qualification' => 'B.Sc. (Agri)',
                        'pill_class' => 'role-blue',
                        'qual_class' => 'qual-blue',
                        'photo' => 'assets/images/staff/amit-thakare.jpg',
                    ],
                    [
                        'name' => 'Mr. Anand Rampurkar',
                        'designation' => 'PRO & IT Admin',
                        'qualification' => 'B.Sc. (CS)',
                        'pill_class' => 'role-orange',
                        'qual_class' => 'qual-orange',
                        'photo' => 'assets/images/staff/anand-rampurkar.jpg',
                    ],
                    [
                        'name' => 'Mr. Shrikant Jogdand',
                        'designation' => 'Librarian',
                        'qualification' => 'M.A., M.Lib.',
                        'pill_class' => 'role-purple',
                        'qual_class' => 'qual-purple',
                        'photo' => 'assets/images/staff/shrikant-jogdand.jpg',
                    ],
                    [
                        'name' => 'Ms. Jagruti Pingalkar',
                        'designation' => 'Wellness Teacher',
                        'qualification' => 'M.A., B.Ed.',
                        'pill_class' => 'role-green',
                        'qual_class' => 'qual-green',
                        'photo' => 'assets/images/staff/jagruti-pingalkar.jpg',
                    ],
                    [
                        'name' => 'Ms. Urmila Durugkar',
                        'designation' => 'Wellness Teacher',
                        'qualification' => 'M.A., B.Ed.',
                        'pill_class' => 'role-green',
                        'qual_class' => 'qual-green',
                        'photo' => 'assets/images/staff/urmila-durugkar.jpg',
                    ],
                    [
                        'name' => 'Mr. Deependra Singh',
                        'designation' => 'TGT - Science',
                        'qualification' => 'M.Sc., B.Ed.',
                        'pill_class' => 'role-blue',
                        'qual_class' => 'qual-blue',
                        'photo' => 'assets/images/staff/deependra-singh.jpg',
                    ],
                    [
                        'name' => 'Mr. Sumit Rodge',
                        'designation' => 'TGT - Science',
                        'qualification' => 'M.Sc., B.Ed.',
                        'pill_class' => 'role-purple',
                        'qual_class' => 'qual-purple',
                        'photo' => 'assets/images/staff/sumit-rodge.png',
                    ],
                    [
                        'name' => 'Mr. Amol Palekar',
                        'designation' => 'TGT - Mathematics',
                        'qualification' => 'B.Sc., B.Ed.',
                        'pill_class' => 'role-cyan',
                        'qual_class' => 'qual-cyan',
                        'photo' => 'assets/images/staff/amol-palekar.jpg',
                    ],
                    [
                        'name' => 'Ms. Anjali Iyer',
                        'designation' => 'TGT - English',
                        'qualification' => 'M.A., B.Ed.',
                        'pill_class' => 'role-rose',
                        'qual_class' => 'qual-rose',
                        'photo' => 'assets/images/staff/anjali-iyer.jpg',
                    ],
                    [
                        'name' => 'Mr. Bhimrao Wakale',
                        'designation' => 'TGT - Social Science',
                        'qualification' => 'M.A., B.Ed.',
                        'pill_class' => 'role-amber',
                        'qual_class' => 'qual-amber',
                        'photo' => 'assets/images/staff/bhimrao-wakale.jpg',
                    ],
                    [
                        'name' => 'Mr. Shivdas Shinde',
                        'designation' => 'TGT - Languages',
                        'qualification' => 'M.Phil., B.Ed.',
                        'pill_class' => 'role-blue',
                        'qual_class' => 'qual-blue',
                        'photo' => 'assets/images/staff/shivdas-shinde.jpg',
                    ],
                    [
                        'name' => 'Ms. Urmila Nitnaware',
                        'designation' => 'TGT - Social Studies',
                        'qualification' => 'M.A., B.Ed.',
                        'pill_class' => 'role-amber',
                        'qual_class' => 'qual-amber',
                        'photo' => 'assets/images/staff/urmila-nitnaware.jpg',
                    ],
                    [
                        'name' => 'Ms. Vaishali Maske',
                        'designation' => 'TGT - Computer Science',
                        'qualification' => 'M.C.M.',
                        'pill_class' => 'role-cyan',
                        'qual_class' => 'qual-cyan',
                        'photo' => 'assets/images/staff/vaishali-maske.jpg',
                    ],
                    [
                        'name' => 'Mr. Siddharth Nagthankar',
                        'designation' => 'TGT - Fine Arts & Painting',
                        'qualification' => 'M.F.A. (Painting), B.Ed.',
                        'pill_class' => 'role-pink',
                        'qual_class' => 'qual-pink',
                        'photo' => 'assets/images/staff/siddharth-nagthankar.png',
                    ],
                    [
                        'name' => 'Mr. Krushna Mane',
                        'designation' => 'PRT - Mathematics & Science',
                        'qualification' => 'M.Sc.',
                        'pill_class' => 'role-blue',
                        'qual_class' => 'qual-blue',
                        'photo' => 'assets/images/staff/krushna-mane.jpg',
                    ],
                    [
                        'name' => 'Ms. Pooja Gondal',
                        'designation' => 'PRT - Primary Educator',
                        'qualification' => 'B.A.',
                        'pill_class' => 'role-rose',
                        'qual_class' => 'qual-rose',
                        'photo' => 'assets/images/staff/pooja-gondal.jpg',
                    ],
                    [
                        'name' => 'Ms. Priyanka Raut',
                        'designation' => 'PRT - Primary Educator',
                        'qualification' => 'M.A.',
                        'pill_class' => 'role-amber',
                        'qual_class' => 'qual-amber',
                        'photo' => 'assets/images/staff/priyanka-raut.jpg',
                    ],
                    [
                        'name' => 'Ms. Sayali Aade',
                        'designation' => 'PRT - Arts & Crafts',
                        'qualification' => 'B.F.A., A.T.D., ECCE',
                        'pill_class' => 'role-pink',
                        'qual_class' => 'qual-pink',
                        'photo' => 'assets/images/staff/sayali-aade.jpg',
                    ],
                    [
                        'name' => 'Ms. Shally Agrawal',
                        'designation' => 'PRT - Primary Educator',
                        'qualification' => 'B.A., B.Ed.',
                        'pill_class' => 'role-green',
                        'qual_class' => 'qual-green',
                        'photo' => 'assets/images/staff/shally-agrawal.jpg',
                    ],
                    [
                        'name' => 'Mr. Suraj Jogdand',
                        'designation' => 'PRT - Computer Instructor',
                        'qualification' => 'B.Tech.',
                        'pill_class' => 'role-blue',
                        'qual_class' => 'qual-blue',
                        'photo' => 'assets/images/staff/suraj-jogdand.jpg',
                    ],
                    [
                        'name' => 'Ms. Radhika Deshmukh',
                        'designation' => 'NTT - Pre-Primary',
                        'qualification' => 'B.A., B.Ed.',
                        'pill_class' => 'role-rose',
                        'qual_class' => 'qual-rose',
                        'photo' => 'assets/images/staff/radhika-deshmukh.jpg',
                    ],
                    [
                        'name' => 'Ms. Sarita Swami',
                        'designation' => 'NTT - Early Childhood',
                        'qualification' => 'B.Sc., ECCE',
                        'pill_class' => 'role-pink',
                        'qual_class' => 'qual-pink',
                        'photo' => 'assets/images/staff/sarita-swami.jpg',
                    ],
                    [
                        'name' => 'Ms. Snehal Chavan',
                        'designation' => 'NTT - Early Childhood',
                        'qualification' => 'B.Sc., ECCE',
                        'pill_class' => 'role-purple',
                        'qual_class' => 'qual-purple',
                        'photo' => 'assets/images/staff/snehal-chavan.png',
                    ],
                    [
                        'name' => 'Ms. Vidya Kale',
                        'designation' => 'NTT - Pre-Primary',
                        'qualification' => 'B.Sc.',
                        'pill_class' => 'role-rose',
                        'qual_class' => 'qual-rose',
                        'photo' => 'assets/images/staff/vidya-kale.jpg',
                    ],
                ];

foreach ($staffMembers as $staff) {
    $photoSrc = ! empty($staff['photo']) && file_exists(__DIR__.'/'.$staff['photo'])
        ? $staff['photo'].'?v='.filemtime(__DIR__.'/'.$staff['photo'])
        : null;
    ?>
                <article class="staff-card">
                    <div class="staff-card-avatar-wrap">
                        <div class="staff-card-avatar-circle">
                            <?php if ($photoSrc) { ?>
                                <img src="<?php echo htmlspecialchars($photoSrc); ?>" alt="<?php echo htmlspecialchars($staff['name'].' - '.$staff['designation']); ?>" class="staff-avatar-photo" loading="lazy" onerror="this.onerror=null; this.parentElement.innerHTML='<svg class=\'staff-avatar-svg\' viewBox=\'0 0 100 100\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\' aria-hidden=\'true\'><circle cx=\'50\' cy=\'38\' r=\'20\' fill=\'#8d99ae\'/><path d=\'M18 90C18 68 32 62 50 62C68 62 82 68 82 90\' fill=\'#8d99ae\'/></svg>';">
                            <?php } else { ?>
                                <svg class="staff-avatar-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <circle cx="50" cy="38" r="20" fill="#8d99ae"/>
                                    <path d="M18 90C18 68 32 62 50 62C68 62 82 68 82 90" fill="#8d99ae"/>
                                </svg>
                            <?php } ?>
                        </div>
                    </div>
                    <span class="staff-role-pill <?php echo htmlspecialchars($staff['pill_class']); ?>"><?php echo htmlspecialchars($staff['designation']); ?></span>
                    <h3 class="staff-card-name"><?php echo htmlspecialchars($staff['name']); ?></h3>
                    <div class="staff-card-qual <?php echo htmlspecialchars($staff['qual_class']); ?>">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span><?php echo htmlspecialchars($staff['qualification']); ?></span>
                    </div>
                </article>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. JOIN OUR TEAM SECTION: Want to Teach with Us? (Centered Text Layout)
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
                <div class="eyebrow">— JOIN OUR TEAM —</div>
                <h2 class="headline">Want to Teach with <span class="text-orange">Us?</span></h2>
                <p class="subtext">
                    We are always looking for passionate educators who believe in creating brighter futures. Explore open roles or share your CV with us.
                </p>
                <div class="buttons">
                    <a href="index.php#contact" class="staff-btn-orange">
                        <span>See Open Roles</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="mailto:admissions.advaita@gmail.com" class="staff-btn-outline">
                        <i class="fa-regular fa-envelope"></i>
                        <span>Send Your CV</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Dots Pattern on Right before students -->
        <div class="dot-pattern"></div>

        <!-- Students Image on Right -->
        <div class="students">
            <img src="assets/images/about-cta-students-trio.png?v=<?php echo filemtime(__DIR__.'/assets/images/about-cta-students-trio.png'); ?>" alt="Advaita Students" loading="lazy">
        </div>
    </section>

    <!-- =========================================================================
         4. CAMPUS SHOWCASE STRIP: Take a closer look at life at Advaita
         ========================================================================= -->
    <section class="staff-campus-showcase-section">
        <div class="staff-campus-showcase-card">
            <!-- Left Content -->
            <div class="staff-showcase-left">
                <div class="staff-showcase-bar"></div>
                <h3 class="staff-showcase-title">
                    Take a closer look<br>
                    at life at <span class="text-orange">Advaita.</span>
                </h3>
                <p class="staff-showcase-desc">
                    Visit our campus to meet our faculty, experience our learning environment and see how we shape brighter futures.
                </p>
            </div>

            <!-- Middle 3 Image Gallery -->
            <div class="staff-showcase-gallery">
                <div class="staff-showcase-thumb">
                    <img src="assets/images/staff-thumb-1.jpg?v=<?php echo filemtime(__DIR__.'/assets/images/staff-thumb-1.jpg'); ?>" alt="Advaita Campus Building" class="staff-thumb-img" loading="lazy">
                </div>
                <div class="staff-showcase-thumb">
                    <img src="assets/images/staff-thumb-2.jpg?v=<?php echo filemtime(__DIR__.'/assets/images/staff-thumb-2.jpg'); ?>" alt="Advaita Library" class="staff-thumb-img" loading="lazy">
                </div>
                <div class="staff-showcase-thumb">
                    <img src="assets/images/staff-thumb-3.jpg?v=<?php echo filemtime(__DIR__.'/assets/images/staff-thumb-3.jpg'); ?>" alt="Advaita Classroom" class="staff-thumb-img" loading="lazy">
                </div>
            </div>

            <!-- Right Action Buttons -->
            <div class="staff-showcase-actions">
                <a href="index.php#admissions" class="staff-showcase-btn-orange">
                    <span>Book a Campus Visit</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="index.php#campus-life" class="staff-showcase-btn-video">
                    <i class="fa-solid fa-circle-play"></i>
                    <span>Watch Campus Video</span>
                </a>
            </div>
        </div>
    </section>

</div>

<?php
require_once __DIR__.'/includes/footer.php';
?>
