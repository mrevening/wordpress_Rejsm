<?php
/*
 * Plugin Name: rejsm_add_users_from_old_database
 * Plugin URI: http://agh.edu.pl/rejsm/
 * Description: Wtyczka wstawi użytkowników starej wersji REJSM do nowego rejestru opartego o wordpress.
 * Version: 0.1
 * Author: Dominik Wieczorek
 * Author URI: facebook.com
 * License: GPLv2
 */

add_action( 'init', 'rejsm_insert_user' );
function rejsm_insert_user(){
    if (username_exists( 'helion'))
        return;
    $userdata = array(
        'user_login' => 'helion@przykład.pl',
        'user_email' => 'helion@przykład.pl',
        'user_pass' => '123456789',
        'display_name' => 'helion@przykład.pl',
        'role' => 'editor'
        );
    $user = wp_insert_user( $userdata);
    if (is_wp_error( $user))
        echo $result->get_error_message();
}
//add_user_meta ()


?>