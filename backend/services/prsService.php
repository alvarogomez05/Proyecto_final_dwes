<?php

require_once 'database/models/perroRecibeServicioModel.php';

class prsService
{

    private $Model;

    public function __construct()
    {
        $this->Model = new PerroRecibeServicioModel();
    }


    public function save($srCod, $codServicio, $idPerro, $fecha, $incidencias, $precioFinal, $dni)
    {
        return $this->Model->save($srCod, $codServicio, $idPerro, $fecha, $incidencias, $precioFinal, $dni);
    }

    public function getByDni($dni)
    {
        return $this->Model->getByDni($dni);
    }


    public function getAll()
    {
        return $this->Model->getAll();
    }

    public function delete($srCod)
    {
        return $this->Model->delete($srCod);
    }
}
