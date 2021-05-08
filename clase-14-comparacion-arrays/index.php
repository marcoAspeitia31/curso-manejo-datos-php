<?php

$courses = array(
    'frontend'  => 'javascript',
    'backend'   => 'php'
);

$wishes = array(
    'backend'       => 'php',
    'frameworks'    => array(
        'laravel',
        'vuejs'
    ),
    'frontend'      => 'javascript',
    'css'           => 'tailwind'
);

echo '<pre>';
var_dump(array_diff_assoc($wishes, $courses));
echo '</pre>';