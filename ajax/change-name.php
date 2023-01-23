<?php   
$name = $_POST['name'];
$surname = $_POST['surname'];
$phone2 = $_POST['phone2'];

$mysqli = mysqli_connect("localhost", "root", "root", "CakeToria") or die("Ошибка" . mysqli_error($mysqli));


$query = "UPDATE users SET users.name='$name', users.surname='$surname' WHERE users.phone='$phone2';";
$products = mysqli_query($mysqli, $query);


$querytwo = "SELECT users.id FROM users WHERE users.name = '$name';";
$result = mysqli_query($mysqli, $querytwo);

$row_cnt = mysqli_num_rows($result);
echo $row_cnt;

?>