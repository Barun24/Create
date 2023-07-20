<?php
$host="localhost";
$user="root";
$pass="";
$db="shrey";
$conn=mysqli_connect($host, $user, $pass,$db);
if(!$conn){echo"unable to connect database";}
?>