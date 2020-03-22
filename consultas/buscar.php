<?php 

include '../config/conexion.php'; 
$salida= "";

$query= "SELECT * FROM `ordenes` ORDER BY recepcion DESC";


if(isset($_POST['consulta'])){

	$q= $conexion->real_escape_string($_POST['consulta']);
	$query= 
	"SELECT * FROM `ordenes`
        WHERE 
        `orden` LIKE '%".$q."%'
         OR `nombre` LIKE '%".$q."%'
         OR `apellido` LIKE '%".$q."%'
         OR `telefono` LIKE '%".$q."%'
         OR `marca` LIKE '%".$q."%'
         OR `modelo` LIKE '%".$q."%'
         OR `problema` LIKE '%".$q."%'
         OR `recepcion` LIKE '%".$q."%'
         OR `retira` LIKE '%".$q."%'
         OR `presupuesto` LIKE '%".$q."%'
         OR `modo` LIKE '%".$q."%'
         OR `estado` LIKE '%".$q."%' 
         ";
        }

    $resultado= $conexion->query($query);
    if($resultado->num_rows >0){

    	$salida.=
   
   "<div class='container-fluid'>
    <table class='table  table-striped  table-bordered'>

        <thead class='thead-dark'>
        <tr>
            <th scope='col'>Orden</th>
            <th scope='col'>Nombre</th>
            <th scope='col'>Apellido</th>
            <th scope='col'>Telefono</th>
            <th scope='col'>Marca</th>
            <th scope='col'>Modelo</th>
            <th scope='col'>Problema</th>
            <th scope='col'>Recepcion</th>
            <th scope='col'>Retira</th>
            <th scope='col'>Costo</th>
            <th scope='col'>Presupuesto</th> 
            <th scope='col'>Ganancia</th>
            <th scope='col'>Modo de Pago</th>
            <th scope='col'>Estado</th>
            <th scope='col'>Editar</th>
            <th scope='col'>Eliminar</th>
        </tr>
        </thead>
        <tbody>";
        
        while ($fila= $resultado->fetch_assoc()){
        	$salida.="
            <tr>
                <td>".$fila ['orden']."</td>
                <td>".$fila['nombre'] ."</td>
                <td>".$fila['apellido'] ."</td>
                <td>".$fila['telefono'] ."</td>
                <td>".$fila['marca'] ."</td>
                <td>".$fila['modelo'] ."</td>
                <td>".$fila['problema'] ."</td>
                <td>".$fila['recepcion'] ."</td>
                <td>".$fila['retira'] ."</td>
                <td>".$fila['costo'] ."</td>
                <td>".$fila['presupuesto'] ."</td>
                <td>".$fila['ganancia'] ."</td>
                <td>".$fila['modo'] ."</td>
                <td>".$fila['estado'] ."</td>
             <td >
						<button class='btn btn-warning btn-sm' data-toggle='modal' data-target='#modalEditar' onclick='agregaFrmActualizar()''>
							<span>Editar</span>
						</button>
                </td>
                <td>
                    <a>
                            <button class='btn btn-danger btn-sm'>
							    Eliminar
						    </button>
                    </a>


                </td>";
        }

        $salida.="
        </tbody></table> 
        <a href='../views/agregar.php'> 
        	<button class='btn btn-success '' >
             	 Agregar Nuevo
       		</button>
    	</a>
    	</div>  
    	"
;	
        	
    } else {
    	$salida.="No hay datos";
}
    

echo $salida;
$conexion->close();


 ?>
