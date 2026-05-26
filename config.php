<?php
/**
 * Global Configuration for RS Enterprises
 */

// Define Business Contact Details
define('SITE_NAME', 'RS Enterprises');
define('WHATSAPP_PHONE', '+919876543210'); // Default WhatsApp number (include country code, without '+' in the API call)
define('BUSINESS_PHONE', '+91 98765 43210');
define('BUSINESS_EMAIL', 'info@rsenterprises.com');
define('BUSINESS_ADDRESS', '102, Industrial Development Area, Sector 4, New Delhi, India');

// Helper to determine active navigation item
function isActivePage($pageName) {
    $current_file = basename($_SERVER['SCRIPT_NAME']);
    return ($current_file === $pageName) ? 'active' : '';
}
?>
