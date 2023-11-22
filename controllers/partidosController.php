<?php
require_once "models/partidos.php";

class PartidosController{
    public function registrar()
    {
        require_once "views/partidos/partidos.php";
    }
    public function guardar()
    {
        $equipo = isset($_POST['equipo']) ? $_POST['equipo'] : false;
        $ganados = isset($_POST['ganados']) ? $_POST['ganados'] : false;
        $empatados = isset($_POST['empatados']) ? $_POST['empatados'] : false;
        $perdidos = isset($_POST['perdidos']) ? $_POST['perdidos'] : false;

        if ($equipo && $ganados && $empatados && $perdidos) {
            $partido = new Partidos();
            $partido->setEquipo($equipo);
            $partido->setGanados($ganados);
            $partido->setEmpatados($empatados);
            $partido->setPerdidos($perdidos);
            $partido->darResultado();
        }
        require_once "views/partidos/muestraPartidos.php";
    }
}