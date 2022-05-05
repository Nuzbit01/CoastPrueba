<!-- Approach -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Bitacora de Administrador
    </div>
    <div class="card-body">
        <p>Puedes ver las ultimas actividades que has hecho</p>
    </div>


</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ultimas Acciones</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Actividad</th>
                </tr>
                </thead>
                <tbody>
                <?php while ($bita = $bitacora->fetch_object()): ?>
                    <tr>
                        <td><?= $bita->Fecha ?></td>
                        <td><?= $bita->Bitacora ?></td>

                    </tr>
                <?php endwhile; ?>
                </tbody>

            </table>

        </div>
    </div>
</div>

