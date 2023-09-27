
<?php
    $crud = new Crud();
    $categorias = $crud->read2(); 
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Actualizar contacto</h1>
            <div>
                <div class="mb-3">
                    <input type="hidden" id="id" value="<?php echo $contacto['id'] ?>">
                </div>
                <div class="mb-3">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre a actualizar" value="<?php echo $contacto['nombre'] ?>">
                </div>
                <div class="mb-3">
                    <label for="">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingresa el telefono a actualizar" value="<?php echo $contacto['telefono'] ?>">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email"  class="form-control" name="email" id="email" placeholder="Ingresa el correo a actualizar" aria-describedby="nombreHelp" value="<?php echo $contacto['email'] ?>">
                </div>
                <div class="mb-3">
                    <label for="">Categoria</label>
                    <input type="text"  class="form-control" placeholder="Ingresa el correo a actualizar" aria-describedby="nombreHelp" value="<?php echo $contacto['categoria'] ?>" readonly>
                    <select class="form-select" name="categoria" id="categoria" value="<?php echo $contacto['categoria'] ?>">
                        <?php 
                            foreach ($categorias as $categoria):
                                echo '<option value="'.$categoria["categoria"].'">'.$categoria["categoria"].'</option>';
                            endforeach;
                        ?>
                    </select>
                </div>
                <button id="updatee" class="btn btn-warning">Actualizar</button>
                <a  class="btn btn-secondary" href="./read">Regresar</a>
            </div>
        </div>
    </div>
</div>
<?php  require "./app/controller/update.controller.php" ?>