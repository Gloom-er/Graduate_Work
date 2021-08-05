<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_auth.css" type="text/css">
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
                <div class="nav-item "><a href="" class="nav-item-link"><span><i class="fas fa-car"></i>Транспорт</span></a></div>
                    <div class="nav-item "><a href="" class="nav-item-link"><span><i class="fas fa-warehouse"></i>Склад</span></a></div>
                    <div class="nav-item "><a href="" class="nav-item-link"><span><i class="fas fa-scroll"></i>Заявки</span></a></div>
                    <div class="nav-item"><a href="" class="nav-item-link"><span><i class="fas fa-coins"></i>Финансы</span></a></div>
                    <div class="nav-item "><a href="" class="nav-item-link"><span><i class="fas fa-user-tie"></i>Персонал</a></span></div>
                    <div class="nav-item "><a href="" class="nav-item-link"><span><i class="fas fa-cogs"></i>Услуги</a></span></div>
                    <div class="nav-item "><a href="" class="nav-item-link"><span><i class="fas fa-paste"></i>Документация</a></span></div>
                    <div class="nav-item"><a href="" class="nav-item-link"><span><i class="fas fa-plug"></i>Оборудование</a></span></div>
                </div>
                <div class="nav-items">
                    <div class="nav-number">
                        <span><i class="fas fa-phone"></i>+7 (495) 660-11-11</span>
                    </div>
                    <div class="nav-login">
                        <a href="auth.php"class="nav-item-link"><span><i class="fas fa-user"></i></i>Авторизация</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-subnav">
            <div class="container_subnav">
                <div class="nav-list2">
                <div class="nav-item2"><a href="https://pecom.ru" class="nav-item-link" target="_blank" ><span><i class="fas fa-arrow-alt-circle-left" ></i>Основной сайт</span></a></div>
                </div>
            </div>
        </div>
    </nav>
    </header>
    <div class = "page">
        <div id="page" class="page-wrapper">
        
        <div class="row margin-top-2">
        <div class="col-md-8 col-md-offset-3">

        <form action="" method="post">

            <input id="geoCity" type="hidden" name="geoCity" value="Москва">
            <table class="login-table">
<tr>
                    <td class="login-cell-gray">
                        <h3 class="panel-title"><b>Авторизация</b></h3>
                        <hr class="hr-divider">
                        <div>
                            
                        </div>
                        <div class="input-header">Имя пользователя</div>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" id="Login" name="login" placeholder="Укажите имя пользователя" tabindex="1" type="text" value="">
                                <span class="input-group-addon"><i class="fas fa-users"></i></span>
                            </div>
                        </div>
                         <div class="input-header">Пароль</div>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" id="Password" name="password" tabindex="2" type="password" placeholder ="Укажите пароль">
                                <span class="input-group-addon"><i class="fas fa-lock"></i></span>
                            </div>
                        </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="login-cell-gray">
                        <input type="submit" class="button-login btn btn-lg btn-primary login-button" value="Войти" tabindex="3">
                        <?php
$link = mysqli_connect('localhost','root','','pec');
if(!empty($_POST['login']) and !empty($_POST['password'])){
    $login=$_POST['login'];
    $password=$_POST['password'];
    $query="SELECT * FROM auth WHERE login='$login'AND password='$password'";
    $result=mysqli_query($link,$query);
    $user=mysqli_fetch_assoc($result);
    if(!empty($user)){
        $_SESSION['auth']=true;
        if (!empty($_SESSION['auth'])){
        echo '<script>location.replace("main.php");</script>';exit;}
    }

    else{
        echo "<script>alert('Вы неправильно ввели логин или пароль');</script>";
    }
}
?>
                    </td>
                </tr>
</table>
                </form>
            </div>
        </div>







        
    </div>

            </div>
            <div class="workspace">

        </div>
    </div>    

    </div>
    
<!--     <div class="footer">123sd

    </div> -->
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