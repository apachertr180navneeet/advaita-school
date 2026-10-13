<?php
/**
 * Header Component - Advaita School of Excellence
 * Clean Semantic HTML - Strictly No Inline CSS
 */
$pageTitle = $pageTitle ?? 'Advaita School of Excellence - Sanmati Sevabhavi Sanstha';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=Fraunces:opsz,wght,SOFT@9..144,400;9..144,600;9..144,700,50&family=Manrope:wght@400;500;600;700;800&family=Montserrat:wght@700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    
    <!-- Font Awesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/header.css?v=<?php echo filemtime(__DIR__ . '/../assets/css/header.css'); ?>">
    <link rel="stylesheet" href="assets/css/slider.css?v=<?php echo filemtime(__DIR__ . '/../assets/css/slider.css'); ?>">
    <link rel="stylesheet" href="assets/css/homepage.css?v=<?php echo filemtime(__DIR__ . '/../assets/css/homepage.css'); ?>">
    <link rel="stylesheet" href="assets/css/inner-pages.css?v=<?php echo filemtime(__DIR__ . '/../assets/css/inner-pages.css'); ?>">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/footer.css?v=<?php echo filemtime(__DIR__ . '/../assets/css/footer.css'); ?>">
</head>
<body>
    <!-- =========================================================================
         WEBSITE PRELOADER (Circular Swan Emblem with Progress Ring)
         ========================================================================= -->
    <div id="advSitePreloader" class="adv-preloader-wrap" aria-hidden="true">
        <div class="adv-preloader-box">
            <div class="adv-preloader-emblem-wrap">
                <!-- Outer Pulsing Glow Aura -->
                <div class="adv-preloader-aura"></div>
                <!-- Continuous Smooth Spinning Gradient Ring -->
                <div class="adv-preloader-spinner-ring"></div>
                <!-- Circular Emblem Logo -->
                <div class="adv-preloader-logo-circle">
                    <img src="assets/images/loader-logo.png?v=<?php echo filemtime(__DIR__ . '/../assets/images/loader-logo.png'); ?>" alt="Advaita School of Excellence Loading..." class="adv-preloader-img" loading="eager">
                </div>
            </div>
            <div class="adv-preloader-brand">
                <span class="adv-preloader-title">ADVAITA</span>
                <span class="adv-preloader-subtitle">SCHOOL OF EXCELLENCE</span>
            </div>
            <!-- Progress Line Indicator -->
            <div class="adv-preloader-progress-track">
                <div class="adv-preloader-progress-bar"></div>
            </div>
        </div>
    </div>

    <?php require_once __DIR__ . '/navbar.php'; ?>
