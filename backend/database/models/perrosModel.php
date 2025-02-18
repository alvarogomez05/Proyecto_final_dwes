<?php

include_once 'Perro.php';

class PerrosModel extends BD
{

    private $table;
    private $conexion;

    public function __construct()
    {
        $this->table = "perros";
        $this->conexion = $this->getConexion();
    }

    public function save($id, $nombre, $raza, $edad, $dni_cliente)
    {
        try {
            $sql = "INSERT INTO perros (Id, Nombre, Raza, Edad, Dni_Cliente) VALUES (?, ?, ?, ?, ?)";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $id);
            $sentencia->bindParam(2, $nombre);
            $sentencia->bindParam(3, $raza);
            $sentencia->bindParam(4, $edad);
            $sentencia->bindParam(5, $dni_cliente);
            $num = $sentencia->execute();
            return $num;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function getPerroById($id)
    {
        try {
            $sql = "SELECT * FROM perros WHERE Id=?";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $id);
            $sentencia->execute();
            $row = $sentencia->fetch();
            if ($row) {
                $perro = new Perro($row['Id'], $row['Nombre'], $row['Raza'], $row['Edad'], $row['Dni_Cliente']);
                return $perro;
            }
            return null;
        } catch (PDOException $e) {
            return "ERROR AL CARGAR .<br>" . $e->getMessage();
        }
    }

    public function getAll()
    {
        if ($this->conexion) {
            $perros = array();
            try {
                $sql = "SELECT * FROM perros";
                $statement = $this->conexion->query($sql);
                $registros = $statement->fetchAll();
                $statement = null;
                foreach ($registros as $row) {
                    array_push($perros, new Perro($row['Id'], $row['Nombre'], $row['Raza'], $row['Edad'], $row['Dni_Cliente']));
                }
                return $perros;
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
            $sql = "DELETE FROM perros WHERE Id=?";
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
