<?php
function getGallery(){
    $sql = "SELECT * FROM images ORDER BY count DESC";
    return queryAll($sql);
}

function getImage($id){
    $sql = "SELECT * FROM gallery.images WHERE id='$id';";
    return queryOne($sql);
}

function countViews($id){
    $sql = "UPDATE images SET count = count + 1 WHERE id = '$id';";
    return execute($sql);
}
