<?php
function db_connect() {
    header('Content-Type: text/html; charset=utf-8');
  
    static $connection;

    if(!isset($connection)) {
       $connection = mysqli_connect('localhost','root','','users');
    }

    if($connection === false) {
        return mysqli_connect_error(); 
    }
    return $connection;
}

function db_query($query) {
    $connection = db_connect();
  
    $result = mysqli_query($connection,$query);

    return $result;
}