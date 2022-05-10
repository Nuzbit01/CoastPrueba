<div class="container">

    <div class="card o-hidden border-1 shadow-lg my-4">
        <div class="card-body pt-2  ">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg-12">

                    <div class="p-5">
                        <div class=" d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class=" h3 mb-0 text-gray-800">Editar Datos de Profesor</h1>
                        </div>

                        <div class="text-center ">
                            <p class="align-baseline small font-weight-bold text-primary text-uppercase text-gray-800">
                                Estas en el apartado de edición de datos de profesor, ingresalos correctamente</p>

                        </div>
                        <hr>
                        <form action="<?=base_url?>admin/editarProfesor" method="post" class="row g-3">
                            <?php while ($proedit = $obtener->fetch_object()):  ?>
                            <div class="col-md-4">
                                <input type="hidden" name="id" value="<?=$proedit->idUsuario?>">
                                <label for="inputCity" class="form-label">Nombre(s):</label>
                                <input type="text" class="form-control" id="inputName" name="nombre"
                                      value="<?=$proedit->Nombres?>">
                            </div>
                            <div class="col-md-4">
                                <label for="inputCity" class="form-label">Apellido Paterno:</label>
                                <input type="text" class="form-control" id="inputName" name="aPaterno"
                                       value="<?=$proedit->ApPaterno?>">
                            </div>
                            <div class="col-md-4">
                                <label for="inputZip" class="form-label">Apellido Materno:</label>
                                <input type="text" class="form-control" id="inputName" name="aMaterno"
                                       value="<?=$proedit->ApMaterno?>">
                            </div>

                            <div class="col-md-6 mb-2">
                                <label for="inputEmail4" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="inputEmail4" name="email" value="<?=$proedit->Email ?>">
                            </div>
                            <?php endwhile;?>

                        <input  type="submit" class="btn btn-primary btn-user btn-block mt-2" value="Modificar Registro">

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>