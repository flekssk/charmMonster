<?php

namespace App\Models\User;

use App\Models\Model;
use SocialiteProviders\Manager\OAuth2\User as InstagramUser;

class InstagramUserLink extends Model
{
    protected $table = 'instagram_user_links';

    public static function findById($id)
    {
        return (new static())->newQuery()->where('instagram_id', '=', $id)->first();
    }

    public static function findOrCreateUser(InstagramUser $user)
    {
        $link = self::findById($user->id);
        if (!$link) {
            $newUser = new User();
            [$firstName, $lastName] = explode(' ', $user->name);

            $newUser->username      = $user->nickname;
            $newUser->firstname     = $firstName;
            $newUser->lastname      = $lastName;
            $newUser->password      = rand(0, 10);
            $newUser->user_group_id = 1;
            $newUser->salt          = 'dasdasdsd';
            $newUser->email         = ' ';
            $newUser->image         = $user->avatar;
            $newUser->code          = 'asd';
            $newUser->ip            = $_SERVER['REMOTE_ADDR'];
            $newUser->status        = 1;
            $newUser->date_added    = date('Y-m-d');

            $newUser->save();

            $link = new static();

            $link->instagram_id = $user->id;
            $link->user_id      = $newUser->user_id;

            $link->save();
        }

        return $link->user;
    }

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'user_id');
    }
}