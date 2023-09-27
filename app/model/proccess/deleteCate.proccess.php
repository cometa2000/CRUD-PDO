<?php  
    require "../crud.class.php";

    $crud = new Crud();

    $crud->deleteCate([
        "id" => $_POST["id"],
    ]);
?>