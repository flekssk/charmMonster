<?php

namespace App\Models\Content;

use App\Models\Model;
use Illuminate\Support\Facades\Storage;

class MainSliderImage extends Model
{
    public function delete()
    {
        Storage::disk('public')->delete(str_replace('/public/uploads/', '', $this->image));

        return parent::delete();
    }

}