<?php
// hacer una funcion que reciba como parametros
//filas, columnas y un texto
// pintar una tabla html de esas filas y columnas
//y en cada celda mostraremos el texto
function pintarTabla($filas, $columas, $mensaje)
{
    echo "<table align='center' border='2'>";
    for ($f = 0; $f < $filas; $f++) {
        echo "<tr>";
        for ($c = 0; $c < $columas; $c++) {
            echo "<td>$mensaje</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
pintarTabla(4,5,"Hola");
pintarTabla(6, 10, "Adios");
// Ahora haremos la funcion hacerOperacion($num1, $num2, $operacion)
//$operacion sera '+', '-', 'x' y '/'
// si es otra cosa daremos error operacion no permitida
//devolveremos el resultado de la operacion O el error
function hacerOperacion($num1, $num2, $operacion){
    if($operacion=='+'){
        return $num1+$num2;
    }
    if($operacion=='-'){
        return $num1-$num2;
    }
    if($operacion=='x' || $operacion=='X'){
        return $num1*$num2;
    }
    if($operacion=='/'){
        if($num2==0){
            return "Error, no se puede dividir por '0' !!!!";
        }
        return $num1/$num2;
    }
    return "<br><b>Error, operación <i><b>$operacion</i></b> NO soportada!!!!!!!</b>";
}
$num1=10;
$num2=0;
echo "<br>$num1 / $num2 = ".hacerOperacion($num1, $num2, '/');