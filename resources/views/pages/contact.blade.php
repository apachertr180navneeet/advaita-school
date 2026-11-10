@extends('layouts.app')

@section('title', "Advaita School of Excellence")

@section('content')
<main id="main" class="main-content-wrapper contact-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: We'd love to hear from you.
         ========================================================================= -->
    <section class="contact-hero-section">
        <div class="contact-hero-canvas contact-hero-centered-canvas">
            <div class="contact-hero-ambient-glow" aria-hidden="true"></div>

            <!-- Centered Content Panel -->
            <div class="contact-hero-center-panel">
                <div class="contact-hero-content-inner">
                    <!-- Breadcrumbs (Centered) -->
                    <nav class="contact-breadcrumb contact-breadcrumb-center" aria-label="Breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Contact Us</span>
                    </nav>

                    <!-- Eyebrow Pill -->
                    <div class="contact-eyebrow-pill">
                        <i class="fa-solid fa-headset text-orange"></i>
                        <span>GET IN TOUCH</span>
                    </div>

                    <h1 class="contact-hero-title">
                        We'd Love to <span class="contact-highlight-serif">Hear From You.</span>
                    </h1>

                    <p class="contact-hero-desc">
                        Admissions, academics, or just a friendly hello — our dedicated administrative and leadership team is always here to help you every step of the way.
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
                            <a href="tel:+919689898973" class="quick-card-value">+91 9689898973</a>
                            <span class="quick-card-meta">Mon – Sat | 8:00 AM – 3:00 PM</span>
                        </div>
                    </div>
                    <a href="tel:+919689898973" class="quick-card-btn btn-orange" aria-label="Call admissions at +91 9689898973">
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
                            <a href="https://wa.me/919689898973" target="_blank" rel="noopener noreferrer" class="quick-card-value">Chat with us</a>
                            <span class="quick-card-meta">Reply within minutes</span>
                        </div>
                    </div>
                    <a href="https://wa.me/919689898973" target="_blank" rel="noopener noreferrer" class="quick-card-btn btn-green" aria-label="Chat with school admissions on WhatsApp">
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
                            <a href="mailto:admissions.advaita@gmail.com" class="quick-card-value" style="font-size: 0.95rem;">admissions.advaita@gmail.com</a>
                            <span class="quick-card-meta">admissions.advaita@gmail.com &bull; principal.advaita2019@gmail.com</span>
                        </div>
                    </div>
                    <a href="mailto:admissions.advaita@gmail.com" class="quick-card-btn btn-purple" aria-label="Send an email to admissions.advaita@gmail.com">
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
                            <a href="{{ route('home') }}#admissions" class="quick-card-value">Admissions Open</a>
                            <span class="quick-card-meta">Play Group to Class X</span>
                        </div>
                    </div>
                    <a href="{{ route('home') }}#admissions" class="quick-card-btn btn-pink" aria-label="Go to online admission registration">
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
                    <span class="contact-sub-eyebrow">VISIT · CALL · WRITE</span>
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
                                    394, Madhav Nagar, Gangakhed Rd, Brahmangaon, Tq. Dist. Parbhani (MS)
                                </p>
                                <a href="https://www.google.com/maps/search/?api=1&query=394,+Madhav+Nagar,+Gangakhed+Rd,+Brahmangaon,+Parbhani" target="_blank" rel="noopener noreferrer" class="channel-link orange-link">
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
                                <a href="tel:+919689898973" class="channel-highlight-phone">+91 9689898973</a>
                                <span class="channel-time-sub">Mon – Sat: 8:00 AM – 3:00 PM</span>
                            </div>
                        </div>

                        <!-- Item 3: Email Us -->
                        <div class="contact-channel-card">
                            <div class="channel-icon-wrap icon-bg-lavender">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="channel-content">
                                <span class="channel-title">Email Us</span>
                                <a href="mailto:admissions.advaita@gmail.com" class="channel-highlight-email">admissions.advaita@gmail.com</a>
                                <a href="mailto:principal.advaita2019@gmail.com" class="channel-highlight-email" style="margin-top: 4px; display: block;">principal.advaita2019@gmail.com</a>
                                <span class="channel-time-sub">For admissions, academics or official correspondence</span>
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
                                <span class="channel-time-sub">8:00 AM – 3:00 PM</span>
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
                        <form id="advaitaContactForm" class="contact-actual-form" action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            
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
                            <div class="contact-form-success-banner fee-table-hidden" id="contactFormSuccess" role="alert">
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
                <span class="contact-sub-eyebrow">FIND US IN PARBHANI</span>
                <h2 class="contact-section-heading">
                    Come see the school <span class="contact-highlight-serif">in person.</span>
                </h2>
            </div>

            <!-- Map Interactive Display Frame -->
            <div class="contact-map-frame-wrap">
                <!-- Google Maps Embed -->
                <iframe 
                    class="contact-google-map-iframe"
                    src="https://maps.google.com/maps?q=394,+Madhav+Nagar,+Gangakhed+Rd,+Brahmangaon,+Parbhani&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                    width="100%" 
                    height="100%" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Advaita School of Excellence Parbhani Location Map">
                </iframe>

                <!-- Floating School Information Card (Top-Left) -->
                <div class="map-floating-card">
                    <div class="map-card-head">
                        <div class="map-card-icon" aria-hidden="true">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div class="map-card-title-wrap">
                            <span class="map-card-name">Advaita School of Excellence</span>
                            <span class="map-card-tag">CBSE Affiliated School &bull; Play Group to Class X</span>
                        </div>
                    </div>

                    <p class="map-card-address">
                        394, Madhav Nagar, Gangakhed Rd, Brahmangaon, Tq. Dist. Parbhani (MS)
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

                    <a href="https://www.google.com/maps/search/?api=1&query=394,+Madhav+Nagar,+Gangakhed+Rd,+Brahmangaon,+Parbhani" target="_blank" rel="noopener noreferrer" class="map-card-expand-link">
                        <span>View larger map</span>
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </div>

                <!-- Floating Get Directions Button (Bottom-Right) -->
                <div class="map-floating-action">
                    <a href="https://www.google.com/maps/search/?api=1&query=394,+Madhav+Nagar,+Gangakhed+Rd,+Brahmangaon,+Parbhani" target="_blank" rel="noopener noreferrer" class="map-directions-btn">
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
                    <a href="tel:+919689898973" class="cta-action-btn cta-btn-call">
                        <i class="fa-solid fa-phone"></i>
                        <span>Call the Admissions Team</span>
                    </a>

                    <a href="https://wa.me/919689898973" target="_blank" rel="noopener noreferrer" class="cta-action-btn cta-btn-whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>Chat on WhatsApp</span>
                    </a>
                </div>

                <!-- Right Student Pointing Visual Cutout -->
                <div class="contact-cta-student-cutout" aria-hidden="true">
                    <img src="{{ asset('assets/images/contact-student-pointing-transparent.png') }}" alt="Advaita Student Guide" class="contact-cta-student-photo" loading="lazy">
                </div>

            </div>
        </div>
    </section>

</main>

<!-- Page Specific JavaScript for Form Validation & Interactions -->
<script src="{{ asset('assets/js/contact.js') }}"></script>
@endsection
