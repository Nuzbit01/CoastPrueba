<?php
require 'models/usuario.php';

class UsuarioController{
    public function registroAlumno(){
        require_once 'views/usuario/registroalumno.php';
    }
    public function registroProfesor(){
        require_once 'views/usuario/registroprofesor.php';
    }

    public function save(){
        if(isset($_POST)){
            $matricula = isset($_POST['matricula']) ? $_POST['matricula'] :false;
            $email = isset($_POST['email']) ? $_POST['email'] :false;
            $password = isset($_POST['password']) ? $_POST['password'] :false;

            if ($matricula && $email && $password){
                $usuario = new Usuario();
                $usuario->setMatricula($matricula);
                $usuario->setEmail($email);
                $usuario->setPassword($password);
                var_dump($usuario);
                $save= $usuario->save();

                if ($save) {
                    $_SESSION['register'] = "complete";
                } else {
                    $_SESSION['register'] = "failed";
                }
            }else{
                $_SESSION['register'] = "failed";
            }
        }else{
            $_SESSION['register'] = "failed";
            header('Location:'.base_url.'usuario/registroAlumno');
        }
        header('Location: '.base_url.'alumno/perfil.php');
    }

    public function login(){
        if(isset($_POST)){
            //var_dump($_POST['email']);

            $usuario = new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
            //var_dump($usuario);

            //Creo una variable donde se guarda los registros solicitados al modelo(datos del usuario(tal y como esta eb bd))
            $identity = $usuario->login();
            //Si existe y es un objeto la var identity
            if($identity && is_object($identity)){
                //creame una variable de sesion que sirve para compartir datos sin crear variables get/post
                $_SESSION['identity'] = $identity;

                //validacion si ya tiene nombre
                //&& tipo = 3avanza si no mandame a
                //vista de perfil alumno para acompletarlo


                //redirige a dashbooard en caso de exito
                header('Location: '.base_url.'alumno/dashboard');
            }else{
                //Si da error te redirige al login
                //$_SESSION['error_login'] = 'Identificación fallida !!';
                header("Location:".base_url);
            }

        }
        //header("Location:".base_url);
    }
}
