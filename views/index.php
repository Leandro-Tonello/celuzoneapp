<DOCTYPE html>
<html lang="es">
<?php include('head.php'); ?>

<body>
<?php include('header.php'); ?>
<?php include_once('../config/conexion.php'); ?>

<?php include('buscador.php'); ?>



<div class="container-fluid">

    <table class="table  table-striped  table-bordered">

        <thead class="thead-dark">
        <tr>
            <th scope="col">Orden</th>
            <th scope="col">Nombre</th>
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
        $sql="SELECT * FROM `ordenes`";
        $result=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
         ?>

            <tr>
                <td><?php echo $mostrar['orden'] ?></td>
                <td><?php echo $mostrar['nombre'] ?></td>
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