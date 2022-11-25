<?php include "datebase.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/modalView.css">

    <link rel="stylesheet" href="fonts/bebasneue/bebasneue.css">
    <link rel="stylesheet" href="fonts/lato/lato.css">
    <link rel="stylesheet" href="fonts/montserrat/montserrat.css">
    <link rel="stylesheet" href="fonts/OpenSans/opensans.css">
    
    <title>Caketoria</title>
</head>
<body>
    <header>
        <div class="container">
        
            <div class="header">
                <div class="header_titile">
                    <div class="LOGO">
                        <a href="">Caketoria</a>
                        
                        <img src="img/LOGO.svg"/>
                    </div> 
                                  
                    <div class="Header_Navigation">
                        <ul>
                            <li><a href="#Katalog">Каталог</a></li>
                            <li><a href="#WeAboutUs">О нас</a></li>
                            <li><a href="#cooperation">Сотрудничество</a></li>
                            <li><a href="#KatalogTheBest">Популярные</a></li>
                            <li><a href="#" class="open-popup-Contacts">Контакты</a></li>
                        </ul>
                    </div>
                    <div class="BtnLogOrReg">
                        <a href="#" class="btnlog">Логин</a>
                        <div class="void"></div>
                        <div class="btn_Register_header">
                            <a href="#" class="open-popup-reg" >Регистрация</a>
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
                                    <a href="#Katalog">Продукция</a>
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
                                <?php
                                    $products = mysqli_query($mysqli, "SELECT Images.Path_img, Product.Name, Product.Price, Description.Small_desc FROM `Images`, `Product`, `Description` WHERE Product.ID_img = Images.ID AND Product.ID_desc = Description.ID;");
                                    $products = mysqli_fetch_all($products);
                                    foreach($products as $prod)
                                    {
                                ?>      
                                    <div class="SliderWithItems">
                                        <div class="ItemsSleder">
                                            <img class="PhotoForItemsSlider" src="<?= $prod[0] ?>">
                                            <div class="CenterItemHere">
                                                <h1><?= $prod[1] ?></h1>
                                                <p><?= $prod[3] ?></p>                   
                                            </div>
                                            
                                            <div class="butomTtemsHere">
                                                <a href="#" class="More">Подробнее</a>
                                                    <div class="btnCartAndPrice">
                                                        <div class="btn_Cart">                                           
                                                            <a href="#">В корзину</a>
                                                        </div>
                                                        <div style="width:50px ;"></div>
                                                        <p><?= $prod[2] ?> BYN</p>
                                                    </div>                           
                                            </div> 
                                        </div>
                                    </div> 
                                    
                                <? } ?>
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
        <div class="container" id="Katalog">
            <div class="Katalog" >
                                
                <div class="BloclForCentralize" id="mainCatalog">
                    <p>Каталог</p>
                    <hr>
                </div>

                
                <div class="rowItems">
                    <div class="wraper">  
                        <?php
                            $products = mysqli_query($mysqli, "SELECT Images.Path_img, Product.Name, Product.Price, Description.Small_desc FROM `Images`, `Product`, `Description` WHERE Product.ID_img = Images.ID AND Product.ID_desc = Description.ID;");
                            $products = mysqli_fetch_all($products);
                            foreach($products as $prod)
                            {
                        ?>       
                        <div class="SliderWithItems">
                            
                            <div class="ItemsSleder">
                                        <img class="PhotoForItemsSlider" src="<?= $prod[0] ?>">
                                        <div class="CenterItemHere">
                                            <h1><?= $prod[1] ?></h1>
                                            <p><?= $prod[3] ?></p>                   
                                        </div>
                                        
                                        <div class="butomTtemsHere">
                                            <a href="#" class="More">Подробнее</a>
                                                <div class="btnCartAndPrice">
                                                    <div class="btn_Cart">
                                                        <a href="#">В корзину</a>
                                                    </div>
                                                    <div style="width:50px ;"></div>
                                                    <p><?= $prod[2] ?> BYN</p>
                                                </div>                           
                                        </div> 
                                    
                            </div>
                        </div>
                        <? } ?>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section>    
            <div class="CircleBg" id="WeAboutUs">    
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
                                <?php
                                    $products = mysqli_query($mysqli, "SELECT TheBestEmployees.FirstName, TheBestEmployees.Post, TheBestEmployees.photo FROM `TheBestEmployees`;");
                                    $products = mysqli_fetch_all($products);
                                    foreach($products as $prod)
                                    {
                                ?>   
                                    <div class="itemBest">
                                    <img class="bgEmpl" src="<?= $prod[2]?>">   
                                        <div class="info">
                                            <p class="NameAboutOne" id="personName">
                                                <?= $prod[0]?>
                                            </p>
                                            <p class="NameAboutOne" id="personPost">
                                            <?= $prod[1]?>
                                            </p>
                                        </div>
                                    </div>

                                <? } ?>
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
                            <div class="MainPHm">
                                <div class="infoPHm">
                                    <p class="NameAboutOne" id="personName">
                                        Михаил
                                    </p>
                                    <p class="NameAboutOne" id="personPost">
                                        Директор
                                    </p>
                                </div>
                            </div>
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
                        <a href="https://www.marriott.com.ru/hotels/travel/mhpmc-minsk-marriott-hotel/"><img class="cooperation_img" src=".\img\Cooperation\Marriot.png"></a>
                    </div>
                    <div class="item_cooperation">
                        <a href="https://www.rgs.ru/"><img class="cooperation_img" src=".\img\Cooperation\Росгосстрах.png"></a>
                    </div>
                    <div class="item_cooperation">
                        <a href="https://dodopizza.by/gomel"><img class="cooperation_img" src=".\img\Cooperation\dodo.png"></a>
                    </div>
                    <div class="item_cooperation">
                       <a href="https://www.laredoute.ru/"><img class="cooperation_img" src=".\img\Cooperation\LaRedoute.png"></a> 
                    </div>
                    

                    <div class="item_cooperation">
                        <a href="https://www.zarplata.ru/"><img class="cooperation_img" src=".\img\Cooperation\зарплатаРу.png"></a> 
                    </div>
                    <div class="item_cooperation">
                        <a href="https://www.atb.su/"><img class="cooperation_img" src=".\img\Cooperation\atb.png"></a> 
                    </div>
                    <div class="item_cooperation">
                        <a href="https://www.avito.ru/"><img class="cooperation_img" src=".\img\Cooperation\avitopng.png"></a>
                    </div>
                    <div class="item_cooperation">
                        <a href="https://www.redbull.com/ru-ru/"><img class="cooperation_img" src=".\img\Cooperation\retbul.png"></a> 
                    </div>
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
                            <h1>500,00 РУБ.</h1>
                            <p>Максимальная сумма при оплате наличными
                            Изображения продуктов могут отличаться от продуктов в заказе.
                            </p>
                        </div>
                        
                    </div>

                    <div class="RigthBlock">
                        <div class="title">
                            <h1>Зона доставки ограничена</h1>
                            <div class="map">
                                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Afccfe2967d11fdfac07e7ddab611d1d6276a859358683b732fb7d660bb695c7a&amp;width=345&amp;height=345&amp;lang=ru_RU&amp;scroll=true"></script>
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
                            <p>Присоединиться</p>
                            <ul class="menu">
                                <li><a href="#">Вакансии</a></li>
                                <li><a href="#">Члены команды</a></li>
                                <li><a href="#">Сотрудничать</a></li>
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
                    <div class="line-footer"></div>
                    

                    <div class="underLine">
                        <p>
                         Кафетерий - это полис с ограниченными льготами; он не заменяет медицинскую страховку. Информация, представленная на этом веб-сайте, носит исключительно иллюстративный характер. Полное описание льгот, ограничений и исключений приведено в вашем страховом свидетельстве и соответствующих инструкциях. Краткое описание ограничений и исключений смотрите в нашем разделе часто задаваемых вопросов. Перечисленные значения выплат не гарантируют сумму, подлежащую выплате при перечисленных условиях. Продукт доступен не во всех штатах. Все страховые покрытия подпадают под действие положений и условий политики master group.
                        </p> 

                        <p>
                        Caketoria is underwritten by Greenhouse Life Insurance Company (NAIC 80055). Form No. PFSB11-TX
                        </p> 

                        <p>Reach us by mail at 2093 Philadelphia Pike #2496, Claymont, DE 19703 and by phone at</p>

                        <div class="button">
                            <p>© 2021 Cafeteria Insurance Inc. <br/>Все права</p>    
                            <div class="rright">
                                <p>Конфиденциальность | Условия предоставления услуг</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> 

    <div class="popup-bg-contact">
        <div class="popup-сontacts">
            <img src="img\window\ClosePopup.png" alt="icon" class="closePopup-Contact">
            <div class="title-poput">
                <div class="centerTitlePop">
                    <h1>Контакты</h1>
                </div>              
                <div class="main-title">
                    <div class="item-popup-left">
                        <div class="email-popup">
                            <h2>Почта для связи</h2>
                            <p>CaketoriaInfopas@yandex.by</p>
                            <p>Сakebob@bobub.by</p>
                        </div>

                        <div class="messenger-popup">
                            <h2>Мессенджеры</h2>
                            <a href="https://vk.com">VK</a><br>
                            <a href="https://www.instagram.com">Instagram</a>
                        </div>

                    </div>
                    <div class="item-popup-rigth">
                        <h2>Телефоны</h2>
                        <div class="colum-phone">
                            <p>+375 (29) 233-22-33</p>
                            <p>+375 (29) 121-52-73</p>
                            <p>+375 (33) 333-22-11</p>   
                        </div>                         
                    </div>
                </div>
            </div>      
        </div>
    </div>

    <div class="popup-bg-reg">
        <div class="popup-reg">
            <img src="img\window\ClosePopup.png" alt="icon" class="closePopup-reg">
            <div class="title-poput">
                <div class="centerTitlePop">
                    <h1>Регистрация</h1>
                </div>              
                <div class="main-title-reg">
                    <form>
                        <div class="fs">
                            <input type="text" class="FirstNameInput" placeholder="Имя">
                            <input type="text" class="SurnameNameInput" placeholder="Фамилия">
                        </div>
                        <div class="email">
                            <input type="email" class="email-Input" placeholder="Эл. почта">
                        </div>
                        <div class="phone">
                            <input type="phone" class="phone-input" placeholder="Номер телефона">
                        </div>
                        <div class="passwords">
                            <input type="password" class="password-input" placeholder="Пароль">
                            <input type="password" class="password-input-repeat" placeholder="Повторите пароль">
                        </div>
                        <div class="btnReg">
                            <div class="btn-log">
                                <a href="#" class="Login">Войти</a>
                            </div>
                            <div class="btn-reg">
                                <a href="#" class="Registration">Регистрация</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>      
        </div>
    </div>
  

    

    <script src="js/slider.js"></script>  
    <script src="js/sliderTwo.js"></script>
    <script src="js/SmoothScrolling.js"></script>
    <script src="js/Show.js"></script>
    <script src="js/ShowTwo.js"></script>
    <script src="js/popupContact.js"></script>  
</body>
</html>