<?php   
    $id = $_POST['id'];
    $mysqli = mysqli_connect("localhost", "root", "root", "CakeToria") or die("Ошибка" . mysqli_error($mysqli));

    $query = "DELETE FROM Comments WHERE id_comment = '$id' LIMIT 1;";
    $products = mysqli_query($mysqli, $query);
?>