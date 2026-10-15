<!-- Sticky Side Quick Action Pill -->
<a href="{{ route('online-registration') }}" class="adv-sticky-enquiry-pill" title="Admissions Enquiry">
    <span>ENQUIRE NOW</span>
</a>

<!-- Main Footer Wrapper -->
<footer class="adv-footer-wrapper" id="contact" aria-label="Footer Navigation">
    <div class="adv-footer-main">
        <div class="adv-container adv-footer-container">
            <!-- Column 1: School Brand & Identity -->
            <div class="adv-footer-brand-col">
                <a href="{{ route('home') }}" class="adv-footer-logo-link" title="Advaita School of Excellence">
                    <img src="{{ asset('assets/images/footer-logo-white.png') }}" alt="Advaita School of Excellence Logo" class="adv-footer-logo-img">
                </a>
                
                <p class="adv-footer-bio">
                    A modern learning community nurturing curious minds, principled leaders, and lifelong learners through academic excellence, creativity, compassion, confidence, and meaningful educational experiences.
                </p>
                
                <div class="adv-footer-socials" aria-label="Social media channels">
                    <a href="{{ \App\Models\Setting::get('site_instagram_url', 'https://instagram.com') }}" target="_blank" rel="noopener noreferrer" class="adv-footer-social-btn instagram" title="Instagram" aria-label="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="{{ \App\Models\Setting::get('site_facebook_url', 'https://facebook.com') }}" target="_blank" rel="noopener noreferrer" class="adv-footer-social-btn facebook" title="Facebook" aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="{{ \App\Models\Setting::get('site_youtube_url', 'https://youtube.com') }}" target="_blank" rel="noopener noreferrer" class="adv-footer-social-btn youtube" title="YouTube" aria-label="YouTube">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="{{ \App\Models\Setting::get('site_linkedin_url', 'https://linkedin.com') }}" target="_blank" rel="noopener noreferrer" class="adv-footer-social-btn linkedin" title="LinkedIn" aria-label="LinkedIn">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <!-- Column 2: Explore Links -->
            <div class="adv-footer-col">
                <h3 class="adv-footer-col-title">Explore</h3>
                <ul class="adv-footer-links-list">
                    <li><a href="{{ route('home') }}" class="adv-footer-link">Home</a></li>
                    <li><a href="{{ route('about-us') }}" class="adv-footer-link">About Us</a></li>
                    <li><a href="{{ route('vision-mission') }}" class="adv-footer-link">Vision &amp; Mission</a></li>
                    <li><a href="{{ route('chairmans-desk') }}" class="adv-footer-link">Chairman's Desk</a></li>
                    <li><a href="{{ route('principals-desk') }}" class="adv-footer-link">Principal's Message</a></li>
                    <li><a href="{{ route('our-staff') }}" class="adv-footer-link">Our Faculty</a></li>
                    <li><a href="{{ route('academics') }}" class="adv-footer-link">Academics</a></li>
                    <li><a href="{{ route('results') }}" class="adv-footer-link">Board Results</a></li>
                    <li><a href="{{ route('admission-info') }}" class="adv-footer-link">Admissions</a></li>
                    <li><a href="{{ route('facilities') }}" class="adv-footer-link">Facilities</a></li>
                    <li><a href="{{ route('contact') }}" class="adv-footer-link">Contact Us</a></li>
                    <li><a href="{{ route('mandatory-disclosure') }}" class="adv-footer-link">Mandatory Public Disclosure</a></li>
                </ul>
            </div>

            <!-- Column 3: Quick Links -->
            <div class="adv-footer-col">
                <h3 class="adv-footer-col-title">Quick Links</h3>
                <ul class="adv-footer-links-list">
                    <li><a href="{{ route('admission-info') }}" class="adv-footer-link">Admission Info</a></li>
                    <li><a href="{{ route('online-registration') }}" class="adv-footer-link">Online Registration</a></li>
                    <li><a href="{{ route('fee-structure') }}" class="adv-footer-link">Fee Structure</a></li>
                    <li><a href="{{ route('mandatory-disclosure') }}" class="adv-footer-link">School Policies</a></li>
                    <li><a href="{{ route('gallery') }}" class="adv-footer-link">Gallery</a></li>
                    <li><a href="{{ route('blog') }}" class="adv-footer-link">Blog &amp; News</a></li>
                    <li><a href="{{ route('contact') }}" class="adv-footer-link">Campus Map &amp; Visit</a></li>
                </ul>
            </div>

            <!-- Column 4: Get in Touch -->
            <div class="adv-footer-col adv-footer-touch-col">
                <h3 class="adv-footer-col-title">Get in Touch</h3>
                <div class="adv-footer-contact-list">
                    <div class="adv-footer-touch-item">
                        <div class="adv-footer-touch-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="adv-footer-touch-content">
                            <span class="touch-label">Campus</span>
                            <span class="touch-text">
                                {{ \App\Models\Setting::get('site_address', 'Near Sanmati Campus, Jintur Road, Parbhani, Maharashtra – 431401') }}
                            </span>
                        </div>
                    </div>

                    <div class="adv-footer-touch-item">
                        <div class="adv-footer-touch-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="adv-footer-touch-content">
                            <span class="touch-label">Phone</span>
                            <a href="tel:{{ \App\Models\Setting::get('site_phone_primary', '094130 62851') }}" class="touch-link">
                                {{ \App\Models\Setting::get('site_phone_primary', '094130 62851') }} / {{ \App\Models\Setting::get('site_landline', '02452-224455') }}
                            </a>
                        </div>
                    </div>

                    <div class="adv-footer-touch-item">
                        <div class="adv-footer-touch-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="adv-footer-touch-content">
                            <span class="touch-label">Email</span>
                            <a href="mailto:{{ \App\Models\Setting::get('site_email_primary', 'info@advaitaschool.edu.in') }}" class="touch-link">
                                {{ \App\Models\Setting::get('site_email_primary', 'info@advaitaschool.edu.in') }}
                            </a>
                        </div>
                    </div>

                    <div class="adv-footer-touch-item">
                        <div class="adv-footer-touch-icon">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <div class="adv-footer-touch-content">
                            <span class="touch-label">School Hours</span>
                            <span class="touch-text">{{ \App\Models\Setting::get('site_school_hours', 'Mon – Sat | 8:00 AM – 3:00 PM') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column 5: Google Map Card -->
            <div class="adv-footer-map-col">
                <div class="adv-footer-map-card">
                    <div class="adv-footer-map-iframe-wrap">
                        <iframe 
                            src="{{ \App\Models\Setting::get('site_google_map_embed', 'https://maps.google.com/maps?q=Advaita+School+of+Excellence,+Parbhani&t=&z=15&ie=UTF8&iwloc=&output=embed') }}" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Advaita School of Excellence Parbhani on Google Maps">
                        </iframe>
                    </div>
                    <a href="{{ \App\Models\Setting::get('site_google_map_link', 'https://www.google.com/maps/place/Advaita+School+of+Excellence/@19.2634,76.7749,17z/') }}" target="_blank" rel="noopener noreferrer" class="adv-footer-map-btn">
                        <span>View on Google Maps</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Copyright Strip -->
    <div class="adv-footer-bottom-strip">
        <div class="adv-container adv-footer-bottom-container">
            <div class="adv-footer-copy-text">
                <span>&copy; {{ date('Y') }} Advaita School of Excellence, Parbhani. All rights reserved.</span>
            </div>
            <div class="adv-footer-legal-links">
                <a href="{{ route('home') }}" class="adv-legal-link">Privacy Policy</a>
                <span class="adv-legal-sep">|</span>
                <a href="{{ route('home') }}" class="adv-legal-link">Terms &amp; Conditions</a>
                <span class="adv-legal-sep">|</span>
                <a href="{{ route('home') }}" class="adv-legal-link">Sitemap</a>
            </div>
            <div class="adv-footer-credit">
                <span>Made in India with <i class="fa-solid fa-heart adv-footer-heart" aria-label="love"></i> by <a href="https://www.digiyog.com" target="_blank" rel="noopener noreferrer" class="adv-credit-link" title="Visit Digiyog Technosoft">Digiyog Technosoft</a></span>
            </div>
        </div>
    </div>
</footer>
