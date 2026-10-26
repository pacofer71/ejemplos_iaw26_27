<?php
    session_start();
    if($_SESSION['perfil']!=1){
        header("Location:sitio.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN Tailwind css -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>

<body class="bg-green-400 p-8">
    <p>Te has logeado como: <?= $_SESSION['email'] ?></p>
    <div class="mt-4">
    <a href="cerrar.php" class="p-2 text-white font-bold rounded-xl bg-red-600 hover:bg-red-800">Salir</a>
    </div>
</body>
</html>