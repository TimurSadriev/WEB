<?
session_start();
if(!isset($_SESSION["userId"]))$_SESSION["userId"]="НИКТО!, авторизируйся бытрса я сказал";
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
    <a class="button" href="catalog.html">Каталог</a>
    <a class="button" href="#">Корзина покупок</a>
    <a class="button" href="#">Контакты</a>
    <a class="button" href="#">Оставить отзыв</a>
    <a class="button" href="weAre.html">О нас</a>
    <a class="button" href="login.php">Вход</a>
</nav>
<?
echo "Здравствуйте, ".$_SESSION["userId"]."<br>";
?>
<h1 class="hello"> Интернет-магазин одежды</h1>
<div class="container_slider_css">
    <img class="photo_slider_css" src="https://images.pexels.com/photos/325876/pexels-photo-325876.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
    <img class="photo_slider_css" src="https://images.pexels.com/photos/52518/jeans-pants-blue-shop-52518.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
    <img class="photo_slider_css" src="https://images.pexels.com/photos/298863/pexels-photo-298863.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
    <img class="photo_slider_css" src="https://images.pexels.com/photos/1030946/pexels-photo-1030946.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
    <img class="photo_slider_css" src="https://images.pexels.com/photos/3812433/pexels-photo-3812433.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
</div>
</body>
</html>