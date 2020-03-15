<?php 

include '../config/conexion.php'; 

$orden = $_POST ["numeroOrden"];
$nombre = $_POST ["nombreOrden"];
$telefono = $_POST ["telefonoOrden"];
$marca = $_POST ["marcaOrden"];
$modelo = $_POST ["modeloOrden"];
$problema = $_POST ["problemaOrden"];
$recepcion = $_POST ["recepcionOrden"];
$retira = $_POST ["retiraOrden"];
$costo = $_POST ["costoOrden"];
$presupuesto = $_POST ["presupuestoOrden"];
$ganancia = $presupuesto - $costo ;
$modo = $_POST ["modoOrden"];
$estado = $_POST ["estadoOrden"];
$detalle = $_POST ["detalleOrden"];


 
$insertar = "INSERT INTO `ordenes` (`id`, `orden`, `nombre`, `telefono`, `marca`, `modelo`, `problema`, `detalle`, `recepcion`, `retira`, `costo`, `presupuesto`, `ganancia`, `modo`, `estado`) VALUES (NULL, '$orden', '$nombre', '$telefono', '$marca', '$modelo', '$problema', '$detalle', '$recepcion','$retira' , '$costo', '$presupuesto', '$ganancia', '$modo', '$estado');";

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado){
    echo 'Error al registrarse';}
else {
    mysqli_close($conexion);
    header('Location: ../views/index.php');

};


?>