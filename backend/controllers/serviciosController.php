<?php

require_once 'services/serviciosService.php';

class ServiciosController{
    private $servicioService;

    public function __construct(){
        $this->servicioService = new ServiciosService();
    }

    // Obtener todos los servicios
    public function getServicios(){
        return $this->servicioService->obtenerTodosLosServicios();
    }

    // Obtener servicio por ID
    public function getServicioId($id){
        return $this->servicioService->obtenerServicioPorId($id);
    }

    // Borrar servicio por ID
    public function borrarServicio($id){
        return $this->servicioService->borrarServicio($id);
    }

    // Actualizar servicio (precio y descripcion)
    public function actualizarServicio($id, $nuevoPrecio, ){
        return $this->servicioService->cambiarPrecioServicio($id, $nuevoPrecio);
    }

    
    // Guardar un nuevo servicio (con descripcion)
    public function guardarServicio($codigo, $nombre, $precio, $descripcion){

        // comprobar que el servicio ya este en la bd
        $url = 'http://localhost/perros/backend/?ruta=servicios';
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        foreach ($data as $servicios) {
            if ($servicios['codigo'] == $codigo) {
                http_response_code(400);
                return;
            }

        return $this->servicioService->guardarServicio($codigo, $nombre, $precio, $descripcion);
    }

}
}