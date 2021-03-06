<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Provider
    |--------------------------------------------------------------------------
    |
    | Load provider that should handle the translations
    |
    */
    'provider' => function ($app) {
        // Load NStack provider
        return new \Nodes\Translate\Providers\NStack;
    },
    /*
    |--------------------------------------------------------------------------
    | NStack settings
    |--------------------------------------------------------------------------
    */
    'nstack' => [
        /*
        |--------------------------------------------------------------------------
        | Storage
        |--------------------------------------------------------------------------
        |
        | Where to store the data
        | cache, publicFolder
        |
        */
        'storage' => 'cache',

        /*
        |--------------------------------------------------------------------------
        | cacheTime
        |--------------------------------------------------------------------------
        |
        | Set cache time in seconds
        |
        */
        'lifetime' => 600, // 10min

        /*
        |--------------------------------------------------------------------------
        | URL of NStack
        |--------------------------------------------------------------------------
        |
        | Your application credentials on NStack. These are required
        | to perform any kinds of actions with NStack.
        |
        */
        'url' => 'https://nstack.io/api/v1/translate/',

        /*
        |--------------------------------------------------------------------------
        | Credentials
        |--------------------------------------------------------------------------
        |
        | Your application credentials on NStack. These are required
        | to perform any kinds of actions with NStack.
        |
        */
        'credentials' => [
            'default' => [
                'appId' => '',
                'restKey' => '',
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | Defaults
        |--------------------------------------------------------------------------
        |
        | Default values regarding translations.
        |
        */
        'defaults' => [
            'locale' => 'en-GB',
            'platform' => 'backend',
            'application' => 'default',
        ],

        /*
        |--------------------------------------------------------------------------
        | Use default instead of throwing
        |--------------------------------------------------------------------------
        |
        | If using a credentials / app which does not exist, translate will throw,
        | By setting this config to true, it will just use the default s
        |
        */
        'useDefaultsInsteadOfThrowing' => false
    ],
];
