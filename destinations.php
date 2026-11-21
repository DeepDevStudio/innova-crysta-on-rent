<?php include 'header.php'; ?>
<?php
// ============================================================
// DESTINATION LISTING PAGE
// Fully responsive with SEO-friendly URLs: delhi-to-agra.php
// ============================================================

// --- START: Your existing header code (copied from your original) ---
$success_message = '';
$error_messages = [];
$whatsapp_number = '917290885949';
// --- END: Header variables ---

// ============================================================
// DESTINATION DATA (as provided)
// ============================================================
$destinations = [
    "Bahadurgarh", "Mehrauli", "Faridabad", "Loni", "Chipyana Khurd Urf Tigri",
    "Kadipur", "Rohad", "Ghaziabad", "Gurgaon", "Sonipat", "Murthal", "Noida",
    "Modinagar", "Surajpur", "Sampla", "Baghpat", "Manesar", "Ballabhgarh",
    "Ganaur", "Greater Noida", "Sohna", "Jhajjar", "Rohtak", "Baraut", "Gohana",
    "Samalkha", "Dharuhera", "Sikandrabad", "Khijuriwas", "Palwal", "Bhiwadi",
    "Sardhana", "Rewari", "Nuh", "Panipat", "Hapur", "Charkhi Dadri", "Jewar",
    "Meerut", "Bawal", "Bulandshahr", "Gharaunda", "Kosli", "Tijara", "Khatauli",
    "Shamli", "Karnal", "Hodal", "Garh Mukteshwar", "Barsana", "Shikrapur",
    "Khurja", "Delhi", "Kosi Kalan", "Sundar Nagar", "Muzaffarnagar", "Bhiwani",
    "Neemrana", "Hasanpur", "Hansi", "Anupshahar", "Dhanaura", "Mahendragarh",
    "Gajraula", "Khairthal", "Bawani Khera", "Jind", "Dibai", "Behror",
    "Nilokheri", "Gangoh", "Loharu", "Amroha", "Kurukshetra", "Dhariwal",
    "Hastinapur", "Aligarh", "Kotputli", "Deeg", "Ahmedpur", "Chandpur",
    "Vrindavan", "Deoband", "Alwar", "Thanesar", "Narnaul", "Narwana", "Pilani",
    "Hisar", "Shahabad Markanda", "Haldaur", "Sambhal", "Chirawa", "Govardhan",
    "Baroda", "Noorpur", "Mathura", "Kanth", "Seohara", "Pehowa", "Kundarki",
    "Hathras", "Kaithal", "Jagadhri", "Saharanpur", "Dhampur", "Bahjoi",
    "Laksar", "Nagina", "Moradabad", "Raigarh", "Jatipura", "Najibabad",
    "Sarsawa", "Bahadarabad", "Bijnor", "Narora", "Ambala", "Laxmangarh",
    "Yamuna Nagar", "Mullana", "Tanda Urmar", "Sariska", "Huzur Nagar",
    "Visveshwara Nagar", "Rampur Uttar Pradesh", "Khetri", "Roorkee", "Mayapur",
    "Sahaswan", "Barara", "Tohana", "Achhnera", "Agra", "Adampur", "Fatehabad",
    "Jhunjhunu", "Bhagega", "Haridwar", "Kotdwara", "Chandausi", "Sultana",
    "Bharatpur", "Dugadda", "Kasganj", "Lalru", "Naraingarh", "Rajpura",
    "Milak", "Derabassi", "Medhupur", "Bandikui", "Jaspur", "Dehradun",
    "Ujhani", "Jaipur", "Sadulpur", "Kala Amb", "Moonak", "Etah", "Zirakpur",
    "Bichpuri", "Mandawa", "Vikasnagar", "Budaun", "Kashipur Uttarakhand",
    "Jalesar", "Abhaneri", "Rajaji National Park", "Bazpur", "Mehandipur Balaji",
    "Tundla", "Alsisar", "Badaun", "Rishikesh", "Barmana", "Fatehpur Sikri",
    "Chandigarh", "Paonta Sahib Himachal Pradesh", "Bayana", "Gadarpur",
    "Vanasthali", "Mohali", "Kukas", "Kharar", "Rajapur Road", "Reengus",
    "Sirhind Fatehgarh Sahib", "Bhadra", "Nahan", "Sangrur", "Aonla",
    "Jalalpur", "Rudrapur", "Morni Hills", "Pinjore", "Madhopur Punjab",
    "Khatu Shyam", "Patiala", "Mukundgarh", "Firozabad", "Awagarh", "Sirmaur",
    "Hatgad", "Sirsa", "Mandi Gobindgarh Punjab", "Jolly Grant", "Parwanoo",
    "Doiwala", "Nabha", "Timilimansingh", "Mussoorie", "Kichha", "Dhuri",
    "Baheri", "Pantnagar", "Bassi Pathana", "Chalsa", "Rajakhera", "Lalkuan",
    "Morinda", "Sirsaganj", "Dakpatthar", "Bareilly", "Kalka", "Sikar",
    "Nawalgarh", "Ringas", "Ramnagar", "Babaganj", "Baddi", "Shikohabad",
    "Ropar", "Renuka Ji Himachal Pradesh", "Jim Corbett", "Dharampur",
    "Hindaun City", "Satpuli", "Mansa", "Sunam", "Khanna", "Rupnagar",
    "Brahmbad", "Bhangarh", "Malerkotla", "Dausa", "Bah", "Churu", "Kathgodam",
    "Dholpur", "Kasauli", "Barog", "Sitarganj", "Shekhawati", "Barnala",
    "Dhanaulti", "Salasar", "Jeolikote", "Solan", "Doraha", "Sabathu",
    "Lansdowne", "Nalagarh", "Nainital", "Nohar", "Samrala", "Palanpur Rajasthan",
    "Haldwani", "Bassi", "Bhimtal", "Ludhiana", "Karauli", "Baru Sahib",
    "Ganj Dundwara", "Kandaghat", "Anandpur Sahib", "Kiratpur Sahib", "Morena",
    "Jobner", "Bisalpur", "Devprayag", "Khatima", "Tehri Garhwal", "Sattal",
    "Panchkula", "National Chambal Wildlife Sanctuary", "Chakrata", "Nawanshahr",
    "Ratangarh", "Naukuchiatal", "Phillaur", "Naina Devi", "Nangal", "Bathinda",
    "Chail", "Kanatal", "Gangapur City", "Kuchaman City", "Srinagar Uttarakhand",
    "Tanakpur", "Shimla", "Mukteshwar", "Devala", "Naya Nangal", "Etawah",
    "Hanumangarh", "Bhowali Range", "Puranpur", "Gwalior", "Malout", "Phagwara",
    "Ramgarh Shekhawati", "Mainpuri", "Una", "Sujangarh", "Mashobra",
    "Ranikhet", "Farrukhabad", "Nakodar Punjab", "Shahjahanpur", "Chaubatia",
    "Raikot", "Fagu", "Sardarshahar", "Banasthali Niwai", "Toopran", "Jagraon",
    "Naldehra", "Kishangarh", "Didwana", "Bilaspur Himachal Pradesh", "Tonk",
    "Theog", "Jalandhar", "Barkot", "Hoshiarpur", "Bhind", "Kufri", "Malpura",
    "Kaloli Rajasthan", "Kotkapura", "Moga", "Pauri Garhwal", "Chaukhutiya",
    "Ladnun", "Abohar", "Phaphund", "Muktsar", "Ajmer", "Nurpur",
    "Amb Himachal Pradesh", "Auraiya", "Chhibramau", "Pilibhit", "Rudraprayag",
    "Binsar", "Ghumarwin", "Faridkot", "Sri Dungargarh", "Tiuni", "Khimsar",
    "Sawai Madhopur", "Dabra", "Bhogpur Sirwal", "Pushkar", "Ranthambore",
    "Almora", "Jhanduta", "Fazilka", "Uttarkashi", "Kapurthala", "Narkanda",
    "Sunder Nagar", "Dwarahat", "Chintpurni", "Jubbal", "Chopta", "Beas",
    "Kausani", "Chopal", "Sri Ganganagar", "Champawat", "Ukhimath", "Someshwar",
    "Karnaprayag", "Makhu", "Nagaur", "Kekri", "Reetha Sahib", "Sultanpur Lodhi",
    "Talwara", "Dasuya", "Bikaner", "Kannauj", "Mandi", "Jwalamukhi",
    "Kanhe Phata", "Yamunotri", "Ferozepur", "Rewalsar", "Sankri", "Jawalamukhi",
    "Sarwar", "Bhinai", "Gaurikund", "Daulatpur", "Lakhimpur", "Bageshwar",
    "Batala", "Kedarnath", "Mukerian", "Bilgram", "Amritsar", "Jhansi", "Rohru",
    "Nokha", "Beawar", "Sitapur", "Tirthan Valley", "Shivpuri", "Gurdaspur",
    "Orai", "Mirthal", "Tarn Taran", "Kangra", "Ghatampur", "Laharpur", "Merta",
    "Dharamshala", "Rampur Bushahr Himachal Pradesh", "Kapkot", "Raichak",
    "Bir Biling", "Mcleod Ganj", "Aut", "Hamirpur", "Pavagarh", "Hardoi",
    "Chamoli", "Jalaun", "Bundi", "Bhuntar", "Kanpur", "Palampur", "Didwan",
    "Orchha", "Pathankot", "Pithoragarh", "Kalyanpur", "Chaukori", "Kullu",
    "Wagah Border", "Joshimath", "Joginder Nagar", "Nagrota Surian",
    "Hemkunt Sahib", "Auli", "Gangotri", "Manali", "Jaitaran", "Vasind",
    "Banjar", "Jawali", "Anand Rajasthan", "Kasol", "Palia Kalan", "Bhilwara",
    "Chhapi", "Manikaran", "Kota", "Lucknow", "Naimisaradya", "Sojat",
    "Sandila", "Misrikh Cum Neemsar", "Sojat Road", "Unnao", "Dhamnod",
    "Badrinath", "Rupaidiha", "Aler", "Fatehpur", "Munsyari", "Bahraich",
    "Dalhousie", "Solang", "Jodhpur", "Pali", "Guna", "Ruthiyai", "Mahoba",
    "Ram Gaon", "Marwar Bhinmal", "Chittorgarh", "Khandela", "Kinnaur",
    "Sidhauli", "Marwar Ranawas", "Dharchula", "Chamba Hp", "Ashok Nagar",
    "Barabanki", "Kalpa", "Jhalawar", "Khajjiar", "Rohtang La Pass", "Jammu",
    "Phalodi", "Rajsamand", "Bachhrawan", "Banda Junction", "Atal Nagar",
    "Munsiyari", "Kumbhalgarh", "Sadri", "Baran", "Nathdwara", "Unchahar",
    "Udhampur", "Ranakpur", "Osian", "Chhatarpur", "Raebareli", "Falna",
    "Balrampur", "Atarra", "Bhawani Mandi", "Neemuch", "Sumerpur", "Khajuraho",
    "Lachhipura", "Vaishno Devi", "Katra", "Pataunda", "Patnitop", "Tulsipur",
    "Udaipur", "Hardo Rattan", "Keylong", "Udaipur Airport", "Colonelganj",
    "Chitrakoot", "Nanak Jhira Sahib", "Sagar Madhya Pradesh", "Biyavra",
    "Mhow", "Sirohi Road", "Jalore", "Gogunda", "Musafirkhana", "Behraich",
    "Pratapgarh Rajasthan", "Prempura", "Mandsaur", "Amethi", "Panna",
    "Pratapgarh Uttar Pradesh", "Ramdevra", "Prayagraj", "Gonda", "Siddhpur",
    "Antu", "Pokhran", "Faizabad", "Balotra", "Kaza", "Spiti Valley", "Ayodhya",
    "Bhimana", "Mandasor", "Sultanpur", "Kurebhar", "Siriyari", "Allahabad",
    "Satna", "Damoh", "Vidisha", "Sunauli", "Mandav", "Sewagram", "Sehore",
    "Bhopal", "Ghoti Budruk", "Maksi", "Chilika", "Bhadohi", "Mount Abu",
    "Nowrangpur", "Akbarpur", "Anantnag", "Dungarpur", "Ambaji", "Jaisalmer",
    "Banswara", "Ratlam", "Jaora", "Mirzapur", "Iqbalgadh", "Shahpura",
    "Jaunpur", "Basti", "Ujjain", "Dhanera", "Varanasi", "Bagidora",
    "Palanpur Junction", "Katni", "Pahalgam", "Palanpur Gujrat", "Bhiloda",
    "Gorakhpur"
];

// Sort destinations alphabetically
sort($destinations);

// ============================================================
// Helper: Create a SEO-friendly URL like "delhi-to-agra.php"
// ============================================================
function getDestinationUrl($destination) {
    $slug = strtolower(trim($destination));
    $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
    $slug = preg_replace('/[\s-]+/', '-', $slug);
    $slug = trim($slug, '-');
    return "delhi-to-" . $slug . ".php";
}

// ============================================================
// Split destinations into 3 columns (for the carousels)
// ============================================================
$total = count($destinations);
$colSize = ceil($total / 3);
$col1 = array_slice($destinations, 0, $colSize);
$col2 = array_slice($destinations, $colSize, $colSize);
$col3 = array_slice($destinations, $colSize * 2);

// ============================================================
// Generate the "Delhi to Destination" label
// ============================================================
function formatRouteLabel($destination) {
    return "Delhi to " . $destination . " cabs";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="icon" type="image/jpg" sizes="32x32" href="images/crysta-1.jpg">
    <title>Delhi to 600+ Destinations | Route Listing | Innova Crysta Rent</title>
    <meta name="description" content="Explore all 600+ destinations from Delhi. Search and filter through our extensive route list.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* ===== RESET & BASE ===== */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Poppins', sans-serif; background: #f4f7fc; color: #1e293b; line-height: 1.6; }
        .container { max-width: 1280px; margin: 0 auto; padding: 0 25px; }

        /* ===== LISTING HEADER ===== */
        .listing-header {
            background: linear-gradient(135deg, #00b09b, #96c93d);
            padding: 40px 0 30px;
            color: white;
            text-align: center;
        }
        .listing-header h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .listing-header h1 i {
            margin-right: 15px;
        }
        .listing-header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* ===== LISTING CONTROLS (Search Bar) ===== */
        .listing-controls {
            background: white;
            padding: 20px 0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
            position: sticky;
            top: 80px;
            z-index: 100;
            border-bottom: 2px solid #f1f5f9;
        }
        .search-wrapper {
            max-width: 600px;
            margin: 0 auto;
            position: relative;
        }
        .search-wrapper input {
            width: 100%;
            padding: 14px 20px 14px 55px;
            border-radius: 60px;
            border: 2px solid #e2e8f0;
            font-family: 'Poppins', sans-serif;
            font-size: 1.05rem;
            transition: all 0.3s;
            background: #f8fafc;
        }
        .search-wrapper input:focus {
            border-color: #00b09b;
            outline: none;
            box-shadow: 0 0 0 4px rgba(0,176,155,0.1);
            background: white;
        }
        .search-wrapper i {
            position: absolute;
            left: 22px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 1.2rem;
        }
        .search-wrapper .clear-btn {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #94a3b8;
            cursor: pointer;
            font-size: 1.1rem;
            display: none;
            padding: 4px 8px;
        }
        .search-wrapper .clear-btn.visible {
            display: block;
        }
        .search-stats {
            text-align: center;
            margin-top: 10px;
            color: #64748b;
            font-size: 0.95rem;
        }

        /* ===== 3-COLUMN SCROLLABLE LAYOUT ===== */
        .carousel-section {
            padding: 40px 0 20px;
            background: #f8fafc;
        }
        .columns-wrapper {
            display: flex;
            gap: 30px;
            align-items: stretch;
        }
        .carousel-container {
            flex: 1;
            background: white;
            border-radius: 20px;
            padding: 25px 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.05);
            border: 1px solid #eef2f6;
            display: flex;
            flex-direction: column;
            min-height: 500px;
        }
        .carousel-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #0f172a;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-shrink: 0;
        }
        .carousel-title .badge {
            background: #00b09b;
            color: white;
            font-size: 0.75rem;
            padding: 2px 14px;
            border-radius: 30px;
            font-weight: 500;
        }
        /* VERTICALLY SCROLLABLE LIST */
        .carousel-track {
            flex: 1;
            overflow-y: auto;
            padding-right: 6px;
            max-height: 600px;
            min-height: 400px;
        }
        .carousel-track::-webkit-scrollbar {
            width: 6px;
        }
        .carousel-track::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 10px;
        }
        .carousel-track::-webkit-scrollbar-thumb {
            background: #00b09b;
            border-radius: 10px;
        }

        /* Each route item */
        .dest-item {
            display: block;
            padding: 10px 16px;
            background: #f8fafc;
            border-radius: 10px;
            font-size: 0.92rem;
            color: #1e293b;
            transition: all 0.2s;
            text-decoration: none;
            border-left: 3px solid transparent;
            margin-bottom: 4px;
            font-weight: 400;
        }
        .dest-item:hover {
            background: #e6f7f4;
            border-left-color: #00b09b;
            transform: translateX(4px);
            color: #00b09b;
        }
        .dest-item.hidden {
            display: none;
        }
        .dest-item i {
            color: #00b09b;
            margin-right: 10px;
            font-size: 0.8rem;
            opacity: 0.6;
        }

        .no-results {
            text-align: center;
            padding: 40px 0;
            color: #94a3b8;
            width: 100%;
        }
        .no-results i {
            font-size: 2.5rem;
            display: block;
            margin-bottom: 12px;
        }

        .back-link {
            display: inline-block;
            margin: 20px 0 40px;
            color: #00b09b;
            text-decoration: none;
            font-weight: 500;
        }
        .back-link:hover {
            text-decoration: underline;
        }

        /* ===== RESPONSIVE DESIGN ===== */
        /* Large tablets and small laptops */
        @media (max-width: 1024px) {
            .columns-wrapper {
                gap: 20px;
            }
            .carousel-container {
                min-height: 400px;
            }
            .carousel-track {
                max-height: 500px;
                min-height: 300px;
            }
        }

        /* Tablets */
        @media (max-width: 768px) {
            .columns-wrapper {
                flex-direction: column;
                gap: 20px;
            }
            .carousel-container {
                min-height: 300px;
            }
            .carousel-track {
                max-height: 350px;
                min-height: 200px;
            }
            .listing-header h1 {
                font-size: 2rem;
            }
            .listing-header p {
                font-size: 1rem;
            }
            .listing-controls {
                top: 70px;
                padding: 15px 0;
            }
            .search-wrapper input {
                font-size: 0.95rem;
                padding: 12px 16px 12px 48px;
            }
            .carousel-container {
                padding: 18px 14px;
            }
            .dest-item {
                font-size: 0.85rem;
                padding: 8px 14px;
            }
            .carousel-title {
                font-size: 0.95rem;
            }
            .container {
                padding: 0 15px;
            }
        }

        /* Mobile phones */
        @media (max-width: 480px) {
            .listing-header {
                padding: 30px 0 20px;
            }
            .listing-header h1 {
                font-size: 1.5rem;
            }
            .listing-header h1 i {
                margin-right: 8px;
            }
            .listing-header p {
                font-size: 0.85rem;
            }
            .listing-controls {
                top: 65px;
                padding: 12px 0;
            }
            .search-wrapper {
                max-width: 100%;
            }
            .search-wrapper input {
                font-size: 0.85rem;
                padding: 10px 14px 10px 42px;
                border-radius: 40px;
            }
            .search-wrapper i {
                left: 16px;
                font-size: 1rem;
            }
            .search-wrapper .clear-btn {
                right: 12px;
                font-size: 0.9rem;
            }
            .search-stats {
                font-size: 0.8rem;
                margin-top: 6px;
            }
            .columns-wrapper {
                gap: 15px;
            }
            .carousel-container {
                padding: 14px 12px;
                border-radius: 14px;
                min-height: 250px;
            }
            .carousel-track {
                max-height: 280px;
                min-height: 150px;
            }
            .carousel-title {
                font-size: 0.85rem;
                margin-bottom: 12px;
            }
            .carousel-title .badge {
                font-size: 0.65rem;
                padding: 2px 10px;
            }
            .dest-item {
                font-size: 0.78rem;
                padding: 7px 12px;
                border-radius: 8px;
                margin-bottom: 3px;
            }
            .dest-item i {
                margin-right: 8px;
                font-size: 0.7rem;
            }
            .back-link {
                font-size: 0.85rem;
                margin: 15px 0 30px;
            }
            .container {
                padding: 0 12px;
            }
        }

        /* Very small phones */
        @media (max-width: 360px) {
            .listing-header h1 {
                font-size: 1.2rem;
            }
            .listing-header p {
                font-size: 0.75rem;
            }
            .carousel-container {
                padding: 10px 10px;
            }
            .dest-item {
                font-size: 0.7rem;
                padding: 6px 10px;
            }
            .carousel-track {
                max-height: 220px;
                min-height: 120px;
            }
        }

        /* Landscape phones */
        @media (max-height: 500px) and (orientation: landscape) {
            .listing-header {
                padding: 15px 0 10px;
            }
            .listing-header h1 {
                font-size: 1.5rem;
            }
            .listing-controls {
                top: 60px;
                padding: 10px 0;
            }
            .carousel-track {
                max-height: 200px;
                min-height: 100px;
            }
            .carousel-container {
                min-height: 200px;
            }
        }

        /* High-resolution screens */
        @media (min-width: 1400px) {
            .container {
                max-width: 1400px;
            }
            .carousel-track {
                max-height: 700px;
            }
        }

        /* Print styles */
        @media print {
            .listing-controls {
                display: none;
            }
            .carousel-container {
                break-inside: avoid;
                box-shadow: none;
            }
        }
    </style>
</head>
<body>

<!-- ========================================================== -->
<!-- PAGE CONTENT: DESTINATION LISTING (3 columns, scrollable)   -->
<!-- ========================================================== -->
<div class="listing-header">
    <div class="container">
        <h1><i class="fas fa-route"></i>Round Way Taxi City Pair from Delhi</h1>
        <p>Explore all routes from Delhi • Click any destination to view details</p>
    </div>
</div>

<div class="listing-controls" id="listingControls">
    <div class="container">
        <div class="search-wrapper">
            <i class="fas fa-search"></i>
            <input type="text" id="searchInput" placeholder="Search for a destination..." autocomplete="off" aria-label="Search destinations">
            <button class="clear-btn" id="clearBtn" aria-label="Clear search"><i class="fas fa-times-circle"></i></button>
        </div>
        <div class="search-stats" id="searchStats">Showing <strong><span id="visibleCount"><?php echo $total; ?></span></strong> of <strong><?php echo $total; ?></strong> destinations</div>
    </div>
</div>

<section class="carousel-section">
    <div class="container">
        <div class="columns-wrapper">
            <!-- COLUMN 1 -->
            <div class="carousel-container">
                <div class="carousel-title">
                    <span><i class="fas fa-list-ul" style="color:#00b09b;margin-right:8px;"></i>Column 1</span>
                    <span class="badge"><?php echo count($col1); ?> routes</span>
                </div>
                <div class="carousel-track" id="col1-track">
                    <?php foreach ($col1 as $dest): ?>
                        <a href="<?php echo getDestinationUrl($dest); ?>" class="dest-item" data-dest="<?php echo strtolower(htmlspecialchars($dest)); ?>">
                            <i class="fas fa-taxi"></i> <?php echo htmlspecialchars(formatRouteLabel($dest)); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- COLUMN 2 -->
            <div class="carousel-container">
                <div class="carousel-title">
                    <span><i class="fas fa-list-ul" style="color:#00b09b;margin-right:8px;"></i>Column 2</span>
                    <span class="badge"><?php echo count($col2); ?> routes</span>
                </div>
                <div class="carousel-track" id="col2-track">
                    <?php foreach ($col2 as $dest): ?>
                        <a href="<?php echo getDestinationUrl($dest); ?>" class="dest-item" data-dest="<?php echo strtolower(htmlspecialchars($dest)); ?>">
                            <i class="fas fa-taxi"></i> <?php echo htmlspecialchars(formatRouteLabel($dest)); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- COLUMN 3 -->
            <div class="carousel-container">
                <div class="carousel-title">
                    <span><i class="fas fa-list-ul" style="color:#00b09b;margin-right:8px;"></i>Column 3</span>
                    <span class="badge"><?php echo count($col3); ?> routes</span>
                </div>
                <div class="carousel-track" id="col3-track">
                    <?php foreach ($col3 as $dest): ?>
                        <a href="<?php echo getDestinationUrl($dest); ?>" class="dest-item" data-dest="<?php echo strtolower(htmlspecialchars($dest)); ?>">
                            <i class="fas fa-taxi"></i> <?php echo htmlspecialchars(formatRouteLabel($dest)); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <a href="index.php" class="back-link"><i class="fas fa-arrow-left"></i> Back to Home</a>
    </div>
</section>

<!-- ========================================================== -->
<!-- JAVASCRIPT: Search & Filter, Hamburger                      -->
<!-- ========================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // --- Hamburger toggle (from original header) ---
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('navMenu');
    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function(e) {
            e.stopPropagation();
            navMenu.classList.toggle('active');
        });
        document.querySelectorAll('#navMenu a').forEach(link => {
            link.addEventListener('click', function() {
                navMenu.classList.remove('active');
            });
        });
    }

    // --- SEARCH & FILTER ---
    const searchInput = document.getElementById('searchInput');
    const clearBtn = document.getElementById('clearBtn');
    const visibleCountSpan = document.getElementById('visibleCount');
    const totalDestinations = <?php echo $total; ?>;
    
    const allItems = document.querySelectorAll('.dest-item');
    
    function filterDestinations(query) {
        const q = query.toLowerCase().trim();
        let visible = 0;
        
        allItems.forEach(item => {
            const dest = item.getAttribute('data-dest') || '';
            if (dest.includes(q)) {
                item.classList.remove('hidden');
                visible++;
            } else {
                item.classList.add('hidden');
            }
        });
        
        visibleCountSpan.textContent = visible;
        
        if (q.length > 0) {
            clearBtn.classList.add('visible');
        } else {
            clearBtn.classList.remove('visible');
        }
        
        // Show "no results" message in each column
        const tracks = document.querySelectorAll('.carousel-track');
        tracks.forEach(track => {
            let noMsg = track.querySelector('.no-results');
            const visibleItems = track.querySelectorAll('.dest-item:not(.hidden)');
            if (visibleItems.length === 0) {
                if (!noMsg) {
                    noMsg = document.createElement('div');
                    noMsg.className = 'no-results';
                    noMsg.innerHTML = '<i class="fas fa-search"></i> No destinations found';
                    track.appendChild(noMsg);
                }
                noMsg.style.display = 'block';
            } else {
                if (noMsg) noMsg.style.display = 'none';
            }
        });
    }
    
    searchInput.addEventListener('input', function() {
        filterDestinations(this.value);
    });
    
    clearBtn.addEventListener('click', function() {
        searchInput.value = '';
        filterDestinations('');
        searchInput.focus();
    });
    
    // Initial filter (show all)
    filterDestinations('');
});
</script>

</body>
</html>
<?php include 'seo_keywords.php'; ?>
<?php include 'footer.php'; ?>