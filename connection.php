<?php
$host="localhost";
$user="root";
$password="";
$dbname="e-commerce";

$con = mysqli_connect($host, $user, $password, $dbname)
	or die('Could not connect to the database server' . mysqli_connect_error());

//$conn->close();
?>