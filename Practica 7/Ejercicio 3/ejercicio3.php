<?php
if(isset($_POST["usuario"])){
$usuario = $_POST["usuario"];
setcookie("usuario", $usuario, time() + (2500));
}else{
if (isset($_COOKIE["usuario"])){
$usuario = $_COOKIE["usuario"];
}
}
?>
<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Cookies en PHP</title>
<?php
if (isset($usuario)){
}
?>
</head>
<body>
<form  align="center" action="ejercicio3.php" method="post">
<label for="fname">Usuario:</label><br>
  <input type="text" id="usuario" name="usuario"><br>
<br>
<input type="submit" value="Actualizar el usuario">
<br> <br>
<label>El usuario guardado en la cookie es:</label>
<?php
echo $usuario;
?>
</form>
</body>
</html>
