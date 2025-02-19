<?php
require_once 'PerroRecibeServicio.php';

class PerroRecibeServicioModel extends BD{
    
    private $table;
    private $conexion;

    public function __construct()
    {
        $this->table = "perro_recibe_servicio";
        $this->conexion = $this->getConexion();
    }

    // Crear un nuevo registro
    public function save($srCod, $codServicio, $idPerro, $fecha, $incidencias, $precioFinal, $dni) {
        try {
            $sql = "INSERT INTO PerroRecibeServicio (Sr_Cod, Cod_Servicio, ID_Perro, Fecha, Incidencias, Precio_Final, Dni) 
                    VALUES (?, ?, ?, ?, ?, ?, ?)";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $srCod);
            $sentencia->bindParam(2, $codServicio);
            $sentencia->bindParam(3, $idPerro);
            $sentencia->bindParam(4, $fecha);
            $sentencia->bindParam(5, $incidencias);
            $sentencia->bindParam(6, $precioFinal);
            $sentencia->bindParam(7, $dni);

            return $sentencia->execute();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    // Obtener los registros segun el dni del empleado
    public function getByDni($dni) {
        try {
            $sql = "SELECT * FROM PerroRecibeServicio WHERE Dni = ?";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $dni);
            $sentencia->execute();
            return $sentencia->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    // Obtener todos los registros para ver desde el admin
    public function getAll() {
        try {
            $sql = "SELECT * FROM PerroRecibeServicio";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    // Eliminar un registro
    public function delete($srCod) {
        try {
            $sql = "DELETE FROM PerroRecibeServicio WHERE Sr_Cod = ?";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $srCod);
            return $sentencia->execute();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
?>
