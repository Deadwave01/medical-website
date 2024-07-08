<?php
    $date = filter_var(trim($_POST['date']),FILTER_SANITIZE_STRING);
    $time = filter_var(trim($_POST['time']),FILTER_SANITIZE_STRING);
    $doctor = filter_var(trim($_POST['doctor']),FILTER_SANITIZE_STRING);
    $mysql = new mysqli('localhost','root','root','register-bd');
    $mysql->query("INSERT INTO `ticket` (`date`,`time`,`doctor`) VALUES('$date','$time','$doctor')");
    header('Location: ticket.php');
?>