<?php

namespace App\Extensions\User;

use App\Models\User\User;
use App\Repositories\Product\LikedRepository;

/**
 * Class CharmUser
 *
 * @property LikedRepository $liked
 *
 * @package App\Extensions\User
 */
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

    /**
     * @return User
     */
    public static function get()
    {
        return app('sessionUser');
    }

    public static function isGuest()
    {
        return is_null(app('sessionUser'));
    }

    public function getLikedAttribute()
    {
        $liked = LikedRepository::getUserLiked(self::id());

        return $liked;
    }
}