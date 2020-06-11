
<html>
     <head>
     <style>
     form {
  margin: 50 auto;
  width: 400px;
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
}ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
label {
  display: inline-block;
  width: 90px;
  text-align: right;
}
input[type="submit"]{
	width:100%;
	padding:8px 16px;
	margin-top:32px;
	border:1px solid #000;
	border-radius:5px;
	display:block;
	color:#fff;
	background-color:#808000;
} 

     </style>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        </head>       
<body>

<?php if (!isset($_POST['submit'])) { ?> 

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
  <ul>
    <li>
      <label for="destinatario" >Destinatario: </label>   
      <input id="destinatario" name="destinatario" type=email>  
    </li>
    <li>
      <label for="asunto" >Asunto: </label>  
      <input id="asunto" name="asunto" type=text>
    </li>
    <li>
      <label for="mensaje" >Mensaje: </label>  
      <input id="mensaje" name="mensaje" type=text>
    </li>
    <li>
      <label for="emisor" >Emisor: </label>  
      <input id="emisor" name="emisor" type=text>
    </li>
    <li>
      <input style="align:right;" type="submit" name="submit" value="Enviar">
    </li>
  </ul>  
</form> 

<?php 

} else { 
$destinatario = $_POST['destinatario']; 
$asunto = $_POST['asunto']; 
$mensaje = $_POST['mensaje']; 
$emisor = $_POST['emisor']; 


function email($destinatario, $asunto, $mensaje, $emisor) {
    mail($destinatario, $asunto, $mensaje, "From: $emisor");
    echo "Se envio el email al destinatario $destinatario";
} email($destinatario, $asunto, $mensaje, $emisor);
}
?> 
</body>
</html>