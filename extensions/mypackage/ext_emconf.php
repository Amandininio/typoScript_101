<?php

/**
 * Extension Manager/Repository config file for ext "mypackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'myPackage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Talan\\Mypackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Amandio',
    'author_email' => 'amandio@talan.com',
    'author_company' => 'talan',
    'version' => '1.0.0',
];
