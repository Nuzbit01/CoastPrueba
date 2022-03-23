<?php
class Alumno{
    private $idUsuario;
    private $nombres;
    private $apPaterno;
    private $apMaterno;
    private $genero;
    private $fechaNacimiento;
    private $estadoProcedencia;
    private $email;
    private $password;
    private $tipouser;
    private $db;

    public function __construct(){
        $this->db= Database::connect();
    }

    
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
    
    public function setIdUsuario($idUsuario): void
    {
        $this->idUsuario = $idUsuario;
    }

   
    public function getNombres()
    {
        return $this->nombres;
    }
    
    public function setNombres($nombres): void
    {
        $this->nombres = $nombres;
    }

    
    public function getApPaterno()
    {
        return $this->apPaterno;
    }
    
    public function setApPaterno($apPaterno): void
    {
        $this->apPaterno = $apPaterno;
    }

    
    public function getApMaterno()
    {
        return $this->apMaterno;
    }
    
    public function setApMaterno($apMaterno): void
    {
        $this->apMaterno = $apMaterno;
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
        return $this->fechaNacimiento;
    }
    
    public function setFechaNacimiento($fechaNacimiento): void
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    
    public function getEstadoProcedencia()
    {
        return $this->estadoProcedencia;
    }

    
    public function setEstadoProcedencia($estadoProcedencia): void
    {
        $this->estadoProcedencia = $estadoProcedencia;
    }

     
    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email): void
    {
        $this->email = $email;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password): void
    {
        $this->password = $password;
    }


    public function getTipouser()
    {
        return $this->tipouser;
    }

    public function setTipouser($tipouser): void
    {
        $this->tipouser = $tipouser;
    }
//
//    public function getOnes(){
//        $cursos= $this->db->query("SELECT * FROM inscribecursos where idInscribeCursos = 1 ");
//        return $cursos;
//    }



}