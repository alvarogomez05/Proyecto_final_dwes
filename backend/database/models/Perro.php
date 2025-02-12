<?php

class Perro
{

    private $id;
    private $nombre;
    private $raza;
    private $edad;
    private $dni_cliente;

    // Constructor
    public function __construct($id, $nombre, $raza, $edad, $dni_cliente)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->raza = $raza;
        $this->edad = $edad;
        $this->dni_cliente = $dni_cliente;
    }

    // Métodos getter para acceder a las propiedades
    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getRaza()
    {
        return $this->raza;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function getDniCliente()
    {
        return $this->dni_cliente;
    }
}
