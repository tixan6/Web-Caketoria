<?php   
$phone3 = $_POST['phone3'];
$addr = $_POST['emailAddr'];

$mysqli = mysqli_connect("localhost", "root", "root", "CakeToria") or die("Ошибка" . mysqli_error($mysqli));


$query = "UPDATE users SET users.email='$addr' WHERE users.phone='$phone3';";
$products = mysqli_query($mysqli, $query);


$querytwo = "SELECT users.id FROM users WHERE users.email = '$addr';";
$result = mysqli_query($mysqli, $querytwo);

$row_cnt = mysqli_num_rows($result);
echo $row_cnt;

?>