<?php
/**
 * Navigation Bar Component - Advaita School of Excellence
 * Color Scheme: #083B7A
 * Fully Responsive for Desktop, Laptop, Tablet, and Mobile
 * Clean Semantic HTML - Strictly No Inline CSS
 */
$currentPage = $activePage ?? '';
?>

<!-- Main Navigation Header -->
<header class="adv-main-header">
    <!-- Top Utility & Information Bar -->
    <div class="adv-topbar">
        <div class="adv-topbar-container">
            <!-- Left Side Tagline / Affiliation -->
            <div class="adv-topbar-left">
                <i class="fa-solid fa-location-dot adv-topbar-pin"></i>
                <span>Advaita School of Excellence, Parbhani · CBSE Affiliated (No. 1130920)</span>
                <span class="adv-topbar-sep">|</span>
            </div>

            <!-- Right Side Links & Socials -->
            <div class="adv-topbar-right">
                <ul class="adv-topbar-links">
                    <li><a href="about-us.php">Sanmati Sevabhavi Sanstha</a></li>
                    <li class="pipe">|</li>
                    <li><a href="contact.php">Work at Advaita</a></li>
                    <li class="pipe">|</li>
                    <li><a href="contact.php">Contact</a></li>
                    <li class="pipe">|</li>
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

    <div class="adv-header-fullwidth">
        <div class="adv-nav-ribbon">
            <!-- Far Left Corner Orange Wing -->
            <svg class="adv-svg-corner adv-svg-corner-left" viewBox="0 0 24 42" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" aria-hidden="true">
                <path d="M0 8 C0 22 10 36 24 42 H0 V8 Z" fill="#F37021"/>
            </svg>

            <!-- Far Right Corner Orange Wing -->
            <svg class="adv-svg-corner adv-svg-corner-right" viewBox="0 0 24 42" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" aria-hidden="true">
                <path d="M24 8 C24 22 14 36 0 42 H24 V8 Z" fill="#F37021"/>
            </svg>

            <!-- Left Desktop Menu -->
            <div class="adv-nav-section adv-nav-section-left">
                <!-- Home Pill Button -->
                <a href="index.php" class="adv-nav-home-btn <?php echo ($currentPage === '' || $currentPage === 'home' || $currentPage === 'index') ? 'active' : ''; ?>" title="Home">
                    <i class="fa-solid fa-house"></i>
                    <span>Home</span>
                </a>

                <ul class="adv-nav-menu adv-nav-menu-left">
                    <li class="adv-nav-item has-dropdown <?php echo ($currentPage === 'school') ? 'active' : ''; ?>">
                        <a href="about-us.php" class="adv-nav-link" aria-haspopup="true" aria-expanded="false">
                            <span>Our School</span>
                            <i class="fa-solid fa-chevron-down chevron-icon"></i>
                        </a>
                        <ul class="adv-dropdown">
                            <li class="adv-dropdown-item"><a href="about-us.php" class="adv-dropdown-link"><i class="fa-solid fa-school"></i> About Advaita</a></li>
                            <li class="adv-dropdown-item"><a href="vision-mission.php" class="adv-dropdown-link"><i class="fa-solid fa-bullseye"></i> Vision & Mission</a></li>
                            <li class="adv-dropdown-item"><a href="leadership.php" class="adv-dropdown-link"><i class="fa-solid fa-user-tie"></i> Director & Leadership</a></li>
                            <li class="adv-dropdown-item"><a href="facilities.php" class="adv-dropdown-link"><i class="fa-solid fa-building"></i> Infrastructure & Campus</a></li>
                            <li class="adv-dropdown-item"><a href="mandatory-disclosure.php" class="adv-dropdown-link"><i class="fa-solid fa-file-shield"></i> Mandatory Disclosure</a></li>
                        </ul>
                    </li>

                    <li class="adv-nav-item has-dropdown <?php echo ($currentPage === 'learning') ? 'active' : ''; ?>">
                        <a href="academics.php" class="adv-nav-link" aria-haspopup="true" aria-expanded="false">
                            <span>Learning</span>
                            <i class="fa-solid fa-chevron-down chevron-icon"></i>
                        </a>
                        <ul class="adv-dropdown">
                            <li class="adv-dropdown-item"><a href="academics.php" class="adv-dropdown-link"><i class="fa-solid fa-book-open"></i> CBSE Curriculum</a></li>
                            <li class="adv-dropdown-item"><a href="academics.php" class="adv-dropdown-link"><i class="fa-solid fa-shapes"></i> Primary Wing</a></li>
                            <li class="adv-dropdown-item"><a href="academics.php" class="adv-dropdown-link"><i class="fa-solid fa-chalkboard-user"></i> Middle & Secondary</a></li>
                            <li class="adv-dropdown-item"><a href="academics.php" class="adv-dropdown-link"><i class="fa-solid fa-graduation-cap"></i> Senior Secondary (XI-XII)</a></li>
                        </ul>
                    </li>

                    <li class="adv-nav-item has-dropdown <?php echo ($currentPage === 'holistic') ? 'active' : ''; ?>">
                        <a href="activities.php" class="adv-nav-link" aria-haspopup="true" aria-expanded="false">
                            <span>Holistic Experience</span>
                            <i class="fa-solid fa-chevron-down chevron-icon"></i>
                        </a>
                        <ul class="adv-dropdown">
                            <li class="adv-dropdown-item"><a href="activities.php" class="adv-dropdown-link"><i class="fa-solid fa-futbol"></i> Sports & Fitness</a></li>
                            <li class="adv-dropdown-item"><a href="activities.php" class="adv-dropdown-link"><i class="fa-solid fa-palette"></i> Arts, Music & Dance</a></li>
                            <li class="adv-dropdown-item"><a href="activities.php" class="adv-dropdown-link"><i class="fa-solid fa-puzzle-piece"></i> Clubs & House System</a></li>
                            <li class="adv-dropdown-item"><a href="facilities.php" class="adv-dropdown-link"><i class="fa-solid fa-robot"></i> STEAM & Innovation Lab</a></li>
                        </ul>
                    </li>

                    <li class="adv-nav-item has-dropdown <?php echo ($currentPage === 'admissions') ? 'active' : ''; ?>">
                        <a href="admissions.php" class="adv-nav-link" aria-haspopup="true" aria-expanded="false">
                            <span>Admissions</span>
                            <i class="fa-solid fa-chevron-down chevron-icon"></i>
                        </a>
                        <ul class="adv-dropdown">
                            <li class="adv-dropdown-item"><a href="admissions.php" class="adv-dropdown-link"><i class="fa-solid fa-clipboard-list"></i> Admission Process</a></li>
                            <li class="adv-dropdown-item"><a href="admissions.php#enquiry-form" class="adv-dropdown-link"><i class="fa-solid fa-paper-plane"></i> Online Admission Enquiry</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Center Brand Crest Pod with Seamless Sculpted Shoulder Wings -->
            <div class="adv-nav-brand-pod">
                <a href="index.php" class="adv-brand-badge-pod" title="Advaita School of Excellence">
                    <!-- Sculpted Crest & Shoulder Swoop SVG -->
                    <svg class="adv-brand-crest-svg" viewBox="0 0 244 92" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" aria-hidden="true">
                        <defs>
                            <filter id="advCrestShadow" x="-20%" y="-10%" width="140%" height="130%">
                                <feDropShadow dx="0" dy="5" stdDeviation="5" flood-color="#021B3B" flood-opacity="0.14"/>
                            </filter>
                        </defs>
                        <!-- White Sculpted Floating Badge -->
                        <path d="M 24 12 C 24 5 30 2 38 2 H 206 C 214 2 220 5 220 12 L 210 74 C 208 82 202 88 192 88 H 52 C 42 88 36 82 34 74 Z" fill="#FFFFFF" filter="url(#advCrestShadow)"/>
                        <!-- Left Orange Shoulder Swoop & Flank -->
                        <path d="M 4 16 C 9 16 14 10 17 6 C 20 3 23 5 24 9 C 25 18 28 48 34 72" stroke="#F37021" stroke-width="3.5" stroke-linecap="round"/>
                        <!-- Right Orange Shoulder Swoop & Flank -->
                        <path d="M 240 16 C 235 16 230 10 227 6 C 224 3 221 5 220 9 C 219 18 216 48 210 72" stroke="#F37021" stroke-width="3.5" stroke-linecap="round"/>
                    </svg>
                    <img src="assets/images/logo-cropped.png" alt="Advaita School of Excellence" class="adv-brand-logo-pod-img">
                </a>
            </div>

            <!-- Right Desktop Menu -->
            <div class="adv-nav-section adv-nav-section-right">
                <ul class="adv-nav-menu adv-nav-menu-right">
                    <li class="adv-nav-item <?php echo ($currentPage === 'gallery') ? 'active' : ''; ?>">
                        <a href="gallery.php" class="adv-nav-link">
                            <span>Gallery</span>
                        </a>
                    </li>

                    <li class="adv-nav-item <?php echo ($currentPage === 'achievements') ? 'active' : ''; ?>">
                        <a href="achievements.php" class="adv-nav-link">
                            <span>Achievements</span>
                        </a>
                    </li>

                    <li class="adv-nav-item <?php echo ($currentPage === 'mandatory') ? 'active' : ''; ?>">
                        <a href="mandatory-disclosure.php" class="adv-nav-link">
                            <span>CBSE Corner</span>
                        </a>
                    </li>

                    <li class="adv-nav-item <?php echo ($currentPage === 'contact') ? 'active' : ''; ?>">
                        <a href="contact.php" class="adv-nav-link">
                            <span>Contact Us</span>
                        </a>
                    </li>
                </ul>

                <!-- Apply for Admission Pill CTA Button -->
                <a href="admissions.php" class="adv-nav-apply-btn">
                    <span>Apply for Admission</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- Tablet / Mobile Actions -->
            <div class="adv-mobile-actions">
                <a href="admissions.php" class="adv-tablet-cta">
                    <i class="fa-solid fa-paper-plane"></i>
                    <span>Apply</span>
                </a>
                <button type="button" class="adv-mobile-nav-toggle" aria-label="Open Navigation Menu" id="advMenuToggleBtn">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
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
                <li><a href="about-us.php" class="adv-mobile-submenu-link"><i class="fa-solid fa-circle-info"></i> About Advaita</a></li>
                <li><a href="vision-mission.php" class="adv-mobile-submenu-link"><i class="fa-solid fa-bullseye"></i> Vision & Mission</a></li>
                <li><a href="leadership.php" class="adv-mobile-submenu-link"><i class="fa-solid fa-user-tie"></i> Leadership</a></li>
                <li><a href="facilities.php" class="adv-mobile-submenu-link"><i class="fa-solid fa-building"></i> Infrastructure</a></li>
                <li><a href="mandatory-disclosure.php" class="adv-mobile-submenu-link"><i class="fa-solid fa-file-shield"></i> Mandatory Disclosure</a></li>
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
                <li><a href="academics.php" class="adv-mobile-submenu-link"><i class="fa-solid fa-book-bookmark"></i> CBSE Curriculum</a></li>
                <li><a href="academics.php" class="adv-mobile-submenu-link"><i class="fa-solid fa-shapes"></i> Primary Wing</a></li>
                <li><a href="academics.php" class="adv-mobile-submenu-link"><i class="fa-solid fa-chalkboard-user"></i> Middle & High School</a></li>
                <li><a href="academics.php" class="adv-mobile-submenu-link"><i class="fa-solid fa-graduation-cap"></i> Senior Secondary</a></li>
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
                <li><a href="activities.php" class="adv-mobile-submenu-link"><i class="fa-solid fa-futbol"></i> Sports & Fitness</a></li>
                <li><a href="activities.php" class="adv-mobile-submenu-link"><i class="fa-solid fa-paintbrush"></i> Arts, Music & Dance</a></li>
                <li><a href="activities.php" class="adv-mobile-submenu-link"><i class="fa-solid fa-puzzle-piece"></i> Clubs & Houses</a></li>
                <li><a href="facilities.php" class="adv-mobile-submenu-link"><i class="fa-solid fa-robot"></i> STEAM Lab</a></li>
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
                <li><a href="admissions.php" class="adv-mobile-submenu-link"><i class="fa-solid fa-clipboard-check"></i> Admission Process</a></li>
                <li><a href="admissions.php#enquiry-form" class="adv-mobile-submenu-link"><i class="fa-solid fa-paper-plane"></i> Online Admission Enquiry</a></li>
            </ul>
        </li>

        <li class="adv-mobile-item">
            <a href="gallery.php" class="adv-mobile-link">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-images"></i>
                    <span>Gallery</span>
                </span>
            </a>
        </li>

        <li class="adv-mobile-item">
            <a href="achievements.php" class="adv-mobile-link">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-trophy"></i>
                    <span>Achievements</span>
                </span>
            </a>
        </li>

        <li class="adv-mobile-item">
            <a href="mandatory-disclosure.php" class="adv-mobile-link">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-file-shield"></i>
                    <span>Mandatory Disclosure</span>
                </span>
            </a>
        </li>

        <li class="adv-mobile-item">
            <a href="contact.php" class="adv-mobile-link">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-address-book"></i>
                    <span>Contact Us</span>
                </span>
            </a>
        </li>
    </ul>

    <!-- Drawer Footer -->
    <div class="adv-mobile-footer">
        <a href="admissions.php" class="adv-mobile-cta">
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
            Sanmati Education Network &copy; <?php echo date('Y'); ?>
        </div>
    </div>
</aside>
