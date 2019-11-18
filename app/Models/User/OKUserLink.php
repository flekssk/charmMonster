<?php

namespace App\Models\User;

use App\Models\Model;
use SocialiteProviders\Manager\OAuth2\User as VKUser;

class OKUserLink extends Model
{
    protected $table = 'ok_users_links';

    public static function findByOKId($id)
    {
        return (new static())->newQuery()->where('ok_id', '=', $id)->first();
    }

    public static function findOrCreateUser(VKUser $user)
    {
        $link = self::findByOKId($user->id);
        if (!$link) {
            $newUser = new User();

            $newUser->username      = $user->name;
            $newUser->firstname     = $user->user['first_name'];
            $newUser->lastname      = $user->user['last_name'];
            $newUser->password      = rand(0, 10);
            $newUser->user_group_id = 1;
            $newUser->salt          = 'dasdasdsd';
            $newUser->email         = $user->email ?? '';
            $newUser->image         = $user->avatar;
            $newUser->code          = 'asd';
            $newUser->ip            = $_SERVER['REMOTE_ADDR'];
            $newUser->status        = 1;
            $newUser->date_added    = date('Y-m-d');

            $newUser->save();

            $link = new static();

            $link->ok_id   = $user->id;
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