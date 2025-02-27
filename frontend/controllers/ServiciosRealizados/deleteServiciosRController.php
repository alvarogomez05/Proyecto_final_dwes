<?php
session_start();
$dni = $_SESSION['dni'];
$rol = $_SESSION['rol'];

$url = 'http://localhost/perros/backend/?ruta=prs';
$response = file_get_contents($url);
$data = json_decode($response, true);

if (isset($_GET['submit'])) {
    $srCod = $_GET['submit'];
    $deleteUrl = 'http://localhost/perros/backend/?ruta=prs&srCod=' . urlencode($srCod);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $deleteUrl);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);

    $response = curl_exec($ch);
    $error = curl_errno($ch);
    curl_close($ch);

    if ($error) {
        echo "<script>alert('Error en la petición: " . curl_error($ch) . "');</script>";
    } else {
        echo "<script>alert('El servicio ha sido eliminado correctamente.'); window.location.href = './../../pages/Servicios Realizados/LlistarServiciosRealizadosView.php';</script>";
    }
}
?>
