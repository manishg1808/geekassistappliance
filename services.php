<?php
$page_title = "Complete 100% Online Remote Services Catalog (17 Categories)";
$page_desc = "Browse our full range of 100% online remote appliance diagnostic, virtual kitchen equipment assistance, laundry troubleshooting, commercial unit diagnostics, and printer tech setup services.";
$page_keywords = "100% online remote tech services, virtual appliance diagnostics catalog, online printer setup, remote computer help, commercial equipment virtual support";
include_once __DIR__ . '/includes/header.php';
?>

<!-- Header Hero Banner -->
<section style="padding: 4rem 0 3rem; background: radial-gradient(circle at 50% 0%, #eff6ff 0%, #f8fafc 100%); border-bottom: 1px solid var(--border-light);">
    <div class="container" style="text-align: center; max-width: 800px;">
        <div class="hero-badge" style="margin-bottom: 1rem;">
            <i class="ri-global-line"></i> Full Catalog - 17 100% Online Remote Solutions
        </div>
        <h1 style="font-size: 3rem; margin-bottom: 1rem;" class="text-gradient">
            100% Online Remote Services Catalog
        </h1>
        <p style="color: var(--text-muted); font-size: 1.1rem; margin-bottom: 2rem;">
            Find instant 100% online remote diagnostic help for all home appliances, commercial gear, printer networks, and office IT equipment.
        </p>

        <!-- Live Instant Search Bar -->
        <div style="position: relative; max-width: 550px; margin: 0 auto;">
            <input type="text" id="service-search-input" class="form-control" placeholder="Search by service name or symptom (e.g. Printer, Refrigerator, Leak)..." style="padding: 1rem 1.25rem 1rem 3rem; font-size: 1rem; border-radius: var(--radius-full); box-shadow: var(--shadow-card);">
            <i class="ri-search-line" style="position: absolute; left: 1.25rem; top: 50%; transform: translateY(-50%); color: var(--primary); font-size: 1.2rem;"></i>
        </div>
    </div>
</section>

<!-- Filter Tabs & Service Catalog Grid -->
<section style="padding: 4rem 0;">
    <div class="container">

        <!-- Category Filter Tabs -->
        <div class="filter-tabs">
            <button class="filter-tab active" data-category="all">All Services (17)</button>
            <button class="filter-tab" data-category="Kitchen">Kitchen Appliances</button>
            <button class="filter-tab" data-category="Laundry">Laundry Units</button>
            <button class="filter-tab" data-category="Tech & Office">Tech & IT Setup</button>
            <button class="filter-tab" data-category="Commercial">Commercial Gear</button>
            <button class="filter-tab" data-category="Climate Control">Climate & Plumbing</button>
        </div>

        <!-- Dynamic 17-Service Grid -->
        <div class="grid grid-cols-3" id="services-grid">
            <?php foreach ($services as $slug => $srv): ?>
            <div class="service-card service-catalog-item" data-category="<?php echo $srv['category']; ?>">
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1.25rem;">
                    <div class="service-icon-box" style="margin-bottom: 0;">
                        <i class="<?php echo $srv['icon']; ?>"></i>
                    </div>
                    <span class="status-badge" style="font-size: 0.75rem; font-weight: 700; background: var(--primary-subtle); color: var(--primary); padding: 0.3rem 0.75rem; border-radius: var(--radius-sm); border: 1px solid var(--border-accent);">
                        <i class="ri-global-line"></i> <?php echo $srv['category']; ?>
                    </span>
                </div>

                <h3 class="service-card-title"><?php echo $srv['title']; ?></h3>
                <p class="service-card-desc"><?php echo $srv['short_desc']; ?></p>

                <!-- Common symptoms preview list -->
                <ul class="service-card-features">
                    <?php foreach (array_slice($srv['common_issues'], 0, 2) as $issue): ?>
                        <li><i class="ri-checkbox-circle-fill"></i> <?php echo $issue; ?></li>
                    <?php endforeach; ?>
                </ul>

                <div class="service-card-footer">
                    <span style="font-size: 0.825rem; font-weight: 700; color: var(--success); display: inline-flex; align-items: center; gap: 0.35rem;">
                        <i class="ri-flashlight-fill"></i> <?php echo $srv['turnaround']; ?>
                    </span>
                    <div style="display: flex; gap: 0.5rem; align-items: center;">
                        <button class="btn btn-outline open-booking-modal" data-service="<?php echo $slug; ?>" style="padding: 0.4rem 0.85rem; font-size: 0.8rem;">
                            Fix Online
                        </button>
                        <a href="<?php echo SITE_URL; ?>/service-detail.php?slug=<?php echo $slug; ?>" class="service-link" style="padding: 0.4rem 0.85rem; font-size: 0.8rem;">
                            Details <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
