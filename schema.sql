CREATE DATABASE `yeticave`
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;

USE `yeticave`;

CREATE TABLE `categories` (
    `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `symbol_code` VARCHAR(50) NOT NULL
);

CREATE TABLE lots (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT NOT NULL,
    `winner_id` INT NULL DEFAULT NULL,
    `category_id` INT NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `img` VARCHAR(255) NOT NULL,
    `start_price` INT UNSIGNED NOT NULL,
    `step_price` INT UNSIGNED NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `finished_at` DATE NOT NULL
);

CREATE INDEX lot_name ON lots(name);

CREATE TABLE `bids` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `user_id` INT NOT NULL,
    `lot_id` INT NOT NULL,
    `start_price` INT UNSIGNED NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
);

CREATE TABLE `users` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `contacts` TEXT NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(64) NOT NULL,
    `avatar` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
);

CREATE UNIQUE INDEX user_email ON users(email);
