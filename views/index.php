<DOCTYPE html>
<html lang="es">
<?php include('head.php'); ?>

<body>
    
<?php include('header.php'); ?>
<?php include_once('../config/conexion.php'); ?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<div class="p-3 mb-2 bg-chimera text-white">
<div class="container-fluid">
    
<form form action="index.php" method="get">
    <div class="form-row  justify-content-center">
        <div class="form-group col-md-8">
            <h4 class="text-center mt-3 mb-3">Buscar!</h4>
            <input type="text"  name="buscado" class="form-control mb-3" placeholder="Escriba palabras relacionadas con su busqueda">
            <div class="text-center"> 
            <button type=submit  class="btn btn-dark">Traer Orden</button> 
            </div>
        </div>
    </div>          
</form>
</div>
</div>


<div class="container-fluid">

    <table class="table  table-striped  table-bordered">

        <thead class="thead-dark">
        <tr>
            <th scope="col">Orden</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Telefono</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Problema</th>
            <th scope="col">Recepcion</th>
            <th scope="col">Retira</th>
            <th scope="col">Costo</th>
            <th scope="col">Presupuesto</th> 
            <th scope="col">Ganancia</th>
            <th scope="col">Modo de Pago</th>
            <th scope="col">Estado</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
        </thead>

        <tbody>
        
        <?php

if (isset($_REQUEST['buscado']))
{
   $buscado = $_REQUEST ['buscado'];

    $sql="SELECT * FROM `ordenes`
        WHERE `orden` LIKE '$buscado'
         OR `nombre` LIKE '$buscado'
         OR `apellido` LIKE '$buscado'  
         OR `telefono` LIKE '$buscado' 
         OR `marca` LIKE '$buscado' 
         OR `modelo` LIKE '$buscado'
         OR `problema` LIKE '$buscado'
         OR `recepcion` LIKE '$buscado'
         OR `retira` LIKE '$buscado'
         OR `presupuesto` LIKE '$buscado'
         OR `modo` LIKE '$buscado'
         OR `estado` LIKE '$buscado'   ";
}
if (empty($_REQUEST['buscado']))
{
     $sql="SELECT * FROM `ordenes` ORDER BY recepcion DESC";
}
        $result=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
         ?>

            <tr>
                <td><?php echo $mostrar['orden'] ?></td>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['apellido'] ?></td>
                <td><?php echo $mostrar['telefono'] ?></td>
                <td><?php echo $mostrar['marca'] ?></td>
                <td><?php echo $mostrar['modelo'] ?></td>
                <td><?php echo $mostrar['problema'] ?></td>
                <td><?php echo $mostrar['recepcion'] ?></td>
                <td><?php echo $mostrar['retira'] ?></td>
                <td><?php echo $mostrar['costo'] ?></td>
                <td><?php echo $mostrar['presupuesto'] ?></td>
                <td><?php echo $mostrar['ganancia'] ?></td>
                <td><?php echo $mostrar['modo'] ?></td>
                <td><?php echo $mostrar['estado'] ?></td>
                <td >
						<button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
							<span>Editar</span>
						</button>
                </td>
                <td>
                    <a  href="../consultas/eliminar.php?id=<?php echo $mostrar["id"];?> ">
                            <button class="btn btn-danger btn-sm">
							    Eliminar
						    </button>
                    </a>


                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <a href="agregar.php">
        <button class="btn btn-success "  >
              Agregar Nuevo
        </button>
    </a>

</div>
</body>
</html>