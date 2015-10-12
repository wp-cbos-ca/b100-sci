<?php
/*
Plugin Name:    WP Scientific
Plugin URI:     http://wp.cbos.ca
Description:    Scientific based configuration for WordPress
Version:        1.0.0
Author:         wp.cbos.ca
Author URI:     http://wp.cbos.ca

*/ 

defined( 'ABSPATH' ) || die();

function wps_add_dashboard_widget() {
    $args = array( 'slug' => 'wps_dashboard_widget', 'title' => 'WP Scientific', 'function' => 'wps_function' );
    wp_add_dashboard_widget( $args['slug'], $args['title'], $args['function'] );                                                                                
}
add_action( 'wp_dashboard_setup', 'wps_add_dashboard_widget' );

function wps_function() {
    $str = get_scientific_header();   
    $str .= get_scientific_plugins();
    $str .= get_scientific_footer();   
    echo $str;
}

function get_scientific_header(){
    $str = '<p><span class="alignright"><a href="http://wp.cbos.ca/bundles/scientific/">Help</a></span></p>';
    return $str;
}

function get_scientific_footer( $text='' ){
    if ( ! empty ( $text ) ) {
        $str = sprintf('<p><small>%s</small></p>', $text, PHP_EOL );
        return $str;
    }
    else {
        return false;
    }
}

function get_scientific_plugins(){
    require_once( dirname(__FILE__) . '/data.php' );
    $items = get_scientific_plugins_data();
    if ( ! empty( $items ) ) {
        $str = '';
        foreach ( $items as $category => $detail ) {
            if ( count( $category ) ) {
                $str .= sprintf( '<h4 style="font-weight: bold;">%s</h4>', $category );
                foreach ( $detail as $item ) {
                if ( $item['display'] && ! empty( $item['title'] ) ) {
                    $sprint = '<p><strong><a href="%s" target="_blank">%s</a>:</strong> [<a href="%s">Details and Install</a>]';
                    $str .= sprintf( $sprint, $item['uri'], $item['title'],  get_plugin_detail_link_wps( $item['name'] ) , PHP_EOL );
                    $str .= get_scientific_notes_html( $item['notes'] );                
                    $str .= '</p>';
                    }
                }
                
            }
            else {
                return false;
            }        
        }
        return $str;
    }
    else {
        return false;
    }
}

function get_scientific_notes_html( $notes ) {
    if ( ! empty( $notes['text'] ) && $notes['show'] ) {
        $str = sprintf( '<br /><span style="padding-left: 15px;"><small>[%s]</small></span>', $notes['text'] );
        return $str;
    }
    else {
        return false;
    }
}

function get_plugin_detail_link_wps( $plugin_name ){
    $query = sprintf('?tab=plugin-information&amp;plugin=%s&amp;TB_iframe=true&amp;width=600&amp;height=550', $plugin_name ); 
    $str = admin_url( '/plugin-install.php' . $query );
    return $str;
}

function dashboard_name_scientific(){
    if ( $GLOBALS['title'] != 'Dashboard' ){
        return;
    }
    $GLOBALS['title'] =  __( 'Scientific Dashboard' ); 
}
add_action( 'admin_head', 'dashboard_name_scientific' );

