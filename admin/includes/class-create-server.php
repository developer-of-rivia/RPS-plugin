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
        $wpdb->query( "CREATE TABLE IF NOT EXISTS `learn-wp`.`ordered_rooms` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `room_id` INT NOT NULL,
            `room_interval` VARCHAR(45) NOT NULL,
            PRIMARY KEY (`id`));
          " );
        $query = "INSERT INTO `ordered_rooms` (`id`, `room_id`, `room_interval`) VALUES (NULL, %s)";
        $wpdb->query( $wpdb->prepare( $query, 'Lorem ipsum...' ) );
    }
}

if(is_admin() === true && current_user_can( 'administrator' )){
    $create_server = new Create_Server();
}

?>