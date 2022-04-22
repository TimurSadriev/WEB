<?php
if(!isset($_SESSION))session_start();
require 'script/connectBD.php';
?>
<html>
<head>
    <title>Личный кабинет</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image" href="https://images.pexels.com/photos/11358782/pexels-photo-11358782.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
</head>
<body style=background-color:Bisque>

<nav class="cl-effect-13">
    <a class="button" href="index.php">Главная</a>
    <a class="button" href="catalog.php">Каталог</a>
    <a class="button" href="basket.php">Корзина покупок</a>
    <a class="button" href="weAre.php">Адрес и контакты</a>
</nav>
<h1 class="hello">Профиль</h1>
<div class="hello">
<?
$info=getArray('SELECT * FROM users WHERE id='.$_SESSION['userId']);
echo "Пользователь ".$info[0]['login']."<br>".
    "Email: ".$info[0]['email']."<br>".
    "Статус: ".$info[0]['status'];
?>
</div class="hello">
<div>
    <p style="background-color: #C05805;color: wheat;font-size: 40px">Мои заказы</p>
    <?
    $orders=getArray('SELECT name,status,url FROM orders INNER JOIN products WHERE clientId='.$_SESSION['userId'].' AND productId=id');
    foreach ($orders as $k=>$v){
    ?>
    <div class="card" style="width: 200px;height: 400px">
        <img class="card-image" src="<?=$v['url']?>">
        <h3 class="card-title"><?=$v['name']?></h3>
        <p class="card-text" style="font-size: 20px;color: aqua;background-color: black">Статус: <?=$v['status']?></p>
    </div><?}
    ?>
</div>
<div class="entry">
    <form action=" " method="post">
        <input type="submit" class="submit" value="Выйти" name="out">
    </form>
</div>

<?if(isset($_POST['out'])){
    $_SESSION['userId']=-1;
    header("Refresh:0 url=login.php");} ?>
</body>
</html>