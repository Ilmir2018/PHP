<?php
$success = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['login'];
    $password = $_POST['password'];
    getConnection();
    $bd = "INSERT INTO users (login, password) VALUES ('$username', '$password')";
    execute($bd);
    $success = true;
    if ($success) {
        session_start();
        $_SESSION['user_name'] = $_POST['login'];
        redirect("/registration/congratulation");
    }
}
render("registration");