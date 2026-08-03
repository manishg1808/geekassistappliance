<?php
require_once __DIR__ . '/../config.php';
?>
    <!-- Emergency Hotline Banner -->
    <section style="background: linear-gradient(135deg, #eff6ff 0%, #fff7ed 100%); border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light); padding: 3rem 0;">
        <div class="container" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1.5rem;">
            <div>
                <h3 style="font-size: 1.6rem; margin-bottom: 0.25rem;" class="text-gradient">Need Fast 100% Online Tech or Appliance Assistance?</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem;">Our certified remote technical specialists connect with you online in minutes.</p>
            </div>
            <div style="display: flex; gap: 1rem; align-items: center;">
                <a href="tel:<?php echo PHONE_RAW; ?>" class="btn btn-accent">
                    <i class="ri-phone-fill"></i> Call Now: <?php echo PHONE_NUMBER; ?>
                </a>
                <a href="<?php echo SITE_URL; ?>/booking.php" class="btn btn-outline">
                    Book Online Fast
                </a>
            </div>
        </div>
    </section>

    <!-- Main Footer -->
    <footer class="footer-main">
        <div class="container">
            <div class="footer-grid">
                <!-- Column 1: Brand & Bio -->
                <div class="footer-col">
                    <a href="<?php echo SITE_URL; ?>/index.php" style="display: inline-block; margin-bottom: 1.25rem; background: transparent;">
                        <img src="<?php echo SITE_URL; ?>/assets/images/logo-light.svg" alt="GeekAssist Appliance Logo" style="height: 44px; width: auto; display: block;">
                    </a>
                    <p style="color: #94a3b8; font-size: 0.875rem; margin-bottom: 1.25rem; line-height: 1.6;">
                        GeekAssist Appliance is your premier provider for 100% online remote technical support, virtual appliance diagnostics, printer network setup, and computer troubleshooting.
                    </p>
                    <div style="display: flex; gap: 0.75rem;">
                        <a href="#" style="width: 34px; height: 34px; border-radius: 50%; background: #1e293b; display: flex; align-items: center; justify-content: center; color: #cbd5e1;" aria-label="Facebook"><i class="ri-facebook-fill"></i></a>
                        <a href="#" style="width: 34px; height: 34px; border-radius: 50%; background: #1e293b; display: flex; align-items: center; justify-content: center; color: #cbd5e1;" aria-label="Twitter"><i class="ri-twitter-fill"></i></a>
                        <a href="#" style="width: 34px; height: 34px; border-radius: 50%; background: #1e293b; display: flex; align-items: center; justify-content: center; color: #cbd5e1;" aria-label="Instagram"><i class="ri-instagram-fill"></i></a>
                    </div>
                </div>

                <!-- Column 2: Quick Navigation -->
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo SITE_URL; ?>/index.php">Home Page</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/services.php">All 17 Repair Services</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/printer-service.php">Printer Service & Setup</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/about.php">About Our Team</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/contact.php">Contact & Support Desk</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/booking.php">Schedule Repair Online</a></li>
                    </ul>
                </div>

                <!-- Column 3: Key Services -->
                <div class="footer-col">
                    <h4>Key Services</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo SITE_URL; ?>/service-detail.php?slug=refrigerator-repair">Refrigerator & Freezer</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/service-detail.php?slug=washer-repair">Washing Machine Repair</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/service-detail.php?slug=dryer-repair">Clothes Dryer Repair</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/service-detail.php?slug=oven-repair">Oven & Range Repair</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/service-detail.php?slug=commercial-appliance-repair">Commercial Equipment</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/service-detail.php?slug=laptop-desktop-repair">Computer & IT Support</a></li>
                    </ul>
                </div>

                <!-- Column 4: Legal & Policies (NEW COLUMN) -->
                <div class="footer-col">
                    <h4>Legal & Policies</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo SITE_URL; ?>/terms.php">Terms & Conditions</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/cookie-policy.php">Cookie Policy</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/disclaimer.php">Disclaimer Policy</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/refund-cancellation-policy.php">Refund & Cancellation</a></li>
                    </ul>
                </div>

                <!-- Column 5: Contact Info -->
                <div class="footer-col">
                    <h4>Contact Info</h4>
                    <div style="font-size: 0.85rem; color: #94a3b8; display: flex; flex-direction: column; gap: 0.85rem; margin-bottom: 1.25rem;">
                        <div><i class="ri-map-pin-2-fill" style="color: #f97316; margin-right: 0.4rem;"></i> <?php echo BUSINESS_ADDRESS; ?></div>
                        <div><i class="ri-phone-fill" style="color: #60a5fa; margin-right: 0.4rem;"></i> <?php echo PHONE_NUMBER; ?></div>
                        <div><i class="ri-mail-send-fill" style="color: #34d399; margin-right: 0.4rem;"></i> <?php echo EMAIL_ADDRESS; ?></div>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom Bar -->
            <div class="footer-bottom">
                <div>
                    © <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved. 100% Online Remote Tech & Appliance Support.
                </div>
                <div style="display: flex; gap: 1.25rem; flex-wrap: wrap;">
                    <a href="<?php echo SITE_URL; ?>/terms.php">Terms</a>
                    <a href="<?php echo SITE_URL; ?>/privacy-policy.php">Privacy</a>
                    <a href="<?php echo SITE_URL; ?>/cookie-policy.php">Cookies</a>
                    <a href="<?php echo SITE_URL; ?>/disclaimer.php">Disclaimer</a>
                    <a href="<?php echo SITE_URL; ?>/refund-cancellation-policy.php">Refunds</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Include Global Quick Booking Modal -->
    <?php include_once __DIR__ . '/booking-modal.php'; ?>

    <!-- Main JS File -->
    <script src="<?php echo SITE_URL; ?>/assets/js/main.js"></script>
</body>
</html>
