<!-- AUTOR: Sara El Hasnaoui y Nicolas Cruz -->
<?php

class Actividad
{
    private $id;
    private $descripcion;
    private $fecha;
    private $lugar;

    function __construct($descripcion, $id, $lugar, $fecha)
    {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->fecha = $fecha;
        $this->lugar = $lugar;
    }
    public function getId()
    {
        return $this->id;
    }


    public function getDescripcion()
    {
        return $this->descripcion;
    }


    public function getFecha()
    {
        return $this->fecha;
    }

    public function getLugar()
    {
        return $this->lugar;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function setLugar($lugar)
    {
        $this->lugar = $lugar;
    }

    function mostrar()
    {
        echo "La actividad " . ($this->descripcion);
        echo " " . ($this->id);
        echo " comenzará en: " . ($this->lugar);
        echo " el: " . ($this->fecha) . "<br />";
    }
}
class Montanya extends Actividad
{
    private static $monitor = " Juana Lukin";
    private $cuota;
    function __construct($descripcion, $id, $lugar, $fecha, $monitor, $cuota)
    {
        parent::__construct($descripcion, $id, $lugar, $fecha);
        self::$monitor;
        $this->cuota = $cuota;
    }
    public function getCuota()
    {
        return $this->cuota;
    }


    public function getMonitor()
    {
        return $this->monitor;
    }

    public function setCuota($cuota)
    {
        $this->cuota = $cuota;
    }

    public function setMonitor($monitor)
    {
        $this->monitor = $monitor;
    }

    function mostrar()
    {
        echo parent::mostrar();
        echo " y la realiza " . montanya::$monitor;
        echo " que cobra a la hora: " . ($this->cuota) . " €" . "<br/>";
    }
}
