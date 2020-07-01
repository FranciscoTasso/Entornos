<?php
//Veo si recibo datos del formulario
if(isset($_POST["noticia"])){
//es que estoy recibiendo un estilo nuevo, lo tengo que meter en las cookies
$noticia = $_POST["noticia"];
//meto el estilo en una cookie
setcookie("noticia", $noticia, time() + (2500));
}else
{
//si no he recibido el estilo que desea el usuario en la página, miro si hay una cookie creada
if (isset($_COOKIE["noticia"])){
//es que tengo la cookie
$usuario = $_COOKIE["noticia"];
}
}
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
div {
  border: 1px solid black;
  margin-top: 25px;
  margin-bottom: 100px;
  margin-left: 5px;
  margin-right: 1500px;
  background-color: lightblue;
}
</style>
</head>
<body>
<?php 
if (isset($_COOKIE["noticia"])){
?>
<h3 align="center">Seccion de noticias <?php echo $_COOKIE['noticia'];?></h3>
<?php 
} 
?>
<form  align="left" action="ejercicio4.php" method="post">
  <div>
  <p>Seleccionar el tipo de contenido que desea visualizar:</p>
  <input type="radio" name="noticia" value="politicas">
  <label for="politica">Noticias politicas</label><br>
  <input type="radio" name="noticia" value="economicas">
  <label for="economica">Noticias economicas</label><br>
  <input type="radio" name="noticia" value="deportivas">
  <label for="deportiva">Noticias deportivas</label>
  <br>
  <input type="submit" value="Seleccionar tipo de noticia"><br>
  <a href="borrar.php" class="btn btn-primary">Borrar cookie</a>
  </div>
</form>
</body>
</html>