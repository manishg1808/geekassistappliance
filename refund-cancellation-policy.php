<?php
$page_title = "Refund & Cancellation Policy | GeekAssist Appliance";
$page_desc = "Refund and Cancellation Policy governing GeekAssist Appliance 100% online remote technical sessions, diagnostic evaluations, and 90-day resolution guarantee.";
include_once __DIR__ . '/includes/header.php';
?>

<!-- Header Banner -->
<section style="padding: 4rem 0 3rem; background: radial-gradient(circle at 50% 0%, #eff6ff 0%, #f8fafc 100%); border-bottom: 1px solid var(--border-light);">
    <div class="container" style="text-align: center; max-width: 800px;">
        <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: var(--primary-subtle); border: 1px solid var(--border-accent); color: var(--primary); padding: 0.35rem 0.9rem; border-radius: var(--radius-sm); font-size: 0.8rem; font-weight: 700; margin-bottom: 1rem;">
            <i class="ri-refund-2-line"></i> Customer Satisfaction Guarantee
        </div>
        <h1 style="font-size: 2.75rem; margin-bottom: 1rem;" class="text-gradient">
            Refund & Cancellation Policy
        </h1>
        <p style="color: var(--text-muted); font-size: 1rem; line-height: 1.7;">
            We stand firmly behind the quality of our 100% online remote technical support. This policy outlines our cancellation guidelines and refund procedures under our 90-Day Written Resolution Guarantee.
        </p>
    </div>
</section>

<!-- Content Body -->
<section style="padding: 4.5rem 0; background: #ffffff;">
    <div class="container" style="max-width: 850px;">
        <div class="glass-card" style="padding: 2.5rem; background: #ffffff; border-radius: var(--radius-md); border: 1px solid var(--border-light); display: flex; flex-direction: column; gap: 2rem;">
            
            <div>
                <h2 style="font-size: 1.4rem; color: var(--text-main); font-weight: 800; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="ri-search-eye-line" style="color: var(--primary);"></i> 1. Free Initial Diagnostic Assessment
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7;">
                    Our initial 5-minute online diagnostic evaluation is completely free of charge. If during this initial assessment our technician determines that your technical issue cannot be fixed remotely online, your session is ended at zero charge to you.
                </p>
            </div>

            <div style="border-top: 1px solid var(--border-light); padding-top: 1.5rem;">
                <h2 style="font-size: 1.4rem; color: var(--text-main); font-weight: 800; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="ri-close-circle-fill" style="color: var(--accent);"></i> 2. Session Cancellation Policy
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7;">
                    You may cancel your scheduled remote support session at any time prior to the technician connecting to your device. Simply contact our dispatch desk or notify your assigned technician via phone or email. No cancellation fees apply for pre-session cancellations.
                </p>
            </div>

            <div style="border-top: 1px solid var(--border-light); padding-top: 1.5rem;">
                <h2 style="font-size: 1.4rem; color: var(--text-main); font-weight: 800; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="ri-shield-check-fill" style="color: var(--success);"></i> 3. 90-Day Written Resolution Guarantee & Refunds
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1rem;">
                    All completed remote technical resolution sessions are covered by our written 90-Day Resolution Guarantee:
                </p>
                <ul style="list-style: none; display: flex; flex-direction: column; gap: 0.75rem; font-size: 0.925rem; color: var(--text-muted);">
                    <li style="display: flex; align-items: flex-start; gap: 0.5rem;">
                        <i class="ri-checkbox-circle-fill" style="color: var(--success); margin-top: 0.2rem;"></i>
                        <span><strong>Recurrent Issue Coverage:</strong> If the exact same software glitch, printer driver crash, or IP network error recurs within 90 days of session completion, our specialist will re-connect and resolve it at no extra fee.</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 0.5rem;">
                        <i class="ri-checkbox-circle-fill" style="color: var(--success); margin-top: 0.2rem;"></i>
                        <span><strong>Full Refund Eligibility:</strong> If our specialist is unable to resolve your technical issue after undertaking a remote support session, a full refund will be processed to your original payment method within 3–5 business days.</span>
                    </li>
                </ul>
            </div>

            <div style="border-top: 1px solid var(--border-light); padding-top: 1.5rem;">
                <h2 style="font-size: 1.4rem; color: var(--text-main); font-weight: 800; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="ri-hand-coin-fill" style="color: #a855f7;"></i> 4. How to Request a Refund
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7;">
                    To initiate a refund request, simply submit your session ID and details to <a href="mailto:<?php echo EMAIL_ADDRESS; ?>" style="color: var(--primary); font-weight: 700;"><?php echo EMAIL_ADDRESS; ?></a> or call customer support at <a href="tel:<?php echo PHONE_RAW; ?>" style="color: var(--primary); font-weight: 700;"><?php echo PHONE_NUMBER; ?></a>. Our billing department reviews and processes requests within 24 hours.
                </p>
            </div>

        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
