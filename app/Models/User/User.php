<?php

namespace App\Models\User;

use App\Models\Model;
use App\Models\Order\Order;

class User extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;

    protected $primaryKey = 'user_id';

    protected $table = 'user';

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id', 'user_id');
    }
}