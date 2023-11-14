<?php

include 'db.php';

$name = $_GET['name'];
$email = $_GET['email'];
$password = $_GET['password'];
$phone = $_GET['phone'];
$plan = $_GET['membership'];

$sql = "INSERT INTO userDetail (name, Email, password, Phone, Plan) values ('$name', '$email','$password', $phone, '$plan')";
$result = mysqli_query($con, $sql);

if($result){
   echo '<script>alert("SUCCESSFULLY REGISTERED");</script>';
   header('Location: login.html');
}

?>