<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CoAsT</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assets/css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php include_once '../layout/side.php' ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->


                <!-- Topbar Search -->


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->


                    <!-- Nav Item - Messages -->


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                            <img class="img-profile rounded-circle"
                                 src="../../img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                </div>

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


            </div>
            <!-- /.container-fluid -->
        </div>


        <!-- Footer -->
        <?php require_once '../layout/footer.php'; ?>
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
</div>
