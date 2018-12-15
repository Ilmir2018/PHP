<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $count = 1;
    dellToCart($id, $count);
    redirect('/basket');
}

$basket = getAllProductsForBasket();
render("basket", ['basket' => $basket]);