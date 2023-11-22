<?php

class Respuestas{
    public $nombre;
    public $resCorrectas;
    public $resIncorrectas;
    public $resBlanco;

    public function __construct()
    {
        
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
    public function getResCorrectas()
    {
        return $this->resCorrectas;
    } 
    public function setResCorrectas($resCorrectas)
    {
        $this->resCorrectas = $resCorrectas;

        return $this;
    } 
    public function getResIncorrectas()
    {
        return $this->resIncorrectas;
    } 
    public function setResIncorrectas($resIncorrectas)
    {
        $this->resIncorrectas = $resIncorrectas;

        return $this;
    } 
    public function getResBlanco()
    {
        return $this->resBlanco;
    } 
    public function setResBlanco($resBlanco)
    {
        $this->resBlanco = $resBlanco;

        return $this;
    }
    public function darResultado(){
        $correctas = $this->resCorrectas;
        $incorrectas = $this->resIncorrectas;
        $blanco = $this->resBlanco;
        $res = ($correctas * 4)+ ($incorrectas * (-1))+($blanco*0);
        return $res;
    }
    
}