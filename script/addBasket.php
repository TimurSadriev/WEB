<?
if (isset($_REQUEST['buy'])) {
$fl = false;
for ($i = 0; $i <= count($_SESSION['basket']); $i++) {
if ($_REQUEST['buy'] == ($_SESSION['basket'])[$i]) {
$fl = true;
}
}
if ($fl == false) {
($_SESSION['basket'])[] = $_REQUEST['buy'];
echo "<script> alert('Товар добавлен в корзину');</script>";
}
unset($_REQUEST['buy']);
header("Refresh:0 url=catalog.php");
};