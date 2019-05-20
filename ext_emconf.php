<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'iMi Products',
    'description' => 'TYPO3 extension to add, show and filter products on a website',
    'category' => 'plugin',
    'author' => 'Daniel Podgorski',
    'author_email' => 'd.podgorski@imi.de',
    'author_company' => 'iMi Digital GmbH',
    'state' => 'stable',
    'uploadfolder' => 1,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-9.99.99',
            'php' => '5.5-7.3',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
