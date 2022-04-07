<?php
if(!isset($_SESSION))session_start();
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
    <a class="button" href="#">Корзина покупок</a>
    <a class="button" href="#">Оставить отзыв</a>
    <a class="button" href="weAre.php">О нас</a>
    <? if($_SESSION["userId"]==-1){?>
    <a class="button" href="login.php">Вход</a>
    <?}else{?>
    <a class="button" href="PersonalArea.php">Личный кабинет</a>
    <?}?>
</nav>

<h1 class="hello">Здесь будет каталог</h1>
<h2 class="catreview">На нашем сайте представлена одежда для мужчин и женщин, разделенная по сезонам. Вся одежда представлена в данном каталоге.</h2>
<h3>Мужская одежда.</h3>
<h4>Сезон: зима.</h4>

<section class="content">

    <div class="card">
        <img class="card-image" src="https://ae04.alicdn.com/kf/Hd19c81a85eb7488582df6cee5ac90018v.jpg">
        <h3 class="card-title">Мужской пуховик</h3>
        <p class="card-text">Пуховик легкий, стильный, теплый, удобный. Подходит для людей с любым телосложением. Капюшон можно использовать вместо головного убора, а в сильные холода - в качестве дополнительной защиты. Манжеты в рукавах изготовлены с использованием специальных ветрозащитных нитей, которые предотвращают попадание ветра и снега и обеспечивают максимальную защиту ваших рук. Материал верха выполнен из прочной водоотталкивающей ткани. Материал утеплителя - синтепух.</p>
        <button name="buy1" value="Buy1" class="button-cat">Купить</button>
    </div>
    <div class="card">
        <img class="card-image" src="https://ronixsport.ru/pictures/product/middle/9785_middle.jpg">
        <h3 class="card-title">Мужские утепленные брюки</h3>
        <p class="card-text">Очень удобные и теплые зимние брюки на подкладке из флиса. Основная плащевая ткань с водоотталкивающей пропиткой изнутри. Плотность утеплителя флис 180 г/кв.м. Мягкий пояс на эластичной ленте, ширина пояса дополнительно регулируется с помощью шнурка. Карманы все на молнии, два впереди и один сзади. Для наилучшей регуляции температуры тела брюки надеваются на базовый слой одежды (термобелье) и максимально защищают тело от ветра, холода и влаги.</p>
        <button name="buy2" value="Buy2" class="button-cat">Купить</button>
    </div>
    <div class="card">
        <img class="card-image" src="https://bistrogift.ru/image/catalog/G/10999.10_2_1000x1000.jpg">
        <h3 class="card-title">Свитер мужской</h3>
        <p class="card-text">Мягкая кашемировая шерсть, идеальные пропорции и зигзагообразный структурный узор превратят пуловер в любимую вещь. Эта классическая модель привлекает не только качественными нитками из смеси альпака, шерсти и акрила двух прекрасно сочетающихся друг с другом цветов - серого и желтого. В этом случае предлагается интересный ход: спинка связана лицевой гладью снизу вверх, тогда как перед и рукава выполнены поперек, начиная с желтых участков. Горловина и рукава отделаны резинкой.</p>
        <button name="buy2" value="Buy2" class="button-cat">Купить</button>
    </div>
    <div class="card">
        <img class="card-image" src="https://g-strela.s3.eu-central-1.amazonaws.com/public/products/fcb8b3f3-050a-11e8-9432-00155d640301/photo/fcb8b3f3-050a-11e8-9432-00155d640301.jpg">
        <h3 class="card-title">Мужская флисовая кофта</h3>
        <p class="card-text"> </p>
        <button name="buy2" value="Buy2" class="button-cat">Купить</button>
    </div>
    <div class="card">
        <img class="card-image" src="https://agatvspb.ru/upload/iblock/fef/1r1a0pen6rkh5dvs1c7dmrypt2bqlcfd/3d339c96_3ed1_11eb_b940_40ec99a99353_3d339c97_3ed1_11eb_b940_40ec99a99353.jpg">
        <h3 class="card-title">Шапка мужская зимняя</h3>
        <p class="card-text"> </p>
        <button name="buy2" value="Buy2" class="button-cat">Купить</button>
    </div>
</section>

</body>
</html>