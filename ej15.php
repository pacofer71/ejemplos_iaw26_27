<?php
//--------------------
function pintarArray($comunidad)
{
    echo "<ol>";
    for ($i = 0; $i < count($comunidad); $i++) {
        echo "<li>";
        echo $comunidad[$i];
        echo "</li>";
    }
    echo "</ol>";
}
$andalucia = ['Almeria', 'Cadiz', 'Cordoba', 'Granada', 'Huelva', 'Jaen', 'Malaga', 'Sevilla'];
$extremadura = ['Badajoz', 'Caceres'];
$murcia = ['Murcia'];
$comunidades = [$andalucia, $extremadura, $murcia];
//recorrer array andalucia y pmostrar sus provincias en una lista <ol> o <ul> da igual
pintarArray($andalucia);
pintarArray($extremadura);
pintarArray($murcia);
//-----------------------------ARRAY ASOCIATIVOS
$usuario=[
    'nombre'=>'Manolo',
    'user'=>"@manolo",
    'email'=>"manolo@email.es",
    'esJefe'=>false,
    'salario'=>1234.56
];
var_dump($usuario);
echo $usuario['email'];
echo "<br>".$usuario['nombre'];
$usuario['nombre']="Manuel Jesus";
echo "<br>".$usuario['nombre'];
$usuario['ciudad']='Almeria';
var_dump($usuario);
$usuario[]="Dato Random";
var_dump($usuario);
//---------------------foreach()
foreach($usuario as $clave=>$valor){
    echo "la clave es: <i><b>$clave</b></i> y el valor para esta clave es: $valor<br>";
}
echo "<hr>";
foreach($andalucia as $clave=>$valor){
    echo "la clave es: <i><b>$clave</b></i> y el valor para esta clave es: $valor<br>";
}
echo "<hr>";
foreach($andalucia as $provincia){ //solo recupera valores
    echo "$provincia<br>";
}
echo "<hr>";
foreach($usuario as $alandalus){ //solo recupera valores
    echo "$alandalus<br>";
}
