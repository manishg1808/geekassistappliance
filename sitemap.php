<?php
/**
 * Dynamic XML sitemap — always uses the correct live or local SITE_URL.
 */
require_once __DIR__ . '/config.php';

header('Content-Type: application/xml; charset=UTF-8');

$pages = [
    ['path' => '/index.php',               'changefreq' => 'daily',   'priority' => '1.0'],
    ['path' => '/printer-service.php',     'changefreq' => 'daily',   'priority' => '0.9'],
    ['path' => '/services.php',             'changefreq' => 'weekly',  'priority' => '0.9'],
    ['path' => '/about.php',                'changefreq' => 'monthly', 'priority' => '0.8'],
    ['path' => '/contact.php',              'changefreq' => 'monthly', 'priority' => '0.8'],
    ['path' => '/booking.php',              'changefreq' => 'weekly',  'priority' => '0.85'],
    ['path' => '/service-detail.php?slug=refrigerator-repair', 'changefreq' => 'weekly', 'priority' => '0.8'],
    ['path' => '/service-detail.php?slug=washer-repair',       'changefreq' => 'weekly', 'priority' => '0.8'],
    ['path' => '/service-detail.php?slug=dryer-repair',        'changefreq' => 'weekly', 'priority' => '0.8'],
    ['path' => '/service-detail.php?slug=oven-repair',          'changefreq' => 'weekly', 'priority' => '0.8'],
    ['path' => '/service-detail.php?slug=dishwasher-repair',    'changefreq' => 'weekly', 'priority' => '0.8'],
    ['path' => '/service-detail.php?slug=laptop-desktop-repair', 'changefreq' => 'weekly', 'priority' => '0.8'],
    ['path' => '/terms.php',                'changefreq' => 'yearly',  'priority' => '0.5'],
    ['path' => '/privacy-policy.php',       'changefreq' => 'yearly',  'priority' => '0.5'],
    ['path' => '/cookie-policy.php',        'changefreq' => 'yearly',  'priority' => '0.5'],
    ['path' => '/refund-cancellation-policy.php', 'changefreq' => 'yearly', 'priority' => '0.5'],
];

$lastmod = date('Y-m-d');

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($pages as $page): ?>
    <url>
        <loc><?php echo htmlspecialchars(SITE_URL . $page['path'], ENT_XML1, 'UTF-8'); ?></loc>
        <lastmod><?php echo $lastmod; ?></lastmod>
        <changefreq><?php echo $page['changefreq']; ?></changefreq>
        <priority><?php echo $page['priority']; ?></priority>
    </url>
<?php endforeach; ?>
</urlset>
