<DOCTYPE html>
    <html lang="es">
    <?php include('head.php'); ?>
   
    <body>
    <?php include('header.php'); ?>

    <div class="container">
    <form action="../consultas/crear.php" method="post">
        
        <div class="form-group">
            <label for="ExampleForName">Numero de Orden</label>
            <input type="number" required class="form-control" name="numeroOrden"  placeholder="Ingrese el Numero">
        </div>

        <div class="form-group">
            <label for="exampleInputType">Nombre y apellido</label>
            <input type="text" required class="form-control" name="nombreOrden" placeholder="Ingrese el nombre">
        </div>

          <div class="form-group">
            <label for="ExampleForName">Numero de contacto</label>
            <input type="number" required class="form-control" name="telefonoOrden"  placeholder="Ingrese el numero">
        </div>

        <div class="form-group">
            <label for="exampleInputType">Marca del equipo</label>
            <input type="text" required class="form-control" name="marcaOrden" placeholder="Samsung, Lg, Sony">
        </div>

          <div class="form-group">
            <label for="ExampleForName">Modelo del equipo</label>
            <input type="text" required class="form-control" name="modeloOrden"  placeholder="SM-530AR">
        </div>

          <div class="form-group">
            <label for="ExampleForName">Problema a reparar</label>
            <input type="text" required class="form-control" name="problemaOrden"  placeholder="Cambio de Modulo, Pin de carga">
        </div>

        <div class="form-group">
            <label for="exampleInputType">Fecha de recepcion</label>
            <input type="date" required class="form-control" name="recepcionOrden" >
        </div>

        <div class="form-group">
            <label for="exampleInputType">Costo del repuesto</label>
            <input type="number" required class="form-control" name="costoOrden" placeholder="Ingrese el costo">
        </div>

          <div class="form-group">
            <label for="ExampleForName">Presupuesto al cliente</label>
            <input type="number" required class="form-control" name="presupuestoOrden"  placeholder="Ingrese el presupuesto">
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>


    </div>

    </body>
    </html>
