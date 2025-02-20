<?php
require_once 'database/models/perrosModel.php';

class PerrosService
{
    private $perrosModel;

    public function __construct()
    {
        $this->perrosModel = new PerrosModel();
    }

    /**
     * Guarda un nuevo perro en la base de datos.
     *
     * @param string $nombre Nombre del perro.
     * @param string $raza Raza del perro.
     * @param string $fechaNto Fecha de nacimiento del perro.
     * @param string $dni_cliente DNI del dueño del perro.
     * @return mixed El ID del perro guardado o un mensaje de error.
     */
    public function guardarPerro($nombre, $raza, $fechaNto, $dni_cliente)
    {
        // Validación simple
        if (empty($nombre) || empty($raza) || empty($fechaNto) || empty($dni_cliente)) {
            return "Error: Todos los campos son obligatorios.";
        }
        return $this->perrosModel->save($nombre, $raza, $fechaNto, $dni_cliente);
    }

    /**
     * Obtiene un perro por su ID.
     *
     * @param int $id ID del perro.
     * @return Perro|null El objeto Perro si se encuentra, null de lo contrario.
     */
    public function obtenerPerroPorId($id)
    {
        return $this->perrosModel->getPerroById($id);
    }

    /**
     * Obtiene todos los perros de la base de datos.
     *
     * @return array Arreglo de objetos Perro.
     */
    public function obtenerTodosLosPerros()
    {
        return $this->perrosModel->getAll();
    }

    /**
     * Borra un perro de la base de datos.
     *
     * @param int $id ID del perro a borrar.
     * @return mixed El ID del perro borrado o un mensaje de error.
     */
    public function borrarPerro($id)
    {
        return $this->perrosModel->borrar($id);
    }
}
