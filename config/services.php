<?php

use App\Models\User\VKUser;

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'vkontakte' => [
        'model'         => App\Models\User\VKUser::class,
        'redirect'      => env('AUTH_VK_REDIRECT'),
        'client_id'     => env('AUTH_VK_APP_ID'),
        'client_secret' => env('AUTH_VK_PRIVATE_KEY'),
    ],

    'instagram' => [
        'client_id'     => env('AUTH_INSTAGRAM_PUBLIC_KEY'),
        'client_secret' => env('AUTH_INSTAGRAM_PRIVATE_KEY'),
        'redirect'      => env('AUTH_INSTAGRAM_REDIRECT'),
    ],

    'odnoklassniki' => [
        'client_id' => env('AUTH_OK_APP_ID'),
        'client_secret' => env('AUTH_OK_PRIVATE_KEY'),
        'client_public' => env('AUTH_OK_PUBLIC_KEY'),
        'redirect' => env('AUTH_OK_REDIRECT'),
    ],

    'facebook' => [
        'client_id'     => '3020406271320112',
        'client_secret' => '1aa2af333336fffvvvffffvff',
        'redirect'      => 'http://charm.local/login/facebook/callback',
    ],
];
