<?php   
    $msg = $_POST['msg'];
    $phone = $_POST['phone'];
    $now = $_POST['now'];
    $mysqli = mysqli_connect("localhost", "root", "root", "CakeToria") or die("Ошибка" . mysqli_error($mysqli));
    $id;

    $querySearchId = "SELECT users.id FROM users WHERE users.phone = '$phone';";
    $result = mysqli_query($mysqli, $querySearchId);
    $row_cnt = mysqli_fetch_all($result);

    foreach($row_cnt as $p)
    {
        $id = $p[0];
    }
    $queryIntoId = "INSERT INTO Comments (Comments.id_UserName, Comments.data, Comments.message) VALUES ('$id', '$now', '$msg')";
    $addComm = mysqli_query($mysqli, $queryIntoId);
?>