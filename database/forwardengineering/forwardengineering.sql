-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema laravelinaction
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema laravelinaction
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `laravelinaction` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `laravelinaction` ;

-- -----------------------------------------------------
-- Table `laravelinaction`.`tb_produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravelinaction`.`tb_produto` (
  `id_produto` INT NOT NULL AUTO_INCREMENT,
  `nm_produto` VARCHAR(45) NOT NULL,
  `nm_descricao` TEXT NOT NULL,
  `cd_valor` DOUBLE NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id_produto`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `laravelinaction`.`tb_categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravelinaction`.`tb_categoria` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT,
  `id_produto` INT NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id_categoria`),
  INDEX `fk_categoria_produto` (`id_produto` ASC),
  CONSTRAINT `fk_produto`
    FOREIGN KEY (`id_produto`)
    REFERENCES `laravelinaction`.`tb_produto` (`id_produto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `laravelinaction`.`tb_pagina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravelinaction`.`tb_pagina` (
  `id_pagina` INT NOT NULL AUTO_INCREMENT,
  `nm_titulo` VARCHAR(45) NOT NULL,
  `nm_descricao` TEXT NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id_pagina`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `laravelinaction`.`tb_menu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravelinaction`.`tb_menu` (
  `id_menu` INT NOT NULL AUTO_INCREMENT,
  `nm_menu` VARCHAR(100) NOT NULL,
  `nm_link` VARCHAR(45) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  `id_pagina` INT NOT NULL,
  PRIMARY KEY (`id_menu`),
  INDEX `fk_menu_pagina` (`id_pagina` ASC),
  CONSTRAINT `fk_tb_menu_tb_pagina1`
    FOREIGN KEY (`id_pagina`)
    REFERENCES `laravelinaction`.`tb_pagina` (`id_pagina`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
