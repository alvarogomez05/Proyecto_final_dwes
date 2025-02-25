<?php
if (isset($_GET['dni'])) {
    $url = 'http://localhost/Proyecto_final_dwes/backend/?ruta=empleados&dni=' .$_GET['dni'];

    // Inicializar curl
    $ch = curl_init();

    // Configurar opciones de curl
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE"); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
    ]);

    // Ejecutar petición y obtener respuesta
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Cerrar curl
    curl_close($ch);

}


?>
