<html>
<head>
<title>Baja</title>
</head>
<body>
<?php
include ("conexion.inc");
$nombre = $_POST ['Nombre'];
$vSql = "SELECT * FROM ciudades WHERE nombre='$nombre' ";
$vResultado = mysqli_query($link, $vSql);
if(mysqli_num_rows($vResultado) == 0)
 {
 echo ("Ciudad inexistente...!!! <br>");
 echo ("<A href='FormBajaIni.html'>Continuar</A>");
}
else{
//Arma la instrucción SQL y luego la ejecuta
$vSql= "DELETE FROM ciudades WHERE nombre = '$nombre' ";
mysqli_query($link, $vSql);
 echo("La ciudad fue Borrada<br>");
 echo("<A href='Menu.html'>Volver al Menu del ABM</A>");
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>
</body>
</html>