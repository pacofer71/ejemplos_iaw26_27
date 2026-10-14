<?php
//ordenacion de arrays sort rsort asort arsort, ksort, krsort

$datos=[
    'uno'=>'manuel',
    'dos'=>'zapato',
    'abec'=>'almeria',
    'barcelona'=>'jaen',
    'betis'=>'valencia'
];
//-----sort() ordena los valores si el array es asociativo elimina las claves!!!!
echo "datos antes de sort";
var_dump($datos);
sort($datos); //cambias el array datos ordenandolo
echo "<br>datos despues de sort";
var_dump($datos);
$datos=[
    'uno'=>'manuel',
    'dos'=>'zapato',
    'abec'=>'almeria',
    'barcelona'=>'jaen',
    'betis'=>'valencia'
];
echo "<hr>";
//-----rsort() ordena los valores en orden descendente si el arraay es asociativo elimina las claves!!!!
echo "datos antes de rsort";
var_dump($datos);
rsort($datos); //cambias el array datos ordenandolo
echo "<br>datos despues de rsort";
var_dump($datos);
$datos=[
    'uno'=>'manuel',
    'dos'=>'zapato',
    'abec'=>'almeria',
    'barcelona'=>'jaen',
    'betis'=>'valencia'
];
echo "<hr>";
//-----asort() ordena los valores en orden ascendente!!!!
echo "datos antes de asort";
var_dump($datos);
asort($datos); //cambias el array datos ordenandolo
echo "<br>datos despues de asort";
var_dump($datos);
//----------------------------------------
$datos=[
    'uno'=>'manuel',
    'dos'=>'zapato',
    'abec'=>'almeria',
    'barcelona'=>'jaen',
    'betis'=>'valencia'
];
echo "<hr>";
//-----arsort() ordena los valores en orden ascendente!!!!
echo "datos antes de arsort";
var_dump($datos);
arsort($datos); //cambias el array datos ordenandolo
echo "<br>datos despues de arsort";
var_dump($datos);
//----------------------------------------
$datos=[
    'uno'=>'manuel',
    'dos'=>'zapato',
    'abec'=>'almeria',
    'barcelona'=>'jaen',
    'betis'=>'valencia'
];
echo "<hr>";
//-----ksort() ordena las claves!!!!
echo "datos antes de ksort";
var_dump($datos);
ksort($datos); //cambias el array datos ordenandolo
echo "<br>datos despues de ksort";
var_dump($datos);
//----------------------------------------
$datos=[
    'uno'=>'manuel',
    'dos'=>'zapato',
    'abec'=>'almeria',
    'barcelona'=>'jaen',
    'betis'=>'valencia'
];
echo "<hr>";
//-----krsort() ordena las claves en orden descendente!!!!
echo "datos antes de krsort";
var_dump($datos);
krsort($datos); //cambias el array datos ordenandolo
echo "<br>datos despues de krsort";
var_dump($datos);


