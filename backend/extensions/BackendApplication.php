<?php

namespace Backend\extensions;

use Illuminate\Foundation\Application;

class BackendApplication extends Application
{
    public function configPath($path = '')
    {
        return $this->basePath
            . DIRECTORY_SEPARATOR
            . 'config'
            . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }

    /**
     * Get the path to the resources directory.
     *
     * @param  string  $path
     * @return string
     */
    public function resourcePath($path = '')
    {
        return $this->basePath . DIRECTORY_SEPARATOR.'resources'.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}