<?php 
$vacancy = $_GET['vacancy'];

$mysqli = mysqli_connect("localhost", "root", "root", "CakeToria") or die("Ошибка" . mysqli_error($mysqli));

$inform = mysqli_query($mysqli, "SELECT Vacancy.vacancy, Vacancy.post, Vacancy.desc_vacancy FROM `Vacancy` WHERE vacancy = '$vacancy';"); 

//$inform = mysqli_fetch_all($inform);
$inform = mysqli_fetch_row($inform);

echo (json_encode($inform));
?>