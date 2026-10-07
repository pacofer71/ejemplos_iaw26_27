<?php
//Arrays en PHP
$datos = [1, 2, 5, 7, 90, 32, 67, 100];
$nombres = ['Ana', 'Pedro', 'Lucas', 'Miguel', 'Aitana'];
echo "El indice 2 de nombres es: " . $nombres[4];
//para añadir al final
$nombres[] = "Andres";
var_dump($nombres);
$nombres[2] = "Infiltrado";
var_dump($nombres);
echo "<hr>";
//------------- Si el array es normal puedo usar esto para recorrerlo
echo "<br>El array nombres tiene: " . count($nombres) . " elementos<br>";
for ($i = 0; $i < count($nombres); $i++) {
    echo $nombres[$i] . "<br>";
}
//-----------------
$nombres[37] = "Nombre 37";
var_dump($nombres);
$nombres[12] = "Nombre 12";
var_dump($nombres);
$nombres[] = "NOmbre de indice desconocido";
var_dump($nombres);
//---------------------
unset($nombres[38]); //elimina un elemento de indice el indicado del array
var_dump($nombres);
unset($nombres[5]); //elimina un elemento de indice el indicado del array
var_dump($nombres);
//--------
$nombres[0] = ""; // Esto NO elimina el indice 0 solo lo pone a ''
var_dump($nombres);
//-------------
$nombres[] = "En este momento soy el ultimo";
var_dump($nombres);
//------------------------------------Podemos mezclar cosas
$datos = [123.45, "Ana", false, 56, 89, "Manolo"];
var_dump($datos);
//--------------------
$andalucia = ['Almeria', 'Cadiz', 'Cordoba', 'Granada', 'Huelva', 'Jaen', 'Malaga', 'Sevilla'];
$extremadura = ['Badajoz', 'Caceres'];
$murcia = ['Murcia'];
$comunidades = [$andalucia, $extremadura, $murcia];
var_dump($comunidades);
echo "<br>" . $comunidades[0][3];
echo "<br>" . $comunidades[1][1];
echo "<hr>";
for ($i = 0; $i < count($comunidades[0]); $i++) {
    echo $comunidades[0][$i] . "<br>";
}
echo "<hr>";
for ($i = 0; $i < count($comunidades); $i++) {
    for ($j = 0; $j < count($comunidades[$i]); $j++) {
        echo $comunidades[$i][$j] . "<br>";
    }
}
