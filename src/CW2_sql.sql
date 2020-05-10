CREATE TABLE users (
	userstatus VARCHAR(255) NOT NULL,
	name VARCHAR(255) NOT NULL,
	passport VARCHAR(255) NULL,
	telephone VARCHAR(255) NULL,	
	email VARCHAR(255) NULL,
	username VARCHAR(255) PRIMARY KEY,
	userPW VARCHAR(255) NOT NULL
	
);

INSERT INTO users VALUES ('staff','Jianjun Chen','','','','jianjun','123456');

CREATE TABLE rooms (
	roomNo int PRIMARY KEY,
	roomType VARCHAR(255)
);

INSERT INTO rooms VALUES ('101', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('102', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('103', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('104', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('105', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('106', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('107', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('108', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('109', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('110', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('111', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('112', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('113', 'VIP_bedroom');

INSERT INTO rooms VALUES ('201', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('202', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('203', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('204', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('205', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('206', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('207', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('208', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('209', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('210', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('211', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('212', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('213', 'VIP_bedroom');

INSERT INTO rooms VALUES ('301', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('302', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('303', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('304', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('305', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('306', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('307', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('308', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('309', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('310', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('311', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('312', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('313', 'VIP_bedroom');

INSERT INTO rooms VALUES ('401', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('402', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('403', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('404', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('405', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('406', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('407', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('408', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('409', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('410', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('411', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('412', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('413', 'VIP_bedroom');

INSERT INTO rooms VALUES ('501', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('502', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('503', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('504', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('505', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('506', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('507', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('508', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('509', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('510', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('511', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('512', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('513', 'VIP_bedroom');

INSERT INTO rooms VALUES ('601', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('602', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('603', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('604', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('605', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('606', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('607', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('608', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('609', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('610', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('611', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('612', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('613', 'VIP_bedroom');

INSERT INTO rooms VALUES ('701', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('702', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('703', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('704', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('705', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('706', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('707', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('708', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('709', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('710', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('711', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('712', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('713', 'VIP_bedroom');

INSERT INTO rooms VALUES ('801', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('802', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('803', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('804', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('805', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('806', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('807', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('808', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('809', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('810', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('811', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('812', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('813', 'VIP_bedroom');

INSERT INTO rooms VALUES ('901', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('902', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('903', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('904', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('905', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('906', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('907', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('908', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('909', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('910', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('911', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('912', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('913', 'VIP_bedroom');

INSERT INTO rooms VALUES ('1001', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('1002', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('1003', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('1004', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('1005', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('1006', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('1007', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('1008', 'Small_single_bedroom');
INSERT INTO rooms VALUES ('1009', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('1010', 'Large_single_bedroom');
INSERT INTO rooms VALUES ('1011', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('1012', 'Large_double_bedroom');
INSERT INTO rooms VALUES ('1013', 'VIP_bedroom');

CREATE TABLE booking (
	bookingID int PRIMARY KEY,
	roomType VARCHAR(255) NOT NULL,
	roomNo int NOT NULL,
	username VARCHAR(255) NOT NULL,
	startDate date NOT NULL,
	endDate date NOT NULL
);
