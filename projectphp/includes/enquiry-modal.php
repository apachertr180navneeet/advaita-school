<!-- =========================================================================
     GLOBAL QUICK ADMISSION ENQUIRY MODAL (Available across all pages)
     ========================================================================= -->
<div id="advEnquiryModal" class="adv-enquiry-modal-backdrop" aria-hidden="true">
    <div class="adv-enquiry-modal-card" role="dialog" aria-modal="true" aria-labelledby="enquiryModalTitle">
        <div class="aem-header">
            <h3 class="aem-title" id="enquiryModalTitle">
                <i class="fa-solid fa-paper-plane text-orange"></i>
                <span>Quick Admission Enquiry</span>
            </h3>
            <button type="button" class="aem-close-btn" onclick="closeEnquiryModal()" aria-label="Close dialog">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="aem-body" id="enquiryModalBody">
            <!-- Live Alert Container -->
            <div id="modalAlertBox" style="display: none;" class="mb-14"></div>

            <form action="#" method="POST" id="quickAdmissionModalForm" onsubmit="event.preventDefault(); var p = document.getElementById('modal_parent_name').value || 'Parent'; var w = document.getElementById('modal_ward_name').value || 'Child'; document.getElementById('enquiryModalBody').innerHTML = '<div class=\'aem-success-box\'><div class=\'asb-icon-wrap\'><i class=\'fa-solid fa-check\'></i></div><h4 class=\'asb-title\'>Enquiry Received!</h4><p class=\'asb-desc\'>Thank you, <strong>' + p + '</strong>! Your admission enquiry for <strong>' + w + '</strong> has been successfully registered. Our admission counselor (<strong>Ms. Vaishnavi</strong>) will contact you shortly.</p><div class=\'d-flex flex-column gap-10\'><a href=\'https://wa.me/919689898973?text=Hello%20Ms.%20Vaishnavi,%20I%20have%20submitted%20an%20admission%20enquiry%20for%20' + encodeURIComponent(w) + '.\' target=\'_blank\' rel=\'noopener noreferrer\' class=\'btn-apc-primary justify-content-center\' style=\'width: 100%;\'><i class=\'fa-brands fa-whatsapp\'></i><span>Chat on WhatsApp</span></a><button type=\'button\' onclick=\'closeEnquiryModal()\' class=\'btn-cta-action blue-btn justify-content-center py-10\' style=\'width: 100%; border: none; cursor: pointer; border-radius: 9999px; background: #083B7A; color: #fff; font-weight: 700; padding: 10px 16px;\'><span>Done</span></button></div></div>';">

                <input type="hidden" name="academic_year" value="2027-28">

                <div class="mb-14">
                    <label class="form-label font-bold text-navy fs-13 mb-4" for="modal_parent_name">
                        Parent / Guardian Name <span class="text-danger">*</span>
                    </label>
                    <div class="input-with-icon-wrap">
                        <i class="fa-regular fa-user"></i>
                        <input type="text" id="modal_parent_name" name="parent_name" 
                               class="form-control" placeholder="e.g. Rameshwar Patil" required maxlength="255">
                    </div>
                </div>

                <div class="mb-14">
                    <label class="form-label font-bold text-navy fs-13 mb-4" for="modal_ward_name">
                        Ward / Child Name <span class="text-danger">*</span>
                    </label>
                    <div class="input-with-icon-wrap">
                        <i class="fa-solid fa-child"></i>
                        <input type="text" id="modal_ward_name" name="ward_name" 
                               class="form-control" placeholder="e.g. Aarav Patil" required maxlength="255">
                    </div>
                </div>

                <div class="mb-14">
                    <label class="form-label font-bold text-navy fs-13 mb-4" for="modal_mobile_number">
                        Mobile Number (10 Digits) <span class="text-danger">*</span>
                    </label>
                    <div class="input-with-icon-wrap">
                        <i class="fa-solid fa-phone"></i>
                        <input type="tel" id="modal_mobile_number" name="mobile_number" 
                               class="form-control" placeholder="e.g. 9822012345" required pattern="[6-9][0-9]{9}" maxlength="10">
                    </div>
                </div>

                <div class="mb-14">
                    <label class="form-label font-bold text-navy fs-13 mb-4" for="modal_applying_class">
                        Target Class
                    </label>
                    <div class="input-with-icon-wrap">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <select id="modal_applying_class" name="applying_class" class="form-control">
                            <option value="">Select target class...</option>
                            <?php foreach (['Nursery', 'LKG', 'UKG', 'Class 1', 'Class 2', 'Class 3', 'Class 4', 'Class 5', 'Class 6', 'Class 7', 'Class 8', 'Class 9', 'Class 10'] as $cls) { ?>
                            <option value="<?php echo $cls; ?>"><?php echo $cls; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="mb-20">
                    <label class="form-label font-bold text-navy fs-13 mb-4" for="modal_notes">
                        Specific Questions / Notes (Optional)
                    </label>
                    <textarea id="modal_notes" name="notes" rows="2" class="form-control" 
                              placeholder="e.g. Transport route, school timings, admission schedule..."></textarea>
                </div>

                <button type="submit" id="modalSubmitBtn" class="btn-apc-primary w-100 justify-content-center" style="border: none; cursor: pointer;">
                    <i class="fa-solid fa-paper-plane" id="modalSubmitIcon"></i>
                    <span id="modalSubmitText">Submit Enquiry</span>
                </button>

                <div class="text-center mt-12 text-muted fs-11">
                    <i class="fa-solid fa-shield-halved text-success me-1"></i> Your contact details will be kept confidential.
                </div>
            </form>
        </div>
    </div>
</div>
