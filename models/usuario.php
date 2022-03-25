<?php

class Usuario
{
    private $id;
    private $matricula;
    private $nombres;
    private $appaterno;
    private $apmaterno;
    private $genero;
    private $fecha_nacimiento;
    private $estado;
    private $email;
    private $password;
    private $foto;
    private $tipo;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

   
    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    
    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula): void
    {
        $this->matricula = $matricula;
    }
    
    
    public function getNombres()
    {
        return $this->nombres;
    }

   
    public function setNombres($nombres): void
    {
        $this->nombres = $nombres;
    }

    
    public function getAppaterno()
    {
        return $this->appaterno;
    }


    public function setAppaterno($appaterno): void
    {
        $this->appaterno = $appaterno;
    }

    
    public function getApmaterno()
    {
        return $this->apmaterno;
    }


    public function setApmaterno($apmaterno): void
    {
        $this->apmaterno = $apmaterno;
    }

    
    public function getGenero()
    {
        return $this->genero;
    }


    public function setGenero($genero): void
    {
        $this->genero = $genero;
    }

    
    public function getFechaNacimiento()
    {
        return $this->fecha_nacimiento;
    }


    public function setFechaNacimiento($fecha_nacimiento): void
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    
    public function getEstado()
    {
        return $this->estado;
    }


    public function setEstado($estado): void
    {
        $this->estado = $estado;
    }

    
    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $this->db->real_escape_string($email);
    }

    public function getPassword()
    {
        return password_hash($this->db->real_escape_string($this->password),PASSWORD_BCRYPT,['cont'=>4]);
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }


    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto): void
    {
        $this->foto = $foto;
    }



    public function getTipo()
    {
        return $this->tipo;
    }


    public function setTipo($tipo): void
    {
        $this->tipo = $tipo;
    }

    public function save(){
        $sql= "INSERT INTO usuario VALUES(null,'{$this->getMatricula()}',null,null,null,null,null,null,'{$this->getEmail()}','{$this->getPassword()}',null)";
        $save = $this->db->query($sql);
        $result=false;
        if($save){
            $result= true;
        }
        return $result;

            
    }

    public function login()
    {
        $result = false;
        $email = $this->email;
        $password = $this->password;

        // Comprobar si existe el usuario
        $sql = "SELECT * FROM usuario WHERE Email = '$email'";
        var_dump($sql);
        $login = $this->db->query($sql);

        if ($login && $login->num_rows == 1) {
            $usuario = $login->fetch_object();

            // Verificar la contraseña
            $verify = password_verify($password, $usuario->Password);


            if ($verify) {
                $result = $usuario;
            }
        }
        return $result;
    }

    public function logout(){
        if(isset($_SESSION['identity'])){
            session_destroy();
        }
        /*if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }*/

        header("Location:".base_url);
    }
}