<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<?php while($curso=$cursos->fetch_object()):?>
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <!--                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">-->
                        <!--                                                Análisis y Bases de Datos</div>-->
                        <div class="h5 mb-0 font-weight-bold text-primary"><?=var_dump($curso)?></div>
                        <?=$_SESSION['identity']->Email?>
                        <?=$_SESSION['identity']->Nombres?>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-laptop-code fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endwhile;?>

</div><!-- Content Row -->
<hr>
<h1 class="h3 mb-2 text-gray-800">Cursos disponibles en este periodo</h1>
<p class="mb-4">Estos son los cursos disponibles en los que te puedes inscribir para este periodo.</p>
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Profesor</th>
                    <th>Fecha</th>

                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Profesor</th>
                    <th>Fecha</th>
                </tr>
                </tfoot>
                <tbody>
                <tr>
                    <td>Apps Moviles</td>
                    <td>Erika Mártinez Mirón</td>
                    <td>2011/04/25</td>

                </tr>
                <tr>
                    <td>Bases de datos</td>
                    <td>Erika Mártinez Mirón</td>
                    <td>2011/07/25</td>
                </tr>
                <tr>
                    <td>Proyectos 1+ D</td>
                    <td>Erika Mártinez Mirón</td>
                    <td>2009/01/12</td>

                </tr>
                <tr>
                    <td>Ing. de Software</td>
                    <td>Erika Mártinez Mirón</td>

                    <td>2012/03/29</td>

                </tr>
                <tr>
                    <td>Apps Moviles</td>
                    <td>Erika Mártinez Mirón</td>
                    <td>2008/11/28</td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>




