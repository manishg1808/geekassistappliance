<?php
include_once __DIR__ . '/make_logo.php';
$page_title = "Certified Online Printer Setup & Diagnostic Services | Instant Fix";
$page_desc = "Certified online technician support for HP, Canon, Epson, Brother, Xerox, Ricoh & Zebra printers. Wireless network setup, driver fixes, printhead alignment, paper jam guidance & scan-to-folder configuration. Zero home visit needed.";
$page_keywords = "certified online printer setup, virtual printer diagnostics, HP printer offline fix, scan to folder SMB setup online, printer driver repair";
include_once __DIR__ . '/includes/header.php';
?>

<!-- 1. HERO BANNER SECTION -->
<section style="padding: 4.5rem 0 3.5rem; background: linear-gradient(180deg, #eff6ff 0%, #ffffff 100%); border-bottom: 1px solid var(--border-light); position: relative;">
    <div class="container">
        <div class="grid grid-cols-2" style="align-items: center; gap: 3.5rem;">
            <!-- Left Column -->
            <div>
                <div class="hero-badge" style="margin-bottom: 1rem;">
                    <i class="ri-global-line" style="color: var(--primary);"></i> 🌐 Certified Online Virtual Resolution — Zero In-Person Visit Needed
                </div>
                <h1 style="font-size: 2.75rem; margin-bottom: 1rem; line-height: 1.25;" class="text-gradient">
                    Certified Online Printer & Network Setup Specialist
                </h1>
                <p style="color: var(--text-muted); font-size: 1.05rem; margin-bottom: 1.75rem; line-height: 1.7;">
                    Is your office copier or home printer offline, jamming, or refusing to connect to WiFi? <strong>We resolve WiFi offline status, IP spooler crashes, driver conflicts, printhead clogs, and scan-to-folder setups completely online in minutes!</strong>
                </p>

                <div style="display: flex; flex-direction: column; gap: 0.65rem; margin-bottom: 2rem;">
                    <div style="display: flex; align-items: center; gap: 0.6rem; font-size: 0.95rem; font-weight: 600; color: var(--text-main);">
                        <i class="ri-checkbox-circle-fill" style="color: var(--success);"></i> HP, Canon, Epson, Brother, Xerox & Zebra Certified Techs
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.6rem; font-size: 0.95rem; font-weight: 600; color: var(--text-main);">
                        <i class="ri-checkbox-circle-fill" style="color: var(--success);"></i> Instant 1-Click Screen-Share Connection (No Long Waiting)
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.6rem; font-size: 0.95rem; font-weight: 600; color: var(--text-main);">
                        <i class="ri-checkbox-circle-fill" style="color: var(--success);"></i> Backed by our 90-Day Resolution Guarantee Certificate
                    </div>
                </div>

                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <button class="btn btn-accent open-booking-modal" data-service="printer-service">
                        <i class="ri-printer-line"></i> Connect With Printer Specialist Now
                    </button>
                    <a href="tel:<?php echo PHONE_RAW; ?>" class="btn btn-outline">
                        <i class="ri-phone-line"></i> Hotline: <?php echo PHONE_NUMBER; ?>
                    </a>
                </div>
            </div>

            <!-- Right Column: Quick Diagnostics Overview Card -->
            <div>
                <div class="estimator-card" style="padding: 2rem; background: #ffffff; border-radius: var(--radius-md);">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem;">
                        <h3 style="font-size: 1.2rem; color: var(--text-main);"><i class="ri-printer-line" style="color: var(--primary);"></i> Instant Session Matrix</h3>
                        <span class="status-badge" style="font-size: 0.725rem; padding: 0.25rem 0.6rem; background: var(--primary-subtle); color: var(--primary); border-color: var(--border-accent);">
                            Certified Online Fix
                        </span>
                    </div>

                    <div style="font-size: 0.875rem; color: var(--text-muted); display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 1.5rem;">
                        <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid var(--border-light); padding-bottom: 0.5rem;">
                            <span>Wireless / IP Network Connection:</span>
                            <span style="font-weight: 700; color: var(--success);"><i class="ri-flashlight-fill"></i> 10-15 Mins</span>
                        </div>
                        <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid var(--border-light); padding-bottom: 0.5rem;">
                            <span>Spooler & Offline Error Fix:</span>
                            <span style="font-weight: 700; color: var(--success);"><i class="ri-flashlight-fill"></i> 10-15 Mins</span>
                        </div>
                        <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid var(--border-light); padding-bottom: 0.5rem;">
                            <span>Printhead Clog & Alignment:</span>
                            <span style="font-weight: 700; color: var(--success);"><i class="ri-flashlight-fill"></i> 15 Mins</span>
                        </div>
                        <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid var(--border-light); padding-bottom: 0.5rem;">
                            <span>Scan-to-Email / SMB Folder Setup:</span>
                            <span style="font-weight: 700; color: var(--success);"><i class="ri-flashlight-fill"></i> 15-20 Mins</span>
                        </div>
                    </div>

                    <button class="btn btn-primary open-booking-modal" data-service="printer-service" style="width: 100%; justify-content: center; padding: 0.85rem;">
                        <i class="ri-flashlight-line"></i> Connect With Technical Specialist Now
                    </button>

                    <div style="font-size: 0.775rem; color: var(--text-muted); text-align: center; margin-top: 1rem; font-weight: 500;">
                        <i class="ri-shield-check-line" style="color: var(--success);"></i> 90-Day Guarantee • 256-Bit Encrypted Secure Connection
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. TRUST & SPEED HIGHLIGHTS BAR -->
<section style="background: var(--bg-light); border-bottom: 1px solid var(--border-light); padding: 2rem 0;">
    <div class="container">
        <div class="grid grid-cols-4">
            <div style="display: flex; align-items: center; gap: 0.85rem;">
                <div style="width: 48px; height: 48px; border-radius: 10px; background: var(--primary-subtle); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; flex-shrink: 0; border: 1px solid var(--border-accent);">
                    <i class="ri-flashlight-line"></i>
                </div>
                <div>
                    <h4 style="font-size: 0.95rem; margin-bottom: 0.15rem;">Under 15 Min Connect</h4>
                    <p style="font-size: 0.8rem; color: var(--text-muted);">Instant online screen-share</p>
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 0.85rem;">
                <div style="width: 48px; height: 48px; border-radius: 10px; background: var(--accent-subtle); color: var(--accent); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; flex-shrink: 0; border: 1px solid #ffedd5;">
                    <i class="ri-shield-star-line"></i>
                </div>
                <div>
                    <h4 style="font-size: 0.95rem; margin-bottom: 0.15rem;">90-Day Guarantee</h4>
                    <p style="font-size: 0.8rem; color: var(--text-muted);">Written resolution guarantee</p>
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 0.85rem;">
                <div style="width: 48px; height: 48px; border-radius: 10px; background: var(--success-subtle); color: var(--success); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; flex-shrink: 0; border: 1px solid #a7f3d0;">
                    <i class="ri-computer-line"></i>
                </div>
                <div>
                    <h4 style="font-size: 0.95rem; margin-bottom: 0.15rem;">All OS Supported</h4>
                    <p style="font-size: 0.8rem; color: var(--text-muted);">Windows, Mac, iOS & Android</p>
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 0.85rem;">
                <div style="width: 48px; height: 48px; border-radius: 10px; background: #f3e8ff; color: #a855f7; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; flex-shrink: 0; border: 1px solid #e9d5ff;">
                    <i class="ri-lock-check-line"></i>
                </div>
                <div>
                    <h4 style="font-size: 0.95rem; margin-bottom: 0.15rem;">Fully Encrypted & Safe</h4>
                    <p style="font-size: 0.8rem; color: var(--text-muted);">Bank-grade session security</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. COMPREHENSIVE TECHNICAL SOLUTIONS GRID (6 RECTANGULAR CARDS) -->
<section style="padding: 4.5rem 0; background: #ffffff;">
    <div class="container">
        <div style="text-align: center; max-width: 720px; margin: 0 auto 3rem;">
            <div style="color: var(--primary); font-weight: 700; font-size: 0.875rem; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.5rem;">Comprehensive Technical Coverage</div>
            <h2 style="font-size: 2.25rem; margin-bottom: 1rem;" class="text-gradient">What We Resolve Online</h2>
            <p style="color: var(--text-muted); font-size: 1rem;">No matter the brand, model, or error code, our certified technicians troubleshoot and fix your printing issues in real time.</p>
        </div>

        <div class="grid grid-cols-3">
            <!-- Issue 1 -->
            <div class="feature-box" style="padding: 2rem; border-radius: var(--radius-md);">
                <div style="width: 52px; height: 52px; border-radius: 10px; background: var(--primary-subtle); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 1.25rem; border: 1px solid var(--border-accent);">
                    <i class="ri-wifi-off-line"></i>
                </div>
                <h3 style="font-size: 1.15rem; margin-bottom: 0.65rem;">Printer Showing Offline or Disconnected</h3>
                <p style="font-size: 0.875rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 1.25rem;">
                    Fix print spooler queue hangups, static IP address binding, firewall blockages, and WiFi router reconnect failures across Windows & Mac.
                </p>
                <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.825rem; color: var(--text-main); display: flex; flex-direction: column; gap: 0.4rem;">
                    <li><i class="ri-checkbox-circle-fill" style="color: var(--success);"></i> Clear stuck print spooler cache</li>
                    <li><i class="ri-checkbox-circle-fill" style="color: var(--success);"></i> Re-establish wireless IP binding</li>
                </ul>
            </div>

            <!-- Issue 2 -->
            <div class="feature-box" style="padding: 2rem; border-radius: var(--radius-md);">
                <div style="width: 52px; height: 52px; border-radius: 10px; background: var(--accent-subtle); color: var(--accent); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 1.25rem; border: 1px solid #ffedd5;">
                    <i class="ri-drop-line"></i>
                </div>
                <h3 style="font-size: 1.15rem; margin-bottom: 0.65rem;">Printhead Clogs, Streaks & Blank Pages</h3>
                <p style="font-size: 0.875rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 1.25rem;">
                    Online software nozzle cleaning cycles, deep purge procedures, ink density alignment, and faded toner cartridge calibration.
                </p>
                <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.825rem; color: var(--text-main); display: flex; flex-direction: column; gap: 0.4rem;">
                    <li><i class="ri-checkbox-circle-fill" style="color: var(--success);"></i> Printhead nozzle purge & alignment</li>
                    <li><i class="ri-checkbox-circle-fill" style="color: var(--success);"></i> Color streak & spot correction</li>
                </ul>
            </div>

            <!-- Issue 3 -->
            <div class="feature-box" style="padding: 2rem; border-radius: var(--radius-md);">
                <div style="width: 52px; height: 52px; border-radius: 10px; background: var(--success-subtle); color: var(--success); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 1.25rem; border: 1px solid #a7f3d0;">
                    <i class="ri-router-line"></i>
                </div>
                <h3 style="font-size: 1.15rem; margin-bottom: 0.65rem;">Multi-Device Wireless & Network Printing</h3>
                <p style="font-size: 0.875rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 1.25rem;">
                    Configure AirPrint, Mopria, cloud print, and network printer sharing so all laptops, iPhones, Androids, and tablets print effortlessly.
                </p>
                <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.825rem; color: var(--text-main); display: flex; flex-direction: column; gap: 0.4rem;">
                    <li><i class="ri-checkbox-circle-fill" style="color: var(--success);"></i> Apple AirPrint & Android setup</li>
                    <li><i class="ri-checkbox-circle-fill" style="color: var(--success);"></i> Multi-PC network printer sharing</li>
                </ul>
            </div>

            <!-- Issue 4 -->
            <div class="feature-box" style="padding: 2rem; border-radius: var(--radius-md);">
                <div style="width: 52px; height: 52px; border-radius: 10px; background: #f3e8ff; color: #a855f7; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 1.25rem; border: 1px solid #e9d5ff;">
                    <i class="ri-settings-4-line"></i>
                </div>
                <h3 style="font-size: 1.15rem; margin-bottom: 0.65rem;">Driver Conflicts & OS Compatibility</h3>
                <p style="font-size: 0.875rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 1.25rem;">
                    Install official vendor print drivers, resolve Windows 11 update driver crashes, flash printer firmware updates, and fix USB recognition.
                </p>
                <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.825rem; color: var(--text-main); display: flex; flex-direction: column; gap: 0.4rem;">
                    <li><i class="ri-checkbox-circle-fill" style="color: var(--success);"></i> Windows 11/10 & macOS Sonoma drivers</li>
                    <li><i class="ri-checkbox-circle-fill" style="color: var(--success);"></i> Firmware upgrade & error clearing</li>
                </ul>
            </div>

            <!-- Issue 5 -->
            <div class="feature-box" style="padding: 2rem; border-radius: var(--radius-md);">
                <div style="width: 52px; height: 52px; border-radius: 10px; background: var(--primary-subtle); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 1.25rem; border: 1px solid var(--border-accent);">
                    <i class="ri-building-line"></i>
                </div>
                <h3 style="font-size: 1.15rem; margin-bottom: 0.65rem;">Commercial Copiers & Scan-to-Email / SMB</h3>
                <p style="font-size: 0.875rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 1.25rem;">
                    Set up SMTP email server scanning, SMB network folder destinations, duplex document feeder queues, and user access PIN codes.
                </p>
                <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.825rem; color: var(--text-main); display: flex; flex-direction: column; gap: 0.4rem;">
                    <li><i class="ri-checkbox-circle-fill" style="color: var(--success);"></i> Scan-to-folder (SMB) & Email SMTP</li>
                    <li><i class="ri-checkbox-circle-fill" style="color: var(--success);"></i> Office laser copier queue setup</li>
                </ul>
            </div>

            <!-- Issue 6 -->
            <div class="feature-box" style="padding: 2rem; border-radius: var(--radius-md);">
                <div style="width: 52px; height: 52px; border-radius: 10px; background: var(--accent-subtle); color: var(--accent); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 1.25rem; border: 1px solid #ffedd5;">
                    <i class="ri-qr-code-line"></i>
                </div>
                <h3 style="font-size: 1.15rem; margin-bottom: 0.65rem;">Shipping Label & Thermal Printers</h3>
                <p style="font-size: 0.875rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 1.25rem;">
                    Online configuration for Zebra, Dymo, Rollo, and Brother thermal shipping label printers used for eBay, Amazon, Shopify, FedEx & UPS.
                </p>
                <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.825rem; color: var(--text-main); display: flex; flex-direction: column; gap: 0.4rem;">
                    <li><i class="ri-checkbox-circle-fill" style="color: var(--success);"></i> 4x6 Label size & barcode calibration</li>
                    <li><i class="ri-checkbox-circle-fill" style="color: var(--success);"></i> E-commerce platform thermal setup</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 4. HOW CERTIFIED ONLINE PRINTER SUPPORT WORKS (4-STEP PROCESS) -->
<section style="padding: 4.5rem 0; background: var(--bg-light); border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light);">
    <div class="container">
        <div style="text-align: center; max-width: 700px; margin: 0 auto 3.5rem;">
            <div style="color: var(--primary); font-weight: 700; font-size: 0.875rem; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.5rem;">Simple 4-Step Resolution</div>
            <h2 style="font-size: 2.25rem; margin-bottom: 1rem;" class="text-gradient">How Online Printer Fix Works</h2>
            <p style="color: var(--text-muted); font-size: 1rem;">Get your printer back online and printing perfectly in 4 simple steps without waiting days for a technician.</p>
        </div>

        <div class="grid grid-cols-4">
            <div class="step-card">
                <span class="step-badge">Step 01</span>
                <div class="step-icon-box">
                    <i class="ri-edit-box-line"></i>
                </div>
                <h3 style="font-size: 1.1rem; margin-bottom: 0.5rem;">Submit Issue Details</h3>
                <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.6;">
                    Select your printer model (HP, Canon, Epson, etc.) and describe the issue (offline, printhead, WiFi).
                </p>
            </div>

            <div class="step-card">
                <span class="step-badge">Step 02</span>
                <div class="step-icon-box">
                    <i class="ri-links-line"></i>
                </div>
                <h3 style="font-size: 1.1rem; margin-bottom: 0.5rem;">Receive Session Link</h3>
                <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.6;">
                    Get an instant 1-click online connection link sent straight to your email or smartphone.
                </p>
            </div>

            <div class="step-card">
                <span class="step-badge">Step 03</span>
                <div class="step-icon-box">
                    <i class="ri-global-line"></i>
                </div>
                <h3 style="font-size: 1.1rem; margin-bottom: 0.5rem;">1-Click Screen Share</h3>
                <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.6;">
                    Grant fully secure, encrypted online access to our certified printer technician to inspect drivers & IP.
                </p>
            </div>

            <div class="step-card">
                <span class="step-badge">Step 04</span>
                <div class="step-icon-box">
                    <i class="ri-checkbox-circle-line"></i>
                </div>
                <h3 style="font-size: 1.1rem; margin-bottom: 0.5rem;">Fixed & Guaranteed</h3>
                <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.6;">
                    Watch your printer print crisp pages in real-time, backed by our 90-day written resolution guarantee.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 6. PRINTER FREQUENTLY ASKED QUESTIONS (FAQ) -->
<section style="padding: 4.5rem 0; background: var(--bg-light);">
    <div class="container">
        <div style="text-align: center; max-width: 700px; margin: 0 auto 3rem;">
            <div style="color: var(--primary); font-weight: 700; font-size: 0.875rem; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.5rem;">Got Questions?</div>
            <h2 style="font-size: 2.25rem; margin-bottom: 1rem;" class="text-gradient">Printer Support Frequently Asked Questions</h2>
            <p style="color: var(--text-muted); font-size: 1rem;">Everything you need to know about our certified online printer setup & diagnostic sessions.</p>
        </div>

        <div class="faq-accordion">
            <div class="faq-item">
                <div class="faq-question">
                    <span>How can you fix my printer online without coming to my home?</span>
                    <i class="ri-add-line faq-icon"></i>
                </div>
                <div class="faq-answer">
                    Over 95% of printer errors (showing offline status, print spooler crashes, driver corruption, WiFi network disconnections, and scan-to-folder misconfigurations) are purely software & IP network issues. Via our secure 1-click screen-share tool, our certified technician connects directly to your computer to repair driver settings, bind IP addresses, clean printhead nozzles, and re-establish printer communication online!
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>What if my printer refuses to connect to my new WiFi router or mesh network?</span>
                    <i class="ri-add-line faq-icon"></i>
                </div>
                <div class="faq-answer">
                    When upgrading to a new WiFi router, printers frequently lose connection due to 2.4GHz vs 5GHz frequency mismatches, WPA3 security incompatibility, or changing gateway IP subnets. Our technical specialists log into your router management console and printer settings to configure dedicated 2.4GHz SSID channels, reserve static IP addresses, and connect your printer seamlessly.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>Can you set up scan-to-email and scan-to-network SMB folder for our office copier?</span>
                    <i class="ri-add-line faq-icon"></i>
                </div>
                <div class="faq-answer">
                    Yes! We specialize in setting up commercial laser copiers (HP, Canon, Xerox, Ricoh, Brother, Kyocera). We configure SMTP server settings, port numbers, SSL/TLS authentication, and SMB network folder destinations so any document scanned at your office copier drops directly into your designated computer folder or inbox.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>Is your online screen connection safe and secure for my personal data?</span>
                    <i class="ri-add-line faq-icon"></i>
                </div>
                <div class="faq-answer">
                    Absolutely. We use bank-grade 256-bit encrypted end-to-end online connection technology. You maintain full manual control of the session at all times, you can watch every action our technician performs on your screen in real time, and you can end the session with a single click at any second. Once the session ends, access is permanently revoked.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>What if my printer issue cannot be resolved online?</span>
                    <i class="ri-add-line faq-icon"></i>
                </div>
                <div class="faq-answer">
                    We operate under a strict 90-Day Written Resolution Guarantee. If our specialist determines that your printer has a fatal physical hardware failure (such as a cracked motherboard or broken gear) that cannot be resolved online, you are covered by our guarantee and will be provided with expert hardware buying recommendations free of charge.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. HIGH-CONVERSION BOTTOM CTA BANNER -->
<section style="padding: 4.5rem 0; background: #ffffff;">
    <div class="container">
        <div class="cta-banner">
            <h2>Get Your Printer Fixed Online Right Now!</h2>
            <p>Connect with a certified technical specialist in under 15 minutes. No home visit required, no long waiting times, backed by our 90-day resolution guarantee.</p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <button class="btn btn-accent open-booking-modal" data-service="printer-service" style="padding: 0.95rem 2rem; font-size: 1rem;">
                    <i class="ri-headset-line"></i> Connect With Printer Specialist (15 Min Fix)
                </button>
                <a href="tel:<?php echo PHONE_RAW; ?>" class="btn btn-outline" style="background: rgba(255,255,255,0.15); border-color: rgba(255,255,255,0.3); color: #ffffff;">
                    <i class="ri-phone-fill"></i> Call Now: <?php echo PHONE_NUMBER; ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
