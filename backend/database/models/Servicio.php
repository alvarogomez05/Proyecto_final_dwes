<?php

class Servicio
{

    private $id;
    private $nombre;
    private $precio;

    // Constructor
    public function __construct($id, $nombre, $precio)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
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

    public function getPrecio()
    {
        return $this->precio;
    }
}
