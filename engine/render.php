<?php
/**
 * Функция отвечает за подключение шаблонов страниц.
 * @param string $template - Имя подключаемой страницы.
 * @param array $params - Список параметров, которые мы получаем в функции.
 * @param bool $uselayout - если true, подшаблон совмещаем с шаблоном (по умолчанию true).
 */
function render($template, $params=[], $uselayout = true){
    //Получаем содержимое подшаблона в виде строки.
    $content = renderTemplate($template, $params);
    //Проверяем что если есть базе данных введённые данные пользователем, или
    //если он зараегетрировался, либо введены неверные данные, мы подключаем соответствующий шаблон.
    if (!empty($_SESSION['user_name'])){
        $content = renderTemplate("layout/main", ['content' => $content]);
    }
    else{
        $content = renderTemplate("layout/main2", ['content' => $content]);
    }
    //Выводим результат.
    echo $content;
}

/**
 * Функция генерирует шаблон и возвращает его в виде строки.
 * @param string $template - Имя подключаемой страницы.
 * @param array $params Список параметров, которые мы получаем в функции.
 * @return false|string Возвращаем сгенерированный шаблон в виде строки.
 */
function renderTemplate($template, $params=[]){
    //Извлекаем переменные из массива.
    extract($params);
    //Включем буферизацию вывода.
    ob_start();
    //Подключаем шаблон.
    include TEMPLATES_DIR . "{$template}.php";
    //Возвращаем содержимое текущего буфера и очищаем его.
    return ob_get_clean();
}