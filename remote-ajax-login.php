<?php

/*
Plugin Name: WP Client Ajax Login
Plugin URI: https://github.com/enricodeleo/wpClientAjaxLogin
Description: A simple plugin that allows login to wordpress through the client's browser via AJAX.
Version: 0.1.8
Author: Enrico Deleo
Author URI: http://enricodeleo.com
License: MIT
*/

defined('ABSPATH') or die("No script kiddies please!");

function clientAjaxLogin() {
    $user        = $_POST[ 'user' ];
    $pwd         = $_POST[ 'pwd' ];
    $response    = array();
    $data = array(
        'user_login'    => $user,
        'user_password' => $pwd,
        'remember'      => true //prevent the browser forgetting log in status
    );

    $signin = wp_signon( $data, false );

    if ( is_wp_error( $signin ) ) {
        $response[ 'error' ] = $signin->get_error_message();
    } else {
        $response[ 'ID' ] = $signin->ID;
        $response[ 'success' ] = get_bloginfo( 'url' );
    }

    echo json_encode( $response );
    exit();
}

add_action( 'wp_ajax_clientAjaxLogin', 'clientAjaxLogin' );
add_action( 'wp_ajax_nopriv_clientAjaxLogin', 'clientAjaxLogin' );