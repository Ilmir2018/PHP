<?php
header("Content-type: text/html; charset=utf-8");
include __DIR__ . '/../config/main.php';
include ENGINE_DIR . 'autoload.php';
include WENDOR_DIR . 'funcImgResize.php';

$path = $_SERVER['REQUEST_URI'];

if (!$path = preg_replace(["#^/#", "#[?].*#"], "", $_SERVER['REQUEST_URI'])) {
    $path = "index";
};

$parts = explode("/", $path);
$page = $parts[0];
$action = $parts[1] ?? "index";
$id = $parts[2] ?? "";

$pageName = PAGES_DIR . $page . "/" . $action . ".php";
if (file_exists($pageName)) {
    include $pageName;
} else {
    echo "Такой страницы нет!";
}




































































