<?php
function getBase($name, $size, $type, $tmp_name, $count){
    getConnection();
    $name = mysqli_real_escape_string(getConnection(), $name);//Функция для экранирования баз данных, от SQL инекций,
    // тоесть вмешательства извне, убирает все лишние символы.
    $size = mysqli_real_escape_string(getConnection(), $size);
    $type = mysqli_real_escape_string(getConnection(), $type);
    $tmp_name = mysqli_real_escape_string(getConnection(), $tmp_name);
    $sql = "INSERT INTO images (name, type, size, tmp_name, count) VALUES ('$name', '$type', '$size', '$tmp_name', '$count');";
    if (!execute($sql)) { //Если запрос выполняется, внутрь не заходит.
        var_dump(mysqli_error(getConnection()));
    }
}