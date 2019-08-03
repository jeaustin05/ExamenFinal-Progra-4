<?php
use model\Articulos;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title> La Microsoft</title>

</head>

<body>

<h1>Factura de Compra</h1>
    <?php
for ($i = 0; $i < sizeof($_SESSION['Factura']); $i++) {
    echo $i . " - " . $_SESSION['Factura'][$i]->getNombre() . " (" . $_SESSION['Factura'][$i]->getPrecio() . ") " . " +IVA " . "  (" . $_SESSION['Factura'][$i]->getIVA() . ")" . "  (" . $_SESSION['Factura'][$i]->getCantidad() . ")" . "<br/>" . "<br/>";
}

$casilla = $_GET['articulos'];

if ($casilla == "") {
    //echo '<script> alert ("Seleccione casilla");
}
?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>