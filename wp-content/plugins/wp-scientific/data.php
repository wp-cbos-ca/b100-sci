<?php
    
defined( 'ABSPATH' ) || die();

function get_scientific_plugins_data(){
    $items = array( 
        '3D Modelling' => array( 
            array(
                'display' => 1,
                'sub-category' => '3d-modelling', 
                'title' => 'canvasio3D Light', 
                'name' => 'canvasio3d-light', 
                'uri' => 'https://wordpress.org/plugins/canvasio3d-light/', 
                'author' => array( 'name' => 'virtuellwerk', 'uri' => 'https://profiles.wordpress.org/virtuellwerk/' ), 
                'details' => '',
                'notes' => array( 
                    'show' => 1,
                    'text' => 'three.js: .obj, .mtl, .stl, .dae', 
                    ),
                ),
            ),
        'Graphing' => array( 
            array(
            'display' => 1,
            'title' => 'Visualizer: Charts and Graphs', 
            'name' => 'visualizer', 
            'uri' => 'https://wordpress.org/plugins/visualizer/', 
            'notes' => array( 
                'show' => 1,
                'text' => '', 
                ),
            ),
        ),
        'Formulas' => array( 
            array(
            'display' => 1,
            'title' => 'Enable Latex', 
            'name' => 'enable-latex', 
            'uri' => 'https://en-ca.wordpress.org/plugins/enable-latex/', 
            'notes' => array( 
                'show' => 1,
                'text' => '', 
                ),
            ),
        ),
        'Citations' => array ( 
            array(
            'display' => 1,
            'title' => 'BibSonomy/PUMA CSL', 
            'name' => 'bibsonomy-csl', 
            'uri' => 'https://en-ca.wordpress.org/plugins/bibsonomy-csl/', 
            'notes' => array( 
                'show' => 0,
                'text' => 'Publications & Tag Cloud Widget',
                ),
            ),
        ),
        );
        return $items;
}
