<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Advaita School of Excellence - Sanmati Sevabhavi Sanstha')</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=Fraunces:opsz,wght,SOFT@9..144,400;9..144,600;9..144,700,50&family=Manrope:wght@400;500;600;700;800&family=Montserrat:wght@700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    
    <!-- Font Awesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Core Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/inner-pages.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    
    <style>
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
    </style>
    @yield('styles')
</head>
<body>
    <!-- =========================================================================
         WEBSITE PRELOADER (Circular Swan Emblem with Progress Ring)
         ========================================================================= -->
    <div id="advSitePreloader" class="adv-preloader-wrap" aria-hidden="true">
        <div class="adv-preloader-box">
            <div class="adv-preloader-emblem-wrap">
                <div class="adv-preloader-aura"></div>
                <div class="adv-preloader-spinner-ring"></div>
                <div class="adv-preloader-logo-circle">
                    <img src="{{ asset('assets/images/loader-logo.png') }}" alt="Advaita School of Excellence Loading..." class="adv-preloader-img" loading="eager">
                </div>
            </div>
            <div class="adv-preloader-brand">
                <span class="adv-preloader-title">ADVAITA</span>
                <span class="adv-preloader-subtitle">SCHOOL OF EXCELLENCE</span>
            </div>
            <div class="adv-preloader-progress-track">
                <div class="adv-preloader-progress-bar"></div>
            </div>
        </div>
    </div>

    <!-- Flash Notifications Container -->
    @if(session('success') || session('error') || $errors->any())
    <div class="adv-flash-alert-container" id="advFlashContainer">
        @if(session('success'))
        <div class="adv-flash-alert adv-flash-success" role="alert">
            <i class="fa-solid fa-circle-check adv-flash-icon"></i>
            <div class="adv-flash-content">
                <div class="adv-flash-title">Success</div>
                <div class="adv-flash-message">{{ session('success') }}</div>
            </div>
            <button type="button" class="adv-flash-close" onclick="this.closest('.adv-flash-alert').remove()" aria-label="Close">&times;</button>
        </div>
        @endif

        @if(session('error'))
        <div class="adv-flash-alert adv-flash-error" role="alert">
            <i class="fa-solid fa-circle-exclamation adv-flash-icon"></i>
            <div class="adv-flash-content">
                <div class="adv-flash-title">Error</div>
                <div class="adv-flash-message">{{ session('error') }}</div>
            </div>
            <button type="button" class="adv-flash-close" onclick="this.closest('.adv-flash-alert').remove()" aria-label="Close">&times;</button>
        </div>
        @endif

        @if($errors->any())
        <div class="adv-flash-alert adv-flash-error" role="alert">
            <i class="fa-solid fa-triangle-exclamation adv-flash-icon"></i>
            <div class="adv-flash-content">
                <div class="adv-flash-title">Please check form errors:</div>
                <ul class="adv-flash-message" style="margin: 0; padding-left: 18px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <button type="button" class="adv-flash-close" onclick="this.closest('.adv-flash-alert').remove()" aria-label="Close">&times;</button>
        </div>
        @endif
    </div>
    @endif

    <!-- Navbar Partial -->
    @include('partials.navbar')

    <!-- Main Page Content -->
    @yield('content')

    <!-- Footer Partial -->
    @include('partials.footer')

    <!-- Floating Action Buttons -->
    <button type="button" class="adv-scroll-top-btn" id="advScrollTopBtn" aria-label="Scroll to top" title="Scroll to Top">
        <i class="fa-solid fa-arrow-up"></i>
    </button>
    <a href="https://wa.me/919413062851" target="_blank" rel="noopener noreferrer" class="adv-floating-whatsapp-btn" aria-label="Chat on WhatsApp" title="Chat on WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/header.js') }}"></script>
    <script src="{{ asset('assets/js/slider.js') }}"></script>
    <script src="{{ asset('assets/js/homepage.js') }}"></script>
    <script src="{{ asset('assets/js/footer.js') }}"></script>
    <script>
        setTimeout(function() {
            var flash = document.getElementById('advFlashContainer');
            if (flash) {
                flash.style.transition = 'opacity 0.6s ease';
                flash.style.opacity = '0';
                setTimeout(function() { flash.remove(); }, 600);
            }
        }, 8000);
    </script>
    @yield('scripts')
</body>
</html>
