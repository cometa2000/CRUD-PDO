
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <a href="./create" class="btn btn-success">Agregar Contacto</a>
            <a href="./read2" class="btn btn-secondary">Categoria</a>
            <a class="btn btn-danger" href="./close">Cerrar Sesión</a>

            <hr>
            <table class="table table-hover table-primary table-striped table-responsive table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Categoria</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>                    
                </thead>
                <tbody>
                    <?php   
                        foreach ($contactos as $contacto):
                    ?>
                    <tr>
                        <td><?php  echo $contacto["nombre"] ?></td>
                        <td><?php  echo $contacto["telefono"] ?></td>
                        <td><?php  echo $contacto["email"] ?></td>
                        <td><?php  echo $contacto["categoria"] ?></td>
                        <td><a href="./update&id=<?php echo $contacto["id"] ?>" class="btn btn-warning">Actualizar</a></td>
                        <td><button class="btn btn-danger deleteButton" data-id="<?php echo $contacto["id"] ?>">Eliminar</button></td>
                    </tr>
                    <?php  
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php  require "./app/controller/delete.controller.php" ?>