<?php

include '../config/conexion.php';

$id = $_REQUEST ["id"];



$eliminar = "DELETE FROM `ordenes` WHERE `ordenes`.`id` = '$id' ";


$resultado = mysqli_query($conexion, $eliminar);

if (!$resultado) {
    echo 'Error al registrarse';
} else {
    mysqli_close($conexion);
    header('Location: ../views/index.php');

};