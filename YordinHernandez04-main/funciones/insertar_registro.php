<?php

require '/includes/conexion_bd.php';

$insertar_datos = capturarDatos();


$nombre = $insertar_datos['nombre'];
$celular = $insertar_datos['telefono'];
$correo = $insertar_datos['correo'];
$mensaje = $insertar_datos['mensaje'];
$fecha = $insertar_datos['fecha'];
$fechaNac = date('Y-m-d', strtotime($fecha));


require '../includes/conexion_bd.php';

$sql = 'INSERT INTO formulario (nombre, telefono, correo, fecha) VALUES ('. $nombre . '", "' . $fecha . '", "' . $celular . '", "' . $correo . '");';

$consul = mysqli_query($coneccion, $sql);

header("location: ../contacto.php");