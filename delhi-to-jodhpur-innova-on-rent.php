<?php
// ============================================
// DELHI-TO-JODHPUR-INNOVA-ON-RENT.PHP
// ============================================
include 'header.php';
require_once __DIR__ . '/pricing_config.php';

// Define route specific variables
$routeName = "Delhi to Jodhpur";
$vehicleType = "Innova Crysta";
$distance = "590 km";
$travelTime = "9-10 hours";
$pricePerKm = "₹18/km";
$dailyPrice = "₹5,800/day";
$roundTripPrice = "₹23,840";
?>

<style>
/* ============================================================
   PERFECT HERO SECTION - ALL DEVICES
   ============================================================ */

/* ----- RESET & BASE ----- */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.route-detail-page {
    padding: 20px 0 40px !important;
    font-family: system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif;
}

.route-detail-page .container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 16px !important;
}

/* ----- BREADCRUMB ----- */
.route-detail-page .breadcrumb {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 20px;
    font-size: 0.85rem !important;
    color: #94a3b8;
    flex-wrap: wrap;
}

.route-detail-page .breadcrumb a {
    color: #6366f1;
    text-decoration: none;
    font-size: 0.85rem !important;
}

.route-detail-page .breadcrumb span {
    font-size: 0.85rem !important;
}

/* ============================================================
   HERO SECTION - PERFECT ON ALL DEVICES
   ============================================================ */
.route-detail-page .hero-section {
    background: linear-gradient(135deg, #0f172a, #1e293b);
    border-radius: 24px;
    padding: 40px 35px !important;
    margin-bottom: 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    position: relative;
    overflow: hidden;
    min-height: 400px;
}

/* Decorative elements */
.route-detail-page .hero-section::before {
    content: '';
    position: absolute;
    top: -120px;
    right: -120px;
    width: 350px;
    height: 350px;
    background: radial-gradient(circle, rgba(99, 102, 241, 0.08) 0%, transparent 70%);
    border-radius: 50%;
    z-index: 0;
}

.route-detail-page .hero-section::after {
    content: '';
    position: absolute;
    bottom: -100px;
    left: -100px;
    width: 250px;
    height: 250px;
    background: radial-gradient(circle, rgba(251, 191, 36, 0.06) 0%, transparent 70%);
    border-radius: 50%;
    z-index: 0;
}

/* Hero Content - Left Side */
.route-detail-page .hero-section .hero-content {
    flex: 1;
    position: relative;
    z-index: 2;
    color: white;
    max-width: 60%;
}

.route-detail-page .hero-section .badges {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    margin-bottom: 16px;
}

.route-detail-page .hero-section .badges span {
    background: rgba(255, 255, 255, 0.12);
    padding: 6px 18px;
    border-radius: 50px;
    font-size: 0.8rem !important;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.route-detail-page .hero-section .badges .popular {
    background: linear-gradient(135deg, #6366f1, #818cf8);
}

.route-detail-page .hero-section h1 {
    font-size: 2.8rem !important;
    font-weight: 800;
    margin-bottom: 12px;
    line-height: 1.2;
    word-wrap: break-word;
}

.route-detail-page .hero-section h1 .highlight {
    background: linear-gradient(135deg, #6366f1, #818cf8);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.route-detail-page .hero-section .hero-description {
    color: #94a3b8;
    font-size: 1.05rem !important;
    max-width: 90%;
    margin-bottom: 22px;
    line-height: 1.8;
}

.route-detail-page .hero-section .btn-group {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
}

.route-detail-page .hero-section .btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 13px 32px !important;
    font-size: 0.95rem !important;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 700;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
}

.route-detail-page .hero-section .btn-primary {
    background: linear-gradient(135deg, #6366f1, #818cf8);
    color: white;
}

.route-detail-page .hero-section .btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 30px rgba(99, 102, 241, 0.3);
}

.route-detail-page .hero-section .btn-outline {
    border: 2px solid #94a3b8;
    color: #94a3b8;
    background: transparent;
}

.route-detail-page .hero-section .btn-outline:hover {
    border-color: #6366f1;
    color: #6366f1;
    transform: translateY(-2px);
}

/* Hero Image - Right Side */
.route-detail-page .hero-section .hero-image {
    flex: 0 0 320px;
    position: relative;
    z-index: 2;
}

.route-detail-page .hero-section .hero-image img {
    width: 100%;
    height: auto;
    border-radius: 16px;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
    display: block;
}

.route-detail-page .hero-section .rating-badge {
    position: absolute;
    bottom: -10px;
    right: -10px;
    background: linear-gradient(135deg, #6366f1, #818cf8);
    padding: 8px 20px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.85rem !important;
    color: white;
    white-space: nowrap;
    box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
}

/* ----- STATS GRID ----- */
.route-detail-page .stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
    margin-bottom: 30px;
}

.route-detail-page .stats-grid > div {
    background: white;
    padding: 20px 16px !important;
    border-radius: 14px;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    border-bottom: 4px solid #6366f1;
}

.route-detail-page .stats-grid > div .stat-value {
    font-size: 1.8rem !important;
    font-weight: 800;
    color: #6366f1;
}

.route-detail-page .stats-grid > div .stat-label {
    color: #64748b;
    font-size: 0.85rem !important;
}

/* ----- MAIN GRID ----- */
.route-detail-page .main-grid {
    display: grid;
    grid-template-columns: 2fr 1fr !important;
    gap: 30px;
    margin-bottom: 40px;
}

/* ----- CARDS ----- */
.route-detail-page .card {
    background: white;
    border-radius: 16px;
    padding: 28px 24px !important;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    margin-bottom: 20px;
}

.route-detail-page .card h2 {
    font-size: 1.5rem !important;
    color: #1e293b;
    margin-bottom: 16px;
}

.route-detail-page .card p {
    color: #475569;
    font-size: 0.95rem !important;
    line-height: 1.8;
    margin-bottom: 12px;
}

.route-detail-page .card .badge-list {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    margin-top: 16px;
}

.route-detail-page .card .badge-list .badge {
    display: flex;
    align-items: center;
    gap: 8px;
    background: #e0e7ff;
    padding: 8px 18px;
    border-radius: 50px;
    font-size: 0.85rem !important;
    color: #475569;
}

/* ----- ITINERARY ----- */
.route-detail-page .itinerary-grid {
    display: grid;
    grid-template-columns: 1fr 1fr !important;
    gap: 14px;
}

.route-detail-page .itinerary-grid .itinerary-item {
    background: #f8fafc;
    padding: 16px 18px !important;
    border-radius: 12px;
    border-left: 4px solid #6366f1;
}

.route-detail-page .itinerary-grid .itinerary-item .day {
    font-weight: 700;
    color: #6366f1;
    font-size: 0.8rem !important;
}

.route-detail-page .itinerary-grid .itinerary-item h4 {
    font-size: 1rem !important;
    color: #1e293b;
    margin: 6px 0;
}

.route-detail-page .itinerary-grid .itinerary-item p {
    color: #64748b;
    font-size: 0.85rem !important;
    line-height: 1.6;
}

/* ----- FEATURES ----- */
.route-detail-page .features-grid {
    display: grid;
    grid-template-columns: 1fr 1fr !important;
    gap: 10px;
}

.route-detail-page .features-grid .feature-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 14px !important;
    background: #f8fafc;
    border-radius: 10px;
}

.route-detail-page .features-grid .feature-item i {
    font-size: 1.2rem !important;
    color: #6366f1;
}

.route-detail-page .features-grid .feature-item .label {
    font-weight: 600;
    color: #1e293b;
    font-size: 0.85rem !important;
}

.route-detail-page .features-grid .feature-item .sub {
    color: #64748b;
    font-size: 0.75rem !important;
}

/* ----- SIDEBAR ----- */
.route-detail-page .sidebar {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.route-detail-page .booking-form {
    background: white;
    border-radius: 16px;
    padding: 24px 20px !important;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
}

.route-detail-page .booking-form h3 {
    font-size: 1.3rem !important;
    color: #1e293b;
    margin-bottom: 4px;
}

.route-detail-page .booking-form p {
    color: #64748b;
    font-size: 0.9rem !important;
    margin-bottom: 18px;
}

.route-detail-page .booking-form label {
    display: block;
    font-weight: 500;
    color: #1e293b;
    margin-bottom: 5px;
    font-size: 0.85rem !important;
}

.route-detail-page .booking-form input,
.route-detail-page .booking-form select {
    width: 100%;
    padding: 12px 16px !important;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    font-size: 0.9rem !important;
    margin-bottom: 14px;
    font-family: inherit;
}

.route-detail-page .booking-form button {
    width: 100%;
    padding: 14px !important;
    border: none;
    border-radius: 10px;
    font-size: 1rem !important;
    font-weight: 700;
    background: linear-gradient(135deg, #6366f1, #818cf8);
    color: white;
    cursor: pointer;
}

.route-detail-page .why-book {
    background: white;
    border-radius: 16px;
    padding: 20px 18px !important;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
}

.route-detail-page .why-book h4 {
    font-size: 1.1rem !important;
    color: #1e293b;
    margin-bottom: 14px;
}

.route-detail-page .why-book .why-item {
    display: flex;
    gap: 12px;
    margin-bottom: 12px;
    font-size: 0.9rem !important;
}

.route-detail-page .why-book .why-item i {
    color: #6366f1;
    margin-top: 2px;
}

.route-detail-page .why-book .why-item .title {
    font-weight: 500;
    color: #1e293b;
}

.route-detail-page .why-book .why-item .desc {
    color: #64748b;
    font-size: 0.8rem !important;
}

/* ----- PRICING ----- */
.route-detail-page .pricing-section {
    background: white;
    border-radius: 20px;
    padding: 35px 30px !important;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    margin-bottom: 30px;
}

.route-detail-page .pricing-section h2 {
    text-align: center;
    font-size: 1.8rem !important;
    color: #1e293b;
    margin-bottom: 8px;
}

.route-detail-page .pricing-section .subtitle {
    text-align: center;
    color: #64748b;
    font-size: 0.95rem !important;
    margin-bottom: 24px;
}

.route-detail-page .pricing-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr) !important;
    gap: 20px;
}

.route-detail-page .pricing-grid .pricing-card {
    background: #f8fafc;
    border-radius: 16px;
    padding: 24px 20px !important;
    text-align: center;
    border: 2px solid #e2e8f0;
    position: relative;
    transition: all 0.3s ease;
}

.route-detail-page .pricing-grid .pricing-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
}

.route-detail-page .pricing-grid .pricing-card.best-deal {
    border-color: #fbbf24;
    background: #fffbeb;
}

.route-detail-page .pricing-grid .pricing-card .best-deal-badge {
    position: absolute;
    top: -12px;
    left: 50%;
    transform: translateX(-50%);
    background: linear-gradient(135deg, #fbbf24, #f59e0b);
    color: white;
    padding: 4px 20px;
    border-radius: 50px;
    font-size: 0.7rem !important;
    font-weight: 600;
}

.route-detail-page .pricing-grid .pricing-card .plan-label {
    display: inline-block;
    padding: 6px 20px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.8rem !important;
    margin-bottom: 12px;
}

.route-detail-page .pricing-grid .pricing-card .price {
    font-size: 2rem !important;
    font-weight: 800;
    color: #1e293b;
}

.route-detail-page .pricing-grid .pricing-card .price-sub {
    color: #64748b;
    font-size: 0.85rem !important;
}

.route-detail-page .pricing-grid .pricing-card ul {
    list-style: none;
    text-align: left;
    margin: 16px 0;
    padding: 0;
}

.route-detail-page .pricing-grid .pricing-card ul li {
    padding: 8px 0;
    border-bottom: 1px solid #e2e8f0;
    font-size: 0.85rem !important;
    color: #475569;
}

.route-detail-page .pricing-grid .pricing-card ul li i {
    color: #6366f1;
    margin-right: 10px;
}

.route-detail-page .pricing-grid .pricing-card .btn {
    display: block;
    width: 100%;
    padding: 12px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 700;
    font-size: 0.9rem !important;
    text-align: center;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
}

.route-detail-page .pricing-grid .pricing-card .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
}

/* ----- TABLE ----- */
.route-detail-page .table-section {
    background: linear-gradient(135deg, #f8fafc, #ffffff);
    border-radius: 20px;
    padding: 35px 30px !important;
    margin: 30px 0;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
}

.route-detail-page .table-section h2 {
    text-align: center;
    font-size: 1.6rem !important;
    color: #1e293b;
    margin-bottom: 8px;
}

.route-detail-page .table-section .subtitle {
    text-align: center;
    color: #64748b;
    font-size: 0.9rem !important;
    margin-bottom: 24px;
}

.route-detail-page .table-wrapper {
    overflow-x: auto;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    -webkit-overflow-scrolling: touch;
}

.route-detail-page .table-wrapper table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    min-width: 600px;
    font-size: 0.85rem !important;
}

.route-detail-page .table-wrapper table th {
    padding: 16px 20px !important;
    text-align: left;
    font-weight: 600;
    background: linear-gradient(135deg, #0f172a, #1e293b);
    color: white;
    font-size: 0.85rem !important;
}

.route-detail-page .table-wrapper table td {
    padding: 12px 20px !important;
    border-bottom: 1px solid #e2e8f0;
    font-size: 0.8rem !important;
}

.route-detail-page .table-wrapper table td a {
    display: block;
    text-decoration: none;
    color: #1e293b;
    font-weight: 500;
    padding: 4px 0;
    font-size: 0.8rem !important;
}

.route-detail-page .table-wrapper table td a i {
    margin-right: 8px;
    font-size: 0.8rem !important;
}

.route-detail-page .table-footer {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    margin-top: 18px;
    padding: 18px 24px !important;
    background: white;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.route-detail-page .table-footer .footer-item {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 0.85rem !important;
    color: #475569;
}

/* ----- REVIEWS ----- */
.route-detail-page .reviews-section {
    background: white;
    border-radius: 20px;
    padding: 35px 30px !important;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    margin-bottom: 30px;
}

.route-detail-page .reviews-section h2 {
    text-align: center;
    font-size: 1.6rem !important;
    color: #1e293b;
    margin-bottom: 18px;
}

.route-detail-page .reviews-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr) !important;
    gap: 16px;
}

.route-detail-page .reviews-grid .review-card {
    background: #f8fafc;
    padding: 18px 20px !important;
    border-radius: 12px;
}

.route-detail-page .reviews-grid .review-card .stars {
    color: #fbbf24;
    font-size: 0.85rem !important;
    margin-bottom: 8px;
}

.route-detail-page .reviews-grid .review-card p {
    color: #475569;
    font-style: italic;
    font-size: 0.9rem !important;
    margin-bottom: 8px;
}

.route-detail-page .reviews-grid .review-card .author {
    font-weight: 600;
    color: #1e293b;
    font-size: 0.9rem !important;
}

.route-detail-page .reviews-grid .review-card .detail {
    color: #94a3b8;
    font-size: 0.75rem !important;
}

/* ----- FAQS ----- */
.route-detail-page .faqs-section {
    background: white;
    border-radius: 20px;
    padding: 35px 30px !important;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    margin-bottom: 30px;
}

.route-detail-page .faqs-section h2 {
    text-align: center;
    font-size: 1.6rem !important;
    color: #1e293b;
    margin-bottom: 18px;
}

.route-detail-page .faqs-grid {
    display: grid;
    grid-template-columns: 1fr 1fr !important;
    gap: 14px;
}

.route-detail-page .faqs-grid .faq-item {
    padding: 16px 20px !important;
    background: #f8fafc;
    border-radius: 12px;
}

.route-detail-page .faqs-grid .faq-item h4 {
    color: #1e293b;
    font-size: 0.95rem !important;
    margin-bottom: 6px;
}

.route-detail-page .faqs-grid .faq-item p {
    color: #64748b;
    font-size: 0.85rem !important;
}

/* ----- CTA ----- */
.route-detail-page .cta-section {
    background: linear-gradient(135deg, #0f172a, #1e293b);
    border-radius: 20px;
    padding: 45px 40px !important;
    text-align: center;
}

.route-detail-page .cta-section h2 {
    font-size: 1.8rem !important;
    color: white;
    margin-bottom: 12px;
}

.route-detail-page .cta-section p {
    color: #94a3b8;
    font-size: 0.95rem !important;
    max-width: 600px;
    margin: 0 auto 24px;
}

.route-detail-page .cta-section .cta-buttons {
    display: flex;
    gap: 16px;
    justify-content: center;
}

.route-detail-page .cta-section .btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 14px 36px !important;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 700;
    font-size: 0.95rem !important;
    transition: all 0.3s ease;
}

.route-detail-page .cta-section .btn-primary {
    background: linear-gradient(135deg, #6366f1, #818cf8);
    color: white;
}

.route-detail-page .cta-section .btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 30px rgba(99, 102, 241, 0.3);
}

.route-detail-page .cta-section .btn-outline {
    border: 2px solid #6366f1;
    color: #6366f1;
    background: transparent;
}

.route-detail-page .cta-section .btn-outline:hover {
    background: rgba(99, 102, 241, 0.1);
    transform: translateY(-2px);
}

/* ============================================================
   RESPONSIVE BREAKPOINTS
   ============================================================ */

/* ----- TABLET (768px - 1023px) ----- */
@media (max-width: 1023px) {
    .route-detail-page .hero-section {
        padding: 35px 28px !important;
        flex-direction: column;
        text-align: center;
        gap: 30px;
        min-height: auto;
    }

    .route-detail-page .hero-section .hero-content {
        max-width: 100%;
    }

    .route-detail-page .hero-section .badges {
        justify-content: center;
    }

    .route-detail-page .hero-section h1 {
        font-size: 2.2rem !important;
    }

    .route-detail-page .hero-section .hero-description {
        max-width: 100%;
        font-size: 1rem !important;
    }

    .route-detail-page .hero-section .btn-group {
        justify-content: center;
    }

    .route-detail-page .hero-section .hero-image {
        flex: 0 0 280px;
        max-width: 280px;
    }

    .route-detail-page .hero-section .rating-badge {
        font-size: 0.75rem !important;
        padding: 6px 16px;
    }

    .route-detail-page .main-grid {
        grid-template-columns: 1fr !important;
    }

    .route-detail-page .pricing-grid {
        grid-template-columns: repeat(2, 1fr) !important;
    }

    .route-detail-page .reviews-grid {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}

/* ----- MOBILE (below 768px) ----- */
@media (max-width: 767px) {
    .route-detail-page .hero-section {
        padding: 25px 18px !important;
        border-radius: 18px;
        gap: 24px;
    }

    .route-detail-page .hero-section h1 {
        font-size: 1.6rem !important;
    }

    .route-detail-page .hero-section .hero-description {
        font-size: 0.9rem !important;
    }

    .route-detail-page .hero-section .btn {
        padding: 10px 20px !important;
        font-size: 0.85rem !important;
        flex: 1 1 auto;
        min-width: 120px;
    }

    .route-detail-page .hero-section .btn-group {
        flex-direction: column;
        width: 100%;
    }

    .route-detail-page .hero-section .hero-image {
        flex: 0 0 220px;
        max-width: 220px;
    }

    .route-detail-page .hero-section .rating-badge {
        font-size: 0.65rem !important;
        padding: 5px 12px;
        bottom: -8px;
        right: -8px;
    }

    .route-detail-page .stats-grid {
        grid-template-columns: 1fr 1fr !important;
        gap: 10px;
    }

    .route-detail-page .stats-grid > div .stat-value {
        font-size: 1.4rem !important;
    }

    .route-detail-page .stats-grid > div .stat-label {
        font-size: 0.7rem !important;
    }

    .route-detail-page .card {
        padding: 18px 16px !important;
    }

    .route-detail-page .card h2 {
        font-size: 1.2rem !important;
    }

    .route-detail-page .itinerary-grid {
        grid-template-columns: 1fr !important;
    }

    .route-detail-page .features-grid {
        grid-template-columns: 1fr !important;
    }

    .route-detail-page .pricing-grid {
        grid-template-columns: 1fr !important;
    }

    .route-detail-page .pricing-section {
        padding: 20px 16px !important;
    }

    .route-detail-page .pricing-section h2 {
        font-size: 1.3rem !important;
    }

    .route-detail-page .reviews-grid {
        grid-template-columns: 1fr !important;
    }

    .route-detail-page .faqs-grid {
        grid-template-columns: 1fr !important;
    }

    .route-detail-page .table-section {
        padding: 20px 16px !important;
    }

    .route-detail-page .table-section h2 {
        font-size: 1.2rem !important;
    }

    .route-detail-page .table-wrapper table {
        font-size: 0.7rem !important;
        min-width: 400px;
    }

    .route-detail-page .table-wrapper table th {
        font-size: 0.7rem !important;
        padding: 10px 12px !important;
    }

    .route-detail-page .table-wrapper table td {
        font-size: 0.65rem !important;
        padding: 8px 12px !important;
    }

    .route-detail-page .table-wrapper table td a {
        font-size: 0.65rem !important;
    }

    .route-detail-page .table-footer {
        flex-direction: column !important;
        align-items: flex-start !important;
        gap: 8px;
        padding: 14px 16px !important;
    }

    .route-detail-page .cta-section {
        padding: 25px 18px !important;
    }

    .route-detail-page .cta-section h2 {
        font-size: 1.3rem !important;
    }

    .route-detail-page .cta-section .cta-buttons {
        flex-direction: column;
        align-items: center;
    }

    .route-detail-page .cta-section .btn {
        width: 100%;
        justify-content: center;
    }

    .route-detail-page .booking-form {
        padding: 18px 16px !important;
    }

    .route-detail-page .why-book {
        padding: 16px 14px !important;
    }
}

/* ----- VERY SMALL MOBILE (below 400px) ----- */
@media (max-width: 400px) {
    .route-detail-page .hero-section {
        padding: 18px 14px !important;
    }

    .route-detail-page .hero-section h1 {
        font-size: 1.3rem !important;
    }

    .route-detail-page .hero-section .badges span {
        font-size: 0.6rem !important;
        padding: 4px 12px;
    }

    .route-detail-page .hero-section .hero-image {
        flex: 0 0 180px;
        max-width: 180px;
    }

    .route-detail-page .stats-grid > div .stat-value {
        font-size: 1.1rem !important;
    }

    .route-detail-page .stats-grid > div {
        padding: 10px 8px !important;
    }

    .route-detail-page .pricing-grid .pricing-card .price {
        font-size: 1.5rem !important;
    }
}
</style>

<!-- ============================================================
     HTML STRUCTURE
     ============================================================ -->
<section class="route-detail-page">
    <div class="container">

        <!-- BREADCRUMB -->
        <div class="breadcrumb">
            <a href="index.php"><i class="fas fa-home"></i> Home</a>
            <span><i class="fas fa-chevron-right"></i></span>
            <a href="services.php">Services</a>
            <span><i class="fas fa-chevron-right"></i></span>
            <span style="color:#1e293b; font-weight:500;">Delhi to Jodhpur Innova on Rent</span>
        </div>

        <!-- HERO SECTION - PERFECT ON ALL DEVICES -->
        <div class="hero-section">
            <div class="hero-content">
                <div class="badges">
                    <span class="popular"><i class="fas fa-star"></i> Blue City</span>
                    <span><i class="fas fa-clock"></i> <?php echo $travelTime; ?></span>
                    <span><i class="fas fa-route"></i> <?php echo $distance; ?></span>
                </div>
                <h1>
                    <?php echo $routeName; ?> <span class="highlight">Innova on Rent</span>
                </h1>
                <p class="hero-description">
                    Book a premium <?php echo $vehicleType; ?> for your Jodhpur trip. Experience the Blue City with our comfortable and reliable service.
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
                    <i class="fas fa-check-circle"></i> 4.5 ★ (95+ Reviews)
                </div>
            </div>
        </div>

        <!-- STATS GRID -->
        <div class="stats-grid">
            <div>
                <div class="stat-value"><?php echo $distance; ?></div>
                <div class="stat-label">Total Distance</div>
            </div>
            <div>
                <div class="stat-value"><?php echo $travelTime; ?></div>
                <div class="stat-label">Travel Time</div>
            </div>
            <div>
                <div class="stat-value"><?php echo $pricePerKm; ?></div>
                <div class="stat-label">Starting Rate</div>
            </div>
            <div>
                <div class="stat-value">24/7</div>
                <div class="stat-label">Customer Support</div>
            </div>
        </div>

        <!-- MAIN GRID -->
        <div class="main-grid">
            <!-- LEFT COLUMN -->
            <div>
                <!-- ABOUT -->
                <div class="card">
                    <h2><i class="fas fa-info-circle" style="color:#6366f1; margin-right:10px;"></i> About <?php echo $routeName; ?> Route</h2>
                    <p>
                        The <strong>Delhi to Jodhpur</strong> route is a fascinating journey through the heart of Rajasthan, covering approximately 590 kilometers. 
                        Jodhpur, the <strong>"Blue City"</strong>, is known for its majestic Mehrangarh Fort, blue-painted houses, and rich Rajput heritage.
                    </p>
                    <p>
                        With our premium <strong>Innova Crysta on rent</strong>, you can enjoy a comfortable and hassle-free journey to Jodhpur. 
                        Our professional drivers are experienced in long-distance driving, ensuring your safety and comfort throughout the journey.
                    </p>
                    <div class="badge-list">
                        <div class="badge"><i class="fas fa-check-circle" style="color:#6366f1;"></i> 7 & 8 Seater Available</div>
                        <div class="badge"><i class="fas fa-check-circle" style="color:#6366f1;"></i> AC & Entertainment System</div>
                        <div class="badge"><i class="fas fa-check-circle" style="color:#6366f1;"></i> Professional Driver</div>
                    </div>
                </div>

                <!-- ITINERARY -->
                <div class="card">
                    <h2><i class="fas fa-route" style="color:#fbbf24; margin-right:10px;"></i> Suggested Itinerary</h2>
                    <div class="itinerary-grid">
                        <div class="itinerary-item" style="border-left-color:#6366f1;">
                            <div class="day">Day 1</div>
                            <h4>Delhi to Jodhpur</h4>
                            <p>Depart early from Delhi, drive via Jaipur, reach Jodhpur, check-in to hotel, explore local markets.</p>
                        </div>
                        <div class="itinerary-item" style="border-left-color:#fbbf24;">
                            <div class="day">Day 2</div>
                            <h4>Jodhpur Sightseeing</h4>
                            <p>Visit Mehrangarh Fort, Jaswant Thada, Umaid Bhawan Palace, and the blue city markets.</p>
                        </div>
                        <div class="itinerary-item" style="border-left-color:#3b82f6;">
                            <div class="day">Day 3</div>
                            <h4>Jodhpur to Delhi</h4>
                            <p>Visit Mandore Gardens or enjoy the scenic drive back to Delhi with memorable experiences.</p>
                        </div>
                        <div class="itinerary-item" style="border-left-color:#ec4899;">
                            <div class="day">Customize</div>
                            <h4>Flexible Options</h4>
                            <p>Extend your trip to Jaisalmer, Udaipur, or explore the Thar Desert.</p>
                        </div>
                    </div>
                </div>

                <!-- FEATURES -->
                <div class="card">
                    <h2><i class="fas fa-car" style="color:#8b5cf6; margin-right:10px;"></i> <?php echo $vehicleType; ?> Features</h2>
                    <div class="features-grid">
                        <div class="feature-item">
                            <i class="fas fa-users" style="color:#6366f1;"></i>
                            <div>
                                <div class="label">7 & 8 Seater</div>
                                <div class="sub">Spacious seating</div>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-snowflake" style="color:#6366f1;"></i>
                            <div>
                                <div class="label">AC & Climate Control</div>
                                <div class="sub">Comfortable ride</div>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-music" style="color:#ec4899;"></i>
                            <div>
                                <div class="label">Entertainment System</div>
                                <div class="sub">Music & Video</div>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-bolt" style="color:#fbbf24;"></i>
                            <div>
                                <div class="label">USB Charging</div>
                                <div class="sub">Stay connected</div>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-shield-alt"></i>
                            <div>
                                <div class="label">Safety Features</div>
                                <div class="sub">Airbags & ABS</div>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-user-tie" style="color:#8b5cf6;"></i>
                            <div>
                                <div class="label">Professional Driver</div>
                                <div class="sub">Long distance expert</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN - SIDEBAR -->
            <div class="sidebar">
                <!-- BOOKING FORM -->
                <div id="booking" class="booking-form">
                    <h3><i class="fas fa-calendar-check" style="color:#6366f1;"></i> Book Now</h3>
                    <p>Book <?php echo $routeName; ?> Innova on Rent</p>
                    <form method="POST" action="contact.php">
                        <label>Travel Date</label>
                        <input type="date" name="travel_date">
                        <label>Vehicle Type</label>
                        <select name="vehicle_type">
                            <option value="7 Seater">7 Seater Innova Crysta</option>
                            <option value="8 Seater">8 Seater Innova Crysta</option>
                            <option value="Luxury">Luxury Innova Crysta</option>
                        </select>
                        <label>Trip Type</label>
                        <select name="trip_type">
                            <option value="One Way">One Way</option>
                            <option value="Round Trip" selected>Round Trip</option>
                            <option value="Custom">Custom</option>
                        </select>
                        <label>Your Phone Number</label>
                        <input type="tel" name="phone" placeholder="+91 98765 43210">
                        <input type="hidden" name="destination" value="<?php echo $routeName; ?>">
                        <input type="hidden" name="vehicle" value="<?php echo $vehicleType; ?>">
                        <button type="submit" name="contact_submit">
                            <i class="fas fa-paper-plane" style="margin-right:8px;"></i> Send Inquiry
                        </button>
                    </form>
                    <div style="margin-top:16px; padding-top:16px; border-top:1px solid #e2e8f0; display:flex; justify-content:space-between; color:#475569; font-size:0.9rem;">
                        <span><i class="fas fa-phone" style="color:#6366f1;"></i> +91 7290885949</span>
                        <span><i class="fab fa-whatsapp" style="color:#25D366;"></i> WhatsApp</span>
                    </div>
                </div>

                <!-- WHY BOOK -->
                <div class="why-book">
                    <h4>Why Book With Us?</h4>
                    <div class="why-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <div class="title">Best Price Guarantee</div>
                            <div class="desc">Competitive rates with no hidden charges</div>
                        </div>
                    </div>
                    <div class="why-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <div class="title">Professional Drivers</div>
                            <div class="desc">Experienced & courteous chauffeurs</div>
                        </div>
                    </div>
                    <div class="why-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <div class="title">Well-Maintained Fleet</div>
                            <div class="desc">Regularly serviced & sanitized vehicles</div>
                        </div>
                    </div>
                    <div class="why-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <div class="title">24/7 Support</div>
                            <div class="desc">Always available for your assistance</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PRICING SECTION -->
        <div id="pricing" class="pricing-section">
            <h2><i class="fas fa-rupee-sign" style="color:#6366f1;"></i> Pricing for <?php echo $routeName; ?> Innova on Rent</h2>
            <p class="subtitle">Choose the best option for your journey</p>
            <div class="pricing-grid">
                <!-- One Way -->
                <div class="pricing-card">
                    <div class="plan-label" style="background:#6366f120; color:#6366f1;">One Way</div>
                    <div class="price">₹<?php echo str_replace('₹', '', $pricePerKm); ?></div>
                    <div class="price-sub">Per Kilometer</div>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> <?php echo $distance; ?> covered</li>
                        <li><i class="fas fa-check-circle"></i> <?php echo $travelTime; ?> travel time</li>
                        <li><i class="fas fa-check-circle"></i> Professional driver</li>
                        <li><i class="fas fa-check-circle"></i> Fuel included</li>
                    </ul>
                    <a href="#booking" class="btn" style="background:linear-gradient(135deg, #6366f1, #818cf8); color:white;">Book One Way</a>
                </div>

                <!-- Round Trip -->
                <div class="pricing-card best-deal">
                    <div class="best-deal-badge">BEST DEAL</div>
                    <div class="plan-label" style="background:#fbbf2420; color:#f59e0b;">Round Trip</div>
                    <div class="price"><?php echo $roundTripPrice; ?></div>
                    <div class="price-sub">Total Package</div>
                    <ul>
                        <li><i class="fas fa-check-circle" style="color:#fbbf24;"></i> 1200 km total</li>
                        <li><i class="fas fa-check-circle" style="color:#fbbf24;"></i> 4 days package</li>
                        <li><i class="fas fa-check-circle" style="color:#fbbf24;"></i> Long distance expert</li>
                        <li><i class="fas fa-check-circle" style="color:#fbbf24;"></i> Fuel & toll included</li>
                    </ul>
                    <a href="#booking" class="btn" style="background:linear-gradient(135deg, #fbbf24, #f59e0b); color:#0f172a;">Book Round Trip</a>
                </div>

                <!-- Custom -->
                <div class="pricing-card">
                    <div class="plan-label" style="background:#3b82f620; color:#3b82f6;">Custom</div>
                    <div class="price">Flexible</div>
                    <div class="price-sub">Tailored to your needs</div>
                    <ul>
                        <li><i class="fas fa-check-circle" style="color:#3b82f6;"></i> Custom itinerary</li>
                        <li><i class="fas fa-check-circle" style="color:#3b82f6;"></i> Multiple stops</li>
                        <li><i class="fas fa-check-circle" style="color:#3b82f6;"></i> Flexible duration</li>
                        <li><i class="fas fa-check-circle" style="color:#3b82f6;"></i> 24/7 support</li>
                    </ul>
                    <a href="#booking" class="btn" style="background:linear-gradient(135deg, #3b82f6, #6366f1); color:white;">Get Custom Quote</a>
                </div>
            </div>
        </div>

        <!-- TABLE SECTION -->
        <div class="table-section">
            <h2><i class="fas fa-table" style="color:#6366f1;"></i> Most Popular Destinations &amp; <span style="background:linear-gradient(135deg, #6366f1, #818cf8); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Tour Packages</span></h2>
            <p class="subtitle">Click on any destination to view Innova Crysta rental details</p>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th><i class="fas fa-star" style="color:#fbbf24;"></i> Popular Destinations</th>
                            <th><i class="fas fa-route" style="color:#3b82f6;"></i> Famous Routes</th>
                            <th><i class="fas fa-users" style="color:#ec4899;"></i> Tour Packages</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $popular = [
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
                        $routes = [
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
                        $packages = [
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
                        $popularKeys = array_keys($popular);
                        $routesKeys = array_keys($routes);
                        $packagesKeys = array_keys($packages);
                        $maxRows = max(count($popularKeys), count($routesKeys), count($packagesKeys));
                        for ($i = 0; $i < $maxRows; $i++):
                            $bg = $i % 2 == 0 ? 'white' : '#f8fafc';
                        ?>
                        <tr style="background:<?php echo $bg; ?>;">
                            <td>
                                <?php if (isset($popularKeys[$i])): ?>
                                <a href="<?php echo $popular[$popularKeys[$i]]; ?>.php">
                                    <i class="fas fa-map-pin" style="color:#00b09b;"></i> <?php echo $popularKeys[$i]; ?>
                                </a>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if (isset($routesKeys[$i])): ?>
                                <a href="<?php echo $routes[$routesKeys[$i]]; ?>.php">
                                    <i class="fas fa-route" style="color:#3b82f6;"></i> <?php echo $routesKeys[$i]; ?>
                                </a>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if (isset($packagesKeys[$i])): ?>
                                <a href="<?php echo $packages[$packagesKeys[$i]]; ?>.php">
                                    <i class="fas fa-box" style="color:#ec4899;"></i> <?php echo $packagesKeys[$i]; ?>
                                </a>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
            <div class="table-footer">
                <div class="footer-item"><i class="fas fa-car" style="color:#6366f1;"></i> Innova Crysta 7 & 8 Seater available</div>
                <div class="footer-item"><i class="fas fa-check-circle" style="color:#6366f1;"></i> Fuel & Driver Included</div>
                <div class="footer-item"><i class="fas fa-clock" style="color:#f59e0b;"></i> 24/7 Customer Support</div>
                <div class="footer-item"><i class="fas fa-rupee-sign" style="color:#6366f1;"></i> Best Price Guarantee</div>
            </div>
        </div>

        <!-- REVIEWS -->
        <div class="reviews-section">
            <h2><i class="fas fa-star" style="color:#fbbf24;"></i> Customer Reviews</h2>
            <div class="reviews-grid">
                <div class="review-card">
                    <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p>"Amazing Jodhpur trip! The Innova was comfortable and the driver was excellent for the long journey."</p>
                    <div class="author">Rajesh Kumar</div>
                    <div class="detail">Delhi • 5 Trips</div>
                </div>
                <div class="review-card">
                    <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p>"Perfect family vacation to Jodhpur! The 7-seater was spacious and comfortable for our family of 5."</p>
                    <div class="author">Anita Reddy</div>
                    <div class="detail">Gurgaon • 3 Trips</div>
                </div>
                <div class="review-card">
                    <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p>"On-time pickup and comfortable ride. The driver was very professional. Highly recommend for Jodhpur trips."</p>
                    <div class="author">Luxury Crysta on Rent Delhi</div>
                    <div class="detail">Noida • 6 Trips</div>
                </div>
            </div>
        </div>

        <!-- FAQS -->
        <div class="faqs-section">
            <h2><i class="fas fa-question-circle" style="color:#6366f1;"></i> Frequently Asked Questions</h2>
            <div class="faqs-grid">
                <div class="faq-item">
                    <h4>What is the distance from Delhi to Jodhpur?</h4>
                    <p>The distance from Delhi to Jodhpur is approximately 590 km via NH48 and Jaipur.</p>
                </div>
                <div class="faq-item">
                    <h4>How much does Innova Crysta cost for Delhi to Jodhpur?</h4>
                    <p>Starting from ₹17/km for one way or ₹5,500/day for round trips. Custom packages also available.</p>
                </div>
                <div class="faq-item">
                    <h4>How long does it take to reach Jodhpur from Delhi?</h4>
                    <p>The journey typically takes 9-10 hours depending on traffic and road conditions.</p>
                </div>
                <div class="faq-item">
                    <h4>What are the must-visit places in Jodhpur?</h4>
                    <p>Mehrangarh Fort, Jaswant Thada, Umaid Bhawan Palace, Mandore Gardens, and the blue city markets.</p>
                </div>
                <div class="faq-item">
                    <h4>Is the Innova suitable for long-distance travel?</h4>
                    <p>Yes, Innova Crysta is perfect for long-distance travel with its comfortable seating and powerful engine.</p>
                </div>
                <div class="faq-item">
                    <h4>What is included in the rental package?</h4>
                    <p>Fuel, driver charges, and basic insurance are included. Toll and parking fees are extra.</p>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="cta-section">
            <h2>Ready to Book Your Jodhpur Trip?</h2>
            <p>Experience the Blue City with our premium Innova Crysta rental service. Book now for the best rates.</p>
            <div class="cta-buttons">
                <a href="#booking" class="btn btn-primary">
                    <i class="fas fa-calendar-check"></i> Book Now
                </a>
                <a href="tel:+917290885949" class="btn btn-outline">
                    <i class="fas fa-phone"></i> Call for Availability
                </a>
            </div>
        </div>

    </div>
</section>

<?php include 'seo_keywords.php'; ?>
<?php include 'footer.php'; ?>