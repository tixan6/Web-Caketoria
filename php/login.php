<?php
include "datebase.php"; 

$phone = trim($_POST['LoginPhone']);
$pass = trim($_POST['LoginPass']);
$pass = md5($pass."lkafdh23423423"); 

$result = $mysqli->query("SELECT * FROM `users` WHERE `phone` = '$phone' AND `password` = '$pass'");

$user = $result->fetch_assoc();
if (empty($result)) 
{
    echo "Не одного не найдено";
    exit();
}

setcookie("user", $user['phone'], time()+36000, "/");
$mysqli->close();
header('Location: /'); 



?>