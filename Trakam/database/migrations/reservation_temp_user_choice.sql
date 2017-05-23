-- Dumping structure for table reservation.temp_user_choice
CREATE TABLE IF NOT EXISTS `temp_user_choice` (
  `temp_id` int(11) NOT NULL AUTO_INCREMENT,
  `train_id` int(11) DEFAULT NULL,
  `station_id` int(11) DEFAULT NULL,
  `destination_id` int(11) DEFAULT NULL,
  `depart_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `roundtrip` tinyint(1) DEFAULT NULL,
  `time_in` time DEFAULT NULL,
  `time_out` time DEFAULT NULL,
  PRIMARY KEY (`temp_id`),
  UNIQUE KEY `temp_user_choice_temp_id_uindex` (`temp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- Dumping data for table reservation.temp_user_choice: ~32 rows (approximately)
DELETE FROM `temp_user_choice`;
/*!40000 ALTER TABLE `temp_user_choice` DISABLE KEYS */;
INSERT INTO `temp_user_choice` (`temp_id`, `train_id`, `station_id`, `destination_id`, `depart_date`, `return_date`, `roundtrip`, `time_in`, `time_out`) VALUES
	(1, 2, 1, NULL, NULL, NULL, NULL, '03:00:00', '03:15:00'),
	(2, 2, 1, NULL, NULL, NULL, NULL, '03:00:00', '03:15:00'),
	(3, 2, 1, NULL, NULL, NULL, NULL, '03:00:00', '03:15:00'),
	(4, 2, 5, NULL, NULL, NULL, NULL, '05:00:00', '05:15:00'),
	(5, 2, 5, NULL, NULL, NULL, NULL, '05:00:00', '05:15:00'),
	(6, 2, 5, NULL, NULL, NULL, NULL, '05:00:00', '05:15:00'),
	(7, 2, 1, NULL, NULL, NULL, NULL, '03:00:00', '03:15:00'),
	(8, 2, 1, NULL, NULL, NULL, NULL, '03:00:00', '03:15:00'),
	(9, 2, 1, 7, '2017-05-22', '2017-05-22', 0, '03:00:00', '03:15:00'),
	(10, 2, 1, 18, NULL, NULL, NULL, '03:00:00', '03:15:00'),
	(11, 2, 1, 18, NULL, NULL, NULL, '03:00:00', '03:15:00'),
	(12, 2, 1, 16, NULL, NULL, NULL, '03:00:00', '03:15:00'),
	(13, 2, 1, 15, NULL, NULL, NULL, '03:00:00', '03:15:00'),
	(14, 2, 1, 16, NULL, NULL, NULL, '03:00:00', '03:15:00'),
	(15, 2, 1, 16, NULL, NULL, NULL, '03:00:00', '03:15:00'),
	(16, 2, 1, 16, NULL, NULL, NULL, '03:00:00', '03:15:00'),
	(17, 2, 1, 14, NULL, NULL, NULL, '03:00:00', '03:15:00'),
	(18, 2, 1, 14, NULL, NULL, NULL, '03:00:00', '03:15:00'),
	(19, 2, 1, 16, NULL, '2017-05-30', NULL, '03:00:00', '03:15:00'),
	(20, 2, 1, 17, '2017-05-29', '2017-05-31', NULL, '03:00:00', '03:15:00'),
	(21, 2, 1, 17, '2017-05-29', NULL, NULL, '03:00:00', '03:15:00'),
	(22, 2, 1, 18, '2017-05-22', NULL, NULL, '03:00:00', '03:15:00'),
	(23, 2, 1, 20, '2017-05-28', NULL, NULL, '03:00:00', '03:15:00'),
	(24, 2, 1, 19, '2017-05-21', NULL, NULL, '03:00:00', '03:15:00'),
	(25, 2, 1, 19, '2017-05-21', NULL, NULL, '03:00:00', '03:15:00'),
	(26, 2, 1, 19, '2017-05-28', NULL, NULL, '03:00:00', '03:15:00'),
	(27, 2, 1, 17, '2017-05-29', NULL, NULL, '03:00:00', '03:15:00'),
	(28, 2, 1, 18, '2017-05-29', '2017-05-24', NULL, '03:00:00', '03:15:00'),
	(29, 2, 1, 17, '2017-05-29', '2017-05-30', NULL, '03:00:00', '03:15:00'),
	(30, 2, 1, 19, '2017-05-28', '2017-05-31', NULL, '03:00:00', '03:15:00'),
	(31, 2, 1, 18, '2017-05-23', '2017-05-31', NULL, '03:00:00', '03:15:00'),
	(32, 2, 1, 19, '2017-05-29', '2017-05-31', NULL, '03:00:00', '03:15:00');
/*!40000 ALTER TABLE `temp_user_choice` ENABLE KEYS */;