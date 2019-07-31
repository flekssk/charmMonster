<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Models\Content\MainSliderImage;
use App\Repositories\Settings\MainSliderImagesRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class MainSliderController
{
    public function index(Request $request)
    {
        return view('admin.settings.slider.index', ['images' => MainSliderImagesRepository::all()]);
    }

    public function store(Request $request)
    {
        /** @var Collection $images */
        $images        = collect($request->images);
        $comments      = collect($request->get('imagesComment'));
        $existedImages = MainSliderImagesRepository::all()->items()->keyBy('image');

        foreach ($images as $ordering => $uploadedImage) {
            if (!$existedImages->has($uploadedImage)) {
                $image           = new MainSliderImage();
                $image->image    = $uploadedImage;
                $image->ordering = $ordering;
                $image->title    = $comments->get($uploadedImage, '');

                $image->save();
            } else {
                $existedImage           = $existedImages->get($uploadedImage);
                $existedImage->ordering = $ordering;
                $existedImage->title    = $comments->get($uploadedImage, '');
                $existedImage->save();

                $existedImages->forget($uploadedImage);
            }
        }

        foreach ($existedImages as $item) {
            $item->delete();
        }

        return redirect(action('Admin\Settings\MainSliderController@index'));
    }
}