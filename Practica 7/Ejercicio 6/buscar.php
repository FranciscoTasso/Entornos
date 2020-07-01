
<html>
<head>
</head>
<body>
<?php
$conexion= include("conexion.inc");
session_start();
$email = $_POST["email"];
$sentencia = "SELECT * FROM alumnos WHERE email='$email'";
$resultado = mysqli_query($link, $sentencia) or die (mysqli_error($link));
$existe = mysqli_fetch_assoc($resultado);
if ($existe) {
    $_SESSION["nombre"]=$existe["nombre"];
    $_SESSION["codigo"]=$existe["codigo"];
    $_SESSION["mail"]=$existe["email"];
    $_SESSION["codigocurso"]=$existe["codigocurso"];
    ?>
      <a href="bienvenida.php">Bienvenida</a> 
    <?php
} else {
 ?>

<p>El email ingresado no existe</p>

<?php
}
mysqli_free_result($resultado);
mysqli_close($link);
?>
</body>
</html>