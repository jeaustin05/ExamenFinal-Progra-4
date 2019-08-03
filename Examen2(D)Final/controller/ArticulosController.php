<?php

namespace controller;

use controller\BaseController;
use model\Articulos;

class ArticulosController implements BaseController
{
    public $cantastaBasica = ["arroz","frijoles","leche","agua"];

    public static function getInstance()
    {
        if (!isset($_SESSION["instanceAC"]) || !isset($_SESSION["articulos"])) {
            $_SESSION["instanceAC"] = new ArticulosController();
            $_SESSION["articulos"] = [];
        }

        return $_SESSION["instanceAC"];
    }

    public function show() {
        $_SESSION['articulos'] = [];
        return "views/principal";
    }

    public function createArticulos($nombre,$precio,$descripcion, $cantidad)
    {
        #verificar si todo esta completo
        if (empty($nombre) || empty($precio) || empty($descripcion) || empty($cantidad)) {
            echo '<script language="javascript">';
            echo 'alert("Favor completar todos los espacios")';
            echo '</script>';
            //throw new InvalidArgumentException('Favor completar todos los espacios');
            header("Location: /Examen2(D)/views/principal.php"); /* Redirect browser */
            exit();
        }

        foreach ($Articulo as $articulo) {
            $art = new CArticulo();
            $art->setNombre(explode("-", $articulo)[0]);
            $art->setPrecio(explode("-",$articulo)[1]);
            $art->setIva(explode("-",$articulo)[2]);
            $art->setCantidad(explode("-",$articulo)[3]);

            array_push($_SESSION["Factura"], $art);
        }

        /*$Art = new Articulos();
        $Art->setNombre($nombre);
        $Art->setPrecio($precio);
        $Art->setDescripcion($descripcion);
        if (in_array(trim(strtolower($nombre)), $cantastaBasica[]))
        {
            $Art->setIva($precio * 1.13);
        }
        else
        {
            $Art->setIva(0);
        }
        $Art->setCantidad($cantidad);

        array_push(articulos, $Art);
        */
    }

}
