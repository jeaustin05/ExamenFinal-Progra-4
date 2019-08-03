<!DOCTYPE html>
<?php
   /* use controller\ArticulosController;
    echo("Lista de articulos");
    
    for ($i = 0; $i < 5; $i++)
    {
        echo("Articulo : ".$i.
        " <br/>Articulo: " .$i.
        " <br/>Precio: " .$i);
    }*/
    use controller\ArticulosController;
    //$articulosC = new ArticulosController;
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {  
    //$articulosC->createArticulos($_POST['nombre'],$_POST['precio'],$_POST['descripcion'],$_POST['cantidad']);  
    } 
?>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Registro de Articulos</title>
    </head>
    <script>
        var btn = document.getElementById('myBtn');
        btn.addEventListener('click', function() {
        document.location.href = '<?php echo $page; ?>';
        });
    </script>
    <body>
        <center><h1>Compra de Articulos</h1></center>
        <form class="form" method="post">
            <div style="border: 1px solid #000000;"></br>
                <center><h1>Datos del Cliente</h1></center>
                <p>&nbsp;Nombre del Cliente: <input type="text" name="nombre" placeholder="Ingrese su nombre" size="40"></p>
                <p>&nbsp;Cedula del Cliente: <input type="text" name="nombre" placeholder="Ingrese su cedula" size="40"></p>
                <p>&nbsp;Telefono: <input type="text" name="nombre" placeholder="Ingrese el numero telefonico" size="40"></p>
                <p>&nbsp;Direccion: <input type="text" name="nombre" placeholder="Ingrese la direccion del cliente" size="70"></p>            
                </div>
                <div style="border: 1px solid #000000;"></br>
                <center><h1>Informacion de la Compra</h1></center>
                <p>&nbsp;Fecha: <input id="date" type="date"></p>
                <p>&nbsp;Articulo 1: <input type="text" name="art[]" placeholder="Ingrese nombre del articulo" size="40"> &nbsp;<input type="text" name="precio[]" placeholder="Ingrese el precio">&nbsp;<input type="number" name="cantidad[]" placeholder="Ingrese la cantidad"><p>&nbsp;Incluye IVA: <input type="checkbox" name="iva[]" id="cbox1" value="true"></p>
                <p>&nbsp;Articulo 2: <input type="text" name="art[]" placeholder="Ingrese nombre del articulo" size="40"> &nbsp;<input type="text" name="precio[]" placeholder="Ingrese el precio">&nbsp;<input type="number" name="cantidad[]" placeholder="Ingrese la cantidad"><p>&nbsp;Incluye IVA: <input type="checkbox" name="iva[]" id="cbox2" value="true"></p>
                <p>&nbsp;Articulo 3: <input type="text" name="art[]" placeholder="Ingrese nombre del articulo" size="40"> &nbsp;<input type="text" name="precio[]" placeholder="Ingrese el precio">&nbsp;<input type="number" name="cantidad[]" placeholder="Ingrese la cantidad"><p>&nbsp;Incluye IVA: <input type="checkbox" name="iva[]" id="cbox3" value="true"></p>
                <p>&nbsp;Articulo 4: <input type="text" name="art[]" placeholder="Ingrese nombre del articulo" size="40"> &nbsp;<input type="text" name="precio[]" placeholder="Ingrese el precio">&nbsp;<input type="number" name="cantidad[]" placeholder="Ingrese la cantidad"><p>&nbsp;Incluye IVA: <input type="checkbox" name="iva[]" id="cbox4" value="true"></p>
                <p>&nbsp;Articulo 5: <input type="text" name="art[]" placeholder="Ingrese nombre del articulo" size="40"> &nbsp;<input type="text" name="precio[]" placeholder="Ingrese el precio">&nbsp;<input type="number" name="cantidad[]" placeholder="Ingrese la cantidad"><p>&nbsp;Incluye IVA: <input type="checkbox" name="iva[]" id="cbox5" value="true"></p>
                    <input type="submit" value="Comprar">
                    <input type="button" value="IVA" id="btnIVA" onClick="Javascript:window.location.href = '../views/IVA.php';">
                </p>
            </div>
        </form>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>