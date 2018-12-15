<?php
header("Content-type: text/html; charset=utf-8");
include __DIR__ . '/../../config/main.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $count = 1;
    addtocart($id, $count);
    redirect($_SERVER['REQUEST_URI']);
}

$products = getAllProducts();
render("catalog", ['products' => $products]);





