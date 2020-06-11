<html>
<head>
<title> Listados completo </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<p>&nbsp;</p>
<?php
include("conexion.inc");
$vSql = "SELECT * FROM ciudades";
$vResultado = mysqli_query($link, $vSql);
$total_registros=mysqli_num_rows($vResultado);
?>
<table border="3" cellspacing="3" cellpadding="3" align="center">
<tr>
<td><b>ID</b></td>
<td><b>Nombre</b></td>
<td><b>Pais</b></td>
<td><b>Habitantes</b></td>
<td><b>Superficie</b></td>
<td><b>Tiene metro</b></td>
</tr>
<?php
while ($fila = mysqli_fetch_array($vResultado))
{ if($fila['tieneMetro'] == '1'){
    $metro ='Si';
}else{
    $metro ='No';
}
?>
<tr>
 <td><?php echo ($fila['idciudades']); ?></td>
 <td><?php echo ($fila['nombre']); ?></td>
 <td><?php echo ($fila['pais']); ?></td>
 <td><?php echo ($fila['habitantes']); ?></td>
 <td><?php echo ($fila['superficie']); ?></td>
 <td><?php echo ($metro); ?></td>
</tr>
<tr>
 <td colspan="5">
<?php
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>
 </td>
</tr>
</table>
<p>&nbsp;</p>
<p align="center"><a href="Menu.html">Volver al menu; del ABM</a></p>
</body>
</html>