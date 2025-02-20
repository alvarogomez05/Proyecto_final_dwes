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

    public function save($nombre, $raza, $fechaNto, $dni_duenio)
    {
        try {
            $sql = "INSERT INTO perros (Nombre, Raza, Fecha_Nto, Dni_Cliente) VALUES (?, ?, ?, ?)";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $nombre);
            $sentencia->bindParam(2, $raza);
            $sentencia->bindParam(3, $fechaNto); // Cambiar a fecha de nacimiento
            $sentencia->bindParam(4, $dni_duenio);
            $sentencia->execute();
            return $this->conexion->lastInsertId(); // Retorna el ID del nuevo registro
        } catch (PDOException $e) {
            // Aquí podrías loguear el error en un archivo
            return "Error al guardar el perro: " . $e->getMessage();
        }
    }

    public function getPerroById($id)
    {
        try {
            $sql = "SELECT * FROM perros WHERE Id=? LIMIT 1"; // Agregando LIMIT 1
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $id);
            $sentencia->execute();
            $row = $sentencia->fetch();
            if ($row) {
                return new Perro($row['Id'], $row['Nombre'], $row['Raza'], $row['Fecha_Nto'], $row['Dni_Cliente']);
            }
            return null; // Si no hay resultado
        } catch (PDOException $e) {
            return "Error al cargar el perro: " . $e->getMessage();
        }
    }

    public function getAll()
    {
        if ($this->conexion) {
            try {
                $sql = "SELECT * FROM perros";
                $statement = $this->conexion->query($sql);
                $registros = $statement->fetchAll(PDO::FETCH_ASSOC);
                $perros = [];
                foreach ($registros as $row) {
                    $perros[] = new Perro($row['Id'], $row['Nombre'], $row['Raza'], $row['Fecha_Nto'], $row['Dni_Cliente']);
                }
                return $perros; // Retorna un array vacío si no hay registros
            } catch (PDOException $e) {
                return "Error al obtener los perros: " . $e->getMessage();
            }
        }
        return []; // Retorna un array vacío si la conexión falla
    }

    public function borrar($id)
    {
        try {
            $sql = "DELETE FROM perros WHERE Id=?";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $id);
            $sentencia->execute();
            if ($sentencia->rowCount() === 1) {
                return $id; // Retorna el ID del perro borrado
            }
            return "No existe el ID a borrar: " . $id;
        } catch (PDOException $e) {
            return "Error al borrar el perro: " . $e->getMessage();
        }
    }
}
?>

