<?php
if(!isset($_SESSION))session_start();
require 'productsList.php';
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
    <a class="button" href="catalog.php">Каталог</a>
    <a class="button" href="#">Контакты</a>
    <a class="button" href="#">Оставить отзыв</a>
    <a class="button" href="weAre.php">О нас</a>
    <? if($_SESSION["userId"]==-1){?>
        <a class="button" href="login.php">Вход</a>
    <?}else{?>
        <a class="button" href="PersonalArea.php">Личный кабинет</a>
    <?}?>
</nav>
<h1 class="hello">Товары в корзине</h1>
<section class="content">
<?for($i=0;$i<count($_SESSION['basket']);$i++){
    $id=substr($_SESSION['basket'][$i],3);
    var_dump($id);
    ?>
    <div class="card">
        <img class="card-image" src="<?=$products[$id-1]['url']?>">
        <h3 class="card-title"><?=$products[$id-1]['name']?></h3>
        <p class="card-text"><?=$products[$id-1]['desc']?></p>
    </div>
<?}?>
</section>
</body>
</html>