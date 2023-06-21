-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2023 a las 15:32:44
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `turismo_maritimo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruceros`
--

CREATE TABLE `cruceros` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `compania` varchar(150) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `origen` varchar(150) NOT NULL,
  `img1` varchar(4000) DEFAULT NULL,
  `img2` varchar(4000) DEFAULT NULL,
  `descripcion` varchar(2000) DEFAULT NULL,
  `detalles` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cruceros`
--

INSERT INTO `cruceros` (`ID`, `nombre`, `compania`, `capacidad`, `origen`, `img1`, `img2`, `descripcion`, `detalles`) VALUES
(1, 'Oasis of the Seas', 'Royal', 5400, 'Miami', 'https://www.ship-technology.com/wp-content/uploads/sites/8/2021/04/Image_1-Oasis_of_the_Seas1.jpg', 'https://media-cdn.tripadvisor.com/media/photo-m/1280/15/3b/2f/64/cc-oasis-of-the-seas.jpg', 'El Oasis of the Seas es un crucero de la clase Oasis perteneciente a la empresa naviera Royal Caribbean International. Su construcción finalizó en septiembre de 2009, en los astilleros de la empresa STX Europe', 'El Oasis of the Seas es uno de los cruceros más emblemáticos y populares del mundo. Es parte de la clase Oasis de barcos de Royal Caribbean International, conocida por su tamaño impresionante y sus innovadoras instalaciones a bordo. Con su diseño revolucionario, el Oasis of the Seas ofrece una experiencia de crucero inigualable.\r\n\r\nConstruido en 2009, el Oasis of the Seas cuenta con una longitud de aproximadamente 361 metros y puede albergar a más de 5,400 pasajeros en ocupación doble. Este gigante de los mares ofrece una amplia variedad de opciones de entretenimiento, actividades y servicios para satisfacer los gustos y necesidades de todos los huéspedes.\r\n\r\nA bordo del Oasis of the Seas, encontrarás una gran cantidad de características destacadas. El barco cuenta con una zona de paseo central llamada \"Central Park\", que está lleno de exuberantes jardines, restaurantes y tiendas. También puedes disfrutar de emocionantes atracciones como el \"Aquatheater\", un anfiteatro acuático donde se presentan espectáculos de alta calidad con acróbatas y saltadores profesionales.\r\n\r\nEl barco cuenta con una amplia selección de restaurantes que ofrecen opciones gastronómicas para todos los gustos, desde restaurantes de especialidades hasta bufés informales. Además, cuenta con diversas piscinas y jacuzzis, un parque acuático, paredes de escalada, pista de patinaje sobre hielo, casino, teatro, discoteca, spa y gimnasio totalmente equipado.\r\n\r\nLas cabinas a bordo del Oasis of the Seas son modernas, elegantes y cómodas, brindando un espacio privado para relajarse después de un día lleno de actividades. Desde acogedoras cabinas interiores hasta lujosas suites con balcón, hay opciones de alojamiento para satisfacer las necesidades de todos los pasajeros.\r\n\r\nEn resumen, el Oasis of the Seas es un barco extraordinario que ofrece una experiencia de crucero incomparable. Con su tamaño impresionante, innovadoras instalaciones y una amplia gama de opciones de entretenimiento, este crucero de Royal Caribbean es perfecto para aquellos que buscan una aventura inolvidable en alta mar.'),
(2, 'Symphony of the Seas', 'Royal Caribbean', 5518, 'Barcelona', 'https://www.royalcaribbean.com/content/dam/royal/ships/symphony/symphony-of-the-seas-night-time-moon.jpg', 'https://hospitality-on.com/sites/default/files/2018-03/0326_naviresymphony-of-the-seas_max133536455_2.jpg', 'Symphony of the Seas es un crucero de clase Oasis operado por Royal Caribbean International.​ Fue construido en 2018 en el astillero Chantiers de l\'Atlantique en Saint-Nazaire, Francia, ​ siendo el cuarto en la clase de cruceros Oasis de Royal Caribbean.', 'El Symphony of the Seas es el barco más grande y moderno de la flota de Royal Caribbean International. Es un crucero de la clase Oasis, famosa por sus innovadoras instalaciones y por ofrecer una experiencia excepcional a bordo. Con su diseño vanguardista y sus características impresionantes, el Symphony of the Seas es una opción perfecta para aquellos que buscan una experiencia de crucero inigualable.\n\nConstruido en 2018, el Symphony of the Seas tiene una longitud de aproximadamente 362 metros y puede albergar a más de 6,600 pasajeros en ocupación doble. Este coloso de los mares cuenta con una variedad de atracciones y actividades para satisfacer todos los gustos y edades.\n\nUna de las características más destacadas del Symphony of the Seas es su área al aire libre llamada \"Boardwalk\", que ofrece una experiencia similar a un muelle de playa con tiendas, restaurantes y un carrusel de estilo antiguo. También cuenta con el \"Ultimate Abyss\", un tobogán de diez pisos de altura que ofrece una emocionante experiencia de descenso.\n\nEl barco ofrece una amplia selección de restaurantes, desde opciones de comida rápida y bufés hasta restaurantes de especialidades donde puedes disfrutar de cocina gourmet. Además, cuenta con espectáculos en vivo de primer nivel, como producciones teatrales de Broadway, música en vivo, comedias y más.\n\nPara los amantes del agua, el Symphony of the Seas tiene una zona acuática llamada \"Splashaway Bay\" que cuenta con toboganes y piscinas para niños. También hay varias piscinas para relajarse y tomar el sol, así como jacuzzis y áreas de descanso.\n\nEn cuanto al alojamiento, el Symphony of the Seas ofrece una amplia gama de opciones de cabinas, desde cómodas habitaciones interiores hasta lujosas suites con balcones privados y conserje personal.\n\nEn resumen, el Symphony of the Seas es un barco impresionante que redefine la experiencia de crucero. Con su tamaño gigantesco, atracciones emocionantes, opciones gastronómicas excepcionales y entretenimiento de primera clase, este crucero de Royal Caribbean es perfecto para aquellos que buscan una experiencia inolvidable en alta mar.'),
(5, 'Norwegian Bliss', 'Norwegian Cruise Line', 4004, 'Seattle', 'https://a.travel-assets.com/flex/flexmanager/images/2019/11/25/SLP_Hero_cNC-sBL.jpg', 'https://assets3.thrillist.com/v1/image/2764645/792x529/scale;webp=auto;jpeg_quality=60;progressive.jpg', 'El Norwegian Bliss es un crucero de Norwegian Cruise Line, que entró en servicio el 21 de abril de 2018. El barco fue construido por Meyer Werft en Papenburg, Alemania', 'El Norwegian Bliss es un crucero de lujo perteneciente a la flota de Norwegian Cruise Line. Inaugurado en 2018, este magnífico barco ha sido diseñado para ofrecer una experiencia de vacaciones inigualable a bordo. Con su elegante diseño, comodidades de última generación y una amplia variedad de entretenimiento, el Norwegian Bliss es una opción perfecta para aquellos que buscan lujo y diversión en alta mar.\n\nCon una longitud de aproximadamente 333 metros, el Norwegian Bliss tiene capacidad para albergar a más de 4,000 pasajeros en ocupación doble. Cada rincón del barco ha sido cuidadosamente diseñado para proporcionar confort y estilo a los viajeros exigentes.\n\nEl Norwegian Bliss cuenta con una gran variedad de restaurantes de alta calidad que ofrecen opciones gastronómicas para todos los gustos. Desde platos internacionales hasta especialidades locales, los comensales pueden deleitarse con una amplia selección de sabores y experiencias culinarias. Además, el barco cuenta con bares y salones temáticos donde los pasajeros pueden disfrutar de cócteles exquisitos y música en vivo.\n\nPara los amantes del entretenimiento, el Norwegian Bliss ofrece una amplia gama de actividades y espectáculos. Desde musicales y producciones teatrales de Broadway hasta conciertos en vivo y clubes nocturnos, hay algo para todos los gustos. También hay opciones de entretenimiento al aire libre, como una pista de carreras de karting y un parque acuático con toboganes emocionantes.\n\nEl bienestar y la relajación son aspectos fundamentales en el Norwegian Bliss. Cuenta con un spa de lujo donde los pasajeros pueden disfrutar de tratamientos rejuvenecedores y relajantes. También hay una variedad de piscinas, jacuzzis y áreas de descanso para disfrutar del sol y la brisa marina.\n\nEn cuanto al alojamiento, el Norwegian Bliss ofrece una amplia selección de camarotes, desde acogedores camarotes interiores hasta amplias suites con balcón privado. Cada camarote ha sido diseñado con atención al detalle y cuenta con comodidades modernas para asegurar una estancia confortable.\n\nEn resumen, el Norwegian Bliss es un crucero de lujo que combina comodidades modernas, opciones gastronómicas de primera clase y entretenimiento de alta calidad. Con su estilo elegante y su ambiente relajado, ofrece a los pasajeros una experiencia inolvidable en alta mar. Ya sea que estés buscando relajarte, disfrutar de la buena comida o divertirte con actividades emocionantes, el Norwegian Bliss tiene todo lo que necesitas para unas vacaciones inolvidables.'),
(6, 'MSC Meraviglia', 'MSC Cruises', 4488, 'Génova', 'https://www.voydeviaje.com.ar/resizer/pQ0gNx-B3HA-hgjDbQqBKWQT0Sw=/980x640/smart/filters:quality(75):format(webp)/cloudfront-us-east-1.images.arcpublishing.com/grupoclarin/4HCPWPDAGFG7PPPLKON24CBZV4.jpg', 'https://www.msccruceros.es/-/media/global-contents/ships/fleet/meraviglia/public-areas/mr_galleria_meraviglia.jpg?bc=transparent&as=1&dmc=0&iar=0&mh=600&mw=723&sc=0&thn=0&udi=0&hash=72C38374FA8FCB40C7E7EED4DCEC4C6D', 'MSC Meraviglia es un crucero de la clase Meraviglia propiedad y operado por MSC Cruceros, construido en el astillero Chantiers de l\'Atlantique en St. Nazaire, Francia, por STX France', 'El MSC Meraviglia es un impresionante crucero de la línea MSC Cruises que ha redefinido el significado de la elegancia y el lujo en alta mar. Inaugurado en 2017, este majestuoso barco ha sido diseñado para ofrecer una experiencia inigualable a los pasajeros, combinando comodidades modernas, entretenimiento de primera clase y una atención excepcional al detalle.\n\nCon una longitud de aproximadamente 315 metros, el MSC Meraviglia es un verdadero gigante de los mares. Tiene capacidad para albergar a más de 5,700 pasajeros en ocupación doble, lo que lo convierte en uno de los barcos más grandes del mundo. A bordo, los viajeros encontrarán una amplia variedad de instalaciones y actividades para disfrutar durante su estancia.\n\nLa oferta gastronómica del MSC Meraviglia es simplemente excepcional. Los pasajeros podrán deleitarse con una amplia selección de restaurantes que ofrecen desde platos tradicionales hasta especialidades internacionales de alta cocina. Además, el barco cuenta con bares y salones elegantes donde los huéspedes pueden disfrutar de una amplia variedad de bebidas y cócteles exquisitos.\n\nEl entretenimiento a bordo del MSC Meraviglia es verdaderamente espectacular. Cuenta con el exclusivo Cirque du Soleil at Sea, donde los pasajeros pueden disfrutar de impresionantes espectáculos circenses en un ambiente íntimo y sofisticado. También hay teatros con producciones teatrales de alta calidad, discotecas animadas, salones de música en vivo y un casino emocionante.\n\nEl bienestar y la relajación son aspectos importantes en el MSC Meraviglia. Cuenta con un lujoso spa donde los pasajeros pueden disfrutar de tratamientos rejuvenecedores, saunas y salas de vapor. Además, el barco cuenta con varias piscinas, jacuzzis y una amplia terraza para tomar el sol y disfrutar de las vistas panorámicas del mar.\n\nEn cuanto al alojamiento, el MSC Meraviglia ofrece una amplia gama de opciones, desde camarotes interiores elegantes hasta suites espaciosas con balcones privados. Cada camarote ha sido diseñado pensando en el confort y la elegancia, ofreciendo un refugio tranquilo para descansar y relajarse después de un día lleno de actividades.\n\nEn resumen, el MSC Meraviglia es un crucero de lujo que combina la elegancia, el entretenimiento y el confort para brindar a los pasajeros una experiencia inolvidable en alta mar. Con su amplia oferta gastronómica, espectáculos de clase mundial y una amplia variedad de instalaciones, este barco promete satisfacer los deseos de los viajeros más exigentes. Si buscas una experiencia inolvidable en un ambiente sofisticado, el MSC Meraviglia es la elección perfecta para tus próximas vacaciones en crucero.'),
(14, 'Crucero del Mar', 'Oceanic Cruises', 2000, 'Miami, Estados Unidos', 'images/6492f8dd5594a.jpg', 'images/6492f8dd5594c.jpg', 'Disfruta de unas vacaciones inolvidables en nuestro lujoso crucero. Explora destinos exóticos y relájate en nuestras modernas instalaciones.', 'Nuestro crucero del Mar es el epítome del lujo y la comodidad. Con una amplia gama de servicios y comodidades, te garantizamos unas vacaciones inolvidables. Nuestro amable personal estará encantado de atenderte y asegurarse de que disfrutes de cada momento a bordo. Disfruta de las impresionantes vistas al mar desde tu camarote, relájate en nuestras piscinas de lujo o disfruta de una deliciosa cena en nuestros restaurantes de clase mundial. Además, ofrecemos una variedad de actividades y entretenimiento a bordo, desde espectáculos en vivo hasta clases de cocina y actividades para toda la familia. ¡No te pierdas la oportunidad de vivir una experiencia inigualable en nuestro Crucero del Mar!'),
(15, 'Estrella del Mar', 'Paradise Cruises', 1500, 'Barcelona, España', 'images/6492f93e237da.jpg', 'images/6492f93e237de.jpg', 'Embárcate en una aventura única a bordo de nuestro crucero. Descubre destinos fascinantes y disfruta de una experiencia de lujo y confort.', ' La Estrella del Mar es sinónimo de elegancia y sofisticación. Desde el momento en que pises a bordo, serás recibido por nuestro amable personal y te sentirás como en casa. Nuestros camarotes espaciosos y bien equipados te brindarán la comodidad que necesitas para relajarte y descansar. Disfruta de una amplia selección de restaurantes que ofrecen desde platos internacionales hasta cocina local, todos preparados por chefs de renombre. Nuestro crucero también cuenta con una gran variedad de actividades, como gimnasio, spa, piscinas y entretenimiento en vivo. Ya sea que desees explorar nuevos destinos o simplemente relajarte y disfrutar de las vistas desde la cubierta, la Estrella del Mar te ofrece todo lo que necesitas para unas vacaciones inolvidables.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tours`
--

CREATE TABLE `tours` (
  `ID` int(11) NOT NULL,
  `id_crucero` int(11) NOT NULL,
  `destino` varchar(150) NOT NULL,
  `fecha_salida` date NOT NULL,
  `precio` float NOT NULL,
  `descripcion` varchar(2000) NOT NULL,
  `img1` varchar(4000) NOT NULL,
  `img2` varchar(4000) NOT NULL,
  `detalles` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tours`
--

INSERT INTO `tours` (`ID`, `id_crucero`, `destino`, `fecha_salida`, `precio`, `descripcion`, `img1`, `img2`, `detalles`) VALUES
(1, 1, 'Bahamas', '2023-06-01', 1200, 'Embárcate en un emocionante crucero a las Bahamas y sumérgete en aguas cristalinas, playas de ensueño y una vibrante cultura caribeña. Disfruta de actividades acuáticas, relájate en paradisíacas playas y descubre su belleza tropical.', 'https://w0.peakpx.com/wallpaper/288/293/HD-wallpaper-bahamas-ocean-bahamas-nature-sky-blue.jpg', 'https://media-cdn.tripadvisor.com/media/photo-m/1280/15/3b/2f/64/cc-oasis-of-the-seas.jpg', 'El crucero Oasis of the Seas dispone de una variada oferta de entretenimiento a bordo protagonizada por un teatro, casino, discoteca, cine en 3D, biblioteca, sala de videojuegos, punto de internet, sala de cartas, oficina de excursiones, miniclub y área de shopping.\r\n\r\nEl Oasis of the Seas incluye 4 piscinas, 10 Jacuzzis, parque acuático para niños, solarium, spa y salón de belleza, área wellness, gimnasio, tirolina suspendida a nueve cubiertas de 25 m de largo, 2 simuladores de surf, pista de patinaje sobre hielo, 2 paredes de escalada de 13 m, simulador de golf, cancha de baloncesto, pista de jogging al aire libre, minigolf y dispone de instalaciones, clubs y zonas de entretenimiento para niños y jóvenes.\r\n\r\nAdemás cuenta con servicios de guardería.\r\n\r\nA bordo también hay actividades que se ajustas a todas las edades y gustos. Los niños de 6 a 18 meses podrán disfrutar con sus padres del programa Royal Babies & Royal Tots, los niños de 3 a 5 años se divertirán realizando geniales experimentos y se convertirán en pequeños aventureros de la ciencia. El programa Explorers (6 a 8 años de edad) está lleno de emocionantes actividades, desde fiestas temáticas hasta la fabricación de caramelos. Los Voyagers (9 a 11 años de edad) explorarán diversas actividades que le devuelven la diversión al aprendizaje.\r\n\r\nCon la experiencia Dreamworks los niños podrán compartir momentos inolvidables con los personajes de DreamWorks y disfrutar de entretenidas actividades como cuenta cuentos, fiestas de baile, desfiles y espectáculos de patinaje sobre hielo.\r\n\r\nLos adolescentes tendrán también sus propios espacios y una gran variedad de actividades.\r\n\r\nLa oferta de restauración a bordo del Oasis of the Seas incluye, entre otros, los siguientes restaurantes: el Restaurante principal, el restaurante 150 Central Park, Chops Grille, Bar Sabor Taquería & Tequila, Izumi Hibach y Sushi y el restaurante italiano Giovanni’s Table así como con 15 bares y salones.'),
(3, 1, 'Jamaica', '2023-06-15', 1500, 'Embárcate en un crucero a Jamaica y descubre sus playas, exquisita gastronomía y vibrante cultura reggae. Disfruta de actividades acuáticas, excursiones emocionantes y relájate en el paraíso caribeño mientras creas recuerdos inolvidables.', 'https://cdn.pixabay.com/photo/2020/04/29/18/36/jamaica-5110094_1280.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkxwgTWaXOzJ3zUDpRl5VAv1_x5OyadocC_h6nVRnDv1AHjBlHOTmOs674PWvDGtJHsY0&usqp=CAU', 'Embárcate en un emocionante crucero hacia la hermosa isla de Jamaica. Disfruta de días de sol, maravillosas playas de arena blanca y un ambiente vibrante y relajado. Durante tu viaje, tendrás la oportunidad de explorar las maravillas naturales de Jamaica, desde las cascadas de Dunn\'s River hasta las increíbles montañas azules.\r\n\r\nSumérgete en la cultura jamaicana mientras visitas los pintorescos pueblos costeros y te deleitas con la deliciosa gastronomía local, como el jerk chicken y el ackee con saltfish. Descubre el ritmo contagioso del reggae mientras te adentras en la animada vida nocturna de Montego Bay o Negril, donde encontrarás música en vivo y coloridos mercados.\r\n\r\nDurante tu tiempo en tierra, puedes aventurarte en emocionantes excursiones, como practicar snorkel en los arrecifes de coral, explorar las misteriosas cuevas de Green Grotto, disfrutar de un paseo en bobsleigh en Mystic Mountain o relajarte en las paradisíacas playas de Ocho Ríos.\r\n\r\nA bordo del crucero, encontrarás una amplia gama de comodidades y entretenimiento para todos los gustos. Disfruta de restaurantes de clase mundial, bares y espectáculos en vivo. Relájate en las piscinas, disfruta de tratamientos de spa y participa en emocionantes actividades y deportes acuáticos.\r\n\r\nUn crucero a Jamaica ofrece la combinación perfecta de aventura, relajación y una inmersión en la rica cultura caribeña. Prepárate para crear recuerdos inolvidables mientras exploras esta increíble isla llena de belleza natural y hospitalidad jamaicana.'),
(4, 2, 'Mediterraneo Occidental', '2023-07-01', 2000, 'Embárcate en un crucero al Mediterráneo occidental para descubrir historia, cultura y belleza natural. Explora Roma, Barcelona y Atenas, disfruta de playas encantadoras y vive la experiencia única del mar Mediterráneo.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDznjbApwf3E5YyPl9-LoQBGOO3v2Vw2mGaXEP8WOWYGNptpXcdVuBakC9pmShkwzapM4&usqp=CAU', 'https://images.ecestaticos.com/APRDb9GMWFzl8DQ_uX6H3CPYVzQ=/28x17:2028x1517/1200x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F740%2F8fc%2F12c%2F7408fc12cea568647e0fe588e839efc2.jpg', 'Embárcate en un fascinante crucero por el Mediterráneo occidental y descubre una mezcla perfecta de historia, cultura y belleza natural. Navegarás por las aguas azules y cristalinas de este icónico mar, visitando algunos de los destinos más emblemáticos de Europa.\r\n\r\nExplora las pintorescas costas de Italia, donde podrás admirar la majestuosidad del Coliseo en Roma, sumergirte en el romance de Venecia o deleitarte con la deliciosa gastronomía en Nápoles. Continúa tu viaje hacia la vibrante ciudad de Barcelona, ​​donde te sorprenderán las obras maestras arquitectónicas de Gaudí y la animada vida en las Ramblas.\r\n\r\nAdéntrate en la historia antigua en Atenas, Grecia, donde podrás explorar la Acrópolis y maravillarte con los tesoros de la antigua civilización. Sumérgete en la belleza de las islas mediterráneas, como Mallorca o Sicilia, con sus playas de arena blanca y aguas turquesas.\r\n\r\nDisfruta de una amplia variedad de entretenimiento y comodidades a bordo del crucero, desde exquisitos restaurantes hasta relajantes spas y emocionantes actividades. A medida que navegas por el Mediterráneo occidental, serás testigo de impresionantes vistas panorámicas, puestas de sol de ensueño y un ambiente inolvidable.\r\n\r\nUn crucero por el Mediterráneo occidental es una experiencia única que te sumergirá en la riqueza cultural y la diversidad de esta región encantadora. Prepara tu cámara y tus ganas de explorar, porque te esperan momentos inolvidables en cada puerto que visites.'),
(5, 2, 'Mediterráneo Oriental', '2023-07-15', 2200, 'Descubre la exquisita belleza del Mediterráneo Oriental en un crucero inolvidable. Explora cautivantes destinos como Grecia, Turquía y Croacia mientras disfrutas del lujo a bordo, deliciosa gastronomía y experiencias culturales fascinantes', 'https://humanidades.com/wp-content/uploads/2018/11/mar-mediaterraneo-1-e1583088858700-800x400.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUEHgvPVDFTFBBqnMj9OATdil1o0odWVtAbvpbYkEYktXj6K0m38qa3Yzjdkla5r7jymc&usqp=CAU', 'Sumérgete en un viaje inolvidable a bordo de un lujoso crucero por el fascinante Mediterráneo Oriental. Navega por las aguas cristalinas de destinos cautivadores como Grecia, Turquía, Italia y Croacia, donde la historia, la cultura y la belleza natural se entrelazan en un escenario impresionante. Explora la grandeza de Atenas mientras caminas entre los imponentes restos del Partenón y admira las hermosas islas griegas de Santorini y Mykonos con sus encantadoras casas blancas y atardeceres de ensueño. Descubre la mágica Capadocia en Turquía, con sus formaciones rocosas únicas y globos aerostáticos surcando el cielo. Admira la majestuosidad de la ciudad eterna, Roma, con sus impresionantes monumentos históricos como el Coliseo y el Vaticano. Sumérgete en la rica historia de Split, Croacia, mientras exploras el impresionante Palacio de Diocleciano. A bordo del crucero, disfruta de una experiencia de lujo con amplias y elegantes cabinas, una variedad de opciones gastronómicas que deleitarán tu paladar, actividades emocionantes y entretenimiento de primera clase. Déjate cautivar por la belleza y el encanto del Mediterráneo Oriental mientras creas recuerdos inolvidables en cada puerto y en cada momento a bordo de este increíble crucero.'),
(6, 1, 'Alaska', '2023-08-01', 1800, 'Embárcate en un crucero de ensueño hacia Alaska y la costa oeste de Canadá. Explora glaciares majestuosos, paisajes impresionantes y encantadoras ciudades mientras disfrutas de la comodidad y la aventura a bordo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeIZZi4GkJat0skjxUx6bs94npv6H0ZEnAc0lZ3La5-dLO3vcLVUNxMCq2qXh0SGq3cz4&usqp=CAU', 'https://fotografias.lasexta.com/clipping/cmsimages01/2022/02/15/0B3AE943-53FB-494B-A9AF-CF2922B8B86A/imagen-archivo-iceberg-costa-terranova-canada_98.jpg?crop=1920,1080,x0,y102&width=1900&height=1069&optimize=low&format=webply', 'Embárcate en un extraordinario viaje hacia la fascinante belleza natural de Alaska y la cautivadora costa oeste de Canadá. Navega a través de los mares turquesa y maravíllate con los majestuosos glaciares que se alzan imponentes, deslumbrándote con su esplendor helado. Explora la diversidad de vida silvestre en su hábitat natural, desde ballenas juguetonas hasta osos grizzly poderosos. Adéntrate en pintorescas ciudades costeras como Vancouver, con su moderna arquitectura y vibrante cultura, y visita pequeñas comunidades llenas de encanto y tradiciones arraigadas. Disfruta de experiencias únicas, como caminar sobre el hielo en un glaciar o realizar excursiones en kayak rodeado de paisajes impresionantes. A bordo del crucero, deléitate con una variedad de opciones gastronómicas de clase mundial, entretenimiento emocionante y comodidades excepcionales que te harán sentir como en un resort flotante. Déjate llevar por la majestuosidad y la aventura mientras creas recuerdos inolvidables en este viaje único hacia el norte salvaje.'),
(54, 14, 'Islas del Caribe', '2023-07-08', 2000, ' Descubre la belleza tropical de las Islas del Caribe en este emocionante tour a bordo del Crucero del Mar. Disfruta de playas paradisíacas, aguas cristalinas y una amplia variedad de actividades acuáticas. ¡No te lo pierdas!', 'images/6492fa2e87db0.jpg', 'images/6492fa2e87db3.jpg', 'Este increíble tour te llevará a explorar algunas de las islas más hermosas del Caribe, como Aruba, Jamaica, Bahamas y Barbados. Disfruta de excursiones en tierra para conocer la cultura local, bucea en los arrecifes de coral más impresionantes y relájate en las playas de arena blanca. Además, a bordo del Crucero del Mar, disfrutarás de entretenimiento en vivo, deliciosa gastronomía y actividades para toda la familia. ¡Una experiencia inolvidable en el paraíso caribeño!'),
(55, 6, 'Mediterráneo', '2023-07-06', 2500, ' Embárcate en un viaje inolvidable por las hermosas costas del Mediterráneo a bordo del Crucero Estrella del Mar. Descubre ciudades históricas, deliciosa gastronomía y paisajes impresionantes.', 'images/6492fa824c69a.jpg', 'images/6492fa824c69d.jpg', ' Este fascinante tour te llevará a recorrer los destinos más emblemáticos del Mediterráneo, como Barcelona, Roma, Atenas y Estambul. Explora antiguos sitios arqueológicos, maravíllate con la arquitectura histórica, degusta la deliciosa cocina local y disfruta de vistas panorámicas impresionantes desde la cubierta del Crucero Estrella del Mar. Además, tendrás la oportunidad de participar en excursiones opcionales para descubrir aún más la cultura y la historia de cada lugar que visites.'),
(56, 5, 'Fiordos Noruegos', '2023-07-08', 1800, 'Embárcate en una aventura única por los majestuosos Fiordos Noruegos a bordo del Crucero Aventura en el Mar. Disfruta de impresionantes paisajes, cascadas y la belleza natural de Noruega.', 'images/6492fb51d3c46.jpg', 'images/6492fb51d3c49.jpg', 'Explora la impresionante belleza de los Fiordos Noruegos en este inolvidable tour. Admira la magnificencia de los fiordos, con sus montañas escarpadas, cascadas cristalinas y exuberante vegetación. A bordo del Crucero Aventura en el Mar, disfruta de actividades como senderismo en la naturaleza, avistamiento de vida silvestre y fotografía panorámica. Además, tendrás la oportunidad de visitar encantadores pueblos costeros y aprender sobre la rica cultura noruega. Un viaje que te conectará con la naturaleza y te dejará recuerdos duraderos.'),
(57, 15, 'Islas Galápagos', '2023-06-30', 3000, 'Descubre la increíble biodiversidad de las Islas Galápagos en este tour único a bordo del Crucero Naturaleza Viva. Explora las islas volcánicas, observa especies endémicas y sumérgete en un paraíso natural.', 'images/6492fbab83a1e.jpg', 'images/6492fbab83a21.jpg', 'Adéntrate en el archipiélago de las Islas Galápagos y maravíllate con la vida silvestre única que habita allí. Podrás nadar junto a tortugas gigantes, observar iguanas marinas, avistar aves exóticas y descubrir la rica vida submarina mientras practicas snorkel o buceo. El Crucero Naturaleza Viva te brindará comodidad y lujo mientras te sumerges en esta maravillosa experiencia natural. Además, contarás con guías expertos que te brindarán conocimientos en ecología y conservación. Un viaje que te conectará con la belleza y la fragilidad de este ecosistema único.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `password`) VALUES
(1, 'admin@admin.com', '$2a$12$2Envtfz0HkJnUt7AXv/AOe49oHfDKJtqa/AGfHQXveVoUGLctWWpy');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cruceros`
--
ALTER TABLE `cruceros`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_crucero` (`id_crucero`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cruceros`
--
ALTER TABLE `cruceros`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tours`
--
ALTER TABLE `tours`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tours`
--
ALTER TABLE `tours`
  ADD CONSTRAINT `tours_ibfk_1` FOREIGN KEY (`id_crucero`) REFERENCES `cruceros` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
