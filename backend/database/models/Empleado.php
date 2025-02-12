<?php

class Empleado {

    private $id;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $cargo;

    // Constructor
    public function __construct($id, $nombre, $apellido1, $apellido2, $cargo) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->cargo = $cargo;
    }

    // Métodos getter para acceder a las propiedades
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido1() {
        return $this->apellido1;
    }

    public function getApellido2() {
        return $this->apellido2;
    }

    public function getCargo() {
        return $this->cargo;
    }
}
?>
