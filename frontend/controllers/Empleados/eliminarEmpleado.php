<?php
if (isset($_GET['dni'])) {
    $url = 'http://localhost/perros/backend/?ruta=empleados&dni=' . $_GET['dni'];

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

    // Verificar si la eliminación fue exitosa
    if ($httpCode == 200) {
        echo "<script>
                alert('Empleado eliminado correctamente.');
                window.location.href = './../../pages/empleados/viewListarEmpleado.php';
              </script>";
    } else {
        echo "<script>
                alert('Error al eliminar el empleado.');
                window.location.href = './../../pages/empleados/viewListarEmpleado.php';
              </script>";
    }
}
?>
