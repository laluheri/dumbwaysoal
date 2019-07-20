<?php 
$server = "localhost";
$user 	= "root";
$pass 	= "";
$dbname = "person";

$conn = mysqli_connect($server, $user, $pass, $dbname);
if(!$conn){
    echo die("Connection Failed: " .mysqli_connect_error());
}else{
    echo "conection seuccess";
}