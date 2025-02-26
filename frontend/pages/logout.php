<?php
session_start();

// Destruir la sesión y las cookies
session_unset();
session_destroy();

// Redirigir al login
header('Location: ../index.php');
?>