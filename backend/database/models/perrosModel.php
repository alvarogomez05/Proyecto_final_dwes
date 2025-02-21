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

    public function save($Dni_Cliente, $Nombre, $Fecha_Nto, $Raza, $Peso, $Altura, $Observaciones, $Numero_Chip, $Sexo)
    {
        try {
            $sql = "INSERT INTO perros (Dni_Cliente, Nombre, Fecha_Nto, Raza, Peso, Altura, Observaciones, Numero_Chip, Sexo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $Dni_Cliente);
            $sentencia->bindParam(2, $Nombre);
            $sentencia->bindParam(3, $Fecha_Nto); 
            $sentencia->bindParam(4, $Raza);
            $sentencia->bindParam(5, $Peso);
            $sentencia->bindParam(6, $Altura);
            $sentencia->bindParam(7, $Observaciones);
            $sentencia->bindParam(8, $Numero_Chip);
            $sentencia->bindParam(9, $Sexo);
            $sentencia->execute();
            return $this->conexion->lastInsertId();
            
        } catch (PDOException $e) {
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
                return new Perro($row['Id'], 
                $row['Dni_Cliente'], 
                $row['Nombre'], 
                $row['Fecha_Nto'], 
                $row['Raza'], 
                $row['Peso'],
                $row['Altura'], 
                $row['Observaciones'], 
                $row['Numero_Chip'], 
                $row['Sexo']);
            }
            return null; 
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
                    $perros[] = new Perro($row['Id'], 
                    $row['Dni_Cliente'], 
                    $row['Nombre'], 
                    $row['Fecha_Nto'], 
                    $row['Raza'], 
                    $row['Peso'], 
                    $row['Altura'], 
                    $row['Observaciones'], 
                    $row['Numero_Chip'], 
                    $row['Sexo']);
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

