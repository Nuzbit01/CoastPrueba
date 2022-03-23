<?php
class Curso{
    private $id;
    private $nombre;
    private $password;
    private $cantidad_alumnos;
    private $perido;
    private $fecha_cracion;
    private $idprofesor;

    public function __construct(){
        $this->db= Database::connect();
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getCantidadAlumnos()
    {
        return $this->cantidad_alumnos;
    }

    /**
     * @param mixed $cantidad_alumnos
     */
    public function setCantidadAlumnos($cantidad_alumnos): void
    {
        $this->cantidad_alumnos = $cantidad_alumnos;
    }

    /**
     * @return mixed
     */
    public function getPerido()
    {
        return $this->perido;
    }

    /**
     * @param mixed $perido
     */
    public function setPerido($perido): void
    {
        $this->perido = $perido;
    }

    /**
     * @return mixed
     */
    public function getFechaCracion()
    {
        return $this->fecha_cracion;
    }

    /**
     * @param mixed $fecha_cracion
     */
    public function setFechaCracion($fecha_cracion): void
    {
        $this->fecha_cracion = $fecha_cracion;
    }

    /**
     * @return mixed
     */
    public function getIdprofesor()
    {
        return $this->idprofesor;
    }

    /**
     * @param mixed $idprofesor
     */
    public function setIdprofesor($idprofesor): void
    {
        $this->idprofesor = $idprofesor;
    }

    public function getOnes(){
        $cursos= $this->db->query("SELECT * FROM inscribecursos where idInscribeCursos = 1 ");
        return $cursos;
    }
}