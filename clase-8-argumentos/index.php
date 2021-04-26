<?php

//valores
function greet($name)
{
    return "hola, $name";
}

echo greet('marquito');

echo '<br>';

//referencias
$course = 'PHP';

function path(&$course)
{
    $course = 'Laravel';
    echo $course; //Laravel
}

path($course); //Laravel
echo($course); //Laravel
echo '<br>';

//predeterminada
function greetings($name = 'marco')
{
    return "Hola, $name";
}

echo greetings(); //valor predeterminado

echo '<br>';

echo greetings('antonio');