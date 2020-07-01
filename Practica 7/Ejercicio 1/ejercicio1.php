<?php
//Veo si recibo datos del formulario
if(isset($_POST["estilo"])){
//es que estoy recibiendo un estilo nuevo, lo tengo que meter en las cookies
$estilo = $_POST["estilo"];
//meto el estilo en una cookie
setcookie("estilo", $estilo, time() + (2500));
}else{
//si no he recibido el estilo que desea el usuario en la página, miro si hay una cookie creada
if (isset($_COOKIE["estilo"])){
//es que tengo la cookie
$estilo = $_COOKIE["estilo"];
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Cookies en PHP</title>
<?php
if (isset($estilo)){
echo '<link rel="STYLESHEET" type="text/css" href="' . $estilo .'.css">';
}
?>
</head>
<body>

<form  align="center" action="ejercicio1.php" method="post"> Aquí
puedes seleccionar el estilo que prefieres en la página:
<br>
<select name="estilo">
<option value="verde">Verde
<option value="rosa">Rosa
<option value="negro">Negro
</select>
<input type="submit" value="Actualizar el estilo">
</form>
</body>
</html>

