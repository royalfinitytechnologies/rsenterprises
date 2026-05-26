    </main>

    <!-- Footer Section -->
    <footer class="site-footer">
        <div class="container footer-grid">
            <!-- Brand Column -->
            <div class="footer-col brand-col">
                <a href="index.php" class="logo footer-logo">
                    <div class="logo-image-container">
                        <img src="logo.jpg" alt="RS Enterprises Logo" class="logo-img">
                    </div>
                    <div class="logo-text">
                        <span class="brand-title">RS Enterprises</span>
                        <span class="brand-subtitle">Scrap & RCC Sell</span>
                    </div>
                </a>
                <p class="footer-desc">
                    Your trusted industrial partner in scrap metal recycling management and top-tier precast reinforced cement concrete (RCC) product manufacturing.
                </p>
                <div class="social-links">
                    <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', WHATSAPP_PHONE); ?>" target="_blank" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>

            <!-- Quick Links Column -->
            <div class="footer-col">
                <h3 class="footer-title">Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="index.php"><i class="fa-solid fa-angle-right"></i> Home</a></li>
                    <li><a href="rcc.php"><i class="fa-solid fa-angle-right"></i> RCC Products</a></li>
                    <li><a href="about.php"><i class="fa-solid fa-angle-right"></i> About Us</a></li>
                    <li><a href="contact.php"><i class="fa-solid fa-angle-right"></i> Contact Us</a></li>
                </ul>
            </div>

            <!-- Services Column -->
            <div class="footer-col">
                <h3 class="footer-title">Our Solutions</h3>
                <ul class="footer-links">
                    <li><a href="index.php#scrap-section"><i class="fa-solid fa-recycle"></i> Scrap Iron & Steel</a></li>
                    <li><a href="index.php#scrap-section"><i class="fa-solid fa-recycle"></i> Non-Ferrous Metals</a></li>
                    <li><a href="rcc.php"><i class="fa-solid fa-trowel-bricks"></i> RCC Hume Pipes</a></li>
                    <li><a href="rcc.php"><i class="fa-solid fa-trowel-bricks"></i> Precast Concrete Walls</a></li>
                    <li><a href="rcc.php"><i class="fa-solid fa-trowel-bricks"></i> Manhole Covers & Chambers</a></li>
                </ul>
            </div>

            <!-- Contact Info Column -->
            <div class="footer-col">
                <h3 class="footer-title">Contact Office</h3>
                <ul class="footer-contact">
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <span><?php echo BUSINESS_ADDRESS; ?></span>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:<?php echo str_replace(' ', '', BUSINESS_PHONE); ?>"><?php echo BUSINESS_PHONE; ?></a>
                    </li>
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:<?php echo BUSINESS_EMAIL; ?>"><?php echo BUSINESS_EMAIL; ?></a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="footer-bottom">
            <div class="container footer-bottom-content">
                <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All Rights Reserved.</p>
                <div class="footer-legal-links">
                    <a href="#">Privacy Policy</a>
                    <span class="dot">·</span>
                    <a href="#">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Custom JavaScript -->
    <script src="js/script.js"></script>
</body>
</html>
