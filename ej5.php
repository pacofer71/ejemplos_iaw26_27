<?php
//bucles repaso
//sacar por pantalla los numeros desde $menor a $mayor
$menor = 123;
$mayor = 450;
for ($i = $menor; $i <= $mayor; $i++) {
    echo "$i, ";
}
echo "<hr>";
while ($menor <= $mayor) {
    //echo "$menor, ";
    //$menor++;
    echo $menor++ . ", ";
}
echo "<hr>";
$menor = 123;
$mayor = 450;
do {
    echo $menor++ . ", ";
} while ($menor <= $mayor);
// vamos a pintar una tabla html de $filas y $columnas;
//_---------------------------------------------------
$filas = 20;
$columnas = 30;
echo "<hr>";
echo "<table border='1' align='center'>";
for ($f = 0; $f < $filas; $f++) {
    echo "<tr>";
    for ($c = 0; $c < $columnas; $c++) {
        echo "<td>HOLA</td>";
    }
    echo "</tr>";
}
echo "</table>";
//-------------------------------------------------
//tabla de $filas x $columnas donde en cada celda
//vayan apareciendo los numeros consecutivos desde 1 a $ffilas x $columnas
echo "<hr>";
echo "<table border='3' align='center'>";
$numero = 1;
for ($f = 0; $f < $filas; $f++) {

    //pintamos las filas
    echo "<tr>";
    for ($c = 0; $c < $columnas; $c++) {
        echo "<td>" . $numero++ . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<hr>";
// Ahora pintaremos en cada celda sus cordenadas (f, c) donde f es la fila 
// y c la columna, empezaremos por 0
$filas = 7;
$columnas = 9;
echo "<table border='3' align='center'>";
for ($f = 0; $f < $filas; $f++) {

    //pintamos las filas
    echo "<tr>";
    for ($c = 0; $c < $columnas; $c++) {
        echo "<td>($f, $c)</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<hr>";
// Ahora tabla alternando filas blancas (pares) y negras (impares)
$filas = 7;
$columnas = 9;
echo "<table border='3' align='center'>";
for ($f = 0; $f < $filas; $f++) {
    if ($f % 2 == 0) {
        $color = 'white';
    } else {
        $color = 'black';
    }
    //pintamos las filas
    echo "<tr bgcolor='$color'>";
    for ($c = 0; $c < $columnas; $c++) {
        echo "<td>&nbsp;&nbsp;&nbsp;</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<hr>";
// Ahora tabla alternando columnas blancas (pares) y negras (impares)
$filas = 7;
$columnas = 9;
echo "<table border='3' align='center'>";
for ($f = 0; $f < $filas; $f++) {
    //pintamos las filas
    echo "<tr>";
    for ($c = 0; $c < $columnas; $c++) {
        if ($c % 2 == 0) {
            $color = 'white';
        } else {
            $color = 'black';
        }
        echo "<td bgcolor='$color'>&nbsp;&nbsp;&nbsp;</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<hr>";
echo "<hr>";
// Ahora tablero de Ajedrez
$filas = 8;
$columnas = 8;
echo "<table border='3' align='center' cellpadding='9'>";
for ($f = 0; $f < $filas; $f++) {
    //pintamos las filas
    echo "<tr>";
    for ($c = 0; $c < $columnas; $c++) {
        //si la fila es par pinto la celdas blancas, negras, blancas, negras..
        //si es impar las pinti negras, blancas, negras, blancas, .....
        //$color='';
        if ($f % 2 === 0) { //filas pares empiezo blanco negro
            if ($c % 2 == 0) {
                $color = 'white';
            } else {
                $color = 'black';
            }
        }else{ // filas impares empiezo negro, blanco,...
            if ($c % 2 == 0) {
                $color = 'black';
            } else {
                $color = 'white';
            }
        }
        echo "<td bgcolor='$color'>&nbsp;&nbsp;&nbsp;</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<hr>";
// Ahora tablero de Ajedrez
$filas = 8;
$columnas = 8;
echo "<table border='3' align='center' cellpadding='9'>";
for ($f = 0; $f < $filas; $f++) {
    //pintamos las filas
    echo "<tr>";
    for ($c = 0; $c < $columnas; $c++) {
        //otra forma de verlo
        // las celdas blancas sus indice de fila y columnas o son pares los dos
        //o son impares, en las NEGRAS van siempre un par con un impar
       if($f%2===$c%2){
            $color='white';
       }else{
            $color='black';
       }
        echo "<td bgcolor='$color'>&nbsp;&nbsp;&nbsp;</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<hr>";
echo "<hr>";
// Ahora tablero de Ajedrez
$filas = 8;
$columnas = 8;
echo "<table border='3' align='center' cellpadding='9'>";
for ($f = 0; $f < $filas; $f++) {
    //pintamos las filas
    echo "<tr>";
    for ($c = 0; $c < $columnas; $c++) {
        //si fila + columna es par blanca, eoc negra
       if(($f+$c)%2==0){
            $color='white';
       }else{
            $color='black';
       }
        echo "<td bgcolor='$color'>&nbsp;&nbsp;&nbsp;</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<hr>";
