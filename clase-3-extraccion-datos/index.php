<?php

$data = '¿Hola como estás?';
echo $data[2];

$post = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni ipsum excepturi error nostrum illum cum reprehenderit vitae. Eaque sed quas dignissimos, corrupti tenetur architecto fugit voluptatibus! Molestias quisquam officiis possimus?";
$extract = substr($post, 0, 20);

echo '<br>';

echo "$extract... [ver más]";

echo '<br>';

echo 'probar funciones, explode(), implode(), trim(), ltrim(), rtrim()';