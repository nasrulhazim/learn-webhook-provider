<?php 

return [
    'user' => [
        'name' => 'Webhook Consumer: User',
        'url' => env('WEBHOOK_CONSUMER_URL'),
        'secret' => env('WEBHOOK_CONSUMER_SECRET')
    ],
];