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
    <div class="registration-container-relative" id="registrationFormContainer">
        <div class="registration-form-card">
            
            <!-- Multi-Step Progress Tracker -->
            <div class="registration-stepper-wrap">
                <div class="registration-stepper" id="regStepper">
                    <!-- Step 1: General Details -->
                    <div class="reg-step-item active" id="stepperTab1" onclick="switchRegStep(1)">
                        <div class="reg-step-circle">1</div>
                        <span class="reg-step-label">General Details</span>
                    </div>

                    <div class="reg-step-connector" id="connector1" aria-hidden="true"></div>

                    <!-- Step 2: Personal Details -->
                    <div class="reg-step-item" id="stepperTab2" onclick="switchRegStep(2)">
                        <div class="reg-step-circle">2</div>
                        <span class="reg-step-label">Personal Details</span>
                    </div>

                    <div class="reg-step-connector" id="connector2" aria-hidden="true"></div>

                    <!-- Step 3: Contact Details -->
                    <div class="reg-step-item" id="stepperTab3">
                        <div class="reg-step-circle">3</div>
                        <span class="reg-step-label">Contact Details</span>
                    </div>

                    <div class="reg-step-connector" id="connector3" aria-hidden="true"></div>

                    <!-- Step 4: Documents -->
                    <div class="reg-step-item" id="stepperTab4">
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

            <form action="#" method="POST" class="registration-main-form" id="onlineRegForm" onsubmit="event.preventDefault(); alert('Registration submitted successfully! Our admissions counselor will contact you shortly.');">
                
                <!-- =============================================================
                     STEP 1 PANEL: GENERAL DETAILS & PREVIOUS EDUCATION
                     ============================================================= -->
                <div class="reg-step-panel active" id="regStepPanel1">
                    
                    <!-- Section: Admission Details -->
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
                                    <input type="text" id="regUsername" name="username" class="reg-input-control" placeholder="Enter username">
                                </div>
                            </div>

                            <div class="reg-field-group">
                                <label for="regEmail" class="reg-field-label">Email <span class="req">*</span></label>
                                <div class="reg-input-wrap">
                                    <i class="fa-regular fa-envelope reg-input-icon" aria-hidden="true"></i>
                                    <input type="email" id="regEmail" name="email" class="reg-input-control" placeholder="Enter your email address">
                                </div>
                            </div>
                        </div>

                        <!-- Row 2: Name & Phone -->
                        <div class="reg-grid-row two-cols">
                            <div class="reg-field-group">
                                <label for="regName" class="reg-field-label">Name <span class="req">*</span></label>
                                <div class="reg-input-wrap">
                                    <i class="fa-regular fa-user reg-input-icon" aria-hidden="true"></i>
                                    <input type="text" id="regName" name="full_name" class="reg-input-control" placeholder="Enter full name">
                                </div>
                            </div>

                            <div class="reg-field-group">
                                <label for="regPhone" class="reg-field-label">Phone <span class="req">*</span></label>
                                <div class="reg-input-wrap">
                                    <i class="fa-solid fa-phone reg-input-icon" aria-hidden="true"></i>
                                    <input type="tel" id="regPhone" name="phone" class="reg-input-control" placeholder="Enter phone number">
                                </div>
                            </div>
                        </div>

                        <!-- Row 3: Branch (Full Width) -->
                        <div class="reg-grid-row full-col">
                            <div class="reg-field-group">
                                <label for="regBranch" class="reg-field-label">Branch <span class="req">*</span></label>
                                <div class="reg-input-wrap">
                                    <i class="fa-solid fa-school reg-input-icon" aria-hidden="true"></i>
                                    <select id="regBranch" name="branch" class="reg-input-control">
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
                                    <select id="regYear" name="academic_year" class="reg-input-control">
                                        <option value="2026-2027" selected>2026 – 2027</option>
                                        <option value="2027-2028">2027 – 2028</option>
                                    </select>
                                </div>
                            </div>

                            <div class="reg-field-group">
                                <label for="regParentCourse" class="reg-field-label">Parent Course <span class="req">*</span></label>
                                <div class="reg-input-wrap">
                                    <i class="fa-solid fa-graduation-cap reg-input-icon" aria-hidden="true"></i>
                                    <select id="regParentCourse" name="parent_course" class="reg-input-control">
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
                                    <select id="regClass" name="applying_class" class="reg-input-control">
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

                    <!-- Section: Previous Educational Details -->
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
                                    <select id="regQualification" name="highest_qualification" class="reg-input-control">
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
                                    <input type="text" id="regPercentage" name="percentage" class="reg-input-control" placeholder="Enter percentage">
                                </div>
                            </div>

                            <div class="reg-field-group">
                                <label for="regYearPassed" class="reg-field-label">Year Passed <span class="req">*</span></label>
                                <div class="reg-input-wrap">
                                    <i class="fa-regular fa-calendar reg-input-icon" aria-hidden="true"></i>
                                    <select id="regYearPassed" name="year_passed" class="reg-input-control">
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
                                    <input type="text" id="regPrevSchool" name="prev_school_name" class="reg-input-control" placeholder="Enter previous school name">
                                </div>
                            </div>

                            <div class="reg-field-group">
                                <label for="regSchoolAddress" class="reg-field-label">School Address <span class="req">*</span></label>
                                <div class="reg-input-wrap">
                                    <i class="fa-solid fa-location-dot reg-input-icon" style="top: 16px;" aria-hidden="true"></i>
                                    <textarea id="regSchoolAddress" name="prev_school_address" class="reg-input-control" placeholder="Enter school address" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 1 Actions Bar -->
                    <div class="reg-actions-bar">
                        <button type="button" class="reg-btn-draft" onclick="alert('Draft saved temporarily.')">
                            Save as Draft
                        </button>
                        <button type="button" class="reg-btn-continue" onclick="switchRegStep(2)">
                            <span>Continue</span>
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </button>
                    </div>

                </div>

                <!-- =============================================================
                     STEP 2 PANEL: PERSONAL DETAILS, PARENT & SIBLING DETAILS
                     ============================================================= -->
                <div class="reg-step-panel" id="regStepPanel2">

                    <!-- Section: Personal Details -->
                    <div class="reg-section-block">
                        <div class="reg-section-head">
                            <div class="reg-section-icon" aria-hidden="true">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div>
                                <h2 class="reg-section-title">Personal Details</h2>
                                <p class="reg-section-sub">Please provide your child's personal information as per valid documents.</p>
                            </div>
                        </div>

                        <!-- Row 1: First Name, Middle Name, Last Name -->
                        <div class="reg-grid-row three-cols">
                            <div class="reg-field-group">
                                <label for="regFirstName" class="reg-field-label">First Name <span class="req">*</span></label>
                                <div class="reg-input-wrap">
                                    <i class="fa-regular fa-user reg-input-icon" aria-hidden="true"></i>
                                    <input type="text" id="regFirstName" name="first_name" class="reg-input-control" placeholder="Enter first name">
                                </div>
                            </div>

                            <div class="reg-field-group">
                                <label for="regMiddleName" class="reg-field-label">Middle Name</label>
                                <div class="reg-input-wrap">
                                    <i class="fa-regular fa-user reg-input-icon" aria-hidden="true"></i>
                                    <input type="text" id="regMiddleName" name="middle_name" class="reg-input-control" placeholder="Enter middle name">
                                </div>
                            </div>

                            <div class="reg-field-group">
                                <label for="regLastName" class="reg-field-label">Last Name <span class="req">*</span></label>
                                <div class="reg-input-wrap">
                                    <i class="fa-regular fa-user reg-input-icon" aria-hidden="true"></i>
                                    <input type="text" id="regLastName" name="last_name" class="reg-input-control" placeholder="Enter last name">
                                </div>
                            </div>
                        </div>

                        <!-- Row 2: Date of Birth, Gender, Blood Group -->
                        <div class="reg-grid-row three-cols">
                            <div class="reg-field-group">
                                <label for="regDob" class="reg-field-label">Date of Birth <span class="req">*</span></label>
                                <div class="reg-input-wrap">
                                    <i class="fa-regular fa-calendar reg-input-icon" aria-hidden="true"></i>
                                    <input type="date" id="regDob" name="dob" class="reg-input-control" placeholder="Select date of birth">
                                </div>
                            </div>

                            <div class="reg-field-group">
                                <label class="reg-field-label">Gender <span class="req">*</span></label>
                                <div class="reg-radio-group">
                                    <label class="reg-radio-label">
                                        <input type="radio" name="gender" value="Male" checked>
                                        <span>Male</span>
                                    </label>
                                    <label class="reg-radio-label">
                                        <input type="radio" name="gender" value="Female">
                                        <span>Female</span>
                                    </label>
                                    <label class="reg-radio-label">
                                        <input type="radio" name="gender" value="Other">
                                        <span>Other</span>
                                    </label>
                                </div>
                            </div>

                            <div class="reg-field-group">
                                <label for="regBloodGroup" class="reg-field-label">Blood Group</label>
                                <div class="reg-input-wrap">
                                    <i class="fa-solid fa-droplet reg-input-icon" aria-hidden="true"></i>
                                    <select id="regBloodGroup" name="blood_group" class="reg-input-control">
                                        <option value="" disabled selected>Select blood group</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Row 3: Weight, Height, Eye Sight -->
                        <div class="reg-grid-row three-cols">
                            <div class="reg-field-group">
                                <label for="regWeight" class="reg-field-label">Weight (in kg)</label>
                                <div class="reg-input-wrap">
                                    <i class="fa-solid fa-weight-scale reg-input-icon" aria-hidden="true"></i>
                                    <input type="text" id="regWeight" name="weight" class="reg-input-control" placeholder="Enter weight">
                                </div>
                            </div>

                            <div class="reg-field-group">
                                <label for="regHeight" class="reg-field-label">Height (in cm)</label>
                                <div class="reg-input-wrap">
                                    <i class="fa-solid fa-ruler-vertical reg-input-icon" aria-hidden="true"></i>
                                    <input type="text" id="regHeight" name="height" class="reg-input-control" placeholder="Enter height">
                                </div>
                            </div>

                            <div class="reg-field-group">
                                <label for="regEyeSight" class="reg-field-label">Eye Sight</label>
                                <div class="reg-input-wrap">
                                    <i class="fa-regular fa-eye reg-input-icon" aria-hidden="true"></i>
                                    <input type="text" id="regEyeSight" name="eye_sight" class="reg-input-control" placeholder="Enter eye sight">
                                </div>
                            </div>
                        </div>

                        <!-- Row 4: Student Disability, Mother Tongue, Nationality -->
                        <div class="reg-grid-row three-cols">
                            <div class="reg-field-group">
                                <label for="regDisability" class="reg-field-label">Student Disability (if any)</label>
                                <div class="reg-input-wrap">
                                    <i class="fa-solid fa-wheelchair reg-input-icon" aria-hidden="true"></i>
                                    <select id="regDisability" name="disability" class="reg-input-control">
                                        <option value="" disabled selected>Select option</option>
                                        <option value="None">None</option>
                                        <option value="Visual Impairment">Visual Impairment</option>
                                        <option value="Hearing Impairment">Hearing Impairment</option>
                                        <option value="Physical / Locomotor">Physical / Locomotor</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="reg-field-group">
                                <label for="regMotherTongue" class="reg-field-label">Mother Tongue <span class="req">*</span></label>
                                <div class="reg-input-wrap">
                                    <i class="fa-solid fa-language reg-input-icon" aria-hidden="true"></i>
                                    <select id="regMotherTongue" name="mother_tongue" class="reg-input-control">
                                        <option value="" disabled selected>Select mother tongue</option>
                                        <option value="Marathi">Marathi</option>
                                        <option value="Hindi">Hindi</option>
                                        <option value="English">English</option>
                                        <option value="Urdu">Urdu</option>
                                        <option value="Gujarati">Gujarati</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="reg-field-group">
                                <label for="regNationality" class="reg-field-label">Nationality <span class="req">*</span></label>
                                <div class="reg-input-wrap">
                                    <i class="fa-solid fa-globe reg-input-icon" aria-hidden="true"></i>
                                    <select id="regNationality" name="nationality" class="reg-input-control">
                                        <option value="" disabled selected>Select nationality</option>
                                        <option value="Indian" selected>Indian</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Row 5: Religion, Caste, Category -->
                        <div class="reg-grid-row three-cols">
                            <div class="reg-field-group">
                                <label for="regReligion" class="reg-field-label">Religion <span class="req">*</span></label>
                                <div class="reg-input-wrap">
                                    <i class="fa-solid fa-hands-praying reg-input-icon" aria-hidden="true"></i>
                                    <select id="regReligion" name="religion" class="reg-input-control">
                                        <option value="" disabled selected>Select religion</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Muslim">Muslim</option>
                                        <option value="Jain">Jain</option>
                                        <option value="Buddhist">Buddhist</option>
                                        <option value="Christian">Christian</option>
                                        <option value="Sikh">Sikh</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="reg-field-group">
                                <label for="regCaste" class="reg-field-label">Caste</label>
                                <div class="reg-input-wrap">
                                    <i class="fa-solid fa-users reg-input-icon" aria-hidden="true"></i>
                                    <input type="text" id="regCaste" name="caste" class="reg-input-control" placeholder="Enter caste (optional)">
                                </div>
                            </div>

                            <div class="reg-field-group">
                                <label for="regCategory" class="reg-field-label">Category <span class="req">*</span></label>
                                <div class="reg-input-wrap">
                                    <i class="fa-regular fa-id-badge reg-input-icon" aria-hidden="true"></i>
                                    <select id="regCategory" name="category" class="reg-input-control">
                                        <option value="" disabled selected>Select category</option>
                                        <option value="General / Open">General / Open</option>
                                        <option value="OBC">OBC</option>
                                        <option value="SC">SC</option>
                                        <option value="ST">ST</option>
                                        <option value="EWS">EWS</option>
                                        <option value="NT / VJNT">NT / VJNT</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Row 6: Previous School & Class Studied -->
                        <div class="reg-grid-row two-cols">
                            <div class="reg-field-group">
                                <label for="regPrevSchoolName" class="reg-field-label">Name of Previous School</label>
                                <div class="reg-input-wrap">
                                    <i class="fa-solid fa-school reg-input-icon" aria-hidden="true"></i>
                                    <input type="text" id="regPrevSchoolName" name="previous_school_name" class="reg-input-control" placeholder="Enter name of previous school">
                                </div>
                            </div>

                            <div class="reg-field-group">
                                <label for="regPrevClass" class="reg-field-label">Class in Which Studied in the Last School</label>
                                <div class="reg-input-wrap">
                                    <i class="fa-solid fa-book reg-input-icon" aria-hidden="true"></i>
                                    <input type="text" id="regPrevClass" name="previous_class" class="reg-input-control" placeholder="Select class">
                                </div>
                            </div>
                        </div>

                        <!-- Row 7: Achievements & Marks -->
                        <div class="reg-grid-row two-cols">
                            <div class="reg-field-group">
                                <label for="regProficiency" class="reg-field-label">Proficiency in Games/Co-curricular/Outstanding Achievements</label>
                                <div class="reg-input-wrap">
                                    <i class="fa-solid fa-trophy reg-input-icon" aria-hidden="true"></i>
                                    <input type="text" id="regProficiency" name="proficiency" class="reg-input-control" placeholder="Enter details (optional)">
                                </div>
                            </div>

                            <div class="reg-field-group">
                                <label for="regLastMarks" class="reg-field-label">Marks Obtained in the Last Examination in the Previous School</label>
                                <div class="reg-input-wrap">
                                    <i class="fa-solid fa-chart-line reg-input-icon" aria-hidden="true"></i>
                                    <input type="text" id="regLastMarks" name="last_exam_marks" class="reg-input-control" placeholder="Enter marks / percentage">
                                </div>
                            </div>
                        </div>

                        <!-- Row 8: Medium of Instruction (Full Width) -->
                        <div class="reg-grid-row full-col">
                            <div class="reg-field-group">
                                <label for="regMedium" class="reg-field-label">Medium of Instruction in Previous School (English/Hindi)</label>
                                <div class="reg-input-wrap">
                                    <i class="fa-solid fa-book-open reg-input-icon" aria-hidden="true"></i>
                                    <select id="regMedium" name="medium_instruction" class="reg-input-control">
                                        <option value="" disabled selected>Select medium of instruction</option>
                                        <option value="English">English</option>
                                        <option value="Hindi">Hindi</option>
                                        <option value="Marathi">Marathi</option>
                                        <option value="Semi-English">Semi-English</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section: Parent Details (Dual Boxed Cards) -->
                    <div class="reg-section-block">
                        <div class="reg-section-head">
                            <div class="reg-section-icon" aria-hidden="true">
                                <i class="fa-solid fa-people-roof"></i>
                            </div>
                            <div>
                                <h2 class="reg-section-title">Parent Details</h2>
                                <p class="reg-section-sub">Please provide details of father and mother/guardian.</p>
                            </div>
                        </div>

                        <div class="parent-details-grid">
                            <!-- Father's / Guardian's Details Card -->
                            <div class="parent-card">
                                <div class="parent-card-header blue">
                                    <i class="fa-solid fa-user-tie"></i>
                                    <h3 class="parent-card-title">Father's / Guardian's Details</h3>
                                </div>

                                <div class="parent-fields-grid">
                                    <div class="reg-field-group">
                                        <label for="regFatherName" class="reg-field-label">Father's Name <span class="req">*</span></label>
                                        <div class="reg-input-wrap">
                                            <i class="fa-regular fa-user reg-input-icon" aria-hidden="true"></i>
                                            <input type="text" id="regFatherName" name="father_name" class="reg-input-control" placeholder="Enter father's name">
                                        </div>
                                    </div>

                                    <div class="reg-field-group">
                                        <label for="regFatherQual" class="reg-field-label">Qualification</label>
                                        <div class="reg-input-wrap">
                                            <i class="fa-solid fa-graduation-cap reg-input-icon" aria-hidden="true"></i>
                                            <input type="text" id="regFatherQual" name="father_qualification" class="reg-input-control" placeholder="Enter qualification">
                                        </div>
                                    </div>

                                    <div class="reg-field-group">
                                        <label for="regFatherOcc" class="reg-field-label">Occupation</label>
                                        <div class="reg-input-wrap">
                                            <i class="fa-solid fa-briefcase reg-input-icon" aria-hidden="true"></i>
                                            <input type="text" id="regFatherOcc" name="father_occupation" class="reg-input-control" placeholder="Enter occupation">
                                        </div>
                                    </div>

                                    <div class="reg-field-group">
                                        <label for="regFatherDesig" class="reg-field-label">Designation</label>
                                        <div class="reg-input-wrap">
                                            <i class="fa-solid fa-id-badge reg-input-icon" aria-hidden="true"></i>
                                            <input type="text" id="regFatherDesig" name="father_designation" class="reg-input-control" placeholder="Enter designation">
                                        </div>
                                    </div>

                                    <div class="reg-field-group">
                                        <label for="regFatherIncome" class="reg-field-label">Annual Income</label>
                                        <div class="reg-input-wrap">
                                            <i class="fa-solid fa-indian-rupee-sign reg-input-icon" aria-hidden="true"></i>
                                            <input type="text" id="regFatherIncome" name="father_income" class="reg-input-control" placeholder="Enter annual income">
                                        </div>
                                    </div>

                                    <div class="reg-field-group">
                                        <label for="regFatherOffice" class="reg-field-label">Office Address</label>
                                        <div class="reg-input-wrap">
                                            <i class="fa-solid fa-building reg-input-icon" aria-hidden="true"></i>
                                            <input type="text" id="regFatherOffice" name="father_office" class="reg-input-control" placeholder="Enter office address">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mother's Details Card -->
                            <div class="parent-card">
                                <div class="parent-card-header orange">
                                    <i class="fa-solid fa-user"></i>
                                    <h3 class="parent-card-title">Mother's Details</h3>
                                </div>

                                <div class="parent-fields-grid">
                                    <div class="reg-field-group">
                                        <label for="regMotherName" class="reg-field-label">Mother's Name <span class="req">*</span></label>
                                        <div class="reg-input-wrap">
                                            <i class="fa-regular fa-user reg-input-icon" aria-hidden="true"></i>
                                            <input type="text" id="regMotherName" name="mother_name" class="reg-input-control" placeholder="Enter mother's name">
                                        </div>
                                    </div>

                                    <div class="reg-field-group">
                                        <label for="regMotherQual" class="reg-field-label">Qualification</label>
                                        <div class="reg-input-wrap">
                                            <i class="fa-solid fa-graduation-cap reg-input-icon" aria-hidden="true"></i>
                                            <input type="text" id="regMotherQual" name="mother_qualification" class="reg-input-control" placeholder="Enter qualification">
                                        </div>
                                    </div>

                                    <div class="reg-field-group">
                                        <label for="regMotherOcc" class="reg-field-label">Occupation</label>
                                        <div class="reg-input-wrap">
                                            <i class="fa-solid fa-briefcase reg-input-icon" aria-hidden="true"></i>
                                            <input type="text" id="regMotherOcc" name="mother_occupation" class="reg-input-control" placeholder="Enter occupation">
                                        </div>
                                    </div>

                                    <div class="reg-field-group">
                                        <label for="regMotherDesig" class="reg-field-label">Designation</label>
                                        <div class="reg-input-wrap">
                                            <i class="fa-solid fa-id-badge reg-input-icon" aria-hidden="true"></i>
                                            <input type="text" id="regMotherDesig" name="mother_designation" class="reg-input-control" placeholder="Enter designation">
                                        </div>
                                    </div>

                                    <div class="reg-field-group">
                                        <label for="regMotherIncome" class="reg-field-label">Annual Income</label>
                                        <div class="reg-input-wrap">
                                            <i class="fa-solid fa-indian-rupee-sign reg-input-icon" aria-hidden="true"></i>
                                            <input type="text" id="regMotherIncome" name="mother_income" class="reg-input-control" placeholder="Enter annual income">
                                        </div>
                                    </div>

                                    <div class="reg-field-group">
                                        <label for="regMotherOffice" class="reg-field-label">Office Address</label>
                                        <div class="reg-input-wrap">
                                            <i class="fa-solid fa-building reg-input-icon" aria-hidden="true"></i>
                                            <input type="text" id="regMotherOffice" name="mother_office" class="reg-input-control" placeholder="Enter office address">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section: Sibling Details -->
                    <div class="reg-section-block">
                        <div class="reg-section-head">
                            <div class="reg-section-icon" aria-hidden="true">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div>
                                <h2 class="reg-section-title">Sibling Details</h2>
                                <p class="reg-section-sub">Please provide details of your brother/sister (if studying in this school).</p>
                            </div>
                        </div>

                        <!-- Row 1: First Sibling Name & Class -->
                        <div class="reg-grid-row two-cols">
                            <div class="reg-field-group">
                                <label for="regSib1Name" class="reg-field-label">First Sibling Name</label>
                                <div class="reg-input-wrap">
                                    <i class="fa-regular fa-user reg-input-icon" aria-hidden="true"></i>
                                    <input type="text" id="regSib1Name" name="sibling1_name" class="reg-input-control" placeholder="Enter first sibling name">
                                </div>
                            </div>

                            <div class="reg-field-group">
                                <label for="regSib1Class" class="reg-field-label">First Sibling Class</label>
                                <div class="reg-input-wrap">
                                    <i class="fa-solid fa-book-open reg-input-icon" aria-hidden="true"></i>
                                    <select id="regSib1Class" name="sibling1_class" class="reg-input-control">
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

                        <!-- Row 2: Second Sibling Name & Class -->
                        <div class="reg-grid-row two-cols">
                            <div class="reg-field-group">
                                <label for="regSib2Name" class="reg-field-label">Second Sibling Name</label>
                                <div class="reg-input-wrap">
                                    <i class="fa-regular fa-user reg-input-icon" aria-hidden="true"></i>
                                    <input type="text" id="regSib2Name" name="sibling2_name" class="reg-input-control" placeholder="Enter second sibling name">
                                </div>
                            </div>

                            <div class="reg-field-group">
                                <label for="regSib2Class" class="reg-field-label">Second Sibling Class</label>
                                <div class="reg-input-wrap">
                                    <i class="fa-solid fa-book-open reg-input-icon" aria-hidden="true"></i>
                                    <select id="regSib2Class" name="sibling2_class" class="reg-input-control">
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

                    <!-- Step 2 Actions Bar: Back & Continue -->
                    <div class="reg-actions-bar space-between">
                        <button type="button" class="reg-btn-back" onclick="switchRegStep(1)">
                            <i class="fa-solid fa-arrow-left" aria-hidden="true"></i>
                            <span>Back to Previous</span>
                        </button>
                        <button type="submit" class="reg-btn-continue">
                            <span>Continue</span>
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </button>
                    </div>

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

<script>
/**
 * Switch Registration Step in the same form
 * @param {number} stepNumber - 1 (General Details) or 2 (Personal Details)
 */
function switchRegStep(stepNumber) {
    var panel1 = document.getElementById('regStepPanel1');
    var panel2 = document.getElementById('regStepPanel2');
    var tab1 = document.getElementById('stepperTab1');
    var tab2 = document.getElementById('stepperTab2');
    var conn1 = document.getElementById('connector1');

    if (stepNumber === 2) {
        if (panel1 && panel2) {
            panel1.classList.remove('active');
            panel2.classList.add('active');
        }
        if (tab1) {
            tab1.classList.remove('active');
            tab1.classList.add('completed');
        }
        if (tab2) {
            tab2.classList.add('active');
        }
        if (conn1) {
            conn1.classList.add('active');
        }
    } else {
        if (panel1 && panel2) {
            panel2.classList.remove('active');
            panel1.classList.add('active');
        }
        if (tab1) {
            tab1.classList.add('active');
            tab1.classList.remove('completed');
        }
        if (tab2) {
            tab2.classList.remove('active');
        }
        if (conn1) {
            conn1.classList.remove('active');
        }
    }

    // Scroll smoothly to top of form card
    var container = document.getElementById('registrationFormContainer');
    if (container) {
        container.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
