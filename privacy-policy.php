<?php
$page_title = "Privacy Policy | GeekAssist Appliance";
$page_desc = "GeekAssist Appliance Privacy Policy detailing how we collect, safeguard, and process personal data and remote support diagnostic logs under 256-bit encryption.";
include_once __DIR__ . '/includes/header.php';
?>

<!-- Header Banner -->
<section style="padding: 4rem 0 3rem; background: radial-gradient(circle at 50% 0%, #eff6ff 0%, #f8fafc 100%); border-bottom: 1px solid var(--border-light);">
    <div class="container" style="text-align: center; max-width: 800px;">
        <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: var(--primary-subtle); border: 1px solid var(--border-accent); color: var(--primary); padding: 0.35rem 0.9rem; border-radius: var(--radius-sm); font-size: 0.8rem; font-weight: 700; margin-bottom: 1rem;">
            <i class="ri-shield-user-line"></i> Data Security & Encryption
        </div>
        <h1 style="font-size: 2.75rem; margin-bottom: 1rem;" class="text-gradient">
            Privacy Policy
        </h1>
        <p style="color: var(--text-muted); font-size: 1rem; line-height: 1.7;">
            At GeekAssist Appliance, your privacy and data security are paramount. This Privacy Policy outlines how we collect, process, and protect your personal information during 100% online remote technical sessions.
        </p>
    </div>
</section>

<!-- Content Body -->
<section style="padding: 4.5rem 0; background: #ffffff;">
    <div class="container" style="max-width: 850px;">
        <div class="glass-card" style="padding: 2.5rem; background: #ffffff; border-radius: var(--radius-md); border: 1px solid var(--border-light); display: flex; flex-direction: column; gap: 2rem;">
            
            <div>
                <h2 style="font-size: 1.4rem; color: var(--text-main); font-weight: 800; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="ri-folder-user-fill" style="color: var(--primary);"></i> 1. Information We Collect
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7;">
                    When requesting a remote technical session or submitting a diagnostic inquiry, we collect basic contact and equipment information including your full name, telephone number, email address, device model (e.g. HP LaserJet printer or Samsung refrigerator model), and a description of the error code or fault symptoms.
                </p>
            </div>

            <div style="border-top: 1px solid var(--border-light); padding-top: 1.5rem;">
                <h2 style="font-size: 1.4rem; color: var(--text-main); font-weight: 800; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="ri-lock-2-fill" style="color: var(--accent);"></i> 2. Remote Session Encryption & Safety
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7;">
                    All virtual screen-share connections and remote diagnostic sessions are established over bank-grade 256-bit SSL/TLS encrypted connections. Our technicians can only view and access elements required to resolve your specific technical issue. You maintain 100% manual control and can terminate the remote session at any time with a single click.
                </p>
            </div>

            <div style="border-top: 1px solid var(--border-light); padding-top: 1.5rem;">
                <h2 style="font-size: 1.4rem; color: var(--text-main); font-weight: 800; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="ri-heart-handshake-fill" style="color: var(--success);"></i> 3. How We Use & Protect Data
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1rem;">
                    Your personal information is strictly used to:
                </p>
                <ul style="list-style: none; display: flex; flex-direction: column; gap: 0.75rem; font-size: 0.925rem; color: var(--text-muted);">
                    <li style="display: flex; align-items: flex-start; gap: 0.5rem;">
                        <i class="ri-checkbox-circle-fill" style="color: var(--success); margin-top: 0.2rem;"></i>
                        <span>Dispatch certified remote technical specialists to your session in under 15 minutes.</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 0.5rem;">
                        <i class="ri-checkbox-circle-fill" style="color: var(--success); margin-top: 0.2rem;"></i>
                        <span>Issue your official written 90-day remote resolution guarantee certificate.</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 0.5rem;">
                        <i class="ri-checkbox-circle-fill" style="color: var(--success); margin-top: 0.2rem;"></i>
                        <span>Communicate essential service updates and diagnostic recommendations.</span>
                    </li>
                </ul>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7; margin-top: 1rem;">
                    <strong>Zero Third-Party Data Sale:</strong> GeekAssist Appliance never sells, rents, trades, or commercializes your personal contact data or system logs to third parties.
                </p>
            </div>

            <div style="border-top: 1px solid var(--border-light); padding-top: 1.5rem;">
                <h2 style="font-size: 1.4rem; color: var(--text-main); font-weight: 800; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="ri-contacts-book-2-fill" style="color: #a855f7;"></i> 4. Data Rights & Contact Information
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7;">
                    You have the right to request access to, deletion of, or correction of your personal information stored in our dispatch records. To exercise these rights or make privacy inquiries, email <a href="mailto:<?php echo EMAIL_ADDRESS; ?>" style="color: var(--primary); font-weight: 700;"><?php echo EMAIL_ADDRESS; ?></a>.
                </p>
            </div>

        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
