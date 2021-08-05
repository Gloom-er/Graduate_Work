<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_usl.css" type="text/css">
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
                    <div class="nav-item"><a href="warehouses.php" class="nav-item-link"><span><i class="fas fa-warehouse"></i>Склад</span></a></div>
                    <div class="nav-item"><a href="request_phis.php" class="nav-item-link"><span><i class="fas fa-scroll"></i>Заявки</span></a></div>
                    <div class="nav-item"><a href="zp.php" class="nav-item-link"><span><i class="fas fa-coins"></i>Финансы</span></a></div>
                    <div class="nav-item"><a href="supervisor.php" class="nav-item-link"><span><i class="fas fa-user-tie"></i>Персонал</a></span></div>
                    <div class="nav-item active"><a href="trucking.php" class="nav-item-link"><span><i class="fas fa-cogs"></i>Услуги</a></span></div>
                    <div class="nav-item"><a href="nomenclature.php" class="nav-item-link"><span><i class="fas fa-paste"></i>Документация</a></span></div>
                    <div class="nav-item"><a href="sclad_oborud.php" class="nav-item-link"><span><i class="fas fa-plug"></i>Оборудование</a></span></div>
                </div>
                <div class="nav-items">
                    <div class="nav-number">
                        <span><i class="fas fa-phone"></i>+7 (495) 660-11-11</span>
                    </div>
                    <div class="nav-login">
                        <a href=""class="nav-item-link"><span><i class="fas fa-user"></i><?php
$link = mysqli_connect('localhost','root','','pec');
$query="SELECT * FROM auth WHERE login>=0";
$result=mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
$result='';
foreach($data as $elem){
    $result.=$elem['login'];
}
echo $result;
?></span></a>
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
            <h1 class ="top">Услуги</h1>
            <div class="layout-side">
                <div class="sidebar">
                        <a href="trucking.php"><span class="main-span ">Автоперевозка</span></a>
                            <a href="avia.php"><span class="main-span ">Авиаперевозка</span></a>
                            <a href="delivery.php"><span class="main-span ">Доп. услуги</span></a>
                            <a href="delivery.php"><span class="second-span active">Забор и доставка груза</span><br></a>
                            <a href="loading.php"><span class="second-span">Погрузочно-разгрузочные работы</span><br></a>
                            <a href="packaging.php"><span class="second-span">Упаковка</span><br></a>


                    </div>

                <div class="workspace">
                <div class=high-add>
                        <form method="POST">
                        <input class ="add" name="add" placeholder="Заказчик">
                        <input class ="add" name="add3" placeholder="Транспорт">
                        <input class ="add" name="add1" placeholder="Адрес отправления">
                        <input class ="add" name="add2" placeholder="Адрес доставки">
                        <input type="submit" class="button" value="Добавить">
                        </form>

                    </div>
                    <hr class="hrwork">
                    <div class="lowspace">
                    <table>              
        <tr>
        <th>ID</th>
            <th>Заказчик</th>
            <th>Транспорт</th>
            <th>Адрес отправления</th>
            <th>Адрес доставки</th>
        </tr> 
    <?php
error_reporting(E_ALL);
$link = mysqli_connect('localhost','root','', 'pec');
if(!empty($_POST)){ 
    $name=$_POST['add'];
    $summa=$_POST['add1'];
    $adres=$_POST['add2'];
    $adres2=$_POST['add3'];
$query="INSERT INTO delivery SET name='$name',summa='$summa', adresot='$adres', adresdost='$adres2'";
mysqli_query($link, $query) or die(mysqli_error($link));
}
if(isset($_GET['del'])){
    $del=$_GET['del'];
    $query="DELETE FROM delivery where id=$del";
    mysqli_query($link, $query) or die(mysqli_error($link));
    }
    $query="SELECT * FROM delivery WHERE id > 0";
    $result=mysqli_query($link,$query) or die(mysqli_error($link));
    for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
    $result='';
    foreach($data as $elem){
        $result.='<tr>';
        $result.='<td>'.$elem['id'].'</td>';
        $result.='<td>'.$elem['name'].'</td>';
        $result.='<td>'.$elem['summa'].'</td>';
        $result.='<td>'.$elem['adresot'].'</td>';
        $result.='<td>'.$elem['adresdost'].'</td>';
        $result.='<td>'.'<a href="?del='.$elem['id'].'"><button type=button>Удалить</button></a></td>';
        $result.='</tr>';
    }
    echo $result;
?>
    </table>
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