<?php
/**
 * ============================================================
 * Innova Crysta on Rent Delhi - Centralized Fleet Pricing Config
 * 
 * SOURCE OF TRUTH FOR ALL FLEET PRICING & CALCULATIONS
 * ============================================================
 */

if (!defined('DAILY_INCLUDED_KM')) {
    define('DAILY_INCLUDED_KM', 250);
}

// Global Centralized Fleet Configuration
$FLEET_CONFIG = [
    'crysta_7' => [
        'key' => 'crysta_7',
        'name' => '7 Seater Innova Crysta',
        'seats' => '6+1 Seater',
        'base_price' => 5800,
        'extra_rate' => 18,
        'daily_limit' => 250,
        'icon' => 'fa-car',
        'recommended' => false,
        'color' => '#3b82f6'
    ],
    'crysta_8' => [
        'key' => 'crysta_8',
        'name' => '8 Seater Innova Crysta',
        'seats' => '7+1 Seater',
        'base_price' => 6000,
        'extra_rate' => 20,
        'daily_limit' => 250,
        'icon' => 'fa-car',
        'recommended' => true,
        'color' => '#f59e0b'
    ],
    'hycross' => [
        'key' => 'hycross',
        'name' => 'Luxury Innova HyCross',
        'seats' => '6/7+1 Seater',
        'base_price' => 6500,
        'extra_rate' => 25,
        'daily_limit' => 250,
        'icon' => 'fa-car-side',
        'recommended' => false,
        'color' => '#8b5cf6'
    ]
];

/**
 * Calculates trip pricing details based on round-trip distance, days, base price, and per-km rate.
 * 
 * Formula:
 * - roundTripKm = oneWayKm * 2
 * - includedKm = days * 250
 * - extraKm = max(0, roundTripKm - includedKm)
 * - baseFare = basePrice * days
 * - extraCharge = extraKm * perKmRate
 * - finalPrice = baseFare + extraCharge
 * 
 * @param float|int $roundTripKm Total round-trip distance in km
 * @param int $days Number of rental days (1, 2, 3, etc.)
 * @param float|int $basePrice Daily base price of vehicle
 * @param float|int $perKmRate Extra per-km rate
 * @param int $dailyLimit Daily included km (default 250 km)
 * @return array Detailed pricing breakdown
 */
if (!function_exists('calculateTripPrice')) {
    function calculateTripPrice($roundTripKm, $days = 1, $basePrice = 5800, $perKmRate = 18, $dailyLimit = 250) {
        $days = max(1, (int)$days);
        $dailyLimit = (int)$dailyLimit;
        $includedKm = $days * $dailyLimit;
        $roundTripKm = max(0, (float)$roundTripKm);
        $extraKm = max(0, $roundTripKm - $includedKm);
        $baseFare = (float)$basePrice * $days;
        $extraCharge = $extraKm * (float)$perKmRate;
        $finalPrice = $baseFare + $extraCharge;

        return [
            'roundTripKm' => $roundTripKm,
            'days' => $days,
            'dailyLimit' => $dailyLimit,
            'includedKm' => $includedKm,
            'extraKm' => $extraKm,
            'basePrice' => (float)$basePrice,
            'perKmRate' => (float)$perKmRate,
            'baseFare' => $baseFare,
            'extraCharge' => $extraCharge,
            'finalPrice' => $finalPrice
        ];
    }
}

/**
 * Returns structured vehicle array with 1-day, 2-day, and 3-day pricing calculated for a given round-trip distance.
 * 
 * @param float|int $roundTripKm Total round trip km
 * @return array Keyed vehicles array matching existing template structure
 */
if (!function_exists('getFleetVehiclesPricing')) {
    function getFleetVehiclesPricing($roundTripKm) {
        global $FLEET_CONFIG;
        $vehicles = [];

        foreach ($FLEET_CONFIG as $key => $conf) {
            $p1 = calculateTripPrice($roundTripKm, 1, $conf['base_price'], $conf['extra_rate'], $conf['daily_limit']);
            $p2 = calculateTripPrice($roundTripKm, 2, $conf['base_price'], $conf['extra_rate'], $conf['daily_limit']);
            $p3 = calculateTripPrice($roundTripKm, 3, $conf['base_price'], $conf['extra_rate'], $conf['daily_limit']);

            $vehicles[$key] = [
                'name' => $conf['name'],
                'seats' => $conf['seats'],
                'base_price' => $conf['base_price'],
                'extra_rate' => $conf['extra_rate'],
                'price_1day' => $p1['finalPrice'],
                'price_2day' => $p2['finalPrice'],
                'price_3day' => $p3['finalPrice'],
                'icon' => $conf['icon'],
                'recommended' => $conf['recommended'],
                'color' => $conf['color']
            ];
        }

        return $vehicles;
    }
}

/**
 * WhatsApp quote URL generator ensuring exact same vehicle name, days, and calculated price
 */
if (!function_exists('getWhatsAppQuote')) {
    function getWhatsAppQuote($vehicle, $destination, $days, $price) {
        $whatsappNumber = '917290885949';
        $vehicleName = is_array($vehicle) ? $vehicle['name'] : (string)$vehicle;
        $destTrim = strtolower(trim((string)$destination));
        
        if ($destTrim === 'delhi' || strpos($destTrim, 'local') !== false) {
            $msg = "Hello, I want to book a {$vehicleName} for Delhi local sightseeing for {$days} day(s).";
        } else {
            $msg = "Hello, I want to book a {$vehicleName} from Delhi to {$destination} for {$days} day(s).";
        }
        $msg .= " Total price: ₹" . number_format($price) . ". Please confirm availability.";
        
        return "https://wa.me/" . $whatsappNumber . "?text=" . rawurlencode($msg);
    }
}
