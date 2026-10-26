<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header("Location: index.php");
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

<body class="bg-purple-300">
    <p>Te has logeado como: <?= $_SESSION['email'] ?></p>
    <a href="cerrar.php">Salir</a>
</body>
</html>