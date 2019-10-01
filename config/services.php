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
        'client_id' => '895826688463-6cm5s3apn2ejbfht407hv7gta4aji534.apps.googleusercontent.com',
        'client_secret' => 'yeu1EwmMtE_7UBhfYKG9jWCK',
        'redirect' => 'http://127.0.0.1:8000/callback/google',
    ],

    'facebook' => [
        'client_id' => '2384601565192455',
        'client_secret' => '8d5a07ba4a9c396b9ca9e3a74f5d933e',
        'redirect' => 'http://127.0.0.1:8000/callback/facebook',
    ],

    'twitter' => [
        'client_id' => 'xxxx',
        'client_secret' => 'xxx',
        'redirect' => 'http://127.0.0.1:8000/callback/twitter',
    ],

    'github' => [
        'client_id' => '9fd21ea9a3c41fbe634e',
        'client_secret' => 'cca585329e98de55def3951b48488007b1c967bc',
        'redirect' => 'http://127.0.0.1:8000/callback/github',
    ],


];
