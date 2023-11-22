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
            $Respuesta = new Respuestas();
            $Respuesta->setNombre($nombre);
            $Respuesta->setResCorrectas($resCorrectas);
            $Respuesta->setResIncorrectas($resIncorrectas);
            $Respuesta->setResBlanco($resBlanco);
            // $Respuesta->promedio();
        }
        require_once "views/estudiantes/promedio.php";
    }
}