<?php

namespace App\Models\Blog;

use App\Models\Model;
use Illuminate\Support\Facades\Storage;

class ArticleImage extends Model
{
    const UPDATED_AT = null;

    protected $table = 'article_image';

    public function delete()
    {
        Storage::disk('public')->delete(str_replace('/public/uploads/', '', $this->image));

        return parent::delete();
    }
}