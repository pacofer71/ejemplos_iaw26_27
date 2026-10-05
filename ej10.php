<?php
//HAcer una funcion que reciba un numero entero mayor que 1
//devuelva true si el numero ES primo
//false eoc.
function esPrimo($numero)
{
    //vaamos a validar $numero
    //debe ser entero y mayor que 1
    if (!is_int($numero) || $numero <= 1) {
        echo "ERROR, se esperaba un número entero mayor que 1!!!!";
        return;
    }
    //si he llegado aqui el numero es bueno 
    for($i=2;$i<$numero; $i++){
        if($numero%$i==0) return false;
    }
    return true;
}
$numero=5;
if(esPrimo($numero)){
    echo "<br>$numero ES primo";
}else{
    echo "<br>$numero NO ES primo";
}
// vamos a usar esta funcion para dar todos los primos entre 1 y un numero dado
$numero=10;
echo "<br>";
for($i=2; $i<=$numero; $i++){
    if(esPrimo($i)){
        echo "$i, ";
    }
}
//mostrar $cantidad de primos empezando por el primero es decir el 2
//pe cantidad=5 =>2, 3, 5, 7, 11
$cantidad=1000;
$inicio=2;
echo "<hr>";
do{
    if(esPrimo($inicio)){
        $cantidad--;
        echo "$inicio, ";
    }
    $inicio++;
}while($cantidad>0);