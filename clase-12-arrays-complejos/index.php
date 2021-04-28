<?php

$courses = [
    'frontend'  => 'javascript',
    'backend'   => 'PHP',
    'para_android'   => 'Java',
    'multiproposito'    => 'Python'
];

echo '<pre>';
var_dump($courses);
echo '</pre>';

// ¿como iterar arrays complejos?
// funciones para recorrer arrays complejos o arrays asociativos
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
echo '<br>';

//verifica si existe un key dentro de un array
echo array_key_exists('para_android', $courses);

echo '<br>';

//verifica si existe un valor "x" dentro de un array
echo in_array('PHP', $courses, true);

echo '<br>';

//devuelve todas las keys del array
print_r(array_keys($courses));

echo '<br>';

//devuelve todos los valores del array
print_r(array_values($courses));