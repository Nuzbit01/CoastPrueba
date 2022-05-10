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

} elseif ($_GET['controller'] == "usuario" && $_GET['action'] == 'registroAlumno') {
    require 'views/alumno/registroAlumno.php';
} elseif ($_GET['controller'] == "usuario" && $_GET['action'] == 'registroProfesor') {
    require 'views/profesor/registroProfesor.php';
} else {
    require_once 'views/layout/header.php';
    include_once 'views/layout/side.php';
    include_once 'views/layout/nav.php';

    $db = Database::connect();
    function show_error()
    {
        //$error = new errorController();
        //$error->index();
        header('Location: ' . base_url);
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
                <a class="btn btn-primary" href="<?= base_url ?>usuario/logout">Salir</a>
            </div>
        </div>
    </div>
</div>


<!-- Logout Modal-->
<!-- Button trigger modal -->


<!-- Modal Periodo-->
<div class="modal fade" id="addPeriodo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Agregar Periodo</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <!--BodyMODAL-->
                <form method="post" action="<?= base_url ?>admin/addPeriodo">
                    <label>Nombre del Periodo:</label>
                    <input name="periodo" required class="form-control form-control-user"
                           id="exampleFirstName"
                           placeholder="Ej: Otoño 2022">

            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal" aria-label="Close">Cancelar
                </button>
                <input type="submit" class="btn btn-success" value="Agregar">
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Profesor-->
<div class="modal fade" id="addProfesor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Agregar Profesor</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <!--BodyMODAL-->
                <form method="post" action="<?= base_url ?>admin/addProfesor" class="row g-3">
                    <input type="hidden" name="tipo" value="2">
                    <div class="col-md-4">
                        <label for="nombre" class="form-label">Nombre(s):</label>
                        <input type="text" name="nombre" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-4">
                        <label for="appPaterno" class="form-label">Apellido Paterno:</label>
                        <input type="text" name="appPaterno" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-4">
                        <label for="appMaterno" class="form-label">Apellido Materno:</label>
                        <input type="text" name="appMaterno" class="form-control" id="inputPassword4">
                    </div>

                    <div class="col-12 mt-2">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" name="email" class="form-control" id="inputAddress" placeholder="">
                    </div>
                    <div class="col-12 mt-2">
                        <h6 class=" card shadow mb-4 border-left-danger" style="text-align: center; color:#0c0c0c">LA
                            CONTRASEÑA DEL PROFESOR SERÁ ENVIADA AL CORREO CON EL QUE FUE REGISTRADO</h6>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal" aria-label="Close">Cancelar
                </button>
                <input type="submit" class="btn btn-success" value="Agregar">
            </div>
            </form>

        </div>
    </div>


    <?php
    ob_end_flush();
    ?>

