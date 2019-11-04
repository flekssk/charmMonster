<?php

namespace App\Decorators;

class PriceDecorator
{
    public static function format($price)
    {
        return number_format(round($price), 0, '.', ' ');
    }

    public static function formatWithSign($price)
    {
        return self::format($price);
    }
}