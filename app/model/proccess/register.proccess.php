<?php  
    require "../crud.class.php";

    $crud = new Crud();
    $crud->registroUsuario([
        "email" => $_POST["email"],
        "password" => $_POST["password"]
    ]);
?>