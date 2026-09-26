<?php
/**
 * Navigation Bar Component - Advaita School of Excellence
 * Color Scheme: #083B7A (Navy Blue), #F37021 (Orange)
 * Exact Visual Layout matching the Official Reference Design
 */
$currentPage = $activePage ?? '';
?>

<!-- Top Main Navigation Header -->
<header class="adv-main-header" id="adv-site-header">
    <div class="adv-navbar-container">
        
        <!-- Left: School Brand Logo -->
        <a href="index.php" class="adv-logo-brand" title="Advaita School of Excellence">
            <img src="assets/images/logo-cropped.png" alt="Advaita School of Excellence Logo" class="adv-brand-logo-img">
        </a>

        <!-- Center: Desktop Navigation Menu -->
        <nav class="adv-desktop-nav" aria-label="Main Navigation">
            <ul class="adv-nav-list">
                <li class="adv-nav-item">
                    <a href="index.php" class="adv-nav-link <?php echo ($currentPage === 'index' || $currentPage === 'home' || $currentPage === '') ? 'active' : ''; ?>">
                        Home
                    </a>
                </li>

                <!-- About Us with Dropdown -->
                <li class="adv-nav-item adv-has-dropdown <?php echo (in_array($currentPage, ['about', 'about-us', 'staff', 'our-staff', 'chairman', 'chairmans-desk', 'principal', 'principals-desk', 'vision', 'vision-mission'])) ? 'active' : ''; ?>">
                    <a href="about-us.php" class="adv-nav-link adv-dropdown-trigger" aria-haspopup="true" aria-expanded="false">
                        <span>About Us</span>
                        <i class="fa-solid fa-chevron-down adv-nav-chevron"></i>
                    </a>
                    <ul class="adv-submenu-dropdown">
                        <li>
                            <a href="about-us.php" class="adv-submenu-link <?php echo ($currentPage === 'about' || $currentPage === 'about-us') ? 'active' : ''; ?>">
                                <i class="fa-solid fa-circle-info"></i>
                                <span>About Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="vision-mission.php" class="adv-submenu-link <?php echo ($currentPage === 'vision' || $currentPage === 'vision-mission') ? 'active' : ''; ?>">
                                <i class="fa-solid fa-bullseye"></i>
                                <span>Vision &amp; Mission</span>
                            </a>
                        </li>
                        <li>
                            <a href="chairmans-desk.php" class="adv-submenu-link <?php echo ($currentPage === 'chairman' || $currentPage === 'chairmans-desk') ? 'active' : ''; ?>">
                                <i class="fa-solid fa-user-tie"></i>
                                <span>Chairman's Desk</span>
                            </a>
                        </li>
                        <li>
                            <a href="principals-desk.php" class="adv-submenu-link <?php echo ($currentPage === 'principal' || $currentPage === 'principals-desk') ? 'active' : ''; ?>">
                                <i class="fa-solid fa-graduation-cap"></i>
                                <span>Principal's Message</span>
                            </a>
                        </li>
                        <li>
                            <a href="our-staff.php" class="adv-submenu-link <?php echo ($currentPage === 'staff' || $currentPage === 'our-staff') ? 'active' : ''; ?>">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                <span>Our Faculty</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="adv-nav-item">
                    <a href="index.php#academics" class="adv-nav-link <?php echo ($currentPage === 'academics') ? 'active' : ''; ?>">
                        Academics
                    </a>
                </li>

                <li class="adv-nav-item">
                    <a href="index.php#neet-iit" class="adv-nav-link <?php echo ($currentPage === 'neet-iit') ? 'active' : ''; ?>">
                        NEET / IIT Foundation
                    </a>
                </li>

                <li class="adv-nav-item">
                    <a href="index.php#admissions" class="adv-nav-link <?php echo ($currentPage === 'admissions') ? 'active' : ''; ?>">
                        Admissions
                    </a>
                </li>

                <li class="adv-nav-item">
                    <a href="index.php#campus-life" class="adv-nav-link <?php echo ($currentPage === 'campus-life') ? 'active' : ''; ?>">
                        Campus Life
                    </a>
                </li>

                <li class="adv-nav-item">
                    <a href="index.php#facilities" class="adv-nav-link <?php echo ($currentPage === 'facilities') ? 'active' : ''; ?>">
                        Facilities
                    </a>
                </li>

                <li class="adv-nav-item">
                    <a href="index.php#contact" class="adv-nav-link <?php echo ($currentPage === 'contact') ? 'active' : ''; ?>">
                        Contact
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Right: Search Icon + Enquire Now Button + Mobile Toggle -->
        <div class="adv-header-actions">
            <!-- Search Icon Button -->
            <button type="button" class="adv-search-btn" id="advSearchBtn" aria-label="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>

            <!-- Orange Pill Enquire Button -->
            <a href="index.php#admissions" class="adv-btn-enquire">
                <span>Enquire Now</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>

            <!-- Mobile Hamburger Toggle -->
            <button type="button" class="adv-mobile-hamburger" id="advHamburgerBtn" aria-label="Open Navigation Menu" aria-expanded="false">
                <span class="adv-ham-bar"></span>
                <span class="adv-ham-bar"></span>
                <span class="adv-ham-bar"></span>
            </button>
        </div>

    </div>

    <!-- Mobile Navigation Drawer -->
    <div class="adv-mobile-drawer" id="advMobileDrawer">
        <div class="adv-mobile-drawer-header">
            <img src="assets/images/logo-cropped.png" alt="Advaita Logo" class="adv-mobile-logo">
            <button type="button" class="adv-mobile-close" id="advMobileCloseBtn" aria-label="Close Menu">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <nav class="adv-mobile-nav">
            <ul class="adv-mobile-list">
                <li><a href="index.php" class="adv-mobile-link <?php echo ($currentPage === 'index' || $currentPage === 'home' || $currentPage === '') ? 'active' : ''; ?>">Home</a></li>
                
                <li class="adv-mobile-has-sub">
                    <div class="adv-mobile-sub-trigger" id="advMobileAboutToggle">
                        <span>About Us</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <ul class="adv-mobile-sub-list" id="advMobileAboutSub">
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="vision-mission.php">Vision &amp; Mission</a></li>
                        <li><a href="chairmans-desk.php">Chairman's Desk</a></li>
                        <li><a href="principals-desk.php">Principal's Message</a></li>
                        <li><a href="our-staff.php">Our Faculty</a></li>
                    </ul>
                </li>

                <li><a href="index.php#academics" class="adv-mobile-link">Academics</a></li>
                <li><a href="index.php#neet-iit" class="adv-mobile-link">NEET / IIT Foundation</a></li>
                <li><a href="index.php#admissions" class="adv-mobile-link">Admissions</a></li>
                <li><a href="index.php#campus-life" class="adv-mobile-link">Campus Life</a></li>
                <li><a href="index.php#facilities" class="adv-mobile-link">Facilities</a></li>
                <li><a href="index.php#contact" class="adv-mobile-link">Contact</a></li>
            </ul>
            
            <div class="adv-mobile-actions">
                <a href="index.php#admissions" class="adv-btn-enquire full-width">
                    <span>Enquire Now</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </nav>
    </div>

    <!-- Mobile Backdrop -->
    <div class="adv-mobile-backdrop" id="advMobileBackdrop"></div>

    <!-- Search Modal / Overlay -->
    <div class="adv-search-modal" id="advSearchModal">
        <div class="adv-search-modal-box">
            <div class="adv-search-input-wrap">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search courses, admissions, faculty..." class="adv-search-input" id="advSearchInput">
                <button type="button" class="adv-search-close" id="advSearchCloseBtn">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="adv-search-quick-links">
                <span>Popular:</span>
                <a href="our-staff.php">Our Faculty</a>
                <a href="chairmans-desk.php">Chairman's Desk</a>
                <a href="principals-desk.php">Principal's Message</a>
                <a href="vision-mission.php">Vision &amp; Mission</a>
                <a href="index.php#admissions">Admissions</a>
            </div>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile Drawer Toggle
    const hamburger = document.getElementById('advHamburgerBtn');
    const drawer = document.getElementById('advMobileDrawer');
    const backdrop = document.getElementById('advMobileBackdrop');
    const closeBtn = document.getElementById('advMobileCloseBtn');
    const aboutToggle = document.getElementById('advMobileAboutToggle');
    const aboutSub = document.getElementById('advMobileAboutSub');

    function openDrawer() {
        drawer.classList.add('open');
        backdrop.classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    function closeDrawer() {
        drawer.classList.remove('open');
        backdrop.classList.remove('show');
        document.body.style.overflow = '';
    }

    if (hamburger) hamburger.addEventListener('click', openDrawer);
    if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
    if (backdrop) backdrop.addEventListener('click', closeDrawer);

    if (aboutToggle && aboutSub) {
        aboutToggle.addEventListener('click', function() {
            aboutSub.classList.toggle('open');
            aboutToggle.querySelector('i').classList.toggle('rotate');
        });
    }

    // Search Modal Toggle
    const searchBtn = document.getElementById('advSearchBtn');
    const searchModal = document.getElementById('advSearchModal');
    const searchCloseBtn = document.getElementById('advSearchCloseBtn');
    const searchInput = document.getElementById('advSearchInput');

    if (searchBtn && searchModal) {
        searchBtn.addEventListener('click', function() {
            searchModal.classList.add('open');
            setTimeout(() => { if (searchInput) searchInput.focus(); }, 100);
        });
    }

    if (searchCloseBtn && searchModal) {
        searchCloseBtn.addEventListener('click', function() {
            searchModal.classList.remove('open');
        });
    }

    if (searchModal) {
        searchModal.addEventListener('click', function(e) {
            if (e.target === searchModal) {
                searchModal.classList.remove('open');
            }
        });
    }
});
</script>
