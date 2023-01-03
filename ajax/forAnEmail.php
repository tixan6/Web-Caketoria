<?php
    $EFS = $_POST['EFS'];
    //Описание запроса
    $mysqli = mysqli_connect("localhost", "root", "root", "CakeToria") or die("Ошибка" . mysqli_error($mysqli));
    
    $desc = mysqli_query($mysqli, "SELECT * FROM `MailingEmail` WHERE mailingEmail = '$EFS'"); 
    $result = mysqli_fetch_assoc($desc);
    
    if (empty($result)) 
    {
        $descTwo = mysqli_query($mysqli, "INSERT INTO `mailingEmail` (mailingEmail) VALUES ('$EFS');"); 
        echo true;
    } else 
    {
        echo("Не внесли");
    }



?>