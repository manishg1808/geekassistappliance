<?php
require_once __DIR__ . '/config.php';

$slug = isset($_GET['slug']) ? clean($_GET['slug']) : 'printer-service';
function clean($data) { return htmlspecialchars(strip_tags(trim($data))); }

$srv = get_service_by_slug($slug);
if (!$srv) {
    header('Location: ' . SITE_URL . '/services.php');
    exit;
}

$page_title = "100% Online " . $srv['title'] . " & Remote Diagnostics";
$page_desc = "Instant 100% online remote support and diagnostic evaluation for " . strtolower($srv['title']) . ". Connect with certified remote technicians online in under 15 minutes. Zero home visit needed.";
$page_keywords = strtolower($srv['title']) . " online support, remote " . strtolower($srv['title']) . " diagnostics, virtual " . strtolower($srv['category']) . " repair, 100% online tech help";
include_once __DIR__ . '/includes/header.php';
?>

<!-- 1. SERVICE HERO BANNER -->
<section style="padding: 4rem 0 3.5rem; background: radial-gradient(circle at 50% 0%, #eff6ff 0%, #f8fafc 100%); border-bottom: 1px solid var(--border-light); position: relative;">
    <div class="container">
        <!-- Breadcrumbs -->
        <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.85rem; color: var(--text-muted); margin-bottom: 1.5rem; font-weight: 500;">
            <a href="<?php echo SITE_URL; ?>/index.php">Home</a> &gt; 
            <a href="<?php echo SITE_URL; ?>/services.php">Services</a> &gt; 
            <span style="color: var(--primary); font-weight: 700;"><?php echo $srv['title']; ?></span>
        </div>

        <div class="grid grid-cols-2" style="align-items: center; gap: 3.5rem;">
            <div>
                <div style="display: flex; align-items: center; gap: 0.75rem; flex-wrap: wrap; margin-bottom: 1rem;">
                    <span style="display: inline-flex; align-items: center; gap: 0.4rem; background: var(--primary-subtle); color: var(--primary); border: 1px solid var(--border-accent); padding: 0.35rem 0.9rem; border-radius: var(--radius-full); font-size: 0.825rem; font-weight: 700;">
                        <i class="<?php echo $srv['icon']; ?>"></i> <?php echo $srv['category']; ?> Category
                    </span>
                    <span class="status-badge" style="background: rgba(16, 185, 129, 0.15); color: var(--success); border-color: rgba(16, 185, 129, 0.3);">
                        <span class="pulse-dot"></span> 100% Online Remote Session Available
                    </span>
                </div>

                <h1 style="font-size: 2.75rem; margin-bottom: 1rem; line-height: 1.25;" class="text-gradient">
                    <?php echo $srv['title']; ?>
                </h1>

                <p style="color: var(--text-muted); font-size: 1.1rem; margin-bottom: 1.75rem; line-height: 1.7;">
                    <?php echo $srv['full_desc']; ?>
                </p>

                <!-- Feature Highlights Bullets -->
                <div style="display: flex; flex-direction: column; gap: 0.65rem; margin-bottom: 2rem;">
                    <div style="display: flex; align-items: center; gap: 0.6rem; font-size: 0.95rem; font-weight: 600; color: var(--text-main);">
                        <i class="ri-checkbox-circle-fill" style="color: var(--success);"></i> 100% Online & Remote — No In-Person Home Visit Required
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.6rem; font-size: 0.95rem; font-weight: 600; color: var(--text-main);">
                        <i class="ri-checkbox-circle-fill" style="color: var(--success);"></i> Instant Remote Screen Share / Video Guided Diagnostics
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.6rem; font-size: 0.95rem; font-weight: 600; color: var(--text-main);">
                        <i class="ri-checkbox-circle-fill" style="color: var(--success);"></i> Backed by a 90-Day Written Satisfaction Guarantee
                    </div>
                </div>

                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <button class="btn btn-accent open-booking-modal" data-service="<?php echo $slug; ?>">
                        <i class="ri-remote-control-line"></i> Start 100% Online Session
                    </button>
                    <a href="tel:<?php echo PHONE_RAW; ?>" class="btn btn-outline">
                        <i class="ri-phone-line"></i> Call Remote Tech: <?php echo PHONE_NUMBER; ?>
                    </a>
                </div>
            </div>

            <!-- Pricing & Overview Card -->
            <div class="glass-card" style="background: #ffffff; padding: 2.5rem; box-shadow: var(--shadow-card);">
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1.25rem; border-bottom: 1px solid var(--border-light); padding-bottom: 0.85rem;">
                    <h3 style="font-size: 1.25rem;">Online Remote Overview</h3>
                    <span style="font-size: 0.775rem; background: var(--accent-subtle); color: var(--accent); padding: 0.25rem 0.65rem; border-radius: 99px; font-weight: 700;">No Travel Fee</span>
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.75rem;">
                    <span style="color: var(--text-muted); font-weight: 500;">Average Resolution Time:</span>
                    <span style="font-weight: 700; color: var(--success); font-size: 0.95rem;">
                        <i class="ri-flashlight-line"></i> <?php echo $srv['turnaround']; ?>
                    </span>
                </div>

                <div style="background: var(--bg-light); border: 1px solid var(--border-light); border-radius: var(--radius-sm); padding: 1.25rem; margin-bottom: 1.75rem; font-size: 0.875rem; color: var(--text-muted);">
                    <div style="font-weight: 700; color: var(--text-main); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.4rem;">
                        <i class="ri-shield-check-line" style="color: var(--primary);"></i> Included In Every Remote Session:
                    </div>
                    • Free initial 5-minute online diagnostic assessment<br>
                    • Step-by-step guided screen-share or video walkthrough<br>
                    • Full 90-day remote support satisfaction guarantee
                </div>

                <button class="btn btn-primary open-booking-modal" data-service="<?php echo $slug; ?>" style="width: 100%; justify-content: center;">
                    Connect With Remote Specialist Now <i class="ri-arrow-right-line"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- 2. CAPABILITIES HIGHLIGHTS BAR -->
<section style="background: #ffffff; border-bottom: 1px solid var(--border-light); padding: 2.25rem 0;">
    <div class="container">
        <div class="grid grid-cols-4">
            <div style="display: flex; align-items: center; gap: 1rem;">
                <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--primary-subtle); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; flex-shrink: 0; border: 1px solid var(--border-accent);">
                    <i class="ri-global-line"></i>
                </div>
                <div>
                    <h4 style="font-size: 0.95rem; margin-bottom: 0.15rem;">100% Online Remote</h4>
                    <p style="font-size: 0.8rem; color: var(--text-muted);">No in-person visit required</p>
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 1rem;">
                <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--accent-subtle); color: var(--accent); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; flex-shrink: 0; border: 1px solid #ffedd5;">
                    <i class="ri-timer-flash-line"></i>
                </div>
                <div>
                    <h4 style="font-size: 0.95rem; margin-bottom: 0.15rem;">10-20 Mins Fix</h4>
                    <p style="font-size: 0.8rem; color: var(--text-muted);">Instant virtual connection</p>
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 1rem;">
                <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--success-subtle); color: var(--success); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; flex-shrink: 0; border: 1px solid #a7f3d0;">
                    <i class="ri-shield-keyhole-line"></i>
                </div>
                <div>
                    <h4 style="font-size: 0.95rem; margin-bottom: 0.15rem;">Encrypted & Secure</h4>
                    <p style="font-size: 0.8rem; color: var(--text-muted);">Protected remote sessions</p>
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 1rem;">
                <div style="width: 48px; height: 48px; border-radius: 12px; background: #f3e8ff; color: #a855f7; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; flex-shrink: 0; border: 1px solid #e9d5ff;">
                    <i class="ri-award-line"></i>
                </div>
                <div>
                    <h4 style="font-size: 0.95rem; margin-bottom: 0.15rem;">90-Day Guarantee</h4>
                    <p style="font-size: 0.8rem; color: var(--text-muted);">Written resolution guarantee</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. COMMON SYMPTOMS WE RESOLVE ONLINE -->
<section style="padding: 5rem 0; background: var(--bg-light);">
    <div class="container">
        <div class="grid grid-cols-2" style="gap: 3.5rem;">
            
            <!-- Symptoms Cards List -->
            <div>
                <div style="color: var(--primary); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.5rem;">Targeted Diagnosis</div>
                <h2 style="font-size: 2.25rem; margin-bottom: 1.25rem;" class="text-gradient">
                    Common Issues We Resolve Online
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 2rem; line-height: 1.6;">
                    If you are experiencing any of the following problems with your <?php echo strtolower($srv['title']); ?>, our remote specialists will connect with you online to diagnose and fix them immediately:
                </p>

                <div style="display: flex; flex-direction: column; gap: 1.25rem;">
                    <?php foreach ($srv['common_issues'] as $idx => $issue): ?>
                        <div class="glass-card" style="padding: 1.25rem 1.5rem; display: flex; align-items: center; justify-content: space-between; background: #ffffff;">
                            <div style="display: flex; align-items: center; gap: 1rem;">
                                <div style="width: 38px; height: 38px; border-radius: 50%; background: var(--primary-subtle); color: var(--primary); display: flex; align-items: center; justify-content: center; font-weight: 800; flex-shrink: 0; font-size: 0.9rem; border: 1px solid var(--border-accent);">
                                    0<?php echo $idx + 1; ?>
                                </div>
                                <div style="font-weight: 600; font-size: 0.95rem; color: var(--text-main);">
                                    <?php echo $issue; ?>
                                </div>
                            </div>
                            <button class="btn btn-outline open-booking-modal" data-service="<?php echo $slug; ?>" style="padding: 0.4rem 0.85rem; font-size: 0.8rem;">
                                Fix Online
                            </button>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- 4-Step 100% Online Resolution Workflow -->
            <div>
                <div style="color: var(--accent); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.5rem;">Simple & Fast</div>
                <h2 style="font-size: 2.25rem; margin-bottom: 1.25rem;" class="text-gradient">
                    4-Step Online Resolution Process
                </h2>

                <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                    <div class="step-card" style="padding: 1.5rem;">
                        <span class="step-badge">Step 1</span>
                        <h4 style="font-size: 1.1rem; margin-top: 0.5rem; margin-bottom: 0.35rem;">1. Select Equipment & Request Session</h4>
                        <p style="font-size: 0.875rem; color: var(--text-muted); line-height: 1.5;">Choose your device type and issue. Fill out the quick online request form in under 60 seconds.</p>
                    </div>

                    <div class="step-card" style="padding: 1.5rem;">
                        <span class="step-badge" style="background: var(--accent);">Step 2</span>
                        <h4 style="font-size: 1.1rem; margin-top: 0.5rem; margin-bottom: 0.35rem;">2. Instant Remote Desk / Video Connection</h4>
                        <p style="font-size: 0.875rem; color: var(--text-muted); line-height: 1.5;">Our remote specialist contacts you via secure screen-share link or live video diagnostic call.</p>
                    </div>

                    <div class="step-card" style="padding: 1.5rem;">
                        <span class="step-badge" style="background: #a855f7;">Step 3</span>
                        <h4 style="font-size: 1.1rem; margin-top: 0.5rem; margin-bottom: 0.35rem;">3. Expert Remote Diagnostics & Fix</h4>
                        <p style="font-size: 0.875rem; color: var(--text-muted); line-height: 1.5;">We reconfigure drivers, IP settings, clear software bugs, or guide you step-by-step through appliance resets.</p>
                    </div>

                    <div class="step-card" style="padding: 1.5rem;">
                        <span class="step-badge" style="background: var(--success);">Step 4</span>
                        <h4 style="font-size: 1.1rem; margin-top: 0.5rem; margin-bottom: 0.35rem;">4. Tested, Verified & 90-Day Guaranteed</h4>
                        <p style="font-size: 0.875rem; color: var(--text-muted); line-height: 1.5;">We run full functional tests to verify resolution and issue your written 90-day remote guarantee certificate.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- 5. WHAT YOU NEED FOR A REMOTE SESSION -->
<section style="padding: 5rem 0; background: var(--bg-light);">
    <div class="container">
        <div class="glass-card" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #ffffff; padding: 3rem; text-align: center;">
            <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(37, 99, 235, 0.2); border: 1px solid rgba(37, 99, 235, 0.4); color: #60a5fa; padding: 0.3rem 0.85rem; border-radius: var(--radius-full); font-size: 0.8rem; font-weight: 700; margin-bottom: 1rem;">
                <i class="ri-checkbox-circle-line"></i> Requirements Checklist
            </div>
            <h2 style="font-size: 2.25rem; color: #ffffff; margin-bottom: 1rem;">What You Need For Your 100% Online Session</h2>
            <p style="color: #94a3b8; font-size: 1rem; max-width: 650px; margin: 0 auto 2.5rem;">
                No complicated software required. Getting started takes just 3 simple things:
            </p>

            <div class="grid grid-cols-3" style="gap: 1.5rem; text-align: left;">
                <div style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; padding: 1.5rem;">
                    <div style="font-size: 1.75rem; color: #60a5fa; margin-bottom: 0.5rem;"><i class="ri-smartphone-line"></i></div>
                    <h4 style="color: #ffffff; margin-bottom: 0.35rem;">1. Smartphone or Computer</h4>
                    <p style="font-size: 0.85rem; color: #cbd5e1;">Any laptop, desktop, iPhone or Android device to connect with our technician online.</p>
                </div>

                <div style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; padding: 1.5rem;">
                    <div style="font-size: 1.75rem; color: #34d399; margin-bottom: 0.5rem;"><i class="ri-wifi-line"></i></div>
                    <h4 style="color: #ffffff; margin-bottom: 0.35rem;">2. Active Internet Connection</h4>
                    <p style="font-size: 0.85rem; color: #cbd5e1;">Standard WiFi or mobile data connection for screen share or video diagnostic call.</p>
                </div>

                <div style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; padding: 1.5rem;">
                    <div style="font-size: 1.75rem; color: #fb923c; margin-bottom: 0.5rem;"><i class="ri-time-line"></i></div>
                    <h4 style="color: #ffffff; margin-bottom: 0.35rem;">3. 10 to 15 Minutes</h4>
                    <p style="font-size: 0.85rem; color: #cbd5e1;">That's it! Our remote specialist guides you step-by-step until your issue is resolved.</p>
                </div>
            </div>

            <div style="margin-top: 2.5rem;">
                <button class="btn btn-accent open-booking-modal" data-service="<?php echo $slug; ?>" style="padding: 0.85rem 2rem;">
                    <i class="ri-remote-control-line"></i> Start Online Session Now
                </button>
            </div>
        </div>
    </div>
</section>

<!-- 6. HIGH-CONVERSION CTA FOOTER CALLOUT -->
<section style="padding: 4rem 0; background: #ffffff; border-top: 1px solid var(--border-light);">
    <div class="container" style="text-align: center; max-width: 750px;">
        <h2 style="font-size: 2.25rem; margin-bottom: 1rem;" class="text-gradient">
            Ready to Fix Your <?php echo $srv['title']; ?> Online?
        </h2>
        <p style="color: var(--text-muted); font-size: 1rem; margin-bottom: 2rem;">
            No waiting for technician travel. Connect with a certified remote specialist right now and resolve your technical issue 100% online.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <button class="btn btn-accent open-booking-modal" data-service="<?php echo $slug; ?>" style="padding: 0.85rem 2rem;">
                <i class="ri-flashlight-fill"></i> Connect Remotely Now
            </button>
            <a href="tel:<?php echo PHONE_RAW; ?>" class="btn btn-outline" style="padding: 0.85rem 2rem;">
                <i class="ri-phone-fill"></i> Hotline: <?php echo PHONE_NUMBER; ?>
            </a>
        </div>
    </div>
</section>

<!-- Service JSON-LD Schema for Search Engine Indexing -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "100% Online <?php echo htmlspecialchars($srv['title']); ?>",
    "provider": {
        "@type": "OnlineBusiness",
        "name": "<?php echo SITE_NAME; ?>"
    },
    "serviceType": "100% Online Remote Technical Diagnostics & Repair",
    "areaServed": "Worldwide & Nationwide 100% Online Remote",
    "description": "<?php echo htmlspecialchars($srv['full_desc']); ?>",
    "termsOfService": "<?php echo SITE_URL; ?>/terms.php"
}
</script>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
