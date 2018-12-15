<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $content = $_POST['content'];
    $name = $_POST['name'];
    if (!empty($content) && !empty($name)) {
        $con = mysqli_connect($config['host'], $config['user'], $config['password'], $config['dbName']);
        $sql = "INSERT INTO comment (name, content) VALUES ('$name', '$content');";
        $res = mysqli_query($con, $sql);
    }
    redirect('/comment'); //Делаем редирект на эту же страницу, чтобы не происходило повторной отправки данных.
}

$row = getAllComments();
render("comment", ['row' => $row]);
