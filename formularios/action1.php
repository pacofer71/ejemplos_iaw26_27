<?php
//1.- Recogemos lo que llega del form
$elNombre=$_GET['nombre'];
$email=$_GET['email'];
$password=$_GET['password'];
$prov=$_GET['provincia'];
// NO PODEMOS HACER LO DE ABAJO DIRECTAMENTE, pq si no hemos mandado nada nos dara error
//$admin=$_GET['admin'];
// ESTO FUNCIONA PERFECTAMENTE 
//$admin="Sin seleccionar";
//if(isset($_GET['admin'])){
//    $admin=$_GET['admin'];
//}
$admin=(isset($_GET['admin'])) ? $_GET['admin'] : "Sin seleccionar";
$aficiones=(isset($_GET['aficiones'])) ? $_GET['aficiones'] : [];

echo "El nombre que mando el form es : $elNombre <br>";
echo "El correo que mando el form es : $email <br>";
echo "La contraseña que mando el form es : $password <br>";
echo "La provincia que mando el form es : $prov <br>";
echo "El campo admin (tipo radio) que mando el form es : $admin <br>";
echo "La afciones son: <br>";
if(count($aficiones)>0){
    echo "<ul>";
    foreach($aficiones as $aficion){
        echo "<li>$aficion</li>";
    }
    echo "</ul>";
}else{
    echo "NO seleccionó ningina afición";
}
