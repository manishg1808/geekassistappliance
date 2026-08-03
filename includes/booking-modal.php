<?php
require_once __DIR__ . '/../config.php';
?>
<!-- Global Quick Booking Modal Dialog -->
<div class="modal-overlay" id="booking-modal">
    <div class="modal-container">
        <button class="modal-close close-booking-modal" aria-label="Close booking modal">
            <i class="ri-close-line"></i>
        </button>

        <div style="text-align: center; margin-bottom: 1.5rem;">
            <div style="display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; border-radius: 50%; background: var(--primary-subtle); color: var(--primary); font-size: 1.5rem; margin-bottom: 0.75rem; border: 1px solid var(--border-accent);">
                <i class="ri-calendar-event-line"></i>
            </div>
            <h3 style="font-size: 1.5rem;" class="text-gradient">Start 100% Online Remote Session</h3>
            <p style="color: var(--text-muted); font-size: 0.875rem;">Get instant remote screen-share, guided virtual diagnostics & tech assistance.</p>
        </div>

        <form id="booking-form-modal">
            <div class="form-group">
                <label class="form-label">Support Type / Session Mode *</label>
                <select class="form-control" required style="font-weight: 700; border-color: var(--primary);">
                    <option value="online_remote" selected>🌐 100% Online Remote Session (Instant Screen Share / Video Guided Fix)</option>
                    <option value="virtual_diagnostic">📹 Virtual Video Diagnostic & Troubleshooting Call</option>
                </select>
            </div>

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

            <div class="form-group">
                <label class="form-label">Service Required *</label>
                <select class="form-control" id="modal-service-select" required>
                    <option value="">Select Service Needed...</option>
                    <option value="remote-tech-help">🌐 100% Remote Online Tech & Printer Help</option>
                    <?php foreach ($services as $slug => $srv): ?>
                        <option value="<?php echo $slug; ?>"><?php echo $srv['title']; ?></option>
                    <?php endforeach; ?>
                    <option value="other-service">⚠️ Other / Unlisted Appliance or Tech Issue</option>
                </select>
            </div>

            <div class="grid grid-cols-2" style="gap: 1rem;">
                <div class="form-group">
                    <label class="form-label">Preferred Date *</label>
                    <input type="date" class="form-control" min="<?php echo date('Y-m-d'); ?>" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Preferred Time Slot *</label>
                    <select class="form-control" required>
                        <option value="Morning (8am - 12pm)">Morning (8am - 12pm)</option>
                        <option value="Afternoon (12pm - 4pm)">Afternoon (12pm - 4pm)</option>
                        <option value="Evening (4pm - 6pm)">Evening (4pm - 6pm)</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Service Address / City *</label>
                <input type="text" class="form-control" placeholder="Street Address, Kamloops, BC" required>
            </div>

            <div class="form-group">
                <label class="form-label">Describe Issue / Appliance Brand</label>
                <textarea class="form-control" rows="3" placeholder="e.g. Samsung refrigerator making loud clicking sound and leaking water..."></textarea>
            </div>

            <button type="submit" class="btn btn-accent" style="width: 100%; margin-top: 0.5rem; font-size: 1rem;">
                <i class="ri-check-double-line"></i> Confirm & Book Technician Now
            </button>
        </form>
    </div>
</div>
