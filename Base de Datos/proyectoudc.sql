-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2020 a las 04:18:10
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoudc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administracion`
--

CREATE TABLE `administracion` (
  `id` int(11) NOT NULL,
  `nivel` int(1) NOT NULL DEFAULT 3,
  `tipodedocumento_id` varchar(30) NOT NULL,
  `numerodedocumento` int(20) NOT NULL,
  `fechadenacimiento` date NOT NULL,
  `primernombre` varchar(50) NOT NULL,
  `segundonombre` varchar(50) NOT NULL,
  `primerapellido` varchar(50) NOT NULL,
  `segundoapellido` varchar(50) NOT NULL,
  `genero_id` varchar(30) NOT NULL,
  `email` varchar(120) NOT NULL,
  `celular1` varchar(20) NOT NULL,
  `password` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administracion`
--

INSERT INTO `administracion` (`id`, `nivel`, `tipodedocumento_id`, `numerodedocumento`, `fechadenacimiento`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `genero_id`, `email`, `celular1`, `password`) VALUES
(1, 3, 'Cédula de Ciudadanía', 1234567890, '2020-07-03', 'MIGUEL ', '', 'ROMERO', 'PEÑARANDA', 'Hombre', 'coco@gmail.com', '2147483647', 0x30316233303761636261346635346635356161666333336262303662626266366361383033653961);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`id`, `numero`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacionprograma`
--

CREATE TABLE `calificacionprograma` (
  `id` varchar(20) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `calificacionprograma`
--

INSERT INTO `calificacionprograma` (`id`, `numero`) VALUES
('Excelente', 1),
('Muy bien', 2),
('Mas o menos', 3),
('Mal', 4),
('Muy mal', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id` int(11) NOT NULL,
  `nivel` int(1) NOT NULL DEFAULT 2,
  `tipodedocumento_id` varchar(30) NOT NULL,
  `numerodedocumento` int(30) NOT NULL,
  `primernombre` varchar(40) NOT NULL,
  `segundonombre` varchar(40) NOT NULL,
  `primerapellido` varchar(40) NOT NULL,
  `segundoapellido` varchar(40) NOT NULL,
  `fechadenacimiento` date NOT NULL,
  `genero_id` varchar(30) NOT NULL,
  `direccion` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` blob NOT NULL,
  `celular1` varchar(20) NOT NULL,
  `celular2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `nivel`, `tipodedocumento_id`, `numerodedocumento`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `fechadenacimiento`, `genero_id`, `direccion`, `email`, `password`, `celular1`, `celular2`) VALUES
(1, 2, 'Cédula de Ciudadanía', 1002227391, 'YESELYS', 'YANETH', 'HOYOS', 'SERPA', '1999-09-30', 'Mujer', 'socorro', 'yeselys.depp@gmail.com', 0x30323562373935376534626562366338343365613631323165306465646331623238663735333065, '3184200916', '3215620399');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocivil`
--

CREATE TABLE `estadocivil` (
  `id` varchar(30) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estadocivil`
--

INSERT INTO `estadocivil` (`id`, `numero`) VALUES
('Soltero/a', 1),
('Casado/a', 2),
('Unión libre o unión de hecho', 3),
('Viudo/a', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `nivel` int(1) NOT NULL DEFAULT 1,
  `tipodedocumento_id` varchar(30) NOT NULL,
  `numerodedocumento` int(30) DEFAULT NULL,
  `primernombre` varchar(50) NOT NULL,
  `segundonombre` varchar(50) NOT NULL,
  `primerapellido` varchar(50) NOT NULL,
  `segundoapellido` varchar(50) NOT NULL,
  `fechadenacimiento` date NOT NULL,
  `genero_id` varchar(30) NOT NULL,
  `direccion` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(100) NOT NULL,
  `celular1` varchar(20) NOT NULL,
  `celular2` varchar(20) NOT NULL,
  `zona_id` varchar(30) NOT NULL,
  `estadocivil_id` varchar(30) NOT NULL,
  `institucion_id` varchar(30) NOT NULL,
  `fechadegraduacion` date NOT NULL DEFAULT current_timestamp(),
  `nivelacademicom_id` varchar(30) NOT NULL,
  `nivelacademicop_id` varchar(30) NOT NULL,
  `tipovivienda_id` varchar(30) NOT NULL,
  `ingresohogar_id` varchar(60) NOT NULL,
  `programa` varchar(250) NOT NULL,
  `calificacionprograma_id` varchar(20) NOT NULL,
  `asignaturas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nivel`, `tipodedocumento_id`, `numerodedocumento`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `fechadenacimiento`, `genero_id`, `direccion`, `email`, `password`, `celular1`, `celular2`, `zona_id`, `estadocivil_id`, `institucion_id`, `fechadegraduacion`, `nivelacademicom_id`, `nivelacademicop_id`, `tipovivienda_id`, `ingresohogar_id`, `programa`, `calificacionprograma_id`, `asignaturas_id`) VALUES
(93, 1, '', 1461098862, 'VERONICA', 'YISEL', 'ACEVEDO', 'VASQUEZ', '0000-00-00', '', '', '', 'b2e4b4bdb6e04e56099dba98d98604ab6cfbaae4', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN SEGURIDAD INDUSTRIAL', '', 0),
(94, 1, '', 1461093179, 'MICHELLE', 'CAROLINA', 'ALVARADO', 'CHIQUILLO', '0000-00-00', '', '', '', '04506bde02559cae837e18c2a228315f122eb12b', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN CONSTRUCCIONES CIVILES', '', 0),
(95, 1, '', 1461088539, 'JOSE', 'MANUEL', 'ARAGON', 'RIVERO', '0000-00-00', '', '', '', 'f99374da6292be260a786404d19a565ae2d3ecd0', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN MANTENIMIENTO ELECTRONICO INDUSTRIAL', '', 0),
(96, 1, '', 2147483647, 'ANA', 'ISABEL', 'BANQUEZ', 'DIAZ', '0000-00-00', '', '', '', '969ad9d46bb855cc6d9693715c5d06d613c0df94', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN CONSTRUCCIONES CIVILES', '', 0),
(97, 1, '', 1411158511, '', 'ALEXANDER', 'BARRIOS', 'JULIO', '0000-00-00', '', '', '', '1f4a1860897ba6c84ba7786084c19dd89acc3873', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN MANTENIMIENTO MECANICO INDUSTRIAL', '', 0),
(98, 1, '', 1466337559, 'ELOISA', 'BARRIOS', 'BARRIOS', 'PALMA', '0000-00-00', '', '', '', 'ce6f31cddcc8990f46c241481650ba310acf73bd', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN ANALISIS QUIMICO INDUSTRIAL', '', 0),
(99, 1, '', 1410121922, 'LUIS', 'CARLOS', 'BATISTA', 'PEDROZA', '0000-00-00', '', '', '', '3f8473897dd103ed521f8a83006da66dc89fddfd', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN SEGURIDAD INDUSTRIAL', '', 0),
(100, 1, '', 1592110052, 'DIANA', 'CAROLINA', 'BENITEZ', 'SIMANCA', '0000-00-00', '', '', '', '926b64dded3b3953a012d4449733f123b7c0c1ec', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN ANALISIS QUIMICO INDUSTRIAL', '', 0),
(101, 1, '', 1401615008, 'JOHN', 'DARIO', 'BOLIVAR', 'ZARAZA', '0000-00-00', '', '', '', 'fb3b61ff8b1fecb66469f63e79280500ccf9a50b', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN MANTENIMIENTO ELECTRONICO INDUSTRIAL', '', 0),
(102, 1, '', 1467809701, 'WENDY', 'YULEISIS', 'CUETO', 'HERNANDEZ', '0000-00-00', '', '', '', 'ba35433a0ff94b5986e2ea97e1bf7999e8e594d2', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN SEGURIDAD INDUSTRIAL', '', 0),
(103, 1, '', 1401615604, 'CARLOS', 'MANUEL', 'DIAZ', 'ANGULO', '0000-00-00', '', '', '', 'f2d52b6f0ff5853d1516244fe97569e9cf1c012c', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN SEGURIDAD INDUSTRIAL', '', 0),
(104, 1, '', 1411160955, 'NEISER', 'ALBERTO', 'DIAZ', 'GUTIERREZ', '0000-00-00', '', '', '', '59ec2bf227fa296365a09e1f23edfbc83608834b', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN OPERACIÓN DE PROCESOS INDUSTRIALES', '', 0),
(105, 1, '', 1467840345, 'FABIAN', 'DIAZ', 'DIAZ', 'ROJAS', '0000-00-00', '', '', '', '1467840345', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN SEGURIDAD INDUSTRIAL', '', 0),
(106, 1, '', 1671003270, 'CAMILO', 'ANDRES', 'ESSALAS', 'ESPEJO', '0000-00-00', '', '', '', '2d82c21e5f4311e1add13a52181d766cb237f481', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN SEGURIDAD INDUSTRIAL', '', 0),
(107, 1, '', 1453161753, 'LUIS', 'ESTEBAN', 'GALEANO', 'GOMEZ', '0000-00-00', '', '', '', '7960d59ee5d3cfa7e6541a4c709e14f9beaec352', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN MANTENIMIENTO ELECTRONICO INDUSTRIAL', '', 0),
(108, 1, '', 2147483647, '', 'DANIELA', 'GARCIA', 'CASTILLO', '0000-00-00', '', '', '', '6f1fbd2e439bc35c7b89259793ca9347568c18ab', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN SEGURIDAD INDUSTRIAL', '', 0),
(109, 1, '', 1466321952, 'JORGE', 'LUIS', 'GARCIA', 'DE LEON', '0000-00-00', '', '', '', 'beccd8c0403ff2bd27508abc713567eac8d869cd', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN MANTENIMIENTO MECANICO INDUSTRIAL', '', 0),
(110, 1, '', 1461098173, 'GENESIS', 'NAZARETH', 'GAVIRIA', 'TEHERAN', '0000-00-00', '', '', '', 'f43a2a4d0dd5531124711a9b707e121dffaba7d8', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN SEGURIDAD INDUSTRIAL', '', 0),
(111, 1, '', 1461093928, '', 'DANNA', 'GOMEZ', 'PACHECO', '0000-00-00', '', '', '', '2dba2072ed64ccc3702e542a83f5f056b943f290', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN SEGURIDAD INDUSTRIAL', '', 0),
(112, 1, '', 1461092137, 'AURA', 'CRISTINA', 'HERNANDEZ', 'GARCIA', '0000-00-00', '', '', '', '60e3c0566ca216ed288b8b41515907d512f40e50', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN CONSTRUCCIONES CIVILES', '', 0),
(113, 1, '', 1458761322, 'LAURA', 'MICHEL', 'HERRERA', 'GONZALES', '0000-00-00', '', '', '', 'f9ff6cf7754c4ceee265088ce3ba3359d5e0e0cc', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN CONSTRUCCIONES CIVILES', '', 0),
(114, 1, '', 1542016608, 'YORYANIS', 'JIMENEZ', 'JIMENEZ', 'RAMOS', '0000-00-00', '', '', '', 'a18ba1fc1f7f06dcdac918aee1b70077192bc7ea', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN SEGURIDAD INDUSTRIAL', '', 0),
(115, 1, '', 1579263822, 'YARLEIDIS', 'KATERIN', 'JULIO', 'GUZMAN', '0000-00-00', '', '', '', '1275454dd3b538eeda2933e682fb99cc411fbb76', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN ANALISIS QUIMICO INDUSTRIAL', '', 0),
(116, 1, '', 1501149990, 'LORENA', 'LOZANO', 'LOZANO', 'RIVERO', '0000-00-00', '', '', '', 'a6d3ce1ca840fb79deaec4ecaf2138e43995ace2', '', '', '', '', '', '2020-09-21', '', '', '', '', 'TECNICO EN SEGURIDAD INDUSTRIAL', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id` varchar(20) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id`, `numero`) VALUES
('Hombre', 1),
('Mujer', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresohogar`
--

CREATE TABLE `ingresohogar` (
  `id` varchar(60) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ingresohogar`
--

INSERT INTO `ingresohogar` (`id`, `numero`) VALUES
('Menos de un salario mínimo', 1),
('1 o mas de un salario mínimo', 2),
('3 o mas de un salario mínimo', 3),
('5 o mas de un salario mínimo', 4),
('10 o mas de un salario mínimo', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `id` varchar(30) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`id`, `numero`) VALUES
('Publica', 1),
('Privada', 2),
('Mixta', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivelacademicom`
--

CREATE TABLE `nivelacademicom` (
  `id` varchar(30) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nivelacademicom`
--

INSERT INTO `nivelacademicom` (`id`, `numero`) VALUES
(' Educación Preescolar', 1),
('Educación Básica Primaria', 2),
('Educación Básica secundaria', 3),
('Educación Media', 4),
('Técnica Profesional', 5),
('Tecnológica', 6),
('Universitaria', 7),
('Post-Graduacion', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivelacademicop`
--

CREATE TABLE `nivelacademicop` (
  `id` varchar(30) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nivelacademicop`
--

INSERT INTO `nivelacademicop` (`id`, `numero`) VALUES
('Educación Preescolar', 1),
('Educación Básica Primaria', 2),
('Educación Básica secundaria', 3),
('Educación Media', 4),
('Técnica Profesional', 5),
('Tecnológica', 6),
('Universitaria', 7),
('Post-Graduacion', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodedocumento`
--

CREATE TABLE `tipodedocumento` (
  `id` varchar(4) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipodedocumento`
--

INSERT INTO `tipodedocumento` (`id`, `nombre`) VALUES
('CC', 'Cédula de Ciudadanía'),
('CE', 'Cédula de Extranjería'),
('TI', 'Tarjeta de Identidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipovivienda`
--

CREATE TABLE `tipovivienda` (
  `id` varchar(30) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipovivienda`
--

INSERT INTO `tipovivienda` (`id`, `numero`) VALUES
('Propia', 1),
('Alquilada', 2),
('Familiar', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `id` varchar(30) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`id`, `numero`) VALUES
('Zona rural', 1),
('Zona urbana', 2),
('Zona despoblada', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administracion`
--
ALTER TABLE `administracion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `1` (`tipodedocumento_id`),
  ADD KEY `genero` (`genero_id`);

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `10` (`numero`);

--
-- Indices de la tabla `calificacionprograma`
--
ALTER TABLE `calificacionprograma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `9` (`numero`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `1` (`tipodedocumento_id`),
  ADD KEY `genero` (`genero_id`);

--
-- Indices de la tabla `estadocivil`
--
ALTER TABLE `estadocivil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `3` (`numero`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `3` (`estadocivil_id`),
  ADD KEY `4` (`institucion_id`),
  ADD KEY `5` (`nivelacademicom_id`),
  ADD KEY `6` (`nivelacademicop_id`),
  ADD KEY `7` (`tipovivienda_id`),
  ADD KEY `8` (`ingresohogar_id`),
  ADD KEY `9` (`calificacionprograma_id`),
  ADD KEY `10` (`asignaturas_id`),
  ADD KEY `zona` (`zona_id`) USING BTREE,
  ADD KEY `2` (`tipodedocumento_id`) USING BTREE,
  ADD KEY `015` (`genero_id`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`),
  ADD KEY `10` (`numero`);

--
-- Indices de la tabla `ingresohogar`
--
ALTER TABLE `ingresohogar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `8` (`numero`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `4` (`numero`);

--
-- Indices de la tabla `nivelacademicom`
--
ALTER TABLE `nivelacademicom`
  ADD PRIMARY KEY (`id`),
  ADD KEY `5` (`numero`);

--
-- Indices de la tabla `nivelacademicop`
--
ALTER TABLE `nivelacademicop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `6` (`numero`);

--
-- Indices de la tabla `tipodedocumento`
--
ALTER TABLE `tipodedocumento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `1` (`nombre`);

--
-- Indices de la tabla `tipovivienda`
--
ALTER TABLE `tipovivienda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `7` (`numero`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`id`),
  ADD KEY `2` (`numero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administracion`
--
ALTER TABLE `administracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `calificacionprograma`
--
ALTER TABLE `calificacionprograma`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estadocivil`
--
ALTER TABLE `estadocivil`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ingresohogar`
--
ALTER TABLE `ingresohogar`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `nivelacademicom`
--
ALTER TABLE `nivelacademicom`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `nivelacademicop`
--
ALTER TABLE `nivelacademicop`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipovivienda`
--
ALTER TABLE `tipovivienda`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `zona`
--
ALTER TABLE `zona`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
