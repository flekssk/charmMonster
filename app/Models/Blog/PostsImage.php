<?php

namespace App\Models\Blog;

use App\Models\Model;
use Illuminate\Support\Facades\Storage;

class PostsImage extends Model
{
    const UPDATED_AT = null;

    public function delete()
    {
        Storage::disk('public')->delete(str_replace('/public/uploads/', '', $this->image));

        return parent::delete();
    }
}