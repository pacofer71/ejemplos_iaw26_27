<?php
// No hace falta cerrar si es php puro no <html> </html> ..
// Casting de tipos convertir unas variables de un tipo en otro
$numero1=45.90;
echo "<br> El valor de numero1 es $numero1 y el tipo: ".gettype($numero1);
$numero2= (int) $numero1;
echo "<br> El valor de numero2 es $numero2 y el tipo: ".gettype($numero2);
$var="123.56";
echo "<br> El valor de var es $var y el tipo: ".gettype($var);
$var2= (float) $var;
echo "<br> El valor de var2 es $var2 y el tipo: ".gettype($var2);
$var3= (int) $var;
echo "<br> El valor de var es $var3 y el tipo: ".gettype($var3);
//--------------------------------------------------------
echo "<hr>";
$var="123.56_HOLA";
echo "<br> El valor de var es $var y el tipo: ".gettype($var);
$var2= (float) $var;
echo "<br> El valor de var2 es $var2 y el tipo: ".gettype($var2);
$var3= (int) $var;
echo "<br> El valor de var es $var3 y el tipo: ".gettype($var3);
//--------------------------------------------------------
echo "<hr>";
$var="Hola_123.56";
echo "<br> El valor de var es $var y el tipo: ".gettype($var);
$var2= (float) $var;
echo "<br> El valor de var2 es $var2 y el tipo: ".gettype($var2);
$var3= (int) $var;
echo "<br> El valor de var es $var3 y el tipo: ".gettype($var3);
//---------------------------------------------------------------
$num="";
$num2=(bool) $num;
var_dump($num2);
//----------
$num=23;
$dato=(string) $num;
echo "<br> El valor de dato es $dato y el tipo: ".gettype($dato);
// conversion automatica de tipos
echo '<hr>';
$num1=45;
$num2="67"; //Esto si funciona
$suma=$num1+$num2;
echo "$num1 + $num2 = $suma";
//-------
//echo '<hr>';
//$num1=45;
//$num2="HOLA"; // esto NO funcionará
//$suma=$num1+$num2;
//echo "$num1 + $num2 = $suma";
//-----------------------------------
//operadores
/*
    + suma,
    - resta, 
    * multiplicacion,
    / division,
    % resto o módulo
    ** potencia normalmente la funcion pow();

*/
$a=12;
$b=23.901;
$d=3;
$c=2;
echo "<br>$a + $b = ". ($a+$b);
echo "<br>$a - $b = ". ($a-$b);
echo "<br>$a / $b = ". ($a/$b);
echo "<br>$a % $d = ". ($a%$d);
echo '<br>'. $a . ' elevado a '. $c . '='. ($a**$c);
// ------------------------------
