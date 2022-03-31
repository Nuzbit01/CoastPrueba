<?php
require 'models/usuario.php';
require 'models/alumno.php';
require 'models/profesor.php';

class UsuarioController
{
    public function registroAlumno()
    {
        require_once 'views/alumno/registroalumno.php';
    }

    public function registroProfesor()
    {
        require_once 'views/profesor/registroprofesor.php';
    }


    /*public function save()
     {
         if (isset($_POST)) {
             $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : false;
             $matricula = isset($_POST['matricula']) ? $_POST['matricula'] : false;
             $email = isset($_POST['email']) ? $_POST['email'] : false;
             //$password = isset($_POST['password']) ? $_POST['password'] : false;//ojoX

             //validar tipo 3=traerme el post si no generamelo
             if($tipo==3) {
                 $password = isset($_POST['password']) ? $_POST['password'] : false;
             }else {
                 $password='$2y$10$Jt3cCYGLfD2p5MP9T.LUPOTc0GQY9fx3buEhADzxo6CGgaiTy/nFa';
             }
             $usuario = new Usuario();
             $usuario->setMatricula($matricula);
             $usuario->setEmail($email);
             $usuario->setPassword($password);
             $usuario->setTipo($tipo);
             //Guardar Usuario
             $save = $usuario->save();
             //var_dump($save);

             if ($save) {
                 $identity = $usuario->login();

                 //Si existe y es un objeto la var identity
                 if ($identity && is_object($identity)) {
                     //creame una variable de sesion que sirve para compartir datos sin crear variables get/post
                     $_SESSION['identity'] = $identity;
                     //var_dump($_SESSION['identity']);

                         $alumno = new Alumno();
                         $alumno->setFkUsuarioIdUsuario($identity->idUsuario);
                         $Alumnoregistro = $alumno->insertalumnoreg();
                         $identityAl = $alumno->getOneAl();
                         if ($identityAl) {
                             $_SESSION['dataAlu'] = $identityAl;
                         }

                     //validacion si ya tiene nombre
                     //&& tipo = 3avanza si no mandame a
                     //vista de perfil alumno para acompletarlo


                     //redirige a dashbooard en caso de exito
                     header('Location: ' . base_url . 'alumno/dashboard');
                 }
                 header('Location: ' . base_url . 'alumno/perfil.php');
             } else {
                 $_SESSION['register'] = "failed";
                 //header('Location:' . base_url . 'usuario/registroAlumno');
             }

         } else {
             $_SESSION['register'] = "failed";
             header('Location:' . base_url . 'usuario/registroAlumno');
         }

     }*/

    public
    function save()
    {
        if (isset($_POST)) {
            $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : false;
            $matricula = isset($_POST['matricula']) ? $_POST['matricula'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;

            //validar tipo 3=traerme el post si no generamelo
            if ($tipo == 3) {
                $password = isset($_POST['password']) ? $_POST['password'] : false;
            } else {
                $password = '$2y$10$Jt3cCYGLfD2p5MP9T.LUPOTc0GQY9fx3buEhADzxo6CGgaiTy/nFa';
            }
            $usuario = new Usuario();
            $usuario->setMatricula($matricula);
            $usuario->setEmail($email);
            $usuario->setPassword($password);
            $usuario->setTipo($tipo);

            $save = $usuario->save();
            //var_dump($save);

            if ($save) {
                $identity = $usuario->login();

                //Si existe y es un objeto la var identity
                if ($identity && is_object($identity)) {
                    //creame una variable de sesion que sirve para compartir datos sin crear variables get/post
                    $_SESSION['identity'] = $identity;

                    if ($tipo == 3) {
                        $alumno = new Alumno();
                        $alumno->setFkUsuarioIdUsuario($identity->idUsuario);
                        $Alumnoregistro = $alumno->insertalumnoreg();
                        $identityAl = $alumno->getOneAl();
                        if ($identityAl) {
                            $_SESSION['dataAlu'] = $identityAl;
                        }
                        //redirige a dashbooard en caso de exito
                        header('Location: ' . base_url . 'alumno/perfil');
                    } else {
                        $profesor = new Profesor();
                        $profesor->setFkUsuarioIdUsuario($identity->idUsuario);
                        $ProfesorRegistro = $profesor->insertaprofesor();
                        $identityPr = $profesor->getOnePr();
                        if ($identityPr) {
                            $_SESSION['dataPro'] = $identityPr;
                        }
                        //redirige a dashbooard en caso de exito
                        header('Location: ' . base_url . 'profesor/perfil');

                    }

                } else {
                    if ($tipo == 3) {
                        header('Location:' . base_url . 'usuario/registroAlumno');
                    } else {
                        header('Location:' . base_url . 'usuario/registroProfesor');
                    }
                }

            } else {
                if ($tipo == 3) {
                    header('Location:' . base_url . 'usuario/registroAlumno');
                } else {
                    header('Location:' . base_url . 'usuario/registroProfesor');
                }
            }

        }


    }

    public function login()
    {
        if (isset($_POST)) {
            //var_dump($_POST['email']);

            $usuario = new Usuario();
            $alumno = new Alumno();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
            //var_dump($usuario);
            //Creo una variable donde se guarda los registros solicitados al modelo(datos del usuario(tal y como esta eb bd))
            $identity = $usuario->login();

            //Si existe y es un objeto la var identity
            if ($identity && is_object($identity)) {
                //creame una variable de sesion que sirve para compartir datos sin crear variables get/post
                $_SESSION['identity'] = $identity;
                $alumno->setFkUsuarioIdUsuario($identity->idUsuario);
                $identityAl = $alumno->getOneAl();
                if ($identityAl) {
                    $_SESSION['dataAlu'] = $identityAl;
                }

                //validacion si ya tiene nombre
                //&& tipo = 3avanza si no mandame a
                //vista de perfil alumno para acompletarlo


                //redirige a dashbooard en caso de exito
                header('Location: ' . base_url . 'alumno/dashboard');
            } else {
                //Si da error te redirige al login
                //$_SESSION['error_login'] = 'Identificación fallida !!';
                header("Location:" . base_url);
            }

        }
        //header("Location:".base_url);
    }

    public function logout()
    {
        /*if (isset($_SESSION['identity'])) {
            unset($_SESSION);
        }*/
        /*if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }*/

        //echo "Cerrando sesión";
        //var_dump($_SESSION);
        session_destroy();
        unset($_SESSION);
        header("Location:" . base_url);
    }

    public function nosession()
    {
        header('Location: ' . base_url);
    }
}

