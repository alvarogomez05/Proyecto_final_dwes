<?php
session_start();

$url = 'http://localhost/perros/backend/?ruta=servicios';

$codigo = $_GET['codigo'] ?? '';
$precio = $_GET['precio'] ?? '';

$url .= '&codigo=' . urlencode($codigo);
$url .= '&precio=' . urlencode($precio);

if( $codigo && $precio){

$data = [
    'codigo' => $codigo,
    'precio' => $precio,
];



$ch = curl_init($url);

$jsonData = json_encode($data);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonData)
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

}
?>
