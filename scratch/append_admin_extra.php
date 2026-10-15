<?php

$css = file_get_contents('public/assets/css/admin.css');

$extra = <<<CSS


/* ==========================================================================
   EXTRA UTILITIES FOR PAGES, SEO, SETTINGS & DASHBOARD
   ========================================================================== */

.card-subgrid-2col { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px; margin-bottom: 18px; }
.dot-icon { font-size: 5px; }
.icon-sm-offset { font-size: 9px; margin-left: 2px; }
.shb-badge-label { font-size: 11.5px; opacity: 0.8; display: block; margin-bottom: 4px; }
.shb-badge-pill { background: rgba(255,255,255,0.2); padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 700; letter-spacing: 0.5px; }
.icon-badge-orange { color: var(--admin-orange) !important; background: rgba(243, 112, 33, 0.1) !important; }
.panel-card-accent-orange { border-left: 4px solid var(--admin-orange) !important; }
.input-quote-style { font-style: italic; background: #FFFDF9; border-color: rgba(243, 112, 33, 0.3); }
.status-pulse-dot { width: 10px; height: 10px; border-radius: 50%; background: #10B981; display: inline-block; box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.2); }
.save-status-text { font-size: 13px; font-weight: 600; color: #475569; }
.page-nav-arrow { font-size: 10px; }
.opacity-100 { opacity: 1 !important; }
.opacity-30 { opacity: 0.3 !important; }
.opacity-40 { opacity: 0.4 !important; }

/* Dashboard Table & Metric helpers */
.text-inherit-link { text-decoration: none; color: inherit; }
.td-code { font-family: monospace; color: var(--admin-navy); }
.td-main-bold { font-weight: 700; color: #0F172A; font-size: 13.5px; }
.td-sub-muted { font-size: 11.5px; color: #64748B; }
.td-semi-bold { font-weight: 600; color: #334155; }
.td-body-slate { font-size: 12.5px; color: #334155; }
.td-date-muted { font-size: 11px; color: #94A3B8; }
.table-badge-select { padding: 4px 8px; font-size: 11.5px; font-weight: 600; border-radius: 6px; }
.fs-10 { font-size: 10px; }
.table-empty-row { text-align: center; color: #94A3B8; padding: 40px; }
.td-ellipsis-260 { max-width: 260px; font-size: 12px; color: #64748B; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
.meta-pill-label { font-size: 12px; font-weight: 700; text-transform: uppercase; color: #64748B; margin-bottom: 6px; }
.badge-sky-solid { background: #E0F2FE; color: #0369A1; border: 1px solid #BAE6FD; }
.btn-navy-solid { background: var(--admin-navy); color: #ffffff; }

/* Site Settings Components */
.settings-row-2col { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
.settings-card-title { font-size: 16px; font-weight: 700; color: var(--admin-text-main); margin: 0; }
.settings-card-subtitle { font-size: 12px; color: var(--admin-text-muted); }
.settings-card-body { display: flex; flex-direction: column; gap: 16px; }
.settings-label { display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155; }
.settings-social-label { display: flex; align-items: center; gap: 6px; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155; }

CSS;

if (!str_contains($css, 'EXTRA UTILITIES FOR PAGES')) {
    file_put_contents('public/assets/css/admin.css', $css . $extra);
    echo "Appended extra admin utilities\n";
} else {
    echo "Already appended\n";
}
