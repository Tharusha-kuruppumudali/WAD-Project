-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 24, 2021 at 10:49 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watchreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirmorders`
--

DROP TABLE IF EXISTS `confirmorders`;
CREATE TABLE IF NOT EXISTS `confirmorders` (
  `Oid` int(11) NOT NULL AUTO_INCREMENT,
  `Cid` int(11) NOT NULL,
  `Pid` int(11) NOT NULL,
  `PName` text NOT NULL,
  `Pprice` double NOT NULL,
  `Pqty` int(11) NOT NULL,
  `Fprice` double NOT NULL,
  `Status` text NOT NULL,
  PRIMARY KEY (`Oid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirmorders`
--

INSERT INTO `confirmorders` (`Oid`, `Cid`, `Pid`, `PName`, `Pprice`, `Pqty`, `Fprice`, `Status`) VALUES
(1, 16, 40, 'G-SHOCK GA-800-4ADR', 33255, 1, 33255, 'Pending'),
(2, 16, 54, 'ROAMER - ROCKSHELL MARK III CHRONO 220837 49 75 20', 95000, 1, 95000, 'Processed'),
(3, 16, 61, 'TISSOT CLASSIC DREAM', 108000, 1, 108000, 'Shipped'),
(4, 18, 48, 'TISSOT CHRONO XL CLASSIC', 75000, 1, 75000, 'Dispatched'),
(5, 18, 49, 'G-SHOCK - GA-100CB-1A', 30000, 1, 30000, 'Pending'),
(6, 16, 40, 'G-SHOCK GA-800-4ADR', 33255, 1, 33255, 'Delivered'),
(7, 16, 45, 'ROAMER - 657833 49 59 60 C-LINE (DIA VERSION)', 90000, 1, 90000, 'Pending'),
(8, 16, 51, 'ROYAL LONDON - 41383-03', 42000, 1, 42000, 'Pending'),
(9, 16, 60, 'TISSOT GENTLEMAN', 84000, 1, 84000, 'Pending'),
(10, 16, 57, 'TISSOT HERITAGE VISODATE AUTOMATIC', 141000, 1, 141000, 'Pending'),
(11, 16, 64, 'RADO HYPERCHROME CHRONOGRAPH R32259313', 325000, 1, 325000, 'Pending'),
(12, 16, 60, 'TISSOT GENTLEMAN', 84000, 1, 84000, 'Pending'),
(13, 16, 51, 'ROYAL LONDON - 41383-03', 42000, 1, 42000, 'Pending'),
(14, 16, 51, 'ROYAL LONDON - 41383-03', 42000, 1, 42000, 'Pending'),
(15, 16, 48, 'TISSOT CHRONO XL CLASSIC', 75000, 1, 75000, 'Dispatched'),
(16, 16, 41, 'SEIKO - SUR259P1', 40000, 1, 40000, 'Shipped'),
(17, 16, 40, 'G-SHOCK GA-800-4ADR', 33255, 1, 33255, 'Pending'),
(18, 16, 49, 'G-SHOCK - GA-100CB-1A', 30000, 1, 30000, 'Pending'),
(19, 16, 45, 'ROAMER - 657833 49 59 60 C-LINE (DIA VERSION)', 90000, 1, 90000, 'Pending'),
(20, 16, 43, 'U.S. POLO ASSN. - USP4693BL', 30000, 1, 30000, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'tharusha nimnada', 'tharushankuruppumudali@gmail.com', '$aaaaaaaaaaaaaa'),
(11, 'ttttttttttttttttttttttttt', 'tttttttttt', 'ttttttttttttttttttttttttttttttttttttt'),
(6, 'ttttttttttt', 'ttttttttttttttttttt', 'tttttttttttttttttttttttttttttttttt');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Question` text NOT NULL,
  `Answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `Question`, `Answer`) VALUES
(5, 'Who is my contract partner when buying a watch?', 'The appropriate dealer or private seller is always your contract partner. You are presented the terms and conditions of sale throughout the sales process when you pick Greens payment processing. Please take note of the terms and conditions of the dealer if you opt to buy your watch straight from the dealer.'),
(6, 'How soon is the item available?', 'Items are usually instantly or shortly available. More accurate information may be found on each listing page.'),
(7, 'Why do luxury watches have reference numbers?', 'Manufacturers of luxury watch employ benchmarks for identifying certain watch models. Certain brands (like as Breitling) have specific reference codes that identify the bracelet, clasp and other features of a watch.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `Orderid` int(11) NOT NULL AUTO_INCREMENT,
  `Customerid` int(11) NOT NULL,
  `Contact` text NOT NULL,
  `Address` text NOT NULL,
  `PCode` text NOT NULL,
  `Pid` int(11) NOT NULL,
  `Pname` text NOT NULL,
  `Pqty` int(11) NOT NULL,
  `Status` text NOT NULL,
  PRIMARY KEY (`Orderid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Orderid`, `Customerid`, `Contact`, `Address`, `PCode`, `Pid`, `Pname`, `Pqty`, `Status`) VALUES
(1, 16, '07866544', 'Welihinda', '10640', 40, 'G-SHOCK GA-800-4ADR', 1, 'Pending'),
(2, 16, '07866544', 'Welihinda', '10640', 54, 'ROAMER - ROCKSHELL MARK III CHRONO 220837 49 75 20', 1, 'Processed'),
(3, 16, '07866544', 'Welihinda', '10640', 61, 'TISSOT CLASSIC DREAM', 1, 'Shipped'),
(4, 18, '', '', '', 48, 'TISSOT CHRONO XL CLASSIC', 1, 'Dispatched'),
(5, 18, '', '', '', 49, 'G-SHOCK - GA-100CB-1A', 1, 'Pending'),
(6, 16, '07866544', 'Welihinda', '10640', 40, 'G-SHOCK GA-800-4ADR', 1, 'Delivered'),
(7, 16, '07866544', 'Welihinda', '10640', 45, 'ROAMER - 657833 49 59 60 C-LINE (DIA VERSION)', 1, 'Pending'),
(8, 16, '07866544', 'Welihinda', '10640', 51, 'ROYAL LONDON - 41383-03', 1, 'Pending'),
(9, 16, '07866544', 'Welihinda', '10640', 60, 'TISSOT GENTLEMAN', 1, 'Pending'),
(10, 16, '07866544', 'Welihinda', '10640', 57, 'TISSOT HERITAGE VISODATE AUTOMATIC', 1, 'Pending'),
(11, 16, '07866544', 'Welihinda', '10640', 64, 'RADO HYPERCHROME CHRONOGRAPH R32259313', 1, 'Pending'),
(12, 16, '07866544', 'Welihinda', '10640', 60, 'TISSOT GENTLEMAN', 1, 'Pending'),
(13, 16, '07866544', 'Welihinda', '10640', 51, 'ROYAL LONDON - 41383-03', 1, 'Pending'),
(14, 16, '07866544', 'Welihinda', '10640', 51, 'ROYAL LONDON - 41383-03', 1, 'Pending'),
(15, 16, '07866544', 'Welihinda', '10640', 48, 'TISSOT CHRONO XL CLASSIC', 1, 'Dispatched'),
(17, 16, '07866544', 'Welihinda', '10640', 40, 'G-SHOCK GA-800-4ADR', 1, 'Pending'),
(18, 16, '07866544', 'Welihinda', '10640', 49, 'G-SHOCK - GA-100CB-1A', 1, 'Pending'),
(19, 16, '07866544', 'Welihinda', '10640', 45, 'ROAMER - 657833 49 59 60 C-LINE (DIA VERSION)', 1, 'Pending'),
(20, 16, '07866544', 'Welihinda', '10640', 43, 'U.S. POLO ASSN. - USP4693BL', 1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` text NOT NULL,
  `product_price` double NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_image` text NOT NULL,
  `product_des` text NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_des`) VALUES
(40, 'G-SHOCK GA-800-4ADR', 33255, 50, './assets/wstoreimg/0a69b17442e530198606518d014a2ec1gggggg9999.png', 'Case / bezel material: Resin\r\nResin Band\r\nNeobrite\r\nShock Resistant\r\nMineral Glass\r\n200-meter water resistance\r\nDouble LED light\r\nLED light for the face (Auto LED light, Super illuminator, selectable illumination duration (1.5 seconds or 3 seconds), afterglow)\r\nLED back light for the digital display (Auto LED light, Super illuminator, selectable illumination duration (1.5 seconds or 3 seconds), afterglow)\r\nDual time (Home city time swapping)'),
(42, 'Citizen Mens  Eco-drive Date Watch Au1070-82e', 75000, 0, './assets/wstoreimg/7ec863aa95f3e49cc72bfe9c118ec0c4Screenshot2021-06-09174153_360x.png', 'Band Colour\r\nBlack, Silver\r\nIndices\r\nNon-Numeric Hour Marks\r\nYear Manufactured\r\n2010-Now\r\nCaseback\r\nSolid\r\nCase Colour\r\nSilver, Black\r\nLug Width\r\n18 mm\r\nCase Material\r\nSilver, Crystal, Stainless Steel\r\nBezel Colour\r\nSilver, Black\r\nBand Width\r\n31 mm\r\nClosure\r\nBuckle\r\nDial Colour\r\nSilver, Black\r\nVintage\r\nYes\r\nWatch Shape\r\nRound\r\nStyle\r\nDress/Formal\r\nFeatures\r\nMulti-Dial, Chronometer, Chronograph, Mineral Crystal, 12-Hour Dial, Date Indicator, Water-Resistant\r\nMovement\r\nQuartz\r\nFranchise\r\nModern (2000-present)\r\nType\r\nWristwatch\r\nBand Material\r\nStainless Steel, Silver\r\nModel\r\nCitizen Eco-Drive\r\nCase Finish\r\nPolished\r\nDisplay\r\nAnalogue'),
(41, 'SEIKO - SUR259P1', 40000, 50, './assets/wstoreimg/4bc9238d9ce1ec90de31c6e2d50a0389seiko.jpg', 'Stainless Steel Case\r\nStainless Steel Bracelet\r\nQuartz Movement\r\nCaliber: 6N42\r\nHardlex Crystal\r\nBlue Dial\r\nAnalog Display\r\nDate Display\r\nDeployment Clasp\r\n100M Water Resistance\r\nApproximate Case Diameter: 41mm\r\nApproximate Case Thickness: 9mm\r\n\r\nWarranty - 1 Year International'),
(43, 'U.S. POLO ASSN. - USP4693BL', 30000, 50, './assets/wstoreimg/e2398d4dbc061554ef0a73edfb235bfapolo.jpg', 'Gender: Gents\r\nMovement: Battery\r\nGlass: Mineral.\r\nDial Colour: Blue\r\nCase Material: Stainless Steel\r\nCase Width:40mm\r\nStrap Type: Strap\r\nStrap Material: Leather\r\nColour strap: Brown\r\nClasp Type: Strap Buckle.\r\nFunctions: Date.\r\nWater Resistant:3 Atm (Wash Hands)\r\n\r\n'),
(44, 'ROAMER - 510902 49 14 50 Superior Chrono II Men', 100500, 10, './assets/wstoreimg/480efde0964e57c2cf505339e310844c61ScvCLvroL._AC_UX679_360x.jpg', 'Model Number	510902 49 14 50\r\nPart Number	510902 49 14 50\r\nModel Year	2017\r\nCase diameter	48 millimeters\r\nCase Thickness	10 millimeters\r\nBand width	22 millimeters\r\nItem weight	100 grams\r\nWarranty	2 Years'),
(45, 'ROAMER - 657833 49 59 60 C-LINE (DIA VERSION)', 90000, 10, './assets/wstoreimg/51aa637ee0fbc60a787a645e6c592daa657833-49-59-60_360x.jpg', 'Drive: quartz, battery\r\n\r\nCase diameter: 40.00mm\r\n\r\nCase: 316L stainless steel, rose PVD, black ceramic\r\n\r\nGlass: sapphire\r\n\r\nDial: black + real diamond PK1 / 1,2MM / 0,008 carat\r\n\r\nBracelet: black ceramic + steel, rose gilding PVD\r\n\r\nWater resistance: 30M\r\n\r\nFunction:\r\n\r\nDate: yes\r\n\r\nStopwatch: no\r\n\r\nWarranty : 2 Years'),
(46, 'ROAMER - 706856 48 12 70 Windsor', 80000, 10, './assets/wstoreimg/814aa0cd75bd5d9e7227f946fecfcf20roamer-windsor-706856481270-1_360x.jpg', 'Producer ROAMER\r\nFor whom Male\r\n2-year warranty, with a possible 5-year extension\r\nWater resistance 50 meters\r\nQuartz movement\r\nCase type Stainless steel\r\nShield - white color\r\nSapphire crystal\r\nBelt type Stainless steel\r\nBelt - gold color\r\nCase width 40.0mm\r\nCase thickness 7.00 mm\r\nModel 706856 48 12 70 (706856.48.12.70)\r\nEAN 7630026405034'),
(47, 'TISSOT CHRONO XL CLASSIC', 80000, 10, './assets/wstoreimg/62bee9d2a71aeaa85fb8967ffa285b1bggggggggggggg.jpg', 'Water resistance\r\nWater-resistant up to a pressure of 10 bar (100 m / 330 ft)\r\n\r\nWeight\r\n175\r\n\r\nCollection\r\nT-Sport\r\n\r\nSKU\r\nT1166172204100\r\n\r\nGender\r\nGENT\r\n\r\nWarranty\r\n2 Years of Warranty\r\n\r\nCrystal\r\nScratch-resistant sapphire crystal\r\n\r\nLugs\r\n22.00\r\n\r\nWidth\r\n45.00\r\n\r\nLength\r\n45.00\r\n\r\nCase Material\r\n316L stainless steel case with yellow gold PVD coating'),
(48, 'TISSOT CHRONO XL CLASSIC', 75000, 10, './assets/wstoreimg/338e8b302e9d3dad92b18f22cb63a31cttttt.jpg', 'Water resistance\r\nWater-resistant up to a pressure of 10 bar (100 m / 330 ft)\r\n\r\nWeight\r\n75\r\n\r\nCollection\r\nT-Sport\r\n\r\nSKU\r\nT1166171609100\r\n\r\nGender\r\nGENT\r\n\r\nWarranty\r\n2 Years of Warranty\r\n\r\nCrystal\r\nScratch-resistant sapphire crystal\r\n\r\nLugs\r\n22.00\r\n\r\nWidth\r\n45.00\r\n\r\nLength\r\n45.00\r\n\r\nCase Material\r\n316L stainless steel case'),
(49, 'G-SHOCK - GA-100CB-1A', 30000, 10, './assets/wstoreimg/358817a851f61e853611281a1752fcc1G-SHOCK-_E2_80_93-GA_E2_80_93100CB-1A_600x600_b96360d2-4e65-4c77-9d45-49d443d2effe_480x.jpg', 'Case Size: 51mm\r\nCase Shape: Round\r\nCase Thickness: 16.9mm\r\nCase Material: Resin\r\n\r\nDial Color: Black\r\n\r\nFunctions: \"Day and Date, Hour, Minute, Second\"\r\nMovement Type: Quartz\r\n\r\nClosure: Buckle Clasp\r\nCircumference: -\r\nStrap Color: Black\r\nStrap Width: 28mm\r\nStrap Material: Resin\r\n\r\nInterchangeable Compatibility:\r\n\r\nCollection: -\r\nWarranty: 1 year international Warranty\r\nWater Resistant: 20 ATM\r\nOrigin: Imported'),
(50, 'TIMBERLAND - TBL-15941JYTBL/03', 36000, 10, './assets/wstoreimg/6302ee12bfa4c9093241b95a4f1b4499timber.jpg', 'Model number	TBL15941JYTBL.03\r\nPart Number	TBL.15941JYTBL/03\r\nDial Window Material Typeï»¿	hardened, mineral glass\r\nDisplay Typeï»¿	Analog\r\nClasp Typeï»¿	Buckle\r\nCase Material	Stainless Steel\r\nCase Diameterï»¿	46 millimetres\r\nCase size	millimeters\r\nCase Thicknessï»¿	12 millimetres\r\nBand Material	Calfskin'),
(51, 'ROYAL LONDON - 41383-03', 42000, 10, './assets/wstoreimg/a116a02df0be5e327326faee6eec744dRL-41383-03_360x.jpg', 'Article / ModelRoyal London RL-41383-03\r\n\r\nCountryGreat Britain\r\n\r\nMechanism typequartz\r\n\r\nHousing -steel\r\n\r\nClock face-blue\r\n\r\nBraceletleather-belt\r\n\r\nWater protection-50WR\r\n\r\nGlassmineral increased strength\r\n\r\nThe calenderar- number\r\n\r\ndimensions- D 42mm, thickness 13mm, weight 61.1g\r\n\r\nWarranty - 2 Years Interational'),
(54, 'ROAMER - ROCKSHELL MARK III CHRONO 220837 49 75 20', 95000, 10, './assets/wstoreimg/86f2cd2b3650b8ffed820709f94c3bffroam.png', 'Movement:\r\n\r\nQuartz RONDA 5030D\r\n\r\nFunction:\r\n\r\nDate, Chronograph\r\n\r\nDial:\r\n\r\nGreen\r\n\r\nGlass:\r\n\r\nAnti-reflection Sapphire crystal\r\n\r\nCase:\r\n\r\nStainless steel\r\n\r\nCase colour:\r\n\r\nSilver, Rose gold\r\n\r\nCase size:\r\n\r\n44 mm\r\n\r\nCase thickness:\r\n\r\n12 mm\r\n\r\nWatchband:\r\n\r\nStainless steel with folding clasp\r\n\r\nWaterproof:\r\n\r\n10 ATM\r\n\r\nWarranty:\r\n\r\n2 years international warranty'),
(55, 'Q&Q SUPERIOR S328J211Y', 15000, 10, './assets/wstoreimg/ce6ed01b3f10110ae7098231a43b47d3qq.jpg', 'Movement            :  Japan Movement\r\nCase                      :    Stainless Steel\r\nBand                      : Stainless Steel\r\nWater Resistant     :  3 ATM\r\nDiameter               : 4.2cm\r\nGlass                      :Mineral\r\nWarranty               :   1 Year  '),
(56, 'TISSOT CHRONO XL CLASSIC', 95000, 2, './assets/wstoreimg/b98e7b0d3c9eb8ef0ccc2b162a1d670cT116.617.22.021.00_R_480x.jpg', 'SKU\r\nT1166172202100\r\n\r\nWeight\r\n175\r\n\r\nCollection\r\nT-Sport\r\n\r\nGender\r\nGENT\r\n\r\nWater resistance\r\nWater-resistant up to a pressure of 10 bar (100 m / 330 ft)\r\n\r\nWarranty\r\n2 Years of Warranty\r\n\r\nThickness\r\n11\r\n\r\nLength\r\n45.00\r\n\r\nWidth\r\n45.00\r\n\r\nCase Material\r\n316L stainless steel case with yellow gold PVD coating\r\n\r\nLugs\r\n22.00\r\n\r\nCase shape\r\nROUND\r\n\r\nCrystal\r\nScratch-resistant sapphire crystal\r\n\r\nEnergy\r\nQuartz EOL'),
(57, 'TISSOT HERITAGE VISODATE AUTOMATIC', 141000, 10, './assets/wstoreimg/32787a3fa3bc874eb48158f6cccd3d1etimthumb_360x.jpg', 'Back in the 1950s, Tissot celebrated its centenary with a series of innovations â€“ one of which was the integration of a date function to the automatic mechanism in a watch called Visodate. The Tissot Heritage Visodate translates nostalgia into contemporary timepieces dedicated to detail. A gently curved dial mirrors the domed sapphire glass, both geared to showcasing a clearly visible day and date.'),
(60, 'TISSOT GENTLEMAN', 84000, 10, './assets/wstoreimg/6faf8d847a02186359d5dc7b2ed79ec0t127.410.11.031.00.jpg', 'Water resistance\r\nWater-resistant up to a pressure of 10 bar (100 m / 330 ft)\r\n\r\nWeight\r\n142\r\n\r\nCollection\r\nT-Classic\r\n\r\nSKU\r\nT1274101103100\r\n\r\nGender\r\nGENT\r\n\r\nWarranty\r\n2 Years of Warranty'),
(61, 'TISSOT CLASSIC DREAM', 108000, 10, './assets/wstoreimg/ec3cb293760103a0b2a7e61d9826deb1product_standard_T129.410.26.263.00_240x.jpg', 'ater-resistant up to a pressure of 5 bar (50 m / 165 ft)\r\n\r\nWeight\r\n56\r\n\r\nCollection\r\nT-Classic\r\n\r\nSKU\r\nT1294102626300\r\n\r\nGender\r\nGENT\r\n\r\nWarranty\r\n2 Years of Warranty\r\n\r\nCrystal\r\nScratch-resistant sapphire crystal\r\n\r\nLugs\r\n22.00\r\n\r\nWidth\r\n42.00'),
(62, 'RADO CAPTAIN COOK BRONZE R32504315', 550000, 0, './assets/wstoreimg/3dd145e51ce7dc47c5346ccd4c5d0ca2rado.png', 'An original look from 1962 is brought to life in a new and improved form for the twenty-first century. With vintage details and styling true to the original, and up-to-date features that make it a match for modern wearers, Captain Cook is a watch designed to stand the test of time. This model features a bronze case for a perfect combination of ancient and modern materials.'),
(64, 'RADO HYPERCHROME CHRONOGRAPH R32259313', 325000, 10, './assets/wstoreimg/fd85d9a2dcd112c9219aea39e2d4aafdradhyp.png', 'Dynamic, sleek and sporty, the HyperChrome Chronograph is designed to look just as good with a business suit as it does with a casual outfit or even sports gear.The HyperChrome Chronograph delivers the functions you need with the style you want.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL,
  `active` text NOT NULL,
  `activecode` text NOT NULL,
  `regdate` date NOT NULL,
  `Address` text NOT NULL,
  `Contact` text NOT NULL,
  `PCode` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `Email`, `password`, `type`, `active`, `activecode`, `regdate`, `Address`, `Contact`, `PCode`) VALUES
(16, 'shelby', 'tharushankuruppumudali@gmail.com', '123', 'Normal', 'Active', '1771', '2021-06-17', 'Welihinda', '07866544', '10640'),
(2, 'Tharusha', 'shelbytharu@gmail.com', '123', 'Admin', 'non', '8169', '2021-06-09', '', '', ''),
(11, 'nimnada', 'it20768430@my.sliit.lk', '123', 'Master', 'Active', '3972', '2021-06-09', 'rerggg', 'reg', 'rge'),
(18, 'kuru', 'kutu@gmail.com', '123', 'Normal', 'Active', '9490', '2021-06-19', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
