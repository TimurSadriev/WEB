<?php
if(!isset($_SESSION))session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Информация о нас</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image" href="https://images.pexels.com/photos/11358782/pexels-photo-11358782.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
</head>
<body style=background-color:Bisque>

<nav class="cl-effect-13">
    <a class="button" href="index.php">Главная</a>
    <a class="button" href="catalog.php">Каталог</a>
    <a class="button" href="basket.php">Корзина покупок</a>
    <a class="button" href="#">Контакты</a>
    <? if($_SESSION["userId"]==-1){?>
    <a class="button" href="login.php">Вход</a>
    <?}else{?>
    <a class="button" href="PersonalArea.php">Личный кабинет</a>
    <?}?>
</nav>

<h1 class="hello">Отзывы</h1>

</body>
</html>