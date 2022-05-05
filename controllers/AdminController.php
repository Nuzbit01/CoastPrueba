<?php
require 'models/admin.php';
require 'models/usuario.php';
require 'models/periodo.php';

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
            $appMAterno = isset($_POST['appMaterno']) ? $_POST['appMaterno'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
        }
    }

}