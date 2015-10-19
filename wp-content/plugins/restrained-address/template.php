<?php

defined( 'ABSPATH' ) || die();

function get_address_html( $args='' ){
    require_once( dirname(__FILE__) . '/data.php' );
    $items = get_address_data();
    if ( ! empty( $items ) ) {
        $str = '<div class="address">' . PHP_EOL;
        $str .= '<p>' . PHP_EOL;
        foreach ( $items as $item ) {        
            if ( $item['display'] ) {
                if ( $item['name'] == 'lat' || $item['name'] == 'lng' ) { //does not print out lats or lngs.
                    continue;
                }
                if ( ! empty( $item['name'] ) ) {
                    $value = get_user_meta( get_admin_id_address(), $item['name'], true );
                    if ( ! empty ( $value ) ) {
                        $str .= sprintf( '%s<br />%s', $value, PHP_EOL );
                    }
                }                
            }
        }
        $str .= '</p>' . PHP_EOL;
        $str .= '</div><!-- .address -->' . PHP_EOL;
        return $str;
    }    
    else {
        return false;
    }
}

function get_admin_id_address(){
    $admin_email = get_option( 'admin_email' );
    $user = get_user_by_email( $admin_email );    
    $user_id = $user->ID;
    return $user_id;
}

