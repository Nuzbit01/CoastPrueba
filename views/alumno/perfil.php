<div class="container">

    <div class="card o-hidden border-1 shadow-lg my-4" >
        <div class="card-body pt-2  " >
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg-12">

                    <div class="p-5">
                        <div class=" d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class=" h3 mb-0 text-gray-800">Mi Perfil</h1>
                        </div>

                        <div class="text-center ">
                            <p class="align-baseline small font-weight-bold text-primary text-uppercase text-gray-800">
                                Estas en el apartado "Perfil", donde podrás actualizar tus datos personales.
                                Recuerda que la información que proporciones es y será tratada con confidencialidad.</p>
                        </div>
                        <hr>
                        <form action="<?=base_url?>alumno/perfiledit" class="user">
                            <div class="form-group row mb-3">
                                <div class="col-sm-4  mb-4 mb-sm-5">
                                    <input name="nombre" required type="text" class="form-control form-control-user" id="exampleFirstName"
                                           placeholder="Nombres(s)">
                                </div>
                                <div class="col-sm-4 mb-5 mb-sm-5">
                                    <input name="apaterno" required type="text" class="form-control form-control-user" id="exampleLastName"
                                           placeholder="Apellido Paterno">
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-5">
                                    <input name="aPaterno" required type="text" class="form-control form-control-user" id="exampleLastName"
                                           placeholder="Apellido Materno">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-5">
                                    <input name="genero" required type="text" class="form-control form-control-user" id="exampleFirstName"
                                           placeholder="Genero">
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-5">
                                    <input name="fecha" required type="date" class="form-control form-control-user" id="exampleLastName"
                                           placeholder="Fecha de nacimiento">
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-5">
                                    <input name="estado" required type="text" class="form-control form-control-user" id="exampleLastName"
                                           placeholder="Estado de Procedencia">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-5">
                                    <input name="carrera" required type="text" minlength=0 maxlength=2 class="form-control form-control-user"
                                           id="exampleInputPassword" placeholder="Carrera">
                                </div>
                                <div class="col-sm-6">
                                    <input name="porcentaje" required type="text" minlength=0 maxlength=2 class="form-control form-control-user"
                                           id="exampleRepeatPassword" placeholder="Porcentaje">
                                </div>
                            </div>

                            <div class="col-sm-5 mb-4 mb-sm-1 pb-4">
                                <label for="formFile" class="form-label">Selecciona una imagen de perfil:</label>
                                <input  type="file" id="formFile">
                            </div>
                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Completar Registro">

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
