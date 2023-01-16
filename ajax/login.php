<?php
$phn = $_POST['phn'];
$products = mysqli_query($mysqli, "SELECT users.phone FROM 'users' WHERE users.phone = '$phn'");
$products = mysqli_fetch_all($products);
foreach ($products as $key) {
    echo $key[0];
}

?>