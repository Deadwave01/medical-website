<?php
    $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

    if(mb_strlen($email) < 10) {
        echo "ERROR NOT CORRECT EMAIL";
        exit();
    } else if(mb_strlen($pass) < 8) {
        echo "ERROR NOT CORRECT PASSWORD";
        exit();
    }

    $pass = md5($pass."XrUsjsDc3wa7YK");

    $mysql = new mysqli('localhost','root','root','register-bd');

    $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$pass'");
    $user = $result->fetch_assoc();
    if(count($user) == 0){
        echo "THIS USER NOT FOUND";
        exit();
    }

    setcookie('user',$user['login'], time() + 3600, "/");
    setcookie('userRole',$user['role'],time() + 3600, "/");

    $mysql->close();

    header('Location: index.php');