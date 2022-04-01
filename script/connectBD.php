<?php
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных
$_SESSION["link"] = mysqli_connect($host, $user, $password, $db_name);
mysqli_query($_SESSION["link"], "SET NAMES 'utf8'");

//удобная функция для получения ассоциативного массива из запроса
function getArray($query){
    $result = mysqli_query($_SESSION["link"], $query) or die(mysqli_error($_SESSION["link"]));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    return $data;
}