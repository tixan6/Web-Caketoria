<?php   
// $old_pass = $_POST['old_pass'];
// $new_pass = $_POST['new_pass'];
//$old_pass = md5($_POST['old_pass']);

$old_pass = md5($_POST['old_pass']."lkafdh23423423");
$new_pass = md5($_POST['new_pass']."lkafdh23423423");



echo $new_pass;
$query = "UPDATE users SET users.password='$new_pass' WHERE users.password='$old_pass';";

$mysqli = mysqli_connect("localhost", "root", "root", "CakeToria") or die("Ошибка" . mysqli_error($mysqli));
$products = mysqli_query($mysqli, $query);
//echo $products;


?>