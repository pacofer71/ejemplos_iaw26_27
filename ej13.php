<?php
//alcance de las variables, 
//echo "El numero es: $numero";
//$numero+43;
//$numero=120;
// DEBO INICIALIZAR UNA VARIABLE ANTES DE USARLA
//LO DE ARRIBA DA ERROR;
//Con las funciones NO pasa, son globales
//es decir las va a buscar por todo el documento

echo hacerOperacion(34, 56, 'x');


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
//-------------------------------------------------
$mensaje="Acceso Correcto";
function mostrarMensaje(){
    $mensaje="<br>HOLA<br>";
    echo $mensaje;
}
mostrarMensaje(); //mostrará HOLA
echo $mensaje; //mostrará Acceso Correcto
//-------------------------------------------------
// NO pasamos realmente numero pasamos su valor en este caso 100
// Se dice que pasamos el parametro por valor
$numero=100;
function cambiarNumero($numero){
    $numero++;
    echo "<br>Dentro de la funcion numero=$numero";
}
cambiarNumero($numero);
echo "<br>Fuera de la función numero=$numero";
//--------------------------------
// ESto se llama paso por referencia, pasamos la variable NO solo
//su valor como antes
echo "<hr>";
$numero=100;
$numero2=500;
function cambiarNumero1(&$num){
    $num++;
    echo "<br>Dentro de la funcion numero=$num";
}
cambiarNumero1($numero);
echo "<br>Fuera de la función numero=$numero";
cambiarNumero1($numero2);
echo "<br>Fuera de la función numero2=$numero";
// Otra cosa parecida pero no igual------------
echo "<hr>";
$valor="Hola Mundo";
function cambiarTexto(){
    global $valor;
    $valor.=", Adios Mundo";
}
cambiarTexto();
echo "<br>$valor";










