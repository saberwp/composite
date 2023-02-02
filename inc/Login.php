<?php

namespace Composite;

/**
 * Login Class
 */
class Login
{
    /**
     * Initializes the class and sets up AJAX actions
     */
    public function init()
    {
        add_action( 'wp_ajax_nopriv_wp_ajax_login', array( $this, 'wp_ajax_login' ) );
    }

    /**
     * Handles the AJAX request for user login
     */
    public function wp_ajax_login()
    {
        $username = sanitize_user( $_POST['username'] );
        $password = sanitize_text_field( $_POST['password'] );

        $user = wp_signon( array(
            'user_login'    => $username,
            'user_password' => $password,
            'remember'      => false
        ), false );

        if ( is_wp_error( $user ) ) {
            wp_send_json_error( array( 'message' => $user->get_error_message() ) );
        } else {
            wp_send_json_success( array( 'message' => __( 'Login successful', 'composite' ) ) );
        }
    }
}
