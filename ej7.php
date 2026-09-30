<?php
//hacer la tabla de multiplicar de un numero dado
//guardado en una variable en una tabla html
$numero=7;
echo "<table border='3' align='center'>";
    echo "<tr align='center'>";
        echo "<td colspan='5'>TABLA DE MULTIPLICAR DEL $numero</td>";
    echo "</tr>";
    for($fila=1; $fila<=10; $fila++){
        echo "<tr align='center'>";
            echo "<td>$numero</td>";
            echo "<td>X</td>";
            echo "<td>$fila</td>";
            echo "<td>=</td>";
            echo "<td>".$numero*$fila."</td>";
        echo "</tr>";
    }
echo "</table>";
//pintaremos una tabla de $filas y $columnas con numeros consecutivos, empezando por el 1
// ya al final, debajo de la tabla daremos la suma de todos los numeros
echo "<hr>";
$filas=2; 
$columnas=2;
$inicio=1;
$suma=0;
echo "<table align='center' border='2'>";
    for($f=0; $f<$filas; $f++){
        echo "<tr align='center'>";
            for($c=0; $c<$columnas; $c++){
                echo "<td>$inicio</td>";
                $suma+=$inicio; //suma=suma+inicio;
                $inicio++;
            }
        echo "</tr>";
    }
echo "</table>";
echo "<br>La suma de los numeros es: $suma";

// sumar todos los numeros desde 1 a un numero dado
// por ejemplo si el numero es 6 => 1+2+3+4+5+6=21
$numero=100;
$suma=0;
for($i=1; $i<=$numero; $i++){
    $suma+=$i; //$suma=$suma+$i
}
echo "<br>La suma de los $numero primeros numeros es: $suma";
// multiplacar todos los numeros desde 1 a un numero dado
// por ejemplo si el numero es 4 => 1x2x3x4=24
$numero=4;
$resultado=1;
for($i=1; $i<=$numero; $i++){
    $resultado*=$i; //$resultado=$resultado*$i
}
echo "<br>La multiplicacion de los $numero primeros numeros es: $resultado";
