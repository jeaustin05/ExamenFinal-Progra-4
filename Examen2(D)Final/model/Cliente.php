<?php

namespace model;

class CCliente
{
    private $nombreCompleto;
    private $cedula;
    private $direccion;
    private $telefono;

    public function __construct() 
    { 
            
    }

    public function getNombreCompleto()
    {
        return $this->nombreCompleto;
    }
    public function getCedula()
    {
        return $this->cedula;
    }
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function setNombreCompleto($nombreCompleto)
    {
        $this->nombreCompleto = $nombreCompleto;
    }
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
}
?>