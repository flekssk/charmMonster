<?php

if (!function_exists('html')) {
    /**
     * @return \Collective\Html\HtmlBuilder
     */
    function html()
    {
        return app('html');
    }
}

if (!function_exists('form')) {
    /**
     * @return \Collective\Html\FormBuilder
     */
    function form()
    {
        return app('form');
    }
}

if (!function_exists('bootstrapForm')) {
    /**
     * @return \App\Extensions\Html\BootstrapForm
     */
    function bootstrapForm()
    {
        return app('bootstrapForm');
    }
}

if (!function_exists('getImagePath')) {
    function getImagePath($images)
    {
        return '/public/uploads/images/' . $images;
    }
}