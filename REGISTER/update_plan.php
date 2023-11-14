<?php

include 'db.php';

$id = $_GET['ID'];
$plan = $_GET['membership'];


$sql = "UPDATE userDetail SET Plan = '$plan' WHERE ID = $id";
$result = mysqli_query($con, $sql);

if($result){
    header("location:dashboard.php");
}

?>