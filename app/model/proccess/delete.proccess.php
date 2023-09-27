<?php  
    require "../crud.class.php";

    $crud = new Crud();

    $crud->delete([
        "id" => $_POST["id"],
    ]);
?>