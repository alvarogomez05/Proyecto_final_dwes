<?php


require_once '../database/models/perrosModel.php';

class PerrosService {

    private $perrosModel;

    public function __construct() {
        $this->perrosModel = new PerrosModel();
    }


    public function guardarPerro($id, $nombre, $raza, $edad, $dni_cliente) {
        return $this->perrosModel->save($id, $nombre, $raza, $edad, $dni_cliente);
    }

    public function obtenerPerroPorId($id) {
        return $this->perrosModel->getPerroById($id);
    }


    public function obtenerTodosLosPerros() {
        return $this->perrosModel->getAll();
    }

    public function borrarPerro($id) {
        return $this->perrosModel->borrar($id);
    }
}

?>