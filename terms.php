<?php
$page_title = "Terms & Conditions | GeekAssist Appliance Technical Services";
$page_desc = "Terms & Conditions governing the use of GeekAssist Appliance certified online technical services, virtual diagnostic sessions, and resolution guarantees.";
$page_keywords = "terms and conditions, geekassist appliance terms, online service agreement, technical support terms";
include_once __DIR__ . '/includes/header.php';
?>

<!-- Header Banner -->
<section style="padding: 4rem 0 3rem; background: radial-gradient(circle at 50% 0%, #eff6ff 0%, #f8fafc 100%); border-bottom: 1px solid var(--border-light);">
    <div class="container" style="text-align: center; max-width: 800px;">
        <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: var(--primary-subtle); border: 1px solid var(--border-accent); color: var(--primary); padding: 0.35rem 0.9rem; border-radius: var(--radius-sm); font-size: 0.8rem; font-weight: 700; margin-bottom: 1rem;">
            <i class="ri-file-text-line"></i> Legal Agreement
        </div>
        <h1 style="font-size: 2.75rem; margin-bottom: 1rem;" class="text-gradient">
            Terms & Conditions
        </h1>
        <p style="color: var(--text-muted); font-size: 1rem; line-height: 1.7;">
            These Terms & Conditions govern your access to and use of GeekAssist Appliance services, including certified online virtual diagnostic evaluations, screen-share technical support, and resolution guarantees.
        </p>
    </div>
</section>

<!-- Content Body -->
<section style="padding: 4.5rem 0; background: #ffffff;">
    <div class="container" style="max-width: 850px;">
        <div class="glass-card" style="padding: 2.5rem; background: #ffffff; border-radius: var(--radius-md); border: 1px solid var(--border-light); display: flex; flex-direction: column; gap: 2rem;">
            
            <div>
                <h2 style="font-size: 1.4rem; color: var(--text-main); font-weight: 800; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="ri-checkbox-circle-fill" style="color: var(--primary);"></i> 1. Acceptance of Terms & Service Authorization
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7;">
                    By submitting a quick support request form or authorizing an online screen-share connection with a GeekAssist Appliance technician, you agree to be bound by these Terms & Conditions. You confirm that you are the owner or authorized user of the equipment (appliance, printer, or computer system) being serviced.
                </p>
            </div>

            <div style="border-top: 1px solid var(--border-light); padding-top: 1.5rem;">
                <h2 style="font-size: 1.4rem; color: var(--text-main); font-weight: 800; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="ri-global-line" style="color: var(--accent);"></i> 2. Online Diagnostic & Technical Scope
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7;">
                    Our service model is fully online. Diagnostics and technical repairs are conducted via encrypted screen-share or live video assistance. While over 90% of technical faults (software bugs, driver crashes, network printer offline errors, and control panel fault codes) are resolved online, physical hardware breakage (such as cracked compressor seals or fried mainboards) may require component replacement beyond online virtual scope.
                </p>
            </div>

            <div style="border-top: 1px solid var(--border-light); padding-top: 1.5rem;">
                <h2 style="font-size: 1.4rem; color: var(--text-main); font-weight: 800; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="ri-award-fill" style="color: var(--success);"></i> 3. 90-Day Written Resolution Guarantee
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7;">
                    All completed technical resolutions are backed by our 90-Day Written Resolution Guarantee from the date of session completion. If the exact same issue recurs within 90 days, our team will re-connect and resolve it free of charge. If an issue cannot be resolved, you are entitled to a full refund as outlined in our Refund Policy.
                </p>
            </div>

            <div style="border-top: 1px solid var(--border-light); padding-top: 1.5rem;">
                <h2 style="font-size: 1.4rem; color: var(--text-main); font-weight: 800; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="ri-shield-cross-fill" style="color: #a855f7;"></i> 4. Limitation of Liability
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7;">
                    GeekAssist Appliance will exercise reasonable technical care in performing online diagnostic services. In no event shall GeekAssist Appliance be liable for pre-existing hardware failures, unauthorized software modifications by third parties, or internet connection interruptions beyond our control.
                </p>
            </div>

            <div style="border-top: 1px solid var(--border-light); padding-top: 1.5rem;">
                <h2 style="font-size: 1.4rem; color: var(--text-main); font-weight: 800; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="ri-mail-line" style="color: var(--primary);"></i> 5. Contact Information
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7;">
                    For any questions regarding these Terms & Conditions, please contact our support desk at <a href="mailto:<?php echo EMAIL_ADDRESS; ?>" style="color: var(--primary); font-weight: 700;"><?php echo EMAIL_ADDRESS; ?></a> or call <a href="tel:<?php echo PHONE_RAW; ?>" style="color: var(--primary); font-weight: 700;"><?php echo PHONE_NUMBER; ?></a>.
                </p>
            </div>

        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
