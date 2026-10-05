<?php
//funciones
//Nos permiten guarar instruciones que se va a repetir
$var1=100;
$var2=50.5;
echo "<br>La suma de $var1+$var2=".sumar($var1, $var2);
function saludar(){
    echo "<center><h3>Hola Buenos Dias</h3></center>";
}
function saludar1($nombre){
    echo "<center><h3>Hola Buenos Dias, $nombre</h3></center>";
}
function saludar2($nombre, $cantidad){
    for($i=0; $i<$cantidad; $i++){
    echo "<center><h3>Hola Buenos Dias, $nombre</h3></center>";
    }
}
saludar();
saludar();
echo "Salida random()";
saludar();
// puede recibir parametros
saludar1("Manuel");
saludar1("Ana");
saludar2("Pedro", 2);
function sumar($num1, $num2){
    return $num1+$num2;
}
$var1=100;
$var2=50.5;
echo "<br>La suma de $var1+$var2=".sumar($var1, $var2);
// LAS FUNCIONES SON GLOBALES EN EL DOCUMENTO.