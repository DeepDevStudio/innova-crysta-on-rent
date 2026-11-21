<?php
// Initialize variables for form feedback
$success_message = '';
$error_messages = [];
$whatsapp_number = '917290885949';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    if (!empty($_POST['honeypot'])) {
        $success_message = "Thank you for reaching out. We'll get back to you soon!";
    } else {
        $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
        $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
        $phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING));
        $travel_date = trim(filter_input(INPUT_POST, 'travel_date', FILTER_SANITIZE_STRING));
        $trip_type = trim(filter_input(INPUT_POST, 'trip_type', FILTER_SANITIZE_STRING));
        $passengers = trim(filter_input(INPUT_POST, 'passengers', FILTER_SANITIZE_NUMBER_INT));
        $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));

        if (empty($name)) { $error_messages[] = "Name is required."; }
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) { $error_messages[] = "Valid email is required."; }
        if (empty($phone)) { $error_messages[] = "Phone number is required."; }
        if (!empty($travel_date) && !preg_match('/^\d{4}-\d{2}-\d{2}$/', $travel_date)) { $error_messages[] = "Invalid date format."; }

        if (empty($error_messages)) {
            $message_text = "New Booking Inquiry - Innova Crysta on Rent Delhi:\n";
            $message_text .= "Name: $name\n";
            $message_text .= "Email: $email\n";
            $message_text .= "Phone: $phone\n";
            $message_text .= "Travel Date: " . (!empty($travel_date) ? $travel_date : "Not specified") . "\n";
            $message_text .= "Trip Type: " . (!empty($trip_type) ? $trip_type : "Not specified") . "\n";
            $message_text .= "Passengers: " . (!empty($passengers) ? $passengers : "Not specified") . "\n";
            $message_text .= "Message: $message";
            
            $encoded_message = rawurlencode($message_text);
            $whatsapp_url = "https://wa.me/$whatsapp_number?text=$encoded_message";
            header("Location: $whatsapp_url");
            exit;
        }
    }
}

include 'header.php';
?>

<section class="contact-page" style="padding: 60px 0;">
    <div class="container">
        <!-- Page Header -->
        <h1 class="section-title">Get a Free Quote</h1>
        <p style="text-align:center; margin-bottom:50px; font-size:1.2rem; color:#475569; max-width:800px; margin-left:auto; margin-right:auto; line-height:1.8;">
            Ready to book your Innova Crysta? Fill in the form below or reach out to us directly. 
            We're here to help you plan your perfect journey.
        </p>

        <!-- Quick Contact Options -->
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(200px, 1fr)); gap:20px; margin-bottom:40px;">
            <a href="tel:+917290885949" style="background:white; padding:20px; border-radius:20px; text-align:center; text-decoration:none; box-shadow:0 5px 20px rgba(0,0,0,0.05); transition:all 0.3s; display:block;">
                <div style="width:50px; height:50px; background:linear-gradient(135deg, #00b09b, #96c93d); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 10px;">
                    <i class="fas fa-phone" style="color:white; font-size:1.2rem;"></i>
                </div>
                <div style="font-weight:600; color:#1e293b;">Call Us</div>
                <div style="color:#00b09b; font-size:0.9rem;">+91 7290885949</div>
            </a>
            <a href="https://wa.me/917290885949" target="_blank" style="background:white; padding:20px; border-radius:20px; text-align:center; text-decoration:none; box-shadow:0 5px 20px rgba(0,0,0,0.05); transition:all 0.3s; display:block;">
                <div style="width:50px; height:50px; background:linear-gradient(135deg, #25D366, #128C7E); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 10px;">
                    <i class="fab fa-whatsapp" style="color:white; font-size:1.5rem;"></i>
                </div>
                <div style="font-weight:600; color:#1e293b;">WhatsApp</div>
                <div style="color:#25D366; font-size:0.9rem;">Chat with us</div>
            </a>
            <a href="mailto:bookings@innovacrystarent.com" style="background:white; padding:20px; border-radius:20px; text-align:center; text-decoration:none; box-shadow:0 5px 20px rgba(0,0,0,0.05); transition:all 0.3s; display:block;">
                <div style="width:50px; height:50px; background:linear-gradient(135deg, #ea4335, #c5221f); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 10px;">
                    <i class="fas fa-envelope" style="color:white; font-size:1.2rem;"></i>
                </div>
                <div style="font-weight:600; color:#1e293b;">Email Us</div>
                <div style="color:#ea4335; font-size:0.9rem;">Send a message</div>
            </a>
            <a href="#contact-form" style="background:white; padding:20px; border-radius:20px; text-align:center; text-decoration:none; box-shadow:0 5px 20px rgba(0,0,0,0.05); transition:all 0.3s; display:block;">
                <div style="width:50px; height:50px; background:linear-gradient(135deg, #fbbf24, #f59e0b); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 10px;">
                    <i class="fas fa-calendar-check" style="color:white; font-size:1.2rem;"></i>
                </div>
                <div style="font-weight:600; color:#1e293b;">Book Online</div>
                <div style="color:#f59e0b; font-size:0.9rem;">Instant booking</div>
            </a>
        </div>

        <!-- Main Contact Container -->
        <div class="contact-container" style="display:flex; gap:50px; margin-top:20px; background:#fefefe; border-radius:30px; box-shadow:0 25px 50px rgba(0,0,0,0.08); overflow:hidden;">
            <!-- Contact Info -->
            <div class="contact-info" style="flex:1; background:linear-gradient(135deg, #00b09b, #96c93d); color:white; padding:50px 40px;">
                <h3 style="font-size:2rem; margin-bottom:10px;">Let's Plan Your Journey</h3>
                <p style="color:rgba(255,255,255,0.9); margin-bottom:30px; font-size:1.05rem;">Have questions? Need a custom quote? We're here to help you 24/7.</p>
                
                <div style="margin-bottom:30px;">
                    <div style="display:flex; align-items:flex-start; gap:15px; margin:20px 0; padding:15px; background:rgba(255,255,255,0.1); border-radius:15px; transition:all 0.3s;">
                        <i class="fas fa-map-marker-alt" style="font-size:1.5rem; margin-top:5px;"></i>
                        <div>
                            <div style="font-weight:600; font-size:1.1rem;">Our Location</div>
                            <div style="color:rgba(255,255,255,0.9); font-size:0.95rem;">B-26, Rajeev Nagar, Near Radhey Krishna Mandir, Begumpur, New Delhi-110086, Opp. Rohini Sec-22</div>
                            <div style="color:rgba(255,255,255,0.7); font-size:0.85rem; margin-top:5px;">Serving all of Delhi, Noida, Gurgaon & surrounding areas</div>
                        </div>
                    </div>
                    <div style="display:flex; align-items:flex-start; gap:15px; margin:20px 0; padding:15px; background:rgba(255,255,255,0.1); border-radius:15px; transition:all 0.3s;">
                        <i class="fas fa-phone-alt" style="font-size:1.5rem; margin-top:5px;"></i>
                        <div>
                            <div style="font-weight:600; font-size:1.1rem;">Phone Number</div>
                            <div style="color:rgba(255,255,255,0.9); font-size:0.95rem;">+91 7290885949</div>
                            <div style="color:rgba(255,255,255,0.7); font-size:0.85rem; margin-top:5px;">Available 24/7 for bookings & support</div>
                        </div>
                    </div>
                    <div style="display:flex; align-items:flex-start; gap:15px; margin:20px 0; padding:15px; background:rgba(255,255,255,0.1); border-radius:15px; transition:all 0.3s;">
                        <i class="fas fa-envelope" style="font-size:1.5rem; margin-top:5px;"></i>
                        <div>
                            <div style="font-weight:600; font-size:1.1rem;">Email Address</div>
                            <div style="color:rgba(255,255,255,0.9); font-size:0.95rem;">onrentinnovacrysta@gmail.com</div>
                            <div style="color:rgba(255,255,255,0.7); font-size:0.85rem; margin-top:5px;">We respond within 2-4 hours</div>
                        </div>
                    </div>
                    <div style="display:flex; align-items:flex-start; gap:15px; margin:20px 0; padding:15px; background:rgba(255,255,255,0.1); border-radius:15px; transition:all 0.3s;">
                        <i class="fas fa-clock" style="font-size:1.5rem; margin-top:5px;"></i>
                        <div>
                            <div style="font-weight:600; font-size:1.1rem;">Business Hours</div>
                            <div style="color:rgba(255,255,255,0.9); font-size:0.95rem;">24/7 Customer Support</div>
                            <div style="color:rgba(255,255,255,0.7); font-size:0.85rem; margin-top:5px;">Bookings available anytime</div>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div style="border-top:1px solid rgba(255,255,255,0.2); padding-top:20px;">
                    <div style="font-weight:600; margin-bottom:15px;">Follow Us</div>
                    <div style="display:flex; gap:15px;">
                        <a href="https://www.facebook.com/GetMeCabFB" style="color:white; font-size:1.5rem; opacity:0.8; transition:all 0.3s;"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/innova_crystaonrent/" style="color:white; font-size:1.5rem; opacity:0.8; transition:all 0.3s;"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://x.com/getmecab" style="color:white; font-size:1.5rem; opacity:0.8; transition:all 0.3s;"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://www.youtube.com/@getmecab9627" style="color:white; font-size:1.5rem; opacity:0.8; transition:all 0.3s;"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form" id="contact-form" style="flex:1.3; padding:50px 40px;">
                <h3 style="font-size:1.8rem; color:#1e293b; margin-bottom:10px;">Send an Inquiry</h3>
                <p style="color:#64748b; margin-bottom:25px;">Fill in the details and we'll get back to you within 2-4 hours.</p>

                <?php if (!empty($success_message)): ?>
                    <div class="alert alert-success" style="padding:15px; border-radius:10px; margin-bottom:20px; background:#d4edda; color:#155724;">
                        <?php echo htmlspecialchars($success_message); ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($error_messages)): ?>
                    <div class="alert alert-error" style="padding:15px; border-radius:10px; margin-bottom:20px; background:#f8d7da; color:#721c24;">
                        <?php foreach ($error_messages as $err): ?>
                            <p><?php echo htmlspecialchars($err); ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="">
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:18px;">
                        <div class="form-group" style="margin-bottom:0;">
                            <label style="display:block; font-weight:500; color:#1e293b; margin-bottom:5px; font-size:0.9rem;">Full Name *</label>
                            <input type="text" name="name" placeholder="e.g - Raj Kumar" required style="width:100%; padding:14px 20px; border:1px solid #e2e8f0; border-radius:50px; font-family:'Poppins', sans-serif; font-size:1rem; transition:all 0.3s; opacity:0.5;" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                        </div>
                        <div class="form-group" style="margin-bottom:0;">
                            <label style="display:block; font-weight:500; color:#1e293b; margin-bottom:5px; font-size:0.9rem;">Email Address *</label>
                            <input type="email" name="email" placeholder="e.g - raj****12@gmail.com" required style="width:100%; padding:14px 20px; border:1px solid #e2e8f0; border-radius:50px; font-family:'Poppins', sans-serif; font-size:1rem; transition:all 0.3s; opacity:0.5;" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label style="display:block; font-weight:500; color:#1e293b; margin-bottom:5px; font-size:0.9rem;">Phone Number *</label>
                        <input type="tel" name="phone" placeholder="+91 98765*****" required style="width:100%; padding:14px 20px; border:1px solid #e2e8f0; border-radius:50px; font-family:'Poppins', sans-serif; font-weight:300; font-size:1rem; transition:all 0.3s; opacity:0.5;" value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
                    </div>

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:18px;">
                        <div class="form-group" style="margin-bottom:0;">
                            <label style="display:block; font-weight:500; color:#1e293b; margin-bottom:5px; font-size:0.9rem;">Travel Date</label>
                            <input type="date" name="travel_date" onclick="this.showPicker()" style="width:100%; padding:14px 20px; border:1px solid #e2e8f0; border-radius:50px; font-family:'Poppins', sans-serif; font-size:1rem; transition:all 0.3s; cursor:pointer;" value="<?php echo isset($_POST['travel_date']) ? htmlspecialchars($_POST['travel_date']) : ''; ?>">
                        </div>
                        <div class="form-group" style="margin-bottom:0;">
                            <label style="display:block; font-weight:500; color:#1e293b; margin-bottom:5px; font-size:0.9rem;">Number of Passengers</label>
                            <select name="passengers" style="width:100%; padding:14px 20px; border:1px solid #e2e8f0; border-radius:50px; font-family:'Poppins', sans-serif; font-size:1rem; transition:all 0.3s; background:white;">
                                <option value="">Select Passengers</option>
                                <option value="1">1 Passenger</option>
                                <option value="2">2 Passengers</option>
                                <option value="3">3 Passengers</option>
                                <option value="4">4 Passengers</option>
                                <option value="5">5 Passengers</option>
                                <option value="6">6 Passengers</option>
                                <option value="7">7 Passengers</option>
                                <option value="8">8 Passengers</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label style="display:block; font-weight:500; color:#1e293b; margin-bottom:5px; font-size:0.9rem;">Trip Type</label>
                        <select name="trip_type" style="width:100%; padding:14px 20px; border:1px solid #e2e8f0; border-radius:50px; font-family:'Poppins', sans-serif; font-size:1rem; transition:all 0.3s; background:white;">
                            <option value="">Select trip type</option>
                            <option value="Airport Transfer">Airport Transfer</option>
                            <option value="Family Trip">Family Trip</option>
                            <option value="Corporate Event">Corporate Event</option>
                            <option value="Wedding">Wedding/Special Occasion</option>
                            <option value="Tour Package">Tour Package</option>
                            <option value="One Way Trip">One Way Trip</option>
                            <option value="Round Trip">Round Trip</option>
                            <option value="Hourly Rental">Hourly Rental</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label style="display:block; font-weight:500; color:#1e293b; margin-bottom:5px; font-size:0.9rem;">Your Requirements</label>
                        <textarea name="message" placeholder="Tell us about your trip requirements, pickup/drop location, duration, etc..." rows="4" style="width:100%; padding:14px 20px; border:1px solid #e2e8f0; border-radius:20px; font-family:'Poppins', sans-serif; font-size:1rem; resize:vertical; transition:all 0.3s; opacity:0.5;"><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                    </div>

                    <div class="honeypot">
                        <input type="text" name="honeypot" value="">
                    </div>

                    <div class="form-group" style="display:flex; gap:15px; flex-wrap:wrap; align-items:center;">
                        <button type="submit" name="contact_submit" class="btn btn-primary" style="padding:15px 45px; font-size:1.1rem;">
                            <i class="fas fa-paper-plane" style="margin-right:10px;"></i> Send Inquiry
                        </button>
                        <span style="color:#94a3b8; font-size:0.85rem;">
                            <i class="fas fa-lock" style="margin-right:5px;"></i> Your information is secure
                        </span>
                    </div>
                </form>

                <!-- Quick Response Promise -->
                <div style="display:flex; gap:20px; flex-wrap:wrap; margin-top:20px; padding-top:20px; border-top:1px solid #e2e8f0;">
                    <div style="display:flex; align-items:center; gap:10px;">
                        <i class="fas fa-clock" style="color:#00b09b;"></i>
                        <span style="color:#475569; font-size:0.9rem;">Response within 2-4 hours</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:10px;">
                        <i class="fas fa-check-circle" style="color:#00b09b;"></i>
                        <span style="color:#475569; font-size:0.9rem;">Free quote & consultation</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:10px;">
                        <i class="fas fa-shield-alt" style="color:#00b09b;"></i>
                        <span style="color:#475569; font-size:0.9rem;">100% transparent pricing</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Contact Us Section -->
        <div style="margin:60px 0; display:grid; grid-template-columns:repeat(auto-fit, minmax(250px, 1fr)); gap:25px;">
            <div style="background:white; padding:30px; border-radius:20px; text-align:center; box-shadow:0 5px 20px rgba(0,0,0,0.05); transition:all 0.3s;">
                <div style="width:70px; height:70px; background:linear-gradient(135deg, #00b09b, #96c93d); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 15px;">
                    <i class="fas fa-headset" style="color:white; font-size:1.8rem;"></i>
                </div>
                <h4 style="font-size:1.2rem; margin-bottom:10px;">24/7 Support</h4>
                <p style="color:#64748b; font-size:0.95rem;">Our team is available round the clock to assist you with your booking and queries.</p>
            </div>
            <div style="background:white; padding:30px; border-radius:20px; text-align:center; box-shadow:0 5px 20px rgba(0,0,0,0.05); transition:all 0.3s;">
                <div style="width:70px; height:70px; background:linear-gradient(135deg, #fbbf24, #f59e0b); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 15px;">
                    <i class="fas fa-rupee-sign" style="color:white; font-size:1.8rem;"></i>
                </div>
                <h4 style="font-size:1.2rem; margin-bottom:10px;">Best Price Guarantee</h4>
                <p style="color:#64748b; font-size:0.95rem;">We offer competitive rates with no hidden charges. What you see is what you pay.</p>
            </div>
            <div style="background:white; padding:30px; border-radius:20px; text-align:center; box-shadow:0 5px 20px rgba(0,0,0,0.05); transition:all 0.3s;">
                <div style="width:70px; height:70px; background:linear-gradient(135deg, #3b82f6, #6366f1); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 15px;">
                    <i class="fas fa-car" style="color:white; font-size:1.8rem;"></i>
                </div>
                <h4 style="font-size:1.2rem; margin-bottom:10px;">Instant Booking</h4>
                <p style="color:#64748b; font-size:0.95rem;">Get immediate confirmation and booking details within minutes of your inquiry.</p>
            </div>
            <div style="background:white; padding:30px; border-radius:20px; text-align:center; box-shadow:0 5px 20px rgba(0,0,0,0.05); transition:all 0.3s;">
                <div style="width:70px; height:70px; background:linear-gradient(135deg, #ec4899, #f472b6); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 15px;">
                    <i class="fas fa-star" style="color:white; font-size:1.8rem;"></i>
                </div>
                <h4 style="font-size:1.2rem; margin-bottom:10px;">Trusted Service</h4>
                <p style="color:#64748b; font-size:0.95rem;">Over 500+ happy customers trust us for their travel needs across Delhi NCR.</p>
            </div>
        </div>

        <!-- Map & Location -->
        <div style="background:white; border-radius:30px; padding:40px; box-shadow:0 5px 20px rgba(0,0,0,0.05);">
            <h2 style="text-align:center; font-size:1.8rem; margin-bottom:30px; color:#1e293b;">Our Service Area</h2>
            <div class="service-area-grid" style="display:grid; grid-template-columns:repeat(auto-fit, minmax(220px, 1fr)); gap:20px;">
                <div class="service-area-item" style="background:#f8fafc; padding:25px 20px; border-radius:20px; text-align:center; border:1px solid #f1f5f9; box-shadow:0 4px 6px rgba(0,0,0,0.02);">
                    <div style="width:65px; height:65px; background:linear-gradient(135deg, #00b09b, #96c93d); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 15px; box-shadow:0 5px 15px rgba(0,176,155,0.3);">
                        <i class="fas fa-map-marker-alt" style="color:white; font-size:1.5rem;"></i>
                    </div>
                    <div style="font-weight:700; font-size:1.1rem; margin-top:5px; color:#1e293b;">Delhi</div>
                    <div style="color:#64748b; font-size:0.9rem; margin-top:5px;">All locations & NCR</div>
                </div>
                <div class="service-area-item" style="background:#f8fafc; padding:25px 20px; border-radius:20px; text-align:center; border:1px solid #f1f5f9; box-shadow:0 4px 6px rgba(0,0,0,0.02);">
                    <div style="width:65px; height:65px; background:linear-gradient(135deg, #fbbf24, #f59e0b); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 15px; box-shadow:0 5px 15px rgba(245,158,11,0.3);">
                        <i class="fas fa-building" style="color:white; font-size:1.5rem;"></i>
                    </div>
                    <div style="font-weight:700; font-size:1.1rem; margin-top:5px; color:#1e293b;">Noida</div>
                    <div style="color:#64748b; font-size:0.9rem; margin-top:5px;">All sectors & Expy</div>
                </div>
                <div class="service-area-item" style="background:#f8fafc; padding:25px 20px; border-radius:20px; text-align:center; border:1px solid #f1f5f9; box-shadow:0 4px 6px rgba(0,0,0,0.02);">
                    <div style="width:65px; height:65px; background:linear-gradient(135deg, #3b82f6, #6366f1); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 15px; box-shadow:0 5px 15px rgba(59,130,246,0.3);">
                        <i class="fas fa-city" style="color:white; font-size:1.5rem;"></i>
                    </div>
                    <div style="font-weight:700; font-size:1.1rem; margin-top:5px; color:#1e293b;">Gurgaon</div>
                    <div style="color:#64748b; font-size:0.9rem; margin-top:5px;">Cyber City & Beyond</div>
                </div>
                <div class="service-area-item" style="background:#f8fafc; padding:25px 20px; border-radius:20px; text-align:center; border:1px solid #f1f5f9; box-shadow:0 4px 6px rgba(0,0,0,0.02);">
                    <div style="width:65px; height:65px; background:linear-gradient(135deg, #ec4899, #f472b6); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 15px; box-shadow:0 5px 15px rgba(236,72,153,0.3);">
                        <i class="fas fa-map-pin" style="color:white; font-size:1.5rem;"></i>
                    </div>
                    <div style="font-weight:700; font-size:1.1rem; margin-top:5px; color:#1e293b;">Faridabad</div>
                    <div style="color:#64748b; font-size:0.9rem; margin-top:5px;">Fully Available</div>
                </div>
                <div class="service-area-item" style="background:#f8fafc; padding:25px 20px; border-radius:20px; text-align:center; border:1px solid #f1f5f9; box-shadow:0 4px 6px rgba(0,0,0,0.02);">
                    <div style="width:65px; height:65px; background:linear-gradient(135deg, #8b5cf6, #a78bfa); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 15px; box-shadow:0 5px 15px rgba(139,92,246,0.3);">
                        <i class="fas fa-road" style="color:white; font-size:1.5rem;"></i>
                    </div>
                    <div style="font-weight:700; font-size:1.1rem; margin-top:5px; color:#1e293b;">Ghaziabad</div>
                    <div style="color:#64748b; font-size:0.9rem; margin-top:5px;">Indirapuram & more</div>
                </div>
                <div class="service-area-item" style="background:#f8fafc; padding:25px 20px; border-radius:20px; text-align:center; border:1px solid #f1f5f9; box-shadow:0 4px 6px rgba(0,0,0,0.02);">
                    <div style="width:65px; height:65px; background:linear-gradient(135deg, #14b8a6, #2dd4bf); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 15px; box-shadow:0 5px 15px rgba(20,184,166,0.3);">
                        <i class="fas fa-map-signs" style="color:white; font-size:1.5rem;"></i>
                    </div>
                    <div style="font-weight:700; font-size:1.1rem; margin-top:5px; color:#1e293b;">Greater Noida</div>
                    <div style="color:#64748b; font-size:0.9rem; margin-top:5px;">Knowledge Park etc</div>
                </div>
                <div class="service-area-item" style="background:#f8fafc; padding:25px 20px; border-radius:20px; text-align:center; border:1px solid #f1f5f9; box-shadow:0 4px 6px rgba(0,0,0,0.02);">
                    <div style="width:65px; height:65px; background:linear-gradient(135deg, #ef4444, #f87171); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 15px; box-shadow:0 5px 15px rgba(239,68,68,0.3);">
                        <i class="fas fa-plane-departure" style="color:white; font-size:1.5rem;"></i>
                    </div>
                    <div style="font-weight:700; font-size:1.1rem; margin-top:5px; color:#1e293b;">Airport</div>
                    <div style="color:#64748b; font-size:0.9rem; margin-top:5px;">DEL T1, T2 & T3</div>
                </div>
                <a href="destinations.php" class="service-area-item" style="display:block; text-decoration:none; background:#f8fafc; padding:25px 20px; border-radius:20px; text-align:center; border:1px solid #f1f5f9; box-shadow:0 4px 6px rgba(0,0,0,0.02);">
                    <div style="width:65px; height:65px; background:linear-gradient(135deg, #f97316, #fb923c); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 15px; box-shadow:0 5px 15px rgba(249,115,22,0.3);">
                        <i class="fas fa-route" style="color:white; font-size:1.5rem;"></i>
                    </div>
                    <div style="font-weight:700; font-size:1.1rem; margin-top:5px; color:#1e293b;">Outstation</div>
                    <div style="color:#64748b; font-size:0.9rem; margin-top:5px;">Agra, Jaipur & more</div>
                </a>
            </div>
        </div>

        <!-- Call to Action -->
        <div style="background:linear-gradient(135deg, #0f172a, #1e293b); border-radius:30px; padding:40px; margin-top:50px; text-align:center;">
            <h3 style="font-size:1.8rem; color:white; margin-bottom:15px;">Need Immediate Assistance?</h3>
            <p style="color:#94a3b8; margin-bottom:25px; font-size:1.1rem;">Call us directly for instant booking and support</p>
            <div style="display:flex; gap:15px; justify-content:center; flex-wrap:wrap;">
                <a href="tel:+917290885949" class="btn btn-primary" style="background:linear-gradient(135deg, #fbbf24, #f59e0b); color:#0f172a; padding:15px 40px; font-size:1.1rem;">
                    <i class="fas fa-phone" style="margin-right:10px;"></i> Call Now
                </a>
                <a href="https://wa.me/917290885949" target="_blank" class="btn btn-outline" style="border-color:#25D366; color:#25D366; padding:15px 40px; font-size:1.1rem;">
                    <i class="fab fa-whatsapp" style="margin-right:10px;"></i> WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    /* Additional styles for contact page */
    .contact-container .contact-info div {
        transition: all 0.3s ease;
    }
    .contact-container .contact-info div:hover {
        transform: translateX(5px);
        background: rgba(255,255,255,0.2) !important;
    }
    
    .contact-form input:focus,
    .contact-form textarea:focus,
    .contact-form select:focus {
        border-color: #00b09b !important;
        outline: none;
        box-shadow: 0 0 0 3px rgba(0,176,155,0.15);
    }
    
    .contact-form .alert {
        animation: slideIn 0.5s ease;
    }
    
    @keyframes slideIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .quick-contact-option:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    }
    
    .why-contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    }
    
    .service-area-item {
        transition: all 0.3s ease;
    }
    .service-area-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.08);
    }
    
    /* ===== RESPONSIVE CSS (ADDED FOR MOBILE) ===== */
    
    /* Tablet & Medium Screens (max-width: 992px) */
    @media (max-width: 992px) {
        .contact-page .contact-container {
            flex-direction: column !important;
        }
        .contact-page .contact-info {
            padding: 35px 30px !important;
        }
        .contact-page .contact-form {
            padding: 35px 30px !important;
        }
        .contact-page .quick-contact-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
        .contact-page .why-contact-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
        .contact-page .service-area-grid {
            grid-template-columns: repeat(3, 1fr) !important;
        }
        .contact-page .form-grid-2 {
            grid-template-columns: 1fr 1fr !important;
        }
    }
    
    /* Mobile & Small Tablets (max-width: 768px) */
    @media (max-width: 768px) {
        .contact-page {
            padding: 40px 0 !important;
        }
        .contact-page .container {
            padding: 0 20px;
        }
        .contact-page .section-title {
            font-size: 1.8rem;
        }
        .contact-page .section-title:after {
            width: 60px;
        }
        .contact-page .page-header p {
            font-size: 1rem !important;
            margin-bottom: 30px !important;
        }
        .contact-page .quick-contact-grid {
            grid-template-columns: 1fr 1fr !important;
            gap: 15px !important;
            margin-bottom: 30px !important;
        }
        .contact-page .quick-contact-grid .quick-card {
            padding: 15px !important;
            border-radius: 15px !important;
        }
        .contact-page .quick-contact-grid .quick-card .icon-circle {
            width: 45px !important;
            height: 45px !important;
        }
        .contact-page .quick-contact-grid .quick-card .icon-circle i {
            font-size: 1rem !important;
        }
        .contact-page .quick-contact-grid .quick-card .label {
            font-size: 0.85rem !important;
        }
        .contact-page .quick-contact-grid .quick-card .detail {
            font-size: 0.75rem !important;
        }
        .contact-page .contact-container {
            border-radius: 20px !important;
        }
        .contact-page .contact-info {
            padding: 25px 20px !important;
        }
        .contact-page .contact-info h3 {
            font-size: 1.5rem !important;
        }
        .contact-page .contact-info p {
            font-size: 0.9rem !important;
        }
        .contact-page .contact-info .info-item {
            padding: 12px !important;
            margin: 12px 0 !important;
        }
        .contact-page .contact-info .info-item i {
            font-size: 1.2rem !important;
        }
        .contact-page .contact-info .info-item .info-label {
            font-size: 1rem !important;
        }
        .contact-page .contact-info .info-item .info-text {
            font-size: 0.85rem !important;
        }
        .contact-page .contact-info .info-item .info-sub {
            font-size: 0.75rem !important;
        }
        .contact-page .contact-info .social-links a {
            font-size: 1.2rem !important;
        }
        .contact-page .contact-form {
            padding: 25px 20px !important;
        }
        .contact-page .contact-form h3 {
            font-size: 1.3rem !important;
        }
        .contact-page .contact-form p {
            font-size: 0.9rem !important;
            margin-bottom: 15px !important;
        }
        .contact-page .contact-form .form-grid-2 {
            grid-template-columns: 1fr !important;
            gap: 12px !important;
        }
        .contact-page .contact-form .form-group {
            margin-bottom: 12px !important;
        }
        .contact-page .contact-form .form-group label {
            font-size: 0.8rem !important;
        }
        .contact-page .contact-form .form-group input,
        .contact-page .contact-form .form-group select,
        .contact-page .contact-form .form-group textarea {
            padding: 10px 14px !important;
            font-size: 0.9rem !important;
            border-radius: 12px !important;
        }
        .contact-page .contact-form .form-group textarea {
            min-height: 80px !important;
        }
        .contact-page .contact-form .btn-submit {
            padding: 12px 30px !important;
            font-size: 1rem !important;
        }
        .contact-page .contact-form .response-promise {
            flex-direction: column !important;
            gap: 10px !important;
            align-items: flex-start !important;
        }
        .contact-page .why-contact-grid {
            grid-template-columns: 1fr 1fr !important;
            gap: 15px !important;
            margin: 30px 0 !important;
        }
        .contact-page .why-contact-grid .why-card {
            padding: 20px !important;
            border-radius: 15px !important;
        }
        .contact-page .why-contact-grid .why-card .icon-circle {
            width: 60px !important;
            height: 60px !important;
        }
        .contact-page .why-contact-grid .why-card .icon-circle i {
            font-size: 1.5rem !important;
        }
        .contact-page .why-contact-grid .why-card h4 {
            font-size: 1rem !important;
        }
        .contact-page .why-contact-grid .why-card p {
            font-size: 0.85rem !important;
        }
        .contact-page .service-area {
            padding: 30px 20px !important;
            border-radius: 20px !important;
        }
        .contact-page .service-area h2 {
            font-size: 1.5rem !important;
            margin-bottom: 20px !important;
        }
        .contact-page .service-area-grid {
            grid-template-columns: repeat(2, 1fr) !important;
            gap: 10px !important;
        }
        .contact-page .service-area-grid .area-item {
            padding: 12px !important;
        }
        .contact-page .service-area-grid .area-item i {
            font-size: 1rem !important;
        }
        .contact-page .service-area-grid .area-item .area-name {
            font-size: 0.85rem !important;
        }
        .contact-page .service-area-grid .area-item .area-desc {
            font-size: 0.7rem !important;
        }
        .contact-page .cta-section {
            padding: 30px 20px !important;
            margin-top: 30px !important;
            border-radius: 20px !important;
        }
        .contact-page .cta-section h3 {
            font-size: 1.4rem !important;
        }
        .contact-page .cta-section p {
            font-size: 0.95rem !important;
            margin-bottom: 20px !important;
        }
        .contact-page .cta-section .btn-group {
            flex-direction: column !important;
            gap: 10px !important;
            width: 100% !important;
        }
        .contact-page .cta-section .btn-group a {
            width: 100% !important;
            text-align: center !important;
            padding: 12px 30px !important;
        }
    }
    
    /* Small Mobile Devices (max-width: 576px) */
    @media (max-width: 576px) {
        .contact-page {
            padding: 30px 0 !important;
        }
        .contact-page .container {
            padding: 0 15px;
        }
        .contact-page .section-title {
            font-size: 1.5rem;
        }
        .contact-page .section-title:after {
            width: 40px;
        }
        .contact-page .page-header p {
            font-size: 0.9rem !important;
        }
        .contact-page .quick-contact-grid {
            grid-template-columns: 1fr !important;
            gap: 12px !important;
        }
        .contact-page .quick-contact-grid .quick-card {
            padding: 12px !important;
        }
        .contact-page .quick-contact-grid .quick-card .icon-circle {
            width: 40px !important;
            height: 40px !important;
        }
        .contact-page .quick-contact-grid .quick-card .icon-circle i {
            font-size: 0.9rem !important;
        }
        .contact-page .contact-info {
            padding: 20px 15px !important;
        }
        .contact-page .contact-info .info-item {
            padding: 10px !important;
        }
        .contact-page .contact-form {
            padding: 20px 15px !important;
        }
        .contact-page .contact-form .form-group input,
        .contact-page .contact-form .form-group select,
        .contact-page .contact-form .form-group textarea {
            padding: 8px 12px !important;
            font-size: 0.85rem !important;
        }
        .contact-page .contact-form .btn-submit {
            padding: 10px 20px !important;
            font-size: 0.9rem !important;
            width: 100% !important;
            justify-content: center !important;
        }
        .contact-page .contact-form .secure-badge {
            font-size: 0.75rem !important;
        }
        .contact-page .why-contact-grid {
            grid-template-columns: 1fr !important;
        }
        .contact-page .why-contact-grid .why-card {
            padding: 15px !important;
        }
        .contact-page .service-area-grid {
            grid-template-columns: 1fr !important;
        }
        .contact-page .cta-section {
            padding: 25px 15px !important;
        }
        .contact-page .cta-section h3 {
            font-size: 1.2rem !important;
        }
        .contact-page .cta-section p {
            font-size: 0.85rem !important;
        }
        .contact-page .cta-section .btn-group a {
            padding: 10px 20px !important;
            font-size: 0.9rem !important;
        }
    }
    
    /* Very Small Screens (max-width: 400px) */
    @media (max-width: 400px) {
        .contact-page .section-title {
            font-size: 1.3rem;
        }
        .contact-page .quick-contact-grid .quick-card {
            padding: 10px !important;
        }
        .contact-page .quick-contact-grid .quick-card .icon-circle {
            width: 35px !important;
            height: 35px !important;
        }
        .contact-page .quick-contact-grid .quick-card .icon-circle i {
            font-size: 0.8rem !important;
        }
        .contact-page .contact-info .info-item {
            padding: 8px !important;
        }
        .contact-page .contact-info .info-item i {
            font-size: 1rem !important;
        }
        .contact-page .contact-form .form-group input,
        .contact-page .contact-form .form-group select,
        .contact-page .contact-form .form-group textarea {
            padding: 6px 10px !important;
            font-size: 0.8rem !important;
        }
        .contact-page .contact-form .btn-submit {
            font-size: 0.8rem !important;
            padding: 8px 16px !important;
        }
        .contact-page .cta-section h3 {
            font-size: 1rem !important;
        }
        .contact-page .cta-section .btn-group a {
            font-size: 0.8rem !important;
            padding: 8px 16px !important;
        }
    }
    
    /* ===== END RESPONSIVE CSS ===== */
</style>

<?php include 'seo_keywords.php'; ?>
<?php include 'footer.php'; ?>