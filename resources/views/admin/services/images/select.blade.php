<?php
/**
 * @var \Illuminate\Support\Collection $files
 * @var \Illuminate\Support\Collection $comments
 */
?>

@foreach($files as $file)
    <div class="col-lg-12 uploadedFile">
        <div class="col-lg-12">
            <span>{{ $file }}</span>
        </div>
        <div class="col-lg-2 imageBlock">
            <img src="{{ $file }}" class="img-thumbnail">
        </div>
        <div class="col-lg-5 commentArea">
            <textarea name="imagesComment[{{ $file }}]" id="" cols="50" rows="10">{{ old('imagesComment')[$file] ?? $comments->get($file, '') }}</textarea>
        </div>
        <div class="col-lg-2 controlPanel">
            <span data-file="{{ $file }}" class="fa fa-trash controlButton small deleteImage"></span>
            <span data-file="{{ $file }}" class="fa fa-arrow-up controlButton small moveImageUp"></span>
            <span data-file="{{ $file }}" class="fa fa-arrow-down controlButton small moveImageDown"></span>
        </div>
        <input type="hidden" name="images[]" value="{{ $file }}">
    </div>
@endforeach
