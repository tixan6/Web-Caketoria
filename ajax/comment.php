<?php   
$msg = $_POST['msg'];
$phone = $_POST['phone'];

$mysqli = mysqli_connect("localhost", "root", "root", "CakeToria") or die("Ошибка" . mysqli_error($mysqli));


$querySearchId = "SELECT users.id FROM users WHERE users.phone = '$phone';";
$result = mysqli_query($mysqli, $querySearchId);

$row_cnt = mysqli_fetch_all($result);
foreach($row_cnt as $p)
{
    echo $p[0];
}




// $query = "UPDATE users SET users.password='$new_pass' WHERE users.password='$old_pass';";
// $products = mysqli_query($mysqli, $query);


// $row_cnt = mysqli_num_rows($result);
// echo $row_cnt;

?>