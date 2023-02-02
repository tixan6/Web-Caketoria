<?php include "php/datebase.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/MainAdminPanel.css">
    <link rel="stylesheet" href="/fonts/bebasneue/bebasneue.css">
    <link rel="stylesheet" href="/fonts/lato/lato.css">
    <link rel="stylesheet" href="/fonts/montserrat/montserrat.css">
    <link rel="stylesheet" href="/fonts/OpenSans/opensans.css">
    <title>Администрация</title>
</head>
<body>
    
<section>
    <div class="container">
        <div class="centerTitle-orders">
            <h1>Заказы</h1>
            <div class="menu">


                <?php
                    $userOrder = mysqli_query($mysqli, "SELECT users.name, users.phone, Product.Name, Product.Price, Images.Path_img FROM orders JOIN users ON orders.idUser = users.id JOIN Product ON orders.idProduct = Product.ID JOIN Images ON Product.ID_img = Images.ID;");
                    $userOrders = mysqli_fetch_all($userOrder);
                    foreach($userOrders as $_userOrder)
                    {
                ?>
                

                <div class="orderPeople">
                    <img src="\img\Cake\Белочка.jpg">

                    <div class="infAboutOrder">
                        <div class="nameBlock" id="blickItems">
                            <p>Имя заказчика: </p>
                            <h2><?=$_userOrder[0]?></h2>
                        </div>
                        <div class="phoneBlock" id="blickItems">
                            <p>Номер телефона заказчика: </p>
                            <h2><?=$_userOrder[1]?></h2>
                        </div>            
                    </div>
                    
                    <div class="infAboutTovar">
            
                        <div class="nameBlock" id="blickItems">
                            <p>Имя тортика:</p>
                            <h2><?=$_userOrder[2]?></h2>
                        </div>

                        <div class="phoneBlock" id="blickItems">
                            <p class="price">Цена: </p>
                            <h2><?=$_userOrder[3]?> BYN</h2>   
                        </div>       
                          
                    </div>
                    
                    <div class="btnToAccept">
                        <div class="accept">
                            <img src="img\Anim\Checkmark.png">
                        </div>
                        <div class="refuse">
                            <img src="img\Anim\Closemark.png">
                        </div>
                    </div>
                </div>

                <? } ?>
                


            </div>
        </div>
    </div>
</section>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="/js/adminLog.js"></script>
</body>
</html>