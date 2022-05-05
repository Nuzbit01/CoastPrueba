<?php

class Admin{
    private $idAdministrador;
    private $Bitacora;
    private $Fecha;
    private $fk_Usuario_idUsuario;
    private $db;

    public function __construct(){
        $this->db= Database::connect();
    }

    /**
     * @return mixed
     */
    public function getIdAdministrador()
    {
        return $this->idAdministrador;
    }

    /**
     * @param mixed $idAdministrador
     */
    public function setIdAdministrador($idAdministrador): void
    {
        $this->idAdministrador = $idAdministrador;
    }

    /**
     * @return mixed
     */
    public function getBitacora()
    {
        return $this->Bitacora;
    }

    /**
     * @param mixed $Bitacora
     */
    public function setBitacora($Bitacora): void
    {
        $this->Bitacora = $Bitacora;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->Fecha;
    }

    /**
     * @param mixed $Fecha
     */
    public function setFecha($Fecha): void
    {
        $this->Fecha = $Fecha;
    }


    public function getFkUsuarioIdUsuario()
    {
        return intval($this->fk_Usuario_idUsuario);
    }


    public function setFkUsuarioIdUsuario($fk_Usuario_idUsuario): void
    {
        $this->fk_Usuario_idUsuario = $fk_Usuario_idUsuario;
    }

    public function insertAdminBitacora($bitacora){
        /******CONSULTA PARA  o EDITAR DATOS EN LA TABLA ADMINISTRADOR********/
        $sql="INSERT INTO administrador VALUES (null,'$bitacora',CURRENT_TIMESTAMP(),{$this->getFkUsuarioIdUsuario()})";

        $save = $this->db->query($sql);


        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }

    public function getOneAdm(){

        $admin= $this->db->query("SELECT * FROM usuario WHERE idUsuario={$this->getFkUsuarioIdUsuario()}");
        return $admin->fetch_object();

    }

    public function addProf(){
        //registro de profesor
    }

    public function periodos(){

    }



    public function obtenerBitacoras()
    {
        $query="SELECT * FROM administrador  WHERE fk_Usuario_idUsuario ={$this->getFkUsuarioIdUsuario()} order by Fecha desc ";
        //var_dump($query);
        $bitas = $this->db->query($query);
        return $bitas;
        //var_dump($bitas);
       //die();


        //var_dump($this->getFkUsuarioIdUsuario());
        //var_dump("SELECT * FROM administrador  WHERE fk_Usuario_idUsuario ={$this->getFkUsuarioIdUsuario()}");

    }
}