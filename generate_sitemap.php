<?php
$dir = __DIR__;
$files = scandir($dir);
$baseUrl = 'https://innovacrystarent.com/'; // Replace with actual base URL if known, but let's assume it's this or something similar. Actually, let's just make it relative or use a placeholder. Wait, sitemaps usually require absolute URLs.
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($files as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
        // Exclude some common includes if necessary, like header, footer, etc.
        $exclude = ['header.php', 'footer.php', 'destinations_table.php', 'distances.php', 'reviews_data.php', 'generate_sitemap.php'];
        if (!in_array($file, $exclude)) {
            $xml .= "  <url>\n";
            $xml .= "    <loc>" . htmlspecialchars($baseUrl . $file) . "</loc>\n";
            $xml .= "    <lastmod>" . date('Y-m-d', filemtime($dir . '/' . $file)) . "</lastmod>\n";
            $xml .= "  </url>\n";
        }
    }
}

$xml .= '</urlset>';
file_put_contents($dir . '/sitemap.xml', $xml);
echo "sitemap.xml generated successfully.\n";
?>
