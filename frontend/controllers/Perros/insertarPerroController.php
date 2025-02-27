<?php


    $url = 'http://localhost/perros/backend/?ruta=perros';

    // Recibir datos del formulario
    $dni_cliente = $_GET['dni_cliente'] ?? '';
    $nombre = $_GET['nombre'] ?? '';
    $FechaNto = $_GET['FechaNto'] ?? '';
    $raza = $_GET['raza'] ?? '';
    $peso = $_GET['peso'] ?? '';
    $altura = $_GET['altura'] ?? '';
    $observaciones = $_GET['observaciones'] ?? '';
    $numero_chip = $_GET['numero_chip'] ?? '';
    $sexo = $_GET['sexo'] ?? '';

    // Construir la URL con los parámetros
    $url .= '&dni_cliente=' . urlencode($dni_cliente);
    $url .= '&nombre=' . urlencode($nombre);
    $url .= '&FechaNto=' . urlencode($FechaNto);
    $url .= '&raza=' . urlencode($raza);
    $url .= '&peso=' . urlencode($peso);
    $url .= '&altura=' . urlencode($altura);
    $url .= '&observaciones=' . urlencode($observaciones);
    $url .= '&numero_chip=' . urlencode($numero_chip);
    $url .= '&sexo=' . urlencode($sexo);

    // Validamos que los campos requeridos estén completos
    if ($dni_cliente && $nombre && $FechaNto && $raza && $peso && $altura && $numero_chip && $sexo) {
        // Datos del nuevo perro
        $newDog = [
            'dni_cliente' => $dni_cliente,
            'nombre' => $nombre,
            'FechaNto' => $FechaNto,
            'raza' => $raza,
            'peso' => $peso,
            'altura' => $altura,
            'observaciones' => $observaciones,
            'numero_chip' => $numero_chip,
            'sexo' => $sexo,
        ];

        // Convertir los datos a JSON
        $data = json_encode($newDog);

        // Inicializar cURL
        $conexion = curl_init();
        curl_setopt($conexion, CURLOPT_URL, $url);
        curl_setopt($conexion, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data)
        ]);
        curl_setopt($conexion, CURLOPT_POST, true);
        curl_setopt($conexion, CURLOPT_POSTFIELDS, $data);
        curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);

        // Ejecutar petición y obtener respuesta
        $response = curl_exec($conexion);

        $httpCode = curl_getinfo($conexion, CURLINFO_HTTP_CODE);
        // Verificar si hubo error en la petición
        if ($response === false) {
          echo "<script>alert('Error en la conexión con el servidor.');</script>";
      } else {
          if ($httpCode == 201) {
              echo "<script>alert('Registro exitoso. ¡Registrado {$nombre} con éxito!'); window.location.href = './../../pages/Perros/listarPerrosView.php';</script>";
          } elseif ($httpCode == 400) {
              $errorMsg = json_decode($response, true)['error'] ?? 'El perro ya existe';
              echo "<script>alert('Registro fallido: {$errorMsg}');</script>";
          } else {
              echo "<script>alert('Error inesperado. Código HTTP: {$httpCode}');</script>";
          }
      }
        // Cerrar conexión cURL
        curl_close($conexion);
    } else {
        echo "";
    }

