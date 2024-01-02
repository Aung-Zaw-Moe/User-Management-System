<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpas = "";
$dbname = "entry";
   $db = mysqli_connect($dbhost, $dbuser,$dbpas,$dbname);
   if($db == true){
    echo "Database connected successfully";

   }else{
    die('Some Error: '.mysqli_connect_error($db));
   }
 ?>
