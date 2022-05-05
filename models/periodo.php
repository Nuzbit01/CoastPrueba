<?php
class Periodo{
    private $idPeriodo;
    private $NombrePeriodo;

    private $db;

    public function __construct(){
        $this->db= Database::connect();
    }

    /**
     * @return mixed
     */
    public function getIdPeriodo()
    {
        return $this->idPeriodo;
    }

    /**
     * @param mixed $idPeriodo
     */
    public function setIdPeriodo($idPeriodo): void
    {
        $this->idPeriodo = $idPeriodo;
    }

    /**
     * @return mixed
     */
    public function getNombrePeriodo()
    {
        return $this->NombrePeriodo;
    }

    /**
     * @param mixed $NombrePeriodo
     */
    public function setNombrePeriodo($NombrePeriodo): void
    {
        $this->NombrePeriodo = $NombrePeriodo;
    }



    public function agregarPeriodo(){
        $save= $this->db->query("INSERT INTO periodo VALUES (null,'{$this->getNombrePeriodo()}')");
        return $save;

    }
     public function obtenerPeriodos(){
        $total= $this->db->query("SELECT `idPeriodo`, `NombrePeriodo` FROM `periodo` WHERE 1 order by idPeriodo desc");
        return $total;
     }


}