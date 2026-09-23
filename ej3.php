<?php
//operadores
$num1=45;
// 1.- Post, pre incrementos, operador +=, -=, .= ...
//$num1=$num1+15;
$num1+=15;
echo $num1;
$num1-=30; // $num1=$num1-30
echo "<br>Ahora num1=$num1";
$num1*=2; // $num1=$num1*2
echo "<br>Ahora num1=$num1";
$cadena="Hola";
$cadena.=" Mundo"; // es como $cadena=$cadena." Mundo";
echo "<br>$cadena";
// cuando el numero a operar es 1 hay otra abreviatura 
$numero=100;
$numero++; // es como $numero=$numero+1, es decir $numero+=1;
echo "<br>numero=$numero";
$numero--;
echo "<br>numero=$numero";
// $num++ es postincremento y ++$num es preincremento
$cantidad=100;
echo "<br>Muestrame cantidad, ".$cantidad++;
echo "<br>$cantidad";
//---------------------------
$cantidad=100;
echo "<br>Muestrame cantidad, ".++$cantidad;
echo "<br>$cantidad";
//-------------------------------------------


