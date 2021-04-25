<?php

$password = '12345678';
echo preg_match('/^[0-9]{6,9}$/', $password);

echo '<br>';
echo '<br>';

var_dump(preg_match((bool)'/^[0-9]{6,9}$/', $password));