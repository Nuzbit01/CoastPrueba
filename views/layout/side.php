
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url?>alumno/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CoAsT <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
<!--    BOTONES DE ALUMNO-->
    <li class="nav-item active">
        <a class="nav-link" href="<?=base_url?>alumno/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?=base_url?>curso/cursosDisponibles">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Cursos Disponibles</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?=base_url?>alumno/Cursos">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Mis Cursos</span></a>
    </li>
    <!--  FIN BOTONES DE ALUMNO-->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!--    BOTONES DE ADMINISTRADOR-->
    <li class="nav-item active">
        <a class="nav-link" href="<?=base_url?>admin/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard Adm</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?=base_url?>admin/periodos">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Periodos</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?=base_url?>admin/bitacora">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Bitacora</span></a>
    </li>
    <!--    FIN BOTONES DE ADMIN-->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<div id="content-wrapper" class="d-flex flex-column">