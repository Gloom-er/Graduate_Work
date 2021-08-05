<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_main.css" type="text/css">
    <script src="https://kit.fontawesome.com/58128bbb38.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <header class="header">
    <nav id="navigation" class="nav">
        <div class="nav-main">
            <div class="container">
                <a href="" class="logo"> 
                    <div class = "logopec">
                        <img src="img/test.png">
                    </div>
                </a>
                <div class ="nav-list">
                <div class="nav-item "><a href="autotransport.php" class="nav-item-link"><span><i class="fas fa-car"></i>Транспорт</span></a></div>
                    <div class="nav-item "><a href="warehouses.php" class="nav-item-link"><span><i class="fas fa-warehouse"></i>Склад</span></a></div>
                    <div class="nav-item "><a href="request_phis.php" class="nav-item-link"><span><i class="fas fa-scroll"></i>Заявки</span></a></div>
                    <div class="nav-item"><a href="zp.php" class="nav-item-link"><span><i class="fas fa-coins"></i>Финансы</span></a></div>
                    <div class="nav-item "><a href="supervisor.php" class="nav-item-link"><span><i class="fas fa-user-tie"></i>Персонал</a></span></div>
                    <div class="nav-item "><a href="trucking.php" class="nav-item-link"><span><i class="fas fa-cogs"></i>Услуги</a></span></div>
                    <div class="nav-item "><a href="nomenclature.php" class="nav-item-link"><span><i class="fas fa-paste"></i>Документация</a></span></div>
                    <div class="nav-item"><a href="sclad_oborud.php" class="nav-item-link"><span><i class="fas fa-plug"></i>Оборудование</a></span></div>
                </div>
                <div class="nav-items">
                    <div class="nav-number">
                        <span><i class="fas fa-phone"></i>+7 (495) 660-11-11</span>
                    </div>
                    <div class="nav-login">
                        <a href=""class="nav-item-link"><span><i class="fas fa-user"></i>
<?php
$link = mysqli_connect('localhost','root','','pec');
$query="SELECT * FROM auth WHERE login>=0";
$result=mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
$result='';
foreach($data as $elem){
    $result.=$elem['login'];
}
echo $result;
?>
                        </span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-subnav">
            <div class="container_subnav">

                    <div class="nav-item2"><a href="https://pecom.ru" class="nav-item-link" target="_blank" ><span><i class="fas fa-arrow-alt-circle-left" ></i>Основной сайт</span></a></div>
                    <div class="nav-item2"><a href="#zatemnenie" class="nav-item-link"><span><i class="fas fa-calculator" >
                    </i>Калькулятор</span></a>
                    <style>
      #zatemnenie {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        display: none;
        margin-top:100px;
      }
      #okno {
        width: 190px;
        height: 190px;
        padding: 15px;
        border: 2px solid grey;
        border-radius: 10px;
        color: #0000cc;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
        background: #fff;
      }
      #zatemnenie:target {display: block;}
      .close {
        margin-top:-10px;
        display: inline-block;
        border: 1px solid grey;
        color: black;
        padding: 0 12px;
        text-decoration: none;
        background: #f2f2f2;
        font-size: 14pt;
        cursor:pointer;
      }
      .close:hover {background: #e6e6ff;}
    </style>
    <div id="zatemnenie">
      <div id="okno">
        <?php require_once "calc.php" ?><br>
        <a href="#" class="close">Закрыть окно</a>
      </div>
    </div>

                    </div>
                    <div class="nav-item2"><a href="https://yandex.ru/maps/213/moscow/?ll=37.622504%2C55.753215&z=10" target="_blank" class="nav-item-link"><span><i class="fas fa-globe"></i>Карта</span></a></div>
                    <div class="nav-item2"><a href="https://finance.rambler.ru/currencies/" target="_blank" class="nav-item-link"><span><i class="fas fa-ruble-sign" ></i>Курс</span></a></div>

            </div>
        </div>
    </nav>
    </header>
    <div class = "page">
        <div id="page" class="page-wrapper">
            <h1 class ="top">Главная</h1>
            <div class="layout-side">
<!--                 <div class="sidebar">
                    <a class="active" href=""><span>Топливо</span><br></a>
                    <a href=""><span>Машина</span><br></a>
                    <a href=""><span>Водитель</span><br></a>
                    <a href="#about"><span>Ремонт</span><br></a>
                </div> -->
                <div class="workspace">
                    <div class="row-list">
                        <div class="row">
                            <a href="autotransport.php"><span class="main-span">Транспорт</span></a><br>
                                <a href="autotransport.php"><span class="second-span">Автотранспорт</span></a>
                                <a href="aviatransport.php"><span class="second-span">Авиатранспорт</span></a>
                    </div>
                        <div class="row">
                            <a href="warehouses.php"><span class="main-span">Склад</span></a><br>
                                <a href="warehouses.php"><span class="second-span">Склады предприятия</span></a>
                                <a href="warehouses2.php"><span class="second-span">Склады партнеров</span></a>
                        </div>
                        <div class="row">
                            <a href="request_phis.php"><span class="main-span">Заявки</span></a><br>
                                <a href="request_phis.php"><span class="second-span">Физические лица</span></a>
                                <a href="request_ur.php"><span class="second-span">Юридические лица</span></a>
                                <a href="request_gos.php"><span class="second-span">Государственные</span></a>
                    </div>
                    <div class="row">
                        <a href=""><span class="main-span">Финансы</span></a><br>
                            <a href="zp.php"><span class="second-span">Заработная плата</span></a>
                            <a href="income.php"><span class="second-span">Доходы</span></a>
                            <a href="expenses.php"><span class="second-span">Расходы</span></a>
                    </div>
                    <div class="row">
                        <a href="supervisor.php"><span class="main-span">Персонал</span></a><br>
                            <a href="supervisor.php"><span class="second-span">Руководители</span></a>
                            <a href="specialist.php"><span class="second-span">Специалисты</span></a>
                            <a href="employye.php"><span class="second-span">Служащие</span></a>
                    </div>
                    <div class="row">
                        <a href="trucking.php"><span class="main-span">Услуги</span></a><br>
                            <a href="trucking.php"><span class="second-span">Автоперевозка</span></a>
                            <a href="avia.php"><span class="second-span">Авиаперевозка</span></a>
                            <a href="delivery.php"><span class="second-span">Дополнительные услуги</span></a>
                    </div>
                    <div class="row">
                        <a href="nomenclature.php"><span class="main-span">Документация</span></a><br>
                            <a href="nomenclature.php"><span class="second-span">Номенклатура</span></a>
                            <a href="waybill.php"><span class="second-span">Путевые листы</span></a>
                            <a href="order.php"><span class="second-span">Приказы </span></a>
                            <a href="violation.php"><span class="second-span">Нарушения</span></a>
                    </div>
                    <div class="row">
                        <a href="sclad_oborud.php"><span class="main-span">Оборудование</span></a><br>
                            <a href="sclad_oborud.php"><span class="second-span">Складское</span></a>
                            <a href="park_oborud.php"><span class="second-span">Парковое</span></a>
                            <a href="office_oborud.php"><span class="second-span">Офисное</span></a>
                            <a href="other_oborud.php"><span class="second-span">Прочее</span></a>
                    </div>
                    </div>

                    

        </div>
    </div>    

    </div>
</div>
<footer class="footer">


        <div class="high-footer centred-block">
            <a href="https://pecom.ru/about/" target="_blank"><span>О компании</span></a>
            <a href="https://pecom.ru/news/" target="_blank"><span>Новости</span></a>
            <a href="https://pecom.ru/map/" target="_blank"><span>Контакты</span></a>
            <a href="https://pecom.ru/info/" target="_blank"><span>Полезная информация</span></a>
            <span>+7 (495) 322-22-88</span>
        </div>
    <hr class="my-4">
    <div class="pb-4 text-center">
        <a rel="nofollow" href="http://vk.com/pecom" target="_blank">
            <i class="fa fa-vk mr-3"> Вконтакте</i>
        </a>

        <a rel="nofollow" href="https://pecom.ru/services-are/telegram/" target="_blank">
            <i class="fa fa-telegram mr-3"> Telegram</i>
        </a>

        <a rel="nofollow" href="https://www.facebook.com/pecom.ru" target="_blank">
            <i class="fa fa-facebook mr-3"> Facebook</i>
        </a>

        <a rel="nofollow" href="https://wa.me/79165891283" target="_blank">
        <i class="fa     fa-whatsapp"> Whatsapp</i>
        </a>

        <a rel="nofollow" href="https://www.youtube.com/channel/UCkB-vf454lND1P-YzE_Z_PQ" target="_blank">
            <i class="fa fa-youtube mr-3"> Youtube</i>
        </a>

        
    </div>
    <div class="site-footer_bottom centered-block">
            <div class="site-footer_copyright">© 2020 Компания «ПЭК» | Все права защищены и охраняются законом.</div>
        </div>
</footer>

</body>
</html>