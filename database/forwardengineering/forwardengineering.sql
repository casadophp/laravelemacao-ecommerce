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
-- Table `laravelinaction`.`tb_categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravelinaction`.`tb_categoria` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nm_categoria` VARCHAR(100) NOT NULL COMMENT '',
  `nm_rota` VARCHAR(50) NOT NULL COMMENT '',
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP COMMENT '',
  `updated_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
  `deleted_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id_categoria`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `laravelinaction`.`tb_produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravelinaction`.`tb_produto` (
  `id_produto` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `id_categoria` INT NOT NULL COMMENT '',
  `nm_produto` VARCHAR(45) NOT NULL COMMENT '',
  `nm_descricao` TEXT NOT NULL COMMENT '',
  `nm_imagem` VARCHAR(100) NOT NULL COMMENT '',
  `cd_valor` DOUBLE NOT NULL COMMENT '',
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP COMMENT '',
  `updated_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
  `deleted_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id_produto`)  COMMENT '',
  INDEX `fk_categoria` (`id_categoria` ASC)  COMMENT '',
  CONSTRAINT `fk_categoria`
    FOREIGN KEY (`id_categoria`)
    REFERENCES `laravelinaction`.`tb_categoria` (`id_categoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `laravelinaction`.`tb_pagina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravelinaction`.`tb_pagina` (
  `id_pagina` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nm_titulo` VARCHAR(45) NOT NULL COMMENT '',
  `nm_descricao` TEXT NOT NULL COMMENT '',
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP COMMENT '',
  `updated_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
  `deleted_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id_pagina`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `laravelinaction`.`tb_menu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravelinaction`.`tb_menu` (
  `id_menu` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nm_menu` VARCHAR(100) NOT NULL COMMENT '',
  `nm_link` VARCHAR(45) NOT NULL COMMENT '',
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP COMMENT '',
  `updated_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
  `deleted_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
  `id_pagina` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id_menu`)  COMMENT '',
  INDEX `fk_menu_pagina` (`id_pagina` ASC)  COMMENT '',
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