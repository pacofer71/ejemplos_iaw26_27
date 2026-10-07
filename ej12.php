<?php
// hacer una funcion que con la ayda de otra que
//mediga si un numero es o no primo
//le pasemos un numero mayor o igual que 10 y me cuente cunatos primos hay de 
//1 a ese numero, por ejemplo
//si pasamos el 7 me dira del 1 al 7 los primos son 2, 3, 5, 7
//hay un total de 4 primos
function esPrimo43(int $n){
    for($i=2; $i<$n; $i++){
        if($n%$i==0) return -1; //devolvere -1 si el numero NO es primo 
    }
    return 1; //devolveré 1 si SI lo es

}
function contarPrimosHasta(int $numero){
    if($numero<10){
        echo "<br>ERROR, se esperabas un número mayor o igual a 10 !!!";
        return;
    }
    $contador=0;
    for($i=2; $i<=$numero; $i++){
        if(esPrimo43($i)==1){
            //Lo muestro
            echo "$i, ";
            //Lo cuento
            $contador++;
        }
    }
    echo "<br> Del 1 al $numero hay un total de $contador primos y de ahí no me muevo";
}
contarPrimosHasta(10);
