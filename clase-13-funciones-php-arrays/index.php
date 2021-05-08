<?php

$animalitos = array(
    'domesticos'    => array(
        'perro',
        'gato'
    ),
    'salvajes'      => array(
        'leon',
        'aguila',
        'tigre'
    ),
    'marinos'       => array(
        'ballena'
    )
);

echo 'array original';
echo '<pre>';
var_dump($animalitos);
echo '</pre>';

//sort();
ksort($animalitos);

echo 'ksort()';

echo '<pre>';
var_dump($animalitos);
echo '</pre>';

//rsort();
krsort($animalitos);

echo 'krsort()';

echo '<pre>';
var_dump($animalitos);
echo '</pre>';

echo 'array_chunk($array, 2) divide y agrupa en dos el array';

echo '<pre>';
var_dump( array_chunk($animalitos, 2));
echo '</pre>';

echo 'array_slice($array, 1) remueve el primer elemento del array';

echo '<pre>';
var_dump( array_slice($animalitos, 1));
echo '</pre>';

echo 'array_shift($array)'; //elimina el primer elemento de un array

echo '<pre>';
var_dump( array_shift($animalitos)); 
echo '</pre>';

echo '<pre>';
var_dump($animalitos);
echo '</pre>';

echo 'array_pop($array)';

echo '<pre>';
var_dump( array_pop($animalitos)); //elimina el primer elemento de un array
echo '</pre>';

echo '<pre>';
var_dump($animalitos);
echo '</pre>';

array_unshift($animalitos, ['salvajes' => array('leon', 'tigre', 'aguila')]);

echo '<pre>';
var_dump($animalitos);
echo '</pre>';

array_push($animalitos, ['domesticos' => array('perro', 'gato', 'loro')]);

echo '<pre>';
var_dump($animalitos);
echo '</pre>';

$juguetes = array(
    'toy_story'         => 'buz lightyear',
    'juegos de mesa'    => 'monopoly'
);

echo '<pre>';
var_dump($juguetes);
echo '</pre>';

echo '<pre>';
var_dump(array_flip($juguetes));
echo '</pre>';