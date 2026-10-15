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

    <link rel="stylesheet" href="{{ asset('assets/css/admin-login.css') }}?v={{ file_exists(public_path('assets/css/admin-login.css')) ? filemtime(public_path('assets/css/admin-login.css')) : '1.0' }}">
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
                <i class="fa-solid fa-circle-exclamation login-alert-icon"></i>
                <div>
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            </div>
            @endif

            @if(session('success'))
            <div class="alert alert-success" role="alert">
                <i class="fa-solid fa-circle-check login-alert-icon"></i>
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
