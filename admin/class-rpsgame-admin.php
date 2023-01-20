<?php

Class rpsgame_admin {
    public function __construct(){
        $this->admin_dependencies();
    }
 
    public function admin_dependencies(){
        require_once RPSGAME_PLUGIN_DIR . '/admin/includes/class-servers-page.php';
        require_once RPSGAME_PLUGIN_DIR . '/admin/includes/class-admin-page.php';
        require_once RPSGAME_PLUGIN_DIR . '/admin/includes/class-create-server.php';
        require_once RPSGAME_PLUGIN_DIR . '/admin/includes/class-room.php';
        require_once RPSGAME_PLUGIN_DIR . '/admin/includes/class-room-enter.php';
    }
}