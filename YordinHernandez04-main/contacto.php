<?php
require 'includes/header.php';
?>
 

<main class="container">
    

    <form class="formulario" method="POST" >
        <fieldset class="for">
            <legend>Digite todos sus datos</legend>


            <div class="label">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre"  placeholder="Digite su nombre completo" require autofocus>
            </div>

            <div class="label">
                <label for="Telefono">Telefono</label>
                <input type="number" name="Telefono" id="Tel"  placeholder="+57 3xxxxxxxxx">
            </div>

            <div class="label">
                <label for="Email">Email</label>
                <input type="text" name="email" id="email"  placeholder="correo@correo.com">
            </div>
            <div class="label">
                <label for="Men">Mensaje</label>
                <textarea name="mensaje" id="men"></textarea>
            </div>

            <input type="submit" value="enviar">


    
        </fieldset>
    </form>
</main>
<?php

$nombre = $_POST['nombre'];
$telefono = $_POST['Telefono'];
$correo = $_POST['email'];
$mensaje = $_POST['mensaje'];
try {

    require __DIR__.('/includes/conexion_bd.php');
    $sql = "INSERT INTO formulario (nombre, telefono, correo, mensaje) VALUES ('$nombre',
    '$telefono','$correo','$mensaje');";
    $query = mysqli_query($coneccion, $sql);
    echo'se ha resivido su mensaje';

} catch (\Throwable $th) {
    var_dump($th);
}




include 'includes/footer.php';
?>