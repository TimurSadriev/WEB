<?php
if(!isset($_SESSION))session_start();
require 'script/connectBD.php';
function createForm($productArray){
     for($i=0;$i<count($productArray);$i++){?>
    <div class="card">
        <img class="card-image" src="<?=$productArray[$i]['url']?>">
        <h3 class="card-title"><?=$productArray[$i]['name']?></h3>
        <p class="card-text"><?=$productArray[$i]['price']?></p>
        <form action="<?
        if(isset($_REQUEST['buy'])){
            setcookie('openProductId',$_REQUEST['buy']);
            header("Refresh:0 url=productInfo.php");
        }?>">
        <button  name="buy" value="<?=$productArray[$i]['id']?>" class="button-cat">Подробнее</button>
        </form>
    </div>
    <?}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <title>Сайт Тимура и Максима</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image" href="https://images.pexels.com/photos/11358782/pexels-photo-11358782.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
</head>
<body style=background-color:Bisque>

<nav class="cl-effect-13">
    <a class="button" href="index.php">Главная</a>
    <a class="button" href="basket.php">Корзина покупок</a>
    <a class="button" href="#">Оставить отзыв</a>
    <a class="button" href="weAre.php">О нас</a>
    <? if($_SESSION["userId"]==-1){?>
    <a class="button" href="login.php">Вход</a>
    <?}else{?>
    <a class="button" href="PersonalArea.php">Личный кабинет</a>
    <?}?>
</nav>

<h1 class="hello">Каталог одежды</h1>
<h2 class="catreview">На нашем сайте представлена одежда для мужчин и женщин, разделенная по сезонам. Вся одежда представлена в данном каталоге.</h2>
<h3 style="font-size: 25px; text-align: center; text-transform: uppercase; color: black">Мужская одежда.</h3>
<h4 style="font-size: 25px; text-align: center; text-transform: uppercase; color: black">Сезон: зима/осень.</h4>
<section class="content">
    <?
    $spisok=getArray('SELECT id,name,url,price FROM products WHERE LEFT(id,1)=0');
    createForm($spisok);
    ?>
</section>
<h4 style="font-size: 25px; text-align: center; text-transform: uppercase; color: black">Сезон: лето/весна.</h4>
<section class="content">
    <?
    $spisok=getArray('SELECT id,name,url,price FROM products WHERE LEFT(id,1)=1');
    createForm($spisok)?>
</section>

<h3 style="font-size: 25px; text-align: center; text-transform: uppercase; color: black">Женская одежда.</h3>
<h4 style="font-size: 25px; text-align: center; text-transform: uppercase; color: black">Сезон: зима/осень.</h4>
<section class="content">
    <?
    $spisok=getArray('SELECT id,name,url,price FROM products WHERE LEFT(id,1)=2');
    createForm($spisok)?>
</section>
<h4 style="font-size: 25px; text-align: center; text-transform: uppercase; color: black">Сезон: весна/лето.</h4>
<section class="content">
    <?
    $spisok=getArray('SELECT id,name,url,price FROM products WHERE LEFT(id,1)=3');
    createForm($spisok)?>
</section>
</body>
</html>
