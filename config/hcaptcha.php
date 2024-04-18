<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Site Key
    |--------------------------------------------------------------------------
    |
    | This is your site key. By default, we use a test key that is for testing
    | purposes only and does not trigger a challenge.
    |
    */

    'sitekey' => env('HCAPTCHA_SITEKEY', '375f065b-994d-4e2c-b39d-89417a864e57'),

    /*
    |--------------------------------------------------------------------------
    | Secret Key
    |--------------------------------------------------------------------------
    |
    | This is your site key. By default, we use a test key that is for testing
    | purposes only and does not trigger a challenge.
    |
    */

    'secret' => env('HCAPTCHA_SECRET', 'ES_8b3e924c9b574549a5bd15eda83d7957'),

];
