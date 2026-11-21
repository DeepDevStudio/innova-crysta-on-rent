<?php
// Initialize page-specific meta if direct slug requested
$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';

// -------------------------------------------------------------
// 12 COMPREHENSIVE CITY-TO-CITY BLOG DATA
// -------------------------------------------------------------
$blogs = [
    [
        'id' => 1,
        'slug' => 'delhi-to-agra-road-trip-guide',
        'from_city' => 'Delhi',
        'to_city' => 'Agra',
        'route_title' => 'Delhi to Agra via Yamuna Expressway: The Ultimate Heritage Road Trip',
        'category' => 'Golden Triangle & Heritage',
        'category_slug' => 'heritage',
        'image' => 'images/blogs/delhi-to-agra.jpg',
        'distance' => '233 km',
        'duration' => '3.5 - 4 hours',
        'highway' => 'Yamuna Expressway (6-lane access-controlled)',
        'best_time' => 'October to March',
        'read_time' => '5 min read',
        'date' => 'September 2026',
        'author' => 'Innova Travel Desk',
        'short_desc' => 'Experience a seamless, high-speed cruise from Delhi NCR to the iconic Taj Mahal. Complete guide covering route conditions, expressway tolls, top pitstops, and hidden gems in the City of Mughals.',
        'highlights' => [
            'Taj Mahal & Agra Fort sunrise tour',
            'Smooth 165 km concrete Yamuna Expressway drive',
            'Famous highway food stops at Jewar & Mathura cut',
            'Mehtab Bagh sunset view across Yamuna'
        ],
        'content' => '
            <p class="lead">The Delhi to Agra road trip is undoubtedly India’s most celebrated day-excursion and weekend getaway. Thanks to the world-class 6-lane Yamuna Expressway, the 233 km journey from Delhi to Agra is a butter-smooth cruise taking just about 3.5 hours in a comfortable Toyota Innova Crysta.</p>
            
            <h3>1. The Route & Expressway Experience</h3>
            <p>Starting from Delhi or Noida, join the Yamuna Expressway near Greater Noida (Pari Chowk). The expressway spans 165 km of uninterrupted concrete highway with a speed limit of 100 km/h for cars. There are three toll plazas along the way with dedicated FASTag lanes, restrooms, fuel stations, and food courts (including Starbucks, Subway, McDonald\'s, and traditional North Indian dhabas).</p>
            
            <div class="blog-callout">
                <h4><i class="fas fa-route"></i> Route Quick Facts</h4>
                <ul>
                    <li><strong>Total Distance:</strong> 233 km (from Central Delhi)</li>
                    <li><strong>Typical Travel Time:</strong> 3 hours 30 minutes</li>
                    <li><strong>Toll Cost (Approx):</strong> ₹435 one-way for Yamuna Expressway + state border taxes</li>
                    <li><strong>Recommended Vehicle:</strong> Toyota Innova Crysta 7-Seater for high-speed highway stability and superior rear-seat suspension.</li>
                </ul>
            </div>

            <h3>2. Must-Visit Attractions in Agra</h3>
            <ul>
                <li><strong>The Taj Mahal:</strong> The timeless monument to love. Best visited during sunrise (opens 30 mins before sunrise; closed on Fridays) to beat the crowd and midday heat.</li>
                <li><strong>Agra Fort:</strong> The majestic red sandstone fortress where Mughal emperors lived and ruled.</li>
                <li><strong>Mehtab Bagh:</strong> Beautiful Mughal gardens across the river providing a tranquil, panoramic reflection of the Taj Mahal at sunset without the heavy tourist crowd.</li>
                <li><strong>Fatehpur Sikri:</strong> Located 36 km before/after Agra, Emperor Akbar’s UNESCO World Heritage ghost city with the mammoth Buland Darwaza.</li>
            </ul>

            <h3>3. Highway Food & Culinary Delights</h3>
            <p>Don’t miss hot parathas and chai at the Expressway rest plazas. Once in Agra, treat your tastebuds to authentic Mughlai delicacies like Galouti kebabs and Mutton Biryani at Pinch of Spice, followed by authentic Agra ka Petha from the legendary Panchhi Petha store at Sadar Bazaar.</p>

            <h3>4. Why Travel by Innova Crysta?</h3>
            <p>The Yamuna Expressway is known for concrete tyre friction and heat build-up. Travelling in our chauffeur-driven Toyota Innova Crysta guarantees maximum passenger safety, powerful dual-zone climate control, ample luggage boot space, and leather captain seats that keep your family refreshed throughout the day-trip.</p>
        '
    ],
    [
        'id' => 2,
        'slug' => 'delhi-to-jaipur-road-trip-guide',
        'from_city' => 'Delhi',
        'to_city' => 'Jaipur',
        'route_title' => 'Delhi to Jaipur Road Trip: Exploring the Pink City via Delhi-Mumbai Expressway',
        'category' => 'Golden Triangle & Heritage',
        'category_slug' => 'heritage',
        'image' => 'images/blogs/delhi-to-jaipur.jpg',
        'distance' => '280 km',
        'duration' => '3.5 - 4 hours',
        'highway' => 'NE4 (Delhi-Mumbai Expressway) & NH48',
        'best_time' => 'October to April',
        'read_time' => '6 min read',
        'date' => 'September 2026',
        'author' => 'Road Trip Specialist',
        'short_desc' => 'Discover the royal heritage of Rajasthan with the new high-speed Delhi-Mumbai Expressway (NE4). Complete road itinerary covering Amer Fort, Hawa Mahal, highway dhabas, and shopping in Jaipur.',
        'highlights' => [
            'Travel on the high-tech 8-lane Delhi-Mumbai Expressway',
            'Amer Fort elephant rides & light & sound show',
            'Authentic Dal Baati Churma at Chokhi Dhani',
            'Bapu Bazaar & Johari Bazaar royal handicraft shopping'
        ],
        'content' => '
            <p class="lead">The drive from Delhi to Jaipur has been completely transformed with the opening of the Sohna-Dausa stretch of the high-tech Delhi-Mumbai Expressway (NE4). Travel time has dropped from 6 hours to under 4 hours, making Rajasthan\'s royal capital the ultimate weekend road trip destination.</p>
            
            <h3>1. The Route Breakdown (NE4 vs NH48)</h3>
            <p>For the quickest, smoothest journey, take the Sohna Elevated Corridor in Gurugram to enter NE4 (Delhi-Mumbai Expressway) at Sohna. Cruise effortlessly on 8 lanes with animal overpasses and scenic Aravalli vistas before exiting at Dausa/Bandikui towards Jaipur. Alternatively, the traditional NH48 via Neemrana and Behror is great for vintage stops like the Neemrana Fort-Palace.</p>

            <div class="blog-callout">
                <h4><i class="fas fa-crown"></i> Trip Highlights</h4>
                <ul>
                    <li><strong>Distance:</strong> ~280 km</li>
                    <li><strong>Driving Time:</strong> ~3.5 to 4 hours via NE4</li>
                    <li><strong>Best Stopover:</strong> Neemrana Fort Palace (for zip-lining and royal lunch) or Dausa Expressway Wayside Amenities</li>
                    <li><strong>Ideal Duration:</strong> 2 Days / 1 Night or 3 Days / 2 Nights</li>
                </ul>
            </div>

            <h3>2. Top Things to Do in the Pink City</h3>
            <ul>
                <li><strong>Amer Fort & Jaigarh Fort:</strong> Marvel at the Sheesh Mahal (Mirror Palace) and view the world\'s largest wheeled cannon (Jaivana).</li>
                <li><strong>Hawa Mahal & City Palace:</strong> Admire the 953 honeycomb windows designed for royal Rajput ladies, followed by the living palace museum.</li>
                <li><strong>Nahargarh Fort Sunset:</strong> Enjoy breathtaking twilight panoramas of the entire illuminated Jaipur city from the fort hilltop.</li>
                <li><strong>Chokhi Dhani Village:</strong> An immersive cultural village experience packed with folk dancers, puppet shows, and unlimited traditional Rajasthani thalis.</li>
            </ul>

            <h3>3. Food Stops You Shouldn\'t Miss</h3>
            <p>Stop at Old Rao Dhaba or Mannat Dhaba for buttery parathas and malai kulfi. In Jaipur, grab famous Pyaz Kachoris at Rawat Mishthan Bhandar, Lassi in earthenware matkas at Lassiwala on MI Road, and Ghewar from LMB (Laxmi Misthan Bhandar) in Johari Bazaar.</p>
        '
    ],
    [
        'id' => 3,
        'slug' => 'delhi-to-manali-road-trip-guide',
        'from_city' => 'Delhi',
        'to_city' => 'Manali',
        'route_title' => 'Delhi to Manali Road Trip: Conquering Himalayas, Beas River & Atal Tunnel',
        'category' => 'Hill Stations & Adventure',
        'category_slug' => 'mountains',
        'image' => 'images/blogs/delhi-to-manali.jpg',
        'distance' => '535 km',
        'duration' => '10 - 12 hours',
        'highway' => 'NH44 & Kiratpur-Nerchowk-Manali 4-Lane',
        'best_time' => 'All year (May-Jun for pleasant weather, Dec-Feb for snow)',
        'read_time' => '7 min read',
        'date' => 'September 2026',
        'author' => 'Mountain Expedition Lead',
        'short_desc' => 'An epic mountain road expedition from the plains of Delhi to the snow-clad peaks of Kullu-Manali. Discover the newly upgraded tunnels, riverside cafes, and Atal Tunnel excursion.',
        'highlights' => [
            'Drive through newly engineered mountain tunnels saving 3+ hours',
            'Rohtang Pass & Atal Tunnel high-altitude crossing (10,000+ ft)',
            'Solang Valley paragliding, zorbing & quad biking',
            'Old Manali bohemian cafes, trout fish & river rafting'
        ],
        'content' => '
            <p class="lead">Ascending from the plains of Delhi to the cedar-clad slopes of Manali is the quintessential North Indian road trip. With the recently completed Kiratpur to Nerchowk four-lane expressway and multiple hill bypass tunnels, the journey is now safer, smoother, and vastly quicker than ever before.</p>

            <h3>1. The Highway Transformation</h3>
            <p>The journey takes you along NH44 past Ambala and Chandigarh, entering the Himalayan foothills via Kiratpur Sahib. The new 4-lane stretch with state-of-the-art tunnels drastically reduces the twisting hill climb through Bilaspur and Sundernagar, leading smoothly through Mandi and the scenic Pandoh Dam along the turquoise Beas River into Kullu Valley.</p>

            <div class="blog-callout">
                <h4><i class="fas fa-mountain"></i> Mountain Drive Essential Stats</h4>
                <ul>
                    <li><strong>Total Distance:</strong> 535 km</li>
                    <li><strong>Driving Time:</strong> 10 to 11 hours in Innova Crysta</li>
                    <li><strong>Altitude Elevation:</strong> From 700 ft (Delhi) to 6,725 ft (Manali) & 10,000+ ft (Atal Tunnel)</li>
                    <li><strong>Why Crysta:</strong> 2.4L / 2.8L high-torque engine effortlessly conquers steep mountain inclines without strain.</li>
                </ul>
            </div>

            <h3>2. Key Attractions & Day Trips from Manali</h3>
            <ul>
                <li><strong>Atal Tunnel & Sissu (Lahaul Valley):</strong> Drive through the world’s longest highway tunnel above 10,000 feet into the breathtaking trans-Himalayan desert of Lahaul and Sissu waterfalls.</li>
                <li><strong>Solang Valley:</strong> The adventure sports epicenter offering paragliding, ropeway rides, skiing (winter), and snowmobiles.</li>
                <li><strong>Hadimba Temple & Vashisht Hot Springs:</strong> Ancient wooden architecture amidst towering deodar groves followed by natural sulfur therapeutic baths.</li>
                <li><strong>Old Manali:</strong> Lively music cafes, wood-fired artisan pizza, and apple orchard trails.</li>
            </ul>

            <h3>3. Crucial Winter & Mountain Driving Advice</h3>
            <p>Always hire experienced mountain chauffeurs who understand black ice, gear braking, and high-altitude hairpins. Booking our Toyota Innova Crysta ensures powerful defoggers, superior ground clearance, and expansive boot room for heavy woolens and winter gear.</p>
        '
    ],
    [
        'id' => 4,
        'slug' => 'delhi-to-rishikesh-haridwar-road-trip',
        'from_city' => 'Delhi',
        'to_city' => 'Rishikesh',
        'route_title' => 'Delhi to Rishikesh & Haridwar: Divine Ganga Aarti & River Adventure Escape',
        'category' => 'Spiritual & Pilgrimage',
        'category_slug' => 'spiritual',
        'image' => 'images/blogs/delhi-to-rishikesh.jpg',
        'distance' => '245 km',
        'duration' => '4 - 4.5 hours',
        'highway' => 'Delhi-Meerut Expressway & NH334',
        'best_time' => 'September to May',
        'read_time' => '5 min read',
        'date' => 'September 2026',
        'author' => 'Heritage & Wellness Writer',
        'short_desc' => 'Your perfect spiritual and adventure weekend road trip. Experience the mesmerizing evening Ganga Aarti at Har Ki Pauri and Triveni Ghat, riverside camping, and thrilling Grade III rapids.',
        'highlights' => [
            'Swift commute via the 14-lane Delhi-Meerut Expressway',
            'Evening Ganga Aarti at Har Ki Pauri & Parmarth Niketan',
            'White water river rafting & cliff jumping in Shivpuri',
            'Beatles Ashram (Chaurasi Kutia) & iconic suspension bridges'
        ],
        'content' => '
            <p class="lead">Whether you seek deep spiritual peace on the banks of the sacred Ganges or an adrenaline-pumping white water rafting adventure, the road trip from Delhi to Haridwar and Rishikesh is the ultimate quick weekend escape from urban chaos.</p>

            <h3>1. The Smooth Drive via Delhi-Meerut Expressway</h3>
            <p>Leave Delhi via the signal-free Delhi-Meerut Expressway (NE3), cruising seamlessly past Ghaziabad, Modinagar, and Meerut. Continue on the newly widened NH334 past Muzaffarnagar and Roorkee straight into the holy city of Haridwar, with Rishikesh just 25 km further up along the scenic riverbank.</p>

            <div class="blog-callout">
                <h4><i class="fas fa-om"></i> Spiritual & Adventure Highlights</h4>
                <ul>
                    <li><strong>Delhi to Haridwar:</strong> 220 km | ~3.5 Hours</li>
                    <li><strong>Haridwar to Rishikesh:</strong> 25 km | ~40 Minutes</li>
                    <li><strong>Top Activities:</strong> Ganga Aarti, Yoga Retreats, Shivpuri River Rafting, Bungee Jumping at Mohan Chatti.</li>
                </ul>
            </div>

            <h3>2. Two Cities, Double the Experience</h3>
            <p><strong>Haridwar:</strong> Take a holy dip at Brahma Kund, Har Ki Pauri, and ride the ropeway (Udan Khatola) to Mansa Devi and Chandi Devi temples on hilltop ridges overlooking the holy plains.</p>
            <p><strong>Rishikesh:</strong> Walk across Ram Jhula and Janki Setu, explore the artistic ruins of the Beatles Ashram, attend the soul-stirring musical Aarti at Parmarth Niketan, and relax at vegan riverside cafes with panoramic Himalayan sunset views.</p>
        '
    ],
    [
        'id' => 5,
        'slug' => 'mumbai-to-pune-expressway-road-trip',
        'from_city' => 'Mumbai',
        'to_city' => 'Pune',
        'route_title' => 'Mumbai to Pune & Lonavala Drive: Western Ghats, Waterfalls & Expressway Joy',
        'category' => 'Coastal & Expressways',
        'category_slug' => 'expressway',
        'image' => 'images/blogs/mumbai-to-pune.jpg',
        'distance' => '150 km',
        'duration' => '2.5 - 3 hours',
        'highway' => 'Yashwantrao Chavan Mumbai-Pune Expressway',
        'best_time' => 'July to February (Monsoon is magical)',
        'read_time' => '5 min read',
        'date' => 'September 2026',
        'author' => 'Western India Travel Team',
        'short_desc' => 'Glide through the lush Sahyadri hills, misty Khandala tunnels, and cascading waterfalls on India’s pioneer access-controlled expressway. Includes top Lonavala stopovers and Pune food hotspots.',
        'highlights' => [
            'Thrilling drive through the Bhor Ghat mountain section',
            'Lonavala chikki, fudge & Bhushi Dam detour',
            'Historic Karla and Bhaja Buddhist rock-cut caves',
            'Pune cultural landmarks: Aga Khan Palace & Shaniwar Wada'
        ],
        'content' => '
            <p class="lead">The Mumbai to Pune expressway run is Maharashtra\'s most iconic road journey. Connecting the bustling financial capital with the cultural and IT hub of Pune, this 150 km journey cuts through the breathtaking Western Ghats with panoramic valley vistas at every turn.</p>

            <h3>1. The Legendary Bhor Ghat Expressway Run</h3>
            <p>Starting from Navi Mumbai (Kalamboli), the 6-lane expressway climbs gently into the misty Sahyadri mountain range. Passing through deep mountain tunnels, viaducts, and the dramatic curves of Khandala Ghat, the road offers breathtaking scenery—especially during the monsoon when dozens of temporary waterfalls cascade down the cliff faces.</p>

            <div class="blog-callout">
                <h4><i class="fas fa-water"></i> Route Highlights</h4>
                <ul>
                    <li><strong>Total Distance:</strong> 150 km</li>
                    <li><strong>Average Duration:</strong> 2.5 to 3 hours</li>
                    <li><strong>Key Rest Stops:</strong> Food Mall Khalapur & Express Food Plaza Talegaon</li>
                    <li><strong>Must-Taste:</strong> Maganlal Chikki, Cooper’s Walnut Fudge in Lonavala, and authentic Puneri Misal Pav in Pune.</li>
                </ul>
            </div>

            <h3>2. Perfect Weekend Sightseeing Add-ons</h3>
            <ul>
                <li><strong>Lonavala & Khandala:</strong> Tiger’s Leap, Duke’s Nose trekking point, and misty viewpoints overlooking the Konkan railway lines.</li>
                <li><strong>Karla & Bhaja Caves:</strong> Ancient 2nd century BCE rock-cut Buddhist chaityas with massive timber arch roofs.</li>
                <li><strong>Pune Heritage:</strong> Visit Shaniwar Wada (seat of the Peshwas), Aga Khan Palace (Mahatma Gandhi memorial), and the lively cafes of Koregaon Park.</li>
            </ul>
        '
    ],
    [
        'id' => 6,
        'slug' => 'bangalore-to-mysore-expressway-road-trip',
        'from_city' => 'Bangalore',
        'to_city' => 'Mysore',
        'route_title' => 'Bangalore to Mysore & Coorg: 10-Lane Expressway, Palaces & Coffee Country',
        'category' => 'Heritage & Nature',
        'category_slug' => 'nature',
        'image' => 'images/blogs/bangalore-to-mysore.jpg',
        'distance' => '145 km',
        'duration' => '1.5 - 2 hours',
        'highway' => 'NH275 (10-Lane Bengaluru-Mysuru Access-Controlled Expressway)',
        'best_time' => 'September to March (Grand Dasara in Oct)',
        'read_time' => '5 min read',
        'date' => 'September 2026',
        'author' => 'South India Travel Specialist',
        'short_desc' => 'Zip from the Garden City of Bengaluru to the royal city of Mysuru in under 90 minutes on the ultra-modern 10-lane expressway. Detailed guide to Mysore Palace, Maddur Vada, and Coorg extensions.',
        'highlights' => [
            'Cruise on the 10-lane world-class NH275 Expressway',
            'Illuminated Sunday spectacle at the grand Mysore Palace',
            'Authentic Maddur Vada at Maddur Tiffany’s & Mylari Dosa in Mysore',
            'Optional scenic extension to Coorg coffee plantations'
        ],
        'content' => '
            <p class="lead">The Bengaluru to Mysuru corridor has entered a golden era of road travel with the 10-lane access-controlled NH275 expressway. What once took 4 to 5 hours of congested stop-and-go driving now takes a breezy 90 minutes in a luxury chauffeur-driven Innova Crysta.</p>

            <h3>1. The 10-Lane Expressway Experience</h3>
            <p>Departing from Kengeri / NICE Road junction, the fully access-controlled highway completely bypasses congested towns like Bidadi, Ramanagara (famous Sholay shooting hills), Channapatna (toy town), Maddur, and Mandya via elevated viaducts and smooth bypasses.</p>

            <div class="blog-callout">
                <h4><i class="fas fa-landmark"></i> Bangalore to Mysore Road Info</h4>
                <ul>
                    <li><strong>Distance:</strong> 145 km</li>
                    <li><strong>Drive Time:</strong> 1 hour 30 mins to 2 hours</li>
                    <li><strong>Famous Stops on Bypass:</strong> Maddur for crispy Maddur Vada & filter coffee; Channapatna for handcrafted wooden lacquer toys.</li>
                </ul>
            </div>

            <h3>2. Exploring Royal Mysuru & Beyond</h3>
            <ul>
                <li><strong>Mysore Palace (Amba Vilas):</strong> One of India\'s most visited monuments with opulent stained glass, carved rosewood doors, and 100,000 glowing bulbs on weekends and Dasara.</li>
                <li><strong>Chamundi Hill:</strong> Panoramic city views and the ancient Sri Chamundeshwari Temple guarded by the colossal monolith Nandi bull.</li>
                <li><strong>Brindavan Gardens:</strong> Musical fountain shows and landscaped terrace gardens beneath the Krishnarajasagara (KRS) Dam.</li>
                <li><strong>Coorg Coffee Country Extension:</strong> Continue 110 km further into the misty Western Ghats to Madikeri for aromatic coffee plantation stays, Abbey Falls, and Raja’s Seat.</li>
            </ul>
        '
    ],
    [
        'id' => 7,
        'slug' => 'delhi-to-shimla-kufri-road-trip',
        'from_city' => 'Delhi',
        'to_city' => 'Shimla',
        'route_title' => 'Delhi to Shimla & Kufri Drive: Pine Forests, Toy Train Trails & Colonial Charm',
        'category' => 'Hill Stations & Adventure',
        'category_slug' => 'mountains',
        'image' => 'images/blogs/delhi-to-shimla.jpg',
        'distance' => '345 km',
        'duration' => '6.5 - 7.5 hours',
        'highway' => 'NH44 & Himalayan Expressway (NH5)',
        'best_time' => 'October to June (Snowfall: Dec - Feb)',
        'read_time' => '6 min read',
        'date' => 'September 2026',
        'author' => 'Himalayan Explorer',
        'short_desc' => 'A classic hill-station road trip through the Shivalik foothills. Detailed route itinerary covering the Himalayan Expressway, Kalka-Shimla heritage trails, Mall Road strolls, and snow adventures in Kufri.',
        'highlights' => [
            'Himalayan Expressway bypass through Parwanoo & Kalka',
            'Historic Mall Road, The Ridge & Christ Church Shimla',
            'Panoramic snow views & horse riding at Kufri & Fagu',
            'Scenic stops at Timber Trail cable car & Solan brewery valley'
        ],
        'content' => '
            <p class="lead">Shimla, the erstwhile summer capital of British India, remains the queen of North Indian hill stations. Set among spruce, oak, and deodar hills at an altitude of 7,200 feet, the drive from Delhi offers an invigorating escape from the sweltering plains.</p>

            <h3>1. The Route via Himalayan Expressway</h3>
            <p>From Delhi, cruise comfortably on NH44 past Panipat, Karnal, and Kurukshetra until Zirakpur/Panchkula. Join the engineering marvel known as the Himalayan Expressway (NH5) at Pinjore/Kalka, climbing steadily through Jabli, Dharampur, Solan, and Kandaghat into Shimla.</p>

            <div class="blog-callout">
                <h4><i class="fas fa-snowflake"></i> Shimla Road Trip Guide</h4>
                <ul>
                    <li><strong>Total Distance:</strong> 345 km</li>
                    <li><strong>Drive Time:</strong> ~6.5 to 7 hours</li>
                    <li><strong>Recommended Stopover:</strong> Giani Da Dhaba at Dharampur for steaming butter chicken, lemon chicken, and stuffed tandoori parathas.</li>
                </ul>
            </div>

            <h3>2. Top Attractions in & around Shimla</h3>
            <ul>
                <li><strong>The Ridge & Mall Road:</strong> Pedestrianized boulevard offering scenic mountain vistas, Tudor-style British architecture, the iconic yellow Christ Church, and Gaiety Theatre.</li>
                <li><strong>Jakhu Temple:</strong> Hilltop Hanuman temple featuring the giant 108-foot orange statue overlooking the entire valley.</li>
                <li><strong>Kufri & Mahasu Peak:</strong> Just 16 km past Shimla, famous for winter snow skiing, tobogganing, and Yak rides amidst apple orchards.</li>
                <li><strong>Mashobra & Naldehra:</strong> Quiet cedar pine retreats home to India\'s oldest 9-hole golf course and tranquil nature hiking trails.</li>
            </ul>
        '
    ],
    [
        'id' => 8,
        'slug' => 'delhi-to-amritsar-road-trip-guide',
        'from_city' => 'Delhi',
        'to_city' => 'Amritsar',
        'route_title' => 'Delhi to Amritsar Road Trip: Golden Temple, Wagah Border & Punjabi Culinary Trail',
        'category' => 'Spiritual & Pilgrimage',
        'category_slug' => 'spiritual',
        'image' => 'images/blogs/delhi-to-amritsar.jpg',
        'distance' => '450 km',
        'duration' => '7 - 8 hours',
        'highway' => 'Grand Trunk Road (NH44)',
        'best_time' => 'October to March',
        'read_time' => '6 min read',
        'date' => 'September 2026',
        'author' => 'Culinary & Culture Desk',
        'short_desc' => 'Embark on the ultimate Grand Trunk Road food and culture expedition. From famous Murthal dhabas to the divine radiance of the Golden Temple and patriotic fervor at Wagah Border.',
        'highlights' => [
            'Historic Grand Trunk Road 6-lane cruising',
            'Golden Temple (Harmandir Sahib) night illumination & Langar',
            'Beating Retreat ceremony at the India-Pakistan Wagah Border',
            'Feast on authentic Amritsari Kulcha, Lassi & Makki Di Roti'
        ],
        'content' => '
            <p class="lead">The drive from Delhi to Amritsar along NH44 (the historic Grand Trunk Road) is a sensory feast of fertile mustard fields, legendary highway dhabas, centuries of valor, and the profound serenity of Sikh spiritual heritage.</p>

            <h3>1. The Grand Trunk Road Experience</h3>
            <p>Depart early morning from Delhi to enjoy a breakfast stop at Murthal (Amrik Sukhdev or Gulshan Dhaba) for white-butter stuffed parathas. The 6-lane NH44 connects smoothly through Panipat, Karnal, Kurukshetra, Ambala, Ludhiana, Phagwara, and Jalandhar before arriving in Amritsar.</p>

            <div class="blog-callout">
                <h4><i class="fas fa-utensils"></i> Food & Route Highlights</h4>
                <ul>
                    <li><strong>Total Distance:</strong> 450 km</li>
                    <li><strong>Driving Time:</strong> ~7.5 hours</li>
                    <li><strong>Top Food Stops:</strong> Amrik Sukhdev (Murthal), Haveli (Jalandhar), Kesar Da Dhaba & Brother’s Dhaba (Amritsar).</li>
                </ul>
            </div>

            <h3>2. Unmissable Sights in Amritsar</h3>
            <ul>
                <li><strong>Sri Harmandir Sahib (Golden Temple):</strong> The holiest shrine in Sikhism with glistening gold sanctum reflected in the Amrit Sarovar lake. Experience the Guru ka Langar serving over 100,000 free meals daily.</li>
                <li><strong>Wagah-Attari Border Ceremony:</strong> Located 30 km from the city, witness the electrifying Beating Retreat ceremony with high-kicking soldiers and roaring patriotic crowds at sunset.</li>
                <li><strong>Jallianwala Bagh:</strong> The historic memorial park preserving bullet marks and martyr’s well from the tragic 1919 massacre.</li>
                <li><strong>Partition Museum:</strong> The world’s first museum dedicated to the poignant stories and artifacts of the 1947 partition of India.</li>
            </ul>
        '
    ],
    [
        'id' => 9,
        'slug' => 'delhi-to-jim-corbett-road-trip-guide',
        'from_city' => 'Delhi',
        'to_city' => 'Jim Corbett',
        'route_title' => 'Delhi to Jim Corbett National Park: Wilderness Drive & Royal Bengal Tiger Safari',
        'category' => 'Wildlife & Nature',
        'category_slug' => 'wildlife',
        'image' => 'images/blogs/delhi-to-jim-corbett.jpg',
        'distance' => '245 km',
        'duration' => '5 - 5.5 hours',
        'highway' => 'NH9 via Hapur, Moradabad, Kashipur & Ramnagar',
        'best_time' => 'November to June (Dhikala zone opens Nov 15)',
        'read_time' => '5 min read',
        'date' => 'September 2026',
        'author' => 'Wildlife Safari Guide',
        'short_desc' => 'Escape city noise for the dense sal forests of India’s oldest national park. Comprehensive guide to Jeep safaris in Dhikala & Bijrani zones, riverside luxury resorts, and birdwatching.',
        'highlights' => [
            'Fast drive on NH9 bypassing busy Moradabad city',
            'Open-top 4x4 Jeep safaris in Dhikala, Bijrani & Jhirna zones',
            'Luxury riverside jungle resorts along the Kosi River',
            'Corbett Waterfall, Garjiya Devi Temple & Sitabani buffer zone'
        ],
        'content' => '
            <p class="lead">Nestled in the foothills of the Himalayas in Nainital district, Jim Corbett National Park is a paradise for nature enthusiasts, wildlife photographers, and families seeking an authentic jungle adventure just 5 hours away from Delhi NCR.</p>

            <h3>1. The Route Guide via NH9</h3>
            <p>From Delhi, take the Delhi-Meerut Expressway to Dasna, then transition smoothly onto NH9 (NH24) four-lane highway towards Hapur and Garhmukteshwar. Take the wide Moradabad bypass towards Kashipur and Ramnagar—the gateway town to Jim Corbett.</p>

            <div class="blog-callout">
                <h4><i class="fas fa-paw"></i> Wildlife Safari Quick Facts</h4>
                <ul>
                    <li><strong>Total Distance:</strong> 245 km</li>
                    <li><strong>Drive Time:</strong> 5 hours</li>
                    <li><strong>Safari Zones:</strong> Dhikala (famous for grasslands & elephant herds), Bijrani (highest tiger density), Jhirna & Dhela (open year-round).</li>
                    <li><strong>Important:</strong> Pre-book forest department safari permits 45 days in advance online.</li>
                </ul>
            </div>

            <h3>2. Top Experiences in Corbett</h3>
            <ul>
                <li><strong>Morning & Afternoon 4x4 Jeep Safari:</strong> Spot Royal Bengal tigers, Asian elephants, spotted deer, barking deer, and over 600 species of migratory birds.</li>
                <li><strong>Garjiya Devi Temple:</strong> A revered sacred shrine perched atop a massive rock boulder in the middle of the flowing Kosi River.</li>
                <li><strong>Corbett Museum & Heritage Bungalow:</strong> Explore legendary hunter-turned-conservationist Jim Corbett’s winter home at Kaladhungi.</li>
                <li><strong>Kosi River Strolls & Campfires:</strong> Unwind at luxury eco-resorts with evening acoustic music, bonfire dinners, and star-gazing.</li>
            </ul>
        '
    ],
    [
        'id' => 10,
        'slug' => 'jaipur-to-udaipur-road-trip-guide',
        'from_city' => 'Jaipur',
        'to_city' => 'Udaipur',
        'route_title' => 'Jaipur to Udaipur Road Trip: Traversing Mewar Forts & Romantic Lake City',
        'category' => 'Golden Triangle & Heritage',
        'category_slug' => 'heritage',
        'image' => 'images/blogs/jaipur-to-udaipur.jpg',
        'distance' => '395 km',
        'duration' => '6 - 6.5 hours',
        'highway' => 'NH48 & NH58 via Ajmer, Beawar & Bhilwara / Chittorgarh',
        'best_time' => 'September to March',
        'read_time' => '6 min read',
        'date' => 'September 2026',
        'author' => 'Royal Rajasthan Desk',
        'short_desc' => 'Journey across the heart of Rajasthan from the Pink City to the Venice of the East. Stop by Ajmer Sharif Dargah, sacred Pushkar lake, Chittorgarh Fort, and Lake Pichola.',
        'highlights' => [
            'Smooth 4-lane national highway through the Aravalli belt',
            'Optional detour to Chittorgarh Fort—the largest fort in India',
            'Sunset boat cruise on Lake Pichola around Jag Mandir',
            'Grand City Palace museum & Saheliyon-ki-Bari gardens'
        ],
        'content' => '
            <p class="lead">The royal road trip from Jaipur to Udaipur connects Rajasthan’s two most romantic and historic gems. Driving through the rugged Aravalli ranges, passing ancient battlegrounds and serene lakes, this road trip is a must for culture and luxury seekers.</p>

            <h3>1. The Route & Ideal Stopovers</h3>
            <p>From Jaipur, take NH48 towards Kishangarh (famed for marble wonders and the Dumalda dumping yard photo spot) and Ajmer. You can take the direct route via Bhilwara or the scenic historical detour through Chittorgarh to explore the formidable UNESCO World Heritage fort of Maharana Pratap and Rani Padmini before reaching Udaipur.</p>

            <div class="blog-callout">
                <h4><i class="fas fa-ship"></i> Udaipur Trip Quick Stats</h4>
                <ul>
                    <li><strong>Total Distance:</strong> 395 km (Direct) | 430 km (via Chittorgarh)</li>
                    <li><strong>Travel Time:</strong> 6 to 7 hours</li>
                    <li><strong>Top Highlight:</strong> Royal sunset boat ride on Lake Pichola overlooking Taj Lake Palace.</li>
                </ul>
            </div>

            <h3>2. Top Attractions in the City of Lakes</h3>
            <ul>
                <li><strong>City Palace Complex:</strong> The sprawling palace built over 400 years by the Mewar dynasty on the eastern bank of Lake Pichola.</li>
                <li><strong>Bagore Ki Haveli:</strong> 18th-century lakeside mansion featuring the nightly Dharohar Rajasthani folk dance and puppet cultural extravaganza.</li>
                <li><strong>Monsoon Palace (Sajjangarh):</strong> High hilltop fort offering 360-degree sunset views over Udaipur\'s lakes and surrounding valleys.</li>
                <li><strong>Fateh Sagar Lake:</strong> Relaxed boulevard lined with food stalls, boat rides to Nehru Park, and evening cold coffee stalls.</li>
            </ul>
        '
    ],
    [
        'id' => 11,
        'slug' => 'delhi-to-varanasi-road-trip-guide',
        'from_city' => 'Delhi',
        'to_city' => 'Varanasi',
        'route_title' => 'Delhi to Varanasi Road Trip: Sacred Ganga Ghats & Purvanchal Expressway Corridor',
        'category' => 'Spiritual & Pilgrimage',
        'category_slug' => 'spiritual',
        'image' => 'images/blogs/delhi-to-varanasi.jpg',
        'distance' => '820 km',
        'duration' => '11 - 12 hours',
        'highway' => 'Yamuna Expressway, Agra-Lucknow Expressway & Purvanchal / NH19',
        'best_time' => 'October to March (Dev Deepawali in Nov)',
        'read_time' => '7 min read',
        'date' => 'September 2026',
        'author' => 'Pilgrimage Expedition Lead',
        'short_desc' => 'Experience the world\'s oldest living city via India’s premier expressway network. From Kashi Vishwanath Corridor to Dashashwamedh Ghat evening aarti and Sarnath Buddhist ruins.',
        'highlights' => [
            'Cruise on Yamuna Expressway & Agra-Lucknow Expressway network',
            'Grand evening Maha Aarti at Dashashwamedh Ghat',
            'Newly renovated Kashi Vishwanath Dham temple corridor',
            'Early morning sunrise boat ride on the holy River Ganges'
        ],
        'content' => '
            <p class="lead">Travelling from Delhi to Varanasi (Kashi/Banaras) has been revolutionized by India’s modern expressway grid. Spanning the Yamuna Expressway and Agra-Lucknow Expressway, travellers can complete this 820 km spiritual odyssey in luxury and supreme comfort.</p>

            <h3>1. The Expressway Advantage</h3>
            <p>Leave Delhi early at 5:00 AM. Take the Yamuna Expressway to Agra (165 km), seamlessly connect to the 302 km Agra-Lucknow Expressway, and continue towards Sultanpur / Varanasi via NH19 or the Purvanchal Expressway. The smooth multilane roads eliminate almost all urban congestion.</p>

            <div class="blog-callout">
                <h4><i class="fas fa-bell"></i> Spiritual Route Guide</h4>
                <ul>
                    <li><strong>Total Distance:</strong> ~820 km</li>
                    <li><strong>Drive Time:</strong> 11 to 12 hours</li>
                    <li><strong>Recommended Itinerary:</strong> 3 Days / 2 Nights (Optional Lucknow overnight stop)</li>
                    <li><strong>Must-Taste:</strong> Banarasi Paan, Malaiyo (winter milk froth delicacy), and piping hot Kachori Jalebi at Ram Bhandar.</li>
                </ul>
            </div>

            <h3>2. Soul-Stirring Sights in Kashi</h3>
            <ul>
                <li><strong>Dashashwamedh & Assi Ghat:</strong> Experience the world-famous choreographed brass lamp evening Ganga Aarti accompanied by rhythmic conch blowing and chants.</li>
                <li><strong>Kashi Vishwanath Corridor:</strong> The golden temple of Lord Shiva connected directly to the holy river ghats with modern pilgrim facilities.</li>
                <li><strong>Subah-e-Banaras Morning Boat Ride:</strong> Float past 84 historical ghats as the golden morning sun bathes the ancient stone steps and bathers.</li>
                <li><strong>Sarnath:</strong> Just 10 km from the city, visit the deer park where Lord Buddha gave his first sermon after enlightenment.</li>
            </ul>
        '
    ],
    [
        'id' => 12,
        'slug' => 'delhi-to-chandigarh-road-trip-guide',
        'from_city' => 'Delhi',
        'to_city' => 'Chandigarh',
        'route_title' => 'Delhi to Chandigarh Road Trip: The Green City Drive via Murthal & Ambala',
        'category' => 'City Break & Expressways',
        'category_slug' => 'expressway',
        'image' => 'images/blogs/delhi-to-chandigarh.jpg',
        'distance' => '245 km',
        'duration' => '3.5 - 4 hours',
        'highway' => 'NH44 (6-Lane Corridor) & Himalayan Expressway',
        'best_time' => 'October to April',
        'read_time' => '5 min read',
        'date' => 'September 2026',
        'author' => 'North India Highway Desk',
        'short_desc' => 'A favorite business and leisure drive. Cruise on the expansive 6-lane NH44 highway past world-famous dhabas to Le Corbusier\'s meticulously planned city, Sukhna Lake, and Rock Garden.',
        'highlights' => [
            'Butter paratha breakfast at legendary Murthal Dhabas',
            'Sukhna Lake sunset boating & cycling tracks',
            'Nek Chand’s whimsical recycled Rock Garden & Zakir Hussain Rose Garden',
            'Sector 17 & Elante Mall shopping and dining'
        ],
        'content' => '
            <p class="lead">The Delhi to Chandigarh highway is India\'s busiest and most well-equipped road corridor. As the joint capital of Punjab and Haryana and gateway to Himachal Pradesh, Chandigarh is celebrated for its lush urban greenery, grid architecture, and chic cafe culture.</p>

            <h3>1. The Highway Journey</h3>
            <p>Cruising on the 6-lane NH44, you pass Sonipat, Panipat (historic battlefields), Karnal (famed Karna Lake), and Ambala Cantt before taking the smooth Zirakpur flyover straight into Chandigarh\'s tree-lined avenues.</p>

            <div class="blog-callout">
                <h4><i class="fas fa-tree"></i> City Break Facts</h4>
                <ul>
                    <li><strong>Total Distance:</strong> 245 km</li>
                    <li><strong>Driving Time:</strong> ~3.5 to 4 hours</li>
                    <li><strong>Top Highlights:</strong> Rock Garden, Sukhna Lake, Rose Garden, Sector 8 & 26 brewpubs and dining.</li>
                    <li><strong>Best For:</strong> Weekend leisure breaks, corporate meetings, and family transit before heading to Shimla or Manali.</li>
                </ul>
            </div>
        '
    ],
    [
        'id' => 13,
        'slug' => 'delhi-to-vaishno-devi-road-trip-guide',
        'from_city' => 'Delhi',
        'to_city' => 'Vaishno Devi',
        'route_title' => 'Delhi to Vaishno Devi by Innova Crysta: Katra Yatra Road Trip Guide',
        'category' => 'Spiritual & Pilgrimage',
        'category_slug' => 'spiritual',
        'image' => 'images/blogs/delhi-to-vaishno-devi.jpg',
        'distance' => '650 km (to Katra)',
        'duration' => '11 - 12 hours',
        'highway' => 'NH44 via Ambala, Ludhiana, Pathankot & Jammu',
        'best_time' => 'March to June, September to November',
        'read_time' => '5 min read',
        'date' => 'November 2026',
        'author' => 'Innova Travel Desk',
        'short_desc' => 'Plan the Delhi to Katra drive for the Vaishno Devi yatra in a comfortable Innova Crysta: route, yatra registration, trek, helicopter and battery car options, and a relaxed 3-day plan.',
        'highlights' => [
            'Overnight drive to Katra in reclining captain seats',
            'Mata Vaishno Devi Bhawan & Bhairon Baba darshan',
            'Helicopter to Sanjichhat or the 13 km trek',
            'Lunch stops at Ludhiana and Jammu'
        ],
        'content' => '
            <p class="lead">The yatra to Shri Mata Vaishno Devi in the Trikuta hills is a journey every family plans at least once. Driving from Delhi to Katra in an Innova Crysta keeps elders comfortable on the long 650 km highway and gets the whole family to the base town rested for the climb.</p>

            <h3>1. The Route to Katra</h3>
            <p>The drive follows NH44 through Panipat, Ambala, Ludhiana and Pathankot to Jammu, then the last 50 km up to Katra. The highway is four to six lanes almost all the way, so many families leave Delhi at night and reach Katra by breakfast.</p>

            <div class="blog-callout">
                <h4><i class="fas fa-route"></i> Route Quick Facts</h4>
                <ul>
                    <li><strong>Distance:</strong> about 650 km to Katra</li>
                    <li><strong>Drive time:</strong> 11 to 12 hours with stops</li>
                    <li><strong>Base town:</strong> Katra; vehicles do not go beyond</li>
                    <li><strong>Recommended vehicle:</strong> Innova Crysta 7 seater for families with elders</li>
                </ul>
            </div>

            <h3>2. Yatra Registration</h3>
            <p>Every pilgrim needs a yatra registration (RFID card), available online on the Shri Mata Vaishno Devi Shrine Board website or at the counters in Katra. Helicopter seats and Bhawan rooms also book out early, especially around Navratri.</p>

            <h3>3. Reaching the Bhawan</h3>
            <ul>
                <li><strong>Walk:</strong> about 13 km on a paved, lit track with shelters and food stalls.</li>
                <li><strong>Pony or palki:</strong> available at Banganga for elders.</li>
                <li><strong>Helicopter:</strong> Katra to Sanjichhat, then about 2.5 km to the Bhawan.</li>
                <li><strong>Battery car:</strong> from Adhkuwari on the new track, for elders and the differently abled.</li>
            </ul>
            <p class="photo-credit"><small>Cover photo: KDhruv406, CC BY 4.0, via <a href="https://commons.wikimedia.org/wiki/File:Shri_Mata_Vaishno_Devi_Bhawan,_Katra_Jammu_%26_Kashmir_INDIA.jpg" target="_blank" rel="noopener nofollow">Wikimedia Commons</a>.</small></p>
        '
    ],
    [
        'id' => 14,
        'slug' => 'delhi-to-khatu-shyam-road-trip-guide',
        'from_city' => 'Delhi',
        'to_city' => 'Khatu Shyam Ji',
        'route_title' => 'Delhi to Khatu Shyam Ji by Innova Crysta: Darshan & Salasar Road Trip',
        'category' => 'Spiritual & Pilgrimage',
        'category_slug' => 'spiritual',
        'image' => 'images/blogs/delhi-to-khatu-shyam.jpg',
        'distance' => '265 km',
        'duration' => '5 - 6 hours',
        'highway' => 'NH48 via Rewari & Narnaul',
        'best_time' => 'October to March (avoid Ekadashi crowds)',
        'read_time' => '5 min read',
        'date' => 'November 2026',
        'author' => 'Innova Travel Desk',
        'short_desc' => 'A weekend road trip from Delhi to Khatu Shyam Ji in Sikar, Rajasthan, with Salasar Balaji on the same trip. Route, darshan tips, mela dates and a 2-day plan.',
        'highlights' => [
            'Shyam Baba darshan & Shyam Kund',
            'Salasar Balaji in the same weekend',
            'Easy 5-hour drive via Rewari',
            'Jeen Mata temple in the Aravallis'
        ],
        'content' => '
            <p class="lead">Khatu Shyam Ji in Sikar district draws lakhs of devotees from Delhi NCR every month. In an Innova Crysta the 265 km drive takes about five hours, so a family can leave on Saturday night, reach for the morning darshan and be home by Sunday evening.</p>

            <h3>1. The Route</h3>
            <p>Take NH48 to Gurugram and Rewari, then the road via Narnaul and Neem Ka Thana to Ringas and Khatu. The roads are good, with fuel and food along the way.</p>

            <div class="blog-callout">
                <h4><i class="fas fa-route"></i> Route Quick Facts</h4>
                <ul>
                    <li><strong>Distance:</strong> about 265 km</li>
                    <li><strong>Drive time:</strong> 5 to 6 hours</li>
                    <li><strong>Busiest days:</strong> Ekadashi and the Phalgun Lakkhi Mela</li>
                    <li><strong>Add-on:</strong> Salasar Balaji, about 100 km away</li>
                </ul>
            </div>

            <h3>2. Places to Visit</h3>
            <ul>
                <li><strong>Khatu Shyam Ji Temple:</strong> darshan of Shyam Baba, the Sheesh ke Daani.</li>
                <li><strong>Shyam Kund:</strong> the holy pond where the sheesh was found.</li>
                <li><strong>Salasar Balaji:</strong> the famous Hanuman temple in Churu district.</li>
                <li><strong>Jeen Mata Temple:</strong> an ancient Devi temple in the hills, about 30 km from Khatu.</li>
            </ul>
            <p class="photo-credit"><small>Cover photo: Ansh patanker, CC0, via <a href="https://commons.wikimedia.org/wiki/File:Khatu_shyam_temple.jpg" target="_blank" rel="noopener nofollow">Wikimedia Commons</a>.</small></p>
        '
    ],
    [
        'id' => 15,
        'slug' => 'delhi-to-vrindavan-road-trip-guide',
        'from_city' => 'Delhi',
        'to_city' => 'Vrindavan',
        'route_title' => 'Delhi to Vrindavan & Mathura by Innova Crysta: One-Day Braj Yatra',
        'category' => 'Spiritual & Pilgrimage',
        'category_slug' => 'spiritual',
        'image' => 'images/blogs/delhi-to-vrindavan.jpg',
        'distance' => '165 km',
        'duration' => '3 - 3.5 hours',
        'highway' => 'Yamuna Expressway',
        'best_time' => 'October to March; Holi & Janmashtami for festivals',
        'read_time' => '5 min read',
        'date' => 'November 2026',
        'author' => 'Innova Travel Desk',
        'short_desc' => 'A one-day Braj yatra from Delhi on the Yamuna Expressway: Banke Bihari, Prem Mandir, ISKCON and Krishna Janmabhoomi, with Govardhan and Barsana as a second-day add-on.',
        'highlights' => [
            'Banke Bihari & Radha Vallabh temples',
            'Prem Mandir light show after sunset',
            'Krishna Janmabhoomi in Mathura',
            'Govardhan parikrama & Barsana add-on'
        ],
        'content' => '
            <p class="lead">Vrindavan and Mathura, the land of Shri Krishna, are the easiest pilgrimage from Delhi. The Yamuna Expressway brings you there in about three hours, so a full day covers the main temples of both towns and you are home the same night.</p>

            <h3>1. The Route</h3>
            <p>Join the Yamuna Expressway at Greater Noida and exit at the Mathura/Vrindavan interchange. Inside Vrindavan the lanes are narrow; our chauffeurs know where to park close to the temples.</p>

            <div class="blog-callout">
                <h4><i class="fas fa-route"></i> Route Quick Facts</h4>
                <ul>
                    <li><strong>Distance:</strong> about 165 km</li>
                    <li><strong>Drive time:</strong> 3 to 3.5 hours</li>
                    <li><strong>Best start:</strong> by 6 AM to reach before the crowds</li>
                    <li><strong>Second day:</strong> Govardhan (22 km) and Barsana (45 km)</li>
                </ul>
            </div>

            <h3>2. Temples to Visit</h3>
            <ul>
                <li><strong>Shri Banke Bihari Temple:</strong> the heart of Vrindavan.</li>
                <li><strong>ISKCON Vrindavan:</strong> the Krishna Balaram Mandir.</li>
                <li><strong>Prem Mandir:</strong> white marble temple, best after sunset when it is lit up.</li>
                <li><strong>Shri Krishna Janmabhoomi:</strong> Krishna\'s birthplace in Mathura.</li>
                <li><strong>Nidhivan and Seva Kunj:</strong> the sacred groves of Vrindavan.</li>
            </ul>
            <p class="photo-credit"><small>Cover photo: Apurba Biswas, CC BY-SA 4.0, via <a href="https://commons.wikimedia.org/wiki/File:Vrindavan_Prem_Mandir_4.jpg" target="_blank" rel="noopener nofollow">Wikimedia Commons</a>.</small></p>
        '
    ],
    [
        'id' => 16,
        'slug' => 'delhi-to-nainital-road-trip-guide',
        'from_city' => 'Delhi',
        'to_city' => 'Nainital',
        'route_title' => 'Delhi to Nainital by Innova Crysta: Lakes, Kainchi Dham & Hill Weekend',
        'category' => 'Hill Stations & Adventure',
        'category_slug' => 'mountains',
        'image' => 'images/blogs/delhi-to-nainital.jpg',
        'distance' => '310 km',
        'duration' => '7 hours',
        'highway' => 'NH9 via Moradabad & Haldwani',
        'best_time' => 'March to June, October to December',
        'read_time' => '5 min read',
        'date' => 'November 2026',
        'author' => 'Innova Travel Desk',
        'short_desc' => 'The complete Delhi to Nainital road trip: route via Moradabad and Kathgodam, Naini Lake, Bhimtal, Kainchi Dham and Mukteshwar in an easy 3-day plan.',
        'highlights' => [
            'Boating on Naini Lake & Mall Road walk',
            'Kainchi Dham, Neem Karoli Baba\'s ashram',
            'Bhimtal, Sattal & Naukuchiatal',
            'Snow View Point by ropeway'
        ],
        'content' => '
            <p class="lead">Nainital and the lakes of Kumaon make the perfect long weekend from Delhi. An Innova Crysta handles the final hill climb from Kathgodam with ease and gives every passenger a comfortable seat with a view.</p>

            <h3>1. The Route</h3>
            <p>Drive via Hapur, Moradabad and Rampur to Haldwani and Kathgodam, then climb 35 km of hill road to Nainital. Leaving Delhi early avoids the traffic around Ghaziabad and Hapur.</p>

            <div class="blog-callout">
                <h4><i class="fas fa-mountain"></i> Route Quick Facts</h4>
                <ul>
                    <li><strong>Distance:</strong> about 310 km</li>
                    <li><strong>Drive time:</strong> around 7 hours</li>
                    <li><strong>Hill section:</strong> Kathgodam to Nainital, 35 km</li>
                    <li><strong>Nearby:</strong> Kainchi Dham 17 km, Bhimtal 22 km</li>
                </ul>
            </div>

            <h3>2. Places to See</h3>
            <ul>
                <li><strong>Naini Lake:</strong> boating and the Naina Devi temple on the lake shore.</li>
                <li><strong>Kainchi Dham:</strong> the ashram of Neem Karoli Baba.</li>
                <li><strong>Bhimtal, Sattal and Naukuchiatal:</strong> quieter lakes for a day out.</li>
                <li><strong>Snow View Point and Tiffin Top:</strong> Himalayan views on clear days.</li>
            </ul>
            <p class="photo-credit"><small>Cover photo: Praveen Singh Bisht, CC BY 2.0, via <a href="https://commons.wikimedia.org/wiki/File:Naini_Lake,_Nainital,_Uttarakhand,_India.jpg" target="_blank" rel="noopener nofollow">Wikimedia Commons</a>.</small></p>
        '
    ],
    [
        'id' => 17,
        'slug' => 'delhi-to-mussoorie-road-trip-guide',
        'from_city' => 'Delhi',
        'to_city' => 'Mussoorie',
        'route_title' => 'Delhi to Mussoorie by Innova Crysta: Queen of Hills Weekend Guide',
        'category' => 'Hill Stations & Adventure',
        'category_slug' => 'mountains',
        'image' => 'images/blogs/delhi-to-mussoorie.jpg',
        'distance' => '290 km',
        'duration' => '6 - 7 hours',
        'highway' => 'Delhi-Dehradun Expressway & NH334',
        'best_time' => 'March to June, September to November; December for snow',
        'read_time' => '5 min read',
        'date' => 'November 2026',
        'author' => 'Innova Travel Desk',
        'short_desc' => 'Weekend road trip from Delhi to Mussoorie via the new Delhi-Dehradun Expressway: Mall Road, Kempty Falls, Landour, Gun Hill and a 3-day plan for families.',
        'highlights' => [
            'Fast drive on the Delhi-Dehradun Expressway',
            'Mall Road, Gun Hill ropeway & Camel\'s Back Road',
            'Landour\'s cafes and old bakeries',
            'Kempty Falls & Dhanaulti'
        ],
        'content' => '
            <p class="lead">Mussoorie, the Queen of Hills, sits above Dehradun with views of the Doon valley and the Himalaya. The new Delhi-Dehradun Expressway has cut the drive time, making it one of the best weekend trips from Delhi in an Innova Crysta.</p>

            <h3>1. The Route</h3>
            <p>Take the Delhi-Dehradun Expressway via Baghpat and Saharanpur to Dehradun, then the 35 km hill road up to Mussoorie. The climb has many hairpin bends, where an experienced hill chauffeur makes all the difference.</p>

            <div class="blog-callout">
                <h4><i class="fas fa-mountain"></i> Route Quick Facts</h4>
                <ul>
                    <li><strong>Distance:</strong> about 290 km</li>
                    <li><strong>Drive time:</strong> 6 to 7 hours</li>
                    <li><strong>Hill section:</strong> Dehradun to Mussoorie, 35 km</li>
                    <li><strong>Snow:</strong> Possible from late December to February</li>
                </ul>
            </div>

            <h3>2. Places to See</h3>
            <ul>
                <li><strong>Mall Road and Camel\'s Back Road:</strong> evening walks and shopping.</li>
                <li><strong>Gun Hill:</strong> ropeway ride with views of the valley.</li>
                <li><strong>Landour:</strong> quiet lanes, Char Dukan and old churches.</li>
                <li><strong>Kempty Falls and Dhanaulti:</strong> a waterfall and deodar forests.</li>
            </ul>
            <p class="photo-credit"><small>Cover photo: Harshanh, CC BY-SA 3.0, via <a href="https://commons.wikimedia.org/wiki/File:Mussoorie_view_from_Mall_road_09.JPG" target="_blank" rel="noopener nofollow">Wikimedia Commons</a>.</small></p>
        '
    ],
    [
        'id' => 18,
        'slug' => 'delhi-to-ayodhya-road-trip-guide',
        'from_city' => 'Delhi',
        'to_city' => 'Ayodhya',
        'route_title' => 'Delhi to Ayodhya by Innova Crysta: Ram Mandir Darshan Road Trip',
        'category' => 'Spiritual & Pilgrimage',
        'category_slug' => 'spiritual',
        'image' => 'images/blogs/delhi-to-ayodhya.jpg',
        'distance' => '680 km',
        'duration' => '10 - 11 hours',
        'highway' => 'Yamuna, Agra-Lucknow & Purvanchal Expressways',
        'best_time' => 'October to March',
        'read_time' => '5 min read',
        'date' => 'November 2026',
        'author' => 'Innova Travel Desk',
        'short_desc' => 'Drive from Delhi to Ayodhya on the expressways for Shri Ram Janmabhoomi Mandir darshan, Hanuman Garhi, Saryu aarti and a 3-day plan with a Lucknow stop.',
        'highlights' => [
            'Shri Ram Janmabhoomi Mandir darshan',
            'Hanuman Garhi & Kanak Bhawan',
            'Saryu aarti at Ram ki Paidi',
            'Expressway drive with a Lucknow stop'
        ],
        'content' => '
            <p class="lead">Since the consecration of the Shri Ram Janmabhoomi Mandir, Ayodhya has become one of the most visited pilgrimages in India. The Yamuna, Agra-Lucknow and Purvanchal expressways make the long drive from Delhi smooth and fast in an Innova Crysta.</p>

            <h3>1. The Route</h3>
            <p>Drive the Yamuna Expressway to Agra, the Agra-Lucknow Expressway to Lucknow, and then on to Ayodhya. Most families break the journey for lunch in Lucknow.</p>

            <div class="blog-callout">
                <h4><i class="fas fa-route"></i> Route Quick Facts</h4>
                <ul>
                    <li><strong>Distance:</strong> about 680 km</li>
                    <li><strong>Drive time:</strong> 10 to 11 hours</li>
                    <li><strong>Good halt:</strong> Lucknow, about 135 km before Ayodhya</li>
                    <li><strong>Darshan:</strong> Check the temple\'s current timings and pass system before you go</li>
                </ul>
            </div>

            <h3>2. Places to Visit</h3>
            <ul>
                <li><strong>Shri Ram Janmabhoomi Mandir:</strong> the new temple of Ram Lalla.</li>
                <li><strong>Hanuman Garhi:</strong> traditionally visited before Ram darshan.</li>
                <li><strong>Kanak Bhawan:</strong> the temple of Sita and Ram.</li>
                <li><strong>Ram ki Paidi:</strong> ghats on the Saryu with the evening aarti.</li>
            </ul>
            <p class="photo-credit"><small>Cover photo: Narendra Modi, CC BY 3.0, via <a href="https://commons.wikimedia.org/wiki/File:Ram_Mandir,_Ayodhya.png" target="_blank" rel="noopener nofollow">Wikimedia Commons</a>.</small></p>
        '
    ],
    [
        'id' => 19,
        'slug' => 'delhi-to-dharamshala-road-trip-guide',
        'from_city' => 'Delhi',
        'to_city' => 'Dharamshala',
        'route_title' => 'Delhi to Dharamshala & McLeod Ganj by Innova Crysta: Himalayan Road Trip',
        'category' => 'Hill Stations & Adventure',
        'category_slug' => 'mountains',
        'image' => 'images/blogs/delhi-to-dharamshala.jpg',
        'distance' => '480 km',
        'duration' => '9 - 10 hours',
        'highway' => 'NH44 & NH503 via Una',
        'best_time' => 'March to June, September to November',
        'read_time' => '5 min read',
        'date' => 'November 2026',
        'author' => 'Innova Travel Desk',
        'short_desc' => 'Road trip from Delhi to Dharamshala and McLeod Ganj: route via Chandigarh and Una, Dalai Lama Temple, Bhagsu, Triund, the HPCA stadium and a 4-day plan.',
        'highlights' => [
            'Dalai Lama Temple & Tibetan culture in McLeod Ganj',
            'HPCA cricket stadium with mountain views',
            'Bhagsu waterfall & Triund trek',
            'Kangra Fort and tea gardens'
        ],
        'content' => '
            <p class="lead">Dharamshala and McLeod Ganj sit below the snowy Dhauladhar range, home to the Dalai Lama and a vibrant Tibetan community. It is a long but beautiful drive from Delhi, and the Innova Crysta\'s comfort makes the 480 km easy for the whole family.</p>

            <h3>1. The Route</h3>
            <p>Drive NH44 to Ambala and Chandigarh, then Ropar, Una and Kangra to Dharamshala. McLeod Ganj is another 9 km uphill. Many travellers leave at night to reach by morning.</p>

            <div class="blog-callout">
                <h4><i class="fas fa-mountain"></i> Route Quick Facts</h4>
                <ul>
                    <li><strong>Distance:</strong> about 480 km</li>
                    <li><strong>Drive time:</strong> 9 to 10 hours</li>
                    <li><strong>Upper town:</strong> McLeod Ganj, 9 km above Dharamshala</li>
                    <li><strong>Trek:</strong> Triund, about 9 km from McLeod Ganj</li>
                </ul>
            </div>

            <h3>2. Places to See</h3>
            <ul>
                <li><strong>Tsuglagkhang (Dalai Lama Temple):</strong> the main Tibetan temple complex.</li>
                <li><strong>Bhagsunag Temple and Waterfall:</strong> an easy walk from McLeod Ganj.</li>
                <li><strong>HPCA Stadium:</strong> one of the most scenic cricket grounds in the world.</li>
                <li><strong>Kangra Fort and Norbulingka Institute:</strong> history and Tibetan arts.</li>
            </ul>
            <p class="photo-credit"><small>Cover photo: Adam Jones, CC BY-SA 2.0, via <a href="https://commons.wikimedia.org/wiki/File:View_over_McLeod_Ganj_-_Himachal_Pradesh_-_India_(26538939370).jpg" target="_blank" rel="noopener nofollow">Wikimedia Commons</a>.</small></p>
        '
    ],
    [
        'id' => 20,
        'slug' => 'delhi-to-lansdowne-road-trip-guide',
        'from_city' => 'Delhi',
        'to_city' => 'Lansdowne',
        'route_title' => 'Delhi to Lansdowne by Innova Crysta: A Quiet Hill Weekend Without the Crowds',
        'category' => 'Hill Stations & Adventure',
        'category_slug' => 'mountains',
        'image' => 'images/blogs/delhi-to-lansdowne.jpg',
        'distance' => '260 km',
        'duration' => '6 hours',
        'highway' => 'Delhi-Meerut Expressway via Kotdwar',
        'best_time' => 'March to June, October to February',
        'read_time' => '5 min read',
        'date' => 'November 2026',
        'author' => 'Innova Travel Desk',
        'short_desc' => 'Escape the crowded hill towns with a weekend in Lansdowne: route via Meerut and Kotdwar, Bhulla Tal, Tip-n-Top, Tarkeshwar Mahadev and a relaxed 2-day plan.',
        'highlights' => [
            'Uncrowded cantonment hill town',
            'Bhulla Tal boating & Tip-n-Top views',
            'Tarkeshwar Mahadev in deodar forest',
            'Only 6 hours from Delhi'
        ],
        'content' => '
            <p class="lead">Lansdowne is a small cantonment town in the Garhwal hills, home of the Garhwal Rifles. With clean roads, pine forests and very little traffic, it is the ideal quiet weekend from Delhi for families, couples and senior citizens.</p>

            <h3>1. The Route</h3>
            <p>Take the Delhi-Meerut Expressway, then Bijnor and Najibabad to Kotdwar, and the 40 km hill road to Lansdowne. The hill road is winding but well maintained.</p>

            <div class="blog-callout">
                <h4><i class="fas fa-mountain"></i> Route Quick Facts</h4>
                <ul>
                    <li><strong>Distance:</strong> about 260 km</li>
                    <li><strong>Drive time:</strong> around 6 hours</li>
                    <li><strong>Hill section:</strong> Kotdwar to Lansdowne, 40 km</li>
                    <li><strong>Best for:</strong> Families, couples and senior citizens</li>
                </ul>
            </div>

            <h3>2. Places to See</h3>
            <ul>
                <li><strong>Bhulla Tal:</strong> small army-maintained lake with boating.</li>
                <li><strong>Tip-n-Top:</strong> viewpoint over the valleys and Himalayan peaks.</li>
                <li><strong>St. Mary\'s Church and the War Memorial:</strong> British-era heritage.</li>
                <li><strong>Tarkeshwar Mahadev:</strong> Shiva temple in deodar forest, 35 km away.</li>
            </ul>
            <p class="photo-credit"><small>Cover photo: Navdeep Gusain, CC BY-SA 4.0, via <a href="https://commons.wikimedia.org/wiki/File:Lansdowne_in_monsoon.jpg" target="_blank" rel="noopener nofollow">Wikimedia Commons</a>.</small></p>
        '
    ],
    [
        'id' => 21,
        'slug' => 'delhi-to-kedarnath-road-trip-guide',
        'from_city' => 'Delhi',
        'to_city' => 'Kedarnath',
        'route_title' => 'Delhi to Kedarnath by Innova Crysta: Yatra Route, Trek & Helicopter Guide',
        'category' => 'Spiritual & Pilgrimage',
        'category_slug' => 'spiritual',
        'image' => 'images/blogs/delhi-to-kedarnath.jpg',
        'distance' => '450 km (to Sonprayag)',
        'duration' => '11 - 12 hours',
        'highway' => 'Via Haridwar, Rishikesh & Rudraprayag',
        'best_time' => 'May to June, September to October',
        'read_time' => '5 min read',
        'date' => 'November 2026',
        'author' => 'Innova Travel Desk',
        'short_desc' => 'Plan the Kedarnath yatra from Delhi: road route to Sonprayag and Gaurikund, registration, the 16 km trek, helicopter from Phata or Guptkashi, and a 5-day plan.',
        'highlights' => [
            'Baba Kedarnath darshan in the Himalaya',
            'Scenic drive along the Alaknanda & Mandakini',
            'Helicopter from Phata, Sersi or Guptkashi',
            'Devprayag and Rudraprayag sangams'
        ],
        'content' => '
            <p class="lead">Kedarnath, one of the twelve Jyotirlingas and a part of the Char Dham, sits at about 3,580 metres in the Garhwal Himalaya. The road ends at Sonprayag, and an Innova Crysta with an experienced mountain chauffeur is one of the safest and most comfortable ways to reach it from Delhi.</p>

            <h3>1. The Route</h3>
            <p>Drive from Delhi to Haridwar and Rishikesh, then along the Alaknanda through Devprayag and Srinagar to Rudraprayag, and up the Mandakini valley via Guptkashi to Sonprayag. Shared jeeps take pilgrims the last 5 km to Gaurikund, where the trek starts.</p>

            <div class="blog-callout">
                <h4><i class="fas fa-mountain"></i> Route Quick Facts</h4>
                <ul>
                    <li><strong>Distance:</strong> about 450 km to Sonprayag</li>
                    <li><strong>Drive time:</strong> best split over 2 days</li>
                    <li><strong>Trek:</strong> about 16 km from Gaurikund</li>
                    <li><strong>Registration:</strong> mandatory for the Char Dham yatra</li>
                </ul>
            </div>

            <h3>2. Yatra Essentials</h3>
            <ul>
                <li><strong>Registration:</strong> register online on the Uttarakhand government yatra portal before you leave.</li>
                <li><strong>Helicopter:</strong> book only on the official IRCTC heli-yatra website.</li>
                <li><strong>Ponies and palkis:</strong> available at Gaurikund for those who cannot walk.</li>
                <li><strong>Season:</strong> the temple usually opens around Akshaya Tritiya and closes after Bhai Dooj.</li>
            </ul>
            <p class="photo-credit"><small>Cover photo: Shivam Kumar 766, CC BY-SA 4.0, via <a href="https://commons.wikimedia.org/wiki/File:Kedarnath_Temple_in_Rainy_season.jpg" target="_blank" rel="noopener nofollow">Wikimedia Commons</a>.</small></p>
        '
    ]
];

require_once __DIR__ . '/blog_extras.php';

// Reading time reflects the full article: guide text plus itinerary, stops, tips and FAQs
foreach ($blogs as &$b) {
    $words = str_word_count(strip_tags($b['content'])) + str_word_count(implode(' ', $b['highlights']));
    $ex = $blog_extras[$b['slug']] ?? [];
    foreach (['itinerary' => ['title', 'text'], 'stops' => ['name', 'note'], 'faqs' => ['q', 'a']] as $k => $fields) {
        foreach ($ex[$k] ?? [] as $row) foreach ($fields as $f) $words += str_word_count($row[$f]);
    }
    $words += str_word_count(implode(' ', $ex['tips'] ?? []));
    $b['read_time'] = max(3, (int)ceil($words / 200)) . ' min read';
}
unset($b);

// Check if a single blog article is requested
$single_blog = null;
if (!empty($slug)) {
    foreach ($blogs as $b) {
        if ($b['slug'] === $slug) {
            $single_blog = $b;
            break;
        }
    }
}
?>
<?php include 'header.php'; ?>

<style>
/* ============================================================
   PREMIUM BLOG PAGE CUSTOM STYLING
   ============================================================ */
.blog-hero {
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #004d40 100%);
    color: white;
    padding: 70px 0 60px;
    position: relative;
    overflow: hidden;
}
.blog-hero::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -10%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(0,176,155,0.2) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}
.blog-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    max-width: 860px;
    margin: 0 auto;
}
.blog-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(0, 176, 155, 0.2);
    border: 1px solid rgba(0, 176, 155, 0.4);
    color: #34d399;
    padding: 6px 18px;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 600;
    margin-bottom: 20px;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}
.blog-hero h1 {
    font-size: 2.9rem;
    font-weight: 800;
    line-height: 1.25;
    margin-bottom: 18px;
    color: #ffffff;
}
.blog-hero h1 span {
    background: linear-gradient(135deg, #00b09b, #96c93d);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.blog-hero p {
    font-size: 1.15rem;
    color: #cbd5e1;
    line-height: 1.7;
    margin-bottom: 35px;
}

/* Search and Filter Box */
.blog-search-bar {
    max-width: 650px;
    margin: 0 auto;
    position: relative;
}
.blog-search-input {
    width: 100%;
    padding: 16px 55px 16px 25px;
    border-radius: 50px;
    border: 2px solid rgba(255, 255, 255, 0.15);
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(15px);
    color: white;
    font-size: 1.05rem;
    font-family: 'Poppins', sans-serif;
    outline: none;
    transition: all 0.3s;
}
.blog-search-input::placeholder {
    color: #94a3b8;
}
.blog-search-input:focus {
    border-color: #00b09b;
    background: rgba(255, 255, 255, 0.15);
    box-shadow: 0 0 0 4px rgba(0, 176, 155, 0.25);
}
.blog-search-btn {
    position: absolute;
    right: 8px;
    top: 50%;
    transform: translateY(-50%);
    width: 44px;
    height: 44px;
    background: linear-gradient(135deg, #00b09b, #96c93d);
    border: none;
    border-radius: 50%;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    font-size: 1.1rem;
    transition: transform 0.3s;
}
.blog-search-btn:hover {
    transform: translateY(-50%) scale(1.08);
}

/* Categories Bar */
.blog-categories-wrapper {
    background: white;
    border-bottom: 1px solid #e2e8f0;
    padding: 18px 0;
    position: sticky;
    top: 65px;
    z-index: 900;
    box-shadow: 0 4px 15px rgba(0,0,0,0.03);
}
.blog-categories {
    display: flex;
    gap: 12px;
    overflow-x: auto;
    padding-bottom: 4px;
    scrollbar-width: none;
}
.blog-categories::-webkit-scrollbar {
    display: none;
}
.category-pill {
    white-space: nowrap;
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 0.95rem;
    font-weight: 500;
    color: #475569;
    background: #f1f5f9;
    border: 1px solid #e2e8f0;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
}
.category-pill:hover,
.category-pill.active {
    background: linear-gradient(135deg, #00b09b, #96c93d);
    color: white;
    border-color: transparent;
    box-shadow: 0 5px 15px rgba(0, 176, 155, 0.25);
}

/* Featured Section */
.featured-blog-section {
    padding: 50px 0 20px;
}
.featured-card {
    background: white;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0,0,0,0.06);
    display: grid;
    grid-template-columns: 1.1fr 1fr;
    border: 1px solid #e2e8f0;
    transition: transform 0.3s, box-shadow 0.3s;
}
.featured-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 25px 50px rgba(0, 176, 155, 0.12);
}
.featured-img-wrap {
    position: relative;
    overflow: hidden;
    min-height: 380px;
}
.featured-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}
.featured-card:hover .featured-img-wrap img {
    transform: scale(1.05);
}
.featured-badge {
    position: absolute;
    top: 20px;
    left: 20px;
    background: linear-gradient(135deg, #fbbf24, #f59e0b);
    color: #0f172a;
    font-weight: 700;
    font-size: 0.85rem;
    padding: 6px 16px;
    border-radius: 50px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    display: flex;
    align-items: center;
    gap: 6px;
}
.featured-body {
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.route-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #e6fffa;
    color: #0d9488;
    padding: 5px 14px;
    border-radius: 50px;
    font-size: 0.85rem;
    font-weight: 600;
    width: fit-content;
    margin-bottom: 15px;
}
.featured-title {
    font-size: 1.9rem;
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: 15px;
    color: #1e293b;
}
.featured-title a {
    color: inherit;
    text-decoration: none;
    transition: color 0.3s;
}
.featured-title a:hover {
    color: #00b09b;
}
.featured-desc {
    color: #64748b;
    font-size: 1.05rem;
    line-height: 1.6;
    margin-bottom: 20px;
}
.featured-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    padding: 15px 0;
    border-top: 1px solid #f1f5f9;
    border-bottom: 1px solid #f1f5f9;
    margin-bottom: 25px;
    font-size: 0.9rem;
    color: #475569;
}
.featured-meta span {
    display: flex;
    align-items: center;
    gap: 6px;
}
.featured-meta i {
    color: #00b09b;
}

/* Blog Grid */
.blogs-main-section {
    padding: 40px 0 70px;
}
.blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 30px;
}
.blog-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    border: 1px solid #e2e8f0;
    display: flex;
    flex-direction: column;
    transition: transform 0.35s ease, box-shadow 0.35s ease;
    position: relative;
}
.blog-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 176, 155, 0.12);
}
.blog-card-img {
    height: 220px;
    position: relative;
    overflow: hidden;
    background: #e2e8f0;
}
.blog-card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}
.blog-card:hover .blog-card-img img {
    transform: scale(1.08);
}
.blog-card-category {
    position: absolute;
    bottom: 15px;
    left: 15px;
    background: rgba(15, 23, 42, 0.85);
    backdrop-filter: blur(8px);
    color: white;
    font-size: 0.8rem;
    font-weight: 600;
    padding: 4px 12px;
    border-radius: 50px;
    border: 1px solid rgba(255,255,255,0.2);
}
.blog-card-body {
    padding: 24px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}
.city-route-tag {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.88rem;
    font-weight: 700;
    color: #00b09b;
    margin-bottom: 10px;
}
.city-route-tag i {
    font-size: 0.8rem;
    color: #fbbf24;
}
.blog-card-title {
    font-size: 1.35rem;
    font-weight: 700;
    line-height: 1.35;
    margin-bottom: 12px;
    color: #1e293b;
}
.blog-card-title a {
    color: inherit;
    text-decoration: none;
    transition: color 0.3s;
}
.blog-card-title a:hover {
    color: #00b09b;
}
.blog-card-desc {
    color: #64748b;
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 20px;
    flex-grow: 1;
}
.blog-stats-pill {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
    background: #f8fafc;
    padding: 12px 14px;
    border-radius: 12px;
    margin-bottom: 20px;
    font-size: 0.85rem;
    color: #475569;
    border: 1px solid #eef2f6;
}
.blog-stats-pill div {
    display: flex;
    align-items: center;
    gap: 6px;
}
.blog-stats-pill i {
    color: #00b09b;
}
.blog-card-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 15px;
    border-top: 1px solid #f1f5f9;
    margin-top: auto;
}
.read-more-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: #00b09b;
    font-weight: 600;
    font-size: 0.95rem;
    text-decoration: none;
    transition: gap 0.3s, color 0.3s;
    background: none;
    border: none;
    cursor: pointer;
    padding: 0;
}
.read-more-link:hover {
    gap: 10px;
    color: #0d9488;
}
.book-route-btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #25d366;
    color: white;
    font-size: 0.85rem;
    font-weight: 600;
    padding: 6px 14px;
    border-radius: 50px;
    text-decoration: none;
    transition: all 0.3s;
}
.book-route-btn:hover {
    background: #1eb956;
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(37, 211, 102, 0.3);
}

/* Route Calculator Section */
.calc-section {
    background: linear-gradient(135deg, #ffffff, #f0fdfa);
    border-radius: 30px;
    padding: 45px;
    margin: 50px 0;
    box-shadow: 0 20px 40px rgba(0,0,0,0.06);
    border: 1px solid #ccfbf1;
}
.calc-grid {
    display: grid;
    grid-template-columns: 1.2fr 1fr;
    gap: 40px;
    align-items: center;
}
.calc-form-wrap h3 {
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 10px;
    color: #0f172a;
}
.calc-form-wrap p {
    color: #64748b;
    margin-bottom: 25px;
}
.calc-inputs {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
    margin-bottom: 20px;
}
.calc-input-group label {
    display: block;
    font-size: 0.85rem;
    font-weight: 600;
    color: #334155;
    margin-bottom: 6px;
}
.calc-input-group select,
.calc-input-group input {
    width: 100%;
    padding: 12px 16px;
    border-radius: 12px;
    border: 1px solid #cbd5e1;
    font-family: 'Poppins', sans-serif;
    font-size: 0.95rem;
    background: white;
    outline: none;
    transition: border 0.3s, box-shadow 0.3s;
}
.calc-input-group select:focus,
.calc-input-group input:focus {
    border-color: #00b09b;
    box-shadow: 0 0 0 3px rgba(0, 176, 155, 0.15);
}
.calc-result-box {
    background: linear-gradient(135deg, #0f172a, #1e293b);
    color: white;
    border-radius: 20px;
    padding: 30px;
    position: relative;
}
.calc-result-box h4 {
    color: #34d399;
    font-size: 1.1rem;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.calc-stat-row {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    font-size: 0.95rem;
}
.calc-stat-row span:first-child {
    color: #94a3b8;
}
.calc-stat-row span:last-child {
    font-weight: 600;
    color: white;
}
.calc-cta-btn {
    width: 100%;
    margin-top: 20px;
    text-align: center;
    background: linear-gradient(135deg, #00b09b, #96c93d);
    color: white;
    padding: 12px 20px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s;
    box-shadow: 0 10px 20px rgba(0, 176, 155, 0.3);
}
.calc-cta-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 30px rgba(0, 176, 155, 0.5);
}

/* Single Article Full View */
.article-container {
    max-width: 900px;
    margin: 40px auto 70px;
    background: white;
    border-radius: 24px;
    padding: 40px;
    box-shadow: 0 20px 45px rgba(0,0,0,0.06);
    border: 1px solid #e2e8f0;
}
.article-header {
    margin-bottom: 30px;
}
.article-back-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #64748b;
    text-decoration: none;
    font-weight: 600;
    margin-bottom: 20px;
    transition: color 0.3s;
}
.article-back-btn:hover {
    color: #00b09b;
}
.article-title {
    font-size: 2.3rem;
    font-weight: 800;
    color: #0f172a;
    line-height: 1.3;
    margin-bottom: 20px;
}
.article-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    font-size: 0.9rem;
    color: #64748b;
    margin-bottom: 25px;
    padding-bottom: 20px;
    border-bottom: 1px solid #e2e8f0;
}
.article-meta span {
    display: flex;
    align-items: center;
    gap: 6px;
}
.article-meta i {
    color: #00b09b;
}
.article-hero-img {
    width: 100%;
    height: 440px;
    border-radius: 20px;
    object-fit: cover;
    margin-bottom: 35px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}
.article-body {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #334155;
}
.article-body p {
    margin-bottom: 22px;
}
.article-body p.lead {
    font-size: 1.25rem;
    font-weight: 500;
    color: #1e293b;
    line-height: 1.7;
}
.article-body h3 {
    font-size: 1.6rem;
    font-weight: 700;
    color: #0f172a;
    margin: 35px 0 15px;
    position: relative;
    padding-left: 15px;
}
.article-body h3::before {
    content: '';
    position: absolute;
    left: 0;
    top: 6px;
    bottom: 6px;
    width: 4px;
    background: linear-gradient(to bottom, #00b09b, #96c93d);
    border-radius: 4px;
}
.article-body ul {
    margin: 15px 0 25px 25px;
}
.article-body li {
    margin-bottom: 10px;
}
.blog-callout {
    background: #f0fdfa;
    border-left: 4px solid #00b09b;
    padding: 24px;
    border-radius: 12px;
    margin: 30px 0;
}
.blog-callout h4 {
    color: #0f766e;
    font-size: 1.2rem;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.article-cta-box {
    background: linear-gradient(135deg, #0f172a, #1e293b);
    color: white;
    padding: 35px;
    border-radius: 20px;
    margin-top: 40px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 30px;
}
.article-cta-text h4 {
    font-size: 1.5rem;
    color: white;
    margin-bottom: 8px;
}
.article-cta-text p {
    color: #cbd5e1;
    margin-bottom: 0;
    font-size: 0.95rem;
}
.article-cta-actions {
    display: flex;
    gap: 15px;
    flex-shrink: 0;
}

/* Travel Tips Grid */
.tips-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
    margin-top: 40px;
}
.tip-card {
    background: white;
    padding: 30px 25px;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 10px 25px rgba(0,0,0,0.03);
    transition: transform 0.3s;
}
.tip-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 176, 155, 0.1);
}
.tip-icon {
    width: 55px;
    height: 55px;
    border-radius: 14px;
    background: linear-gradient(135deg, rgba(0, 176, 155, 0.1), rgba(150, 201, 61, 0.1));
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: #00b09b;
    margin-bottom: 18px;
}
.tip-card h4 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    color: #1e293b;
}
.tip-card p {
    color: #64748b;
    font-size: 0.95rem;
    line-height: 1.6;
}

/* FAQ Accordion */
.faq-wrap {
    max-width: 850px;
    margin: 40px auto 0;
}
.faq-item {
    background: white;
    border-radius: 16px;
    margin-bottom: 15px;
    border: 1px solid #e2e8f0;
    overflow: hidden;
    transition: all 0.3s;
}
.faq-question {
    padding: 20px 25px;
    font-weight: 600;
    font-size: 1.05rem;
    color: #1e293b;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    user-select: none;
}
.faq-question i {
    color: #00b09b;
    transition: transform 0.3s;
}
.faq-answer {
    padding: 0 25px 20px;
    color: #64748b;
    font-size: 0.98rem;
    line-height: 1.7;
    display: none;
}
.faq-item.active {
    border-color: #00b09b;
    box-shadow: 0 10px 25px rgba(0, 176, 155, 0.08);
}
.faq-item.active .faq-question i {
    transform: rotate(180deg);
}
.faq-item.active .faq-answer {
    display: block;
}

/* Responsive queries */
@media (max-width: 992px) {
    .featured-card { grid-template-columns: 1fr; }
    .featured-img-wrap { min-height: 280px; }
    .featured-body { padding: 30px; }
    .calc-grid { grid-template-columns: 1fr; }
    .article-cta-box { flex-direction: column; text-align: center; }
    .article-cta-actions { width: 100%; justify-content: center; }
}
@media (max-width: 768px) {
    .blog-hero h1 { font-size: 2.1rem; }
    .blog-hero { padding: 50px 0 40px; }
    .blog-grid { grid-template-columns: 1fr; }
    .article-container { padding: 25px 20px; }
    .article-title { font-size: 1.75rem; }
    .article-hero-img { height: 260px; }
    .calc-inputs { grid-template-columns: 1fr; }
    .calc-section { padding: 30px 20px; }
}
</style>

<?php if ($single_blog): ?>
<?php
// ============================================================
// SINGLE BLOG ARTICLE VIEW
// ============================================================
require_once __DIR__ . '/pricing_config.php';
$extra = $blog_extras[$single_blog['slug']] ?? ['route_page' => null, 'itinerary' => [], 'stops' => [], 'tips' => [], 'faqs' => []];

// Fare shown in the sidebar is the same 1-day 7-seater fare the route page displays.
$article_fare = null;
if (!empty($extra['route_page'])) {
    $route_src = @file_get_contents(__DIR__ . '/' . $extra['route_page']);
    if ($route_src && preg_match('/^\$distance\s*=\s*(\d+)/m', $route_src, $dm)) {
        $fleet = getFleetVehiclesPricing(((int)$dm[1]) * 2);
        $article_fare = $fleet['crysta_7']['price_1day'] ?? null;
    }
}

// Related guides: same category first, then the rest
$related = array_values(array_filter($blogs, function ($b) use ($single_blog) {
    return $b['slug'] !== $single_blog['slug'] && $b['category_slug'] === $single_blog['category_slug'];
}));
foreach ($blogs as $b) {
    if (count($related) >= 3) break;
    if ($b['slug'] !== $single_blog['slug'] && !in_array($b, $related, true)) $related[] = $b;
}
$related = array_slice($related, 0, 3);

$article_url = 'https://innovacrystaonrentdelhi.com/blog.php?slug=' . rawurlencode($single_blog['slug']);
$share_text = $single_blog['route_title'];
$route_label = $single_blog['from_city'] . ' to ' . $single_blog['to_city'];
$img_v = @filemtime($single_blog['image']) ?: '1';
?>
<article class="ba">
    <!-- Hero -->
    <header class="ba-hero">
        <div class="ba-hero-bg" style="background-image:url('<?php echo htmlspecialchars($single_blog['image']); ?>?v=<?php echo $img_v; ?>');"></div>
        <div class="container ba-hero-inner">
            <nav class="ba-crumbs" aria-label="Breadcrumb">
                <a href="index.php">Home</a><i class="fas fa-chevron-right"></i>
                <a href="blog.php">Travel Blog</a><i class="fas fa-chevron-right"></i>
                <span><?php echo htmlspecialchars($single_blog['category']); ?></span>
            </nav>
            <span class="ba-route"><i class="fas fa-route"></i> <?php echo htmlspecialchars($single_blog['from_city']); ?> <i class="fas fa-arrow-right"></i> <?php echo htmlspecialchars($single_blog['to_city']); ?></span>
            <h1><?php echo htmlspecialchars($single_blog['route_title']); ?></h1>
            <p class="ba-dek"><?php echo htmlspecialchars($single_blog['short_desc']); ?></p>
            <div class="ba-byline">
                <span class="ba-author-avatar"><i class="fas fa-car-side"></i></span>
                <div>
                    <strong><?php echo htmlspecialchars($single_blog['author']); ?></strong>
                    <span><?php echo htmlspecialchars($single_blog['date']); ?> · <?php echo htmlspecialchars($single_blog['read_time']); ?></span>
                </div>
            </div>
        </div>
    </header>

    <!-- Key facts strip -->
    <div class="container ba-facts-wrap">
        <ul class="ba-facts">
            <li><i class="fas fa-road"></i><span>Distance</span><strong><?php echo htmlspecialchars($single_blog['distance']); ?></strong></li>
            <li><i class="far fa-clock"></i><span>Drive time</span><strong><?php echo htmlspecialchars($single_blog['duration']); ?></strong></li>
            <li><i class="fas fa-calendar-check"></i><span>Best time</span><strong><?php echo htmlspecialchars($single_blog['best_time']); ?></strong></li>
            <li><i class="fas fa-car-side"></i><span>Recommended</span><strong>Innova Crysta 7-Seater</strong></li>
        </ul>
    </div>

    <div class="container ba-layout">
        <!-- Main column -->
        <div class="ba-main">
            <div class="ba-body" id="baBody">
                <?php echo $single_blog['content']; ?>
            </div>

            <?php if (!empty($single_blog['highlights'])): ?>
            <section class="ba-block" id="highlights">
                <h2>Trip highlights</h2>
                <ul class="ba-highlights">
                    <?php foreach ($single_blog['highlights'] as $h): ?>
                    <li><i class="fas fa-circle-check"></i><?php echo htmlspecialchars($h); ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>
            <?php endif; ?>

            <?php if (!empty($extra['itinerary'])): ?>
            <section class="ba-block" id="itinerary">
                <h2>Suggested itinerary</h2>
                <ol class="ba-timeline">
                    <?php foreach ($extra['itinerary'] as $step): ?>
                    <li>
                        <span class="ba-tl-time"><?php echo htmlspecialchars($step['time']); ?></span>
                        <h3><?php echo htmlspecialchars($step['title']); ?></h3>
                        <p><?php echo htmlspecialchars($step['text']); ?></p>
                    </li>
                    <?php endforeach; ?>
                </ol>
            </section>
            <?php endif; ?>

            <section class="ba-block" id="route-map">
                <h2>Route map</h2>
                <p class="ba-muted">Driving route from <?php echo htmlspecialchars($single_blog['from_city']); ?> to <?php echo htmlspecialchars($single_blog['to_city']); ?> via <?php echo htmlspecialchars($single_blog['highway']); ?>.</p>
                <div class="ba-map">
                    <iframe title="<?php echo htmlspecialchars($route_label); ?> route map" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        src="https://maps.google.com/maps?saddr=<?php echo rawurlencode($single_blog['from_city'] . ', India'); ?>&daddr=<?php echo rawurlencode($single_blog['to_city'] . ', India'); ?>&output=embed"></iframe>
                </div>
            </section>

            <?php if (!empty($extra['stops'])): ?>
            <section class="ba-block" id="stops">
                <h2>Recommended stops on the way</h2>
                <div class="ba-stops">
                    <?php foreach ($extra['stops'] as $i => $stop): ?>
                    <div class="ba-stop">
                        <span class="ba-stop-n"><?php echo $i + 1; ?></span>
                        <div>
                            <h3><?php echo htmlspecialchars($stop['name']); ?></h3>
                            <p><?php echo htmlspecialchars($stop['note']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>
            <?php endif; ?>

            <?php if (!empty($extra['tips'])): ?>
            <section class="ba-block" id="tips">
                <h2>Practical travel tips</h2>
                <div class="ba-tips">
                    <?php foreach ($extra['tips'] as $tip): ?>
                    <p><i class="fas fa-lightbulb"></i><?php echo htmlspecialchars($tip); ?></p>
                    <?php endforeach; ?>
                </div>
            </section>
            <?php endif; ?>

            <?php if (!empty($extra['faqs'])): ?>
            <section class="ba-block" id="faqs">
                <h2><?php echo htmlspecialchars($route_label); ?>: FAQs</h2>
                <div class="ba-faqs">
                    <?php foreach ($extra['faqs'] as $i => $faq): ?>
                    <details<?php echo $i === 0 ? ' open' : ''; ?>>
                        <summary><?php echo htmlspecialchars($faq['q']); ?><i class="fas fa-plus"></i></summary>
                        <p><?php echo htmlspecialchars($faq['a']); ?></p>
                    </details>
                    <?php endforeach; ?>
                </div>
            </section>
            <?php endif; ?>

            <!-- Share + author -->
            <div class="ba-share">
                <span>Share this guide</span>
                <a href="https://wa.me/?text=<?php echo rawurlencode($share_text . ' ' . $article_url); ?>" target="_blank" rel="noopener" aria-label="Share on WhatsApp"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo rawurlencode($article_url); ?>" target="_blank" rel="noopener" aria-label="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://x.com/intent/post?text=<?php echo rawurlencode($share_text); ?>&url=<?php echo rawurlencode($article_url); ?>" target="_blank" rel="noopener" aria-label="Share on X"><i class="fab fa-x-twitter"></i></a>
                <button type="button" id="baCopy" aria-label="Copy link"><i class="fas fa-link"></i></button>
            </div>

            <div class="ba-author">
                <span class="ba-author-avatar ba-author-avatar-lg"><i class="fas fa-car-side"></i></span>
                <div>
                    <strong><?php echo htmlspecialchars($single_blog['author']); ?></strong>
                    <p>Our travel desk plans thousands of chauffeur-driven trips across North India every year. These guides are written from our drivers' first-hand experience of each route.</p>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <aside class="ba-side">
            <div class="ba-card ba-book">
                <span class="ba-card-kicker">Book this trip</span>
                <h3><?php echo htmlspecialchars($route_label); ?> by Innova Crysta</h3>
                <?php if ($article_fare): ?>
                <div class="ba-fare"><span>Round trip from</span><strong>₹<?php echo number_format($article_fare); ?></strong><small>7 Seater · 1 day · <a href="<?php echo $extra['route_page']; ?>">see all fares</a></small></div>
                <?php else: ?>
                <div class="ba-fare"><span>Starting from</span><strong>₹18/km</strong><small>7 Seater Innova Crysta · chauffeur included</small></div>
                <?php endif; ?>
                <a class="hp-btn hp-btn-block ba-wa" target="_blank" rel="noopener" href="https://wa.me/917290885949?text=<?php echo rawurlencode('Hi, I want to book an Innova Crysta for a ' . $route_label . ' trip.'); ?>"><i class="fab fa-whatsapp"></i> Get Quote on WhatsApp</a>
                <a class="hp-btn hp-btn-block ba-call" href="tel:+917290885949"><i class="fas fa-phone-alt"></i> +91 72908 85949</a>
                <ul class="ba-assure">
                    <li><i class="fas fa-check"></i> Verified, experienced chauffeur</li>
                    <li><i class="fas fa-check"></i> Clean, sanitised vehicle</li>
                    <li><i class="fas fa-check"></i> 24/7 trip support</li>
                </ul>
            </div>
            <nav class="ba-card ba-toc" aria-label="Table of contents">
                <span class="ba-card-kicker">In this guide</span>
                <ol id="baToc"></ol>
            </nav>
        </aside>
    </div>

    <!-- Related guides -->
    <?php if (!empty($related)): ?>
    <section class="ba-related">
        <div class="container">
            <div class="ba-related-head">
                <h2>More road trip guides</h2>
                <a href="blog.php" class="hp-link">View all guides <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="bl-grid">
                <?php foreach ($related as $r): ?>
                <a class="bl-card" href="blog.php?slug=<?php echo $r['slug']; ?>">
                    <div class="bl-card-img"><img src="<?php echo htmlspecialchars($r['image']); ?>" alt="<?php echo htmlspecialchars($r['route_title']); ?>" loading="lazy"><span><?php echo htmlspecialchars($r['category']); ?></span></div>
                    <div class="bl-card-body">
                        <div class="bl-card-route"><?php echo htmlspecialchars($r['from_city']); ?> <i class="fas fa-arrow-right"></i> <?php echo htmlspecialchars($r['to_city']); ?></div>
                        <h3><?php echo htmlspecialchars($r['route_title']); ?></h3>
                        <div class="bl-card-meta"><span><i class="fas fa-road"></i> <?php echo htmlspecialchars($r['distance']); ?></span><span><i class="far fa-clock"></i> <?php echo htmlspecialchars($r['read_time']); ?></span></div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
</article>

<script>
(function () {
    // Build the table of contents from the article's headings
    var toc = document.getElementById('baToc');
    var heads = document.querySelectorAll('#baBody h3, .ba-block > h2');
    heads.forEach(function (h, i) {
        if (!h.id) h.id = 'section-' + (i + 1);
        var li = document.createElement('li');
        var a = document.createElement('a');
        a.href = '#' + h.id;
        a.textContent = h.textContent.replace(/^\d+\.\s*/, '');
        li.appendChild(a);
        toc.appendChild(li);
    });
    if ('IntersectionObserver' in window) {
        var links = toc.querySelectorAll('a');
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) {
                    links.forEach(function (l) { l.classList.toggle('active', l.getAttribute('href') === '#' + e.target.id); });
                }
            });
        }, { rootMargin: '-20% 0px -70% 0px' });
        heads.forEach(function (h) { io.observe(h); });
    }
    var copy = document.getElementById('baCopy');
    if (copy) copy.addEventListener('click', function () {
        if (navigator.clipboard) navigator.clipboard.writeText(window.location.href);
        copy.innerHTML = '<i class="fas fa-check"></i>';
        setTimeout(function () { copy.innerHTML = '<i class="fas fa-link"></i>'; }, 1800);
    });
})();
</script>

<?php else: ?>
<!-- ============================================================
     MAIN BLOGS HUB & LISTINGS PAGE
     ============================================================ -->

<!-- 1. Hero Section -->
<section class="bl-hero">
    <div class="bl-hero-bg" style="background-image:url('images/blogs/delhi-to-manali.jpg');"></div>
    <div class="container bl-hero-inner">
        <span class="hp-kicker">The Innova Travel Journal</span>
        <h1>Road trip guides from people who drive these routes every day</h1>
        <p>Detailed city-to-city routes, driving times, toll advice, day-wise itineraries and chauffeur tips for memorable road trips across India in our Toyota Innova Crysta fleet.</p>
        <div class="blog-search-bar bl-search">
            <i class="fas fa-search"></i>
            <input type="text" id="blogSearch" class="blog-search-input" placeholder="Search a city: Jaipur, Manali, Agra, Mysore…" onkeyup="filterBlogs()">
        </div>
        <div class="bl-hero-stats">
            <span><strong><?php echo count($blogs); ?></strong> route guides</span>
            <span><strong>5</strong> travel themes</span>
            <span><strong>Updated</strong> <?php echo htmlspecialchars($blogs[0]['date']); ?></span>
        </div>
    </div>
</section>

<!-- 2. Sticky Category Bar -->
<div class="blog-categories-wrapper">
    <div class="container">
        <div class="blog-categories">
            <button class="category-pill active" onclick="setCategoryFilter('all', this)"><i class="fas fa-th-large"></i> All Routes (<?php echo count($blogs); ?>)</button>
            <button class="category-pill" onclick="setCategoryFilter('heritage', this)"><i class="fas fa-landmark"></i> Golden Triangle & Heritage</button>
            <button class="category-pill" onclick="setCategoryFilter('mountains', this)"><i class="fas fa-mountain"></i> Hill Stations & Mountains</button>
            <button class="category-pill" onclick="setCategoryFilter('spiritual', this)"><i class="fas fa-om"></i> Spiritual & Pilgrimages</button>
            <button class="category-pill" onclick="setCategoryFilter('expressway', this)"><i class="fas fa-road"></i> Expressways & Coast</button>
            <button class="category-pill" onclick="setCategoryFilter('wildlife', this)"><i class="fas fa-paw"></i> Wildlife & Nature</button>
        </div>
    </div>
</div>

<!-- 3. Featured Route Spotlight -->
<section class="featured-blog-section">
    <div class="container">
        <div class="featured-card">
            <div class="featured-img-wrap">
                <img src="<?php echo htmlspecialchars($blogs[0]['image']); ?>?v=<?php echo @filemtime($blogs[0]['image']) ?: '1'; ?>" alt="<?php echo htmlspecialchars($blogs[0]['route_title']); ?>">
                <div class="featured-badge"><i class="fas fa-star"></i> Featured Road Trip</div>
            </div>
            <div class="featured-body">
                <div class="route-badge"><i class="fas fa-route"></i> <?php echo htmlspecialchars($blogs[0]['from_city']); ?> ➔ <?php echo htmlspecialchars($blogs[0]['to_city']); ?></div>
                <h2 class="featured-title">
                    <a href="blog.php?slug=<?php echo $blogs[0]['slug']; ?>"><?php echo htmlspecialchars($blogs[0]['route_title']); ?></a>
                </h2>
                <p class="featured-desc"><?php echo htmlspecialchars($blogs[0]['short_desc']); ?></p>
                <div class="featured-meta">
                    <span><i class="fas fa-road"></i> <?php echo $blogs[0]['distance']; ?></span>
                    <span><i class="far fa-clock"></i> <?php echo $blogs[0]['duration']; ?></span>
                    <span><i class="fas fa-tachometer-alt"></i> <?php echo $blogs[0]['highway']; ?></span>
                </div>
                <div style="display:flex; gap:15px; flex-wrap:wrap;">
                    <a href="blog.php?slug=<?php echo $blogs[0]['slug']; ?>" class="btn btn-primary" style="padding:10px 24px;">Read Full Guide <i class="fas fa-arrow-right" style="margin-left:6px;"></i></a>
                    <a href="https://wa.me/917290885949?text=<?php echo rawurlencode("Hi, I want to book Delhi to Agra Innova Crysta."); ?>" target="_blank" class="book-route-btn" style="padding:10px 20px; font-size:0.95rem;">
                        <i class="fab fa-whatsapp"></i> Book Delhi ➔ Agra
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Main Blogs Grid -->
<section class="blogs-main-section">
    <div class="container">
        <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; margin-bottom:15px;">
            <div>
                <h2 style="font-size:2rem; font-weight:700; color:#0f172a; margin-bottom:5px;">City-to-City Road Trip Guides</h2>
                <p style="color:#64748b;">Browse in-depth route guides, itineraries, and expert road trip advice</p>
            </div>
            <div id="routeCountBadge" style="font-size:0.9rem; font-weight:600; color:#00b09b; background:#e6fffa; padding:6px 16px; border-radius:50px;">
                Showing <?php echo count($blogs); ?> Road Trips
            </div>
        </div>

        <div class="blog-grid bl-grid" id="blogGrid">
            <?php foreach ($blogs as $index => $blog): ?>
            <article class="blog-card bl-card" data-category="<?php echo htmlspecialchars($blog['category_slug']); ?>" data-search="<?php echo htmlspecialchars(strtolower($blog['from_city'] . ' ' . $blog['to_city'] . ' ' . $blog['route_title'] . ' ' . $blog['category'])); ?>">
                <a class="bl-card-img" href="blog.php?slug=<?php echo $blog['slug']; ?>">
                    <img src="<?php echo htmlspecialchars($blog['image']); ?>?v=<?php echo @filemtime($blog['image']) ?: '1'; ?>" alt="<?php echo htmlspecialchars($blog['route_title']); ?>" loading="lazy">
                    <span><?php echo htmlspecialchars($blog['category']); ?></span>
                </a>
                <div class="bl-card-body">
                    <div class="bl-card-route"><?php echo htmlspecialchars($blog['from_city']); ?> <i class="fas fa-arrow-right"></i> <?php echo htmlspecialchars($blog['to_city']); ?></div>
                    <h3><a href="blog.php?slug=<?php echo $blog['slug']; ?>"><?php echo htmlspecialchars($blog['route_title']); ?></a></h3>
                    <p><?php echo htmlspecialchars($blog['short_desc']); ?></p>
                    <div class="bl-card-meta">
                        <span><i class="fas fa-road"></i> <?php echo htmlspecialchars($blog['distance']); ?></span>
                        <span><i class="far fa-clock"></i> <?php echo htmlspecialchars($blog['duration']); ?></span>
                        <span><i class="far fa-file-lines"></i> <?php echo htmlspecialchars($blog['read_time']); ?></span>
                    </div>
                    <div class="bl-card-foot">
                        <a href="blog.php?slug=<?php echo $blog['slug']; ?>" class="hp-link">Read guide <i class="fas fa-arrow-right"></i></a>
                        <a href="https://wa.me/917290885949?text=<?php echo rawurlencode("Hi, I want to book an Innova Crysta for " . $blog['from_city'] . " to " . $blog['to_city'] . " road trip."); ?>" target="_blank" rel="noopener" class="bl-book"><i class="fab fa-whatsapp"></i> Book cab</a>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>

        <div id="noResults" style="display:none; text-align:center; padding:60px 20px; background:white; border-radius:20px; margin-top:30px; border:1px solid #e2e8f0;">
            <i class="fas fa-search" style="font-size:3rem; color:#cbd5e1; margin-bottom:15px;"></i>
            <h3 style="color:#1e293b; margin-bottom:8px;">No matching road trip guides found</h3>
            <p style="color:#64748b; margin-bottom:20px;">Try searching for a different city or reset the category filters.</p>
            <button class="btn btn-primary" onclick="resetFilters()">Reset All Filters</button>
        </div>
    </div>
</section>

<!-- 5. Interactive Route & Fare Estimator Widget -->
<section class="container">
    <div class="calc-section">
        <div class="calc-grid">
            <div class="calc-form-wrap">
                <div class="route-badge"><i class="fas fa-calculator"></i> Quick Intercity Planner</div>
                <h3>City-to-City Distance & Fare Estimator</h3>
                <p>Select your origin and destination city to estimate journey distance, driving duration, and transparent Innova Crysta rental charges.</p>
                
                <div class="calc-inputs">
                    <div class="calc-input-group">
                        <label><i class="fas fa-circle" style="color:#00b09b; font-size:0.7rem; margin-right:4px;"></i> Origin City</label>
                        <select id="calcOrigin" onchange="calculateRoute()">
                            <option value="Delhi">Delhi NCR</option>
                            <option value="Jaipur">Jaipur</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Bangalore">Bangalore</option>
                            <option value="Chandigarh">Chandigarh</option>
                        </select>
                    </div>
                    <div class="calc-input-group">
                        <label><i class="fas fa-map-marker-alt" style="color:#fbbf24; margin-right:4px;"></i> Destination City</label>
                        <select id="calcDest" onchange="calculateRoute()">
                            <option value="Agra">Agra (233 km)</option>
                            <option value="Jaipur">Jaipur (280 km)</option>
                            <option value="Manali">Manali (535 km)</option>
                            <option value="Rishikesh">Rishikesh (245 km)</option>
                            <option value="Shimla">Shimla (345 km)</option>
                            <option value="Amritsar">Amritsar (450 km)</option>
                            <option value="Jim Corbett">Jim Corbett (245 km)</option>
                            <option value="Varanasi">Varanasi (820 km)</option>
                            <option value="Chandigarh">Chandigarh (245 km)</option>
                            <option value="Pune">Pune (150 km)</option>
                            <option value="Mysore">Mysore (145 km)</option>
                            <option value="Udaipur">Udaipur (395 km)</option>
                        </select>
                    </div>
                    <div class="calc-input-group">
                        <label><i class="fas fa-car" style="color:#00b09b; margin-right:4px;"></i> Preferred Fleet</label>
                        <select id="calcCar" onchange="calculateRoute()">
                            <option value="crysta7">Innova Crysta (7-Seater Luxury)</option>
                            <option value="crysta6">Innova Crysta (6-Seater Captain Seats)</option>
                            <option value="hycross">Innova Hycross Hybrid</option>
                        </select>
                    </div>
                    <div class="calc-input-group">
                        <label><i class="fas fa-exchange-alt" style="color:#00b09b; margin-right:4px;"></i> Trip Type</label>
                        <select id="calcTrip" onchange="calculateRoute()">
                            <option value="round">Round Trip (Best Value)</option>
                            <option value="oneway">One-Way Drop</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="calc-result-box">
                <h4><i class="fas fa-check-circle"></i> Estimated Trip Details</h4>
                <div class="calc-stat-row">
                    <span>Selected Route</span>
                    <span id="resRoute">Delhi ➔ Agra</span>
                </div>
                <div class="calc-stat-row">
                    <span>Estimated Distance</span>
                    <span id="resDist">233 km</span>
                </div>
                <div class="calc-stat-row">
                    <span>Driving Duration</span>
                    <span id="resTime">~3.5 Hours</span>
                </div>
                <div class="calc-stat-row">
                    <span>Vehicle Model</span>
                    <span id="resCar">Toyota Innova Crysta</span>
                </div>
                <div class="calc-stat-row" style="border-bottom:none; padding-top:15px;">
                    <span style="font-size:1.1rem; color:white; font-weight:700;">Starting Fare</span>
                    <span id="resFare" style="font-size:1.3rem; color:#34d399; font-weight:800;">₹18 / km</span>
                </div>

                <a id="resWhatsAppBtn" href="https://wa.me/917290885949?text=Hi%2C%20I%20want%20to%20book%20Innova%20Crysta%20for%20Delhi%20to%20Agra" target="_blank" class="calc-cta-btn">
                    <i class="fab fa-whatsapp" style="margin-right:8px;"></i> Instant WhatsApp Booking
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 6. Expert Road Trip Tips Section -->
<section style="padding:40px 0 60px; background:#f8fafc;">
    <div class="container">
        <div style="text-align:center; max-width:700px; margin:0 auto 20px;">
            <div class="route-badge"><i class="fas fa-shield-alt"></i> Highway Travel Essentials</div>
            <h2 class="section-title visible">Road Trip Best Practices & Safety Tips</h2>
            <p style="color:#64748b; margin-top:10px;">Make your interstate family journey safe, relaxed, and memorable with these crucial chauffeur insights.</p>
        </div>

        <div class="tips-grid">
            <div class="tip-card">
                <div class="tip-icon"><i class="fas fa-sun"></i></div>
                <h4>Early Morning Departure</h4>
                <p>Leaving between 5:00 AM and 6:30 AM avoids peak city exit bottlenecks in Delhi NCR and ensures reaching hill or heritage destinations before afternoon heat.</p>
            </div>
            <div class="tip-card">
                <div class="tip-icon"><i class="fas fa-couch"></i></div>
                <h4>Captain Seat Comfort</h4>
                <p>For journeys exceeding 300 km (e.g. Manali, Amritsar, Varanasi), choose our 6-seater Crysta with ergonomic middle-row captain recliners and individual AC vents.</p>
            </div>
            <div class="tip-card">
                <div class="tip-icon"><i class="fas fa-tags"></i></div>
                <h4>Active FASTag & Tolls</h4>
                <p>All our Innova Crysta rental vehicles are equipped with verified high-balance commercial FASTags for zero-waiting toll crossings across all national expressways.</p>
            </div>
            <div class="tip-card">
                <div class="tip-icon"><i class="fas fa-mountain"></i></div>
                <h4>Mountain Driving Experience</h4>
                <p>Driving on hairpin bends in Himachal and Uttarakhand requires skilled gear management and engine braking. Our chauffeurs possess 10+ years of Himalayan terrain experience.</p>
            </div>
            <div class="tip-card">
                <div class="tip-icon"><i class="fas fa-suitcase"></i></div>
                <h4>Spacious Luggage Storage</h4>
                <p>The flexible foldable 3rd-row seating in the Innova Crysta allows accommodating 4 large trolley bags plus multiple backpacks with room to spare.</p>
            </div>
            <div class="tip-card">
                <div class="tip-icon"><i class="fas fa-coffee"></i></div>
                <h4>Scheduled Rest Plazas</h4>
                <p>Plan refreshing 20-minute rest stops every 2.5 to 3 hours at verified highway food malls for clean washrooms, hygienic meals, and driver alertness.</p>
            </div>
        </div>
    </div>
</section>

<!-- 7. Road Trip FAQ Section -->
<section style="padding:60px 0 70px; background:white;">
    <div class="container">
        <div style="text-align:center; max-width:700px; margin:0 auto 30px;">
            <div class="route-badge"><i class="fas fa-question-circle"></i> Got Questions?</div>
            <h2 class="section-title visible">Frequently Asked Questions</h2>
            <p style="color:#64748b;">Everything you need to know about booking intercity outstation cabs</p>
        </div>

        <div class="faq-wrap">
            <div class="faq-item active">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>What is included in the intercity outstation Innova Crysta fare?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Our transparent outstation pricing includes vehicle rental with fuel and professional commercial chauffeur service. Toll taxes, state border entry permits, and parking charges can either be paid on actuals or packaged into an all-inclusive custom tour quotation.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>How many passengers and luggage bags fit comfortably in an Innova Crysta?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Our 7-seater Crysta comfortably seats 6 passengers plus 1 driver, accommodating 3-4 large suitcases in the boot. For 4-5 passengers travelling with extensive luggage, the foldable third row provides cavernous cargo volume ideal for week-long holiday expeditions.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>Can I book a one-way outstation cab or multi-city tour package?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Yes! We provide both one-way drop services (e.g. Delhi to Agra, Delhi to Jaipur, Delhi to Chandigarh) as well as customized multi-city round trip itineraries (e.g. Delhi - Agra - Jaipur Golden Triangle, or Delhi - Haridwar - Rishikesh - Dehradun circuits).
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>Are your drivers experienced for night driving and hilly routes?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Absolutely. All our chauffeurs are police-verified, background-checked, and have extensive experience navigating long expressways at night as well as navigating steep Himalayan inclines in Himachal, Uttarakhand, and Kashmir.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>How do I confirm my booking and what are the payment methods?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Booking is instantaneous. You can send us a message on WhatsApp or call <strong>+91 7290885949</strong>. We accept UPI, Net Banking, Credit/Debit Cards, and cash payments with immediate digital invoice confirmation.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 8. Bottom CTA Banner -->
<section style="background: linear-gradient(135deg, #00b09b, #96c93d); padding: 50px 0; color: white; text-align: center;">
    <div class="container">
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 12px;">Ready for Your Next Interstate Road Adventure?</h2>
        <p style="font-size: 1.15rem; max-width: 650px; margin: 0 auto 30px; opacity: 0.95;">Get a personalized city-to-city itinerary quote with best route recommendations within 5 minutes.</p>
        <div style="display:flex; justify-content:center; gap:20px; flex-wrap:wrap;">
            <a href="https://wa.me/917290885949?text=Hi%2C%20I%20need%20a%20quote%20for%20an%20intercity%20Innova%20Crysta%20road%20trip." target="_blank" class="btn" style="background:white; color:#00b09b; font-weight:700;">
                <i class="fab fa-whatsapp" style="margin-right:8px; color:#25d366;"></i> WhatsApp Trip Planner
            </a>
            <a href="tel:+917290885949" class="btn" style="background:#0f172a; color:white; font-weight:600;">
                <i class="fas fa-phone-alt" style="margin-right:8px; color:#fbbf24;"></i> Call +91 7290885949
            </a>
        </div>
    </div>
</section>

<script>
// Live Search & Category Filtering
let currentCategory = 'all';

function filterBlogs() {
    const searchVal = document.getElementById('blogSearch').value.toLowerCase().trim();
    const cards = document.querySelectorAll('.blog-card');
    let visibleCount = 0;

    cards.forEach(card => {
        const cardCat = card.getAttribute('data-category');
        const cardText = card.getAttribute('data-search');

        const matchesCat = (currentCategory === 'all' || cardCat === currentCategory);
        const matchesSearch = (!searchVal || cardText.includes(searchVal));

        if (matchesCat && matchesSearch) {
            card.style.display = 'flex';
            visibleCount++;
        } else {
            card.style.display = 'none';
        }
    });

    const noRes = document.getElementById('noResults');
    const badge = document.getElementById('routeCountBadge');
    
    if (visibleCount === 0) {
        noRes.style.display = 'block';
        badge.innerText = '0 Road Trips Found';
    } else {
        noRes.style.display = 'none';
        badge.innerText = `Showing ${visibleCount} Road Trips`;
    }
}

function setCategoryFilter(category, el) {
    currentCategory = category;
    document.querySelectorAll('.category-pill').forEach(btn => btn.classList.remove('active'));
    if (el) el.classList.add('active');
    filterBlogs();
}

function resetFilters() {
    document.getElementById('blogSearch').value = '';
    currentCategory = 'all';
    document.querySelectorAll('.category-pill').forEach((btn, idx) => {
        if (idx === 0) btn.classList.add('active');
        else btn.classList.remove('active');
    });
    filterBlogs();
}

// Route & Fare Calculator
const routeData = {
    'Agra': { dist: 233, time: '3.5 Hours' },
    'Jaipur': { dist: 280, time: '4.0 Hours' },
    'Manali': { dist: 535, time: '11.0 Hours' },
    'Rishikesh': { dist: 245, time: '4.5 Hours' },
    'Shimla': { dist: 345, time: '6.5 Hours' },
    'Amritsar': { dist: 450, time: '7.5 Hours' },
    'Jim Corbett': { dist: 245, time: '5.0 Hours' },
    'Varanasi': { dist: 820, time: '11.5 Hours' },
    'Chandigarh': { dist: 245, time: '3.5 Hours' },
    'Pune': { dist: 150, time: '2.5 Hours' },
    'Mysore': { dist: 145, time: '1.8 Hours' },
    'Udaipur': { dist: 395, time: '6.5 Hours' }
};

function calculateRoute() {
    const origin = document.getElementById('calcOrigin').value;
    const dest = document.getElementById('calcDest').value;
    const car = document.getElementById('calcCar').value;
    const trip = document.getElementById('calcTrip').value;

    const data = routeData[dest] || { dist: 250, time: '4.0 Hours' };
    
    let ratePerKm = 18;
    let carName = 'Toyota Innova Crysta (7-Seater)';
    if (car === 'crysta6') {
        ratePerKm = 20;
        carName = 'Innova Crysta (8-Seater)';
    } else if (car === 'hycross') {
        ratePerKm = 25;
        carName = 'Innova HyCross Hybrid';
    }

    document.getElementById('resRoute').innerText = `${origin} ➔ ${dest}`;
    document.getElementById('resDist').innerText = `${data.dist} km (${trip === 'round' ? 'Round Trip' : 'One Way'})`;
    document.getElementById('resTime').innerText = `~${data.time}`;
    document.getElementById('resCar').innerText = carName;
    document.getElementById('resFare').innerText = `₹${ratePerKm} / km`;

    const msg = `Hi, I want to book ${carName} for ${origin} to ${dest} (${trip === 'round' ? 'Round Trip' : 'One Way'}, ${data.dist} km). Please share the quote.`;
    document.getElementById('resWhatsAppBtn').href = `https://wa.me/917290885949?text=${encodeURIComponent(msg)}`;
}

// FAQ Accordion
function toggleFaq(el) {
    const item = el.parentElement;
    const isActive = item.classList.contains('active');
    
    document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('active'));
    
    if (!isActive) {
        item.classList.add('active');
    }
}
</script>

<?php endif; ?>

<?php include 'footer.php'; ?>
