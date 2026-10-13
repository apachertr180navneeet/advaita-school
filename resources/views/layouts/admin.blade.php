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

    <style>
        :root {
            --admin-navy: #083B7A;
            --admin-navy-deep: #051A38;
            --admin-navy-darker: #030F22;
            --admin-orange: #F37021;
            --admin-orange-hover: #D9560A;
            --admin-bg: #F8FAFC;
            --admin-surface: #FFFFFF;
            --admin-border: #E2E8F0;
            --admin-text-main: #0F172A;
            --admin-text-muted: #64748B;
            --admin-success: #10B981;
            --admin-warning: #F59E0B;
            --admin-danger: #EF4444;
            --admin-info: #0284C7;
            --sidebar-width: 260px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--admin-bg);
            color: var(--admin-text-main);
            min-height: 100vh;
            display: flex;
        }

        /* Sidebar */
        .admin-sidebar {
            width: var(--sidebar-width);
            background: linear-gradient(180deg, #061A38 0%, #030F24 100%);
            color: #ffffff;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            border-right: 1px solid rgba(255, 255, 255, 0.08);
            transition: transform 0.3s ease;
        }

        .sidebar-header {
            padding: 24px 20px;
            display: flex;
            align-items: center;
            gap: 14px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .sidebar-brand-logo {
            width: 44px;
            height: 44px;
            background: #ffffff;
            border-radius: 12px;
            padding: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            flex-shrink: 0;
        }

        .sidebar-brand-logo img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .sidebar-brand-text h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            font-weight: 800;
            letter-spacing: 0.5px;
            color: #FFFFFF;
            line-height: 1.2;
        }

        .sidebar-brand-text span {
            font-size: 11px;
            color: var(--admin-orange);
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .sidebar-menu {
            padding: 20px 14px;
            flex: 1;
            overflow-y: auto;
        }

        .menu-category-title {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            color: #64748B;
            font-weight: 700;
            margin: 16px 10px 8px 10px;
        }

        .sidebar-nav-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .sidebar-nav-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 14px;
            border-radius: 10px;
            color: #94A3B8;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .sidebar-nav-link i {
            font-size: 16px;
            width: 20px;
            text-align: center;
            color: #64748B;
            transition: color 0.2s;
        }

        .sidebar-nav-link:hover {
            color: #FFFFFF;
            background: rgba(255, 255, 255, 0.06);
        }

        .sidebar-nav-link:hover i {
            color: #38BDF8;
        }

        .sidebar-nav-link.active {
            color: #FFFFFF;
            background: linear-gradient(135deg, rgba(243, 112, 33, 0.25) 0%, rgba(8, 59, 122, 0.4) 100%);
            border: 1px solid rgba(243, 112, 33, 0.4);
            box-shadow: 0 4px 15px rgba(243, 112, 33, 0.15);
        }

        .sidebar-nav-link.active i {
            color: var(--admin-orange);
        }

        .nav-badge {
            margin-left: auto;
            background: rgba(243, 112, 33, 0.2);
            color: #FF9B5E;
            font-size: 11px;
            font-weight: 700;
            padding: 2px 8px;
            border-radius: 12px;
            border: 1px solid rgba(243, 112, 33, 0.35);
        }

        /* Sidebar Footer */
        .sidebar-footer {
            padding: 16px 14px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            background: rgba(0, 0, 0, 0.2);
        }

        .user-profile-card {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .user-avatar-circle {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: linear-gradient(135deg, #0284C7, #083B7A);
            color: #ffffff;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            flex-shrink: 0;
            border: 2px solid rgba(255, 255, 255, 0.15);
        }

        .user-info-text {
            flex: 1;
            min-width: 0;
        }

        .user-name {
            font-size: 13.5px;
            font-weight: 700;
            color: #FFFFFF;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .user-role {
            font-size: 11px;
            color: #94A3B8;
        }

        .btn-logout-icon {
            background: rgba(239, 68, 68, 0.15);
            color: #F87171;
            border: 1px solid rgba(239, 68, 68, 0.3);
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-logout-icon:hover {
            background: #EF4444;
            color: #ffffff;
        }

        /* Main Content Container */
        .admin-main {
            margin-left: var(--sidebar-width);
            flex: 1;
            display: flex;
            flex-direction: column;
            min-width: 0;
            min-height: 100vh;
        }

        /* Top Bar */
        .admin-topbar {
            height: 70px;
            background: #ffffff;
            border-bottom: 1px solid var(--admin-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 32px;
            position: sticky;
            top: 0;
            z-index: 900;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02);
        }

        .topbar-left {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .mobile-toggle-btn {
            display: none;
            background: transparent;
            border: 1px solid var(--admin-border);
            border-radius: 8px;
            padding: 8px 12px;
            font-size: 18px;
            color: var(--admin-text-main);
            cursor: pointer;
        }

        .topbar-title {
            font-size: 18px;
            font-weight: 800;
            color: var(--admin-navy-deep);
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .btn-visit-site {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            border-radius: 8px;
            background: rgba(8, 59, 122, 0.06);
            color: var(--admin-navy);
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            border: 1px solid rgba(8, 59, 122, 0.15);
            transition: all 0.2s;
        }

        .btn-visit-site:hover {
            background: var(--admin-navy);
            color: #ffffff;
        }

        .date-pill {
            font-size: 13px;
            color: var(--admin-text-muted);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Page Content Area */
        .admin-content-body {
            padding: 32px;
            flex: 1;
        }

        /* Alerts in layout */
        .flash-alert-wrap {
            margin-bottom: 24px;
        }

        .flash-toast {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 14px 18px;
            border-radius: 10px;
            font-size: 14px;
            margin-bottom: 12px;
            animation: fadeIn 0.3s ease;
        }

        .flash-toast.success {
            background: #ECFDF5;
            border-left: 4px solid var(--admin-success);
            color: #065F46;
        }

        .flash-toast.error {
            background: #FEF2F2;
            border-left: 4px solid var(--admin-danger);
            color: #991B1B;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Breakpoints */
        @media (max-width: 992px) {
            .admin-sidebar {
                transform: translateX(-100%);
            }
            .admin-sidebar.show {
                transform: translateX(0);
            }
            .admin-main {
                margin-left: 0;
            }
            .mobile-toggle-btn {
                display: block;
            }
            .admin-content-body {
                padding: 20px 16px;
            }
            .admin-topbar {
                padding: 0 16px;
            }
        }
    </style>
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
            <div class="menu-category-title">Core Management</div>
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
                        @php
                            $subCount = \App\Models\OnlineRegistration::where('status', 'submitted')->count();
                        @endphp
                        @if($subCount > 0)
                            <span class="nav-badge">{{ $subCount }}</span>
                        @endif
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.inquiries.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.inquiries.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-envelope-open-text"></i>
                        <span>Contact Inquiries</span>
                        @php
                            $inqCount = \App\Models\ContactInquiry::where('status', 'new')->count();
                        @endphp
                        @if($inqCount > 0)
                            <span class="nav-badge">{{ $inqCount }}</span>
                        @endif
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.sliders.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.sliders.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-images"></i>
                        <span>Hero Sliders</span>
                        @php
                            $sliderNavCount = \App\Models\Slider::count();
                        @endphp
                        @if($sliderNavCount > 0)
                            <span class="nav-badge">{{ $sliderNavCount }}</span>
                        @endif
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.pillars.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.pillars.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-shapes"></i>
                        <span>Three Pillars</span>
                        @php
                            $pillarNavCount = \App\Models\Pillar::count();
                        @endphp
                        @if($pillarNavCount > 0)
                            <span class="nav-badge">{{ $pillarNavCount }}</span>
                        @endif
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.why-choose.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.why-choose.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-award"></i>
                        <span>Why Choose Advaita</span>
                        @php
                            $whyChooseNavCount = \App\Models\WhyChooseCard::count();
                        @endphp
                        @if($whyChooseNavCount > 0)
                            <span class="nav-badge">{{ $whyChooseNavCount }}</span>
                        @endif
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.seo.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.seo.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                        <span>SEO Management</span>
                    </a>
                </li>
            </ul>

            <div class="menu-category-title">Quick Actions</div>
            <ul class="sidebar-nav-list">
                <li>
                    <a href="{{ route('home') }}" target="_blank" class="sidebar-nav-link">
                        <i class="fa-solid fa-globe"></i>
                        <span>Live Website</span>
                        <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 11px; margin-left: auto;"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('online-registration') }}" target="_blank" class="sidebar-nav-link">
                        <i class="fa-solid fa-file-pen"></i>
                        <span>Registration Form</span>
                        <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 11px; margin-left: auto;"></i>
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
                <form action="{{ route('admin.logout') }}" method="POST" style="margin: 0;">
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
            <div class="flash-alert-wrap">
                <div class="flash-toast success">
                    <i class="fa-solid fa-circle-check" style="font-size: 18px; margin-top: 1px;"></i>
                    <div>{{ session('success') }}</div>
                </div>
            </div>
            @endif

            @if(session('error'))
            <div class="flash-alert-wrap">
                <div class="flash-toast error">
                    <i class="fa-solid fa-circle-exclamation" style="font-size: 18px; margin-top: 1px;"></i>
                    <div>{{ session('error') }}</div>
                </div>
            </div>
            @endif

            @yield('content')
        </main>
    </div>

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
