<?php
class Profesor{

    private $idProfesor;
    private $GradoEstudios;
    private $fk_Usuario_idUsuario;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getIdProfesor()
    {
        return $this->idProfesor;
    }

    public function setIdProfesor($idProfesor): void
    {
        $this->idProfesor = $idProfesor;
    }


    public function getGradoEstudios()
    {
        return $this->GradoEstudios;
    }


    public function setGradoEstudios($GradoEstudios): void
    {
        $this->GradoEstudios = $GradoEstudios;
    }


    public function getFkUsuarioIdUsuario()
    {
        return $this->fk_Usuario_idUsuario;
    }


    public function setFkUsuarioIdUsuario($fk_Usuario_idUsuario): void
    {
        $this->fk_Usuario_idUsuario = $fk_Usuario_idUsuario;
    }

    public function editaprofesor(){

        $sql="UPDATE profesor SET GradoEstudios='{$this->getGradoEstudios()}'
                WHERE fk_Usuario_idUsuario={$this->fk_Usuario_idUsuario}";

        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }


    public function getOnePr(){
        $profesor= $this->db->query("SELECT * FROM profesor WHERE fk_Usuario_idUsuario={$this->getFkUsuarioIdUsuario()}");
        return $profesor->fetch_object();
    }

    public function insertaprofesor(){
        /******CONSULTA PARA  o EDITAR DATOS EN LA TABLA PROFESOR********/
        $sql="INSERT INTO profesor VALUES (null,'{$this->getGradoEstudios()}',{$this->getFkUsuarioIdUsuario()})";

        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }
}