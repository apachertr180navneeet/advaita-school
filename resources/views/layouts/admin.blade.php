<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Dashboard') · Advaita School of Excellence</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}?v={{ file_exists(public_path('assets/css/admin.css')) ? filemtime(public_path('assets/css/admin.css')) : '1.0' }}">
    @yield('styles')
</head>
<body>

    <!-- Admin Sidebar -->
    <aside class="admin-sidebar" id="adminSidebar">
        <!-- Brand Header -->
        <div class="sidebar-header">
            <div class="sidebar-brand-logo">
                <img src="{{ asset('assets/images/loader-logo.png') }}" alt="Advaita Logo">
            </div>
            <div class="sidebar-brand-text">
                <h2>ADVAITA</h2>
                <span>Admin Portal</span>
            </div>
        </div>

        <!-- Sidebar Navigation Menu -->
        <nav class="sidebar-menu">
            <div class="menu-category-title">Core &amp; Admissions</div>
            <ul class="sidebar-nav-list">
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="sidebar-nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="fa-solid fa-chart-pie"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.registrations.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.registrations.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-user-graduate"></i>
                        <span>Admissions</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.inquiries.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.inquiries.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-envelope-open-text"></i>
                        <span>Contact Inquiries</span>
                    </a>
                </li>
            </ul>

            <div class="menu-category-title">Programmes &amp; Academics</div>
            <ul class="sidebar-nav-list">
                <li>
                    <a href="{{ route('admin.academic-programmes.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.academic-programmes.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-book-open-reader"></i>
                        <span>Academic Programmes</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.results.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.results.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-trophy"></i>
                        <span>Results &amp; Achievements</span>
                    </a>
                </li>
            </ul>

            <div class="menu-category-title">Homepage Dynamic Sections</div>
            <ul class="sidebar-nav-list">
                <li>
                    <a href="{{ route('admin.sliders.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.sliders.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-images"></i>
                        <span>Hero Sliders</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.pillars.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.pillars.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-shapes"></i>
                        <span>Three Pillars</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.why-choose.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.why-choose.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-award"></i>
                        <span>Why Choose Advaita</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.campus-visit.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.campus-visit.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-school-flag"></i>
                        <span>Campus Visit Banner</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.gallery.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-camera-retro"></i>
                        <span>Campus Gallery</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.testimonials.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-comment-dots"></i>
                        <span>Parent Testimonials</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.faqs.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.faqs.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-circle-question"></i>
                        <span>FAQs</span>
                    </a>
                </li>
            </ul>

            <div class="menu-category-title">School Pages Content</div>
            <ul class="sidebar-nav-list">
                <li>
                    <a href="{{ route('admin.pages.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.pages.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <span>Pages Content Manager</span>
                    </a>
                </li>
            </ul>

            <div class="menu-category-title">SEO &amp; Site Configuration</div>
            <ul class="sidebar-nav-list">
                <li>
                    <a href="{{ route('admin.seo.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.seo.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                        <span>All-Pages SEO</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.site-settings.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.site-settings.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-sliders"></i>
                        <span>Global Site &amp; Contact</span>
                    </a>
                </li>
            </ul>

            <div class="menu-category-title">Quick Actions</div>
            <ul class="sidebar-nav-list">
                <li>
                    <a href="{{ route('home') }}" target="_blank" class="sidebar-nav-link">
                        <i class="fa-solid fa-globe"></i>
                        <span>Live Website</span>
                        <i class="fa-solid fa-arrow-up-right-from-square nav-external-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('online-registration') }}" target="_blank" class="sidebar-nav-link">
                        <i class="fa-solid fa-file-pen"></i>
                        <span>Registration Form</span>
                        <i class="fa-solid fa-arrow-up-right-from-square nav-external-icon"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Sidebar Footer / Current Admin -->
        <div class="sidebar-footer">
            <div class="user-profile-card">
                <div class="user-avatar-circle">
                    {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
                </div>
                <div class="user-info-text">
                    <div class="user-name">{{ Auth::user()->name ?? 'Administrator' }}</div>
                    <div class="user-role">{{ Auth::user()->email ?? 'admin@advaita.com' }}</div>
                </div>
                <form action="{{ route('admin.logout') }}" method="POST" class="m-0">
                    @csrf
                    <button type="submit" class="btn-logout-icon" title="Sign Out">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <!-- Main Content Area -->
    <div class="admin-main">
        <!-- Top Utility Bar -->
        <header class="admin-topbar">
            <div class="topbar-left">
                <button type="button" class="mobile-toggle-btn" id="sidebarToggleBtn" aria-label="Toggle menu">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="topbar-title">@yield('page_title', 'Dashboard Overview')</div>
            </div>

            <div class="topbar-right">
                <div class="date-pill">
                    <i class="fa-regular fa-calendar"></i>
                    <span>{{ date('l, d M Y') }}</span>
                </div>
                <a href="{{ route('home') }}" target="_blank" class="btn-visit-site" title="Open Website">
                    <i class="fa-solid fa-external-link"></i>
                    <span>Visit Website</span>
                </a>
            </div>
        </header>

        <!-- Page Body Content -->
        <main class="admin-content-body">
            @if(session('success'))
            <div class="flash-alert-wrap" data-swal-success="{{ session('success') }}">
                <div class="flash-toast success">
                    <i class="fa-solid fa-circle-check flash-toast-icon"></i>
                    <div>{{ session('success') }}</div>
                </div>
            </div>
            @endif

            @if(session('error'))
            <div class="flash-alert-wrap" data-swal-error="{{ session('error') }}">
                <div class="flash-toast error">
                    <i class="fa-solid fa-circle-exclamation flash-toast-icon"></i>
                    <div>{{ session('error') }}</div>
                </div>
            </div>
            @endif

            @yield('content')
        </main>
    </div>

    <!-- SweetAlert2 Core & Brand Helper -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/js/swal-helpers.js') }}?v={{ file_exists(public_path('assets/js/swal-helpers.js')) ? filemtime(public_path('assets/js/swal-helpers.js')) : '1.0' }}"></script>

    <script>
        // Mobile Sidebar Toggle
        const toggleBtn = document.getElementById('sidebarToggleBtn');
        const sidebar = document.getElementById('adminSidebar');

        if (toggleBtn && sidebar) {
            toggleBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                sidebar.classList.toggle('show');
            });

            document.addEventListener('click', function(e) {
                if (!sidebar.contains(e.target) && !toggleBtn.contains(e.target)) {
                    sidebar.classList.remove('show');
                }
            });
        }
    </script>
    @yield('scripts')
</body>
</html>
