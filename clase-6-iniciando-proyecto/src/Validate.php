<?php

namespace App;

class validate
{
    public static function email($value)
    {
        return (bool) filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function url($value)
    {
        return (bool) filter_var($value, FILTER_VALIDATE_URL);
    }

    public static function password($value)
    {
        return (bool) preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,16}$/', $value);;
    }
}