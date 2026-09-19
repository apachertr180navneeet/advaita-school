<?php
/**
 * Contact Us Page - Advaita School of Excellence
 * Clean Semantic HTML - Strictly No Inline CSS
 */
$pageTitle = "Contact Us - Advaita School of Excellence, Parbhani · CBSE Affiliated (No. 1130920)";
$activePage = "contact";

$formSuccess = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formSuccess = true;
}

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper">

    <!-- Page Banner -->
    <section class="adv-page-banner" aria-label="Page Header">
        <div class="adv-container">
            <div class="adv-banner-content">
                <span class="adv-banner-eyebrow">
                    <i class="fa-solid fa-location-dot"></i> REACH OUT TO US
                </span>
                <h1 class="adv-banner-title">Contact & Campus Location</h1>
                <p class="adv-banner-desc">
                    We welcome parents, prospective students, and visitors to connect with our administrative and admissions team.
                </p>
                <ul class="adv-breadcrumb">
                    <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li class="adv-breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                    <li class="adv-breadcrumb-active">Contact Us</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Main Content Layout -->
    <section class="adv-inner-layout">
        <div class="adv-container">
            
            <?php if ($formSuccess): ?>
                <div class="adv-alert-success">
                    <i class="fa-solid fa-circle-check"></i>
                    <div>
                        <h4>Thank you! Your inquiry has been received.</h4>
                        <p>Our admissions counselor will contact you within 24 hours.</p>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Contact Information Cards -->
            <div class="adv-contact-cards">
                
                <div class="adv-contact-card">
                    <div class="adv-contact-icon blue">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <h3>Campus Address</h3>
                    <p>
                        Sanmati Campus, Near Highway Ring Road, Parbhani, Maharashtra – 431401, India
                    </p>
                </div>

                <div class="adv-contact-card">
                    <div class="adv-contact-icon orange">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <h3>Phone Helpline</h3>
                    <p>
                        Admissions: <a href="tel:+919876543210">+91 98765 43210</a><br>
                        Reception: <a href="tel:02452234567">02452-234567</a>
                    </p>
                </div>

                <div class="adv-contact-card">
                    <div class="adv-contact-icon green">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <h3>Email Inquiries</h3>
                    <p>
                        General: <a href="mailto:info@advaitaschool.edu.in">info@advaitaschool.edu.in</a><br>
                        Admissions: <a href="mailto:admissions@advaitaschool.edu.in">admissions@advaitaschool.edu.in</a>
                    </p>
                </div>

                <div class="adv-contact-card">
                    <div class="adv-contact-icon purple">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <h3>Office Hours</h3>
                    <p>
                        Monday – Saturday: 8:00 AM – 3:30 PM<br>
                        Sunday: Closed
                    </p>
                </div>

            </div>

            <!-- Two-Column Form & Map Layout -->
            <div class="adv-contact-layout">
                
                <!-- Inquiry Form -->
                <div class="adv-form-card">
                    <h3>Send Us a Message</h3>
                    <p class="adv-form-desc">Please fill out the form below and we will get back to you promptly.</p>
                    
                    <form action="contact.php" method="POST" class="adv-form-col">
                        <div class="adv-form-group">
                            <label class="adv-form-label">Your Name *</label>
                            <input type="text" name="name" required placeholder="Full Name" class="adv-form-input">
                        </div>
                        <div class="adv-form-group">
                            <label class="adv-form-label">Phone Number *</label>
                            <input type="tel" name="phone" required placeholder="Mobile / WhatsApp Number" class="adv-form-input">
                        </div>
                        <div class="adv-form-group">
                            <label class="adv-form-label">Email Address</label>
                            <input type="email" name="email" placeholder="email@example.com" class="adv-form-input">
                        </div>
                        <div class="adv-form-group">
                            <label class="adv-form-label">Subject / Purpose</label>
                            <select name="subject" class="adv-form-select">
                                <option value="Admission Inquiry">Admission Inquiry</option>
                                <option value="Campus Tour Booking">Campus Tour Booking</option>
                                <option value="Job / Careers">Work at Advaita (Careers)</option>
                                <option value="Transfer Certificate (TC)">Transfer Certificate (TC)</option>
                                <option value="General Query">General Query</option>
                            </select>
                        </div>
                        <div class="adv-form-group">
                            <label class="adv-form-label">Your Message *</label>
                            <textarea name="message" rows="4" required placeholder="Type your message here..." class="adv-form-textarea"></textarea>
                        </div>
                        <button type="submit" class="adv-form-submit">
                            <i class="fa-solid fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>

                <!-- Google Map Embed & Campus Visual -->
                <div>
                    <div class="adv-map-card">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120538.74955728514!2d76.71183369408665!3d19.261299947936125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd0075d506d8a39%3A0xeec82f9d50a2e7c4!2sParbhani%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                            width="100%" 
                            height="360" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <div class="adv-transport-banner">
                        <div class="adv-transport-icon"><i class="fa-solid fa-bus"></i></div>
                        <div>
                            <h4>Safe School Transport Available</h4>
                            <p>Our buses ply across all major residential sectors in Parbhani with GPS tracking and trained conductors.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
