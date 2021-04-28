<?php

$courses = [
    'frontend'  => 'javascript',
    'backend'   => 'PHP',
    'android'   => 'Java',
    'multiproposito'    => 'Python'
];

echo '<pre>';
var_dump($courses);
echo '</pre>';

// ¿como iterar arrays complejos?
// funciones para recorrer arrays complejos
foreach ($courses as $key => $value){
    echo "$key: $value<br>";
}

echo '<br>';

foreach ($courses as $course){
    echo "$course<br>";
}

echo '<br>';

//variante del foreach
function imprimir($course){
    echo "$course <br>";
}

function imprimirMayus($course, $key){
    echo strtoupper($course) . ": $key <br>";
}

array_walk($courses, 'imprimir');

echo '<br>';

array_walk($courses, 'imprimirMayus');

//tarea:
 /**
  * array_key_exists()
  * in_array()
  * array_keys()
  * array_values()
  */