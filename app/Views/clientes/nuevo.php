<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4" style="font-family: 'Rubik Bubbles', cursive;"><?php echo $titulo; ?></h1>
            
            <?php if(isset($validation)){?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $validation->listErrors(); ?>
                </div>
            <?php }?>

            <form method="POST" action="<?php echo base_url(); ?>/clientes/insertar" autocomplete="off" >
            
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label>Nombre:</label>
                        <input id="nombre" value="<?php echo set_value('nombre') ?>" class="form-control" type="text" name="nombre" autofocus required />
                    </div>

                    <div class="col-12 col-sm-6">
                        <label>Direccion:</label>
                        <input id="direccion" value="<?php echo set_value('direccion') ?>" class="form-control" type="text" name="direccion" required />
                    </div>
                </div>
            </div>

            <br>

            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label>Telefono:</label>
                        <input id="telefono" value="<?php echo set_value('telefono') ?>" class="form-control" type="text" name="telefono"/>
                    </div>

                    <div class="col-12 col-sm-6">
                        <label>Correo:</label>
                        <input id="correo" value="<?php echo set_value('correo') ?>" class="form-control" type="text" name="correo" autofocus required />
                    </div>
                </div>
            </div>

            <br>

            <a href="<?php echo base_url(); ?>/clientes" class="btn btn-primary"><i class="bi bi-arrow-90deg-left"></i>Regresar</a>
            <button type="submit" class="btn btn-success"><i class="bi bi-check-all"></i> Guardar</button>

            </form>
        </div>
    </main>