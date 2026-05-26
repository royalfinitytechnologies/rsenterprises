<?php
require_once 'config.php';

// Form Handling & Redirect Logic
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect & Sanitize Form Input
    $name    = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
    $phone   = isset($_POST['phone']) ? strip_tags(trim($_POST['phone'])) : '';
    $service = isset($_POST['service']) ? strip_tags(trim($_POST['service'])) : '';
    $subject = isset($_POST['subject']) ? strip_tags(trim($_POST['subject'])) : '';
    $message = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : '';

    // Simple Server-Side Validation
    if (empty($name) || empty($phone) || empty($service) || empty($message)) {
        $error = 'Please fill in all required fields (Name, Phone, Service, and Message).';
    } else {
        // Construct WhatsApp formatted message text
        $whatsapp_text = "*Website Inquiry - RS Enterprises*\n";
        $whatsapp_text .= "---------------------------------------\n";
        $whatsapp_text .= "*Name:* " . $name . "\n";
        $whatsapp_text .= "*Phone:* " . $phone . "\n";
        $whatsapp_text .= "*Interest:* " . $service . "\n";
        if (!empty($subject)) {
            $whatsapp_text .= "*Subject:* " . $subject . "\n";
        }
        $whatsapp_text .= "*Message:* " . $message . "\n";
        $whatsapp_text .= "---------------------------------------\n";
        $whatsapp_text .= "_Sent via contact form._";

        // URL encode the message
        $encoded_message = urlencode($whatsapp_text);

        // Sanitize phone number (remove +, spaces, hyphens)
        $clean_whatsapp_phone = preg_replace('/[^0-9]/', '', WHATSAPP_PHONE);

        // Redirect directly to WhatsApp Web/App
        $whatsapp_url = "https://api.whatsapp.com/send?phone=" . $clean_whatsapp_phone . "&text=" . $encoded_message;
        header("Location: " . $whatsapp_url);
        exit;
    }
}

// Check for pre-fill parameters via GET
$get_interest = isset($_GET['interest']) ? $_GET['interest'] : '';
$get_product = isset($_GET['product']) ? $_GET['product'] : '';

$selected_scrap = ($get_interest === 'scrap') ? 'selected' : '';
$selected_rcc = ($get_interest === 'rcc') ? 'selected' : '';

$prefilled_message = '';
if (!empty($get_product)) {
    $product_name = str_replace('-', ' ', $get_product);
    $prefilled_message = "Hello, I am interested in inquiring about " . $product_name . ". Please share pricing details.";
}

$pageTitle = "Contact Us";
require_once 'header.php';
?>

<!-- Inner Banner Header -->
<section style="background: linear-gradient(135deg, rgba(9, 13, 22, 0.9) 0%, rgba(16, 185, 129, 0.08) 100%); border-bottom: 1px solid var(--color-border); padding: 80px 0;">
    <div class="container" style="text-align: center;">
        <span class="section-subtitle text-accent-rcc" style="color: var(--color-success) !important;">Get In Touch</span>
        <h1 style="font-size: 3rem; margin-bottom: 15px;">Connect With Us</h1>
        <p style="color: var(--color-text-secondary); max-width: 600px; margin: 0 auto;">Have queries about our precast concrete prices or want to request a quote for commercial metal scrap? Drop your details below.</p>
    </div>
</section>

<!-- Main Contact Details & Form Section -->
<section>
    <div class="container">
        <div class="contact-container-grid">
            
            <!-- Contact Details Panel -->
            <div class="contact-info-panel">
                <div>
                    <span class="section-subtitle subtitle-scrap">Office Coordinates</span>
                    <h2 style="font-size: 2rem; margin-bottom: 30px;">How to Reach Us</h2>
                    
                    <div class="info-cards">
                        <!-- Office Location -->
                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fa-solid fa-map-location-dot"></i>
                            </div>
                            <div class="info-content">
                                <h4>Factory & Office</h4>
                                <p><?php echo BUSINESS_ADDRESS; ?></p>
                            </div>
                        </div>

                        <!-- Phone Details -->
                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div class="info-content">
                                <h4>Call Sales Desk</h4>
                                <p><a href="tel:<?php echo str_replace(' ', '', BUSINESS_PHONE); ?>"><?php echo BUSINESS_PHONE; ?></a></p>
                            </div>
                        </div>

                        <!-- Email Details -->
                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fa-solid fa-envelope-open-text"></i>
                            </div>
                            <div class="info-content">
                                <h4>Business Support</h4>
                                <p><a href="mailto:<?php echo BUSINESS_EMAIL; ?>"><?php echo BUSINESS_EMAIL; ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- WhatsApp Notice Card -->
                <div class="whatsapp-notice-card">
                    <h3 class="whatsapp-notice-title">
                        <i class="fa-brands fa-whatsapp"></i> Instant WhatsApp Dispatch
                    </h3>
                    <p class="whatsapp-notice-desc">
                        When you click the **"Send to WhatsApp"** button, the website will format your inquiry automatically and launch WhatsApp Web or your phone's WhatsApp application to send the message directly to our commercial desk.
                    </p>
                </div>
            </div>

            <!-- Contact Form Panel -->
            <div class="contact-form-panel">
                <span class="section-subtitle subtitle-rcc">Inquiry Form</span>
                <h3 style="font-size: 1.6rem; margin-bottom: 25px;">Send an Inquiry</h3>

                <!-- Error Display -->
                <?php if (!empty($error)): ?>
                    <div class="form-status error">
                        <i class="fa-solid fa-triangle-exclamation"></i> <?php echo $error; ?>
                    </div>
                <?php endif; ?>

                <form action="contact.php" method="POST" id="inquiryForm">
                    <div class="form-group-row">
                        <!-- Name Field -->
                        <div class="form-group">
                            <label for="form-name">Full Name *</label>
                            <input type="text" id="form-name" name="name" class="form-control" placeholder="e.g. John Doe" required>
                        </div>
                        <!-- Phone Field -->
                        <div class="form-group">
                            <label for="form-phone">WhatsApp Phone *</label>
                            <input type="tel" id="form-phone" name="phone" class="form-control" placeholder="e.g. +91 99999 88888" required>
                        </div>
                    </div>

                    <div class="form-group-row">
                        <!-- Interest Dropdown -->
                        <div class="form-group">
                            <label for="form-service">I am Interested In *</label>
                            <select id="form-service" name="service" class="form-control <?php echo ($get_interest === 'scrap') ? 'scrap-focus' : ''; ?>" required>
                                <option value="" disabled>Select a division</option>
                                <option value="Scrap Sell" <?php echo $selected_scrap; ?>>Scrap Selling Inquiry</option>
                                <option value="RCC Buy" <?php echo $selected_rcc; ?>>RCC Products Purchase</option>
                                <option value="General Inquiry" <?php echo (empty($selected_scrap) && empty($selected_rcc)) ? 'selected' : ''; ?>>General Business Partnership</option>
                            </select>
                        </div>
                        <!-- Subject Field -->
                        <div class="form-group">
                            <label for="form-subject">Subject</label>
                            <input type="text" id="form-subject" name="subject" class="form-control" placeholder="e.g. Hume Pipe Price / Copper Scrap Quantity">
                        </div>
                    </div>

                    <!-- Message Field -->
                    <div class="form-group">
                        <label for="form-message">Detailed Requirements *</label>
                        <textarea id="form-message" name="message" class="form-control" placeholder="Describe the specifications, quantities, or pickup details here..." required><?php echo htmlspecialchars($prefilled_message); ?></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary-gradient" id="submitBtn">
                        <i class="fa-brands fa-whatsapp"></i> Send to WhatsApp
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<?php
require_once 'footer.php';
?>
