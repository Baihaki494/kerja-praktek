<?php

return [
    'default' => [
        'format' => 'svg', // bisa juga 'png'
        'size' => 200,
        'margin' => 1,
        'errorCorrection' => 'H',
        'style' => 'square',
        'eye' => 'square',
        'driver' => 'gd', // 👈 ini penting, bukan imagick
    ],
];
