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

                        <div class="h5 mb-0 font-weight-bold text-primary"><?=$curso->NombreCurso?></div>
                        <div class="font-weight-bold text-primary text-uppercase text-gray-800">$215,000</div>

                        <?=$_SESSION['identity']->Email?>
                        <?=$_SESSION['identity']->Nombres?>
                        <?=$_SESSION['identity']->Tipo?>

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




