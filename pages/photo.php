<?php
header("Content-type: text/html; charset=utf-8");
include __DIR__ . '/../config/main.php';
include ENGINE_DIR . 'autoload.php';
$id = $_GET['id'];
countViews($id); //Подсчитывается количесвто просмотров
$image = getImage($id);
include TEMPLATES_DIR . 'image.php'; //Подключаем шаблон для отображения картинок в браузере.


