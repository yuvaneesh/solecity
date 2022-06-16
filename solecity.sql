DROP TABLE IF EXISTS `solecity`.`User`;
CREATE TABLE `solecity`.`User` (
	`id`					INT NOT NULL AUTO_INCREMENT,
	`username`		VARCHAR(20) NOT NULL,
	`password`		VARCHAR(100) NOT NULL,
	`name`				VARCHAR(100) NOT NULL,

	PRIMARY KEY(`id`)
);

INSERT INTO `solecity`.`User` (`username`, `password`, `name`) VALUES ('admin', 'admin', 'admin');


DROP TABLE IF EXISTS `solecity`.`shoes`;
CREATE TABLE `solecity`.`shoes` (
	`id`			INT NOT NULL AUTO_INCREMENT,
	`img`		VARCHAR(200) NOT NULL,
    `brand`		VARCHAR(100) NOT NULL,
    `model`		VARCHAR(100) NOT NULL,
	`stock`			INT (10) NOT NULL,
    `price`		    FLOAT(10,2) NOT NULL,
	

	PRIMARY KEY(`id`)
);

INSERT INTO `solecity`.`shoes` (`img`, `brand`, `model`, `stock`, `price`) VALUES 
('img/popularimg/airdior.jpg','Nike', 'Air Dior', 600, 107999),
('img/popularimg/aj1lightsmoke.jpg','Nike', 'Smoke Grey', 545, 950),
('img/popularimg/aj1retrohigh.jpg','Nike', 'Retro High', 500, 1200),
('img/popularimg/cactusjack.jpg','Nike', 'Travis Scott Low', 500, 2000),
('img/popularimg/coverseoffwhite.jpg','Converse', 'Converse Off White', 612, 1299),
('img/popularimg/asadi.jpg','Asadi', 'Asadi', 520, 15),
('img/popularimg/ultraboost.jpg','Adidas', 'Ultraboost', 390, 750),
('img/popularimg/offwhitevapor.png','Nike', 'Vapormax', 467, 1299),

('img/Adidas/adilette.jpg','Adidas', 'Adilette', 500, 150),
('img/Adidas/deeruptrunner.jpg','Adidas', 'Derupt Runner', 546, 500),
('img/Adidas/grandcourt.jpg','Adidas', 'Grand Court', 527, 350),
('img/Adidas/hurace.jpg','Adidas', 'Human Race', 523, 699),
('img/Adidas/nmdr1.jpg','Adidas', 'Nmd R1', 634, 650),
('img/Adidas/nmdr1pride.jpg','Adidas', 'Nmd R1 PRIDE', 239, 650),
('img/Adidas/stansmith.jpg','Adidas', 'Stan Smith', 461, 355),
('img/Adidas/swiftrun.jpg','Adidas', 'Swift Run', 345, 250),

('img/nike/Air Force 1.jpg','Nike', 'Air Force 1', 550, 350),
('img/nike/Air Jordan 1.jpg','Nike', 'Air Jordan 1', 360, 450),
('img/nike/airzoom.jpg','Nike', 'Air Zoom', 502, 430),
('img/nike/freern.jpg','Nike', 'Free Rn', 561, 650),
('img/nike/Revolution 5.jpg','Nike', 'Revolution 5', 439, 500),
('img/nike/vapormax.jpg','Nike', 'Vapormax', 521, 750),
('img/nike/zoom.jpg','Nike', 'Zoom Pegasus', 500, 680),
('img/nike/zoomwinflo.jpg','Nike', 'Zoom Winflo', 500, 380);






