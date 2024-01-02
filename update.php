<?php
include('connect.php');

$user_id = $_POST['user_id'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];

$age = $_POST['age'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];


$sql = "UPDATE users1 SET user_name = '$user_name',password = '$password', age = '$age',address = '$address',phone_number ='$phone_number' WHERE user_id = '$user_id'";

mysqli_query($db, $sql);
header('Location:index.php');
