<?php
function getConnection(){
    $config = include CONFIG_DIR . "db.php";
    static $con = null;
    if (is_null($con)) {
        $con = mysqli_connect($config['host'], $config['user'], $config['password'], $config['dbName']);
    }
    return $con;
}

function execute($sql){
    return mysqli_query(getConnection(), $sql);
}

function queryAll($sql){
    return mysqli_fetch_all(execute($sql), MYSQLI_ASSOC);
}

function queryOne($sql){
    return queryAll($sql)[0];
}

function closeConnection(){
    return mysqli_close(getConnection());
}