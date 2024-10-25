<?php
try {
    $servidor = 'localhost';
    $usuario = 'root';
    $password = 'root';
    $bd = 'proyecto';

    $coneccion = mysqli_connect($servidor, $usuario, $password, $bd);
        echo ('conecion exitosa');
} catch (\Throwable $th) {
    var_dump($th);
}