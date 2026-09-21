<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>
        <center>Primera Página</center>
    </h2>
    <?php
    echo '<b>Hola</b>';
    echo "<br><i>HOLA</i>";
    echo '<hr>';
    echo 'Hola "Manolo"'; // podemos poner "" dentro de ''
    echo "<br>";
    echo "Hola 'Manolo'";
    // Esto es un comentario de una line, se ignora
    /*
            este comentario
            ocupa varias line
            as
            las que quiera
        */
    // veamos algunos caracteres de escape
    echo '<br>';
    echo "Manolo es un tio \"Grande\""; // escapamos \" comillas
    echo "<br>";
    echo 'Juan es \'Feliz\'';
    // variables y tipos
    $nombre = "Ana";
    //$Nombre="Andres"; seria diferente a $nombre
    $apellidos = "Lopez Gil";
    $sdfsdfgs = "Pedro"; //mala idea de nombre de variable
    echo '<br>';
    echo $nombre;
    echo '<br>';
    echo $apellidos;
    echo '<br>';
    echo "El nombre completo es: " . $nombre . ", " . $apellidos;
    echo '<br>';
    echo $nombre . $apellidos;
    echo '<hr>';
    echo "Nombre completo $apellidos, $nombre";
    echo '<br>';
    echo "Nombre completo \$apellidos, \$nombre";
    echo '<br>';
    echo 'Nombre completo $apellidos, $nombre';
    //---------------------------------------------------
    // Tipos de variables
    // int enteros, float o double decimales, string cadenas, bool booleanos (verdadero o falso)
    $numero1=56;

    $numero2=56.89;
    $texto="En un lugar de la...";
    $sentencia=false;
    echo '<br><hr>';
    echo "<br>El valor de \$numero1 es $numero1 y el tipo es: ".gettype($numero1);
    echo "<br>El valor de \$numero2 es $numero2 y el tipo es: ".gettype($numero2);
    echo "<br>El valor de \$texto es $texto y el tipo es: ".gettype($texto);
    echo "<br>El valor de \$sentencia es $sentencia y el tipo es: ".gettype($sentencia);
    $numero1="Hola";
    echo "<br>El valor de \$numero1 es $numero1 y el tipo es: ".gettype($numero1);

    //-------------------------------
    $var="Soy una cadena";
    $var2=true;
    echo '<hr>';
    var_dump($var);
    echo '<br>';
    var_dump($var2);



    ?>
</body>

</html>