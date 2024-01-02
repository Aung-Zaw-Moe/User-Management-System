<?php

include 'connect.php';

$user_id = $_GET['user_id'];


$sql = "DELETE FROM users1 WHERE user_id='$user_id'";
mysqli_query($db, $sql);

header('Location: index.php');
