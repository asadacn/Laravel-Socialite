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
    'github' => [
        'client_id' => '536892557b1bd2881794',
        'client_secret' => '59cb6bfb0e1e8ce89f9ace27df18bf0744fec7e6',
        'redirect' => 'http://127.0.0.1:8000/callback/github',
    ],
    'google' => [
        'client_id' => '816615799355-tlslkr21a7kkr15ofpvghtotpobrgeie.apps.googleusercontent.com',
        'client_secret' => '77ZaFdT3O_ve6V0MVrAlzLDg',
        'redirect' => 'http://127.0.0.1:8000/callback/google',
      ], 
];
