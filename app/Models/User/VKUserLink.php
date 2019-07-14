<?php

namespace App\Models\User;

use App\Models\Model;
use SocialiteProviders\Manager\OAuth2\User as VKUser;

class VKUserLink extends Model
{
    protected $table = 'vk_users_links';

    public static function findByVKId($id)
    {
        return (new static())->newQuery()->where('vk_id', '=', $id)->first();
    }

    public static function findOrCreateUser(VKUser $user)
    {
        $link = self::findByVKId($user->id);
        if (!$link) {
            $newUser = new User();

            $newUser->username      = $user->nickname;
            $newUser->firstname     = $user->user['first_name'];
            $newUser->lastname      = $user->user['last_name'];
            $newUser->password      = rand(0, 10);
            $newUser->user_group_id = 1;
            $newUser->salt          = 'dasdasdsd';
            $newUser->email         = $user->accessTokenResponseBody['email'];
            $newUser->image         = $user->avatar;
            $newUser->code          = 'asd';
            $newUser->ip            = $_SERVER['REMOTE_ADDR'];
            $newUser->status        = 1;
            $newUser->date_added    = date('Y-m-d');

            $newUser->save();

            $link = new static();

            $link->vk_id   = $user->id;
            $link->user_id = $newUser->user_id;

            $link->save();
        }

        return $link->user;
    }

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'user_id');
    }
}