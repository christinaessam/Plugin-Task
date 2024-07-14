<?php
function hac_settings_submenu() {
    add_submenu_page(
        'tools.php', 
        'Hide Admin Columns', 
        'Hide Admin Columns', 
        'manage_options', 
        'hac-setting.php', 
        'hac_settings_submenu_page' 
    );
}

function hac_settings_submenu_page() {
    include( plugin_dir_path( __FILE__ ) . '/hac-setting.php' );
}

add_action( 'admin_menu', 'hac_settings_submenu' );