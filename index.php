<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        session_start();
        require './app/views/includes/metatags.php';
    ?>
</head>
<body> 

    <?php
        require "./app/model/crud.class.php";
        $crud = new Crud();
        if(isset($_GET["vista"])){
            switch($_GET["vista"]){
                case 'home':
                    include "./app/views/home.php";
                    break;
                case 'read':
                    if(isset($_SESSION['session'])) {
                        $contactos = $crud->read($_SESSION['session']);
                        include "./app/views/read.php";
                    } else {
                        header('location: ./home');
                    }
                    break;
                case 'read2':
                    if(isset($_SESSION['session'])) {
                        $categorias = $crud->read2();
                        include "./app/views/read2.php";
                    } else {
                        header('location: ./home');
                    }
                    break;
                case 'update':
                    if(isset($_SESSION['session'])) {
                        $contacto = $crud->show($_GET["id"]);
                        include "./app/views/update.php";
                    } else {
                        header('location: ./home');
                    }
                    break;
                case 'updateCate':
                    if(isset($_SESSION['session'])) {
                        $categoria = $crud->showCate($_GET["id"]);
                        include "./app/views/updateCate.php";
                    } else {
                        header('location: ./home');
                    }
                    break;
                case 'create':
                    if(isset($_SESSION['session'])) {
                        $categorias = $crud->read2();
                        include "./app/views/create.php";
                    } else {
                        header('location: ./home');
                    }
                    break;
                case 'createCate':
                    if(isset($_SESSION['session'])) {
                        include "./app/views/createCate.php";
                    } else {
                        header('location: ./home');
                    }
                    break;
                case 'delete':
                    if(isset($_SESSION['session'])) {
                        include "./app/views/delete.php";
                    } else {
                        header('location: ./home');
                    }
                    break;
                case 'register':
                    include "./app/views/register.php";
                    break;
                case 'close':
                    include "./app/controller/close.controller.php";
                    break;
                default:
                    header("location: ./read");
                    break;
            }
        }else{
            header("location: ./home");
        }
    ?>
   

    <?php require './app/views/includes/scripts.php' ?>
</body>
</html>