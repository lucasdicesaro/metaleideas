

DROP TABLE `productos`;
DROP TABLE `categorias`;

CREATE TABLE `categorias` (
	`categoria_id` INT NOT NULL AUTO_INCREMENT ,
	`nombre` VARCHAR( 100 ) NOT NULL ,
	`orden` INT NOT NULL ,
	PRIMARY KEY ( `categoria_id` )
) ENGINE = InnoDB, CHARACTER SET utf8 COLLATE utf8_spanish_ci;

CREATE TABLE `productos` (
	`producto_id` INT NOT NULL AUTO_INCREMENT , 
	`nombre_foto` varchar(150) NOT NULL default '',
	`titulo` varchar(150) NOT NULL default '',
	`orden` INT NOT NULL,
	`categoria_id` INT NOT NULL,
	PRIMARY KEY ( `producto_id` ),
	FOREIGN KEY ( `categoria_id` ) REFERENCES `categorias` (`categoria_id`)
) ENGINE = InnoDB, CHARACTER SET utf8 COLLATE utf8_spanish_ci;




INSERT INTO `categorias`(`nombre`,`orden`)VALUES('Medidoras de cable', 1);
INSERT INTO `productos`(`nombre_foto`,`titulo`,`orden`,`categoria_id`)VALUES('modelo-160-pi-contador-mecanico.jpg','Modelo 160 PI',1,1);
INSERT INTO `productos`(`nombre_foto`,`titulo`,`orden`,`categoria_id`)VALUES('modelo-160-pi-max.jpg','Modelo 160 PI MAX',2,1);
INSERT INTO `productos`(`nombre_foto`,`titulo`,`orden`,`categoria_id`)VALUES('modelo-160-pi-pocket-solo-cabezal-medidor.jpg','Modelo 160 PI Pocket',3,1);
INSERT INTO `productos`(`nombre_foto`,`titulo`,`orden`,`categoria_id`)VALUES('modelo-contador-encoder-cuenta-mts-cm-mm.jpg','Modelo encoder',4,1);
INSERT INTO `productos`(`nombre_foto`,`titulo`,`orden`,`categoria_id`)VALUES('modelo-motorizado-embrague-freno-contador-mecanico-digital-1.jpg','Modelo motorizado, embrague, freno, cont. mecanico digital',5,1);
INSERT INTO `productos`(`nombre_foto`,`titulo`,`orden`,`categoria_id`)VALUES('modelo-motorizado-embrague-freno-contador-mecanico-digital-2.jpg','Modelo motorizado, embrague, freno, cont. mecanico digital',6,1);

INSERT INTO `categorias`(`nombre`,`orden`)VALUES('Medidoras de alambre', 2);
INSERT INTO `productos`(`nombre_foto`,`titulo`,`orden`,`categoria_id`)VALUES('modelo-maciza-cuenta-alambre-contador-mecanico-doble.jpg','Modelo doble',1,2);
INSERT INTO `productos`(`nombre_foto`,`titulo`,`orden`,`categoria_id`)VALUES('modelo-maciza-cuenta-alambre-contador-mecanico-simple.jpg','Modelo simple',2,2);

INSERT INTO `categorias`(`nombre`,`orden`)VALUES('Medidoras de cinta', 3);
INSERT INTO `productos`(`nombre_foto`,`titulo`,`orden`,`categoria_id`)VALUES('modelo-medidor-tapacanto-cintas.jpg','Med. tapacanto cinta',1,3);

INSERT INTO `categorias`(`nombre`,`orden`)VALUES('Bobinadora de papel', 4);
INSERT INTO `productos`(`nombre_foto`,`titulo`,`orden`,`categoria_id`)VALUES('bobinadora-papel-1.jpg','Bobinadora de papel',1,4);
INSERT INTO `productos`(`nombre_foto`,`titulo`,`orden`,`categoria_id`)VALUES('bobinadora-papel-2.jpg','Bobinadora de papel',2,4);

INSERT INTO `categorias`(`nombre`,`orden`)VALUES('Corta Rollos', 5);
INSERT INTO `productos`(`nombre_foto`,`titulo`,`orden`,`categoria_id`)VALUES('modelo-cortarollos-carton.jpg','Corta rollos de carton',1,5);
