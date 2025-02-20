<?php

class Perro {
    public $id;
    public $Dni_Cliente;
    public $Nombre;
    public $Fecha_Nto;
    public $Raza;
    public $Peso;
    public $Altura;
    public $Observaciones;
    public $Numero_Chip;
    public $Sexo;

   
    // Constructor
    public function __construct( $id, $Dni_Cliente, $Nombre, $Fecha_Nto, $Raza, $Peso, $Altura, $Observaciones, $Numero_Chip, $Sexo)
    {
        $this->id = $id;
        $this->Dni_Cliente = $Dni_Cliente;
        $this->Nombre = $Nombre;
        $this->Fecha_Nto = $Fecha_Nto;
        $this->Raza = $Raza;
        $this->Peso = $Peso;
        $this->Altura = $Altura;
        $this->Observaciones = $Observaciones;
        $this->Numero_Chip = $Numero_Chip;
        $this->Sexo = $Sexo;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getDniCliente()
    {
        return $this->Dni_Cliente;
    }

    public function getNombre()
    {
        return $this->Nombre;
    }

    public function getFechaNto()
    {
        return $this->Fecha_Nto;
    }

    public function getRaza()
    {
        return $this->Raza;
    }

    public function getPeso()
    {
        return $this->Peso;
    }

    public function getAltura()
    {
        return $this->Altura;
    }

    public function getObservaciones()
    {
        return $this->Observaciones;
    }

    public function getNumeroChip()
    {
        return $this->Numero_Chip;
    }

    public function getSexo()
    {
        return $this->Sexo;
    }

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setDniCliente($Dni_Cliente)
    {
        $this->Dni_Cliente = $Dni_Cliente;
    }

    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    public function setFechaNto($Fecha_Nto)
    {
        $this->Fecha_Nto = $Fecha_Nto;
    }

    public function setRaza($Raza)
    {
        $this->Raza = $Raza;
    }

    public function setPeso($Peso)
    {
        $this->Peso = $Peso;
    }

    public function setAltura($Altura)
    {
        $this->Altura = $Altura;
    }

    public function setObservaciones($Observaciones)
    {
        $this->Observaciones = $Observaciones;
    }

    public function setNumeroChip($Numero_Chip)
    {
        $this->Numero_Chip = $Numero_Chip;
    }

    public function setSexo($Sexo)
    {
        $this->Sexo = $Sexo;
    }
}

   

