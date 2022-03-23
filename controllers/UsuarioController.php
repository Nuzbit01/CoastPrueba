<?php
require 'models/usuario.php';

class usuarioController{

    public function login()
    {
        if (isset($_POST)) {
            // Identificar al usuario
            // Consulta a la base de datos
            $usuario = new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);

            $identity = $usuario->login();
            //var_dump($identity);

            if ($identity && is_object($identity)) {
                $_SESSION['identity'] = $identity;

                if ($identity->rol == 'admin') {
                    $_SESSION['admin'] = true;
                }

            } else {
                $_SESSION['error_login'] = 'Identificación fallida !!';
            }

        }
        header("Location:" . base_url."alumno/dashboard");
    }
}