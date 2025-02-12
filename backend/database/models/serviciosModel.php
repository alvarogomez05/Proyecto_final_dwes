<?php

include_once 'Servicio.php';

class ServiciosModel extends BD {

    private $table;
    private $conexion;

    public function __construct() {
        $this->table = "servicios";
        $this->conexion = $this->getConexion();
    }

    public function save($id, $nombre, $precio) {
        try {
            $sql = "INSERT INTO servicios (Id, Nombre, Precio) VALUES (?, ?, ?)";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $id);
            $sentencia->bindParam(2, $nombre);
            $sentencia->bindParam(3, $precio);
            $num = $sentencia->execute();
            return $num;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function getServicioById($id) {
        try {
            $sql = "SELECT * FROM servicios WHERE Id=?";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $id);
            $sentencia->execute();
            $row = $sentencia->fetch();
            if ($row) {
                $servicio = new Servicio($row['Id'], $row['Nombre'], $row['Precio']);
                return $servicio;
            }
            return null;
        } catch (PDOException $e) {
            return "ERROR AL CARGAR .<br>" . $e->getMessage();
        }
    }

    public function getAll() {
        if ($this->conexion) {
            $servicios = array();
            try {
                $sql = "SELECT * FROM servicios";
                $statement = $this->conexion->query($sql);
                $registros = $statement->fetchAll();
                $statement = null;
                foreach ($registros as $row) {
                    array_push($servicios, new Servicio($row['Id'], $row['Nombre'], $row['Precio']));
                }
                return $servicios;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        } else {
            return $this->getMensajeError();
        }
    }

    public function borrar($id) {
        try {
            $sql = "DELETE FROM servicios WHERE Id=?";
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
?>
