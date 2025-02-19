<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $url = 'http://localhost/perros/backend/?ruta=perros&id=' . $id;

    // Inicializar cURL
    $ch = curl_init();

    // Configurar opciones de cURL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE"); // Método DELETE
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
    ]);

    // Ejecutar petición y obtener respuesta
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Cerrar cURL
    curl_close($ch);

    // Validar respuesta
    if ($httpCode == 200) {
        echo "<script>alert('Perro eliminado correctamente.'); window.location.href='../main.php';</script>";
    } else {
        echo "<script>alert('Error al eliminar el perro.');</script>";
    }
}
?>

