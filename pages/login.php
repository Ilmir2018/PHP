<?php
header("Content-type: text/html; charset=utf-8");
include __DIR__ . '/../config/main.php';
include ENGINE_DIR . 'autoload.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $user = getUserByNamePass($login, $password);
    if ($user){
        session_start();
          $_SESSION['user_id'] = $user['id'];
        //setcookie('user_id', $user['id'], time() + 300);
        redirect("/index.php"); //Если пользователь авторизован его перекидывает на страницу с каталогом.
    }
    $message = 'Неправильная пара логин/пароль.';
}
render("login", ['message' => $message]); //Если нет, то перекидывает на страницу авторизации.