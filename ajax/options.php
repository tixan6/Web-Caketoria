<?php
    $phone = $_POST['phone'];
    $mysqli = mysqli_connect("localhost", "root", "root", "CakeToria") or die("Ошибка" . mysqli_error($mysqli));
    $userset = mysqli_query($mysqli, "SELECT users.name, users.surname, users.email, users.phone FROM `users` WHERE users.phone = '$phone';");
    $inform = mysqli_fetch_row($userset);
    echo (json_encode($inform));
?> 