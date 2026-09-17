<?php
/**
 * Header Component
 */
$pageTitle = $pageTitle ?? 'School Website';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <!-- Stylesheets -->
</head>
<body>
    <header>
        <?php require_once __DIR__ . '/navbar.php'; ?>
    </header>
