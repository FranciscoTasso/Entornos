<?php 
session_start();
?>
<html>
<head>
</head>
<body>

<h3 align="center">Usuario: <?php echo $_SESSION["usuario"];?></h3>
<h3 align="center">Clave: <?php echo $_SESSION["clave"];?></h3>
</body>
</html>

