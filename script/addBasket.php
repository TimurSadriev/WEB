<?
function add(){if (isset($_REQUEST['basket'])) {
$fl = false;
foreach ($_SESSION['basket'] as $i) {
if ($_REQUEST['basket'] == $i){
$fl = true;
}
}
if ($fl == false) {
($_SESSION['basket'])[] = $_REQUEST['basket'];
echo "<script> alert('Товар добавлен в корзину');</script>";
}else "<script> alert('Товар уже добавлен');</script>";
header("Refresh:0 url=catalog.php");
}
};