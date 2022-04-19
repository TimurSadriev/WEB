<?
function add(){if (isset($_REQUEST['buy'])) {
$fl = false;
foreach ($_SESSION['basket'] as $i) {
if ($_REQUEST['buy'] == $i){
$fl = true;
}
}
if ($fl == false) {
($_SESSION['basket'])[] = $_REQUEST['buy'];
echo "<script> alert('Товар добавлен в корзину');</script>";
}
unset($_REQUEST['buy']);
header("Refresh:0 url=catalog.php");
}
};