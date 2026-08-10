<?php
/**
 * GeekAssist Appliance — PHPMailer AJAX Email Handler (v2 — Bug Fixed)
 * Handles all 4 forms: hero, contact, booking-page, booking-modal
 *
 * PHPMailer manual loading (no Composer needed) — ORDER MATTERS:
 *   1. Exception.php  — Custom exception class (MUST be first)
 *   2. PHPMailer.php  — Main mailer class
 *   3. SMTP.php       — SMTP transport layer
 *
 * Bug Fixes Applied:
 *   - Output buffering to catch any stray PHP notices/warnings
 *   - display_errors OFF to prevent HTML in JSON response
 *   - Proper Content-Type header before any output
 *   - Robust JSON response wrapper
 */

// ====================================================================
// CRITICAL: Suppress PHP notices/warnings BEFORE any output
// (XAMPP often has display_errors=On which breaks JSON responses)
// ====================================================================
@ini_set('display_errors', 0);
@error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);

// Start output buffering — catches any accidental PHP output
ob_start();

// Always send JSON header first
header('Content-Type: application/json; charset=utf-8');

require_once __DIR__ . '/config.php';

// ====================================================================
// Security: Only accept POST requests
// ====================================================================
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    ob_end_clean();
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
    exit;
}

// ====================================================================
// Load PHPMailer — 3 files manually, in this exact order
// ====================================================================
$phpmailer_dir = __DIR__ . '/PHPMailer-master/src/';

if (
    !file_exists($phpmailer_dir . 'Exception.php') ||
    !file_exists($phpmailer_dir . 'PHPMailer.php') ||
    !file_exists($phpmailer_dir . 'SMTP.php')
) {
    ob_end_clean();
    echo json_encode([
        'success' => false,
        'message' => 'Server configuration error. Please contact support.',
        'debug'   => 'PHPMailer files not found at: ' . $phpmailer_dir
    ]);
    exit;
}

require_once $phpmailer_dir . 'Exception.php';   // 1st — Exception class
require_once $phpmailer_dir . 'PHPMailer.php';   // 2nd — Core mailer
require_once $phpmailer_dir . 'SMTP.php';        // 3rd — SMTP protocol

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ====================================================================
// Helper Functions
// ====================================================================

/**
 * Sanitize user input — strip tags, trim, escape HTML
 */
function clean($val) {
    $val = isset($val) ? $val : '';
    return htmlspecialchars(strip_tags(trim((string)$val)), ENT_QUOTES, 'UTF-8');
}

/**
 * Safely process multi-line text for HTML email
 */
function nl2br_clean($val) {
    return nl2br(clean($val));
}

/**
 * Return JSON response and exit
 */
function respond($success, $message, $debug = '') {
    ob_end_clean();
    $response = ['success' => (bool)$success, 'message' => $message];
    if ($debug && is_local_environment()) {
        $response['debug'] = $debug;
    }
    echo json_encode($response);
    exit;
}

/**
 * Configure shared PHPMailer instance (from, to, subject, body).
 */
function prepare_mail(string $subject, string $html_body, string $alt_body, string $reply_to = ''): PHPMailer {
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setFrom(EMAIL_ADDRESS, MAIL_FROM_NAME);
    $mail->addAddress(MAIL_RECIPIENT, 'GeekAssist Admin');
    if ($reply_to !== '') {
        $mail->addReplyTo($reply_to);
    }
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $html_body;
    $mail->AltBody = $alt_body;
    return $mail;
}

/**
 * Send via PHP mail() — fast on cPanel/live hosting (no external SMTP).
 */
function send_via_php_mail(string $subject, string $html_body, string $alt_body, string $reply_to = ''): void {
    @ini_set('sendmail_from', EMAIL_ADDRESS);
    $mail = prepare_mail($subject, $html_body, $alt_body, $reply_to);
    $mail->isMail();
    $mail->send();
}

/**
 * Send via SMTP (Gmail local dev or hosting fallback).
 */
function send_via_smtp(
    string $host,
    int $port,
    string $user,
    string $pass,
    string $encryption,
    string $subject,
    string $html_body,
    string $alt_body,
    string $reply_to = ''
): void {
    $mail = prepare_mail($subject, $html_body, $alt_body, $reply_to);
    $mail->isSMTP();
    $mail->Host       = $host;
    $mail->SMTPAuth   = true;
    $mail->Username   = $user;
    $mail->Password   = $pass;
    $mail->Port       = $port;
    $mail->Timeout    = 10;
    $mail->SMTPSecure = $encryption === 'ssl'
        ? PHPMailer::ENCRYPTION_SMTPS
        : PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true,
        ],
    ];
    $mail->send();
}

/**
 * Smart send: live server uses fast PHP mail(), localhost uses Gmail SMTP.
 */
function deliver_email(string $subject, string $html_body, string $alt_body, string $reply_to = ''): void {
    $alt = wordwrap(
        strip_tags(str_replace(['<br>', '<br/>', '<br />'], "\n", $html_body)),
        72, "\n", true
    );
    if ($alt_body === '') {
        $alt_body = $alt;
    }

    if (is_local_environment()) {
        send_via_smtp(
            MAIL_SMTP_HOST,
            MAIL_SMTP_PORT,
            MAIL_SMTP_USER,
            MAIL_SMTP_PASS,
            'tls',
            $subject,
            $html_body,
            $alt_body,
            $reply_to
        );
        return;
    }

    $errors = [];

    try {
        send_via_php_mail($subject, $html_body, $alt_body, $reply_to);
        return;
    } catch (Exception $e) {
        $errors[] = 'PHP mail(): ' . $e->getMessage();
    }

    if (MAIL_HOSTING_PASS !== '') {
        try {
            send_via_smtp(
                MAIL_HOSTING_SMTP,
                MAIL_HOSTING_PORT,
                MAIL_HOSTING_USER,
                MAIL_HOSTING_PASS,
                'ssl',
                $subject,
                $html_body,
                $alt_body,
                $reply_to
            );
            return;
        } catch (Exception $e) {
            $errors[] = 'Hosting SMTP: ' . $e->getMessage();
        }
    }

    throw new Exception(implode(' | ', $errors));
}

// ====================================================================
// Identify form type
// ====================================================================
$form_type    = clean($_POST['form_type'] ?? '');
$email_subject = '';
$email_body    = '';

// ====================================================================
// FORM 1: hero-quick-request-form (index.php)
// ====================================================================
if ($form_type === 'hero_quick') {

    $name        = clean($_POST['full_name']   ?? '');
    $phone       = clean($_POST['phone']       ?? '');
    $service     = clean($_POST['service']     ?? '');
    $description = nl2br_clean($_POST['description'] ?? '');

    if (empty($name) || empty($phone)) {
        respond(false, 'Full name and phone number are required.');
    }

    $email_subject = '[Quick Request] ' . $name . ' — ' . $phone;
    $email_body = buildEmail('Quick Support Request', '🚀', '#2563eb', [
        'Full Name'         => $name,
        'Phone Number'      => $phone,
        'Service Category'  => $service ?: '<em>Not specified</em>',
        'Issue Description' => $description ?: '<em>Not provided</em>',
    ], '');
}

// ====================================================================
// FORM 2: contact-form-page (contact.php)
// ====================================================================
elseif ($form_type === 'contact_page') {

    $first_name = clean($_POST['first_name'] ?? '');
    $last_name  = clean($_POST['last_name']  ?? '');
    $phone      = clean($_POST['phone']      ?? '');
    $email      = clean($_POST['email']      ?? '');
    $service    = clean($_POST['service']    ?? '');
    $message    = nl2br_clean($_POST['message'] ?? '');

    if (empty($first_name) || empty($phone) || empty($message)) {
        respond(false, 'First name, phone and message are required.');
    }

    $email_subject = '[Contact] ' . $first_name . ' ' . $last_name . ' — ' . $phone;
    $email_body = buildEmail('Contact Form Inquiry', '📬', '#2563eb', [
        'First Name'       => $first_name,
        'Last Name'        => $last_name ?: '<em>Not provided</em>',
        'Phone Number'     => $phone,
        'Email Address'    => $email ?: '<em>Not provided</em>',
        'Service Category' => $service ?: '<em>Not specified</em>',
        'Message'          => $message,
    ], $email);
}

// ====================================================================
// FORM 3: booking-page-form (booking.php)
// ====================================================================
elseif ($form_type === 'booking_page') {

    $service_type = clean($_POST['service_type'] ?? '');
    $brand        = clean($_POST['brand']        ?? '');
    $unit_age     = clean($_POST['unit_age']     ?? '');
    $date         = clean($_POST['date']         ?? '');
    $time_window  = clean($_POST['time_window']  ?? '');
    $full_name    = clean($_POST['full_name']    ?? '');
    $phone        = clean($_POST['phone']        ?? '');
    $email        = clean($_POST['email']        ?? '');
    $city         = clean($_POST['city']         ?? '');
    $address      = clean($_POST['address']      ?? '');
    $notes        = nl2br_clean($_POST['notes']  ?? '');

    if (empty($full_name) || empty($phone) || empty($date)) {
        respond(false, 'Full name, phone and preferred date are required.');
    }

    $email_subject = '[Booking] ' . $full_name . ' — ' . $date . ' ' . $time_window;
    $email_body = buildEmail('Online Session Booking', '📅', '#f97316', [
        'Service Type'       => $service_type ?: '<em>Not specified</em>',
        'Appliance Brand'    => $brand ?: '<em>Not specified</em>',
        'Unit Age'           => $unit_age ?: '<em>Not specified</em>',
        'Preferred Date'     => $date,
        'Time Window'        => $time_window ?: '<em>Not specified</em>',
        'Full Name'          => $full_name,
        'Phone Number'       => $phone,
        'Email Address'      => $email ?: '<em>Not provided</em>',
        'City / Community'   => $city ?: '<em>Not specified</em>',
        'Service Address'    => $address ?: '<em>Not specified</em>',
        'Detailed Notes'     => $notes ?: '<em>None</em>',
    ], $email);
}

// ====================================================================
// FORM 4: booking-form-modal (includes/booking-modal.php)
// ====================================================================
elseif ($form_type === 'booking_modal') {

    $support_type = clean($_POST['support_type'] ?? '');
    $full_name    = clean($_POST['full_name']    ?? '');
    $phone        = clean($_POST['phone']        ?? '');
    $service      = clean($_POST['service']      ?? '');
    $date         = clean($_POST['date']         ?? '');
    $time_slot    = clean($_POST['time_slot']    ?? '');
    $address      = clean($_POST['address']      ?? '');
    $issue        = nl2br_clean($_POST['issue']  ?? '');

    if (empty($full_name) || empty($phone) || empty($date)) {
        respond(false, 'Full name, phone and preferred date are required.');
    }

    $email_subject = '[Modal Booking] ' . $full_name . ' — ' . $date;
    $email_body = buildEmail('Quick Booking Modal', '🌐', '#f97316', [
        'Support / Session Type'  => $support_type ?: '<em>Not specified</em>',
        'Full Name'               => $full_name,
        'Phone Number'            => $phone,
        'Service Required'        => $service ?: '<em>Not specified</em>',
        'Preferred Date'          => $date,
        'Preferred Time Slot'     => $time_slot ?: '<em>Not specified</em>',
        'Service Address / City'  => $address ?: '<em>Not specified</em>',
        'Issue / Appliance Brand' => $issue ?: '<em>None</em>',
    ], '');
}

// ====================================================================
// Unknown form type
// ====================================================================
else {
    respond(false, 'Unknown form type.', 'Received form_type: "' . $form_type . '"');
}

// ====================================================================
// Send Email — fast PHP mail() on live server, Gmail SMTP on localhost
// ====================================================================
$reply_to = clean($_POST['email'] ?? '');

try {
    deliver_email($email_subject, $email_body, '', $reply_to);
    respond(true, 'Your request has been submitted! Our team will contact you within 15 minutes.');
} catch (Exception $e) {
    error_log('[GeekAssist Mail Error] ' . $e->getMessage() . ' | form_type=' . $form_type);
    respond(false, 'Unable to send email. Please call us directly or try again.', $e->getMessage());
}

// ====================================================================
// Build HTML Email Template
// ====================================================================
function buildEmail(string $title, string $emoji, string $accent, array $fields, string $client_email = ''): string {
    $rows = '';
    $alt_row = false;
    foreach ($fields as $label => $value) {
        $bg = $alt_row ? '#f8fafc' : '#ffffff';
        $rows .= '<tr>
            <td style="padding:10px 16px;background:' . $bg . ';border-bottom:1px solid #e2e8f0;font-weight:700;color:#475569;font-size:13px;width:38%;white-space:nowrap;vertical-align:top;">'
                . htmlspecialchars($label) . '</td>
            <td style="padding:10px 16px;background:#ffffff;border-bottom:1px solid #e2e8f0;color:#1e293b;font-size:14px;vertical-align:top;">'
                . $value . '</td>
        </tr>';
        $alt_row = !$alt_row;
    }

    $now     = date('D, d M Y \a\t H:i:s') . ' (' . date_default_timezone_get() . ')';
    $year    = date('Y');
    $site    = 'GeekAssist Appliance';
    $reply_href = ($client_email !== '') ? 'mailto:' . htmlspecialchars($client_email, ENT_QUOTES, 'UTF-8') : 'mailto:' . EMAIL_ADDRESS;
    $reply_label = ($client_email !== '') ? 'Reply to Client' : 'Contact Support Desk';

    return '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>' . htmlspecialchars($title) . '</title>
</head>
<body style="margin:0;padding:0;font-family:\'Segoe UI\',Arial,sans-serif;background:#f1f5f9;">
<table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="background:#f1f5f9;padding:32px 12px;">
<tr><td align="center">
<table width="600" cellpadding="0" cellspacing="0" role="presentation"
  style="max-width:600px;width:100%;background:#ffffff;border-radius:16px;overflow:hidden;box-shadow:0 8px 32px rgba(0,0,0,.12);">

  <!-- Header -->
  <tr>
    <td style="background:linear-gradient(135deg,' . $accent . ' 0%,#1e40af 100%);padding:36px 32px 28px;text-align:center;">
      <div style="font-size:48px;line-height:1;margin-bottom:12px;">' . $emoji . '</div>
      <h1 style="color:#fff;font-size:22px;margin:0;font-weight:800;letter-spacing:-0.02em;">' . htmlspecialchars($title) . '</h1>
      <p style="color:rgba(255,255,255,.8);font-size:13px;margin:8px 0 0;">' . $site . ' — Online Tech &amp; Appliance Support</p>
    </td>
  </tr>

  <!-- Alert Banner -->
  <tr>
    <td style="background:#fffbeb;border-left:4px solid #f59e0b;padding:14px 28px;">
      <p style="margin:0;font-size:13px;color:#92400e;font-weight:700;">
        ⚡ New form submission — respond within 15 minutes!
      </p>
    </td>
  </tr>

  <!-- Data Table -->
  <tr>
    <td style="padding:28px 28px 8px;">
      <p style="margin:0 0 14px;font-size:11px;color:#64748b;font-weight:700;text-transform:uppercase;letter-spacing:.08em;">📋 Submission Details</p>
      <table width="100%" cellpadding="0" cellspacing="0" role="presentation"
        style="border-radius:10px;overflow:hidden;border:1px solid #e2e8f0;">
        ' . $rows . '
      </table>
    </td>
  </tr>

  <!-- Timestamp -->
  <tr>
    <td style="padding:14px 28px 8px;">
      <p style="margin:0;font-size:11px;color:#94a3b8;">
        🕐 Received: <strong>' . $now . '</strong>
      </p>
    </td>
  </tr>

  <!-- CTA Button -->
  <tr>
    <td style="padding:14px 28px 32px;">
      <table cellpadding="0" cellspacing="0" role="presentation">
        <tr>
          <td style="background:' . $accent . ';border-radius:8px;padding:0;">
            <a href="' . $reply_href . '" target="_blank"
               style="display:inline-block;padding:12px 24px;color:#fff;font-weight:700;font-size:14px;text-decoration:none;">
              ' . $reply_label . ' &rarr;
            </a>
          </td>
        </tr>
      </table>
    </td>
  </tr>

  <!-- Footer -->
  <tr>
    <td style="background:#f8fafc;border-top:1px solid #e2e8f0;padding:16px 28px;text-align:center;">
      <p style="margin:0;font-size:11px;color:#94a3b8;">
        &copy; ' . $year . ' ' . $site . ' &mdash; Automated notification from website contact form.
      </p>
    </td>
  </tr>

</table>
</td></tr>
</table>
</body>
</html>';
}
