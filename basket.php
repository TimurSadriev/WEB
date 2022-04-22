<?php
if(!isset($_SESSION))session_start();
require 'script/connectBD.php';
//unset($_SESSION['basket']); //Очистить корзину
if (isset($_REQUEST['delete'])){
    $key=array_search($_REQUEST['delete']."",$_SESSION['basket']);
    echo "<script> alert('Товар удален');</script>";
    unset($_SESSION['basket'][$key]);
    unset($_REQUEST['delete']);
}
?>
<html>
<head>
    <title>Корзина</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image" href="https://images.pexels.com/photos/11358782/pexels-photo-11358782.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
</head>
<body style=background-color:Bisque>

<nav class="cl-effect-13">
    <a class="button" href="index.php">Главная</a>
    <a class="button" href="catalog.php">Каталог</a>
    <a class="button" href="weAre.php">Адрес и контакты</a>
    <? if($_SESSION["userId"]==-1){?>
        <a class="button" href="login.php">Авторизация</a>
    <?}else{?>
        <a class="button" href="PersonalArea.php">Личный кабинет</a>
    <?}?>
</nav>
<h1 class="hello">Товары в корзине</h1>
<section class="content">
<?foreach($_SESSION['basket'] as $k=>$v){
    $element=getArray('SELECT * FROM products WHERE id='.$v)[0];
    var_dump($element);
    ?>
    <div class="card" style="width: 200px;height: 400px">
        <img class="card-image" src="<?=$element['url']?>">
        <h3 class="card-title"><?=$element['name']?></h3>
        <p class="card-text"><?=$element['price']?> RUB</p>
        <form action="">
        <button class="button-cat" name="delete" value="<?=$v?>">Убрать из корзины</button>
        </form>
    </div>
<?}
?>
</section>
<div class="Oplata">
    <p style="background-color: #C05805;color: wheat;font-size: 40px">Итоговая стоимость:
        <?
        $sum=0;
        if(isset($_SESSION['basket'])){
        foreach($_SESSION['basket'] as $k=>$v){
            $element=getArray('SELECT price FROM products WHERE id='.$v)[0]['price'];
            $sum+=$element;
        }
        }
        echo $sum;
        ?>
        RUB</p>
</div>
<form action="">
    <button class="button-oplata" name="oplata" >Оплатить</button>
</form>
<?
if(isset($_REQUEST['oplata'])){
    if($_SESSION["userId"]==-1){
        echo "<script> alert('Войдите для совершения покупки');</script>";
    }else{
        foreach ($_SESSION['basket'] as $k=>$v){
            $userId=$_SESSION["userId"];
            $query="INSERT INTO orders (clientId,productId,text,status) VALUES ('$userId','$v','sometext','somestat')";
            mysqli_query($_SESSION["link"], $query);
            unset($_SESSION['basket']);
        }
    }
}
?>
</body>
</html>