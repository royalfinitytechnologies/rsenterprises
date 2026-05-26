<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium scrap metal recycling and high-strength RCC concrete products manufacturer. RS Enterprises provides top-tier industrial solutions.">
    <title><?php echo isset($pageTitle) ? $pageTitle . " | " . SITE_NAME : SITE_NAME; ?></title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons for modern UI -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Style Sheet -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Top Bar with Contact Info -->
    <div class="top-bar">
        <div class="container top-bar-content">
            <div class="top-info">
                <span><i class="fa-solid fa-phone text-accent-rcc"></i> <a href="tel:<?php echo str_replace(' ', '', BUSINESS_PHONE); ?>"><?php echo BUSINESS_PHONE; ?></a></span>
                <span class="separator">|</span>
                <span><i class="fa-solid fa-envelope text-accent-scrap"></i> <a href="mailto:<?php echo BUSINESS_EMAIL; ?>"><?php echo BUSINESS_EMAIL; ?></a></span>
            </div>
            <div class="top-cta">
                <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', WHATSAPP_PHONE); ?>" target="_blank" class="whatsapp-top-link">
                    <i class="fa-brands fa-whatsapp"></i> Chat Now
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Header -->
    <header class="main-header">
        <div class="container header-container">
            <!-- Brand Logo -->
            <a href="index.php" class="logo">
                <div class="logo-image-container">
                    <img src="logo.jpg" alt="RS Enterprises Logo" class="logo-img">
                </div>
                <div class="logo-text">
                    <span class="brand-title">RS Enterprises</span>
                    <span class="brand-subtitle">Scrap & RCC Sell</span>
                </div>
            </a>

            <!-- Mobile Navigation Toggle -->
            <button class="nav-toggle" aria-label="Toggle Navigation" id="navToggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>

            <!-- Navigation Links -->
            <nav class="nav-menu" id="navMenu">
                <ul>
                    <li><a href="index.php" class="nav-link <?php echo isActivePage('index.php'); ?>">Home</a></li>
                    <li><a href="rcc.php" class="nav-link <?php echo isActivePage('rcc.php'); ?>">RCC Products</a></li>
                    <li><a href="about.php" class="nav-link <?php echo isActivePage('about.php'); ?>">About Us</a></li>
                    <li><a href="contact.php" class="nav-link <?php echo isActivePage('contact.php'); ?>">Contact Us</a></li>
                </ul>
                <div class="mobile-cta-wrapper">
                    <a href="contact.php" class="btn btn-primary-gradient">Get Quote</a>
                </div>
            </nav>
        </div>
    </header>
    <main>
