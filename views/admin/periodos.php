<!-- Approach -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Periodos Registrados.
    </div>
    <div class="card-body">
        <p>Puedes ver los periodos escolares registrados.</p>
    </div>
</div>

<div class="card-body">
    <div class="table-responsive">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>#</th>
                <th>Periodo</th>
                <th>Editar</th>
                <th>Eliminar</th>

            </tr>
            </thead>
            <tbody>
            <?php while ($per = $periodo->fetch_object()): ?>
                <tr>
                    <td><?= $per->idPeriodo ?></td>
                    <td><?= $per->NombrePeriodo ?></td>

                    <td>
                        <a class="btn btn-success btn-icon-split center" data-toggle="modal" data-target="#editPeriodo">
                <span class="icon text-white-50">
                    <i class="fas fa-pen"></i>
                </span>

                        </a>
                    </td>
                    <td>

                        <button type="button" id="btnmodal" class="btn btn-primary" data-toggle="modal" data-target="#borrarPeriodo"
                        data-nom="jose">Eliminar </button>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>

        </table>

    </div>
</div>

<!--    EDITAR PERIODO-->

<div class="modal fade" id="editPeriodo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Editar Periodo</h5>
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


<script>
    $(document).on("click", "#btnmodal", function () {
        var nombre = $(this).data('nom');

        $("#nombre").val(nombre);

    })
</script>

<!--ELIMINAR PERIODO-->
<div class="modal fade" id="borrarPeriodo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="staticBackdropLabel">Eliminar Periodo</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <!--BodyMODAL-->
                <input type="text" id="nombre">
                <h6 id="id">¿Está seguro de eliminar el periodo: ?</h6>

            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal" aria-label="Close">Cancelar
                </button>

                <a class="btn btn-secondary" href="<?= base_url ?>admin/borrarPeriodo">Eliminar</a>

            </div>

        </div>

    </div>
</div>



