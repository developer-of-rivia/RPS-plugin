<?php

Class Room_Page extends Init_Player{
    
    public function __construct(){
        add_action('admin_menu', [$this, 'add_room_page']);
    }

    public function add_room_page(){
        add_menu_page(
            'RPS Game',
            'RPS Game',
            'manage_options',
            'game',
            'render_room_page',
            'dashicons-games',
            '999',
        );

        function render_room_page(){
            require_once RPSGAME_PLUGIN_DIR . '/admin/templates/render_room_page.php';
        }
    }
}

$room_page = new Room_Page();


?>
