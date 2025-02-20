<?php

require_once 'services/perrosService.php';

class PerrosController{
    private $perroService;

    public function __construct(){
        $this->perroService=new PerrosService();
    }


    public function getPerros(){
        return $this->perroService->obtenerTodosLosPerros();
    }

    public function getPerroId($id){
         return $this->perroService->obtenerPerroPorId($id);
    }

    public function borrarPerro($id){
         return $this->perroService->borrarPerro($id);
    }

    public function guardarPerro( $nombre, $raza, $edad, $dni_cliente){
         return $this->perroService->guardarPerro( $nombre, $raza, $edad, $dni_cliente);
    }
}