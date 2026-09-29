<?php
/**
 * Contact Us Page - Advaita School of Excellence
 * Premium Layout matching the Official Design Mockup
 * CBSE Affiliated (Affiliation No. 1130920)
 * Clean Semantic HTML - Header and Footer Preserved
 */
$pageTitle = "Contact Us - Advaita School of Excellence | We'd Love to Hear From You";
$activePage = "contact";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper contact-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: We'd love to hear from you.
         ========================================================================= -->
    <section class="contact-hero-section">
        <div class="contact-hero-canvas">
            <!-- Background Image & Sky on the Right -->
            <div class="contact-hero-bg-visual" aria-hidden="true">
                <img src="assets/images/about-hero-building.jpg" alt="Advaita School of Excellence Campus" class="contact-hero-bg-img" loading="eager">
                
                <!-- Floating Script Badge in Sky -->
                <div class="contact-hero-script-tag">
                    <span class="script-title">More<br>Than A School</span>
                    <svg class="script-underline" viewBox="0 0 140 18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M4 10C36 4 98 4 136 12" stroke="#F37021" stroke-width="3.5" stroke-linecap="round"/>
                        <path d="M18 14C48 9 92 8 126 15" stroke="#F37021" stroke-width="2.5" stroke-linecap="round" opacity="0.75"/>
                    </svg>
                </div>
            </div>

            <!-- Full Width Wave Mask Overlay with ambient blue contour -->
            <div class="contact-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1440 480" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="contactWaveGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#0284C7"/>
                            <stop offset="50%" stop-color="#38BDF8"/>
                            <stop offset="100%" stop-color="#60A5FA"/>
                        </linearGradient>
                    </defs>
                    <!-- Ambient soft blue aura at far left -->
                    <path d="M0,60 C90,60 140,160 140,260 C140,360 85,430 0,450 Z" fill="#E8F4FE" opacity="0.85"/>
                    <!-- Outer vibrant sky-blue contour wave -->
                    <path d="M0,0 L615,0 C680,110 720,230 685,330 C655,410 590,455 535,480 L0,480 Z" fill="url(#contactWaveGrad)" opacity="0.95"/>
                    <!-- Mid soft blue contour wave -->
                    <path d="M0,0 L600,0 C665,110 705,230 670,330 C640,410 575,455 520,480 L0,480 Z" fill="#BAE6FD"/>
                    <!-- Main solid white wave panel covering left side completely -->
                    <path d="M0,0 L585,0 C650,110 690,230 655,330 C625,410 560,455 505,480 L0,480 Z" fill="#FFFFFF"/>
                </svg>
            </div>

            <!-- Left Dot Matrix Ambient Decor -->
            <div class="contact-hero-dots-decor" aria-hidden="true"></div>

            <!-- Left Content Panel -->
            <div class="contact-hero-left-panel">
                <div class="contact-hero-content-inner">
                    <!-- Breadcrumbs -->
                    <nav class="contact-breadcrumb" aria-label="Breadcrumb">
                        <a href="index.php">Home</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Contact Us</span>
                    </nav>

                    <div class="contact-eyebrow">— GET IN TOUCH —</div>

                    <h1 class="contact-hero-title">
                        We'd love to<br>
                        <span class="contact-highlight-serif">hear from you.</span>
                    </h1>

                    <p class="contact-hero-desc">
                        Admissions, academics, or just a friendly hello — our team is always here to help.
                    </p>
                </div>
            </div>
        </div>

        <!-- =========================================================================
             2. 4 FLOATING QUICK CONTACT CARDS STRIP
             ========================================================================= -->
        <div class="contact-quick-cards-wrapper">
            <div class="contact-quick-cards-grid">
                
                <!-- Quick Card 1: Call Us -->
                <div class="contact-quick-card">
                    <div class="quick-card-top">
                        <div class="quick-card-icon icon-orange" aria-hidden="true">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="quick-card-info">
                            <span class="quick-card-label">Call Us</span>
                            <a href="tel:09413062851" class="quick-card-value">094130 62851</a>
                            <span class="quick-card-meta">Mon – Sat | 8:00 AM – 5:00 PM</span>
                        </div>
                    </div>
                    <a href="tel:09413062851" class="quick-card-btn btn-orange" aria-label="Call admissions at 094130 62851">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Quick Card 2: WhatsApp -->
                <div class="contact-quick-card">
                    <div class="quick-card-top">
                        <div class="quick-card-icon icon-green" aria-hidden="true">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div class="quick-card-info">
                            <span class="quick-card-label">WhatsApp</span>
                            <a href="https://wa.me/919413062851" target="_blank" rel="noopener noreferrer" class="quick-card-value">Chat with us</a>
                            <span class="quick-card-meta">Reply within minutes</span>
                        </div>
                    </div>
                    <a href="https://wa.me/919413062851" target="_blank" rel="noopener noreferrer" class="quick-card-btn btn-green" aria-label="Chat with school admissions on WhatsApp">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Quick Card 3: Email Us -->
                <div class="contact-quick-card">
                    <div class="quick-card-top">
                        <div class="quick-card-icon icon-purple" aria-hidden="true">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="quick-card-info">
                            <span class="quick-card-label">Email Us</span>
                            <a href="mailto:info@pisjodhpur.com" class="quick-card-value">info@pisjodhpur.com</a>
                            <span class="quick-card-meta">Reply in a working day</span>
                        </div>
                    </div>
                    <a href="mailto:info@pisjodhpur.com" class="quick-card-btn btn-purple" aria-label="Send an email to info@pisjodhpur.com">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Quick Card 4: Online Register -->
                <div class="contact-quick-card">
                    <div class="quick-card-top">
                        <div class="quick-card-icon icon-pink" aria-hidden="true">
                            <i class="fa-solid fa-user-graduate"></i>
                        </div>
                        <div class="quick-card-info">
                            <span class="quick-card-label">Online Register</span>
                            <a href="index.php#admissions" class="quick-card-value">Admissions 2026–27 Open</a>
                            <span class="quick-card-meta">Admissions 2026–27 Open</span>
                        </div>
                    </div>
                    <a href="index.php#admissions" class="quick-card-btn btn-pink" aria-label="Go to online admission registration">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. MAIN TWO-COLUMN SECTION: Ways to Reach Us (Left) + Enquiry Form (Right)
         ========================================================================= -->
    <section class="contact-main-section">
        <div class="contact-main-container">
            <div class="contact-columns-grid">

                <!-- Left Column: Ways to reach us & Office details -->
                <div class="contact-info-col">
                    <span class="contact-sub-eyebrow">— VISIT · CALL · WRITE —</span>
                    <h2 class="contact-section-heading">
                        A few ways to <span class="contact-highlight-serif">reach us.</span>
                    </h2>
                    <p class="contact-section-subtext">
                        The Director's door is always open. Walk in, write to, or call — whichever feels easier.
                    </p>

                    <!-- Contact Details Cards List -->
                    <div class="contact-channels-list">

                        <!-- Item 1: Campus Address -->
                        <div class="contact-channel-card">
                            <div class="channel-icon-wrap icon-bg-orange">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="channel-content">
                                <span class="channel-title">Campus Address</span>
                                <p class="channel-text">
                                    Plot no 3, Laxmi Vihar Rd, Basni First Phase, Sector-C, Basni, Jodhpur, Rajasthan 342005
                                </p>
                                <a href="https://maps.google.com/?q=Advaita+School+of+Excellence+Basni+Jodhpur" target="_blank" rel="noopener noreferrer" class="channel-link orange-link">
                                    <span>View on Google Maps</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Item 2: Phone & Admissions -->
                        <div class="contact-channel-card">
                            <div class="channel-icon-wrap icon-bg-mint">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="channel-content">
                                <span class="channel-title">Phone &amp; Admissions</span>
                                <a href="tel:09413062851" class="channel-highlight-phone">094130 62851</a>
                                <span class="channel-time-sub">Mon – Sat: 8:00 AM – 5:00 PM</span>
                            </div>
                        </div>

                        <!-- Item 3: Email Us -->
                        <div class="contact-channel-card">
                            <div class="channel-icon-wrap icon-bg-lavender">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="channel-content">
                                <span class="channel-title">Email Us</span>
                                <a href="mailto:info@pisjodhpur.com" class="channel-highlight-email">info@pisjodhpur.com</a>
                                <span class="channel-time-sub">For admissions, academics or partnerships</span>
                            </div>
                        </div>

                        <!-- Item 4: School Timings -->
                        <div class="contact-channel-card">
                            <div class="channel-icon-wrap icon-bg-rose">
                                <i class="fa-regular fa-clock"></i>
                            </div>
                            <div class="channel-content">
                                <span class="channel-title">School Timings</span>
                                <span class="channel-highlight-time">Monday – Saturday</span>
                                <span class="channel-time-sub">8:00 AM – 4:00 PM</span>
                            </div>
                        </div>

                    </div>

                    <!-- Social Channels Strip -->
                    <div class="contact-socials-block">
                        <span class="contact-socials-label">FIND US ELSEWHERE</span>
                        <div class="contact-social-buttons">
                            <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="contact-social-btn fb" aria-label="Advaita on Facebook" title="Facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="contact-social-btn insta" aria-label="Advaita on Instagram" title="Instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="contact-social-btn yt" aria-label="Advaita on YouTube" title="YouTube">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="contact-social-btn li" aria-label="Advaita on LinkedIn" title="LinkedIn">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Interactive Send a Message Form -->
                <div class="contact-form-col">
                    <div class="contact-form-card">
                        
                        <!-- Top Tag Badge -->
                        <div class="contact-form-badge">
                            <i class="fa-solid fa-paper-plane"></i>
                            <span>SEND A MESSAGE</span>
                        </div>

                        <!-- Form Card Heading -->
                        <h3 class="contact-form-heading">
                            Write to us — we'll <span class="contact-highlight-serif">get back.</span>
                        </h3>
                        <p class="contact-form-subheading">
                            Fill in a few details and our admissions counsellor will reach out within a working day.
                        </p>

                        <!-- Contact Form -->
                        <form id="advaitaContactForm" class="contact-actual-form" action="#" method="POST" novalidate>
                            
                            <!-- Row 1: Name and Phone -->
                            <div class="form-row-two-col">
                                <div class="form-field-group">
                                    <label for="formFullName" class="form-field-label">
                                        <i class="fa-regular fa-user"></i>
                                        <span>Your Name <span class="form-required-mark">*</span></span>
                                    </label>
                                    <input type="text" id="formFullName" name="name" class="form-input-control" placeholder="e.g. Aryan Mehta" required>
                                    <span class="field-error-text" id="nameError"></span>
                                </div>

                                <div class="form-field-group">
                                    <label for="formPhoneNumber" class="form-field-label">
                                        <i class="fa-solid fa-phone"></i>
                                        <span>Phone Number <span class="form-required-mark">*</span></span>
                                    </label>
                                    <input type="tel" id="formPhoneNumber" name="phone" class="form-input-control" placeholder="e.g. 9876543210" required>
                                    <span class="field-error-text" id="phoneError"></span>
                                </div>
                            </div>

                            <!-- Row 2: Email -->
                            <div class="form-field-group">
                                <label for="formEmailAddr" class="form-field-label">
                                    <i class="fa-regular fa-envelope"></i>
                                    <span>Email Address <span class="form-required-mark">*</span></span>
                                </label>
                                <input type="email" id="formEmailAddr" name="email" class="form-input-control" placeholder="e.g. parent@example.com" required>
                                <span class="field-error-text" id="emailError"></span>
                            </div>

                            <!-- Row 3: Subject Dropdown -->
                            <div class="form-field-group">
                                <label for="formSubjectSelect" class="form-field-label">
                                    <i class="fa-solid fa-folder-open"></i>
                                    <span>Subject <span class="form-required-mark">*</span></span>
                                </label>
                                <div class="custom-select-box">
                                    <select id="formSubjectSelect" name="subject" class="form-select-control" required>
                                        <option value="Admissions enquiry" selected>Admissions enquiry</option>
                                        <option value="Fee Structure Enquiry">Fee Structure Enquiry</option>
                                        <option value="Academic Curriculum & Foundation">Academic Curriculum &amp; Foundation</option>
                                        <option value="Campus Tour Booking">Campus Tour Booking</option>
                                        <option value="Career & Teaching Opportunities">Career &amp; Teaching Opportunities</option>
                                        <option value="General Inquiry">General Inquiry</option>
                                    </select>
                                    <i class="fa-solid fa-chevron-down select-arrow-icon" aria-hidden="true"></i>
                                </div>
                            </div>

                            <!-- Row 4: Message -->
                            <div class="form-field-group">
                                <label for="formUserMessage" class="form-field-label">
                                    <i class="fa-regular fa-message"></i>
                                    <span>Your Message <span class="form-required-mark">*</span></span>
                                </label>
                                <textarea id="formUserMessage" name="message" class="form-textarea-control" rows="4" placeholder="Tell us a little about what you'd like to know — we'll write back personally." required></textarea>
                                <span class="field-error-text" id="messageError"></span>
                            </div>

                            <!-- Submit Action & Privacy Note -->
                            <div class="form-actions-bar">
                                <button type="submit" class="contact-submit-btn" id="contactSubmitButton">
                                    <span class="btn-text">Send Message</span>
                                    <i class="fa-solid fa-arrow-right btn-icon"></i>
                                </button>

                                <div class="contact-privacy-note">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span>We respect your privacy. No spam, ever.</span>
                                </div>
                            </div>

                            <!-- Animated Success Toast Alert -->
                            <div class="contact-form-success-banner" id="contactFormSuccess" style="display: none;" role="alert">
                                <div class="success-icon"><i class="fa-solid fa-circle-check"></i></div>
                                <div class="success-info">
                                    <strong>Message Sent Successfully!</strong>
                                    <p>Thank you for reaching out. Our admissions counsellor will get back to you within 24 hours.</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. MAP SECTION: Come see the school in person.
         ========================================================================= -->
    <section class="contact-map-section" id="campus-map">
        <div class="contact-map-container">
            <div class="contact-map-header text-center">
                <span class="contact-sub-eyebrow">— FIND US IN JODHPUR —</span>
                <h2 class="contact-section-heading">
                    Come see the school <span class="contact-highlight-serif">in person.</span>
                </h2>
            </div>

            <!-- Map Interactive Display Frame -->
            <div class="contact-map-frame-wrap">
                <!-- Google Maps Embed -->
                <iframe 
                    class="contact-google-map-iframe"
                    src="https://maps.google.com/maps?q=Plot+no+3,+Laxmi+Vihar+Rd,+Basni+First+Phase,+Sector-C,+Basni,+Jodhpur,+Rajasthan+342005&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Advaita School of Excellence Jodhpur Location Map">
                </iframe>

                <!-- Floating School Information Card (Top-Left) -->
                <div class="map-floating-card">
                    <div class="map-card-head">
                        <div class="map-card-icon" aria-hidden="true">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div class="map-card-title-wrap">
                            <span class="map-card-name">Advaita School of Excellence</span>
                            <span class="map-card-tag">CBSE Affiliated Senior Secondary</span>
                        </div>
                    </div>

                    <p class="map-card-address">
                        Plot no 3, Laxmi Vihar Rd, Basni First Phase, Sector-C, Basni, Jodhpur, Rajasthan 342005
                    </p>

                    <div class="map-card-review-bar">
                        <span class="map-rating-badge">4.8</span>
                        <div class="map-rating-stars" aria-label="Rated 4.8 out of 5 stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                    </div>

                    <a href="https://maps.google.com/?q=Advaita+School+of+Excellence+Basni+Jodhpur" target="_blank" rel="noopener noreferrer" class="map-card-expand-link">
                        <span>View larger map</span>
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </div>

                <!-- Floating Get Directions Button (Bottom-Right) -->
                <div class="map-floating-action">
                    <a href="https://www.google.com/maps/dir//Advaita+School+of+Excellence+Basni+Jodhpur" target="_blank" rel="noopener noreferrer" class="map-directions-btn">
                        <span>Get Directions</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. PRE-FOOTER CTA BANNER: STILL HAVE QUESTIONS? Need more information?
         ========================================================================= -->
    <section class="contact-cta-section">
        <div class="contact-cta-container">
            <div class="contact-cta-banner-box">
                
                <!-- Left Details & Copy -->
                <div class="contact-cta-content-left">
                    <!-- Ambient Phone Icon Badge -->
                    <div class="contact-cta-phone-badge" aria-hidden="true">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>

                    <div class="contact-cta-text-wrap">
                        <span class="contact-cta-eyebrow">STILL HAVE QUESTIONS?</span>
                        <h2 class="contact-cta-headline">
                            Need more <span class="cta-highlight-serif">information?</span>
                        </h2>
                        <p class="contact-cta-description">
                            Our admissions team is happy to help you with any queries regarding admissions, fee structure, or campus visit.
                        </p>
                    </div>
                </div>

                <!-- Center Action Buttons -->
                <div class="contact-cta-buttons-wrap">
                    <a href="tel:09413062851" class="cta-action-btn cta-btn-call">
                        <i class="fa-solid fa-phone"></i>
                        <span>Call the Admissions Team</span>
                    </a>

                    <a href="https://wa.me/919413062851" target="_blank" rel="noopener noreferrer" class="cta-action-btn cta-btn-whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>Chat on WhatsApp</span>
                    </a>
                </div>

                <!-- Right Student Pointing Visual Cutout -->
                <div class="contact-cta-student-cutout" aria-hidden="true">
                    <img src="assets/images/contact-student-pointing-transparent.png" alt="Advaita Student Guide" class="contact-cta-student-photo" loading="lazy">
                </div>

            </div>
        </div>
    </section>

</main>

<!-- Page Specific JavaScript for Form Validation & Interactions -->
<script src="assets/js/contact.js?v=<?php echo filemtime(__DIR__ . '/assets/js/contact.js'); ?>"></script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
