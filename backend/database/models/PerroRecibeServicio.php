<?php
class PerroRecibeServicio {
    public $srCod;
    public $codServicio;
    public $idPerro;
    public $fecha;
    public $incidencias;
    public $precioFinal;
    public $dni;

    public function __construct($srCod, $codServicio, $idPerro, $fecha, $incidencias, $precioFinal, $dni) {
        $this->srCod = $srCod;
        $this->codServicio = $codServicio;
        $this->idPerro = $idPerro;
        $this->fecha = $fecha;
        $this->incidencias = $incidencias;
        $this->precioFinal = $precioFinal;
        $this->dni = $dni;
    }

      // Getters
      public function getSrCod() {
        return $this->srCod;
    }

    public function getCodServicio() {
        return $this->codServicio;
    }

    public function getIdPerro() {
        return $this->idPerro;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getIncidencias() {
        return $this->incidencias;
    }

    public function getPrecioFinal() {
        return $this->precioFinal;
    }

    public function getDni() {
        return $this->dni;
    }

    // Setters
    public function setSrCod($srCod) {
        $this->srCod = $srCod;
    }

    public function setCodServicio($codServicio) {
        $this->codServicio = $codServicio;
    }

    public function setIdPerro($idPerro) {
        $this->idPerro = $idPerro;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setIncidencias($incidencias) {
        $this->incidencias = $incidencias;
    }

    public function setPrecioFinal($precioFinal) {
        $this->precioFinal = $precioFinal;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }
}
?>
