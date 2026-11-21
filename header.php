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
        $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));

        if (empty($name)) { $error_messages[] = "Name is required."; }
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) { $error_messages[] = "Valid email is required."; }
        if (empty($phone)) { $error_messages[] = "Phone number is required."; }
        if (!empty($travel_date) && !preg_match('/^\d{4}-\d{2}-\d{2}$/', $travel_date)) { $error_messages[] = "Invalid date format."; }

        if (empty($error_messages)) {
            $message_text = "New Booking Inquiry - Innova Crysta on Rent Delhi:\nName: $name\nEmail: $email\nPhone: $phone\nTravel Date: " . (!empty($travel_date) ? $travel_date : "Not specified") . "\nMessage: $message";
            $encoded_message = rawurlencode($message_text);
            $whatsapp_url = "https://wa.me/$whatsapp_number?text=$encoded_message";
            header("Location: $whatsapp_url");
            exit;
        }
    }
}

// --- DYNAMIC SEO LOGIC ---
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$seo_title = "Innova Crysta on Rent in Delhi | Luxury Crysta with Driver";
$seo_desc = "Book Innova Crysta on Rent in Delhi for local and outstation trips. Luxury Toyota Crysta with driver for family tours, weddings, corporate travel, airport transfers and Yatra. Call 7290885949.";
$seo_keywords = "Innova Crysta on rent Delhi, car rental Delhi, Delhi cab service, airport transfer Delhi, Innova hire Delhi, wedding car rental Delhi";

if (strpos($current_page, 'delhi-to-') === 0) {
    // It's a destination page
    $dest_str = str_replace('delhi-to-', '', $current_page);
    $dest_str = str_replace('-innova-on-rent', '', $dest_str);
    $dest_str = str_replace('-innova-package', '', $dest_str);
    $dest_str = ucwords(str_replace('-', ' ', $dest_str));
    
    $seo_title = "Innova Crysta on Rent in Delhi | Luxury Crysta with Driver";
    $seo_desc = "Book Innova Crysta on Rent in Delhi for local and outstation trips. Luxury Toyota Crysta with driver for family tours, weddings, corporate travel, airport transfers and Yatra. Call 7290885949.";
    $seo_keywords = "Delhi to $dest_str Innova Crysta on rent, hire Innova Crysta Delhi to $dest_str, Delhi to $dest_str cab service, Delhi to $dest_str taxi booking, outstation cab Delhi to $dest_str, Innova taxi Delhi to $dest_str";
} elseif ($current_page == 'about') {
    $seo_title = "Innova Crysta on Rent in Delhi | Luxury Crysta with Driver";
    $seo_desc = "Book Innova Crysta on Rent in Delhi for local and outstation trips. Luxury Toyota Crysta with driver for family tours, weddings, corporate travel, airport transfers and Yatra. Call 7290885949.";
    $seo_keywords = "About Innova car rental Delhi, premium cab service Delhi, reliable taxi Delhi, Innova Crysta fleet Delhi";
} elseif ($current_page == 'contact') {
    $seo_title = "Innova Crysta on Rent in Delhi | Luxury Crysta with Driver";
    $seo_desc = "Book Innova Crysta on Rent in Delhi for local and outstation trips. Luxury Toyota Crysta with driver for family tours, weddings, corporate travel, airport transfers and Yatra. Call 7290885949.";
    $seo_keywords = "Contact Innova car rental, book Innova Delhi, Innova booking phone number Delhi, customer support cab rental Delhi";
} elseif ($current_page == 'blog' || $current_page == 'blogs') {
    $seo_title = "Travel Blogs & City-to-City Road Trip Guides | Innova Crysta Rental";
    $seo_desc = "Explore comprehensive travel guides, road trip routes, driving tips, expressway details and itineraries for outstation trips across India in luxury Innova Crysta.";
    $seo_keywords = "city to city road trips, travel blogs india, innova crysta travel guide, delhi to agra road trip, delhi to jaipur cab guide, outstation travel blog, car rental blogs";
    if (!empty($single_blog)) {
        $seo_title = htmlspecialchars($single_blog['route_title']) . " | Innova Crysta Travel Guide";
        $seo_desc = htmlspecialchars($single_blog['short_desc']);
    }
} elseif (strpos($current_page, '-package') !== false) {
    $pkg_str = ucwords(str_replace('-innova-package', '', $current_page));
    $pkg_str = ucwords(str_replace('-', ' ', $pkg_str));
    $seo_title = "Innova Crysta on Rent in Delhi | Luxury Crysta with Driver";
    $seo_desc = "Book Innova Crysta on Rent in Delhi for local and outstation trips. Luxury Toyota Crysta with driver for family tours, weddings, corporate travel, airport transfers and Yatra. Call 7290885949.";
    $seo_keywords = "$pkg_str tour package Delhi, Innova Crysta $pkg_str tour, hire Innova for $pkg_str, $pkg_str trip from Delhi";
}
// -------------------------

// --- SITE THEME ---
// Every page includes this header, but most pages also carry their own large
// inline <style> blocks. Rather than editing hundreds of pages, the final HTML
// is passed through this filter, which:
//   1. remaps the legacy teal/lime palette to the navy + gold brand palette,
//   2. swaps the Poppins font for Inter / Plus Jakarta Sans,
//   3. links assets/theme.css after the page's last <style> block so it wins.
// Only colour codes and font names are rewritten; text, prices and packages are untouched.
if (!function_exists('icr_theme_filter')) {
    function icr_theme_filter($html) {
        if (stripos($html, '<html') === false) {
            return $html;
        }

        $hex_map = [
            // primary teal -> navy
            '0d9488' => '12355b', '00b09b' => '12355b', '14b8a6' => '1f4e86',
            '96c93d' => '1f4e86', '00d4a0' => '2563a8',
            // teal/green tints -> navy tint
            'e6f7f4' => 'eef3f9', 'e6f7f5' => 'eef3f9', 'f0fdf4' => 'eef3f9',
            'f0fdfa' => 'eef3f9', 'e6fffa' => 'eef3f9', 'e0f2fe' => 'eef3f9',
            // amber -> refined gold
            'f59e0b' => 'c8902a', 'fbbf24' => 'd9a441', 'd97706' => 'b07d1f',
            'fffbeb' => 'fbf7ee', 'fef3c7' => 'f6ebd2', 'fde68a' => 'ecd39c', '92400e' => '7a5413',
            // pink "premium" accents -> deep gold
            'ec4899' => '9a6b16', 'f472b6' => 'c8902a', 'fce7f3' => 'f6ebd2', 'fdf2f8' => 'fbf7ee',
            // indigo / violet / blue accents -> brand blues
            '6366f1' => '1f4e86', '8b5cf6' => '1f4e86', '818cf8' => '3b6aa0', 'a78bfa' => '3b6aa0',
            '3b82f6' => '2563a8', 'ede9fe' => 'eef3f9', 'e0e7ff' => 'eef3f9', 'f5f3ff' => 'eef3f9', 'eff6ff' => 'eef3f9',
            // neutrals -> brand ink / background
            'f97316' => 'c8902a', 'fb923c' => 'd9a441', 'ea580c' => 'b07d1f', 'fed7aa' => 'ecd39c', 'fff7ed' => 'fbf7ee', 'ffedd5' => 'f6ebd2',
            '004d40' => '12355b', '0f766e' => '1f4e86', 'ccfbf1' => 'eef3f9',
            '0f172a' => '0b1b2e', '1e293b' => '0f1e33', 'f0f4f8' => 'f6f8fb', 'f4f7fc' => 'f6f8fb',
        ];
        $html = preg_replace_callback(
            '/#(' . implode('|', array_keys($hex_map)) . ')\b/i',
            function ($m) use ($hex_map) { return '#' . $hex_map[strtolower($m[1])]; },
            $html
        );

        $rgba_map = [
            '/rgba\(\s*13\s*,\s*148\s*,\s*136\s*,/' => 'rgba(18,53,91,',
            '/rgba\(\s*0\s*,\s*176\s*,\s*155\s*,/'  => 'rgba(18,53,91,',
            '/rgba\(\s*20\s*,\s*184\s*,\s*166\s*,/' => 'rgba(31,78,134,',
            '/rgba\(\s*150\s*,\s*201\s*,\s*61\s*,/' => 'rgba(31,78,134,',
            '/rgba\(\s*236\s*,\s*72\s*,\s*153\s*,/' => 'rgba(154,107,22,',
            '/rgba\(\s*249\s*,\s*115\s*,\s*22\s*,/' => 'rgba(200,144,42,',
            '/rgba\(\s*245\s*,\s*158\s*,\s*11\s*,/' => 'rgba(200,144,42,',
            '/rgba\(\s*251\s*,\s*191\s*,\s*36\s*,/' => 'rgba(217,164,65,',
        ];
        $html = preg_replace(array_keys($rgba_map), array_values($rgba_map), $html);

        $fonts_url = 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap';
        $html = preg_replace('#https://fonts\.googleapis\.com/css2\?family=Poppins[^"\']*#', $fonts_url, $html);
        $html = preg_replace('/\bPoppins\b/', 'Inter', $html);
        $html = str_replace("font-family: system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif", "font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif", $html);
        $html = str_replace('font-awesome/6.0.0-beta3/', 'font-awesome/6.5.1/', $html);

        // Real photography: swap the illustrated hero image on package pages for the
        // matching destination photo, and give route-page heroes a photo background.
        $page = basename($_SERVER['PHP_SELF'], '.php');
        if ($page === 'destination-detail' && !empty($_GET['slug'])) {
            $page = 'delhi-to-' . preg_replace('/[^a-z0-9-]/', '', strtolower($_GET['slug']));
        }
        $package_photos = [
            'golden-triangle-innova-package' => 'images/blogs/delhi-to-jaipur.jpg',
            'char-dham-innova-package'       => 'images/site/kedarnath.jpg',
            'himachal-innova-package'        => 'images/blogs/delhi-to-shimla.jpg',
            'kashmir-innova-package'         => 'images/site/kashmir-dal-lake.jpg',
            'leh-ladakh-innova-package'      => 'images/site/ladakh-pangong.jpg',
            'rajasthan-innova-package'       => 'images/blogs/jaipur-to-udaipur.jpg',
            'uttarakhand-innova-package'     => 'images/blogs/delhi-to-rishikesh.jpg',
            'pilgrimage-innova-package'      => 'images/blogs/delhi-to-varanasi.jpg',
            'wildlife-innova-package'        => 'images/blogs/delhi-to-jim-corbett.jpg',
        ];
        $route_slug = preg_match('/^delhi-to-(.+?)(-innova-on-rent)?$/', $page, $rm) ? $rm[1] : null;
        $route_photo = null;
        if ($route_slug) {
            foreach (["images/blogs/delhi-to-$route_slug.jpg", "images/site/routes/$route_slug.jpg"] as $candidate) {
                if (is_file(__DIR__ . '/' . $candidate)) { $route_photo = $candidate; break; }
            }
        }
        $hero_photo = $package_photos[$page] ?? $route_photo;
        if (strpos($html, 'images/crystamain.jpg') !== false) {
            $html = str_replace('images/crystamain.jpg', $hero_photo ?: 'images/crysta-2.jpg', $html);
        }
        $page_css = '';
        if (strpos($html, 'route-detail-page') !== false) {
            // Package & "Innova on Rent" template: destination photo behind the hero
            $bg = $hero_photo ?: 'images/site/expressway-night.jpg';
            $page_css = '<style id="route-hero-photo">.route-detail-page .hero-section{background:linear-gradient(90deg,rgba(8,20,36,.94) 0%,rgba(8,20,36,.78) 45%,rgba(8,20,36,.30) 100%),url(\'' . $bg . '\') center/cover no-repeat !important;}</style>';
        } elseif ($route_slug && strpos($page, '-innova-on-rent') === false) {
            $bg = $route_photo ?: 'images/site/expressway-night.jpg';
            $page_css = '<style id="route-hero-photo">section.hero{background:linear-gradient(180deg,rgba(8,20,36,.72),rgba(8,20,36,.88)),url(\'' . $bg . '\') center/cover no-repeat !important;}</style>';
        }

        $theme_ver = @filemtime(__DIR__ . '/assets/theme.css') ?: 1;
        $theme = '<link rel="stylesheet" id="site-theme" href="assets/theme.css?v=' . $theme_ver . '">';
        $theme .= $page_css;
        $pos = strripos($html, '</style>');
        if ($pos !== false) {
            $html = substr_replace($html, '</style>' . $theme, $pos, strlen('</style>'));
        } else {
            $html = preg_replace('#</head>#i', $theme . '</head>', $html, 1);
        }
        return $html;
    }
}
ob_start('icr_theme_filter');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="icon" type="image/jpg" sizes="32x32" href="images/crysta-1.jpg">
    <title><?php echo $seo_title; ?></title>
    <meta name="description" content="<?php echo $seo_desc; ?>">
    <meta name="keywords" content="<?php echo $seo_keywords; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* ===== COMPLETE CSS - FULLY EMBEDDED ===== */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Poppins', sans-serif; background: #f4f7fc; color: #1e293b; line-height: 1.6; overflow-x: hidden; }
        ::-webkit-scrollbar { width: 12px; }
        ::-webkit-scrollbar-track { background: #e2e8f0; }
        ::-webkit-scrollbar-thumb { background: linear-gradient(135deg, #00b09b, #96c93d); border-radius: 6px; }
        .container { max-width: 1280px; margin: 0 auto; padding: 0 25px; }
        .section-title { font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem; background: linear-gradient(135deg, #00b09b, #96c93d); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; text-align: center; position: relative; opacity: 0; transform: translateY(30px); transition: opacity 0.8s ease, transform 0.8s ease; }
        .section-title.visible { opacity: 1; transform: translateY(0); }
        .section-title:after { content: ''; display: block; width: 80px; height: 4px; background: linear-gradient(to right, #fbbf24, #00b09b); margin: 10px auto 0; border-radius: 2px; }
        .btn { display: inline-block; padding: 12px 32px; border-radius: 50px; font-weight: 600; text-decoration: none; transition: all 0.3s ease; border: none; cursor: pointer; font-size: 1rem; box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
        .btn-primary { background: linear-gradient(135deg, #00b09b, #96c93d); color: white; position: relative; overflow: hidden; }
        .btn-primary::before { content: ''; position: absolute; top: 50%; left: 50%; width: 0; height: 0; border-radius: 50%; background: rgba(255,255,255,0.3); transform: translate(-50%, -50%); transition: width 0.6s, height 0.6s; }
        .btn-primary:hover::before { width: 300px; height: 300px; }
        .btn-primary:hover { transform: translateY(-3px); box-shadow: 0 15px 30px rgba(0, 176, 155, 0.5); }
        .btn-outline { background: transparent; border: 2px solid #00b09b; color: #00b09b; }
        .btn-outline:hover { background: #00b09b; color: white; transform: translateY(-3px); box-shadow: 0 15px 30px rgba(0, 176, 155, 0.3); }

        /* ===== HEADER ===== */
        header { background: rgba(255,255,255,0.95); backdrop-filter: blur(10px); box-shadow: 0 2px 20px rgba(0,0,0,0.08); position: sticky; top: 0; z-index: 1000; padding: 12px 0; }
        .header-content { display: flex; justify-content: space-between; align-items: center; }
        .logo a { font-size: 1.6rem; font-weight: 800; background: linear-gradient(135deg, #00b09b, #96c93d); -webkit-background-clip: text; -webkit-text-fill-color: transparent; text-decoration: none; letter-spacing: -0.5px; }
        .nav-menu { display: flex; list-style: none; gap: 30px; align-items: center; }
        .nav-menu li a { text-decoration: none; font-weight: 500; color: #1e293b; transition: color 0.3s; font-size: 1.05rem; position: relative; padding: 5px 0; }
        .nav-menu li a::after { content: ''; position: absolute; bottom: 0; left: 0; width: 0; height: 2.5px; background: linear-gradient(135deg, #00b09b, #96c93d); transition: width 0.3s; }
        .nav-menu li a:hover::after { width: 100%; }
        .nav-menu li a:hover { color: #00b09b; }
        .nav-menu li a.active { color: #00b09b; }
        .nav-menu li a.active::after { width: 100%; }
        .hamburger { display: none; font-size: 28px; cursor: pointer; color: #1e293b; transition: color 0.3s; }
        .hamburger:hover { color: #00b09b; }

        /* ===== HERO ===== */
        .hero { background: linear-gradient(135deg, #e0f2fe, #ffffff); padding: 80px 0; position: relative; overflow: hidden; }
        .hero::before { content: ''; position: absolute; top: -50%; right: -10%; width: 600px; height: 600px; background: radial-gradient(circle, rgba(0,176,155,0.12) 0%, transparent 70%); border-radius: 50%; z-index: 0; animation: pulse 8s infinite alternate; }
        @keyframes pulse { 0% { transform: scale(1); opacity: 0.5; } 100% { transform: scale(1.2); opacity: 0.8; } }
        .hero-content { display: flex; align-items: center; gap: 50px; position: relative; z-index: 2; }
        .hero-text { flex: 1; opacity: 0; transform: translateX(-30px); transition: opacity 0.8s ease, transform 0.8s ease; }
        .hero-text.visible { opacity: 1; transform: translateX(0); }
        .hero-text h1 { font-size: 3.2rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; background: linear-gradient(135deg, #1e293b, #00b09b); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .hero-text p { font-size: 1.15rem; color: #475569; margin-bottom: 30px; max-width: 600px; }
        .hero-buttons { display: flex; gap: 20px; flex-wrap: wrap; }
        .hero-image { flex: 1; text-align: center; opacity: 0; transform: translateX(30px); transition: opacity 0.8s ease, transform 0.8s ease; animation: float 6s infinite ease-in-out; }
        .hero-image.visible { opacity: 1; transform: translateX(0); }
        @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-12px); } }
        .hero-image img { max-width: 100%; height: auto; border-radius: 30px; box-shadow: 0 25px 40px rgba(0,0,0,0.12); }

        /* ===== ABOUT ===== */
        .about-grid { display: flex; align-items: center; gap: 50px; margin-top: 50px; }
        .about-content { flex: 1; opacity: 0; transform: translateY(30px); transition: opacity 0.8s ease, transform 0.8s ease; }
        .about-content.visible { opacity: 1; transform: translateY(0); }
        .about-content h2 { font-size: 2.3rem; font-weight: 700; margin-bottom: 20px; background: linear-gradient(135deg, #00b09b, #96c93d); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .about-content p { color: #475569; margin-bottom: 20px; font-size: 1.05rem; }
        .about-features { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; margin: 25px 0; }
        .about-feature-item { display: flex; align-items: center; gap: 10px; padding: 10px 15px; background: #f1f5f9; border-radius: 10px; transition: transform 0.3s; }
        .about-feature-item:hover { transform: translateY(-3px); box-shadow: 0 10px 20px rgba(0,176,155,0.1); }
        .about-feature-item i { color: #00b09b; font-size: 1.1rem; }
        .about-image { flex: 1; text-align: center; opacity: 0; transform: translateY(30px); transition: opacity 0.8s ease, transform 0.8s ease; }
        .about-image.visible { opacity: 1; transform: translateY(0); }
        .about-image img { max-width: 100%; border-radius: 30px; box-shadow: 0 25px 40px rgba(0,0,0,0.12); }

        /* ===== FEATURES ===== */
        .features { padding: 60px 0; background: #f8fafc; }
        .features-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 30px; margin-top: 50px; }
        .feature-card { text-align: center; padding: 30px 20px; background: white; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s, box-shadow 0.3s; opacity: 0; transform: translateY(30px); transition: opacity 0.8s ease, transform 0.8s ease, box-shadow 0.3s; }
        .feature-card.visible { opacity: 1; transform: translateY(0); }
        .feature-card:hover { transform: translateY(-8px) scale(1.02); box-shadow: 0 20px 40px rgba(0,176,155,0.12); }
        .feature-card i { font-size: 2.8rem; background: linear-gradient(135deg, #00b09b, #96c93d); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin-bottom: 18px; }
        .feature-card h3 { font-size: 1.4rem; margin-bottom: 12px; }

        /* ===== FLEET ===== */
        .fleet-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin-top: 50px; }
        .fleet-card { background: white; border-radius: 30px; overflow: hidden; box-shadow: 0 15px 35px rgba(0,0,0,0.08); transition: transform 0.4s; opacity: 0; transform: translateY(30px); transition: opacity 0.8s ease, transform 0.8s ease, box-shadow 0.4s; }
        .fleet-card.visible { opacity: 1; transform: translateY(0); }
        .fleet-card:hover { transform: scale(1.03) translateY(-5px); box-shadow: 0 25px 50px rgba(0,176,155,0.15); }
        .fleet-image { height: 200px; overflow: hidden; background: #e2e8f0; }
        .fleet-image img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
        .fleet-card:hover .fleet-image img { transform: scale(1.08); }
        .fleet-details { padding: 25px; }
        .fleet-details h3 { font-size: 1.6rem; margin-bottom: 8px; }
        .fleet-details ul { list-style: none; margin: 12px 0; }
        .fleet-details li { margin: 6px 0; color: #475569; }
        .fleet-details li i { color: #fbbf24; margin-right: 10px; }
        .price { font-size: 1.4rem; font-weight: 700; color: #00b09b; margin: 12px 0; }

        /* ===== WHY US ===== */
        .why-us-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 25px; margin-top: 50px; }
        .why-item { display: flex; align-items: center; gap: 18px; padding: 20px; background: #f1f5f9; border-radius: 15px; transition: transform 0.3s; opacity: 0; transform: translateY(30px); transition: opacity 0.8s ease, transform 0.8s ease, box-shadow 0.3s; }
        .why-item.visible { opacity: 1; transform: translateY(0); }
        .why-item:hover { transform: translateY(-5px); box-shadow: 0 15px 30px rgba(0,176,155,0.08); }
        .why-item i { font-size: 2.2rem; background: linear-gradient(135deg, #00b09b, #96c93d); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }

        /* ===== TESTIMONIALS ===== */
        .testimonials-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 25px; margin-top: 50px; }
        .testimonial-card { background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); position: relative; transition: transform 0.3s; opacity: 0; transform: translateY(30px); transition: opacity 0.8s ease, transform 0.8s ease, box-shadow 0.3s; }
        .testimonial-card.visible { opacity: 1; transform: translateY(0); }
        .testimonial-card:hover { transform: translateY(-5px); box-shadow: 0 20px 35px rgba(0,176,155,0.08); }
        .testimonial-card i.fa-quote-left { font-size: 1.8rem; color: #00b09b; opacity: 0.25; position: absolute; top: 20px; right: 25px; }
        .testimonial-card p { font-style: italic; margin: 15px 0; color: #475569; }
        .testimonial-author { display: flex; align-items: center; gap: 15px; margin-top: 15px; }
        .testimonial-author img { width: 55px; height: 55px; border-radius: 50%; object-fit: cover; border: 3px solid #fbbf24; }

        /* ===== CONTACT ===== */
        .contact-container { display: flex; gap: 50px; margin-top: 50px; background: #fefefe; border-radius: 30px; box-shadow: 0 25px 50px rgba(0,0,0,0.08); overflow: hidden; }
        .contact-info { flex: 1; background: linear-gradient(135deg, #00b09b, #96c93d); color: white; padding: 50px 40px; }
        .contact-info h3 { font-size: 1.8rem; margin-bottom: 25px; }
        .contact-info p { margin: 18px 0; display: flex; align-items: center; gap: 15px; transition: transform 0.3s; }
        .contact-info p:hover { transform: translateX(5px); }
        .contact-info i { font-size: 1.3rem; }
        .contact-form { flex: 1.3; padding: 50px 40px; }
        .form-group { margin-bottom: 18px; }
        .form-group input, .form-group textarea { width: 100%; padding: 14px 20px; border: 1px solid #e2e8f0; border-radius: 50px; font-family: 'Poppins', sans-serif; font-size: 1rem; transition: border 0.3s, box-shadow 0.3s; }
        .form-group textarea { border-radius: 30px; resize: vertical; min-height: 110px; }
        .form-group input:focus, .form-group textarea:focus { border-color: #00b09b; outline: none; box-shadow: 0 0 0 3px rgba(0,176,155,0.15); }
        .honeypot { display: none; }
        .alert { padding: 14px; border-radius: 10px; margin-bottom: 20px; animation: slideIn 0.5s ease; }
        @keyframes slideIn { from { opacity: 0; transform: translateY(-10px); } to { opacity: 1; transform: translateY(0); } }
        .alert-success { background: #d4edda; color: #155724; }
        .alert-error { background: #f8d7da; color: #721c24; }

        /* ===== FOOTER ===== */
        footer { background: #0f172a; color: #cbd5e1; padding: 40px 0 20px; margin-top: 60px; }
        .footer-content { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px; margin-bottom: 30px; }
        .footer-col h4 { color: white; font-size: 1.2rem; margin-bottom: 18px; position: relative; display: inline-block; }
        .footer-col h4::after { content: ''; position: absolute; bottom: -5px; left: 0; width: 35px; height: 2.5px; background: #fbbf24; }
        .footer-col ul { list-style: none; }
        .footer-col ul li { margin: 8px 0; }
        .footer-col ul li a { color: #cbd5e1; text-decoration: none; transition: color 0.3s, padding-left 0.3s; }
        .footer-col ul li a:hover { color: #fbbf24; padding-left: 5px; }
        .social-links { display: flex; gap: 15px; font-size: 1.4rem; }
        .social-links a { color: #cbd5e1; transition: color 0.3s, transform 0.3s; }
        .social-links a:hover { color: #fbbf24; transform: scale(1.1); }
        .copyright { text-align: center; padding-top: 20px; border-top: 1px solid #334155; color: #94a3b8; font-size: 0.95rem; }

        /* ===== FLOATING CALL & BACK TO TOP ===== */
        .floating-call { position: fixed; bottom: 30px; left: 30px; background: linear-gradient(135deg, #fbbf24, #f59e0b); width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 26px; box-shadow: 0 10px 25px rgba(245,158,11,0.4); z-index: 999; transition: transform 0.3s; text-decoration: none; animation: pulse-call 2s infinite; }
        @keyframes pulse-call { 0% { box-shadow: 0 0 0 0 rgba(245,158,11,0.5); } 70% { box-shadow: 0 0 0 15px rgba(245,158,11,0); } 100% { box-shadow: 0 0 0 0 rgba(245,158,11,0); } }
        .floating-call:hover { transform: scale(1.1); animation: none; }
        
        .back-to-top { position: fixed; bottom: 30px; right: 30px; background: linear-gradient(135deg, #1e293b, #334155); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.2); z-index: 998; text-decoration: none; opacity: 0; visibility: hidden; transform: translateY(20px); transition: all 0.3s ease; }
        .back-to-top.show { opacity: 1; visibility: visible; transform: translateY(0); }
        .back-to-top:hover { transform: translateY(-5px); background: linear-gradient(135deg, #00b09b, #96c93d); box-shadow: 0 15px 30px rgba(0,176,155,0.3); color: white; }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 992px) {
            .hero-content { flex-direction: column; text-align: center; }
            .hero-text p { margin-left: auto; margin-right: auto; }
            .hero-buttons { justify-content: center; }
            .contact-container { flex-direction: column; }
            .about-grid { flex-direction: column; }
            .about-features { grid-template-columns: 1fr; }
        }
        @media (max-width: 768px) {
            .hamburger { display: block; }
            .nav-menu { 
                position: fixed; 
                left: -100%; 
                top: 70px; 
                flex-direction: column; 
                background: white; 
                width: 100%; 
                text-align: center; 
                padding: 30px 0; 
                box-shadow: 0 15px 30px rgba(0,0,0,0.1); 
                transition: left 0.35s ease; 
                gap: 15px; 
                border-top: 1px solid #e2e8f0;
            }
            .nav-menu.active { left: 0; }
            .nav-menu li a { font-size: 1.1rem; }
            .section-title { font-size: 2rem; }
            .hero-text h1 { font-size: 2.5rem; }
            .logo a { font-size: 1.3rem; }
            .footer-content { grid-template-columns: 1fr 1fr; }
            .contact-info, .contact-form { padding: 30px 25px; }
            .floating-call { width: 50px; height: 50px; font-size: 22px; bottom: 20px; left: 20px; }
            .back-to-top { width: 45px; height: 45px; font-size: 18px; bottom: 20px; right: 20px; }
        }
        @media (max-width: 480px) {
            .hero { padding: 50px 0; }
            .hero-text h1 { font-size: 2rem; }
            .hero-text p { font-size: 1rem; }
            .btn { padding: 10px 24px; font-size: 0.9rem; }
            .footer-content { grid-template-columns: 1fr; }
            .container { padding: 0 15px; }
            .section-title { font-size: 1.7rem; }
        }

        /* Scroll reveal */
        .fade-up { opacity: 0; transform: translateY(30px); transition: opacity 0.8s ease, transform 0.8s ease; }
        .fade-up.visible { opacity: 1; transform: translateY(0); }
    </style>
</head>
<body>
    <!-- Floating Call & WhatsApp Buttons -->
    <a href="https://wa.me/917290885949" class="floating-wa" target="_blank" rel="noopener" aria-label="Chat on WhatsApp"><i class="fab fa-whatsapp"></i></a>
    <a href="tel:+917290885949" class="floating-call" aria-label="Call us"><i class="fas fa-phone-alt"></i></a>

    <!-- Top Bar -->
    <div class="topbar">
        <div class="container">
            <div class="topbar-left">
                <a href="tel:+917290885949"><i class="fas fa-phone-alt"></i>+91 72908 85949</a>
                <a href="mailto:onrentinnovacrysta@gmail.com" class="tb-hide-sm"><i class="fas fa-envelope"></i>onrentinnovacrysta@gmail.com</a>
                <span class="tb-hide-sm"><i class="fas fa-clock"></i>24/7 Service across Delhi NCR</span>
            </div>
            <div class="topbar-right">
                <a href="https://www.facebook.com/GetMeCabFB" aria-label="Facebook" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/innova_crystaonrent/" aria-label="Instagram" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
                <a href="https://x.com/getmecab" aria-label="X" target="_blank" rel="noopener"><i class="fab fa-x-twitter"></i></a>
                <a href="https://www.youtube.com/@getmecab9627" aria-label="YouTube" target="_blank" rel="noopener"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="site-header" id="siteHeader">
        <div class="container header-content">
            <a href="index.php" class="brand logo" aria-label="Innova Crysta on Rent Delhi - Home">
                <span class="brand-mark"><i class="fas fa-car-side"></i></span>
                <span class="brand-text">
                    <span class="brand-name">Innova Crysta</span>
                    <span class="brand-sub">On Rent · Delhi</span>
                </span>
            </a>
            <nav aria-label="Main navigation">
                <ul class="nav-menu" id="navMenu">
                    <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">About</a></li>
                    <li><a href="fleet.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'fleet.php' ? 'active' : ''; ?>">Fleet</a></li>
                    <li><a href="services.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>">Services</a></li>
                    <li><a href="destinations.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'destinations.php' ? 'active' : ''; ?>">Destinations</a></li>
                    <li><a href="why-us.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'why-us.php' ? 'active' : ''; ?>">Why Us</a></li>
                    <li><a href="testimonials.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'testimonials.php' ? 'active' : ''; ?>">Testimonials</a></li>
                    <li><a href="blog.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'blog.php' || basename($_SERVER['PHP_SELF']) == 'blogs.php') ? 'active' : ''; ?>">Blogs</a></li>
                    <li><a href="contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
                    <li class="nav-cta-mobile"><a href="tel:+917290885949"><i class="fas fa-phone-alt"></i>&nbsp; Call +91 72908 85949</a></li>
                </ul>
            </nav>
            <div class="header-cta">
                <a href="tel:+917290885949" class="header-call">
                    <i class="fas fa-phone-alt"></i>
                    <span class="hc-num"><small>Book Now · 24/7</small>+91 72908 85949</span>
                </a>
                <button type="button" class="hamburger" id="hamburger" aria-label="Open menu" aria-controls="navMenu" aria-expanded="false"><i class="fas fa-bars"></i></button>
            </div>
        </div>
    </header>
    <div class="nav-backdrop" id="navBackdrop"></div>
    <main>
        <?php 
            $is_home = basename($_SERVER['PHP_SELF']) == 'index.php';
            $is_dest_page = strpos(basename($_SERVER['PHP_SELF']), 'delhi-to-') === 0 || strpos(basename($_SERVER['PHP_SELF']), '-package') !== false;
            $page_banners = [
                'about'        => ['About Us',          'Two decades of chauffeur-driven travel across North India.', 'images/site/delhi-india-gate.jpg'],
                'fleet'        => ['Our Fleet',         'Innova Crysta 7 & 8 seater and Innova HyCross, with professional drivers.', 'images/crysta-1.jpg'],
                'services'     => ['Our Services',      'Airport transfers, outstation trips, weddings, corporate travel and more.', 'images/site/expressway-night.jpg'],
                'why-us'       => ['Why Choose Us',     'Safe, punctual and transparent: the way premium travel should be.', 'images/blogs/delhi-to-rishikesh.jpg'],
                'testimonials' => ['Customer Reviews',  'Real feedback from families, businesses and travellers we have driven.', 'images/blogs/delhi-to-jaipur.jpg'],
                'contact'      => ['Contact Us',        'Call, WhatsApp or write to us. Our travel desk is available 24/7.', 'images/site/delhi-india-gate.jpg'],
            ];
            $banner_key = basename($_SERVER['PHP_SELF'], '.php');
            if (!$is_home && !$is_dest_page && isset($page_banners[$banner_key])):
                list($banner_title, $banner_sub, $banner_img) = $page_banners[$banner_key];
        ?>
        <section class="page-hero">
            <div class="page-hero-bg" style="background-image:url('<?php echo $banner_img; ?>');"></div>
            <div class="container">
                <nav class="page-hero-crumbs" aria-label="Breadcrumb">
                    <a href="index.php"><i class="fas fa-home"></i> Home</a>
                    <i class="fas fa-chevron-right"></i>
                    <span><?php echo htmlspecialchars($banner_title); ?></span>
                </nav>
                <p class="page-hero-title"><?php echo htmlspecialchars($banner_title); ?></p>
                <p class="page-hero-sub"><?php echo htmlspecialchars($banner_sub); ?></p>
            </div>
        </section>
        <?php elseif (!$is_home && !$is_dest_page): ?>
        <div class="breadcrumb-bar" style="background:#f8fafc; border-bottom:1px solid #e2e8f0; padding:12px 0;">
            <div class="container" style="display:flex; align-items:center; flex-wrap:wrap;">
                <a href="index.php" style="display:inline-flex; align-items:center; gap:8px; color:#64748b; text-decoration:none; font-weight:500; font-size:0.95rem; transition:color 0.3s;" onmouseover="this.style.color='#00b09b'" onmouseout="this.style.color='#64748b'">
                    <i class="fas fa-home" style="color:#00b09b;"></i>
                    Home
                </a>
                <i class="fas fa-chevron-right" style="font-size:0.7rem; color:#cbd5e1; margin:0 12px;"></i>
                <span style="color:#1e293b; font-weight:600; font-size:0.95rem; text-transform:capitalize;">
                    <?php 
                        $page_name = basename($_SERVER['PHP_SELF'], '.php');
                        if (strpos($page_name, 'delhi-to-') === 0) {
                            $dest = str_replace('delhi-to-', '', $page_name);
                            $dest = str_replace('-innova-on-rent', '', $dest);
                            $dest = str_replace('-innova-package', '', $dest);
                            echo "Delhi To " . ucwords(str_replace('-', ' ', $dest));
                        } else {
                            echo ucwords(str_replace('-', ' ', $page_name));
                        }
                    ?>
                </span>
            </div>
        </div>
        <?php endif; ?>