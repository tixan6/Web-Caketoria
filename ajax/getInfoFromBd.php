<?php
    $id = $_POST['id'];
    //Описание запроса
    $mysqli = mysqli_connect("localhost", "root", "root", "CakeToria") or die("Ошибка" . mysqli_error($mysqli));
    $desc = mysqli_query($mysqli, "SELECT Description.Huge_desc FROM `Product` LEFT JOIN Description ON Product.ID_desc = Description.ID WHERE Product.ID = '$id'"); 
    $desc = mysqli_fetch_all($desc);
    foreach($desc as $prod)
    {
        echo($prod[0]);
    }
?>