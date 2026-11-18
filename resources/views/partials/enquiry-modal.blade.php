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

            <form action="{{ route('admission-enquiry.store') }}" method="POST" id="quickAdmissionModalForm">
                @csrf

                <!-- Honeypot anti-spam -->
                <div style="display:none !important;" aria-hidden="true">
                    <input type="text" name="website" tabindex="-1" autocomplete="off">
                    <input type="text" name="security_token_trap" tabindex="-1" autocomplete="off">
                </div>

                <input type="hidden" name="academic_year" value="{{ $academicYear ?? '2026-27' }}">

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
                            @foreach($classList ?? ['Nursery', 'LKG', 'UKG', 'Class 1', 'Class 2', 'Class 3', 'Class 4', 'Class 5', 'Class 6', 'Class 7', 'Class 8', 'Class 9', 'Class 10'] as $cls)
                            <option value="{{ $cls }}">{{ $cls }}</option>
                            @endforeach
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
