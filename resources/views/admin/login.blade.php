<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal Login · Advaita School of Excellence</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        :root {
            --adv-navy: #083B7A;
            --adv-navy-deep: #051A38;
            --adv-orange: #F37021;
            --adv-orange-glow: rgba(243, 112, 33, 0.35);
            --adv-blue-glow: rgba(8, 59, 122, 0.45);
            --adv-text-main: #0F172A;
            --adv-text-muted: #64748B;
            --adv-bg: #071936;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: radial-gradient(circle at 15% 20%, #0d2852 0%, #061630 60%, #030c1c 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            color: #ffffff;
            position: relative;
            overflow-x: hidden;
        }

        /* Ambient Glowing Background Elements */
        .ambient-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(100px);
            opacity: 0.35;
            pointer-events: none;
            z-index: 0;
        }
        .ambient-orb-1 {
            width: 420px;
            height: 420px;
            background: #0284C7;
            top: -100px;
            left: -100px;
        }
        .ambient-orb-2 {
            width: 460px;
            height: 460px;
            background: #F37021;
            bottom: -120px;
            right: -100px;
            opacity: 0.25;
        }

        .login-wrapper {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 460px;
        }

        .login-card {
            background: rgba(13, 31, 60, 0.82);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 24px;
            padding: 40px 36px;
            box-shadow: 0 25px 60px -15px rgba(0, 0, 0, 0.6), 0 0 40px rgba(8, 59, 122, 0.2);
            position: relative;
            overflow: hidden;
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #F37021 0%, #0284C7 50%, #F37021 100%);
        }

        .brand-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .brand-logo-wrap {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 74px;
            height: 74px;
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.35);
            margin-bottom: 16px;
            padding: 8px;
            position: relative;
        }

        .brand-logo-img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .brand-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 20px;
            font-weight: 800;
            letter-spacing: 0.5px;
            color: #ffffff;
            margin-bottom: 4px;
        }

        .brand-subtitle {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #F37021;
            font-weight: 700;
        }

        .portal-badge {
            display: inline-block;
            margin-top: 10px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.12);
            padding: 4px 14px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
            color: #94A3B8;
        }

        /* Form Controls */
        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #CBD5E1;
            margin-bottom: 8px;
        }

        .input-wrap {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon {
            position: absolute;
            left: 16px;
            color: #64748B;
            font-size: 15px;
            pointer-events: none;
            transition: color 0.2s;
        }

        .form-input {
            width: 100%;
            background: rgba(15, 23, 42, 0.65);
            border: 1px solid rgba(255, 255, 255, 0.14);
            border-radius: 12px;
            padding: 13px 44px 13px 44px;
            font-size: 14.5px;
            font-family: inherit;
            color: #ffffff;
            outline: none;
            transition: all 0.2s ease;
        }

        .form-input::placeholder {
            color: #64748B;
        }

        .form-input:focus {
            border-color: #0284C7;
            background: rgba(15, 23, 42, 0.85);
            box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.25);
        }

        .form-input:focus + .input-icon,
        .input-wrap:focus-within .input-icon {
            color: #38BDF8;
        }

        .toggle-password-btn {
            position: absolute;
            right: 14px;
            background: transparent;
            border: none;
            color: #64748B;
            cursor: pointer;
            font-size: 15px;
            padding: 4px;
            transition: color 0.2s;
        }

        .toggle-password-btn:hover {
            color: #E2E8F0;
        }

        /* Remember & Forgot */
        .form-actions-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
            font-size: 13px;
        }

        .remember-checkbox-label {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #94A3B8;
            cursor: pointer;
            user-select: none;
        }

        .remember-checkbox-label input[type="checkbox"] {
            accent-color: #F37021;
            width: 16px;
            height: 16px;
            cursor: pointer;
        }

        /* Submit Button */
        .btn-submit {
            width: 100%;
            padding: 14px 20px;
            background: linear-gradient(135deg, #F37021 0%, #D9560A 100%);
            border: none;
            border-radius: 12px;
            color: #ffffff;
            font-size: 15px;
            font-weight: 700;
            font-family: inherit;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            box-shadow: 0 10px 25px rgba(243, 112, 33, 0.4);
            transition: all 0.25s ease;
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, #FF7F32 0%, #E65D0F 100%);
            transform: translateY(-2px);
            box-shadow: 0 14px 30px rgba(243, 112, 33, 0.5);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        /* Demo Credentials Card */
        .demo-credentials-box {
            margin-top: 26px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px dashed rgba(255, 255, 255, 0.18);
            border-radius: 14px;
            padding: 14px 16px;
        }

        .demo-cred-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .demo-cred-title {
            font-size: 11.5px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #F8FAFC;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .demo-cred-title i {
            color: #F37021;
        }

        .btn-autofill {
            background: rgba(243, 112, 33, 0.2);
            color: #FF9B5E;
            border: 1px solid rgba(243, 112, 33, 0.4);
            border-radius: 6px;
            font-size: 11px;
            font-weight: 600;
            padding: 3px 8px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-autofill:hover {
            background: #F37021;
            color: #ffffff;
        }

        .demo-cred-list {
            font-size: 12px;
            color: #94A3B8;
            line-height: 1.6;
        }

        .demo-cred-list code {
            color: #38BDF8;
            background: rgba(2, 132, 199, 0.15);
            padding: 1px 6px;
            border-radius: 4px;
            font-family: monospace;
        }

        /* Back Link */
        .back-to-site {
            text-align: center;
            margin-top: 22px;
        }

        .back-link {
            color: #94A3B8;
            text-decoration: none;
            font-size: 13px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: color 0.2s;
        }

        .back-link:hover {
            color: #FFFFFF;
        }

        /* Alerts */
        .alert {
            padding: 12px 16px;
            border-radius: 10px;
            font-size: 13.5px;
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }

        .alert-error {
            background: rgba(220, 38, 38, 0.2);
            border: 1px solid rgba(239, 68, 68, 0.4);
            color: #FCA5A5;
        }

        .alert-success {
            background: rgba(5, 150, 105, 0.2);
            border: 1px solid rgba(16, 185, 129, 0.4);
            color: #6EE7B7;
        }
    </style>
</head>
<body>

    <!-- Ambient Glow Orbs -->
    <div class="ambient-orb ambient-orb-1" aria-hidden="true"></div>
    <div class="ambient-orb ambient-orb-2" aria-hidden="true"></div>

    <div class="login-wrapper">
        <div class="login-card">

            <!-- Brand Emblem & Title -->
            <div class="brand-header">
                <div class="brand-logo-wrap">
                    <img src="{{ asset('assets/images/loader-logo.png') }}" alt="Advaita School Logo" class="brand-logo-img">
                </div>
                <h1 class="brand-title">ADVAITA SCHOOL</h1>
                <div class="brand-subtitle">School of Excellence · Parbhani</div>
                <div class="portal-badge">
                    <i class="fa-solid fa-shield-halved"></i> Administrator Control Panel
                </div>
            </div>

            <!-- Error Notification -->
            @if($errors->any())
            <div class="alert alert-error" role="alert">
                <i class="fa-solid fa-circle-exclamation" style="margin-top: 2px;"></i>
                <div>
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            </div>
            @endif

            @if(session('success'))
            <div class="alert alert-success" role="alert">
                <i class="fa-solid fa-circle-check" style="margin-top: 2px;"></i>
                <div>{{ session('success') }}</div>
            </div>
            @endif

            <!-- Login Form -->
            <form action="{{ route('admin.login.submit') }}" method="POST" id="adminLoginForm">
                @csrf

                <!-- Email Field -->
                <div class="form-group">
                    <label for="adminEmail" class="form-label">Admin Email Address</label>
                    <div class="input-wrap">
                        <i class="fa-regular fa-envelope input-icon"></i>
                        <input 
                            type="email" 
                            name="email" 
                            id="adminEmail" 
                            class="form-input" 
                            placeholder="admin@advaita.com" 
                            value="{{ old('email', 'admin@advaita.com') }}" 
                            required 
                            autocomplete="email" 
                            autofocus
                        >
                    </div>
                </div>

                <!-- Password Field -->
                <div class="form-group">
                    <label for="adminPassword" class="form-label">Password</label>
                    <div class="input-wrap">
                        <i class="fa-solid fa-lock input-icon"></i>
                        <input 
                            type="password" 
                            name="password" 
                            id="adminPassword" 
                            class="form-input" 
                            placeholder="Enter password" 
                            value="admin123"
                            required 
                            autocomplete="current-password"
                        >
                        <button type="button" class="toggle-password-btn" id="togglePasswordBtn" aria-label="Toggle password visibility">
                            <i class="fa-regular fa-eye" id="togglePasswordIcon"></i>
                        </button>
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="form-actions-row">
                    <label class="remember-checkbox-label">
                        <input type="checkbox" name="remember" id="rememberMe" checked>
                        <span>Keep me signed in</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn-submit" id="submitBtn">
                    <span>Sign In to Dashboard</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </form>

            <!-- Quick Demo Credentials Box -->
            <div class="demo-credentials-box">
                <div class="demo-cred-header">
                    <span class="demo-cred-title">
                        <i class="fa-solid fa-key"></i> Demo Credentials
                    </span>
                    <button type="button" class="btn-autofill" onclick="autofillDemo()">
                        Auto Fill
                    </button>
                </div>
                <div class="demo-cred-list">
                    Email: <code>admin@advaita.com</code><br>
                    Password: <code>admin123</code>
                </div>
            </div>

            <!-- Back to website -->
            <div class="back-to-site">
                <a href="{{ route('home') }}" class="back-link">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span>Return to School Website</span>
                </a>
            </div>

        </div>
    </div>

    <script>
        // Password toggle
        const toggleBtn = document.getElementById('togglePasswordBtn');
        const passInput = document.getElementById('adminPassword');
        const passIcon = document.getElementById('togglePasswordIcon');

        if (toggleBtn && passInput && passIcon) {
            toggleBtn.addEventListener('click', function() {
                if (passInput.type === 'password') {
                    passInput.type = 'text';
                    passIcon.classList.remove('fa-eye');
                    passIcon.classList.add('fa-eye-slash');
                } else {
                    passInput.type = 'password';
                    passIcon.classList.remove('fa-eye-slash');
                    passIcon.classList.add('fa-eye');
                }
            });
        }

        // Autofill helper
        function autofillDemo() {
            document.getElementById('adminEmail').value = 'admin@advaita.com';
            document.getElementById('adminPassword').value = 'admin123';
        }
    </script>
</body>
</html>
