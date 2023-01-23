<?php   
$NewPhoneNumber = $_POST['PhoneNumber'];
$Oldphone = $_POST['phone2'];

$mysqli = mysqli_connect("localhost", "root", "root", "CakeToria") or die("Ошибка" . mysqli_error($mysqli));

$query = "UPDATE users SET users.phone='$NewPhoneNumber' WHERE users.phone='$Oldphone';";
$products = mysqli_query($mysqli, $query);


$querytwo = "SELECT users.id FROM users WHERE users.phone = '$NewPhoneNumber';";
$result = mysqli_query($mysqli, $querytwo);

$row_cnt = mysqli_num_rows($result);
echo $row_cnt;

?>