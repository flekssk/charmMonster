<?php

namespace App\Repositories\Settings;

use App\Extensions\Repositories\EloquentRepository;
use App\Models\Content\MainSliderImage;

class MainSliderImagesRepositories extends EloquentRepository
{
    public function getModelAlias()
    {
        return MainSliderImage::class;
    }

    public function imagesToSelector()
    {
        $images = collect();

        foreach ($this->items as $image) {
            $images->put($image->image, $image->image);
        }

        return $images;
    }

    public function imagesCommentsToSelector()
    {
        $comments = collect();

        foreach ($this->items as $image) {
            $comments->put($image->image, $image->title);
        }

        return $comments;
    }

    public function afterSetItems()
    {
        $this->items = $this->items->keyBy('ordering')->sortBy('ordering');
    }
}