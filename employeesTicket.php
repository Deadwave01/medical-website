<?php
$USER = $_COOKIE['user'];
$conn = new mysqli('localhost','root','root','register-bd');

if($conn->connect_error){
    die("Connection failed: " . $conn.mysqli_connect_error());
}

$result = $conn->query("SELECT * FROM `users` WHERE `role` = 'doctor'");

$tickets = array();

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $tickets[] = $row;
    }
}

$json_tickets = json_encode($tickets);

header('Content-Type: ../application/json');
echo $json_tickets;

$conn->close();

?>