<?php
$page_title = "Cookie Policy | GeekAssist Appliance";
$page_desc = "Learn how GeekAssist Appliance uses essential cookies, performance preferences, and secure session management to deliver seamless 100% online remote technical support.";
$page_keywords = "cookie policy, website cookies, session security, data protection, geekassist cookie policy";
include_once __DIR__ . '/includes/header.php';
?>

<!-- Header Banner -->
<section style="padding: 4rem 0 3rem; background: radial-gradient(circle at 50% 0%, #eff6ff 0%, #f8fafc 100%); border-bottom: 1px solid var(--border-light);">
    <div class="container" style="text-align: center; max-width: 800px;">
        <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: var(--primary-subtle); border: 1px solid var(--border-accent); color: var(--primary); padding: 0.35rem 0.9rem; border-radius: var(--radius-sm); font-size: 0.8rem; font-weight: 700; margin-bottom: 1rem;">
            <i class="ri-cookie-line"></i> Privacy & Transparency
        </div>
        <h1 style="font-size: 2.75rem; margin-bottom: 1rem;" class="text-gradient">
            Cookie Policy
        </h1>
        <p style="color: var(--text-muted); font-size: 1rem; line-height: 1.7;">
            This Cookie Policy explains how GeekAssist Appliance uses cookies and similar tracking technologies to recognize you when you visit our website and utilize our 100% online remote technical support services.
        </p>
    </div>
</section>

<!-- Cookie Policy Content Body -->
<section style="padding: 4.5rem 0; background: #ffffff;">
    <div class="container" style="max-width: 850px;">
        <div class="glass-card" style="padding: 2.5rem; background: #ffffff; border-radius: var(--radius-md); border: 1px solid var(--border-light); display: flex; flex-direction: column; gap: 2rem;">
            
            <div>
                <h2 style="font-size: 1.4rem; color: var(--text-main); font-weight: 800; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="ri-information-fill" style="color: var(--primary);"></i> 1. What Are Cookies?
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7;">
                    Cookies are small text files that are stored on your computer, smartphone, or tablet when you visit a website. They allow the website to recognize your browser, remember your user preferences, and ensure the secure execution of interactive tools such as our 100% online remote support request forms.
                </p>
            </div>

            <div style="border-top: 1px solid var(--border-light); padding-top: 1.5rem;">
                <h2 style="font-size: 1.4rem; color: var(--text-main); font-weight: 800; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="ri-shield-keyhole-fill" style="color: var(--accent);"></i> 2. How We Use Cookies
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1rem;">
                    GeekAssist Appliance uses cookies for the following essential purposes:
                </p>
                <ul style="list-style: none; display: flex; flex-direction: column; gap: 0.75rem; font-size: 0.925rem; color: var(--text-muted);">
                    <li style="display: flex; align-items: flex-start; gap: 0.5rem;">
                        <i class="ri-checkbox-circle-fill" style="color: var(--success); margin-top: 0.2rem;"></i>
                        <span><strong>Strictly Necessary Cookies:</strong> Required to enable core navigation, secure screen-share dispatch links, and booking modal form submissions.</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 0.5rem;">
                        <i class="ri-checkbox-circle-fill" style="color: var(--success); margin-top: 0.2rem;"></i>
                        <span><strong>Performance & Analytics Cookies:</strong> Help us measure site speed, page load performance, and popular service categories to continuously optimize user experience.</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 0.5rem;">
                        <i class="ri-checkbox-circle-fill" style="color: var(--success); margin-top: 0.2rem;"></i>
                        <span><strong>Preference Cookies:</strong> Remember your selected appliance or printer category during quick support sessions so you do not have to re-enter details.</span>
                    </li>
                </ul>
            </div>

            <div style="border-top: 1px solid var(--border-light); padding-top: 1.5rem;">
                <h2 style="font-size: 1.4rem; color: var(--text-main); font-weight: 800; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="ri-settings-4-fill" style="color: var(--success);"></i> 3. Managing & Disabling Cookies
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7;">
                    You have the right to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser settings to decline cookies if you prefer. Please note that disabling essential cookies may impact the performance of our online support request modal.
                </p>
            </div>

            <div style="border-top: 1px solid var(--border-light); padding-top: 1.5rem;">
                <h2 style="font-size: 1.4rem; color: var(--text-main); font-weight: 800; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="ri-mail-fill" style="color: #a855f7;"></i> 4. Contact Us Regarding Cookie Settings
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7;">
                    If you have any questions or concerns about our use of cookies or privacy practices, please contact our support desk at <a href="mailto:<?php echo EMAIL_ADDRESS; ?>" style="color: var(--primary); font-weight: 700;"><?php echo EMAIL_ADDRESS; ?></a> or call <a href="tel:<?php echo PHONE_RAW; ?>" style="color: var(--primary); font-weight: 700;"><?php echo PHONE_NUMBER; ?></a>.
                </p>
            </div>

        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
