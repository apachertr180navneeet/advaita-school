<?php
/**
 * Admissions & Procedure Page - Advaita School of Excellence
 * Clean Semantic HTML - Strictly No Inline CSS
 */
$pageTitle = "Admissions 2026-27 - Advaita School of Excellence, Parbhani · CBSE Affiliated (No. 1130920)";
$activePage = "admissions";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper">

    <!-- Page Banner -->
    <section class="adv-page-banner" aria-label="Page Header">
        <div class="adv-container">
            <div class="adv-banner-content">
                <span class="adv-banner-eyebrow">
                    <i class="fa-solid fa-graduation-cap"></i> ADMISSIONS 2026–2027
                </span>
                <h1 class="adv-banner-title">Admission Process & Guidelines</h1>
                <p class="adv-banner-desc">
                    Welcoming young minds to a nurturing, inspiring, and holistic academic journey from Play Group to Class XII.
                </p>
                <ul class="adv-breadcrumb">
                    <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li class="adv-breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                    <li><a href="admissions.php">Admissions</a></li>
                    <li class="adv-breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                    <li class="adv-breadcrumb-active">Process & Form</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Main Content Layout -->
    <section class="adv-inner-layout">
        <div class="adv-container">
            <div class="adv-inner-grid">
                
                <!-- Main Content -->
                <div class="adv-content-block">
                    <div class="adv-feature-img-card">
                        <img src="assets/images/card-student-1.jpg" alt="Advaita Admissions">
                    </div>

                    <h2>Step-by-Step Admission Procedure</h2>
                    <p>
                        Admissions at <strong>Advaita School of Excellence</strong> are transparent, inclusive, and based on merit and interaction. We welcome applications for <strong>Play Group, Nursery, KG, and Classes I to XII</strong> (Science, Commerce, and Humanities).
                    </p>

                    <!-- Admission Steps -->
                    <div class="adv-steps-timeline">
                        
                        <div class="adv-step-card">
                            <div class="adv-step-num">1</div>
                            <div class="adv-step-content">
                                <h3>Step 1: Online Registration or Campus Inquiry</h3>
                                <p>Fill out the online admission enquiry form below or visit the school admissions office to collect the official prospectus and registration form.</p>
                            </div>
                        </div>

                        <div class="adv-step-card">
                            <div class="adv-step-num orange">2</div>
                            <div class="adv-step-content">
                                <h3>Step 2: Interaction / Readiness Assessment</h3>
                                <p>For Pre-Primary & Primary, an informal friendly interaction is held with the child and parents. For Classes VI to XI, a basic diagnostic assessment in English and Mathematics is conducted.</p>
                            </div>
                        </div>

                        <div class="adv-step-card">
                            <div class="adv-step-num green">3</div>
                            <div class="adv-step-content">
                                <h3>Step 3: Document Verification & Seat Confirmation</h3>
                                <p>Upon confirmation of selection, parents submit required statutory documents and complete the fee payment to secure admission.</p>
                            </div>
                        </div>

                    </div>

                    <h2>Age Criteria (As on 31st March 2026)</h2>
                    <div class="adv-table-wrap">
                        <table class="adv-table">
                            <thead>
                                <tr>
                                    <th>Class / Grade</th>
                                    <th>Minimum Age</th>
                                    <th>Recommended Age Bracket</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Play Group / Pre-Nursery</strong></td>
                                    <td>2.5 Years</td>
                                    <td>2.5 – 3.5 Years</td>
                                </tr>
                                <tr>
                                    <td><strong>Nursery</strong></td>
                                    <td>3 Years</td>
                                    <td>3 – 4 Years</td>
                                </tr>
                                <tr>
                                    <td><strong>LKG (Junior KG)</strong></td>
                                    <td>4 Years</td>
                                    <td>4 – 5 Years</td>
                                </tr>
                                <tr>
                                    <td><strong>UKG (Senior KG)</strong></td>
                                    <td>5 Years</td>
                                    <td>5 – 6 Years</td>
                                </tr>
                                <tr>
                                    <td><strong>Class I</strong></td>
                                    <td>6 Years (As per NEP guidelines)</td>
                                    <td>6 – 7 Years</td>
                                </tr>
                                <tr>
                                    <td><strong>Class XI (Science / Commerce / Arts)</strong></td>
                                    <td>Class X Passed (CBSE / State Board / ICSE)</td>
                                    <td>Based on Class X Board Marks & Stream Eligibility</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h2>Documents Required for Admission</h2>
                    <ul>
                        <li>Self-attested copy of Child's Birth Certificate (issued by Municipal Authority).</li>
                        <li>Recent passport-size photographs of the student (4 copies) and parents (2 copies each).</li>
                        <li>Original Transfer Certificate (TC) counter-signed by the competent education authority (for Class II onwards).</li>
                        <li>Copy of previous class Report Card / Marksheet.</li>
                        <li>Aadhaar Card copy of the student and parents.</li>
                        <li>Medical fitness certificate with blood group details.</li>
                    </ul>

                    <!-- Online Enquiry Form Section -->
                    <div id="enquiry-form" class="adv-form-card">
                        <h3><i class="fa-solid fa-paper-plane"></i> Online Admission Enquiry Form (Session 2026–27)</h3>
                        <p class="adv-form-desc">Please submit the details below and our admissions counselor will get in touch with you within 24 business hours.</p>
                        
                        <form action="contact.php#enquiry-form" method="POST" class="adv-form-grid">
                            <div class="adv-form-group">
                                <label class="adv-form-label">Parent / Guardian Name *</label>
                                <input type="text" name="parent_name" required placeholder="Enter full name" class="adv-form-input">
                            </div>
                            <div class="adv-form-group">
                                <label class="adv-form-label">Student Name *</label>
                                <input type="text" name="student_name" required placeholder="Enter student's name" class="adv-form-input">
                            </div>
                            <div class="adv-form-group">
                                <label class="adv-form-label">Contact Phone Number *</label>
                                <input type="tel" name="phone" required placeholder="e.g. +91 98765 43210" class="adv-form-input">
                            </div>
                            <div class="adv-form-group">
                                <label class="adv-form-label">Email Address</label>
                                <input type="email" name="email" placeholder="e.g. parent@example.com" class="adv-form-input">
                            </div>
                            <div class="adv-form-group">
                                <label class="adv-form-label">Grade Seeking Admission *</label>
                                <select name="grade" required class="adv-form-select">
                                    <option value="">Select Grade / Class</option>
                                    <option value="Play Group">Play Group / Nursery</option>
                                    <option value="LKG / UKG">LKG / UKG</option>
                                    <option value="Class 1-5">Class I – V (Primary)</option>
                                    <option value="Class 6-8">Class VI – VIII (Middle)</option>
                                    <option value="Class 9-10">Class IX – X (Secondary)</option>
                                    <option value="Class 11 Science">Class XI - Science</option>
                                    <option value="Class 11 Commerce">Class XI - Commerce</option>
                                    <option value="Class 11 Humanities">Class XI - Humanities</option>
                                </select>
                            </div>
                            <div class="adv-form-group">
                                <label class="adv-form-label">City / Residential Area</label>
                                <input type="text" name="city" placeholder="e.g. Parbhani" class="adv-form-input">
                            </div>
                            <div class="adv-form-group full-width">
                                <label class="adv-form-label">Any Specific Query or Message</label>
                                <textarea name="message" rows="3" placeholder="Write any query about transport, curriculum, or stream options..." class="adv-form-textarea"></textarea>
                            </div>
                            <div class="adv-form-group full-width">
                                <button type="submit" class="adv-form-submit">
                                    <i class="fa-solid fa-paper-plane"></i> Submit Admission Enquiry
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

                <!-- Sidebar -->
                <aside class="adv-sidebar">
                    <div class="adv-widget">
                        <h4 class="adv-widget-title">Admissions Desk</h4>
                        <ul class="adv-widget-links">
                            <li class="active"><a href="admissions.php"><span>Admission Procedure</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                            <li><a href="academics.php"><span>Curriculum & Streams</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                            <li><a href="facilities.php"><span>Campus Infrastructure</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                            <li><a href="mandatory-disclosure.php"><span>CBSE Affiliation Docs</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                            <li><a href="contact.php"><span>Contact Admissions Office</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                        </ul>
                    </div>

                    <div class="adv-widget-cta">
                        <div class="cta-icon">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <h4>Admissions Helpline</h4>
                        <p>Have questions about seats or eligibility? Speak directly with our admissions office.</p>
                        <a href="tel:+919876543210" class="btn-cta"><i class="fa-solid fa-phone"></i> +91 98765 43210</a>
                    </div>
                </aside>

            </div>
        </div>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
