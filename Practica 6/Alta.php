<html>
<head>
<title>Alta Ciudad</title>
</head>
<body>
<?php
include("conexion.inc");
//Captura datos desde el Form anterior
$nombre = $_POST['Nombre'];
$pais = $_POST['Pais'];
$habitantes = $_POST['Habitantes'];
$superficie = $_POST['Superficie'];
$metro = $_POST['Metro'];
if($_POST['Metro'] == '1'){
    $metro ='1';
}else{
    $metro ='0';
}
$vSql = "INSERT INTO ciudades (nombre, pais, habitantes,superficie,tieneMetro)
values ('$nombre', '$pais', '$habitantes', '$superficie','$metro')";
 mysqli_query($link, $vSql) or die (mysqli_error($link));
 echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
// Liberar conjunto de resultados
// Cerrar la conexion
mysqli_close($link);
?>
</body>
</html>