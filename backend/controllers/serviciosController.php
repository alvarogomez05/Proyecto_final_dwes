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

    // Guardar un nuevo servicio (con descripcion)
    public function guardarServicio($codigo, $nombre, $precio, $descripcion){
        return $this->servicioService->guardarServicio($codigo, $nombre, $precio, $descripcion);
    }

    // Actualizar servicio (precio y descripcion)
    public function actualizarServicio($id, $nuevoPrecio, ){
        return $this->servicioService->cambiarPrecioServicio($id, $nuevoPrecio);
    }
}
?>