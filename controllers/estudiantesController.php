<?php
require_once"models/estudiantes.php";
class EstudiantesController{
    
    public function registrar(){
        require_once"views/estudiantes/notas.php";
    }
    public function guardar(){
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
        $parcial1 = isset($_POST['parcial1']) ? $_POST['parcial1'] : false;
        $parcial2 = isset($_POST['parcial2']) ? $_POST['parcial2'] : false;
        $parcial3 = isset($_POST['parcial3']) ? $_POST['parcial3'] : false;

        if ($nombre && $parcial1 && $parcial2 && $parcial3){
            $estudiante = new Estudiantes();
            $estudiante->setNombre($nombre);
            $estudiante->setParcial1($parcial1);
            $estudiante->setParcial2($parcial2);
            $estudiante->setParcial3($parcial3);
            $estudiante->promedio();
            
        }
        require_once "views/estudiantes/promedio.php";
    }
}