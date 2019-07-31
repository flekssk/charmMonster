<?php

namespace App\Models\Content;

use App\Models\Model;

class Translation extends Model
{
    protected $table = 'translation';

    protected $primaryKey = 'translation_id';

    public static function findByKey($key)
    {
        return (new static())->newQuery()->where('key', '=', $key)->first();
    }

    public function __toString()
    {
        return $this->value;
    }
}