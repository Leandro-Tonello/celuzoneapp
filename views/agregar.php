<DOCTYPE html>
    <html lang="es">
    <?php include('head.php'); ?>
   
    <body>
    <?php include('header.php'); ?>

    <div class="container">
      <h4 class="mt-5 mb-4">Formulario de Ingreso :</h4>
        <form action="../consultas/crear.php" method="post">
    
        <div class="form-row">
        
             <div class="form-group col-md-3">
                <label for="ExampleForName">Numero de Orden</label>
                <input type="number" required class="form-control" name="numeroOrden"  placeholder="Ingrese el Numero">
            </div>

            <div class="form-group col-md-2">
                <label for="exampleInputType">Nombre</label>
                <input type="text" required class="form-control" name="nombreOrden" placeholder="Ingrese el nombre">
            </div>

            <div class="form-group col-md-2">
                <label for="exampleInputType">Apellido</label>
                <input type="text" required class="form-control" name="apellidoOrden" placeholder="Ingrese el nombre">
            </div>

            <div class="form-group col-md-5">
                <label for="ExampleForName">Numero de contacto</label>
                <input type="number" required class="form-control" name="telefonoOrden"  placeholder="Ingrese el numero">
            </div>

         </div>

        <div class="form-row">
        
            <div class="form-group col-md-2">
                <label for="exampleInputType">Fecha de recepcion</label>
                <input type="date" required class="form-control" name="recepcionOrden" >
            </div>

            <div class="form-group col-md-5">
                <label for="exampleInputType">Marca del equipo</label>
                <input type="text" required class="form-control" name="marcaOrden" placeholder="Samsung, Lg, Sony">
            </div>

            <div class="form-group col-md-5">
                <label for="ExampleForName">Modelo del equipo</label>
                <input type="text" required class="form-control" name="modeloOrden"  placeholder="SM-530AR">
            </div>

        </div>

        <div class="form-row">
        
            <div class="form-group col-md-6">
                <label for="ExampleForName">Problema a reparar</label>
                <input type="text" required class="form-control" name="problemaOrden"  placeholder="Cambio de Modulo, Pin de carga">
            </div>

              <div class="form-group col-md-6">
                <label for="ExampleForName">Detalle</label>
                <input type="text" required class="form-control" name="detalleOrden"  placeholder="Vidrio astillado, telefono apagado">
            </div>

        </div>



        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="exampleInputType">Costo del repuesto</label>
                <input type="number" required class="form-control" name="costoOrden" placeholder="Ingrese el costo">
            </div>

            <div class="form-group col-md-6">
                <label for="ExampleForName">Presupuesto al cliente</label>
                <input type="number" required class="form-control" name="presupuestoOrden"  placeholder="Ingrese el presupuesto">
            </div>

        </div>

        <div class="form-row">

            <div class="form-group col-md-4">
                <label for="ExampleForName">Modo de cobro</label>
           
                    <select type="text" required class="form-control" name="modoOrden">

                        <option selected="Efectivo">Efectivo</option>

                        <option>Transferencia</option>

                        <option>Crédito</option>

                        <option>Debito</option>

                    </select>
        </div>

    <div class="form-group col-md-4">
            <label for="ExampleForName">Estado</label>
           
            <select type="text" required class="form-control" name="estadoOrden">

                <option selected="Pendiente">Pendiente</option>

                <option>Reparado</option>

                <option>Entregado</option>

                <option>Irreparable</option>

                <option>Negado</option>

            </select>
        </div>


            <div class="form-group col-md-4">
                <label for="exampleInputType">Fecha de Retiro</label>
                <input type="date"  class="form-control" name="retiraOrden" >
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>


    </div>

    </body>
    </html>
