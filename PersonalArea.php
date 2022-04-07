<?php
if(!isset($_SESSION))session_start();
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
    <a class="button" href="#">Корзина покупок</a>
    <a class="button" href="#">Оставить отзыв</a>
</nav>
<h1 class="hello">Профиль</h1>
<div class="entry">
    <form action=" " method="post">
        <input type="submit" value="Выйти" name="out">
    </form>
</div>

<?if(isset($_POST['out'])){
    $_SESSION['userId']=-1;
    header("Refresh:0 url=index.php");} ?>
</body>
</html>