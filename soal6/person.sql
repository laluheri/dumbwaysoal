CREATE DATABASE person;

CREATE TABLE `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY `id` (`id`)
)

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) NOT NULL,
  `date_of _birth` date NOT NULL,
  `place_of _birth_id` int(11) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `last_education` enum('SD','SMP','SMA','S1','S2') NOT NULL,
  `religion` enum('Islam','Katolik','Kristen') NOT NULL,
  `hoby` enum('Renang','Mancing','Game','Gibah','Programing') NOT NULL,
  PRIMARY KEY (`id`)
)

INSERT INTO `person`.`cities` (`id`, `name`) VALUES ('1', 'Jakarta');
INSERT INTO `person`.`cities` (`id`, `name`) VALUES ('2', 'Bandung');

INSERT INTO `person`.`biodata` (`full_name`, `date_of _birth`, `place_of _birth_id`, `phone_number`, `address`, `last_education`, `religion`, `hoby`) VALUES ('Lucinta Luna', '1992-07-12', '1', '081111', 'Jakarta', 'S1', 'Kristen', 'Renang');
INSERT INTO `person`.`biodata` (`full_name`, `date_of _birth`, `place_of _birth_id`, `phone_number`, `address`, `last_education`, `religion`, `hoby`) VALUES ('Satrio', '2001-07-21', '1', '082222', 'Jakarta', 'SMA', 'Islam', 'Game,Gibah');




