<?php

return [
    // debug mode?
    'debug' => false,

    // Set the user model.
    'user_model' => env('MARDIN_USER_MODEL', 'App\\User'),

    // Set the user model transformer.
    'user_transformer' => env('MARDIN_USER_TRANSFORMER', 'App\\Transformers\\UserTransformer'),

    // Set the message model. (ENCOURAGED)
    // Set this to your customized message model so the correct policy (Laravel Guard) is invoked.
    'message_model' => env('MARDIN_MESSAGE_MODEL', 'ReliQArts\\Mardin\\Models\\Message'),

    // Set the participant model. (OPTIONAL)
    'participant_model' => env('MARDIN_PARTICIPANT_MODEL', 'ReliQArts\\Mardin\\Models\\Participant'),

    // Set the thread model. (OPTIONAL)
    'thread_model' => env('MARDIN_THREAD_MODEL', 'ReliQArts\\Mardin\\Models\\Thread'),

    // Route related options.
    'routes' => [
        // Set the prefix that should be used for routes
        'prefix' => env('MARDIN_ROUTE_PREFIX', 'messages'),

        // Set the bindings for guided routes.
        'bindings' => [
            // public
            'public' => [
                'middleware' => 'web',
            ],

            // admin
            'admin' => [
                // 'middleware' => 'admin',
            ],
        ],
    ],

    // ga Ad for react component
    'ad' => [
        'client' => env('MARDIN_AD_CLIENT_ID', false),
        'slot_id' => env('MARDIN_AD_SLOT_ID', false),
    ],
];
