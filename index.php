<?php

define('LOCKER', true);

require_once 'functions.php';

$title = 'My Blog :: Home';

$posts = [
    1 => [
        'title' => 'Title 1',
        'disc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'slug' => 'title-1',
    ],
    2 => [
        'title' => 'Title 2',
        'disc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'slug' => 'title-2',
    ],
    3 => [
        'title' => 'Title 3',
        'disc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'slug' => 'title-3',
    ],
    4 => [
        'title' => 'Title 4',
        'disc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'slug' => 'title-4',
    ],
    5 => [
        'title' => 'Title 5',
        'disc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'slug' => 'title-5',
    ],
    6 => [
        'title' => 'Title 6',
        'disc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'slug' => 'title-6',
    ]
];

$recent_posts = [
    1 => [
        'title' => 'A link item',
        'slug' => lcfirst(str_replace(' ', '-', 'A link item'))
    ],
    2 => [
        'title' => 'A second link item',
        'slug' => lcfirst(str_replace(' ', '-', 'A second link item'))
    ],
    3 => [
        'title' => 'A third link item',
        'slug' => lcfirst(str_replace(' ', '-', 'A third link item'))
    ],
    4 => [
        'title' => 'A fourth link item',
        'slug' => lcfirst(str_replace(' ', '-', 'A fourth link item'))
    ],
    5 => [
        'title' => 'A fifth link item',
        'slug' => lcfirst(str_replace(' ', '-', 'A fifth link item'))
    ]
];
require_once 'app/views/index.tpl.php';