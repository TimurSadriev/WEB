<?php
if(!isset($_SESSION))session_start();
require 'script/connectBD.php';
require 'script/addBasket.php';
add();
?>
<html>
<head>
    <title>Информация о товаре</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image" href="https://images.pexels.com/photos/11358782/pexels-photo-11358782.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
</head>
<body style=background-color:Bisque; >

<nav class="cl-effect-13">
    <a class="button" href="catalog.php">Каталог</a>
    <a class="button" href="basket.php">Корзина покупок</a>
    <a class="button" href="weAre.php">Адрес и контакты</a>
    <? if($_SESSION["userId"]==-1){?>
        <a class="button" href="login.php">Авторизация</a>
    <?}else{?>
        <a class="button" href="PersonalArea.php">Личный кабинет</a>
    <?}?>
</nav>
<?
$product=getArray('SELECT * FROM products WHERE id='.$_COOKIE['openProductId'])[0];
?>
<h1 class="hello">Выбранный товар</h1>
    <div class="card" style="width: 550px; margin-top: 30px; border-radius: 30px">
        <img class="card-image" s src="<?=$product['url']?>">
    </div>
<div class="infprod" style="">
    <h3 style="margin-top: 10px; text-align: center"><?=$product['name']?></h3>
    <p style="margin-top: 50px; font-size: 17px; text-align: justify"><?=$product['description']?></p>
    <p style="margin-top:100px; font-size: 20px; font-style: italic; font-weight: bolder; text-align: center">Цена: <?=$product['price']?></p>
    <p style="margin-top:0px;font-size: 20px; font-style: italic; font-weight: bolder; text-align: center">Количество: <?=$product['count']?></p>
    <form action="">
        <button class="button-basket" name="basket" value="<?=$_COOKIE['openProductId']?>">Добавить в корзину</button>
    </form>
</div>
</body>
</html>