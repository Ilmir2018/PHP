<?php
function getAllProducts(){
    return queryAll("SELECT * FROM products");
}

function getAllProductsForBasket(){
    return queryAll("SELECT * FROM products");
}

function getProductById($id){
    return queryOne("SELECT * FROM products WHERE id = '$id'");
}

function getProductImages($id){
    return queryAll("SELECT * FROM product_images WHERE id = '$id'");
}

function getAllComments(){
    return queryAll("SELECT * FROM comment;");
}

function insertProductForBasket($products_id, $count, $price){
    return queryAll("INSERT INTO orders (products_id, count, price) VALUES ('$products_id', '$count', '$price')");
}
