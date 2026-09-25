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
            </div>

            <!-- Right Side Links & Socials -->
            <div class="adv-topbar-right">
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
                <a href="index.php" class="adv-nav-home-btn <?php echo ($currentPage === 'index' || $currentPage === 'home' || $currentPage === '') ? 'active' : ''; ?>" title="Home">
                    <i class="fa-solid fa-house"></i>
                    <span>Home</span>
                </a>

                <ul class="adv-nav-menu adv-nav-menu-left">
                    <li class="adv-nav-item has-dropdown <?php echo ($currentPage === 'about' || $currentPage === 'about-us') ? 'active' : ''; ?>">
                        <a href="about-us.php" class="adv-nav-link" aria-haspopup="true" aria-expanded="false">
                            <span>About Us</span>
                            <i class="fa-solid fa-chevron-down chevron-icon"></i>
                        </a>
                        <ul class="adv-dropdown">
                            <li class="adv-dropdown-item">
                                <a href="about-us.php" class="adv-dropdown-link">
                                    <i class="fa-solid fa-circle-info"></i>
                                    <span>About Us</span>
                                </a>
                            </li>
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
                <!-- Apply for Admission Pill CTA Button -->
                <a href="index.php#admissions" class="adv-nav-apply-btn">
                    <span>Apply for Admission</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- Tablet / Mobile Actions -->
            <div class="adv-mobile-actions">
                <a href="index.php#admissions" class="adv-tablet-cta">
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
        <a href="tel:+919413062851" class="adv-mobile-quick-btn call-btn">
            <i class="fa-solid fa-phone"></i>
            <span>Call School</span>
        </a>
        <a href="https://wa.me/919413062851" target="_blank" rel="noopener noreferrer" class="adv-mobile-quick-btn whatsapp-btn">
            <i class="fa-brands fa-whatsapp"></i>
            <span>WhatsApp</span>
        </a>
    </div>

    <!-- Navigation Menu Links & Accordions -->
    <ul class="adv-mobile-menu">
        <li class="adv-mobile-item">
            <a href="index.php" class="adv-mobile-link">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-house"></i>
                    <span>Home</span>
                </span>
            </a>
        </li>

        <li class="adv-mobile-item has-children <?php echo ($currentPage === 'about' || $currentPage === 'about-us') ? 'is-active' : ''; ?>">
            <a href="#" class="adv-mobile-link" role="button" aria-expanded="false">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>About Us</span>
                </span>
                <i class="fa-solid fa-chevron-down adv-mobile-chevron"></i>
            </a>
            <ul class="adv-mobile-submenu">
                <li>
                    <a href="about-us.php" class="adv-mobile-submenu-link">
                        <i class="fa-solid fa-circle-info"></i>
                        <span>About Us</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>

    <!-- Drawer Footer -->
    <div class="adv-mobile-footer">
        <a href="index.php#admissions" class="adv-mobile-cta">
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
