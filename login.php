
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

$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных

//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect($host, $user, $password, $db_name);

//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
mysqli_query($link, "SET NAMES 'utf8'");

//Формируем тестовый запрос:
$query = "SELECT login,pass FROM users";

//Делаем запрос к БД, результат запроса пишем в $result:
$result = mysqli_query($link, $query) or die(mysqli_error($link));

//Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
$k=0;

foreach ($data  as $i) {
    $users[k]['login']=$i['login'];
    $users[k]['password']=$i['pass'];
    echo $users[k]['login']." ". $users[k]['password']."<br>";
    $k++;
}

check($_REQUEST['login'],$_REQUEST['password'],$users);

?>
</body>
</html>