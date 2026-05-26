<?php
$pageTitle = "About Us";
require_once 'header.php';
?>

<!-- About Inner Page Header -->
<section style="background: linear-gradient(135deg, rgba(9, 13, 22, 0.9) 0%, rgba(234, 88, 12, 0.08) 100%); border-bottom: 1px solid var(--color-border); padding: 80px 0;">
    <div class="container" style="text-align: center;">
        <span class="section-subtitle subtitle-scrap">Our Heritage</span>
        <h1 style="font-size: 3rem; margin-bottom: 15px;">RS Enterprises</h1>
        <p style="color: var(--color-text-secondary); max-width: 600px; margin: 0 auto;">Pioneering eco-friendly material recycling solutions and high-quality concrete structural manufacturing since 2012.</p>
    </div>
</section>

<!-- Company Overview Section -->
<section>
    <div class="container">
        <div class="about-hero-grid">
            <div class="about-img-box">
                <div class="about-img-border"></div>
                <i class="fa-solid fa-industry"></i>
                <h3 style="font-size: 1.5rem; margin-top: 15px; font-family: var(--font-heading);">Industrial Excellence</h3>
                <p style="color: var(--color-text-secondary); font-size: 0.9rem; margin-top: 5px;">Meticulous metal processing & dense concrete casting.</p>
            </div>
            
            <div class="about-details">
                <span class="section-subtitle subtitle-rcc">Who We Are</span>
                <h2 style="font-size: 2.3rem; margin-bottom: 25px; line-height: 1.2;">Powering Infrastructure, Protecting the Environment</h2>
                <p style="color: var(--color-text-secondary); margin-bottom: 20px;">
                    RS Enterprises was established with a unique dual-mission: to build critical infrastructure with high-grade precast concrete, and to salvage valuable materials through professional scrap management. We operate as a critical cog in the modern supply chain.
                </p>
                <p style="color: var(--color-text-secondary); margin-bottom: 20px;">
                    Our **RCC Division** operates a state-of-the-art casting yard utilizing high-frequency compaction systems to produce dense concrete. Meanwhile, our **Scrap Division** handles thousands of tons of metal waste monthly, supplying steel mills and smelters with high-grade raw input.
                </p>
                <div style="display: flex; gap: 20px; align-items: center; margin-top: 35px;">
                    <div style="border-left: 3px solid var(--color-scrap); padding-left: 15px;">
                        <h4 style="font-size: 1.15rem; color: var(--color-text-primary);">Green Recycling</h4>
                        <p style="font-size: 0.85rem; color: var(--color-text-muted);">Reducing carbon footprints through scrap recycling.</p>
                    </div>
                    <div style="border-left: 3px solid var(--color-rcc); padding-left: 15px;">
                        <h4 style="font-size: 1.15rem; color: var(--color-text-primary);">Heavy-Duty Casting</h4>
                        <p style="font-size: 0.85rem; color: var(--color-text-muted);">IS-Certified structural strength in every pipe.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics Counters -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">12+</div>
                <div class="stat-label">Years of Service</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">25K+</div>
                <div class="stat-label">Tons of Scrap Sorted</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">40K+</div>
                <div class="stat-label">RCC Units Casted</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">450+</div>
                <div class="stat-label">Contractors Partnered</div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="section-alt" style="border-top: 1px solid var(--color-border);">
    <div class="container">
        <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
            <span class="section-subtitle subtitle-scrap">Our Core Values</span>
            <h2 class="section-title">What Drives Our Operations</h2>
            <p class="section-desc">Our foundational core values keep our operations efficient, our concrete dense, and our scrap pricing clean.</p>
        </div>

        <div class="values-grid">
            <!-- Value 1 -->
            <div class="value-card scrap-val">
                <div class="value-icon">
                    <i class="fa-solid fa-leaf"></i>
                </div>
                <h3 class="value-title">Environmental Stewardship</h3>
                <p class="value-desc">We strongly believe in industrial circularity. Recovering scrap metal reduces energy costs of metal smelting by up to 90% compared to virgin mining.</p>
            </div>
            <!-- Value 2 -->
            <div class="value-card rcc-val">
                <div class="value-icon">
                    <i class="fa-solid fa-trowel-bricks"></i>
                </div>
                <h3 class="value-title">Uncompromising Quality</h3>
                <p class="value-desc">Concrete structures hold load weights where lives are involved. We perform daily hydraulic press testing on our batches to ensure high compressive strength.</p>
            </div>
            <!-- Value 3 -->
            <div class="value-card neutral-val">
                <div class="value-icon">
                    <i class="fa-solid fa-scale-balanced"></i>
                </div>
                <h3 class="value-title">Honest Valuations</h3>
                <p class="value-desc">Whether buying industrial demolition steel scrap or supplying precast compound walls, our transparent price structures avoid hidden fees.</p>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'footer.php';
?>
