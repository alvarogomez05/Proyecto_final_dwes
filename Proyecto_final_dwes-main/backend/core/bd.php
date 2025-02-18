<?php

class BD
{

    private $servername = "localhost";
    private $database = "perros";
    private $username = "root";
    private $password = "";
    private $conexion;
    private $mensajeerror = "";

    # Conectar a la base de datos

    public function getConexion()
    {

        try {
            $this->conexion = new PDO(
                "mysql:host=$this->servername;dbname=$this->database;charset=utf8",
                $this->username,
                $this->password
            );
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // comprobar que la conexion a la bdd funciona
            // echo 'Conexión a la bd establecida';
            return $this->conexion;
        } catch (PDOException $e) {
            $this->mensajeerror = $e->getMessage();
        }
    }

    # Desconectar la base de datos

    public function closeConexion()
    {
        $this->conexion = null;
    }

    # Devolver mensaje de error, por si hay error.

    public function getMensajeError()
    {
        return $this->mensajeerror;
    }
}
