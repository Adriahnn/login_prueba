<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: logIn.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>
<body>
    <section class="flex justify-center py-28">
        <div>
            <h1 class="text-4xl font-bold">Bienvenido, <?php echo $_SESSION['user']; ?>!</h1>
            <p class="mt-4">Esta es tu interfaz de usuario.</p>
            <a href="../controller/logout.php" class="text-blue-500">Cerrar sesión</a>
        </div>
    </section>
</body>
</html>
