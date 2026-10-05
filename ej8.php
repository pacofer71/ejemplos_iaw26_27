<?php
//pintar una tabla de 8x8 con los bordes negros y el resto blanco
$filas=8;
$columnas=18;
echo "<table align='center' border='2'>";
for($f=0; $f<$filas; $f++){
    if($f==0 || $f==($filas-1)){
        $color='black';
    }else{
        $color='';
    }
    echo "<tr bgcolor='$color'>";
    for($c=0; $c<$columnas; $c++){
        if($c==0 || $c==($columnas-1)){
            $color1='black';
        }else{
            $color1='';
        }
        echo "<td bgcolor='$color1'>&nbsp;&nbsp;&nbsp;</td>";
    }
    echo "</tr>";
}
echo "</table>";