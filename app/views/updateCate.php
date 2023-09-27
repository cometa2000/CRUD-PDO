<div class="container">
    <div class="row">
        <div class="col">
            <h1>Actualizar categoria</h1>
            <div>
                <div class="mb-3">
                    <input type="hidden" id="id" value="<?php echo $categoria['id'] ?>">
                </div>
                <div class="mb-3">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Ingresa el nombre  de la categoria a actualizar" value="<?php echo $categoria['categoria'] ?>">
                </div>
                <button id="updateeCate" class="btn btn-warning">Actualizar</button>
                <a  class="btn btn-secondary" href="./read2">Regresar</a>
            </div>
        </div>
    </div>
</div>
<?php  require "./app/controller/updateCate.controller.php" ?>
