-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-02-2025 a las 19:13:19
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `perros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Dni` varchar(9) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Apellido1` varchar(15) NOT NULL,
  `Apellido2` varchar(15) NOT NULL,
  `Direccion` varchar(200) DEFAULT NULL,
  `Tlfno` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Dni`, `Nombre`, `Apellido1`, `Apellido2`, `Direccion`, `Tlfno`) VALUES
('12345678A', 'Carlos', 'García', 'López', 'Calle Mayor 10, 45600, Talavera de la Reina, Toledo', '600000001'),
('12345678B', 'María', 'Martínez', 'Fernández', 'Avenida de la Constitución 20, 45600, Talavera de la Reina, Toledo', '600000002'),
('12345678C', 'Juan', 'Rodríguez', 'Gómez', 'Calle San Juan 15, 45600, Talavera de la Reina, Toledo', '600000003');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Apellido1` varchar(15) NOT NULL,
  `Apellido2` varchar(15) NOT NULL,
  `Cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Id`, `Nombre`, `Apellido1`, `Apellido2`, `Cargo`) VALUES
(1, 'Pedro', 'López', 'Martínez', 'Veterinario'),
(2, 'Ana', 'González', 'Ruiz', 'Peluquero Canino'),
(3, 'Luis', 'Fernández', 'Pérez', 'Recepcionista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perros`
--

CREATE TABLE `perros` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Raza` varchar(30) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Dni_Cliente` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perros`
--

INSERT INTO `perros` (`Id`, `Nombre`, `Raza`, `Edad`, `Dni_Cliente`) VALUES
(1, 'Bobby', 'Labrador', 5, '12345678A'),
(2, 'Luna', 'Poodle', 3, '12345678B'),
(3, 'Max', 'Bulldog', 4, '12345678C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perro_recibe_ser`
--

CREATE TABLE `perro_recibe_ser` (
  `Id` int(11) NOT NULL,
  `Id_Perro` int(11) DEFAULT NULL,
  `Id_Servicio` int(11) DEFAULT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perro_recibe_ser`
--

INSERT INTO `perro_recibe_ser` (`Id`, `Id_Perro`, `Id_Servicio`, `Fecha`) VALUES
(1, 1, 1, '2024-02-01'),
(2, 2, 2, '2024-02-05'),
(3, 3, 3, '2024-02-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`Id`, `Nombre`, `Precio`) VALUES
(1, 'Baño', 20.00),
(2, 'Corte de Pelo', 30.00),
(3, 'Consulta Veterinaria', 50.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Dni`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `perros`
--
ALTER TABLE `perros`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Dni_Cliente` (`Dni_Cliente`);

--
-- Indices de la tabla `perro_recibe_ser`
--
ALTER TABLE `perro_recibe_ser`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Perro` (`Id_Perro`),
  ADD KEY `Id_Servicio` (`Id_Servicio`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `perros`
--
ALTER TABLE `perros`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `perro_recibe_ser`
--
ALTER TABLE `perro_recibe_ser`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `perros`
--
ALTER TABLE `perros`
  ADD CONSTRAINT `perros_ibfk_1` FOREIGN KEY (`Dni_Cliente`) REFERENCES `clientes` (`Dni`);

--
-- Filtros para la tabla `perro_recibe_ser`
--
ALTER TABLE `perro_recibe_ser`
  ADD CONSTRAINT `perro_recibe_ser_ibfk_1` FOREIGN KEY (`Id_Perro`) REFERENCES `perros` (`Id`),
  ADD CONSTRAINT `perro_recibe_ser_ibfk_2` FOREIGN KEY (`Id_Servicio`) REFERENCES `servicios` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
