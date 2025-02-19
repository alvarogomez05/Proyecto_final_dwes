<?php
// pagina para cerrar la sesion del usuario
//iniciamos la sesion para poder trabajar con el array session
session_start();

// vaiamos el array session

$_SESSION = [];

//destruimos la sesion para que no guarde informacion

session_destroy();

// redireccionamos al index

header("location:../index.php");
exit();
