<?php

echo 'Esto es un texto';

echo "<br>";
echo "<br>";

echo 'Esto es otro texto muy bonito que se renderiza en una línea
        pero en el código realmente son dos línas de código';

echo "<br>";
echo "<br>";

//Imprimir caracteres especiales con php (comilla simple y diagonal invertida)

echo 'Esto es una comilla simple \' y esto una diagonal invertida \\';

echo "<br>";
echo "<br>";

//Imprimir en pantalla una contatenación de una variable con un texto
$variable = 'soy una variable';

echo 'Vamos a imprimir a mi amiga la variable a continuación -> ' . $variable;

echo "<br>";
echo "<br>";

//Imprimir en pantalla una variable que está dentro de un string

echo "Vamos a imprimir a mi amiga la variable a continuación -> $variable
         <br> que está dentro de un bloque de impresión no concatenaco";

echo "<br>";
echo "<br>";

//Imprimir variable complejas

$cursos = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];

echo "$cursos<br>";

echo "{$cursos['backend'][0]}<br>"; //Las estructuras complejas tienen que escaparse entre llaves {} para su uso

//Instancia de un objeto

class User
{
    public $name = 'marco aspeitia';
}

$user = new User;

echo "$user->name {$cursos['backend'][0]}";

//Uso de variables variables

$teacher = 'marco';
$marco = 'es la mera ley';

echo "$teacher es ${$teacher}";

echo '<br><br>';

function getUserName(){
    return 'userName';
}

$userName = 'Marco Aspeitia';

echo "${getUserName()} es dueño de DevITM";

echo '<br>';
echo '<br>';
//Para mayor legibilidad podemos escapar con dobles llaves la variable compleja a imprimir
echo "{${getUserName()}} es dueño de DevITM";