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
<body>

<nav class="cl-effect-13">
    <a class="button" href="index.php">Главная</a>
    <a class="button" href="catalog.php">Каталог</a>
    <a class="button" href="basket.php">Корзина покупок</a>
    <a class="button" href="#">Оставить отзыв</a>
</nav>

<h1 class="hello">Авторизация</h1>
<div class="entry">
    <form action=" " method="post">
        Логин: <input type="text" name="login" value=""><br>
        Пароль: <input type="password" name="password" value=""><br>
        <input type="submit" class="submit" value="Войти" name="in">
    </form>
</div>
<?if(isset($_REQUEST['login']) && isset($_REQUEST['password']) && isset($_REQUEST['in'])){
    check($_REQUEST['login'],$_REQUEST['password']);}?>
<h1 class="hello">Регистрация</h1>
<div class="entry">
    <form action=" " method="post">
        Ваша почта: <input type="text" name="email" value=""><br>
        Придумайте логин: <input type="text" name="loginR" value=""><br>
        Придумайте пароль: <input type="password" name="passwordR" value=""><br>
        Подтвердите пароль: <input type="password" name="passwordRС" value=""><br>
        <input type="submit" class="submit" value="Зарегистрироваться" name="reg">
    </form>
</div>
<?
 if(isset($_REQUEST['reg'])){
        //mail("timursadriev13@yandex.ru", "Загаловок", "Текст письма \n 1-ая строчка \n 2-ая строчка \n 3-ая строчка");
   addClient($_REQUEST['loginR'],$_REQUEST['passwordR'],$_REQUEST['passwordRС'],$_REQUEST['email']);
 } ?>
</body>
</html>