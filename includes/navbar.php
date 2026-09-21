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
            <svg class="adv-svg-corner adv-svg-corner-left" viewBox="0 0 45 64" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" aria-hidden="true">
                <path d="M0 0C32 12 32 52 0 64V0Z" fill="#F37021"/>
            </svg>

            <!-- Far Right Corner Orange Wing -->
            <svg class="adv-svg-corner adv-svg-corner-right" viewBox="0 0 45 64" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" aria-hidden="true">
                <path d="M45 0C13 12 13 52 45 64V0Z" fill="#F37021"/>
            </svg>

            <!-- Left Desktop Menu -->
            <div class="adv-nav-section adv-nav-section-left">
                <!-- Home Pill Button -->
                <a href="index.php" class="adv-nav-home-btn <?php echo ($currentPage === '' || $currentPage === 'home' || $currentPage === 'index') ? 'active' : ''; ?>" title="Home">
                    <i class="fa-solid fa-house"></i>
                    <span>Home</span>
                </a>

                <ul class="adv-nav-menu adv-nav-menu-left">
                    <li class="adv-nav-item <?php echo ($currentPage === 'school') ? 'active' : ''; ?>">
                        <a href="about-us.php" class="adv-nav-link">
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

                    <li class="adv-nav-item <?php echo ($currentPage === 'learning') ? 'active' : ''; ?>">
                        <a href="academics.php" class="adv-nav-link">
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

                    <li class="adv-nav-item <?php echo ($currentPage === 'holistic') ? 'active' : ''; ?>">
                        <a href="activities.php" class="adv-nav-link">
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

                    <li class="adv-nav-item <?php echo ($currentPage === 'admissions') ? 'active' : ''; ?>">
                        <a href="admissions.php" class="adv-nav-link">
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
                    <!-- Left Shoulder Swoop Arc (Anchored to Badge Top-Left) -->
                    <svg class="adv-shoulder-wing adv-shoulder-left" viewBox="0 0 80 22" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" aria-hidden="true">
                        <path d="M80 0C45 0 40 20 0 20V22H80V0Z" fill="#FFFFFF"/>
                        <path d="M0 20C40 20 45 0 80 0" stroke="#F37021" stroke-width="4.5" stroke-linecap="round"/>
                    </svg>

                    <img src="assets/images/logo-cropped.png" alt="Advaita School of Excellence" class="adv-brand-logo-pod-img">

                    <!-- Right Shoulder Swoop Arc (Anchored to Badge Top-Right) -->
                    <svg class="adv-shoulder-wing adv-shoulder-right" viewBox="0 0 80 22" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" aria-hidden="true">
                        <path d="M0 0C35 0 40 20 80 20V22H0V0Z" fill="#FFFFFF"/>
                        <path d="M0 0C35 0 40 20 80 20" stroke="#F37021" stroke-width="4.5" stroke-linecap="round"/>
                    </svg>
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
