
DROP TABLE `contactos`; 

CREATE TABLE `contactos` (
	`contactos_id` INT NOT NULL AUTO_INCREMENT ,
	`nombre` varchar(40) NOT NULL default '',
	`telefono` varchar(20) NOT NULL default '',
	`mail` varchar(50) NOT NULL default '',
	`mensaje` varchar(255) NOT NULL default '',
	`fecha_hora` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
	PRIMARY KEY ( `contactos_id` )	
) ENGINE = InnoDB, CHARACTER SET utf8 COLLATE utf8_spanish_ci;


INSERT INTO `contactos` (`nombre`, `telefono`, `mail`, `mensaje`, `fecha_hora`) VALUES
('Julio Cesar Castillo', '005114641786', 'julio.castillo@ica.com.pe', 'Buenas tardes,\r\nPor favor cotizarme las diferentes maquinas medidoras decable, que midan cables de hasta 13 mm.\r\n\r\nGracias.\r\nSaludos.', '2010-05-20 18:02:24'),
('VALENTI CARLOS ENRIQUE', '0221154200758', 'villa.valenti@yahoo.com.ar', 'Inauguramos un negocio en La Plata necesito una160 PI Pasa hoy a buscarla el Dueño de Cables Patagonicos, paga con un cheque propio nuestra empresa es  - V. V. s.r.l. CUIT 30-71040125-6 nos comunicamos Gracias', '2010-04-30 07:14:34'),
('daniel', '44417755', 'danyrocastro@yahoo.com.ar', 'Juanchi el correo del amigo industrial que esta en alemania es luis@mogno.com.ar\r\ny mandale como si fuese yo el siguiente texto\r\nquerido luis: mucho agradecere y de acuerdo a lo conversado que puedas promocionar la pyme entre los europeos. desde ya gracia', '2010-04-16 15:24:51'),
('daniel', '44417755', 'danyrocastro@yahoo.com.ar', 'Juanchi el correo del amigo industrial que esta en alemania es luis@mogno.com.ar\r\ny mandale como si fuese yo el siguiente texto\r\nquerido luis: mucho agradecere y de acuerdo a lo conversado que puedas promocionar la pyme entre los europeos. desde ya gracia', '2010-04-16 15:47:33'),
('jose nelson moreno', '04147185648', 'josenelson_morenoprato@yahoo.com', 'estoy interesado por una maquina de enrrollar alambre gracias en espera de una respuesta pronta gracias.', '2010-05-28 09:40:15'),
('Pablo Fernandez Stearns', '50939647', 'pfstearns@juanabonita.com', 'Queria saber si hubo algun avance con el proyecto a medida solicitado.\r\nGracias,\r\nPablo Fernandez Stearns\r\nJuana Bonita\r\nCreaciones Americanas SRL', '2010-06-03 16:38:43'),
('claudio riquelme', '3260730 ', 'Despacho2@fidenza.com.pe', 'enviar cotizacion de maquina contadora modelo 160 PI\r\n\r\nperu', '2010-07-16 13:05:58'),
('Oscar Urrea R', '3103614754', 'our24_24@gmail.com', 'Buenas Noches, estoy interesado en poroponer la compra del Modelo 318 PI Contador Digital para la empresa en donde laboro, por favor indicar todos costos y caracteristicas del equipo para Colombia (Santa Marta)\r\nSaludos\r\nOscar Urrea R.', '2010-08-05 01:36:14'),
('Hector Ferrufino Montaño', '44584649', 'ian_fm@hotmail.com', 'Estimados señores:\r\nEstamos solicitandos medidor  de cables electricos, favor contactarse con nostros a la brevedad posible.\r\nGracias de antemano.', '2010-08-18 19:18:05'),
('Hector Ferrufino M,', '79752123', 'ian_fm@hotmail.com', 'Solicitamos nos lo fabriquen medidor de cables electricos.\r\nGracias.', '2010-08-18 19:19:52'),
('FABIANA MARCELA CHERUBINI', '03854224057', 'pavanymosca@arnet.com.ar', 'Somos un comercio de materiales electricos y necesitamos comprar una maquina para medir cables.\r\nMe puede cotizar?\r\nMuchas gracias.\r\nPAVAN Y MOSCA SRL\r\nLa Plata 116 - Sgo del Estero', '2010-09-09 11:46:08'),
('rblrwvsqolk', '50229446283', 'zqesfo@qqfrqp.com', 'HYf5Fd  &lt;a href=&quot;http://muowgvzbbnll.com/&quot;&gt;muowgvzbbnll&lt;/a&gt;, [url=http://sphrhdkhaiyw.com/]sphrhdkhaiyw[/url], [link=http://xscgmybzypnj.com/]xscgmybzypnj[/link], http://sweuozahdslt.com/', '2010-09-22 07:32:18'),
('rblrwvsqolk', '50229446283', 'zqesfo@qqfrqp.com', 'HYf5Fd  &lt;a href=&quot;http://muowgvzbbnll.com/&quot;&gt;muowgvzbbnll&lt;/a&gt;, [url=http://sphrhdkhaiyw.com/]sphrhdkhaiyw[/url], [link=http://xscgmybzypnj.com/]xscgmybzypnj[/link], http://sweuozahdslt.com/', '2010-09-22 07:32:18'),
('Luciano Antonio Pavan', '03854224057', 'pavanymosca@arnet.com.ar', 'represento a Pavan & Mosca srl, comercio con más de 60 años de trayectoria en Santiago del Estero y solicito catálogo y precios de las máquinas para medir cable, correo alternativo lucianoantoni', '2010-09-29 18:15:12'),
('Gabriel', '2235285088', 'gabriel@nucleovirtual.com', 'necesitaria un contador de metros para cable, que sea manual. agradeceriaq que em envie los productos que tiene con esta caracteristica y su respectivos precios.\r\ndesde ya agradezco su atencion\r\nSi tiene este prodcutos usado tambien loaceptaria.\r\nDesda ya', '2010-10-09 12:56:18'),
('wohvjbbrpp', '74472150281', 'cqdjya@dttlze.com', 'u6FerD  &lt;a href=&quot;http://rmuyezbiwwji.com/&quot;&gt;rmuyezbiwwji&lt;/a&gt;, [url=http://auuvjabyyeci.com/]auuvjabyyeci[/url], [link=http://nmteiyuvrxox.com/]nmteiyuvrxox[/link], http://glheqiptnnhb.com/', '2010-10-18 04:32:54'),
('wohvjbbrpp', '74472150281', 'cqdjya@dttlze.com', 'u6FerD  &lt;a href=&quot;http://rmuyezbiwwji.com/&quot;&gt;rmuyezbiwwji&lt;/a&gt;, [url=http://auuvjabyyeci.com/]auuvjabyyeci[/url], [link=http://nmteiyuvrxox.com/]nmteiyuvrxox[/link], http://glheqiptnnhb.com/', '2010-10-18 04:32:55'),
('electronica picheuta', '49010183', 'electronicapicheuta@yahoo.com.ar', 'Hola. Quisiera saber el precio del modelo 160PI (contador mecánico) y si hacen entregas a domicilio en Capital (zona Primera Junta). Desde ya Muchas Gracias.\r\nAlejandro', '2010-12-09 11:31:41'),
('PABLO GALLE', '02944455663', 'electrobolson@elbolson.com', 'necesito cbu\r\nmis datos son galle pablo\r\ncuit 20-20122598-2\r\nava san martin 3252 el bolson rio negro \r\ntransporte cruz del sur', '2011-01-10 13:33:36'),
('Esteban Tatarchuk SRL', '037174801028', 'amt@coopcolorado.com.ar', 'Señores: necesito un medidor de cables, tanzas, sogas para una ferretería - venta en mostrador. Desearía saber cual puede ser y  las características del aparato. Costos y modo pago y de envío.', '2011-01-27 12:42:12'),
('leonardo olivera', '01138910470', 'lyonolivera@gmail.com', 'hola precisaria saber que modelo preciso para fraccionar alambre de puas,alambre liso galvanizado,recocido.tambien el precio.muchas gracias.', '2011-02-03 22:25:38'),
('ernesto aguirre', '03783884259', 'gallowilson_007@yahoo.com.ar', 'favor me podrian pasar el presio del producto Modelo 160 PI Contador Mecánico y forma de pago de corrientes capital gracias ', '2011-02-09 12:25:39'),
('Andres Ochoa', '59393084511', 'andres8a20@hotmail.com', 'Amigos me interesa mucho el contador de cable y sogas quisiera saber si ustedes pueden enviarme ese producto hasta guayaquil ecuador. cualseria el costo.\r\n\r\nSaludos\r\n\r\n', '2011-02-16 20:15:50'),
('salgueiro, luis german', '0239215460911', 'salgueiroluis@hotmail.com', 'nesecitaria una maquina para medir cables, y preparar rollos de cable de 5; 10; 20; 50 metros en medidas desde 1mm hasta 10mm en unipolares y en tipo taller hasta 4 x 4, en principio una maquina  manual, pero si tienen alguna semi automatica tambien me in', '2011-02-24 08:49:27'),
('DAMIAN', '1569876498', 'info@nakamaelectronica.com.ar', 'Hola, mi nombre es Damián y tengo una casa de electronica donde vendemos cables. Estaba buscando alguna máquina que me cuente los metros y me lo deje enrollado. Quería saber cual es la máquina m&Atilde', '2011-03-21 10:09:03'),
('Diego Miguel', '3884149750', 'electrogorriti@yahoo.com', 'Buen dia, quisira saber el precio de la maquina cuenta cable modelo 160pl. y la disponibilidad. \r\nMuchas Gracias', '2011-04-14 11:02:06'),
('MAC LEAN ARIEL', '47895381', 'mantenimiento_snr@hotmail.com', 'Solicito a la cotización del contador  de cables Modelo Contador Encoder, así mismo solicito una breve especificación técnica para poder elevar la propuesta y la justificación de la solicitud', '2011-04-19 16:29:16'),
('Hugo', '155084414', 'hugovelizrojas@yahoo.com.ar', 'Hola soy de la plata, estoy abriendo un local de materiales electricos preciso el contador de cable manuel, queria saver si tienen en estok esa maquina lo mas pronto \r\n gracias ', '2011-04-24 22:21:47'),
('Guglielmino Roberto', '1144678062', 'guglielmino@urdi.com.ar', 'Buenas tardes, deseo saber el precio por unidad y al por mayor del modelo 160 PI, desde ya muchas gracias.', '2011-05-12 13:39:46'),
('Claudia Granero', '46058707', 'cgranero@yahoo.com.ar', 'Hola Metal e ideas\r\nPor favor necesito que me pasen precio y disponibilidad de los siguientes modelos 160PI, MAX y POCKET.\r\n\r\nGracias, Claudia', '2011-05-18 18:15:54'),
('Eduardo Rodriguez', '03755471577', 'eduardorod_70@yahoo.com.ar', 'desearia saber cuanto cuesta el contador mod 160PI y el modelo 318 PI ,GRACIAS', '2011-06-01 08:14:48'),
('gaston', '1560939623', 'gastonmiami19@hotmail.com', 'Buenas tardes, estoy interesado en una maquina para cortar tubos de carton vi una maquina que ustedes publicaron en you tube y podria interesarme en algo asi. es`pero su respuesta. desde ya muchas gracias.', '2011-06-06 21:53:18'),
('lino rodriguez soto', '525558792663', 'comercialelectro@prodigy.net.mx', 'estoy interesado por la cuentametros motorizada con freno y embrague quisiera saber el precio en dolares americanos y si lo pueden enviar por paqueteria a la ciudad de mexico', '2011-06-26 15:29:18'),
('ROBERTO ', '3416853128', 'pampa09@hotmail.com', 'Hola queria saber el precio de un medidor de cable digital y uno comun como para una ferreteria, gracias.', '2011-06-27 19:02:26'),
('Marcelo Kotelchuk', '0111530354520', 'marcelo_raquymar@jahoo.com.ar', 'Buenos días, me dirijo a ustedes a fin de  consultarlos por la fraccionadora de alambres.\r\nMe interesaría  saber si solo tienen el modelo manual o cuentan con otro modelo.\r\nPor otro lado, cuánto tiempo lleva fracciona', '2011-06-29 09:11:04');
('Eduardo Rodriguez', '03755471577', 'eduardorod_70@yahoo.com.ar', 'desearia saber cuanto cuesta el contador mod 160PI y el modelo 318 PI ,GRACIAS', '2011-06-01 12:14:48'),
('gaston', '1560939623', 'gastonmiami19@hotmail.com', 'Buenas tardes, estoy interesado en una maquina para cortar tubos de carton vi una maquina que ustedes publicaron en you tube y podria interesarme en algo asi. es`pero su respuesta. desde ya muchas gracias.', '2011-06-07 01:53:18'),
('lino rodriguez soto', '525558792663', 'comercialelectro@prodigy.net.mx', 'estoy interesado por la cuentametros motorizada con freno y embrague quisiera saber el precio en dolares americanos y si lo pueden enviar por paqueteria a la ciudad de mexico', '2011-06-26 19:29:18'),
('ROBERTO ', '3416853128', 'pampa09@hotmail.com', 'Hola queria saber el precio de un medidor de cable digital y uno comun como para una ferreteria, gracias.', '2011-06-27 23:02:26'),
('Marcelo Kotelchuk', '0111530354520', 'marcelo_raquymar@jahoo.com.ar', 'Buenos días, me dirijo a ustedes a fin de  consultarlos por la fraccionadora de alambres.\r\nMe interesaría  saber si solo tienen el modelo manual o cuentan con otro modelo.\r\nPor otro lado, cuánto tiempo lleva fracciona', '2011-06-29 13:11:04');
