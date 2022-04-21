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
    <a class="button" href="review.php">Оставить отзыв</a>
    <? if($_SESSION["userId"]==-1){?>
    <a class="button" href="login.php">Вход</a>
    <?}else{?>
    <a class="button" href="PersonalArea.php">Личный кабинет</a>
    <?}?>
</nav>

<h1 class="hello">Здесь будет мы</h1>
<div style="margin-top: 10px;display: inline-flex">
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1150.302008392318!2d56.04528700510998!3d54.78692738947977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43d93829b17d8a35%3A0xa1f3d98d0a7ef4!2z0YPQuy4g0JTQsNGD0YLQsCDQrtC70YLRi9GPLCA5LCDQo9GE0LAsINCg0LXRgdC_LiDQkdCw0YjQutC-0YDRgtC-0YHRgtCw0L0sIDQ1MDEwNA!5e0!3m2!1sru!2sru!4v1648567557128!5m2!1sru!2sru" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
</iframe>
</div>
<div class="ourInfo">
<td width="580" height="320" >
    <table border="0"  cellpadding="3" cellspacing="0">
        <tr><td >
            <h1>Наши контакты</h1>
            <p>Пишите нам по адресу:
            <address>timursadriev13@mail.ru</address>
            </p>
        </td></tr>
    </table>
</td>
</div>
</div>
</body>
</html>