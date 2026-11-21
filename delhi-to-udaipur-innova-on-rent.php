<?php
// ============================================
// DELHI-TO-UDAIPUR-INNOVA-ON-RENT.PHP
// ============================================
include 'header.php';
require_once __DIR__ . '/pricing_config.php';

// Define route specific variables
$routeName = "Delhi to Udaipur";
$vehicleType = "Innova Crysta";
$distance = "660 km";
$travelTime = "10-11 hours";
$pricePerKm = "₹18/km";
$dailyPrice = "₹5,800/day";
$roundTripPrice = "₹26,360";
?>

<section class="route-detail-page">
    <div class="container">

        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <a href="index.php" style="color:#00b09b; text-decoration:none;"><i class="fas fa-home"></i> Home</a>
            <span><i class="fas fa-chevron-right" style="font-size:0.7rem;"></i></span>
            <a href="services.php" style="color:#00b09b; text-decoration:none;">Services</a>
            <span><i class="fas fa-chevron-right" style="font-size:0.7rem;"></i></span>
            <span style="color:#1e293b; font-weight:500;">Delhi to Udaipur Innova on Rent</span>
        </div>

        <!-- Hero Section -->
        <div class="hero-section">
            <!-- Decorative Element -->

            <div class="hero-content">
                <div class="badges">
                    <span class="popular">
                        <i class="fas fa-star"></i> Romantic City Route
                    </span>
                    <span>
                        <i class="fas fa-clock"></i> <?php echo $travelTime; ?>
                    </span>
                    <span>
                        <i class="fas fa-route"></i> <?php echo $distance; ?>
                    </span>
                    <span>
                        <i class="fas fa-umbrella-beach"></i> Lake City
                    </span>
                </div>
                <h1>
                    <?php echo $routeName; ?> <span class="highlight">Innova on Rent</span>
                </h1>
                <p class="hero-description">
                    Book a premium <?php echo $vehicleType; ?> for your Udaipur journey. Explore the romantic City of Lakes with our comfortable and reliable service.
                </p>
                <div class="btn-group">
                    <a href="#booking" class="btn btn-primary">
                        <i class="fas fa-calendar-check"></i> Book Now
                    </a>
                    <a href="#pricing" class="btn btn-outline">
                        <i class="fas fa-rupee-sign"></i> View Pricing
                    </a>
                </div>
            </div>

            <div class="hero-image">
                <img src="images/crystamain.jpg" alt="<?php echo $routeName; ?> Innova Crysta on Rent">
                <div class="rating-badge">
                    <i class="fas fa-check-circle"></i> 4.8 ★ (95+ Reviews)
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="stats-grid">
            <div>
                <div class="stat-value"><?php echo $distance; ?></div>
                <div class="stat-label">Total Distance</div>
            </div>
            <div>
                <div class="stat-value">10-11 hrs</div>
                <div class="stat-label">Travel Time</div>
            </div>
            <div>
                <div class="stat-value">₹20/km</div>
                <div class="stat-label">Starting Rate</div>
            </div>
            <div>
                <div class="stat-value">24/7</div>
                <div class="stat-label">Customer Support</div>
            </div>
        </div>

        <!-- Main Content Grid -->
        <div style="display:grid; grid-template-columns:2fr 1fr; gap:40px; margin-bottom:50px;">
            <!-- Left Column -->
            <div>
                <!-- About Section -->
                <div style="background:white; border-radius:20px; padding:35px; box-shadow:0 5px 20px rgba(0,0,0,0.05); margin-bottom:30px;">
                    <h2 style="font-size:1.8rem; color:#1e293b; margin-bottom:20px;">
                        <i class="fas fa-info-circle" style="color:#ec4899; margin-right:10px;"></i>
                        About <?php echo $routeName; ?> Route
                    </h2>
                    <p style="color:#475569; line-height:1.8; margin-bottom:15px;">
                        The <strong>Delhi to Udaipur</strong> route is one of India's most scenic drives, covering approximately 660 kilometers. 
                        Udaipur, known as the <strong>"City of Lakes"</strong> or the <strong>"Venice of the East"</strong>, is a romantic city surrounded by beautiful lakes and majestic palaces.
                    </p>
                    <p style="color:#475569; line-height:1.8; margin-bottom:15px;">
                        With our premium <strong>Innova Crysta on rent</strong>, you can enjoy a comfortable and hassle-free journey to Udaipur. 
                        Our professional drivers ensure a safe and timely arrival, allowing you to explore the city's royal heritage.
                    </p>
                    <div style="display:flex; gap:15px; flex-wrap:wrap; margin-top:20px;">
                        <div style="display:flex; align-items:center; gap:8px; background:#fce7f3; padding:8px 16px; border-radius:50px;">
                            <i class="fas fa-check-circle" style="color:#ec4899;"></i>
                            <span style="color:#475569; font-size:0.9rem;">7 & 8 Seater Available</span>
                        </div>
                        <div style="display:flex; align-items:center; gap:8px; background:#fce7f3; padding:8px 16px; border-radius:50px;">
                            <i class="fas fa-check-circle" style="color:#ec4899;"></i>
                            <span style="color:#475569; font-size:0.9rem;">Professional Drivers</span>
                        </div>
                        <div style="display:flex; align-items:center; gap:8px; background:#fce7f3; padding:8px 16px; border-radius:50px;">
                            <i class="fas fa-check-circle" style="color:#ec4899;"></i>
                            <span style="color:#475569; font-size:0.9rem;">Rajasthan Tour Experts</span>
                        </div>
                    </div>
                </div>

                <!-- Itinerary Section -->
                <div style="background:white; border-radius:20px; padding:35px; box-shadow:0 5px 20px rgba(0,0,0,0.05); margin-bottom:30px;">
                    <h2 style="font-size:1.8rem; color:#1e293b; margin-bottom:20px;">
                        <i class="fas fa-route" style="color:#fbbf24; margin-right:10px;"></i>
                        Suggested Itinerary
                    </h2>
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px;">
                        <div style="background:#f8fafc; padding:20px; border-radius:15px; border-left:4px solid #ec4899;">
                            <div style="font-weight:700; color:#ec4899; font-size:0.9rem;">Day 1</div>
                            <h4 style="font-size:1.1rem; color:#1e293b; margin:5px 0;">Delhi to Udaipur</h4>
                            <p style="color:#64748b; font-size:0.9rem; line-height:1.6;">Depart from Delhi, drive via NH48, reach Udaipur, check-in to hotel, enjoy evening at Lake Pichola.</p>
                        </div>
                        <div style="background:#f8fafc; padding:20px; border-radius:15px; border-left:4px solid #fbbf24;">
                            <div style="font-weight:700; color:#f59e0b; font-size:0.9rem;">Day 2</div>
                            <h4 style="font-size:1.1rem; color:#1e293b; margin:5px 0;">Udaipur Sightseeing</h4>
                            <p style="color:#64748b; font-size:0.9rem; line-height:1.6;">Visit City Palace, Lake Pichola, Jag Mandir, Fateh Sagar Lake, and Saheliyon ki Bari.</p>
                        </div>
                        <div style="background:#f8fafc; padding:20px; border-radius:15px; border-left:4px solid #3b82f6;">
                            <div style="font-weight:700; color:#3b82f6; font-size:0.9rem;">Day 3</div>
                            <h4 style="font-size:1.1rem; color:#1e293b; margin:5px 0;">Udaipur to Delhi</h4>
                            <p style="color:#64748b; font-size:0.9rem; line-height:1.6;">Visit Monsoon Palace, enjoy boat ride, drive back to Delhi with royal memories.</p>
                        </div>
                        <div style="background:#f8fafc; padding:20px; border-radius:15px; border-left:4px solid #8b5cf6;">
                            <div style="font-weight:700; color:#8b5cf6; font-size:0.9rem;">Customize</div>
                            <h4 style="font-size:1.1rem; color:#1e293b; margin:5px 0;">Flexible Options</h4>
                            <p style="color:#64748b; font-size:0.9rem; line-height:1.6;">Extend your trip to Mount Abu, Jodhpur, or continue to Jaipur and Jaisalmer.</p>
                        </div>
                    </div>
                </div>

                <!-- Vehicle Features -->
                <div style="background:white; border-radius:20px; padding:35px; box-shadow:0 5px 20px rgba(0,0,0,0.05);">
                    <h2 style="font-size:1.8rem; color:#1e293b; margin-bottom:20px;">
                        <i class="fas fa-car" style="color:#8b5cf6; margin-right:10px;"></i>
                        <?php echo $vehicleType; ?> Features
                    </h2>
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:15px;">
                        <div style="display:flex; align-items:center; gap:12px; padding:12px 16px; background:#f8fafc; border-radius:12px;">
                            <i class="fas fa-users" style="color:#ec4899; font-size:1.2rem;"></i>
                            <div><div style="font-weight:600; color:#1e293b;">7 & 8 Seater</div><div style="color:#64748b; font-size:0.85rem;">Spacious for family</div></div>
                        </div>
                        <div style="display:flex; align-items:center; gap:12px; padding:12px 16px; background:#f8fafc; border-radius:12px;">
                            <i class="fas fa-snowflake" style="color:#3b82f6; font-size:1.2rem;"></i>
                            <div><div style="font-weight:600; color:#1e293b;">AC & Climate Control</div><div style="color:#64748b; font-size:0.85rem;">Comfortable ride</div></div>
                        </div>
                        <div style="display:flex; align-items:center; gap:12px; padding:12px 16px; background:#f8fafc; border-radius:12px;">
                            <i class="fas fa-music" style="color:#ec4899; font-size:1.2rem;"></i>
                            <div><div style="font-weight:600; color:#1e293b;">Entertainment System</div><div style="color:#64748b; font-size:0.85rem;">Music & Video</div></div>
                        </div>
                        <div style="display:flex; align-items:center; gap:12px; padding:12px 16px; background:#f8fafc; border-radius:12px;">
                            <i class="fas fa-bolt" style="color:#fbbf24; font-size:1.2rem;"></i>
                            <div><div style="font-weight:600; color:#1e293b;">USB Charging</div><div style="color:#64748b; font-size:0.85rem;">Stay connected</div></div>
                        </div>
                        <div style="display:flex; align-items:center; gap:12px; padding:12px 16px; background:#f8fafc; border-radius:12px;">
                            <i class="fas fa-shield-alt" style="color:#00b09b; font-size:1.2rem;"></i>
                            <div><div style="font-weight:600; color:#1e293b;">Safety Features</div><div style="color:#64748b; font-size:0.85rem;">Airbags & ABS</div></div>
                        </div>
                        <div style="display:flex; align-items:center; gap:12px; padding:12px 16px; background:#f8fafc; border-radius:12px;">
                            <i class="fas fa-user-tie" style="color:#8b5cf6; font-size:1.2rem;"></i>
                            <div><div style="font-weight:600; color:#1e293b;">Professional Driver</div><div style="color:#64748b; font-size:0.85rem;">Rajasthan tour expert</div></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Sidebar -->
            <div>
                <!-- Quick Booking Form -->
                <div id="booking" style="background:white; border-radius:20px; padding:30px; box-shadow:0 5px 20px rgba(0,0,0,0.05); position:sticky; top:100px;">
                    <h3 style="font-size:1.4rem; color:#1e293b; margin-bottom:5px;">
                        <i class="fas fa-calendar-check" style="color:#ec4899;"></i> Book Now
                    </h3>
                    <p style="color:#64748b; font-size:0.9rem; margin-bottom:20px;">Book <?php echo $routeName; ?> Innova on Rent</p>

                    <form method="POST" action="contact.php">
                        <div style="margin-bottom:15px;">
                            <label style="display:block; font-weight:500; color:#1e293b; margin-bottom:5px; font-size:0.9rem;">Travel Date</label>
                            <input type="date" name="travel_date" style="width:100%; padding:12px 16px; border:1px solid #e2e8f0; border-radius:12px; font-family:'Poppins', sans-serif; font-size:0.95rem;">
                        </div>
                        <div style="margin-bottom:15px;">
                            <label style="display:block; font-weight:500; color:#1e293b; margin-bottom:5px; font-size:0.9rem;">Vehicle Type</label>
                            <select style="width:100%; padding:12px 16px; border:1px solid #e2e8f0; border-radius:12px; font-family:'Poppins', sans-serif; font-size:0.95rem; background:white;">
                                <option value="7 Seater">7 Seater Innova Crysta</option>
                                <option value="8 Seater">8 Seater Innova Crysta</option>
                                <option value="Luxury">Luxury Innova Crysta</option>
                            </select>
                        </div>
                        <div style="margin-bottom:15px;">
                            <label style="display:block; font-weight:500; color:#1e293b; margin-bottom:5px; font-size:0.9rem;">Trip Type</label>
                            <select style="width:100%; padding:12px 16px; border:1px solid #e2e8f0; border-radius:12px; font-family:'Poppins', sans-serif; font-size:0.95rem; background:white;">
                                <option value="One Way">One Way</option>
                                <option value="Round Trip" selected>Round Trip</option>
                                <option value="Custom">Custom</option>
                            </select>
                        </div>
                        <div style="margin-bottom:20px;">
                            <label style="display:block; font-weight:500; color:#1e293b; margin-bottom:5px; font-size:0.9rem;">Your Phone Number</label>
                            <input type="tel" name="phone" placeholder="+91 98765 43210" style="width:100%; padding:12px 16px; border:1px solid #e2e8f0; border-radius:12px; font-family:'Poppins', sans-serif; font-size:0.95rem;">
                        </div>
                        <input type="hidden" name="destination" value="<?php echo $routeName; ?>">
                        <input type="hidden" name="vehicle" value="<?php echo $vehicleType; ?>">
                        <button type="submit" name="contact_submit" class="btn btn-primary" style="width:100%; padding:14px; font-size:1rem; background:linear-gradient(135deg, #ec4899, #f472b6);">
                            <i class="fas fa-paper-plane" style="margin-right:10px;"></i> Send Inquiry
                        </button>
                    </form>

                    <div style="margin-top:15px; padding-top:15px; border-top:1px solid #e2e8f0;">
                        <div style="display:flex; justify-content:space-between; color:#475569; font-size:0.9rem;">
                            <span><i class="fas fa-phone" style="color:#ec4899;"></i> +91 7290885949</span>
                            <span><i class="fab fa-whatsapp" style="color:#25D366;"></i> WhatsApp</span>
                        </div>
                    </div>
                </div>

                <!-- Why Book With Us -->
                <div style="background:white; border-radius:20px; padding:25px; box-shadow:0 5px 20px rgba(0,0,0,0.05); margin-top:20px;">
                    <h4 style="font-size:1.1rem; color:#1e293b; margin-bottom:15px;">Why Book With Us?</h4>
                    <div style="display:flex; gap:12px; margin-bottom:12px;">
                        <i class="fas fa-check-circle" style="color:#ec4899; margin-top:2px;"></i>
                        <div><span style="font-weight:500;">Best Price Guarantee</span><br><span style="color:#64748b; font-size:0.85rem;">Competitive rates with no hidden charges</span></div>
                    </div>
                    <div style="display:flex; gap:12px; margin-bottom:12px;">
                        <i class="fas fa-check-circle" style="color:#ec4899; margin-top:2px;"></i>
                        <div><span style="font-weight:500;">Professional Drivers</span><br><span style="color:#64748b; font-size:0.85rem;">Experienced & courteous chauffeurs</span></div>
                    </div>
                    <div style="display:flex; gap:12px; margin-bottom:12px;">
                        <i class="fas fa-check-circle" style="color:#ec4899; margin-top:2px;"></i>
                        <div><span style="font-weight:500;">Well-Maintained Fleet</span><br><span style="color:#64748b; font-size:0.85rem;">Regularly serviced & sanitized vehicles</span></div>
                    </div>
                    <div style="display:flex; gap:12px;">
                        <i class="fas fa-check-circle" style="color:#ec4899; margin-top:2px;"></i>
                        <div><span style="font-weight:500;">24/7 Support</span><br><span style="color:#64748b; font-size:0.85rem;">Always available for your assistance</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pricing Section -->
        <div id="pricing" style="background:white; border-radius:30px; padding:40px; box-shadow:0 5px 20px rgba(0,0,0,0.05); margin-bottom:50px;">
            <h2 style="text-align:center; font-size:2rem; margin-bottom:10px; color:#1e293b;">
                <i class="fas fa-rupee-sign" style="color:#ec4899;"></i>
                Pricing for <?php echo $routeName; ?> Innova on Rent
            </h2>
            <p style="text-align:center; color:#64748b; margin-bottom:30px; font-size:1.05rem;">Choose the best option for your Udaipur journey</p>

            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:25px;">
                <!-- One Way Package -->
                <div style="background:#f8fafc; border-radius:20px; padding:30px; text-align:center; border:2px solid #e2e8f0; transition:all 0.3s;">
                    <div style="background:#ec489920; display:inline-block; padding:10px 20px; border-radius:50px; font-weight:600; font-size:0.85rem; color:#ec4899; margin-bottom:15px;">One Way</div>
                    <div style="font-size:2.5rem; font-weight:800; color:#1e293b; margin-bottom:5px;">₹<?php echo str_replace('₹', '', $pricePerKm); ?></div>
                    <div style="color:#64748b; font-size:0.9rem;">Per Kilometer</div>
                    <ul style="list-style:none; text-align:left; margin:20px 0; padding:0;">
                        <li style="padding:8px 0; border-bottom:1px solid #e2e8f0;"><i class="fas fa-check-circle" style="color:#ec4899; margin-right:10px;"></i> <?php echo $distance; ?> covered</li>
                        <li style="padding:8px 0; border-bottom:1px solid #e2e8f0;"><i class="fas fa-check-circle" style="color:#ec4899; margin-right:10px;"></i> <?php echo $travelTime; ?> travel time</li>
                        <li style="padding:8px 0; border-bottom:1px solid #e2e8f0;"><i class="fas fa-check-circle" style="color:#ec4899; margin-right:10px;"></i> Professional driver</li>
                        <li style="padding:8px 0;"><i class="fas fa-check-circle" style="color:#ec4899; margin-right:10px;"></i> Fuel included</li>
                    </ul>
                    <a href="#booking" class="btn btn-primary" style="width:100%; padding:12px; background:linear-gradient(135deg, #ec4899, #f472b6);">Book One Way</a>
                </div>

                <!-- Round Trip Package -->
                <div style="background:#f8fafc; border-radius:20px; padding:30px; text-align:center; border:2px solid #fbbf24; transition:all 0.3s; position:relative;">
                    <div style="position:absolute; top:-12px; left:50%; transform:translateX(-50%); background:linear-gradient(135deg, #fbbf24, #f59e0b); color:white; padding:5px 25px; border-radius:50px; font-size:0.8rem; font-weight:600;">BEST DEAL</div>
                    <div style="background:#fbbf2420; display:inline-block; padding:10px 20px; border-radius:50px; font-weight:600; font-size:0.85rem; color:#f59e0b; margin-bottom:15px;">Round Trip</div>
                    <div style="font-size:2.5rem; font-weight:800; color:#1e293b; margin-bottom:5px;"><?php echo $roundTripPrice; ?></div>
                    <div style="color:#64748b; font-size:0.9rem;">Total Package</div>
                    <ul style="list-style:none; text-align:left; margin:20px 0; padding:0;">
                        <li style="padding:8px 0; border-bottom:1px solid #e2e8f0;"><i class="fas fa-check-circle" style="color:#fbbf24; margin-right:10px;"></i> 1320 km total</li>
                        <li style="padding:8px 0; border-bottom:1px solid #e2e8f0;"><i class="fas fa-check-circle" style="color:#fbbf24; margin-right:10px;"></i> 3 days package</li>
                        <li style="padding:8px 0; border-bottom:1px solid #e2e8f0;"><i class="fas fa-check-circle" style="color:#fbbf24; margin-right:10px;"></i> Professional driver</li>
                        <li style="padding:8px 0;"><i class="fas fa-check-circle" style="color:#fbbf24; margin-right:10px;"></i> Fuel & toll included</li>
                    </ul>
                    <a href="#booking" class="btn btn-primary" style="width:100%; padding:12px; background:linear-gradient(135deg, #fbbf24, #f59e0b); color:#0f172a;">Book Round Trip</a>
                </div>

                <!-- Custom Package -->
                <div style="background:#f8fafc; border-radius:20px; padding:30px; text-align:center; border:2px solid #3b82f6; transition:all 0.3s;">
                    <div style="background:#3b82f620; display:inline-block; padding:10px 20px; border-radius:50px; font-weight:600; font-size:0.85rem; color:#3b82f6; margin-bottom:15px;">Custom</div>
                    <div style="font-size:2.5rem; font-weight:800; color:#1e293b; margin-bottom:5px;">Flexible</div>
                    <div style="color:#64748b; font-size:0.9rem;">Tailored to your needs</div>
                    <ul style="list-style:none; text-align:left; margin:20px 0; padding:0;">
                        <li style="padding:8px 0; border-bottom:1px solid #e2e8f0;"><i class="fas fa-check-circle" style="color:#3b82f6; margin-right:10px;"></i> Custom itinerary</li>
                        <li style="padding:8px 0; border-bottom:1px solid #e2e8f0;"><i class="fas fa-check-circle" style="color:#3b82f6; margin-right:10px;"></i> Multiple stops</li>
                        <li style="padding:8px 0; border-bottom:1px solid #e2e8f0;"><i class="fas fa-check-circle" style="color:#3b82f6; margin-right:10px;"></i> Flexible duration</li>
                        <li style="padding:8px 0;"><i class="fas fa-check-circle" style="color:#3b82f6; margin-right:10px;"></i> 24/7 support</li>
                    </ul>
                    <a href="#booking" class="btn btn-primary" style="width:100%; padding:12px; background:linear-gradient(135deg, #3b82f6, #6366f1);">Get Custom Quote</a>
                </div>
            </div>
        </div>

        <!-- ===== 3-COLUMN TABLE FROM SERVICES.PHP ===== -->
        <div style="background:linear-gradient(135deg, #f8fafc, #ffffff); border-radius:30px; padding:50px; margin:50px 0; box-shadow:0 5px 20px rgba(0,0,0,0.05);">
            <h2 style="text-align:center; font-size:2rem; margin-bottom:10px; color:#1e293b;">
                <i class="fas fa-table" style="color:#ec4899; margin-right:10px;"></i>
                Most Popular Destinations &amp; <span style="background:linear-gradient(135deg, #ec4899, #f472b6); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Tour Packages</span>
            </h2>
            <p style="text-align:center; color:#64748b; margin-bottom:40px; font-size:1.05rem;">
                Click on any destination to view Innova Crysta rental details
            </p>

            <div style="overflow-x:auto; border-radius:15px; box-shadow:0 5px 20px rgba(0,0,0,0.08);">
                <table style="width:100%; border-collapse:collapse; background:white; min-width:700px;">
                    <thead>
                        <tr style="background:linear-gradient(135deg, #0f172a, #1e293b); color:white;">
                            <th style="padding:18px 20px; text-align:left; font-weight:600; font-size:1rem; border-bottom:2px solid #334155; width:33.33%;">
                                <i class="fas fa-star" style="color:#fbbf24; margin-right:8px;"></i> Most Popular Destinations
                            </th>
                            <th style="padding:18px 20px; text-align:left; font-weight:600; font-size:1rem; border-bottom:2px solid #334155; width:33.33%;">
                                <i class="fas fa-route" style="color:#3b82f6; margin-right:8px;"></i> Famous Routes
                            </th>
                            <th style="padding:18px 20px; text-align:left; font-weight:600; font-size:1rem; border-bottom:2px solid #334155; width:33.33%;">
                                <i class="fas fa-users" style="color:#ec4899; margin-right:8px;"></i> Family Tour Packages
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // ===== DESTINATION DATA WITH SEO-FRIENDLY URLS =====
                        $popularDestinations = [
                            'Delhi to Agra Innova on Rent' => 'delhi-to-agra-innova-on-rent',
                            'Delhi to Haridwar Innova on Rent' => 'delhi-to-haridwar-innova-on-rent',
                            'Delhi to Manali Innova on Rent' => 'delhi-to-manali-innova-on-rent',
                            'Delhi to Dharamshala Innova on Rent' => 'delhi-to-dharamshala-innova-on-rent',
                            'Delhi to Nainital Innova on Rent' => 'delhi-to-nainital-innova-on-rent',
                            'Delhi to Amritsar Innova on Rent' => 'delhi-to-amritsar-innova-on-rent',
                            'Delhi to Jaipur Innova on Rent' => 'delhi-to-jaipur-innova-on-rent',
                            'Delhi to Udaipur Innova on Rent' => 'delhi-to-udaipur-innova-on-rent',
                            'Delhi to Lucknow Innova on Rent' => 'delhi-to-lucknow-innova-on-rent'
                        ];

                        $famousRoutes = [
                            'Delhi to Jaipur Innova on Rent' => 'delhi-to-jaipur-innova-on-rent',
                            'Delhi to Chandigarh Innova on Rent' => 'delhi-to-chandigarh-innova-on-rent',
                            'Delhi to Rishikesh Innova on Rent' => 'delhi-to-rishikesh-innova-on-rent',
                            'Delhi to Dehradun Innova on Rent' => 'delhi-to-dehradun-innova-on-rent',
                            'Delhi to Shimla Innova on Rent' => 'delhi-to-shimla-innova-on-rent',
                            'Delhi to Mussoorie Innova on Rent' => 'delhi-to-mussoorie-innova-on-rent',
                            'Delhi to Agra Innova on Rent' => 'delhi-to-agra-innova-on-rent',
                            'Delhi to Jodhpur Innova on Rent' => 'delhi-to-jodhpur-innova-on-rent',
                            'Delhi to Varanasi Innova on Rent' => 'delhi-to-varanasi-innova-on-rent'
                        ];

                        $tourPackages = [
                            'Char Dham Innova Package' => 'char-dham-innova-package',
                            'Himachal Innova Package' => 'himachal-innova-package',
                            'Kashmir Innova Package' => 'kashmir-innova-package',
                            'Leh-Ladakh Innova Package' => 'leh-ladakh-innova-package',
                            'Rajasthan Innova Package' => 'rajasthan-innova-package',
                            'Uttarakhand Innova Package' => 'uttarakhand-innova-package',
                            'Golden Triangle Innova Package' => 'golden-triangle-innova-package',
                            'Wildlife Innova Package' => 'wildlife-innova-package',
                            'Pilgrimage Innova Package' => 'pilgrimage-innova-package'
                        ];

                        // Convert to arrays for iteration
                        $popularKeys = array_keys($popularDestinations);
                        $famousKeys = array_keys($famousRoutes);
                        $tourKeys = array_keys($tourPackages);

                        $maxRows = max(count($popularKeys), count($famousKeys), count($tourKeys));

                        for ($i = 0; $i < $maxRows; $i++):
                            $bgColor = $i % 2 == 0 ? 'white' : '#f8fafc';
                    ?>
                        <tr style="background:<?php echo $bgColor; ?>; transition:background 0.2s;">
                            <!-- Column 1: Popular Destinations -->
                            <td style="padding:14px 18px; border-bottom:1px solid #e2e8f0;">
                                <?php if (isset($popularKeys[$i])): 
                                    $name = $popularKeys[$i];
                                    $url = $popularDestinations[$name];
                                ?>
                                <a href="<?php echo $url; ?>.php" style="display:block; text-decoration:none; color:#1e293b; font-weight:500; font-size:0.95rem; transition:all 0.3s; padding:5px 0;">
                                    <i class="fas fa-map-pin" style="color:#00b09b; margin-right:10px; font-size:0.8rem;"></i>
                                    <?php echo $name; ?>
                                </a>
                                <?php else: ?>
                                <span style="color:#e2e8f0;">&nbsp;</span>
                                <?php endif; ?>
                            </td>
                            <!-- Column 2: Famous Routes -->
                            <td style="padding:14px 18px; border-bottom:1px solid #e2e8f0;">
                                <?php if (isset($famousKeys[$i])): 
                                    $name = $famousKeys[$i];
                                    $url = $famousRoutes[$name];
                                ?>
                                <a href="<?php echo $url; ?>.php" style="display:block; text-decoration:none; color:#1e293b; font-weight:500; font-size:0.95rem; transition:all 0.3s; padding:5px 0;">
                                    <i class="fas fa-route" style="color:#3b82f6; margin-right:10px; font-size:0.8rem;"></i>
                                    <?php echo $name; ?>
                                </a>
                                <?php else: ?>
                                <span style="color:#e2e8f0;">&nbsp;</span>
                                <?php endif; ?>
                            </td>
                            <!-- Column 3: Family Tour Packages -->
                            <td style="padding:14px 18px; border-bottom:1px solid #e2e8f0;">
                                <?php if (isset($tourKeys[$i])): 
                                    $name = $tourKeys[$i];
                                    $url = $tourPackages[$name];
                                ?>
                                <a href="<?php echo $url; ?>.php" style="display:block; text-decoration:none; color:#1e293b; font-weight:500; font-size:0.95rem; transition:all 0.3s; padding:5px 0;">
                                    <i class="fas fa-box" style="color:#ec4899; margin-right:10px; font-size:0.8rem;"></i>
                                    <?php echo $name; ?>
                                </a>
                                <?php else: ?>
                                <span style="color:#e2e8f0;">&nbsp;</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            </div>

            <!-- Table Footer Notes -->
            <div style="display:flex; flex-wrap:wrap; gap:20px; margin-top:25px; padding:20px; background:white; border-radius:15px; box-shadow:0 5px 15px rgba(0,0,0,0.05);">
                <div style="display:flex; align-items:center; gap:10px;">
                    <i class="fas fa-car" style="color:#ec4899;"></i>
                    <span style="color:#475569; font-size:0.9rem;">Innova Crysta 7 & 8 Seater available</span>
                </div>
                <div style="display:flex; align-items:center; gap:10px;">
                    <i class="fas fa-check-circle" style="color:#ec4899;"></i>
                    <span style="color:#475569; font-size:0.9rem;">Fuel & Driver Included</span>
                </div>
                <div style="display:flex; align-items:center; gap:10px;">
                    <i class="fas fa-clock" style="color:#f59e0b;"></i>
                    <span style="color:#475569; font-size:0.9rem;">24/7 Customer Support</span>
                </div>
                <div style="display:flex; align-items:center; gap:10px;">
                    <i class="fas fa-umbrella-beach" style="color:#ec4899;"></i>
                    <span style="color:#475569; font-size:0.9rem;">Rajasthan Tour Experts</span>
                </div>
            </div>
        </div>

        <!-- Reviews Section -->
        <div style="background:white; border-radius:30px; padding:40px; box-shadow:0 5px 20px rgba(0,0,0,0.05); margin-bottom:50px;">
            <h2 style="font-size:1.8rem; color:#1e293b; margin-bottom:20px; text-align:center;">
                <i class="fas fa-star" style="color:#fbbf24;"></i>
                Customer Reviews
            </h2>
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:25px;">
                <div style="background:#f8fafc; padding:20px; border-radius:15px;">
                    <div style="color:#fbbf24; margin-bottom:8px;">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p style="color:#475569; font-style:italic; margin-bottom:10px;">"Udaipur trip was magical! The Innova was comfortable and the driver made the long journey enjoyable."</p>
                    <div style="font-weight:600; color:#1e293b;">Innova Crysta Rental Delhi</div>
                    <div style="color:#94a3b8; font-size:0.85rem;">Delhi • 5 Trips</div>
                </div>
                <div style="background:#f8fafc; padding:20px; border-radius:15px;">
                    <div style="color:#fbbf24; margin-bottom:8px;">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p style="color:#475569; font-style:italic; margin-bottom:10px;">"Perfect honeymoon trip! The 8-seater was spacious and the driver was very professional and courteous."</p>
                    <div style="font-weight:600; color:#1e293b;">Toyota Innova Crysta on Rent Delhi</div>
                    <div style="color:#94a3b8; font-size:0.85rem;">Gurgaon • 2 Trips</div>
                </div>
                <div style="background:#f8fafc; padding:20px; border-radius:15px;">
                    <div style="color:#fbbf24; margin-bottom:8px;">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p style="color:#475569; font-style:italic; margin-bottom:10px;">"Excellent service! The driver was very professional and made our Udaipur sightseeing memorable."</p>
                    <div style="font-weight:600; color:#1e293b;">Luxury Crysta on Rent Delhi</div>
                    <div style="color:#94a3b8; font-size:0.85rem;">Noida • 6 Trips</div>
                </div>
            </div>
        </div>

        <!-- FAQs Section -->
        <div style="background:white; border-radius:30px; padding:40px; box-shadow:0 5px 20px rgba(0,0,0,0.05); margin-bottom:50px;">
            <h2 style="font-size:1.8rem; color:#1e293b; margin-bottom:20px; text-align:center;">
                <i class="fas fa-question-circle" style="color:#ec4899;"></i>
                Frequently Asked Questions
            </h2>
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px;">
                <div style="padding:20px; background:#f8fafc; border-radius:15px;">
                    <h4 style="color:#1e293b; margin-bottom:8px;">What is the distance from Delhi to Udaipur?</h4>
                    <p style="color:#64748b; font-size:0.95rem;">The distance from Delhi to Udaipur is approximately 660 km via NH48.</p>
                </div>
                <div style="padding:20px; background:#f8fafc; border-radius:15px;">
                    <h4 style="color:#1e293b; margin-bottom:8px;">How much does Innova Crysta cost for Delhi to Udaipur?</h4>
                    <p style="color:#64748b; font-size:0.95rem;">Starting from ₹20/km for one way or ₹6,500/day for round trips. Custom packages also available.</p>
                </div>
                <div style="padding:20px; background:#f8fafc; border-radius:15px;">
                    <h4 style="color:#1e293b; margin-bottom:8px;">How long does it take to reach Udaipur from Delhi?</h4>
                    <p style="color:#64748b; font-size:0.95rem;">The journey typically takes 10-11 hours depending on traffic and road conditions.</p>
                </div>
                <div style="padding:20px; background:#f8fafc; border-radius:15px;">
                    <h4 style="color:#1e293b; margin-bottom:8px;">What are the must-visit places in Udaipur?</h4>
                    <p style="color:#64748b; font-size:0.95rem;">City Palace, Lake Pichola, Jag Mandir, Fateh Sagar Lake, Saheliyon ki Bari, and Monsoon Palace.</p>
                </div>
                <div style="padding:20px; background:#f8fafc; border-radius:15px;">
                    <h4 style="color:#1e293b; margin-bottom:8px;">Can I visit Mount Abu with this booking?</h4>
                    <p style="color:#64748b; font-size:0.95rem;">Yes, you can customize your itinerary to include Mount Abu, Jodhpur, and other destinations.</p>
                </div>
                <div style="padding:20px; background:#f8fafc; border-radius:15px;">
                    <h4 style="color:#1e293b; margin-bottom:8px;">What is the best time to visit Udaipur?</h4>
                    <p style="color:#64748b; font-size:0.95rem;">October to March is the best time to visit Udaipur with pleasant weather for sightseeing.</p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div style="background:linear-gradient(135deg, #0f172a, #1e293b); border-radius:30px; padding:50px; text-align:center;">
            <h2 style="font-size:2rem; color:white; margin-bottom:15px;">Ready to Book Your Udaipur Journey?</h2>
            <p style="color:#94a3b8; margin-bottom:30px; font-size:1.1rem; max-width:600px; margin-left:auto; margin-right:auto;">
                Experience the romantic charm of City of Lakes with our premium Innova Crysta rental service. Book now for the best rates.
            </p>
            <div style="display:flex; gap:15px; justify-content:center; flex-wrap:wrap;">
                <a href="#booking" class="btn btn-primary" style="background:linear-gradient(135deg, #ec4899, #f472b6); color:white; padding:15px 40px; font-size:1.1rem;">
                    <i class="fas fa-calendar-check" style="margin-right:10px;"></i> Book Now
                </a>
                <a href="tel:+917290885949" class="btn btn-outline" style="border-color:#ec4899; color:#ec4899; padding:15px 40px; font-size:1.1rem;">
                    <i class="fas fa-phone" style="margin-right:10px;"></i> Call for Availability
                </a>
            </div>
        </div>

    </div>
</section>

<style>
    .route-detail-page .btn {
        transition: all 0.3s ease;
    }
    .route-detail-page .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
    .route-detail-page .pricing-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    .route-detail-page table tbody tr:hover {
        background: #f1f5f9 !important;
    }
    .route-detail-page table tbody tr td a:hover {
        color: #ec4899 !important;
        padding-left: 5px !important;
    }
    @media (max-width: 992px) {
        .route-detail-page .main-grid {
            grid-template-columns: 1fr !important;
        }
        .route-detail-page .itinerary-grid {
            grid-template-columns: 1fr !important;
        }
        .route-detail-page .faq-grid {
            grid-template-columns: 1fr !important;
        }
    }
    @media (max-width: 768px) {
        .route-detail-page .hero-section {
            flex-direction: column;
            text-align: center;
            padding: 30px !important;
        }
        .route-detail-page .hero-section h1 {
            font-size: 2rem !important;
        }
        .route-detail-page .hero-section .hero-image {
            flex: 1 !important;
            max-width: 100%;
        }
        .route-detail-page .stats-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
        .route-detail-page .feature-grid {
            grid-template-columns: 1fr !important;
        }
        .route-detail-page .pricing-grid {
            grid-template-columns: 1fr !important;
        }
        .route-detail-page .review-grid {
            grid-template-columns: 1fr !important;
        }
        .route-detail-page .sidebar-sticky {
            position: static !important;
        }
        .route-detail-page table {
            font-size: 0.85rem;
        }
        .route-detail-page table td, 
        .route-detail-page table th {
            padding: 10px 12px !important;
        }
    }
    @media (max-width: 480px) {
        .route-detail-page .stats-grid {
            grid-template-columns: 1fr 1fr !important;
        }
        .route-detail-page .stats-grid > div {
            padding: 15px !important;
        }
        .route-detail-page .stats-grid > div div:first-child {
            font-size: 1.5rem !important;
        }
        .route-detail-page table td, 
        .route-detail-page table th {
            padding: 8px 10px !important;
            font-size: 0.75rem !important;
        }
        .route-detail-page table td a {
            font-size: 0.75rem !important;
        }
    }
</style>

<?php include 'seo_keywords.php'; ?>
<?php include 'footer.php'; ?>