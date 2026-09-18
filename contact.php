<?php
/**
 * Contact Us Page - Advaita School of Excellence
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
                <div style="background: #ecfdf5; border: 1px solid #a7f3d0; border-radius: 12px; padding: 20px; margin-bottom: 30px; display: flex; align-items: center; gap: 14px;">
                    <i class="fa-solid fa-circle-check" style="color: #059669; font-size: 1.8rem;"></i>
                    <div>
                        <h4 style="color: #065f46; margin: 0 0 4px; font-size: 1.1rem;">Thank you! Your inquiry has been received.</h4>
                        <p style="color: #047857; margin: 0; font-size: 0.9rem;">Our admissions counselor will contact you within 24 hours.</p>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Contact Information Cards -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px; margin-bottom: 40px;">
                
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 28px; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                    <div style="width: 60px; height: 60px; border-radius: 50%; background: #eff6ff; color: #083B7A; display: inline-flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 16px;">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <h3 style="color: #083B7A; font-size: 1.15rem; margin: 0 0 8px;">Campus Address</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0;">
                        Sanmati Campus, Near Highway Ring Road, Parbhani, Maharashtra – 431401, India
                    </p>
                </div>

                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 28px; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                    <div style="width: 60px; height: 60px; border-radius: 50%; background: #fff7ed; color: #F37021; display: inline-flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 16px;">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <h3 style="color: #083B7A; font-size: 1.15rem; margin: 0 0 8px;">Phone Helpline</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0;">
                        Admissions: <a href="tel:+919876543210" style="color: #083B7A; font-weight: 700;">+91 98765 43210</a><br>
                        Reception: <a href="tel:02452234567" style="color: #083B7A; font-weight: 700;">02452-234567</a>
                    </p>
                </div>

                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 28px; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                    <div style="width: 60px; height: 60px; border-radius: 50%; background: #ecfdf5; color: #059669; display: inline-flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 16px;">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <h3 style="color: #083B7A; font-size: 1.15rem; margin: 0 0 8px;">Email Inquiries</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0;">
                        General: <a href="mailto:info@advaitaschool.edu.in" style="color: #083B7A; font-weight: 600;">info@advaitaschool.edu.in</a><br>
                        Admissions: <a href="mailto:admissions@advaitaschool.edu.in" style="color: #083B7A; font-weight: 600;">admissions@advaitaschool.edu.in</a>
                    </p>
                </div>

                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 28px; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                    <div style="width: 60px; height: 60px; border-radius: 50%; background: #faf5ff; color: #7c3aed; display: inline-flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 16px;">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <h3 style="color: #083B7A; font-size: 1.15rem; margin: 0 0 8px;">Office Hours</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0;">
                        Monday – Saturday: 8:00 AM – 3:30 PM<br>
                        Sunday: Closed
                    </p>
                </div>

            </div>

            <!-- Two-Column Form & Map Layout -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px; align-items: start;">
                
                <!-- Inquiry Form -->
                <div style="background: #ffffff; border: 1px solid #cbd5e1; border-radius: 16px; padding: 32px; box-shadow: 0 10px 30px rgba(8,59,122,0.05);">
                    <h3 style="color: #083B7A; font-size: 1.35rem; margin-top: 0; margin-bottom: 8px;">Send Us a Message</h3>
                    <p style="font-size: 0.9rem; color: #64748b; margin-bottom: 24px;">Please fill out the form below and we will get back to you promptly.</p>
                    
                    <form action="contact.php" method="POST" style="display: flex; flex-direction: column; gap: 16px;">
                        <div>
                            <label style="display: block; font-size: 0.85rem; font-weight: 700; color: #1e293b; margin-bottom: 6px;">Your Name *</label>
                            <input type="text" name="name" required placeholder="Full Name" style="width: 100%; padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.9rem; font-family: inherit;">
                        </div>
                        <div>
                            <label style="display: block; font-size: 0.85rem; font-weight: 700; color: #1e293b; margin-bottom: 6px;">Phone Number *</label>
                            <input type="tel" name="phone" required placeholder="Mobile / WhatsApp Number" style="width: 100%; padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.9rem; font-family: inherit;">
                        </div>
                        <div>
                            <label style="display: block; font-size: 0.85rem; font-weight: 700; color: #1e293b; margin-bottom: 6px;">Email Address</label>
                            <input type="email" name="email" placeholder="email@example.com" style="width: 100%; padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.9rem; font-family: inherit;">
                        </div>
                        <div>
                            <label style="display: block; font-size: 0.85rem; font-weight: 700; color: #1e293b; margin-bottom: 6px;">Subject / Purpose</label>
                            <select name="subject" style="width: 100%; padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.9rem; font-family: inherit; background: #fff;">
                                <option value="Admission Inquiry">Admission Inquiry</option>
                                <option value="Campus Tour Booking">Campus Tour Booking</option>
                                <option value="Job / Careers">Work at Advaita (Careers)</option>
                                <option value="Transfer Certificate (TC)">Transfer Certificate (TC)</option>
                                <option value="General Query">General Query</option>
                            </select>
                        </div>
                        <div>
                            <label style="display: block; font-size: 0.85rem; font-weight: 700; color: #1e293b; margin-bottom: 6px;">Your Message *</label>
                            <textarea name="message" rows="4" required placeholder="Type your message here..." style="width: 100%; padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.9rem; font-family: inherit;"></textarea>
                        </div>
                        <button type="submit" class="btn-cta" style="border: none; cursor: pointer; padding: 12px 28px; font-size: 1rem; align-self: flex-start;">
                            <i class="fa-solid fa-paper-plane" style="margin-right: 6px;"></i> Send Message
                        </button>
                    </form>
                </div>

                <!-- Google Map Embed & Campus Visual -->
                <div>
                    <div style="background: #ffffff; border: 1px solid #cbd5e1; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(8,59,122,0.05); margin-bottom: 24px;">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120538.74955728514!2d76.71183369408665!3d19.261299947936125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd0075d506d8a39%3A0xeec82f9d50a2e7c4!2sParbhani%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                            width="100%" 
                            height="360" 
                            style="border:0; display: block;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <div style="background: linear-gradient(135deg, #083B7A, #031c3d); color: #fff; border-radius: 16px; padding: 24px; display: flex; align-items: center; gap: 20px;">
                        <div style="font-size: 2.2rem; color: #F37021; flex-shrink: 0;"><i class="fa-solid fa-bus"></i></div>
                        <div>
                            <h4 style="color: #fff; margin: 0 0 6px; font-size: 1.1rem;">Safe School Transport Available</h4>
                            <p style="color: rgba(255,255,255,0.85); font-size: 0.85rem; margin: 0;">Our buses ply across all major residential sectors in Parbhani with GPS tracking and trained conductors.</p>
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
