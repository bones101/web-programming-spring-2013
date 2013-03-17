SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `sbone1` DEFAULT CHARACTER SET latin1 ;
USE `sbone1` ;

-- -----------------------------------------------------
-- Table `sbone1`.`events_list`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sbone1`.`events_list` (
  `item` INT(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT ,
  `event_type` VARCHAR(3) NOT NULL ,
  `event_date` DATE NOT NULL ,
  `events_time` VARCHAR(15) NOT NULL ,
  `events_location` VARCHAR(45) NOT NULL ,
  `event_details` TEXT NOT NULL ,
  PRIMARY KEY (`item`) ,
  INDEX `event_type_idx` (`event_type` ASC) )
ENGINE = MyISAM
AUTO_INCREMENT = 235
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sbone1`.`events_type`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sbone1`.`events_type` (
  `event_type` VARCHAR(3) NOT NULL ,
  `event_type_desc` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`event_type`) ,
  UNIQUE INDEX `idevents_type_UNIQUE` (`event_type` ASC) )
ENGINE = MyISAM
DEFAULT CHARACTER SET = latin1
COMMENT = 'Type of event';

USE `sbone1` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
