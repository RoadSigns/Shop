
-- --------------------------------------------------------

--
-- Table structure for table `SHOP_users`
--

CREATE TABLE IF NOT EXISTS `SHOP_users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(25) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `permissions` int(3) NOT NULL,
  `reigsteredDate` date NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `SHOP_users`
--

INSERT INTO `SHOP_users` (`id`, `username`, `passwd`, `email`, `firstname`, `surname`, `permissions`, `reigsteredDate`) VALUES
(1, 'admin', '$1$VU5GI/Z2$o8V1iPbpV5PNSzhq7izW50', 'admin@zacklott.co.uk', 'Admin', 'Smith', 1, '2017-04-01'),
(2, 'zack', '$1$vBEeRE1S$MxCVoBbDJars8e2FBoU0M1', 'zack@zacklott.co.uk', 'Zack', 'Lott', 1, '2017-05-04'),
(5, 'Cheese', '$1$5omRRFK1$0RYkUerLd9bVxS0I3ZR0x1', 'Cheese@cheese.com', 'Cheeseh', 'Cheese', 0, '2017-07-09'),
(4, 'Bob', '$1$SDCjzcz1$EOhwF1quz7PqyuFr9WhmP.', 'Bob@bob.com', 'Bobddd', 'Bob', 0, '0000-00-00');



-- --------------------------------------------------------

--
-- Table structure for table `SHOP_products`
--

CREATE TABLE IF NOT EXISTS `SHOP_products` (
  `id` int(11) NOT NULL auto_increment,
  `brand` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `SHOP_products`
--

INSERT INTO `SHOP_products` (`id`, `brand`, `name`, `price`, `stock`, `category`, `description`) VALUES
(1, 1, 'Bose QC35', 320, 10, 1, 'Bluetooth Wireless Headset'),
(21, 3, 'Sony PlayStation 4 500GB', 280, 87, 3, 'PlayStation 4 redefines rich and immersive gameplay with powerful graphics and speed, intelligent personalisation, deeply integrated social capabilities, and innovative second-screen features\r\nEngage in endless personal challenges between you and your community, and share your epic moments for the world to see\r\nPS4 enables the greatest game developers in the world to unlock their creativity and push the boundaries of play through a platform that is tuned specifically to their needs'),
(16, 4, 'Canon EOS 750D', 500, 12, 5, 'Effortlessly take your pictures to the next level with the latest DSLR technology and Scene Intelligent Auto mode\r\nAchieve stunning shots in any situation thanks to the 24.2 Megapixel APS-C sensor and DIGIC 6 processor\r\nEasily shoot cinematic Full HD movies with Hybrid CMOS AF III to track movement and focus smoothly between subjects\r\nShare your results online or transfer images to your smart device or Canon Connect Station instantly using NFC and Wi-Fi\r\nExplore your creativity in photos and movies using a full suite of shooting modes and creative effects.'),
(17, 4, 'Canon EOS 700D', 430, 10, 5, 'Create detailed, low-noise 18 megapixel images that can be printed at high resolution and cropped without losing quality\r\nCapture Full-HD movies with creative control and Hybrid CMOS AF that focuses continuously as you shoot\r\nExplore new shooting angles and control the camera with a 7.7cm Vari-angle Clear View LCD II Touch screen\r\nGet shooting quickly and easily with Scene Intelligent Auto, and expand your horizons with Creative shooting modes\r\nShoot low-noise images in poor light using ISO 100-12800 sensitivity (extends to ISO 25600)'),
(18, 4, 'Canon EOS 1300D', 350, 0, 5, '18 MP APS-C CMOS sensor and DIGIC 4+\r\n9-point AF with one center cross-type AF point\r\nStandard ISO: 100 to 6400, expandable to 12800\r\nWi-Fi and NFC supported\r\nLens Mount: Canon EF mount'),
(19, 7, 'Apple iPod Earphone', 15, 234, 1, 'These are Genuine Apple Earphones come in Crystal hard plastic case only\r\nMic Volume Remote Control\r\n3.5mm Jack\r\nNo Retail packaging comes in Crystal Hard Case Only'),
(20, 3, 'Sony MDR-1000X', 320, 24, 1, 'Noise cancelling with reduced ambient noise for perfect silence\r\nComfortable around ear fitting with 20 hour battery life\r\nSmart technologies: Ambient sound mode, Touch Sensor operation, Quick Attention mode\r\nFirst ever DSEE HX headphones upscaling your existing music to near high-resolution audio quality\r\nCarrying case included'),
(22, 2, 'Nintendo Switch - Neon Red/Neon Blue', 300, 0, 3, 'Switch and play: Anytime, anywhere, with anyone\r\nThree play modes: TV mode, tabletop mode and handheld mode\r\nShare the fun with Joy-Con - attach the two Joy-Con to the Joy-Con grip, it will work like a traditional controller and without the grip they work as two individual, fully-functioning controllers\r\nLocal and online multiplayer: Link up to eight consoles for multiplayer; online play with friends far away and players around the world'),
(23, 5, 'Microsoft Xbox One 500GB', 230, 126, 3, 'This item includes the Xbox One console, one wireless controller, HDMI cable and power supply\r\nAn enhanced multiplayer games and unique entertainment experiences\r\nPlay games like Titanfall and Halo on a network powered by over 300,000 servers for maximum performance\r\nAn enhanced multiplayer on Xbox Live with Smart Match to find new challengers\r\nNote: Kinect sensor sold separately'),
(24, 7, 'Apple MacBook Air 13-inch Laptop', 1200, 34, 2, 'Processor: 1.6GHz dual-core Intel Core i5 (Broadwell), Turbo Boost up to 2.7GHz\r\nMemory: 8GB 1866MHz LPDDR3\r\nStorage: 256GB flash\r\nDisplay: 13.3-inch (diagonal), 1440-by-900-pixel LED-backlit glossy display\r\nOS Sierra'),
(25, 7, 'Apple MacBook 12-inch Laptop', 999, 65, 2, 'Processor: 1.1 GHz dual-core Intel Core M3, with Turbo Boost up to 2.2 GHz\r\nMemory: 8GB 1866MHz LPDDR3\r\nStorage: 256GB flash\r\nDisplay: 12-inch (diagonal), 1366-by-768-pixel LED-backlit glossy display. Stunning 12-inch Retina display. With over 3 million pixels and a 2304-by-1440 resolution, you can experience vivid images with astounding clarity. Edge-to-edge glass display with IPS technology and a 178 viewing angle.\r\nOS Sierra'),
(26, 7, 'Apple MacBook Pro 13-inch Laptop', 1375, 93, 2, 'Processor: 2.0GHz dual-core 6th generation Intel Core i5 with 64MB eDRAM (Turbo Boost up to 3.1GHz)\r\nInternal Memory: 8GB 1866MHz LPDDR3\r\nStorage: 256GB SSD\r\nDisplay: 13.3-inch (diagonal), 2560-by-1600-pixel LED-backlit Retina display, 500 nits, wide colour (P3)\r\nOperating System: Apple OS X 10.12 Sierra'),
(27, 5, 'Microsoft Surface Book 13.5 inch Touchscreen Laptop ', 2100, 10, 2, '13.5 inch PixelSense touchscreen display\r\n6th Gen Intel Core i7\r\nSurface pen and keyboard included\r\nWindows 10 Pro operating system'),
(28, 1, 'Bose SoundLink Mini Bluetooth Speaker II', 150, 40, 4, 'Bold sound in a small, water-resistant speaker\r\nRugged, with a soft-touch silicone exterior that makes it easy to pick up and go\r\nVoice prompts talk you through Bluetooth pairing so it''s easier than ever-or even quick-pair with NFC devices\r\nRechargeable battery provides up to 10 hours of playback time,\r\nBuilt-in mic for speakerphone or accessing digital assistants like Siri or Google Now\r\nPower rating: 100-240 V'),
(38, 2, 'Nintendo Entertainment System Mini', 50, 0, 3, 'Mini NES'),
(39, 3, 'Sony Alpha a7S II', 2500, 35, 5, 'The Sony Î±7S II is a 12.2 megapixel, full-frame mirrorless camera offering ultra-high sensitivity up to an incredible ISO 409600 for both stills and video. The upgrade to the Sony Î±7S, the Î±7S II features a new 5-axis image stabilisation system to give greater control when shooting in the most challenging light conditions. The autofocus system on the Î±7S II has been upgraded and now offers 169 AF points for fast, precise focusing with low-light sensitivity to -4 EV. When shooting video, the AF performance is twice as fast as the Sony Î±7s. The Î±7S II has been designed to make it more user friendly, reliable and intuitive.'),
(40, 9, 'SAMSUNG R1 360Â°', 150, 45, 4, 'Compatible with Samsung Smart Sound music system\r\nWireless Hi-Fi sound anywhere in your home\r\nWiFi & Bluetooth\r\nControl via the Samsung Remote App on iOS and Android');


-- --------------------------------------------------------

--
-- Table structure for table `SHOP_category`
--

CREATE TABLE IF NOT EXISTS `SHOP_category` (
  `id` int(11) NOT NULL auto_increment,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `SHOP_category`
--

INSERT INTO `SHOP_category` (`id`, `category`) VALUES
(1, 'Headphones'),
(2, 'Laptops'),
(3, 'Consoles'),
(4, 'Speakers'),
(5, 'Cameras');



-- --------------------------------------------------------

--
-- Table structure for table `SHOP_brands`
--

CREATE TABLE IF NOT EXISTS `SHOP_brands` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `SHOP_brands`
--

INSERT INTO `SHOP_brands` (`id`, `name`) VALUES
(1, 'Bose'),
(2, 'Nintendo'),
(3, 'Sony'),
(4, 'Canon'),
(5, 'Microsoft'),
(9, 'Samsung'),
(7, 'Apple');
