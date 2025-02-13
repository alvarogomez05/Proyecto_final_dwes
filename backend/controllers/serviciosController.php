<?php

    require_once '../database/models/serviciosModel.php';

    class ServiciosController{
        private $servicioService;


        public function __construct(){
            $this->servicioService=new ServiciosService();
        }

        public function getServicios(){
            return $this->servicioService->obtenerTodosLosServicios();
        }

        public function getServicioId($id){
            return $this->servicioService->obtenerServicioPorId($id);
        }

        public function borrarServicio($id){
            return $this->servicioService->borrarServicio($id);
        }

        public function guardarServicio($id,$nombre,$precio){
            return $this->servicioService->guardarServicio($id,$nombre,$precio);
        }
    }