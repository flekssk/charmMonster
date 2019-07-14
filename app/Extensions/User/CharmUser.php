<?php

namespace App\Extensions\User;

class CharmUser
{
    public static function name()
    {
        return app('sessionUser') ? app('sessionUser')->firstname . ' ' . app('sessionUser')->lastname : '';
    }

    public static function has()
    {
        return app('sessionUser') ? true : false;
    }
}