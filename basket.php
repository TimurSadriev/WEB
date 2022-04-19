<?php
if(!isset($_SESSION))session_start();
require 'productsList.php';
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
<?foreach($_SESSION['basket'] as $i){
    $id=substr($i,1);
    $vid=substr($i,0,1);
    ?>
    <div class="card">
        <img class="card-image" src="<?=$products[$vid][$id-1]['url']?>">
        <h3 class="card-title"><?=$products[$vid][$id-1]['name']?></h3>
        <p class="card-text"><?=$products[$vid][$id-1]['desc']?></p>
        <form action="">
        <button class="button-cat" name="delete" value="<?=$i?>">Убрать из корзины</button>
        </form>
    </div>
<?}
?>
</section>
</body>
</html>