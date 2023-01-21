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
        global $wpdb;



        $room_query_result = $wpdb->query("UPDATE `newp`.`rpsgame_rooms` SET `room_places` = '0' WHERE (`room_id` = '$this->room_id')");
        foreach($room_query_result as $room_result){
            echo $room_result;
        }



        $wpdb->query($wpdb->prepare("UPDATE `newp`.`rpsgame_gamers` SET `is_joined` = '1' WHERE (`id` = '%d');", $this->player_id));

        
    }
}

if($_POST['is-join'] == 1){
    $room_enter = new Room_Enter();
}



?>
