<?php

namespace App\Extensions\User;

class CharmUser
{
    public static function id($default = '')
    {
        return app('sessionUser') ? app('sessionUser')->user_id  : $default;
    }

    public static function name($default = '')
    {
        return app('sessionUser') ? app('sessionUser')->firstname . ' ' . app('sessionUser')->lastname : $default;
    }

    public static function firstName()
    {
        return app('sessionUser') ? app('sessionUser')->firstname : '';
    }

    public static function lastName()
    {
        return app('sessionUser') ? app('sessionUser')->lastname : '';
    }

    public static function email()
    {
        return app('sessionUser') ? app('sessionUser')->email : '';
    }

    public static function has()
    {
        return app('sessionUser') ? true : false;
    }
}