<?php  
    session_start();
    require_once "../crud.class.php"; 

    if (isset($_POST["email"]) && isset($_POST["pass"])) {
        $email = $_POST["email"];
        $pass = $_POST["pass"]; 

        $crud = new Crud();

        $query = "SELECT * FROM usuarios WHERE email = :email AND pass = :pass"; 
        $stmt = $crud->getConexion()->prepare($query); 
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pass', $pass);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            $_SESSION['session'] = $usuario['id'];
            echo "success"; 
        } else {
            echo "error"; 
        }
    } else {
        echo "error"; 
    }
?>
