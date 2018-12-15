<?php

session_start();
function dellToCart($goods_id, $qty){
    if(isset($_SESSION['cart'][$goods_id])){
        $_SESSION['cart'][$goods_id]['qty'] -= $qty;
        if ($_SESSION['cart'][$goods_id]['qty'] < 0){
            $_SESSION['cart'][$goods_id]['qty'] = 0;
        }
    } else{
        $_SESSION['cart'][$goods_id]['qty'] = $qty;
    }
}

function addtocart($goods_id, $qty = 1){
    if(isset($_SESSION['cart'][$goods_id])){
        // если в массиве cart уже есть добавляемый товар
        $_SESSION['cart'][$goods_id]['qty'] += $qty;
    }else{
        // если товар кладется в корзину впервые
        $_SESSION['cart'][$goods_id]['qty'] = $qty;
    }
}