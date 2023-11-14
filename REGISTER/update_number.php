<?php

include 'db.php';

$id = $_GET['ID'];
$phone = $_GET['number'];


$sql = "UPDATE userDetail SET Phone = '$phone' WHERE ID = $id";
$result = mysqli_query($con, $sql);

if($result){
    header("location:dashboard.php");
}

?>