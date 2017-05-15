/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_locations

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-15 21:25:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for locations
-- ----------------------------
DROP TABLE IF EXISTS `locations`;
CREATE TABLE `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lat` double DEFAULT NULL,
  `long` double DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of locations
-- ----------------------------
INSERT INTO `locations` VALUES ('12', '10.779553993171625', '106.69495403766632', '', 'đối diện Nam kỳ khỏi nghĩa');
INSERT INTO `locations` VALUES ('13', '10.778618609707495', '106.69597327709198', '', 'dinh doc lap nam ky khoi nghia');
INSERT INTO `locations` VALUES ('14', '10.778178583241427', '106.69646680355072', '', 'truoc cong dinh doc lap');
INSERT INTO `locations` VALUES ('15', '10.779580341959495', '106.69684767723083', '', '');
INSERT INTO `locations` VALUES ('16', '10.779111333190405', '106.69733047485352', '', 'le duan');
INSERT INTO `locations` VALUES ('17', '10.780523627045692', '106.6939777135849', '', 'vo van tan');
INSERT INTO `locations` VALUES ('18', '10.78293715866379', '106.69618785381317', '', 'cong truong qte');
INSERT INTO `locations` VALUES ('19', '10.782341682137938', '106.69625759124756', '', 'cong truong qte');
INSERT INTO `locations` VALUES ('20', '10.782315333591864', '106.69561386108398', '', 'cong truong qte');
INSERT INTO `locations` VALUES ('21', '10.78144583027696', '106.69479846954346', '', 'paster');
INSERT INTO `locations` VALUES ('22', '10.780481469116125', '106.69581234455109', 'pasteur sailing', '');
INSERT INTO `locations` VALUES ('23', '10.782873922274502', '106.69556558132172', 'cong truong quoc te', '');
INSERT INTO `locations` VALUES ('24', '10.783569521825585', '106.69484943151474', '', 'pvcombank pham ngocthach');
INSERT INTO `locations` VALUES ('25', '10.78344304929957', '106.69078588485718', '', 'nam ky khoi nghia va dien bien phu');
INSERT INTO `locations` VALUES ('26', '10.78147481376127', '106.69295310974121', '', 'nam ky khoi nghia +nguyen dinh chieu');
INSERT INTO `locations` VALUES ('27', '10.779106063424795', '106.69069468975067', '', 'prem bistro cafe');
INSERT INTO `locations` VALUES ('28', '10.76792341303286', '106.69531345367432', 'Chợ Bình Dân', 'Bệnh viện mắt Sài Gòn');
INSERT INTO `locations` VALUES ('29', '10.769862752571367', '106.6940689086914', 'Bệnh viện mắt Sài Gòn', '');
INSERT INTO `locations` VALUES ('30', '10.759322713359799', '106.68402671813965', 'Đại học Sài Gòn', '');
INSERT INTO `locations` VALUES ('31', '10.77142264705262', '106.69325351715088', 'Ngã sáu Nguyễn Trãi', '');
INSERT INTO `locations` VALUES ('32', '10.761135626350834', '106.6832971572876', 'ĐH KHTN', '');
INSERT INTO `locations` VALUES ('33', '10.765056540413273', '106.68166637420654', 'Trường THPT Lê Hồng Phong', '');
INSERT INTO `locations` VALUES ('35', '10.7712118509732', '106.68724536895752', 'Coffe tour ', '');
INSERT INTO `locations` VALUES ('36', '10.768302850011898', '106.6846489906311', 'Bệnh viện Từ Dũ', '');
INSERT INTO `locations` VALUES ('38', '10.765140860585527', '106.69012069702148', 'Trường THCS Chu Văn An', '');
INSERT INTO `locations` VALUES ('39', '10.773361964060282', '106.68936967849731', 'Công viên Tao Đàn', '');
INSERT INTO `locations` VALUES ('40', '10.76252692427571', '106.68673038482666', 'Bệnh viên Thẩm Mỹ Việt Mỹ', '');
INSERT INTO `locations` VALUES ('41', '10.766447820238298', '106.69164419174194', 'Baba\'s Kitchen', '');
INSERT INTO `locations` VALUES ('42', '10.766637539716722', '106.68837189674377', 'Chung cư Bộ Công An', '');
INSERT INTO `locations` VALUES ('43', '10.769968151101605', '106.68615102767944', 'Quán Đo Đo', '');
INSERT INTO `locations` VALUES ('44', '10.770389744853786', '106.68642997741699', 'Balo Hàng Hiệu', '');
INSERT INTO `locations` VALUES ('45', '10.770753368991052', '106.68680548667908', 'CellphoneS', '');
INSERT INTO `locations` VALUES ('46', '10.768176371071988', '106.68433248996735', 'Paris Baguette', '');
INSERT INTO `locations` VALUES ('47', '10.773646536700824', '106.68949842453003', 'Phong Vũ', '');
INSERT INTO `locations` VALUES ('48', '10.767883888320046', '106.68546169996262', 'Bộ Tư Lệnh Bộ Đội Biên Phòng', '');
INSERT INTO `locations` VALUES ('49', '10.767786394006317', '106.68569773435593', 'Ngọc Tiên Design', '');
INSERT INTO `locations` VALUES ('50', '10.767536070623818', '106.68627440929413', 'ATM Ngân hàng TMCP Á Châu', '');
INSERT INTO `locations` VALUES ('51', '10.767981382602253', '106.68669015169144', 'Quán Ốc Dương', '');
INSERT INTO `locations` VALUES ('52', '10.768287040147328', '106.68700933456421', 'Nhà Hàng Tư Trì', '');
INSERT INTO `locations` VALUES ('53', '10.767096027963078', '106.68736070394516', 'Bộ Tư lệnh Cảnh vệ', '');
INSERT INTO `locations` VALUES ('54', '10.768418788993516', '106.68984711170197', 'Alo Trà', '');
INSERT INTO `locations` VALUES ('55', '10.763333241724728', '106.68703883886337', 'Nhà Hàng Phương Nam', '');
INSERT INTO `locations` VALUES ('56', '10.768002462442897', '106.6889700293541', 'Quảng cáo Đại Vạn Phước', '');
INSERT INTO `locations` VALUES ('57', '10.767546610559908', '106.6905015707016', 'Phở Quỳnh', '');
INSERT INTO `locations` VALUES ('58', '10.76744911613702', '106.68855428695679', 'Viet Capital Bank', '');
INSERT INTO `locations` VALUES ('59', '10.773936378928608', '106.69710516929626', 'Hotel Hà My', '');
INSERT INTO `locations` VALUES ('60', '10.783279688874766', '106.70507669448853', 'Tòa Án Nhân Dân Quận 1', '');
INSERT INTO `locations` VALUES ('61', '10.775959996889897', '106.69164419174194', 'Cao Su Miền Nam', '');
INSERT INTO `locations` VALUES ('62', '10.777272179391751', '106.70183658599854', 'Vườn Chi Lăng', '');
INSERT INTO `locations` VALUES ('63', '10.775778188019814', '106.70217454433441', 'Công viên Lâm Sơn', '');
INSERT INTO `locations` VALUES ('64', '10.772840246854134', '106.70260906219482', 'Cửa hàng điện tử Game và Kim khí điện', '');
INSERT INTO `locations` VALUES ('65', '10.774695237258014', '106.69959425926208', 'Quán 77', '');
INSERT INTO `locations` VALUES ('66', '10.788480830455548', '106.6995620727539', 'Curves Nguyễn Đình Chiểu', '');
INSERT INTO `locations` VALUES ('67', '10.786452027063678', '106.69374704360962', 'Công viên Lê Văn Tám', '');
INSERT INTO `locations` VALUES ('68', '10.786409869964924', '106.69762015342712', 'Trung Tâm Dạy Nghề ', '');
INSERT INTO `locations` VALUES ('69', '10.784691963163917', '106.70365512371063', 'Trung Tâm Mục Vụ Tổng Giáo Phận Sài Gòn', '');
INSERT INTO `locations` VALUES ('70', '10.786533706425706', '106.70158445835114', 'Cty TNHH Formosa', '');
INSERT INTO `locations` VALUES ('71', '10.77678208780125', '106.69796884059906', 'nguyendu + nam ky khoi nghia', 'nguyendu + nam ky khoi nghia');
INSERT INTO `locations` VALUES ('72', '10.77765160459121', '106.69699251651764', 'han thuyen nam ky kn', 'han thuyen nam ky kn');
INSERT INTO `locations` VALUES ('74', '10.778631784142675', '106.69787093997002', 'Pasteur cắt Hàn Thuyên', 'The coffee bean and tea leaf');
INSERT INTO `locations` VALUES ('75', '10.777725381657786', '106.69885396957397', 'Pasteur cắt Nguyễn Du', 'Highlands Coffee Nguyễn Du');
INSERT INTO `locations` VALUES ('76', '10.77744081287279', '106.69300004839897', 'Minh Khai vắt Huyền Trân Công Chúa', 'Ocean Dunes showroom');
INSERT INTO `locations` VALUES ('77', '10.778420993110723', '106.69389456510544', 'Nguyễn Thị Minh Khai cắt Lê Quý Đôn', '');
INSERT INTO `locations` VALUES ('78', '10.77578609275558', '106.69909000396729', 'Công viên Bách Tùn Diệp', '');
INSERT INTO `locations` VALUES ('79', '10.774826983300912', '106.69622004032135', 'Tổng công ty thép Việt Nam', '');
INSERT INTO `locations` VALUES ('80', '10.774668888042521', '106.69323205947876', 'Công viên Tao Đàn', '');
INSERT INTO `locations` VALUES ('81', '10.776128631106028', '106.69458121061325', 'Nhà hàng cà phê 30/4', 'Huyền Trân Công CHúa');
INSERT INTO `locations` VALUES ('82', '10.773119550117336', '106.69762015342712', 'PNJ Bến Thành', '');
INSERT INTO `locations` VALUES ('83', '10.776762326026828', '106.69996172189713', ' Vincom Center Hokaido Japanese Restaurant', '');
INSERT INTO `locations` VALUES ('84', '10.77570704538859', '106.70036673545837', 'Cafe Cosmo', '');
INSERT INTO `locations` VALUES ('88', '10.77348844082262', '106.69450879096985', ' Trung Tâm Thông Tin Khoa Học & Công Nghệ (Cesti)', '');
INSERT INTO `locations` VALUES ('89', '10.785166232893177', '106.70312404632568', 'Khoa dược, đh y dược tphcm', '');
INSERT INTO `locations` VALUES ('90', '10.781646079747954', '106.69694423675537', 'công ty thoát nước Đô Thành', '');
INSERT INTO `locations` VALUES ('91', '10.778463151328905', '106.70290946960449', 'Vườn Chi Lăng', '');
INSERT INTO `locations` VALUES ('92', '10.782257366782378', '106.7061710357666', 'Thảo cầm viên', '');
INSERT INTO `locations` VALUES ('93', '10.77350952027783', '106.68971836566925', 'Bánh mì Kiwi cmt8', '');
INSERT INTO `locations` VALUES ('95', '10.774263109832686', '106.68821632862091', 'vo van tan + cmt8', 'vo van tan + cmt8');
INSERT INTO `locations` VALUES ('96', '10.775738664337885', '106.68955206871033', 'vo van tan + huyen thanh quang', 'vo van tan + huyen thanh quang');
INSERT INTO `locations` VALUES ('97', '10.776544946422607', '106.6903406381607', '', '');
INSERT INTO `locations` VALUES ('98', '10.779359012069659', '106.69293165206909', '', 'vo van tan + le quy don');
INSERT INTO `locations` VALUES ('99', '10.780323376827686', '106.69184803962708', '', 'nha hang stix');
INSERT INTO `locations` VALUES ('100', '10.776903293322619', '106.69060349464417', 'pizza hut truong dinh', 'pizza hut truong dinh');
INSERT INTO `locations` VALUES ('101', '10.77767268375493', '106.6913652420044', '', 'cty du lich hoa binh');
INSERT INTO `locations` VALUES ('102', '10.778157504113139', '106.6917622089386', 'cowboyjack', '');
INSERT INTO `locations` VALUES ('103', '10.778157504113139', '106.6917622089386', 'cowboyjack', '');

-- ----------------------------
-- Table structure for mapping
-- ----------------------------
DROP TABLE IF EXISTS `mapping`;
CREATE TABLE `mapping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location_1` int(11) DEFAULT NULL,
  `location_2` int(11) DEFAULT NULL,
  `distances` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mapping
-- ----------------------------
INSERT INTO `mapping` VALUES ('16', '13', '14', '72.8844');
INSERT INTO `mapping` VALUES ('17', '13', '15', '143.544');
INSERT INTO `mapping` VALUES ('18', '15', '13', '143.544');
INSERT INTO `mapping` VALUES ('25', '15', '22', '151.265');
INSERT INTO `mapping` VALUES ('26', '22', '21', '154.328');
INSERT INTO `mapping` VALUES ('27', '14', '72', '82.1366');
INSERT INTO `mapping` VALUES ('28', '14', '16', '140.362');
INSERT INTO `mapping` VALUES ('29', '16', '14', '140.362');
INSERT INTO `mapping` VALUES ('32', '12', '13', '152.53');
INSERT INTO `mapping` VALUES ('34', '17', '12', '151.822');
INSERT INTO `mapping` VALUES ('35', '16', '15', '74.2518');
INSERT INTO `mapping` VALUES ('36', '12', '22', '139.533');
INSERT INTO `mapping` VALUES ('39', '21', '17', '136.362');
INSERT INTO `mapping` VALUES ('41', '20', '21', '131.604');
INSERT INTO `mapping` VALUES ('43', '20', '19', '70.4556');
INSERT INTO `mapping` VALUES ('45', '19', '18', '66.7254');
INSERT INTO `mapping` VALUES ('47', '18', '23', '68.4111');
INSERT INTO `mapping` VALUES ('48', '23', '20', '62.4055');
INSERT INTO `mapping` VALUES ('49', '23', '24', '110.132');
INSERT INTO `mapping` VALUES ('50', '24', '23', '110.132');
INSERT INTO `mapping` VALUES ('51', '72', '74', '145.373');
INSERT INTO `mapping` VALUES ('52', '74', '72', '145.373');
INSERT INTO `mapping` VALUES ('53', '74', '16', '79.6423');
INSERT INTO `mapping` VALUES ('56', '72', '71', '144.112');
INSERT INTO `mapping` VALUES ('57', '75', '74', '147.435');
INSERT INTO `mapping` VALUES ('58', '75', '71', '142.813');
INSERT INTO `mapping` VALUES ('59', '61', '76', '221.716');
INSERT INTO `mapping` VALUES ('60', '76', '77', '146.542');
INSERT INTO `mapping` VALUES ('62', '77', '12', '171.262');
INSERT INTO `mapping` VALUES ('67', '71', '78', '165.304');
INSERT INTO `mapping` VALUES ('68', '78', '65', '133.368');
INSERT INTO `mapping` VALUES ('69', '71', '79', '289.727');
INSERT INTO `mapping` VALUES ('70', '79', '59', '138.558');
INSERT INTO `mapping` VALUES ('73', '80', '61', '225.409');
INSERT INTO `mapping` VALUES ('74', '76', '81', '226.351');
INSERT INTO `mapping` VALUES ('75', '81', '80', '219.484');
INSERT INTO `mapping` VALUES ('76', '80', '81', '219.484');
INSERT INTO `mapping` VALUES ('77', '81', '79', '230.465');
INSERT INTO `mapping` VALUES ('78', '83', '75', '161.765');
INSERT INTO `mapping` VALUES ('79', '78', '83', '144.559');
INSERT INTO `mapping` VALUES ('80', '84', '65', '140.792');
INSERT INTO `mapping` VALUES ('81', '62', '84', '237.05');
INSERT INTO `mapping` VALUES ('82', '84', '83', '125.545');
INSERT INTO `mapping` VALUES ('83', '65', '82', '278.158');
INSERT INTO `mapping` VALUES ('84', '65', '82', '278.158');
INSERT INTO `mapping` VALUES ('85', '59', '78', '299.185');
INSERT INTO `mapping` VALUES ('86', '78', '59', '299.185');
INSERT INTO `mapping` VALUES ('87', '59', '82', '106.957');
INSERT INTO `mapping` VALUES ('88', '25', '67', '465.887');
INSERT INTO `mapping` VALUES ('89', '66', '68', '313.435');
INSERT INTO `mapping` VALUES ('90', '70', '66', '309.661');
INSERT INTO `mapping` VALUES ('91', '70', '89', '226.974');
INSERT INTO `mapping` VALUES ('92', '89', '69', '78.4861');
INSERT INTO `mapping` VALUES ('93', '69', '89', '78.4861');
INSERT INTO `mapping` VALUES ('94', '69', '60', '221.093');
INSERT INTO `mapping` VALUES ('95', '60', '69', '221.093');
INSERT INTO `mapping` VALUES ('96', '92', '60', '165.144');
INSERT INTO `mapping` VALUES ('97', '92', '91', '552.819');
INSERT INTO `mapping` VALUES ('98', '91', '62', '177.038');
INSERT INTO `mapping` VALUES ('99', '31', '29', '195.204');
INSERT INTO `mapping` VALUES ('100', '29', '31', '195.204');
INSERT INTO `mapping` VALUES ('101', '88', '80', '191.733');
INSERT INTO `mapping` VALUES ('102', '30', '32', '217.012');
INSERT INTO `mapping` VALUES ('103', '32', '30', '217.012');
INSERT INTO `mapping` VALUES ('104', '32', '33', '471.504');
INSERT INTO `mapping` VALUES ('105', '33', '32', '471.504');
INSERT INTO `mapping` VALUES ('106', '40', '55', '95.8883');
INSERT INTO `mapping` VALUES ('107', '55', '40', '95.8883');
INSERT INTO `mapping` VALUES ('108', '42', '53', '121.794');
INSERT INTO `mapping` VALUES ('109', '53', '42', '121.794');
INSERT INTO `mapping` VALUES ('110', '53', '50', '128.5');
INSERT INTO `mapping` VALUES ('111', '50', '53', '128.5');
INSERT INTO `mapping` VALUES ('112', '50', '49', '68.947');
INSERT INTO `mapping` VALUES ('113', '49', '50', '68.947');
INSERT INTO `mapping` VALUES ('114', '49', '48', '28.0014');
INSERT INTO `mapping` VALUES ('115', '48', '49', '28.0014');
INSERT INTO `mapping` VALUES ('116', '50', '51', '67.2642');
INSERT INTO `mapping` VALUES ('117', '51', '50', '67.2642');
INSERT INTO `mapping` VALUES ('118', '51', '52', '48.7457');
INSERT INTO `mapping` VALUES ('119', '52', '51', '48.7457');
INSERT INTO `mapping` VALUES ('120', '42', '58', '92.5199');
INSERT INTO `mapping` VALUES ('121', '58', '42', '92.5199');
INSERT INTO `mapping` VALUES ('122', '54', '57', '120.619');
INSERT INTO `mapping` VALUES ('123', '57', '54', '120.619');
INSERT INTO `mapping` VALUES ('124', '38', '41', '221.192');
INSERT INTO `mapping` VALUES ('125', '41', '38', '221.192');
INSERT INTO `mapping` VALUES ('126', '46', '36', '37.3663');
INSERT INTO `mapping` VALUES ('127', '36', '46', '37.3663');
INSERT INTO `mapping` VALUES ('128', '43', '44', '55.9747');
INSERT INTO `mapping` VALUES ('129', '44', '43', '55.9747');
INSERT INTO `mapping` VALUES ('130', '44', '45', '57.6615');
INSERT INTO `mapping` VALUES ('131', '45', '44', '57.6615');
INSERT INTO `mapping` VALUES ('132', '45', '35', '70.1352');
INSERT INTO `mapping` VALUES ('133', '35', '45', '70.1352');
INSERT INTO `mapping` VALUES ('134', '30', '40', '463.308');
INSERT INTO `mapping` VALUES ('135', '40', '30', '463.308');
INSERT INTO `mapping` VALUES ('136', '58', '56', '76.56');
INSERT INTO `mapping` VALUES ('137', '56', '58', '76.56');
INSERT INTO `mapping` VALUES ('138', '52', '58', '192.993');
INSERT INTO `mapping` VALUES ('139', '58', '52', '192.993');
INSERT INTO `mapping` VALUES ('140', '36', '48', '100.371');
INSERT INTO `mapping` VALUES ('141', '48', '36', '100.371');
INSERT INTO `mapping` VALUES ('142', '28', '29', '255.207');
INSERT INTO `mapping` VALUES ('143', '29', '28', '255.207');
INSERT INTO `mapping` VALUES ('144', '38', '42', '253.643');
INSERT INTO `mapping` VALUES ('145', '42', '38', '253.643');
INSERT INTO `mapping` VALUES ('146', '36', '43', '247.685');
INSERT INTO `mapping` VALUES ('147', '43', '36', '247.685');
INSERT INTO `mapping` VALUES ('148', '35', '39', '333.551');
INSERT INTO `mapping` VALUES ('149', '39', '35', '333.551');
INSERT INTO `mapping` VALUES ('150', '31', '93', '451.026');
INSERT INTO `mapping` VALUES ('151', '93', '31', '451.026');
INSERT INTO `mapping` VALUES ('152', '39', '93', '41.5189');
INSERT INTO `mapping` VALUES ('153', '39', '47', '34.6663');
INSERT INTO `mapping` VALUES ('154', '47', '39', '34.6663');
INSERT INTO `mapping` VALUES ('155', '47', '93', '28.4807');
INSERT INTO `mapping` VALUES ('156', '93', '47', '28.4807');
INSERT INTO `mapping` VALUES ('157', '31', '59', '505.687');
INSERT INTO `mapping` VALUES ('158', '55', '42', '395.669');
INSERT INTO `mapping` VALUES ('159', '42', '55', '395.669');
INSERT INTO `mapping` VALUES ('160', '35', '54', '421.457');
INSERT INTO `mapping` VALUES ('161', '54', '35', '421.457');
INSERT INTO `mapping` VALUES ('162', '33', '48', '520.896');
INSERT INTO `mapping` VALUES ('163', '48', '33', '520.896');
INSERT INTO `mapping` VALUES ('164', '33', '46', '453.461');
INSERT INTO `mapping` VALUES ('165', '46', '33', '453.461');
INSERT INTO `mapping` VALUES ('166', '56', '54', '106.527');
INSERT INTO `mapping` VALUES ('167', '54', '56', '106.527');
INSERT INTO `mapping` VALUES ('168', '57', '42', '253.936');
INSERT INTO `mapping` VALUES ('169', '25', '26', '322.758');
INSERT INTO `mapping` VALUES ('171', '26', '17', '154.162');
INSERT INTO `mapping` VALUES ('173', '17', '98', '172.896');
INSERT INTO `mapping` VALUES ('174', '98', '102', '185.051');
INSERT INTO `mapping` VALUES ('175', '102', '101', '69.2621');
INSERT INTO `mapping` VALUES ('176', '101', '100', '119.477');
INSERT INTO `mapping` VALUES ('177', '100', '97', '49.1687');
INSERT INTO `mapping` VALUES ('178', '97', '96', '124.469');
INSERT INTO `mapping` VALUES ('179', '96', '95', '219.813');
INSERT INTO `mapping` VALUES ('180', '95', '47', '156.105');
