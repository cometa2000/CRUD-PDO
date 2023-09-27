<div class="container">
    <div class="row">
        <div class="col mt-5">
            <h1>Registro Usuario</h1>
            <div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="mb-3">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <button id="btnRegister" class="btn btn-success">Crear</button>
                <a href="./home" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
</div>
<?php include "./app/controller/register.controller.php"  ?>