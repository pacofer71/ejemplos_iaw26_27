<?php
//dado un numero mayor que 50, guardado en una variable
//queremos ver numero primeros numeros primos, por ejemplo
//si el numero fuese 6 querriamos ver los 6 primeros numeros primos
//2, 3, 5, 7, 11, 13
/*
$numero=24;
$esPrimo=true;
for($i=2; $i<$numero; $i++){
    if($numero%$i==0){
        //encontramos un divisor, el numero NO es primo
        $esPrimo=false;
        break;
    }
}
var_dump($esPrimo);
*/
$cantidadDePrimos = 100;
$inicio = 2;
while ($cantidadDePrimos > 0) {
    $esPrimo = true;
    for ($i = 2; $i < $inicio; $i++) {
        if ($inicio % $i == 0) {
            //encontramos un divisor, el numero NO es primo
            $esPrimo = false;
            break;
        }
    }
    if ($esPrimo) {
        echo "$inicio, ";
        $cantidadDePrimos--;
    }
    $inicio++;
}
//Ahora queremos un programa que me muestre todos los primos entre
//$numero1 y $numero2
//por ejemplo si numero1=5 y numero2=15 mostraria
// 5,7,11,13
echo "<hr>";
$num1 = 10;
$num2 = 40;
echo "<br>Los primos entre $num1 y $num2 son: <br>";
for ($candidato = $num1; $candidato <= $num2; $candidato++) {
    $esPrimo = true;
    for ($j = 2; $j < $candidato; $j++) {
        if ($candidato % $j == 0) {
            //encontramos un divisor, el numero NO es primo
            $esPrimo = false;
            break;
        }
    }
    if($esPrimo){
        echo "$candidato, ";
    }
}
