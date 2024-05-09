-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 12:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techgear_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pname` varchar(250) NOT NULL,
  `pdescription` text NOT NULL,
  `pprice` float NOT NULL,
  `pimage` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `pdescription`, `pprice`, `pimage`, `category`) VALUES
(1, 'iPhone 15 Pro Max 5G 6.7\'\' 256GB Black Titanium Triple Camera 48MP | 5x Optical | LiDAR', 'iPhone 15 Pro Max. Κατασκευασμένο από τιτάνιο διαθέτει τον επαναστατικό επεξεργαστή A17 Pro, προσαρμόσιμο κουμπί Δράσης και το πιο ευέλικτο σύστημα κάμερας Pro.', 1378, 'iphone15promax.jpg', 'smartphones'),
(2, 'Samsung Galaxy A54 6.4\'\' 5G 128GB/8GB Graphite | Triple Camera 50MP | 120Hz', 'Tο Galaxy A54 5G διαθέτει premium γυάλινο φινίρισμα, καταπληκτική οθόνη και φοβερή καταγραφή βίντεο με νυχτερινή απεικόνιση!\r\n*Στην συσκευασία δεν περιλαμβάνεται φορτιστής και handsfree. Επίλεξε φορτιστή εδώ και handsfree εδώ', 329, 'sgalaxya54.jpg', 'smartphones'),
(3, 'Samsung Galaxy S24 Ultra 5G 6.8\'\' 512GB/12GB Titanium Gray μαζί με πενάκι | 200Mp Quad Camera | 5x', 'To Galaxy S24 Ultra είναι επικό. Έτσι απλά.\r\n\r\nΚατασκευαστής : SAMSUNG\r\nΈτος Κυκλοφορίας : 2024\r\nΔίκτυα : 5G\r\nΊντσες Οθόνης : 6.8\'\'\r\nΑριθμός Καμερών ( Πίσω ) : Quad\r\nΑνάλυση Κύριας Κάμερας ( πίσω ) : 200Mp', 1288, 'sgalaxys24.jpg', 'smartphones'),
(4, 'Smartphone Xiaomi Redmi Note 13 Pro 6.67\'\' 256GB/8GB Green | 200 Mp Triple Camera | AMOLED 120Hz', 'Το Redmi note 13 pro ξεχωρίζει για τον εκλεπτυσμένο σχεδιασμό, το λεπτό κάτω bezel 2,25 χιλιοστών και τον ποιοτικό σχεδιασμό κάμερας χωρίς deco.\r\n*Στη συσκευασία συμπεριλαμβάνεται φορτιστής, καλώδιο USB Type-C και προστατευτική θήκη.\r\n', 298, 'xiaomiRM13P.jpg', 'smartphones'),
(5, 'Smartphone Xiaomi 14 5G 6.36\'\' 512GB/12GB Black | OLED 120Hz HDR10+| 50Mp LeicaTriple Camera', 'Ανακάλυψε το Xiaomi 14 και ζήσε μια νέα εμπειρία!\r\n', 1098, 'xiaomi14.jpg', 'smartphones'),
(6, 'Apple Watch Series 9 GPS 41mm Starlight με Starlight Sport Band (S/M)', 'Πιο έξυπνο. Πιο φωτεινό. Πιο δυνατό.\r\n', 398, 'appleseries9.jpg', 'gadgets'),
(7, 'Apple Watch Ultra 2 49mm Titanium Case με Green/Greay Trail Loop M\\L', 'Το πιο ανθεκτικό και ικανό Apple Watch. Σχεδιασμένο για περιπέτεια και απαιτητικές προπονήσεις, με ένα ελαφρύ περίβλημα τιτανίου, εξαιρετικά μεγάλη διάρκεια μπαταρίας και την πιο φωτεινή οθόνη που είδαμε ποτέ. Διαθέτει τη λειτουργία double tap, έναν μαγικό τρόπο αλληλεπίδρασης με το Apple Watch, και τη λειτουργία Precision Finding για να σε καθοδηγήσει στο iPhone σου.', 899, 'appleultra2.jpg', 'gadgets'),
(8, 'Huawei Watch GT 4 41mm με Gold Milanese Strap', 'Κομψότητα στον καρπό σου. Μία εντυπωσιακή εμφάνιση ημέρα και νύχτα.\r\n', 278, 'huawei4.jpg', 'gadgets'),
(9, 'Huawei Watch GT 3 Active', 'Αδιάβροχο, με νέες δυνατότητες, οθόνη AMOLED, εξαιρετικά λεπτό προφίλ, 3D σχεδιασμό γυαλιού και προηγμένες τεχνολογίες TruSeen™ 5.0+ για ακριβής μέτρηση ζωτικών σημείων!\r\n', 169, 'huawei3.jpg', 'gadgets'),
(10, 'Samsung Galaxy Fit 3 (Silver)', 'Διαρκεί έως και 13 ημέρες με μία μόνο φόρτιση. Κάθεται ελαφρά στον καρπό σου, παρακολουθώντας πάνω από 100 προπονήσεις και καθημερινές δραστηριότητες, συμπεριλαμβανομένου του ύπνου. Σου επιτρέπει να αναπαράγεις μουσική, να ελέγχεις κλήσεις και να στέλνεις μηνύματα απευθείας από τον καρπό σου — παράμεινε δυνατός, συνδεδεμένος και αβίαστα σε καλό δρόμο με το Galaxy Fit 3.\r\n', 68, 'samsungfit3.jpg', 'gadgets'),
(11, 'Marshall Emberton II Black & Brass', 'Το δημοφιλές εξωτερικό ηχείο Marshall έρχεται τώρα με 10 περισσότερες ώρες αναπαραγωγής από τον προκάτοχό του, ώστε να μπορείς να απολαύσεις 30+ ώρες ακρόασης. Αυτή η νέα γενιά διαθέτει Stack Mode, ώστε να μπορείς να ενισχύσεις τη συνεδρία σου συνδέοντας με άλλα ηχεία Emberton II.\r\n', 129, 'marshall.jpg', 'sound'),
(12, 'Ηχεία Logitech Z200 Stereo Midnight Black', 'Απολαύστε μία ανώτερη εμπειρία ακρόασης για τη μουσική ή τις ταινίες σας χάρη στο πλούσιο στερεοφωνικό ήχο και τα ρυθμιζόμενα δυνατά μπάσα. Τα απλά στοιχεία ελέγχου σάς επιτρέπουν να έχετε πρόσβαση σε όλες τις λειτουργίες από το δεξιό ηχείο.\r\n', 44, 'logitecz200.jpg', 'sound'),
(13, 'Apple Airpods (3rd Generation) with MagSafe Charging Case', 'Τα νέα AirPods διαθέτουν χωρικό ήχο ώστε να νιώθετε ότι ο ήχος σας περιβάλλει.\r\n\r\n*Δωρεάν συνδρομή Apple Music 6 μήνες\r\n', 188, 'airpods3.jpg', 'sound'),
(14, 'True Wireless Ακουστικά Xiaomi Redmi Buds 4 Active (Black)', 'Τα Redmi Buds 4 Active απευθύνονται σε χρήστες που αναζητούν ασύρματα ακουστικά με αξιόπιστη απόδοση ήχου, ανθεκτικότητα και αθλητικό σχεδιασμό. Αυτά τα ακουστικά True Wireless Stereo (TWS) προσφέρουν ασύρματη ελευθερία και είναι κατάλληλα για αθλητικές δραστηριότητες, προπόνηση και χρήση κατά τη διάρκεια της κίνησης.\r\n', 19, 'xiaomibuds4.jpg', 'sound'),
(15, 'Apple AirPods Max Silver', 'Τα νέα ασύρματα ακουστικά κεφαλής AirPods Max μεταφέρουν την μαγεία των AirPods σε έναν over-ear σχεδιασμό, με εκπληκτική απόδοση ήχου και Ενεργή Ακύρωση Θορύβου. Η απόλυτη προσωπική ακουστική εμπειρία είναι εδώ.\r\n', 569, 'airpodsmax.jpg', 'sound'),
(16, 'Laptop HP 15.6\'\' 15-fc0008nv (Ryzen 5-7520U/16GB/512SSD/Windows 11) Natural Silver', 'Το laptop 15,6\" HP διαθέτει όλες τις δυνατότητες που απαιτούνται για να διατηρείς την παραγωγικότητά σου σε υψηλά επίπεδα με χαμηλό κόστος και υψηλή περιβαλλοντική υπευθυνότητα. Κατασκευασμένο από ανακυκλωμένα υλικά, αυτό το ισχυρό laptop HP διαθέτει επεξεργαστή AMD, άφθονο χώρο αποθήκευσης και καθηλωτικά γραφικά.\r\n', 699, 'laptophp15.jpg', 'computers'),
(17, 'Laptop ASUS Vivobook M1605YAR-MB731W 16\'\' (R7-7730U/16GB/1TB SSD/Windows 11)', 'Το Asus VivoBook 16 (M1605YAR-MB731W) 16.9\" FHD διαθέτει επεξεργαστή Ryzen 7-7730U και 16GB μνήμη.\r\n', 749, 'laptopasus16.jpg', 'computers'),
(18, 'Apple MacBook Air 13.3\'\' 256GB/8GB Space Grey | M1 8core/7core GPU|GR Keyb | έως 18 ώρες μπαταρία', 'Το τελευταίο MacBook Air διαθέτει εκπληκτική οθόνη Retina, Touch ID, τον τελευταίο επεξεργαστή και μπαταρία που διαρκεί όλη μέρα σε μια πιο λεπτή και ελαφριά σχεδίαση. Είναι το απόλυτα φορητό notebook, που τα κάνει όλα.\r\n', 898, 'laptopmac13.jpg', 'computers'),
(19, 'Desktop PC Quest Play (Ryzen5 5600Χ/16GB/250SSD +1 TB HDD/RTX2060/Windows 10)', 'H/Y Quest Play με επεξεργαστή AMD Ryzen 5 5600X,Τροφοδοτικό 650W Bronze, 16GB Ram 3200 MHz,κάρτα γραφικών nVidia GeForce RTX 2060 6GB και Windows 10 Home!\r\n', 1149, 'desktopquest.jpg', 'computers'),
(20, 'Desktop PC All In One HP ENVY 34\'\' (i9-12900/128GB/2TB SSD/RTX 3080 8GB/Windows 11) 34-c1001nv Turbo', 'Ο επιτραπέζιος υπολογιστής HP ENVY 34 ιντσών All-in-One είναι ιδανικός για την έκφραση της δημιουργικότητάς σου. Συνδυάζει μια οθόνη που τα έχει όλα: ρεαλιστικά χρώματα και τις επιδόσεις που χρειάζεσαι για να δημιουργείς. Άλλαξε τον τρόπο με τον οποίο συνεργάζεσαι χάρη στην αποσπώμενη μαγνητική κάμερα που αλλάζει γωνίες θέασης για να παρουσιάζεις την εργασία σου μέσω βίντεο.\r\n', 4802, 'desktophp.jpg', 'computers'),
(21, 'Τηλεόραση LG 43\'\' 43UR74006LB Ultra HD Smart', 'Απόλαυσε ζωηρά χρώματα με τεχνολογία LED σε 4K και με επεξεργαστή υψηλής ισχύος που μεγιστοποιεί την ποιότητα εικόνας και ήχου μέσω AI.\r\n', 319, 'lg43.jpg', 'tv'),
(22, 'Τηλεόραση Samsung 43\" UE43CU7172UXXH Ultra HD Smart LED', 'Δες τα χρώματα να ζωντανεύουν, με τη τηλεόραση Samsung!\r\n', 319, 'samsung43.jpg', 'tv'),
(23, 'Τηλεόραση Tesla 32M335BHS 32\'\'HD READY SMART', 'Η νέα τηλεόραση Tesla με το λειτουργικό σύστημα VIDAA σου προσφέρει μόνο με ένα κλικ όλα τα χαρακτηριστικά που χρειάζεσαι!\r\n', 119, 'tesla32.jpg', 'tv'),
(24, 'Τηλεόραση LG 32\'\' 32LQ630B6LA HD Ready Smart Led', 'Τηλεόραση LG με ανάλυση HD, επεξεργαστή α5 Gen5 AI για βελτιωμένη εμπειρία θέασης, ThinQ AI & WebOS για εξατομικευμένες ρυθμίσεις.\r\n\r\n', 229, 'lg32.jpg', 'tv'),
(25, 'Τηλεόραση Toshiba 43\" UHD Vidaa TV 43UV3363DG', 'Τηλεόραση Toshiba 4K ανάλυσης για κορυφαία ποιότητα εικόνας.\r\n\r\n', 251, 'toshiba43.jpg', 'tv'),
(26, 'Smartphone Huawei P60 Pro 6.67\'\' 256GB/8GB Rococo Pearl | Triple Camera 48MP | 3.5x Optical Zoom | 1', 'Μοναδικός σχεδιασμός με Ultra Lighting Telephoto και η Ultra Lighting XMAGE κύρια κάμερα, με οθόνη OLED Quad-Curve 6.67” με ανθεκτικό Kunlun Glass σου προσφέρει καθηλωτική εμπειρία θέασης. Διαθέτει μπαταρία 4815 με 88 W φόρτιση HUAWEI SuperCharge Turbo για μεγάλη αυτονομία για τις εξορμήσεις σου.', 789, 'huaweip60pro.jpg', 'smartphones'),
(27, 'Τηλεόραση Samsung 50\" QE50Q60CAUXXH Ultra Hd Smart Qled', 'Εντυπωσιακά χρώματα που παραμένουν αναλλοίωτα χάρη στην τεχνολογία Quantum Dot!', 509, 'samsung50.jpg', 'tv'),
(28, 'Soundbar JBL Bar 500 MultiBeam & Virtual Dolby Atmos', 'Φανταστικός 3D ήχος με εντυπωσιακό μπάσο.', 559, 'soundbar.jpg', 'sound'),
(29, 'Apple iMac 24\'\' 256GB/8GB Silver | M3 8core/8core GPU | GR Magic Keyb | Mouse | Retina 4.5K', 'iMac. Ο καλύτερος all-in-one επιτραπέζιος υπολογιστής στον κόσμο, τώρα ενισχυμένος από το M3 chip. Με μια εκπληκτική οθόνη 24 ιντσών σε ένα εμβληματικό σχεδιασμό και την καλύτερη κάμερα, μικρόφωνα και ηχεία στην κατηγορία του.', 1599, 'imac.jpg', 'computers'),
(30, 'Xiaomi Smart Band 8 (Graphite Black)', 'Το Xiaomi Smart Band έχει αναβαθμιστεί με νέο μηχανισμό γρήγορης απελευθέρωσης που όχι μόνο σου επιτρέπει να αλλάζεις λουράκια με διαφορετικά σχέδια και υλικά, αλλά και να τα αφαιρείς εντελώς.', 39, 'xiaomiband.jpg', 'gadgets');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(80) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `address`, `phone`) VALUES
(20, 'user', 'user', 'user@email.com', '123', 'whatever', '210000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
