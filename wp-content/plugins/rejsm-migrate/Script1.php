<?php
/*
 * Plugin Name: rejsm_migrate
 * Plugin URI: http://agh.edu.pl/rejsm/
 * Descrition: Opis wtyczki
 * Version: 1.0
 * Author: Dominik Wieczorek
 * Author URI: facebook.com
 * License: GPLv2 
*/

register_activation_hook( __FILE__, 'rejsm_migrate_install');
function rejsm_migrate_install(){
    
}

register_deactivation_hook ( __FILE__, 'rejsm_migrate_uninstall'){
    delete_option( 'rejsm_')
}
?>
