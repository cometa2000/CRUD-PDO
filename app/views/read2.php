<div class="container mt-3">
    <div class="row">
        <div class="col">
            <a href="./createCate" class="btn btn-success">Agregar Categoria</a>
            <a href="./read" class="btn btn-secondary">Regresar</a>
            <a class="btn btn-danger" href="./close">Cerrar Sesión</a>
            <hr>
            <table class="table table-hover table-primary table-striped table-responsive table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>                    
                </thead>
                <tbody>
                    <?php   
                        foreach ($categorias as $categoria):
                    ?>
                    <tr>
                        <td><?php  echo $categoria["categoria"] ?></td>
                        <td><a href="./updateCate&id=<?php echo $categoria["id"] ?>" class="btn btn-warning">Actualizar</a></td>
                        <td><button class="btn btn-danger deleteCateButton" data-id="<?php echo $categoria["id"] ?>">Eliminar</button></td>
                    </tr>
                    <?php  
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php  require "./app/controller/deleteCate.controller.php" ?>

