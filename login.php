
<html>
<head>
    <title>Авторизация</title>
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
    <a class="button" href="index.php">Главная</a>
    <a class="button" href="login.php">Вход</a>
</nav>

<h1 class="hello">Авторизация</h1>
<div>
    <form action="">
        Логин: <input type="text" name="login" value=""><br>
        Пароль: <input type="password" name="password" value=""><br>
        <input type="submit" value="Войти">
    </form>
</div>
<? include 'loginCheckScript.php';
$users=[0=>['login','password']];
$users[0]['login']=maxim;
$users[0]['password']=123;
$users[1]['login']=timur;
$users[1]['password']=123;

check($_REQUEST['login'],$_REQUEST['password'],$users);
?>
</body>
</html>