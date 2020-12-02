<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id'          => 'mke-module-from-another-module-m2',
    'title'       => [
        'de' => 'MKE Modul 2',
        'en' => 'MKE Module 2',
    ],
    'description'  => [
        'de' => 'This is module 2. Extendeds module 1.',
        'en' => 'This is module 2. Extendeds module 1.',
    ],
    'thumbnail'    => 'logo.jpg',
    'version'      => '1.0.0',
    'author'       => 'Michael Keiluweit',
    'url'          => 'https://keiluweit.com',
    'email'        => 'michael.keiluweit@gmail.com',
    'extend' => [
        MichaelKeiluweit\ModuleFromAnotherModule\Module1\Cache::class => MichaelKeiluweit\ModuleFromAnotherModule\Module2\Cache::class,
    ],
];
