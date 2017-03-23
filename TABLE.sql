CREATE TABLE IF NOT EXISTS `updated_users_demo` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `updated_users_demo`
--

INSERT INTO `updated_users_demo` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'Victor', 'Olu', 'victor', '1234'),
(2, 'Emy', 'Nero', 'emy', '4321'),
(3, 'Saeed', 'Ansari', 'saeed', '45678'),
(4, 'Anna', 'Bola', 'anna', '34589'),
(5, 'Greg', 'Joshua', 'greg', '98743');