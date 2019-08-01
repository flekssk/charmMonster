<?php

namespace App\Models\Product;

use App\Models\Model;

class Attribute extends Model
{
    protected $table = 'attribute';

    protected $primaryKey = 'attribute_id';

    public function description()
    {
        return $this->hasOne(AttributeDescription::class, 'attribute_id', 'attribute_id');
    }
}