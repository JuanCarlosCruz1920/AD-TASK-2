<?php
$base_url_path = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
if ($base_url_path === '\\' || $base_url_path === '/') {
    $base_url_path = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeoScreen</title>
    <link rel="stylesheet" href="<?php echo $base_url_path; ?>/assets/css/style.css">
    <link href="[https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap](https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap)" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <div class="header-logo-container">
                <img src="<?php echo $base_url_path; ?>/assets/img/Logo.White.png" alt="NeoScreen Logo" class="header-logo" onerror="this.onerror=null;this.src='<?php echo $base_url_path; ?>/assets/img/placeholder-movie.png';">
                <span class="header-title-text">NEOSCREEN</span>
            </div>
            <nav>
                <ul>
                    <li><a href="<?php echo $base_url_path; ?>/">Home</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container">