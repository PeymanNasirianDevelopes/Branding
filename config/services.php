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
    'google' => [
        'client_id' => '78162070596-e95aq7q3i6pchkro3frn7n8u54itv4rl.apps.googleusercontent.com',
        'client_secret' => 'q8e1vjNZzugva4ASE7bNMdk-',
        'redirect' => 'http://learnl52.hd/auth/google/callback',
    ],
    'linkedin' => [
        'client_id' => '783ead4vyzd67l',
        'client_secret' => 'tXkL0nJGlnROKx28',
        'redirect' => 'http://127.0.0.1:8000/callback/linkedin',
    ],

];
