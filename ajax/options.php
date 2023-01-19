<?php
    $userset = mysqli_query($mysqli, "SELECT users.name, users.surname, users.email, users.phone FROM `users` WHERE users.phone = '';");
    $userset = mysqli_fetch_all($userset);
    foreach($userset as $usr)
    {

    }
?> 