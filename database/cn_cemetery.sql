-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 03:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cn_cemetery`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_billings`
--

CREATE TABLE `tbl_billings` (
  `_id` int(11) NOT NULL,
  `record_id` varchar(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `amount_paid` varchar(15) NOT NULL,
  `purchase_date` date NOT NULL,
  `billing_id` varchar(15) NOT NULL,
  `pkg_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_billings`
--

INSERT INTO `tbl_billings` (`_id`, `record_id`, `name`, `contact`, `email_address`, `amount_paid`, `purchase_date`, `billing_id`, `pkg_id`) VALUES
(15, '_rid0H252GV0VA4', 'Marcos Garcia ', '09489123457', 'marcosgarcia@gmail.com', '14000', '2022-12-14', '_bidO76XGON1F2I', '_pid8923827128'),
(55, '_rid1367NPXV4VZ', 'Kimmy Dominggo', '09514890140', 'kimmydominggo@gmail.com', '24000', '2022-12-15', '_bid5UMX29C87LW', '_pid8923827130'),
(65, '_rid1ZJXD57TZQA', 'Liezel Padilla', '09091123456', 'liezelpadilla@gmail.com', '8500', '2022-12-15', '_bidG05X7JPD20U', '_pid8923827127'),
(3, '_rid21CEHTZPTX3', 'Martha Galang', '09519324101', 'marthagalang@gmail.com', '8000', '2022-12-14', '_bidAMWBKK8CW3V', '_pid8923827126'),
(85, '_rid2228L07FA1C', 'Yuhan Faith Mondragon', '09482649235', 'yuhanfaith@gmail.com', '14000', '2022-12-15', '_bidHX3V3J42I32', '_pid8923827129'),
(31, '_rid2MB8IB4QIA3', 'Jackie Madrid ', '09126145610', 'jackiemadrid@gmail.com', '8000', '2022-12-14', '_bidSMSK5DT8HDU', '_pid8923827126'),
(103, '_rid2X7ZSEEU3X7', 'John Mark San Carlos', '09435635642', 'jonhmark@gmail.com', '14000', '2022-12-15', '_bidVJZ6W618JXG', '_pid8923827129'),
(78, '_rid2XC6TY7CUG0', 'Susan Garcia', '09126734212', 'susangarcia@gmail.com', '8500', '2022-12-15', '_bidQRLN0OTKSAG', '_pid8923827127'),
(8, '_rid32DP2CM31IK', 'Jason Lagman', '09322212340', 'jasonlagman@gmail.com', '14000', '2022-12-14', '_bidS76L9T73G12', '_pid8923827128'),
(68, '_rid35B38WE98WJ', 'Lyca Santillan', '09996789432', 'lycasantillan@gmail.com', '8500', '2022-12-15', '_bid9QRKAJBF3LC', '_pid8923827127'),
(71, '_rid39R30P7D47T', 'Janella Santos', '09347589432', 'janellasantos@gmail.com', '8500', '2022-12-15', '_bidWMA6C66D6ZD', '_pid8923827127'),
(94, '_rid4LW7OIZICZC', 'Lucas Lacson', '09543234580', 'lucaslacson@gmail.com', '14000', '2022-12-15', '_bidSZTLTJXDEIQ', '_pid8923827129'),
(81, '_rid4M5MDROPH3F', 'Christy Marcos', '09991234231', 'christymarcos@gmail.com', '8500', '2022-12-15', '_bidBAN7RVB8AFG', '_pid8923827127'),
(75, '_rid51O0R5KRS6J', 'risadelrosario@gmail.com', '09126784509', 'risadelrosario@gmail.com', '8500', '2022-12-15', '_bidNSWBEV7KZSN', '_pid8923827127'),
(74, '_rid54K1896JEFM', 'Risa  Del Rosario', '09126784509', 'risadelrosario@gmail.com', '8500', '2022-12-15', '_bid9CDHBLLQS4C', '_pid8923827127'),
(25, '_rid574TI7AIFE6', 'Kaye Pascual', '09512475112', 'kayepascual@gmail.com', '2500', '2022-12-14', '_bidL88I94XEK4P', '_pid8923827124'),
(22, '_rid5AU5L1STDAU', 'Jean Bacolod', '09194411126', 'jeanbacolod@gmail.com', '14000', '2022-12-14', '_bidKZ6JOYQ3FFP', '_pid8923827128'),
(60, '_rid5VGW7X9P8J0', 'Ryza Velasco', '09210123456', 'ryzavelosco@gmail.com', '24000', '2022-12-15', '_bid8IEMKS2G4JZ', '_pid8923827130'),
(96, '_rid6PS13GNSSQ8', 'Myla Kate Marcos', '09583345629', 'mylakatemarcos@gmail.com', '14000', '2022-12-15', '_bidHDRAXUUKQLH', '_pid8923827129'),
(82, '_rid6Y50H0FIB7C', 'Jessa Dela Cruz', '09465432190', 'jessadelacruz@gmail.com', '8500', '2022-12-15', '_bidE2VLO8IVSUC', '_pid8923827127'),
(50, '_rid6ZTB8PHE8RG', 'Luke Reyes', '09081181234', 'lukereyes@gmail.com', '24000', '2022-12-15', '_bidDSESGGPN87L', '_pid8923827130'),
(100, '_rid7E9HSG8S6OQ', 'Jose Ducay', '09435623469', 'joseducay@gmail.com', '14000', '2022-12-15', '_bidTUM2H2K2B9S', '_pid8923827129'),
(6, '_rid7FK6JGBY6E7', 'Roselyn Pangilinan', '09483124567', 'roselynpangilinan@gmail.com', '14000', '2022-12-14', '_bid2E5RRB1ZQD8', '_pid8923827128'),
(37, '_rid7QBPX9VH6YY', 'Roldan Ocampo', '09326514012', 'roldanocampo@gmail.com', '8000', '2022-12-14', '_bid6E68X7OZ5IS', '_pid8923827126'),
(89, '_rid7UFAT1AB94B', 'Angelica  Mae Santiago', '09593465123', 'angelicamaesantiago@gmail.com', '14000', '2022-12-15', '_bidCC4W3U36JFJ', '_pid8923827129'),
(48, '_rid83P3HE0ZO4P', 'Valene Umali', '09514876541', 'valeneumali@gmail.com', '24000', '2022-12-15', '_bidXC9C3VQHU6E', '_pid8923827130'),
(72, '_rid84GAKP3RMQA', 'Shantall Mendez ', '09482390834', 'shantallmendez@gmail.com', '8500', '2022-12-15', '_bidAKC37V2OOSS', '_pid8923827127'),
(62, '_rid85F8ZDP86YL', 'Alexander Guevarra', '09191087621', 'alexanderguevarra@gmail.com', '24000', '2022-12-15', '_bidNZ37QWDQBAY', '_pid8923827130'),
(27, '_rid85Q6FIAIJIF', 'Hope Morales ', '09991180140', 'hopemorales@gmail.com', '8000', '2022-12-14', '_bidZKCZ81MO3JW', '_pid8923827126'),
(28, '_rid87XPPVSZM8K', 'Lucio Romero', '09487943219', 'lucioromero@gmail.com', '8000', '2022-12-14', '_bid00FCDEQ5JZ3', '_pid8923827126'),
(39, '_rid9ZFEGWIMAHF', 'Julie Fajardo', '09486154890', 'juliefajardo@gmail.com', '8000', '2022-12-14', '_bidS43EQ3TPH0K', '_pid8923827126'),
(18, '_ridATHE60EAWPV', 'Norma Bautista ', '09612560011', 'normabautista@gmail.com', '14000', '2022-12-14', '_bid3XLJZ7GK9UN', '_pid8923827128'),
(34, '_ridBD0DUQFE083', 'Rodie Aquino', '09152123110', 'rodieaquino@gmail.com', '8000', '2022-12-14', '_bidRFGPO4HES6H', '_pid8923827126'),
(57, '_ridC6U6EEZL10O', 'Sherwin Dela Rosa', '09356814043', 'sherwindelarosa@gmail.com', '24000', '2022-12-15', '_bidAVYCSA4A6W8', '_pid8923827130'),
(7, '_ridCCHQX2FMZC4', 'Sandy Dizon', '09099413811', 'sandydizon@gmail.com', '14000', '2022-12-14', '_bid42E6PUW2XLB', '_pid8923827128'),
(47, '_ridCCIWGERCTQM', 'Matthew Mateo', '09491234561', 'matthewmateo@gmail.com', '24000', '2022-12-14', '_bidMOZHG52QVP6', '_pid8923827130'),
(61, '_ridD6NS09EKCPA', 'Annabel Zamora', '09485078140', 'annabelzamora@gmail.com', '24000', '2022-12-15', '_bid1PV15VJMK08', '_pid8923827130'),
(58, '_ridDEAAP9JSKBV', 'Sammy Aragon', '09991234560', 'sammyaragon@gmail.com', '24000', '2022-12-15', '_bidGMLMV5F8TLU', '_pid8923827130'),
(30, '_ridDJEUE15REKT', 'Anne Cruz', '09213456789', 'annecruz@gmail.com', '8000', '2022-12-14', '_bid12G2CDT90SG', '_pid8923827126'),
(76, '_ridEL81QEFGZUM', 'Carissa Alcantara', '09187542345', 'carissaalcantara@gmail.com', '8500', '2022-12-15', '_bidUOHJIQPHJKX', '_pid8923827127'),
(66, '_ridF4S41LQXAR3', 'Jude Guzman', '09428910141', 'judeguzman@gmail.com', '8500', '2022-12-15', '_bidC6GWDLJ2PI2', '_pid8923827127'),
(42, '_ridFEEGV1Y7QBC', 'Milka Jimenez', '09197624120', 'milkajimenez@gmail.com', '8000', '2022-12-14', '_bidL8EGQRACUL2', '_pid8923827126'),
(70, '_ridFOHZFRQPONI', 'Janella Santos', '09347589432', 'janellasantos@gmail.com', '8500', '2022-12-15', '_bidHPJKQXYHBKB', '_pid8923827127'),
(23, '_ridFU084IHGBT9', 'Michille Chavez', '09099971812', 'michillechavez@gmail.com', '14000', '2022-12-14', '_bidSX31PZJN98Y', '_pid8923827128'),
(20, '_ridFZKHKIW9HTD', 'Cardo Dalisay', '09324102413', 'cardodalisay@gmail.com', '14000', '2022-12-14', '_bid4VJC7HYGD6W', '_pid8923827128'),
(107, '_ridG3PHZ5IBW62', 'asdasd', '09327162382', 'asdasd@gmail.com', '8000', '2023-01-19', '_bidDC9JDKB6QRV', '_pid8923827126'),
(33, '_ridG6VJJXF3WHJ', 'Lea Mendoza ', '09651101421', 'leamendoza@gmail.com', '8000', '2022-12-14', '_bidUL7V6CUN3LK', '_pid8923827126'),
(102, '_ridGUC4Z4BYUMF', 'John Mark San Carlos', '09435635642', 'jonhmark@gmail.com', '14000', '2022-12-15', '_bid3Z6Z3OCZD33', '_pid8923827129'),
(53, '_ridHA42HB25DXV', 'Fidel Manalo', '09357124890', 'fidelmanalo@gmail.com', '24000', '2022-12-15', '_bidG3OO3L1Z7P6', '_pid8923827130'),
(11, '_ridHC5AE7KVKHD', 'Lenard Lacson ', '09198766812', 'lenardlacson@gmail.com', '14000', '2022-12-14', '_bidP7ORM9I05GG', '_pid8923827128'),
(19, '_ridHHZJ8690O75', 'Neil Halili', '09516789112', 'neilhalili@gmail.com', '14000', '2022-12-14', '_bidA762JUYVMOB', '_pid8923827128'),
(49, '_ridHR3C0MD4QV3', 'Many Estrera', '09519334333', 'manyestrera@gmail.com', '24000', '2022-12-15', '_bid6F7900S92EG', '_pid8923827130'),
(83, '_ridI1JKQOQTEW6', 'Jessa Dela Cruz', '09465432190', 'jessadelacruz@gmail.com', '8500', '2022-12-15', '_bid4TZBR4Y3U3F', '_pid8923827127'),
(101, '_ridI2PYMY238YG', 'Jose Ducay', '09435623469', 'joseducay@gmail.com', '14000', '2022-12-15', '_bid87AH0DLHSRW', '_pid8923827129'),
(40, '_ridIF1ZUGKWLEP', 'Charrie Pineda', '09321234121', 'charriepineda@gmail.com', '8000', '2022-12-14', '_bidLEO1J6FPLIG', '_pid8923827126'),
(29, '_ridIF9DJ789NYS', 'Mickey Rivera', '09129876541', 'mickeyrivera@gmail.com', '8000', '2022-12-14', '_bidN0AKFERHJ0P', '_pid8923827126'),
(56, '_ridILWGRNJCYRE', 'Peter Vicente', '09123456780', 'petervicente@gmail.com', '24000', '2022-12-15', '_bidQ226PYE6P0L', '_pid8923827130'),
(16, '_ridJ1WI9VQYZTW', 'Lexy Torres ', '09991789412', 'lexytorres@gmail.com', '14000', '2022-12-14', '_bid3UKESOU6JN1', '_pid8923827128'),
(10, '_ridJC8NP2BJVAY', 'Geoff Canoy', '09998765432', 'geoffcanoy@gmail.com', '14000', '2022-12-14', '_bid0FCJW3B7TAA', '_pid8923827128'),
(98, '_ridJPYKE7UZCOZ', 'Jasmine Saavedra', '09456923013', 'jasminesaavedra@gmail.com', '14000', '2022-12-15', '_bid50S8RD93KG3', '_pid8923827129'),
(105, '_ridKAWR4668MBE', 'John Lindon San Pablo', '09456732491', 'johnlindon@gmail.com', '14000', '2022-12-15', '_bidDU2R4XVNLTR', '_pid8923827129'),
(41, '_ridKF74FNLUQ93', 'Jade Luns', '09091123453', 'jadeluna@gmail.com', '8000', '2022-12-14', '_bidTKAQE8TLAFP', '_pid8923827126'),
(86, '_ridKX1T9AB12LL', 'Yuhan Faith Mondragon', '09482649235', 'yuhanfaith@gmail.com', '14000', '2022-12-15', '_bid47I5GGGMNQG', '_pid8923827129'),
(99, '_ridL07GF8E45NF', 'Jasmine Saavedra', '09456923013', 'jasminesaavedra@gmail.com', '14000', '2022-12-15', '_bidBV7TGB810MF', '_pid8923827129'),
(104, '_ridLIIU1YAQCSR', 'John Lindon San Pablo', '09456732491', 'johnlindon@gmail.com', '14000', '2022-12-15', '_bidP465RQFA55N', '_pid8923827129'),
(52, '_ridM5NUMH051ZH', 'Rossy Esguerra', '09232123123', 'rossyesguerra@gmail.com', '24000', '2022-12-15', '_bidCYD1VTETLTS', '_pid8923827130'),
(97, '_ridMFSO8HHK3PM', 'Myla Kate Marcos', '09583345629', 'mylakatemarcos@gmail.com', '14000', '2022-12-15', '_bidV6P1L42NAHE', '_pid8923827129'),
(54, '_ridN60OLQ9B1QC', 'Elvira Alvarez', '09351246124', 'elviraalvarez@gmail.com', '24000', '2022-12-15', '_bid2JCXH73AM64', '_pid8923827130'),
(32, '_ridNCW0YK1Z1DP', 'Arcie Legaspi', '09095816141', 'arcielegaspi@gmail.com', '8000', '2022-12-14', '_bidCB7ZR0E3LW4', '_pid8923827126'),
(43, '_ridNF5H4ZLMF2V', 'Elvie Delgado', '09465481948', 'elviedelgado@gmail.com', '24000', '2022-12-14', '_bidDKU8VWTAZJS', '_pid8923827130'),
(90, '_ridO55JQ87C9ME', 'Angelica  Mae Santiago', '09593465123', 'angelicamaesantiago@gmail.com', '14000', '2022-12-15', '_bidRQSIX03HBQZ', '_pid8923827129'),
(51, '_ridOMAHRNBH9LF', 'Winnie Gomez', '09468120182', 'winniegomez@gmail.com', '24000', '2022-12-15', '_bid7VRLBMSPQP4', '_pid8923827130'),
(24, '_ridOZ6P48VWASY', 'Marce Suarez', '09487514810', 'marcesuarez@gmail.com', '8000', '2022-12-14', '_bidYW98GCO8X32', '_pid8923827126'),
(35, '_ridP0FCTVBNWPG', 'Elle Guttierrez', '09412341013', 'elleguttierrez@gmail.com', '8000', '2022-12-14', '_bidIK0K8F0G9IJ', '_pid8923827126'),
(67, '_ridP358NXRL3KO', 'Jude Guzman', '09428910141', 'judeguzman@gmail.com', '8500', '2022-12-15', '_bidVVNYOT2ZJ7D', '_pid8923827127'),
(92, '_ridP3XB0PF6TP8', 'Ashley Sandoval', '09564783028', 'ashleysandoval@gmail.com', '14000', '2022-12-15', '_bidLY2MQS6NAGM', '_pid8923827129'),
(45, '_ridPRYE1XR1ZMQ', 'Eddie Abad', '09321818234', 'eddieabad@gmail.com', '24000', '2022-12-14', '_bidFC7F6FSMLT9', '_pid8923827130'),
(26, '_ridQGHMAER7V3J', 'Faith Cortez ', '09480112312', 'faithcortez@gmail.com', '8000', '2022-12-14', '_bid5FOIZD1XFNY', '_pid8923827126'),
(64, '_ridQI1Z7SGQSEB', 'Liezel Padilla', '09091123456', 'liezelpadilla@gmail.com', '8500', '2022-12-15', '_bidGVJO725BVVU', '_pid8923827127'),
(5, '_ridQUKNIRIIW2N', 'Relyn Singson ', '09512345678', 'relynsingson@gmail.com', '14000', '2022-12-14', '_bidGMS519O5LRV', '_pid8923827128'),
(80, '_ridQYGHSYT5XSK', 'Christy Marcos', '09991234231', 'christymarcos@gmail.com', '8500', '2022-12-15', '_bidR3JE00NULBD', '_pid8923827127'),
(73, '_ridRHX6SX566EZ', 'Shantall Mendez ', '09482390834', 'shantallmendez@gmail.com', '8500', '2022-12-15', '_bidDZ6Y0C5XY0O', '_pid8923827127'),
(38, '_ridRLF4XWDS92Y', 'Cathy Ignacio ', '09812401411', 'cathyignacio@gmail.com', '8000', '2022-12-14', '_bidCU63V40PWMB', '_pid8923827126'),
(91, '_ridRTIWCUAXZVA', 'Ashley Sandoval', '09564783028', 'ashleysandoval@gmail.com', '14000', '2022-12-15', '_bidED290NF9TV5', '_pid8923827129'),
(59, '_ridRYA27LKMHCL', 'Gracia Labrador', '09309876501', 'gracialabrador@gmail.com', '24000', '2022-12-15', '_bidOQD0JJ3Q050', '_pid8923827130'),
(21, '_ridSLXOGNLLFTK', 'Marian Abalos ', '09519432102', 'marianabalos@gmail.com', '14000', '2022-12-14', '_bidKSM560NPA9L', '_pid8923827128'),
(87, '_ridSX1URPT635J', 'Shane Andria Fajardo', '09575345609', 'shaneandria@gmail.com', '14000', '2022-12-15', '_bidWV0TE7S2R40', '_pid8923827129'),
(69, '_ridTWS42Z46X5H', 'Lyca Santillan', '09996789432', 'lycasantillan@gmail.com', '8500', '2022-12-15', '_bidSATLRWW6FGC', '_pid8923827127'),
(63, '_ridVUHV74SJMII', 'Trina Soriano', '09467124918', 'trinasoriano@gmail.com', '24000', '2022-12-15', '_bidOXWKO01WJEY', '_pid8923827130'),
(46, '_ridVW8R1Y92KI9', 'Jason Asuncion', '09479875412', 'jasonasuncion@gmail.com', '24000', '2022-12-14', '_bidTYAJRYI82NM', '_pid8923827130'),
(4, '_ridWHNQ23VNIYW', 'Jonathan Manansala', '09381928323', 'jonathanmanansala@gmail.com', '14000', '2022-12-14', '_bidIZFHPV0DEVM', '_pid8923827128'),
(88, '_ridWPDJJXWBGER', 'Shane Andria Fajardo', '09575345609', 'shaneandria@gmail.com', '14000', '2022-12-15', '_bidYSYMNXR82TI', '_pid8923827129'),
(93, '_ridX2EAJQUFORF', 'Lucas Lacson', '09543234580', 'lucaslacson@gmail.com', '14000', '2022-12-15', '_bidU2OFO30C4X4', '_pid8923827129'),
(36, '_ridXTIUKKLAXE9', 'Randy Guzman', '09195121018', 'randyguzman@gmail.com', '8000', '2022-12-14', '_bid69LTY0AB8GV', '_pid8923827126'),
(106, '_ridY1XJXT4X154', 'asdas', '09327162382', 'asdasd@gmail.com', '2500', '2023-01-19', '_bidTV0GQHOWMMK', '_pid8923827124'),
(17, '_ridYE0SQK25XPH', 'Anna Capili', '09484143211', 'annacapili@gmail.com', '14000', '2022-12-14', '_bidL07N6H10LEO', '_pid8923827128'),
(79, '_ridYJ519G2319U', 'Susan Garcia', '09126734212', 'susangarcia@gmail.com', '8500', '2022-12-15', '_bidP3BFTW3NCX2', '_pid8923827127'),
(12, '_ridYX0OHQVMIMW', 'Rowel Mendoza ', '09187812340', 'rowelmendoza@gmail.com', '14000', '2022-12-14', '_bidD49QTEXO33E', '_pid8923827128'),
(14, '_ridYZDXAJT4NA0', 'Angelyn Santos', '09465193341', 'angelynsantos@gmail.com', '14000', '2022-12-14', '_bidZ65P8DOO156', '_pid8923827128'),
(9, '_ridZNO2IRF6WDC', 'Chrissel Manalo', '09412445671', 'chrisselmanalo@gmail.com', '14000', '2022-12-14', '_bidMR963WGCQLM', '_pid8923827128'),
(13, '_ridZSM33WEVE18', 'Rodel Tolentino', '09099123453', 'rodeltolentino@gmail.com', '14000', '2022-12-14', '_bid16QN7QUQKXA', '_pid8923827128'),
(84, '_ridZUWK7FVCHAN', 'Carissa Alcantara', '09126784509', 'carissaalcantara@gmail.com', '8500', '2022-12-15', '_bidOX6HU0AUWWE', '_pid8923827127');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `reference` varchar(15) NOT NULL,
  `price` varchar(25) NOT NULL,
  `product` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`_id`, `name`, `reference`, `price`, `product`, `date`) VALUES
(1, 'Martha Galang', '#EPF03MIKX9FNTE', '₱ 500', 'Bone Chamber', '2023-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_locations`
--

CREATE TABLE `tbl_locations` (
  `_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `section` varchar(25) NOT NULL,
  `grave_number` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_locations`
--

INSERT INTO `tbl_locations` (`_id`, `name`, `section`, `grave_number`) VALUES
(2, 'Bone Chamber', 'F', '5001'),
(3, 'Bone Chamber', 'F', '5001'),
(4, 'Bone Chamber', 'F', '5001'),
(5, 'Bone Chamber', 'F', '5002'),
(6, 'Bone Chamber', 'F', '5002'),
(7, 'Old Tri-Level', 'B', '5001'),
(8, 'Old Tri-Level', 'B', '5002'),
(9, 'Old Tri-Level', 'B', '5003'),
(10, 'Old Tri-Level', 'B', '5004'),
(11, 'Old Tri-Level', 'B', '5005'),
(12, 'Old Tri-Level', 'B', '5006'),
(13, 'Old Tri-Level', 'B', '5007'),
(14, 'Old Tri-Level', 'B', '5008'),
(15, 'Old Tri-Level', 'B', '5009'),
(16, 'Old Tri-Level', 'B', '5010'),
(17, 'Old Tri-Level', 'B', '5011'),
(18, 'Old Tri-Level', 'B', '5012'),
(19, 'Old Tri-Level', 'B', '5013'),
(20, 'Old Tri-Level', 'B', '5014'),
(21, 'Old Tri-Level', 'B', '5015'),
(22, 'Old Tri-Level', 'B', '5016'),
(23, 'Old Tri-Level', 'B', '5017'),
(24, 'Old Tri-Level', 'B', '5018'),
(25, 'Old Tri-Level', 'B', '5019'),
(26, 'Old Tri-Level', 'B', '5020'),
(27, 'Old Tri-Level with bones', 'C', '5001'),
(28, 'Old Tri-Level with bones', 'C', '5001'),
(29, 'Old Tri-Level with bones', 'C', '5002'),
(30, 'Old Tri-Level with bones', 'C', '5002'),
(31, 'Old Tri-Level with bones', 'C', '5003'),
(32, 'Old Tri-Level with bones', 'C', '5003'),
(33, 'Old Tri-Level with bones', 'C', '5004'),
(34, 'Old Tri-Level with bones', 'C', '5004'),
(35, 'Old Tri-Level with bones', 'C', '5005'),
(36, 'Old Tri-Level with bones', 'C', '5005'),
(37, 'Old Tri-Level with bones', 'C', '5006'),
(38, 'Old Tri-Level with bones', 'C', '5006'),
(39, 'Old Tri-Level with bones', 'C', '5007'),
(40, 'Old Tri-Level with bones', 'C', '5007'),
(41, 'Old Tri-Level with bones', 'C', '5008'),
(42, 'Old Tri-Level with bones', 'C', '5008'),
(43, 'Old Tri-Level with bones', 'C', '5009'),
(44, 'Old Tri-Level with bones', 'C', '5009'),
(45, 'Old Tri-Level with bones', 'C', '5010'),
(46, 'Old Tri-Level with bones', 'C', '5010'),
(47, 'Old Tri-Level with bones', 'C', '5011'),
(48, 'Old Tri-Level with bones', 'C', '5011'),
(49, 'Old Tri-Level with bones', 'C', '5012'),
(50, 'Old Tri-Level with bones', 'C', '5012'),
(51, 'Old Tri-Level with bones', 'C', '5013'),
(52, 'Old Tri-Level with bones', 'C', '5013'),
(53, 'Old Tri-Level with bones', 'C', '5014'),
(54, 'Old Tri-Level with bones', 'C', '5014'),
(55, 'Old Tri-Level with bones', 'C', '5015'),
(56, 'Old Tri-Level with bones', 'C', '5015'),
(57, 'Old Tri-Level with bones', 'C', '5016'),
(58, 'Bone Chamber', 'C', '5016'),
(59, 'Bone Chamber', 'C', '5017'),
(60, 'Old Tri-Level with bones', 'C', '5017'),
(61, 'Old Tri-Level with bones', 'C', '5018'),
(62, 'Old Tri-Level with bones', 'C', '5018'),
(63, 'Old Tri-Level with bones', 'C', '5019'),
(64, 'Old Tri-Level with bones', 'C', '5019'),
(65, 'Old Tri-Level with bones', 'C', '5020'),
(66, 'Old Tri-Level with bones', 'C', '5020'),
(67, 'New Tri-Level', 'A', '5001'),
(68, 'New Tri-Level', 'A', '5002'),
(69, 'New Tri-Level', 'A', '5003'),
(70, 'New Tri-Level', 'A', '5004'),
(71, 'New Tri-Level', 'A', '5005'),
(72, 'New Tri-Level', 'A', '5006'),
(73, 'New Tri-Level', 'A', '5007'),
(74, 'New Tri-Level', 'A', '5008'),
(75, 'New Tri-Level', 'A', '5009'),
(76, 'New Tri-Level', 'A', '5010'),
(77, 'New Tri-Level', 'A', '5011'),
(78, 'New Tri-Level', 'A', '5012'),
(79, 'New Tri-Level', 'A', '5013'),
(80, 'New Tri-Level', 'A', '5014'),
(81, 'New Tri-Level', 'A', '5015'),
(82, 'New Tri-Level', 'A', '5016'),
(83, 'New Tri-Level', 'A', '5017'),
(84, 'New Tri-Level', 'A', '5018'),
(85, 'New Tri-Level', 'A', '5019'),
(86, 'New Tri-Level', 'A', '5020'),
(87, 'Patong Solo-Niche', 'D', '5001'),
(88, 'Patong Solo-Niche', 'D', '6001'),
(89, 'Patong Solo-Niche', 'D', '5002'),
(90, 'Patong Solo-Niche', 'D', '6002'),
(91, 'Patong Solo-Niche', 'D', '5003'),
(92, 'Patong Solo-Niche', 'D', '6003'),
(93, 'Patong Solo-Niche', 'D', '5004'),
(94, 'Patong Solo-Niche', 'D', '6004'),
(95, 'Patong Solo-Niche', 'D', '5005'),
(96, 'Patong Solo-Niche', 'D', '6005'),
(97, 'Patong Solo-Niche', 'D', '5006'),
(98, 'Patong Solo-Niche', 'D', '6006'),
(99, 'Patong Solo-Niche', 'D', '5007'),
(100, 'Patong Solo-Niche', 'D', '6007'),
(101, 'Patong Solo-Niche', 'D', '5008'),
(102, 'Patong Solo-Niche', 'D', '6008'),
(103, 'Patong Solo-Niche', 'D', '5009'),
(104, 'Patong Solo-Niche', 'D', '6009'),
(105, 'Patong Solo-Niche', 'D', '5010'),
(106, 'Patong Solo-Niche', 'D', '6010'),
(107, 'Patong Solo-Niche', 'D', '5011'),
(108, 'Patong Solo-Niche', 'D', '6011'),
(109, 'Patong Solo-Niche', 'D', '5012'),
(110, 'Patong Solo-Niche', 'D', '6012'),
(111, 'Patong Solo-Niche', 'D', '5013'),
(112, 'Patong Solo-Niche', 'D', '6013'),
(113, 'Patong Solo-Niche', 'D', '5014'),
(114, 'Patong Solo-Niche', 'D', '6014'),
(115, 'Patong Solo-Niche', 'D', '5015'),
(116, 'Patong Solo-Niche', 'D', '6015'),
(117, 'Patong Solo-Niche', 'D', '5016'),
(118, 'Patong Solo-Niche', 'D', '6016'),
(119, 'Patong Solo-Niche', 'D', '5017'),
(120, 'Patong Solo-Niche', 'D', '6017'),
(121, 'Patong Solo-Niche', 'D', '5018'),
(122, 'Patong Solo-Niche', 'D', '6018'),
(123, 'Patong Solo-Niche', 'D', '5019'),
(124, 'Patong Solo-Niche', 'D', '6019'),
(125, 'Patong Solo-Niche', 'D', '5020'),
(126, 'Patong Solo-Niche', 'D', '6020'),
(127, 'Solo Niche', 'E', '5001'),
(128, 'Solo Niche', 'E', '5002'),
(129, 'Solo Niche', 'E', '5003'),
(130, 'Solo Niche', 'E', '5004'),
(131, 'Solo Niche', 'E', '5005'),
(132, 'Solo Niche', 'E', '5006'),
(133, 'Solo Niche', 'E', '5007'),
(134, 'Solo Niche', 'E', '5008'),
(135, 'Solo Niche', 'E', '5009'),
(136, 'Solo Niche', 'E', '5010'),
(137, 'Solo Niche', 'E', '5011'),
(138, 'Solo Niche', 'E', '5012'),
(139, 'Solo Niche', 'E', '5013'),
(140, 'Solo Niche', 'E', '5014'),
(141, 'Solo Niche', 'E', '5015'),
(142, 'Solo Niche', 'E', '5016'),
(143, 'Solo Niche', 'E', '5017'),
(144, 'Solo Niche', 'E', '5018'),
(145, 'Solo Niche', 'E', '5019'),
(146, 'Solo Niche', 'E', '5020');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_packages`
--

CREATE TABLE `tbl_packages` (
  `_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `slog` varchar(50) NOT NULL,
  `unitprice` varchar(10) NOT NULL,
  `yearly` varchar(10) NOT NULL,
  `package_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_packages`
--

INSERT INTO `tbl_packages` (`_id`, `name`, `slog`, `unitprice`, `yearly`, `package_id`) VALUES
(1, 'Bone Chamber', 'bone-chamber', '2500', '500', '_pid8923827124'),
(2, 'Old Tri-Level', 'old-tri-level', '8000', '1700', '_pid8923827126'),
(3, 'Old Tri-Level with bones', 'old-tri-level-w-bones', '8500', '1700', '_pid8923827127'),
(4, 'New Tri-Level', 'new-tri-level', '14000', '1700', '_pid8923827128'),
(5, 'Patong Solo-Niche', 'patong-solo-niche', '14000', '1700', '_pid8923827129'),
(6, 'Solo Niche', 'solo-niche', '24000', '1700', '_pid8923827130');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payments`
--

CREATE TABLE `tbl_payments` (
  `_id` int(11) NOT NULL,
  `record_id` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `niche_payment` varchar(10) NOT NULL,
  `billing_id` varchar(15) NOT NULL,
  `package_id` varchar(15) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_payments`
--

INSERT INTO `tbl_payments` (`_id`, `record_id`, `status`, `niche_payment`, `billing_id`, `package_id`, `date_created`) VALUES
(15, '_rid0H252GV0VA4', 'Paid', '14000', '_bidO76XGON1F2I', '_pid8923827128', '2022-01-20'),
(55, '_rid1367NPXV4VZ', 'Paid', '24000', '_bid5UMX29C87LW', '_pid8923827130', '2022-01-21'),
(65, '_rid1ZJXD57TZQA', 'Paid', '8500', '_bidG05X7JPD20U', '_pid8923827127', '2022-01-22'),
(3, '_rid21CEHTZPTX3', 'Paid', '8000', '_bidAMWBKK8CW3V', '_pid8923827126', '2022-01-23'),
(85, '_rid2228L07FA1C', 'Paid', '14000', '_bidHX3V3J42I32', '_pid8923827129', '2022-01-24'),
(31, '_rid2MB8IB4QIA3', 'Paid', '8000', '_bidSMSK5DT8HDU', '_pid8923827126', '2022-01-25'),
(103, '_rid2X7ZSEEU3X7', 'Paid', '14000', '_bidVJZ6W618JXG', '_pid8923827129', '2022-01-26'),
(78, '_rid2XC6TY7CUG0', 'Paid', '8500', '_bidQRLN0OTKSAG', '_pid8923827127', '2022-01-27'),
(8, '_rid32DP2CM31IK', 'Paid', '14000', '_bidS76L9T73G12', '_pid8923827128', '2022-01-28'),
(68, '_rid35B38WE98WJ', 'Paid', '8500', '_bid9QRKAJBF3LC', '_pid8923827127', '2022-01-29'),
(71, '_rid39R30P7D47T', 'Paid', '8500', '_bidWMA6C66D6ZD', '_pid8923827127', '2022-01-30'),
(94, '_rid4LW7OIZICZC', 'Paid', '14000', '_bidSZTLTJXDEIQ', '_pid8923827129', '2022-01-31'),
(81, '_rid4M5MDROPH3F', 'Paid', '8500', '_bidBAN7RVB8AFG', '_pid8923827127', '2022-02-01'),
(75, '_rid51O0R5KRS6J', 'Paid', '8500', '_bidNSWBEV7KZSN', '_pid8923827127', '2022-02-02'),
(74, '_rid54K1896JEFM', 'Paid', '8500', '_bid9CDHBLLQS4C', '_pid8923827127', '2022-02-03'),
(25, '_rid574TI7AIFE6', 'Paid', '2500', '_bidL88I94XEK4P', '_pid8923827124', '2022-02-04'),
(22, '_rid5AU5L1STDAU', 'Paid', '14000', '_bidKZ6JOYQ3FFP', '_pid8923827128', '2022-02-05'),
(60, '_rid5VGW7X9P8J0', 'Paid', '24000', '_bid8IEMKS2G4JZ', '_pid8923827130', '2022-02-06'),
(96, '_rid6PS13GNSSQ8', 'Paid', '14000', '_bidHDRAXUUKQLH', '_pid8923827129', '2022-02-07'),
(82, '_rid6Y50H0FIB7C', 'Paid', '8500', '_bidE2VLO8IVSUC', '_pid8923827127', '2022-02-08'),
(50, '_rid6ZTB8PHE8RG', 'Paid', '24000', '_bidDSESGGPN87L', '_pid8923827130', '2022-02-09'),
(100, '_rid7E9HSG8S6OQ', 'Paid', '14000', '_bidTUM2H2K2B9S', '_pid8923827129', '2022-02-10'),
(6, '_rid7FK6JGBY6E7', 'Paid', '14000', '_bid2E5RRB1ZQD8', '_pid8923827128', '2022-02-11'),
(37, '_rid7QBPX9VH6YY', 'Paid', '8000', '_bid6E68X7OZ5IS', '_pid8923827126', '2022-02-12'),
(89, '_rid7UFAT1AB94B', 'Paid', '14000', '_bidCC4W3U36JFJ', '_pid8923827129', '2022-02-13'),
(48, '_rid83P3HE0ZO4P', 'Paid', '24000', '_bidXC9C3VQHU6E', '_pid8923827130', '2022-02-14'),
(72, '_rid84GAKP3RMQA', 'Paid', '8500', '_bidAKC37V2OOSS', '_pid8923827127', '2022-02-15'),
(62, '_rid85F8ZDP86YL', 'Paid', '24000', '_bidNZ37QWDQBAY', '_pid8923827130', '2022-02-16'),
(27, '_rid85Q6FIAIJIF', 'Paid', '8000', '_bidZKCZ81MO3JW', '_pid8923827126', '2022-02-17'),
(28, '_rid87XPPVSZM8K', 'Paid', '8000', '_bid00FCDEQ5JZ3', '_pid8923827126', '2022-02-18'),
(39, '_rid9ZFEGWIMAHF', 'Paid', '8000', '_bidS43EQ3TPH0K', '_pid8923827126', '2022-02-19'),
(18, '_ridATHE60EAWPV', 'Paid', '14000', '_bid3XLJZ7GK9UN', '_pid8923827128', '2022-02-20'),
(34, '_ridBD0DUQFE083', 'Paid', '8000', '_bidRFGPO4HES6H', '_pid8923827126', '2022-02-21'),
(57, '_ridC6U6EEZL10O', 'Paid', '24000', '_bidAVYCSA4A6W8', '_pid8923827130', '2022-02-22'),
(7, '_ridCCHQX2FMZC4', 'Paid', '14000', '_bid42E6PUW2XLB', '_pid8923827128', '2022-02-23'),
(47, '_ridCCIWGERCTQM', 'Paid', '24000', '_bidMOZHG52QVP6', '_pid8923827130', '2022-02-24'),
(61, '_ridD6NS09EKCPA', 'Paid', '24000', '_bid1PV15VJMK08', '_pid8923827130', '2022-02-25'),
(58, '_ridDEAAP9JSKBV', 'Paid', '24000', '_bidGMLMV5F8TLU', '_pid8923827130', '2022-02-26'),
(30, '_ridDJEUE15REKT', 'Paid', '8000', '_bid12G2CDT90SG', '_pid8923827126', '2022-02-27'),
(76, '_ridEL81QEFGZUM', 'Paid', '8500', '_bidUOHJIQPHJKX', '_pid8923827127', '2022-02-28'),
(66, '_ridF4S41LQXAR3', 'Paid', '8500', '_bidC6GWDLJ2PI2', '_pid8923827127', '2022-03-01'),
(42, '_ridFEEGV1Y7QBC', 'Paid', '8000', '_bidL8EGQRACUL2', '_pid8923827126', '2022-03-02'),
(70, '_ridFOHZFRQPONI', 'Paid', '8500', '_bidHPJKQXYHBKB', '_pid8923827127', '2022-03-03'),
(23, '_ridFU084IHGBT9', 'Paid', '14000', '_bidSX31PZJN98Y', '_pid8923827128', '2022-03-04'),
(20, '_ridFZKHKIW9HTD', 'Paid', '14000', '_bid4VJC7HYGD6W', '_pid8923827128', '2022-03-05'),
(106, '_ridG3PHZ5IBW62', 'Paid', '8000', '_bidDC9JDKB6QRV', '_pid8923827126', '2022-03-06'),
(33, '_ridG6VJJXF3WHJ', 'Paid', '8000', '_bidUL7V6CUN3LK', '_pid8923827126', '2022-03-07'),
(102, '_ridGUC4Z4BYUMF', 'Paid', '14000', '_bid3Z6Z3OCZD33', '_pid8923827129', '2022-03-08'),
(53, '_ridHA42HB25DXV', 'Paid', '24000', '_bidG3OO3L1Z7P6', '_pid8923827130', '2022-03-09'),
(11, '_ridHC5AE7KVKHD', 'Paid', '14000', '_bidP7ORM9I05GG', '_pid8923827128', '2022-03-10'),
(19, '_ridHHZJ8690O75', 'Paid', '14000', '_bidA762JUYVMOB', '_pid8923827128', '2022-03-11'),
(49, '_ridHR3C0MD4QV3', 'Paid', '24000', '_bid6F7900S92EG', '_pid8923827130', '2022-03-12'),
(83, '_ridI1JKQOQTEW6', 'Paid', '8500', '_bid4TZBR4Y3U3F', '_pid8923827127', '2022-03-13'),
(101, '_ridI2PYMY238YG', 'Paid', '14000', '_bid87AH0DLHSRW', '_pid8923827129', '2022-03-14'),
(40, '_ridIF1ZUGKWLEP', 'Paid', '8000', '_bidLEO1J6FPLIG', '_pid8923827126', '2022-03-15'),
(29, '_ridIF9DJ789NYS', 'Paid', '8000', '_bidN0AKFERHJ0P', '_pid8923827126', '2022-03-16'),
(56, '_ridILWGRNJCYRE', 'Paid', '24000', '_bidQ226PYE6P0L', '_pid8923827130', '2022-03-17'),
(16, '_ridJ1WI9VQYZTW', 'Paid', '14000', '_bid3UKESOU6JN1', '_pid8923827128', '2022-03-18'),
(10, '_ridJC8NP2BJVAY', 'Paid', '14000', '_bid0FCJW3B7TAA', '_pid8923827128', '2022-03-19'),
(98, '_ridJPYKE7UZCOZ', 'Paid', '14000', '_bid50S8RD93KG3', '_pid8923827129', '2022-03-20'),
(105, '_ridKAWR4668MBE', 'Paid', '14000', '_bidDU2R4XVNLTR', '_pid8923827129', '2022-03-21'),
(41, '_ridKF74FNLUQ93', 'Paid', '8000', '_bidTKAQE8TLAFP', '_pid8923827126', '2022-03-22'),
(86, '_ridKX1T9AB12LL', 'Paid', '14000', '_bid47I5GGGMNQG', '_pid8923827129', '2022-03-23'),
(99, '_ridL07GF8E45NF', 'Paid', '14000', '_bidBV7TGB810MF', '_pid8923827129', '2022-03-24'),
(104, '_ridLIIU1YAQCSR', 'Paid', '14000', '_bidP465RQFA55N', '_pid8923827129', '2022-03-25'),
(52, '_ridM5NUMH051ZH', 'Paid', '24000', '_bidCYD1VTETLTS', '_pid8923827130', '2022-03-26'),
(97, '_ridMFSO8HHK3PM', 'Paid', '14000', '_bidV6P1L42NAHE', '_pid8923827129', '2022-03-27'),
(54, '_ridN60OLQ9B1QC', 'Paid', '24000', '_bid2JCXH73AM64', '_pid8923827130', '2022-03-28'),
(32, '_ridNCW0YK1Z1DP', 'Paid', '8000', '_bidCB7ZR0E3LW4', '_pid8923827126', '2022-03-29'),
(43, '_ridNF5H4ZLMF2V', 'Paid', '24000', '_bidDKU8VWTAZJS', '_pid8923827130', '2022-03-30'),
(90, '_ridO55JQ87C9ME', 'Paid', '14000', '_bidRQSIX03HBQZ', '_pid8923827129', '2022-03-31'),
(51, '_ridOMAHRNBH9LF', 'Paid', '24000', '_bid7VRLBMSPQP4', '_pid8923827130', '2022-04-01'),
(24, '_ridOZ6P48VWASY', 'Paid', '8000', '_bidYW98GCO8X32', '_pid8923827126', '2022-04-02'),
(35, '_ridP0FCTVBNWPG', 'Paid', '8000', '_bidIK0K8F0G9IJ', '_pid8923827126', '2022-04-03'),
(67, '_ridP358NXRL3KO', 'Paid', '8500', '_bidVVNYOT2ZJ7D', '_pid8923827127', '2022-04-04'),
(92, '_ridP3XB0PF6TP8', 'Paid', '14000', '_bidLY2MQS6NAGM', '_pid8923827129', '2022-04-05'),
(45, '_ridPRYE1XR1ZMQ', 'Paid', '24000', '_bidFC7F6FSMLT9', '_pid8923827130', '2022-04-06'),
(26, '_ridQGHMAER7V3J', 'Paid', '8000', '_bid5FOIZD1XFNY', '_pid8923827126', '2022-04-07'),
(64, '_ridQI1Z7SGQSEB', 'Paid', '8500', '_bidGVJO725BVVU', '_pid8923827127', '2022-04-08'),
(5, '_ridQUKNIRIIW2N', 'Paid', '14000', '_bidGMS519O5LRV', '_pid8923827128', '2022-04-09'),
(80, '_ridQYGHSYT5XSK', 'Paid', '8500', '_bidR3JE00NULBD', '_pid8923827127', '2022-04-10'),
(73, '_ridRHX6SX566EZ', 'Paid', '8500', '_bidDZ6Y0C5XY0O', '_pid8923827127', '2022-04-11'),
(38, '_ridRLF4XWDS92Y', 'Paid', '8000', '_bidCU63V40PWMB', '_pid8923827126', '2022-04-12'),
(91, '_ridRTIWCUAXZVA', 'Paid', '14000', '_bidED290NF9TV5', '_pid8923827129', '2022-04-13'),
(59, '_ridRYA27LKMHCL', 'Paid', '24000', '_bidOQD0JJ3Q050', '_pid8923827130', '2022-04-14'),
(21, '_ridSLXOGNLLFTK', 'Paid', '14000', '_bidKSM560NPA9L', '_pid8923827128', '2022-04-15'),
(87, '_ridSX1URPT635J', 'Paid', '14000', '_bidWV0TE7S2R40', '_pid8923827129', '2022-04-16'),
(69, '_ridTWS42Z46X5H', 'Paid', '8500', '_bidSATLRWW6FGC', '_pid8923827127', '2022-04-17'),
(63, '_ridVUHV74SJMII', 'Paid', '24000', '_bidOXWKO01WJEY', '_pid8923827130', '2022-04-18'),
(46, '_ridVW8R1Y92KI9', 'Paid', '24000', '_bidTYAJRYI82NM', '_pid8923827130', '2022-04-19'),
(4, '_ridWHNQ23VNIYW', 'Paid', '14000', '_bidIZFHPV0DEVM', '_pid8923827128', '2022-04-20'),
(88, '_ridWPDJJXWBGER', 'Paid', '14000', '_bidYSYMNXR82TI', '_pid8923827129', '2022-04-21'),
(93, '_ridX2EAJQUFORF', 'Paid', '14000', '_bidU2OFO30C4X4', '_pid8923827129', '2022-04-22'),
(36, '_ridXTIUKKLAXE9', 'Paid', '8000', '_bid69LTY0AB8GV', '_pid8923827126', '2022-04-23'),
(17, '_ridYE0SQK25XPH', 'Paid', '14000', '_bidL07N6H10LEO', '_pid8923827128', '2022-04-24'),
(79, '_ridYJ519G2319U', 'Paid', '8500', '_bidP3BFTW3NCX2', '_pid8923827127', '2022-04-25'),
(12, '_ridYX0OHQVMIMW', 'Paid', '14000', '_bidD49QTEXO33E', '_pid8923827128', '2022-04-26'),
(14, '_ridYZDXAJT4NA0', 'Paid', '14000', '_bidZ65P8DOO156', '_pid8923827128', '2022-04-27'),
(9, '_ridZNO2IRF6WDC', 'Paid', '14000', '_bidMR963WGCQLM', '_pid8923827128', '2022-04-28'),
(13, '_ridZSM33WEVE18', 'Paid', '14000', '_bid16QN7QUQKXA', '_pid8923827128', '2022-04-29'),
(84, '_ridZUWK7FVCHAN', 'Paid', '8500', '_bidOX6HU0AUWWE', '_pid8923827127', '2022-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_records`
--

CREATE TABLE `tbl_records` (
  `_id` int(11) NOT NULL,
  `record_id` varchar(15) NOT NULL,
  `expiration` date NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `grave_section` varchar(15) NOT NULL,
  `born` date NOT NULL,
  `died` date NOT NULL,
  `burial` date NOT NULL,
  `date_transfer` date DEFAULT NULL,
  `billing_id` varchar(15) NOT NULL,
  `pkg_id` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_records`
--

INSERT INTO `tbl_records` (`_id`, `record_id`, `expiration`, `fullname`, `grave_section`, `born`, `died`, `burial`, `date_transfer`, `billing_id`, `pkg_id`, `status`) VALUES
(15, '_rid0H252GV0VA4', '2029-12-14', 'Meriam Garcia', 'A - 5012', '1992-05-18', '2022-09-09', '2022-09-12', NULL, '_bidO76XGON1F2I', '_pid8923827128', 'default'),
(55, '_rid1367NPXV4VZ', '2029-12-15', 'Chessy Dominggo', 'E - 5012', '1995-12-12', '2017-01-02', '2017-01-07', NULL, '_bid5UMX29C87LW', '_pid8923827130', 'default'),
(65, '_rid1ZJXD57TZQA', '2029-12-15', 'Lourdes Padilla', 'C - 5001', '1948-11-20', '2004-10-04', '2004-10-09', NULL, '_bidG05X7JPD20U', '_pid8923827127', 'default'),
(3, '_rid21CEHTZPTX3', '2029-12-14', 'Michael Galang', 'B - 5001', '1992-08-21', '2021-10-02', '2021-10-08', NULL, '_bidAMWBKK8CW3V', '_pid8923827126', 'default'),
(85, '_rid2228L07FA1C', '2029-12-15', 'Samantha Kate Mondragon', 'D - 5001', '1999-02-27', '2020-05-24', '2020-05-29', NULL, '_bidHX3V3J42I32', '_pid8923827129', 'default'),
(31, '_rid2MB8IB4QIA3', '2029-12-14', 'Risty Madrid ', 'B - 5009', '1997-09-05', '2016-04-21', '2016-04-28', NULL, '_bidSMSK5DT8HDU', '_pid8923827126', 'default'),
(103, '_rid2X7ZSEEU3X7', '2029-12-15', 'John Luis San Carlos', 'D - 6009', '1951-10-12', '2005-08-13', '2005-08-18', NULL, '_bidVJZ6W618JXG', '_pid8923827129', 'default'),
(78, '_rid2XC6TY7CUG0', '2029-12-15', 'Wendell  Garcia', 'C - 5008', '1956-05-13', '2021-06-24', '2021-06-26', NULL, '_bidQRLN0OTKSAG', '_pid8923827127', 'default'),
(8, '_rid32DP2CM31IK', '2029-12-14', 'Almira Lagman', 'A - 5005', '1961-08-08', '2022-07-20', '2022-07-24', NULL, '_bidS76L9T73G12', '_pid8923827128', 'default'),
(68, '_rid35B38WE98WJ', '2029-12-15', 'Aaron Santillan', 'C - 5003', '2001-11-26', '2022-12-14', '2022-12-19', NULL, '_bid9QRKAJBF3LC', '_pid8923827127', 'default'),
(71, '_rid39R30P7D47T', '2029-12-15', 'Anastacio Santos', 'C - 5004', '1924-03-23', '2001-02-09', '2001-02-14', NULL, '_bidWMA6C66D6ZD', '_pid8923827127', 'default'),
(94, '_rid4LW7OIZICZC', '2029-12-15', 'Mark John Lacson', 'D - 6005', '2000-10-05', '2021-09-21', '2021-09-26', NULL, '_bidSZTLTJXDEIQ', '_pid8923827129', 'default'),
(81, '_rid4M5MDROPH3F', '2029-12-15', 'Elisa Marcos', 'C - 5009', '1952-09-12', '2014-02-26', '2014-02-28', NULL, '_bidBAN7RVB8AFG', '_pid8923827127', 'default'),
(75, '_rid51O0R5KRS6J', '2029-12-15', 'Mia Del Rosario', 'C - 5006', '1991-03-21', '2013-10-21', '2013-10-23', NULL, '_bidNSWBEV7KZSN', '_pid8923827127', 'default'),
(74, '_rid54K1896JEFM', '2029-12-15', 'Melissa Del Rosario', 'C - 5006', '1958-10-07', '2020-08-04', '2020-08-06', NULL, '_bid9CDHBLLQS4C', '_pid8923827127', 'default'),
(25, '_rid574TI7AIFE6', '2029-12-14', 'Jimmy Pascual ', 'F - 5001', '1980-04-21', '2016-03-24', '2016-03-30', '2022-12-15', '_bidL88I94XEK4P', '_pid8923827124', 'default'),
(22, '_rid5AU5L1STDAU', '2029-12-14', 'Junie Bacolod', 'A - 5019', '1985-06-21', '2022-10-21', '2022-10-26', NULL, '_bidKZ6JOYQ3FFP', '_pid8923827128', 'default'),
(60, '_rid5VGW7X9P8J0', '2029-12-15', 'Marcelo Velasco', 'E - 5017', '1993-12-17', '2022-12-07', '2022-12-12', NULL, '_bid8IEMKS2G4JZ', '_pid8923827130', 'default'),
(96, '_rid6PS13GNSSQ8', '2029-12-15', 'Francheska Marcos', 'D - 5006', '2001-10-04', '2020-09-10', '2020-09-15', NULL, '_bidHDRAXUUKQLH', '_pid8923827129', 'default'),
(82, '_rid6Y50H0FIB7C', '2029-12-15', 'June Dela Cruz', 'C - 5010', '1984-04-21', '2022-06-04', '2022-06-06', NULL, '_bidE2VLO8IVSUC', '_pid8923827127', 'default'),
(50, '_rid6ZTB8PHE8RG', '2029-12-15', 'Kristel Reyes', 'E - 5007', '1980-11-20', '2017-04-05', '2017-04-11', NULL, '_bidDSESGGPN87L', '_pid8923827130', 'default'),
(100, '_rid7E9HSG8S6OQ', '2029-12-15', 'Jeremy Ducay ', 'D - 5008', '1993-10-23', '2017-06-16', '2017-06-22', NULL, '_bidTUM2H2K2B9S', '_pid8923827129', 'default'),
(6, '_rid7FK6JGBY6E7', '2029-12-14', 'Rodel Pangilinan', 'A - 5003', '1949-04-07', '2022-06-21', '2022-06-28', NULL, '_bid2E5RRB1ZQD8', '_pid8923827128', 'default'),
(37, '_rid7QBPX9VH6YY', '2029-12-14', 'Robin Ocampo', 'B - 5015', '1991-04-18', '2017-04-21', '2017-04-27', NULL, '_bid6E68X7OZ5IS', '_pid8923827126', 'default'),
(89, '_rid7UFAT1AB94B', '2029-12-15', 'Paul Angelo Santiago', 'D - 5003', '2000-08-23', '2021-11-15', '2021-11-20', NULL, '_bidCC4W3U36JFJ', '_pid8923827129', 'default'),
(48, '_rid83P3HE0ZO4P', '2029-12-15', 'Andy Umali', 'E - 5005', '1951-04-21', '2016-03-20', '2016-03-25', NULL, '_bidXC9C3VQHU6E', '_pid8923827130', 'default'),
(72, '_rid84GAKP3RMQA', '2029-12-15', 'Shanel Mendez', 'C - 5005', '2000-04-25', '2020-09-15', '2020-09-20', NULL, '_bidAKC37V2OOSS', '_pid8923827127', 'default'),
(62, '_rid85F8ZDP86YL', '2029-12-15', 'Lindy Guevarra', 'E - 5019', '1998-09-05', '2017-01-05', '2017-01-10', NULL, '_bidNZ37QWDQBAY', '_pid8923827130', 'default'),
(27, '_rid85Q6FIAIJIF', '2029-12-14', 'Keith Morales ', 'B - 5005', '1995-12-02', '2016-06-02', '2016-06-08', NULL, '_bidZKCZ81MO3JW', '_pid8923827126', 'default'),
(28, '_rid87XPPVSZM8K', '2029-12-14', 'Lovely Romero', 'B - 5006', '1983-02-22', '2016-07-21', '2016-07-30', NULL, '_bid00FCDEQ5JZ3', '_pid8923827126', 'default'),
(39, '_rid9ZFEGWIMAHF', '2029-12-14', 'Ana Mae Fajardo', 'B - 5017', '1950-09-18', '2016-06-18', '2016-06-23', NULL, '_bidS43EQ3TPH0K', '_pid8923827126', 'default'),
(18, '_ridATHE60EAWPV', '2029-12-14', 'Nikki Bautista ', 'A - 5015', '2000-08-15', '2022-09-15', '2022-09-21', NULL, '_bid3XLJZ7GK9UN', '_pid8923827128', 'default'),
(34, '_ridBD0DUQFE083', '2029-12-14', 'Sandra Aquino', 'B - 5012', '1949-09-01', '2016-01-30', '2016-02-05', NULL, '_bidRFGPO4HES6H', '_pid8923827126', 'default'),
(57, '_ridC6U6EEZL10O', '2029-12-15', 'Edna Dela Rosa', 'E - 5013', '1965-03-27', '2019-06-23', '2019-06-28', NULL, '_bidAVYCSA4A6W8', '_pid8923827130', 'default'),
(7, '_ridCCHQX2FMZC4', '2029-12-14', 'Shine Dizon ', 'A - 5004', '1953-04-10', '2022-07-04', '2022-07-11', NULL, '_bid42E6PUW2XLB', '_pid8923827128', 'default'),
(47, '_ridCCIWGERCTQM', '2029-12-14', 'Rissa Mateo', 'E - 5004', '1999-06-08', '2019-12-23', '2019-12-27', NULL, '_bidMOZHG52QVP6', '_pid8923827130', 'default'),
(61, '_ridD6NS09EKCPA', '2029-12-15', 'Richard Zamora', 'E - 5018', '1949-10-07', '2017-08-12', '2017-08-20', NULL, '_bid1PV15VJMK08', '_pid8923827130', 'default'),
(58, '_ridDEAAP9JSKBV', '2029-12-15', 'Shane Aragon', 'E - 5015', '2008-12-27', '2020-08-20', '2020-08-25', NULL, '_bidGMLMV5F8TLU', '_pid8923827130', 'default'),
(30, '_ridDJEUE15REKT', '2029-12-14', 'Jose Cruz', 'B - 5008', '1975-06-10', '2016-01-14', '2016-01-20', NULL, '_bid12G2CDT90SG', '_pid8923827126', 'default'),
(76, '_ridEL81QEFGZUM', '2029-12-15', 'Jude Alcantara', 'C - 5007', '1987-12-05', '2020-07-25', '2020-07-27', NULL, '_bidUOHJIQPHJKX', '_pid8923827127', 'default'),
(66, '_ridF4S41LQXAR3', '2029-12-15', 'Randy Guzman', 'C - 5002', '1950-03-25', '2018-09-22', '2018-09-27', NULL, '_bidC6GWDLJ2PI2', '_pid8923827127', 'default'),
(42, '_ridFEEGV1Y7QBC', '2029-12-14', 'Milanie Jimenez', 'B - 5020', '1991-01-08', '2018-10-29', '2018-11-05', NULL, '_bidL8EGQRACUL2', '_pid8923827126', 'default'),
(70, '_ridFOHZFRQPONI', '2029-12-15', 'Joshua Santos', 'C - 5004', '1997-07-25', '2018-03-20', '2018-03-25', NULL, '_bidHPJKQXYHBKB', '_pid8923827127', 'default'),
(23, '_ridFU084IHGBT9', '2029-12-14', 'Cecar Chavez', 'A - 5020', '1987-07-08', '2022-11-11', '2022-11-16', NULL, '_bidSX31PZJN98Y', '_pid8923827128', 'default'),
(20, '_ridFZKHKIW9HTD', '2029-12-14', 'Sandra Dalisay', 'A - 5017', '1981-09-29', '2022-10-05', '2022-10-10', NULL, '_bid4VJC7HYGD6W', '_pid8923827128', 'default'),
(107, '_ridG3PHZ5IBW62', '2030-01-19', 'asdasdasdasdasd', 'F - 5002', '1998-02-11', '2023-01-19', '2023-01-20', NULL, '_bidDC9JDKB6QRV', '_pid8923827126', 'default'),
(33, '_ridG6VJJXF3WHJ', '2029-12-14', 'Gloria Mendoza ', 'B - 5011', '1967-08-26', '2016-11-21', '2016-11-27', NULL, '_bidUL7V6CUN3LK', '_pid8923827126', 'default'),
(102, '_ridGUC4Z4BYUMF', '2029-12-15', 'Angelo John San Carlos', 'D - 5009', '1999-11-14', '2019-08-24', '2019-08-29', NULL, '_bid3Z6Z3OCZD33', '_pid8923827129', 'default'),
(53, '_ridHA42HB25DXV', '2029-12-15', 'Pualo Manalo ', 'E - 5010', '1989-09-21', '2016-02-17', '2016-02-24', NULL, '_bidG3OO3L1Z7P6', '_pid8923827130', 'default'),
(11, '_ridHC5AE7KVKHD', '2029-12-14', 'Cristy Lacson', 'A - 5008', '1951-04-21', '2022-08-15', '2022-08-18', NULL, '_bidP7ORM9I05GG', '_pid8923827128', 'default'),
(19, '_ridHHZJ8690O75', '2029-12-14', 'Nolly Halili', 'A - 5016', '1977-04-24', '2022-09-21', '2022-09-26', NULL, '_bidA762JUYVMOB', '_pid8923827128', 'default'),
(49, '_ridHR3C0MD4QV3', '2029-12-15', 'Mira Estrera', 'E - 5006', '1948-03-16', '2016-05-27', '2016-06-03', NULL, '_bid6F7900S92EG', '_pid8923827130', 'default'),
(83, '_ridI1JKQOQTEW6', '2029-12-15', 'Mike Dela Cruz', 'C - 5010', '1972-02-12', '2014-09-13', '2014-09-14', NULL, '_bid4TZBR4Y3U3F', '_pid8923827127', 'default'),
(101, '_ridI2PYMY238YG', '2029-12-15', 'Oscar Ducay', 'D - 6008', '1923-10-25', '2003-12-04', '2003-12-09', NULL, '_bid87AH0DLHSRW', '_pid8923827129', 'default'),
(40, '_ridIF1ZUGKWLEP', '2029-12-14', 'Charmie Pineda', 'B - 5018', '1975-10-05', '2017-03-03', '2017-03-07', NULL, '_bidLEO1J6FPLIG', '_pid8923827126', 'default'),
(29, '_ridIF9DJ789NYS', '2029-12-14', 'Micey Rivera', 'B - 5007', '1995-11-04', '2015-01-24', '2015-01-30', NULL, '_bidN0AKFERHJ0P', '_pid8923827126', 'default'),
(56, '_ridILWGRNJCYRE', '2029-12-15', 'Myla Vicente ', 'E - 5014', '1954-01-21', '2019-04-07', '2019-04-11', NULL, '_bidQ226PYE6P0L', '_pid8923827130', 'default'),
(16, '_ridJ1WI9VQYZTW', '2029-12-14', 'Lindsey Torres', 'A - 5013', '1997-04-21', '2022-09-08', '2022-09-13', NULL, '_bid3UKESOU6JN1', '_pid8923827128', 'default'),
(10, '_ridJC8NP2BJVAY', '2029-12-14', 'Chelsea Canoy', 'A - 5007', '1991-01-07', '2022-08-09', '2022-08-13', NULL, '_bid0FCJW3B7TAA', '_pid8923827128', 'default'),
(98, '_ridJPYKE7UZCOZ', '2029-12-15', 'Jamaica Saavedra', 'D - 5007', '1996-04-25', '2018-12-01', '2018-12-06', NULL, '_bid50S8RD93KG3', '_pid8923827129', 'default'),
(105, '_ridKAWR4668MBE', '2029-12-15', 'Joselito San Pablo', 'D - 6010', '1953-10-24', '2006-08-22', '2006-08-27', NULL, '_bidDU2R4XVNLTR', '_pid8923827129', 'default'),
(41, '_ridKF74FNLUQ93', '2029-12-14', 'Judy Luna', 'B - 5019', '1997-02-21', '2017-02-15', '2017-02-20', NULL, '_bidTKAQE8TLAFP', '_pid8923827126', 'default'),
(86, '_ridKX1T9AB12LL', '2029-12-15', 'Alexander Mondragon', 'D - 6001', '1920-07-07', '2009-09-26', '2009-10-05', NULL, '_bid47I5GGGMNQG', '_pid8923827129', 'default'),
(99, '_ridL07GF8E45NF', '2029-12-15', 'Fredireck Saavedra', 'D - 6007', '1941-08-23', '2005-12-15', '2005-12-20', NULL, '_bidBV7TGB810MF', '_pid8923827129', 'default'),
(104, '_ridLIIU1YAQCSR', '2029-12-15', 'Karina Mae San Pablo', 'D - 5010', '2002-12-24', '2022-10-15', '2022-10-20', NULL, '_bidP465RQFA55N', '_pid8923827129', 'default'),
(52, '_ridM5NUMH051ZH', '2029-12-15', 'Randy Esguerra', 'E - 5009', '1969-02-07', '2017-01-09', '2017-01-15', NULL, '_bidCYD1VTETLTS', '_pid8923827130', 'default'),
(97, '_ridMFSO8HHK3PM', '2029-12-15', 'Rolando Marcos', 'D - 6006', '1945-05-24', '2007-10-12', '2007-10-17', NULL, '_bidV6P1L42NAHE', '_pid8923827129', 'default'),
(54, '_ridN60OLQ9B1QC', '2029-12-15', 'Elsa Alvarez ', 'E - 5011', '1964-07-25', '2016-09-10', '2016-09-16', NULL, '_bid2JCXH73AM64', '_pid8923827130', 'default'),
(32, '_ridNCW0YK1Z1DP', '2029-12-14', 'Aida Legaspi ', 'B - 5010', '1941-10-30', '2016-03-23', '2016-03-28', NULL, '_bidCB7ZR0E3LW4', '_pid8923827126', 'default'),
(43, '_ridNF5H4ZLMF2V', '2029-12-14', 'Clarence Delgado', 'E - 5001', '1990-07-27', '2016-09-20', '2016-09-24', NULL, '_bidDKU8VWTAZJS', '_pid8923827130', 'default'),
(90, '_ridO55JQ87C9ME', '2029-12-15', 'Cassandra Santiago', 'D - 6003', '1934-04-23', '2009-09-21', '2009-09-26', NULL, '_bidRQSIX03HBQZ', '_pid8923827129', 'default'),
(51, '_ridOMAHRNBH9LF', '2029-12-15', 'Wanny Gomez', 'E - 5008', '1990-11-27', '2017-09-27', '2017-10-03', NULL, '_bid7VRLBMSPQP4', '_pid8923827130', 'default'),
(24, '_ridOZ6P48VWASY', '2029-12-14', 'Celso Suarez', 'B - 5002', '1962-05-19', '2016-04-21', '2016-04-27', NULL, '_bidYW98GCO8X32', '_pid8923827126', 'default'),
(35, '_ridP0FCTVBNWPG', '2029-12-14', 'Wendell Guttierrez', 'B - 5013', '1986-11-27', '2017-05-18', '2017-05-25', NULL, '_bidIK0K8F0G9IJ', '_pid8923827126', 'default'),
(67, '_ridP358NXRL3KO', '2029-12-15', 'Vicente Guzman', 'C - 5002', '1942-10-04', '2002-06-20', '2002-06-25', NULL, '_bidVVNYOT2ZJ7D', '_pid8923827127', 'default'),
(92, '_ridP3XB0PF6TP8', '2029-12-15', 'Antonio Sandoval', 'D - 6004', '1934-03-06', '2005-08-10', '2005-08-19', NULL, '_bidLY2MQS6NAGM', '_pid8923827129', 'default'),
(45, '_ridPRYE1XR1ZMQ', '2029-12-14', 'Rica Abad ', 'E - 5002', '1942-05-09', '2017-11-03', '2017-11-10', NULL, '_bidFC7F6FSMLT9', '_pid8923827130', 'default'),
(26, '_ridQGHMAER7V3J', '2029-12-14', 'Paulo Cortez ', 'B - 5004', '2000-09-30', '2016-05-29', '2016-06-05', NULL, '_bid5FOIZD1XFNY', '_pid8923827126', 'default'),
(64, '_ridQI1Z7SGQSEB', '2029-12-15', 'Leo Padilla', 'C - 5001', '1960-12-09', '2018-07-21', '2018-07-26', NULL, '_bidGVJO725BVVU', '_pid8923827127', 'default'),
(5, '_ridQUKNIRIIW2N', '2029-12-14', 'Kirt Ryan Singson', 'A - 5002', '1953-02-21', '2022-11-19', '2022-11-24', NULL, '_bidGMS519O5LRV', '_pid8923827128', 'default'),
(80, '_ridQYGHSYT5XSK', '2029-12-15', 'Christian Marcos', 'C - 5009', '1993-06-17', '2021-08-21', '2021-08-24', NULL, '_bidR3JE00NULBD', '_pid8923827127', 'default'),
(73, '_ridRHX6SX566EZ', '2029-12-15', 'Lucio Mendez', 'C - 5005', '1919-02-25', '2000-10-19', '2000-10-25', NULL, '_bidDZ6Y0C5XY0O', '_pid8923827127', 'default'),
(38, '_ridRLF4XWDS92Y', '2029-12-14', 'Carmina Ignacio', 'B - 5016', '1954-11-07', '2016-05-17', '2016-05-24', NULL, '_bidCU63V40PWMB', '_pid8923827126', 'default'),
(91, '_ridRTIWCUAXZVA', '2029-12-15', 'Natasha Sandoval', 'D - 5004', '1995-04-25', '2017-05-12', '2017-05-17', NULL, '_bidED290NF9TV5', '_pid8923827129', 'default'),
(59, '_ridRYA27LKMHCL', '2029-12-15', 'Gardo Labrador', 'E - 5016', '1987-02-27', '2022-12-09', '2022-12-14', NULL, '_bidOQD0JJ3Q050', '_pid8923827130', 'default'),
(21, '_ridSLXOGNLLFTK', '2029-12-14', 'Marco Abalos', 'A - 5018', '1990-01-27', '2022-10-15', '2022-10-20', NULL, '_bidKSM560NPA9L', '_pid8923827128', 'default'),
(87, '_ridSX1URPT635J', '2029-12-15', 'Andy Fajardo', 'D - 5002', '0995-12-09', '2018-01-04', '2018-01-09', NULL, '_bidWV0TE7S2R40', '_pid8923827129', 'default'),
(69, '_ridTWS42Z46X5H', '2029-12-15', 'Visiminda Santillan', 'C - 5003', '1967-02-23', '2006-05-15', '2006-05-20', NULL, '_bidSATLRWW6FGC', '_pid8923827127', 'default'),
(63, '_ridVUHV74SJMII', '2029-12-15', 'Tommy Soriano', 'E - 5020', '1978-08-11', '2017-02-15', '2017-02-20', NULL, '_bidOXWKO01WJEY', '_pid8923827130', 'default'),
(46, '_ridVW8R1Y92KI9', '2029-12-14', 'Rose Asuncion', 'E - 5003', '1991-07-26', '2018-01-09', '2018-01-16', NULL, '_bidTYAJRYI82NM', '_pid8923827130', 'default'),
(4, '_ridWHNQ23VNIYW', '2029-12-14', 'Jenny Manansala', 'A - 5001', '1975-06-04', '2022-10-05', '2022-10-10', NULL, '_bidIZFHPV0DEVM', '_pid8923827128', 'default'),
(88, '_ridWPDJJXWBGER', '2029-12-15', 'Alfonso Fajardo ', 'D - 6002', '1967-11-15', '2013-04-27', '2013-05-05', NULL, '_bidYSYMNXR82TI', '_pid8923827129', 'default'),
(93, '_ridX2EAJQUFORF', '2029-12-15', 'Andrea Lacson', 'D - 5005', '1998-02-14', '2019-06-24', '2019-06-29', NULL, '_bidU2OFO30C4X4', '_pid8923827129', 'default'),
(36, '_ridXTIUKKLAXE9', '2029-12-14', 'Ramil Guzman', 'B - 5014', '1991-01-30', '2016-02-05', '2016-02-19', NULL, '_bid69LTY0AB8GV', '_pid8923827126', 'default'),
(106, '_ridY1XJXT4X154', '2030-01-19', 'asdasda', 'F - 5001', '2010-02-19', '2023-01-18', '2023-01-20', NULL, '_bidTV0GQHOWMMK', '_pid8923827124', 'default'),
(17, '_ridYE0SQK25XPH', '2029-12-14', 'Angel Capili ', 'A - 5014', '1999-03-26', '2022-09-12', '2022-09-17', NULL, '_bidL07N6H10LEO', '_pid8923827128', 'default'),
(79, '_ridYJ519G2319U', '2029-12-15', 'Shiela Garcia', 'C - 5008', '1958-12-20', '2014-01-27', '2014-01-30', NULL, '_bidP3BFTW3NCX2', '_pid8923827127', 'default'),
(12, '_ridYX0OHQVMIMW', '2029-12-14', 'Luna Mendoza', 'A - 5009', '1990-03-06', '2022-08-20', '2022-08-25', NULL, '_bidD49QTEXO33E', '_pid8923827128', 'default'),
(14, '_ridYZDXAJT4NA0', '2029-12-14', 'Andrea Santos', 'A - 5011', '1975-10-17', '2022-08-27', '2022-09-03', NULL, '_bidZ65P8DOO156', '_pid8923827128', 'default'),
(9, '_ridZNO2IRF6WDC', '2029-12-14', 'Christine Manalo', 'A - 5006', '1980-09-21', '2022-08-01', '2022-08-05', NULL, '_bidMR963WGCQLM', '_pid8923827128', 'default'),
(13, '_ridZSM33WEVE18', '2029-12-14', 'Rhea Tolentino', 'A - 5010', '1961-06-21', '2022-08-24', '2022-08-29', NULL, '_bid16QN7QUQKXA', '_pid8923827128', 'default'),
(84, '_ridZUWK7FVCHAN', '2029-12-15', 'Roldan Alcantara', 'C - 5007', '1985-08-12', '2012-04-25', '2012-04-26', NULL, '_bidOX6HU0AUWWE', '_pid8923827127', 'default');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `_id` int(11) NOT NULL,
  `user_id` varchar(15) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(25) NOT NULL,
  `user_role` varchar(10) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`_id`, `user_id`, `fname`, `lname`, `email`, `password`, `avatar`, `user_role`, `date_created`) VALUES
(1, '_idBGQAR79Z9UIG', 'Admin', 'Codes', 'campcodes@gmail.com', '$2y$10$kmIDA2CqxTwpQ1QlVB8PbOJcX2oX2Tsboa440QwhseEx9Kx9cszw.', '277.png', 'admin', '2022-11-12'),
(2, '_idOWA2UJXSEWMA', 'Camp', 'Codes', 'admin@gmail.com', '$2y$10$bkvBB0iExKzgStadErsBp.LARxErRinpkhUfzWIZbQxmN9DGK970u', 'default-avatar.png', 'default', '2022-11-12'),
(3, '_id9QU3AOFK3HPU', 'Gummy', 'Bears', 'bears@gmail.com', '$2y$10$L0ZUFc/KRD0Ctdr.Gq4YheDo.ge7VousgpR/PA5TBZ7JbNKVQgwZ2', '702.png', 'default', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_billings`
--
ALTER TABLE `tbl_billings`
  ADD PRIMARY KEY (`record_id`),
  ADD UNIQUE KEY `_id` (`_id`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `tbl_packages`
--
ALTER TABLE `tbl_packages`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  ADD PRIMARY KEY (`record_id`),
  ADD UNIQUE KEY `_id` (`_id`);

--
-- Indexes for table `tbl_records`
--
ALTER TABLE `tbl_records`
  ADD PRIMARY KEY (`record_id`),
  ADD UNIQUE KEY `row_count` (`_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_billings`
--
ALTER TABLE `tbl_billings`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `tbl_packages`
--
ALTER TABLE `tbl_packages`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `tbl_records`
--
ALTER TABLE `tbl_records`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
