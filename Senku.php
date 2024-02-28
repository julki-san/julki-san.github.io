<?php
session_start();

// Check if the mode is toggled
if (isset($_GET['mode']) && $_GET['mode'] === 'dark') {
    $_SESSION['mode'] = 'dark';
} elseif (isset($_GET['mode']) && $_GET['mode'] === 'light') {
    $_SESSION['mode'] = 'light';
}

// Default mode is light if not set
if (!isset($_SESSION['mode'])) {
    $_SESSION['mode'] = 'light';
}

// Define colors for light mode
$lightColors = [
    'input-focus' => '#2d8cf0',
    'font-color' => '#323232',
    'bg-color' => '#fff',
    'main-color' => '#323232',
];

// Define colors for dark mode
$darkColors = [
    'input-focus' => '#ff9800',
    'font-color' => '#fff',
    'bg-color' => '#424242',
    'main-color' => '#fff',
];

// Set colors based on selected mode
$colors = ($_SESSION['mode'] === 'dark') ? $darkColors : $lightColors;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Mode Toggle</title>
    <link rel="stylesheet" href="styles.php">
</head>
<body style="--input-focus: <?php echo $colors['input-focus']; ?>;
            --font-color: <?php echo $colors['font-color']; ?>;
            --bg-color: <?php echo $colors['bg-color']; ?>;
            --main-color: <?php echo $colors['main-color']; ?>;
            ">
    <a href="?mode=light">Light Mode</a>
    <a href="?mode=dark">Dark Mode</a>
</body>
</html>
<style>
    <?php
header('Content-type: text/css');

// Retrieve colors from session
$colors = $_SESSION['mode'] === 'dark' ? $darkColors : $lightColors;

// Generate CSS output
echo<<<CSS
    body {
        --input-focus: {$colors['input-focus']};
        --font-color: {$colors['font-color']};
        --bg-color: {$colors['bg-color']};
        --main-color: {$colors['main-color']};
    }
CSS;
?>

</style>
