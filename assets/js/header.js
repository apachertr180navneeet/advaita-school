/**
 * Advaita School Header & Responsive Navigation Interactions
 * Smooth handling for Mobile, Tablets, and Desktop
 */
document.addEventListener('DOMContentLoaded', () => {
    // 1. Header Sticky Effect
    const mainHeader = document.querySelector('.adv-main-header');
    if (mainHeader) {
        const handleScroll = () => {
            if (window.scrollY > 35) {
                mainHeader.classList.add('is-scrolled');
            } else {
                mainHeader.classList.remove('is-scrolled');
            }
        };
        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll();
    }

    // 2. Mobile / Tablet Drawer Elements
    const mobileToggle = document.getElementById('advMenuToggleBtn');
    const mobileDrawer = document.getElementById('advMobileDrawer');
    const mobileBackdrop = document.getElementById('advDrawerBackdrop');
    const mobileClose = document.getElementById('advDrawerCloseBtn');

    function openMobileDrawer() {
        if (mobileDrawer) mobileDrawer.classList.add('is-open');
        if (mobileBackdrop) mobileBackdrop.classList.add('is-open');
        document.body.classList.add('adv-drawer-open');
    }

    function closeMobileDrawer() {
        if (mobileDrawer) mobileDrawer.classList.remove('is-open');
        if (mobileBackdrop) mobileBackdrop.classList.remove('is-open');
        document.body.classList.remove('adv-drawer-open');
    }

    if (mobileToggle) {
        mobileToggle.addEventListener('click', (e) => {
            e.preventDefault();
            openMobileDrawer();
        });
    }

    if (mobileClose) {
        mobileClose.addEventListener('click', (e) => {
            e.preventDefault();
            closeMobileDrawer();
        });
    }

    if (mobileBackdrop) {
        mobileBackdrop.addEventListener('click', closeMobileDrawer);
    }

    // Close on ESC key press
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileDrawer && mobileDrawer.classList.contains('is-open')) {
            closeMobileDrawer();
        }
    });

    // Close mobile drawer automatically if resized back to large desktop
    window.addEventListener('resize', () => {
        if (window.innerWidth > 1140 && mobileDrawer && mobileDrawer.classList.contains('is-open')) {
            closeMobileDrawer();
        }
    }, { passive: true });

    // 3. Mobile / Tablet Submenus Accordion
    const expandableItems = document.querySelectorAll('.adv-mobile-item.has-children');
    
    expandableItems.forEach(item => {
        const trigger = item.querySelector('.adv-mobile-link');
        const submenu = item.querySelector('.adv-mobile-submenu');

        if (trigger && submenu) {
            trigger.addEventListener('click', (e) => {
                e.preventDefault();
                const isCurrentlyOpen = item.classList.contains('is-active');

                // Close all sibling accordions for clean accordion UX
                expandableItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('is-active');
                        const otherLink = otherItem.querySelector('.adv-mobile-link');
                        const otherSub = otherItem.querySelector('.adv-mobile-submenu');
                        if (otherLink) otherLink.setAttribute('aria-expanded', 'false');
                        if (otherSub) otherSub.classList.remove('is-expanded');
                    }
                });

                // Toggle current
                if (isCurrentlyOpen) {
                    item.classList.remove('is-active');
                    trigger.setAttribute('aria-expanded', 'false');
                    submenu.classList.remove('is-expanded');
                } else {
                    item.classList.add('is-active');
                    trigger.setAttribute('aria-expanded', 'true');
                    submenu.classList.add('is-expanded');
                }
            });
        }
    });

    // Close drawer when clicking a non-expandable link (anchor links)
    const directLinks = document.querySelectorAll('.adv-mobile-submenu-link, .adv-mobile-item:not(.has-children) .adv-mobile-link');
    directLinks.forEach(link => {
        link.addEventListener('click', () => {
            closeMobileDrawer();
        });
    });
});
