-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2022 a las 12:20:33
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `citas_medicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `clave` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `rol` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `usuario`, `clave`, `apellido`, `nombre`, `foto`, `rol`) VALUES
(1, 'admin', '123', 'Loor', 'Leonel Jose', '', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `id_doctor` int(11) NOT NULL,
  `id_especialidad` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `nyaP` text COLLATE utf8_spanish_ci NOT NULL,
  `documento` text COLLATE utf8_spanish_ci NOT NULL,
  `inicio` datetime NOT NULL,
  `fin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `id_doctor`, `id_especialidad`, `id_paciente`, `nyaP`, `documento`, `inicio`, `fin`) VALUES
(32, 12, 3, 1, 'Samuel Dario Holguín Macías', '1236446', '2022-03-07 09:00:00', '2022-03-07 10:00:00'),
(33, 1, 4, 0, 'Gema Genesis Caicedo Sanchez', 'a0515s1x5', '2022-03-07 09:00:00', '2022-03-07 10:00:00'),
(34, 10, 2, 1, 'Samuel Dario Holguín Macías', '1236446', '2022-03-07 08:00:00', '2022-03-07 09:00:00'),
(35, 12, 3, 1, 'Samuel Dario Holguín Macías', '', '2022-03-08 10:00:00', '2022-03-08 11:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctores`
--

CREATE TABLE `doctores` (
  `id` int(11) NOT NULL,
  `id_especialidad` int(11) NOT NULL,
  `cedula` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` text COLLATE utf8_spanish_ci NOT NULL,
  `fechaNac` date NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `clave` text COLLATE utf8_spanish_ci NOT NULL,
  `sexo` text COLLATE utf8_spanish_ci NOT NULL,
  `horarioE` time NOT NULL,
  `horarioS` time NOT NULL,
  `rol` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `doctores`
--

INSERT INTO `doctores` (`id`, `id_especialidad`, `cedula`, `apellido`, `nombre`, `correo`, `telefono`, `direccion`, `ciudad`, `fechaNac`, `foto`, `usuario`, `clave`, `sexo`, `horarioE`, `horarioS`, `rol`) VALUES
(1, 4, '2147483647', 'Holguín Macías', 'Samuel Dario', 'samueldario@hotmail.com', 984121321, 'Ricaurte', 'Manabi', '2000-11-10', '', 'samuel', '934b535800b1cba8f96a5d72f72f1611', 'Masculino', '08:00:00', '17:00:00', 'Doctor'),
(9, 5, '1312805334', 'Vite Cagua', 'Gema Yuliana', 'gema@hotmail.com', 999999999, 'Av Caracas', 'Cotopaxi', '0000-00-00', '', 'gema11', '2222', 'Femenino', '08:00:00', '16:00:00', 'Doctor'),
(10, 2, '1312851866', 'Lopez Paz', 'Miguel Mario', 'miguel@hotmail.com', 974142154, 'Flavio Alfaro', 'Manabi', '1987-06-05', '', 'miguel', '2222', 'Masculino', '08:00:00', '12:00:00', 'Doctor'),
(11, 6, '1315897412', 'Vera Cruz', 'Rosa Antonia', 'rosa@hotmail.com', 982153121, 'riucarte y Ojuela', 'Manabi', '1996-08-05', '', 'rosa', '2222', 'Femenino', '13:00:00', '17:00:00', 'Doctor'),
(12, 3, '1648641864', 'Vera Ponce', 'Luis Modesto', 'luis@hotmail.com', 946516413, 'Manta', 'Manabi', '2000-09-05', 'Vistas/img/Doctores/Doc-932.png', 'luis', '2222', 'Masculino', '08:00:00', '17:00:00', 'Doctor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`id`, `nombre`) VALUES
(2, 'Cardiologia'),
(3, 'Cirugia'),
(4, 'Pediatría'),
(5, 'Medicina General'),
(6, 'Ginecología');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE `inicio` (
  `id` int(11) NOT NULL,
  `intro` text COLLATE utf8_spanish_ci NOT NULL,
  `horaE` time NOT NULL,
  `horaS` time NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `logo` text COLLATE utf8_spanish_ci NOT NULL,
  `favicon` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`id`, `intro`, `horaE`, `horaS`, `telefono`, `correo`, `direccion`, `logo`, `favicon`) VALUES
(1, 'Bienvenidos al ospital Basico El Oro', '08:00:00', '16:00:00', '0988615362', 'hospitaleloro@hotmail.com', 'El oro', 'Vistas/img/logo.png', 'Vistas/img/favicon.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `cedula` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(10) NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` text COLLATE utf8_spanish_ci NOT NULL,
  `fechaNac` date NOT NULL,
  `genero` text COLLATE utf8_spanish_ci NOT NULL,
  `documento` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `clave` text COLLATE utf8_spanish_ci NOT NULL,
  `rol` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `cedula`, `apellido`, `nombre`, `correo`, `telefono`, `direccion`, `ciudad`, `fechaNac`, `genero`, `documento`, `foto`, `usuario`, `clave`, `rol`) VALUES
(1, '1314064310', 'Holguín Macías', 'Samuel Dario', 'samueldario@hotmail.com', 984121321, 'Avenida del ejercito', 'Quito', '1998-10-10', 'Masculino', '', 'Vistas/img/Pacientes/Paciente999.png', 'samuel', '1111', 'Paciente'),
(2, '1312805334', 'Loor Loor', 'Martha Milena', 'milenita@hotmail.es', 984121321, 'Avenida del ejercito', 'Manta', '2000-02-15', 'Femenino', '', 'Vistas/img/Pacientes/Paciente100.jpg', 'martha', '1111', 'Paciente'),
(4, '1312707748', 'Guilber Leonel', 'Suntaxy Vera', 'guilber@hotmail.com', 978462312, 'Chone', 'Machala', '1998-08-05', 'Masculino', '25251da', '', 'guilber', '934b535800b1cba8f96a5d72f72f1611', 'Paciente'),
(6, '1312851866', 'Avila Mendoza', 'Pedro Pablo', 'pedro@hotmail.com', 987452120, 'Av Pichincha', 'Ambato', '1998-05-03', 'Masculino', 'a002', '', 'pedro', 'bc7316929fe1545bf0b98d114ee3ecb8', 'Paciente'),
(7, '1358974131', 'Lucas Menendez', 'Sergia Monserrate', 'sergia@hotmail.com', 987421651, 'Chone', 'Femenino', '1996-12-05', 'Femenino', 'a002', '', 'sergia', '1111', 'Paciente'),
(8, '1314155465', 'Caicedo Sanchez', 'Gema Genesis', 'gema@hotmail.com', 987132165, 'Chone', 'Manabi', '1997-05-03', 'Femenino', 'a003', '', 'gema', '1515', 'Paciente'),
(10, '1315161819', 'Quevedo Anchundia', 'Santiago Erick', 'santi@hotmail.com', 987451311, 'CALLE SN', 'El Oro', '1986-12-15', 'Masculino', 'a0004', '', 'santiago', '1111', 'Paciente'),
(17, '1313226761', 'Loor Loor', 'Luis Alfonso', 'alfonso@hotmail.com', 971321231, 'Machala', 'Manabi', '1987-12-05', 'Masculino', 'a0085', '', 'alfonso', '1111', 'Paciente'),
(18, '1514161651', 'Ramirez Ramirez', 'Geanella', 'geanella@hotmail.com', 987416132, 'Manta', 'Manabi', '2000-01-15', 'Femenino', '1514161651', '', 'geanella', 'bc7316929fe1545bf0b98d114ee3ecb8', 'Paciente'),
(19, '1614465151', 'Vera Vera', 'Veatriz', 'veatriz@hotmail.com', 981211212, 'Bolibar', 'Bolivar', '1976-08-15', 'Femenino', '1614465151', '', 'veatriz', '490640b43519c77281cb2f8471e61a71', 'Paciente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretarias`
--

CREATE TABLE `secretarias` (
  `id` int(11) NOT NULL,
  `cedula` int(10) NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `clave` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(10) NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` text COLLATE utf8_spanish_ci NOT NULL,
  `fechaNac` date NOT NULL,
  `genero` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `rol` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `secretarias`
--

INSERT INTO `secretarias` (`id`, `cedula`, `usuario`, `clave`, `nombre`, `apellido`, `correo`, `telefono`, `direccion`, `ciudad`, `fechaNac`, `genero`, `foto`, `rol`) VALUES
(1, 1313226761, 'paty', '3333', 'Patricia Yadira', 'Avila Avila', 'paty@hotmail.com', 987625238, '4 esquinas y ojuela', 'Manta', '2000-10-10', 'Femenino', 'Vistas/img/Secretarias/S-93.png', 'Secretaria');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctores`
--
ALTER TABLE `doctores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inicio`
--
ALTER TABLE `inicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `secretarias`
--
ALTER TABLE `secretarias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `doctores`
--
ALTER TABLE `doctores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `inicio`
--
ALTER TABLE `inicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `secretarias`
--
ALTER TABLE `secretarias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
