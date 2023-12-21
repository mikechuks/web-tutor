<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "project";

//create connection
$conn = mysqli_connect($localhost,$username,$password,$dbname);

//check connection
if(!$conn){
    die(mysqli_connect_error($conn));
}
?>