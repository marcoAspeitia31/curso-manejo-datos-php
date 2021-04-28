<?php

function operacionMatematica(Closure $operation, $num1, $num2)
{
    return $operation($num1, $num2);
}

$suma = function ($num1, $num2)
{
    return $num1 + $num2;
};

$resta = function ($num1, $num2)
{
    return $num1 - $num2;
};

$multiplicacion = function ($num1, $num2)
{
    return $num1 * $num2;
};

$division = function ($num1, $num2)
{
    if( $num2!=0 ){
        return $num1 / $num2;
    }
    return "operación no permitida, divisor no puede ser igual a cero";
};

echo operacionMatematica($suma, 65, 15);