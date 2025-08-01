<?php
// SEO Meta Tags Template
// Usage: Include this file and set $pageTitle, $pageDescription, $pageKeywords before including

// Default values if not set
if (!isset($pageTitle)) {
    $pageTitle = "Professional Eco-Friendly Cleaning Services Melbourne | Edge 2 Edge Cleaning";
}

if (!isset($pageDescription)) {
    $pageDescription = "Professional eco-friendly cleaning services in Melbourne. Residential, commercial & end-of-lease cleaning using non-toxic, Australian-made products. Book Edge 2 Edge Cleaning today!";
}

if (!isset($pageKeywords)) {
    $pageKeywords = "eco-friendly cleaning Melbourne, organic cleaner Australia, builders clean Toorak, domestic cleaning Melbourne, Edge 2 Edge cleaning services, professional cleaners Victoria, house cleaner Toorak, end of lease cleaning, commercial cleaning Melbourne";
}

if (!isset($canonicalUrl)) {
    $canonicalUrl = "https://www.edge2edgecleaning.com.au" . $_SERVER['REQUEST_URI'];
}

if (!isset($ogImage)) {
    $ogImage = "https://www.edge2edgecleaning.com.au/assets/img/logo.png";
}
?>

<!-- Essential Meta Tags -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- SEO Meta Tags -->
<title><?= htmlspecialchars($pageTitle) ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
<meta name="keywords" content="<?= htmlspecialchars($pageKeywords) ?>">
<meta name="author" content="Edge 2 Edge Cleaning">
<meta name="robots" content="index, follow">

<!-- Canonical URL -->
<link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>">

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
<meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
<meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>">
<meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Edge 2 Edge Cleaning">
<meta property="og:locale" content="en_AU">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($pageDescription) ?>">
<meta name="twitter:image" content="<?= htmlspecialchars($ogImage) ?>">

<!-- Geo-Targeting Meta Tags -->
<meta name="geo.region" content="AU-VIC">
<meta name="geo.placename" content="Melbourne, Toorak">
<meta name="geo.position" content="-37.8417;145.0167">
<meta name="ICBM" content="-37.8417, 145.0167">

<!-- Favicon -->
<link rel="icon" type="image/png" href="<?=$webRoot;?>assets/img/favicon.png">