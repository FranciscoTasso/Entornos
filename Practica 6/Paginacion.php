<body>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title> Listados completo con paginacion </title>
</head>
<body>
<?php
include("conexion.inc");
$Cant_por_Pag = 2;
$pagina = isset ( $_GET['pagina']) ? $_GET['pagina'] : null ;
if (!$pagina) {
$inicio = 0;
$pagina=1;
}
else {
$inicio = ($pagina - 1) * $Cant_por_Pag;
}// total de páginas
$vSql = "SELECT * FROM ciudades";
$vResultado = mysqli_query($link, $vSql);
$total_registros=mysqli_num_rows($vResultado);
$total_paginas = ceil($total_registros/ $Cant_por_Pag);
echo "Numero de registros encontrados: " . $total_registros . "<br>";
echo "Se muestran paginas de " . $Cant_por_Pag . " registros cada una<br>";
echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<p>";
$vSql = "SELECT * FROM ciudades"." limit " . $inicio . "," . $Cant_por_Pag;
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
<?php
if ($total_paginas > 1){
for ($i=1;$i<=$total_paginas;$i++){
if ($pagina == $i)
//si muestro el índice de la página actual, no coloco enlace
echo ("<p align='center'>". $pagina . " ");
else
//si la página no es la actual, coloco el enlace para ir a esa página
echo "<a href='Paginacion.php?pagina=" . $i ."'>" . $i . "</a></p> ";}}?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"><a href="Menu.html">Volver al menu del ABM</a></p>
</body>
</html>