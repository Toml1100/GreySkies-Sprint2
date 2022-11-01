DROP TABLE IF EXISTS `Order`;

-- --------------------------------------------------------
--
-- Table structure for table `Order`;
--
CREATE TABLE IF NOT EXISTS `Order`(
  `OrderId` int(1) NOT NULL DEFAULT '0',
  `FirstName` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `WeddingDate` DATE NOT NULL,
  `Set` varchar(20) NOT NULL ,
  `Package` varchar(10) NOT NULL ,
  `HexagonArch` bit NOT NULL ,
  `VintageCouch` bit NOT NULL ,
  `WineJugs` int NOT NULL ,
  `AntiqueJugs` int NOT NULL ,
  `ClearBall` bit NOT NULL ,
  `BlueBall` bit NOT NULL ,
  `Delivery` bit NOT NULL ,
  `Price` decimal(15,2)NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`OrderId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `Order`
--
INSERT INTO `Order`( `OrderId`,`FirstName`, `Email`, `Phone`,`WeddingDate`,`Set`, `Package`,`HexagonArch`, `VintageCouch`, `WineJugs`,`AntiqueJugs`, `ClearBall`, `BlueBall`, `Delivery`,`Price`) 
VALUES

(1, 'Tina', 'A@gmail.com', '3463560878', '2022-11-14', 'LayeredArc', 'FullSet', 0, 0, 12, 3, 0, 1, 0,'132.00'),
(2, 'Tina', 'As@gmail.com','2792195138', '2022-12-30', 'DarkWalnut', 'FullSet', 0, 0, 4, 2, 0, 1, 0,'960.00'),
(3, 'Tina', 'Av@gmail.com','7408063441', '2028-04-06', 'RusticWood', 'NoSeating',0, 1, 3, 1, 0, 1, 1,'100.00'),
(5, 'Tina', 'Aa@gmail.com','4133786812', '2024-06-14', 'VintageMirror', 'Gold', 0, 0, 0, 1, 0, 1, 1,'0.00');
