<?php require_once 'views/layout/header.php' ?>
<?php include_once 'views/layout/side.php' ?>
<?php include_once 'views/layout/nav.php' ?>
<?php include_once 'views/layout/contenido.php'; ?>
<?php require_once 'views/layout/footer.php'; ?>




















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

