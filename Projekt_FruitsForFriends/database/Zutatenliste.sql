--
-- bearbeitet von: Anna-Lisa Merkel
--

-- -------------------------------------------------------
-- eine Reihe von Zutaten der Säfte und Smoothies
-- 
-- es gibt drei Kategorien von Zutaten:
-- -> Obst
-- -> Gemüse
-- -> Andere
-- 
-- 'origin' beschreibt das Herkunftsgebiet jeder Zutat
-- hier gibt es heimisch, mediterran oder exotisch
-- -------------------------------------------------------

START TRANSACTION;
USE `FruitsForFriends`;

INSERT INTO `FruitsForFriends`.`ingredients` (`id`, `description`, `category`, `origin`)
VALUES 
(1, 'Ananas', 'Obst', 'exotisch'),
(2, 'Apfel', 'Obst', 'heimisch'),
(3, 'Banane', 'Obst', 'exotisch'),
(4, 'Birne', 'Obst', 'heimisch'),
(5, 'Blaubeere', 'Obst', 'heimisch'),
(6, 'Erdbeere', 'Obst', 'heimisch'),
(7, 'Granatapfel', 'Obst', 'mediterran'),
(8, 'Himbeere', 'Obst', 'heimisch'),
(9, 'Kirsche', 'Obst', 'heimisch'),
(10, 'Limette', 'Obst', 'mediterran'),
(11, 'Mango', 'Obst', 'exotisch'),
(12, 'Orange', 'Obst', 'mediterran'),
(13, 'Pfirsich', 'Obst', 'heimisch'),
(14, 'Pflaume', 'Obst', 'heimisch'),
(15, 'Wassermelone', 'Obst', 'exotisch'),
(16, 'Weintraube', 'Obst', 'mediterran'),
(17, 'Zitrone', 'Obst', 'mediterran'),
(18, 'Basilikum', 'Andere', 'mediterran'),
(19, 'Kaffee', 'Andere', 'exotisch'),
(20, 'Kokosnuss', 'Andere', 'exotisch'),
(21, 'Matcha', 'Andere', 'exotisch'),
(22, 'Minze', 'Andere', 'heimisch'),
(23, 'Zimt', 'Andere', 'exotisch'),
(24, 'Avocado', 'Gemüse', 'exotisch'),
(25, 'Chilli', 'Gemüse', 'exotisch'),
(26, 'Grünkohl', 'Gemüse', 'heimisch'),
(27, 'Gurke', 'Gemüse', 'heimisch'),
(28, 'Karotte', 'Gemüse', 'heimisch'),
(29, 'Kürbis', 'Gemüse', 'heimisch'),
(30, 'Tomate', 'Gemüse', 'mediterran');

COMMIT;