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
}
