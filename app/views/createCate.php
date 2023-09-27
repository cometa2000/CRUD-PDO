<div class="container">
    <div class="row">
        <div class="col">
            <h1>Crear Categoria</h1>
            <div>
                <div class="mb-3">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="categoria" id="categoria">
                </div>
                
                <button id="crearCate" class="btn btn-success">Crear</button>
                <a href="./read2" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
</div>
<?php include "./app/controller/createCate.controller.php"  ?>