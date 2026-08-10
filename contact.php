<?php
$page_title = "Contact GeekAssist Appliance | Certified Online Tech Support Desk";
$page_desc = "Get in touch with GeekAssist Appliance for immediate certified online appliance diagnostic and printer technical support. Instant online screen-share & phone support.";
$page_keywords = "contact geekassist appliance, online tech support hotline, online appliance diagnostic help desk, printer support telephone, virtual technical assistance";
include_once __DIR__ . '/includes/header.php';
?>

<!-- Header Hero Banner -->
<section style="padding: 4rem 0 3rem; background: radial-gradient(circle at 50% 0%, #eff6ff 0%, #f8fafc 100%); border-bottom: 1px solid var(--border-light);">
    <div class="container" style="text-align: center; max-width: 800px;">
        <div class="hero-badge" style="margin-bottom: 1rem;">
            <i class="ri-global-line"></i> Certified Online Technical Support
        </div>
        <h1 style="font-size: 3rem; margin-bottom: 1rem;" class="text-gradient">
            Contact GeekAssist Appliance Technical Support
        </h1>
        <p style="color: var(--text-muted); font-size: 1.1rem;">
            Have questions about an appliance error code or need instant online printer setup? Connect with our technical team today.
        </p>
    </div>
</section>

<!-- Main Contact Section -->
<section style="padding: 5rem 0;">
    <div class="container">
        <div class="grid grid-cols-2" style="gap: 3.5rem; align-items: start;">
            
            <!-- Contact Details & Hotline -->
            <div>
                <h2 style="font-size: 2rem; margin-bottom: 1.5rem;" class="text-gradient">
                    Direct Contact Information
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 2rem; line-height: 1.6;">
                    Our customer service and dispatch desk is open Monday through Saturday to assist with service requests and support inquiries.
                </p>

                <div style="display: flex; flex-direction: column; gap: 1.25rem; margin-bottom: 2.5rem;">
                    <div class="glass-card" style="padding: 1.25rem; display: flex; align-items: center; gap: 1rem; background: #ffffff;">
                        <div style="width: 44px; height: 44px; border-radius: 12px; background: var(--primary-subtle); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 1.4rem; shrink: 0; border: 1px solid var(--border-accent);">
                            <i class="ri-phone-fill"></i>
                        </div>
                        <div>
                            <div style="font-size: 0.8rem; color: var(--text-muted); font-weight: 600;">Phone Hotline (Same-Day Dispatch)</div>
                            <a href="tel:<?php echo PHONE_RAW; ?>" style="font-weight: 800; font-size: 1.1rem; color: var(--text-main);"><?php echo PHONE_NUMBER; ?></a>
                        </div>
                    </div>

                    <div class="glass-card" style="padding: 1.25rem; display: flex; align-items: center; gap: 1rem; background: #ffffff;">
                        <div style="width: 44px; height: 44px; border-radius: 12px; background: var(--accent-subtle); color: var(--accent); display: flex; align-items: center; justify-content: center; font-size: 1.4rem; shrink: 0; border: 1px solid #ffedd5;">
                            <i class="ri-mail-fill"></i>
                        </div>
                        <div>
                            <div style="font-size: 0.8rem; color: var(--text-muted); font-weight: 600;">Customer Support Email</div>
                            <a href="mailto:<?php echo EMAIL_ADDRESS; ?>" style="font-weight: 800; font-size: 1.05rem; color: var(--text-main);"><?php echo EMAIL_ADDRESS; ?></a>
                        </div>
                    </div>

                    <div class="glass-card" style="padding: 1.25rem; display: flex; align-items: center; gap: 1rem; background: #ffffff;">
                        <div style="width: 44px; height: 44px; border-radius: 12px; background: var(--success-subtle); color: var(--success); display: flex; align-items: center; justify-content: center; font-size: 1.4rem; shrink: 0; border: 1px solid #a7f3d0;">
                            <i class="ri-map-pin-fill"></i>
                        </div>
                        <div>
                            <div style="font-size: 0.8rem; color: var(--text-muted); font-weight: 600;">Main Office Location</div>
                            <div style="font-weight: 800; font-size: 0.95rem; color: var(--text-main);"><?php echo BUSINESS_ADDRESS; ?></div>
                        </div>
                    </div>

                    <div class="glass-card" style="padding: 1.25rem; display: flex; align-items: center; gap: 1rem; background: #ffffff;">
                        <div style="width: 44px; height: 44px; border-radius: 12px; background: #f3e8ff; color: #a855f7; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; shrink: 0; border: 1px solid #e9d5ff;">
                            <i class="ri-time-fill"></i>
                        </div>
                        <div>
                            <div style="font-size: 0.8rem; color: var(--text-muted); font-weight: 600;">Operating Schedule</div>
                            <div style="font-weight: 800; font-size: 0.95rem; color: var(--text-main);"><?php echo BUSINESS_HOURS; ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="glass-card" style="background: #ffffff; padding: 2.5rem;">
                <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem;" class="text-gradient">Send Us a Message</h3>
                <p style="font-size: 0.875rem; color: var(--text-muted); margin-bottom: 1.5rem;">Fill out your inquiry details and our team will get back to you within 30 minutes.</p>

                <form id="contact-form-page">
                    <div class="grid grid-cols-2" style="gap: 1rem;">
                        <div class="form-group">
                            <label class="form-label">First Name *</label>
                            <input type="text" name="first_name" class="form-control" placeholder="John" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Last Name *</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Doe" required>
                        </div>
                    </div>

                    <div class="grid grid-cols-2" style="gap: 1rem;">
                        <div class="form-group">
                            <label class="form-label">Phone Number *</label>
                            <input type="tel" name="phone" class="form-control" placeholder="(808) 555-0199" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email Address *</label>
                            <input type="email" name="email" class="form-control" placeholder="john@example.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Service Category</label>
                        <select name="service" class="form-control">
                            <option value="appliance">Kitchen / Laundry Appliance Repair</option>
                            <option value="printer">Printer / Copier Network Service</option>
                            <option value="tech-computer">Computer & Smart Office Tech Support</option>
                            <option value="commercial">Commercial Equipment Support</option>
                            <option value="other">⚠️ Other / Unlisted Appliance or Tech Issue</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Your Message / Equipment Symptom *</label>
                        <textarea name="message" class="form-control" rows="4" placeholder="Describe the issue you are experiencing..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%; font-size: 1rem;">
                        <i class="ri-send-plane-fill"></i> Submit Message Now
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
