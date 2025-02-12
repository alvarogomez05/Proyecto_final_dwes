<?php
// importamos el archivos de conexion a la base de datos
require_once './core/bd.php';
// creamos una variable para instaciar la clase BD
$BD = new BD();
// llamamos a la función para implementar la conexion
$conexion = $BD->getConexion();
