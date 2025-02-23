<?php

require_once 'services/prsService.php';

class prsController
{
    private $prsService;

    public function __construct()
    {
        $this->prsService = new prsService();
    }


    public function getAll()
    {
        return $this->prsService->getAll();
    }

    public function getByDni($dni)
    {
        return $this->prsService->getByDni($dni);
    }

    public function delete($srCod)
    {
        return $this->prsService->delete($srCod);
    }

    public function save($srCod, $codServicio, $idPerro, $fecha, $incidencias, $precioFinal, $dni)
    {

        // variable
        $valida = false;
        $valida1 = false;
        $valida2 = false;
        // comprobar los datos 

        $url = 'http://localhost/dwes/proyecto%20final/backend/?ruta=servicios';
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        foreach( $data as $servicios){
            if($servicios['codigo'] == $codServicio){
                $valida = true;
            }
        }

        // comprobamos el perro

        $url = 'http://localhost/dwes/proyecto%20final/backend/?ruta=perros';
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        foreach( $data as $perros){
            if($perros['id'] == $idPerro){
                $valida1 = true;
            }
        }

        // comprobamos el empleado

        $url = 'http://localhost/dwes/proyecto%20final/backend/?ruta=empleados';
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        foreach( $data as $empleados){
            if($empleados['dni'] == $dni){
                $valida2 = true;
            }
        }

        if($valida == true && $valida1 == true && $valida2 == true){
            return $this->prsService->save($srCod, $codServicio, $idPerro, $fecha, $incidencias, $precioFinal, $dni);
        }else{
            
            return "ERROR AL INSERTAR, LOS DATOS NO SON VALIDOS";
        }


    }
}
