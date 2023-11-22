<?php

class Estudiantes{
    public $nombre;
    public $parcial1;
    public $parcial2;
    public $parcial3;

    public function __construct()
    {
        // $this->nombre = $nombre;
        // $this->parcial1 = $parcial1;
        // $this->parcial2 = $parcial2;
        // $this->parcial3 = $parcial3;
    }
    

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getParcial1()
    {
        return $this->parcial1;
    }
    public function setParcial1($parcial1)
    {
        $this->parcial1 = $parcial1;

        return $this;
    }

    public function getParcial2()
    {
        return $this->parcial2;
    }
    public function setParcial2($parcial2)
    {
        $this->parcial2 = $parcial2;

        return $this;
    }

    public function getParcial3()
    {
        return $this->parcial3;
    }
    public function setParcial3($parcial3)
    {
        $this->parcial3 = $parcial3;

        return $this;
    }
    public function promedio(){
        $p1 = $this->parcial1;
        $p2 = $this->parcial2;
        $p3 = $this->parcial3;

        $res = ($p1+$p2+$p3)/3;
        return $res;
    }
}