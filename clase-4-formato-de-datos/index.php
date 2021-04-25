<?php

// Alterar
$text = "PHP es UN LENGUAJE de programacion";

echo strtolower($text);

echo '<br>';

echo strtoupper($text);

echo '<br>';

echo lcfirst($text);

echo '<br>';

echo ucfirst($text);

echo '<br>';

//Reemplazar
$slug = str_replace(' ', '-', $text);

echo strtolower($slug);

echo '<br>';

//Modificacion
$code = 546;

echo str_pad($code, 10, '#', STR_PAD_LEFT);
echo '<br>';
echo str_pad($code, 10, '#', STR_PAD_RIGHT);
echo '<br>';
echo str_pad($code, 10, '#', STR_PAD_BOTH);
echo '<br>';

$html_text = '<h1>hola mamá</h1>';

echo strip_tags($html_text); //remueve etiquetas html de mi variable $html_text
echo '<br>';

echo strtoupper(strip_tags($html_text)); //monobyte
echo '<br>';

echo mb_strtoupper(strip_tags($html_text)); //multibyte (ayuda a formatear caractéres extraños como la ñ o acentos)