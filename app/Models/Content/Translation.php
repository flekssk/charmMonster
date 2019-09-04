<?php

namespace App\Models\Content;

use App\Models\Model;

class Translation extends Model
{
    protected $table = 'translation';

    protected $primaryKey = 'translation_id';

    public static function findByKey($key, $default = '')
    {
        return (new static())->newQuery()->where('key', '=', $key)->first() ?? $default;
    }

    public function __toString()
    {
        return $this->value;
    }
}