<?php
/**
 * GeekAssist Appliance - 100% Online Remote Tech & Appliance Support
 * Global Configuration & Service Data Registry
 */

define('SITE_NAME', 'GeekAssist Appliance');
define('SITE_TAGLINE', 'Instant Online & Remote Tech Support | 100% Online Remote Resolution & Virtual Diagnostics');
define('SITE_URL', 'http://localhost/totaltech/geekassistappli');
define('PHONE_NUMBER', '+1 (808) 999-7791');
define('PHONE_RAW', '+18089997791');
define('EMAIL_ADDRESS', 'support@geekassistappliance.com');
define('BUSINESS_ADDRESS', 'Remote Tech Help Center, BC, Canada');
define('BUSINESS_HOURS', 'Mon–Sat: 8:00 AM – 8:00 PM (Instant Online Session)');
define('SERVICE_AREA', '100% Online Remote Support Available Worldwide & Across BC');
define('RATING_SCORE', '4.9');
define('RATING_COUNT', '1,480+');

// Global SEO Default Constants
define('DEFAULT_META_TITLE', '100% Online Remote Tech & Appliance Support | GeekAssist Appliance');
define('DEFAULT_META_DESC', 'Instant 100% online remote technical support for refrigerators, washers, dryers, ovens, dishwashers, and HP office printers. Zero home visit needed, fast virtual diagnostics.');
define('DEFAULT_META_KEYWORDS', 'online remote appliance support, virtual appliance diagnostics, remote printer setup online, HP printer offline fix, 100% online tech help, computer IT support remote');
define('DEFAULT_OG_IMAGE', SITE_URL . '/assets/images/1.webp');

// Comprehensive List of All 17 Services Offered (Super Short & Compact Paragraph Content)
$services = [
    'printer-service' => [
        'title' => 'Printer Installation & Network Repair',
        'category' => 'Tech & Office',
        'icon' => 'ri-printer-line',
        'short_desc' => '100% Online diagnostic & setup for wireless printers, paper jams & driver errors.',
        'full_desc' => 'Instant online remote technician assistance for commercial office copiers, laser printers, inkjet units, and label printers. We resolve WiFi offline status, driver conflicts, line streaks, IP network configuration, and printer sharing 100% online.',
        'turnaround' => '10-20 Mins Instant Online Session',
        'common_issues' => ['Printer showing offline or disconnected status', 'WiFi connectivity & network IP driver errors', 'Faded, blurry or streaked printouts', 'Paper jammed or tray feed sensor error', 'Printhead clog & ink cartridge recognition error']
    ],
    'refrigerator-repair' => [
        'title' => 'Refrigerator & Freezer Remote Help',
        'category' => 'Kitchen',
        'icon' => 'ri-fridge-line',
        'short_desc' => 'Virtual online diagnostic help for cooling failures, compressor codes & thermostats.',
        'full_desc' => 'Expert virtual diagnostic evaluation for all major refrigerator brands, French door units, side-by-side models, and freezers. Guided online troubleshooting to identify failing sensors, board error codes, and cooling fixes.',
        'turnaround' => '15 Mins Remote Video Diagnostic',
        'common_issues' => ['Refrigerator failing to hold set cooling temperature', 'Error code displayed on front control panel', 'Ice buildup or frost on evaporator coils', 'Clicking compressor relay noise', 'Water dispenser or defrost sensor failure']
    ],
    'washer-repair' => [
        'title' => 'Washing Machine Guided Diagnostics',
        'category' => 'Laundry',
        'icon' => 'ri-t-shirt-line',
        'short_desc' => 'Step-by-step remote troubleshooting for washer error codes, drain pumps & spin issues.',
        'full_desc' => 'Keep your laundry running smoothly. Our certified remote specialists guide you step-by-step through digital control panel reset codes, non-spinning tubs, standing water pump unclogging, and electronic board diagnostics.',
        'turnaround' => '15 Mins Instant Online Session',
        'common_issues' => ['Washer showing error code & refusing to spin', 'Drain pump clogged or failing to discharge water', 'Unusual vibration or tub out-of-balance warning', 'Door lock switch sensor stuck', 'Control board responsiveness issue']
    ],
    'dryer-repair' => [
        'title' => 'Clothes Dryer Remote Troubleshooting',
        'category' => 'Laundry',
        'icon' => 'ri-temp-hot-line',
        'short_desc' => '100% Online diagnostic for electric & gas dryers, heating fuses & timers.',
        'full_desc' => 'Fast online troubleshooting for electric and gas clothes dryers. Guided testing of thermal fuses, moisture sensors, heating elements, power supply circuits, and digital timers.',
        'turnaround' => '15 Mins Instant Online Session',
        'common_issues' => ['Dryer tumbling but no heat generated', 'Digital error code stopping cycle mid-way', 'Moisture sensor misreading dry clothes', 'Thermal cut-off safety fuse triggered', 'Control panel failing to start']
    ],
    'oven-repair' => [
        'title' => 'Oven, Stove & Range Virtual Diagnostics',
        'category' => 'Kitchen',
        'icon' => 'ri-fire-line',
        'short_desc' => 'Virtual guidance for range igniters, oven temperature calibration & display codes.',
        'full_desc' => 'Ensure safe home cooking with our expert virtual range diagnostic services. Guided troubleshooting for gas igniter circuits, electric element controls, thermostat calibration, and electronic board resets.',
        'turnaround' => '15 Mins Instant Online Session',
        'common_issues' => ['Gas burner refusing to ignite or clicking', 'Oven display showing F-code error', 'Thermostat uncalibrated / uneven baking', 'Door latch jammed on self-clean mode', 'Control panel touch keys unresponsive']
    ],
    'dishwasher-repair' => [
        'title' => 'Dishwasher Remote Servicing & Setup',
        'category' => 'Kitchen',
        'icon' => 'ri-drop-line',
        'short_desc' => 'Remote troubleshooting for dishwasher drain pumps, spray pressure & cycle resets.',
        'full_desc' => 'Get your dishwasher functioning properly without hassle. Step-by-step remote assistance to resolve standing water, drain filter blockage, wash pump error codes, and cycle timer resets.',
        'turnaround' => '15 Mins Instant Online Session',
        'common_issues' => ['Dishes coming out dirty or soapy residue', 'Water standing at bottom of tub with error code', 'Dishwasher humming but not starting cycle', 'Drain pump pressure sensor error', 'Door latch sensor misreading closed door']
    ],
    'cooktop-repair' => [
        'title' => 'Cooktop & Range Hood Online Help',
        'category' => 'Kitchen',
        'icon' => 'ri-dashboard-3-line',
        'short_desc' => 'Online diagnostic help for induction cooktops, gas stove igniters & hoods.',
        'full_desc' => 'Specialized online diagnostic help for induction glass cooktops, radiant electric elements, gas stove igniters, and smart range hood ventilation controls.',
        'turnaround' => '15 Mins Instant Online Session',
        'common_issues' => ['Induction top flashing E-code error', 'Glass cooktop element touch lock active', 'Range hood fan speed control failure', 'Spark igniter clicking continuously']
    ],
    'ice-maker-repair' => [
        'title' => 'Ice Maker & Wine Cooler Remote Guide',
        'category' => 'Kitchen',
        'icon' => 'ri-snowflake-line',
        'short_desc' => 'Guided virtual support for ice maker sensors, line clogs & wine cellar cooling.',
        'full_desc' => 'Keep your beverages cold. Guided remote troubleshooting for ice maker fill valves, sensor arm switches, digital control boards, and wine cooler thermostat settings.',
        'turnaround' => '15 Mins Instant Online Session',
        'common_issues' => ['Ice maker stopped producing ice', 'Ice dispenser motor sensor failure', 'Water filter indicator reset & line flush', 'Wine cooler failing to hold set temperature']
    ],
    'commercial-appliance-repair' => [
        'title' => 'Commercial Equipment Remote Support',
        'category' => 'Commercial',
        'icon' => 'ri-store-2-line',
        'short_desc' => 'Priority online technical support for commercial coolers, washers & POS setups.',
        'full_desc' => 'Minimize business downtime with immediate remote diagnostic help. We assist restaurant, office & retail clients with walk-in cooler temperature alerts, commercial washer error codes, and POS printer setups online.',
        'turnaround' => 'Priority 10 Mins Online Response',
        'common_issues' => ['Walk-in cooler controller temperature alarm', 'Commercial washer control lock error', 'Network POS thermal printer offline', 'Food display case digital thermostat reset']
    ],
    'small-appliance-repair' => [
        'title' => 'Small Countertop Appliance Help',
        'category' => 'Kitchen',
        'icon' => 'ri-plug-line',
        'short_desc' => 'Virtual setup & guidance for microwaves, espresso machines & kitchen gadgets.',
        'full_desc' => 'Remote troubleshooting for built-in microwaves, high-end espresso units, pressure cookers, and smart kitchen countertop appliances.',
        'turnaround' => '10 Mins Instant Online Session',
        'common_issues' => ['Microwave display error or timer lock', 'Espresso machine descaling & pressure error', 'Smart cooker WiFi connection failure', 'Power safety switch reset guidance']
    ],
    'wireless-network-printer-setup' => [
        'title' => 'WiFi & Network Printer Remote Setup',
        'category' => 'Tech & Office',
        'icon' => 'ri-router-line',
        'short_desc' => '100% Remote screen-share setup for wireless printers, routers & IP networks.',
        'full_desc' => 'Seamless online network configuration for all your devices. We fix printer IP network disconnections, set up wireless printing across laptops & smartphones, and eliminate network printer spooler errors remotely.',
        'turnaround' => '10-20 Mins Remote Screen-Share',
        'common_issues' => ['Printer disconnected from home/office WiFi', 'Network IP configuration & spooler error', 'Wireless printing setup for Mac, Windows & iOS', 'Slow network document printing speed']
    ],
    'laptop-desktop-repair' => [
        'title' => 'Laptop & Computer Remote Tech Support',
        'category' => 'Tech & Office',
        'icon' => 'ri-macbook-line',
        'short_desc' => '100% Remote screen-share support for PC/Mac speedup, viruses & driver fixes.',
        'full_desc' => 'Professional computer technical support delivered 100% online via secure remote desktop connection. We clean malware/viruses, fix blue screen software crashes, optimize slow startup speed, configure email clients, and update drivers.',
        'turnaround' => '15 Mins Instant Remote Desktop',
        'common_issues' => ['Computer running slow, lagging or freezing', 'Blue Screen of Death (BSOD) software crash', 'Malware, pop-ups or virus infection cleanup', 'Driver update, printer driver & OS configuration', 'Email client & cloud backup syncing issues']
    ],
    'hvac-air-conditioning' => [
        'title' => 'HVAC & Thermostat Virtual Guidance',
        'category' => 'Climate Control',
        'icon' => 'ri-temp-cold-line',
        'short_desc' => 'Virtual assistance for smart Nest/Ecobee thermostats & AC error diagnostics.',
        'full_desc' => 'Remote technical guidance for home HVAC controllers, smart thermostat wiring setup, digital AC error code diagnostics, and seasonal system calibration.',
        'turnaround' => '15 Mins Instant Online Session',
        'common_issues' => ['Smart thermostat showing offline or E-code', 'AC controller failing to trigger cooling cycle', 'HVAC C-wire adapter installation guidance', 'Digital thermostat schedule reset']
    ],
    'smart-home-installation' => [
        'title' => 'Smart Home Remote Configuration',
        'category' => 'Tech & Office',
        'icon' => 'ri-home-wifi-line',
        'short_desc' => 'Remote app configuration for video doorbells, smart locks & Alexa/Google hubs.',
        'full_desc' => 'Upgrade your home with expert virtual setup. We remotely configure video doorbells, smart door lock mobile apps, automated lighting controllers, and integrate Alexa or Google Home automation.',
        'turnaround' => '15 Mins Remote App Setup',
        'common_issues' => ['Video doorbell WiFi sync & notification setup', 'Smart lock smartphone app pairing failure', 'Home automation hub disconnects', 'Voice assistant routine & skill integration']
    ],
    'cctv-security-camera' => [
        'title' => 'CCTV Security Camera Remote Setup',
        'category' => 'Tech & Office',
        'icon' => 'ri-vidicon-line',
        'short_desc' => '100% Online setup for security IP cameras, NVR recording & phone monitoring apps.',
        'full_desc' => 'Configure your security camera system online. We set up remote live-view on iOS/Android smartphones, configure IP port forwarding, fix camera network offline status, and set up motion detection alerts remotely.',
        'turnaround' => '15 Mins Remote Session',
        'common_issues' => ['Security camera offline on mobile phone app', 'NVR network IP configuration & remote access', 'Motion alert push notifications failing', 'Camera password reset & port forwarding setup']
    ],
    'tv-mounting-audio' => [
        'title' => 'Smart TV & Soundbar Remote Setup',
        'category' => 'Tech & Office',
        'icon' => 'ri-tv-line',
        'short_desc' => 'Remote configuration for Smart TVs, soundbars, HDMI ARC & streaming devices.',
        'full_desc' => 'Remote technical help for Smart TV setup, soundbar audio optical/eARC syncing, surround sound receiver settings, and streaming device app configuration.',
        'turnaround' => '15 Mins Instant Online Session',
        'common_issues' => ['Soundbar audio out of sync with Smart TV', 'HDMI ARC / Optical audio output configuration', 'Smart TV app streaming error or frozen screen', 'Universal remote control pairing setup']
    ],
    'water-heater-repair' => [
        'title' => 'Water Heater Remote Diagnostics',
        'category' => 'Plumbing & Climate',
        'icon' => 'ri-drop-fill',
        'short_desc' => 'Virtual troubleshooting for electric & tankless water heater controllers & error codes.',
        'full_desc' => 'Remote technical guidance for electric and tankless water heater controllers. Diagnostic evaluation of digital error codes, heating element safety resets, and temperature control calibration.',
        'turnaround' => '15 Mins Instant Online Session',
        'common_issues' => ['Tankless water heater displaying error code', 'Electric water heater reset button tripped', 'Digital thermostat temperature calibration', 'Status LED light flash code diagnostic']
    ]
];

/**
 * Helper function to get service by slug
 */
function get_service_by_slug($slug) {
    global $services;
    return isset($services[$slug]) ? $services[$slug] : null;
}
