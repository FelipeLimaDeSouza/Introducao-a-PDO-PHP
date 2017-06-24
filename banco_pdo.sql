-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema cadastroaluno
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema cadastroaluno
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `cadastroaluno` DEFAULT CHARACTER SET latin1 ;
USE `cadastroaluno` ;

-- -----------------------------------------------------
-- Table `cadastroaluno`.`tbl_aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cadastroaluno`.`tbl_aluno` (
  `COD_ALUNO` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `NOME` VARCHAR(500) NOT NULL COMMENT '',
  `SOBRENOME` VARCHAR(500) NOT NULL COMMENT '',
  `IDADE` INT(10) UNSIGNED NOT NULL COMMENT '',
  `EMAIL` VARCHAR(500) NOT NULL COMMENT '',
  `TELEFONE` VARCHAR(20) NOT NULL COMMENT '',
  PRIMARY KEY (`COD_ALUNO`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
