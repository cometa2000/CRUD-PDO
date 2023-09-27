<?php  
    require "../crud.class.php";

    $crud = new Crud();
    $crud->createCate([
        "categoria" => $_POST["categoria"]
    ]);
?>