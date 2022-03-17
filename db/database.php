<?php

$dbServerName = "localhost";
$dbUserName ="root";
$dbPassword ="";
$dbName = "phpmylesson";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
//Default connection to Database
/*if(!$conn->connect_error){
    if(!empty($_SERVER['HTTPS'])&&('on' == $_SERVER['HTTPS'])){
        $uri = 'https://';
    }else{
        $uri = 'http://';
    }
    $uri .=$_SERVER['HTTP_HOST'];
    header('Location: ' .$uri.'/dashboard/');
    exit;
}else{
    die("Connection Failed: ".$conn->connect_error);
}