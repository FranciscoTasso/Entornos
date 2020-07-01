<?php
session_start();
if (isset($_SESSION['nombre'])){
    ?>
    <div align:center>
        <h1>Bienvenido alumno</h1><br>
        <p>
           Nombre: <?php echo $_SESSION["nombre"]; ?>
        </p>
        <p>
           Codigo: <?php echo $_SESSION["codigo"]; ?>
        </p>
        <p>
           Email: <?php echo $_SESSION["mail"]; ?>
        </p>
        <p>
           Codigo del curso: <?php echo $_SESSION["codigocurso"]; ?>
        </p>
</div>
<?php
} else {

    ?>
    <h1>No puede visitar esta pagina</h1><br>
    <?php
}
?>