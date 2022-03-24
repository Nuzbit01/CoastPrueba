<?php
ob_start();
session_start();
?>
<?php
require_once 'autoload.php';
require 'config/db.php';
require_once 'config/parameters.php';



///////////////////////////////
if (!isset($_GET['controller']) && !isset($_GET['action'])) {
    //MUESTRAME EL LOGIN
    //$db = Database::connect();
    require 'login.php';

}elseif($_GET['controller']== "usuario" && $_GET['action']=='registroAlumno'){
        require 'views/usuario/registroAlumno.php';
}elseif ($_GET['controller']== "usuario" && $_GET['action']=='registroProfesor'){
            require 'views/usuario/registroProfesor.php';
}else {
    require_once 'views/layout/header.php';
    include_once 'views/layout/side.php';
    include_once 'views/layout/nav.php';

    $db = Database::connect();
    function show_error()
    {
        $error = new errorController();
        $error->index();
    }

    if (isset($_GET['controller'])) {//AGARRA EL NOMBRE DEL CONTROLADOR PASADO POR GET
        $nombrecontrolador = $_GET['controller'] . 'Controller';//LO CONCATENA PARA NOMBRECONTROLER.CONTROLLER
        //var_dump($nombrecontrolador);
        //              //'Usuario'.
    } elseif (isset($_GET['controller']) && !isset($_GET['action'])) {//SI EXISTE CONTROLADOR PERO NO ACCION
        $nombrecontrolador = controller_default;//
    } else {
        show_error();
        exit();
    }
    if (class_exists($nombrecontrolador)) {
        $controlador = new $nombrecontrolador();

        //                                        Objeto, MEtodo
        if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
            $action = $_GET['action'];//mandar a llamar el nombre de la accion
            $controlador->$action();//a controlador le da action(nombreMetodo)
        } elseif (isset($_GET['controller']) && !isset($_GET['action'])) {
            $action_default = action_default;
            $controlador->$action_default;
        } else {
            show_error();
        }
    } else {
        show_error();
    }
    require_once 'views/layout/footer.php';
}
?>


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cerrar sesión</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecciona "Salir" si estas seguro de salir de tu sesión.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="views/usuario/login.php">Salir</a>
                </div>
            </div>
        </div>
    </div>

<?php
ob_end_flush();
?>