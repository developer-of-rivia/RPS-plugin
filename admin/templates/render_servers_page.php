<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<?php

global $wpdb;
$result = $wpdb->get_results("SELECT * FROM newp.rpsgame_rooms;");

?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Places</th>
      <th scope="col">Enter</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($result as $row):
            ?>
            <form action="" method="POST">
              <tr>
                  <input hidden name="is-join" value="1">
                  <input hidden name="room_id" value="<?= $row->room_id ?>">

                  <th scope="row"><?= $row->room_id ?></th>
                  <td><?= $row->room_name ?></td>
                  <td><?= $row->room_status ?></td>
                  <td><?= $row->room_places ?>/2</td>
                  <td><button>Присоединиться</button></td>
              </tr>
            </form>
            <?php
        endforeach;
    ?>
  </tbody>
</table>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>