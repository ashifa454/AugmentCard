<?php

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
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'google' => [
        'client_id' => env('Google_CLIENT_ID'),         // Your GitHub Client ID
        'client_secret' => env('Google_CLIENT_SECRET'), // Your GitHub Client Secret
        'redirect' => 'http://your-callback-url',
    ],
    'facebook'=>[
        'client_id' => '546901085678304',         // Your GitHub Client ID
        'client_secret' => '83c008130ed3cd7c361fa65f7501af45', // Your GitHub Client Secret
        'redirect' => 'http://localhost:8000login/facebook/callback
        ',
    ]

];
