<?php
require_once 'database/models/perrosModel.php';

class PerrosService
{
    private $perrosModel;

    public function __construct()
    {

        $this->perrosModel = new PerrosModel();
    }

    
    public function guardarPerro($perrosCod,$nombre, $raza, $fechaNto, $dni_cliente, $peso, $altura, $observaciones, $numero_chip, $sexo)
    {
    // Validación: Verificar que ningún campo esté vacío
    /* if (empty($nombre) || empty($raza) || empty($fechaNto) || empty($dni_cliente) || empty($peso) || empty($altura) || empty($observaciones) || empty($numero_chip) || empty($sexo)) {
        return "Error: Todos los campos son obligatorios.";
    } */

    // echo 'yrdduftdffydufftyy';

    return $this->perrosModel->save($perrosCod,$nombre, $raza, $fechaNto, $dni_cliente, $peso, $altura, $observaciones, $numero_chip, $sexo);
    }


   
    public function obtenerPerroPorId($id)
    {

        return $this->perrosModel->getPerroById($id);
    }

<<<<<<< HEAD



=======
   
>>>>>>> 2c4e463398326f892d229fa8128cd3cc67dfc68e
    public function obtenerTodosLosPerros()
    {
        return $this->perrosModel->getAll();
    }

   
    public function borrarPerro($id)
    {
        return $this->perrosModel->borrar($id);
    }
}

