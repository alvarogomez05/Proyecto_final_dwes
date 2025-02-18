-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2025 a las 17:30:31
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
('10101010A', 'Carmen', 'Gutiérrez', 'Iglesias', 'Calle de la Merced 3, 10300 Navalmoral de la Mata, Cáceres', '012345678'),
('11111111A', 'Manuel', 'García', 'González', 'Calle Mayor 23, 10300 Navalmoral de la Mata, Cáceres', '123456789'),
('12345678A', 'Carlos', 'García', 'López', 'Calle Mayor 10, 45600 Talavera de la Reina, Toledo', '600000001'),
('12345678B', 'María', 'Martínez', 'Fernández', 'Avenida de la Constitución 20, 45600 Talavera de la Reina, Toledo', '600000002'),
('12345678C', 'Juan', 'Rodríguez', 'Gómez', 'Calle San Juan 15, 45600 Talavera de la Reina, Toledo', '600000003'),
('12345678D', 'Ana', 'González', 'Ruiz', 'Plaza del Reloj 5, 45600 Talavera de la Reina, Toledo', '600000004'),
('12345678E', 'Pedro', 'Hernández', 'Díaz', 'Calle del Sol 25, 45600 Talavera de la Reina, Toledo', '600000005'),
('12345678F', 'Laura', 'Jiménez', 'Moreno', 'Avenida de los Reyes Católicos 12, 45600 Talavera de la Reina, Toledo', '600000006'),
('12345678G', 'Luis', 'Sánchez', 'Pérez', 'Calle Nueva 30, 45600 Talavera de la Reina, Toledo', '600000007'),
('12345678H', 'Carmen', 'Torres', 'Ramírez', 'Calle Real 8, 45600 Talavera de la Reina, Toledo', '600000008'),
('12345678I', 'Miguel', 'Vázquez', 'Álvarez', 'Avenida de la Libertad 35, 45600 Talavera de la Reina, Toledo', '600000009'),
('12345678J', 'Sara', 'Romero', 'García', 'Calle Jardines 17, 45600 Talavera de la Reina, Toledo', '600000010'),
('12345678K', 'David', 'Molina', 'Ortiz', 'Calle Olmo 2, 45600 Talavera de la Reina, Toledo', '600000011'),
('12345678L', 'Elena', 'Domínguez', 'Núñez', 'Plaza Mayor 1, 45600 Talavera de la Reina, Toledo', '600000012'),
('12345678M', 'Fernando', 'Santos', 'Gutiérrez', 'Avenida de la Paz 40, 45600 Talavera de la Reina, Toledo', '600000013'),
('12345678N', 'Isabel', 'Ramos', 'Méndez', 'Calle Gran Vía 22, 45600 Talavera de la Reina, Toledo', '600000014'),
('12345678O', 'Javier', 'Navarro', 'Cano', 'Calle del Río 14, 45600 Talavera de la Reina, Toledo', '600000015'),
('12345678P', 'Patricia', 'Ortega', 'Serrano', 'Calle Luna 27, 45600 Talavera de la Reina, Toledo', '600000016'),
('12345678Q', 'Alberto', 'Rubio', 'Blanco', 'Avenida del Prado 19, 45600 Talavera de la Reina, Toledo', '600000017'),
('12345678R', 'Raquel', 'Gil', 'Martín', 'Calle Verde 13, 45600 Talavera de la Reina, Toledo', '600000018'),
('12345678S', 'Andrés', 'Castro', 'Ruiz', 'Plaza Nueva 7, 45600 Talavera de la Reina, Toledo', '600000019'),
('12345678T', 'Marta', 'Vega', 'Cabrera', 'Calle Azul 9, 45600 Talavera de la Reina, Toledo', '600000020'),
('22222222B', 'María', 'López', 'Fernández', 'Avenida de Extremadura 15, 10300 Navalmoral de la Mata, Cáceres', '234567890'),
('22345678A', 'Roberto', 'Martínez', 'Alonso', 'Calle de la Constitución 12, 45510 Fuensalida, Toledo', '600000021'),
('22345678B', 'Alicia', 'Gómez', 'Fernández', 'Calle de la Iglesia 5, 45510 Fuensalida, Toledo', '600000022'),
('22345678C', 'Manuel', 'López', 'García', 'Calle Real 8, 45510 Fuensalida, Toledo', '600000023'),
('22345678D', 'Laura', 'Pérez', 'Sánchez', 'Calle San Juan 3, 45510 Fuensalida, Toledo', '600000024'),
('22345678E', 'José', 'Rodríguez', 'Hernández', 'Avenida de la Paz 10, 45510 Fuensalida, Toledo', '600000025'),
('32345678A', 'Raúl', 'Fernández', 'Pérez', 'Calle del Castillo 1, 45560 Oropesa, Toledo', '600000026'),
('32345678B', 'Sofía', 'Moreno', 'García', 'Calle Mayor 5, 45560 Oropesa, Toledo', '600000027'),
('32345678C', 'Ignacio', 'Serrano', 'Hernández', 'Plaza de la Villa 3, 45560 Oropesa, Toledo', '600000028'),
('32345678D', 'Julia', 'Blanco', 'López', 'Calle Real 10, 45560 Oropesa, Toledo', '600000029'),
('32345678E', 'Miguel', 'Núñez', 'Martín', 'Calle Iglesia 7, 45560 Oropesa, Toledo', '600000030'),
('32345678F', 'César', 'Rojas', 'Mendoza', 'Calle San Miguel 2, 45567 Lagartera, Toledo', '600000031'),
('32345678G', 'Paula', 'Cruz', 'Torres', 'Calle del Sol 6, 45567 Lagartera, Toledo', '600000032'),
('32345678H', 'Héctor', 'Medina', 'Ruiz', 'Avenida de la Constitución 4, 45672 Ventas de San Julián, Toledo', '600000033'),
('32345678I', 'Aitana', 'Vega', 'Romero', 'Calle Nueva 11, 45672 Ventas de San Julián, Toledo', '600000034'),
('32345678J', 'Rubén', 'González', 'Díaz', 'Calle Ancha 9, 45634 Calzada de Oropesa, Toledo', '600000035'),
('33333333C', 'Antonio', 'Martínez', 'Rodríguez', 'Calle Cervantes 7, 10300 Navalmoral de la Mata, Cáceres', '345678901'),
('44444444D', 'Ana', 'Sánchez', 'Pérez', 'Calle San Roque 42, 10300 Navalmoral de la Mata, Cáceres', '456789012'),
('55555555A', 'Javier', 'Gómez', 'Martín', 'Calle Zurbarán 10, 10300 Navalmoral de la Mata, Cáceres', '567890123'),
('66666666A', 'Laura', 'Fernández', 'García', 'Plaza de España 5, 10300 Navalmoral de la Mata, Cáceres', '678901234'),
('77777777A', 'Carlos', 'Díaz', 'Ruiz', 'Calle del Convento 31, 10300 Navalmoral de la Mata, Cáceres', '789012345'),
('88888888A', 'Sara', 'Muñoz', 'Dominguez', 'Calle de la Cruz 8, 10300 Navalmoral de la Mata, Cáceres', '890123456'),
('99999999A', 'Pedro', 'Vázquez', 'Hernández', 'Avenida de la Constitución 14, 10300 Navalmoral de la Mata, Cáceres', '901234567');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Dni` varchar(9) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Rol` enum('EMPLEADO','ADMIN','AUXILIAR') NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido1` varchar(15) NOT NULL,
  `Apellido2` varchar(15) NOT NULL,
  `Calle` varchar(30) DEFAULT NULL,
  `Numero` int(11) DEFAULT NULL,
  `Cp` varchar(5) DEFAULT NULL,
  `Poblacion` varchar(50) DEFAULT NULL,
  `Provincia` varchar(20) DEFAULT NULL,
  `Tlfno` varchar(9) DEFAULT NULL,
  `Profesion` enum('NUTRICIONISTA','ESTILISTA','AUXILIAR','ATT.CLIENTE','ADMIN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Dni`, `Email`, `Password`, `Rol`, `Nombre`, `Apellido1`, `Apellido2`, `Calle`, `Numero`, `Cp`, `Poblacion`, `Provincia`, `Tlfno`, `Profesion`) VALUES
('12345678A', 'ana.popescu@gromer.com', '$2y$10$C1AN3ZBbVNpOniG5PE9bTuyKYdrRogkQ3od0lvNLnlSewWnk/J3Hu', 'AUXILIAR', 'Ana', 'Popescu', 'Dragomir', 'Calle San Francisco', 15, '45600', '0', 'Toledo', '600112233', 'AUXILIAR'),
('1234567A', 'hola@gmail.com', '1234', '', 'Paco', 'Sanz', 'que', 'Barbacoa', 123, '45600', 'Talavera', 'si', '12312312', 'AUXILIAR'),
('1234567P', 'hola@gmail.com', '1234', '', 'AMANDA', 'Sanz', 'que', 'Barbacoa', 123, '45600', 'Talavera', 'si', '12312312', 'AUXILIAR'),
('23456789B', 'maria.garcia@gromer.com', '$2y$10$6tEcAVMz10m5TgbFWKQ6VufuDGrCbn/LQfAQGEn9COzTK0HQDRvLO', 'EMPLEADO', 'María', 'García', 'López', 'Calle Mayor', 10, '45600', '0', 'Toledo', '600223344', 'ESTILISTA'),
('34567890C', 'juan.martinez@gromer.com', '$2y$10$iOimRlLbIxXISsYE/n4PqexDsaQMtSjZ8P3yfRtTuFTh9cK0WWl06', 'EMPLEADO', 'Juan', 'Martínez', 'Fernández', 'Calle Real', 5, '45890', '0', 'Toledo', '600334455', 'ESTILISTA'),
('45678901A', 'giulia.rossi@gromer.com', '$2y$10$Nc0ZuIpDhBweESwxmHRMferG6VN2Fsa9z/2BVZVHl0G.C/Zs2GN2u', 'EMPLEADO', 'Giulia', 'Rossi', 'Conti', 'Camino de Illescas', 15, '45200', '0', 'Toledo', '600445566', 'NUTRICIONISTA'),
('56789012A', 'antonio.garcia@gromer.com', '$2y$10$nILnJnrG2S20yPh7UN1qbOAdlhyGnBEfkRFq.2KDO5F/Gw9RAncIS', 'AUXILIAR', 'Antonio', 'García', 'López', 'Calle Mayor', 20, '45600', '0', 'Toledo', '600112233', 'ATT.CLIENTE'),
('67890123B', 'maria.martinez@gromer.com', '$2y$10$k2kMUmC9cO2RrD.YVFC9..3Hcpi5cmNdjphdgsqQIyXJxd7P3/umO', 'EMPLEADO', 'María', 'Martínez', 'Fernández', 'Calle del Castillo', 10, '45560', '0', 'Toledo', '600223344', 'ESTILISTA'),
('7777777Z', 'admin@gromer.com', '$2y$10$0dTq2rtR3rINzv.9jy8xXuCqgw43gyYsa1Wz89gnlj/366UR0q6UO', 'ADMIN', 'Pedro', 'Pedro', 'Pe', 'Calle San Francisco', 15, '45600', '0', 'Toledo', '600112233', 'ADMIN'),
('78901234C', 'ana.gonzalez@gromer.com', '$2y$10$oDGu3nC5RAkonlDvVjaccO5uI1rGkD7KReAFMTAYNYNDs6fHnphYS', 'EMPLEADO', 'Ana', 'González', 'Ruiz', 'Calle del Sol', 5, '45600', '0', 'Toledo', '600334455', 'ESTILISTA'),
('89012345C', 'carlota.romero@gromer.com', '$2y$10$pjaR.btupx7IMSojcR6EYuhhrr4lboOjynGigODnNlghpeaFtJKR.', 'EMPLEADO', 'Carlota', 'Romero', 'Corinto', 'Calle del Camping', 20, '45683', '0', 'Toledo', '600445566', 'NUTRICIONISTA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perros`
--

CREATE TABLE `perros` (
  `Id` int(11) NOT NULL,
  `Dni_Cliente` varchar(9) DEFAULT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Fecha_Nto` date DEFAULT NULL,
  `Raza` varchar(40) NOT NULL,
  `Peso` decimal(5,3) DEFAULT NULL,
  `Altura` int(11) DEFAULT NULL,
  `Observaciones` varchar(200) DEFAULT NULL,
  `Numero_Chip` varchar(15) NOT NULL,
  `Sexo` enum('Macho','Hembra') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perros`
--

INSERT INTO `perros` (`Id`, `Dni_Cliente`, `Nombre`, `Fecha_Nto`, `Raza`, `Peso`, `Altura`, `Observaciones`, `Numero_Chip`, `Sexo`) VALUES
(1, '12345678A', 'Rex', '1963-10-13', 'Labrador Retriever', 30.500, 60, 'Activo y juguetón', '001-0001-00001', 'Macho'),
(2, '12345678B', 'Bella', '1933-07-13', 'Bulldog Francés', 12.700, 30, 'Juguetona y cariñosa', '001-0001-00002', 'Hembra'),
(3, '12345678C', 'Max', '1994-07-13', 'Pastor Alemán', 35.200, 65, 'Excelente guardián', '001-0001-00003', 'Macho'),
(4, '12345678D', 'Luna', '2024-08-15', 'Golden Retriever', 31.800, 58, 'Es un perro muy aprensivo', '001-0001-00004', 'Hembra'),
(5, '12345678E', 'Charlie', '1872-08-13', 'Beagle', 15.100, 40, 'Activo y curioso', '001-0001-00005', 'Macho'),
(6, '12345678F', 'Daisy', '1994-08-13', 'Yorkshire Terrier', 3.400, 20, 'Valiente y enérgica', '001-0001-00006', 'Hembra'),
(7, '12345678G', 'Rocky', '1964-01-13', 'Boxer', 29.000, 60, 'Fuerte y protector', '001-0001-00007', 'Macho'),
(8, '12345678H', 'Sadie', '1629-02-13', 'Caniche', 4.600, 25, 'Juguetona y cariñosa', '001-0001-00008', 'Hembra'),
(9, '12345678I', 'Buster', '1902-09-13', 'Dachshund', 9.300, 22, 'Leal y curioso', '001-0001-00009', 'Macho'),
(10, '12345678J', 'Molly', '1537-07-13', 'Rottweiler', 44.500, 68, 'Excelente guardián', '001-0001-00010', 'Hembra'),
(11, '12345678K', 'Toby', '1964-03-13', 'Chihuahua', 2.400, 20, 'Valiente y pequeño', '001-0001-00011', 'Macho'),
(12, '12345678L', 'Bailey', '1933-09-13', 'Schnauzer', 7.900, 35, 'Obediente y vigilante', '001-0001-00012', 'Macho'),
(13, '12345678M', 'Coco', '1903-02-13', 'Cocker Spaniel', 13.200, 39, 'Amigable y activo', '001-0001-00013', 'Macho'),
(14, '12345678N', 'Jake', '2019-12-26', 'Border Collie', 18.400, 53, 'Inteligente y trabajador', '001-0001-00014', 'Macho'),
(15, '12345678O', 'Lucy', '2018-12-27', 'Shih Tzu', 6.200, 25, 'Adorable y dócil', '001-0001-00015', 'Hembra'),
(16, '12345678P', 'Rocky', '2013-12-29', 'Labrador Retriever', 29.700, 60, 'Fuerte y activo', '001-0001-00016', 'Macho'),
(17, '12345678Q', 'Lola', '2021-12-28', 'Bulldog Francés', 12.900, 30, 'Amistosa y curiosa', '001-0001-00017', 'Hembra'),
(18, '12345678R', 'Bruno', '2022-12-29', 'Boxer', 28.500, 60, 'Protector y juguetón', '001-0001-00018', 'Macho'),
(19, '12345678S', 'Luna', '2020-12-30', 'Golden Retriever', 32.100, 58, 'Obediente y cariñosa', '001-0001-00019', 'Hembra'),
(20, '12345678T', 'Simba', '2020-01-01', 'Rottweiler', 45.800, 68, 'Fuerte y leal', '001-0001-00020', 'Macho'),
(21, '12345678G', 'Rocky Jr.', '2023-01-01', 'Boxer', 27.800, 58, 'Energético y protector', '001-0001-00021', 'Macho'),
(22, '12345678G', 'Buddy', '2024-01-02', 'Boxer', 26.500, 57, 'Amistoso y fiel', '001-0001-00022', 'Macho'),
(23, '11111111A', 'Lucky', '2012-01-06', 'Chihuahua', 2.300, 18, 'Pequeño y cariñoso', '001-0001-00023', 'Macho'),
(24, '22222222B', 'Princess', '2023-01-04', 'Chihuahua', 2.100, 17, 'Juguetona y alerta', '001-0001-00024', 'Hembra'),
(25, '33333333C', 'Coco', '2021-01-05', 'Chihuahua', 2.500, 19, 'Amigable y enérgico', '001-0001-00025', 'Macho'),
(26, '44444444D', 'Buddy', '2024-01-06', 'Chihuahua', 2.200, 18, 'Leal y valiente', '001-0001-00026', 'Macho'),
(27, '12345678A', 'Lucky', '2023-01-07', 'Bichon Maltes', 4.000, 24, 'Energético y cariñoso', '001-0001-00027', 'Macho'),
(28, '12345678A', 'Daisy', '2024-01-08', 'Bichon Maltes', 4.500, 25, 'Divertida y leal', '001-0001-00028', 'Hembra'),
(29, '12345678B', 'Coco', '2022-01-09', 'Bichon Maltes', 3.600, 22, 'Juguetón y afectuoso', '001-0001-00029', 'Macho'),
(30, '12345678B', 'Luna', '2013-01-12', 'Bichon Maltes', 4.000, 23, 'Juguetona y cariñosa', '001-0001-00030', 'Hembra'),
(31, '12345678C', 'Rocky', '2021-01-11', 'Beagle', 15.600, 40, 'Leal y enérgico', '001-0001-00031', 'Macho'),
(32, '12345678C', 'Sophie', '2013-01-14', 'Beagle', 14.900, 39, 'Cariñosa y juguetona', '001-0001-00032', 'Hembra'),
(33, '12345678D', 'Copper', '2022-01-13', 'Beagle', 15.400, 40, 'Divertido y amigable', '001-0001-00033', 'Macho'),
(34, '12345678D', 'Zoe', '2023-02-03', 'Beagle', 15.200, 39, 'Amigable y sociable', '001-0001-00034', 'Hembra'),
(35, '12345678E', 'Buster', '2021-11-09', 'Beagle', 15.100, 39, 'Inteligente y curioso', '001-0001-00035', 'Macho'),
(36, '12345678E', 'Daisy', '2013-02-07', 'Beagle', 15.500, 40, 'Leal y enérgica', '001-0001-00036', 'Hembra'),
(37, '12345678F', 'Max', '2020-11-16', 'Beagle', 15.300, 40, 'Juguetón y amigable', '001-0001-00037', 'Macho'),
(38, '12345678F', 'Maggie', '2022-12-13', 'Beagle', 15.000, 39, 'Cariñosa y sociable', '001-0001-00038', 'Hembra'),
(39, '12345678G', 'Cooper', '2011-12-14', 'Beagle', 15.200, 39, 'Divertido y leal', '001-0001-00039', 'Macho'),
(40, '12345678G', 'Lucy', '2023-01-20', 'Beagle', 15.400, 39, 'Juguetona y cariñosa', '001-0001-00040', 'Hembra'),
(41, '32345678I', 'Bruno', '2021-11-07', 'Bulldog Francés', 12.700, 30, 'Juguetona y cariñosa', '001-0001-00060', 'Hembra'),
(42, '66666666A', 'Lucas', '2023-11-16', 'Yorkshire Terrier', 3.400, 20, 'Valiente y enérgica', '001-0001-00061', 'Hembra'),
(43, '32345678B', 'Lola', '2023-02-05', 'Bulldog Francés', 12.700, 30, 'Juguetona y cariñosa', '001-0001-00062', 'Hembra'),
(44, '22345678C', 'Max', '1932-05-13', 'Cocker Spaniel', 13.200, 39, 'Amigable y activo', '001-0001-00063', 'Macho'),
(45, '88888888A', 'Rocky', '2021-01-29', 'Chihuahua', 2.400, 20, 'Valiente y pequeño', '001-0001-00064', 'Macho'),
(46, '32345678H', 'Daisy', '2020-02-01', 'Labrador Retriever', 30.500, 60, 'Activo y amistoso', '001-0001-00065', 'Macho'),
(47, '32345678J', 'Sasha', '2015-12-28', 'Rottweiler', 44.500, 68, 'Excelente guardián', '001-0001-00066', 'Hembra'),
(48, '22345678A', 'Toby', '2023-02-01', 'Schnauzer', 7.900, 35, 'Obediente y vigilante', '001-0001-00067', 'Macho'),
(49, '32345678E', 'Buddy', '2021-12-11', 'Beagle', 15.100, 40, 'Activo y curioso', '001-0001-00068', 'Macho'),
(50, '99999999A', 'Zeus', '2020-12-16', 'Rottweiler', 44.500, 68, 'Excelente guardián', '001-0001-00069', 'Hembra'),
(51, '32345678A', 'Luna', '2016-12-22', 'Labrador Retriever', 30.500, 60, 'Activo y amistoso', '001-0001-00070', 'Macho'),
(52, '55555555A', 'Canela', '2018-12-31', 'Beagle', 15.100, 40, 'Activo y curioso', '001-0001-00071', 'Macho'),
(53, '22345678B', 'Luna', '1964-01-13', 'Bichon Maltes', 4.000, 24, 'Energético y cariñoso', '001-0001-00072', 'Macho'),
(55, '32345678G', 'Rocky', '2018-02-14', 'Boxer', 29.000, 60, 'Fuerte y protector', '001-0001-00074', 'Macho'),
(56, '10101010A', 'Lola', '2022-12-11', 'Chihuahua', 2.400, 20, 'Valiente y pequeño', '001-0001-00075', 'Hembra'),
(57, '32345678C', 'Sam', '2019-11-29', 'Pastor Alemán', 35.200, 65, 'Excelente guardián', '001-0001-00076', 'Macho'),
(58, '22345678D', 'Luna', '2018-11-17', 'Cocker Spaniel', 13.200, 39, 'Amigable y activo', '001-0001-00077', 'Hembra'),
(59, '32345678D', 'Bruno', '2024-01-25', 'Golden Retriever', 31.800, 58, 'Obediente y amigable', '001-0001-00078', 'Hembra'),
(60, '22345678E', 'Max', '2023-02-06', 'Beagle', 15.100, 40, 'Activo y curioso', '001-0001-00079', 'Macho'),
(61, '77777777A', 'Rocky', '2024-02-06', 'Chihuahua', 2.400, 20, 'Valiente y pequeño', '001-0001-00080', 'Macho'),
(62, NULL, 'Koldo', '2023-12-31', 'Raza mixta', 5.000, 35, 'Abandono', '001-0001-00081', 'Macho'),
(63, NULL, 'Reus', '2024-06-03', 'Galgo', 8.300, 45, 'Rescate', '001-0001-00082', 'Macho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perro_recibe_servicio`
--

CREATE TABLE `perro_recibe_servicio` (
  `Sr_Cod` int(11) NOT NULL,
  `Cod_Servicio` varchar(6) NOT NULL,
  `ID_Perro` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Incidencias` varchar(400) DEFAULT NULL,
  `Precio_Final` decimal(5,2) NOT NULL,
  `Dni` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perro_recibe_servicio`
--

INSERT INTO `perro_recibe_servicio` (`Sr_Cod`, `Cod_Servicio`, `ID_Perro`, `Fecha`, `Incidencias`, `Precio_Final`, `Dni`) VALUES
(1, 'SVBE03', 1, '2025-01-07', 'Sin incidencias', 9.99, '34567890C'),
(2, 'SVBE03', 2, '2025-01-07', 'Sin incidencias', 9.99, '34567890C'),
(3, 'SVBE03', 3, '2025-01-08', 'Sin incidencias', 9.99, '34567890C'),
(4, 'SVBE03', 4, '2025-01-08', 'No se realiza el servicio porque trae un cristal incrustado en la pezuña.', 0.00, '34567890C'),
(5, 'SVBE03', 5, '2025-01-09', 'Ayuda personal auxiliar. Perro muy inquieto', 15.00, '34567890C'),
(6, 'SVBE03', 6, '2025-01-09', 'Sin incidencias', 9.99, '34567890C'),
(7, 'SVBE03', 7, '2025-01-10', 'Ayuda personal auxiliar: el perro está muy nervioso', 15.00, '34567890C'),
(8, 'SVBE03', 9, '2025-01-10', 'Sin incidencias', 9.99, '34567890C'),
(9, 'SVBE03', 10, '2025-01-10', 'Ayuda personal auxiliar: el perro está asustado', 15.00, '34567890C'),
(10, 'SVBE04', 20, '2025-01-11', 'Sin incidencias', 10.99, '34567890C'),
(11, 'SVBE03', 21, '2025-01-11', 'Sin incidencias', 9.99, '34567890C'),
(12, 'SVBE03', 22, '2025-01-12', 'Sin incidencias', 9.99, '34567890C'),
(13, 'SVBE03', 23, '2025-01-12', 'El perro viene agresivo, no se le puede practicar el servicio', 0.00, '34567890C'),
(14, 'SVBE03', 24, '2025-01-14', 'Sin incidencias', 9.99, '34567890C'),
(15, 'SVBE04', 25, '2025-02-13', 'Ayuda P. Auxiliar: perro asustado', 15.00, '23456789B'),
(16, 'SVBE04', 26, '2025-01-14', 'Sin incidencias', 10.99, '23456789B'),
(17, 'SVBE04', 30, '2025-01-16', 'Sin incidencias', 10.99, '23456789B'),
(18, 'SVBE03', 35, '2025-01-17', 'Ayuda personal auxiliar: perro nervioso', 15.00, '23456789B'),
(19, 'SVBE03', 36, '2025-01-17', 'Sin incidencias', 9.99, '23456789B'),
(20, 'SVBE03', 37, '2025-01-18', 'Sin incidencias', 9.99, '23456789B'),
(21, 'SVBE04', 38, '2025-01-25', 'Sin incidencias', 10.99, '23456789B'),
(22, 'SVBE03', 39, '2025-01-26', 'Sin incidencias', 9.99, '23456789B'),
(23, 'SVBE03', 40, '2025-01-26', 'Sin incidencias', 9.99, '23456789B'),
(24, 'SVBE03', 47, '2025-01-27', 'Sin incidencias', 9.99, '23456789B'),
(25, 'SVBE03', 48, '2025-01-27', 'Sin incidencias', 9.99, '23456789B'),
(26, 'SVBE03', 49, '2025-01-27', 'Sin incidencias', 9.99, '34567890C'),
(27, 'SVBE03', 60, '2025-01-28', 'Sin incidencias', 9.99, '34567890C'),
(28, 'SVBE03', 61, '2025-01-28', 'Sin incidencias', 9.99, '34567890C'),
(29, 'SVBE03', 25, '2025-01-10', 'Sin incidencias', 9.99, '34567890C'),
(30, 'SVBE03', 26, '2025-02-13', 'Sin incidencias', 9.99, '34567890C'),
(31, 'SVBE04', 23, '2025-02-13', 'Sin incidencias, el perro está tranquilo', 10.99, '23456789B'),
(32, 'SVBE03', 28, '2025-01-30', 'Ayuda personal auxiliar, el perro está muy nervioso', 15.00, '34567890C'),
(33, 'SVBE03', 29, '2025-01-31', 'Sin incidencias', 9.99, '34567890C'),
(34, 'SVBE03', 30, '2025-02-03', 'Sin incidencias', 9.99, '34567890C'),
(35, 'SVBE03', 32, '2025-02-04', 'Sin incidencias', 9.99, '34567890C'),
(36, 'SVBE03', 33, '2025-02-05', 'Sin incidencias', 9.99, '34567890C'),
(37, 'SVBE03', 34, '2025-02-07', 'Sin incidencias', 9.99, '34567890C'),
(38, 'SVBE04', 35, '2025-02-13', 'Sin incidencias', 10.99, '34567890C'),
(39, 'SVBE03', 36, '2025-02-08', 'Sin incidencias', 9.99, '34567890C'),
(40, 'SVBE04', 37, '2025-02-08', 'Sin incidencias', 10.99, '23456789B'),
(41, 'SVBE03', 38, '2025-02-09', 'Sin incidencias', 9.99, '34567890C'),
(42, 'SVBE03', 39, '2025-02-10', 'El perro es muy asustadizo, entra el dueño', 9.99, '34567890C'),
(43, 'SVBE03', 40, '2025-02-11', 'Sin incidencias', 9.99, '34567890C'),
(44, 'SVBE03', 41, '2025-02-11', 'Sin incidencias', 9.99, '34567890C'),
(45, 'SVBE03', 42, '2025-02-12', 'Sin incidencias', 9.99, '34567890C'),
(46, 'SVBE03', 43, '2025-02-13', 'Sin incidencias', 9.99, '34567890C'),
(47, 'SVBE03', 44, '2025-02-13', 'Sin incidencias', 9.99, '34567890C'),
(48, 'SVBE03', 45, '2025-02-13', 'Ayuda personal auxiliar: el perro sufre una crisis.', 15.00, '34567890C'),
(49, 'SVBE03', 46, '2025-02-13', 'Sin incidencias', 9.99, '34567890C'),
(50, 'SVBE04', 47, '2025-02-09', 'Sin incidencias', 10.99, '34567890C'),
(51, 'SVBE04', 48, '2025-02-09', 'Sin incidencias', 10.99, '23456789B'),
(52, 'SVBE04', 49, '2025-02-10', 'Dueño pone reclamación: sangrado de uña al cortar. Se niega a abonar el servicio', 0.00, '34567890C'),
(53, 'SVBE03', 50, '2025-02-10', 'Sin incidencias', 9.99, '34567890C'),
(54, 'SVBE03', 52, '2025-02-11', 'Sin incidencias', 9.99, '34567890C'),
(55, 'SVBE03', 53, '2025-02-11', 'Sin incidencias', 9.99, '34567890C'),
(57, 'SVBE03', 55, '2025-02-13', 'Sin incidencias', 9.99, '34567890C'),
(58, 'SVBE03', 56, '2025-02-11', 'Sin incidencias', 9.99, '34567890C'),
(59, 'SVBE03', 57, '2025-02-05', 'Sin incidencias', 9.99, '34567890C'),
(60, 'SVBE03', 58, '2025-02-06', 'Sin incidencias', 9.99, '34567890C'),
(61, 'SVBE03', 59, '2025-02-06', 'Sin incidencias', 9.99, '34567890C'),
(62, 'SVBE04', 60, '2025-02-07', 'Sin incidencias', 10.99, '23456789B'),
(63, 'SVBE04', 61, '2025-02-12', 'Sin incidencias', 10.99, '34567890C'),
(64, 'SVNUT1', 1, '2025-01-07', 'Sin incidencias', 30.00, '45678901A'),
(65, 'SVNUT1', 10, '2025-01-07', 'Sin incidencias', 30.00, '45678901A'),
(66, 'SVNUT1', 15, '2025-01-14', 'Sin incidencias', 30.00, '45678901A'),
(67, 'SVNUT1', 20, '2025-01-14', 'Sin incidencias', 30.00, '89012345C'),
(68, 'SVNUT1', 25, '2025-01-30', 'Sin incidencias', 30.00, '89012345C'),
(69, 'SVNUT1', 40, '2025-02-06', 'Sin incidencias', 30.00, '89012345C'),
(70, 'SVNUT1', 45, '2025-02-06', 'Sin incidencias', 30.00, '89012345C'),
(71, 'SVNUT1', 50, '2025-02-06', 'Sin incidencias', 30.00, '89012345C'),
(72, 'SVNUT2', 25, '2025-02-14', 'Sin incidencias', 30.00, '89012345C'),
(73, 'SVBE09', 13, '2025-02-05', 'Se le practica mechas con dos colores', 67.00, '23456789B'),
(74, 'SVBE09', 17, '2025-01-21', 'Con extensiones', 70.00, '23456789B'),
(75, 'SVBE09', 31, '2025-02-09', 'Ayuda personal auxiliar. Demasiado pelo.', 70.00, '23456789B'),
(76, 'SVBE09', 42, '2025-02-13', 'Sin incidencias', 40.99, '23456789B'),
(77, 'SVBE09', 58, '2025-02-07', 'Sin incidencias', 40.99, '23456789B'),
(78, 'SVBE09', 15, '2025-01-29', 'El perro sufre una reacción alérgica. Se llama al veterinario', 0.00, '23456789B'),
(79, 'SVBE09', 61, '2025-02-06', 'Sin incidencias', 40.99, '23456789B'),
(80, 'SVBE10', 17, '2025-02-05', 'El perro se queda 1 hora más', 89.00, '67890123B'),
(81, 'SVBE10', 21, '2025-01-21', 'Sin incidencias', 75.99, '67890123B'),
(82, 'SVBE10', 36, '2025-02-09', 'Sin incidencias', 75.99, '67890123B'),
(83, 'SVBE10', 46, '2025-02-13', 'Sin incidencias', 75.99, '67890123B'),
(84, 'SVBE10', 2, '2025-02-07', 'Se necesita la ayuda del auxiliar', 99.00, '67890123B'),
(85, 'SVBE10', 19, '2025-01-29', 'Dolor abdominal. No se realiza el servicio', 0.00, '67890123B'),
(86, 'SVBE10', 4, '2025-02-06', 'Sin incidencias', 75.99, '67890123B'),
(87, 'SVBE08', 22, '2025-02-05', 'El perro se queda 1 hora más', 57.00, '67890123B'),
(88, 'SVBE08', 26, '2025-01-21', 'Ayuda personal auxiliar', 55.00, '67890123B'),
(89, 'SVBE08', 40, '2025-02-09', 'Sin incidencias', 45.99, '67890123B'),
(90, 'SVBE08', 51, '2025-02-13', 'Sin incidencias', 45.99, '67890123B'),
(91, 'SVBE08', 7, '2025-01-31', 'Ayuda personal auxiliar. El perro tiene una crisis.', 45.99, '67890123B'),
(104, 'SVNUT2', 1, '2025-01-21', 'Sin incidencias', 30.00, '45678901A'),
(105, 'SVNUT2', 1, '2025-02-05', 'Sin incidencias', 30.00, '45678901A'),
(106, 'SVNUT2', 10, '2025-01-21', 'Sin incidencias', 30.00, '45678901A'),
(107, 'SVNUT2', 10, '2025-02-05', 'Sin incidencias', 30.00, '45678901A'),
(108, 'SVNUT2', 15, '2025-01-29', 'Sin incidencias', 30.00, '45678901A'),
(109, 'SVNUT2', 15, '2025-02-06', 'Sin incidencias', 30.00, '45678901A'),
(110, 'SVNUT2', 20, '2025-01-29', 'Sin incidencias', 30.00, '89012345C'),
(111, 'SVNUT2', 20, '2025-02-06', 'Sin incidencias', 30.00, '89012345C'),
(129, 'SVBE05', 3, '2025-02-10', 'Incremento de un 30% por ser de raza grande', 60.00, '67890123B'),
(130, 'SVBE05', 4, '2025-02-09', 'Incremento de un 30% por ser de raza grande', 60.00, '78901234C'),
(131, 'SVBE05', 7, '2025-02-09', 'Incremento de un 30% por ser de raza grande', 60.00, '67890123B'),
(132, 'SVBE05', 10, '2025-02-06', 'Incremento de un 30% por ser de raza grande', 60.00, '78901234C'),
(133, 'SVBE05', 16, '2025-02-06', 'Incremento de un 30% por ser de raza grande', 60.00, '67890123B'),
(134, 'SVBE05', 18, '2025-02-06', 'Incremento de un 30% por ser de raza grande', 60.00, '78901234C'),
(135, 'SVBE05', 20, '2025-01-30', 'Incremento de un 30% por ser de raza grande', 60.00, '67890123B'),
(136, 'SVBE05', 21, '2025-01-30', 'Incremento de un 30% por ser de raza grande', 60.00, '78901234C'),
(137, 'SVBE05', 22, '2025-01-30', 'Incremento de un 30% por ser de raza grande', 60.00, '67890123B'),
(138, 'SVBE05', 46, '2025-01-25', 'Incremento de un 30% por ser de raza grande', 60.00, '78901234C'),
(139, 'SVBE05', 47, '2025-01-25', 'Incremento de un 30% por ser de raza grande', 60.00, '67890123B'),
(140, 'SVBE05', 51, '2025-01-25', 'Incremento de un 30% por ser de raza grande', 60.00, '78901234C'),
(141, 'SVBE05', 55, '2025-01-25', 'Incremento de un 30% por ser de raza grande', 60.00, '67890123B'),
(142, 'SVBE05', 57, '2025-01-24', 'Incremento de un 30% por ser de raza grande', 60.00, '78901234C'),
(143, 'SVBE05', 59, '2025-01-15', 'Incremento de un 30% por ser de raza grande', 60.00, '67890123B'),
(148, 'SVBE05', 5, '2025-02-11', 'Se incrementa el precio en un 20% por ser perro de raza media', 55.20, '78901234C'),
(149, 'SVBE05', 31, '2025-02-04', 'Se incrementa el precio en un 20% por ser de raza media', 55.20, '67890123B'),
(150, 'SVBE05', 32, '2025-02-03', 'Se incrementa el precio en un 20% por ser de raza media', 55.20, '78901234C'),
(151, 'SVBE05', 33, '2025-02-02', 'Se incrementa el precio en un 20% por ser de raza media', 55.20, '67890123B'),
(152, 'SVBE05', 34, '2025-02-02', 'Se incrementa el precio en un 20% por ser de raza media', 55.20, '78901234C'),
(153, 'SVBE01', 27, '2025-01-10', 'Sin incidencias', 25.99, '34567890C'),
(154, 'SVBE01', 28, '2025-01-11', 'Sin incidencias', 25.99, '23456789B'),
(155, 'SVBE01', 29, '2025-01-12', 'Sin incidencias', 25.99, '34567890C'),
(156, 'SVBE01', 30, '2025-01-12', 'Sin incidencias', 25.99, '23456789B'),
(158, 'SVBE02', 27, '2025-01-10', 'Precio especial pack baño+secado+corte', 15.99, '23456789B'),
(159, 'SVBE02', 28, '2025-01-11', 'Precio especial pack baño+secado+corte', 15.99, '23456789B'),
(160, 'SVBE02', 29, '2025-01-12', 'Precio especial pack baño+secado+corte', 15.99, '23456789B'),
(161, 'SVBE02', 30, '2025-01-12', 'Precio especial pack baño+secado+corte', 15.99, '23456789B'),
(165, 'SVNUT1', 10, '2025-01-07', 'Sin incidencias', 30.00, '45678901A'),
(166, 'SVNUT1', 15, '2025-01-14', 'Sin incidencias', 30.00, '45678901A'),
(167, 'SVNUT1', 20, '2025-01-14', 'Sin incidencias', 30.00, '89012345C'),
(168, 'SVNUT1', 25, '2025-01-30', 'Sin incidencias', 30.00, '89012345C'),
(169, 'SVNUT1', 40, '2025-02-06', 'Sin incidencias', 30.00, '89012345C'),
(170, 'SVNUT1', 45, '2025-02-06', 'Sin incidencias', 30.00, '89012345C'),
(171, 'SVNUT1', 50, '2025-02-06', 'Sin incidencias', 30.00, '89012345C'),
(180, 'SVBE01', 1, '2025-02-11', 'Sin incidencias', 25.99, '23456789B'),
(181, 'SVBE01', 4, '2025-02-09', 'Sin incidencias', 25.99, '23456789B'),
(182, 'SVBE01', 10, '2025-02-08', 'Sin incidencias', 25.99, '34567890C'),
(183, 'SVBE01', 14, '2025-02-08', 'Sin incidencias', 25.99, '23456789B'),
(184, 'SVBE01', 16, '2025-02-08', 'Sin incidencias', 25.99, '34567890C'),
(185, 'SVBE01', 18, '2025-02-08', 'Sin incidencias', 25.99, '23456789B'),
(198, 'SVBE01', 3, '2025-02-09', 'Sin incidencias', 25.99, '34567890C'),
(207, 'SVBE01', 62, '2025-01-28', 'Ong Patitas', 0.00, '34567890C'),
(208, 'SVBE02', 62, '2025-01-28', 'Ong Patitas', 0.00, '23456789B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `Codigo` varchar(6) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Precio` decimal(5,2) NOT NULL,
  `Descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`Codigo`, `Nombre`, `Precio`, `Descripcion`) VALUES
('SVBE01', 'Baño y secado', 25.99, 'Baño completo con champú y secado adecuado.'),
('SVBE02', 'Corte de Pelo', 35.99, 'Corte de pelo según el estilo deseado o las necesidades de la raza. Incluye baño.'),
('SVBE03', 'Corte de Uñas', 9.99, 'Corte de uñas para mantenerlas en una longitud segura y cómoda.'),
('SVBE04', 'Limpieza de Oídos', 10.99, 'Limpieza suave y cuidadosa de los oídos para eliminar el exceso de cera.'),
('SVBE05', 'Limpieza Dental', 45.99, 'Limpieza dental para eliminar la acumulación de placa y sarro.'),
('SVBE06', 'Desenredado', 20.99, 'Eliminación de nudos y cepillado del pelo para mantenerlo suave y saludable. Incluye baño en seco'),
('SVBE07', 'Tratamiento Spa Premium', 55.99, 'Baño turco, aromaterapia y masaje'),
('SVBE08', 'Tratamiento Spa Basic', 45.99, 'Baño turco y masaje'),
('SVBE09', 'Tintes', 40.99, 'Servicio de teñido de pelo utilizando tintes seguros para animales.'),
('SVBE10', 'Spa Terapeutico', 75.99, 'Baño turco y masaje'),
('SVNUT1', 'Consulta inicial Nutricion', 30.00, 'Toma de datos, diagnóstico inicial y régimen personalizado.'),
('SVNUT2', 'Consulta de mantenimiento', 20.00, 'Toma de medidas, evaluación y cambio de dieta.');

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
  ADD PRIMARY KEY (`Dni`);

--
-- Indices de la tabla `perros`
--
ALTER TABLE `perros`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Numero_Chip` (`Numero_Chip`),
  ADD KEY `Dni_duenio` (`Dni_Cliente`);

--
-- Indices de la tabla `perro_recibe_servicio`
--
ALTER TABLE `perro_recibe_servicio`
  ADD PRIMARY KEY (`Sr_Cod`),
  ADD KEY `Dni` (`Dni`),
  ADD KEY `Cod_Servicio` (`Cod_Servicio`),
  ADD KEY `ID_Perro` (`ID_Perro`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`Codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perros`
--
ALTER TABLE `perros`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `perro_recibe_servicio`
--
ALTER TABLE `perro_recibe_servicio`
  MODIFY `Sr_Cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `perros`
--
ALTER TABLE `perros`
  ADD CONSTRAINT `perros_ibfk_1` FOREIGN KEY (`Dni_Cliente`) REFERENCES `clientes` (`Dni`) ON DELETE CASCADE;

--
-- Filtros para la tabla `perro_recibe_servicio`
--
ALTER TABLE `perro_recibe_servicio`
  ADD CONSTRAINT `perro_recibe_servicio_ibfk_1` FOREIGN KEY (`Dni`) REFERENCES `empleados` (`Dni`) ON DELETE CASCADE,
  ADD CONSTRAINT `perro_recibe_servicio_ibfk_2` FOREIGN KEY (`Cod_Servicio`) REFERENCES `servicios` (`Codigo`) ON DELETE CASCADE,
  ADD CONSTRAINT `perro_recibe_servicio_ibfk_3` FOREIGN KEY (`ID_Perro`) REFERENCES `perros` (`Id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
