<!-- Approach -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Profesores registrados
    </div>
    <div class="card-body">
        <p>Puedes ver los nombres de los profesores que estan registrados en la plataforma</p>
    </div>


</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Email</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <?php $contaid = 1; ?>
                <tbody>
                <?php while ($pro = $profe->fetch_object()): ?>
                    <?php if ($pro->Activado == 1): ?>

                        <tr>
                            <td><?= $contaid ?></td>
                            <td><?= $pro->Nombres ?></td>
                            <td><?= $pro->ApPaterno ?></td>
                            <td><?= $pro->ApMaterno ?></td>
                            <td><?= $pro->Email?></td>
                            <td><a href="<?= base_url ?>admin/consultarProfesor?id=<?= $pro->idUsuario?>" class="btn btn-success btn-icon-split center">

                                    <span class="text">Editar</span>
                                </a>
                            </td>

                            <td><a href="<?= base_url ?>admin/borrarProfesor?id=<?= $pro->idUsuario ?>"
                                   class="btn btn-danger btn-icon-split center">
                                    <span class="text">Eiminar</span>
                                </a>
                            </td>

                        </tr>
                        <?php $contaid = $contaid + 1; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
                </tbody>

            </table>

        </div>
    </div>
</div>

