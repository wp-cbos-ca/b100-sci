<?php

defined( 'ABSPATH' ) || die();

function get_installer_data(){
    $items = array(
        'site'      => array ( 'run' => 0, 'ran' => 0 ),
        'settings'  => array ( 'run' => 0, 'ran' => 0 ),
        'content'   => array ( 'run' => 1, 'ran' => 0 ),
    );
    return $items;
}

function get_site_data(){
    $items = array(
        array( 'name' => 'clean',           'run' => 1, 'ran' => 0 ),
        array( 'name' => 'menus',           'run' => 1, 'ran' => 0 ),
        array( 'name' => 'pages',           'run' => 1, 'ran' => 0 ),
        array( 'name' => 'users',           'run' => 1, 'ran' => 0 ),
        array( 'name' => 'widgets',         'run' => 1, 'ran' => 0 ),
        array( 'name' => 'themes',          'run' => 1, 'ran' => 0 ),
        array( 'name' => 'plugins',         'run' => 1, 'ran' => 1 ),
    );
    return $items;
}

function get_settings_data() {
    $items = array(
        array( 'name' => 'general',     'run' => 1, 'ran' => 0 ),
        array( 'name' => 'writing',     'run' => 1, 'ran' => 0 ),
        array( 'name' => 'reading',     'run' => 1, 'ran' => 0 ),
        array( 'name' => 'discussion',  'run' => 1, 'ran' => 0 ),
        array( 'name' => 'media',       'run' => 1, 'ran' => 0 ),
        array( 'name' => 'permalinks',  'run' => 1, 'ran' => 0 ),
        array( 'name' => 'timezone',    'run' => 1, 'ran' => 0 ),
    );
    return $items;
}

function get_content_data(){
    $items = array(
        array( 'name' => 'posts',           'run' => 1, 'ran' => 1 ),
        array( 'name' => 'post-block',      'run' => 1, 'ran' => 0 ),
        array( 'name' => 'post-type',       'run' => 1, 'ran' => 1 ),
        array( 'name' => 'post-type-block', 'run' => 1, 'ran' => 1 ),
        array( 'name' => 'images',          'run' => 1, 'ran' => 1 ),
        array( 'name' => 'categories',      'run' => 1, 'ran' => 1 ),
        array( 'name' => 'cats-assign',     'run' => 1, 'ran' => 1 ),
        array( 'name' => 'tags',            'run' => 1, 'ran' => 1 ),
        array( 'name' => 'tags-assign',     'run' => 1, 'ran' => 1 ),
    );
    return $items;
}
