<div class="container mt-5 py-5 bg-secondary text-center text-light">
    <div class="row">
        <div class="col">
            <h1 class="display-1">CRUD PHP</h1>
            <p class="fs-4">Este sistema te permitira realizar las tareas clasicas de un CRUD</p>
            <!-- <a href="./read" class="btn btn-warning">Acceder al CRUD</a> -->
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Iniciar sesión</h2>
            <div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="pass" name="pass" required>
                </div>
                <button id="btnIniciar" class="btn btn-primary">Iniciar sesión</button>
            </div>
            <p class="card-text mt-3">¿No tienes una cuenta? <a href="./register">Regístrate</a></p>
        </div>
    </div>
</div>
<?php
    require "./app/controller/login.controller.php";
?>















<!-- <div class="container mt-4">
    <div class="row">
        <div class="col">
            <span id="session" class="btn btn-success">Generar Sesion Aleatoria</span>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col">
            <a class="btn btn-warning" href="./comprobar">comprobar Sesion</a>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col">
            <a class="btn btn-danger" href="./close">cerrar Sesion</a>
        </div>
    </div>
</div>
<script src="./app/session/manager/session.js"></script> -->