-- ---------------------
-- Die Produkte
-- ---------------------

START TRANSACTION;
USE `FruitsForFriends`;

INSERT INTO `FruitsForFriends`.`drinks` (`id`, `name`, `typeOfDrink`, `taste`, `price`)
VALUES 
(1, 'Green Bomb', 's', 'bitter', 3.50),
(2, 'Kiba', 's', 'süß', 2.90),
(3, 'Rosa Traum', 's', 'süß', 3.50),
(4, 'The Sun', 's', 'sauer', 3.90),
(5, 'Malibu', 's', 'sauer', 4.50),
(6, 'Mr. Orange', 's', 'süß', 4.50),
(7, 'Mint Berry', 's', 'sauer', 4.00),
(8, 'Very Berry', 's', 'süß', 3.50),
(9, 'Exotic', 's', 'süß', 4.90),
(10, 'Creamie Peach', 's', 'süß', 4.00),
(11, 'Apfelsaft', 'j', 'süß', 2.90),
(12, 'Orangensaft', 'j', 'süß', 2.90),
(13, 'Mangosaft', 'j', 'süß', 3.50),
(14, 'Himbeerensaft', 'j', 'süß', 3.40),
(15, 'Granatapfelsaft', 'j', 'bitter', 4.00),
(16, 'Ananassaft', 'j', 'sauer', 2.50),
(17, 'Pfirsich-Nektar', 'j', 'süß', 3.50),
(18, 'Grüner Traubensaft', 'j', 'süß', 2.90),
(19, 'Multi-Mix Saft', 'j', 'süß', 4.50),
(20, 'Orangen-Karotten Saft', 'j', 'süß', 3.90),
(21, 'Zitronen-Gurken Saft', 'j', 'sauer', 4.00);

COMMIT;

-- -----------------------------
-- Zusammensetzung der Produkte
-- -----------------------------

START TRANSACTION;
USE `FruitsForFriends`;

INSERT INTO `FruitsForFriends`.`composition_of_drinks` (`id`, `amountInPercent`, `drinks_id`, `ingredients_id`)
VALUES 
(1, 10, 1, 21),
(2, 30, 1, 26),
(3, 60, 1, 2),
(4, 50, 2, 9),
(5, 50, 2, 3),
(6, 20, 3, 8),
(7, 20, 3, 6),
(8, 60, 3, 3),
(9, 20, 4, 1),
(10, 50, 4, 12),
(11, 30, 4, 6),
(12, 10, 5, 20),
(13, 80, 5, 3),
(14, 10, 5, 17),
(15, 50, 6, 28),
(16, 20, 6, 11),
(17, 30, 6, 12),
(18, 10, 7, 10),
(19, 10, 7, 22),
(20, 80, 7, 5),
(21, 30, 8, 5),
(22, 30, 8, 8),
(23, 40, 8, 6),
(24, 20, 9, 1),
(25, 20, 9, 20),
(26, 60, 9, 15),
(27, 70, 10, 13),
(28, 20, 10, 3),
(29, 10, 10, 12),
(30, 100, 11, 2),
(31, 100, 12, 12),
(32, 100, 13, 11),
(33, 100, 14, 8),
(34, 100, 15, 7),
(35, 100, 16, 1),
(36, 100, 17, 13),
(37, 100, 18, 16),
(38, 50, 19, 2),
(39, 20, 19, 12),
(40, 30, 19, 9),
(41, 50, 20, 12),
(42, 50, 20, 28),
(43, 10, 21, 17),
(44, 90, 21, 27);

COMMIT;