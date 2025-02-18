<?php

include_once 'Servicio.php';

class ServiciosModel extends BD
{
    private $table;
    private $conexion;

    public function __construct()
    {
        $this->table = "servicios";
        $this->conexion = $this->getConexion();
    }

    // Método para guardar un nuevo servicio, ahora con el campo descripcion
    public function save($codigo, $nombre, $precio, $descripcion)
    {
        try {
            $sql = "INSERT INTO servicios (Codigo, Nombre, Precio, Descripcion) VALUES (?, ?, ?, ?)";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $codigo);
            $sentencia->bindParam(2, $nombre);
            $sentencia->bindParam(3, $precio);
            $sentencia->bindParam(4, $descripcion);  // Bind para descripcion
            $num = $sentencia->execute();
            return $num;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    // Obtener un servicio por su ID, ahora con el campo descripcion
    public function getServicioById($codigo)
    {
        try {
            $sql = "SELECT * FROM servicios WHERE Codigo=?";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $codigo);
            $sentencia->execute();
            $row = $sentencia->fetch();
            if ($row) {
                // Incluyendo descripcion al crear el objeto Servicio
                $servicio = new Servicio($row['Codigo'], $row['Nombre'], $row['Precio'], $row['Descripcion']);
                return $servicio;
            }
            return null;
        } catch (PDOException $e) {
            return "ERROR AL CARGAR .<br>" . $e->getMessage();
        }
    }

    // Obtener todos los servicios, ahora incluyendo descripcion
    public function getAll()
    {
        if ($this->conexion) {
            $servicios = array();
            try {
                $sql = "SELECT * FROM servicios";
                $statement = $this->conexion->query($sql);
                $registros = $statement->fetchAll();
                $statement = null;
                foreach ($registros as $row) {
                    // Creación de objetos Servicio con descripcion
                    array_push($servicios, new Servicio($row['Codigo'], $row['Nombre'], $row['Precio'], $row['Descripcion']));
                }
                return $servicios;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        } else {
            return $this->getMensajeError();
        }
    }

    // Borrar un servicio por su código
    public function borrar($codigo)
    {
        try {
            $sql = "DELETE FROM servicios WHERE Codigo=?";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $codigo);
            $num = $sentencia->execute();
            if ($sentencia->rowCount() == 1) {
                return $codigo;
            }
            return "NO EXISTE EL ID A BORRAR: " . $codigo;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    // Cambiar el precio de un servicio
    public function cambiarPrecioServicio($codigo, $nuevoPrecio)
    {
        try {
            $sql = "UPDATE servicios SET Precio = ? WHERE Codigo = ?";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $nuevoPrecio);
            $sentencia->bindParam(2, $codigo);
            $sentencia->execute();
            if ($sentencia->rowCount() > 0) {
                return "El precio del servicio se ha actualizado correctamente.";
            } else {
                return "No se encontró el servicio con el Codigo proporcionado o el precio ya es el mismo.";
            }
        } catch (PDOException $e) {
            return "Error al actualizar el precio del servicio: " . $e->getMessage();
        }
    }
}

?>