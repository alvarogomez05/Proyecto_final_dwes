<?php

include_once 'Cliente.php';

class ClientesModel extends BD {

    private $table;
    private $conexion;

    public function __construct() {
        $this->table = "clientes";
        $this->conexion = $this->getConexion();
    }

    public function save($dni, $nombre, $apellido1, $apellido2, $direccion, $tlfno) {
        try {
            $sql = "INSERT INTO clientes (Dni, Nombre, Apellido1, Apellido2, Direccion, Tlfno) VALUES (?, ?, ?, ?, ?, ?)";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $dni);
            $sentencia->bindParam(2, $nombre);
            $sentencia->bindParam(3, $apellido1);
            $sentencia->bindParam(4, $apellido2);
            $sentencia->bindParam(5, $direccion);
            $sentencia->bindParam(6, $tlfno);
            $num = $sentencia->execute();
            return $num; //true-false
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function getClienteByDni($dni) {
        try {
            $sql = "SELECT * FROM clientes WHERE Dni=?";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $dni);
            $sentencia->execute();
            $row = $sentencia->fetch();
            if ($row) {
                $cliente = new Cliente($row['Dni'], $row['Nombre'], $row['Apellido1'], $row['Apellido2'], $row['Direccion'], $row['Tlfno']);
                return $cliente;
            }
            return null;
        } catch (PDOException $e) {
            return "ERROR AL CARGAR .<br>" . $e->getMessage();
        }
    }

    public function getAll() {
        if ($this->conexion) {
            $clientes = array();
            try {
                $sql = "SELECT * FROM clientes";
                $statement = $this->conexion->query($sql);
                $registros = $statement->fetchAll();
                $statement = null;
                foreach ($registros as $row) {
                    array_push($clientes, new Cliente($row['Dni'], $row['Nombre'], $row['Apellido1'], $row['Apellido2'], $row['Direccion'], $row['Tlfno']));
                }
                return $clientes;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        } else {
            return $this->getMensajeError();
        }
    }

    public function borrar($dni) {
        try {
            $sql = "DELETE FROM clientes WHERE Dni=?";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $dni);
            $num = $sentencia->execute();
            if ($sentencia->rowCount() == 1) {
                return $dni;
            }
            return "NO EXISTE EL DNI A BORRAR: " . $dni;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
?>
