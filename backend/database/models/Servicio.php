<?php

class Servicio
{

    public $codigo;
    public $nombre;
    public $precio;

    // Constructor
    public function __construct($codigo, $nombre, $precio)
    {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    // Métodos getter para acceder a las propiedades
    public function getId()
    {
        return $this->codigo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }
}
