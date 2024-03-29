-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 07, 2023 at 11:28 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CakeToria`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminPass`
--

CREATE TABLE `adminPass` (
  `log` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminPass`
--

INSERT INTO `adminPass` (`log`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `Comments`
--

CREATE TABLE `Comments` (
  `id_comment` int NOT NULL,
  `id_UserName` int NOT NULL,
  `data` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Comments`
--

INSERT INTO `Comments` (`id_comment`, `id_UserName`, `data`, `message`) VALUES
(33, 16, '03.02.2023', 'Заказали торт Наполеон, доставка была быстрая, курьер был вежлив. Цена полностью соответствует заверенному качеству. 10/10'),
(34, 17, '03.02.2023', 'Немного не дотягивает до совершенства, доставка быстрая. 8/10'),
(35, 18, '03.02.2023', 'Супер!!! Заказала торт Тайна Черного Короля, планирую покупать каждый праздник, так вкусно и недорого!!!'),
(36, 16, '06.02.2023', 'Тут очень хорошо все!');

-- --------------------------------------------------------

--
-- Table structure for table `Description`
--

CREATE TABLE `Description` (
  `ID` int NOT NULL,
  `Small_desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Huge_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Description`
--

INSERT INTO `Description` (`ID`, `Small_desc`, `Huge_desc`) VALUES
(4, 'Восхитительно нежный шоколадный бисквит, шоколадный мусс с горьким шоколадом и сливками, малиновым конфитюром. Покрыт глазурью.', 'Состав: сахар, бисквит \"Захер\" с какао (яйца куриные пищевые, сахар, масло сладкосливочное, мука пшеничная высшего сорта , какао-порошок, разрыхлитель сода пищевая), шоколад горький (какао тертое, сахарная пудра, какао-масло, жир молочный, эмульгатор (лецитин соевый), ароматизатор натуральный \"Ваниль\"), яйца куриные пищевые, шоколад горький 72 % (какао тёртое, сахарная пудра, какао-масло, эмульгатор (лецитин соевый), ароматизатор натуральный \"Ваниль\". Какао-продукты - 72%), малина свежезамороженная, шоколад горький 56 % (какао тёртое, сахарная пудра, какао-масло, эмульгатор (лецитин соевый), ароматизатор натуральный \"Ваниль\". Какао-продукты - 56%), глюкозный сироп, молоко питьевое, крем на растительных маслах (вода, жир растительный гидрогенизированный (пальмоядровый), сахар, декстроза, эмульгаторы Е471, Е472b, E472e, подсластитель Е420, стабилизаторы Е460i, E466, E339ii, казеинат натрия, влагоудерживающий агент Е422, соль, ароматизатор), молоко сгущенное с сахаром (молоко нормализованное , сахар), сироп инвертный (сахар, вода питьевая, регулятор кислотности – лимонная кислота), шоколад белый (сахарная пудра, какао масло, сыворотка молочная сухая, молоко обезжиренное сухое, жир молочный,эмульгатор -лецитин соевый,ароматизатор натуральный \"Ваниль\", соль йодированная (содержит йодит калия, антислеживающий агент Е536)), вода питьевая, лимон свежий, желатин, масло какао, крахмал кукурузный, пектин, комплексная пищевая добавка. Краситель гелевый красный (вода, инвертный сироп, глицерин, сахар, красители пищевые, крахмал, гуаровая камедь, камедь рожкового дерева, консерванты (Е202, Е211))\n\nУсловия хранения: при температуре от +2 °С до +6 °С\n\nСрок годности: 72 часа\n\nПищевая ценность в 100 г: жиры 14 г, белки 6 г, углеводы 38 г\n\nЭнергетическая ценность: 1270 кДж / 300 ккал'),
(5, 'Ванильный бисквит, прослоенный молочным суфле с шоколадным кремом. Покрыт белой шоколадной глазурью.', 'Состав: сахар, яйцо, вода питьевая, масло сливочное 72,5%, молоко сгущеное цельное, шоколад молочный, ликер \"кремосса\", молоко 3,2%, сливки м.д.ж. 33%, мука пшеничная в/с, сироп глюкозный 43%, маргарин, шоколад горький 72%, шоколад белый, какао-масло, желатин листовой, агар-агар, ароматизатор Панна ванилла, разрыхлитель Линденер, ароматизатор Ваниль, краситель пищевой\n\nУсловия хранения: при температуре от +2 до +6 °С\n\nСрок годности: 72 часа\n\nПищевая ценность в 100 г: жиры 19 г, белки 4.5 г, углеводы 47 г\n\nЭнергетическая ценность: 1590 кДж / 380 ккал'),
(7, '900-1100г. Воздушно-ореховый корж в сочетании cо сливочным бисквитом и кремом на основе вареного сгущенного молока и сливок. (упаковка не включена в стоимость)', '900-1100г. Воздушно-ореховый корж в сочетании cо сливочным бисквитом и кремом на основе вареного сгущенного молока и сливок. (упаковка не включена в стоимость)Воздушно-ореховый корж в сочетании cо сливочным бисквитом и кремом на основе вареного сгущенного молока и сливок. (упаковка не включена в стоимость)Воздушно-ореховый корж в сочетании cо сливочным бисквитом и кремом на основе вареного сгущенного молока и сливок. (упаковка не включена в стоимость)Воздушно-ореховый корж в сочетании cо сливочным бисквитом и кремом на основе вареного сгущенного молока и сливок. (упаковка не включена в стоимость)'),
(8, '900-1100г. Сливочный бисквит в сочетании с шоколадным бисквитом пропитаны нежным сливочно-сметанным кремом, поверхность украшена сочной вишней и карамельной глазурью. (упаковка не включена в стоимость)', '900-1100г. Сливочный бисквит в сочетании с шоколадным бисквитом пропитаны нежным сливочно-сметанным кремом, поверхность украшена сочной вишней и карамельной глазурью. (упаковка не включена в стоимость)900-1100г. Сливочный бисквит в сочетании с шоколадным бисквитом пропитаны нежным сливочно-сметанным кремом, поверхность украшена сочной вишней и карамельной глазурью. (упаковка не включена в стоимость)900-1100г. Сливочный бисквит в сочетании с шоколадным бисквитом пропитаны нежным сливочно-сметанным кремом, поверхность украшена сочной вишней и карамельной глазурью. (упаковка не включена в стоимость)900-1100г. Сливочный бисквит в сочетании с шоколадным бисквитом пропитаны нежным сливочно-сметанным кремом, поверхность украшена сочной вишней и карамельной глазурью. (упаковка не включена в стоимость)900-1100г. Сливочный бисквит в сочетании с шоколадным бисквитом пропитаны нежным сливочно-сметанным кремом, поверхность украшена сочной вишней и карамельной глазурью. (упаковка не включена в стоимость)900-1100г. Сливочный бисквит в сочетании с шоколадным бисквитом пропитаны нежным сливочно-сметанным кремом, поверхность украшена сочной вишней и карамельной глазурью. (упаковка не включена в стоимость)900-1100г. Сливочный бисквит в сочетании с шоколадным бисквитом пропитаны нежным сливочно-сметанным кремом, поверхность украшена сочной вишней и карамельной глазурью. (упаковка не включена в стоимость)900-1100г. Сливочный бисквит в сочетании с шоколадным бисквитом пропитаны нежным сливочно-сметанным кремом, поверхность украшена сочной вишней и карамельной глазурью. (упаковка не включена в стоимость)900-1100г. Сливочный бисквит в сочетании с шоколадным бисквитом пропитаны нежным сливочно-сметанным кремом, поверхность украшена сочной вишней и карамельной глазурью. (упаковка не включена в стоимость)'),
(9, 'Сливочный бисквит, сливочно-кокосовый крем на основе мягкого сыра Крем Чиз, ананасы консервированные, ананасовое желе. (упаковка не включена в стоимость)', 'Сливочный бисквит, сливочно-кокосовый крем на основе мягкого сыра Крем Чиз, ананасы консервированные, ананасовое желе. (упаковка не включена в стоимость)Сливочный бисквит, сливочно-кокосовый крем на основе мягкого сыра Крем Чиз, ананасы консервированные, ананасовое желе. (упаковка не включена в стоимость)Сливочный бисквит, сливочно-кокосовый крем на основе мягкого сыра Крем Чиз, ананасы консервированные, ананасовое желе. (упаковка не включена в стоимость)Сливочный бисквит, сливочно-кокосовый крем на основе мягкого сыра Крем Чиз, ананасы консервированные, ананасовое желе. (упаковка не включена в стоимость)Сливочный бисквит, сливочно-кокосовый крем на основе мягкого сыра Крем Чиз, ананасы консервированные, ананасовое желе. (упаковка не включена в стоимость)Сливочный бисквит, сливочно-кокосовый крем на основе мягкого сыра Крем Чиз, ананасы консервированные, ананасовое желе. (упаковка не включена в стоимость)Сливочный бисквит, сливочно-кокосовый крем на основе мягкого сыра Крем Чиз, ананасы консервированные, ананасовое желе. (упаковка не включена в стоимость)Сливочный бисквит, сливочно-кокосовый крем на основе мягкого сыра Крем Чиз, ананасы консервированные, ананасовое желе. (упаковка не включена в стоимость)'),
(10, '900-1000г. Воздушный корж с фундуком и нежный шоколадный бисквит соединены карамельным кремом с добавлением сливок, поверхность украшена фундуком и шоколадным декором. (упаковка не включена в стоимость)', '900-1000г. Воздушный корж с фундуком и нежный шоколадный бисквит соединены карамельным кремом с добавлением сливок, поверхность украшена фундуком и шоколадным декором. (упаковка не включена в стоимость)\r\n900-1000г. Воздушный корж с фундуком и нежный шоколадный бисквит соединены карамельным кремом с добавлением сливок, поверхность украшена фундуком и шоколадным декором. (упаковка не включена в стоимость)900-1000г. Воздушный корж с фундуком и нежный шоколадный бисквит соединены карамельным кремом с добавлением сливок, поверхность украшена фундуком и шоколадным декором. (упаковка не включена в стоимость)900-1000г. Воздушный корж с фундуком и нежный шоколадный бисквит соединены карамельным кремом с добавлением сливок, поверхность украшена фундуком и шоколадным декором. (упаковка не включена в стоимость)900-1000г. Воздушный корж с фундуком и нежный шоколадный бисквит соединены карамельным кремом с добавлением сливок, поверхность украшена фундуком и шоколадным декором. (упаковка не включена в стоимость)900-1000г. Воздушный корж с фундуком и нежный шоколадный бисквит соединены карамельным кремом с добавлением сливок, поверхность украшена фундуком и шоколадным декором. (упаковка не включена в стоимость)900-1000г. Воздушный корж с фундуком и нежный шоколадный бисквит соединены карамельным кремом с добавлением сливок, поверхность украшена фундуком и шоколадным декором. (упаковка не включена в стоимость)900-1000г. Воздушный корж с фундуком и нежный шоколадный бисквит соединены карамельным кремом с добавлением сливок, поверхность украшена фундуком и шоколадным декором. (упаковка не включена в стоимость)'),
(11, '1000-1200г. Морковный бисквит с нежным сметанным кремом, начинка яблочная и клюквенная. (упаковка не включена в стоимость)', '1000-1200г. Морковный бисквит с нежным сметанным кремом, начинка яблочная и клюквенная. (упаковка не включена в стоимость)1000-1200г. Морковный бисквит с нежным сметанным кремом, начинка яблочная и клюквенная. (упаковка не включена в стоимость)1000-1200г. Морковный бисквит с нежным сметанным кремом, начинка яблочная и клюквенная. (упаковка не включена в стоимость)1000-1200г. Морковный бисквит с нежным сметанным кремом, начинка яблочная и клюквенная. (упаковка не включена в стоимость)1000-1200г. Морковный бисквит с нежным сметанным кремом, начинка яблочная и клюквенная. (упаковка не включена в стоимость)1000-1200г. Морковный бисквит с нежным сметанным кремом, начинка яблочная и клюквенная. (упаковка не включена в стоимость)1000-1200г. Морковный бисквит с нежным сметанным кремом, начинка яблочная и клюквенная. (упаковка не включена в стоимость)1000-1200г. Морковный бисквит с нежным сметанным кремом, начинка яблочная и клюквенная. (упаковка не включена в стоимость)'),
(12, '1000-1200г. Слоеные коржи в сочетании с нежным заварным кремом на основе сливок. (упаковка не включена в стоимость)', '1000-1200г. Слоеные коржи в сочетании с нежным заварным кремом на основе сливок. (упаковка не включена в стоимость)1000-1200г. Слоеные коржи в сочетании с нежным заварным кремом на основе сливок. (упаковка не включена в стоимость)1000-1200г. Слоеные коржи в сочетании с нежным заварным кремом на основе сливок. (упаковка не включена в стоимость)1000-1200г. Слоеные коржи в сочетании с нежным заварным кремом на основе сливок. (упаковка не включена в стоимость)1000-1200г. Слоеные коржи в сочетании с нежным заварным кремом на основе сливок. (упаковка не включена в стоимость)1000-1200г. Слоеные коржи в сочетании с нежным заварным кремом на основе сливок. (упаковка не включена в стоимость)1000-1200г. Слоеные коржи в сочетании с нежным заварным кремом на основе сливок. (упаковка не включена в стоимость)1000-1200г. Слоеные коржи в сочетании с нежным заварным кремом на основе сливок. (упаковка не включена в стоимость)1000-1200г. Слоеные коржи в сочетании с нежным заварным кремом на основе сливок. (упаковка не включена в стоимость)1000-1200г. Слоеные коржи в сочетании с нежным заварным кремом на основе сливок. (упаковка не включена в стоимость)1000-1200г. Слоеные коржи в сочетании с нежным заварным кремом на основе сливок. (упаковка не включена в стоимость)1000-1200г. Слоеные коржи в сочетании с нежным заварным кремом на основе сливок. (упаковка не включена в стоимость)1000-1200г. Слоеные коржи в сочетании с нежным заварным кремом на основе сливок. (упаковка не включена в стоимость)1000-1200г. Слоеные коржи в сочетании с нежным заварным кремом на основе сливок. (упаковка не включена в стоимость)1000-1200г. Слоеные коржи в сочетании с нежным заварным кремом на основе сливок. (упаковка не включена в стоимость)1000-1200г. Слоеные коржи в сочетании с нежным заварным кремом на основе сливок. (упаковка не включена в стоимость)'),
(13, 'Нежный шоколадный бисквит в сочетании с легким кремом на сливках и карамельным кремом с фундуком. (упаковка не включена в стоимость)', 'Нежный шоколадный бисквит в сочетании с легким кремом на сливках и карамельным кремом с фундуком. (упаковка не включена в стоимость)Нежный шоколадный бисквит в сочетании с легким кремом на сливках и карамельным кремом с фундуком. (упаковка не включена в стоимость)Нежный шоколадный бисквит в сочетании с легким кремом на сливках и карамельным кремом с фундуком. (упаковка не включена в стоимость)Нежный шоколадный бисквит в сочетании с легким кремом на сливках и карамельным кремом с фундуком. (упаковка не включена в стоимость)Нежный шоколадный бисквит в сочетании с легким кремом на сливках и карамельным кремом с фундуком. (упаковка не включена в стоимость)Нежный шоколадный бисквит в сочетании с легким кремом на сливках и карамельным кремом с фундуком. (упаковка не включена в стоимость)'),
(14, 'Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)', 'Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)Шоколадный бисквит и медовые песочно-заварные коржи соединены нежным сливочно-сметанным кремом. (упаковка не включена в стоимость)'),
(15, '1000-1300г. Изысканный шоколадный мусс на основе лучших сортов шоколада: белого, молочного и темного, на нежнейшем шоколадном бисквите. (упаковка не включена в стоимость)', '1000-1300г. Изысканный шоколадный мусс на основе лучших сортов шоколада: белого, молочного и темного, на нежнейшем шоколадном бисквите. (упаковка не включена в стоимость)1000-1300г. Изысканный шоколадный мусс на основе лучших сортов шоколада: белого, молочного и темного, на нежнейшем шоколадном бисквите. (упаковка не включена в стоимость)'),
(16, '900-1200г. Нежный бисквит со сливочно-сметанным кремом, черникой и персиком. (упаковка не включена в стоимость)', '900-1200г. Нежный бисквит со сливочно-сметанным кремом, черникой и персиком. (упаковка не включена в стоимость)900-1200г. Нежный бисквит со сливочно-сметанным кремом, черникой и персиком. (упаковка не включена в стоимость)900-1200г. Нежный бисквит со сливочно-сметанным кремом, черникой и персиком. (упаковка не включена в стоимость)'),
(17, '900-1200г. Чизкейк на основе творога, сыра Маскарпоне с ягодами: малина, голубика, ежевика. (упаковка не включена в стоимость)\r\n', '900-1200г. Чизкейк на основе творога, сыра Маскарпоне с ягодами: малина, голубика, ежевика. (упаковка не включена в стоимость)\r\n900-1200г. Чизкейк на основе творога, сыра Маскарпоне с ягодами: малина, голубика, ежевика. (упаковка не включена в стоимость)\r\n900-1200г. Чизкейк на основе творога, сыра Маскарпоне с ягодами: малина, голубика, ежевика. (упаковка не включена в стоимость)\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `Images`
--

CREATE TABLE `Images` (
  `ID` int NOT NULL,
  `Path_img` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Images`
--

INSERT INTO `Images` (`ID`, `Path_img`) VALUES
(29, '\\img\\Cake\\Десерт «Шоколадный Фрамбуазье».jpg'),
(30, '\\img\\Cake\\Нежность.jpg'),
(31, '\\img\\Cake\\Белочка.jpg'),
(32, '\\img\\Cake\\Вишневый рай.jpg'),
(33, '\\img\\Cake\\Торт Ворожея.jpg'),
(34, '/img/Cake/Торт Восточная Сказка.jpg'),
(35, '\\img\\Cake\\Торт Морковный Восторг.jpg'),
(36, '\\img\\Cake\\Торт Наполеон.jpg'),
(37, '\\img\\Cake\\Тайна Черного Короля.jpg'),
(38, '\\img\\Cake\\Торт тигренок.jpg'),
(39, '\\img\\Cake\\Торт три шоколада.jpg'),
(40, '/img/Cake/Черничное наслаждение.jpg'),
(41, '/img/Cake/Чизкейк Ягодное искушение.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `MailingEmail`
--

CREATE TABLE `MailingEmail` (
  `id` int NOT NULL,
  `mailingEmail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `MailingEmail`
--

INSERT INTO `MailingEmail` (`id`, `mailingEmail`) VALUES
(43, 'scs@qwe.ru'),
(44, 'loshonkov@yandex.ru'),
(45, 'qweqwe@inbox.ru'),
(46, 'qweqweqw@inbox.ru');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `idUser` int NOT NULL,
  `idProduct` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `idUser`, `idProduct`) VALUES
(65, 16, 28),
(67, 16, 27),
(68, 16, 27),
(69, 16, 27),
(70, 16, 27),
(71, 16, 27),
(72, 16, 27);

-- --------------------------------------------------------

--
-- Table structure for table `Popular_product`
--

CREATE TABLE `Popular_product` (
  `ID` int NOT NULL,
  `ID_regularProduct` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Popular_product`
--

INSERT INTO `Popular_product` (`ID`, `ID_regularProduct`) VALUES
(10, 27),
(12, 28),
(19, 31),
(18, 32),
(17, 33),
(16, 34),
(13, 35),
(15, 38),
(14, 39);

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `ID` int NOT NULL,
  `Name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Price` decimal(5,2) NOT NULL,
  `ID_img` int NOT NULL,
  `ID_desc` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`ID`, `Name`, `Price`, `ID_img`, `ID_desc`) VALUES
(27, 'Шоколадный Фрамбуазье', '59.99', 29, 4),
(28, 'Нежность', '47.25', 30, 5),
(29, 'Торт Белочка', '23.30', 31, 7),
(30, 'Торт Вишневый Рай', '31.00', 32, 8),
(31, 'Торт Ворожея', '25.00', 33, 9),
(32, 'Торт Восточная Сказка', '40.00', 34, 10),
(33, 'Торт Морковный Восторг', '19.90', 35, 11),
(34, 'Торт Наполеон', '22.00', 36, 12),
(35, 'Торт Тайна Черного Короля', '40.00', 37, 13),
(36, 'Торт Тигренок', '26.00', 38, 14),
(37, 'Торт Три Шоколада', '45.00', 39, 15),
(38, 'Торт Черничное Наслаждение', '34.20', 40, 16),
(39, 'Чизкейк Ягодное искушение', '34.00', 41, 17);

-- --------------------------------------------------------

--
-- Table structure for table `TheBestEmployees`
--

CREATE TABLE `TheBestEmployees` (
  `ID` int NOT NULL,
  `LastName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `FirstName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Patronymic` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Post` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `TheBestEmployees`
--

INSERT INTO `TheBestEmployees` (`ID`, `LastName`, `FirstName`, `Patronymic`, `Post`, `Photo`) VALUES
(8, 'Кузнецов', 'Матвей', 'Александрович', 'Старший повар', 'img\\TheBestEmployees\\Матвей.jpg'),
(9, 'Багаров', 'Иван', 'Олегович', 'Старший повар', 'img\\TheBestEmployees\\Олег.jpg'),
(10, 'Загурова', 'Оля', 'Андреевна', 'Повар', 'img\\TheBestEmployees\\Оля.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `surname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `phone`) VALUES
(14, 'Андрей', 'Кучера', 'loshonkov@inbox.ru', '4f15435780ef393fb1ed8ddfb5485658', '+375292927452'),
(16, 'Евгений', 'Лошонков', 'lloshonkov@yandex.ru', '4f15435780ef393fb1ed8ddfb5485658', '+375292927452'),
(17, 'Олег', 'Мазайлов', 'xelefok111@f1xm.com', 'a80122ec07b0746af197a7f687ed5e5f', '+375291223299'),
(18, 'Наташа', 'Гарлачёва', 'natasha@mail.ru', '2f7275a8170c0be84326ad15d65af8e0', '+375443210099');

-- --------------------------------------------------------

--
-- Table structure for table `Vacancy`
--

CREATE TABLE `Vacancy` (
  `id` int NOT NULL,
  `vacancy` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `post` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `desc_vacancy` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Vacancy`
--

INSERT INTO `Vacancy` (`id`, `vacancy`, `post`, `desc_vacancy`) VALUES
(1, 'Грузчик', 'Грузчик', 'Обязанности:\r\nКомплектование продукции\r\nПогрузо-разгрузочные работы\r\nТребования:\r\nОтветственность, физическая выносливость.\r\nЖелание работать, отсутствие заболеваний, препятствующих осуществлению данной работы.\r\nНаличие санитарной справки (готовность сделать).\r\nУсловия:\r\nОфициальное оформление с первого дня работы в соответствии с ТК РБ, все социальные гарантии (трудовой отпуск 25 к/д, оплата больничного листа);\r\nСтабильная и своевременная зарплата (выплата 2 раза в месяц);\r\nВыдаём спецодежду.\r\nГрафик работы : 2/2 с 08.00 до 20.00 - 12 часов (дневная смена).'),
(2, 'Шеф-повар', 'Старший повар', 'Первые два месяца - разовая выплата в размере 200 руб первый месяц и 300 руб второй месяц.\r\n\r\nЕсли у вас есть желание окунуться в мир французских десертов, изысканных пирожных и тортов, то мы ждем вас! Если вы стремитесь развиваться, то мы рады предложить Вам возможность для обучения и профессионального роста, работу в дружном коллективе, уверенность в завтрашнем дне!\r\n\r\nОбязанности:\r\n\r\n- Производство кондитерских изделий премиум класса;\r\n\r\n- Изготовление продукции (торты, пирожные, пирожные Макаронс, булочки, кантуччини, кукисы, эклеры, муссовые изделия и т.д.).\r\n\r\nТребования:\r\n- Опыт производства тортов и пирожных, сдобных изделий;\r\n- Аккуратность, трудолюбие, умение работать в коллективе.\r\n\r\nУсловия:\r\n\r\n- Режим работы 3/3 с 8.00 до 20.00, обед 60 минут; без ночных смен;\r\n- Трудоустройство по контракту либо по договору подряда;\r\n\r\n- Индивидуальная доплата за выслугу лет на предприятии;\r\n\r\n- Корпоративный транспорт на работу и обратно со ст. м. Могилевская и м. Борисовский тракт;\r\n\r\n- Скидка 20% на продукцию BonGenie;\r\n\r\n- Сладкие подарки сотрудникам на Дни рождения, 8 марта и 23 февраля, подарки детям на Новогодний праздник;\r\n\r\n- Стабильность, социальные гарантии, своевременная зарплата 2 раза в месяц;\r\n\r\n- Дружелюбный коллектив, организовываются выездные мероприятия за счет предприятия.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Comments`
--
ALTER TABLE `Comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_comment` (`id_comment`),
  ADD KEY `id_UserName` (`id_UserName`);

--
-- Indexes for table `Description`
--
ALTER TABLE `Description`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `Images`
--
ALTER TABLE `Images`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `MailingEmail`
--
ALTER TABLE `MailingEmail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id-user` (`idUser`),
  ADD KEY `id-product` (`idProduct`);

--
-- Indexes for table `Popular_product`
--
ALTER TABLE `Popular_product`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_regularProduct` (`ID_regularProduct`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_img` (`ID_img`),
  ADD KEY `ID_desc` (`ID_desc`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `TheBestEmployees`
--
ALTER TABLE `TheBestEmployees`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Vacancy`
--
ALTER TABLE `Vacancy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Comments`
--
ALTER TABLE `Comments`
  MODIFY `id_comment` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `Description`
--
ALTER TABLE `Description`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `Images`
--
ALTER TABLE `Images`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `MailingEmail`
--
ALTER TABLE `MailingEmail`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `Popular_product`
--
ALTER TABLE `Popular_product`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `TheBestEmployees`
--
ALTER TABLE `TheBestEmployees`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `Vacancy`
--
ALTER TABLE `Vacancy`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Comments`
--
ALTER TABLE `Comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_UserName`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`idProduct`) REFERENCES `Product` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Popular_product`
--
ALTER TABLE `Popular_product`
  ADD CONSTRAINT `popular_product_ibfk_1` FOREIGN KEY (`ID_regularProduct`) REFERENCES `Product` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ID_img`) REFERENCES `Images` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`ID_desc`) REFERENCES `Description` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
