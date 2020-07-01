<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
$conexion= include("conexion8.inc");
session_start();
$nombre = $_POST["nombre"];
$sentencia = "SELECT * FROM buscador WHERE cancion like '%$nombre%'";
$resultado = mysqli_query($link, $sentencia) or die (mysqli_error($link));
$existe = mysqli_fetch_assoc($resultado);
if ($existe) {
    $_SESSION["cancion"]=$existe["cancion"];
    $_SESSION["artista"]=$existe["artista"];
    ?>
     <div align:center>
        <h1>Datos de la cancion</h1><br>
        <p>
           Cancion: <?php echo $_SESSION["cancion"]; ?>
        </p>
        <p>
           Artista: <?php echo $_SESSION["artista"]; ?>
        </p>
</div>
    <?php
} else {
 ?>
<p>La cancion ingresada no se encuentra</p>
<a href="ejercicio8.html">Volver a buscar</a>
<?php
}
mysqli_free_result($resultado);
mysqli_close($link);
?>
</body>
</html>

