<?php
require 'models/usuario.php';
require_once 'models/alumno.php';
require 'models/curso.php';

class AlumnoController
{
    public function dashboard()
    {
        $curso = new Curso();
        $cursos = $curso->getOnes();

        require_once 'views/alumno/misCursos.php';
    }

    public function Cursos()
    {
        require_once 'views/alumno/cursos.php';
    }

    public function perfil()
    {
        //vista perfil
        require 'views/alumno/perfil.php';
    }

    public function perfiledit()
    {

        if (isset($_POST)) {
            //todas mi variables de formulario

            $id = ($_POST['idUser']);
            $tipo=$_POST['tipo'];
            $edit = true;

            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $aPaterno = isset($_POST['aPaterno']) ? $_POST['aPaterno'] : false;
            $aMaterno = isset($_POST['aMaterno']) ? $_POST['aMaterno'] : false;
            $genero = isset($_POST['genero']) ? $_POST['genero'] : false;
            $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : false;
            $estado = isset($_POST['estado']) ? $_POST['estado'] : false;

            $porcentaje = isset($_POST['porcentaje']) ? $_POST['porcentaje'] :false;
            $carrera = isset($_POST['carrera']) ? $_POST['carrera'] :false;

            $usuario = new Usuario();
            $usuario->setIdUsuario($id);

            $usuario->setNombres($nombre);
            $usuario->setAppaterno($aPaterno);
            $usuario->setApmaterno($aMaterno);
            $usuario->setGenero($genero);
            $usuario->setFechaNacimiento($fecha);
            $usuario->setEstado($estado);
            $usuario->setTipo($tipo);

            $user = $usuario->perfiledit();


            $alumno = new Alumno();
            $alumno->setFkUsuarioIdUsuario($id);
            $alumno->setPorcentaje($porcentaje);
            $alumno->setCarrera($carrera);
            $alu=$alumno->editalumno();

            //var_dump($user);

            if ($user) {
                //$newusuario = new Usuario();
                //$newusuario->setEmail($_SESSION['identity']->Email);
                //$newal= new Alumno();
                //var_dump($usuario);

                //Creo una variable donde se guarda los registros solicitados al modelo(datos del usuario(tal y como esta eb bd))
                $identity = $usuario->getOne();
                $identityAl= $alumno->getOneAl();
                //Si existe y es un objeto la var identity
                if ($identity && is_object($identity)) {
                    //creame una variable de sesion que sirve para compartir datos sin crear variables get/post
                    unset($_SESSION['identity']);
                    $_SESSION['identity'] = $identity;
                    $_SESSION['dataAlu']=$identityAl;
                }
                header('Location: ' . base_url . 'alumno/perfil');

            } else {//fin de: si llegan por post
                header('Location: ' . base_url . 'alumno/perfil');
            }

        }
    }


}//llaveClase

?>