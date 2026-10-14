<?php
$andalucia = ['Almeria', 'Cadiz', 'Cordoba', 'Granada', 'Huelva', 'Jaen', 'Malaga', 'Sevilla'];
$extremadura = ['Badajoz', 'Caceres'];
$murcia = ['Murcia'];
$valencia=['Alicante', 'Castellon', 'Valencia'];
$comunidades=[
    'Andalucia'=>$andalucia,
    'Extremadura'=>$extremadura,
    'Murcia'=>$murcia,
    'Valencia'=>$valencia
];
//var_dump($comunidades);
echo "<ol>";
foreach($comunidades as $nombreComunidad=>$provincias){
    echo "<li>";
        echo $nombreComunidad;
        echo "<ul>"; // abro sublista para provincias
            foreach($provincias as $nomProvincia){
                echo "<li>".$nomProvincia."</li>";
            }
        echo "</ul>";
    echo "</li>";
}
echo "</ol>";
// ahora las mostramos entres listas
echo "<hr>";
foreach($comunidades as $nombreComunidad=>$provincias){
    echo "<table align='center' border='2' cellspacing='5' cellpadding='5'>";
        echo "<tr>";
            echo "<td colspan='".count($provincias)."' align='center'>$nombreComunidad</td>";
        echo "</tr>";
        echo "<tr>"; // Segunda fila haremmos un td para cada provincia
            foreach($provincias as $nomProvincia){
                echo "<td>$nomProvincia</td>";
            }
        echo "</tr>";
    echo "</table><br>";
}
