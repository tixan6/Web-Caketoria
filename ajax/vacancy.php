<?php 
$info = $_POST['info'];

$mysqli = mysqli_connect("localhost", "root", "root", "CakeToria") or die("Ошибка" . mysqli_error($mysqli));

$inform = mysqli_query($mysqli, "SELECT Vacancy.vacancy, Vacancy.post, Vacancy.desc_vacancy FROM `Vacancy`;"); 

$inform = mysqli_fetch_all($inform);
//$inform = mysqli_fetch_row($inform);
foreach ($inform as $key) 
{
    print_r($key[0]);
}

?>