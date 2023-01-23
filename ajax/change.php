<?php   
$old_pass = md5($_POST['old_pass']."lkafdh23423423");
$new_pass = md5($_POST['new_pass']."lkafdh23423423");
$phone1 = $_POST['phone1'];
$mysqli = mysqli_connect("localhost", "root", "root", "CakeToria") or die("Ошибка" . mysqli_error($mysqli));


$query = "UPDATE users SET users.password='$new_pass' WHERE users.password='$old_pass';";
$products = mysqli_query($mysqli, $query);


$querytwo = "SELECT users.id FROM users WHERE users.password = '$new_pass';";
$result = mysqli_query($mysqli, $querytwo);

$row_cnt = mysqli_num_rows($result);
echo $row_cnt;

?>