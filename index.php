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
                            <li><a href="#mainCatalog">Каталог</a></li>
                            <li><a href="#WeAbout">О нас</a></li>
                            <li><a href="#cooperation">Сотрудничество</a></li>
                            <li><a href="#KatalogTheBest">Популярные</a></li>
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
        <div class="containers"  id="KatalogTheBest">
            <div class="KatalogTheBest" >

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
        <div class="container">
            <div class="Katalog">

                <div class="BloclForCentralize" id="mainCatalog">
                    <p>Каталог</p>
                    <hr>
                </div>

                <div class="rowItems">
                    <div class="wraper">    

                        <div class="SliderWithItems">
                            <div class="ItemsSleder">
                                <img class="PhotoForItemsSlider" src="./img/Mechanism.png">
                                <div class="CenterItemHere">
                                    <h1>ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ</h1>
                                    <p>ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    </p>                   
                                </div>
                                
                                <div class="butomTtemsHere">
                                    <a href="#" class="More">Подробнее</a>
                                        <div class="btnCartAndPrice">
                                            <div class="btn_Cart">
                                                <a href="#">В корзину</a>
                                            </div>
                                            <div style="width:50px ;"></div>
                                            <p>10 BYN</p>
                                        </div>                           
                                </div> 
                            </div>
                        </div> 

                        <div class="SliderWithItems">
                            <div class="ItemsSleder">
                                <img class="PhotoForItemsSlider" src="./img/Mechanism.png">
                                <div class="CenterItemHere">
                                    <h1>ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ</h1>
                                    <p>ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    </p>                   
                                </div>
                                
                                <div class="butomTtemsHere">
                                    <a href="#" class="More">Подробнее</a>
                                        <div class="btnCartAndPrice">
                                            <div class="btn_Cart">
                                                <a href="#">В корзину</a>
                                            </div>
                                            <div style="width:50px ;"></div>
                                            <p>10 BYN</p>
                                        </div>                           
                                </div> 
                            </div>
                        </div> 

                        <div class="SliderWithItems">
                            <div class="ItemsSleder">
                                <img class="PhotoForItemsSlider" src="./img/Mechanism.png">
                                <div class="CenterItemHere">
                                    <h1>ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ</h1>
                                    <p>ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    </p>                   
                                </div>
                                
                                <div class="butomTtemsHere">
                                    <a href="#" class="More">Подробнее</a>
                                        <div class="btnCartAndPrice">
                                            <div class="btn_Cart">
                                                <a href="#">В корзину</a>
                                            </div>
                                            <div style="width:50px ;"></div>
                                            <p>10 BYN</p>
                                        </div>                           
                                </div> 
                            </div>
                        </div> 

                        <div class="SliderWithItems">
                            <div class="ItemsSleder">
                                <img class="PhotoForItemsSlider" src="./img/Mechanism.png">
                                <div class="CenterItemHere">
                                    <h1>ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ</h1>
                                    <p>ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    </p>                   
                                </div>
                                
                                <div class="butomTtemsHere">
                                    <a href="#" class="More">Подробнее</a>
                                        <div class="btnCartAndPrice">
                                            <div class="btn_Cart">
                                                <a href="#">В корзину</a>
                                            </div>
                                            <div style="width:50px ;"></div>
                                            <p>10 BYN</p>
                                        </div>                           
                                </div> 
                            </div>
                        </div> 

                        <div class="SliderWithItems">
                            <div class="ItemsSleder">
                                <img class="PhotoForItemsSlider" src="./img/Mechanism.png">
                                <div class="CenterItemHere">
                                    <h1>ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ</h1>
                                    <p>ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    </p>                   
                                </div>
                                
                                <div class="butomTtemsHere">
                                    <a href="#" class="More">Подробнее</a>
                                        <div class="btnCartAndPrice">
                                            <div class="btn_Cart">
                                                <a href="#">В корзину</a>
                                            </div>
                                            <div style="width:50px ;"></div>
                                            <p>10 BYN</p>
                                        </div>                           
                                </div> 
                            </div>
                        </div> 
                        <div class="SliderWithItems">
                            <div class="ItemsSleder">
                                <img class="PhotoForItemsSlider" src="./img/Mechanism.png">
                                <div class="CenterItemHere">
                                    <h1>ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ</h1>
                                    <p>ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    </p>                   
                                </div>
                                
                                <div class="butomTtemsHere">
                                    <a href="#" class="More">Подробнее</a>
                                        <div class="btnCartAndPrice">
                                            <div class="btn_Cart">
                                                <a href="#">В корзину</a>
                                            </div>
                                            <div style="width:50px ;"></div>
                                            <p>10 BYN</p>
                                        </div>                           
                                </div> 
                            </div>
                        </div> 

                        <div class="SliderWithItems">
                            <div class="ItemsSleder">
                                <img class="PhotoForItemsSlider" src="./img/Mechanism.png">
                                <div class="CenterItemHere">
                                    <h1>ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ</h1>
                                    <p>ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    ЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУЙЦУ
                                    </p>                   
                                </div>
                                
                                <div class="butomTtemsHere">
                                    <a href="#" class="More">Подробнее</a>
                                        <div class="btnCartAndPrice">
                                            <div class="btn_Cart">
                                                <a href="#">В корзину</a>
                                            </div>
                                            <div style="width:50px ;"></div>
                                            <p>10 BYN</p>
                                        </div>                           
                                </div> 
                            </div>
                        </div> 

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>    
            <div class="CircleBg">    
                <div class="BloclForCentralize" id="AboutUs">
                    <p>Наша команда</p>
                    <hr>
                </div>
                <div class="container">
                    <div class="WeAbout" id="WeAbout">
                        <div class="itemsLeft">
                            <h1>Мы</h1>
                            <p>Таким образом новая модель организационной
                                деятельности способствует подготовки и реализации соответствующий
                                условий активизации. Идейны
                                е соображения высшего порядка, а также сложившаяся Таким образом новая модель организационной
                                деятельности способствует подготовки и реализации соответствующий
                                условий активизации. Идейны
                                е соображения высшего порядка, а также сложившаяся 
                            </p>
                        </div>
                        <div class="itemsRight">
                            <h1>Лучшие сотрудники</h1>
                            <div class="The_best_employees">
                                <div class="itemBest"></div>
                                <div class="itemBest"></div>
                                <div class="itemBest"></div>
                            </div>
                        </div>
                          
                    </div>
                    <div class="Line"></div> 
                        <div class="MainHm">
                            <div class="itmLft">
                                <h1>Генеральный директор</h1>
                                <p>Таким образом новая модель организационной
                                    деятельности способствует подготовки и реализации соответствующий
                                    условий активизации. Деятельности способствует подготовки и реализации соответствующий
                                    условий активизации.
                                </p>
                            </div>
                        <div class="itmRth">
                            <div class="MainPHm"></div>
                        </div>
                    </div>
                    
                </div>
            </div>        
            
    </section>

    <section>
        <div class="container">
            <div class="ForPadding_cooperation" id="cooperation">
                <div class="BloclForCentralize" id="mainCatalog">
                    <p>С кем мы сотрудничаем </p>
                    <hr>
                </div>

                <div class="cooperation" >
                    <div class="item_cooperation">
                        <img class="cooperation_img" src=".\img\Cooperation\Marriot.png">
                    </div>
                    <div class="item_cooperation">
                        <img class="cooperation_img" src=".\img\Cooperation\Росгосстрах.png">
                    </div>
                    <div class="item_cooperation">
                        <img class="cooperation_img" src=".\img\Cooperation\dodo.png">
                    </div>
                    <div class="item_cooperation">
                        <img class="cooperation_img" src=".\img\Cooperation\LaRedoute.png">
                    </div>
                    

                    <div class="item_cooperation">
                        <img class="cooperation_img" src=".\img\Cooperation\зарплатаРу.png">
                    </div>
                    <div class="item_cooperation">
                        <img class="cooperation_img" src=".\img\Cooperation\atb.png">
                    </div>
                    <div class="item_cooperation">
                        <img class="cooperation_img" src=".\img\Cooperation\avitopng.png">
                    </div>
                    <div class="item_cooperation">
                        <img class="cooperation_img" src=".\img\Cooperation\retbul.png">
                    </div>
                </div>

                <div class="cooperationBTN">
                    <a href="#">Сотрудничество</a>
                </div>
                
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="ForPadding_fast_desc">
                <div class="MainBlock">
                    <div class="LeftBlock">
                        <div class="first">
                            <h1>59 минут  или тортики бесплатно</h1>
                            <p>Если мы не успеем доставить любые продукты, кроме сувенирной продукции, 
                            в течение 59 минут, курьер подарит вам сертификат на большую пиццу.
                            </p>
                        </div>
                        <div class="second">
                            <h1>1 000,00 РУБ.</h1>
                            <p>Максимальная сумма при оплате наличными
                            Изображения продуктов могут отличаться от продуктов в заказе.
                            </p>
                        </div>
                        
                    </div>

                    <div class="RigthBlock">
                        <div class="title">
                            <h1>Зона доставки ограничена</h1>
                            <div class="map">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footerMain">

                <div class="TopFoot">
                    <div class="leftItemsTopFoot">
                        <div class="LOGO_FOOT">
                            <h1>Caketoria</h1>
                        </div>
                        <div class="firstList">
                            <p>JOIN CAKETORIA</p>
                            <ul class="menu">
                                <li><a href="#">Our Plan</a></li>
                                <li><a href="#">Employers</a></li>
                                <li><a href="#">Brokers</a></li>
                                <li><a href="#">Members</a></li>
                            </ul>
                        </div>
                        <div class="firstList">
                            <p>COMPANY</p>
                            <ul class="menu">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="rigtItemsTopFoot">
                        <div class="subscribe">
                            <h1>Подпишитесь на нашу рассылку</h1>
                            <div class="inputEmail">
                                <input class="inputEmailForMailing" placeholder="Ваш E-mail" type="text">
                                <div class="btnOk">
                                    <p>Ок</p>
                                </div>
                            </div>
                            <h1 class="ThisIsForAPadd">Мы в соцсетях:</h1>
                            <div class="We_are_in_social_networks">
                                <div class="socialFacebook">
                                    <img src=".\img\Icons\FaceBook.png">
                                </div>
                                <div class="socialVk">
                                    <img src=".\img\Icons\vk.png">
                                </div>
                                <div class="socialOk">
                                    <img src=".\img\Icons\ok.png">
                                </div>
                                <div class="socialInstagram">
                                    <img src=".\img\Icons\insta.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="BotFoot">

                </div>
            </div>
        </div>
    </footer> 

    <script src="js/slider.js"></script>  
    <script src="js/sliderTwo.js"></script>
    <script src="js/SmoothScrolling.js"></script>
</body>
</html>