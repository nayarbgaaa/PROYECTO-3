<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4" style="font-family: 'Rubik Bubbles', cursive;"><?php echo $titulo; ?></h1>

            <div>
                <p>
                    <a href="<?php echo base_url(); ?>/categorias/nuevo" class="btn btn-success"><i class="bi bi-arrow-down-up"></i> Agregar</a>
                    <a href="<?php echo base_url(); ?>/categorias/eliminados" class="btn btn-info"><i class="bi bi-file-earmark-x-fill"></i> Eliminados</a>
                </p>
            </div>
            
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>EDITAR</th>
                        <th>BORRAR</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($datos as $dato) { ?>

                        <tr>
                            <td><?php echo $dato['id']; ?></td>
                            <td><?php echo $dato['nombre']; ?></td>

                            <td><!--EDITAR-->
                                <a href="<?php echo base_url(); ?>/categorias/editar/<?php echo $dato['id']; ?>" class="btn btn-warning"><i class="fa-solid fa-square-pen"></i> Editar</a>
                            </td>
                            <td><!--BORRAR-->
                                <a href="<?php echo base_url(); ?>/categorias/eliminar/<?php echo $dato['id']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Borrar</a>
                            </td>
                        </tr>

                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </main>
