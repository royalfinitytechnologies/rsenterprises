<?php
$pageTitle = "RCC Concrete Products";
require_once 'header.php';
?>

<!-- Inner Page Banner Header -->
<section style="background: linear-gradient(135deg, rgba(9, 13, 22, 0.9) 0%, rgba(13, 148, 136, 0.1) 100%); border-bottom: 1px solid var(--color-border); padding: 80px 0;">
    <div class="container" style="text-align: center;">
        <span class="section-subtitle subtitle-rcc">Concrete Solutions</span>
        <h1 style="font-size: 3rem; margin-bottom: 15px;">RCC Precast Products</h1>
        <p style="color: var(--color-text-secondary); max-width: 600px; margin: 0 auto;">Manufactured using high-strength reinforcement steel and premium-grade concrete to withstand extreme weather, load-bearing weight, and corrosion.</p>
    </div>
</section>

<!-- Product Catalog Showcase Grid -->
<section>
    <div class="container">
        <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
            <span class="section-subtitle subtitle-rcc">Catalog Showcase</span>
            <h2 class="section-title">Our Precast Concrete Range</h2>
            <p class="section-desc">We deliver customized dimension layouts as well as standard precast shapes for public infrastructure, civil, residential, and industrial construction projects.</p>
        </div>

        <div class="rcc-grid">
            <!-- Product 1: Hume Pipes -->
            <div class="rcc-product-card">
                <div class="product-img-wrapper">
                    <img src="images/hume_pipe.jpg" alt="RCC Hume Pipe" style="height: 100%; width: 100%; object-fit: cover;">
                </div>
                <div class="product-body">
                    <h3 class="product-title">RCC Hume Pipes (NP2, NP3, NP4)</h3>
                    <p class="product-desc">Highly robust centrifugal cast concrete pipes designed for water drainage, underground sewers, highway crossings, and heavy culverts.</p>
                    <div class="product-specs">
                        <div class="spec-row"><span class="spec-label">Standard Diameter:</span><span class="spec-val">150mm to 2000mm</span></div>
                        <div class="spec-row"><span class="spec-label">Concrete Class:</span><span class="spec-val">M25, M30, M40</span></div>
                        <div class="spec-row"><span class="spec-label">Reinforcement:</span><span class="spec-val">Single / Double cage steel</span></div>
                    </div>
                    <div class="product-footer">
                        <a href="contact.php?interest=rcc&product=RCC-Hume-Pipes" class="btn btn-rcc"><i class="fa-solid fa-envelope"></i> Inquire</a>
                        <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', WHATSAPP_PHONE); ?>?text=Hello,%20I'm%20interested%20in%20purchasing%20RCC%20Hume%20Pipes." target="_blank" class="btn btn-outline"><i class="fa-brands fa-whatsapp text-accent-rcc"></i> WhatsApp</a>
                    </div>
                </div>
            </div>

            <!-- Product 2: Precast Walls -->
            <div class="rcc-product-card">
                <div class="product-img-wrapper">
                    <img src="images/compound_wall.png" alt="Precast Boundary Wall" style="height: 100%; width: 100%; object-fit: cover;">
                </div>
                <div class="product-body">
                    <h3 class="product-title">Precast Boundary Walls</h3>
                    <p class="product-desc">Easy to install, modular boundary wall panels supported by H-shaped concrete columns. Excellent for factories, plots, and housing layouts.</p>
                    <div class="product-specs">
                        <div class="spec-row"><span class="spec-label">Panel Size:</span><span class="spec-val">6ft x 1ft or 7ft x 1ft</span></div>
                        <div class="spec-row"><span class="spec-label">Column Height:</span><span class="spec-val">Up to 10 feet</span></div>
                        <div class="spec-row"><span class="spec-label">Steel Grade:</span><span class="spec-val">Fe500 reinforcement TMT</span></div>
                    </div>
                    <div class="product-footer">
                        <a href="contact.php?interest=rcc&product=Precast-Boundary-Walls" class="btn btn-rcc"><i class="fa-solid fa-envelope"></i> Inquire</a>
                        <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', WHATSAPP_PHONE); ?>?text=Hello,%20I'm%20interested%20in%20precast%20boundary%20walls." target="_blank" class="btn btn-outline"><i class="fa-brands fa-whatsapp text-accent-rcc"></i> WhatsApp</a>
                    </div>
                </div>
            </div>

            <!-- Product 3: Manhole Covers -->
            <div class="rcc-product-card">
                <div class="product-img-wrapper">
                    <img src="images/manhole_cover.jpg" alt="RCC Manhole Cover & Frame" style="height: 100%; width: 100%; object-fit: cover;">
                </div>
                <div class="product-body">
                    <h3 class="product-title">RCC Manhole Covers & Frames</h3>
                    <p class="product-desc">Heavy-duty manhole lids and frames, engineered for heavy vehicular traffic. Slip-resistant surface textures with embedded handling hooks.</p>
                    <div class="product-specs">
                        <div class="spec-row"><span class="spec-label">Shapes Available:</span><span class="spec-val">Circular, Rectangular, Square</span></div>
                        <div class="spec-row"><span class="spec-label">Load Capacity:</span><span class="spec-val">LD, MD, HD, EHD Grade</span></div>
                        <div class="spec-row"><span class="spec-label">Features:</span><span class="spec-val">Integrated lifting handles</span></div>
                    </div>
                    <div class="product-footer">
                        <a href="contact.php?interest=rcc&product=Manhole-Covers" class="btn btn-rcc"><i class="fa-solid fa-envelope"></i> Inquire</a>
                        <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', WHATSAPP_PHONE); ?>?text=Hello,%20I'm%20interested%20in%20RCC%20Manhole%20Covers." target="_blank" class="btn btn-outline"><i class="fa-brands fa-whatsapp text-accent-rcc"></i> WhatsApp</a>
                    </div>
                </div>
            </div>

            <!-- Product 4: Drainage U-Drains -->
            <div class="rcc-product-card">
                <div class="product-img-wrapper">
                    <img src="images/u_drain.jpg" alt="Precast Concrete U-Drain" style="height: 100%; width: 100%; object-fit: cover;">
                </div>
                <div class="product-body">
                    <h3 class="product-title">Precast Concrete U-Drains</h3>
                    <p class="product-desc">Precast drainage channels that enable rapid channelization of storm water. Minimizes excavation time and reduces site work significantly.</p>
                    <div class="product-specs">
                        <div class="spec-row"><span class="spec-label">Common Widths:</span><span class="spec-val">300mm to 1200mm</span></div>
                        <div class="spec-row"><span class="spec-label">Concrete Class:</span><span class="spec-val">M30 concrete grade</span></div>
                        <div class="spec-row"><span class="spec-label">Covers:</span><span class="spec-val">Available with perforated slabs</span></div>
                    </div>
                    <div class="product-footer">
                        <a href="contact.php?interest=rcc&product=Precast-U-Drains" class="btn btn-rcc"><i class="fa-solid fa-envelope"></i> Inquire</a>
                        <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', WHATSAPP_PHONE); ?>?text=Hello,%20I'm%20interested%20in%20Precast%20U-Drains." target="_blank" class="btn btn-outline"><i class="fa-brands fa-whatsapp text-accent-rcc"></i> WhatsApp</a>
                    </div>
                </div>
            </div>

            <!-- Product 5: Concrete Septic Tank -->
            <div class="rcc-product-card">
                <div class="product-img-wrapper">
                    <img src="images/septic_tank.png" alt="Concrete Septic Tank" style="height: 100%; width: 100%; object-fit: cover;">
                </div>
                <div class="product-body">
                    <h3 class="product-title">Concrete Septic Tank (3000 Ltr)</h3>
                    <p class="product-desc">Heavy-duty precast cylindrical concrete tanks designed for reliable underground waste storage, sewage systems, and drainage projects.</p>
                    <div class="product-specs">
                        <div class="spec-row"><span class="spec-label">Capacity:</span><span class="spec-val">3000 Liters / Custom</span></div>
                        <div class="spec-row"><span class="spec-label">Wall Thickness:</span><span class="spec-val">75mm to 100mm reinforced</span></div>
                        <div class="spec-row"><span class="spec-label">MOQ:</span><span class="spec-val">10 Units</span></div>
                    </div>
                    <div class="product-footer">
                        <a href="contact.php?interest=rcc&product=Concrete-Septic-Tank" class="btn btn-rcc"><i class="fa-solid fa-envelope"></i> Inquire</a>
                        <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', WHATSAPP_PHONE); ?>?text=Hello,%20I'm%20interested%20in%20Concrete%20Septic%20Tanks." target="_blank" class="btn btn-outline"><i class="fa-brands fa-whatsapp text-accent-rcc"></i> WhatsApp</a>
                    </div>
                </div>
            </div>

            <!-- Product 6: Precast Concrete Kerbstones -->
            <div class="rcc-product-card">
                <div class="product-img-wrapper">
                    <img src="images/kerbstone.jpg" alt="Precast Concrete Kerbstones" style="height: 100%; width: 100%; object-fit: cover;">
                </div>
                <div class="product-body">
                    <h3 class="product-title">Precast Concrete Kerbstones</h3>
                    <p class="product-desc">High compressive strength interlocking concrete road kerbs and foot-path channel blocks for highways, streets, and parking layouts.</p>
                    <div class="product-specs">
                        <div class="spec-row"><span class="spec-label">Common Sizes:</span><span class="spec-val">300x300mm / 450x150mm</span></div>
                        <div class="spec-row"><span class="spec-label">Concrete Mix:</span><span class="spec-val">M30 Grade precast casting</span></div>
                        <div class="spec-row"><span class="spec-label">Standard Code:</span><span class="spec-val">Conforms to IS 5758</span></div>
                    </div>
                    <div class="product-footer">
                        <a href="contact.php?interest=rcc&product=Concrete-Kerbstones" class="btn btn-rcc"><i class="fa-solid fa-envelope"></i> Inquire</a>
                        <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', WHATSAPP_PHONE); ?>?text=Hello,%20I'm%20interested%20in%20Precast%20Concrete%20Kerbstones." target="_blank" class="btn btn-outline"><i class="fa-brands fa-whatsapp text-accent-rcc"></i> WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Technical Specs Table -->
<section class="section-alt" style="border-top: 1px solid var(--color-border);">
    <div class="container">
        <div style="text-align: center; display: flex; flex-direction: column; align-items: center; margin-bottom: 50px;">
            <span class="section-subtitle subtitle-rcc">Quality Metrics</span>
            <h2>RCC Engineering Standards</h2>
            <p style="color: var(--color-text-secondary); max-width: 600px; margin-top: 10px;">Our precast concrete structures conform strictly to engineering codes to ensure structural load limits are fully met.</p>
        </div>

        <div style="overflow-x: auto; background-color: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); padding: 20px;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem;">
                <thead>
                    <tr style="border-bottom: 2px solid var(--color-border);">
                        <th style="padding: 16px 20px; font-family: var(--font-heading); color: var(--color-text-primary);">Product Classification</th>
                        <th style="padding: 16px 20px; font-family: var(--font-heading); color: var(--color-text-primary);">IS Code Standard</th>
                        <th style="padding: 16px 20px; font-family: var(--font-heading); color: var(--color-text-primary);">Concrete Mix Grade</th>
                        <th style="padding: 16px 20px; font-family: var(--font-heading); color: var(--color-text-primary);">Steel Reinforcement TMT</th>
                        <th style="padding: 16px 20px; font-family: var(--font-heading); color: var(--color-text-primary);">Application Usage</th>
                    </tr>
                </thead>
                <tbody style="color: var(--color-text-secondary);">
                    <tr style="border-bottom: 1px solid var(--color-border);">
                        <td style="padding: 16px 20px; font-weight: 600; color: var(--color-text-primary);">RCC Hume Pipes NP2 Class</td>
                        <td style="padding: 16px 20px;">IS 458 : 2003</td>
                        <td style="padding: 16px 20px;">M-25 to M-30</td>
                        <td style="padding: 16px 20px;">Fe 415 / Fe 500</td>
                        <td style="padding: 16px 20px;">Light-duty road culverts & storm drains</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--color-border);">
                        <td style="padding: 16px 20px; font-weight: 600; color: var(--color-text-primary);">RCC Hume Pipes NP3 & NP4</td>
                        <td style="padding: 16px 20px;">IS 458 : 2003</td>
                        <td style="padding: 16px 20px;">M-35 to M-40</td>
                        <td style="padding: 16px 20px;">Fe 500 Double Cage</td>
                        <td style="padding: 16px 20px;">National highways, heavy sewer lines</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--color-border);">
                        <td style="padding: 16px 20px; font-weight: 600; color: var(--color-text-primary);">Precast Boundary Walls</td>
                        <td style="padding: 16px 20px;">IS 15916</td>
                        <td style="padding: 16px 20px;">M-30 Grade</td>
                        <td style="padding: 16px 20px;">Fe 500 Carbon Steel</td>
                        <td style="padding: 16px 20px;">Industrial border layouts & compound walls</td>
                    </tr>
                    <tr>
                        <td style="padding: 16px 20px; font-weight: 600; color: var(--color-text-primary);">Manhole Cover Plates</td>
                        <td style="padding: 16px 20px;">IS 12592 : 2002</td>
                        <td style="padding: 16px 20px;">M-30 to M-35</td>
                        <td style="padding: 16px 20px;">Fe 500 Pre-stressed</td>
                        <td style="padding: 16px 20px;">Municipal sewer chambers & street gullies</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Sustainability & Circular Economy Section -->
<section style="border-top: 1px solid var(--color-border); background-color: var(--color-surface);">
    <div class="container circular-economy-grid">
        <!-- Left Column: CSS-based Circular Ecosystem Chart -->
        <div class="ecosystem-chart-container">
            <div class="circular-chart">
                <!-- Center Core -->
                <div class="chart-core">
                    <i class="fa-solid fa-arrows-spin core-recycle-icon"></i>
                    <span class="core-text">RS</span>
                </div>
                <!-- Nodes -->
                <div class="chart-node node-1 bg-accent-scrap" title="Scrap Collection">
                    <i class="fa-solid fa-dumpster"></i>
                </div>
                <div class="chart-node node-2 bg-accent-rcc" title="Civil Construction">
                    <i class="fa-solid fa-city"></i>
                </div>
                <div class="chart-node node-3 bg-accent-scrap" title="Smelting & Recycling">
                    <i class="fa-solid fa-recycle"></i>
                </div>
                <div class="chart-node node-4 bg-accent-rcc" title="Precast Manufacturing">
                    <i class="fa-solid fa-industry"></i>
                </div>
                
                <!-- Rotating SVG Arrows -->
                <svg class="chart-arrows-svg" viewBox="0 0 200 200">
                    <circle cx="100" cy="100" r="70" fill="none" stroke="url(#loop-gradient)" stroke-width="4" stroke-dasharray="10 15 30 15" class="rotating-arrow-path"/>
                    <defs>
                        <linearGradient id="loop-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="var(--color-scrap)" />
                            <stop offset="100%" stop-color="var(--color-rcc)" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>

        <!-- Right Column: Text Information -->
        <div class="circular-economy-content">
            <span class="section-subtitle subtitle-scrap">Our Eco-System Towards</span>
            <h2 class="section-title" style="margin-bottom: 25px;">Sustainability & Circular Economy</h2>
            <p style="color: var(--color-text-secondary); font-size: 1.05rem; line-height: 1.7; margin-bottom: 30px;">
                <strong>RS Enterprises</strong>, with its acute understanding of raw industrial waste and concrete production, has developed sustainable strategies and techniques to manage resources efficiently and cost-efficaciously. By recovering metals and manufacturing durable precast concrete, we actively close the loop of the product life cycle, reducing mining footprints and building a robust circular economy.
            </p>
            <a href="about.php" class="btn btn-primary-gradient">Learn More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<?php
require_once 'footer.php';
?>
