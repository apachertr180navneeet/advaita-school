<?php

$stylePath = 'public/assets/css/style.css';
$css = file_get_contents($stylePath);

$addition = <<<CSS


/* ==========================================================================
   FRONTEND GLOBAL UTILITIES & NOTIFICATIONS (NO-INLINE-CSS REFACTOR)
   ========================================================================== */

/* Flash Notifications (extracted from layouts/app.blade.php) */
.adv-flash-alert-container {
    position: fixed;
    top: 24px;
    right: 24px;
    z-index: 99999;
    max-width: 440px;
    width: calc(100% - 48px);
    pointer-events: none;
}
.adv-flash-alert {
    pointer-events: auto;
    display: flex;
    align-items: flex-start;
    gap: 14px;
    padding: 16px 20px;
    border-radius: 12px;
    box-shadow: 0 14px 35px rgba(8, 59, 122, 0.18), 0 4px 10px rgba(0, 0, 0, 0.08);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    animation: slideDownFade 0.4s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    font-family: 'Plus Jakarta Sans', sans-serif;
    margin-bottom: 12px;
}
.adv-flash-success {
    background: linear-gradient(135deg, #059669 0%, #10B981 100%);
    color: #ffffff;
    border-left: 5px solid #34D399;
}
.adv-flash-error {
    background: linear-gradient(135deg, #DC2626 0%, #EF4444 100%);
    color: #ffffff;
    border-left: 5px solid #F87171;
}
.adv-flash-icon {
    font-size: 20px;
    line-height: 1;
    margin-top: 2px;
    flex-shrink: 0;
}
.adv-flash-content {
    flex: 1;
}
.adv-flash-title {
    font-weight: 700;
    font-size: 15px;
    margin-bottom: 4px;
}
.adv-flash-message {
    font-size: 13.5px;
    opacity: 0.95;
    line-height: 1.45;
}
.adv-flash-close {
    background: transparent;
    border: none;
    color: #ffffff;
    opacity: 0.75;
    cursor: pointer;
    font-size: 16px;
    padding: 0;
    transition: opacity 0.2s;
}
.adv-flash-close:hover {
    opacity: 1;
}
.adv-alert-error-list {
    margin: 0;
    padding-left: 18px;
}

@keyframes slideDownFade {
    from {
        opacity: 0;
        transform: translateY(-20px) scale(0.96);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

/* Topbar Admin Link */
.adv-topbar-admin-badge {
    color: #ffffff;
    font-size: 11.5px;
    font-weight: 700;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    background: rgba(255, 255, 255, 0.15);
    padding: 3px 10px;
    border-radius: 20px;
    margin-left: 12px;
    transition: background 0.2s ease;
}
.adv-topbar-admin-badge:hover {
    background: rgba(255, 255, 255, 0.25);
    color: #ffffff;
}
.adv-topbar-admin-icon {
    font-size: 10px;
    color: #F37021;
}

/* Map Iframes */
.adv-footer-map-iframe,
.contact-google-map-iframe {
    border: 0;
}

/* Text highlights & empty state */
.text-adv-orange {
    color: #F37021 !important;
}
.adv-empty-grid-msg {
    grid-column: 1 / -1;
    color: #64748B;
    padding: 40px 0;
}
.adv-faq-answer.active {
    display: block;
}

/* Fee Structure Table Classes */
.fee-th-class { width: 22%; }
.fee-th-col20 { width: 20%; }
.fee-th-col18 { width: 18%; }
.fee-th-col25 { width: 25%; }
.fee-th-subtext {
    font-size: 0.72rem;
    font-weight: 500;
    color: #64748b;
}
.fee-table-hidden {
    display: none;
}

/* Online Registration Form Classes */
.reg-input-icon.reg-input-icon-textarea {
    top: 16px;
}
.reg-file-input-hidden {
    display: none;
}
.reg-upload-success-icon {
    color: #059669;
}
.reg-upload-success-text {
    color: #059669;
    font-weight: 600;
}

/* Gallery Theme Color Modifiers */
.adv-gal-card-icon.gal-theme-red { background: #fee2e2; color: #ef4444; }
.adv-gal-card-btn.gal-theme-red { background: #ef4444; }

.adv-gal-card-icon.gal-theme-orange { background: #ffedd5; color: #f97316; }
.adv-gal-card-btn.gal-theme-orange { background: #f97316; }

.adv-gal-card-icon.gal-theme-green { background: #dcfce7; color: #22c55e; }
.adv-gal-card-btn.gal-theme-green { background: #22c55e; }

.adv-gal-card-icon.gal-theme-purple { background: #f3e8ff; color: #8b5cf6; }
.adv-gal-card-btn.gal-theme-purple { background: #8b5cf6; }

.adv-gal-card-icon.gal-theme-pink { background: #fce7f3; color: #ec4899; }
.adv-gal-card-btn.gal-theme-pink { background: #ec4899; }

.adv-gal-card-icon.gal-theme-sky { background: #e0f2fe; color: #0284c7; }
.adv-gal-card-btn.gal-theme-sky { background: #0284c7; }

.adv-gal-card-icon.gal-theme-teal { background: #ccfbf1; color: #0d9488; }
.adv-gal-card-btn.gal-theme-teal { background: #0d9488; }

.adv-gal-card-icon.gal-theme-rose { background: #ffe4e6; color: #e11d48; }
.adv-gal-card-btn.gal-theme-rose { background: #e11d48; }

.adv-gal-card-icon.gal-theme-amber { background: #fef3c7; color: #f59e0b; }
.adv-gal-card-btn.gal-theme-amber { background: #f59e0b; }

.adv-gal-card-icon.gal-theme-emerald { background: #bbf7d0; color: #16a34a; }
.adv-gal-card-btn.gal-theme-emerald { background: #16a34a; }

.adv-gal-card-icon.gal-theme-fuchsia { background: #fbcfe8; color: #db2777; }
.adv-gal-card-btn.gal-theme-fuchsia { background: #db2777; }

.adv-gal-card-icon.gal-theme-cyan { background: #cffafe; color: #06b6d4; }
.adv-gal-card-btn.gal-theme-cyan { background: #06b6d4; }

.adv-gal-card-icon.gal-theme-orange-dark { background: #ffedd5; color: #ea580c; }
.adv-gal-card-btn.gal-theme-orange-dark { background: #ea580c; }

.adv-gal-card-icon.gal-theme-violet { background: #ede9fe; color: #7c3aed; }
.adv-gal-card-btn.gal-theme-violet { background: #7c3aed; }

.adv-gal-card-icon.gal-theme-blue { background: #dbeafe; color: #2563eb; }
.adv-gal-card-btn.gal-theme-blue { background: #2563eb; }

.adv-gal-card-icon.gal-theme-forest { background: #dcfce7; color: #15803d; }
.adv-gal-card-btn.gal-theme-forest { background: #15803d; }

CSS;

if (!str_contains($css, 'NO-INLINE-CSS REFACTOR')) {
    file_put_contents($stylePath, $css . $addition);
    echo "Appended frontend CSS successfully to $stylePath\n";
} else {
    echo "Already contains frontend CSS additions\n";
}
