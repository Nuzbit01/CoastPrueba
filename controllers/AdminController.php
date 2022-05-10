<?php
require 'models/admin.php';
require 'models/usuario.php';
require 'models/periodo.php';
require 'models/profesor.php';


class AdminController
{

    public function dashboard()
    {
        require_once 'views/admin/dashboard.php';
    }

    public function periodos()
    {
        $periodos = new Periodo();
        $periodo = $periodos->obtenerPeriodos();
        //var_dump($periodo);
        require 'views/admin/periodos.php';
    }

    public function profesores(){
        $profesores= new Profesor();
        $profe=$profesores->getAll();
        require 'views/admin/profesores.php';

    }

    public function bitacora()
    {
        $bita = new Admin();
        $iduseradm = intval(($_SESSION['dataAdm']->idUsuario));

        $bita->setFkUsuarioIdUsuario($iduseradm);
        $bitacora = $bita->obtenerBitacoras();
        // var_dump($bitacora);


        require 'views/admin/bitacora.php';

    }

    public function addPeriodo()
    {
        if (isset($_POST)) {

            $nombre = isset($_POST['periodo']) ? $_POST['periodo'] : false;

            $periodo = new Periodo();
            $periodo->setNombrePeriodo($nombre);
            $save = $periodo->agregarPeriodo();
            if ($save) {
                $_SESSION['periodo'] = "complete";

            } else {
                $_SESSION['periodo'] = "failed";
            }

            var_dump($_SESSION['periodo']);
            //die();
            header('Location: ' . base_url . "admin/periodos");
        }
    }

    public function addProfesor()
    {
        if (isset($_POST)) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $appPaterno = isset($_POST['appPaterno']) ? $_POST['appPaterno'] : false;
            $appMaterno = isset($_POST['appMaterno']) ? $_POST['appMaterno'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $tipo= isset($_POST['tipo']) ? $_POST['tipo'] :false;
            $usuario = new Usuario();
            $usuario->setNombres($nombre);
            $usuario->setAppaterno($appPaterno);
            $usuario->setApmaterno($appMaterno);
            $usuario->setEmail($email);
            $usuario->setTipo($tipo);

            $save=$usuario->altaProfesor();

            $ProNuevo= $usuario->obtenerProfesor();
            $idProNuevo= intval($ProNuevo);

            $profesor= new Profesor();
            $profesor->setFkUsuarioIdUsuario($idProNuevo);
            $nuevo=$profesor->altaProfesor();

            //OJO CON REDIRECCION
            header('Location: '. base_url.'admin/profesores');

        }
    }

    /*public function borrarPeriodo(){
        var_dump($_GET);
        die();
        if (isset($_GET['id'])){
            $id=$_GET['id'];
            $periodo= new Periodo();
            $periodo->setIdPeriodo($id);
            $delete= $periodo->delete();

        }
    }*/

/*****************METODOS PARA PROFESOR**********************************************/
    public function borrarProfesor(){
       // var_dump($_GET);
        $id=intval($_GET['id']);
        var_dump($id);
        $profe_eliminado= new Usuario();
        $profe_eliminado->setIdUsuario($id);
        $delete= $profe_eliminado->borrarProfesor();
        header('Location: '.base_url.'admin/profesores');

    }


    public function consultarProfesor(){

        $id=intval($_GET['id']);

        $profe= new Usuario();
        $profe->setIdUsuario($id);
        $obtener = $profe->getOneProfe();
        require 'views/admin/editarProfesor.php';
    }

    public function editarProfesor(){
        if(isset($_POST)){

            $id=isset($_POST['id']) ? $_POST['id'] : false;
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $aPaterno = isset($_POST['aPaterno']) ? $_POST['aPaterno'] : false;
            $aMaterno = isset($_POST['aMaterno']) ? $_POST['aMaterno'] : false;
            $email=isset($_POST['email']) ? $_POST['email'] : false;

            $editado= new Usuario();
            $editado->setIdUsuario($id);
            $editado->setNombres($nombre);
            $editado->setAppaterno($aPaterno);
            $editado->setApmaterno($aMaterno);
            $editado->setEmail($email);

            $edit=$editado->editarProfesor();

            $editado = new Profesor();
            $profe=$editado->getAll();
        }
        require 'views/admin/profesores.php';
    }
}