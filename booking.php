<?php
$page_title = "Start 100% Online Remote Session | Instant Tech & Appliance Support";
$page_desc = "Connect with a certified tech specialist for 100% online remote appliance diagnostic, printer setup, or computer troubleshooting. Instant online connection.";
$page_keywords = "start remote session, book online tech help, virtual appliance diagnostic appointment, fast remote desktop connection, printer setup online session";
include_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Header Banner -->
<section style="padding: 4rem 0 3rem; background: radial-gradient(circle at 50% 0%, #eff6ff 0%, #f8fafc 100%); border-bottom: 1px solid var(--border-light);">
    <div class="container" style="text-align: center; max-width: 800px;">
        <div class="hero-badge" style="margin-bottom: 1rem;">
            <i class="ri-global-line"></i> 100% Online Remote Connection
        </div>
        <h1 style="font-size: 3rem; margin-bottom: 1rem;" class="text-gradient">
            Start Your 100% Online Remote Session
        </h1>
        <p style="color: var(--text-muted); font-size: 1.1rem;">
            Select your service requirement, pick your time slot, and connect with our remote specialist online in minutes. No in-person visit required!
        </p>
    </div>
</section>

<!-- Appointment Booking Form Section -->
<section style="padding: 5rem 0;">
    <div class="container" style="max-width: 800px;">
        <div class="glass-card" style="background: #ffffff; padding: 3rem;">
            
            <div style="display: flex; justify-content: space-around; margin-bottom: 2.5rem; border-bottom: 1px solid var(--border-light); padding-bottom: 1.5rem; text-align: center;">
                <div>
                    <div style="width: 36px; height: 36px; border-radius: 50%; background: var(--primary); color: #ffffff; font-weight: 800; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 0.35rem;">1</div>
                    <div style="font-size: 0.85rem; font-weight: 700; color: var(--text-main);">Remote Service</div>
                </div>
                <div>
                    <div style="width: 36px; height: 36px; border-radius: 50%; background: var(--accent); color: #ffffff; font-weight: 800; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 0.35rem;">2</div>
                    <div style="font-size: 0.85rem; font-weight: 700; color: var(--text-main);">Time Slot</div>
                </div>
                <div>
                    <div style="width: 36px; height: 36px; border-radius: 50%; background: var(--bg-subtle); color: var(--text-muted); font-weight: 800; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 0.35rem; border: 1px solid var(--border-light);">3</div>
                    <div style="font-size: 0.85rem; font-weight: 700; color: var(--text-muted);">Instant Session Link</div>
                </div>
            </div>

            <form id="booking-page-form">
                <h3 style="font-size: 1.25rem; margin-bottom: 1.25rem;" class="text-gradient">Step 1: Select Service Required</h3>
                
                <div class="form-group">
                    <label class="form-label">Service Type *</label>
                    <select class="form-control" required>
                        <option value="">-- Choose from 17 100% Online Services --</option>
                        <?php foreach ($services as $slug => $srv): ?>
                            <option value="<?php echo $slug; ?>"><?php echo $srv['title']; ?></option>
                        <?php endforeach; ?>
                        <option value="other-service">⚠️ Other / Unlisted Appliance or Tech Issue</option>
                    </select>
                </div>

                <div class="grid grid-cols-2" style="gap: 1rem;">
                    <div class="form-group">
                        <label class="form-label">Appliance Brand / Make</label>
                        <input type="text" class="form-control" placeholder="e.g. Samsung, LG, HP, Bosch">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Estimated Age of Unit</label>
                        <select class="form-control">
                            <option value="Under 2 years">Under 2 years</option>
                            <option value="2 to 5 years">2 to 5 years</option>
                            <option value="5+ years">5+ years</option>
                            <option value="Other / Not Sure">Other / Not Sure</option>
                        </select>
                    </div>
                </div>

                <h3 style="font-size: 1.25rem; margin: 2rem 0 1.25rem;" class="text-gradient">Step 2: Preferred Date & Time</h3>

                <div class="grid grid-cols-2" style="gap: 1rem;">
                    <div class="form-group">
                        <label class="form-label">Preferred Service Date *</label>
                        <input type="date" class="form-control" min="<?php echo date('Y-m-d'); ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Time Window *</label>
                        <select class="form-control" required>
                            <option value="Morning (8:00 AM - 12:00 PM)">Morning (8:00 AM - 12:00 PM)</option>
                            <option value="Afternoon (12:00 PM - 4:00 PM)">Afternoon (12:00 PM - 4:00 PM)</option>
                            <option value="Evening (4:00 PM - 6:00 PM)">Evening (4:00 PM - 6:00 PM)</option>
                        </select>
                    </div>
                </div>

                <h3 style="font-size: 1.25rem; margin: 2rem 0 1.25rem;" class="text-gradient">Step 3: Contact & Address Information</h3>

                <div class="grid grid-cols-2" style="gap: 1rem;">
                    <div class="form-group">
                        <label class="form-label">Full Name *</label>
                        <input type="text" class="form-control" placeholder="John Doe" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Phone Number *</label>
                        <input type="tel" class="form-control" placeholder="(808) 555-0199" required>
                    </div>
                </div>

                <div class="grid grid-cols-2" style="gap: 1rem;">
                    <div class="form-group">
                        <label class="form-label">Email Address *</label>
                        <input type="email" class="form-control" placeholder="john@example.com" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">City / Community *</label>
                        <input type="text" class="form-control" value="Kamloops, BC" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Full Service Address (Street & Unit Number) *</label>
                    <input type="text" class="form-control" placeholder="123 Main St, Apartment 4B" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Detailed Notes / Symptoms</label>
                    <textarea class="form-control" rows="3" placeholder="Tell our technician what is happening (e.g. noise, leak, error code)..."></textarea>
                </div>

                <button type="submit" class="btn btn-accent" style="width: 100%; padding: 1rem; font-size: 1.1rem; margin-top: 1rem;">
                    <i class="ri-check-double-line"></i> Confirm & Book Technician Now
                </button>
            </form>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
