<?php

return [
    'recaptcha' => [
        'site' => env('GOOGLE_SITE_KEY', 'Laravel'),
        'secret' => env('GOOGLE_SECRET_KEY', 'Laravel'),
    ],
];
