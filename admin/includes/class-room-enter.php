<?php


Class Room_Enter extends Init_Player{
    public $room_id;

    public function __construct(){
        add_action('admin_menu', [$this, 'get_this_player']);
        add_action('admin_menu', [$this, 'get_enter_data']);
        add_action('admin_menu', [$this, 'update_room_data']);
    }

    public function get_enter_data(){
        $this->room_id = $_POST['room_id'];
    }

    public function update_room_data(){
        // glob
        global $wpdb;
        // get room results
        $room_query_result = $wpdb->get_results("SELECT * FROM newp.rpsgame_rooms WHERE room_id=$this->room_id;");
        $room_places;
        foreach ($room_query_result as $item){
            $room_places = $item->room_places;
        }
        if($room_places == 0 && $this->is_joined == 0){
            $wpdb->query("UPDATE `newp`.`rpsgame_rooms` SET `room_places` = '1' WHERE (`room_id` = '$this->room_id');");
            $wpdb->query($wpdb->prepare("UPDATE `newp`.`rpsgame_gamers` SET `is_joined` = '1' WHERE (`id` = '%d');", $this->player_id));
        }
        elseif($room_places == 1 && $this->is_joined == 0){
            $wpdb->query("UPDATE `newp`.`rpsgame_rooms` SET `room_places` = '2' WHERE (`room_id` = '$this->room_id');");
            $wpdb->query($wpdb->prepare("UPDATE `newp`.`rpsgame_gamers` SET `is_joined` = '1' WHERE (`id` = '%d');", $this->player_id));
        }
    }
}

if($_POST['is-join'] == 1){
    $room_enter = new Room_Enter();
}



?>
