<?php

Class Server_Page {
    
    public function __construct(){
        add_action('admin_menu', [$this, 'add_server_page']);
    }

    public function add_server_page(){
        add_menu_page(
            'RPS',
            'RPS',
            'manage_options',
            'servers',
            'render_servers_page',
            'dashicons-games',
            '999',
        );

        function render_servers_page(){
            require_once RPSGAME_PLUGIN_DIR . '/admin/templates/render_servers_page.php';
        }
    }
}

$server_page = new Server_Page();


?>