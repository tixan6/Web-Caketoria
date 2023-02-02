<?php
    $log = $_POST['log'];
    $pass = $_POST['pass'];

    $mysqli = mysqli_connect("localhost", "root", "root", "CakeToria") or die("Ошибка" . mysqli_error($mysqli));

    $retPas = mysqli_query($mysqli, "SELECT * FROM adminPass WHERE adminPass.log = '$log' AND adminPass.pass = '$pass';"); 
    $result = mysqli_fetch_assoc($retPas);
    
    if (!empty($result)) 
    {
        echo true;
    } else 
    {
        echo false;
    }
?>