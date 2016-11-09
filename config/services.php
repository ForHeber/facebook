<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
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

    'facebook' => [
    'client_id' => '206472019766818',
    'client_secret' => 'a297a76a5cb4b59a916818ba3cabc090',
    'redirect' => 'http://localhost:8000/callback/facebook',
],

'google' => [
    'client_id' => '400814824668-i7vkgemvv87ebmuftk15vl38aho4ihoh.apps.googleusercontent.com',
    'client_secret' => 'APhQ_JNTGW3X8FRuKewANWuk',
    'redirect' => 'http://localhost:8000/callback/google',
],
'twitter' => [
    'client_id' => 'LeaQFJTnvEUZjwXCGmYFimM24',
    'client_secret' => '6qScOFa0zQabX2WqhY1ilpwxsQBhTlto2vy1dKRHckyLFjyN9o',
    'redirect' => 'http://localhost:8000/callback/twitter',
],
'linkedin' => [
    'client_id' => 'your-github-app-id',
    'client_secret' => 'your-github-app-secret',
    'redirect' => 'http://localhost:8000/callback/linkedin',
],
];
