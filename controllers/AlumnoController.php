<?php
require_once 'models/alumno.php';
require 'models/curso.php';
class AlumnoController
{
    public function dashboard()
    {
        $curso= new Curso();
        $cursos=  $curso->getOnes();

        require_once 'views/alumno/misCursos.php';
    }

    public function Cursos(){
        require_once 'views/alumno/cursos.php';
    }

    public function perfil(){
        //vista perfil
        require 'views/alumno/perfil.php';
    }

    public function perfiledit(){

        if(isset($_POST)){

        }else{

        }

    }
}
?>