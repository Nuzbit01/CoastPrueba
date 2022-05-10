<?php

class Usuario
{
    private $idUsuario;
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

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @param mixed $idUsuario
     */
    public function setIdUsuario($idUsuario): void
    {
        $this->idUsuario = $idUsuario;
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
        $sql= "INSERT INTO usuario VALUES(null,'{$this->getMatricula()}',null,null,null,null,null,null,'{$this->getEmail()}','{$this->getPassword()}',null,'{$this->getTipo()}',1)";
        $save = $this->db->query($sql);
        //var_dump($sql);
        $result=false;
        if($save){
            $result= true;
        }
        return $result;
    }

    public function altaProfesor(){
        $sql= "INSERT INTO usuario VALUES(null,null,'{$this->getNombres()}','{$this->getAppaterno()}','{$this->getApmaterno()}',null,null,null,'{$this->getEmail()}',null,null,'{$this->getTipo()}',1)";
        $save = $this->db->query($sql);
        //var_dump($sql);
        $result=false;
        if($save){
            $result= true;
        }
        return $result;
    }

    public function obtenerProfesor()
    {
        $email = $this->email;


        // Comprobar si existe el usuario
        $sql = "SELECT * FROM usuario WHERE Email = '$email'";
        //var_dump($sql);
        $profe = $this->db->query($sql);
        $data=$profe->fetch_object();
        $idPro=$data->idUsuario;
        return $idPro;


    }

    public function login()
    {
        $result = false;
        $email = $this->email;
        $password = $this->password;

        // Comprobar si existe el usuario
        $sql = "SELECT * FROM usuario WHERE Email = '$email'";
        //var_dump($sql);
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

    public function getOne(){
        $alumno= $this->db->query("SELECT * FROM usuario WHERE idUsuario={$this->getIdUsuario()}");
        return $alumno->fetch_object();
    }

    public function perfiledit(){
        /******CONSULTA PARA EDITAR DATOS EN LA TABLA USUARIO********/
        $sql="UPDATE usuario SET Nombres='{$this->getNombres()}',
                   ApPaterno='{$this->getAppaterno()}',
                   ApMaterno='{$this->getApmaterno()}', 
                   Genero='{$this->getGenero()}',
                   FechaNacimiento='{$this->getFechaNacimiento()}',
            EstadoProcedencia='{$this->getEstado()}'
                   
                    WHERE idUsuario={$this->idUsuario}";

        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }
    /*************CONSULTAS PARA ADMIN********************/

    public function getOneProfe(){
        $profe= $this->db->query("SELECT * FROM usuario WHERE idUsuario={$this->getIdUsuario()}");
        return $profe;
        //return $profe->fetch_object();//Para visualizar datos en array
    }

    public function borrarProfesor(){
        $borrar= $this->db->query("UPDATE usuario SET Activado =0 WHERE idUsuario={$this->getIdUsuario()}");
        var_dump($borrar);
        return $borrar;
    }

    public function editarProfesor(){
        /******CONSULTA PARA EDITAR DATOS EN LA TABLA USUARIO********/
        $editar= $this->db->query("UPDATE usuario SET 
                   Nombres='{$this->getNombres()}',
                   ApPaterno='{$this->getAppaterno()}',
                   ApMaterno='{$this->getApmaterno()}', 
                   Email='{$this->getEmail()}'             
                   
                    WHERE idUsuario={$this->getIdUsuario()}");

        return $editar;




    }


}


