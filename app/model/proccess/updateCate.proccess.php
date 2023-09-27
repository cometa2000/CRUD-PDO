<?php  
    require "../crud.class.php";

    $crud = new Crud();

    $crud->updateCate([
        "id" => $_POST["id"],
        "categoria" => $_POST["categoria"],
    ]);
?>