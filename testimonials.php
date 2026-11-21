<?php
// Initialize variables for form feedback
$review_success = '';
$review_error = '';

include 'header.php';
?>

<section class="testimonials-page" style="padding: 60px 0;">
    <div class="container">
        <!-- Page Header -->
        <h1 class="section-title">What Our Clients Say</h1>
        <p style="text-align:center; margin-bottom:50px; font-size:1.15rem; color:#475569; max-width:950px; margin-left:auto; margin-right:auto; line-height:1.8;">
            Read real feedback from our happy customers who traveled with us. We take pride in delivering exceptional service and creating memorable experiences for every <strong>Innova Crysta hire in delhi</strong>. From seamless airport transfers to weekend getaways, our clients frequently highlight how easy it is to manage their <strong>Innova Crysta booking in delhi</strong>. Whether travelers need a reliable <strong>Innova Crysta for outstation in delhi</strong> or a comfortable ride across the broader <strong>Innova Crysta rental delhi ncr</strong> region, our professional drivers ensure complete satisfaction. See why so many locals turn to us when searching for a trusted <strong>Innova Crysta near me</strong>.
        </p>

        <!-- Overall Rating Summary -->
        <div style="background:linear-gradient(135deg, #0f172a, #1e293b); border-radius:30px; padding:40px; margin-bottom:50px; display:flex; flex-wrap:wrap; align-items:center; justify-content:space-around; gap:20px;">
            <div style="text-align:center; color:white;">
                <div style="font-size:4rem; font-weight:800; background:linear-gradient(135deg, #fbbf24, #f59e0b); -webkit-background-clip:text; -webkit-text-fill-color:transparent;" id="avgRating">4.9</div>
                <div style="color:#fbbf24; font-size:1.5rem; letter-spacing:3px;" id="starDisplay">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                </div>
                <div style="color:#94a3b8; margin-top:5px;">Average Rating</div>
            </div>
            <div style="display:flex; gap:40px; flex-wrap:wrap;">
                <div style="text-align:center; color:white;">
                    <div style="font-size:2rem; font-weight:700; color:#fbbf24;" id="totalReviewsDisplay">35+</div>
                    <div style="color:#94a3b8; font-size:0.9rem;">Total Reviews</div>
                </div>
                <div style="text-align:center; color:white;">
                    <div style="font-size:2rem; font-weight:700; color:#fbbf24;">98%</div>
                    <div style="color:#94a3b8; font-size:0.9rem;">Would Recommend</div>
                </div>
                <div style="text-align:center; color:white;">
                    <div style="font-size:2rem; font-weight:700; color:#fbbf24;">2005</div>
                    <div style="color:#94a3b8; font-size:0.9rem;">Established</div>
                </div>
            </div>
            <a href="#write-review" class="btn btn-primary" style="background:linear-gradient(135deg, #fbbf24, #f59e0b); color:#0f172a; padding:12px 30px; text-decoration:none; display:inline-block; border-radius:50px; font-weight:600; transition:all 0.3s;">
                <i class="fas fa-pen" style="margin-right:8px;"></i> Write a Review
            </a>
        </div>

        <!-- Rating Breakdown -->
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(200px, 1fr)); gap:15px; margin-bottom:50px;">
            <div style="background:white; padding:15px 20px; border-radius:15px; box-shadow:0 5px 15px rgba(0,0,0,0.05); display:flex; align-items:center; gap:15px;">
                <div style="font-size:1.5rem; color:#fbbf24;">5 <i class="fas fa-star" style="font-size:0.9rem;"></i></div>
                <div style="flex:1; height:8px; background:#e2e8f0; border-radius:10px; overflow:hidden;">
                    <div style="width:85%; height:100%; background:linear-gradient(135deg, #fbbf24, #f59e0b); border-radius:10px;"></div>
                </div>
                <div style="font-weight:600; color:#1e293b;">85%</div>
            </div>
            <div style="background:white; padding:15px 20px; border-radius:15px; box-shadow:0 5px 15px rgba(0,0,0,0.05); display:flex; align-items:center; gap:15px;">
                <div style="font-size:1.5rem; color:#9ca3af;">4 <i class="fas fa-star" style="font-size:0.9rem;"></i></div>
                <div style="flex:1; height:8px; background:#e2e8f0; border-radius:10px; overflow:hidden;">
                    <div style="width:10%; height:100%; background:linear-gradient(135deg, #9ca3af, #d1d5db); border-radius:10px;"></div>
                </div>
                <div style="font-weight:600; color:#1e293b;">10%</div>
            </div>
            <div style="background:white; padding:15px 20px; border-radius:15px; box-shadow:0 5px 15px rgba(0,0,0,0.05); display:flex; align-items:center; gap:15px;">
                <div style="font-size:1.5rem; color:#9ca3af;">3 <i class="fas fa-star" style="font-size:0.9rem;"></i></div>
                <div style="flex:1; height:8px; background:#e2e8f0; border-radius:10px; overflow:hidden;">
                    <div style="width:3%; height:100%; background:linear-gradient(135deg, #9ca3af, #d1d5db); border-radius:10px;"></div>
                </div>
                <div style="font-weight:600; color:#1e293b;">3%</div>
            </div>
            <div style="background:white; padding:15px 20px; border-radius:15px; box-shadow:0 5px 15px rgba(0,0,0,0.05); display:flex; align-items:center; gap:15px;">
                <div style="font-size:1.5rem; color:#9ca3af;">2 <i class="fas fa-star" style="font-size:0.9rem;"></i></div>
                <div style="flex:1; height:8px; background:#e2e8f0; border-radius:10px; overflow:hidden;">
                    <div style="width:1%; height:100%; background:linear-gradient(135deg, #9ca3af, #d1d5db); border-radius:10px;"></div>
                </div>
                <div style="font-weight:600; color:#1e293b;">1%</div>
            </div>
            <div style="background:white; padding:15px 20px; border-radius:15px; box-shadow:0 5px 15px rgba(0,0,0,0.05); display:flex; align-items:center; gap:15px;">
                <div style="font-size:1.5rem; color:#9ca3af;">1 <i class="fas fa-star" style="font-size:0.9rem;"></i></div>
                <div style="flex:1; height:8px; background:#e2e8f0; border-radius:10px; overflow:hidden;">
                    <div style="width:1%; height:100%; background:linear-gradient(135deg, #9ca3af, #d1d5db); border-radius:10px;"></div>
                </div>
                <div style="font-weight:600; color:#1e293b;">1%</div>
            </div>
        </div>

        <!-- Filter Bar -->
        <div style="background:white; border-radius:20px; padding:15px 25px; box-shadow:0 5px 20px rgba(0,0,0,0.05); margin-bottom:40px; display:flex; flex-wrap:wrap; align-items:center; justify-content:space-between; gap:15px;">
            <div style="display:flex; gap:10px; flex-wrap:wrap;">
                <span style="font-weight:600; color:#1e293b; align-self:center;">Filter:</span>
                <button onclick="filterReviews('all')" class="filter-btn active" id="filterAll" style="padding:8px 20px; background:linear-gradient(135deg, #00b09b, #96c93d); color:white; border:none; border-radius:50px; font-size:0.9rem; cursor:pointer; transition:all 0.3s;">All Reviews</button>
                <button onclick="filterReviews('family')" class="filter-btn" id="filterFamily" style="padding:8px 20px; background:#f1f5f9; color:#1e293b; border:none; border-radius:50px; font-size:0.9rem; cursor:pointer; transition:all 0.3s;">Family Trips</button>
                <button onclick="filterReviews('corporate')" class="filter-btn" id="filterCorporate" style="padding:8px 20px; background:#f1f5f9; color:#1e293b; border:none; border-radius:50px; font-size:0.9rem; cursor:pointer; transition:all 0.3s;">Corporate</button>
                <button onclick="filterReviews('airport')" class="filter-btn" id="filterAirport" style="padding:8px 20px; background:#f1f5f9; color:#1e293b; border:none; border-radius:50px; font-size:0.9rem; cursor:pointer; transition:all 0.3s;">Airport Transfers</button>
                <button onclick="filterReviews('luxury')" class="filter-btn" id="filterLuxury" style="padding:8px 20px; background:#f1f5f9; color:#1e293b; border:none; border-radius:50px; font-size:0.9rem; cursor:pointer; transition:all 0.3s;">Luxury</button>
            </div>
            <div style="display:flex; align-items:center; gap:10px; color:#64748b; font-size:0.9rem;">
                <i class="fas fa-sort"></i>
                <span>Showing: <strong style="color:#1e293b;" id="reviewCount">6</strong> reviews</span>
            </div>
        </div>

        <!-- Testimonials Grid - RENDERED PERMANENTLY IN PHP -->
        <div class="testimonials-grid" id="testimonialsGrid" style="display: grid; gap: 30px; margin-bottom:30px;">
            <?php
            // ===== DEFAULT REVIEWS - RENDERED ONCE IN PHP =====
            include 'reviews_data.php';

            // Render all reviews permanently
            $reviewIndex = 0;
            foreach ($defaultReviews as $review):
                $stars = '';
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= $review['rating']) {
                        $stars .= '<i class="fas fa-star"></i>';
                    } else {
                        $stars .= '<i class="far fa-star"></i>';
                    }
                }
                $displayStyle = ($reviewIndex >= 6) ? 'none' : 'flex';
                $reviewIndex++;
            ?>
            <div class="testimonial-card" data-category="<?php echo $review['category']; ?>" style="background:white; padding:30px; border-radius:20px; box-shadow:0 10px 30px rgba(0,0,0,0.05); position:relative; transition:all 0.3s; border-top:4px solid #<?php echo $review['color']; ?>; display:<?php echo $displayStyle; ?>; flex-direction:column; height:100%;">
                <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:15px;">
                    <div>
                        <div style="display:flex; gap:3px; color:#fbbf24; font-size:0.9rem;"><?php echo $stars; ?></div>
                        <span style="font-size:0.8rem; color:#94a3b8; display:block; margin-top:5px;">
                            <i class="fas fa-calendar-alt" style="margin-right:5px;"></i> <?php echo $review['date']; ?>
                        </span>
                    </div>
                    <span style="background:#f0fdf4; color:#<?php echo $review['color']; ?>; padding:4px 12px; border-radius:50px; font-size:0.75rem; font-weight:600;">
                        <i class="fas fa-tag" style="margin-right:5px;"></i> <?php echo $review['categoryLabel']; ?>
                    </span>
                </div>
                <i class="fas fa-quote-left" style="font-size:1.8rem; color:#<?php echo $review['color']; ?>; opacity:0.2; position:absolute; top:20px; right:25px;"></i>
                <p style="color:#475569; line-height:1.8; margin:10px 0 20px 0; font-style:italic; flex-grow:1;">"<?php echo $review['text']; ?>"</p>
                <div class="testimonial-author" style="display:flex; align-items:center; gap:15px; border-top:1px solid #e2e8f0; padding-top:20px; margin-top:auto;">
                    <img src="<?php echo $review['avatar']; ?>" alt="<?php echo $review['altKeyword']; ?>" style="width:60px; height:60px; border-radius:50%; object-fit:cover; border:3px solid #fbbf24;">
                    <div class="author-info">
                        <h5 style="font-size:1.1rem; color:#1e293b; margin:0;"><?php echo $review['name']; ?></h5>
                        <span style="color:#64748b; font-size:0.9rem;"><?php echo $review['location']; ?> • <?php echo $review['trips']; ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Load More Reviews Button -->
        <div style="text-align:center; margin-bottom:50px;">
            <button id="loadMoreBtn" onclick="loadMoreReviews()" style="background:white; border:2px solid #00b09b; color:#00b09b; padding:15px 40px; border-radius:50px; font-weight:600; font-size:1rem; cursor:pointer; transition:all 0.3s;">
                <i class="fas fa-sync-alt" style="margin-right:10px;"></i> Load More Reviews
            </button>
            <div id="noMoreReviews" style="display:none; color:#94a3b8; margin-top:15px;">No more reviews to load</div>
        </div>

        <!-- Why Trust Us Section -->
        <div style="background:linear-gradient(135deg, #f8fafc, #ffffff); border-radius:30px; padding:50px; margin:50px 0; box-shadow:0 5px 20px rgba(0,0,0,0.05);">
            <h2 style="text-align:center; font-size:2rem; margin-bottom:40px; color:#1e293b;">
                Why Our <span style="background:linear-gradient(135deg, #00b09b, #96c93d); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Customers Trust Us</span>
            </h2>
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(220px, 1fr)); gap:25px;">
                <div style="text-align:center;">
                    <div style="width:70px; height:70px; background:linear-gradient(135deg, #00b09b, #96c93d); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 15px;">
                        <i class="fas fa-shield-alt" style="color:white; font-size:1.8rem;"></i>
                    </div>
                    <h4 style="font-size:1.1rem; margin-bottom:8px;">Fully Insured</h4>
                    <p style="color:#64748b; font-size:0.9rem;">Comprehensive coverage for your peace of mind</p>
                </div>
                <div style="text-align:center;">
                    <div style="width:70px; height:70px; background:linear-gradient(135deg, #fbbf24, #f59e0b); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 15px;">
                        <i class="fas fa-star" style="color:white; font-size:1.8rem;"></i>
                    </div>
                    <h4 style="font-size:1.1rem; margin-bottom:8px;">4.9 Rating</h4>
                    <p style="color:#64748b; font-size:0.9rem;">Based on 500+ authentic customer reviews</p>
                </div>
                <div style="text-align:center;">
                    <div style="width:70px; height:70px; background:linear-gradient(135deg, #3b82f6, #6366f1); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 15px;">
                        <i class="fas fa-clock" style="color:white; font-size:1.8rem;"></i>
                    </div>
                    <h4 style="font-size:1.1rem; margin-bottom:8px;">On-Time Guarantee</h4>
                    <p style="color:#64748b; font-size:0.9rem;">Punctual service you can rely on</p>
                </div>
                <div style="text-align:center;">
                    <div style="width:70px; height:70px; background:linear-gradient(135deg, #ec4899, #f472b6); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 15px;">
                        <i class="fas fa-headset" style="color:white; font-size:1.8rem;"></i>
                    </div>
                    <h4 style="font-size:1.1rem; margin-bottom:8px;">24/7 Support</h4>
                    <p style="color:#64748b; font-size:0.9rem;">Always here to help you</p>
                </div>
            </div>
        </div>

        <!-- Write a Review Section - NOW FIXED AND ACTIVE -->
        <div id="write-review" style="background:white; border-radius:30px; padding:50px; box-shadow:0 10px 30px rgba(0,0,0,0.08); margin-top:50px;">
            <div style="text-align:center; margin-bottom:30px;">
                <h2 style="font-size:2rem; color:#1e293b; margin-bottom:10px;">
                    <i class="fas fa-pen" style="color:#00b09b; margin-right:10px;"></i> 
                    Write a <span style="background:linear-gradient(135deg, #00b09b, #96c93d); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Review</span>
                </h2>
                <p style="color:#64748b; max-width:600px; margin:0 auto;">Share your experience with our service and help others make informed decisions.</p>
            </div>
            
            <!-- Form Message -->
            <div id="reviewFormMessage" style="display:none; padding:15px; border-radius:10px; margin-bottom:20px; font-weight:600;"></div>
            
            <form id="reviewForm" onsubmit="return submitReview(event)" style="max-width:800px; margin:0 auto;">
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px;">
                    <div>
                        <label style="display:block; font-weight:600; color:#1e293b; margin-bottom:8px;">Full Name <span style="color:#ef4444;">*</span></label>
                        <input type="text" id="reviewerName" placeholder="Enter your full name" style="width:100%; padding:12px 16px; border:1px solid #e2e8f0; border-radius:10px; font-size:1rem; transition:border-color 0.3s;">
                    </div>
                    <div>
                        <label style="display:block; font-weight:600; color:#1e293b; margin-bottom:8px;">Email Address <span style="color:#ef4444;">*</span></label>
                        <input type="email" id="reviewerEmail" placeholder="your@email.com" style="width:100%; padding:12px 16px; border:1px solid #e2e8f0; border-radius:10px; font-size:1rem; transition:border-color 0.3s;">
                    </div>
                </div>
                
                <div style="margin-top:20px;">
                    <label style="display:block; font-weight:600; color:#1e293b; margin-bottom:8px;">Trip Type <span style="color:#ef4444;">*</span></label>
                    <select id="tripType" style="width:100%; padding:12px 16px; border:1px solid #e2e8f0; border-radius:10px; font-size:1rem;">
                        <option value="Family Trip">Family Trip</option>
                        <option value="Corporate Event">Corporate Event</option>
                        <option value="Airport Transfer">Airport Transfer</option>
                        <option value="Luxury Experience">Luxury Experience</option>
                        <option value="Wedding">Wedding / Special Occasion</option>
                        <option value="Tour Package">Tour Package</option>
                    </select>
                </div>
                
                <div style="margin-top:20px;">
                    <label style="display:block; font-weight:600; color:#1e293b; margin-bottom:8px;">Rating <span style="color:#ef4444;">*</span></label>
                    <div style="display:flex; align-items:center; gap:15px;">
                        <div id="starRating" style="display:flex; gap:8px; font-size:2rem;">
                            <i class="fas fa-star" style="color:#d1d5db; cursor:pointer; transition:color 0.2s;" onclick="setRating(1)"></i>
                            <i class="fas fa-star" style="color:#d1d5db; cursor:pointer; transition:color 0.2s;" onclick="setRating(2)"></i>
                            <i class="fas fa-star" style="color:#d1d5db; cursor:pointer; transition:color 0.2s;" onclick="setRating(3)"></i>
                            <i class="fas fa-star" style="color:#d1d5db; cursor:pointer; transition:color 0.2s;" onclick="setRating(4)"></i>
                            <i class="fas fa-star" style="color:#d1d5db; cursor:pointer; transition:color 0.2s;" onclick="setRating(5)"></i>
                        </div>
                        <input type="hidden" id="selectedRating" value="">
                        <span id="ratingText" style="color:#64748b; font-size:0.95rem;">Select a rating</span>
                    </div>
                </div>
                
                <div style="margin-top:20px;">
                    <label style="display:block; font-weight:600; color:#1e293b; margin-bottom:8px;">Your Review <span style="color:#ef4444;">*</span></label>
                    <textarea id="reviewText" rows="5" placeholder="Describe your experience with our service..." style="width:100%; padding:12px 16px; border:1px solid #e2e8f0; border-radius:10px; font-size:1rem; resize:vertical; transition:border-color 0.3s;"></textarea>
                </div>
                
                <button type="submit" style="width:100%; padding:16px; margin-top:25px; background:linear-gradient(135deg, #00b09b, #96c93d); color:white; border:none; border-radius:10px; font-size:1.1rem; font-weight:700; cursor:pointer; transition:all 0.3s;">
                    <i class="fas fa-paper-plane" style="margin-right:10px;"></i> Submit Review
                </button>
            </form>
        </div>
    </div>
</section>

<style>
    .testimonial-card {
        transition: all 0.3s ease !important;
        animation: fadeInUp 0.5s ease;
    }
    .testimonial-card:hover {
        transform: translateY(-8px) !important;
        box-shadow: 0 20px 40px rgba(0,0,0,0.12) !important;
    }
    .testimonial-card .testimonial-author img {
        transition: all 0.3s ease;
    }
    .testimonial-card:hover .testimonial-author img {
        transform: scale(1.05);
    }
    .filter-btn:hover {
        transform: translateY(-2px);
    }
    .filter-btn.active {
        background: linear-gradient(135deg, #00b09b, #96c93d) !important;
        color: white !important;
    }
    #loadMoreBtn:hover {
        background: linear-gradient(135deg, #00b09b, #96c93d);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0,176,155,0.3);
    }
    #reviewForm input:focus,
    #reviewForm textarea:focus,
    #reviewForm select:focus {
        outline: none;
        border-color: #00b09b;
        box-shadow: 0 0 0 3px rgba(0,176,155,0.1);
    }
    #reviewForm button:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0,176,155,0.3);
    }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    /* Grid Layout */
    .testimonials-grid {
        grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
    }
    
    /* ===== RESPONSIVE CSS ===== */
    
    /* Tablet & Medium Screens (max-width: 992px) */
    @media (max-width: 992px) {
        .testimonials-page .rating-summary {
            padding: 30px !important;
        }
        .testimonials-page .rating-summary .rating-stats {
            gap: 25px !important;
        }
        .testimonials-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        .testimonials-page .rating-breakdown {
            grid-template-columns: repeat(2, 1fr) !important;
        }
        .testimonials-page .trust-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
        .testimonials-page .filter-bar {
            flex-wrap: wrap;
            padding: 12px 18px !important;
        }
        .testimonials-page .filter-bar .filter-options {
            flex-wrap: wrap;
            gap: 8px;
        }
        .testimonials-page .filter-bar .filter-options button {
            font-size: 0.8rem !important;
            padding: 6px 14px !important;
        }
        #write-review {
            padding: 30px !important;
        }
        #write-review form {
            grid-template-columns: 1fr !important;
        }
    }
    
    /* Mobile & Small Tablets (max-width: 768px) */
    @media (max-width: 768px) {
        .testimonials-page {
            padding: 40px 0 !important;
        }
        .testimonials-page .container {
            padding: 0 20px;
        }
        .testimonials-page .section-title {
            font-size: 1.8rem;
        }
        .testimonials-page .page-header p {
            font-size: 1rem !important;
            margin-bottom: 30px !important;
        }
        .testimonials-page .rating-summary {
            flex-direction: column !important;
            text-align: center !important;
            padding: 25px 20px !important;
            gap: 15px !important;
        }
        .testimonials-page .rating-summary .rating-number {
            font-size: 3rem !important;
        }
        .testimonials-page .rating-summary .rating-stars {
            font-size: 1.2rem !important;
        }
        .testimonials-page .rating-summary .rating-stats {
            gap: 15px !important;
        }
        .testimonials-page .rating-summary .rating-stats div {
            flex: 1;
            min-width: 80px;
        }
        .testimonials-page .rating-summary .rating-stats div div:first-child {
            font-size: 1.5rem !important;
        }
        .testimonials-page .rating-summary .write-review-btn {
            padding: 10px 20px !important;
            font-size: 0.9rem !important;
        }
        .testimonials-page .rating-breakdown {
            grid-template-columns: 1fr !important;
            gap: 10px !important;
            margin-bottom: 30px !important;
        }
        .testimonials-page .rating-breakdown .rating-row {
            padding: 12px 16px !important;
        }
        .testimonials-page .rating-breakdown .rating-row .star-label {
            font-size: 1.2rem !important;
        }
        .testimonials-page .rating-breakdown .rating-row .bar {
            height: 6px !important;
        }
        .testimonials-page .rating-breakdown .rating-row .percentage {
            font-size: 0.8rem !important;
        }
        .testimonials-page .filter-bar {
            flex-direction: column !important;
            align-items: stretch !important;
            padding: 12px 16px !important;
        }
        .testimonials-page .filter-bar .filter-options {
            justify-content: center !important;
        }
        .testimonials-page .filter-bar .filter-options button {
            font-size: 0.75rem !important;
            padding: 5px 12px !important;
        }
        .testimonials-page .filter-bar .review-count {
            justify-content: center !important;
            font-size: 0.8rem !important;
        }
        .testimonials-grid {
            grid-template-columns: 1fr;
        }
        .testimonials-page .testimonial-card {
            padding: 20px !important;
            border-radius: 15px !important;
        }
        .testimonials-page .testimonial-card .quote-icon {
            font-size: 1.5rem !important;
            top: 15px !important;
            right: 20px !important;
        }
        .testimonials-page .testimonial-card .rating-stars {
            font-size: 0.8rem !important;
        }
        .testimonials-page .testimonial-card .review-date {
            font-size: 0.7rem !important;
        }
        .testimonials-page .testimonial-card .category-badge {
            font-size: 0.65rem !important;
            padding: 3px 10px !important;
        }
        .testimonials-page .testimonial-card .review-text {
            font-size: 0.9rem !important;
            margin: 8px 0 15px 0 !important;
        }
        .testimonials-page .testimonial-card .author-img {
            width: 50px !important;
            height: 50px !important;
        }
        .testimonials-page .testimonial-card .author-name {
            font-size: 1rem !important;
        }
        .testimonials-page .testimonial-card .author-detail {
            font-size: 0.8rem !important;
        }
        .testimonials-page .load-more-btn {
            padding: 12px 30px !important;
            font-size: 0.9rem !important;
        }
        .testimonials-page .trust-section {
            padding: 30px 20px !important;
            margin: 30px 0 !important;
            border-radius: 20px !important;
        }
        .testimonials-page .trust-section h2 {
            font-size: 1.5rem !important;
            margin-bottom: 30px !important;
        }
        .testimonials-page .trust-grid {
            grid-template-columns: 1fr 1fr !important;
            gap: 20px !important;
        }
        .testimonials-page .trust-grid .trust-item {
            padding: 15px !important;
        }
        .testimonials-page .trust-grid .trust-item .icon-circle {
            width: 60px !important;
            height: 60px !important;
        }
        .testimonials-page .trust-grid .trust-item .icon-circle i {
            font-size: 1.5rem !important;
        }
        .testimonials-page .trust-grid .trust-item h4 {
            font-size: 1rem !important;
        }
        .testimonials-page .trust-grid .trust-item p {
            font-size: 0.8rem !important;
        }
        #write-review {
            padding: 25px !important;
            border-radius: 20px !important;
        }
        #write-review h2 {
            font-size: 1.5rem !important;
        }
        #write-review form {
            grid-template-columns: 1fr !important;
        }
        #write-review form .form-row {
            flex-direction: column !important;
        }
        #starRating {
            font-size: 1.5rem !important;
        }
    }
    
    /* Small Mobile Devices (max-width: 576px) */
    @media (max-width: 576px) {
        .testimonials-page {
            padding: 30px 0 !important;
        }
        .testimonials-page .container {
            padding: 0 15px;
        }
        .testimonials-page .section-title {
            font-size: 1.5rem;
        }
        .testimonials-page .page-header p {
            font-size: 0.9rem !important;
        }
        .testimonials-page .rating-summary {
            padding: 20px 15px !important;
            border-radius: 20px !important;
        }
        .testimonials-page .rating-summary .rating-number {
            font-size: 2.5rem !important;
        }
        .testimonials-page .rating-summary .rating-stars {
            font-size: 1rem !important;
        }
        .testimonials-page .rating-summary .rating-stats {
            flex-direction: column !important;
            gap: 10px !important;
        }
        .testimonials-page .rating-summary .rating-stats div {
            min-width: unset;
        }
        .testimonials-page .rating-summary .rating-stats div div:first-child {
            font-size: 1.3rem !important;
        }
        .testimonials-page .rating-summary .rating-stats div div:last-child {
            font-size: 0.7rem !important;
        }
        .testimonials-page .rating-summary .write-review-btn {
            font-size: 0.8rem !important;
            padding: 8px 16px !important;
        }
        .testimonials-page .filter-bar {
            padding: 10px 12px !important;
            border-radius: 15px !important;
        }
        .testimonials-page .filter-bar .filter-options {
            gap: 5px !important;
        }
        .testimonials-page .filter-bar .filter-options button {
            font-size: 0.65rem !important;
            padding: 4px 10px !important;
        }
        .testimonials-page .filter-bar .filter-options .filter-label {
            font-size: 0.8rem !important;
        }
        .testimonials-page .filter-bar .review-count {
            font-size: 0.75rem !important;
        }
        .testimonials-page .testimonial-card {
            padding: 16px !important;
        }
        .testimonials-page .testimonial-card .quote-icon {
            font-size: 1.2rem !important;
        }
        .testimonials-page .testimonial-card .review-text {
            font-size: 0.85rem !important;
        }
        .testimonials-page .testimonial-card .author-img {
            width: 40px !important;
            height: 40px !important;
        }
        .testimonials-page .testimonial-card .author-name {
            font-size: 0.9rem !important;
        }
        .testimonials-page .testimonial-card .author-detail {
            font-size: 0.7rem !important;
        }
        .testimonials-page .load-more-btn {
            padding: 10px 20px !important;
            font-size: 0.8rem !important;
        }
        .testimonials-page .trust-grid {
            grid-template-columns: 1fr !important;
            gap: 15px !important;
        }
        .testimonials-page .trust-grid .trust-item {
            padding: 15px !important;
        }
        .testimonials-page .trust-grid .trust-item .icon-circle {
            width: 50px !important;
            height: 50px !important;
        }
        .testimonials-page .trust-grid .trust-item .icon-circle i {
            font-size: 1.2rem !important;
        }
        .testimonials-page .trust-grid .trust-item h4 {
            font-size: 0.95rem !important;
        }
        .testimonials-page .trust-grid .trust-item p {
            font-size: 0.75rem !important;
        }
        #write-review {
            padding: 20px !important;
        }
        #write-review h2 {
            font-size: 1.3rem !important;
        }
        #write-review form input,
        #write-review form textarea,
        #write-review form select {
            font-size: 0.9rem !important;
            padding: 10px 14px !important;
        }
        #write-review form button {
            font-size: 1rem !important;
            padding: 14px !important;
        }
        #starRating {
            font-size: 1.3rem !important;
        }
    }
    
    /* Very Small Screens (max-width: 400px) */
    @media (max-width: 400px) {
        .testimonials-page .section-title {
            font-size: 1.3rem;
        }
        .testimonials-page .rating-summary .rating-number {
            font-size: 2rem !important;
        }
        .testimonials-page .rating-summary .rating-stats div div:first-child {
            font-size: 1.1rem !important;
        }
        .testimonials-page .filter-bar .filter-options button {
            font-size: 0.6rem !important;
            padding: 3px 8px !important;
        }
        .testimonials-page .testimonial-card {
            padding: 14px !important;
        }
        .testimonials-page .testimonial-card .review-text {
            font-size: 0.8rem !important;
        }
        .testimonials-page .testimonial-card .author-img {
            width: 35px !important;
            height: 35px !important;
        }
        .testimonials-page .testimonial-card .author-name {
            font-size: 0.8rem !important;
        }
        .testimonials-page .load-more-btn {
            padding: 8px 16px !important;
            font-size: 0.75rem !important;
        }
    }
    
    /* ===== END RESPONSIVE CSS ===== */
</style>

<script>
    // ===== STABLE REVIEW SYSTEM - FULLY FUNCTIONAL =====
    
    let currentFilter = 'all';
    let displayedCount = 9;
    let userReviews = [];

    // ===== LOAD USER REVIEWS ONCE =====
    function loadUserReviews() {
        const stored = localStorage.getItem('userReviews');
        if (stored) {
            try {
                userReviews = JSON.parse(stored);
                if (!Array.isArray(userReviews)) userReviews = [];
            } catch(e) {
                userReviews = [];
            }
        }
        return userReviews;
    }

    // ===== SHOW/HIDE REVIEWS BASED ON FILTER =====
    function filterReviews(category) {
        currentFilter = category;
        
        // Update active button
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.classList.remove('active');
            btn.style.background = '#f1f5f9';
            btn.style.color = '#1e293b';
        });
        
        // Find the clicked button and set it active
        let targetBtn = null;
        if (category === 'all') targetBtn = document.getElementById('filterAll');
        else if (category === 'family') targetBtn = document.getElementById('filterFamily');
        else if (category === 'corporate') targetBtn = document.getElementById('filterCorporate');
        else if (category === 'airport') targetBtn = document.getElementById('filterAirport');
        else if (category === 'luxury') targetBtn = document.getElementById('filterLuxury');
        
        if (targetBtn) {
            targetBtn.classList.add('active');
            targetBtn.style.background = 'linear-gradient(135deg, #00b09b, #96c93d)';
            targetBtn.style.color = 'white';
        }
        
        // Get all review cards
        const cards = document.querySelectorAll('.testimonial-card');
        let visibleCount = 0;
        
        cards.forEach(card => {
            const cardCategory = card.getAttribute('data-category');
            if (category === 'all' || cardCategory === category) {
                card.style.display = 'flex';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });
        
        // Update count
        document.getElementById('reviewCount').textContent = visibleCount;
    }

    // ===== LOAD MORE REVIEWS =====
    function loadMoreReviews() {
        const cards = document.querySelectorAll('.testimonial-card');
        let hiddenCards = [];
        
        cards.forEach(card => {
            if (card.style.display === 'none') {
                hiddenCards.push(card);
            }
        });
        
        // Show all remaining hidden cards
        hiddenCards.forEach(card => {
            card.style.display = 'flex';
        });
        
        // Update visible count
        let visibleCount = 0;
        cards.forEach(card => {
            if (card.style.display !== 'none') {
                visibleCount++;
            }
        });
        document.getElementById('reviewCount').textContent = visibleCount;
        
        // Check if all cards are visible
        const totalCards = cards.length;
        if (visibleCount >= totalCards) {
            document.getElementById('loadMoreBtn').style.display = 'none';
            document.getElementById('noMoreReviews').style.display = 'block';
        }
    }

    // ===== SUBMIT NEW REVIEW - FIXED =====
    function submitReview(event) {
        event.preventDefault();
        
        const name = document.getElementById('reviewerName').value.trim();
        const email = document.getElementById('reviewerEmail').value.trim();
        const rating = parseInt(document.getElementById('selectedRating').value);
        const tripType = document.getElementById('tripType').value;
        const text = document.getElementById('reviewText').value.trim();
        
        // Validation
        if (!name) { 
            showMessage('Please enter your name.', 'error'); 
            return false; 
        }
        if (!email || !email.includes('@')) { 
            showMessage('Please enter a valid email address.', 'error'); 
            return false; 
        }
        if (!rating || rating < 1 || rating > 5) { 
            showMessage('Please select a rating by clicking on the stars.', 'error'); 
            return false; 
        }
        if (!text || text.length < 10) { 
            showMessage('Please write a review (minimum 10 characters).', 'error'); 
            return false; 
        }
        
        const categoryMap = { 
            'Family Trip': 'family', 
            'Corporate Event': 'corporate', 
            'Airport Transfer': 'airport', 
            'Luxury Experience': 'luxury', 
            'Wedding': 'family', 
            'Tour Package': 'family' 
        };
        const colorMap = { 
            'family': '00b09b', 
            'corporate': '3b82f6', 
            'airport': 'fbbf24', 
            'luxury': '8b5cf6' 
        };
        const category = categoryMap[tripType] || 'family';
        const borderColor = colorMap[category] || '00b09b';
        
        // Create new review card HTML
        const stars = generateStarsHTML(rating);
        const newCard = document.createElement('div');
        newCard.className = 'testimonial-card';
        newCard.setAttribute('data-category', category);
        newCard.style.background = 'white';
        newCard.style.padding = '30px';
        newCard.style.borderRadius = '20px';
        newCard.style.boxShadow = '0 10px 30px rgba(0,0,0,0.05)';
        newCard.style.position = 'relative';
        newCard.style.transition = 'all 0.3s ease';
        newCard.style.borderTop = '4px solid #' + borderColor;
        newCard.style.animation = 'fadeInUp 0.5s ease';
        newCard.style.display = 'block';
        
        newCard.innerHTML = `
            <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:15px;">
                <div>
                    <div style="display:flex; gap:3px; color:#fbbf24; font-size:0.9rem;">${stars}</div>
                    <span style="font-size:0.8rem; color:#94a3b8; display:block; margin-top:5px;">
                        <i class="fas fa-calendar-alt" style="margin-right:5px;"></i> ${new Date().toLocaleDateString('en-US', { month: 'long', year: 'numeric' })}
                    </span>
                </div>
                <div style="display:flex; gap:8px; align-items:center;">
                    <span style="background:#dbeafe; color:#3b82f6; padding:2px 12px; border-radius:50px; font-size:0.7rem; font-weight:600;"><i class="fas fa-user-check"></i> You</span>
                    <span style="background:#f0fdf4; color:#${borderColor}; padding:4px 12px; border-radius:50px; font-size:0.75rem; font-weight:600;">
                        <i class="fas fa-tag" style="margin-right:5px;"></i> ${tripType}
                    </span>
                </div>
            </div>
            <i class="fas fa-quote-left" style="font-size:1.8rem; color:#${borderColor}; opacity:0.2; position:absolute; top:20px; right:25px;"></i>
            <p style="color:#475569; line-height:1.8; margin:10px 0 20px 0; font-style:italic;">"${text}"</p>
            <div class="testimonial-author" style="display:flex; align-items:center; gap:15px; border-top:1px solid #e2e8f0; padding-top:20px;">
                <img src="https://ui-avatars.com/api/?name=${encodeURIComponent(name)}&background=${borderColor}&color=fff&size=60" alt="Innova Crysta on Rent in Gurgaon" style="width:60px; height:60px; border-radius:50%; object-fit:cover; border:3px solid #fbbf24;">
                <div class="author-info">
                    <h5 style="font-size:1.1rem; color:#1e293b; margin:0;">${name}</h5>
                    <span style="color:#64748b; font-size:0.9rem;">Delhi NCR • New Customer</span>
                </div>
            </div>
        `;
        
        // Insert at the top of the grid
        const grid = document.getElementById('testimonialsGrid');
        grid.insertBefore(newCard, grid.firstChild);
        
        // Save to localStorage
        const review = {
            id: Date.now() + Math.random() * 1000,
            name: name,
            avatar: 'https://ui-avatars.com/api/?name=' + encodeURIComponent(name) + '&background=' + borderColor + '&color=fff&size=60',
            location: 'Delhi NCR',
            trips: 'New Customer',
            rating: rating,
            category: category,
            categoryLabel: tripType,
            date: new Date().toLocaleDateString('en-US', { month: 'long', year: 'numeric' }),
            text: text,
            color: borderColor,
            isUserReview: true
        };
        
        let userReviews = JSON.parse(localStorage.getItem('userReviews') || '[]');
        userReviews.unshift(review);
        localStorage.setItem('userReviews', JSON.stringify(userReviews));
        
        // Update counts
        const totalCards = document.querySelectorAll('.testimonial-card').length;
        document.getElementById('totalReviews').textContent = totalCards;
        
        // Update review count
        let visibleCount = 0;
        document.querySelectorAll('.testimonial-card').forEach(card => {
            if (card.style.display !== 'none') {
                visibleCount++;
            }
        });
        document.getElementById('reviewCount').textContent = visibleCount;
        
        // Show success message
        showMessage('Thank you for your review! It has been added to our testimonials.', 'success');
        
        // Reset form
        document.getElementById('reviewerName').value = '';
        document.getElementById('reviewerEmail').value = '';
        document.getElementById('reviewText').value = '';
        selectedRating = 0;
        document.getElementById('selectedRating').value = '';
        document.querySelectorAll('#starRating .fa-star').forEach(s => s.style.color = '#d1d5db');
        document.getElementById('ratingText').textContent = 'Select a rating';
        
        // Show load more button if needed
        if (visibleCount < totalCards) {
            document.getElementById('loadMoreBtn').style.display = 'inline-block';
            document.getElementById('noMoreReviews').style.display = 'none';
        }
        
        return false;
    }

    function generateStarsHTML(rating) {
        let stars = '';
        for (let i = 1; i <= 5; i++) {
            if (i <= rating) {
                stars += '<i class="fas fa-star"></i>';
            } else {
                stars += '<i class="far fa-star"></i>';
            }
        }
        return stars;
    }

    // ===== STAR RATING =====
    let selectedRating = 0;

    function highlightStars(rating) {
        const stars = document.querySelectorAll('#starRating .fa-star');
        stars.forEach((star, index) => {
            star.style.color = index < rating ? '#fbbf24' : '#d1d5db';
        });
        const texts = ['', 'Poor', 'Fair', 'Good', 'Very Good', 'Excellent'];
        document.getElementById('ratingText').textContent = rating > 0 ? texts[rating] : 'Select a rating';
    }

    function resetStars() {
        if (selectedRating > 0) {
            highlightStars(selectedRating);
        } else {
            document.querySelectorAll('#starRating .fa-star').forEach(s => s.style.color = '#d1d5db');
        }
    }

    function setRating(rating) {
        selectedRating = rating;
        document.getElementById('selectedRating').value = rating;
        highlightStars(rating);
    }

    function showMessage(message, type) {
        const msgDiv = document.getElementById('reviewFormMessage');
        msgDiv.style.display = 'block';
        msgDiv.innerHTML = message;
        msgDiv.style.background = type === 'success' ? '#d4edda' : '#f8d7da';
        msgDiv.style.color = type === 'success' ? '#155724' : '#721c24';
        msgDiv.style.border = type === 'success' ? '1px solid #c3e6cb' : '1px solid #f5c6cb';
        setTimeout(() => { 
            msgDiv.style.display = 'none'; 
        }, 5000);
    }

    // ===== INITIALIZE - STABLE REVIEWS =====
    document.addEventListener('DOMContentLoaded', function() {
        // Load user reviews from localStorage
        loadUserReviews();
        
        // Get all cards
        const cards = document.querySelectorAll('.testimonial-card');
        const totalCards = cards.length;
        document.getElementById('totalReviews').textContent = totalCards;
        
        // Hide cards beyond 6 for "Load More" functionality
        if (totalCards > 6) {
            cards.forEach((card, index) => {
                if (index >= 6) {
                    card.style.display = 'none';
                }
            });
            document.getElementById('reviewCount').textContent = 6;
            document.getElementById('loadMoreBtn').style.display = 'inline-block';
            document.getElementById('noMoreReviews').style.display = 'none';
        } else {
            document.getElementById('reviewCount').textContent = totalCards;
            document.getElementById('loadMoreBtn').style.display = 'none';
            document.getElementById('noMoreReviews').style.display = 'block';
        }
        
        // Initialize filter buttons
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const filter = this.getAttribute('onclick').match(/'([^']+)'/)[1];
                filterReviews(filter);
            });
        });
    });
</script>

<section style="padding: 60px 0; background-color: #ffffff;">
    <div class="container">
        <?php include 'destinations_table.php'; ?>
    </div>
</section>

<?php include 'seo_keywords.php'; ?>
<?php include 'footer.php'; ?>
