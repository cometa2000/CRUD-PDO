<div class="container">
    <div class="row">
        <div class="col">
            <h1>Crear contacto</h1>
            <div>
                <div class="mb-3">
                    <input type="hidden" id="creadoPor" name="creadoPor" value="<?php echo $_SESSION['session'] ?>">
                </div>
                <div class="mb-3">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>
                <div class="mb-3">
                    <label for="">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email"  class="form-control" name="email" id="email">
                </div>
                <div class="mb-3">
                    <label for="">Categoria</label>
                    <select class="form-select" name="categoria" id="categoria">
                        <?php 
                            foreach ($categorias as $categoria):
                                echo '<option value="'.$categoria["categoria"].'">'.$categoria["categoria"].'</option>';
                            endforeach;
                        ?>
                    </select>
                </div>
                <button id="crear" class="btn btn-success">Crear</button>
                <a href="./read" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
</div>
<?php include "./app/controller/create.controller.php"  ?>