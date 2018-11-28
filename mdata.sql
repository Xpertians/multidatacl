CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) NOT NULL AUTO_INCREMENT,
PRIMARY KEY  (id),
  `identifier` varchar(50) NOT NULL,
UNIQUE KEY `identifier` (`identifier`),
  `email` varchar(50) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `avatar_url` varchar(255)
) ENGINE=InnoDB;