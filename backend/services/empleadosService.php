<?php
require_once 'database/models/empleadosModel.php';

class EmpleadosService
{
    private $empleadosModel;

    public function __construct()
    {
        $this->empleadosModel = new EmpleadosModel();
    }

    // Método para guardar un nuevo empleado
    public function guardarEmpleado($dni, $email, $password, $rol, $nombre, $apellido1, $apellido2, $calle, $numero, $cp, $poblacion, $provincia, $tlfno, $profesion)
    {
        // Llamada al modelo con todos los parámetros actualizados
        return $this->empleadosModel->save(
            $dni, $email, $password, $rol, $nombre, 
            $apellido1, $apellido2, $calle, $numero, 
            $cp, $poblacion, $provincia, $tlfno, $profesion
        );
    }

    // Obtener un empleado por ID
    public function obtenerEmpleadoPorId($id)
    {
        return $this->empleadosModel->getEmpleadoById($id);
    }

    // Obtener todos los empleados
    public function obtenerTodosLosEmpleados()
    {
        return $this->empleadosModel->getAll();
    }

    // Borrar un empleado
    public function borrarEmpleado($id)
    {
        return $this->empleadosModel->borrar($id);
    }
}
?>