<?php


Class Create_Server {
    public $name;

    public function __construct(){
        $this->set_form_data();
        $this->action();
    }

    public function set_form_data(){
        $this->name = $_POST['room_name'];
    }

    public function action(){
        global $wpdb;
        $wpdb->query("INSERT INTO `newp`.`rpsgame_rooms` (`room_name`, `room_status`) VALUES ('$this->name', 'not_ready');");
    }
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && is_admin() === true && current_user_can( 'administrator' )){
    $create_server = new Create_Server();
}


?>