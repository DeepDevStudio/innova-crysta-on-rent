        <!-- ===== SINGLE 3-COLUMN TABLE ===== -->
        <div style="background:linear-gradient(135deg, #f8fafc, #ffffff); border-radius:30px; padding:50px; margin:50px 0; box-shadow:0 5px 20px rgba(0,0,0,0.05);">
            <h2 style="text-align:center; font-size:2rem; margin-bottom:10px; color:#1e293b;">
                <i class="fas fa-table" style="color:#00b09b; margin-right:10px;"></i>
                Destinations &amp; <span style="background:linear-gradient(135deg, #00b09b, #96c93d); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Tour Packages</span>
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
                    <i class="fas fa-car" style="color:#00b09b;"></i>
                    <span style="color:#475569; font-size:0.9rem;">Innova Crysta 7 & 8 Seater available</span>
                </div>
                <div style="display:flex; align-items:center; gap:10px;">
                    <i class="fas fa-check-circle" style="color:#00b09b;"></i>
                    <span style="color:#475569; font-size:0.9rem;">Fuel & Driver Included</span>
                </div>
                <div style="display:flex; align-items:center; gap:10px;">
                    <i class="fas fa-clock" style="color:#f59e0b;"></i>
                    <span style="color:#475569; font-size:0.9rem;">24/7 Customer Support</span>
                </div>
                <div style="display:flex; align-items:center; gap:10px;">
                    <i class="fas fa-rupee-sign" style="color:#00b09b;"></i>
                    <span style="color:#475569; font-size:0.9rem;">Best Price Guarantee</span>
                </div>
            </div>
        </div>
