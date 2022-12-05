<?php 
    include "datebase.php"; 
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']); 
    $mail = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $pass = trim($_POST['pass']);


    

    $pass = md5($pass."lkafdh23423423"); 

    $mysqli->query("INSERT INTO `users` (`name`, `surname`, `email`, `password`, `phone`) 
    VALUES ('$name', '$surname', '$mail', '$pass', '$phone')");
    $mysqli->close();
    header('Location: /');
    echo $name;
    exit();
?>