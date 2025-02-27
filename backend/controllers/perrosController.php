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

    public function guardarPerro( $nombre, $raza, $fechaNto, $dni_cliente, $peso, $altura, $observaciones, $numero_chip, $sexo){

        // $url = 'http://localhost/perros/backend/?ruta=perros';
        // $response = file_get_contents($url);
        // $data = json_decode($response, true);

        // $datos = $data[array_key_last($data)];
        // $perrosCod = $datos['id'] + 1;

        // echo 'aaaaaaaaaaaaa';
        
        $perrosCod=null;

         return $this->perroService->guardarPerro($perrosCod,$nombre, $raza, $fechaNto, $dni_cliente, $peso, $altura, $observaciones, $numero_chip, $sexo);
    }
}