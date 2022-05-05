<!-- Approach -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Periodos Registrados
    </div>
    <div class="card-body">
        <p>Puedes ver los periodos escolares registrados</p>
    </div>
</div>

<div class="card-body">
    <div class="table-responsive">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>#</th>
                <th>Periodo</th>
            </tr>
            </thead>
            <tbody>
            <?php while ($per = $periodo->fetch_object()): ?>
                <tr>
                    <td><?= $per->idPeriodo ?></td>
                    <td><?= $per->NombrePeriodo ?></td>

                </tr>
            <?php endwhile; ?>
            </tbody>

        </table>

    </div>
</div>



