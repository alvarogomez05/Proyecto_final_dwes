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

    public function save($perrosCod, $Dni_Cliente, $Nombre, $Fecha_Nto, $Raza, $Peso, $Altura, $Observaciones, $Numero_Chip, $Sexo)
    {

        try {
            // Asegurar que Fecha_Nto esté en formato correcto (YYYY-MM-DD)
            $Fecha_Nto = date("Y-m-d", strtotime($Fecha_Nto));
    
            $sql = "INSERT INTO perros (Dni_Cliente, Nombre, Fecha_Nto, Raza, Peso, Altura, Observaciones, Numero_Chip, Sexo) 
                    VALUES (:dni, :nombre, :fecha, :raza, :peso, :altura, :obs, :chip, :sexo)";
            
            $sentencia = $this->conexion->prepare($sql);
    
            // Enlace de valores usando bindValue para evitar problemas de referencias
            $sentencia->bindValue(':dni', $Dni_Cliente, PDO::PARAM_STR);
            $sentencia->bindValue(':nombre', $Nombre, PDO::PARAM_STR);
            $sentencia->bindValue(':fecha', $Fecha_Nto, PDO::PARAM_STR);
            $sentencia->bindValue(':raza', $Raza, PDO::PARAM_STR);
            $sentencia->bindValue(':peso', $Peso, PDO::PARAM_STR); // Si es float, usar PDO::PARAM_STR o convertirlo
            $sentencia->bindValue(':altura', $Altura, PDO::PARAM_STR);
            $sentencia->bindValue(':obs', $Observaciones, PDO::PARAM_STR);
            $sentencia->bindValue(':chip', $Numero_Chip, PDO::PARAM_STR);
            $sentencia->bindValue(':sexo', $Sexo, PDO::PARAM_STR);
            
            $sentencia->execute();
    
            // Obtener el último ID insertado
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
                return new Perro(
                    $row['Id'],
                    $row['Dni_Cliente'],
                    $row['Nombre'],
                    $row['Fecha_Nto'],
                    $row['Raza'],
                    $row['Peso'],
                    $row['Altura'],
                    $row['Observaciones'],
                    $row['Numero_Chip'],
                    $row['Sexo']
                );
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
                    $perros[] = new Perro(
                        $row['Id'],
                        $row['Dni_Cliente'],
                        $row['Nombre'],
                        $row['Fecha_Nto'],
                        $row['Raza'],
                        $row['Peso'],
                        $row['Altura'],
                        $row['Observaciones'],
                        $row['Numero_Chip'],
                        $row['Sexo']
                    );
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
