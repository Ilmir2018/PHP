<?php
unset($_SESSION['user_name']); //При выходе уничтожаем сессию.
session_destroy();
render("index");