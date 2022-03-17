<?php 
    include_once 'database.php';
    #it take from web.php
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    //md5 , layered encryption, atau pakai gost
    $pwd = mysqli_real_escape_string($conn,md5(sha1($_POST['pwd'])));
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $city = mysqli_real_escape_string($conn,$_POST['city']);

    $sql = "INSERT INTO users (Username, Name, User_pass, City) 
    Values('$email','$name', '$pwd', '$city');";
    mysqli_query($conn, $sql);

    header("Location: ../web.php?signup=success");
 