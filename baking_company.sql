DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `hashed_password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `index_username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `admins` VALUES (1,'James','Leung','jleung2101@gmail.com','jleung2101','$2y$10$74202tWuILkLIEKyAUKR/ejEmtXUjwIV3XWlWz.BeRpSgOtZAC0FS');

DROP TABLE IF EXISTS `baked_goods`;
CREATE TABLE `baked_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ingredients` varchar(255) NOT NULL,
  `cuisine` varchar(255) NOT NULL,
  `season` varchar(255) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `calories` decimal(9,5) NOT NULL,
  `rating` int(4) NOT NULL,
  `meal` tinyint(3) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
INSERT INTO `baked_goods` (`id`, `type`, `name`, `ingredients`, `cuisine`, `season`, `price`, `calories`, `rating`, `meal`, `description`) VALUES 
(1, 'Bread','Sourdough Loaf','Flour, Water, Salt, Yeast','European','All Seasons',6.00,140.00,5,1,'Tangy and crusty bread with a chewy interior'),
(2, 'Dessert','Cheese Danish','Flour, Butter, Sugar, Cheese, Eggs','European','All Seasons',3.50,320.00,4,3,'Sweet pastry filled with creamy cheese'),
(3, 'Cookie','Chocolate Chip Cookie','Flour, Butter, Sugar, Eggs, Chocolate Chips','American','All Seasons',1.00,90.00,5,3,'Classic cookie with melted chocolate chips'),
(4, 'Cake','Carrot Cake','Flour, Carrots, Sugar, Eggs, Nuts, Cream Cheese','American','Spring',7.50,450.00,4,3,'Moist cake with cream cheese frosting and nuts'),
(5, 'Bread','Baguette','Flour, Water, Salt, Yeast','French','All Seasons',2.50,135.00,4,1,'Crusty long bread perfect for sandwiches'),
(6, 'Pastry','Croissant','Flour, Butter, Sugar, Eggs','French','All Seasons',2.75,300.00,5,2,'Flaky and buttery breakfast pastry'),
(7, 'Muffin','Blueberry Muffin','Flour, Blueberries, Sugar, Eggs, Milk','American','All Seasons',2.25,250.00,4,2,'Soft and sweet muffin filled with blueberries'),
(8, 'Tart','Lemon Tart','Flour, Butter, Sugar, Eggs, Lemon','European','Summer',4.50,310.00,5,3,'Tangy lemon filling in a sweet pastry crust'),
(9, 'Bread','Focaccia','Flour, Water, Salt, Yeast, Olive Oil, Rosemary','Italian','All Seasons',5.00,200.00,4,1,'Olive oil-rich flatbread with rosemary and salt');

