delimiter $$

CREATE TABLE `events_list` (
  `item` int(4) unsigned zerofill NOT NULL auto_increment,
  `event_type` varchar(3) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` varchar(15) NOT NULL,
  `event_location` varchar(45) NOT NULL,
  `event_details` text NOT NULL,
  `event_type_event_type` varchar(3) NOT NULL,
  PRIMARY KEY  (`item`),
  KEY `event_type_idx` (`event_type`),
  KEY `fk_events_list_events_type_idx` (`event_type_event_type`),
  CONSTRAINT `fk_events_list_events_type` FOREIGN KEY (`event_type_event_type`) REFERENCES `events_type` (`event_type`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=235 DEFAULT CHARSET=latin1$$

delimiter $$

CREATE TABLE `events_type` (
  `event_type` varchar(3) NOT NULL,
  `event_type_desc` varchar(45) NOT NULL,
  PRIMARY KEY  (`event_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1$$

