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
    <link rel="stylesheet" href="/css/modalView.css">
    <title>Администрация</title>
</head>
<body>
    

<?php
      if (empty($_COOKIE['admin'])):
?>
<h1>У вас нет права доступа!!!</h1>
<?php else: ?>
<section>
    <div class="container">
        <div class="centerTitle-orders">
            <h1>Заказы</h1>
            <div class="menu">


                <?php
                    $userOrder = mysqli_query($mysqli, "SELECT orders.id, users.name, users.phone, Product.Name, Product.Price, Images.Path_img FROM orders JOIN users ON orders.idUser = users.id JOIN Product ON orders.idProduct = Product.ID JOIN Images ON Product.ID_img = Images.ID ORDER BY orders.id DESC;");
                    $userOrders = mysqli_fetch_all($userOrder);
                    foreach($userOrders as $_userOrder)
                    {
                ?>
                

                <div class="orderPeople" id="productId<?=$_userOrder[0]?>">
                    <img src="<?=$_userOrder[5]?>">

                    <div class="infAboutOrder">
                        <div class="nameBlock" id="blickItems">
                            <p>Имя заказчика: </p>
                            <h2><?=$_userOrder[1]?></h2>
                        </div>
                        <div class="phoneBlock" id="blickItems">
                            <p>Номер телефона заказчика: </p>
                            <h2><?=$_userOrder[2]?></h2>
                        </div>            
                    </div>
                    
                    <div class="infAboutTovar">
            
                        <div class="nameBlock" id="blickItems">
                            <p>Имя тортика:</p>
                            <h2><?=$_userOrder[3]?></h2>
                        </div>

                        <div class="phoneBlock" id="blickItems">
                            <p class="price">Цена: </p>
                            <h2><?=$_userOrder[4]?> BYN</h2>   
                        </div>       
                          
                    </div>
                    
                    <div class="btnToAccept">
                        <div class="accept" id="<?=$_userOrder[0]?>">
                            <img src="img\Anim\Checkmark.png">
                        </div>
                        <div class="refuse" id="<?=$_userOrder[0]?>">
                            <img src="img\Anim\Closemark.png">
                        </div>
                    </div>
                </div>


                <? } ?>
                


            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="all">
            <div class="leftSide">
                <h1>Отзывы</h1>
                    <div class="scrollComment">
                        <?php
                            $userComment = mysqli_query($mysqli, "SELECT Comments.id_comment, users.name, Comments.data, Comments.message FROM Comments RIGHT JOIN users ON users.id = Comments.id_UserName WHERE Comments.id_comment IS NOT NULL ORDER BY Comments.id_comment DESC;");
                            $userComment = mysqli_fetch_all($userComment);
                            foreach($userComment as $_user)
                            {
                        ?> 
                            <div class="userComm" id="usg<?= $_user[0]?>">
                                <div class="NameUser-data">
                                    <div class="bg-name">
                                        <h4 id="itemComm"><?= $_user[1]?></h4>
                                    </div>     
                                </div>
                                <div class="userBg">
                                    <p class="text-comment"><?= $_user[3]?></p>
                                </div>
                                <div class="timeComm">

                                    <p id="itemComm"><?= $_user[2]?></p>
                                    <a href="" id="<?= $_user[0]?>" class="removeAMessage">Удалить комментарий</a>
                                </div>
                            </div>
                        <? } ?>
                </div>
            </div>

            <!-- <div class="RigthSide">
                <h1>Добавить тортик</h1>
                <div class="addCake">
                    .addPhoto


                </div>
            </div> -->
            
        </div>
    </div>
</section>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="/js/adminLog.js"></script>
<?php endif; ?>
</body>
</html>