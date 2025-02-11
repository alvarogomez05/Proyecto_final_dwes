 


DROP TABLE PERRO_RECIBE_SER CASCADE CONSTRAINTS;--


DROP TABLE EMPLEADOS CASCADE CONSTRAINTS;--
DROP TABLE PERROS CASCADE CONSTRAINTS;--
DROP TABLE SERVICIOS CASCADE CONSTRAINTS;--
DROP TABLE CLIENTES CASCADE CONSTRAINTS;--

-- Crear tabla de CLIENTES
CREATE TABLE CLIENTES (
    Dni VARCHAR2(9),
    Nombre VARCHAR2(15) NOT NULL,
    Apellido1 VARCHAR2(15) NOT NULL,
    Apellido2 VARCHAR2(15) NOT NULL, 
    Direccion VARCHAR2(200),
    Tlfno VARCHAR2(9), 
    CONSTRAINT cli_dni_PK PRIMARY KEY(Dni)
);
-- Insertar 20 registros en la tabla CLIENTES
INSERT INTO CLIENTES VALUES ('12345678A', 'Carlos', 'García', 'López', 'Calle Mayor$10$45600$Talavera de la Reina$Toledo', '600000001');
INSERT INTO CLIENTES VALUES ('12345678B', 'María', 'Martínez', 'Fernández', 'Avenida de la Constitución$20$45600$Talavera de la Reina$Toledo', '600000002');
INSERT INTO CLIENTES VALUES ('12345678C', 'Juan', 'Rodríguez', 'Gómez', 'Calle San Juan$15$45600$Talavera de la Reina$Toledo', '600000003');
INSERT INTO CLIENTES VALUES ('12345678D', 'Ana', 'González', 'Ruiz', 'Plaza del Reloj$5$45600$Talavera de la Reina$Toledo', '600000004');
INSERT INTO CLIENTES VALUES ('12345678E', 'Pedro', 'Hernández', 'Díaz', 'Calle del Sol$25$45600$Talavera de la Reina$Toledo', '600000005');
INSERT INTO CLIENTES VALUES ('12345678F', 'Laura', 'Jiménez', 'Moreno', 'Avenida de los Reyes Católicos$12$45600$Talavera de la Reina$Toledo', '600000006');

-- Insertar 10 registros adicionales en la tabla CLIENTES con direcciones de pueblos de Toledo
INSERT INTO CLIENTES VALUES ('32345678A', 'Raúl', 'Fernández', 'Pérez', 'Calle del Castillo$1$45560$Oropesa$Toledo', '600000026');
INSERT INTO CLIENTES VALUES ('32345678B', 'Sofía', 'Moreno', 'García', 'Calle Mayor$5$45560$Oropesa$Toledo', '600000027');
INSERT INTO CLIENTES VALUES ('32345678C', 'Ignacio', 'Serrano', 'Hernández', 'Plaza de la Villa$3$45560$Oropesa$Toledo', '600000028');
INSERT INTO CLIENTES VALUES ('32345678D', 'Julia', 'Blanco', 'López', 'Calle Real$10$45560$Oropesa$Toledo', '600000029');
INSERT INTO CLIENTES VALUES ('32345678E', 'Miguel', 'Núñez', 'Martín', 'Calle Iglesia$7$45560$Oropesa$Toledo', '600000030');

INSERT INTO CLIENTES VALUES ('32345678F', 'César', 'Rojas', 'Mendoza', 'Calle San Miguel$2$45567$Lagartera$Toledo', '600000031');
INSERT INTO CLIENTES VALUES ('32345678G', 'Paula', 'Cruz', 'Torres', 'Calle del Sol$6$45567$Lagartera$Toledo', '600000032');

INSERT INTO CLIENTES VALUES ('32345678H', 'Héctor', 'Medina', 'Ruiz', 'Avenida de la Constitución$4$45672$Ventas de San Julián$Toledo', '600000033');
INSERT INTO CLIENTES VALUES ('32345678I', 'Aitana', 'Vega', 'Romero', 'Calle Nueva$11$45672$Ventas de San Julián$Toledo', '600000034');

INSERT INTO CLIENTES VALUES ('32345678J', 'Rubén', 'González', 'Díaz', 'Calle Ancha$9$45634$Calzada de Oropesa$Toledo', '600000035');

INSERT INTO CLIENTES VALUES ('12345678G', 'Luis', 'Sánchez', 'Pérez', 'Calle Nueva$30$45600$Talavera de la Reina$Toledo', '600000007');
INSERT INTO CLIENTES VALUES ('12345678H', 'Carmen', 'Torres', 'Ramírez', 'Calle Real$8$45600$Talavera de la Reina$Toledo', '600000008');
INSERT INTO CLIENTES VALUES ('12345678I', 'Miguel', 'Vázquez', 'Álvarez', 'Avenida de la Libertad$35$45600$Talavera de la Reina$Toledo', '600000009');
INSERT INTO CLIENTES VALUES ('12345678J', 'Sara', 'Romero', 'García', 'Calle Jardines$17$45600$Talavera de la Reina$Toledo', '600000010');
INSERT INTO CLIENTES VALUES ('12345678K', 'David', 'Molina', 'Ortiz', 'Calle Olmo$2$45600$Talavera de la Reina$Toledo', '600000011');
INSERT INTO CLIENTES VALUES ('12345678L', 'Elena', 'Domínguez', 'Núñez', 'Plaza Mayor$1$45600$Talavera de la Reina$Toledo', '600000012');
INSERT INTO CLIENTES VALUES ('12345678M', 'Fernando', 'Santos', 'Gutiérrez', 'Avenida de la Paz$40$45600$Talavera de la Reina$Toledo', '600000013');
INSERT INTO CLIENTES VALUES ('12345678N', 'Isabel', 'Ramos', 'Méndez', 'Calle Gran Vía$22$45600$Talavera de la Reina$Toledo', '600000014');
INSERT INTO CLIENTES VALUES ('12345678O', 'Javier', 'Navarro', 'Cano', 'Calle del Río$14$45600$Talavera de la Reina$Toledo', '600000015');
INSERT INTO CLIENTES VALUES ('12345678P', 'Patricia', 'Ortega', 'Serrano', 'Calle Luna$27$45600$Talavera de la Reina$Toledo', '600000016');
INSERT INTO CLIENTES VALUES ('12345678Q', 'Alberto', 'Rubio', 'Blanco', 'Avenida del Prado$19$45600$Talavera de la Reina$Toledo', '600000017');
INSERT INTO CLIENTES VALUES ('12345678R', 'Raquel', 'Gil', 'Martín', 'Calle Verde$13$45600$Talavera de la Reina$Toledo', '600000018');
INSERT INTO CLIENTES VALUES ('12345678S', 'Andrés', 'Castro', 'Ruiz', 'Plaza Nueva$7$45600$Talavera de la Reina$Toledo', '600000019');
INSERT INTO CLIENTES VALUES ('12345678T', 'Marta', 'Vega', 'Cabrera', 'Calle Azul$9$45600$Talavera de la Reina$Toledo', '600000020');
INSERT INTO CLIENTES VALUES ('22345678A', 'Roberto', 'Martínez', 'Alonso', 'Calle de la Constitución$12$45510$Fuensalida$Toledo', '600000021');
INSERT INTO CLIENTES VALUES ('22345678B', 'Alicia', 'Gómez', 'Fernández', 'Calle de la Iglesia$5$45510$Fuensalida$Toledo', '600000022');
INSERT INTO CLIENTES VALUES ('22345678C', 'Manuel', 'López', 'García', 'Calle Real$8$45510$Fuensalida$Toledo', '600000023');
INSERT INTO CLIENTES VALUES ('22345678D', 'Laura', 'Pérez', 'Sánchez', 'Calle San Juan$3$45510$Fuensalida$Toledo', '600000024');
INSERT INTO CLIENTES VALUES ('22345678E', 'José', 'Rodríguez', 'Hernández', 'Avenida de la Paz$10$45510$Fuensalida$Toledo', '600000025');
INSERT INTO CLIENTES VALUES ('11111111A', 'Manuel', 'García', 'González', 'Calle Mayor$23$10300$Navalmoral de la Mata$Cáceres', '123456789');
INSERT INTO CLIENTES VALUES ('22222222B', 'María', 'López', 'Fernández', 'Avenida de Extremadura$15$10300$Navalmoral de la Mata$Cáceres', '234567890');
INSERT INTO CLIENTES VALUES ('33333333C', 'Antonio', 'Martínez', 'Rodríguez', 'Calle Cervantes$7$10300$Navalmoral de la Mata$Cáceres', '345678901');
INSERT INTO CLIENTES VALUES ('44444444D', 'Ana', 'Sánchez', 'Pérez', 'Calle San Roque$42$10300$Navalmoral de la Mata$Cáceres', '456789012');
INSERT INTO CLIENTES VALUES ('55555555A', 'Javier', 'Gómez', 'Martín', 'Calle Zurbarán$10$10300$Navalmoral de la Mata$Cáceres', '567890123');
INSERT INTO CLIENTES VALUES ('66666666A', 'Laura', 'Fernández', 'García', 'Plaza de España$5$10300$Navalmoral de la Mata$Cáceres', '678901234');
INSERT INTO CLIENTES VALUES ('77777777A', 'Carlos', 'Díaz', 'Ruiz', 'Calle del Convento$31$10300$Navalmoral de la Mata$Cáceres', '789012345');
INSERT INTO CLIENTES VALUES ('88888888A', 'Sara', 'Muñoz', 'Dominguez', 'Calle de la Cruz$8$10300$Navalmoral de la Mata$Cáceres', '890123456');
INSERT INTO CLIENTES VALUES ('99999999A', 'Pedro', 'Vázquez', 'Hernández', 'Avenida de la Constitución$14$10300$Navalmoral de la Mata$Cáceres', '901234567');
INSERT INTO CLIENTES VALUES ('10101010A', 'Carmen', 'Gutiérrez', 'Iglesias', 'Calle de la Merced$3$10300$Navalmoral de la Mata$Cáceres', '012345678');




-- Crear tabla de PERROS con Numero_Chip
-- Crear tabla de PERROS con Numero_Chip
CREATE TABLE PERROS (
    ID_Perro NUMBER PRIMARY KEY,
    Dni_duenio VARCHAR2(9),
    Nombre VARCHAR2(20) NOT NULL,
    Fecha_Nto DATE, 
    Raza VARCHAR2(40) NOT NULL,
    Peso NUMBER(5,3), 
    Altura NUMBER(3), 
    Observaciones VARCHAR2(200),
    Numero_Chip VARCHAR2(15) NOT NULL UNIQUE,
    Sexo VARCHAR2(6) CHECK (Sexo IN ('Macho', 'Hembra')), -- Nuevo campo Sexo
    CONSTRAINT per_dni_FK FOREIGN KEY (Dni_duenio) REFERENCES CLIENTES(Dni)
);





-- INSERCIONES EN PERROS. 
-- Insertar un perro para cada cliente
-- Inserciones con la fecha de nacimiento basada en SYSDATE
INSERT INTO PERROS VALUES (1, '12345678A', 'Rex', SYSDATE - 365*2- INTERVAL '6' MONTH, 'Labrador Retriever', 30.5, 60, 'Activo y juguetón', '001-0001-00001', 'Macho');
INSERT INTO PERROS VALUES (2, '12345678B', 'Bella', SYSDATE - 365*3- INTERVAL '4' MONTH, 'Bulldog Francés', 12.7, 30, 'Juguetona y cariñosa', '001-0001-00002', 'Hembra');
INSERT INTO PERROS VALUES (3, '12345678C', 'Max', SYSDATE - 365*1- INTERVAL '2' MONTH, 'Pastor Alemán', 35.2, 65, 'Excelente guardián', '001-0001-00003', 'Macho');
INSERT INTO PERROS VALUES (4, '12345678D', 'Luna', SYSDATE - 182, 'Golden Retriever', 31.8, 58,'Es un perro muy aprensivo', '001-0001-00004', 'Hembra');
INSERT INTO PERROS VALUES (5, '12345678E', 'Charlie', SYSDATE - 365*5- INTERVAL '5' MONTH, 'Beagle', 15.1, 40, 'Activo y curioso', '001-0001-00005', 'Macho');
INSERT INTO PERROS VALUES (6, '12345678F', 'Daisy', SYSDATE - 365*1- INTERVAL '1' MONTH, 'Yorkshire Terrier', 3.4, 20, 'Valiente y enérgica', '001-0001-00006', 'Hembra');
INSERT INTO PERROS VALUES (7, '12345678G', 'Rocky', SYSDATE - 365*2- INTERVAL '3' MONTH, 'Boxer', 29.0, 60, 'Fuerte y protector', '001-0001-00007', 'Macho');
INSERT INTO PERROS VALUES (8, '12345678H', 'Sadie', SYSDATE - 365*13- INTERVAL '7' MONTH, 'Caniche', 4.6, 25, 'Juguetona y cariñosa', '001-0001-00008', 'Hembra');
INSERT INTO PERROS VALUES (9, '12345678I', 'Buster', SYSDATE - 365*4- INTERVAL '9' MONTH, 'Dachshund', 9.3, 22, 'Leal y curioso', '001-0001-00009', 'Macho');
INSERT INTO PERROS VALUES (10, '12345678J', 'Molly', SYSDATE - 365*16- INTERVAL '11' MONTH, 'Rottweiler', 44.5, 68, 'Excelente guardián', '001-0001-00010', 'Hembra');
INSERT INTO PERROS VALUES (11, '12345678K', 'Toby', SYSDATE - 365*2- INTERVAL '1' MONTH, 'Chihuahua', 2.4, 20, 'Valiente y pequeño', '001-0001-00011', 'Macho');
INSERT INTO PERROS VALUES (12, '12345678L', 'Bailey', SYSDATE - 365*3- INTERVAL '2' MONTH, 'Schnauzer', 7.9, 35, 'Obediente y vigilante', '001-0001-00012', 'Macho');
INSERT INTO PERROS VALUES (13, '12345678M', 'Coco', SYSDATE - 365*4- INTERVAL '4' MONTH, 'Cocker Spaniel', 13.2, 39, 'Amigable y activo', '001-0001-00013', 'Macho');
INSERT INTO PERROS VALUES (14, '12345678N', 'Jake', SYSDATE - 365*5- INTERVAL '51' DAY, 'Border Collie', 18.4, 53, 'Inteligente y trabajador', '001-0001-00014', 'Macho');
INSERT INTO PERROS VALUES (15, '12345678O', 'Lucy', SYSDATE - 365*6- INTERVAL '50' DAY, 'Shih Tzu', 6.2, 25, 'Adorable y dócil', '001-0001-00015', 'Hembra');
INSERT INTO PERROS VALUES (16, '12345678P', 'Rocky', SYSDATE - 365*11- INTERVAL '49' DAY, 'Labrador Retriever', 29.7, 60, 'Fuerte y activo', '001-0001-00016', 'Macho');
INSERT INTO PERROS VALUES (17, '12345678Q', 'Lola', SYSDATE - 365*3- INTERVAL '48' DAY, 'Bulldog Francés', 12.9, 30, 'Amistosa y curiosa', '001-0001-00017', 'Hembra');
INSERT INTO PERROS VALUES (18, '12345678R', 'Bruno', SYSDATE - 365*2- INTERVAL '47' DAY, 'Boxer', 28.5, 60, 'Protector y juguetón', '001-0001-00018', 'Macho');
INSERT INTO PERROS VALUES (19, '12345678S', 'Luna', SYSDATE - 365*4- INTERVAL '46' DAY, 'Golden Retriever', 32.1, 58, 'Obediente y cariñosa', '001-0001-00019', 'Hembra');
INSERT INTO PERROS VALUES (20, '12345678T', 'Simba', SYSDATE - 365*5- INTERVAL '45' DAY, 'Rottweiler', 45.8, 68, 'Fuerte y leal', '001-0001-00020', 'Macho');
INSERT INTO PERROS VALUES (21, '12345678G', 'Rocky Jr.', SYSDATE - 365*2- INTERVAL '44' DAY, 'Boxer', 27.8, 58, 'Energético y protector', '001-0001-00021', 'Macho');
INSERT INTO PERROS VALUES (22, '12345678G', 'Buddy', SYSDATE - 365*1- INTERVAL '43' DAY, 'Boxer', 26.5, 57, 'Amistoso y fiel', '001-0001-00022', 'Macho');
INSERT INTO PERROS VALUES (23, '11111111A', 'Lucky', SYSDATE - 365*13- INTERVAL '42' DAY, 'Chihuahua', 2.3, 18, 'Pequeño y cariñoso', '001-0001-00023', 'Macho');
INSERT INTO PERROS VALUES (24, '22222222B', 'Princess', SYSDATE - 365*2- INTERVAL '41' DAY, 'Chihuahua', 2.1, 17, 'Juguetona y alerta', '001-0001-00024', 'Hembra');
INSERT INTO PERROS VALUES (25, '33333333C', 'Coco', SYSDATE - 365*4- INTERVAL '40' DAY, 'Chihuahua', 2.5, 19, 'Amigable y enérgico', '001-0001-00025', 'Macho');
INSERT INTO PERROS VALUES (26, '44444444D', 'Buddy', SYSDATE - 365*1- INTERVAL '39' DAY, 'Chihuahua', 2.2, 18, 'Leal y valiente', '001-0001-00026', 'Macho');
INSERT INTO PERROS VALUES (27, '12345678A', 'Lucky', SYSDATE - 365*2- INTERVAL '38' DAY, 'Bichon Maltes', 4.0, 24, 'Energético y cariñoso', '001-0001-00027', 'Macho');
INSERT INTO PERROS VALUES (28, '12345678A', 'Daisy', SYSDATE - 365*1- INTERVAL '37' DAY, 'Bichon Maltes', 4.5, 25, 'Divertida y leal', '001-0001-00028', 'Hembra');
INSERT INTO PERROS VALUES (29, '12345678B', 'Coco', SYSDATE - 365*3- INTERVAL '36' DAY, 'Bichon Maltes', 3.6, 22, 'Juguetón y afectuoso', '001-0001-00029', 'Macho');
INSERT INTO PERROS VALUES (30, '12345678B', 'Luna', SYSDATE - 365*12- INTERVAL '35' DAY, 'Bichon Maltes', 4.0, 23, 'Juguetona y cariñosa', '001-0001-00030', 'Hembra');
INSERT INTO PERROS VALUES (31, '12345678C', 'Rocky', SYSDATE - 365*4- INTERVAL '34' DAY, 'Beagle', 15.6, 40, 'Leal y enérgico', '001-0001-00031', 'Macho');
INSERT INTO PERROS VALUES (32, '12345678C', 'Sophie', SYSDATE - 365*12- INTERVAL '33' DAY, 'Beagle', 14.9, 39, 'Cariñosa y juguetona', '001-0001-00032', 'Hembra');
INSERT INTO PERROS VALUES (33, '12345678D', 'Copper', SYSDATE - 365*3- INTERVAL '32' DAY, 'Beagle', 15.4, 40, 'Divertido y amigable', '001-0001-00033', 'Macho');
INSERT INTO PERROS VALUES (34, '12345678D', 'Zoe', SYSDATE - 365*2- INTERVAL '11' DAY, 'Beagle', 15.2, 39, 'Amigable y sociable', '001-0001-00034', 'Hembra');
INSERT INTO PERROS VALUES (35, '12345678E', 'Buster', SYSDATE - 365*3- INTERVAL '97' DAY, 'Beagle', 15.1, 39, 'Inteligente y curioso', '001-0001-00035', 'Macho');
INSERT INTO PERROS VALUES (36, '12345678E', 'Daisy', SYSDATE - 365*12- INTERVAL '9' DAY, 'Beagle', 15.5, 40, 'Leal y enérgica', '001-0001-00036', 'Hembra');
INSERT INTO PERROS VALUES (37, '12345678F', 'Max', SYSDATE - 365*4- INTERVAL '90' DAY, 'Beagle', 15.3, 40, 'Juguetón y amigable', '001-0001-00037', 'Macho');
INSERT INTO PERROS VALUES (38, '12345678F', 'Maggie', SYSDATE - 365*2- INTERVAL '63' DAY, 'Beagle', 15.0, 39, 'Cariñosa y sociable', '001-0001-00038', 'Hembra');
INSERT INTO PERROS VALUES (39, '12345678G', 'Cooper', SYSDATE - 365*13- INTERVAL '65' DAY, 'Beagle', 15.2, 39, 'Divertido y leal', '001-0001-00039', 'Macho');
INSERT INTO PERROS VALUES (40, '12345678G', 'Lucy', SYSDATE - 365*2- INTERVAL '25' DAY, 'Beagle', 15.4, 39, 'Juguetona y cariñosa', '001-0001-00040', 'Hembra');

INSERT INTO PERROS VALUES (41, '32345678I', 'Bruno', SYSDATE - 365*3- INTERVAL '99' DAY, 'Bulldog Francés', 12.7, 30, 'Juguetona y cariñosa', '001-0001-00060', 'Hembra');
INSERT INTO PERROS VALUES (42, '66666666A', 'Lucas', SYSDATE - 365*1- INTERVAL '90' DAY, 'Yorkshire Terrier', 3.4, 20, 'Valiente y enérgica', '001-0001-00061', 'Hembra');
INSERT INTO PERROS VALUES (43, '32345678B', 'Lola', SYSDATE - 365*2- INTERVAL '9' DAY, 'Bulldog Francés', 12.7, 30, 'Juguetona y cariñosa', '001-0001-00062', 'Hembra');
INSERT INTO PERROS VALUES (44, '22345678C', 'Max', SYSDATE - 365*3- INTERVAL '18' MONTH, 'Cocker Spaniel', 13.2, 39, 'Amigable y activo', '001-0001-00063', 'Macho');
INSERT INTO PERROS VALUES (45, '88888888A', 'Rocky', SYSDATE - 365*4- INTERVAL '16' DAY, 'Chihuahua', 2.4, 20, 'Valiente y pequeño', '001-0001-00064', 'Macho');
INSERT INTO PERROS VALUES (46, '32345678H', 'Daisy', SYSDATE - 365*5- INTERVAL '14' DAY, 'Labrador Retriever', 30.5, 60, 'Activo y amistoso', '001-0001-00065', 'Macho');
INSERT INTO PERROS VALUES (47, '32345678J', 'Sasha', SYSDATE - 365*9- INTERVAL '50' DAY, 'Rottweiler', 44.5, 68, 'Excelente guardián', '001-0001-00066', 'Hembra');
INSERT INTO PERROS VALUES (48, '22345678A', 'Toby', SYSDATE - 365*2- INTERVAL '13' DAY, 'Schnauzer', 7.9, 35, 'Obediente y vigilante', '001-0001-00067', 'Macho');
INSERT INTO PERROS VALUES (49, '32345678E', 'Buddy', SYSDATE - 365*3- INTERVAL '65' DAY, 'Beagle', 15.1, 40, 'Activo y curioso', '001-0001-00068', 'Macho');
INSERT INTO PERROS VALUES (50, '99999999A', 'Zeus', SYSDATE - 365*4- INTERVAL '60' DAY, 'Rottweiler', 44.5, 68, 'Excelente guardián', '001-0001-00069', 'Hembra');
INSERT INTO PERROS VALUES (51, '32345678A', 'Luna', SYSDATE - 365*8- INTERVAL '55' DAY, 'Labrador Retriever', 30.5, 60, 'Activo y amistoso', '001-0001-00070', 'Macho');
INSERT INTO PERROS VALUES (52, '55555555A', 'Canela', SYSDATE - 365*6 - INTERVAL '46' DAY, 'Beagle', 15.1, 40, 'Activo y curioso', '001-0001-00071', 'Macho');
INSERT INTO PERROS VALUES (53, '22345678B', 'Luna', SYSDATE - 365*2 - INTERVAL '3' MONTH, 'Bichon Maltes', 4.0, 24, 'Energético y cariñoso', '001-0001-00072', 'Macho');
INSERT INTO PERROS VALUES (54, '32345678F', 'Toby', (SYSDATE - 365*3) - INTERVAL '80' DAY, 'Yorkshire Terrier', 3.4, 20, 'Valiente y enérgica', '001-0001-00073', 'Hembra');
INSERT INTO PERROS VALUES (55, '32345678G', 'Rocky', SYSDATE - 365*7- INTERVAL '1' DAY, 'Boxer', 29.0, 60, 'Fuerte y protector', '001-0001-00074', 'Macho');
INSERT INTO PERROS VALUES (56, '10101010A', 'Lola', SYSDATE - 365*2- INTERVAL '65' DAY, 'Chihuahua', 2.4, 20, 'Valiente y pequeño', '001-0001-00075', 'Hembra');
INSERT INTO PERROS VALUES (57, '32345678C', 'Sam', SYSDATE - 365*5- INTERVAL '78' DAY, 'Pastor Alemán', 35.2, 65, 'Excelente guardián', '001-0001-00076', 'Macho');
INSERT INTO PERROS VALUES (58, '22345678D', 'Luna', SYSDATE - 365*6- INTERVAL '90' DAY, 'Cocker Spaniel', 13.2, 39, 'Amigable y activo', '001-0001-00077', 'Hembra');
INSERT INTO PERROS VALUES (59, '32345678D', 'Bruno', SYSDATE - 365*1- INTERVAL '20' DAY, 'Golden Retriever', 31.8, 58, 'Obediente y amigable', '001-0001-00078', 'Hembra');
INSERT INTO PERROS VALUES (60, '22345678E', 'Max', SYSDATE - 365*2 - INTERVAL '8' DAY, 'Beagle', 15.1, 40, 'Activo y curioso', '001-0001-00079', 'Macho');
INSERT INTO PERROS VALUES (61, '77777777A', 'Rocky', SYSDATE - 365 - INTERVAL '8' DAY, 'Chihuahua', 2.4, 20, 'Valiente y pequeño', '001-0001-00080', 'Macho');
INSERT INTO PERROS VALUES (62, NULL, 'Koldo', SYSDATE - 400 - INTERVAL '10' DAY, 'Raza mixta', 5.0, 35, 'Abandono', '001-0001-00081', 'Macho');

INSERT INTO PERROS VALUES (63, NULL, 'Reus', SYSDATE - 250 - INTERVAL '5' DAY, 'Galgo', 8.3, 45, 'Rescate', '001-0001-00082', 'Macho');


-- Crear tabla de SERVICIOS
CREATE TABLE SERVICIOS (
    codigo VARCHAR2(6) PRIMARY KEY,
    Nombre VARCHAR2(100) NOT NULL,
    Precio NUMBER(5,2) NOT NULL,
    Descripcion VARCHAR2(200)
);
INSERT INTO SERVICIOS VALUES ('SVBE01', 'Baño y secado', 25.99, 'Baño completo con champú y secado adecuado.');
INSERT INTO SERVICIOS VALUES ('SVBE02', 'Corte de Pelo', 35.99, 'Corte de pelo según el estilo deseado o las necesidades de la raza. Incluye baño. ');
INSERT INTO SERVICIOS VALUES ('SVBE03', 'Corte de Uñas', 9.99, 'Corte de uñas para mantenerlas en una longitud segura y cómoda.');
INSERT INTO SERVICIOS VALUES ('SVBE04', 'Limpieza de Oídos', 10.99, 'Limpieza suave y cuidadosa de los oídos para eliminar el exceso de cera.');
INSERT INTO SERVICIOS VALUES ('SVBE05', 'Limpieza Dental', 45.99, 'Limpieza dental para eliminar la acumulación de placa y sarro.');
INSERT INTO SERVICIOS VALUES ('SVBE06', 'Desenredado', 20.99, 'Eliminación de nudos y cepillado del pelo para mantenerlo suave y saludable. Incluye baño en seco');
INSERT INTO SERVICIOS VALUES ('SVBE07', 'Tratamiento Spa Premium', 55.99, 'Baño turco, aromaterapia y masaje');
INSERT INTO SERVICIOS VALUES ('SVBE08', 'Tratamiento Spa Basic', 45.99, 'Baño turco y masaje');
INSERT INTO SERVICIOS VALUES ('SVBE10', 'Spa Terapeutico', 75.99, 'Baño turco y masaje');
INSERT INTO SERVICIOS VALUES ('SVBE09', 'Tintes', 40.99, 'Servicio de teñido de pelo utilizando tintes seguros para animales.');
INSERT INTO SERVICIOS VALUES ('SVNUT1', 'Consulta inicial Nutricion', 30, 'Toma de datos, diagnósitico inicial y regimen personalizado.');
INSERT INTO SERVICIOS VALUES ('SVNUT2', 'Consulta de mantenimiento ', 20, 'Toma de medidas, evaluación y cambio de dieta.');



-- Crear tabla de EMPLEADOS
CREATE TABLE EMPLEADOS (
    Dni VARCHAR2(9) PRIMARY KEY,
    Nombre VARCHAR2(20) NOT NULL,
    Apellido1 VARCHAR2(15) NOT NULL,
    Apellido2 VARCHAR2(15) NOT NULL, 
    Calle VARCHAR2(30),
    Numero NUMBER,
    Cp VARCHAR2(5),
    Poblacion VARCHAR2(50),
    Provincia VARCHAR2(20),
    Tlfno VARCHAR2(9),
    profesion VARCHAR2(20) NOT NULL,
    especialidad VARCHAR(30) NOT NULL,
    Cod_representante VARCHAR(9),
    FOREIGN KEY (Cod_representante) REFERENCES EMPLEADOS(Dni)
);

INSERT INTO EMPLEADOS VALUES ('12345678A', 'Ana', 'Popescu', 'Dragomir', 'Calle San Francisco', 15, '45600', 'Talavera de la Reina', 'Toledo', '600112233', 'Auxiliar','Auxiliar Veteriaria', NULL);
INSERT INTO EMPLEADOS VALUES ('56789012A', 'Antonio', 'García', 'López', 'Calle Mayor', 20, '45600', 'Talavera de la Reina', 'Toledo', '600112233', 'Atención al cliente','Graduada Superior en Comercio', NULL);
-- NUTRICIONISTAS
INSERT INTO EMPLEADOS VALUES ('45678901A', 'Giulia', 'Rossi', 'Conti', 'Camino de Illescas', 15, '45200', 'Illescas', 'Toledo', '600445566', 'Nutricionista','Veterinaria general', '45678901A');
INSERT INTO EMPLEADOS VALUES ('89012345C', 'Carlota', 'Romero', 'Corinto', 'Calle del Camping', 20, '45683', 'Cazalegas', 'Toledo', '600445566', 'Nutricionista','Veterinaria general', '45678901A');
-- ESTILISTAS
INSERT INTO EMPLEADOS VALUES ('23456789B', 'María', 'García', 'López', 'Calle Mayor', 10, '45600', 'Talavera de la Reina', 'Toledo', '600223344', 'Estilista','Master Gromer', '23456789B');
INSERT INTO EMPLEADOS VALUES ('34567890C', 'Juan', 'Martínez', 'Fernández', 'Calle Real', 5, '45890', 'Cebolla', 'Toledo', '600334455', 'Estilista','Junior Gromer','23456789B');
INSERT INTO EMPLEADOS VALUES ('67890123B', 'María', 'Martínez', 'Fernández', 'Calle del Castillo', 10, '45560', 'Oropesa', 'Toledo', '600223344', 'Estilista', 'Masajista canino','23456789B');
INSERT INTO EMPLEADOS VALUES ('78901234C', 'Ana', 'González', 'Ruiz', 'Calle del Sol', 5, '45600', 'Talavera de la Reina', 'Toledo', '600334455', 'Estilista', 'Terapeuta canino','23456789B');

-- Crear tabla de REALIZAR
CREATE TABLE PERRO_RECIBE_SER (
    sr_cod NUMBER(6) PRIMARY KEY,
    cod_servicio VARCHAR(6) NOT NULL,
    ID_Perro NUMBER,
    Fecha DATE NOT NULL,
    Incidencias VARCHAR2(400),
    Precio_final NUMBER(5,2) NOT NULL,
    Dni VARCHAR2(9) NOT NULL,
    CONSTRAINT ser_dni_FK FOREIGN KEY(Dni) REFERENCES EMPLEADOS(Dni),
    CONSTRAINT ser_cod_FK FOREIGN KEY (cod_servicio) REFERENCES SERVICIOS(Codigo),
    CONSTRAINT ser_id_perro_FK FOREIGN KEY (ID_Perro) REFERENCES PERROS(ID_Perro)
);


INSERT INTO PERRO_RECIBE_SER VALUES (1,'SVBE03',1,SYSDATE - INTERVAL '38' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (2,'SVBE03',2,SYSDATE - INTERVAL '38' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (3,'SVBE03',3,SYSDATE - INTERVAL '37' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (4,'SVBE03',4,SYSDATE - INTERVAL '37' DAY,'No se realiza el servicio porque trae un cristal incrustado en la pezuña. ',0.00,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (5,'SVBE03',5,SYSDATE - INTERVAL '36' DAY,'Ayuda personal auxiliar. Perro muy inquieto',15,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (6,'SVBE03',6,SYSDATE - INTERVAL '36' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (7,'SVBE03',7,SYSDATE - INTERVAL '35' DAY,'Ayuda personal auxiliar: el perro está muy nervioso',15,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (8,'SVBE03',9,SYSDATE - INTERVAL '35' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (9,'SVBE03',10,SYSDATE - INTERVAL '35' DAY,'Ayuda personal auxiliar: el perro está asustado',15,'34567890C'); 

INSERT INTO PERRO_RECIBE_SER VALUES (10,'SVBE04',20,SYSDATE - INTERVAL '34' DAY,'Sin incidencias',10.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (11,'SVBE03',21,SYSDATE - INTERVAL '34' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (12,'SVBE03',22,SYSDATE - INTERVAL '33' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (13,'SVBE03',23,SYSDATE - INTERVAL '33' DAY,'El perro viene agresivo, no se le puede practicar el servicio',0.00,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (14,'SVBE03',24,SYSDATE - INTERVAL '31' DAY,'Sin incidencias',9.99,'34567890C'); 

INSERT INTO PERRO_RECIBE_SER VALUES (15,'SVBE04',25,SYSDATE - INTERVAL '1' DAY,'Ayuda P. Auxiliar: perro asustado',15,'23456789B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (16,'SVBE04',26,SYSDATE - INTERVAL '31' DAY,'Sin incidencias',10.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (17,'SVBE04',30,SYSDATE - INTERVAL '29' DAY,'Sin incidencias',10.99,'23456789B'); 

INSERT INTO PERRO_RECIBE_SER VALUES (18,'SVBE03',35,SYSDATE - INTERVAL '28' DAY,'Ayuda personal auxiliar: perro nervioso',15,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (19,'SVBE03',36,SYSDATE - INTERVAL '28' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (20,'SVBE03',37,SYSDATE - INTERVAL '27' DAY,'Sin incidencias',9.99,'34567890C'); 

INSERT INTO PERRO_RECIBE_SER VALUES (21,'SVBE04',38,SYSDATE - INTERVAL '20' DAY,'Sin incidencias',10.99,'34567890C'); 

INSERT INTO PERRO_RECIBE_SER VALUES (22,'SVBE03',39,SYSDATE - INTERVAL '19' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (23,'SVBE03',40,SYSDATE - INTERVAL '19' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (24,'SVBE03',47,SYSDATE - INTERVAL '18' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (25,'SVBE03',48,SYSDATE - INTERVAL '18' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (26,'SVBE03',49,SYSDATE - INTERVAL '18' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (27,'SVBE03',60,SYSDATE - INTERVAL '17' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (28,'SVBE03',61,SYSDATE - INTERVAL '17' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (29,'SVBE03',25,SYSDATE - INTERVAL '35' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (30,'SVBE03',26,SYSDATE - INTERVAL '1' DAY,'Sin incidencias',9.99,'34567890C'); 

INSERT INTO PERRO_RECIBE_SER VALUES (31,'SVBE04',23,SYSDATE - INTERVAL '1' DAY,'Sin incidencias, el perro está tranquilo',10.99,'23456789B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (32,'SVBE03',28,SYSDATE - INTERVAL '15' DAY,'Ayuda personal auxiliar, el perro está muy nervioso',15,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (33,'SVBE03',29,SYSDATE - INTERVAL '14' DAY,'Sin incidencias',9.99,'34567890C'); 

INSERT INTO PERRO_RECIBE_SER VALUES (34,'SVBE03',30,SYSDATE - INTERVAL '11' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (35,'SVBE03',32,SYSDATE - INTERVAL '10' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (36,'SVBE03',33,SYSDATE - INTERVAL '9' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (37,'SVBE03',34,SYSDATE - INTERVAL '7' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (38,'SVBE04',35,SYSDATE - INTERVAL '1' DAY,'Sin incidencias',10.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (39,'SVBE03',36,SYSDATE - INTERVAL '6' DAY,'Sin incidencias',9.99,'34567890C'); 

INSERT INTO PERRO_RECIBE_SER VALUES (40,'SVBE04',37,SYSDATE - INTERVAL '6' DAY,'Sin incidencias',10.99,'23456789B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (41,'SVBE03',38,SYSDATE - INTERVAL '5' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (42,'SVBE03',39,SYSDATE - INTERVAL '4' DAY,'El perro es muy asustadizo, entra el dueño',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (43,'SVBE03',40,SYSDATE - INTERVAL '3' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (44,'SVBE03',41,SYSDATE - INTERVAL '3' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (45,'SVBE03',42,SYSDATE - INTERVAL '2' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (46,'SVBE03',43,SYSDATE - INTERVAL '1' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (47,'SVBE03',44,SYSDATE - INTERVAL '1' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (48,'SVBE03',45,SYSDATE - INTERVAL '1' DAY,'Ayuda personal auxiliar: el perro sufre una crisis. ',15,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (49,'SVBE03',46,SYSDATE - INTERVAL '1' DAY,'Sin incidencias',9.99,'34567890C'); 

INSERT INTO PERRO_RECIBE_SER VALUES (50,'SVBE04',47,SYSDATE - INTERVAL '5' DAY,'Sin incidencias',10.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (51,'SVBE04',48,SYSDATE - INTERVAL '5' DAY,'Sin incidencias',10.99,'23456789B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (52,'SVBE04',49,SYSDATE - INTERVAL '4' DAY,'Dueño pone reclamación: sangrado de uña al cortar. Se niega a abonar el servicio',0.00,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (53,'SVBE03',50,SYSDATE - INTERVAL '4' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (54,'SVBE03',52,SYSDATE - INTERVAL '3' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (55,'SVBE03',53,SYSDATE - INTERVAL '3' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (56,'SVBE03',54,SYSDATE - INTERVAL '1' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (57,'SVBE03',55,SYSDATE - INTERVAL '1' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (58,'SVBE03',56,SYSDATE - INTERVAL '3' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (59,'SVBE03',57,SYSDATE - INTERVAL '9' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (60,'SVBE03',58,SYSDATE - INTERVAL '8' DAY,'Sin incidencias',9.99,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (61,'SVBE03',59,SYSDATE - INTERVAL '8' DAY,'Sin incidencias',9.99,'34567890C'); 

INSERT INTO PERRO_RECIBE_SER VALUES (62,'SVBE04',60,SYSDATE - INTERVAL '7' DAY,'Sin incidencias',10.99,'23456789B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (63,'SVBE04',61,SYSDATE - INTERVAL '2' DAY,'Sin incidencias',10.99,'34567890C'); 

INSERT INTO PERRO_RECIBE_SER VALUES (64,'SVNUT1',1,SYSDATE - INTERVAL '38' DAY,'Sin incidencias',30,'45678901A'); 
INSERT INTO PERRO_RECIBE_SER VALUES (65,'SVNUT1',10,SYSDATE - INTERVAL '38' DAY,'Sin incidencias',30,'45678901A'); 
INSERT INTO PERRO_RECIBE_SER VALUES (66,'SVNUT1',15,SYSDATE - INTERVAL '31' DAY,'Sin incidencias',30,'45678901A'); 
INSERT INTO PERRO_RECIBE_SER VALUES (67,'SVNUT1',20,SYSDATE - INTERVAL '31' DAY,'Sin incidencias',30,'89012345C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (68,'SVNUT1',25,SYSDATE - INTERVAL '15' DAY,'Sin incidencias',30,'89012345C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (69,'SVNUT1',40,SYSDATE - INTERVAL '8' DAY,'Sin incidencias',30,'89012345C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (70,'SVNUT1',45,SYSDATE - INTERVAL '8' DAY,'Sin incidencias',30,'89012345C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (71,'SVNUT1',50,SYSDATE - INTERVAL '8' DAY,'Sin incidencias',30,'89012345C'); 

INSERT INTO PERRO_RECIBE_SER VALUES (104,'SVNUT2',1,SYSDATE - INTERVAL '24' DAY,'Sin incidencias',30,'45678901A'); 
INSERT INTO PERRO_RECIBE_SER VALUES (105,'SVNUT2',1,SYSDATE - INTERVAL '9' DAY,'Sin incidencias',30,'45678901A'); 
INSERT INTO PERRO_RECIBE_SER VALUES (106,'SVNUT2',10,SYSDATE - INTERVAL '24' DAY,'Sin incidencias',30,'45678901A'); 
INSERT INTO PERRO_RECIBE_SER VALUES (107,'SVNUT2',10,SYSDATE - INTERVAL '9' DAY,'Sin incidencias',30,'45678901A'); 
INSERT INTO PERRO_RECIBE_SER VALUES (108,'SVNUT2',15,SYSDATE - INTERVAL '16' DAY,'Sin incidencias',30,'45678901A'); 
INSERT INTO PERRO_RECIBE_SER VALUES (109,'SVNUT2',15,SYSDATE - INTERVAL '8' DAY,'Sin incidencias',30,'45678901A'); 
INSERT INTO PERRO_RECIBE_SER VALUES (110,'SVNUT2',20,SYSDATE - INTERVAL '16' DAY,'Sin incidencias',30,'89012345C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (111,'SVNUT2',20,SYSDATE - INTERVAL '8' DAY,'Sin incidencias',30,'89012345C'); 

INSERT INTO PERRO_RECIBE_SER VALUES (72,'SVNUT2',25,SYSDATE,'Sin incidencias',30,'89012345C'); 

INSERT INTO PERRO_RECIBE_SER VALUES (73,'SVBE09',13,SYSDATE - INTERVAL '9' DAY,'Se le practica mechas con dos colores',67,'23456789B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (74,'SVBE09',17,SYSDATE - INTERVAL '24' DAY,'Con extensiones',70,'23456789B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (75,'SVBE09',31,SYSDATE - INTERVAL '5' DAY,'Ayuda personal auxiliar.Demasiado pelo.',70,'23456789B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (76,'SVBE09',42,SYSDATE - INTERVAL '1' DAY,'Sin incidencias',40.99,'23456789B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (77,'SVBE09',58,SYSDATE - INTERVAL '7' DAY,'Sin incidencias',40.99,'23456789B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (78,'SVBE09',15,SYSDATE - INTERVAL '16' DAY,'El perro sufre una reacción alérgica. Se llama al veterinario',0,'23456789B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (79,'SVBE09',61,SYSDATE - INTERVAL '8' DAY,'Sin incidencias',40.99,'23456789B'); 


INSERT INTO PERRO_RECIBE_SER VALUES (80,'SVBE10',17,SYSDATE - INTERVAL '9' DAY,'El perro se queda 1 hora más',89,'89012345C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (81,'SVBE10',21,SYSDATE - INTERVAL '24' DAY,'Sin incidencias',75.99,'89012345C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (82,'SVBE10',36,SYSDATE - INTERVAL '5' DAY,'Sin incidencias',75.99,'89012345C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (83,'SVBE10',46,SYSDATE - INTERVAL '1' DAY,'Sin incidencias',75.99,'89012345C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (84,'SVBE10',2,SYSDATE - INTERVAL '7' DAY,'Se necesita la ayuda del auxiliar',99,'89012345C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (85,'SVBE10',19,SYSDATE - INTERVAL '16' DAY,'Dolor abdominal. No se realiza el servicio',0,'89012345C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (86,'SVBE10',4,SYSDATE - INTERVAL '8' DAY,'Sin incidencias',75.99,'89012345C'); 

INSERT INTO PERRO_RECIBE_SER VALUES (87,'SVBE08',22,SYSDATE - INTERVAL '9' DAY,'El perro se queda 1 hora más',57,'67890123B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (88,'SVBE08',26,SYSDATE - INTERVAL '24' DAY,'Ayuda personal auxiliar',55,'67890123B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (89,'SVBE08',40,SYSDATE - INTERVAL '5' DAY,'Sin incidencias',45.99,'67890123B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (90,'SVBE08',51,SYSDATE - INTERVAL '1' DAY,'Sin incidencias',45.99,'67890123B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (91,'SVBE08',7,SYSDATE - INTERVAL '14' DAY,'Ayuda personal auxiliar. El perro tiene una crisis. ',45.99,'67890123B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (92,'SVBE08',24,SYSDATE - INTERVAL '16' DAY,'Se aprecia una reacción alérgica en piel previa. No se realiza el servicio',0,'67890123B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (93,'SVBE08',8,SYSDATE - INTERVAL '8' DAY,'Sin incidencias',45.99,'67890123B'); 

INSERT INTO PERRO_RECIBE_SER VALUES (94,'SVBE08',25,SYSDATE - INTERVAL '9' DAY,'El perro se queda 1 hora más',57,'67890123B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (95,'SVBE08',34,SYSDATE - INTERVAL '24' DAY,'Sin incidencias',45.99,'67890123B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (96,'SVBE08',45,SYSDATE - INTERVAL '5' DAY,'Sin incidencias',45.99,'67890123B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (97,'SVBE08',54,SYSDATE - INTERVAL '1' DAY,'Sin incidencias',45.99,'67890123B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (98,'SVBE08',7,SYSDATE - INTERVAL '7' DAY,'Ayuda personal auxiliar',67,'67890123B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (99,'SVBE08',28,SYSDATE - INTERVAL '16' DAY,'Problemas estomacales. No podemos realizar el servicio',0,'67890123B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (100,'SVBE08',14,SYSDATE - INTERVAL '8' DAY,'Sin incidencias',45.99,'67890123B'); 

INSERT INTO PERRO_RECIBE_SER VALUES (101,'SVBE07',28,SYSDATE - INTERVAL '9' DAY,'El perro se queda 1 hora más',77,'67890123B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (102,'SVBE07',37,SYSDATE - INTERVAL '24' DAY,'Sin incidencias',55.99,'67890123B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (103,'SVBE07',48,SYSDATE - INTERVAL '5' DAY,'Sin incidencias',55.99,'67890123B'); 

INSERT INTO PERRO_RECIBE_SER VALUES (115,'SVBE07',57,SYSDATE - INTERVAL '1' DAY,'Sin incidencias',55.99,'67890123B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (112,'SVBE07',10,SYSDATE - INTERVAL '7' DAY,'Ayuda personal auxiliar',67,'67890123B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (113,'SVBE07',31,SYSDATE - INTERVAL '16' DAY,'Dolor de oido derecho. No se realiza el servicio',0,'67890123B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (114,'SVBE07',17,SYSDATE - INTERVAL '8' DAY,'Sin incidencias',55.99,'67890123B'); 

INSERT INTO PERRO_RECIBE_SER VALUES (116, 'SVBE06', 27, SYSDATE - INTERVAL '38' DAY, 'Promoción por apertura', 0,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (117, 'SVBE06', 28, SYSDATE - INTERVAL '38' DAY, 'Promoción por apertura', 0,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (118, 'SVBE06', 29, SYSDATE - INTERVAL '38' DAY, 'Promoción por apertura', 0,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (119, 'SVBE06', 30, SYSDATE - INTERVAL '38' DAY, 'Promoción por apertura', 0,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (120, 'SVBE06', 53, SYSDATE - INTERVAL '38' DAY, 'Promoción por apertura', 0,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (121, 'SVBE06', 6, SYSDATE - INTERVAL '38' DAY, 'Promoción por apertura', 0,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (122, 'SVBE06', 42, SYSDATE - INTERVAL '38' DAY, 'Promoción por apertura', 0,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (123, 'SVBE06', 54, SYSDATE - INTERVAL '38' DAY, 'Promoción por apertura', 0,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (124, 'SVBE06', 27, SYSDATE - INTERVAL '3' DAY, 'Sin incidencias', 20.99,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (125, 'SVBE06', 28, SYSDATE - INTERVAL '3' DAY, 'Sin incidencias', 20.99,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (126, 'SVBE06', 42, SYSDATE - INTERVAL '4' DAY, 'Sin incidencias', 20.99,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (127, 'SVBE06', 54, SYSDATE - INTERVAL '4' DAY, 'Sin incidencias', 20.99,'34567890C');

INSERT INTO PERRO_RECIBE_SER VALUES (128, 'SVBE05', 1, SYSDATE - INTERVAL '3' DAY, 'Incremento de un 30% por ser de raza grande', 60,'45678901A');

INSERT INTO PERRO_RECIBE_SER VALUES (129, 'SVBE05', 3, SYSDATE - INTERVAL '4' DAY, 'Incremento de un 30% por ser de raza grande', 60,'89012345C');
INSERT INTO PERRO_RECIBE_SER VALUES (130, 'SVBE05', 4, SYSDATE - INTERVAL '5' DAY, 'Incremento de un 30% por ser de raza grande', 60,'45678901A');
INSERT INTO PERRO_RECIBE_SER VALUES (131, 'SVBE05', 7, SYSDATE - INTERVAL '5' DAY, 'Incremento de un 30% por ser de raza grande', 60,'89012345C');
INSERT INTO PERRO_RECIBE_SER VALUES (132, 'SVBE05', 10, SYSDATE - INTERVAL '8' DAY, 'Incremento de un 30% por ser de raza grande', 60,'45678901A');
INSERT INTO PERRO_RECIBE_SER VALUES (133, 'SVBE05', 16, SYSDATE - INTERVAL '8' DAY, 'Incremento de un 30% por ser de raza grande', 60,'89012345C');
INSERT INTO PERRO_RECIBE_SER VALUES (134, 'SVBE05', 18, SYSDATE - INTERVAL '8' DAY, 'Incremento de un 30% por ser de raza grande', 60,'45678901A');
INSERT INTO PERRO_RECIBE_SER VALUES (135, 'SVBE05', 20, SYSDATE - INTERVAL '15' DAY, 'Incremento de un 30% por ser de raza grande', 60,'89012345C');
INSERT INTO PERRO_RECIBE_SER VALUES (136, 'SVBE05', 21, SYSDATE - INTERVAL '15' DAY, 'Incremento de un 30% por ser de raza grande', 60,'45678901A');
INSERT INTO PERRO_RECIBE_SER VALUES (137, 'SVBE05', 22, SYSDATE - INTERVAL '15' DAY, 'Incremento de un 30% por ser de raza grande', 60,'89012345C');
INSERT INTO PERRO_RECIBE_SER VALUES (138, 'SVBE05', 46, SYSDATE - INTERVAL '20' DAY, 'Incremento de un 30% por ser de raza grande', 60,'45678901A');
INSERT INTO PERRO_RECIBE_SER VALUES (139, 'SVBE05', 47, SYSDATE - INTERVAL '20' DAY, 'Incremento de un 30% por ser de raza grande', 60,'89012345C');
INSERT INTO PERRO_RECIBE_SER VALUES (140, 'SVBE05', 51, SYSDATE - INTERVAL '20' DAY, 'Incremento de un 30% por ser de raza grande', 60,'45678901A');
INSERT INTO PERRO_RECIBE_SER VALUES (141, 'SVBE05', 55, SYSDATE - INTERVAL '20' DAY, 'Incremento de un 30% por ser de raza grande', 60,'89012345C');
INSERT INTO PERRO_RECIBE_SER VALUES (142, 'SVBE05', 57, SYSDATE - INTERVAL '21' DAY, 'Incremento de un 30% por ser de raza grande', 60,'45678901A');
INSERT INTO PERRO_RECIBE_SER VALUES (143, 'SVBE05', 59, SYSDATE - INTERVAL '30' DAY, 'Incremento de un 30% por ser de raza grande', 60,'89012345C');


INSERT INTO PERRO_RECIBE_SER VALUES (148, 'SVBE05', 5, SYSDATE - INTERVAL '3' DAY, 'Se incrementa el precio en un 20% por ser perro de raza media', 55.2,'45678901A');
INSERT INTO PERRO_RECIBE_SER VALUES (149, 'SVBE05', 31, SYSDATE - INTERVAL '10' DAY, 'Se incrementa el precio en un 20% por ser de raza media', 55.2,'89012345C');
INSERT INTO PERRO_RECIBE_SER VALUES (150, 'SVBE05', 32, SYSDATE - INTERVAL '11' DAY, 'Se incrementa el precio en un 20% por ser de raza media', 55.2,'45678901A');
INSERT INTO PERRO_RECIBE_SER VALUES (151, 'SVBE05', 33, SYSDATE - INTERVAL '12' DAY, 'Se incrementa el precio en un 20% por ser de raza media', 55.2,'89012345C');
INSERT INTO PERRO_RECIBE_SER VALUES (152, 'SVBE05', 34, SYSDATE - INTERVAL '12' DAY, 'Se incrementa el precio en un 20% por ser de raza media', 55.2,'45678901A');

-- Bichon Maltes - Servicio SVBE01
INSERT INTO PERRO_RECIBE_SER VALUES (153, 'SVBE01', 27, SYSDATE - INTERVAL '35' DAY, 'Sin incidencias', 25.99,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (154, 'SVBE01', 28, SYSDATE - INTERVAL '34' DAY, 'Sin incidencias', 25.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (155, 'SVBE01', 29, SYSDATE - INTERVAL '33' DAY, 'Sin incidencias', 25.99,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (156, 'SVBE01', 30, SYSDATE - INTERVAL '33' DAY, 'Sin incidencias', 25.99,'23456789B');

INSERT INTO PERRO_RECIBE_SER VALUES (158, 'SVBE02', 27, SYSDATE - INTERVAL '35' DAY, 'Precio especial pack baño+secado+corte', 15.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (159, 'SVBE02', 28, SYSDATE - INTERVAL '34' DAY, 'Precio especial pack baño+secado+corte', 15.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (160, 'SVBE02', 29, SYSDATE - INTERVAL '33' DAY, 'Precio especial pack baño+secado+corte', 15.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (161, 'SVBE02', 30, SYSDATE - INTERVAL '33' DAY, 'Precio especial pack baño+secado+corte', 15.99,'23456789B');

INSERT INTO PERRO_RECIBE_SER VALUES (163, 'SVBE01', 27, SYSDATE - INTERVAL '3' DAY, 'Sin incidencias', 25.99,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (164, 'SVBE01', 28, SYSDATE - INTERVAL '4' DAY, 'Sin incidencias', 25.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (165, 'SVBE01', 29, SYSDATE - INTERVAL '5' DAY, 'Sin incidencias', 25.99,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (166, 'SVBE02', 27, SYSDATE - INTERVAL '3' DAY, 'Precio especial pack baño+secado+corte', 15.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (167, 'SVBE02', 28, SYSDATE - INTERVAL '4' DAY, 'Precio especial pack baño+secado+corte', 15.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (168, 'SVBE02', 29, SYSDATE - INTERVAL '53' DAY, 'Precio especial pack baño+secado+corte', 15.99,'23456789B');

INSERT INTO PERRO_RECIBE_SER VALUES (169, 'SVBE01', 6, SYSDATE - INTERVAL '37' DAY, 'Sin incidencias', 25.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (170, 'SVBE01', 61, SYSDATE - INTERVAL '36' DAY, 'Sin incidencias', 25.99,'34567890C');

INSERT INTO PERRO_RECIBE_SER VALUES (172, 'SVBE02', 6, SYSDATE - INTERVAL '37' DAY, 'Precio especial pack baño+secado+corte', 15.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (173, 'SVBE02', 61, SYSDATE - INTERVAL '36' DAY, 'Precio especial pack baño+secado+corte', 15.99,'23456789B');

INSERT INTO PERRO_RECIBE_SER VALUES (175, 'SVBE01', 6, SYSDATE - INTERVAL '3' DAY, 'Sin incidencias', 25.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (176, 'SVBE01', 61, SYSDATE - INTERVAL '3' DAY, 'Sin incidencias', 25.99,'34567890C');

INSERT INTO PERRO_RECIBE_SER VALUES (178, 'SVBE02', 6, SYSDATE - INTERVAL '3' DAY, 'Precio especial pack baño+secado+corte', 15.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (179, 'SVBE02', 61, SYSDATE - INTERVAL '3' DAY, 'Precio especial pack baño+secado+corte', 15.99,'23456789B');

-- Raza grande - Servicio SVBE01
INSERT INTO PERRO_RECIBE_SER VALUES (180, 'SVBE01', 1, SYSDATE - INTERVAL '3' DAY, 'Sin incidencias', 25.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (198, 'SVBE01', 3, SYSDATE - INTERVAL '5' DAY, 'Sin incidencias', 25.99,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (181, 'SVBE01', 4, SYSDATE - INTERVAL '5' DAY, 'Sin incidencias', 25.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (182, 'SVBE01', 10, SYSDATE - INTERVAL '6' DAY, 'Sin incidencias', 25.99,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (183, 'SVBE01', 14, SYSDATE - INTERVAL '6' DAY, 'Sin incidencias', 25.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (184, 'SVBE01', 16, SYSDATE - INTERVAL '6' DAY, 'Sin incidencias', 25.99,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (185, 'SVBE01', 18, SYSDATE - INTERVAL '6' DAY, 'Sin incidencias', 25.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (186, 'SVBE01', 19, SYSDATE - INTERVAL '10' DAY, 'Sin incidencias', 25.99,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (187, 'SVBE01', 20, SYSDATE - INTERVAL '11' DAY, 'Sin incidencias', 25.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (188, 'SVBE01', 21, SYSDATE - INTERVAL '12' DAY, 'Sin incidencias', 25.99,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (189, 'SVBE01', 22, SYSDATE - INTERVAL '13' DAY, 'Sin incidencias', 25.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (190, 'SVBE01', 37, SYSDATE - INTERVAL '14' DAY, 'Sin incidencias', 25.99,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (191, 'SVBE01', 39, SYSDATE - INTERVAL '15' DAY, 'Sin incidencias', 25.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (192, 'SVBE01', 47, SYSDATE - INTERVAL '16' DAY, 'Sin incidencias', 25.99,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (193, 'SVBE01', 50, SYSDATE - INTERVAL '17' DAY, 'Sin incidencias', 25.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (194, 'SVBE01', 51, SYSDATE - INTERVAL '17' DAY, 'Sin incidencias', 25.99,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (195, 'SVBE01', 57, SYSDATE - INTERVAL '17' DAY, 'Sin incidencias', 25.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (196, 'SVBE01', 59, SYSDATE - INTERVAL '17' DAY, 'Sin incidencias', 25.99,'34567890C');

INSERT INTO PERRO_RECIBE_SER VALUES (197, 'SVBE02', 46, SYSDATE - INTERVAL '38' DAY, 'Sin incidencias', 35.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (206, 'SVBE02', 47, SYSDATE - INTERVAL '35' DAY, 'Sin incidencias', 35.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (199, 'SVBE02', 48, SYSDATE - INTERVAL '35' DAY, 'Sin incidencias', 35.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (200, 'SVBE02', 50, SYSDATE - INTERVAL '35' DAY, 'Sin incidencias', 35.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (201, 'SVBE02', 51, SYSDATE - INTERVAL '32' DAY, 'Sin incidencias', 35.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (203, 'SVBE02', 57, SYSDATE - INTERVAL '30' DAY, 'Sin incidencias', 35.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (204, 'SVBE02', 58, SYSDATE - INTERVAL '30' DAY, 'Sin incidencias', 35.99,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (205, 'SVBE02', 60, SYSDATE - INTERVAL '30' DAY, 'Sin incidencias', 35.99,'23456789B');


INSERT INTO PERRO_RECIBE_SER VALUES (207, 'SVBE01', 62, SYSDATE - INTERVAL '17' DAY, 'Ong Patitas', 0.00,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (208, 'SVBE02', 62, SYSDATE - INTERVAL '17' DAY, 'Ong Patitas', 0.00,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (209,'SVBE03',62,SYSDATE - INTERVAL '17' DAY,'Ong Patitas',0.00,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (210,'SVBE04',62,SYSDATE - INTERVAL '7' DAY,'Ong Patitas',0.00,'23456789B'); 
INSERT INTO PERRO_RECIBE_SER VALUES (211, 'SVBE01', 63, SYSDATE - INTERVAL '32' DAY, 'Ong The Dog Rescue', 0.00,'34567890C');
INSERT INTO PERRO_RECIBE_SER VALUES (212, 'SVBE02', 63, SYSDATE - INTERVAL '32' DAY, 'Ong The Dog Rescue', 0.00,'23456789B');
INSERT INTO PERRO_RECIBE_SER VALUES (213,'SVBE03',63,SYSDATE - INTERVAL '32' DAY,'Ong The Dog Rescue',0.00,'34567890C'); 
INSERT INTO PERRO_RECIBE_SER VALUES (214,'SVBE04',63,SYSDATE - INTERVAL '32' DAY,'Ong The Dog Rescue',0.00,'23456789B'); -- CONSULTAS
