<?php
/**
 * Navigation Bar Component - Advaita School of Excellence
 * Color Scheme: #083B7A
 * Fully Responsive for Desktop, Laptop, Tablet, and Mobile
 * Clean Semantic HTML - Strictly No Inline CSS
 */
$currentPage = $activePage ?? '';
?>

<!-- Top Utility & Information Bar -->
<div class="adv-topbar">
    <div class="container">
        <!-- Left Side Tagline / Affiliation -->
        <div class="adv-topbar-left">
            <span>An English Medium Co-Educational CBSE Senior Secondary School.</span>
        </div>

        <!-- Right Side Links & Socials -->
        <div class="adv-topbar-right">
            <ul class="adv-topbar-links">
                <li><a href="#sanstha">Sanmati Education Network</a></li>
                <li><a href="#careers">Work at Advaita</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

            <div class="adv-topbar-socials">
                <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" title="Facebook" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" title="Twitter / X" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" title="YouTube" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" title="Instagram" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" title="LinkedIn" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation Header -->
<header class="adv-main-header">
    <div class="adv-nav-container">
        <!-- Left Desktop Menu -->
        <ul class="adv-nav-menu adv-nav-left">
            <li class="adv-nav-item <?php echo ($currentPage === 'school') ? 'active' : ''; ?>">
                <a href="#school" class="adv-nav-link">
                    <span>Our School</span>
                    <i class="fa-solid fa-chevron-down chevron-icon"></i>
                </a>
                <ul class="adv-dropdown">
                    <li class="adv-dropdown-item"><a href="#about-us" class="adv-dropdown-link"><i class="fa-solid fa-school"></i> About Advaita</a></li>
                    <li class="adv-dropdown-item"><a href="#vision-mission" class="adv-dropdown-link"><i class="fa-solid fa-bullseye"></i> Vision & Mission</a></li>
                    <li class="adv-dropdown-item"><a href="#leadership" class="adv-dropdown-link"><i class="fa-solid fa-user-tie"></i> Leadership & Management</a></li>
                    <li class="adv-dropdown-item"><a href="#infrastructure" class="adv-dropdown-link"><i class="fa-solid fa-building"></i> Infrastructure & Campus</a></li>
                    <li class="adv-dropdown-item"><a href="legacy.php" class="adv-dropdown-link"><i class="fa-solid fa-award"></i> 10-Year Legacy</a></li>
                </ul>
            </li>

            <li class="adv-nav-item <?php echo ($currentPage === 'learning') ? 'active' : ''; ?>">
                <a href="#learning" class="adv-nav-link">
                    <span>Learning</span>
                    <i class="fa-solid fa-chevron-down chevron-icon"></i>
                </a>
                <ul class="adv-dropdown">
                    <li class="adv-dropdown-item"><a href="#curriculum" class="adv-dropdown-link"><i class="fa-solid fa-book-open"></i> CBSE Curriculum</a></li>
                    <li class="adv-dropdown-item"><a href="#primary-wing" class="adv-dropdown-link"><i class="fa-solid fa-shapes"></i> Primary Wing</a></li>
                    <li class="adv-dropdown-item"><a href="#middle-school" class="adv-dropdown-link"><i class="fa-solid fa-chalkboard-user"></i> Middle & High School</a></li>
                    <li class="adv-dropdown-item"><a href="#senior-secondary" class="adv-dropdown-link"><i class="fa-solid fa-graduation-cap"></i> Senior Secondary (11th & 12th)</a></li>
                    <li class="adv-dropdown-item"><a href="#pedagogy" class="adv-dropdown-link"><i class="fa-solid fa-lightbulb"></i> Innovative Pedagogy</a></li>
                </ul>
            </li>

            <li class="adv-nav-item <?php echo ($currentPage === 'holistic') ? 'active' : ''; ?>">
                <a href="#holistic" class="adv-nav-link">
                    <span>Holistic Experience</span>
                    <i class="fa-solid fa-chevron-down chevron-icon"></i>
                </a>
                <ul class="adv-dropdown">
                    <li class="adv-dropdown-item"><a href="#sports" class="adv-dropdown-link"><i class="fa-solid fa-futbol"></i> Sports & Fitness</a></li>
                    <li class="adv-dropdown-item"><a href="#arts" class="adv-dropdown-link"><i class="fa-solid fa-palette"></i> Arts, Music & Dance</a></li>
                    <li class="adv-dropdown-item"><a href="#clubs" class="adv-dropdown-link"><i class="fa-solid fa-puzzle-piece"></i> Clubs & House System</a></li>
                    <li class="adv-dropdown-item"><a href="#steam" class="adv-dropdown-link"><i class="fa-solid fa-robot"></i> STEAM & Innovation Lab</a></li>
                </ul>
            </li>

            <li class="adv-nav-item <?php echo ($currentPage === 'admissions') ? 'active' : ''; ?>">
                <a href="#admissions" class="adv-nav-link">
                    <span>Admissions</span>
                    <i class="fa-solid fa-chevron-down chevron-icon"></i>
                </a>
                <ul class="adv-dropdown">
                    <li class="adv-dropdown-item"><a href="#admission-process" class="adv-dropdown-link"><i class="fa-solid fa-clipboard-list"></i> Admission Process</a></li>
                    <li class="adv-dropdown-item"><a href="#fee-structure" class="adv-dropdown-link"><i class="fa-solid fa-indian-rupee-sign"></i> Fee Structure</a></li>
                    <li class="adv-dropdown-item"><a href="#enquiry-form" class="adv-dropdown-link"><i class="fa-solid fa-paper-plane"></i> Online Admission Enquiry</a></li>
                </ul>
            </li>
        </ul>

        <!-- Center Brand Crest -->
        <div class="adv-nav-brand-center">
            <a href="index.php" class="adv-brand-badge" title="Advaita School of Excellence">
                <img src="assets/images/logo.png" alt="Advaita School of Excellence Logo" class="adv-brand-logo-img">
            </a>
        </div>

        <!-- Right Desktop Menu -->
        <ul class="adv-nav-menu adv-nav-right">
            <li class="adv-nav-item <?php echo ($currentPage === 'gallery') ? 'active' : ''; ?>">
                <a href="#gallery" class="adv-nav-link">
                    <span>Gallery</span>
                </a>
            </li>

            <li class="adv-nav-item <?php echo ($currentPage === 'achievements') ? 'active' : ''; ?>">
                <a href="#achievements" class="adv-nav-link">
                    <span>Achievements</span>
                </a>
            </li>

            <li class="adv-nav-item <?php echo ($currentPage === 'community') ? 'active' : ''; ?>">
                <a href="#community" class="adv-nav-link">
                    <span>Community Connect</span>
                    <i class="fa-solid fa-chevron-down chevron-icon"></i>
                </a>
                <ul class="adv-dropdown">
                    <li class="adv-dropdown-item"><a href="#parents-forum" class="adv-dropdown-link"><i class="fa-solid fa-users"></i> Parents Forum (PTA)</a></li>
                    <li class="adv-dropdown-item"><a href="#alumni" class="adv-dropdown-link"><i class="fa-solid fa-user-graduate"></i> Alumni Network</a></li>
                    <li class="adv-dropdown-item"><a href="#events" class="adv-dropdown-link"><i class="fa-solid fa-calendar-days"></i> Annual Events & Celebrations</a></li>
                </ul>
            </li>

            <li class="adv-nav-item <?php echo ($currentPage === 'policies') ? 'active' : ''; ?>">
                <a href="#policies" class="adv-nav-link">
                    <span>Policies</span>
                </a>
            </li>

            <li class="adv-nav-item <?php echo ($currentPage === 'blog') ? 'active' : ''; ?>">
                <a href="#blog" class="adv-nav-link">
                    <span>Blog</span>
                </a>
            </li>
        </ul>

        <!-- Tablet / Mobile Actions -->
        <div class="adv-mobile-actions">
            <a href="#admissions" class="adv-tablet-cta">
                <i class="fa-solid fa-paper-plane"></i>
                <span>Admissions</span>
            </a>
            <button type="button" class="adv-mobile-nav-toggle" aria-label="Open Navigation Menu" id="advMenuToggleBtn">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>
</header>

<!-- Mobile & Tablet Off-Canvas Drawer -->
<div class="adv-mobile-backdrop" id="advDrawerBackdrop"></div>
<aside class="adv-mobile-drawer" id="advMobileDrawer" aria-label="Mobile Navigation Menu">
    <!-- Drawer Header -->
    <div class="adv-mobile-header">
        <div class="adv-mobile-brand-box">
            <img src="assets/images/logo.png" alt="Advaita School Logo" class="adv-brand-logo-img">
        </div>
        <button type="button" class="adv-mobile-close" id="advDrawerCloseBtn" aria-label="Close Navigation Menu">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

    <!-- Quick Action Contact Bar -->
    <div class="adv-mobile-quickbar">
        <a href="tel:+919876543210" class="adv-mobile-quick-btn call-btn">
            <i class="fa-solid fa-phone"></i>
            <span>Call School</span>
        </a>
        <a href="https://wa.me/919876543210" target="_blank" rel="noopener noreferrer" class="adv-mobile-quick-btn whatsapp-btn">
            <i class="fa-brands fa-whatsapp"></i>
            <span>WhatsApp</span>
        </a>
    </div>

    <!-- Navigation Menu Links & Accordions -->
    <ul class="adv-mobile-menu">
        <li class="adv-mobile-item has-children">
            <a href="#" class="adv-mobile-link" role="button" aria-expanded="false">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-school"></i>
                    <span>Our School</span>
                </span>
                <i class="fa-solid fa-chevron-down adv-mobile-chevron"></i>
            </a>
            <ul class="adv-mobile-submenu">
                <li><a href="#about-us" class="adv-mobile-submenu-link"><i class="fa-solid fa-circle-info"></i> About Advaita</a></li>
                <li><a href="#vision-mission" class="adv-mobile-submenu-link"><i class="fa-solid fa-bullseye"></i> Vision & Mission</a></li>
                <li><a href="#leadership" class="adv-mobile-submenu-link"><i class="fa-solid fa-user-tie"></i> Leadership</a></li>
                <li><a href="#infrastructure" class="adv-mobile-submenu-link"><i class="fa-solid fa-building"></i> Infrastructure</a></li>
                <li><a href="legacy.php" class="adv-mobile-submenu-link"><i class="fa-solid fa-award"></i> 10-Year Legacy</a></li>
            </ul>
        </li>

        <li class="adv-mobile-item has-children">
            <a href="#" class="adv-mobile-link" role="button" aria-expanded="false">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-book-open"></i>
                    <span>Learning</span>
                </span>
                <i class="fa-solid fa-chevron-down adv-mobile-chevron"></i>
            </a>
            <ul class="adv-mobile-submenu">
                <li><a href="#curriculum" class="adv-mobile-submenu-link"><i class="fa-solid fa-book-bookmark"></i> CBSE Curriculum</a></li>
                <li><a href="#primary-wing" class="adv-mobile-submenu-link"><i class="fa-solid fa-shapes"></i> Primary Wing</a></li>
                <li><a href="#middle-school" class="adv-mobile-submenu-link"><i class="fa-solid fa-chalkboard-user"></i> Middle & High School</a></li>
                <li><a href="#senior-secondary" class="adv-mobile-submenu-link"><i class="fa-solid fa-graduation-cap"></i> Senior Secondary</a></li>
                <li><a href="#pedagogy" class="adv-mobile-submenu-link"><i class="fa-solid fa-lightbulb"></i> Innovative Pedagogy</a></li>
            </ul>
        </li>

        <li class="adv-mobile-item has-children">
            <a href="#" class="adv-mobile-link" role="button" aria-expanded="false">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-palette"></i>
                    <span>Holistic Experience</span>
                </span>
                <i class="fa-solid fa-chevron-down adv-mobile-chevron"></i>
            </a>
            <ul class="adv-mobile-submenu">
                <li><a href="#sports" class="adv-mobile-submenu-link"><i class="fa-solid fa-futbol"></i> Sports & Fitness</a></li>
                <li><a href="#arts" class="adv-mobile-submenu-link"><i class="fa-solid fa-paintbrush"></i> Arts, Music & Dance</a></li>
                <li><a href="#clubs" class="adv-mobile-submenu-link"><i class="fa-solid fa-puzzle-piece"></i> Clubs & Houses</a></li>
                <li><a href="#steam" class="adv-mobile-submenu-link"><i class="fa-solid fa-robot"></i> STEAM Lab</a></li>
            </ul>
        </li>

        <li class="adv-mobile-item has-children">
            <a href="#" class="adv-mobile-link" role="button" aria-expanded="false">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-id-card"></i>
                    <span>Admissions</span>
                </span>
                <i class="fa-solid fa-chevron-down adv-mobile-chevron"></i>
            </a>
            <ul class="adv-mobile-submenu">
                <li><a href="#admission-process" class="adv-mobile-submenu-link"><i class="fa-solid fa-clipboard-check"></i> Admission Process</a></li>
                <li><a href="#fee-structure" class="adv-mobile-submenu-link"><i class="fa-solid fa-indian-rupee-sign"></i> Fee Structure</a></li>
                <li><a href="#enquiry-form" class="adv-mobile-submenu-link"><i class="fa-solid fa-paper-plane"></i> Online Admission Enquiry</a></li>
            </ul>
        </li>

        <li class="adv-mobile-item">
            <a href="#gallery" class="adv-mobile-link">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-images"></i>
                    <span>Gallery</span>
                </span>
            </a>
        </li>

        <li class="adv-mobile-item">
            <a href="#achievements" class="adv-mobile-link">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-trophy"></i>
                    <span>Achievements</span>
                </span>
            </a>
        </li>

        <li class="adv-mobile-item has-children">
            <a href="#" class="adv-mobile-link" role="button" aria-expanded="false">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-users"></i>
                    <span>Community Connect</span>
                </span>
                <i class="fa-solid fa-chevron-down adv-mobile-chevron"></i>
            </a>
            <ul class="adv-mobile-submenu">
                <li><a href="#parents-forum" class="adv-mobile-submenu-link"><i class="fa-solid fa-comments"></i> Parents Forum (PTA)</a></li>
                <li><a href="#alumni" class="adv-mobile-submenu-link"><i class="fa-solid fa-user-graduate"></i> Alumni Network</a></li>
                <li><a href="#events" class="adv-mobile-submenu-link"><i class="fa-solid fa-calendar-days"></i> Annual Events</a></li>
            </ul>
        </li>

        <li class="adv-mobile-item">
            <a href="#policies" class="adv-mobile-link">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-file-shield"></i>
                    <span>Policies</span>
                </span>
            </a>
        </li>

        <li class="adv-mobile-item">
            <a href="#blog" class="adv-mobile-link">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-newspaper"></i>
                    <span>Blog</span>
                </span>
            </a>
        </li>

        <li class="adv-mobile-item">
            <a href="#contact" class="adv-mobile-link">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-address-book"></i>
                    <span>Contact Us</span>
                </span>
            </a>
        </li>
    </ul>

    <!-- Drawer Footer -->
    <div class="adv-mobile-footer">
        <a href="#enquiry-form" class="adv-mobile-cta">
            <i class="fa-solid fa-paper-plane"></i>
            <span>Apply for Admission</span>
        </a>
        <div class="adv-topbar-socials adv-drawer-socials">
            <a href="https://facebook.com" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="https://youtube.com" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <div class="adv-mobile-footer-meta">
            Sanmati Sevabhavi Sanstha &copy; <?php echo date('Y'); ?>
        </div>
    </div>
</aside>
