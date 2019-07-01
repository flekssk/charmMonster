<?php

namespace App\Models\Product;

use App\Models\Model;
use Illuminate\Support\Facades\Storage;

class ProductsImage extends Model
{
    /**
     * @param $image
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null
     */
    public static function getByImage($image)
    {
        return (new static())
            ->newQuery()
            ->where('image', $image)
            ->first();
    }

    public function delete()
    {
        Storage::disk('public')->delete(str_replace('/public/uploads/', '', $this->image));

        return parent::delete();
    }
}