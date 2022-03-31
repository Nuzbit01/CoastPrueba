<div class="container">

    <div class="card o-hidden border-1 shadow-lg my-4">
        <div class="card-body pt-2  ">
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
                        <form action="<?= base_url ?>profesor/perfiledit" class="user" method="post">

                            <input type="hidden" name="idUser"
                                   value="<?= !isset($_SESSION['identity']) ? '' : $_SESSION['identity']->idUsuario; ?>">
                            <input type="hidden" name="tipo" value="2">

                            <div class="form-group row mb-3">
                                <div class="col-sm-4  mb-3 mb-sm-2">
                                    <select name="grado" class="custom-select form-control " id="inputGroupSelect01"
                                            required>
                                        <option value="" selected disabled hidden>Grado de estudios: </option>
                                        <option>Licenciatura</option>
                                        <option>Maestría</option>
                                        <option>Doctorado</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <div class="col-sm-4  mb-4 mb-sm-5">
                                    <input name="nombre" required type="text" class="form-control form-control-user"
                                           id="exampleFirstName"
                                           placeholder="Nombres(s)"
                                           value="<?= !isset($_SESSION['identity']) ? '' : $_SESSION['identity']->Nombres; ?>">
                                </div>
                                <div class="col-sm-4 mb-5 mb-sm-5">
                                    <input name="aPaterno" required type="text" class="form-control form-control-user"
                                           id="exampleLastName"
                                           placeholder="Apellido Paterno"
                                           value="<?= !isset($_SESSION['identity']) ? '' : $_SESSION['identity']->ApPaterno; ?>">
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-5">
                                    <input name="aMaterno" required type="text" class="form-control form-control-user "
                                           id="exampleLastName"
                                           placeholder="Apellido Materno"
                                           value="<?= !isset($_SESSION['identity']) ? '' : $_SESSION['identity']->ApMaterno; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-5">
                                    <select name="genero" class="custom-select form-control " id="inputGroupSelect01"
                                            required >

                                        <option selected disabled
                                        >Género</option>

                                        <option value="Femenino"
                                            <?php
                                            if($_SESSION) {
                                                if ($_SESSION['identity']->Genero == 'Femenino') {
                                                    echo 'selected';
                                                } else {
                                                    echo '';
                                                }
                                            }?>>Femenino
                                        </option>

                                        <option value="Masculino"
                                            <?php
                                            if($_SESSION['identity']) {
                                                if($_SESSION['identity']->Genero == 'Masculino'){
                                                    echo 'selected';
                                                }else{
                                                    echo '';
                                                }}
                                            ?>
                                        >Masculino
                                        </option>

                                        <option value="Otro" <?php
                                        if($_SESSION['identity']) {
                                            if($_SESSION['identity']->Genero == 'Otro'){
                                                echo 'selected';
                                            }else{
                                                echo '';
                                            }}?>>
                                            Otro
                                        </option>

                                    </select>

                                </div>

                                <div class="col-sm-4 mb-3 mb-sm-5">
                                    <input name="fecha" required type="date" class="form-control form-control-user"
                                           placeholder="Fecha de nacimiento"
                                           value="<?= !isset($_SESSION['identity']) ? '' : $_SESSION['identity']->FechaNacimiento; ?>">
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-5">
                                    <select name="estado" class="form-control" name="estado" required>

                                        <option value="" selected disabled hidden>Estado De Procedencia:</option>
                                        <option value="Aguascalientes">Aguascalientes</option>
                                        <option value="Baja California">Baja California</option>
                                        <option value="Baja California Sur">Baja California Sur</option>
                                        <option value="Campeche">Campeche</option>
                                        <option value="Chiapas">Chiapas</option>
                                        <option value="Chihuahua">Chihuahua</option>
                                        <option value="CDMX">Ciudad de México</option>
                                        <option value="Coahuila">Coahuila</option>
                                        <option value="Colima">Colima</option>
                                        <option value="Durango">Durango</option>
                                        <option value="Estado de México">Estado de México</option>
                                        <option value="Guanajuato">Guanajuato</option>
                                        <option value="Guerrero">Guerrero</option>
                                        <option value="Hidalgo">Hidalgo</option>
                                        <option value="Jalisco">Jalisco</option>
                                        <option value="Michoacán">Michoacán</option>
                                        <option value="Morelos">Morelos</option>
                                        <option value="Nayarit">Nayarit</option>
                                        <option value="Nuevo León">Nuevo León</option>
                                        <option value="Oaxaca">Oaxaca</option>
                                        <option value="Puebla">Puebla</option>
                                        <option value="Querétaro">Querétaro</option>
                                        <option value="Quintana Roo">Quintana Roo</option>
                                        <option value="San Luis Potosí">San Luis Potosí</option>
                                        <option value="Sinaloa">Sinaloa</option>
                                        <option value="Sonora">Sonora</option>
                                        <option value="Tabasco">Tabasco</option>
                                        <option value="Tamaulipas">Tamaulipas</option>
                                        <option value="Tlaxcala">Tlaxcala</option>
                                        <option value="Veracruz">Veracruz</option>
                                        <option value="Yucatán">Yucatán</option>
                                        <option value="Zacatecas">Zacatecas</option>
                                    </select>

                                </div>
                            </div>



                            <div class="form-group row mb-3">
                                <div class="col-sm-4  mb-4 mb-sm-5">
                                    <input class="form-control form-control-user" id="disabledInput" type="text"
                                           disabled
                                           value="<?= !isset($_SESSION['identity']) ? '' : $_SESSION['identity']->Email; ?>">
                                </div>
                            </div>
                            <div class="col-sm-5 mb-4 mb-sm-1 pb-4">
                                <label for="formFile" class="form-label">Selecciona una imagen de perfil:</label>
                                <input name="foto" type="file" id="formFile">
                            </div>
                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Completar Registro">

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>