-- Anthony A. Cabulang
CREATE SCHEMA `hackerhero_practice` ;
CREATE TABLE `hackerhero_practice`.`users` (
  `id` INT NOT NULL,
  `first_name` VARCHAR(255) NULL,
  `last_name` VARCHAR(255) NULL,
  `email` VARCHAR(255) NULL,
  `encrypted_password` VARCHAR(255) NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`));


INSERT INTO `hackerhero_practice`.`users` (`id`, `first_name`, `last_name`, `email`, `encrypted_password`, `created_at`, `updated_at`) VALUES ('1', 'John ', 'Doe', 'john.doe@email.com', 'pass123', '2024-02-01', '2024-02-01');
INSERT INTO `hackerhero_practice`.`users` (`id`, `first_name`, `last_name`, `email`, `encrypted_password`, `created_at`, `updated_at`) VALUES ('2', 'Maria', 'Clara', 'maria.clara@gmail.com', 'wordpass123', '2024-02-01', '2024-02-01');
INSERT INTO `hackerhero_practice`.`users` (`id`, `first_name`, `last_name`, `email`, `encrypted_password`, `created_at`, `updated_at`) VALUES ('3', 'Juan ', 'Dela Cruz', 'juan.delacruz@mail.com', 'password123', '2024-02-01', '2024-02-01');

UPDATE `hackerhero_practice`.`users` SET `last_name` = 'Smiths', `email` = 'john.smiths@email.com' WHERE (`id` = '1');

UPDATE users
SET first_name = 'value',
    last_name = 'value1',
    email = 'value2'
WHERE last_name = 'Choi';


UPDATE users
SET first_name = 'value',
    last_name = 'value1',
    email = 'value2'
WHERE id IN (3, 5, 7, 12, 19);

DELETE FROM `hackerhero_practice`.`users` WHERE (`id` = '1');

DELETE FROM users;

ALTER TABLE `hackerhero_practice`.`users` 
CHANGE COLUMN `email` `email_address` VARCHAR(255) NULL DEFAULT NULL ;

ALTER TABLE `hackerhero_practice`.`users` 
CHANGE COLUMN `id` `id` BIGINT(255) NOT NULL ,

ALTER TABLE `hackerhero_practice`.`users` 
ADD COLUMN `is_active` TINYINT NOT NULL DEFAULT 0 AFTER `updated_at`;
