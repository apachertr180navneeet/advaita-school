<!-- Main Navigation Header -->
<header class="adv-main-header">
    <!-- Top Utility & Information Bar -->
    <div class="adv-topbar">
        <div class="adv-topbar-container">
            <!-- Left Side Tagline / Affiliation -->
            <div class="adv-topbar-left">
                <i class="fa-solid fa-location-dot adv-topbar-pin"></i>
                <span>{{ \App\Models\Setting::get('site_school_name', 'Advaita School of Excellence') }}, Parbhani · CBSE Affiliated (No. {{ \App\Models\Setting::get('site_affiliation_no', '1130920') }})</span>
            </div>

            <!-- Right Side Links & Socials -->
            <div class="adv-topbar-right">
                <div class="adv-topbar-socials">
                    <a href="{{ \App\Models\Setting::get('site_facebook_url', 'https://facebook.com') }}" target="_blank" rel="noopener noreferrer" title="Facebook" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="{{ \App\Models\Setting::get('site_youtube_url', 'https://youtube.com') }}" target="_blank" rel="noopener noreferrer" title="YouTube" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="{{ \App\Models\Setting::get('site_instagram_url', 'https://instagram.com') }}" target="_blank" rel="noopener noreferrer" title="Instagram" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="{{ \App\Models\Setting::get('site_linkedin_url', 'https://linkedin.com') }}" target="_blank" rel="noopener noreferrer" title="LinkedIn" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <a href="{{ route('admin.dashboard') }}" style="color: #ffffff; font-size: 11.5px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 5px; background: rgba(255,255,255,0.15); padding: 3px 10px; border-radius: 20px; margin-left: 12px;" title="Admin Portal">
                    <i class="fa-solid fa-lock" style="font-size: 10px; color: #F37021;"></i>
                    <span>Admin</span>
                </a>
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
                <a href="{{ route('home') }}" class="adv-nav-home-btn {{ request()->routeIs('home') ? 'active' : '' }}" title="Home">
                    <i class="fa-solid fa-house"></i>
                    <span>Home</span>
                </a>

                <ul class="adv-nav-menu adv-nav-menu-left">
                    <li class="adv-nav-item has-dropdown {{ request()->routeIs('about-us', 'our-staff', 'chairmans-desk', 'principals-desk', 'vision-mission') ? 'active' : '' }}">
                        <a href="{{ route('about-us') }}" class="adv-nav-link" aria-haspopup="true" aria-expanded="false">
                            <span>About Us</span>
                            <i class="fa-solid fa-chevron-down chevron-icon"></i>
                        </a>
                        <ul class="adv-dropdown">
                            <li class="adv-dropdown-item">
                                <a href="{{ route('about-us') }}" class="adv-dropdown-link {{ request()->routeIs('about-us') ? 'active' : '' }}">
                                    <i class="fa-solid fa-circle-info"></i>
                                    <span>About Us</span>
                                </a>
                            </li>
                            <li class="adv-dropdown-item">
                                <a href="{{ route('vision-mission') }}" class="adv-dropdown-link {{ request()->routeIs('vision-mission') ? 'active' : '' }}">
                                    <i class="fa-solid fa-bullseye"></i>
                                    <span>Vision &amp; Mission</span>
                                </a>
                            </li>
                            <li class="adv-dropdown-item">
                                <a href="{{ route('chairmans-desk') }}" class="adv-dropdown-link {{ request()->routeIs('chairmans-desk') ? 'active' : '' }}">
                                    <i class="fa-solid fa-user-tie"></i>
                                    <span>Chairman's Desk</span>
                                </a>
                            </li>
                            <li class="adv-dropdown-item">
                                <a href="{{ route('principals-desk') }}" class="adv-dropdown-link {{ request()->routeIs('principals-desk') ? 'active' : '' }}">
                                    <i class="fa-solid fa-graduation-cap"></i>
                                    <span>Principal's Desk</span>
                                </a>
                            </li>
                            <li class="adv-dropdown-item">
                                <a href="{{ route('our-staff') }}" class="adv-dropdown-link {{ request()->routeIs('our-staff') ? 'active' : '' }}">
                                    <i class="fa-solid fa-chalkboard-user"></i>
                                    <span>Our Staff</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Programmes Dropdown Menu -->
                    <li class="adv-nav-item has-dropdown {{ request()->routeIs('academics', 'results') ? 'active' : '' }}">
                        <a href="{{ route('academics') }}" class="adv-nav-link" aria-haspopup="true" aria-expanded="false">
                            <span>Programmes</span>
                            <i class="fa-solid fa-chevron-down chevron-icon"></i>
                        </a>
                        <ul class="adv-dropdown">
                            <li class="adv-dropdown-item">
                                <a href="{{ route('academics') }}" class="adv-dropdown-link {{ request()->routeIs('academics') ? 'active' : '' }}">
                                    <i class="fa-solid fa-graduation-cap"></i>
                                    <span>Academics</span>
                                </a>
                            </li>
                            <li class="adv-dropdown-item">
                                <a href="{{ route('results') }}" class="adv-dropdown-link {{ request()->routeIs('results') ? 'active' : '' }}">
                                    <i class="fa-solid fa-square-poll-vertical"></i>
                                    <span>Results</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Admissions Dropdown Menu -->
                    <li class="adv-nav-item has-dropdown {{ request()->routeIs('admission-info', 'online-registration', 'fee-structure') ? 'active' : '' }}">
                        <a href="{{ route('admission-info') }}" class="adv-nav-link" aria-haspopup="true" aria-expanded="false">
                            <span>Admissions</span>
                            <i class="fa-solid fa-chevron-down chevron-icon"></i>
                        </a>
                        <ul class="adv-dropdown">
                            <li class="adv-dropdown-item">
                                <a href="{{ route('admission-info') }}" class="adv-dropdown-link {{ request()->routeIs('admission-info') ? 'active' : '' }}">
                                    <i class="fa-solid fa-circle-info"></i>
                                    <span>Admission Info</span>
                                </a>
                            </li>
                            <li class="adv-dropdown-item">
                                <a href="{{ route('online-registration') }}" class="adv-dropdown-link {{ request()->routeIs('online-registration') ? 'active' : '' }}">
                                    <i class="fa-solid fa-file-pen"></i>
                                    <span>Online Registration</span>
                                </a>
                            </li>
                            <li class="adv-dropdown-item">
                                <a href="{{ route('fee-structure') }}" class="adv-dropdown-link {{ request()->routeIs('fee-structure') ? 'active' : '' }}">
                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                    <span>Fee Structure</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Facilities Link -->
                    <li class="adv-nav-item {{ request()->routeIs('facilities') ? 'active' : '' }}">
                        <a href="{{ route('facilities') }}" class="adv-nav-link">
                            <span>Facilities</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Center Brand Crest Pod with Seamless Sculpted Shoulder Wings -->
            <div class="adv-nav-brand-pod">
                <a href="{{ route('home') }}" class="adv-brand-badge-pod" title="Advaita School of Excellence">
                    <svg class="adv-brand-crest-svg" viewBox="0 0 244 92" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" aria-hidden="true">
                        <defs>
                            <filter id="advCrestShadow" x="-20%" y="-10%" width="140%" height="130%">
                                <feDropShadow dx="0" dy="5" stdDeviation="5" flood-color="#021B3B" flood-opacity="0.14"/>
                            </filter>
                        </defs>
                        <path d="M 24 12 C 24 5 30 2 38 2 H 206 C 214 2 220 5 220 12 L 210 74 C 208 82 202 88 192 88 H 52 C 42 88 36 82 34 74 Z" fill="#FFFFFF" filter="url(#advCrestShadow)"/>
                        <path d="M 4 16 C 9 16 14 10 17 6 C 20 3 23 5 24 9 C 25 18 28 48 34 72" stroke="#F37021" stroke-width="3.5" stroke-linecap="round"/>
                        <path d="M 240 16 C 235 16 230 10 227 6 C 224 3 221 5 220 9 C 219 18 216 48 210 72" stroke="#F37021" stroke-width="3.5" stroke-linecap="round"/>
                    </svg>
                    <img src="{{ asset('assets/images/logo-cropped.png') }}" alt="Advaita School of Excellence" class="adv-brand-logo-pod-img">
                </a>
            </div>

            <!-- Right Desktop Menu -->
            <div class="adv-nav-section adv-nav-section-right">
                <ul class="adv-nav-menu adv-nav-menu-right">
                    <li class="adv-nav-item {{ request()->routeIs('gallery') ? 'active' : '' }}">
                        <a href="{{ route('gallery') }}" class="adv-nav-link">
                            <span>Gallery</span>
                        </a>
                    </li>
                    <li class="adv-nav-item {{ request()->routeIs('blog') ? 'active' : '' }}">
                        <a href="{{ route('blog') }}" class="adv-nav-link">
                            <span>Blog</span>
                        </a>
                    </li>
                    <li class="adv-nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                        <a href="{{ route('contact') }}" class="adv-nav-link">
                            <span>Contact</span>
                        </a>
                    </li>
                    <li class="adv-nav-item {{ request()->routeIs('mandatory-disclosure') ? 'active' : '' }}">
                        <a href="{{ route('mandatory-disclosure') }}" class="adv-nav-link">
                            <span>Mandatory Disclosure</span>
                        </a>
                    </li>
                </ul>

                <!-- Apply for Admission Pill CTA Button -->
                <a href="{{ route('online-registration') }}" class="adv-nav-apply-btn">
                    <span>Apply for Admission</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- Tablet / Mobile Actions -->
            <div class="adv-mobile-actions">
                <a href="{{ route('online-registration') }}" class="adv-tablet-cta">
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
    <div class="adv-mobile-header">
        <div class="adv-mobile-brand-box">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Advaita School Logo" class="adv-brand-logo-img">
        </div>
        <button type="button" class="adv-mobile-close" id="advDrawerCloseBtn" aria-label="Close Navigation Menu">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

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

    <ul class="adv-mobile-menu">
        <li class="adv-mobile-item">
            <a href="{{ route('home') }}" class="adv-mobile-link {{ request()->routeIs('home') ? 'active' : '' }}">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-house"></i>
                    <span>Home</span>
                </span>
            </a>
        </li>

        <li class="adv-mobile-item has-children {{ request()->routeIs('about-us', 'our-staff', 'chairmans-desk', 'principals-desk', 'vision-mission') ? 'is-active' : '' }}">
            <a href="#" class="adv-mobile-link" role="button" aria-expanded="false">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>About Us</span>
                </span>
                <i class="fa-solid fa-chevron-down adv-mobile-chevron"></i>
            </a>
            <ul class="adv-mobile-submenu">
                <li>
                    <a href="{{ route('about-us') }}" class="adv-mobile-submenu-link {{ request()->routeIs('about-us') ? 'active' : '' }}">
                        <i class="fa-solid fa-circle-info"></i>
                        <span>About Us</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('vision-mission') }}" class="adv-mobile-submenu-link {{ request()->routeIs('vision-mission') ? 'active' : '' }}">
                        <i class="fa-solid fa-bullseye"></i>
                        <span>Vision &amp; Mission</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('chairmans-desk') }}" class="adv-mobile-submenu-link {{ request()->routeIs('chairmans-desk') ? 'active' : '' }}">
                        <i class="fa-solid fa-user-tie"></i>
                        <span>Chairman's Desk</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('principals-desk') }}" class="adv-mobile-submenu-link {{ request()->routeIs('principals-desk') ? 'active' : '' }}">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>Principal's Desk</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('our-staff') }}" class="adv-mobile-submenu-link {{ request()->routeIs('our-staff') ? 'active' : '' }}">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        <span>Our Staff</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="adv-mobile-item has-children {{ request()->routeIs('academics', 'results') ? 'is-active' : '' }}">
            <a href="#" class="adv-mobile-link" role="button" aria-expanded="false">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-book-open-reader"></i>
                    <span>Programmes</span>
                </span>
                <i class="fa-solid fa-chevron-down adv-mobile-chevron"></i>
            </a>
            <ul class="adv-mobile-submenu">
                <li>
                    <a href="{{ route('academics') }}" class="adv-mobile-submenu-link {{ request()->routeIs('academics') ? 'active' : '' }}">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>Academics</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('results') }}" class="adv-mobile-submenu-link {{ request()->routeIs('results') ? 'active' : '' }}">
                        <i class="fa-solid fa-square-poll-vertical"></i>
                        <span>Results</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="adv-mobile-item has-children {{ request()->routeIs('admission-info', 'online-registration', 'fee-structure') ? 'is-active' : '' }}">
            <a href="#" class="adv-mobile-link" role="button" aria-expanded="false">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <span>Admissions</span>
                </span>
                <i class="fa-solid fa-chevron-down adv-mobile-chevron"></i>
            </a>
            <ul class="adv-mobile-submenu">
                <li>
                    <a href="{{ route('admission-info') }}" class="adv-mobile-submenu-link {{ request()->routeIs('admission-info') ? 'active' : '' }}">
                        <i class="fa-solid fa-circle-info"></i>
                        <span>Admission Info</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('online-registration') }}" class="adv-mobile-submenu-link {{ request()->routeIs('online-registration') ? 'active' : '' }}">
                        <i class="fa-solid fa-file-pen"></i>
                        <span>Online Registration</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('fee-structure') }}" class="adv-mobile-submenu-link {{ request()->routeIs('fee-structure') ? 'active' : '' }}">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                        <span>Fee Structure</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="adv-mobile-item {{ request()->routeIs('facilities') ? 'active' : '' }}">
            <a href="{{ route('facilities') }}" class="adv-mobile-link">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-school"></i>
                    <span>Facilities</span>
                </span>
            </a>
        </li>

        <li class="adv-mobile-item {{ request()->routeIs('gallery') ? 'active' : '' }}">
            <a href="{{ route('gallery') }}" class="adv-mobile-link">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-camera-retro"></i>
                    <span>Gallery</span>
                </span>
            </a>
        </li>

        <li class="adv-mobile-item {{ request()->routeIs('blog') ? 'active' : '' }}">
            <a href="{{ route('blog') }}" class="adv-mobile-link">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-newspaper"></i>
                    <span>Blog</span>
                </span>
            </a>
        </li>

        <li class="adv-mobile-item {{ request()->routeIs('contact') ? 'active' : '' }}">
            <a href="{{ route('contact') }}" class="adv-mobile-link">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-envelope"></i>
                    <span>Contact</span>
                </span>
            </a>
        </li>

        <li class="adv-mobile-item {{ request()->routeIs('mandatory-disclosure') ? 'active' : '' }}">
            <a href="{{ route('mandatory-disclosure') }}" class="adv-mobile-link">
                <span class="adv-mobile-link-text">
                    <i class="fa-solid fa-file-shield"></i>
                    <span>Mandatory Disclosure</span>
                </span>
            </a>
        </li>
    </ul>

    <div class="adv-mobile-footer">
        <a href="{{ route('online-registration') }}" class="adv-mobile-cta">
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
            Sanmati Education Network &copy; {{ date('Y') }}
        </div>
    </div>
</aside>
