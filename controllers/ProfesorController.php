<?php
require 'models/usuario.php';
require 'models/profesor.php';
class ProfesorController
{
    public function dashboard()
    {

        require_once 'views/profesor/dashboard.php';
    }
    public function perfil()
    {
        //vista perfil
        require 'views/profesor/perfil.php';
    }

    public function perfiledit()
    {

        if (isset($_POST)) {
            //todas mi variables de formulario
            $id = ($_POST['idUser']);
            $tipo=$_POST['tipo'];
            $edit = true;

            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $aPaterno = isset($_POST['aPaterno']) ? $_POST['aPaterno'] : false;
            $aMaterno = isset($_POST['aMaterno']) ? $_POST['aMaterno'] : false;
            $genero = isset($_POST['genero']) ? $_POST['genero'] : false;
            $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : false;
            $estado = isset($_POST['estado']) ? $_POST['estado'] : false;

            /****SUBIDA DE ARCHIVO******/
            $grado = isset($_POST['grado']) ? $_POST['grado'] :false;



            $usuario = new Usuario();
            $usuario->setIdUsuario($id);

            $usuario->setNombres($nombre);
            $usuario->setAppaterno($aPaterno);
            $usuario->setApmaterno($aMaterno);
            $usuario->setGenero($genero);
            $usuario->setFechaNacimiento($fecha);
            $usuario->setEstado($estado);

            $file=$_FILES['foto'];
            $filename=$file['name'];
            $mimetype=$file['type'];

            if($mimetype == 'image/jpg' || $mimetype == 'image/jpeg' || $mimetype=='image/png' || $mimetype== 'image/gif'){

                if(!is_dir('uploads/images')){
                    mkdir('uploads',0777,true);
                }
                $usuario->setFoto($filename);
                //$producto->setImagen($filename);
                move_uploaded_file($file['tmp_name'], 'uploads/images'.$filename);

            }
            var_dump($_POST);
            $user = $usuario->perfiledit();

            $profesor = new Profesor();
            $profesor->setFkUsuarioIdUsuario($id);
            $profesor->setGradoEstudios($grado);
            $pro=$profesor->editaprofesor();

            if ($user) {
                //Creo una variable donde se guarda los registros solicitados al modelo(datos del usuario(tal y como esta eb bd))
                $identity = $usuario->getOne();
                $identityPr= $profesor->getOnePr();
                //Si existe y es un objeto la var identity
                if ($identity && is_object($identity)) {
                    //creame una variable de sesion que sirve para compartir datos sin crear variables get/post
                    unset($_SESSION['identity']);
                    $_SESSION['identity'] = $identity;
                    $_SESSION['dataPro']=$identityPr;
                }
                header('Location: ' . base_url . 'profesor/perfil');

            } else {//fin de: si llegan por post
                header('Location: ' . base_url . 'profesor/perfil');
            }

        }
    }



}