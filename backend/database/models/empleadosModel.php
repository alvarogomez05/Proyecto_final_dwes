<?php

require_once 'Empleado.php';

class EmpleadosModel extends BD
{

    private $table;
    private $conexion;

    public function __construct()
    {
        $this->table = "empleados";
        $this->conexion = $this->getConexion();
    }

    public function save($id, $nombre, $apellido1, $apellido2, $cargo)
    {
        try {
            $sql = "INSERT INTO empleados (Id, Nombre, Apellido1, Apellido2, Cargo) VALUES (?, ?, ?, ?, ?)";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $id);
            $sentencia->bindParam(2, $nombre);
            $sentencia->bindParam(3, $apellido1);
            $sentencia->bindParam(4, $apellido2);
            $sentencia->bindParam(5, $cargo);
            $num = $sentencia->execute();
            return $num;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function getEmpleadoById($id)
    {
        try {
            $sql = "SELECT * FROM empleados WHERE Id=?";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $id);
            $sentencia->execute();
            $row = $sentencia->fetch();
            if ($row) {
                $empleado = new Empleado($row['Id'], $row['Nombre'], $row['Apellido1'], $row['Apellido2'], $row['Cargo']);
                return $empleado;
            }
            return null;
        } catch (PDOException $e) {
            return "ERROR AL CARGAR .<br>" . $e->getMessage();
        }
    }

    public function getAll()
    {
        if ($this->conexion) {
            $empleados = array();
            try {
                $sql = "SELECT * FROM empleados";
                $statement = $this->conexion->query($sql);
                $registros = $statement->fetchAll();
                $statement = null;
                foreach ($registros as $row) {
                    array_push($empleados, new Empleado($row['Id'], $row['Nombre'], $row['Apellido1'], $row['Apellido2'], $row['Cargo']));
                }
                return $empleados;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        } else {
            return $this->getMensajeError();
        }
    }

    public function borrar($id)
    {
        try {
            $sql = "DELETE FROM empleados WHERE Id=?";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $id);
            $num = $sentencia->execute();
            if ($sentencia->rowCount() == 1) {
                return $id;
            }
            return "NO EXISTE EL ID A BORRAR: " . $id;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
