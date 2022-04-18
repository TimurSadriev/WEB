<?php
if(!isset($_SESSION))session_start();
require 'productsList.php';
//unset($_SESSION['basket']); //Очистить корзину
require 'script/addBasket.php';
function createForm($productArray,$id){
     for($i=0;$i<count($productArray);$i++){?>
    <div class="card">
        <img class="card-image" src="<?=$productArray[$i]['url']?>">
        <h3 class="card-title"><?=$productArray[$i]['name']?></h3>
        <p class="card-text"><?=$productArray[$i]['desc']?></p>
        <form action="">
        <button  name="buy" value="<?=$id.($i+1)?>" class="button-cat">Купить</button>
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
<h3>Мужская одежда.</h3>
<h4>Сезон: зима/осень.</h4>
<section class="content">
    <? createForm($products,"Buy")?>
</section>
<h4>Сезон: лето/весна.</h4>
<section class="content">
    <? createForm($products2,"Buy")?>
</section>

<h3>Женская одежда.</h3>
<h4>Сезон: зима/осень.</h4>
<section class="content">
    <? createForm($products3,"Buy")?>
</section>
<h4>Сезон: весна/лето.</h4>
<section class="content">
    <? createForm($products4,"Buy")?>
</section>
</body>
</html>
