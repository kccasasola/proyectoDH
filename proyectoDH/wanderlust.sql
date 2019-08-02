-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema wanderlust
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema wanderlust
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `wanderlust` DEFAULT CHARACTER SET latin1 ;
USE `wanderlust` ;

-- -----------------------------------------------------
-- Table `wanderlust`.`country`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wanderlust`.`country` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `iso` CHAR(2) NULL DEFAULT NULL,
  `name` VARCHAR(80) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 241
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `wanderlust`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wanderlust`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  `user` VARCHAR(45) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `password` VARCHAR(90) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `email` VARCHAR(45) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `avatar` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE,
  UNIQUE INDEX `user_UNIQUE` (`user` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `wanderlust`.`questions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wanderlust`.`questions` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `question` VARCHAR(200) CHARACTER SET 'utf16' COLLATE 'utf16_unicode_ci' NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf16
COLLATE = utf16_unicode_ci;


-- -----------------------------------------------------
-- Table `wanderlust`.`journey`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wanderlust`.`journey` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user` INT(11) NOT NULL,
  `country` INT(11) NOT NULL,
  `question` INT(11) NOT NULL,
  `answer` TEXT CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  INDEX `country.id_idx` (`country` ASC) VISIBLE,
  INDEX `user.id_idx` (`user` ASC) VISIBLE,
  INDEX `question.id_idx` (`question` ASC) VISIBLE,
  CONSTRAINT `user.id`
    FOREIGN KEY (`user`)
    REFERENCES `wanderlust`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `country.id`
    FOREIGN KEY (`country`)
    REFERENCES `wanderlust`.`country` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `question.id`
    FOREIGN KEY (`question`)
    REFERENCES `wanderlust`.`questions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
