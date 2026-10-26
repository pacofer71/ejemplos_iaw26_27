<?php
    session_start();
    //protejemos la pagina, solo podemos estar aqui si no hemos logeado
    if(!isset($_SESSION['email'])){
        header("Location: index.php");
        exit;
    }
    $color=($_SESSION['perfil']==0) ? "bg-purple-300" : "bg-red-300";
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

<body class="<?= $color ?> p-8">
    <p>Te has logeado como: <?= $_SESSION['email'] ?></p>
    <div class="mt-4">
    <a href="cerrar.php" class="p-2 text-white font-bold rounded-xl bg-red-600 hover:bg-red-800">Salir</a>
    <?php
        if($_SESSION['perfil']==1){
            echo "<a href='admin.php' class='ml-4 p-2 text-white font-bold rounded-xl bg-green-600 hover:bg-green-800'>Administracion</a>";
        }
    ?>
    </div>
</body>
</html>