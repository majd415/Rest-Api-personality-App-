<?php
$host="localhost";
$username="root";
$password="";
$dbname="ecoomercewael";

$db_connected=mysqli_connect($host,$username,$password,$dbname) OR die("not connected");

echo"connected ";


?>