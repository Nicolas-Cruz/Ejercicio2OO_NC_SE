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






    
}
