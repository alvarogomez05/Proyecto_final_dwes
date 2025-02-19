<?php

require_once 'services/prsService.php';

class prsController{
    private $prsService;

    public function __construct(){
        $this->prsService=new prsService();
    }


    public function getAll(){
        return $this->prsService->getAll();
    }

    public function getByDni($dni){
         return $this->prsService->getByDni($dni);
    }

    public function delete($srCod){
         return $this->prsService->delete($srCod);
    }

    public function save($srCod, $codServicio, $idPerro, $fecha, $incidencias, $precioFinal, $dni){
         return $this->prsService->save($srCod, $codServicio, $idPerro, $fecha, $incidencias, $precioFinal, $dni);
    }
}