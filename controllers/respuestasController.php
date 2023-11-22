<?php
require_once "models/respuestas.php";

class RespuestasController{
    public function registrar()
    {
        require_once "views/respuestas/respuestas.php";
    }
    public function guardar()
    {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
        $resCorrectas = isset($_POST['resCorrectas']) ? $_POST['resCorrectas'] : false;
        $resIncorrectas = isset($_POST['resIncorrectas']) ? $_POST['resIncorrectas'] : false;
        $resBlanco = isset($_POST['resBlanco']) ? $_POST['resBlanco'] : false;

        if ($nombre && $resCorrectas && $resIncorrectas && $resBlanco) {
            $respuesta = new Respuestas();
            $respuesta->setNombre($nombre);
            $respuesta->setResCorrectas($resCorrectas);
            $respuesta->setResIncorrectas($resIncorrectas);
            $respuesta->setResBlanco($resBlanco);
            $respuesta->darResultado();
        }
        require_once "views/respuestas/muestraResultados.php";
    }
}