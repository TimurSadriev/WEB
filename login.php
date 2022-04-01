<?php
if(!isset($_SESSION))session_start();
require 'script/connectBD.php';
include 'script/loginCheckScript.php';
?>
<html>
<head>
    <title>Авторизация</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image" href="https://images.pexels.com/photos/11358782/pexels-photo-11358782.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
</head>
<body style=background-color:Bisque>

<nav class="cl-effect-13">
    <a class="button" href="index.php">Главная</a>
    <a class="button" href="catalog.html">Каталог</a>
    <a class="button" href="#">Корзина покупок</a>
    <a class="button" href="#">Оставить отзыв</a>
    <a class="button" href="login.php">Вход</a>
</nav>

<h1 class="hello">Авторизация</h1>
<?if ($_SESSION['userId']==-1){?>
<div class="entry">
    <form action="">
        Логин: <input type="text" name="login" value=""><br>
        Пароль: <input type="password" name="password" value=""><br>
        <input type="submit" value="Войти">
    </form>
</div>
<?if(isset($_REQUEST['login']) && isset($_REQUEST['password'])){
    check($_REQUEST['login'],$_REQUEST['password']);
    }
}else{?>
    <div class="entry">
    <form action="<?if(isset($_REQUEST['exit']))$_SESSION['userId']=-1?>">
        <input type="hidden" name="exit" value=""><br>
        <input type="submit" value="Выйти">
    </form>
    </div>
<?}?>
</body>
</html>