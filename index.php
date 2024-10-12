<?php
session_start();

if (isset($_SESSION['user'])) {
    header("Location: ./view/home.php");
    exit;
} else {
    header("Location: ./view/logIn.php");
    exit;
}
?>
