<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Iniciar Sesión</title>
</head>
<body>
    <section id="p_login" class="flex justify-center py-28">
        <div class="flex flex-row items-center space-x-12">
            <div class="w-[400px] h-[450px]">
                <img src="../assets/img/session_woman.png" class="w-full h-full">
            </div>
            <form action="../controller/usuarioController.php" method="POST">
                <div class="flex flex-col items-center space-y-6">
                    <div class="text-4xl font-sans">INICIAR SESIÓN</div>
                    <?php if (isset($_GET['error'])): ?>
                        <div class="text-red-500"><?php echo htmlspecialchars($_GET['error']); ?></div>
                    <?php endif; ?>
                    <div class="w-[280px] h-[50px] border">
                        <input type="text" name="email" placeholder="Correo electrónico" class="w-full h-full p-2" required>
                    </div>
                    <div class="w-[280px] h-[50px] border">
                        <input type="password" name="password" placeholder="Contraseña" class="w-full h-full p-2" required>
                    </div>
                    <div class="w-[280px] h-[50px]">
                        <button type="submit" class="w-full h-full bg-blue-500 text-white p-2">Iniciar sesión</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
