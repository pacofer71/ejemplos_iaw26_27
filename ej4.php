<?php
// Bucles for(), while(), do while
//1.- Sentencias logicas, toma de decision
/*
    AND=>&&
    OR=>||
    NOT=> ! 
    ==, === igual, comparacion,
    >= mayor o igual
    <= menor o igual
    !=, !== distinto
*/
$edad=13;
if($edad>=18){
    echo "Eres Mayor de edad";
}else{
    echo "Eres Menor de edad";
}
$edad=43;
$vip=true;
// si el usuario es mayor de edad y vip entonces
//pondremos tienes acceso, eoc pondremos NO tienes acceso
echo "<br>";
if($edad>=18 && $vip==true){
    echo "Enhora Buena tienes acceso";
}else{
    echo "NO tiene acceso....";
}
// tenemos dos numeros num1 y num2, quiero escribirlos de forma
// numero_menor < numero_mayor 'o numero_1=numero_2
echo "<hr>";
$num1=5;
$num2=45;
// -90 < 45 $num1=23, num2=100 23 < 100
// esto NO contemplaria el caso que los numeros sean iguales
if($num1<$num2){
    echo "$num1 < $num2";
}else{
    echo "$num2 < $num1";
}
// Vamos a arregarlo
echo "<br>";
if($num1<$num2){
    echo "$num1 < $num2";
}elseif($num2<$num1){
    echo "$num2 < $num1";
}else{
    echo "$num1 = $num2";
}
// diferencias entre == y ===
$valor=34;
$valor1="34";
$valor2=34.0;
echo "<hr>";
if($valor===$valor1){
    echo "SON IGUALES";
}else{
    echo "SON DIFERENTES";
}
//-----------------------------------------------------------
//BUCLES es para hacer cosas repetitivas
//quiero pintar los numeros de 1 a 100
echo "<h2><center>BUCLES</center></h2>";
for($i=1; $i<=10; $i*=3){
    echo "$i, ";
}
echo "<hr>";
for($i=100; $i>=1; $i--){
    echo "$i, ";
}
//usando un bucle tabla de multiplicar del 7=> 7, 14, 21 ....
echo "<br>";
for($i=7; $i<=70; $i+=7){
    echo "$i, ";
}
/* ahora en nuestra incesante busqueda del conocimeinto queremos
7x1=7
7x2=14
------
------
7x10=70
*/
echo "<hr>";
$num=4;
for($i=1; $i<=10; $i++){
    echo "$num x $i = ". ($i*$num). "<br>";
}
// bucle while()
echo "<hr>";
$numero=1;
while($numero<=100){
    echo "$numero, ";
    $numero++;
}
echo "<hr>";
$numero=1;
while(true){
    echo "$numero, ";
    $numero++;
    if($numero>100) break;
}
//------------- do while()
echo "<hr>";
$numero=1;
do{
    echo "$numero, ";
    $numero++;
}while($numero<=100);
//---------------------------- %
// usando % haremos un programa que dado un valor
//mayor que 50 guardado en una variable, me cuente
// el numero de divisores de dicho valor, por ejemplo
// 12 => (1, 2, 3, 4, 6, 12) mostrariamos 6
echo "<hr>";
$valor=80;
$contador=0;
for($candidato=1; $candidato<=$valor; $candidato++){
    if($valor%$candidato===0){
        $contador++; // hemos encontrado un dicisor lo cuento
    }
}
echo "$valor tiene $contador de divisores";
// Ahora queremos mostrar los divisore y decir la cantidad
// por ejemplo $valor=10
// 1, 2, 5, 10
// 10 TIENE 4 DIVISORES
echo "<hr>";
$valor=80;
$contador=0;
for($candidato=1; $candidato<=$valor; $candidato++){
    if($valor%$candidato===0){
        $contador++; // hemos encontrado un diVisor lo cuento
        echo "$candidato, "; // Lo muestro
    }
}
echo "<br>$valor tiene $contador de divisores";
// Un numero primo es un  numero entero mayor que 1 que 
//solo tiene dos divisores, el mismo y la unidad
//por ejuemplo 7 sus unicos divisores son el 1 y el 7
//Vamos a hacer un programa que me diga si un numero
//gradado en una variable es o no primo
$numero=100;
$numDiv=0;
for($i=1; $i<=$numero; $i++){
    if($numero%$i == 0){
        $numDiv++;
    }
}
if($numDiv==2){
    echo "<br>$numero SI es primo";
}else{
    echo "<br>$numero NO es primo";
}
// Algoritmo mejorado
$numero=5;
$chivato=true;
for($i=2; $i<$numero; $i++){
    if($numero%$i == 0){
        echo "<br>$numero NO es primo";
        $chivato=false;
        break;
    }
}
if($chivato){
    echo "<br>$numero SI es primo";
}

