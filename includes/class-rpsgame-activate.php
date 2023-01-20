<?php

class rpsgame_activate {


    static function activator() {
        $user = get_userdata(1);
        $userlogin = $user->user_login;

        global $wpdb;

        $wpdb->query( "CREATE TABLE IF NOT EXISTS `learn-wp`.`rpsgame_gamers` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `login` VARCHAR(45) NOT NULL,
            PRIMARY KEY (`id`));
          " );

        $query = "INSERT INTO `rpsgame_gamers` (`id`, `login`) VALUES (NULL, '$userlogin')";
        $wpdb->query($query);
    }
}


?>