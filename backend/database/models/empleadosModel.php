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

    public function save($dni, $email, $password, $rol, $nombre, $apellido1, $apellido2, $calle, $numero, $cp, $poblacion, $provincia, $tlfno, $profesion)
    {
        try {
            $sql = "INSERT INTO empleados (Dni, Email, Password, Rol, Nombre, Apellido1, Apellido2, Calle, Numero, Cp, Poblacion, Provincia, Tlfno, Profesion) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $dni);
            $sentencia->bindParam(2, $email);
            $sentencia->bindParam(3, $password);
            $sentencia->bindParam(4, $rol);
            $sentencia->bindParam(5, $nombre);
            $sentencia->bindParam(6, $apellido1);
            $sentencia->bindParam(7, $apellido2);
            $sentencia->bindParam(8, $calle);
            $sentencia->bindParam(9, $numero);
            $sentencia->bindParam(10, $cp);
            $sentencia->bindParam(11, $poblacion);
            $sentencia->bindParam(12, $provincia);
            $sentencia->bindParam(13, $tlfno);
            $sentencia->bindParam(14, $profesion);
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
                // Actualiza la creación del empleado con los nuevos campos
                $empleado = new Empleado(
                    $row['Dni'], $row['Email'], $row['Password'], $row['Rol'], 
                    $row['Nombre'], $row['Apellido1'], $row['Apellido2'], 
                    $row['Calle'], $row['Numero'], $row['Cp'], 
                    $row['Poblacion'], $row['Provincia'], $row['Tlfno'], $row['Profesion']
                );
                return $empleado;
            }
            return null;
        } catch (PDOException $e) {
            return "ERROR AL CARGAR.<br>" . $e->getMessage();
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
                    // Actualiza la creación de empleados con los nuevos campos
                    array_push($empleados, new Empleado(
                        $row['Dni'], $row['Email'], $row['Password'], $row['Rol'], 
                        $row['Nombre'], $row['Apellido1'], $row['Apellido2'], 
                        $row['Calle'], $row['Numero'], $row['Cp'], 
                        $row['Poblacion'], $row['Provincia'], $row['Tlfno'], $row['Profesion']
                    ));
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

