<?php

namespace App\Models\Content;

use App\Models\Model;
use Illuminate\Support\Facades\Storage;

class MainSliderImage extends Model
{
    protected $table = 'banner_image';

    protected $primaryKey = 'banner_image_id';

    public function delete()
    {
        Storage::disk('public')->delete(str_replace('/public/uploads/', '', $this->image));

        return parent::delete();
    }

}