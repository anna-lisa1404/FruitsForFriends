-- ------------------------
-- Adresse des Testusers
-- ------------------------

START TRANSACTION;
USE `FruitsForFriends`;

INSERT INTO `FruitsForFriends`.`addresses` (`id`, `street`, `number`, `city`, `zipCode`)
VALUES (1, 'Test Straße', '1', 'Test Stadt', '99999');

COMMIT;

-- ------------------------
-- Account des Testusers
-- ------------------------

START TRANSACTION;
USE `FruitsForFriends`;

INSERT INTO `FruitsForFriends`.`accounts` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `gender`, `birthdate`, `addresses_id`)
VALUES (1, 'testuser', '123456789', 'test@user.de', 'Test', 'User', 'u', '2021-01-17', 1);

COMMIT;