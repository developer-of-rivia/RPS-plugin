<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<?php

    function get_this_player(){
        $user = get_userdata(1);
        $user_ID;
        $user_login = $user->user_login;
        $user_is_joined;

        global $wpdb;
        $results = $wpdb->get_results("SELECT * FROM newp.rpsgame_gamers WHERE login='$user_login'");

        foreach ($results as $item){
            $user_ID = $item->id;
            $user_is_joined = $item->is_joined;
        }

        return $user_is_joined;
    }
    get_this_player();



  if(get_this_player() == 1){
    ?>
      <section style="padding: 100px;">
        <div class="container">
            <form>
            <h1 class="mb-5">Сделайте ваш выбор</h1>
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control mb-3" placeholder="Ваш выбор">
                  <button class="btn btn-success">Сделать выбор</button>
                </div>
              </div>
            </form>
        </div>
    </section>
  <?php } else {
    echo 'Войдите в комнату';
  }
?>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>