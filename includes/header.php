<?php
require_once __DIR__ . '/../config.php';
$current_page = basename($_SERVER['PHP_SELF']);

// Dynamic SEO Variables Setup
$raw_title = isset($page_title) ? $page_title : DEFAULT_META_TITLE;
$seo_title = (strpos($raw_title, SITE_NAME) === false) ? $raw_title . ' | ' . SITE_NAME : $raw_title;
$seo_desc = isset($page_desc) ? $page_desc : DEFAULT_META_DESC;
$seo_keywords = isset($page_keywords) ? $page_keywords : DEFAULT_META_KEYWORDS;
$og_image = isset($page_og_image) ? $page_og_image : DEFAULT_OG_IMAGE;

// Canonical URL Construction
$request_scheme = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https' : 'http';
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
$canonical_url = $request_scheme . '://' . $host . $uri;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Core SEO Meta Tags -->
    <title><?php echo htmlspecialchars($seo_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($seo_desc); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($seo_keywords); ?>">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
    <meta name="author" content="<?php echo SITE_NAME; ?>">
    
    <!-- Open Graph / Facebook SEO Meta Tags -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($seo_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($seo_desc); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
    <meta property="og:site_name" content="<?php echo SITE_NAME; ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    
    <!-- Twitter Card SEO Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($seo_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($seo_desc); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($og_image); ?>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Remix Icon & FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="<?php echo SITE_URL; ?>/assets/images/favicon.svg">
    <link rel="shortcut icon" href="<?php echo SITE_URL; ?>/assets/images/favicon.svg">
    
    <!-- Main Custom CSS -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/styles.css">

    <!-- Schema.org JSON-LD Structured Data for Search Engine Indexing -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "OnlineBusiness",
        "name": "<?php echo SITE_NAME; ?>",
        "url": "<?php echo SITE_URL; ?>",
        "logo": "<?php echo SITE_URL; ?>/assets/images/logo.svg",
        "image": "<?php echo DEFAULT_OG_IMAGE; ?>",
        "description": "<?php echo DEFAULT_META_DESC; ?>",
        "telephone": "<?php echo PHONE_NUMBER; ?>",
        "email": "<?php echo EMAIL_ADDRESS; ?>",
        "priceRange": "$$",
        "areaServed": "Worldwide & Nationwide 100% Online Remote",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "1480",
            "bestRating": "5"
        }
    }
    </script>
</head>
<body>


    <!-- 2. Sticky Header Navigation -->
    <header class="header-main">
        <div class="container header-container">
            <!-- Brand Logo (Transparent Background SVG) -->
            <a href="<?php echo SITE_URL; ?>/index.php" class="brand-logo" aria-label="GeekAssist Appliance Home" style="padding: 0; background: transparent;">
                <img src="<?php echo SITE_URL; ?>/assets/images/logo.svg" alt="GeekAssist Appliance Logo" style="height: 44px; width: auto; display: block;">
            </a>

            <!-- Desktop Navigation Links -->
            <nav>
                <ul class="nav-links">
                    <li>
                        <a href="<?php echo SITE_URL; ?>/index.php" class="nav-link <?php echo $current_page == 'index.php' ? 'active' : ''; ?>">
                            Home
                        </a>
                    </li>
                    
                    <!-- Mega Menu Dropdown -->
                    <li class="mega-dropdown-wrapper">
                        <a href="<?php echo SITE_URL; ?>/services.php" class="nav-link <?php echo ($current_page == 'services.php' || $current_page == 'service-detail.php') ? 'active' : ''; ?>">
                            <span>Services Catalog</span>
                            <i class="ri-chevron-down-line" style="font-size: 0.85rem;"></i>
                        </a>
                        
                        <!-- 3-Column Mega Menu Panel -->
                        <div class="mega-dropdown">
                            <div style="display: flex; align-items: center; justify-content: space-between; padding-bottom: 0.75rem; margin-bottom: 1rem; border-bottom: 1px solid var(--border-light);">
                                <span style="font-size: 0.8rem; font-weight: 800; color: var(--primary); text-transform: uppercase; letter-spacing: 0.05em;">
                                    <i class="ri-layout-grid-fill"></i> All 100% Online Remote Services (17)
                                </span>
                                <a href="<?php echo SITE_URL; ?>/services.php" style="font-size: 0.8rem; font-weight: 700; color: var(--accent);">
                                    View Catalog →
                                </a>
                            </div>
                            
                            <div class="mega-menu-grid">
                                <?php foreach ($services as $slug => $srv): ?>
                                <a href="<?php echo SITE_URL; ?>/service-detail.php?slug=<?php echo $slug; ?>" class="mega-menu-item">
                                    <div class="mega-menu-icon">
                                        <i class="<?php echo $srv['icon']; ?>"></i>
                                    </div>
                                    <div>
                                         <div class="mega-menu-title"><?php echo $srv['title']; ?></div>
                                         <span style="font-size: 0.725rem; color: var(--primary); font-weight: 600;"><?php echo $srv['category']; ?></span>
                                    </div>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </li>

                    <li>
                        <a href="<?php echo SITE_URL; ?>/printer-service.php" class="nav-link <?php echo $current_page == 'printer-service.php' ? 'active' : ''; ?>">
                            <i class="ri-printer-line" style="color: var(--accent);"></i> Printer Repair
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo SITE_URL; ?>/about.php" class="nav-link <?php echo $current_page == 'about.php' ? 'active' : ''; ?>">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo SITE_URL; ?>/contact.php" class="nav-link <?php echo $current_page == 'contact.php' ? 'active' : ''; ?>">
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Header Action CTA -->
            <div style="display: flex; align-items: center; gap: 1rem;">
                <a href="<?php echo SITE_URL; ?>/booking.php" class="btn btn-primary" style="padding: 0.65rem 1.25rem; font-size: 0.875rem;">
                    <i class="ri-remote-control-line"></i> Fix 100% Online Now
                </a>
                
                <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Open mobile navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- 3. Mobile Navigation Drawer Slide-Over -->
    <div id="mobile-nav-drawer" style="position: fixed; top: 0; right: -100%; width: 320px; height: 100%; background: #ffffff; border-left: 1px solid var(--border-light); z-index: 2500; transition: var(--transition); padding: 2rem; overflow-y: auto; box-shadow: var(--shadow-lg);">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 2rem;">
            <div class="brand-logo">
                <i class="ri-tools-fill"></i>
                <span>GeekAssist<span style="color: var(--primary);">Appliance</span></span>
            </div>
            <button id="mobile-drawer-close" style="background: transparent; border: none; color: var(--text-main); font-size: 1.5rem; cursor: pointer;">
                <i class="ri-close-line"></i>
            </button>
        </div>

        <ul style="list-style: none; display: flex; flex-direction: column; gap: 1.25rem;">
            <li><a href="<?php echo SITE_URL; ?>/index.php" style="font-size: 1.1rem; font-weight: 600;">Home</a></li>
            <li><a href="<?php echo SITE_URL; ?>/services.php" style="font-size: 1.1rem; font-weight: 600; color: var(--primary);">All 17 Services</a></li>
            <li><a href="<?php echo SITE_URL; ?>/printer-service.php" style="font-size: 1.1rem; font-weight: 600;">Printer Installation & Repair</a></li>
            <li><a href="<?php echo SITE_URL; ?>/about.php" style="font-size: 1.1rem; font-weight: 600;">About Us</a></li>
            <li><a href="<?php echo SITE_URL; ?>/contact.php" style="font-size: 1.1rem; font-weight: 600;">Contact Us</a></li>
            <li><a href="<?php echo SITE_URL; ?>/booking.php" class="btn btn-accent" style="width: 100%; margin-top: 1rem;">Schedule Appointment</a></li>
        </ul>

        <div style="margin-top: 3rem; border-top: 1px solid var(--border-light); padding-top: 1.5rem; font-size: 0.85rem; color: var(--text-muted);">
            <div style="margin-bottom: 0.75rem;"><i class="ri-phone-line" style="color: var(--primary);"></i> <?php echo PHONE_NUMBER; ?></div>
            <div style="margin-bottom: 0.75rem;"><i class="ri-mail-line" style="color: var(--accent);"></i> <?php echo EMAIL_ADDRESS; ?></div>
            <div><i class="ri-map-pin-line" style="color: var(--success);"></i> <?php echo BUSINESS_ADDRESS; ?></div>
        </div>
    </div>
