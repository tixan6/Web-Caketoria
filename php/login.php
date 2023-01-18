<?php
include "datebase.php"; 

$phone = trim($_POST['phone']);
$pass = trim($_POST['pass']);
$pass = md5($pass."lkafdh23423423"); 

$result = $mysqli->query("SELECT * FROM `users` WHERE `phone` = '$phone' AND `password` = '$pass'");

$user = $result->fetch_assoc();
if (empty($user)) 
{
    echo 200;
    exit;
}
echo $phone;
setcookie("user", $user['phone'], time()+36000, "/");
$mysqli->close();
//header('Location: /'); 



?>