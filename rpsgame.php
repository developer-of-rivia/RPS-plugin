<?php
/*
Plugin Name: rpsgame
Plugin URI: rpsgame
Description: Краткое описание плагина rpsgame.
Version: 1.0
Author: Yuri
Author URI: rpsgame
*/
    
// константы
define( "RPSGAME_PLUGIN_DIR", plugin_dir_path( __FILE__ ) );

// хуки при активации и диактивации плагина
function rpsgame_activate(){
    require 'includes/class-rpsgame-activate.php';
    rpsgame_activate::activator();
}

function rpsgame_deactivate(){
    require 'includes/class-rpsgame-deactivate.php';
    rpsgame_deactivate::deactivator();
}

register_activation_hook(__FILE__, 'rpsgame_activate');
register_deactivation_hook(__FILE__, 'rpsgame_deactivate');



// импорт основного класса и запуск плагина
require_once 'includes/class-rpsgame.php';

function run_plugin(){
    $plugin = new rpsgame();
    $plugin->run();
}

run_plugin();

?>