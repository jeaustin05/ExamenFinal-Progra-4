<?php
namespace model;

class CArticulo
{
    public $nombre = [];
    public $precio = [];
    public $iva = [];
    public $cantidad = [];

    public function __construct()
    {

    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getPrecio()
    {
        return $this->precio;
    }
    public function getIva()
    {
        return $this->iva;
    }
    public function getCantidad()
    {
        return $this->cantidad;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
    public function setIva($iva)
    {
        $this->iva = $iva;
    }
    public function setCantidad($cantidad)
    {
        $this->iva = $cantidad;
    }
}
