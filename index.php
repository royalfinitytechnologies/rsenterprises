<?php
$pageTitle = "Home";
require_once 'header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-glow-1"></div>
    <div class="hero-glow-2"></div>
    <div class="container hero-grid">
        <div class="hero-content">
            <span class="section-subtitle subtitle-rcc">Industrial Excellence</span>
            <h1>High-Strength <span class="accent-gradient">RCC Products</span> & Sustainable <span class="accent-gradient">Scrap Solutions</span></h1>
            <p>We are a leading manufacturing and recycling firm, delivering heavy-duty precast concrete components alongside eco-friendly scrap collection, management, and recycling services.</p>
            <div class="hero-actions">
                <a href="rcc.php" class="btn btn-rcc"><i class="fa-solid fa-trowel-bricks"></i> RCC Products</a>
                <a href="contact.php" class="btn btn-scrap"><i class="fa-solid fa-recycle"></i> Sell Scrap</a>
                <a href="about.php" class="btn btn-outline">Our Story</a>
            </div>
        </div>
        <div class="hero-showcase">
            <div class="showcase-bg-box"></div>
            <div class="showcase-card">
                <div class="showcase-division">
                    <div class="showcase-icon scrap">
                        <i class="fa-solid fa-dumpster"></i>
                    </div>
                    <div class="showcase-info">
                        <h3>Scrap Metal Management</h3>
                        <p>Buying, sorting, and processing all types of ferrous and non-ferrous metal scrap to support the circular economy.</p>
                    </div>
                </div>
                <div class="showcase-division">
                    <div class="showcase-icon rcc">
                        <i class="fa-solid fa-trowel-bricks"></i>
                    </div>
                    <div class="showcase-info">
                        <h3>RCC Concrete Manufacturing</h3>
                        <p>Providing high-grade, durable reinforced cement concrete pipes, chambers, and boundary walls for structural projects.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Divisions Section -->
<section class="section-alt" id="divisions-section">
    <div class="container">
        <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
            <span class="section-subtitle subtitle-scrap">What We Do</span>
            <h2 class="section-title">Explore Our Two Specialized Divisions</h2>
            <p class="section-desc">Serving construction, civil engineering, and manufacturing sectors with reliable infrastructure products and sustainable recycling services.</p>
        </div>
        
        <div class="division-split">
            <!-- Scrap Division Card -->
            <div class="division-card scrap-div" id="scrap-section">
                <div class="div-header">
                    <span class="div-badge">Recycling Division</span>
                    <i class="fa-solid fa-recycle div-icon"></i>
                </div>
                <h3 class="div-title">Industrial & Commercial Scrap Services</h3>
                <p class="div-desc">We purchase structural steel, copper wiring, aluminum fixtures, and industrial machinery scraps at the highest market valuation rates. Our eco-friendly facility processes metal scraps efficiently.</p>
                <ul class="div-list">
                    <li><i class="fa-solid fa-circle-check"></i> Ferrous Scrap (Iron, Casting, Heavy Structural Steel)</li>
                    <li><i class="fa-solid fa-circle-check"></i> Non-Ferrous Scrap (Copper, Aluminum, Brass, Cables)</li>
                    <li><i class="fa-solid fa-circle-check"></i> Industrial Demolition & Scrap Clearance Services</li>
                    <li><i class="fa-solid fa-circle-check"></i> Instant weighing and immediate payments</li>
                </ul>
                <a href="contact.php?interest=scrap" class="btn btn-scrap">Inquire For Scrap Sell <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <!-- RCC Division Card -->
            <div class="division-card rcc-div" id="rcc-section">
                <div class="div-header">
                    <span class="div-badge">Manufacturing Division</span>
                    <i class="fa-solid fa-industry div-icon"></i>
                </div>
                <h3 class="div-title">Reinforced Cement Concrete (RCC)</h3>
                <p class="div-desc">We manufacture IS-code compliant precast concrete products designed to handle immense structural loads and stand the test of time. Ideal for sewerage, drainage, and infrastructure layouts.</p>
                <ul class="div-list">
                    <li><i class="fa-solid fa-circle-check"></i> NP2/NP3/NP4 Class RCC Hume Pipes</li>
                    <li><i class="fa-solid fa-circle-check"></i> Precast RCC Modular Boundary Fences</li>
                    <li><i class="fa-solid fa-circle-check"></i> RCC Manhole Cover plates & Gully Chambers</li>
                    <li><i class="fa-solid fa-circle-check"></i> Highly robust cement structural molds</li>
                </ul>
                <a href="rcc.php" class="btn btn-rcc">View RCC Catalog <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Popular Products Section -->
<section style="border-top: 1px solid var(--color-border); background-color: var(--color-bg);">
    <div class="container">
        <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
            <span class="section-subtitle subtitle-scrap">Catalog Highlights</span>
            <h2 class="section-title">Popular Products</h2>
            <p class="section-desc">Explore our top selling concrete precast fabrications and commercial recyclable waste scrap categories.</p>
        </div>

        <div class="rcc-grid">
            <!-- Product 1: Concrete Septic Tank -->
            <div class="rcc-product-card">
                <div style="height: 220px; overflow: hidden; display: flex; align-items: center; justify-content: center; background-color: var(--color-bg-alt);">
                    <img src="images/septic_tank.png" alt="Concrete Septic Tank" style="height: 100%; width: 100%; object-fit: cover;">
                </div>
                <div class="product-body">
                    <h3 class="product-title">Concrete Septic Tank</h3>
                    <p class="product-desc">Heavy-duty precast cylindrical 3000 Ltr septic tanks designed for sewage waste management and long durability.</p>
                    <div class="product-specs">
                        <div class="spec-row"><span class="spec-label">Price Rate:</span><span class="spec-val">₹ 1,500 / Unit</span></div>
                        <div class="spec-row"><span class="spec-label">Minimum Order:</span><span class="spec-val">10 Units</span></div>
                        <div class="spec-row"><span class="spec-label">Category:</span><span class="spec-val">RCC Precast</span></div>
                    </div>
                    <div class="product-footer">
                        <a href="contact.php?interest=rcc&product=Concrete-Septic-Tank" class="btn btn-rcc" style="width: 100%;"><i class="fa-solid fa-message"></i> Enquire Now</a>
                    </div>
                </div>
            </div>

            <!-- Product 2: Compound Wall -->
            <div class="rcc-product-card">
                <div style="height: 220px; overflow: hidden; display: flex; align-items: center; justify-content: center; background-color: var(--color-bg-alt);">
                    <img src="images/compound_wall.png" alt="Compound Wall Contractors" style="height: 100%; width: 100%; object-fit: cover;">
                </div>
                <div class="product-body">
                    <h3 class="product-title">Compound Wall Contracting</h3>
                    <p class="product-desc">Modular precast boundary walls fencing slabs installation for industrial facilities, compounds, and housing estates.</p>
                    <div class="product-specs">
                        <div class="spec-row"><span class="spec-label">Price Rate:</span><span class="spec-val">₹ 90 / Sq.ft</span></div>
                        <div class="spec-row"><span class="spec-label">Service Scope:</span><span class="spec-val">Fencing & Columns</span></div>
                        <div class="spec-row"><span class="spec-label">Category:</span><span class="spec-val">RCC Contracting</span></div>
                    </div>
                    <div class="product-footer">
                        <a href="contact.php?interest=rcc&product=Compound-Wall-Contracting" class="btn btn-scrap" style="width: 100%;"><i class="fa-solid fa-message"></i> Enquire Now</a>
                    </div>
                </div>
            </div>

            <!-- Product 3: Recyclable Paper Scrap -->
            <div class="rcc-product-card">
                <div style="height: 220px; overflow: hidden; display: flex; align-items: center; justify-content: center; background-color: var(--color-bg-alt);">
                    <img src="images/paper_scrap.png" alt="Recyclable Paper Scrap" style="height: 100%; width: 100%; object-fit: cover;">
                </div>
                <div class="product-body">
                    <h3 class="product-title">Recyclable Paper Scrap</h3>
                    <p class="product-desc">Industrial grade sorted paper waste, compressed corrugated cardboard, and bulk press printing office scraps.</p>
                    <div class="product-specs">
                        <div class="spec-row"><span class="spec-label">Price Rate:</span><span class="spec-val">₹ 12 / Kg</span></div>
                        <div class="spec-row"><span class="spec-label">Minimum Order:</span><span class="spec-val">2,000 Kg</span></div>
                        <div class="spec-row"><span class="spec-label">Category:</span><span class="spec-val">Paper Recycling</span></div>
                    </div>
                    <div class="product-footer">
                        <a href="contact.php?interest=scrap&product=Paper-Scrap" class="btn btn-rcc" style="width: 100%;"><i class="fa-solid fa-message"></i> Enquire Now</a>
                    </div>
                </div>
            </div>

            <!-- Product 4: Recyclable PVC Electric Wire Scrap -->
            <div class="rcc-product-card">
                <div style="height: 220px; overflow: hidden; display: flex; align-items: center; justify-content: center; background-color: var(--color-bg-alt);">
                    <img src="images/wire_scrap.png" alt="Recyclable PVC Electric Wire Scrap" style="height: 100%; width: 100%; object-fit: cover;">
                </div>
                <div class="product-body">
                    <h3 class="product-title">PVC Electric Wire Scrap</h3>
                    <p class="product-desc">High recovery electric cable copper scrap, sorting wire bundles, and aluminum wires sheathed in PVC insulation.</p>
                    <div class="product-specs">
                        <div class="spec-row"><span class="spec-label">Price Rate:</span><span class="spec-val">₹ 180 – ₹ 600 / Kg</span></div>
                        <div class="spec-row"><span class="spec-label">Valuation:</span><span class="spec-val">Based on metal recovery %</span></div>
                        <div class="spec-row"><span class="spec-label">Category:</span><span class="spec-val">Cable Metal Scrap</span></div>
                    </div>
                    <div class="product-footer">
                        <a href="contact.php?interest=scrap&product=Electric-Wire-Scrap" class="btn btn-scrap" style="width: 100%;"><i class="fa-solid fa-message"></i> Enquire Now</a>
                    </div>
                </div>
            </div>

            <!-- Product 5: Recyclable Cast Iron Rail Scrap -->
            <div class="rcc-product-card">
                <div style="height: 220px; overflow: hidden; display: flex; align-items: center; justify-content: center; background-color: var(--color-bg-alt);">
                    <img src="images/rail_scrap.png" alt="Recyclable Cast Iron Rail Scrap" style="height: 100%; width: 100%; object-fit: cover;">
                </div>
                <div class="product-body">
                    <h3 class="product-title">Cast Iron Rail Scrap</h3>
                    <p class="product-desc">Heavy-duty solid cast iron rail track scrap segments, highly graded and sorted for steel manufacturing plants.</p>
                    <div class="product-specs">
                        <div class="spec-row"><span class="spec-label">Price Rate:</span><span class="spec-val">₹ 30 / Kg</span></div>
                        <div class="spec-row"><span class="spec-label">Material:</span><span class="spec-val">Cast Iron</span></div>
                        <div class="spec-row"><span class="spec-label">Physical State:</span><span class="spec-val">Solid Track Sections</span></div>
                    </div>
                    <div class="product-footer">
                        <a href="contact.php?interest=scrap&product=Cast-Iron-Rail-Scrap" class="btn btn-rcc" style="width: 100%;"><i class="fa-solid fa-message"></i> Enquire Now</a>
                    </div>
                </div>
            </div>

            <!-- Product 6: Recyclable Stainless Steel Scrap -->
            <div class="rcc-product-card">
                <div style="height: 220px; overflow: hidden; display: flex; align-items: center; justify-content: center; background-color: var(--color-bg-alt);">
                    <img src="images/stainless_scrap.png" alt="Recyclable Stainless Steel Scrap" style="height: 100%; width: 100%; object-fit: cover;">
                </div>
                <div class="product-body">
                    <h3 class="product-title">Stainless Steel Scrap</h3>
                    <p class="product-desc">Premium clean recyclable stainless steel scraps, turnings, and solid sheets from fabrication workshops.</p>
                    <div class="product-specs">
                        <div class="spec-row"><span class="spec-label">Price Rate:</span><span class="spec-val">₹ 140 / Kg</span></div>
                        <div class="spec-row"><span class="spec-label">Material Grade:</span><span class="spec-val">SS 304 / SS 316</span></div>
                        <div class="spec-row"><span class="spec-label">Physical State:</span><span class="spec-val">Solid Shavings & Solids</span></div>
                    </div>
                    <div class="product-footer">
                        <a href="contact.php?interest=scrap&product=Stainless-Steel-Scrap" class="btn btn-scrap" style="width: 100%;"><i class="fa-solid fa-message"></i> Enquire Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section>
    <div class="container">
        <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
            <span class="section-subtitle subtitle-rcc">Our Strengths</span>
            <h2 class="section-title">Why Partner With RS Enterprises?</h2>
            <p class="section-desc">We combine raw material recycling expertise with advanced manufacturing to provide seamless, end-to-end industrial services.</p>
        </div>
        
        <div class="why-grid">
            <!-- Card 1 -->
            <div class="flip-card theme-blue">
                <div class="flip-card-inner">
                    <!-- Front -->
                    <div class="flip-card-front">
                        <div class="why-icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <h3 class="why-title">Certified Quality</h3>
                        <span class="flip-hint">Hover to read <i class="fa-solid fa-arrow-rotate-right"></i></span>
                    </div>
                    <!-- Back -->
                    <div class="flip-card-back">
                        <h3 class="why-title text-accent-rcc">Certified Quality</h3>
                        <p class="why-desc">Our RCC items strictly follow national grade standards, ensuring heavy load capacities and decades of durability.</p>
                        <a href="rcc.php" class="btn-link">View Standards <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="flip-card theme-red">
                <div class="flip-card-inner">
                    <!-- Front -->
                    <div class="flip-card-front">
                        <div class="why-icon">
                            <i class="fa-solid fa-leaf"></i>
                        </div>
                        <h3 class="why-title">Eco-Friendly</h3>
                        <span class="flip-hint">Hover to read <i class="fa-solid fa-arrow-rotate-right"></i></span>
                    </div>
                    <!-- Back -->
                    <div class="flip-card-back">
                        <h3 class="why-title text-accent-scrap">Eco-Friendly</h3>
                        <p class="why-desc">We contribute directly to reducing metal mining footprints by diverting thousands of tons of metal scrap into smelting recycling streams.</p>
                        <a href="about.php" class="btn-link">Our Sustainability <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="flip-card theme-blue">
                <div class="flip-card-inner">
                    <!-- Front -->
                    <div class="flip-card-front">
                        <div class="why-icon">
                            <i class="fa-solid fa-truck-fast"></i>
                        </div>
                        <h3 class="why-title">Swift Logistics</h3>
                        <span class="flip-hint">Hover to read <i class="fa-solid fa-arrow-rotate-right"></i></span>
                    </div>
                    <!-- Back -->
                    <div class="flip-card-back">
                        <h3 class="why-title text-accent-rcc">Swift Logistics</h3>
                        <p class="why-desc">Equipped with heavy crane loaders and a logistics fleet, we guarantee on-time delivery of bulky concrete products and scrap retrieval.</p>
                        <a href="contact.php" class="btn-link">Request Delivery <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="flip-card theme-red">
                <div class="flip-card-inner">
                    <!-- Front -->
                    <div class="flip-card-front">
                        <div class="why-icon">
                            <i class="fa-solid fa-comments-dollar"></i>
                        </div>
                        <h3 class="why-title">Best Deal Rates</h3>
                        <span class="flip-hint">Hover to read <i class="fa-solid fa-arrow-rotate-right"></i></span>
                    </div>
                    <!-- Back -->
                    <div class="flip-card-back">
                        <h3 class="why-title text-accent-scrap">Best Deal Rates</h3>
                        <p class="why-desc">Get the best current spot-market value rates for your scrap materials with clear and honest digital weighing balances.</p>
                        <a href="contact.php?interest=scrap" class="btn-link">Get Scrap Quote <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="section-alt" style="border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
    <div class="container" style="text-align: center; max-width: 800px;">
        <span class="section-subtitle subtitle-scrap">Quick Inquiry</span>
        <h2 style="font-size: 2.3rem; margin-bottom: 20px;">Ready to Start Your Project or Recycle Scrap?</h2>
        <p style="color: var(--color-text-secondary); margin-bottom: 35px;">Submit an inquiry through our contact page to instantly chat with our commercial desk via WhatsApp. Get tailored product catalogs or scrap quotations.</p>
        <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
            <a href="contact.php" class="btn btn-primary-gradient"><i class="fa-solid fa-message"></i> Inquire Now</a>
            <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', WHATSAPP_PHONE); ?>" target="_blank" class="btn btn-outline"><i class="fa-brands fa-whatsapp text-accent-rcc"></i> Direct Chat</a>
        </div>
    </div>
</section>

<?php
require_once 'footer.php';
?>
