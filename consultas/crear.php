<?php 

include '../config/conexion.php'; 

$orden = $_POST ["numeroOrden"];
$nombre = $_POST ["nombreOrden"];
$telefono = $_POST ["telefonoOrden"];
$marca = $_POST ["marcaOrden"];
$modelo = $_POST ["modeloOrden"];
$problema = $_POST ["problemaOrden"];
$recepcion = $_POST ["recepcionOrden"];
$costo = $_POST ["costoOrden"];
$presupuesto = $_POST ["presupuestoOrden"];


 
$insertar = "INSERT INTO `ordenes` (`id`, `orden`, `nombre`, `telefono`, `marca`, `modelo`, `problema`, `recepcion`, `costo`, `presupuesto`) VALUES (NULL, '$orden', '$nombre', '$telefono', '$marca', '$modelo', '$problema', '$recepcion', '$costo', '$presupuesto')";

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado){
    echo 'Error al registrarse';}
else {
    mysqli_close($conexion);
    header('Location: ../views/index.php');

};


?>