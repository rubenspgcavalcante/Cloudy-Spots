SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `cloudyspots` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `cloudyspots` ;

-- -----------------------------------------------------
-- Table `cloudyspots`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cloudyspots`.`user` ;

CREATE  TABLE IF NOT EXISTS `cloudyspots`.`user` (
  `iduser` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `password` VARCHAR(32) NOT NULL ,
  PRIMARY KEY (`iduser`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cloudyspots`.`link`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cloudyspots`.`link` ;

CREATE  TABLE IF NOT EXISTS `cloudyspots`.`link` (
  `idlink` INT NOT NULL ,
  `vertex_ids` VARCHAR(100) NULL COMMENT 'vertex ids separeted per comma' ,
  PRIMARY KEY (`idlink`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cloudyspots`.`vertex`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cloudyspots`.`vertex` ;

CREATE  TABLE IF NOT EXISTS `cloudyspots`.`vertex` (
  `idvertex` INT NOT NULL ,
  `posx` INT NULL ,
  `posy` INT NULL ,
  `label` VARCHAR(45) NULL ,
  `idlink_fk` INT NOT NULL ,
  PRIMARY KEY (`idvertex`) ,
  INDEX `fk_vertex_link1` (`idlink_fk` ASC) ,
  CONSTRAINT `fk_vertex_link1`
    FOREIGN KEY (`idlink_fk` )
    REFERENCES `cloudyspots`.`link` (`idlink` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cloudyspots`.`graffle`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cloudyspots`.`graffle` ;

CREATE  TABLE IF NOT EXISTS `cloudyspots`.`graffle` (
  `idgraffle` INT NOT NULL ,
  `idvertex_fk` INT NOT NULL ,
  PRIMARY KEY (`idgraffle`) ,
  INDEX `fk_graffle_vertex1` (`idvertex_fk` ASC) ,
  CONSTRAINT `fk_graffle_vertex1`
    FOREIGN KEY (`idvertex_fk` )
    REFERENCES `cloudyspots`.`vertex` (`idvertex` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cloudyspots`.`file`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cloudyspots`.`file` ;

CREATE  TABLE IF NOT EXISTS `cloudyspots`.`file` (
  `idfile` INT NOT NULL ,
  `iduser_fk` INT NOT NULL ,
  `idgraffle_fk` INT NOT NULL ,
  `name` VARCHAR(100) NULL ,
  `type` VARCHAR(10) NULL COMMENT 'File extension type.\ne.g. svg, jpg, png' ,
  PRIMARY KEY (`idfile`) ,
  INDEX `fk_file_user` (`iduser_fk` ASC) ,
  INDEX `fk_file_graffle1` (`idgraffle_fk` ASC) ,
  CONSTRAINT `fk_file_user`
    FOREIGN KEY (`iduser_fk` )
    REFERENCES `cloudyspots`.`user` (`iduser` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_file_graffle1`
    FOREIGN KEY (`idgraffle_fk` )
    REFERENCES `cloudyspots`.`graffle` (`idgraffle` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'This table store the graffles files of the user' ;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
