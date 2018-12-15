<?php
$id = $_GET['id'];
$product = getProductById($id);
$images = getProductImages($id);
render("product", ['product' => $product, 'images' => $images]);
