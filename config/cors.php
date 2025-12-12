<?php

return [

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => [
        'https://pinjaman-online-bay.vercel.app',
        // tambahkan origin lain kalau perlu, misal dev:
        // 'http://localhost:3000',
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    // true kalau pakai cookie / credentials (Sanctum).
    'supports_credentials' => true,
];
