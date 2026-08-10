<?php
include_once __DIR__ . '/make_logo.php';
$page_title = "Rapid, Dependable Appliance & Tech Support | GeekAssist Appliance";
$page_desc = "Rapid, dependable appliance repair and tech support right when you need it most. Certified online diagnostics for refrigerators, washing machines, dryers, ovens, dishwashers, commercial equipment, and office printers. Zero home visit needed.";
$page_keywords = "rapid dependable appliance repair, tech support right when you need it, certified online tech support, virtual appliance diagnostics, online printer repair, HP printer setup online";
include_once __DIR__ . '/includes/header.php';
?>

<!-- 1. HERO BANNER SECTION -->
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <!-- Left Column: Copy & CTAs -->
            <div>
                <div class="hero-badge">
                    <i class="ri-global-line" style="color: var(--primary);"></i> 🌐 Certified Virtual Resolution — Zero In-Person Visit Needed
                </div>
                <h1 class="hero-title">
                    Rapid, Dependable <span class="text-gradient-cyan">Appliance & Tech Assistance</span> Right When You Need It Most
                </h1>
                <p class="hero-desc">
                    Get swift, trusted diagnostic evaluations and technical fixes for home appliances, office printers, and smart equipment. <strong>Fully Online — Fast, Secure & Guaranteed!</strong> Connect with certified specialists in minutes.
                </p>
                <div class="hero-actions">
                    <a href="<?php echo SITE_URL; ?>/booking.php" class="btn btn-accent">
                        <i class="ri-global-line"></i> Start Online Virtual Session
                    </a>
                    <a href="<?php echo SITE_URL; ?>/services.php" class="btn btn-outline">
                        <i class="ri-grid-fill"></i> View All 17 Services
                    </a>
                </div>

                <!-- Live Dispatch Ticker -->
                <div style="margin-top: 1.5rem; display: inline-flex; align-items: center; gap: 0.625rem; background: var(--bg-surface); padding: 0.5rem 1rem; border-radius: var(--radius-full); border: 1px solid var(--border-light); font-size: 0.825rem; font-weight: 600; box-shadow: var(--shadow-sm);">
                    <span class="pulse-dot"></span>
                    <span style="color: var(--text-main);">⚡ 5 Certified Technical Specialists Online & Active Right Now</span>
                </div>

                <div class="hero-stats">
                    <div>
                        <div class="stat-number">4.9 ★</div>
                        <div class="stat-label">1,480+ Verified Reviews</div>
                    </div>
                    <div>
                        <div class="stat-number">90-Day</div>
                        <div class="stat-label">Resolution Support</div>
                    </div>
                    <div>
                        <div class="stat-number">&lt; 15 Mins</div>
                        <div class="stat-label">Average Online Connect Time</div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Quick Online Support Request Form -->
            <div>
                <div class="estimator-card" style="padding: 2.25rem; background: #ffffff;">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.5rem;">
                        <h3 style="color: var(--text-main); font-size: 1.25rem;"><i class="ri-customer-service-2-line" style="color: var(--primary);"></i> Quick Support Request</h3>
                        <span class="status-badge" style="font-size: 0.725rem; padding: 0.2rem 0.55rem; background: rgba(16, 185, 129, 0.15); color: var(--success); border-color: rgba(16, 185, 129, 0.3);">
                            <span class="pulse-dot"></span> Instant Connect
                        </span>
                    </div>
                    <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 1.5rem;">Fill out your details below for immediate direct online technical assistance.</p>

                    <form id="hero-quick-request-form">
                        <div class="form-group" style="margin-bottom: 1rem;">
                            <label class="form-label" style="font-size: 0.85rem; font-weight: 700; color: var(--text-main);">Full Name *</label>
                            <input type="text" name="full_name" class="form-control" placeholder="Enter your full name" required style="padding: 0.7rem 0.9rem; font-size: 0.9rem;">
                        </div>

                        <div class="form-group" style="margin-bottom: 1rem;">
                            <label class="form-label" style="font-size: 0.85rem; font-weight: 700; color: var(--text-main);">Phone Number *</label>
                            <input type="tel" name="phone" class="form-control" placeholder="Enter phone number" required style="padding: 0.7rem 0.9rem; font-size: 0.9rem;">
                        </div>

                        <div class="form-group" style="margin-bottom: 1rem;">
                            <label class="form-label" style="font-size: 0.85rem; font-weight: 700; color: var(--text-main);">Service Category *</label>
                            <select name="service" class="form-control" required style="padding: 0.7rem 0.9rem; font-size: 0.9rem;">
                                <option value="">-- Select Service Category --</option>
                                <option value="printer-service">Printer / Copier Network Support</option>
                                <option value="refrigerator-repair">Refrigerator & Freezer Repair</option>
                                <option value="washer-repair">Washing Machine Repair</option>
                                <option value="dryer-repair">Clothes Dryer Repair</option>
                                <option value="oven-repair">Oven & Range Repair</option>
                                <option value="dishwasher-repair">Dishwasher Repair</option>
                                <option value="laptop-desktop-repair">Computer & IT Support</option>
                                <option value="other-service">⚠️ Other / Unlisted Appliance or Tech Issue</option>
                            </select>
                        </div>

                        <div class="form-group" style="margin-bottom: 1.25rem;">
                            <label class="form-label" style="font-size: 0.85rem; font-weight: 700; color: var(--text-main);">Appliance & Issue Description *</label>
                            <textarea name="description" class="form-control" rows="3" placeholder="e.g. HP printer showing WiFi offline error, or Samsung fridge error code..." required style="padding: 0.7rem 0.9rem; font-size: 0.9rem; resize: none;"></textarea>
                        </div>

                        <button type="submit" class="btn btn-accent" style="width: 100%; justify-content: center; padding: 0.85rem; font-size: 0.95rem;">
                            <i class="ri-headset-line"></i> Connect With Specialist Now
                        </button>
                    </form>

                    <div style="font-size: 0.775rem; color: var(--text-muted); text-align: center; margin-top: 1rem; font-weight: 500;">
                        <i class="ri-shield-check-line" style="color: var(--success);"></i> Fully Secure & Confidential • 15 Min Response
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. SERVICES SHOWCASE (DIRECTORY BELOW BANNER) -->
<section style="padding: 4.5rem 0; background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%); border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light);">
    <div class="container">
        <div style="text-align: center; max-width: 700px; margin: 0 auto 2.5rem;">
            <div style="color: var(--primary); font-weight: 700; font-size: 0.875rem; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.5rem;">Instant Virtual Services</div>
            <h2 style="font-size: 2.5rem; margin-bottom: 1rem;" class="text-gradient">Our Certified Online Support Catalog</h2>
            <p style="color: var(--text-muted); font-size: 1rem;">Select your appliance or tech equipment below to connect with a certified technical specialist immediately.</p>
        </div>

        <!-- Category Filter Tabs Bar -->
        <div class="filter-tabs" style="margin-bottom: 2.5rem;">
            <button class="filter-tab active" data-category="all">All Services</button>
            <button class="filter-tab" data-category="Kitchen">Kitchen</button>
            <button class="filter-tab" data-category="Laundry">Laundry</button>
            <button class="filter-tab" data-category="Tech & Office">Tech & Printer</button>
            <button class="filter-tab" data-category="Commercial">Commercial</button>
            <button class="filter-tab" data-category="Climate Control">Climate Control</button>
        </div>

        <div class="grid grid-cols-4" id="homepage-services-grid">
            <?php 
            $featured_slugs = [
                'refrigerator-repair', 
                'printer-service', 
                'washer-repair', 
                'dryer-repair', 
                'oven-repair', 
                'dishwasher-repair', 
                'laptop-desktop-repair', 
                'wireless-network-printer-setup'
            ];
            foreach ($featured_slugs as $slug):
                if (isset($services[$slug])):
                    $srv = $services[$slug];
            ?>
            <a href="<?php echo SITE_URL; ?>/service-detail.php?slug=<?php echo $slug; ?>" class="service-card service-catalog-item service-card-link" data-category="<?php echo $srv['category']; ?>">
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem;">
                    <div class="service-icon-box" style="margin-bottom: 0;">
                        <i class="<?php echo $srv['icon']; ?>"></i>
                    </div>
                    <span class="status-badge" style="font-size: 0.7rem; font-weight: 700; background: var(--primary-subtle); color: var(--primary); padding: 0.25rem 0.6rem; border-radius: var(--radius-sm); border: 1px solid var(--border-accent);">
                        <?php echo $srv['category']; ?>
                    </span>
                </div>
                
                <h3 class="service-card-title" style="font-size: 1.1rem; margin-bottom: 0.4rem;"><?php echo $srv['title']; ?></h3>
                <p class="service-card-desc" style="font-size: 0.85rem; line-height: 1.5; margin-bottom: 1rem; color: var(--text-muted);"><?php echo $srv['short_desc']; ?></p>

                <div class="service-card-footer" style="padding-top: 0.85rem; margin-top: auto; border-top: 1px solid var(--border-light); display: flex; align-items: center; justify-content: space-between;">
                    <span style="font-size: 0.775rem; font-weight: 700; color: var(--success); display: inline-flex; align-items: center; gap: 0.3rem;">
                        <i class="ri-flashlight-fill"></i> <?php echo $srv['turnaround']; ?>
                    </span>
                    <span class="service-link" style="font-size: 0.8rem; font-weight: 700; padding: 0.3rem 0.75rem; border-radius: var(--radius-sm);">
                        Details <i class="ri-arrow-right-line"></i>
                    </span>
                </div>
            </a>
            <?php 
                endif;
            endforeach; 
            ?>
        </div>

        <div style="text-align: center; margin-top: 3rem;">
            <a href="<?php echo SITE_URL; ?>/services.php" class="btn btn-primary" style="padding: 0.85rem 2rem;">
                Explore Full Interactive Catalog (17 Services) <i class="ri-arrow-right-s-line"></i>
            </a>
        </div>
    </div>
</section>

<!-- 3. VALUE PROPOSITION & TRUST GUARANTEES BAR -->
<section style="background: var(--bg-light); border-bottom: 1px solid var(--border-light); padding: 2.5rem 0;">
    <div class="container">
        <div class="grid grid-cols-4">
            <div style="display: flex; align-items: center; gap: 1rem;">
                <div style="width: 52px; height: 52px; border-radius: 10px; background: var(--primary-subtle); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 1.6rem; flex-shrink: 0; border: 1px solid var(--border-accent);">
                    <i class="ri-user-star-line"></i>
                </div>
                <div>
                    <h4 style="font-size: 1rem; margin-bottom: 0.2rem;">Master Certified Techs</h4>
                    <p style="font-size: 0.825rem; color: var(--text-muted);">Factory-trained specialists</p>
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 1rem;">
                <div style="width: 52px; height: 52px; border-radius: 10px; background: var(--accent-subtle); color: var(--accent); display: flex; align-items: center; justify-content: center; font-size: 1.6rem; flex-shrink: 0; border: 1px solid #ffedd5;">
                    <i class="ri-shield-star-line"></i>
                </div>
                <div>
                    <h4 style="font-size: 1rem; margin-bottom: 0.2rem;">90-Day Resolution Support</h4>
                    <p style="font-size: 0.825rem; color: var(--text-muted);">Written resolution commitment</p>
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 1rem;">
                <div style="width: 52px; height: 52px; border-radius: 10px; background: var(--success-subtle); color: var(--success); display: flex; align-items: center; justify-content: center; font-size: 1.6rem; flex-shrink: 0; border: 1px solid #a7f3d0;">
                    <i class="ri-time-line"></i>
                </div>
                <div>
                    <h4 style="font-size: 1rem; margin-bottom: 0.2rem;">10-20 Mins Fix</h4>
                    <p style="font-size: 0.825rem; color: var(--text-muted);">Fast virtual connection</p>
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 1rem;">
                <div style="width: 52px; height: 52px; border-radius: 10px; background: #f3e8ff; color: #a855f7; display: flex; align-items: center; justify-content: center; font-size: 1.6rem; flex-shrink: 0; border: 1px solid #e9d5ff;">
                    <i class="ri-global-line"></i>
                </div>
                <div>
                    <h4 style="font-size: 1rem; margin-bottom: 0.2rem;">Fully Online Virtual</h4>
                    <p style="font-size: 0.825rem; color: var(--text-muted);">Zero home visit needed</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. WHAT WE DO: CORE VIRTUAL DIAGNOSTICS & SUPPORT CAPABILITIES -->
<section style="padding: 5rem 0; background: #ffffff; border-bottom: 1px solid var(--border-light);">
    <div class="container">
        <div style="text-align: center; max-width: 720px; margin: 0 auto 3.5rem;">
            <div style="color: var(--primary); font-weight: 700; font-size: 0.875rem; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.5rem;">What We Do</div>
            <h2 style="font-size: 2.5rem; margin-bottom: 1rem;" class="text-gradient">Comprehensive Technical Solutions</h2>
            <p style="color: var(--text-muted); font-size: 1rem;">We specialize in instant virtual diagnostic evaluations and certified online software & network repairs across 3 core technical domains.</p>
        </div>

        <div class="grid grid-cols-3">
            <!-- Domain 1: Kitchen & Laundry Appliances -->
            <div class="glass-card" style="padding: 2.25rem 1.85rem; border-radius: var(--radius-md); background: #ffffff;">
                <div style="width: 56px; height: 56px; border-radius: 10px; background: var(--primary-subtle); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 1.65rem; margin-bottom: 1.25rem; border: 1px solid var(--border-accent);">
                    <i class="ri-fridge-line"></i>
                </div>
                <h3 style="font-size: 1.25rem; margin-bottom: 0.65rem;">Virtual Appliance Diagnostics</h3>
                <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 1.25rem;">
                    Step-by-step video diagnostic walkthroughs & control panel resets for refrigerators, washers, dryers, ovens, ranges, and dishwashers.
                </p>
                <ul class="service-card-features">
                    <li><i class="ri-checkbox-circle-fill"></i> Control board error code decoders</li>
                    <li><i class="ri-checkbox-circle-fill"></i> Thermostat & sensor diagnostics</li>
                </ul>
            </div>

            <!-- Domain 2: Printers & Office Equipment -->
            <div class="glass-card" style="padding: 2.25rem 1.85rem; border-radius: var(--radius-md); background: #ffffff;">
                <div style="width: 56px; height: 56px; border-radius: 10px; background: var(--accent-subtle); color: var(--accent); display: flex; align-items: center; justify-content: center; font-size: 1.65rem; margin-bottom: 1.25rem; border: 1px solid #ffedd5;">
                    <i class="ri-printer-line"></i>
                </div>
                <h3 style="font-size: 1.25rem; margin-bottom: 0.65rem;">Printer & Office Tech Config</h3>
                <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 1.25rem;">
                    Certified online screen-share configuration for wireless printers, laser copiers, scan-to-folder SMB setup, print spoolers, and vendor drivers.
                </p>
                <ul class="service-card-features">
                    <li><i class="ri-checkbox-circle-fill"></i> WiFi offline status & IP binding fix</li>
                    <li><i class="ri-checkbox-circle-fill"></i> Scan-to-Email & SMB folder setup</li>
                </ul>
            </div>

            <!-- Domain 3: Computers & Smart Home -->
            <div class="glass-card" style="padding: 2.25rem 1.85rem; border-radius: var(--radius-md); background: #ffffff;">
                <div style="width: 56px; height: 56px; border-radius: 10px; background: var(--success-subtle); color: var(--success); display: flex; align-items: center; justify-content: center; font-size: 1.65rem; margin-bottom: 1.25rem; border: 1px solid #a7f3d0;">
                    <i class="ri-macbook-line"></i>
                </div>
                <h3 style="font-size: 1.25rem; margin-bottom: 0.65rem;">Computers & Smart Home Tech</h3>
                <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 1.25rem;">
                    Online desktop speed optimization, malware removal, video doorbell WiFi pairing, smart thermostat setup, and CCTV IP camera setup.
                </p>
                <ul class="service-card-features">
                    <li><i class="ri-checkbox-circle-fill"></i> System speedup & malware cleanup</li>
                    <li><i class="ri-checkbox-circle-fill"></i> Smart home hub & camera pairing</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 5. WHY CHOOSE US: ULTRA-PREMIUM 2-COLUMN SPLIT FEATURE LAYOUT -->
<section style="padding: 5.5rem 0; background: #ffffff; border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light); position: relative;">
    <div class="container">
        <div class="grid grid-cols-2" style="align-items: center; gap: 4rem;">
            
            <!-- Left Side Content Spotlight -->
            <div>
                <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: var(--primary-subtle); border: 1px solid var(--border-accent); color: var(--primary); padding: 0.4rem 0.95rem; border-radius: var(--radius-sm); font-size: 0.825rem; font-weight: 700; margin-bottom: 1.25rem;">
                    <i class="ri-shield-star-fill"></i> Why Choose GeekAssist Appliance
                </div>

                <h2 style="font-size: 2.65rem; margin-bottom: 1.25rem; line-height: 1.2;" class="text-gradient">
                    The Premier Virtual Technical Advantage
                </h2>

                <p style="color: var(--text-muted); font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">
                    Say goodbye to expensive in-person travel fees, 4-hour appointment waiting windows, and misdiagnosed equipment failures. GeekAssist Appliance delivers instant, expert technical solutions directly to your screen.
                </p>

                <!-- High Impact Stats Bar -->
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.25rem; margin-bottom: 2.25rem;">
                    <div style="padding: 1.25rem; background: var(--bg-light); border-radius: var(--radius-md); border: 1px solid var(--border-light);">
                        <div style="font-family: var(--font-heading); font-size: 1.85rem; font-weight: 800; color: var(--primary);">Fully Virtual</div>
                        <div style="font-size: 0.85rem; color: var(--text-muted); font-weight: 600; margin-top: 0.2rem;">Zero Home Visit Needed</div>
                    </div>
                    <div style="padding: 1.25rem; background: var(--bg-light); border-radius: var(--radius-md); border: 1px solid var(--border-light);">
                        <div style="font-family: var(--font-heading); font-size: 1.85rem; font-weight: 800; color: var(--success);">&lt; 15 Mins</div>
                        <div style="font-size: 0.85rem; color: var(--text-muted); font-weight: 600; margin-top: 0.2rem;">Instant Connect Time</div>
                    </div>
                </div>

                <button class="btn btn-accent open-booking-modal" data-service="general-support" style="padding: 0.9rem 2rem; font-size: 0.95rem;">
                    <i class="ri-headset-line"></i> Experience Instant Virtual Support Now
                </button>
            </div>

            <!-- Right Side 2x2 Feature Grid -->
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.25rem;">
                
                <!-- Card 1 -->
                <div class="glass-card" style="padding: 1.75rem 1.5rem; background: var(--bg-light); border-radius: var(--radius-md); border: 1px solid var(--border-light);">
                    <div style="width: 48px; height: 48px; border-radius: 10px; background: var(--primary-subtle); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 1rem; border: 1px solid var(--border-accent);">
                        <i class="ri-flashlight-fill"></i>
                    </div>
                    <h3 style="font-size: 1.05rem; font-weight: 800; color: var(--text-main); margin-bottom: 0.4rem;">Under 15 Min Connect</h3>
                    <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.5;">
                        Instant online screen-share setup with certified tech specialists without long queues.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="glass-card" style="padding: 1.75rem 1.5rem; background: var(--bg-light); border-radius: var(--radius-md); border: 1px solid var(--border-light);">
                    <div style="width: 48px; height: 48px; border-radius: 10px; background: var(--accent-subtle); color: var(--accent); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 1rem; border: 1px solid #ffedd5;">
                        <i class="ri-lock-password-fill"></i>
                    </div>
                    <h3 style="font-size: 1.05rem; font-weight: 800; color: var(--text-main); margin-bottom: 0.4rem;">256-Bit Encrypted</h3>
                    <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.5;">
                        Bank-grade end-to-end security. You retain full manual session control and can disconnect anytime.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="glass-card" style="padding: 1.75rem 1.5rem; background: var(--bg-light); border-radius: var(--radius-md); border: 1px solid var(--border-light);">
                    <div style="width: 48px; height: 48px; border-radius: 10px; background: var(--success-subtle); color: var(--success); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 1rem; border: 1px solid #a7f3d0;">
                        <i class="ri-award-fill"></i>
                    </div>
                    <h3 style="font-size: 1.05rem; font-weight: 800; color: var(--text-main); margin-bottom: 0.4rem;">Full Support Commitment</h3>
                    <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.5;">
                        All online resolutions are backed by our written 90-day technical support certificate.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="glass-card" style="padding: 1.75rem 1.5rem; background: var(--bg-light); border-radius: var(--radius-md); border: 1px solid var(--border-light);">
                    <div style="width: 48px; height: 48px; border-radius: 10px; background: #f3e8ff; color: #a855f7; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 1rem; border: 1px solid #e9d5ff;">
                        <i class="ri-user-star-fill"></i>
                    </div>
                    <h3 style="font-size: 1.05rem; font-weight: 800; color: var(--text-main); margin-bottom: 0.4rem;">Certified Specialists</h3>
                    <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.5;">
                        Factory-trained technical experts equipped to diagnose complex software, IP & hardware issues.
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- 6. HOW TO STEP BOOK: 3-STEP ONLINE RESOLUTION PROCESS -->
<section style="padding: 5rem 0; background: var(--bg-light); border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light);">
    <div class="container">
        <div style="text-align: center; max-width: 700px; margin: 0 auto 3.5rem;">
            <div style="color: var(--primary); font-weight: 700; font-size: 0.875rem; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.5rem;">Simple 3-Step Journey</div>
            <h2 style="font-size: 2.5rem; margin-bottom: 1rem;" class="text-gradient">How to Book & Resolve Online</h2>
            <p style="color: var(--text-muted); font-size: 1rem;">Get your printer, appliance diagnostic, or computer issue resolved in 3 quick virtual steps.</p>
        </div>

        <div class="grid grid-cols-3">
            <!-- Step 01 -->
            <div class="step-card">
                <span class="step-badge">Step 01</span>
                <div class="step-icon-box">
                    <i class="ri-edit-box-line"></i>
                </div>
                <h3 style="font-size: 1.2rem; margin-bottom: 0.65rem;">1. Select Equipment & Issue</h3>
                <p style="font-size: 0.875rem; color: var(--text-muted); line-height: 1.6;">
                    Choose your device category (Printer, Refrigerator, Washer, Computer) and submit a quick request form in under 60 seconds.
                </p>
                <div style="margin-top: 1.25rem; font-size: 0.825rem; color: var(--primary); font-weight: 700; display: inline-flex; align-items: center; gap: 0.35rem;">
                    <i class="ri-flashlight-fill"></i> Instant Dispatch Response
                </div>
            </div>

            <!-- Step 02 -->
            <div class="step-card">
                <span class="step-badge" style="background: var(--accent);">Step 02</span>
                <div class="step-icon-box" style="background: var(--accent-subtle); color: var(--accent); border-color: #ffedd5;">
                    <i class="ri-global-line"></i>
                </div>
                <h3 style="font-size: 1.2rem; margin-bottom: 0.65rem;">2. 1-Click Online Desktop Connection</h3>
                <p style="font-size: 0.875rem; color: var(--text-muted); line-height: 1.6;">
                    Receive an instant 1-click online connection link or live video diagnostic call from our certified technical specialist.
                </p>
                <div style="margin-top: 1.25rem; font-size: 0.825rem; color: var(--accent); font-weight: 700; display: inline-flex; align-items: center; gap: 0.35rem;">
                    <i class="ri-shield-check-fill"></i> Fully Encrypted & Safe
                </div>
            </div>

            <!-- Step 03 -->
            <div class="step-card">
                <span class="step-badge" style="background: var(--success);">Step 03</span>
                <div class="step-icon-box" style="background: var(--success-subtle); color: var(--success); border-color: #a7f3d0;">
                    <i class="ri-checkbox-circle-line"></i>
                </div>
                <h3 style="font-size: 1.2rem; margin-bottom: 0.65rem;">3. Fixed & Tested Resolution</h3>
                <p style="font-size: 0.875rem; color: var(--text-muted); line-height: 1.6;">
                    Watch your issue fixed in real-time, test your system, and receive a written 90-day resolution guarantee certificate.
                </p>
                <div style="margin-top: 1.25rem; font-size: 0.825rem; color: var(--success); font-weight: 700; display: inline-flex; align-items: center; gap: 0.35rem;">
                    <i class="ri-award-fill"></i> 90-Day Online Resolution Support
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. COMMON EQUIPMENT ISSUES WE FIX INSTANTLY (FAST DIAGNOSIS) -->
<section style="padding: 5rem 0; background: #f8fafc; border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light);">
    <div class="container">
        <div style="text-align: center; max-width: 700px; margin: 0 auto 3.5rem;">
            <span style="color: var(--primary); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.5rem; display: block;">
                Fast Online Diagnosis
            </span>
            <h2 style="font-size: 2.35rem; color: #0f172a; font-weight: 800; margin-bottom: 0.85rem; line-height: 1.25;">
                Common Symptoms We Fix Completely Online
            </h2>
            <p style="color: #64748b; font-size: 1rem; line-height: 1.6;">
                Select your equipment fault below to connect with a certified technical specialist for instant screen-share or video diagnostics.
            </p>
        </div>

        <div class="grid grid-cols-2" style="gap: 1.75rem;">
            <!-- Issue 1: Refrigerator -->
            <div class="service-card" style="padding: 1.75rem; background: #ffffff; border-radius: 14px; border: 1px solid #e2e8f0; display: flex; gap: 1.25rem; align-items: flex-start;">
                <div style="width: 52px; height: 52px; border-radius: 12px; background: var(--primary-subtle); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 1.6rem; border: 1px solid var(--border-accent); flex-shrink: 0;">
                    <i class="ri-temp-cold-line"></i>
                </div>
                <div style="flex: 1; display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                    <div>
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.4rem; gap: 0.5rem; flex-wrap: wrap;">
                            <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a;">Refrigerator Cooling Error Code</h3>
                            <span style="background: #f1f5f9; color: #475569; font-weight: 600; font-size: 0.775rem; padding: 0.2rem 0.6rem; border-radius: 6px; border: 1px solid #e2e8f0; white-space: nowrap;">
                                <i class="ri-time-line" style="color: var(--primary);"></i> ~15 Mins Fix
                            </span>
                        </div>
                        <p style="font-size: 0.875rem; color: #64748b; line-height: 1.6; margin-bottom: 1.25rem;">
                            Warm fresh food compartment, control board fault codes, frost buildup, or digital thermostat resets.
                        </p>
                    </div>
                    <div>
                        <button class="btn btn-accent open-booking-modal" data-service="refrigerator-repair" style="padding: 0.6rem 1.25rem; font-size: 0.85rem;">
                            <i class="ri-headset-line"></i> Fix Online Now
                        </button>
                    </div>
                </div>
            </div>

            <!-- Issue 2: Printer -->
            <div class="service-card" style="padding: 1.75rem; background: #ffffff; border-radius: 14px; border: 1px solid #e2e8f0; display: flex; gap: 1.25rem; align-items: flex-start;">
                <div style="width: 52px; height: 52px; border-radius: 12px; background: var(--accent-subtle); color: var(--accent); display: flex; align-items: center; justify-content: center; font-size: 1.6rem; border: 1px solid #ffedd5; flex-shrink: 0;">
                    <i class="ri-printer-fill"></i>
                </div>
                <div style="flex: 1; display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                    <div>
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.4rem; gap: 0.5rem; flex-wrap: wrap;">
                            <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a;">Printer Offline & Driver Error</h3>
                            <span style="background: #f1f5f9; color: #475569; font-weight: 600; font-size: 0.775rem; padding: 0.2rem 0.6rem; border-radius: 6px; border: 1px solid #e2e8f0; white-space: nowrap;">
                                <i class="ri-time-line" style="color: var(--accent);"></i> 10-15 Mins Fix
                            </span>
                        </div>
                        <p style="font-size: 0.875rem; color: #64748b; line-height: 1.6; margin-bottom: 1.25rem;">
                            Printer offline status, paper feed sensor error, streaky lines, print spooler locks, or scan-to-folder setup.
                        </p>
                    </div>
                    <div>
                        <button class="btn btn-accent open-booking-modal" data-service="printer-service" style="padding: 0.6rem 1.25rem; font-size: 0.85rem;">
                            <i class="ri-headset-line"></i> Fix Printer Online
                        </button>
                    </div>
                </div>
            </div>

            <!-- Issue 3: Washer -->
            <div class="service-card" style="padding: 1.75rem; background: #ffffff; border-radius: 14px; border: 1px solid #e2e8f0; display: flex; gap: 1.25rem; align-items: flex-start;">
                <div style="width: 52px; height: 52px; border-radius: 12px; background: var(--success-subtle); color: var(--success); display: flex; align-items: center; justify-content: center; font-size: 1.6rem; border: 1px solid #a7f3d0; flex-shrink: 0;">
                    <i class="ri-water-flash-line"></i>
                </div>
                <div style="flex: 1; display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                    <div>
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.4rem; gap: 0.5rem; flex-wrap: wrap;">
                            <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a;">Washing Machine Error Code & Lock</h3>
                            <span style="background: #f1f5f9; color: #475569; font-weight: 600; font-size: 0.775rem; padding: 0.2rem 0.6rem; border-radius: 6px; border: 1px solid #e2e8f0; white-space: nowrap;">
                                <i class="ri-time-line" style="color: var(--success);"></i> ~15 Mins Fix
                            </span>
                        </div>
                        <p style="font-size: 0.875rem; color: #64748b; line-height: 1.6; margin-bottom: 1.25rem;">
                            Spin cycle error codes, standing water drain pump blockage, door lock switch sensor overrides.
                        </p>
                    </div>
                    <div>
                        <button class="btn btn-accent open-booking-modal" data-service="washer-repair" style="padding: 0.6rem 1.25rem; font-size: 0.85rem;">
                            <i class="ri-headset-line"></i> Fix Online Now
                        </button>
                    </div>
                </div>
            </div>

            <!-- Issue 4: Oven -->
            <div class="service-card" style="padding: 1.75rem; background: #ffffff; border-radius: 14px; border: 1px solid #e2e8f0; display: flex; gap: 1.25rem; align-items: flex-start;">
                <div style="width: 52px; height: 52px; border-radius: 12px; background: #ffe4e6; color: #e11d48; display: flex; align-items: center; justify-content: center; font-size: 1.6rem; border: 1px solid #fecdd3; flex-shrink: 0;">
                    <i class="ri-fire-line"></i>
                </div>
                <div style="flex: 1; display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                    <div>
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.4rem; gap: 0.5rem; flex-wrap: wrap;">
                            <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a;">Oven Temp & Panel F-Codes</h3>
                            <span style="background: #f1f5f9; color: #475569; font-weight: 600; font-size: 0.775rem; padding: 0.2rem 0.6rem; border-radius: 6px; border: 1px solid #e2e8f0; white-space: nowrap;">
                                <i class="ri-time-line" style="color: #e11d48;"></i> ~15 Mins Fix
                            </span>
                        </div>
                        <p style="font-size: 0.875rem; color: #64748b; line-height: 1.6; margin-bottom: 1.25rem;">
                            Uneven baking temperatures, bake element control errors, igniter fault diagnostics, or touch panel F-codes.
                        </p>
                    </div>
                    <div>
                        <button class="btn btn-accent open-booking-modal" data-service="oven-repair" style="padding: 0.6rem 1.25rem; font-size: 0.85rem;">
                            <i class="ri-headset-line"></i> Fix Online Now
                        </button>
                    </div>
                </div>
            </div>

            <!-- Issue 5: Dryer -->
            <div class="service-card" style="padding: 1.75rem; background: #ffffff; border-radius: 14px; border: 1px solid #e2e8f0; display: flex; gap: 1.25rem; align-items: flex-start;">
                <div style="width: 52px; height: 52px; border-radius: 12px; background: #f3e8ff; color: #a855f7; display: flex; align-items: center; justify-content: center; font-size: 1.6rem; border: 1px solid #e9d5ff; flex-shrink: 0;">
                    <i class="ri-windy-line"></i>
                </div>
                <div style="flex: 1; display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                    <div>
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.4rem; gap: 0.5rem; flex-wrap: wrap;">
                            <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a;">Dryer Heat & Sensor Error</h3>
                            <span style="background: #f1f5f9; color: #475569; font-weight: 600; font-size: 0.775rem; padding: 0.2rem 0.6rem; border-radius: 6px; border: 1px solid #e2e8f0; white-space: nowrap;">
                                <i class="ri-time-line" style="color: #a855f7;"></i> ~15 Mins Fix
                            </span>
                        </div>
                        <p style="font-size: 0.875rem; color: #64748b; line-height: 1.6; margin-bottom: 1.25rem;">
                            Clothes remaining damp, thermal cut-off sensor resets, or control board failing to initiate dry cycle.
                        </p>
                    </div>
                    <div>
                        <button class="btn btn-accent open-booking-modal" data-service="dryer-repair" style="padding: 0.6rem 1.25rem; font-size: 0.85rem;">
                            <i class="ri-headset-line"></i> Fix Online Now
                        </button>
                    </div>
                </div>
            </div>

            <!-- Issue 6: Computer & Smart Tech -->
            <div class="service-card" style="padding: 1.75rem; background: #ffffff; border-radius: 14px; border: 1px solid #e2e8f0; display: flex; gap: 1.25rem; align-items: flex-start;">
                <div style="width: 52px; height: 52px; border-radius: 12px; background: #e0f2fe; color: #0284c7; display: flex; align-items: center; justify-content: center; font-size: 1.6rem; border: 1px solid #bae6fd; flex-shrink: 0;">
                    <i class="ri-macbook-line"></i>
                </div>
                <div style="flex: 1; display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                    <div>
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.4rem; gap: 0.5rem; flex-wrap: wrap;">
                            <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a;">Computer & Smart Tech Fix</h3>
                            <span style="background: #f1f5f9; color: #475569; font-weight: 600; font-size: 0.775rem; padding: 0.2rem 0.6rem; border-radius: 6px; border: 1px solid #e2e8f0; white-space: nowrap;">
                                <i class="ri-time-line" style="color: #0284c7;"></i> ~15 Mins Fix
                            </span>
                        </div>
                        <p style="font-size: 0.875rem; color: #64748b; line-height: 1.6; margin-bottom: 1.25rem;">
                            Slow OS performance, malware cleanup, video camera WiFi pairing, smart thermostat setup, and router IP binding.
                        </p>
                    </div>
                    <div>
                        <button class="btn btn-accent open-booking-modal" data-service="laptop-desktop-repair" style="padding: 0.6rem 1.25rem; font-size: 0.85rem;">
                            <i class="ri-headset-line"></i> Fix Tech Online
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. FEATURE SPOTLIGHT: PRINTER & OFFICE TECH -->
<section style="background: var(--bg-light); border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light); padding: 5rem 0; position: relative;">
    <div class="container">
        <div class="grid grid-cols-2" style="align-items: center; gap: 3rem;">
            <div>
                <span class="status-badge" style="margin-bottom: 1rem;">Specialized Office & Tech Service</span>
                <h2 style="font-size: 2.25rem; margin-bottom: 1.25rem;" class="text-gradient">
                    Certified Online Printer Installation & Network Setup
                </h2>
                <p style="color: var(--text-muted); font-size: 1rem; margin-bottom: 1.5rem; line-height: 1.7;">
                    Is your office copier or home printer offline, jamming, or refusing to connect to your WiFi network? Our certified technical specialists perform comprehensive virtual maintenance.
                </p>
                <ul style="list-style: none; display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 2rem;">
                    <li style="display: flex; align-items: center; gap: 0.625rem; font-size: 0.95rem; font-weight: 500;">
                        <i class="ri-checkbox-circle-fill" style="color: var(--primary);"></i> WiFi, LAN & IP network printer setup for multi-device office printing
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.625rem; font-size: 0.95rem; font-weight: 500;">
                        <i class="ri-checkbox-circle-fill" style="color: var(--primary);"></i> Paper jam extraction, roller replacement & feed mechanism repairs
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.625rem; font-size: 0.95rem; font-weight: 500;">
                        <i class="ri-checkbox-circle-fill" style="color: var(--primary);"></i> Printhead deep cleaning, toner sensor fixes & driver updates
                    </li>
                </ul>
                <a href="<?php echo SITE_URL; ?>/printer-service.php" class="btn btn-primary">
                    <i class="ri-printer-line"></i> Explore Printer Services
                </a>
            </div>

            <div class="glass-card" style="padding: 2.5rem; background: #ffffff;">
                <h3 style="font-size: 1.25rem; margin-bottom: 1.5rem; text-align: center;">Supported Printer Brands & Models</h3>
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem;">
                    <div style="padding: 1rem; background: var(--bg-light); border-radius: 10px; text-align: center; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm);">
                        <i class="ri-printer-fill" style="font-size: 1.8rem; color: var(--accent);"></i>
                        <div style="font-weight: 700; margin-top: 0.4rem;">HP LaserJet & OfficeJet</div>
                    </div>
                    <div style="padding: 1rem; background: var(--bg-light); border-radius: 10px; text-align: center; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm);">
                        <i class="ri-printer-fill" style="font-size: 1.8rem; color: var(--primary);"></i>
                        <div style="font-weight: 700; margin-top: 0.4rem;">Canon PIXMA & imageCLASS</div>
                    </div>
                    <div style="padding: 1rem; background: var(--bg-light); border-radius: 10px; text-align: center; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm);">
                        <i class="ri-printer-fill" style="font-size: 1.8rem; color: var(--success);"></i>
                        <div style="font-weight: 700; margin-top: 0.4rem;">Epson EcoTank & WorkForce</div>
                    </div>
                    <div style="padding: 1rem; background: var(--bg-light); border-radius: 10px; text-align: center; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm);">
                        <i class="ri-printer-fill" style="font-size: 1.8rem; color: #a855f7;"></i>
                        <div style="font-weight: 700; margin-top: 0.4rem;">Brother & Xerox Copiers</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 9. FAQ ACCORDION -->
<section style="background: var(--bg-light); border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light); padding: 5rem 0;">
    <div class="container">
        <div style="text-align: center; max-width: 650px; margin: 0 auto 3rem;">
            <div style="color: var(--primary); font-weight: 700; font-size: 0.875rem; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.5rem;">Got Questions?</div>
            <h2 style="font-size: 2.25rem;" class="text-gradient">Frequently Asked Questions</h2>
        </div>

        <div class="faq-accordion">
            <div class="faq-item active">
                <button class="faq-question">
                    <span>How fast can a technical specialist connect with me online?</span>
                    <i class="ri-chevron-down-line faq-icon"></i>
                </button>
                <div class="faq-answer">
                    Our certified specialists connect with you via screen-share link or live video call within 10 to 15 minutes of your booking request.
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <span>Do you charge an initial diagnostic fee?</span>
                    <i class="ri-chevron-down-line faq-icon"></i>
                </button>
                <div class="faq-answer">
                    Our initial 5-minute online diagnostic assessment is completely free with any technical support session.
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <span>What kind of support commitment comes with the online resolution?</span>
                    <i class="ri-chevron-down-line faq-icon"></i>
                </button>
                <div class="faq-answer">
                    All our online technical resolutions are backed by a comprehensive 90-day written support commitment.
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <span>What brands of appliances and printers do you support online?</span>
                    <i class="ri-chevron-down-line faq-icon"></i>
                </button>
                <div class="faq-answer">
                    We support all major brands including Samsung, LG, Whirlpool, KitchenAid, Bosch, GE, Maytag, Frigidaire, Sub-Zero, HP, Canon, Brother, Epson, and Xerox.
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <span>What payment methods do you accept for online sessions?</span>
                    <i class="ri-chevron-down-line faq-icon"></i>
                </button>
                <div class="faq-answer">
                    We accept Credit Cards (Visa, MasterCard, Amex), Debit Cards, Interac e-Transfer, and PayPal upon session completion.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 10. DEEP SEO KEYWORD CONTENT SECTION (Search Engine Optimization Block) -->
<section style="padding: 4.5rem 0; background: #ffffff; border-bottom: 1px solid var(--border-light);">
    <div class="container" style="max-width: 960px;">
        <div style="text-align: center; margin-bottom: 2.5rem;">
            <span style="color: var(--primary); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 0.5rem;">
                Search Engine Resource & Information
            </span>
            <h2 style="font-size: 2rem; color: #0f172a; font-weight: 800; line-height: 1.3;">
                Premier Virtual Technical & Appliance Support Desk
            </h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; color: #64748b; font-size: 0.9rem; line-height: 1.7;">
            <div>
                <h3 style="font-size: 1.1rem; font-weight: 700; color: #0f172a; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="ri-shield-flash-fill" style="color: var(--primary);"></i> Instant Virtual Technology
                </h3>
                <p>
                    GeekAssist Appliance leads the industry in certified virtual technical diagnostics. Using bank-grade 256-bit encrypted screen share links and live guided video calls, our certified technicians resolve software glitches, driver crashes, network IP misconfigurations, and control board fault codes without requiring an expensive home visit or 4-hour waiting window.
                </p>
            </div>

            <div>
                <h3 style="font-size: 1.1rem; font-weight: 700; color: #0f172a; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="ri-printer-fill" style="color: var(--accent);"></i> HP & Office Printer Network Fix
                </h3>
                <p>
                    Is your HP printer offline or failing to scan? Our specialized HP printer setup team diagnoses wireless disconnects, print spooler crashes, driver corruption on Windows 11 & macOS, and scan-to-folder SMB network shared folder permissions in under 15 minutes completely online.
                </p>
            </div>

            <div>
                <h3 style="font-size: 1.1rem; font-weight: 700; color: #0f172a; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="ri-fridge-fill" style="color: var(--success);"></i> Kitchen & Laundry Virtual Diagnostic
                </h3>
                <p>
                    From Samsung refrigerators displaying error codes to LG washing machines stuck on drain cycles or Whirlpool ovens showing temperature F-codes, our step-by-step video diagnostic walkthroughs allow home users to identify failed sensors, reset electronic control boards, and execute simple guided repairs online.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- FAQPage JSON-LD Schema for Google Search Snippets -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How fast can a technical specialist connect with me online?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Our certified specialists connect with you via screen-share link or live video call within 10 to 15 minutes of your booking request."
            }
        },
        {
            "@type": "Question",
            "name": "Do you charge an initial diagnostic fee?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Our initial 5-minute online diagnostic assessment is completely free with any technical support session."
            }
        },
        {
            "@type": "Question",
            "name": "What kind of support commitment comes with the online resolution?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "All our online technical resolutions are backed by a comprehensive 90-day written support commitment."
            }
        },
        {
            "@type": "Question",
            "name": "What brands of appliances and printers do you support online?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We support all major brands including Samsung, LG, Whirlpool, KitchenAid, Bosch, GE, Maytag, Frigidaire, Sub-Zero, HP, Canon, Brother, Epson, and Xerox."
            }
        }
    ]
}
</script>

<?php include_once __DIR__ . '/includes/footer.php'; ?>

