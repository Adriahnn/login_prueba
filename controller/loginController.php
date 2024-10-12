<?php
class LoginController {
    private $userModel;

    public function __construct($userModel) {
        $this->userModel = $userModel;
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->userModel->authenticate($username, $password);
            if ($user) {
                session_start();
                $_SESSION['user'] = $user['username'];
                header("Location: ../view/home.php");
                exit;
            } else {
                $error = "correo o contraseña incorrectos";
                header("Location: ../view/logIn.php?error=" . urlencode($error));
                exit;
            }
        } else {
            require '../view/logIn.php';
        }
    }
    public function logout() {
        session_start();
        session_destroy();
        header("Location: ../view/logIn.php");
    }
}
?>
