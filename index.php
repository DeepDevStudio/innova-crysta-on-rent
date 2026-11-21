<?php include 'header.php'; ?>
<?php
// Initialize variables for form feedback
$success_message = '';
$error_messages = [];

// WhatsApp number (include country code without '+' or spaces)
$whatsapp_number = '917290885949'; // +91 7290885949

// PHP Form Handling (unchanged)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    // Honeypot check (anti-spam)
    if (!empty($_POST['honeypot'])) {
        $success_message = "Thank you for reaching out. We'll get back to you soon!";
    } else {
        $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
        $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
        $phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING));
        $travel_date = trim(filter_input(INPUT_POST, 'travel_date', FILTER_SANITIZE_STRING));
        $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));

        if (empty($name)) {
            $error_messages[] = "Name is required.";
        }
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_messages[] = "Valid email is required.";
        }
        if (empty($phone)) {
            $error_messages[] = "Phone number is required.";
        }
        if (!empty($travel_date) && !preg_match('/^\d{4}-\d{2}-\d{2}$/', $travel_date)) {
            $error_messages[] = "Invalid date format.";
        }

        if (empty($error_messages)) {
            $message_text = "New Booking Inquiry - Innova Crysta on Rent Delhi:\n";
            $message_text .= "Name: $name\n";
            $message_text .= "Email: $email\n";
            $message_text .= "Phone: $phone\n";
            $message_text .= "Travel Date: " . (!empty($travel_date) ? $travel_date : "Not specified") . "\n";
            $message_text .= "Message: $message";

            $encoded_message = rawurlencode($message_text);
            $whatsapp_url = "https://wa.me/$whatsapp_number?text=$encoded_message";
            header("Location: $whatsapp_url");
            exit;
        }
    }
}
?>
<?php
require_once __DIR__ . '/pricing_config.php';

// Popular routes: distance is read from each route page so the "from" fare here
// is exactly the 1-day 7-seater fare that the route page itself shows.
$popular_routes = [
    ['slug' => 'agra',        'name' => 'Agra',        'img' => 'images/blogs/delhi-to-agra.jpg',        'tag' => 'Taj Mahal'],
    ['slug' => 'jaipur',      'name' => 'Jaipur',      'img' => 'images/blogs/delhi-to-jaipur.jpg',      'tag' => 'Pink City'],
    ['slug' => 'rishikesh',   'name' => 'Rishikesh',   'img' => 'images/blogs/delhi-to-rishikesh.jpg',   'tag' => 'Yoga Capital'],
    ['slug' => 'shimla',      'name' => 'Shimla',      'img' => 'images/blogs/delhi-to-shimla.jpg',      'tag' => 'Hill Station'],
    ['slug' => 'manali',      'name' => 'Manali',      'img' => 'images/blogs/delhi-to-manali.jpg',      'tag' => 'Himalayas'],
    ['slug' => 'amritsar',    'name' => 'Amritsar',    'img' => 'images/blogs/delhi-to-amritsar.jpg',    'tag' => 'Golden Temple'],
    ['slug' => 'chandigarh',  'name' => 'Chandigarh',  'img' => 'images/blogs/delhi-to-chandigarh.jpg',  'tag' => 'City Beautiful'],
    ['slug' => 'jim-corbett', 'name' => 'Jim Corbett', 'img' => 'images/blogs/delhi-to-jim-corbett.jpg', 'tag' => 'Wildlife'],
];
foreach ($popular_routes as &$r) {
    $r['url'] = 'delhi-to-' . $r['slug'] . '.php';
    $r['from'] = null;
    $src = @file_get_contents(__DIR__ . '/' . $r['url']);
    if ($src && preg_match('/^\$distance\s*=\s*(\d+)/m', $src, $m)) {
        $fleet = getFleetVehiclesPricing(((int)$m[1]) * 2);
        $r['from'] = $fleet['crysta_7']['price_1day'] ?? null;
    }
}
unset($r);

$tour_packages = [
    ['url' => 'golden-triangle-innova-package.php', 'name' => 'Golden Triangle',  'sub' => 'Delhi · Agra · Jaipur',        'img' => 'images/blogs/delhi-to-jaipur.jpg'],
    ['url' => 'char-dham-innova-package.php',       'name' => 'Char Dham Yatra',  'sub' => 'Yamunotri to Kedarnath',       'img' => 'images/site/kedarnath.jpg'],
    ['url' => 'himachal-innova-package.php',        'name' => 'Himachal',         'sub' => 'Shimla · Manali · Dharamshala', 'img' => 'images/blogs/delhi-to-shimla.jpg'],
    ['url' => 'kashmir-innova-package.php',         'name' => 'Kashmir',          'sub' => 'Srinagar · Gulmarg · Pahalgam', 'img' => 'images/site/kashmir-dal-lake.jpg'],
    ['url' => 'leh-ladakh-innova-package.php',      'name' => 'Leh Ladakh',       'sub' => 'Pangong · Nubra · Khardung La', 'img' => 'images/site/ladakh-pangong.jpg'],
    ['url' => 'rajasthan-innova-package.php',       'name' => 'Rajasthan',        'sub' => 'Udaipur · Jodhpur · Jaisalmer', 'img' => 'images/blogs/jaipur-to-udaipur.jpg'],
    ['url' => 'uttarakhand-innova-package.php',     'name' => 'Uttarakhand',      'sub' => 'Rishikesh · Mussoorie · Nainital', 'img' => 'images/blogs/delhi-to-rishikesh.jpg'],
    ['url' => 'pilgrimage-innova-package.php',      'name' => 'Pilgrimage Tours', 'sub' => 'Varanasi · Haridwar · Vrindavan', 'img' => 'images/blogs/delhi-to-varanasi.jpg'],
    ['url' => 'wildlife-innova-package.php',        'name' => 'Wildlife Safari',  'sub' => 'Jim Corbett · Ranthambore',      'img' => 'images/blogs/delhi-to-jim-corbett.jpg'],
];
?>
        <!-- ================= HERO ================= -->
        <section class="hp-hero" id="home">
            <div class="hp-hero-bg" style="background-image:url('images/blogs/delhi-to-agra.jpg');"></div>
            <div class="container hp-hero-inner">
                <div class="hp-hero-copy">
                    <span class="hp-eyebrow"><i class="fas fa-star"></i> 4.9/5 rating · 18,000+ happy clients</span>
                    <h1>Rent a Premium Innova Crysta in Delhi</h1>
                    <p>Experience comfortable and stylish travel with our Toyota Innova Crysta. Perfect for family trips, airport transfers, and corporate outings. Book now for a smooth journey!</p>
                    <ul class="hp-hero-points">
                        <li><i class="fas fa-user-tie"></i> Verified, uniformed chauffeurs</li>
                        <li><i class="fas fa-shield-alt"></i> Fully insured &amp; sanitised cars</li>
                        <li><i class="fas fa-headset"></i> 24/7 booking support</li>
                    </ul>
                    <div class="hp-hero-actions">
                        <a href="tel:+917290885949" class="hp-btn hp-btn-gold"><i class="fas fa-phone-alt"></i> Call +91 72908 85949</a>
                        <a href="#fleet" class="hp-btn hp-btn-ghost">View Fleet &amp; Fares</a>
                    </div>
                </div>

                <form class="hp-quote" id="quickQuote" autocomplete="on">
                    <div class="hp-quote-head">
                        <h2>Get an instant quote</h2>
                        <p>Reply on WhatsApp within minutes</p>
                    </div>
                    <div class="hp-tabs" role="tablist">
                        <button type="button" class="hp-tab active" data-trip="Outstation Round Trip">Outstation</button>
                        <button type="button" class="hp-tab" data-trip="One Way Drop">One Way</button>
                        <button type="button" class="hp-tab" data-trip="Local (Delhi NCR)">Local</button>
                        <button type="button" class="hp-tab" data-trip="Airport Transfer">Airport</button>
                    </div>
                    <div class="hp-field-row">
                        <label class="hp-field"><span>Pickup city</span>
                            <i class="fas fa-location-dot"></i><input type="text" name="from" value="Delhi" required>
                        </label>
                        <label class="hp-field"><span>Destination</span>
                            <i class="fas fa-flag-checkered"></i><input type="text" name="to" placeholder="e.g. Agra, Jaipur, Manali">
                        </label>
                    </div>
                    <div class="hp-field-row">
                        <label class="hp-field"><span>Travel date</span>
                            <i class="fas fa-calendar"></i><input type="date" name="date" required>
                        </label>
                        <label class="hp-field"><span>Vehicle</span>
                            <i class="fas fa-car-side"></i>
                            <select name="vehicle">
                                <option>7 Seater Innova Crysta</option>
                                <option>8 Seater Innova Crysta</option>
                                <option>Luxury Innova HyCross</option>
                            </select>
                        </label>
                    </div>
                    <button type="submit" class="hp-btn hp-btn-primary hp-btn-block"><i class="fab fa-whatsapp"></i> Get Fare on WhatsApp</button>
                    <p class="hp-quote-note"><i class="fas fa-lock"></i> No advance payment needed to enquire</p>
                </form>
            </div>
        </section>

        <!-- ================= TRUST BAR ================= -->
        <section class="hp-trust">
            <div class="container hp-trust-grid">
                <div><strong>20+</strong><span>Years of experience</span></div>
                <div><strong>18,000+</strong><span>Happy clients</span></div>
                <div><strong>600+</strong><span>Routes from Delhi</span></div>
                <div><strong>4.9<small>/5</small></strong><span>Average rating</span></div>
                <div><strong>24/7</strong><span>Customer support</span></div>
            </div>
        </section>

        <!-- ================= FLEET ================= -->
        <section class="hp-section" id="fleet">
            <div class="container">
                <div class="hp-head">
                    <span class="hp-kicker">Our Fleet</span>
                    <h2>Our Innova Crysta Fleet</h2>
                    <p>Late-model Toyota MPVs, chauffeur-driven and maintained to showroom standard.</p>
                </div>
                <div class="hp-fleet">
                    <article class="hp-car">
                        <div class="hp-car-img"><img src="images/crysta-1.jpg" alt="Innova Crysta for Religious Tour" loading="lazy"><span class="hp-badge">Most Booked</span></div>
                        <div class="hp-car-body">
                            <h3>7 Seater Innova Crysta</h3>
                            <ul class="hp-specs"><li><i class="fas fa-user"></i> 7 Seats</li><li><i class="fas fa-suitcase"></i> 4 Bags</li><li><i class="fas fa-gas-pump"></i> Diesel</li><li><i class="fas fa-snowflake"></i> AC</li></ul>
                            <ul class="hp-feat"><li>Captain seats</li><li>Premium sound system</li><li>USB charging ports</li></ul>
                            <div class="hp-car-foot">
                                <div class="hp-price"><span>Starting from</span><strong>₹18/km</strong><small>or ₹<?php echo number_format($FLEET_CONFIG['crysta_7']['base_price']); ?>/day · 250 km/day</small></div>
                                <a href="https://wa.me/917290885949?text=<?php echo rawurlencode('Hello, I want to book a 7 Seater Innova Crysta. Please share availability.'); ?>" target="_blank" rel="noopener" class="hp-btn hp-btn-primary">Book Now</a>
                            </div>
                        </div>
                    </article>
                    <article class="hp-car">
                        <div class="hp-car-img"><img src="images/crysta-2.jpg" alt="Innova Crysta on Rent in Noida" loading="lazy"><span class="hp-badge hp-badge-gold">Best Value</span></div>
                        <div class="hp-car-body">
                            <h3>8 Seater Innova Crysta</h3>
                            <ul class="hp-specs"><li><i class="fas fa-user"></i> 8 Seats</li><li><i class="fas fa-suitcase"></i> 5 Bags</li><li><i class="fas fa-gas-pump"></i> Diesel</li><li><i class="fas fa-snowflake"></i> AC</li></ul>
                            <ul class="hp-feat"><li>Reclining seats</li><li>Charging points</li><li>Large boot space</li></ul>
                            <div class="hp-car-foot">
                                <div class="hp-price"><span>Starting from</span><strong>₹20/km</strong><small>or ₹<?php echo number_format($FLEET_CONFIG['crysta_8']['base_price']); ?>/day · 250 km/day</small></div>
                                <a href="https://wa.me/917290885949?text=<?php echo rawurlencode('Hello, I want to book an 8 Seater Innova Crysta. Please share availability.'); ?>" target="_blank" rel="noopener" class="hp-btn hp-btn-primary">Book Now</a>
                            </div>
                        </div>
                    </article>
                    <article class="hp-car">
                        <div class="hp-car-img"><img src="images/crysta-3.jpg" alt="Innova Crysta Taxi Service Delhi" loading="lazy"><span class="hp-badge">Premium</span></div>
                        <div class="hp-car-body">
                            <h3>Luxury Innova HyCross</h3>
                            <ul class="hp-specs"><li><i class="fas fa-user"></i> 8 Seats</li><li><i class="fas fa-suitcase"></i> 5 Bags</li><li><i class="fas fa-gas-pump"></i> Diesel</li><li><i class="fas fa-snowflake"></i> AC</li></ul>
                            <ul class="hp-feat"><li>Reclining seats</li><li>Entertainment system</li><li>Large boot space</li></ul>
                            <div class="hp-car-foot">
                                <div class="hp-price"><span>Starting from</span><strong>₹25/km</strong><small>or ₹<?php echo number_format($FLEET_CONFIG['hycross']['base_price']); ?>/day · 250 km/day</small></div>
                                <a href="https://wa.me/917290885949?text=<?php echo rawurlencode('Hello, I want to book a Luxury Innova HyCross. Please share availability.'); ?>" target="_blank" rel="noopener" class="hp-btn hp-btn-primary">Book Now</a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="hp-center"><a href="fleet.php" class="hp-link">Compare all vehicles <i class="fas fa-arrow-right"></i></a></div>
            </div>
        </section>

        <!-- ================= POPULAR ROUTES ================= -->
        <section class="hp-section hp-alt" id="routes">
            <div class="container">
                <div class="hp-head hp-head-row">
                    <div>
                        <span class="hp-kicker">Outstation</span>
                        <h2>Popular routes from Delhi</h2>
                        <p>Round-trip fares with driver, for the 7 seater Innova Crysta.</p>
                    </div>
                    <a href="destinations.php" class="hp-link">View all 600+ routes <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="hp-routes">
                    <?php foreach ($popular_routes as $r): ?>
                    <a class="hp-route" href="<?php echo $r['url']; ?>">
                        <div class="hp-route-img"><img src="<?php echo $r['img']; ?>" alt="Delhi to <?php echo htmlspecialchars($r['name']); ?> Innova Crysta" loading="lazy"><span><?php echo htmlspecialchars($r['tag']); ?></span></div>
                        <div class="hp-route-body">
                            <h3>Delhi <i class="fas fa-arrow-right"></i> <?php echo htmlspecialchars($r['name']); ?></h3>
                            <?php if ($r['from']): ?>
                            <p>From <strong>₹<?php echo number_format($r['from']); ?></strong></p>
                            <?php else: ?>
                            <p>View fares</p>
                            <?php endif; ?>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ================= TOUR PACKAGES ================= -->
        <section class="hp-section" id="packages">
            <div class="container">
                <div class="hp-head">
                    <span class="hp-kicker">Holidays</span>
                    <h2>Tour packages by Innova Crysta</h2>
                    <p>Multi-day itineraries planned by our team, with an experienced driver for the whole trip.</p>
                </div>
                <div class="hp-packages">
                    <?php foreach ($tour_packages as $i => $p): ?>
                    <a class="hp-pkg<?php echo $i === 0 ? ' hp-pkg-lg' : ''; ?>" href="<?php echo $p['url']; ?>">
                        <img src="<?php echo $p['img']; ?>" alt="<?php echo htmlspecialchars($p['name']); ?> tour package by Innova Crysta" loading="lazy">
                        <div class="hp-pkg-overlay">
                            <span><?php echo htmlspecialchars($p['sub']); ?></span>
                            <h3><?php echo htmlspecialchars($p['name']); ?></h3>
                            <em>View package <i class="fas fa-arrow-right"></i></em>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ================= ABOUT ================= -->
        <section class="hp-section hp-alt" id="about">
            <div class="container hp-about">
                <div class="hp-about-media">
                    <img src="images/crysta-2.jpg" alt="Innova Crysta Hire in Delhi" loading="lazy">
                    <div class="hp-about-card">
                        <strong>20+</strong>
                        <span>years serving<br>Delhi NCR</span>
                    </div>
                </div>
                <div class="hp-about-copy">
                    <span class="hp-kicker">About Us</span>
                    <h2>About Innova Crysta on Rent Delhi</h2>
                    <p>We are the region's most trusted car rental service, specializing in premium Toyota vehicles. With a focus on comfort and reliability, our top-rated <strong>Innova Crysta rental in delhi</strong> caters to family trips, corporate events, and airport transfers. If you are looking for a seamless <strong>Innova Crysta booking in delhi</strong>, you are in the right place.</p>
                    <p>Our fleet is meticulously maintained, featuring spacious interiors, advanced safety features, and modern entertainment systems. For those seeking premium comfort, a <strong>luxury Innova Crysta on rent in delhi</strong> ensures a smooth and elegant ride. Whether you are comparing <strong>Innova Crysta rent delhi</strong> options for a weekend trip or simply searching for a reliable <strong>Innova Crysta near me</strong> for an immediate pickup, our experienced professional drivers guarantee a safe and pleasant journey every time.</p>
                    <ul class="hp-checks">
                        <li><i class="fas fa-circle-check"></i> 20+ years of excellence</li>
                        <li><i class="fas fa-circle-check"></i> 18000+ happy clients</li>
                        <li><i class="fas fa-circle-check"></i> Well-maintained fleet</li>
                        <li><i class="fas fa-circle-check"></i> 24/7 customer support</li>
                    </ul>
                    <a href="about.php" class="hp-btn hp-btn-primary">More about us</a>
                </div>
            </div>
        </section>

        <!-- ================= HOW IT WORKS ================= -->
        <section class="hp-section">
            <div class="container">
                <div class="hp-head">
                    <span class="hp-kicker">Simple Booking</span>
                    <h2>Book your ride in 3 easy steps</h2>
                </div>
                <div class="hp-steps">
                    <div class="hp-step"><span class="hp-step-n">1</span><i class="fas fa-route"></i><h3>Share your trip</h3><p>Tell us your pickup, destination and dates by call, WhatsApp or the quote form.</p></div>
                    <div class="hp-step"><span class="hp-step-n">2</span><i class="fas fa-file-invoice"></i><h3>Get a clear fare</h3><p>Receive a transparent quote with included kilometres. No hidden charges.</p></div>
                    <div class="hp-step"><span class="hp-step-n">3</span><i class="fas fa-car-side"></i><h3>Enjoy the ride</h3><p>Your chauffeur arrives on time in a clean, sanitised Innova Crysta.</p></div>
                </div>
            </div>
        </section>

        <!-- ================= SERVICES + WHY US ================= -->
        <section class="hp-section hp-dark" id="why-us">
            <div class="container">
                <div class="hp-head hp-head-light">
                    <span class="hp-kicker">Why Travel With Us</span>
                    <h2>Why Choose Us?</h2>
                    <p>Everything you expect from a premium chauffeur service, at honest prices.</p>
                </div>
                <div class="hp-why">
                    <div class="hp-why-item"><i class="fas fa-user-tie"></i><h3>Professional Driver</h3><p>Courteous, trained drivers who prioritize your safety and comfort.</p></div>
                    <div class="hp-why-item"><i class="fas fa-wind"></i><h3>Fully Air Conditioned</h3><p>Climate-controlled cabins for a relaxing journey.</p></div>
                    <div class="hp-why-item"><i class="fas fa-shield-alt"></i><h3>Safe &amp; Insured</h3><p>Fully insured fleet with all necessary permits and safety checks.</p></div>
                    <div class="hp-why-item"><i class="fas fa-clock"></i><h3>Punctual Service</h3><p>We value your time – guaranteed on-time pickups and drops.</p></div>
                    <div class="hp-why-item"><i class="fas fa-map-marked-alt"></i><h3>Local Expertise</h3><p>We know Delhi-NCR routes, traffic patterns, and scenic stops.</p></div>
                    <div class="hp-why-item"><i class="fas fa-rupee-sign"></i><h3>Transparent Pricing</h3><p>No hidden charges – what you see is what you pay.</p></div>
                    <div class="hp-why-item"><i class="fas fa-headset"></i><h3>24/7 Support</h3><p>We're always a call away for queries or emergencies.</p></div>
                    <div class="hp-why-item"><i class="fas fa-hand-sparkles"></i><h3>Immaculate Condition</h3><p>Each Innova is deep-cleaned and sanitized before every trip.</p></div>
                </div>
                <div class="hp-services">
                    <a href="services.php"><i class="fas fa-plane-departure"></i> Airport Transfers</a>
                    <a href="services.php"><i class="fas fa-road"></i> Outstation Trips</a>
                    <a href="services.php"><i class="fas fa-ring"></i> Wedding Cars</a>
                    <a href="services.php"><i class="fas fa-briefcase"></i> Corporate Travel</a>
                    <a href="services.php"><i class="fas fa-hourglass-half"></i> Hourly Rentals</a>
                    <a href="pilgrimage-innova-package.php"><i class="fas fa-om"></i> Pilgrimage Tours</a>
                </div>
            </div>
        </section>

        <!-- ================= TESTIMONIALS ================= -->
        <section class="hp-section" id="testimonials">
            <div class="container">
                <div class="hp-head hp-head-row">
                    <div>
                        <span class="hp-kicker">Reviews</span>
                        <h2>What Our Clients Say</h2>
                    </div>
                    <div class="hp-rating-summary">
                        <strong>4.9</strong>
                        <div><span class="hp-stars">★★★★★</span><small>Based on customer reviews</small></div>
                    </div>
                </div>
                <div class="hp-reviews">
                    <figure class="hp-review">
                        <span class="hp-stars">★★★★★</span>
                        <blockquote>"The Innova Crysta was spotless and very comfortable. Our trip to Agra was smooth and enjoyable. Highly recommend!"</blockquote>
                        <figcaption><span class="hp-avatar">RS</span><div><strong>Rahul Sharma</strong><small>Delhi</small></div></figcaption>
                    </figure>
                    <figure class="hp-review">
                        <span class="hp-stars">★★★★★</span>
                        <blockquote>"Excellent service! The 8-seater Innova was perfect for our family outing. Driver was very professional and polite."</blockquote>
                        <figcaption><span class="hp-avatar hp-avatar-gold">PS</span><div><strong>Priya Singh</strong><small>Gurgaon</small></div></figcaption>
                    </figure>
                    <figure class="hp-review">
                        <span class="hp-stars">★★★★★</span>
                        <blockquote>"On-time, clean, and comfortable. The car was in great condition. Will definitely book again for our next trip."</blockquote>
                        <figcaption><span class="hp-avatar">VV</span><div><strong>Vikram Verma</strong><small>Noida</small></div></figcaption>
                    </figure>
                </div>
                <div class="hp-center"><a href="testimonials.php" class="hp-link">Read more reviews <i class="fas fa-arrow-right"></i></a></div>
            </div>
        </section>

        <!-- ================= CONTACT ================= -->
        <section class="hp-section hp-alt" id="contact">
            <div class="container">
                <div class="hp-head">
                    <span class="hp-kicker">Contact</span>
                    <h2>Get a Free Quote</h2>
                    <p>Share your plan and our travel desk will call you back with the best fare.</p>
                </div>
                <div class="hp-contact">
                    <div class="hp-contact-info">
                        <h3>Let's plan your journey</h3>
                        <ul>
                            <li><i class="fas fa-location-dot"></i><div><strong>Office</strong>B-26, Rajeev Nagar, Near Radhey Krishna Mandir, Begumpur, New Delhi-110086, Opp. Rohini Sec-22</div></li>
                            <li><i class="fas fa-phone-alt"></i><div><strong>Phone</strong><a href="tel:+917290885949">+91 7290885949</a></div></li>
                            <li><i class="fas fa-envelope"></i><div><strong>Email</strong><a href="mailto:onrentinnovacrysta@gmail.com">onrentinnovacrysta@gmail.com</a></div></li>
                            <li><i class="fas fa-clock"></i><div><strong>Hours</strong>24/7 Support</div></li>
                        </ul>
                        <div class="hp-map">
                            <iframe title="Office location map" src="https://maps.google.com/maps?q=Rajeev%20Nagar%2C%20Begumpur%2C%20New%20Delhi%20110086&z=14&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="hp-contact-form">
                        <?php if (!empty($success_message)): ?>
                            <div class="alert alert-success"><?php echo htmlspecialchars($success_message); ?></div>
                        <?php endif; ?>
                        <?php if (!empty($error_messages)): ?>
                            <div class="alert alert-error">
                                <?php foreach ($error_messages as $err): ?>
                                    <p><?php echo htmlspecialchars($err); ?></p>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <form method="POST" action="#contact">
                            <div class="hp-form-grid">
                                <label class="hp-label">Full name *
                                    <input type="text" name="name" placeholder="Your full name" required value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                                </label>
                                <label class="hp-label">Phone number *
                                    <input type="tel" name="phone" placeholder="+91" required value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
                                </label>
                                <label class="hp-label">Email address *
                                    <input type="email" name="email" placeholder="you@example.com" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                                </label>
                                <label class="hp-label">Travel date
                                    <input type="date" name="travel_date" value="<?php echo isset($_POST['travel_date']) ? htmlspecialchars($_POST['travel_date']) : ''; ?>">
                                </label>
                                <label class="hp-label hp-span-2">Your requirements
                                    <textarea name="message" placeholder="Pickup, destination, number of passengers…"><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                                </label>
                            </div>
                            <div class="honeypot">
                                <input type="text" name="honeypot" value="">
                            </div>
                            <button type="submit" name="contact_submit" class="hp-btn hp-btn-primary hp-btn-block">Send Inquiry <i class="fas fa-paper-plane"></i></button>
                            <p class="hp-form-note"><i class="fas fa-shield-halved"></i> Your details are only used to respond to your enquiry.</p>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="hp-section hp-dest-table">
            <div class="container">
                <?php include 'destinations_table.php'; ?>
            </div>
        </section>

        <script>
        (function () {
            var form = document.getElementById('quickQuote');
            if (!form) return;
            var trip = 'Outstation Round Trip';
            var dateInput = form.querySelector('input[name="date"]');
            if (dateInput) dateInput.min = new Date().toISOString().split('T')[0];
            form.querySelectorAll('.hp-tab').forEach(function (tab) {
                tab.addEventListener('click', function () {
                    form.querySelectorAll('.hp-tab').forEach(function (t) { t.classList.remove('active'); });
                    tab.classList.add('active');
                    trip = tab.getAttribute('data-trip');
                });
            });
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                var f = form.elements;
                var msg = 'Hello, I need a quote for an Innova Crysta.' +
                    '\nTrip type: ' + trip +
                    '\nFrom: ' + f.from.value +
                    (f.to.value ? '\nTo: ' + f.to.value : '') +
                    '\nDate: ' + (f.date.value || 'Not decided') +
                    '\nVehicle: ' + f.vehicle.value;
                window.open('https://wa.me/917290885949?text=' + encodeURIComponent(msg), '_blank', 'noopener');
            });
        })();
        </script>

<?php include 'seo_keywords.php'; ?>
<?php include 'footer.php'; ?>
