<?php
require 'models/curso.php';
class cursoController
{
    public function index()
    {

        require_once 'views/alumno/misCursos.php';
    }

    public function misCursos(){
        require_once 'views/alumno/cursos.php';
    }

    public function cursosDisponibles(){
        require 'views/cursos/cursosdisponibles.php';
    }
}
?>