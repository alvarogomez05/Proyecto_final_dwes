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

    public function save($id, $nombre, $raza, $edad, $dni_duenio)
    {
        try {
            $sql = "INSERT INTO perros (ID_Perro, Nombre, Raza, Fecha_Nto, Dni_duenio) VALUES (?, ?, ?, ?, ?)";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $id);
            $sentencia->bindParam(2, $nombre);
            $sentencia->bindParam(3, $raza);
            $sentencia->bindParam(4, $edad);
            $sentencia->bindParam(5, $dni_duenio);
            $num = $sentencia->execute();
            return $num;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function getPerroById($id)
    {
        try {
            $sql = "SELECT * FROM perros WHERE ID_perro=?";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $id);
            $sentencia->execute();
            $row = $sentencia->fetch();
            if ($row) {
                $perro = new Perro($row['ID_Perro'], $row['Nombre'], $row['Raza'], $row['Fecha_Nto'], $row['Dni_duenio']);
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
                    array_push($perros, new Perro($row['ID_Perro'], $row['Nombre'], $row['Raza'], $row['Fecha_Nto'], $row['Dni_duenio']));
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
            $sql = "DELETE FROM perros WHERE ID_Perro=?";
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
