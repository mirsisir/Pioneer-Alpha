<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id'     => '591906155383199',
        'client_secret' => 'f3c61406b7da29edd371dd9ad41f3648',
        'redirect'      => 'http://127.0.0.1:8000/auth/facebook/callback',
    ],
    'twitter' => [
        'client_id'     => env('TWITTER_CLIENT_ID'),
        'client_secret' => env('TWITTER_CLIENT_SECRET'),
        'redirect'      => env('TWITTER_URL'),
    ],
    'google' => [
        'client_id'     => '457129219555-1cqm7dklgq5145pfgoaeg8m1n8biu831.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect'      => 'http://127.0.0.1:8000/auth/google/callback',
    ],

];
