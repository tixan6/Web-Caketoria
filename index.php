<?php include "php/datebase.php"; ?>
<?php include "ajax/getInfoFromBd.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/modalView.css">

    <link rel="stylesheet" href="/fonts/bebasneue/bebasneue.css">
    <link rel="stylesheet" href="/fonts/lato/lato.css">
    <link rel="stylesheet" href="/fonts/montserrat/montserrat.css">
    <link rel="stylesheet" href="/fonts/OpenSans/opensans.css">
    
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
                    <?php
                        if (empty($_COOKIE['user'])):
                    ?>
                    <div id="HaveOrNoHave" class="BtnLogOrReg">
                            <a href="#" class="btnlog">Логин</a>           
                        <div class="void"></div>
                        <div class="btn_Register_header">
                            <a href="#" class="open-popup-reg" >Регистрация</a>
                        </div>






                    </div>
                    <?php else: ?>
                        <div class="BtnLogOrReg">


                    
                            
                            <ul class="loginMenu">
                                
                                <a href="#" id="inNet" class="btnlog"></a> 
                                <ul class="menuItems">
                                    <li><a href="">Корзина</a></li>
                                    <li><a href="">Настройкий</a></li>
                                    <li><a href="" class="ExitFromAccount">Выход</a></li>
                                </ul>  
                            </ul>
                        
                        <div class="void"></div>
                    <?php endif; ?>
                    



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
                                    $products = mysqli_query($mysqli, "SELECT p.ID, p.Name, p.Price, ima.Path_img, dsc.Small_desc from Product p join Popular_product pop on p.ID = pop.ID_regularProduct join Description dsc on p.ID_desc = dsc.ID join Images ima on p.ID_img = ima.ID WHERE p.ID = pop.ID_regularProduct;");
                                    $products = mysqli_fetch_all($products);
                            
                                    foreach($products as $prod)
                                    {
                                ?>      
                                    <div class="SliderWithItems">
                                        <div class="ItemsSleder">
                                            <img class="PhotoForItemsSlider" src="<?= $prod[3] ?>">
                                            <div class="CenterItemHere">
                                                <h1><?= $prod[1]?></h1>
                                                <p><?= $prod[4]?></p>                   
                                            </div>
                                            
                                            <div class="butomTtemsHere">
                                                <a href="#" class="More" id="<?php echo($prod[0])?>">Подробнее</a>
                                                    <div class="btnCartAndPrice">
                                                        <div class="btn_Cart">                                           
                                                            <a href="#">В корзину</a>
                                                        </div>
                                                        <div style="width:50px ;"></div>
                                                        <p><?= $prod[2]?> BYN</p>
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
                            $products = mysqli_query($mysqli, "SELECT Product.ID, Images.Path_img, Product.Name, Product.Price, Description.Small_desc FROM `Images`, `Product`, `Description` WHERE Product.ID_img = Images.ID AND Product.ID_desc = Description.ID;");
                            $products = mysqli_fetch_all($products);
                            foreach($products as $prod)
                            {
                        ?>       
                        <div class="SliderWithItems">
                            
                            <div class="ItemsSleder">
                                    <img class="PhotoForItemsSlider" src="<?= $prod[1]?>">
                                    <div class="CenterItemHere">
                                        <h1><?= $prod[2]?></h1>
                                        <p><?= $prod[4]?></p>
                                    </div>
                                    
                                    <div class="butomTtemsHere">
                                        <a href="#" class="More" id="<?php echo($prod[0])?>">Подробнее</a>
                                            <div class="btnCartAndPrice">
                                                <div class="btn_Cart">
                                                    <a href="#">В корзину</a>
                                                </div>
                                                <div style="width:50px ;"></div>
                                                <p><?= $prod[3]?> BYN</p>
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
                        <div class="itemsRight" id="theBestEmp">
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
                                <li><a id="vacancy" href="#">Вакансии</a></li>
                                <li><a href="#theBestEmp">Члены команды</a></li>
                                <li><a id="collaborate" href="#">Сотрудничать</a></li>
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

                                <a href="https://www.facebook.com/">
                                    <div id="socialAll" class="socialFacebook">
                                        <img src=".\img\Icons\FaceBook.png">
                                    </div>
                                </a>
                                <a href="https://vk.com/im?sel=180625941">
                                    <div id="socialAll" class="socialVk">
                                        <img src=".\img\Icons\vk.png">
                                    </div>
                                </a>
                                <a href="https://ok.ru/">
                                    <div id="socialAll" class="socialOk">
                                        <img src=".\img\Icons\ok.png">
                                    </div>
                                </a>
                                <a href="https://www.instagram.com/">
                                    <div id="socialAll" class="socialInstagram">
                                        <img src=".\img\Icons\insta.png">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="BotFoot">
                    <div class="line-footer"></div>
                    

                    <div class="underLine">
                        <p>
                         Caketoria - это полис с ограниченными льготами; он не заменяет медицинскую страховку. Информация, представленная на этом веб-сайте, носит исключительно иллюстративный характер. Полное описание льгот, ограничений и исключений приведено в вашем страховом свидетельстве и соответствующих инструкциях. Краткое описание ограничений и исключений смотрите в нашем разделе часто задаваемых вопросов. Перечисленные значения выплат не гарантируют сумму, подлежащую выплате при перечисленных условиях. Продукт доступен не во всех штатах. Все страховые покрытия подпадают под действие положений и условий политики master group.
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
                            <p>+375 (29) 233-22-33 <span class="life">(Life)</span></p>
                            <p>+375 (29) 121-52-73 <span class="MTC">(MTC)</span></p>
                            <p>+375 (33) 333-22-11 <span class="A1">(A1)</span></p>   
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
                    <form method="post" action="php/check.php" class="register">
                        <div class="fs">
                            <input type="text" class="FirstNameInput" name="name" placeholder="Имя"
                            required oninvalid="setCustomValidity('Введите имя')" 
                            oninput="setCustomValidity('')">
                            <input type="text" class="SurnameNameInput" name="surname" placeholder="Фамилия"
                            required oninvalid="setCustomValidity('Введите фамилию')" 
                            oninput="setCustomValidity('')">
                        </div>
                        <div class="email">
                            <input type="email" class="email-Input" name="email" placeholder="Эл. почта" 
                            required oninvalid="setCustomValidity('Вводимая строка должна содержать знак \'@\' и точку резделителя домена. ')" 
                            oninput="setCustomValidity('')" pattern="^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$">
                        </div>
                        <div class="phone">
                            <input type="phone" class="phone-input" name="phone" 
                            required oninvalid="setCustomValidity('Номер телефона должен быть с кодом страны и без пробелов: +375112223344 ')" 
                            oninput="setCustomValidity('')" pattern="^(\+375|80)(29|25|44|33)(\d{3})(\d{2})(\d{2})$" 
                            placeholder="Номер телефона">
                        </div>
                        <div class="passwords">
                            <input  type="password" class="password-input" name="pass" 
                            required pattern="^(?=.*\d)\w{3,20}$" oninvalid="setCustomValidity('Пароль от 3 до 20 символов. Должен содержать латиницу + цифры (минимум 1 цифру)')"
                            oninput="setCustomValidity('')" placeholder="Пароль" >
                        </div>
                        <div class="btnReg">
                            <div class="btn-reg" class="qwe">
                                <button type="submit" class="Registration">Регистрация</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>      
        </div>
    </div>

    <div class="popup-bg-log">
        <div class="popup-log">
            <img src="img\window\ClosePopup.png" alt="icon" class="closePopup-log">
            <div class="title-poput">
                <div class="centerTitlePop">
                    <h1>Вход</h1>
                </div>         
                <div class="main-title-log">
                    <div class="log">
                        <div class="itemCenterLog">
                            <div class="items">
                                <input type="text" class="numberPhoneLog" name="LoginPhone" placeholder="Номер телефона"></br>
                                <input type="text" class="passLog" name="LoginPass" placeholder="Пароль">
                            </div>
                            <div class="underInput">
                                <div class="lble">
                                    <input id="Remember" type="checkbox" checked>
                                    <p>Запомнить пароль</p>
                                </div>                             
                                <p class="Forgot">Забыли пароль?</p>
                            </div>
                            <div class="btnForLog">
                                <a href="#" class="loginForm">Войти</a>
                            </div>
                        </div>          
                    </div>
                </div>
            </div>      
        </div>
    </div>

    <div class="popup-bg-info">
        <div class="popup-info">
            <img src="img\window\ClosePopup.png" alt="icon" class="closePopup-info">
            <div class="title-poput">
                <div class="centerTitlePop">
                    <h1>Подробнее о товаре</h1>
                </div>         
                <div class="main-title-log">
                    <div class="log">
                        <div class="infoAboutDesc">
                            <p id="a1"></p>
                        </div>    
                    </div>
                </div>
            </div>      
        </div>
    </div>

    <div class="popup-bg-plsReg">
        <div class="popup-plsReg">
            <img src="img\window\ClosePopup.png" alt="icon" class="closePopup-plsReg">
            <div class="title-poput">   
                <div class="messageForSig">
                    <h1>Пожалуйста <span class="LogIn_message"><a href="#">войдите</a></span> или <span class="Registration_message"><a href="#">зарегистрируйте</a></span> аккаунт</h1>
                </div>    
            </div>      
        </div>
    </div>

    <div class="popup-bg-Mailing">
        <div class="popup-Mailing">
            <div class="title-poput">   
                <div class="messageForSig">
                    <h1>Спасибо, вы узнаете о скидках и новых тортах первыми</h1>
                </div>    
            </div>      
        </div>
    </div>


    <div class="popup-bg-vacancy">
        <div class="popup-vacancy">
        <img src="img\window\ClosePopup.png" alt="icon" class="closePopup-vacancy">
            <div class="centerTitlePop">
                <h1>Вакансии</h1>
            </div>
            <div class="title-vacancy">
                <?php 
                    $inform = mysqli_query($mysqli, "SELECT Vacancy.vacancy, Vacancy.post, Vacancy.desc_vacancy FROM `Vacancy`;"); 

                    $inform = mysqli_fetch_all($inform);
                ?> 
                <?php if(empty($inform)): ?>
                    <div class="centerEmpty">
                        <div class="empty"><p>Пусто</p></div>
                    </div>
                <?php else: ?>
                <div class="titleScroll">
                    
                    <div class="scrollItems">
                        <?php foreach($inform as $item): ?>
                            <div class="vacancyItems">
                                <p><?php echo $item[0] ?></p>
                            </div>
                            
                        <?php endforeach; ?>
                    </div>
                </div>    
                <?php endif; ?>      
            </div>
        </div>
    </div>


    <div class="popup-bg-infoForVacancy">
        <div class="popup-infoForVacancy">
            <img src="img\window\ClosePopup.png" alt="icon" class="closePopup-infoForVacancy">
            <div class="title-poput">
                <div class="centerTitlePop">
                    <h1>Подробнее о вакансии</h1>  
                </div> 
                
                <div class="info-forVacancy">
                    <div class="titleItems">
                        <div class="header-info-vacancy">
                            <h1 class="title-for-info-vacancy">Вакансия</h1>
                            <h2 class="vacancy-vacancy" id="about-vacancy"></h2>
                        </div>

                        <div class="middle-info-vacancy">
                            <h1 class="title-for-info-vacancy">Должность</h1>
                            <h2 class="vacancy-post" id="about-vacancy"></h2>
                        </div>
                    </div>
                    
                    
                    <div class="footer-desc-info-vacancy">
                        <h1 class="title-for-info-vacancy">Описание</h1>
                        <div class="scrollAbountVacancy"></div>
                    </div>

                    <div class="footer-btn-info-vacancy">
                        <button type="submit" id="btn-respond" class="loginForm">Откликнуться</button>
                    </div>
                </div>
            </div>      
        </div>
    </div>


    <div class="popup-bg-respond-btn">
        <div class="popup-respond-btn">
            <img src="img\window\ClosePopup.png" alt="icon" class="closePopup-respond-btn">
            <div class="title-poput">   
                <div class="messageForSig">
                    <h1>Все вопросы по номеру</h1>
                    <div class="phoneNumberForRespond">
                        <h2>+375 (29) 222-32-23</h2>
                    </div>
                </div>    
            </div>      
        </div>
    </div>

    <div class="popup-bg-collaborations">
        <div class="popup-collaborations">
            <img src="img\window\ClosePopup.png" alt="icon" class="closePopup-collaborations">
            <div class="title-poput">   
                <div class="messageForSig">
                    <h1>Пишите нам на наш почтовый ящик с вашими предложениями </h1>
                    <div class="phoneNumberForRespond">
                        <h2>CaketoriaCoop@gmail.com</h2>
                    </div>
                </div>    
            </div>      
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="/js/remember.js"></script>
    <script src="/js/slider.js"></script>
    <script src="/js/sliderTwo.js"></script>
    <script src="/js/SmoothScrolling.js"></script>
    <script src="/js/Show.js"></script>
    <script src="/js/ShowTwo.js"></script>
    <script src="/js/popupContact.js"></script>  
    <script src="/js/spam.js"></script>
    <script src="/js/vacancy.js"></script>
    <script src="/js/login.js"></script>

</body>
</html>
