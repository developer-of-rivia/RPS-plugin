<?php

Class rpsgame{
    public function run(){
        $this->load_dependencies();
        $this->define_admin_hooks();
        $this->define_public_hooks();
    }

    public function load_dependencies(){
        require_once RPSGAME_PLUGIN_DIR . '/admin/class-rpsgame-admin.php';
        require_once RPSGAME_PLUGIN_DIR . '/public/class-rpsgame-public.php';

        require_once ABSPATH . WPINC . '/pluggable.php';
        require_once ABSPATH . WPINC . '/pluggable-deprecated.php';
    }

    public function define_admin_hooks(){
        $plugin_admin = new rpsgame_admin();
    }

    public function define_public_hooks(){
        $plugin_public = new rpsgame_public();
    }


}