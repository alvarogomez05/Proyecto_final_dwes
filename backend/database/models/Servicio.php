<?php

class Servicio
{
    public $codigo;
    public $nombre;
    public $precio;
    public $descripcion; 
    // Constructor
    public function __construct($codigo, $nombre, $precio, $descripcion)
    {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion = $descripcion;  
    }

    // Métodos getter para acceder a las propiedades
    public function getCodigo()  
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

    public function getDescripcion()  
    {
        return $this->descripcion;
    }
}
