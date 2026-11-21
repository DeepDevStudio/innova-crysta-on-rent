<?php
// ============================================================
// delhi-to-rajaji-national-park.php - Innova Crysta on Rent Delhi
// Pricing Logic:
// Crysta 7 & 8: Extra Rate = ₹20/km
// HyCross: Extra Rate = ₹25/km
// ============================================================

// Include your existing header
include 'header.php';
require_once __DIR__ . '/pricing_config.php';

// ============================================================
// DESTINATION INFORMATION
// ============================================================
$destinationName = "Rajaji National Park";
$sourceCity = "Delhi";
$distance = 400; // km (one way) – actual road distance approx.
$totalKm = $distance * 2; // 760 km (going + returning)
$travelTime = "8-8 hours";
$state = "North India";
$popularFor = "Rajaji National Park Fort, Historical Monuments, Local Temples, Scenic Beauty, Cultural Heritage";

// ============================================================
// PRICE CALCULATION & VEHICLE DATA (Centralized Fleet Rates)
// ============================================================
$dailyLimit = 250;
$vehicles = getFleetVehiclesPricing($totalKm);

$extraKm1_crysta = max(0, $totalKm - 250);
$extraKm2_crysta = max(0, $totalKm - 500);
$extraKm3_crysta = max(0, $totalKm - 750);
$extraKm1_hycross = $extraKm1_crysta;
$extraKm2_hycross = $extraKm2_crysta;
$extraKm3_hycross = $extraKm3_crysta;

// WhatsApp quote function fallback
if (!function_exists('getWhatsAppQuote')) {
    function getWhatsAppQuote($vehicle, $destination, $days, $price) {
        $msg = "Hello, I want to book a {$vehicle['name']} from Delhi to {$destination} for {$days} day(s).";
        $msg .= " Total price: ₹" . number_format($price) . ". Please confirm availability.";
        return "https://wa.me/917290885949?text=" . urlencode($msg);
    }
}

// ============================================================
// PAGE TITLE AND META FOR SEO
// ============================================================
$pageTitle = "Delhi to Rajaji National Park Cab Booking | Innova Crysta 7, 8 Seater & HyCross | Best Rates";
$pageDesc = "Book Delhi to Rajaji National Park cab at best rates. Choose from 7 Seater Innova Crysta, 8 Seater Innova Crysta or Luxury HyCross. 400 km, 24/7 service. Visit Rajaji National Park Fort & Historical Sites.";
$keywords = "Delhi to Rajaji National Park cab, Rajaji National Park taxi booking, Innova Crysta rent Delhi, 8 seater taxi Delhi to Rajaji National Park, HyCross rental, Rajaji National Park Fort tour, North India heritage travel";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="icon" type="image/jpg" sizes="32x32" href="images/crysta-1.jpg">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDesc); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($keywords); ?>">
    <link rel="canonical" href="https://innovacrystaonrentdelhi.com/delhi-to-rajaji-national-park.php">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDesc); ?>">
    <meta property="og:url" content="https://innovacrystaonrentdelhi.com/delhi-to-rajaji-national-park.php">
    <meta property="og:type" content="website">
    
    <!-- Schema.org Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "Delhi to Rajaji National Park Cab Service",
        "description": "Book Delhi to Rajaji National Park cab with Innova Crysta 7 Seater, 8 Seater and Luxury HyCross.",
        "brand": {
            "@type": "Brand",
            "name": "Innova Crysta on Rent Delhi"
        },
        "offers": {
            "@type": "AggregateOffer",
            "priceCurrency": "INR",
            "lowPrice": "5800",
            "highPrice": "6500",
            "offerCount": "3"
        }
    }
    </script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* ========================================================== */
        /* ===== SIMPLE & ATTRACTIVE DESIGN (same as original) ===== */
        /* ========================================================== */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Poppins', sans-serif; background: #f0f4f8; color: #1e293b; line-height: 1.6; }
        .container { max-width: 1100px; margin: 0 auto; padding: 0 20px; }

        /* ===== HERO / HEADER ===== */
        .hero {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0d9488 100%);
            padding: 55px 0 40px;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: -40%;
            right: -10%;
            width: 400px;
            height: 400px;
            background: rgba(255,255,255,0.04);
            border-radius: 50%;
        }
        .hero .content { position: relative; z-index: 1; }
        .hero .badge {
            display: inline-block;
            background: rgba(255,255,255,0.12);
            backdrop-filter: blur(6px);
            padding: 4px 20px;
            border-radius: 50px;
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: 1px solid rgba(255,255,255,0.08);
            margin-bottom: 12px;
        }
        .hero h1 {
            font-size: 2.6rem;
            font-weight: 800;
            margin-bottom: 6px;
            letter-spacing: -0.5px;
        }
        .hero h1 i { color: #fbbf24; margin-right: 12px; }
        .hero .info {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 8px;
            font-size: 0.9rem;
            opacity: 0.9;
        }
        .hero .info span {
            background: rgba(255,255,255,0.08);
            padding: 4px 16px;
            border-radius: 50px;
            border: 1px solid rgba(255,255,255,0.05);
        }
        .hero .info span i { color: #fbbf24; margin-right: 5px; }

        /* ===== BREADCRUMB ===== */
        .breadcrumb {
            background: white;
            padding: 10px 0;
            border-bottom: 1px solid #e9edf2;
            font-size: 0.8rem;
        }
        .breadcrumb a { color: #0d9488; text-decoration: none; font-weight: 500; }
        .breadcrumb a:hover { text-decoration: underline; }
        .breadcrumb .sep { color: #94a3b8; margin: 0 4px; }
        .breadcrumb span { color: #64748b; }

        /* ===== MAIN CONTENT ===== */
        .main { padding: 35px 0 50px; }

        /* ===== VEHICLE CARDS ===== */
        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .section-title i { color: #0d9488; }

        .vehicle-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }
        .vehicle-card {
            background: white;
            border-radius: 18px;
            padding: 28px 20px 22px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            border: 2px solid transparent;
            transition: all 0.3s ease;
            position: relative;
        }
        .vehicle-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 35px rgba(0,0,0,0.08);
        }
        .vehicle-card .icon-wrap {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px;
            font-size: 2.2rem;
            color: white;
        }
        .vehicle-card h4 {
            font-size: 1.05rem;
            font-weight: 700;
            color: #0f172a;
        }
        .vehicle-card .seats {
            font-size: 0.8rem;
            color: #64748b;
            margin-bottom: 8px;
        }
        .vehicle-card .price {
            display: inline-block;
            background: #f0fdf4;
            color: #0d9488;
            font-weight: 700;
            font-size: 1.1rem;
            padding: 4px 20px;
            border-radius: 30px;
            margin-top: 4px;
        }
        .vehicle-card .price small {
            font-weight: 400;
            font-size: 0.7rem;
            color: #64748b;
        }
        .vehicle-card .base-label {
            font-size: 0.7rem;
            color: #94a3b8;
            margin-top: 4px;
        }
        .vehicle-card .base-label span {
            font-weight: 600;
            color: #334155;
        }
        .vehicle-card .badge-recommended {
            position: absolute;
            top: -8px;
            right: 12px;
            background: #f59e0b;
            color: #0f172a;
            font-size: 0.55rem;
            font-weight: 700;
            padding: 2px 14px;
            border-radius: 30px;
            letter-spacing: 0.3px;
        }
        .vehicle-card .badge-popular {
            display: inline-block;
            background: #fef3c7;
            color: #92400e;
            font-size: 0.6rem;
            font-weight: 600;
            padding: 1px 12px;
            border-radius: 30px;
            margin-top: 4px;
        }
        .vehicle-card.recommended {
            border-color: #f59e0b;
            background: #fffbeb;
        }

        /* ===== PRICE TABLE ===== */
        .card {
            background: white;
            border-radius: 18px;
            padding: 28px 30px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            margin-bottom: 25px;
        }
        .card h2 {
            font-size: 1.3rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .card h2 i { color: #0d9488; }

        .table-wrap { overflow-x: auto; -webkit-overflow-scrolling: touch; border-radius: 12px; border: 1px solid #e9edf2; }
        .price-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 450px;
        }
        .price-table th {
            background: #f8fafc;
            padding: 12px 18px;
            text-align: left;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #64748b;
            border-bottom: 2px solid #e9edf2;
        }
        .price-table td {
            padding: 11px 18px;
            border-bottom: 1px solid #f1f5f9;
            font-size: 0.9rem;
        }
        .price-table tr:last-child td { border-bottom: none; }
        .price-table tr:hover td { background: #f8fafc; }
        .price-table .vname { font-weight: 600; color: #0f172a; }
        .price-table .vname i { color: #0d9488; margin-right: 8px; width: 18px; text-align: center; }
        .price-table .amount {
            font-weight: 700;
            color: #0d9488;
            font-size: 0.95rem;
        }
        .price-table .highlight td { background: #f0fdf4; }
        .price-table .whatsapp-link {
            color: #0d9488;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            padding: 2px 10px;
            border-radius: 20px;
            transition: all 0.3s;
            font-weight: 600;
        }
        .price-table .whatsapp-link:hover {
            background: #25D366;
            color: white;
        }
        .price-table .whatsapp-link i { font-size: 0.8rem; }
        .price-table .whatsapp-link .hint {
            display: none;
            font-size: 0.6rem;
            font-weight: 400;
        }
        .price-table .whatsapp-link:hover .hint { display: inline; }

        .price-note {
            margin-top: 14px;
            font-size: 0.8rem;
            color: #64748b;
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
            padding: 10px 16px;
            background: #f8fafc;
            border-radius: 10px;
        }
        .price-note i { color: #0d9488; }
        .price-note .tag {
            background: #f59e0b;
            color: #0f172a;
            padding: 1px 12px;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: 600;
        }

        /* ===== INFO GRID ===== */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }
        .info-item {
            background: #f8fafc;
            border-radius: 12px;
            padding: 14px 10px;
            text-align: center;
            transition: all 0.3s;
        }
        .info-item:hover { background: #e6f7f4; transform: translateY(-2px); }
        .info-item i { font-size: 1.3rem; color: #0d9488; display: block; margin-bottom: 4px; }
        .info-item strong { font-size: 0.8rem; color: #0f172a; display: block; }
        .info-item span { font-size: 0.72rem; color: #64748b; }

        /* ===== TESTIMONIAL ===== */
        .testimonial {
            background: #f8fafc;
            border-radius: 14px;
            padding: 18px 24px;
            border-left: 4px solid #0d9488;
            margin-top: 18px;
        }
        .testimonial .quote { font-style: italic; color: #475569; font-size: 0.92rem; }
        .testimonial .author { margin-top: 6px; font-weight: 600; color: #0f172a; font-size: 0.85rem; }
        .testimonial .author span { font-weight: 400; color: #64748b; }

        /* ===== BUTTONS ===== */
        .btn-group {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 20px;
            justify-content: center;
        }
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 32px;
            border-radius: 60px;
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            min-width: 160px;
        }
        .btn i { font-size: 1rem; }
        .btn-primary {
            background: linear-gradient(135deg, #0d9488, #14b8a6);
            color: white;
            box-shadow: 0 8px 25px rgba(13,148,136,0.3);
        }
        .btn-primary:hover { transform: translateY(-3px); box-shadow: 0 12px 35px rgba(13,148,136,0.4); }
        .btn-whatsapp {
            background: linear-gradient(135deg, #25D366, #128C7E);
            color: white;
            box-shadow: 0 8px 25px rgba(37,211,102,0.3);
        }
        .btn-whatsapp:hover { transform: translateY(-3px); box-shadow: 0 12px 35px rgba(37,211,102,0.4); }
        .btn-outline {
            background: transparent;
            color: #0d9488;
            border: 2px solid #0d9488;
        }
        .btn-outline:hover { background: #0d9488; color: white; transform: translateY(-3px); }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 10px;
            color: #0d9488;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            padding: 8px 18px;
            background: white;
            border-radius: 50px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.04);
            transition: all 0.3s;
        }
        .back-link:hover { background: #0d9488; color: white; }

        /* ========================================================== */
        /* ===== RESPONSIVE ===== */
        /* ========================================================== */
        @media (max-width: 992px) {
            .hero h1 { font-size: 2.2rem; }
            .vehicle-grid { grid-template-columns: repeat(3, 1fr); gap: 15px; }
            .info-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 768px) {
            .hero { padding: 35px 0 25px; }
            .hero h1 { font-size: 1.7rem; }
            .hero .info { font-size: 0.75rem; gap: 5px; }
            .hero .info span { padding: 3px 12px; }
            .vehicle-grid { grid-template-columns: repeat(3, 1fr); gap: 12px; }
            .vehicle-card { padding: 18px 12px; }
            .vehicle-card .icon-wrap { width: 50px; height: 50px; font-size: 1.6rem; margin-bottom: 8px; }
            .vehicle-card h4 { font-size: 0.85rem; }
            .vehicle-card .price { font-size: 0.9rem; padding: 2px 14px; }
            .card { padding: 20px 16px; }
            .card h2 { font-size: 1.1rem; }
            .price-table th, .price-table td { padding: 8px 12px; font-size: 0.78rem; }
            .price-table { min-width: 350px; }
            .info-grid { grid-template-columns: repeat(2, 1fr); gap: 8px; }
            .btn { padding: 10px 24px; font-size: 0.85rem; min-width: 130px; }
            .container { padding: 0 14px; }
        }
        @media (max-width: 576px) {
            .hero h1 { font-size: 1.4rem; }
            .hero h1 i { margin-right: 6px; }
            .hero .badge { font-size: 0.55rem; padding: 3px 14px; }
            .hero .info { flex-direction: column; align-items: center; gap: 4px; }
            .hero .info span { width: 100%; max-width: 220px; font-size: 0.7rem; padding: 3px 10px; }
            .vehicle-grid { grid-template-columns: 1fr; gap: 12px; }
            .vehicle-card { padding: 16px; display: flex; align-items: center; gap: 16px; text-align: left; }
            .vehicle-card .icon-wrap { width: 50px; height: 50px; font-size: 1.6rem; margin: 0; flex-shrink: 0; }
            .vehicle-card .v-info { flex: 1; }
            .vehicle-card .badge-recommended { top: -6px; right: 8px; font-size: 0.5rem; padding: 1px 10px; }
            .vehicle-card .badge-popular { font-size: 0.55rem; }
            .vehicle-card .price { font-size: 0.85rem; padding: 2px 12px; }
            .vehicle-card .base-label { font-size: 0.6rem; }
            .card { padding: 14px 12px; border-radius: 14px; }
            .card h2 { font-size: 1rem; }
            .price-table th, .price-table td { padding: 6px 8px; font-size: 0.7rem; }
            .price-table { min-width: 280px; }
            .price-table .amount { font-size: 0.8rem; }
            .price-table .whatsapp-link { font-size: 0.7rem; padding: 1px 6px; }
            .price-table .whatsapp-link .hint { display: none !important; }
            .price-note { font-size: 0.7rem; flex-direction: column; align-items: flex-start; gap: 4px; padding: 8px 12px; }
            .info-grid { grid-template-columns: 1fr 1fr; gap: 6px; }
            .info-item { padding: 10px 6px; border-radius: 8px; }
            .info-item i { font-size: 1rem; }
            .info-item strong { font-size: 0.7rem; }
            .info-item span { font-size: 0.62rem; }
            .testimonial { padding: 14px 16px; }
            .testimonial .quote { font-size: 0.8rem; }
            .btn-group { flex-direction: column; align-items: center; gap: 8px; }
            .btn { padding: 10px 20px; font-size: 0.8rem; min-width: 120px; width: 100%; max-width: 260px; }
            .back-link { font-size: 0.75rem; padding: 6px 14px; }
            .container { padding: 0 10px; }
            .breadcrumb { padding: 6px 0; font-size: 0.65rem; }
        }
        @media (max-width: 400px) {
            .hero h1 { font-size: 1.1rem; }
            .hero .info span { max-width: 180px; font-size: 0.6rem; }
            .vehicle-card { padding: 12px; gap: 10px; }
            .vehicle-card .icon-wrap { width: 40px; height: 40px; font-size: 1.2rem; }
            .vehicle-card h4 { font-size: 0.75rem; }
            .vehicle-card .seats { font-size: 0.65rem; }
            .price-table th, .price-table td { padding: 4px 6px; font-size: 0.6rem; }
            .price-table { min-width: 220px; }
            .btn { font-size: 0.7rem; padding: 8px 16px; }
        }
        /* Landscape phones */
        @media (max-height: 500px) and (orientation: landscape) {
            .hero { padding: 20px 0 15px; }
            .hero h1 { font-size: 1.4rem; }
            .hero .info { flex-direction: row; font-size: 0.7rem; }
            .vehicle-grid { grid-template-columns: repeat(3, 1fr); }
            .vehicle-card { padding: 12px; }
            .info-grid { grid-template-columns: repeat(4, 1fr); }
            .btn-group { flex-direction: row; }
        }
        /* Print */
        @media print {
            .btn-group, .breadcrumb, .back-link { display: none; }
            .hero { background: #0d9488 !important; -webkit-print-color-adjust: exact; print-color-adjust: exact; }
            .card { box-shadow: none; border: 1px solid #e9edf2; }
            .vehicle-card { border: 1px solid #e9edf2; }
        }
    </style>
</head>
<body>

<!-- ========================================================== -->
<!-- BREADCRUMB                                                  -->
<!-- ========================================================== -->
<div class="breadcrumb">
    <div class="container">
        <a href="index.php"><i class="fas fa-home"></i> Home</a>
        <span class="sep">/</span>
        <a href="destinations.php">Destinations</a>
        <span class="sep">/</span>
        <span>Delhi to <?php echo $destinationName; ?></span>
    </div>
</div>

<!-- ========================================================== -->
<!-- HERO                                                        -->
<!-- ========================================================== -->
<section class="hero">
    <div class="container content">
        <div class="badge"><i class="fas fa-star" style="color:#fbbf24;"></i> Historical Route</div>
        <h1><i class="fas fa-taxi"></i>Delhi to <?php echo $destinationName; ?></h1>
        <div class="info">
            <span><i class="fas fa-route"></i> <?php echo $distance; ?> km</span>
            <span><i class="fas fa-clock"></i> <?php echo $travelTime; ?></span>
            <span><i class="fas fa-car"></i> Innova Crysta &amp; HyCross</span>
            <span><i class="fas fa-map-marker-alt"></i> <?php echo $state; ?></span>
        </div>
    </div>
</section>

<!-- ========================================================== -->
<!-- MAIN CONTENT                                                -->
<!-- ========================================================== -->
<section class="main">
    <div class="container">

        <!-- ===== VEHICLE CARDS ===== -->
        <div class="section-title">
            <i class="fas fa-car"></i> Choose Your Ride
        </div>
        <div class="vehicle-grid">
            <?php foreach ($vehicles as $key => $v): ?>
            <div class="vehicle-card <?php echo $v['recommended'] ? 'recommended' : ''; ?>">
                <?php if ($v['recommended']): ?>
                    <div class="badge-recommended">★ Recommended</div>
                <?php endif; ?>
                <div class="car-image-wrap" style="width: 100%; height: 140px; border-radius: 10px; overflow: hidden; margin-bottom: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                    <?php 
                        $imgSrc = 'images/crysta-1.jpg';
                        if (strpos($v['name'], '8 Seater') !== false) $imgSrc = 'images/crysta-2.jpg';
                        if (strpos($v['name'], 'HyCross') !== false) $imgSrc = 'images/crysta-3.jpg';
                    ?>
                    <img src="<?php echo $imgSrc; ?>" alt="<?php echo $v['name']; ?>" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="v-info">
                    <h4><?php echo $v['name']; ?></h4>
                    <div class="seats"><i class="fas fa-users"></i> <?php echo $v['seats']; ?></div>
                    <div class="price">₹<?php echo number_format($v['price_1day']); ?><small>/day</small></div>
                    <div class="base-label">Base Price: <span>₹<?php echo number_format($v['base_price']); ?></span></div>
                    <?php if ($v['recommended']): ?>
                        <div class="badge-popular">★ Most Popular</div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- ===== ABOUT THE ROUTE ===== -->
        <div class="card">
            <h2><i class="fas fa-info-circle"></i> About Delhi to <?php echo $destinationName; ?></h2>
            <p style="color:#475569;font-size:0.95rem;margin-bottom:10px;">
                <strong><?php echo $destinationName; ?></strong> is a historic town in the 
                <strong><?php echo $state; ?></strong> state of India, known for its rich 
                cultural heritage and historical significance. The town features the ancient 
                <strong>Rajaji National Park Fort</strong>, beautiful temples, and vibrant local 
                markets that reflect the region's glorious past.
            </p>
            <p style="color:#475569;font-size:0.95rem;">
                The distance from Delhi to <?php echo $destinationName; ?> is approximately 
                <strong><?php echo $distance; ?> km</strong>, which takes about 
                <strong><?php echo $travelTime; ?></strong> by road. This route passes 
                through the scenic landscapes of North India, offering a journey through 
                the rich cultural heritage of the region.
            </p>
        
            <p style="color:#475569;font-size:0.95rem;margin-top:15px;line-height:1.8;text-align:justify;">
                If you are looking for an <strong>Innova Crysta on rent in delhi</strong>, you have come to the right place. We offer premium services for <strong>Innova Crysta hire in delhi</strong>, ensuring a comfortable and memorable journey. Whether you need an <strong>Innova Crysta rental in delhi</strong> for a short trip or an <strong>Innova Crysta for rent in delhi</strong> for extended travel, our well-maintained fleet is ready. You can easily make an <strong>Innova Crysta booking in delhi</strong> through our seamless platform. Navigating the city is a breeze with our <strong>Innova Crysta delhi</strong> services, making <strong>Innova Crysta rent delhi</strong> the best choice for you and your family. If you want to <strong>hire Innova Crysta in delhi</strong> or need an <strong>Innova Crysta rental delhi ncr</strong>, we guarantee top-notch quality and reliability. Experience true comfort with a <strong>luxury Innova Crysta on rent in delhi</strong>, and beat the summer heat with an <strong>Ac Innova Crysta on rent in delhi</strong>. For a completely stress-free trip, choose our <strong>Innova Crysta with driver in delhi</strong>. We specialize in providing an <strong>Innova Crysta for outstation in delhi</strong> as well as a spacious <strong>Innova Crysta for group tour in delhi</strong>. Search no further for an <strong>Innova Crysta near me</strong> – we are here to serve all your travel needs with excellence.
            </p>
</div>

        <!-- ===== PRICE TABLE ===== -->
        <div class="card">
            <h2><i class="fas fa-rupee-sign"></i> Fare Details</h2>
            <p style="color:#64748b;font-size:0.85rem;margin-bottom:12px;">
                <i class="fas fa-info-circle" style="color:#0d9488;"></i> 
                Distance: <strong><?php echo $distance; ?> km</strong> • 
                Round Trip: <strong><?php echo $totalKm; ?> km</strong> • 
                Daily Limit: <strong>400 km</strong> • 
                7-Seater: <strong>₹18/km</strong> • 8-Seater: <strong>₹20/km</strong> • HyCross: <strong>₹25/km</strong>
            </p>
            <div class="table-wrap">
                <table class="price-table">
                    <thead>
                        <tr>
                            <th>Vehicle</th>
                            <th>1 Day</th>
                            <th>2 Days</th>
                            <th>3 Days</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($vehicles as $key => $v): ?>
                        <tr class="<?php echo $v['recommended'] ? 'highlight' : ''; ?>">
                            <td class="vname">
                                <i class="fas <?php echo $v['icon']; ?>"></i> 
                                <?php echo $v['name']; ?>
                                <?php if ($v['recommended']): ?>
                                    <span style="font-size:0.55rem;color:#f59e0b;font-weight:700;"> ★</span>
                                <?php endif; ?>
                                <span style="font-size:0.6rem;color:#64748b;display:block;font-weight:400;">
                                    Extra: ₹<?php echo $v['extra_rate']; ?>/km
                                </span>
                            </td>
                            <td class="amount">
                                <a href="<?php echo getWhatsAppQuote($v, $destinationName, 1, $v['price_1day']); ?>" 
                                   target="_blank" rel="noopener noreferrer" class="whatsapp-link">
                                    ₹<?php echo number_format($v['price_1day']); ?>
                                    <i class="fab fa-whatsapp"></i>
                                    <span class="hint">Quote</span>
                                </a>
                            </td>
                            <td class="amount">
                                <a href="<?php echo getWhatsAppQuote($v, $destinationName, 2, $v['price_2day']); ?>" 
                                   target="_blank" rel="noopener noreferrer" class="whatsapp-link">
                                    ₹<?php echo number_format($v['price_2day']); ?>
                                    <i class="fab fa-whatsapp"></i>
                                    <span class="hint">Quote</span>
                                </a>
                            </td>
                            <td class="amount">
                                <a href="<?php echo getWhatsAppQuote($v, $destinationName, 3, $v['price_3day']); ?>" 
                                   target="_blank" rel="noopener noreferrer" class="whatsapp-link">
                                    ₹<?php echo number_format($v['price_3day']); ?>
                                    <i class="fab fa-whatsapp"></i>
                                    <span class="hint">Quote</span>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="price-note">
                <i class="fas fa-info-circle"></i>
                <span>
                    <strong>Breakdown:</strong> 
                    1 Day Extra: <strong><?php echo $extraKm1_crysta; ?> km</strong> • 
                    2 Day Extra: <strong><?php echo $extraKm2_crysta; ?> km</strong> • 
                    3 Day Extra: <strong><?php echo $extraKm3_crysta; ?> km</strong> • 
                    GST extra
                </span>
            </div>
        </div>

        <!-- ===== TRIP INFO ===== -->
        <div class="card">
            <h2><i class="fas fa-suitcase-rolling"></i> Trip Information</h2>
            <div class="info-grid">
                <div class="info-item">
                    <i class="fas fa-route"></i>
                    <strong>Distance</strong>
                    <span><?php echo $distance; ?> km</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <strong>Travel Time</strong>
                    <span><?php echo $travelTime; ?></span>
                </div>
                <div class="info-item">
                    <i class="fas fa-users"></i>
                    <strong>Capacity</strong>
                    <span>7 / 8 Seater</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-check-circle"></i>
                    <strong>Includes</strong>
                    <span>Fuel, Toll, Driver</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-shield-alt"></i>
                    <strong>Safety</strong>
                    <span>Sanitized &amp; Insured</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-headset"></i>
                    <strong>Support</strong>
                    <span>24/7 Assistance</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-map-marked-alt"></i>
                    <strong>State</strong>
                    <span><?php echo $state; ?></span>
                </div>
                <div class="info-item">
                    <i class="fas fa-landmark"></i>
                    <strong>Attractions</strong>
                    <span>Rajaji National Park Fort, Temples, Historical Monuments</span>
                </div>
            </div>

            <!-- ===== TESTIMONIAL ===== -->
            <div class="testimonial">
                <div class="quote">
                    <i class="fas fa-quote-left" style="color:#0d9488;opacity:0.4;margin-right:4px;"></i>
                    A wonderful historical journey to Rajaji National Park! The 8 Seater Innova Crysta was very comfortable 
                    and the driver was professional. The pricing was transparent and we enjoyed exploring 
                    the Rajaji National Park Fort and local markets. Highly recommend this service!
                </div>
                <div class="author">— Sunita & Family <span>| Nagaur</span></div>
            </div>

            <!-- ===== BUTTONS ===== -->
            <div class="btn-group">
                <a href="tel:+917290885949" class="btn btn-primary">
                    <i class="fas fa-phone"></i> Call to Book
                </a>
                <a href="https://wa.me/917290885949?text=Hello%2C%20I%20want%20to%20book%20a%20cab%20from%20Delhi%20to%20<?php echo urlencode($destinationName); ?>." 
                   target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
                    <i class="fab fa-whatsapp"></i> WhatsApp Inquiry
                </a>
                <a href="contact.php" class="btn btn-outline">
                    <i class="fas fa-envelope"></i> Contact Us
                </a>
            </div>
        </div>

        <!-- ===== BACK LINK ===== -->
        <a href="destinations.php" class="back-link"><i class="fas fa-arrow-left"></i> Back to all destinations</a>
    </div>
</section>

<!-- ========================================================== -->
<!-- FOOTER                                                      -->
<!-- ========================================================== -->
<?php include 'seo_keywords.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>

