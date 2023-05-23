-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 03:41 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adidaspices-20230518`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `category` tinyint(1) DEFAULT NULL,
  `top` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `name_ar`, `image`, `category`, `top`) VALUES
(1, 'Anise seeds', 'يانسون حب', 'Anise Seeds.png', 1, 0),
(2, 'Allspice powder', 'بهار حلو ناعم', 'Sweet pepper powder.png', 1, 0),
(3, 'Allspice seeds', 'بهار حلو حب', 'Sweet pepper Seeds.png', 1, 0),
(4, 'Anise powder', 'يانسون ناعم', 'Anise Powder.png', 1, 0),
(5, 'Basil powder', 'حبق ناعم', NULL, 1, 1),
(6, 'Black Pepper powder', 'بهار أسود ناعم', 'black pepper powder.png', 1, 1),
(7, 'Black Pepper seeds', 'بهار أسود حب', 'black pepper seeds.png', 1, 1),
(8, 'Caraway powder', 'كراو ية ناعمة', 'Caraway powder.png', 1, 1),
(9, 'Cardamom powder', 'هال ناعم', 'Cardamom powder.png', 1, 0),
(10, 'Cardamom seeds', 'هال اخضر حب', 'Cardamom pods.png', 1, 0),
(11, 'Cinnamon powder', 'قرفة ناعمة', 'Cinnamon Powder.png', 1, 0),
(12, 'Cinnamon sticks', 'قرفة عود', 'Ground cinnamon.png', 1, 0),
(13, 'Citric Acid', 'حامض الليمون', 'citric acid.png', 1, 0),
(14, 'Cloves powder', 'قر نفل ناعم', 'Cloves powder.png', 1, 0),
(15, 'Cloves seeds', 'قر نفل حب', 'Clove seeds.png', 1, 0),
(16, 'Coriander powder', 'كزبرة ناعمة', NULL, 1, 0),
(17, 'Coriander Seeds', 'كزبرة حب', 'Coriander Seed.png', 1, 0),
(18, 'Cumin powder', 'كمون ناعم', 'Cumin Spices.png', 1, 0),
(19, 'Cumin Seeds', 'كمون حب', 'Cumin Seeds.png', 1, 0),
(20, 'Ginger powder', 'جنزبيل ناعم', 'Ginger powder.png', 1, 0),
(21, 'Ginger Seeds', 'جنزبيل حب', 'Ginger seeds.png', 1, 0),
(22, 'Mahleb powder', 'محلب ناعم', 'Mahleb powder.png', 1, 0),
(23, 'Mahleb seeds', 'محلب حب', 'Mahleb seeds.png', 1, 0),
(24, 'Nutmeg powder', 'جوزة الطيب ناعم', 'Nutmeg powder.png', 1, 0),
(25, 'Nutmeg Seeds', 'جوزة الطيب حب', 'Nutmeg Seeds.png', 1, 0),
(26, 'Paprika', 'فليفلة حلوة ناعمة', 'paprika.png', 1, 0),
(27, 'Red Chili flakes', 'حر أحمر خشن', 'Red chilli Flakes.png', 1, 0),
(28, 'Red Chili pepper', 'حر أحمر ناعم', 'Red chilli powder.png', 1, 0),
(29, 'Rosemary powder', 'اكليل الجبل ناعم', 'Rosemary powder.png', 1, 0),
(30, 'Sodium Bicarbonate/Baking Soda', 'كربونة', 'Sodium bicarbonate.png', 1, 0),
(31, 'Sumac powder', 'سماق ناعم', 'Sumac.png', 1, 0),
(32, 'Turmeric powder', 'عقدة صفراء ناعمة', 'Turmeric powder.png', 1, 0),
(33, 'Turmeric seeds ', 'عقدة صفراء  حب', NULL, 1, 0),
(34, 'Backing Powder', 'بيكنغ باودر', 'baking powder.png', 1, 0),
(35, 'Coconut shreds', 'جوز الهند', 'Coconut shreds.png', 1, 0),
(36, 'Dried Black Lime Lemon powder', 'حامض اللومي ناعم', NULL, 1, 0),
(37, 'Dried Black Lime Lemon seeds', 'حامض اللومي حب', NULL, 1, 0),
(38, 'Fennel powder', 'شومر ناعم', 'Fennel powder.png', 1, 0),
(39, 'Fennel seeds', 'شومر حب', 'fennel seeds.png', 1, 0),
(40, 'Fenugreek powder', 'حلبة ناعمة', 'Fenugreek powder.png', 1, 0),
(41, 'Fenugreek Seeds', 'حلبة حب', 'Fenugreek seeds.png', 1, 0),
(42, 'Flax seeds', 'بزر الكتان', 'flax seeds.png', 1, 0),
(43, 'Galangal  powder', 'خو لنجان ناعم', NULL, 1, 0),
(44, 'Galangal  seeds', 'خو لنجان حب', 'Galangal seeds.png', 1, 0),
(45, 'Garlic flakes', 'ثوم شرائح', NULL, 1, 0),
(46, 'Garlic powder ', 'ثوم بودرة', 'garlic Spices.png', 1, 0),
(47, 'Mustard  powder ', 'خردل ناعم', 'mustard powder.png', 1, 0),
(48, 'Mustard seeds', 'خردل حب', NULL, 1, 0),
(49, 'Nigella seeds', 'حبة البركة', 'Nigella seeds.png', 1, 0),
(50, 'Onion flakes', 'بصل شرائح', NULL, 1, 0),
(51, 'Onion powder', 'بصل بودرة', 'onion Spices.png', 1, 0),
(52, 'Powdered Sugar ', 'سكر بودرة', NULL, 1, 0),
(53, 'Raw Sesame', 'سمسم ني', 'Raw sesame.png', 1, 0),
(54, 'Rice powder', 'أرز ناعم', 'rice powder.png', 1, 0),
(55, 'Roasted Sesame', 'سمسم محمص', 'Roasted sesame.png', 1, 0),
(56, 'Starch powder ', 'نشاء ناعم', NULL, 1, 0),
(57, 'Sugar seeds', 'سكر حب', NULL, 1, 0),
(58, 'Thyme Extra', 'زعتر اكسترا', 'Thyme extra.png', 1, 0),
(59, 'Thyme Medium', 'زعتر وسط', 'Thyme medium.png', 1, 0),
(60, 'Thyme Original', 'زعتر محوج', 'Thyme original.png', 1, 0),
(61, 'Vanilla', 'فانيليا', 'Vanilla powder.png', 1, 0),
(62, 'White pepper powder', 'أبيض ناعم', 'White pepper powder.png', 1, 0),
(63, 'White pepper seeds', 'أبيض حب', 'White pepper seeds.png', 1, 0),
(64, 'Yeast', 'خميرة البيرة', 'Yeast.png', 1, 0),
(65, 'Aynar spiced tea', 'دقة النفسا', NULL, 2, 0),
(66, 'Barbecue ', 'بهار اللحم المشوي', NULL, 2, 0),
(67, 'Barbecue Flavor', 'نكهة باربيكيو', NULL, 5, 0),
(68, 'Biryani ', 'بهار برياني', 'biryani spices.png', 2, 0),
(69, 'Bread Crumbs', 'كعك', NULL, 2, 0),
(70, 'Broasted Chicken Flour', 'طحين بروستد', NULL, 2, 0),
(71, 'Broasted Chicken Spices', 'بهار بروستد عادي', 'Broasted Chicken Spices.png', 2, 0),
(72, 'Brown Sayadieh', 'بهار صيادية سمراء', 'Brown Sayadieh Spices.png', 2, 0),
(73, 'Cajun ', 'بهار كايجن', 'Cajun Spices.png', 2, 0),
(74, 'Cardamom Flavor', 'بهار كايجن', NULL, 2, 0),
(75, 'Cheddar Flavor', 'نكهة جبنة تشيدر', NULL, 5, 0),
(76, 'Chicken ', 'بهار دجاج', 'Chicken Spices.png', 2, 0),
(77, 'Chicken Burger ', 'بهار همبرغر دجاج', 'Chicken Burger Spices.png', 2, 0),
(78, 'Chicken Escalope', 'بهار أسكالوب دجاج', 'Chicken Escalope Spices.png', 2, 0),
(79, 'Chicken Herbs', 'دجاج بالأغشاب', 'Chicken Herbs spices.png', 2, 0),
(80, 'Chicken Makanek', 'بهار مقانق دجاج', 'Chicken Makanek Spices.png', 2, 0),
(81, 'Chicken Marinade Spices', 'ماريناد دجاج مبهر', 'Chicken Marinade Spices.png', 2, 0),
(82, 'Chicken Shawarma', 'يهار شاورما دجاج', 'Chicken Shawarma spices.png', 2, 0),
(83, 'Chicken Sub ', 'بهار تشكن ساب', 'Chicken Sub spices.png', 2, 0),
(84, 'Chicken Wings ', 'بهار جوانح', 'Chicken Wings spices.png', 2, 0),
(85, 'Chili Spices', 'بهار تشيلي', 'Chilli Spices.png', 2, 0),
(86, 'Chinese ', 'بهار صيني', 'Chinese spices.png', 2, 0),
(87, 'Classic Sayadieh ', 'بهار صيادية صفرة', NULL, 2, 0),
(88, 'Couscous ', 'بهار الكسكس', 'couscous Spices.png', 2, 0),
(89, 'Crispy Chicken Flour', 'طحين كرسبي', NULL, 2, 2),
(90, 'Crispy Chicken Spices', 'بهار كرسبي', 'Crispy chicken spices.png', 2, 2),
(91, 'Crispy Fish & Shrimps Tempura Flour', 'طحين كرسبي طمبورة', NULL, 2, 2),
(92, 'Curry powder', 'كاري', 'sweet curry spices.png', 2, 0),
(93, 'Dakket Kaak', 'دقة كعك', 'Dakket Kaak mix.png', 2, 0),
(94, 'Falafel ', 'بهار فلافل', 'falafel spices.png', 2, 0),
(95, 'Fish ', 'بهار سمك', 'Fish Spices.png', 2, 0),
(96, 'Fish Fillet  ', 'بهار سمك فيلية', 'Fish Fillet spices.png', 2, 0),
(97, 'Francisco ', 'بهار فرنسيسكو', 'Francisco Spices.png', 2, 0),
(98, 'Grilled Chicken ', 'بهار دجاج مشوي', 'grilled Chicken Spices.png', 2, 0),
(99, 'Hamburger ', 'بهار همبرغر لحمة', 'Meat Hamburger spices.png', 2, 0),
(100, 'Kabsa ', 'بهار كبسة', NULL, 2, 0),
(101, 'Kafta ', 'بهار كفتة', 'Kafta spices.png', 2, 0),
(102, 'Kibbeh ', 'بهار كبة ناعمة', 'kibbeh Spices.png', 2, 0),
(103, 'Lahm Bi Ajin', 'بهار اللحم بعجين', 'Meat Dough Spices.png', 2, 0),
(104, 'Lazania ', 'بهار لازانيا', 'Lasagne Spices.png', 2, 0),
(105, 'Lemon Chicken ', 'بهار دجاج بالليمون', 'Lemon chicken spices.png', 2, 0),
(106, 'Magic mix', 'بهار ماجيك', NULL, 2, 0),
(107, 'Makloubeh ', 'بهار المقلوبة', 'Makloubeh Spices.png', 2, 0),
(108, 'Mandi ', 'بهار المندي', 'Mandi Spices.png', 2, 0),
(109, 'Meat Makanek Sausages', 'بهار مقانق لحمة', 'Meat makanek spices.png', 2, 0),
(110, 'Meat Shawarma ', 'بهار شاورما لحمة', 'meat shawarma spices.png', 2, 0),
(111, 'Mexican ', 'بهار مكسيكن', 'Mexican Spices.png', 2, 0),
(112, 'Mexicana ', 'بهار مكسيكانا', 'Mexicana spices.png', 2, 0),
(113, 'Moughrabieh ', 'بهار مغربية', 'Moghrabieh spices.png', 2, 0),
(114, 'Nachos Flavor', 'نكهة ناشو', NULL, 5, 0),
(115, 'New Argentina ', 'بهار نيو أرجنتينا', NULL, 2, 0),
(116, 'Nifa ', 'بهار نيفا', 'Nifa spices.png', 2, 0),
(117, 'Nuggets ', 'بهار ناغتس', 'Nuggets Spices.png', 2, 0),
(118, 'Ouzi ', 'بهار أوزي', 'Ouzi spices.png', 2, 0),
(119, 'Paella ', 'بهار بايللا', 'Paella Spices.png', 2, 0),
(120, 'Philadelphia ', 'بهار فلادلفيا', 'Philadelphia Spices.png', 2, 0),
(121, 'Pizza Herbs', 'أعشاب البيتزا', 'Pizza Herbs Spices.png', 2, 0),
(122, 'Pizza Sauce mix', 'بهار صوص بيتزا', 'Pizza Sauce Spices.png', 2, 0),
(123, 'Pizza Spices', 'بهار بيتزا', 'Pizza spices.png', 2, 0),
(124, 'Potato Spices', 'بهار بطاطا', 'Potato Spices.png', 2, 0),
(125, 'Potato Spices & Herbs', 'خلطة بطاطا بالأعشاب', 'Herbs and potato Spices.png', 2, 0),
(126, 'Red Fajita ', 'بهار فاهيتا  أحمر', 'Red Fahita spices.png', 2, 0),
(127, 'Red Tawouk ', 'بهار طاووق أحمر', 'Red Tawook Spices.png', 2, 0),
(128, 'Rice Spices', 'بهار الارز', 'Rice Spices.png', 2, 0),
(129, 'Rolled Cinnamon Sticks', 'قرفة عود مبروم', NULL, 2, 0),
(130, 'Rosto ', 'بهار روستو', 'Rosto Spices.png', 2, 0),
(131, 'Saffron', 'زعفران', NULL, 2, 0),
(132, 'Seven Mixed Spices', 'سبع بهارات', 'seven spices.png', 2, 0),
(133, 'Smoke Flavor', 'نكهة مدخن', NULL, 5, 0),
(134, 'Spicy Broasted Chicken Spices', 'بهار بروستد سبا يسي', 'Spicy broosted chicken spices.png', 2, 0),
(135, 'Spicy Fish ', 'بهار سمكة حرة', 'Spicy Fish Spices.png', 2, 0),
(136, 'Steak Spices', 'بهار ستيك', 'Steak Spices.png', 2, 0),
(137, 'Sujuk & Basterma Sausages ', 'بهار سجق', 'Sujuk spices.png', 2, 0),
(138, 'Tandoori ', 'بهار تندوري', 'Tandoori Spices.png', 2, 0),
(139, 'White Fajita ', 'بهار فاهيتا  أبيض	', 'White Fahita Spices.png', 2, 0),
(140, 'White Tawouk', 'بهار طاووق أبيض', 'Whihte Tawook Spices.png', 2, 0),
(141, 'Whole Kibbeh Seeds', 'بهار كبة حب', 'kibbeh seeds spices.png', 2, 0),
(142, ' Zinger ', 'بهار زينجر', 'Zinger spices.png', 2, 0),
(143, 'Basil seeds', 'حبق', 'Dried Basil.png', 3, 0),
(144, 'Bay Leaves', 'ورق غار', NULL, 3, 0),
(145, 'Dried Mint', 'نعنع يابس', 'dried mint.png', 3, 0),
(146, 'Dried parsley ', 'بقدونس يابس', 'Parsley.png', 3, 0),
(147, 'Lavender', 'لافندر', NULL, 3, 0),
(148, 'Marjoram', 'مردكوش', 'Marjoram.png', 3, 0),
(149, 'Oregano', 'اوريغانو ناعم', 'oregano powder.png', 3, 0),
(150, 'Rosemary seeds', 'اكليل الجبل', 'Rosemary flakes.png', 3, 0),
(151, 'Safflower ', 'عصفر', 'Safflowe.png', 3, 0),
(152, 'Saffron', 'زعفران', NULL, 3, 0),
(153, 'Sage', 'ميرامية', 'Sage.png', 3, 0),
(154, 'Dried Thyme', 'زعتر يابس', 'Thyme powder.png', 3, 0),
(155, 'Mouhalabieh', 'مهلبية', NULL, 4, 0),
(156, 'Moghli', 'مغلي', NULL, 4, 0),
(157, 'Sahlab', 'سحلب', NULL, 4, 0),
(158, 'Kashtalieh', 'قشطلية', NULL, 4, 0),
(159, 'Yellow Sayadieh Spices', 'بهارات الصيادية الصفراء', 'Yellow Sayadieh Spices.png', 3, 0),
(160, 'Yellow kabsa spices', 'بهارات كبسة صفراء', 'Yellow kabsa spices.png', 3, 0),
(161, 'spicy curry', 'كاري حار', 'spicy curry.png', 1, 0),
(162, 'Salad Spices', 'بهارات سلطة', 'Salad Spices.png', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
