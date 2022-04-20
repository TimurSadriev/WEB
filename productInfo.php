<?php
if(!isset($_SESSION))session_start();
require 'script/connectBD.php';
?>
<html>
<head>
    <title>Информация о товаре</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image" href="https://images.pexels.com/photos/11358782/pexels-photo-11358782.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
</head>
<body style=background-color:Bisque>

<nav class="cl-effect-13">
    <a class="button" href="catalog.php">Каталог</a>
    <a class="button" href="basket.php">Корзина покупок</a>
    <a class="button" href="#">Контакты</a>
    <a class="button" href="#">Оставить отзыв</a>
    <a class="button" href="weAre.php">О нас</a>
    <? if($_SESSION["userId"]==-1){?>
        <a class="button" href="login.php">Вход</a>
    <?}else{?>
        <a class="button" href="PersonalArea.php">Личный кабинет</a>
    <?}?>
</nav>
<?
$product=getArray('SELECT * FROM products WHERE id='.$_COOKIE['openProductId'])[0];
?>
<h1 class="hello">Выбранный товар</h1>
    <div class="card" style="width: 550px;border-radius: 30px;display: inline-block">
        <img class="card-image" s src="<?=$product['url']?>">
    </div>
<div style="display: inline-grid;width: 400px;background-color: coral;opacity: 0.5">
    <h3 style="margin-top: 10px"><?=$product['name']?></h3>
    <p ><?=$product['description']?></p>
    <p ><?=$product['price']?></p>
    <p ><?=$product['count']?></p>
</div>
<form action="">
    <button  name="basket" value="<?=$_COOKIE['openProductId']?>" class="button-cat">Добавить в корзину</button>
</form>
</body>
</html>