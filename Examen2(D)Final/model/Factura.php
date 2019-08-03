<?php

namespace model;

class CFactura
{
    private $numFactura;
    private $cedulaCliente;
    private $nombreCliente;
    private $fecha;
    private $subtotal;
    private $lista2 = [];
    private $total;
    private $iva;

    public function __construct()
    { 

    }

    public function getNumFactura()
    {
        return $this->numFactura;
    }
    public function getCedulaCliente()
    {
        return $this->cedulaCliente;
    }
    public function getNombreCliente()
    {
        return $this->nombreCliente;
    }
    public function getFecha()
    {
        return $this->fecha;
    }
    
    public function getSubtotal()
    {
        return $this->subtotal;
    }
    public function getlista2()
    {
        return $this->lista2;
    }
    public function getTotal()
    {
        return $this->total;
    }   
    public function getIva()
    {
        return $this->iva;
    } 
    public function setNumFactura($numFactura)
    {
        $this->numFactura = $numFactura;
    }
    public function setCedulaCliente($cedulaCliente)
    {
        $this->cedulaCliente = $cedulaCliente;
    }
    public function setNombreCliente($nombreCliente)
    {
        $this->nombreCliente = $nombreCliente;
    }
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
  
    public function setSubtotal()
    {
        return $this->subtotal;
    }
    public function setLista2()
    {
        return $this->lista2;
    }
    public function setTotal()
    {
        return $this->total;
    }
    public function setIva()
    {
        return $this->iva;
    }

}
