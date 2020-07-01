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

if ($resultado) {
   ?>
   <br>
   <table border="3" cellspacing="3" cellpadding="3" align="center">
      <tr>
         <td><b>Nombre de la cancion</b></td>
         <td><b>Artista</b></td>
      </tr>
   <?php
   while ($fila = mysqli_fetch_array($resultado))
   { 
   ?>
      <tr>
         <td><?php echo ($fila['cancion']); ?></td>
         <td><?php echo ($fila['artista']); ?></td>
      </tr>
      <tr>
 <td colspan="2">
<?php
}
mysqli_free_result($resultado);
mysqli_close($link);
?>
 </td>
</tr>
</table>

<?php
} else {
 ?>
<p>La cancion ingresada no se encuentra</p>
<a href="ejercicio8.html">Volver a buscar</a>
<?php
}

?>
</body>
</html>

