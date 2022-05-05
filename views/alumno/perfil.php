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
                        <form action="<?= base_url ?>alumno/perfiledit" class="user" method="post">
                            <?=var_dump($_POST)?>

                            <input type="hidden" name="idUser"
                                   value="<?= !isset($_SESSION['identity']) ? '' : $_SESSION['identity']->idUsuario; ?>">

                            <input type="hidden" name="tipo" value="3">

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
                                            required
                                    >

                                        <option selected disabled
                                        >Género
                                        </option>

                                        <option value="Femenino"
                                            <?php
                                            if ($_SESSION) {
                                                if ($_SESSION['identity']->Genero == 'Femenino') {
                                                    echo 'selected';
                                                } else {
                                                    echo '';
                                                }
                                            } ?>>Femenino
                                        </option>

                                        <option value="Masculino"
                                            <?php
                                            if ($_SESSION['identity']) {
                                                if ($_SESSION['identity']->Genero == 'Masculino') {
                                                    echo 'selected';
                                                } else {
                                                    echo '';
                                                }
                                            }
                                            ?>
                                        >Masculino
                                        </option>

                                        <option value="Otro" <?php
                                        if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->Genero == 'Otro') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>
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
                                    <select name="estado" class="form-control" name="estado" required >

                                        <option value="" selected disabled hidden>Estado De Procedencia:</option>
                                        <option value="Aguascalientes" <?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Aguascalientes') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Aguascalientes
                                        </option>
                                        <option value="Baja California"
                                            <?php if ($_SESSION['identity']) {
                                                if ($_SESSION['identity']->EstadoProcedencia == 'Baja California') {
                                                    echo 'selected';
                                                } else {
                                                    echo '';
                                                }
                                            } ?>>Baja California
                                        </option>
                                        <option value="Baja California Sur"
                                            <?php if ($_SESSION['identity']) {
                                                if ($_SESSION['identity']->EstadoProcedencia == 'Baja California Sur') {
                                                    echo 'selected';
                                                } else {
                                                    echo '';
                                                }
                                            } ?>>Baja California Sur
                                        </option>
                                        <option value="Campeche"
                                            <?php if ($_SESSION['identity']) {
                                                if ($_SESSION['identity']->EstadoProcedencia == 'Campeche') {
                                                    echo 'selected';
                                                } else {
                                                    echo '';
                                                }
                                            } ?>>Campeche
                                        </option>
                                        <option value="Chiapas"
                                            <?php if ($_SESSION['identity']) {
                                                if ($_SESSION['identity']->EstadoProcedencia == 'Chiapas') {
                                                    echo 'selected';
                                                } else {
                                                    echo '';
                                                }
                                            } ?>>Chiapas
                                        </option>
                                        <option value="Chihuahua"
                                            <?php if ($_SESSION['identity']) {
                                                if ($_SESSION['identity']->EstadoProcedencia == 'Chihuahua') {
                                                    echo 'selected';
                                                } else {
                                                    echo '';
                                                }
                                            } ?>>Chihuahua
                                        </option>
                                        <option value="CDMX"
                                            <?php if ($_SESSION['identity']) {
                                                if ($_SESSION['identity']->EstadoProcedencia == 'Ciudad de México') {
                                                    echo 'selected';
                                                } else {
                                                    echo '';
                                                }
                                            } ?>>Ciudad de México
                                        </option>
                                        <option value="Coahuila"
                                            <?php if ($_SESSION['identity']) {
                                                if ($_SESSION['identity']->EstadoProcedencia == 'Coahuila') {
                                                    echo 'selected';
                                                } else {
                                                    echo '';
                                                }
                                            } ?>>Coahuila
                                        </option>
                                        <option value="Colima"
                                            <?php if ($_SESSION['identity']) {
                                                if ($_SESSION['identity']->EstadoProcedencia == 'Colima') {
                                                    echo 'selected';
                                                } else {
                                                    echo '';
                                                }
                                            } ?>>Colima
                                        </option>
                                        <option value="Durango"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Durango') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Durango
                                        </option>
                                        <option value="Estado de México"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Estado de México') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Estado de México
                                        </option>
                                        <option value="Guanajuato"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Guanajuato') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Guanajuato
                                        </option>
                                        <option value="Guerrero"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Guerrero') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Guerrero
                                        </option>
                                        <option value="Hidalgo"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Hidalgo') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Hidalgo
                                        </option>
                                        <option value="Jalisco" <?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Jalisco') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Jalisco
                                        </option>
                                        <option value="Michoacán"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Michoacán') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Michoacán
                                        </option>
                                        <option value="Morelos"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Morelos') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Morelos
                                        </option>
                                        <option value="Nayarit"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Nayarit') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Nayarit
                                        </option>
                                        <option value="Nuevo León"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Nuevo León') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Nuevo León
                                        </option>
                                        <option value="Oaxaca"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Oaxaca') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Oaxaca
                                        </option>
                                        <option value="Puebla"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Puebla') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Puebla
                                        </option>
                                        <option value="Querétaro"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Querétaro') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Querétaro
                                        </option>
                                        <option value="Quintana Roo"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Quintana Roo') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Quintana Roo
                                        </option>
                                        <option value="San Luis Potosí"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'San Luis Potosí') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>San Luis Potosí
                                        </option>
                                        <option value="Sinaloa"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Sinaloa') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Sinaloa
                                        </option>
                                        <option value="Sonora"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Sonora') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Sonora
                                        </option>
                                        <option value="Tabasco"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Tabasco') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Tabasco
                                        </option>
                                        <option value="Tamaulipas"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Tamaulipas') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Tamaulipas
                                        </option>
                                        <option value="Tlaxcala"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Tlaxcala') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Tlaxcala
                                        </option>
                                        <option value="Veracruz"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Veracruz') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Veracruz
                                        </option>
                                        <option value="Yucatán"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Yucatán') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Yucatán
                                        </option>
                                        <option value="Zacatecas"<?php if ($_SESSION['identity']) {
                                            if ($_SESSION['identity']->EstadoProcedencia == 'Zacatecas') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            }
                                        } ?>>Zacatecas
                                        </option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-5">
                                    <select class="form-control" name="carrera" required>
                                        <option
                                                selected >Carrera:
                                        </option>

                                        <option value="ICC"
                                            <?php
                                            if ($_SESSION['dataAlu']) {
                                                if ($_SESSION['dataAlu']->Carrera == 'ICC') {
                                                    echo 'selected';
                                                } else {
                                                    echo '';
                                                }
                                            } ?>>ICC
                                        </option>
                                        <option value="LCC"
                                            <?php
                                            if ($_SESSION['dataAlu']->Carrera == 'LCC') {

                                                echo 'selected';
                                            } else {
                                                echo '';
                                            } ?>>LCC
                                        </option>
                                        <option value="ITI"
                                            <?php
                                            if ($_SESSION['dataAlu']->Carrera == 'ITI') {
                                                echo 'selected';
                                            } else {
                                                echo '';
                                            } ?>>ITI
                                        </option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <input name="porcentaje" required type="number" min=0 max=100
                                           class="form-control form-control-user"
                                           placeholder="Porcentaje"
                                           value="<?= !isset($_SESSION['dataAlu']) ? '' : $_SESSION['dataAlu']->PorcentajeAvance; ?>">
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