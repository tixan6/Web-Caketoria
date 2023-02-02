<?php   
$phone = $_POST['phone'];
$id = $_POST['id'];
$mysqli = mysqli_connect("localhost", "root", "root", "CakeToria") or die("Ошибка" . mysqli_error($mysqli));
$idUser;

$querySearchId = "SELECT users.id FROM users WHERE users.phone = '$phone';";
$result = mysqli_query($mysqli, $querySearchId);
$row_cnt = mysqli_fetch_all($result);

foreach($row_cnt as $p)
{
    $idUser = $p[0];
}

$queryIntoId = "INSERT INTO orders (orders.idUser, orders.idProduct) VALUES ('$idUser', '$id');";
$addComm = mysqli_query($mysqli, $queryIntoId);
?>