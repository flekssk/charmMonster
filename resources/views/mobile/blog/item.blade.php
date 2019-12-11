<?php
/**
 * @var \App\Models\Blog\Article $article
 */
?>

<div class="col-12 articleContainer">
    <div class="articleBackground">
        <div class="articleBackgroundImage"></div>
    </div>
    <div class="ukrainianTitle mainTitle title">
        <h1>{{ $article->description->name }}</h1>
    </div>
    <div class="articleContent">
        <div class="imageContainer">
            <div class="image">
                <img src="{{ getImagePath($article->image) }}" alt="">
            </div>
        </div>
        <div class="textContainer">
            {!! html_entity_decode($article->description->description) !!}
        </div>
        <div class="bottom">
            <b>{{ \Illuminate\Support\Carbon::make($article->date_added)->format('m-d-Y') }}</b>
        </div>
    </div>
</div>
