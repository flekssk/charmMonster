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
        'redirect'      => 'http://charm.local/login/vk/callback',
        'secret'        => env('STRIPE_SECRET'),
        'client_id'     => 7056662,
        'client_secret' => 'rBjGpQyBKK2mr7PlVcQF',
    ],

    'instagram' => [
        'redirect'      => 'http://charm.local/login/instagram/callback',
        'client_id'     => '50e460e96ef242efa0193b675d3d84c0',
        'client_secret' => '79b479f7b7084f7db1d8089e5617b330',
    ],

    'odnoklassniki' => [
        'client_id' => 512000128354,
        'client_secret' => 'DF00993619DC13EB9A8C31BF',
        'client_public' => 'CDGGPGJGDIHBABABA',
        'redirect' => 'http://charm.local/login/ok/callback',
    ],

    'facebook' => [
        'client_id'     => '3020406271320112',
        'client_secret' => '1aa2af333336fffvvvffffvff',
        'redirect'      => 'http://charm.local/login/facebook/callback',
    ],
];
