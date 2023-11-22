<?php

class Partidos
{
    public $equipo;
    public $ganados;
    public $perdidos;
    public $empatados;

    public function __construct()
    {
    }
    public function getEquipo()
    {
        return $this->equipo;
    }
    public function setEquipo($equipo)
    {
        $this->equipo = $equipo;

        return $this;
    }
    public function getGanados()
    {
        return $this->ganados;
    }
    public function setGanados($ganados)
    {
        $this->ganados = $ganados;

        return $this;
    }
    public function getPerdidos()
    {
        return $this->perdidos;
    }
    public function setPerdidos($perdidos)
    {
        $this->perdidos = $perdidos;

        return $this;
    }
    public function getEmpatados()
    {
        return $this->empatados;
    }
    public function setEmpatados($empatados)
    {
        $this->empatados = $empatados;

        return $this;
    }
    public function darResultado()
    {
        $pGanados = $this->ganados;
        $pEmpatados = $this->empatados;
        $pPerdidos = $this->perdidos;
        $res = ($pGanados * 3) + ($pEmpatados * 1) + ($pPerdidos * 0);
        return $res;
    }
}
