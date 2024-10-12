<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email']; 
    $password = $_POST['password'];

    require_once '../config/database.php';
    require_once '../model/usuario.php';
    
    $database = new Database();
    $db = $database->getConnection();
    $userModel = new UserModel($db);
    
    $user = $userModel->authenticate($email, $password);

    if ($user) {
        $_SESSION['user'] = $email;
        header("Location: ../view/home.php");
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos.";
        header("Location: ../view/logIn.php?error=" . urlencode($error));
        exit;
    }
}
?>
