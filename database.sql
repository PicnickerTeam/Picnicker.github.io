CREATE DATABASE picnicker;

CREATE TABLE suggested_product(
	UName varchar(20),
    UEmail	varchar(30),
    section	varchar(10),
    productName	varchar(50),
    description	varchar(150),
    PRIMARY key (UEmail,productName)
    
);

INSERT INTO `suggested_product` (`UName`, `UEmail`, `section`, `productName`, `description`) VALUES ('Layan Al Amri','s124507@student.squ.edu.om','Lighting','Adapter for Phones to Lightning Adapter','lets you connect devices with an audio jack to Lightning accessories.');

INSERT INTO `suggested_product` (`UName`, `UEmail`, `section`, `productName`, `description`) VALUES ('Abdul Rahim Al Nasse','s111876@student.squ.edu.om','furnishing','beach chair','It hope be light in weight and suitable to put in the car.');

INSERT INTO `suggested_product` (`UName`, `UEmail`, `section`, `productName`, `description`) VALUES 
('Mohammed Al Qarni','s121119@student.squ.edu.om','furnishing','canvas tent','be extremely durable and waterproof.');

INSERT INTO `suggested_product` (`UName`, `UEmail`, `section`, `productName`, `description`) VALUES 
('Yazan Al Hasani','s131134@student.squ.edu.om','Lighting','COUGAR RGB LED');

INSERT INTO `suggested_product` (`UName`, `UEmail`, `section`, `productName`, `description`) VALUES 
('Wijdan Al Kharusi','s115007@student.squ.edu.om','cinema','Handheld projector','small projector can connect with the mobile phone .');

INSERT INTO `suggested_product` (`UName`, `UEmail`, `section`, `productName`, `description`) VALUES 
('Ahoud Al saadi','s123755@student.squ.edu.om','cinema','Simple Soft Movie Screen');

INSERT INTO `suggested_product` (`UName`, `UEmail`, `section`, `productName`, `description`) VALUES 
('Asail Al Hinai','s123948@student.squ.edu.om','furnishing','Tea Table');

