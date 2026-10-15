<?php

$css = file_get_contents('public/assets/css/admin.css');

$themesAndForms = <<<CSS


/* ==========================================================================
   MODULE THEMES, FORM UTILITIES & STATUS TOGGLES
   ========================================================================== */

/* Theme Gradients */
.theme-gradient-orange { background: linear-gradient(135deg, #F37021 0%, #E05D0E 100%) !important; }
.theme-gradient-blue { background: linear-gradient(135deg, #0284C7 0%, #0369A1 100%) !important; }
.theme-gradient-teal { background: linear-gradient(135deg, #059669 0%, #047857 100%) !important; }
.theme-gradient-purple { background: linear-gradient(135deg, #7C3AED 0%, #6D28D9 100%) !important; }
.theme-gradient-coral { background: linear-gradient(135deg, #E11D48 0%, #BE123C 100%) !important; }
.theme-gradient-navy { background: linear-gradient(135deg, #083B7A 0%, #051A38 100%) !important; }
.theme-gradient-amber { background: linear-gradient(135deg, #F59E0B 0%, #D97706 100%) !important; }
.theme-gradient-emerald { background: linear-gradient(135deg, #10B981 0%, #059669 100%) !important; }
.theme-gradient-rose { background: linear-gradient(135deg, #F43F5E 0%, #E11D48 100%) !important; }

/* Theme Badges */
.theme-badge-orange { background: rgba(243, 112, 33, 0.12) !important; color: #F37021 !important; border: 1px solid rgba(243, 112, 33, 0.25) !important; }
.theme-badge-blue { background: rgba(2, 132, 199, 0.12) !important; color: #0284C7 !important; border: 1px solid rgba(2, 132, 199, 0.25) !important; }
.theme-badge-teal { background: rgba(5, 150, 105, 0.12) !important; color: #059669 !important; border: 1px solid rgba(5, 150, 105, 0.25) !important; }
.theme-badge-purple { background: rgba(124, 58, 237, 0.12) !important; color: #7C3AED !important; border: 1px solid rgba(124, 58, 237, 0.25) !important; }
.theme-badge-coral { background: rgba(225, 29, 72, 0.12) !important; color: #E11D48 !important; border: 1px solid rgba(225, 29, 72, 0.25) !important; }
.theme-badge-navy { background: rgba(8, 59, 122, 0.12) !important; color: #083B7A !important; border: 1px solid rgba(8, 59, 122, 0.25) !important; }
.theme-badge-amber { background: rgba(245, 158, 11, 0.12) !important; color: #F59E0B !important; border: 1px solid rgba(245, 158, 11, 0.25) !important; }
.theme-badge-emerald { background: rgba(16, 185, 129, 0.12) !important; color: #10B981 !important; border: 1px solid rgba(16, 185, 129, 0.25) !important; }
.theme-badge-rose { background: rgba(244, 63, 94, 0.12) !important; color: #F43F5E !important; border: 1px solid rgba(244, 63, 94, 0.25) !important; }

/* Theme Dots */
.theme-dot { width: 8px; height: 8px; border-radius: 50%; display: inline-block; }
.theme-dot-sm { width: 7px; height: 7px; border-radius: 50%; display: inline-block; }
.theme-dot-orange { background: #F37021 !important; }
.theme-dot-blue { background: #0284C7 !important; }
.theme-dot-teal { background: #059669 !important; }
.theme-dot-purple { background: #7C3AED !important; }
.theme-dot-coral { background: #E11D48 !important; }
.theme-dot-navy { background: #083B7A !important; }
.theme-dot-amber { background: #F59E0B !important; }
.theme-dot-emerald { background: #10B981 !important; }
.theme-dot-rose { background: #F43F5E !important; }

/* Form Utilities */
.form-card-max900 { max-width: 900px !important; }
.form-section-title { font-size: 18px; font-weight: 800; color: var(--admin-navy); margin-bottom: 20px; display: flex; align-items: center; gap: 10px; }
.form-action-footer { display: flex; justify-content: flex-end; gap: 12px; margin-top: 24px; padding-top: 20px; border-top: 1px solid var(--admin-border); }
.form-error-msg { font-size: 12px; color: #EF4444 !important; font-weight: 600; margin-top: 4px; display: block; }
.form-switch-wrap { display: flex; align-items: center; gap: 10px; cursor: pointer; user-select: none; }
.form-switch-label { font-size: 14px; font-weight: 700; color: var(--admin-navy); }
.form-input-clean { width: 100%; padding: 9px 12px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 13.5px; }
.form-textarea-clean { width: 100%; padding: 9px 12px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 13.5px; resize: vertical; }
.form-label-bold { font-size: 12.5px; font-weight: 700; color: var(--admin-navy); display: block; margin-bottom: 6px; }
.form-label-orange { font-size: 12.5px; font-weight: 700; color: var(--admin-orange); display: block; margin-bottom: 6px; }
.filter-bar-wrap { display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 12px; }
.filter-bar-inputs { display: flex; gap: 12px; flex: 1; max-width: 600px; }
.btn-filter-submit { background: var(--admin-navy); color: #ffffff; border: none; padding: 9px 20px; border-radius: 8px; font-weight: 700; font-size: 13px; cursor: pointer; }
.btn-status-toggle { border-radius: 20px; padding: 5px 12px; font-size: 12px; cursor: pointer; }
.btn-status-toggle.is-active { background: #DCFCE7 !important; color: #15803D !important; border: 1px solid #86EFAC !important; }
.btn-status-toggle.is-inactive { background: #F1F5F9 !important; color: #64748B !important; border: 1px solid #E2E8F0 !important; }

/* Inquiries & Registrations Badges */
.avatar-circle-sm { width: 28px; height: 28px; border-radius: 50%; background: #0284C7; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 11px; }
.notice-box-orange { background: #FFF7ED; border: 1px solid #FED7AA; border-radius: 12px; padding: 18px; }
.notice-box-green { background: #F0FDF4; border: 1px solid #BBF7D0; border-radius: 12px; padding: 18px; }
.divider-subtle { border: none; border-top: 1px solid var(--admin-border); margin: 16px 0; }
.btn-dark-slate { width: 100%; justify-content: center; background: #334155 !important; }
.fs-8 { font-size: 8px !important; }
.fs-10 { font-size: 10px !important; }
.fs-11 { font-size: 11px !important; }
.fs-12 { font-size: 12px !important; }
.fs-13 { font-size: 13px !important; }
.fs-14 { font-size: 14px !important; }
.fs-15 { font-size: 15px !important; }
.fs-18 { font-size: 18px !important; }
.fs-24 { font-size: 24px !important; }
.fs-28 { font-size: 28px !important; }
.card-grid-260 { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px; margin-bottom: 20px; }

CSS;

if (!str_contains($css, 'MODULE THEMES, FORM UTILITIES')) {
    file_put_contents('public/assets/css/admin.css', $css . $themesAndForms);
    echo "Appended module themes and form utilities to admin.css\n";
} else {
    echo "Already contains module themes\n";
}
