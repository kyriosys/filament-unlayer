<?php

use InfinityXTech\FilamentUnlayer\Services\UploadImage;

return [
    'upload' => [
        'url' => '/filament-unlayer-upload-action',
        'url_name' => 'filament-unlayer.upload',
        'class' => UploadImage::class,
        'disk' => 'public',
        'path' => 'unlayer',
        'validation' => 'required|image',
        'middlewares' => [],
    ],
];
