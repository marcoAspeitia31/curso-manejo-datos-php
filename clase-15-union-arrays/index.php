<?php

$courses = array(
    'frontend'  => array('javascript', 'react'),
    'backend'   => 'php',
    'startups'  => 'liderazgo'
);

$wishes = array(
    'backend'       => 'php',
    'frameworks'    => array(
        'laravel',
        'vuejs'
    ),
    'frontend'      => 'javascript vanilla',
    'css'           => 'tailwind'
);

echo '<pre>';
var_dump($courses);
echo '</pre>';

echo '<pre>';
var_dump($wishes);
echo '</pre>';

echo '<pre>';
var_dump(array_merge_recursive($wishes, $courses));
echo '</pre>';

$arrayA = ['hola', 'adios'];
$arrayB = ['saludo', 'despedida'];

echo '<pre>';
var_dump(array_combine($arrayB, $arrayA));
echo '</pre>';