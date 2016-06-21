<?php
/*
 * Plugin Name: rejsm_add_example_menu
 * Plugin URI: http://agh.edu.pl/rejsm/
 * Description: Opis wtyczki
 * Version: 1.0
 * Author: Dominik Wieczorek
 * Author URI: facebook.com
 * License: GPLv2
 */
add_action ( 'admin_menu', 'rejsm_menexample_create_menu');
function rejsm_menexample_create_menu (){
    add_menu_page( 'strona wustawieñ wtyczki', "Przyk³ad menu ustawieñ" ,
        manage_options, __FILE__, 'boj_menu_example_settings_page',
        plugins_url( '/images/wp-icon.png', __FILE__));

}
?>