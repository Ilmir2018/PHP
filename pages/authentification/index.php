<?php
$message = '';
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $user = getUserByNamePass($login, $password);
    if ($user){
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $_POST['login'];
        redirect("authentification/helloUser");
    }
    $message = 'Неправильная пара логин/пароль. Зарегестрируйтесь пожалуйста';
}
render("authentication", ['message' => $message]);