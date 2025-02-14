<?php

class Empleado
{
    public $dni;
    public $email;
    public $password;
    public $rol;
    public $nombre;
    public $apellido1;
    public $apellido2;
    public $calle;
    public $numero;
    public $cp;
    public $poblacion;
    public $provincia;
    public $tlfno;
    public $profesion;

    // Constructor
    public function __construct($dni, $email, $password, $rol, $nombre, $apellido1, $apellido2, $calle, $numero, $cp, $poblacion, $provincia, $tlfno, $profesion)
    {
        $this->dni = $dni;
        $this->email = $email;
        $this->password = $password;
        $this->rol = $rol;
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->calle = $calle;
        $this->numero = $numero;
        $this->cp = $cp;
        $this->poblacion = $poblacion;
        $this->provincia = $provincia;
        $this->tlfno = $tlfno;
        $this->profesion = $profesion;
    }

    // Métodos getter para acceder a las propiedades
    public function getDni()
    {
        return $this->dni;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido1()
    {
        return $this->apellido1;
    }

    public function getApellido2()
    {
        return $this->apellido2;
    }

    public function getCalle()
    {
        return $this->calle;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getCp()
    {
        return $this->cp;
    }

    public function getPoblacion()
    {
        return $this->poblacion;
    }

    public function getProvincia()
    {
        return $this->provincia;
    }

    public function getTlfno()
    {
        return $this->tlfno;
    }

    public function getProfesion()
    {
        return $this->profesion;
    }
}
