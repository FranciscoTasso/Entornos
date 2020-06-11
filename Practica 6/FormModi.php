<title>Modificacion</title>
</head>
<boby>
<?php
include ("conexion.inc");
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
echo $metro;
$vSql = "SELECT * FROM ciudades WHERE nombre ='$nombre'";
$vSql = "UPDATE ciudades set pais='$pais', habitantes='$habitantes', superficie='$superficie',tieneMetro='$metro' where
nombre='$nombre'";
mysqli_query($link,$vSql) or die (mysqli_error($link));
echo("La ciudad fue modificada<br>");
echo("<A href= 'Menu.html'>Volver al Menu del ABM</A>");
mysqli_close($link);
?>
</body>
</html>
