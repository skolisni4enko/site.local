<?php

define('LOCKER', true);

require_once 'functions.php';

$title = 'My Blog :: About';

$post = '<p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint optio, voluptatum
eligendi excepturi deserunt nisi amet labore reiciendis tempora cum veritatis, officia id
esse animi tenetur ut, odio aperiam praesentium.</p>
<p class="">Reprehenderit ab soluta architecto deserunt? Beatae nihil asperiores eaque sunt
culpa, quasi inventore facilis neque id. Recusandae, doloremque aperiam magnam deleniti in
eveniet, corporis mollitia esse quia ea non neque.</p>
<p class="">Saepe, iusto tempora quas tenetur fugit, consequuntur vitae odit corporis debitis
vero omnis ad suscipit ipsam aliquid libero maiores porro, est facilis error incidunt quasi
doloribus? Impedit ut quis quos.</p><p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint optio, voluptatum
eligendi excepturi deserunt nisi amet labore reiciendis tempora cum veritatis, officia id
esse animi tenetur ut, odio aperiam praesentium.</p>
<p class="">Reprehenderit ab soluta architecto deserunt? Beatae nihil asperiores eaque sunt
culpa, quasi inventore facilis neque id. Recusandae, doloremque aperiam magnam deleniti in
eveniet, corporis mollitia esse quia ea non neque.</p>
<p class="">Saepe, iusto tempora quas tenetur fugit, consequuntur vitae odit corporis debitis
vero omnis ad suscipit ipsam aliquid libero maiores porro, est facilis error incidunt quasi
doloribus? Impedit ut quis quos.</p>';

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
require_once 'app/views/about.tpl.php';