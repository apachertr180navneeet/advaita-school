<?php
/**
 * Online Registration Page - Advaita School of Excellence
 * Multi-Step Admissions Enquiry & Registration Form
 * Clean Semantic HTML - Header and Footer Preserved
 */
$pageTitle = "Online Registration 2026-27 - Advaita School of Excellence, Parbhani | Admission Form";
$activePage = "online-registration";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper registration-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Breadcrumb + Title + Visual with 3 Students & Script Tag
         ========================================================================= -->
    <section class="admission-hero-section">
        <div class="admission-hero-canvas">
            <!-- Background Visual with Campus -->
            <div class="admission-hero-bg-visual" aria-hidden="true">
                <img src="assets/images/about-campus.jpg" alt="Advaita School Campus" class="admission-hero-bg-img">
            </div>

            <!-- SVG Wave Overlay for Smooth Translucent Backdrop -->
            <div class="admission-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1200 440" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H540C570 120 520 280 620 440H0V0Z" fill="#EEF6FC" fill-opacity="0.96"/>
                    <path d="M520 0C550 140 500 280 600 440H580C480 280 530 140 500 0H520Z" fill="#F37021" fill-opacity="0.25"/>
                </svg>
            </div>

            <!-- Student Cutout on the Right Side -->
            <div class="admission-hero-students" aria-hidden="true">
                <img src="assets/images/about-cta-students-final.png" alt="Advaita Students in School Uniform" width="480" height="400">
            </div>

            <!-- Floating Handwritten Script Tag at Top Right -->
            <div class="admission-hero-script-tag" aria-hidden="true">
                <span class="script-title">More<br>Than A School</span>
                <svg class="script-underline" viewBox="0 0 120 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 12C38 3 84 4 116 14" stroke="#083B7A" stroke-width="3" stroke-linecap="round"/>
                </svg>
            </div>

            <!-- Left Content Panel -->
            <div class="admission-hero-left-panel">
                <div class="admission-hero-content-inner">
                    <!-- Breadcrumbs -->
                    <nav class="admission-breadcrumb" aria-label="Breadcrumb">
                        <a href="index.php">Home</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="admission-info.php">Admissions</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Online Registration</span>
                    </nav>

                    <!-- Eyebrow -->
                    <div class="admission-eyebrow">ADMISSIONS 2026–27</div>

                    <!-- Main Headline -->
                    <h1 class="admission-hero-title">
                        Online <span class="highlight-serif">Registration</span>
                    </h1>

                    <!-- Description -->
                    <p class="admission-hero-desc">
                        Fill out the form in a few simple steps — our admissions counselor will reach out to you within a working day.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. MULTI-STEP REGISTRATION FORM CARD
         ========================================================================= -->
    <div class="registration-container-relative">
        <div class="registration-form-card">
            
            <!-- Multi-Step Progress Tracker -->
            <div class="registration-stepper-wrap">
                <div class="registration-stepper">
                    <!-- Step 1: Active -->
                    <div class="reg-step-item active">
                        <div class="reg-step-circle">1</div>
                        <span class="reg-step-label">Admission Details</span>
                    </div>

                    <div class="reg-step-connector active" aria-hidden="true"></div>

                    <!-- Step 2 -->
                    <div class="reg-step-item">
                        <div class="reg-step-circle">2</div>
                        <span class="reg-step-label">Personal Details</span>
                    </div>

                    <div class="reg-step-connector" aria-hidden="true"></div>

                    <!-- Step 3 -->
                    <div class="reg-step-item">
                        <div class="reg-step-circle">3</div>
                        <span class="reg-step-label">Contact Details</span>
                    </div>

                    <div class="reg-step-connector" aria-hidden="true"></div>

                    <!-- Step 4 -->
                    <div class="reg-step-item">
                        <div class="reg-step-circle">4</div>
                        <span class="reg-step-label">Documents</span>
                    </div>
                </div>
            </div>

            <!-- Required Fields Note -->
            <div class="reg-card-top-info">
                <div class="reg-required-note">
                    Fields marked with an <span class="star">*</span> are required.
                </div>
            </div>

            <form action="#" method="POST" class="registration-main-form" id="onlineRegForm">
                
                <!-- Section 1: Admission Details -->
                <div class="reg-section-block">
                    <div class="reg-section-head">
                        <div class="reg-section-icon" aria-hidden="true">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div>
                            <h2 class="reg-section-title">Admission Details</h2>
                            <p class="reg-section-sub">Please provide the basic information for admission enquiry.</p>
                        </div>
                    </div>

                    <!-- Row 1: Username & Email -->
                    <div class="reg-grid-row two-cols">
                        <div class="reg-field-group">
                            <label for="regUsername" class="reg-field-label">Username <span class="req">*</span></label>
                            <div class="reg-input-wrap">
                                <i class="fa-regular fa-user reg-input-icon" aria-hidden="true"></i>
                                <input type="text" id="regUsername" name="username" class="reg-input-control" placeholder="Enter username" required>
                            </div>
                        </div>

                        <div class="reg-field-group">
                            <label for="regEmail" class="reg-field-label">Email <span class="req">*</span></label>
                            <div class="reg-input-wrap">
                                <i class="fa-regular fa-envelope reg-input-icon" aria-hidden="true"></i>
                                <input type="email" id="regEmail" name="email" class="reg-input-control" placeholder="Enter your email address" required>
                            </div>
                        </div>
                    </div>

                    <!-- Row 2: Name & Phone -->
                    <div class="reg-grid-row two-cols">
                        <div class="reg-field-group">
                            <label for="regName" class="reg-field-label">Name <span class="req">*</span></label>
                            <div class="reg-input-wrap">
                                <i class="fa-regular fa-user reg-input-icon" aria-hidden="true"></i>
                                <input type="text" id="regName" name="full_name" class="reg-input-control" placeholder="Enter full name" required>
                            </div>
                        </div>

                        <div class="reg-field-group">
                            <label for="regPhone" class="reg-field-label">Phone <span class="req">*</span></label>
                            <div class="reg-input-wrap">
                                <i class="fa-solid fa-phone reg-input-icon" aria-hidden="true"></i>
                                <input type="tel" id="regPhone" name="phone" class="reg-input-control" placeholder="Enter phone number" required>
                            </div>
                        </div>
                    </div>

                    <!-- Row 3: Branch (Full Width) -->
                    <div class="reg-grid-row full-col">
                        <div class="reg-field-group">
                            <label for="regBranch" class="reg-field-label">Branch <span class="req">*</span></label>
                            <div class="reg-input-wrap">
                                <i class="fa-solid fa-school reg-input-icon" aria-hidden="true"></i>
                                <select id="regBranch" name="branch" class="reg-input-control" required>
                                    <option value="Advaita School of Excellence, Parbhani (Samnati Sevabhavi Sansthan)" selected>Advaita School of Excellence, Parbhani (Samnati Sevabhavi Sansthan)</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Row 4: Academic Year & Parent Course -->
                    <div class="reg-grid-row two-cols">
                        <div class="reg-field-group">
                            <label for="regYear" class="reg-field-label">Academic Year <span class="req">*</span></label>
                            <div class="reg-input-wrap">
                                <i class="fa-regular fa-calendar reg-input-icon" aria-hidden="true"></i>
                                <select id="regYear" name="academic_year" class="reg-input-control" required>
                                    <option value="2026-2027" selected>2026 – 2027</option>
                                    <option value="2027-2028">2027 – 2028</option>
                                </select>
                            </div>
                        </div>

                        <div class="reg-field-group">
                            <label for="regParentCourse" class="reg-field-label">Parent Course <span class="req">*</span></label>
                            <div class="reg-input-wrap">
                                <i class="fa-solid fa-graduation-cap reg-input-icon" aria-hidden="true"></i>
                                <select id="regParentCourse" name="parent_course" class="reg-input-control" required>
                                    <option value="School (Classes 1 to 10)" selected>School (Classes 1 to 10)</option>
                                    <option value="Pre-Primary Wing (Nursery - UKG)">Pre-Primary Wing (Nursery - UKG)</option>
                                    <option value="Foundation NEET / IIT">Foundation NEET / IIT</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Row 5: Applying for Class (Full Width) -->
                    <div class="reg-grid-row full-col">
                        <div class="reg-field-group">
                            <label for="regClass" class="reg-field-label">Applying for Class <span class="req">*</span></label>
                            <div class="reg-input-wrap">
                                <i class="fa-solid fa-book-open reg-input-icon" aria-hidden="true"></i>
                                <select id="regClass" name="applying_class" class="reg-input-control" required>
                                    <option value="" disabled selected>Select class</option>
                                    <option value="Nursery">Nursery</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="Class 1">Class 1</option>
                                    <option value="Class 2">Class 2</option>
                                    <option value="Class 3">Class 3</option>
                                    <option value="Class 4">Class 4</option>
                                    <option value="Class 5">Class 5</option>
                                    <option value="Class 6">Class 6</option>
                                    <option value="Class 7">Class 7</option>
                                    <option value="Class 8">Class 8</option>
                                    <option value="Class 9">Class 9</option>
                                    <option value="Class 10">Class 10</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Previous Educational Details -->
                <div class="reg-section-block">
                    <div class="reg-section-head">
                        <div class="reg-section-icon" aria-hidden="true">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>
                        <div>
                            <h2 class="reg-section-title">Previous Educational Details</h2>
                            <p class="reg-section-sub">Share details of your last attended school and academic performance.</p>
                        </div>
                    </div>

                    <!-- Row 1: Highest Qualification, Percentage, Year Passed -->
                    <div class="reg-grid-row three-cols">
                        <div class="reg-field-group">
                            <label for="regQualification" class="reg-field-label">Highest Qualification <span class="req">*</span></label>
                            <div class="reg-input-wrap">
                                <i class="fa-solid fa-award reg-input-icon" aria-hidden="true"></i>
                                <select id="regQualification" name="highest_qualification" class="reg-input-control" required>
                                    <option value="" disabled selected>Select highest qualification</option>
                                    <option value="Pre-Primary / Kindergarten">Pre-Primary / Kindergarten</option>
                                    <option value="Primary (Class 1 to 5)">Primary (Class 1 to 5)</option>
                                    <option value="Middle School (Class 6 to 8)">Middle School (Class 6 to 8)</option>
                                    <option value="Secondary (Class 9 to 10)">Secondary (Class 9 to 10)</option>
                                </select>
                            </div>
                        </div>

                        <div class="reg-field-group">
                            <label for="regPercentage" class="reg-field-label">Percentage <span class="req">*</span></label>
                            <div class="reg-input-wrap">
                                <i class="fa-solid fa-percent reg-input-icon" aria-hidden="true"></i>
                                <input type="text" id="regPercentage" name="percentage" class="reg-input-control" placeholder="Enter percentage" required>
                            </div>
                        </div>

                        <div class="reg-field-group">
                            <label for="regYearPassed" class="reg-field-label">Year Passed <span class="req">*</span></label>
                            <div class="reg-input-wrap">
                                <i class="fa-regular fa-calendar reg-input-icon" aria-hidden="true"></i>
                                <select id="regYearPassed" name="year_passed" class="reg-input-control" required>
                                    <option value="" disabled selected>Select year</option>
                                    <option value="2026">2026</option>
                                    <option value="2025">2025</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Row 2: Previous School Name & School Address -->
                    <div class="reg-grid-row two-cols">
                        <div class="reg-field-group">
                            <label for="regPrevSchool" class="reg-field-label">Previous School Name <span class="req">*</span></label>
                            <div class="reg-input-wrap">
                                <i class="fa-solid fa-building-columns reg-input-icon" aria-hidden="true"></i>
                                <input type="text" id="regPrevSchool" name="prev_school_name" class="reg-input-control" placeholder="Enter previous school name" required>
                            </div>
                        </div>

                        <div class="reg-field-group">
                            <label for="regSchoolAddress" class="reg-field-label">School Address <span class="req">*</span></label>
                            <div class="reg-input-wrap">
                                <i class="fa-solid fa-location-dot reg-input-icon" style="top: 16px;" aria-hidden="true"></i>
                                <textarea id="regSchoolAddress" name="prev_school_address" class="reg-input-control" placeholder="Enter school address" rows="2" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Action Buttons -->
                <div class="reg-actions-bar">
                    <button type="button" class="reg-btn-draft" onclick="alert('Your application draft has been saved temporarily.')">
                        Save as Draft
                    </button>
                    <button type="submit" class="reg-btn-continue">
                        <span>Continue</span>
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </button>
                </div>

            </form>
        </div>
    </div>

    <!-- =========================================================================
         3. NEED ASSISTANCE? BOTTOM BANNER
         ========================================================================= -->
    <div class="reg-assist-banner">
        <div class="reg-assist-box">
            <div class="reg-assist-left">
                <span class="reg-assist-eyebrow">NEED ASSISTANCE?</span>
                <h2 class="reg-assist-title">
                    We're Here to <span class="highlight-orange">Help!</span>
                </h2>
                <p class="reg-assist-desc">
                    If you face any issues while filling the form, feel free to reach out to our admissions team.
                </p>
            </div>

            <div class="reg-assist-contacts">
                <!-- Phone Contact -->
                <div class="reg-assist-item">
                    <div class="reg-assist-icon-circle" aria-hidden="true">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="reg-assist-content">
                        <span class="reg-assist-label">Call Admissions</span>
                        <a href="tel:+919876543210" class="reg-assist-val">+91 98765 43210</a>
                        <span class="reg-assist-sub">Mon – Sat | 8:00 AM – 4:00 PM</span>
                    </div>
                </div>

                <!-- Email Contact -->
                <div class="reg-assist-item">
                    <div class="reg-assist-icon-circle" aria-hidden="true">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="reg-assist-content">
                        <span class="reg-assist-label">Email Us</span>
                        <a href="mailto:info@advaitaschool.edu.in" class="reg-assist-val">info@advaitaschool.edu.in</a>
                        <span class="reg-assist-sub">We usually respond within 24 hours</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
