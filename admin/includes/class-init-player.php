<?php

Class Init_Player {
    public $user;
    public $user_login;
    public $player_id;
    public $is_joined;

    public function __construct(){
        add_action('admin_menu', [$this, 'get_this_player']);
    }

    public function get_this_player(){
        $user = get_userdata(1);
        $this->user_login = $user->user_login;

        global $wpdb;
        $results = $wpdb->get_results("SELECT * FROM newp.rpsgame_gamers WHERE login='$this->user_login'");

        foreach ($results as $item){
            $this->player_id = $item->id;
            $this->is_joined = $item->is_joined;
        }
    }
}

$init_player = new Init_Player();