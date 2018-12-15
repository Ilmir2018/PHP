<?php
//Для отображения общего числа товаров в корзине
for ($i=1; $i<=count($_SESSION['cart']); $i++){
    $cont += $_SESSION['cart'][$i]['qty'];
}
$_SESSION['count'] = $cont;