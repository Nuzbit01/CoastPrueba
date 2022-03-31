<?php

class Alumno
{
    private $idAlumno;
    private $carrera;
    private $porcentaje;
    private $fk_Usuario_idUsuario;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * @return mixed
     */
    public function getIdAlumno()
    {
        return $this->idAlumno;
    }

    /**
     * @param mixed $idAlumno
     */
    public function setIdAlumno($idAlumno): void
    {
        $this->idAlumno = $idAlumno;
    }




    public function getCarrera()
    {
        return $this->carrera;
    }

    /**
     * @param mixed $carrera
     */
    public function setCarrera($carrera): void
    {
        $this->carrera = $carrera;
    }

    /**
     * @return mixed
     */
    public function getPorcentaje()
    {
        return $this->porcentaje;
    }

    /**
     * @param mixed $porcentaje
     */
    public function setPorcentaje($porcentaje): void
    {
        $this->porcentaje = $porcentaje;
    }


    public function getFkUsuarioIdUsuario()
    {
        return $this->fk_Usuario_idUsuario;
    }


    public function setFkUsuarioIdUsuario($fk_Usuario_idUsuario): void
    {
        $this->fk_Usuario_idUsuario = $fk_Usuario_idUsuario;
    }


    public function getOneAl(){
        $alumno= $this->db->query("SELECT * FROM alumno WHERE fk_Usuario_idUsuario={$this->getFkUsuarioIdUsuario()}");
        return $alumno->fetch_object();
    }


    public function insertalumno(){
        /******CONSULTA PARA  o EDITAR DATOS EN LA TABLA ALUMNO********/
        $sql="INSERT INTO alumno  VALUES (null,{$this->getPorcentaje()},'{$this->getCarrera()}',{$this->getFkUsuarioIdUsuario()})";

        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }

    public function insertalumnoreg(){
        /******CONSULTA PARA  o EDITAR DATOS EN LA TABLA ALUMNO********/
        $sql="INSERT INTO alumno  VALUES (null,null,null,{$this->getFkUsuarioIdUsuario()})";

        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }

    public function editalumno(){
        /******CONSULTA PARA  o EDITAR DATOS EN LA TABLA ALUMNO********/
        $sql="UPDATE alumno SET PorcentajeAvance='{$this->getPorcentaje()}',
                   Carrera='{$this->getCarrera()}' WHERE fk_Usuario_idUsuario={$this->fk_Usuario_idUsuario}";

        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }



}