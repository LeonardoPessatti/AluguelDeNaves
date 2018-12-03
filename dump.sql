-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema schema
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema marcondes
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema marcondes
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `marcondes` DEFAULT CHARACTER SET latin1 ;
USE `marcondes` ;

-- -----------------------------------------------------
-- Table `marcondes`.`migrations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `marcondes`.`migrations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `batch` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `marcondes`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `marcondes`.`users` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `email` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `email_verified_at` TIMESTAMP NULL DEFAULT NULL,
  `password` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `remember_token` VARCHAR(100) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = MyISAM
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `marcondes`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `marcondes`.`clientes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `sexo` VARCHAR(45) NULL,
  `raça` VARCHAR(45) NULL,
  `planeta_origem` VARCHAR(45) NULL,
  `deleted_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `created_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `marcondes`.`naves`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `marcondes`.`naves` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `placa` VARCHAR(45) NOT NULL,
  `modelo` VARCHAR(45) NULL,
  `ano` VARCHAR(45) NULL,
  `pressao_maxima` VARCHAR(45) NULL,
  `deleted_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `created_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `marcondes`.`aluguel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `marcondes`.`aluguel` (
  `clientes_id` INT NOT NULL,
  `naves_id` INT NOT NULL,
  `hora` DATETIME NULL,
  `planeta` VARCHAR(45) NULL,
  `finalizado` DATETIME NULL,
  `deleted_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `created_at` TIMESTAMP NULL,
  PRIMARY KEY (`clientes_id`, `naves_id`),
  INDEX `fk_clientes_has_naves_naves1_idx` (`naves_id` ASC),
  INDEX `fk_clientes_has_naves_clientes_idx` (`clientes_id` ASC),
  CONSTRAINT `fk_clientes_has_naves_clientes`
    FOREIGN KEY (`clientes_id`)
    REFERENCES `marcondes`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_clientes_has_naves_naves1`
    FOREIGN KEY (`naves_id`)
    REFERENCES `marcondes`.`naves` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
