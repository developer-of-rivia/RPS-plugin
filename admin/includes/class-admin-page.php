<?php

Class Admin_Page {
    
    public function __construct(){
        add_action('admin_menu', [$this, 'add_admin_page']);
    }

    public function add_admin_page(){
        add_menu_page(
            'RPS Admin',
            'RPS Admin',
            'manage_options',
            'admin',
            'render_admin_page',
            'dashicons-forms',
            '9999',
        );

        function render_admin_page(){
            require_once RPSGAME_PLUGIN_DIR . '/admin/templates/render_admin_page.php';
        }
    }
}

if(is_admin() === true && current_user_can( 'administrator' )){
    $admin_page = new Admin_Page();
}


?>