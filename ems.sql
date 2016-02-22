-- ----------------------------
-- Employee Table
-- ----------------------------
DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mobile_no` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records
-- ----------------------------
BEGIN;
INSERT INTO `employees` VALUES ('1', 'Thet Win Htwe', '+959440009095', 'thetwinhtwe@gmail.com', 'male', '2015-01-12', 'No.51, Housing (3), 4 (C), Bahan Township, Yangon
');
INSERT INTO `employees` VALUES ('2', 'Thet', '+959440009095', 'thetwinhtwe@gmail.com', 'male', '2015-01-12', 'No.51, Housing (3), 4 (C), Bahan Township, Yangon
');
INSERT INTO `employees` VALUES ('3', 'Win', '+959440009095', 'thetwinhtwe@gmail.com', 'male', '2015-01-12', 'No.51, Housing (3), 4 (C), Bahan Township, Yangon
');
INSERT INTO `employees` VALUES ('4', 'Htwe', '+959440009095', 'thetwinhtwe@gmail.com', 'male', '2015-01-12', 'No.51, Housing (3), 4 (C), Bahan Township, Yangon
');
COMMIT;