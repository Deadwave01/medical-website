<?php
    $error_login = "";
    $error_email = "";
    $error_pas = "";

    $login = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
        $error_login .= "Not correct login!<br>";
        exit();
    } else if(mb_strlen($email) < 10) {
        $error_pas .= "Not correct email!<br>";
        exit();
    } else if(mb_strlen($pass) < 8) {
        $error_pas .= "Not correct password!<br>";
        exit();
    }

    $pass = md5($pass."XrUsjsDc3wa7YK");

    $mysql = new mysqli('localhost','root','root','register-bd');
    $mysql->query("INSERT INTO `users` (`login`,`email`,`password`) VALUES('$login','$email','$pass')");
    $mysql->close();

    header('Location: index.php');