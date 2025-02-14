<?php
$url = 'http://localhost/Proyecto%20APIS/backend/?ruta=empleados';
$response = file_get_contents($url);
$data = json_decode($response, true);

foreach ($data as $datos) {
    print_r($datos['dni']);
    echo '<br><br>';
}

// print_r($data);
