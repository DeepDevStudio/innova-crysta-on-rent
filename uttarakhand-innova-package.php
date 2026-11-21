<?php
// ============================================
// UTTARAKHAND-INNOVA-PACKAGE.PHP
// ============================================
include 'header.php';

// Define route specific variables
$packageName = "Uttarakhand Innova Package";
$vehicleType = "Innova Crysta";
$distance = "1,200+ km";
$travelTime = "8-10 days";
$pricePerKm = "₹17/km";
$dailyPrice = "₹5,500/day";
$packagePrice = "₹62,000";
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
    background: linear-gradient(135deg, #059669, #34d399);
}

.route-detail-page .hero-section h1 {
    font-size: 2.8rem !important;
    font-weight: 800;
    margin-bottom: 12px;
    line-height: 1.2;
    word-wrap: break-word;
}

.route-detail-page .hero-section h1 .highlight {
    background: linear-gradient(135deg, #059669, #34d399);
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
    background: linear-gradient(135deg, #059669, #34d399);
    color: white;
}

.route-detail-page .hero-section .btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 30px rgba(5, 150, 105, 0.3);
}

.route-detail-page .hero-section .btn-outline {
    border: 2px solid #94a3b8;
    color: #94a3b8;
    background: transparent;
}

.route-detail-page .hero-section .btn-outline:hover {
    border-color: #059669;
    color: #059669;
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
    background: linear-gradient(135deg, #059669, #34d399);
    padding: 8px 20px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.85rem !important;
    color: white;
    white-space: nowrap;
    box-shadow: 0 4px 15px rgba(5, 150, 105, 0.3);
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
    border-bottom: 4px solid #059669;
}

.route-detail-page .stats-grid > div .stat-value {
    font-size: 1.8rem !important;
    font-weight: 800;
    color: #059669;
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
    background: #a7f3d0;
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
    border-left: 4px solid #059669;
}

.route-detail-page .itinerary-grid .itinerary-item .day {
    font-weight: 700;
    color: #059669;
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
    color: #059669;
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
    background: linear-gradient(135deg, #059669, #34d399);
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
    color: #059669;
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
    color: #059669;
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
    background: linear-gradient(135deg, #059669, #34d399);
    color: white;
}

.route-detail-page .cta-section .btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 30px rgba(5, 150, 105, 0.3);
}

.route-detail-page .cta-section .btn-outline {
    border: 2px solid #059669;
    color: #059669;
    background: transparent;
}

.route-detail-page .cta-section .btn-outline:hover {
    background: rgba(5, 150, 105, 0.1);
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
            <a href="packages.php">Tour Packages</a>
            <span><i class="fas fa-chevron-right"></i></span>
            <span style="color:#1e293b; font-weight:500;">Uttarakhand Innova Package</span>
        </div>

        <!-- HERO SECTION - PERFECT ON ALL DEVICES -->
        <div class="hero-section">
            <div class="hero-content">
                <div class="badges">
                    <span class="popular"><i class="fas fa-mountain"></i> Land of Gods</span>
                    <span><i class="fas fa-clock"></i> <?php echo $travelTime; ?></span>
                    <span><i class="fas fa-route"></i> <?php echo $distance; ?></span>
                </div>
                <h1>
                    <?php echo $packageName; ?> <span class="highlight">Explore Uttarakhand</span>
                </h1>
                <p class="hero-description">
                    Book a premium <?php echo $vehicleType; ?> for your Uttarakhand tour. Experience the land of gods with our comfortable and reliable service.
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
                <img src="images/crystamain.jpg" alt="<?php echo $packageName; ?> Innova Crysta">
                <div class="rating-badge">
                    <i class="fas fa-check-circle"></i> 4.7 ★ (170+ Travelers)
                </div>
            </div>
        </div>

        <!-- STATS GRID -->
        <div class="stats-grid">
            <div>
                <div class="stat-value">10+</div>
                <div class="stat-label">Destinations</div>
            </div>
            <div>
                <div class="stat-value"><?php echo $travelTime; ?></div>
                <div class="stat-label">Package Duration</div>
            </div>
            <div>
                <div class="stat-value"><?php echo $distance; ?></div>
                <div class="stat-label">Total Distance</div>
            </div>
            <div>
                <div class="stat-value">24/7</div>
                <div class="stat-label">Travel Support</div>
            </div>
        </div>

        <!-- MAIN GRID -->
        <div class="main-grid">
            <!-- LEFT COLUMN -->
            <div>
                <!-- ABOUT -->
                <div class="card">
                    <h2><i class="fas fa-info-circle" style="color:#059669; margin-right:10px;"></i> About <?php echo $packageName; ?></h2>
                    <p>
                        The <strong>Uttarakhand</strong> tour is a divine journey through the beautiful Himalayan state of India, known as the "Land of Gods". This package covers the most beautiful destinations including <strong>Nainital, Mussoorie, Haridwar, Rishikesh, Dehradun, Ranikhet, and Almora</strong>.
                    </p>
                    <p>
                        With our premium <strong>Innova Crysta on rent</strong>, you can explore the serene lakes, ancient temples, and lush valleys of Uttarakhand. 
                        Our professional drivers are experienced in mountain driving, ensuring your safety and comfort throughout this spiritual journey.
                    </p>
                    <div class="badge-list">
                        <div class="badge"><i class="fas fa-check-circle" style="color:#059669;"></i> 7 & 8 Seater Available</div>
                        <div class="badge"><i class="fas fa-check-circle" style="color:#059669;"></i> Experienced Mountain Drivers</div>
                        <div class="badge"><i class="fas fa-check-circle" style="color:#059669;"></i> Flexible Itinerary</div>
                    </div>
                </div>

                <!-- ITINERARY -->
                <div class="card">
                    <h2><i class="fas fa-route" style="color:#059669; margin-right:10px;"></i> Uttarakhand Tour Itinerary</h2>
                    <div class="itinerary-grid">
                        <div class="itinerary-item">
                            <div class="day">Day 1-2</div>
                            <h4>Delhi to Nainital (Lake District)</h4>
                            <p>Drive from Delhi to Nainital, explore Naini Lake, Naina Devi Temple, and enjoy the scenic views.</p>
                        </div>
                        <div class="itinerary-item">
                            <div class="day">Day 3-4</div>
                            <h4>Nainital to Mussoorie (Queen of Hills)</h4>
                            <p>Journey to Mussoorie, visit Gun Hill, Kempty Falls, Company Garden, and Mall Road.</p>
                        </div>
                        <div class="itinerary-item">
                            <div class="day">Day 5-6</div>
                            <h4>Mussoorie to Haridwar & Rishikesh</h4>
                            <p>Drive to Haridwar, attend Ganga Aarti, visit Rishikesh, and enjoy river rafting.</p>
                        </div>
                        <div class="itinerary-item">
                            <div class="day">Day 7-8</div>
                            <h4>Rishikesh to Dehradun</h4>
                            <p>Explore Dehradun, visit Robber's Cave, Sahastradhara, and the local markets.</p>
                        </div>
                        <div class="itinerary-item">
                            <div class="day">Day 9-10</div>
                            <h4>Ranikhet & Almora</h4>
                            <p>Visit Ranikhet and Almora, explore the beautiful hill stations and local culture.</p>
                        </div>
                        <div class="itinerary-item">
                            <div class="day">Customize</div>
                            <h4>Flexible Options</h4>
                            <p>Add Jim Corbett, Chopta, or extend your stay in any destination.</p>
                        </div>
                    </div>
                </div>

                <!-- FEATURES -->
                <div class="card">
                    <h2><i class="fas fa-car" style="color:#059669; margin-right:10px;"></i> <?php echo $vehicleType; ?> Features</h2>
                    <div class="features-grid">
                        <div class="feature-item">
                            <i class="fas fa-users" style="color:#059669;"></i>
                            <div>
                                <div class="label">7 & 8 Seater</div>
                                <div class="sub">Spacious seating</div>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-snowflake" style="color:#059669;"></i>
                            <div>
                                <div class="label">AC & Climate Control</div>
                                <div class="sub">Comfortable ride</div>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-music" style="color:#059669;"></i>
                            <div>
                                <div class="label">Entertainment System</div>
                                <div class="sub">Music & Video</div>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-bolt" style="color:#059669;"></i>
                            <div>
                                <div class="label">USB Charging</div>
                                <div class="sub">Stay connected</div>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-shield-alt" style="color:#059669;"></i>
                            <div>
                                <div class="label">Safety Features</div>
                                <div class="sub">Airbags & ABS</div>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-user-tie" style="color:#059669;"></i>
                            <div>
                                <div class="label">Experienced Driver</div>
                                <div class="sub">Mountain driving expert</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN - SIDEBAR -->
            <div class="sidebar">
                <!-- BOOKING FORM -->
                <div id="booking" class="booking-form">
                    <h3><i class="fas fa-calendar-check" style="color:#059669;"></i> Book Uttarakhand Package</h3>
                    <p>Book <?php echo $packageName; ?> with Innova Crysta</p>
                    <form method="POST" action="contact.php">
                        <label>Travel Date</label>
                        <input type="date" name="travel_date">
                        <label>Vehicle Type</label>
                        <select name="vehicle_type">
                            <option value="7 Seater">7 Seater Innova Crysta</option>
                            <option value="8 Seater">8 Seater Innova Crysta</option>
                            <option value="Luxury">Luxury Innova Crysta</option>
                        </select>
                        <label>Package Type</label>
                        <select name="trip_type">
                            <option value="Standard" selected>Standard Package</option>
                            <option value="Premium">Premium Package</option>
                            <option value="Luxury">Luxury Package</option>
                        </select>
                        <label>Number of Travelers</label>
                        <input type="number" name="passengers" placeholder="Number of people" min="1" max="8">
                        <label>Your Phone Number</label>
                        <input type="tel" name="phone" placeholder="+91 98765 43210">
                        <input type="hidden" name="destination" value="<?php echo $packageName; ?>">
                        <input type="hidden" name="vehicle" value="<?php echo $vehicleType; ?>">
                        <button type="submit" name="contact_submit">
                            <i class="fas fa-paper-plane" style="margin-right:8px;"></i> Send Inquiry
                        </button>
                    </form>
                    <div style="margin-top:16px; padding-top:16px; border-top:1px solid #e2e8f0; display:flex; justify-content:space-between; color:#475569; font-size:0.9rem;">
                        <span><i class="fas fa-phone" style="color:#059669;"></i> +91 7290885949</span>
                        <span><i class="fab fa-whatsapp" style="color:#25D366;"></i> WhatsApp</span>
                    </div>
                </div>

                <!-- WHY BOOK -->
                <div class="why-book">
                    <h4>Why Choose This Package?</h4>
                    <div class="why-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <div class="title">Complete Uttarakhand Tour</div>
                            <div class="desc">Covering all major hill stations</div>
                        </div>
                    </div>
                    <div class="why-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <div class="title">Expert Drivers</div>
                            <div class="desc">Experienced mountain drivers</div>
                        </div>
                    </div>
                    <div class="why-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <div class="title">Flexible Schedule</div>
                            <div class="desc">Customizable itinerary</div>
                        </div>
                    </div>
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
                            <div class="title">24/7 Support</div>
                            <div class="desc">Always available for your assistance</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PRICING SECTION -->
        <div id="pricing" class="pricing-section">
            <h2><i class="fas fa-rupee-sign" style="color:#059669;"></i> Uttarakhand Package Pricing</h2>
            <p class="subtitle">Choose the best package for your Uttarakhand tour</p>
            <div class="pricing-grid">
                <!-- Standard Package -->
                <div class="pricing-card">
                    <div class="plan-label" style="background:#05966920; color:#059669;">Standard</div>
                    <div class="price">₹<?php echo str_replace('₹', '', $pricePerKm); ?></div>
                    <div class="price-sub">Per Kilometer</div>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> 1,200+ km covered</li>
                        <li><i class="fas fa-check-circle"></i> 8-10 days duration</li>
                        <li><i class="fas fa-check-circle"></i> Professional driver</li>
                        <li><i class="fas fa-check-circle"></i> Fuel included</li>
                    </ul>
                    <a href="#booking" class="btn" style="background:linear-gradient(135deg, #059669, #34d399); color:white;">Book Standard</a>
                </div>

                <!-- Premium Package -->
                <div class="pricing-card best-deal">
                    <div class="best-deal-badge">BEST DEAL</div>
                    <div class="plan-label" style="background:#fbbf2420; color:#f59e0b;">Premium</div>
                    <div class="price">₹55,000/-</div>
                    <div class="price-sub">Total Package</div>
                    <ul>
                        <li><i class="fas fa-check-circle" style="color:#fbbf24;"></i> 1,200+ km total</li>
                        <li><i class="fas fa-check-circle" style="color:#fbbf24;"></i> 08-10 days package</li>
                        <li><i class="fas fa-check-circle" style="color:#fbbf24;"></i> Mountain driving expert</li>
                        <li><i class="fas fa-check-circle" style="color:#fbbf24;"></i> Fuel & toll included</li>
                        <li><i class="fas fa-check-circle" style="color:#fbbf24;"></i> Hotel assistance included</li>
                    </ul>
                    <a href="#booking" class="btn" style="background:linear-gradient(135deg, #fbbf24, #f59e0b); color:#0f172a;">Book Premium</a>
                </div>

                <!-- Luxury Package -->
                <div class="pricing-card">
                    <div class="plan-label" style="background:#3b82f620; color:#3b82f6;">Luxury</div>
                    <div class="price">₹60,000/-</div>
                    <div class="price-sub">Premium Experience</div>
                    <ul>
                        <li><i class="fas fa-check-circle" style="color:#3b82f6;"></i> Luxury Innova Crysta</li>
                        <li><i class="fas fa-check-circle" style="color:#3b82f6;"></i> 08-10 days duration</li>
                        <li><i class="fas fa-check-circle" style="color:#3b82f6;"></i> Premium hotel bookings</li>
                        <li><i class="fas fa-check-circle" style="color:#3b82f6;"></i> 5-star support</li>
                        <li><i class="fas fa-check-circle" style="color:#3b82f6;"></i> Personal guide included</li>
                    </ul>
                    <a href="#booking" class="btn" style="background:linear-gradient(135deg, #3b82f6, #6366f1); color:white;">Book Luxury</a>
                </div>
            </div>
        </div>

        <!-- TABLE SECTION -->
        <div class="table-section">
            <h2><i class="fas fa-table" style="color:#059669;"></i> Most Popular Destinations &amp; <span style="background:linear-gradient(135deg, #059669, #34d399); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Tour Packages</span></h2>
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
                                    <i class="fas fa-map-pin" style="color:#059669;"></i> <?php echo $popularKeys[$i]; ?>
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
                <div class="footer-item"><i class="fas fa-car" style="color:#059669;"></i> Innova Crysta 7 & 8 Seater available</div>
                <div class="footer-item"><i class="fas fa-check-circle" style="color:#059669;"></i> Fuel & Driver Included</div>
                <div class="footer-item"><i class="fas fa-clock" style="color:#059669;"></i> 24/7 Travel Support</div>
                <div class="footer-item"><i class="fas fa-rupee-sign" style="color:#059669;"></i> Best Price Guarantee</div>
            </div>
        </div>

        <!-- REVIEWS -->
        <div class="reviews-section">
            <h2><i class="fas fa-star" style="color:#fbbf24;"></i> Traveler Reviews</h2>
            <div class="reviews-grid">
                <div class="review-card">
                    <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p>"Beautiful Uttarakhand tour! The Innova was comfortable and the driver was excellent on the mountain roads."</p>
                    <div class="author">Pankaj Joshi</div>
                    <div class="detail">Delhi • 3 Tours</div>
                </div>
                <div class="review-card">
                    <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p>"Perfect family vacation! The 7-seater was spacious and comfortable for our family of 5. Loved Nainital and Mussoorie."</p>
                    <div class="author">Smita Bhatt</div>
                    <div class="detail">Gurgaon • 2 Tours</div>
                </div>
                <div class="review-card">
                    <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p>"On-time pickup and comfortable ride throughout the 10-day journey. Highly recommend for Uttarakhand tours."</p>
                    <div class="author">Rajesh Rawat</div>
                    <div class="detail">Noida • 4 Tours</div>
                </div>
            </div>
        </div>

        <!-- FAQS -->
        <div class="faqs-section">
            <h2><i class="fas fa-question-circle" style="color:#059669;"></i> Frequently Asked Questions</h2>
            <div class="faqs-grid">
                <div class="faq-item">
                    <h4>What is included in the Uttarakhand package?</h4>
                    <p>The package includes Innova Crysta rental, fuel, driver charges, and basic insurance. Premium packages include hotel bookings and guide services.</p>
                </div>
                <div class="faq-item">
                    <h4>How long does the Uttarakhand tour take?</h4>
                    <p>The complete Uttarakhand tour typically takes 8-10 days, covering all major hill stations.</p>
                </div>
                <div class="faq-item">
                    <h4>Is the Innova suitable for mountain roads?</h4>
                    <p>Yes, Innova Crysta is perfect for mountain roads with its powerful engine and comfortable suspension.</p>
                </div>
                <div class="faq-item">
                    <h4>What is the best time to visit Uttarakhand?</h4>
                    <p>The best time is March-June for pleasant weather and September-November for scenic views.</p>
                </div>
                <div class="faq-item">
                    <h4>Can we customize the package?</h4>
                    <p>Yes, we offer flexible and customizable packages as per your requirements and preferences.</p>
                </div>
                <div class="faq-item">
                    <h4>Are drivers familiar with Uttarakhand routes?</h4>
                    <p>Yes, our drivers are highly experienced in mountain driving and are familiar with all Uttarakhand routes.</p>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="cta-section">
            <h2>Ready to Explore the Land of Gods?</h2>
            <p>Experience the divine beauty of Uttarakhand with our premium Innova Crysta rental service. Book now for the best rates.</p>
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