<?
if(!isset($_SESSION))session_start();
if(!isset($_SESSION["userId"]))
    $_SESSION["userId"]=-1;//-1 значит что пользователь не вошел
require 'script/connectBD.php'//подключение бд, неоходимо делать на каждой странице где нужна бд сессия почему то не созраняет ссылку
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
<body >
<nav class="cl-effect-13">
    <a class="button" href="catalog.php">Каталог</a>
    <a class="button" href="basket.php">Корзина покупок</a>
    <a class="button" href="#">Контакты</a>
    <a class="button" href="review.php">Оставить отзыв</a>
    <a class="button" href="weAre.php">О нас</a>
    <? if($_SESSION["userId"]==-1){?>
    <a class="button" href="login.php">Вход</a>
    <?}else{?>
    <a class="button" href="PersonalArea.php">Личный кабинет</a>
    <?}?>
</nav>
<?
if($_SESSION["userId"]==-1)
    echo "Авторизируйтесь";
else {
    $row=getArray('SELECT login FROM users WHERE id='.$_SESSION["userId"]);//строчка из таблицы запроса
    echo "Здравствуйте, {$row[0]['login']}";//->строчка 0, столбец логин ,пока без кэша, будет лагать конечно
}
?>
<h1 class="hello"> Интернет-магазин одежды</h1>
<div class="container_slider_css">
    <img class="photo_slider_css" src="https://images.pexels.com/photos/325876/pexels-photo-325876.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
    <img class="photo_slider_css" src="https://images.pexels.com/photos/52518/jeans-pants-blue-shop-52518.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
    <img class="photo_slider_css" src="https://images.pexels.com/photos/298863/pexels-photo-298863.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
    <img class="photo_slider_css" src="https://images.pexels.com/photos/1030946/pexels-photo-1030946.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
    <img class="photo_slider_css" src="https://images.pexels.com/photos/3812433/pexels-photo-3812433.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
</div>
<div class="footer">
    <p style="text-indent: 40px">Соцсети для связи:</p>
    <a href="https://vk.com/liquidstoner"> Садриев Тимур</a>
    <a href="https://vk.com/m.yunyaev"> Юняев Максим</a>
</div>
</body>
</html>
