/**
 * Advaita School Footer Interactions
 * Scroll to top, floating mobile enquiry capsule & global enquiry modal
 */

// Global Enquiry Modal Controls
window.openEnquiryModal = function() {
    const modal = document.getElementById('advEnquiryModal');
    if (modal) {
        modal.classList.add('active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';

        // Hide floating bar when modal is open
        const floatingBar = document.getElementById('floatingMobileEnquiry');
        if (floatingBar) {
            floatingBar.classList.add('fme-hidden');
        }
    }
};

window.closeEnquiryModal = function() {
    const modal = document.getElementById('advEnquiryModal');
    if (modal) {
        modal.classList.remove('active');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';

        // Check if floating bar should be re-shown
        if (typeof window.advCheckFloatingEnquiry === 'function') {
            window.advCheckFloatingEnquiry();
        }
    }
};

document.addEventListener('DOMContentLoaded', () => {
    // ----------------------------------------------------
    // 1. Scroll-to-Top Button
    // ----------------------------------------------------
    const scrollTopBtn = document.getElementById('advScrollTopBtn');
    if (scrollTopBtn) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                scrollTopBtn.classList.add('is-visible');
            } else {
                scrollTopBtn.classList.remove('is-visible');
            }
        }, { passive: true });

        scrollTopBtn.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // ----------------------------------------------------
    // 2. Mobile Floating Admission Enquiry Pill (Auto-Hide at Bottom)
    // ----------------------------------------------------
    const floatingBar = document.getElementById('floatingMobileEnquiry');
    if (floatingBar) {
        const footer = document.querySelector('.adv-footer-wrapper') || document.querySelector('footer');
        let ticking = false;

        window.advCheckFloatingEnquiry = function() {
            // Only active on mobile viewport <= 768px
            if (window.innerWidth > 768) {
                floatingBar.classList.remove('fme-hidden');
                ticking = false;
                return;
            }

            // Don't unhide if enquiry modal is currently open
            const modal = document.getElementById('advEnquiryModal');
            if (modal && modal.classList.contains('active')) {
                floatingBar.classList.add('fme-hidden');
                ticking = false;
                return;
            }

            const scrollBottom = window.innerHeight + window.pageYOffset;
            const totalHeight = document.documentElement.scrollHeight;
            const distanceToPageEnd = totalHeight - scrollBottom;

            let footerIntersecting = false;
            if (footer) {
                const footerRect = footer.getBoundingClientRect();
                // Footer is visible in viewport or near viewport bottom
                footerIntersecting = footerRect.top < (window.innerHeight - 30);
            }

            // Hide when footer reaches viewport or near bottom of document (within 140px)
            if (footerIntersecting || distanceToPageEnd < 140) {
                floatingBar.classList.add('fme-hidden');
            } else {
                floatingBar.classList.remove('fme-hidden');
            }

            ticking = false;
        };

        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(window.advCheckFloatingEnquiry);
                ticking = true;
            }
        }, { passive: true });

        window.addEventListener('resize', window.advCheckFloatingEnquiry, { passive: true });

        // Initial visibility check after layout render
        setTimeout(window.advCheckFloatingEnquiry, 150);
    }

    // ----------------------------------------------------
    // 3. Global Quick Admission Enquiry Modal Backdrop & Escape Key
    // ----------------------------------------------------
    const enquiryModal = document.getElementById('advEnquiryModal');
    if (enquiryModal) {
        enquiryModal.addEventListener('click', function(e) {
            if (e.target === this) {
                window.closeEnquiryModal();
            }
        });
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            window.closeEnquiryModal();
        }
    });

    // ----------------------------------------------------
    // 4. AJAX Submission for Global Quick Admission Modal Form
    // ----------------------------------------------------
    const quickForm = document.getElementById('quickAdmissionModalForm');
    if (quickForm) {
        quickForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const form = this;
            const submitBtn = document.getElementById('modalSubmitBtn');
            const submitIcon = document.getElementById('modalSubmitIcon');
            const submitText = document.getElementById('modalSubmitText');
            const alertBox = document.getElementById('modalAlertBox');
            const bodyBox = document.getElementById('enquiryModalBody');

            if (alertBox) {
                alertBox.style.display = 'none';
                alertBox.innerHTML = '';
            }

            if (submitBtn) submitBtn.disabled = true;
            if (submitIcon) submitIcon.className = 'fa-solid fa-spinner fa-spin';
            if (submitText) submitText.innerText = 'Submitting...';

            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(data => { throw data; });
                }
                return response.json();
            })
            .then(data => {
                const parentName = formData.get('parent_name') || 'Parent';
                const wardName = formData.get('ward_name') || 'Child';
                const phone = '9689898973';
                const counsellor = 'Ms. Vaishnavi';

                if (bodyBox) {
                    bodyBox.innerHTML = `
                        <div class="aem-success-box">
                            <div class="asb-icon-wrap">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <h4 class="asb-title">Enquiry Received!</h4>
                            <p class="asb-desc">
                                Thank you, <strong>${parentName}</strong>! Your admission enquiry for <strong>${wardName}</strong> has been successfully registered. Our admission counselor (<strong>${counsellor}</strong>) will contact you shortly.
                            </p>
                            <div class="d-flex flex-column gap-10">
                                <a href="https://wa.me/91${phone}?text=Hello%20${encodeURIComponent(counsellor)},%20I%20have%20submitted%20an%20admission%20enquiry%20for%20${encodeURIComponent(wardName)}." target="_blank" rel="noopener noreferrer" class="btn-apc-primary justify-content-center" style="width: 100%;">
                                    <i class="fa-brands fa-whatsapp"></i>
                                    <span>Chat on WhatsApp</span>
                                </a>
                                <button type="button" onclick="closeEnquiryModal()" class="btn-cta-action blue-btn justify-content-center py-10" style="width: 100%; border: none; cursor: pointer; border-radius: 9999px; background: #083B7A; color: #fff; font-weight: 700; padding: 10px 16px;">
                                    <span>Done</span>
                                </button>
                            </div>
                        </div>
                    `;
                }
            })
            .catch(error => {
                if (submitBtn) submitBtn.disabled = false;
                if (submitIcon) submitIcon.className = 'fa-solid fa-paper-plane';
                if (submitText) submitText.innerText = 'Submit Enquiry';

                let errorHtml = '<div class="alert alert-danger p-12 fs-13 mb-0" style="background:#FEE2E2;border:1px solid #FCA5A5;color:#991B1B;border-radius:10px;">';
                if (error && error.errors) {
                    const errorList = Object.values(error.errors).flat();
                    errorHtml += '<ul class="mb-0 ps-16">' + errorList.map(err => `<li>${err}</li>`).join('') + '</ul>';
                } else if (error && error.message) {
                    errorHtml += `<span>${error.message}</span>`;
                } else {
                    errorHtml += '<span>Something went wrong while submitting. Please try again or call us directly.</span>';
                }
                errorHtml += '</div>';

                if (alertBox) {
                    alertBox.innerHTML = errorHtml;
                    alertBox.style.display = 'block';
                    alertBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }
            });
        });
    }
});
