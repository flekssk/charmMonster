<?php

namespace App\Models\User;

use App\Models\Model;

class User extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;

    protected $primaryKey = 'user_id';

    protected $table = 'user';
}