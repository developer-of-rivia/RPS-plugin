<?php


Class Room_Enter {
    public $room_id;

    public function __construct(){
        add_action('admin_menu', [$this, 'get_enter_data']);
        add_action('admin_menu', [$this, 'update_room_data']);
    }

    public function get_enter_data(){
        $this->room_id = $_POST['room_id'];
    }

    public function update_room_data(){
        global $wpdb;
        $wpdb->query("UPDATE `newp`.`rpsgame_rooms` SET `room_places` = '1' WHERE (`room_id` = '$this->room_id')");
    }
}

if($_POST['is-join'] == 1){
    $room_enter = new Room_Enter();
}


?>
