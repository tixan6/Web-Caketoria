<?php 
    include "datebase.php";
    $result = mysqli_query($mysqli, "SELECT * FROM `The_best_product`");
    //$TheBestProduct = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    
    <link rel="stylesheet" href="fonts/bebasneue/bebasneue.css">
    <link rel="stylesheet" href="fonts/lato/lato.css">
    <link rel="stylesheet" href="fonts/montserrat/montserrat.css">
    <link rel="stylesheet" href="fonts/OpenSans/opensans.css">
    
    <title>Caketoria</title>
</head>
<body>
    <header >
        <div class="container">
            <div class="header">
                <div class="header_titile">
                    <div class="LOGO">
                        <h1>Caketoria</h1>
                        <img src="img/LOGO.svg"/>
                    </div>
                    <div class="Header_Navigation">
                        <ul>
                            <li><a href="#" class="as" >Каталог</a></li>
                            <li><a href="#">О нас</a></li>
                            <li><a href="#">Отзывы</a></li>
                            <li><a href="#PopularProducts">Популярные</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                    <div class="BtnLogOrReg">
                        <a href="#" class="btnlog">Логин</a>
                        <div class="void"></div>
                        <div class="btn_Register_header">
                            <a href="#" >Регистрация</a>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </header>
  
    <section>
            <div class="containers">
                <div class="main-window">
                    <div class="mainTxtOnWin">
                        <p class="maintxt">Наши товары делают с душой и любовью</p>
                            <p class="undertxt_of_maintxt">Таким образом новая модель организационной
                                деятельности способствует подготовки и реализации соответствующий
                                условий активизации. Идейны
                                е соображения высшего порядка, а также сложившаяся </p>
                                <div class="Products">
                                    <a href="#">Продукция</a>
                                </div>        
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div class="container">
            <div class="OnlyBest">
                <h1>Только лучшие ингредиенты</h1>
                <hr>
                <div class="BlocItemsBest">
                    <div class="BlocItemsBest_One">
                        <img src="./img/Green.png">
                        <h3>Натуральные ингредиенты</h3>
                        <p>Собираем с плодородных земель
                            только лучшие плоды на наших 
                           полях для ваших тортиков</p>
                    </div>

                    <div class="BlocItemsBest_One">
                        <img src="./img/Wheat.png">
                        <h3>Лучшие крупы</h3>
                        <p>Собираем с плодородных земель
                            только лучшие плоды на наших 
                           полях для ваших тортиков</p>
                    </div>

                    <div class="BlocItemsBest_One">
                        <img src="./img/Mechanism.png">
                        <h3>Современные технологии 
                            приготовление</h3>
                        <p>Собираем с плодородных земель
                            только лучшие плоды на наших 
                           полях для ваших тортиков</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="containers">
            <div class="KatalogTheBest">

                <div class="BloclForCentralize" id="PopularProducts">
                    <p>Популярная наша продукция</p>
                    <hr>
                </div>

                <div class="container">
                    <div class="centerItem">

                        <div class="ArrowToTheLeft">
                            <img src="./img/ArrowToTheLeft.png">
                        </div>

                        
                        <div class="slider">
                            <div class="sliderLine">
                            <?php while($TheBestProduct = mysqli_fetch_assoc($result)) { ?>
                                <div class="SliderWithItems">
                                    <div class="ItemsSleder">
                                        <img class="PhotoForItemsSlider" src="<?php echo $TheBestProduct['photo']?>">
                                        <div class="CenterItemHere">
                                            <h1><?php echo $TheBestProduct['title']?></h1>
                                            <p><?php echo $TheBestProduct['textMin']?></p>                   
                                        </div>
                                        
                                        <div class="butomTtemsHere">
                                            <a href="#" class="More">Подробнее</a>
                                                <div class="btnCartAndPrice">
                                                    <div class="btn_Cart">
                                                        <a href="#">В корзину</a>
                                                    </div>
                                                    <div style="width:50px ;"></div>
                                                    <p><?php echo $TheBestProduct['price']?> BYN</p>
                                                </div>                           
                                        </div> 
                                    </div>
                                </div> 
                                <?php } ?>
                            </div>
                        </div>
                        
                        <div class="ArrowToTheRigth">
                            <img src="./img/ArrowToTheRigth.png">
                        </div>   
                                            
                                            
                    </div> 
                </div>  
            </div>
        </div>
    </section>

    <section>
        <div class="containers">
            <div class="Katalog">

                <div class="BloclForCentralize" id="mainCatalog">
                    <p>Каталог</p>
                    <hr>
                </div>

            </div>
        </div>

    </section>

    <section>
        <div class="container">
        </div>
    </section>

    <section>
        <div class="container">

        </div>
    </section>

    <footer>
        <div class="container">

        </div>
    </footer>
    <script src="js/slider.js"></script>
    <script src="js/sliderTwo.js"></script>
    <script src="js/SmoothScrolling.js"></script>
</body>
</html>