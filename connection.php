<?php
$host="localhost";
$user="root";
$password="";
$dbname="e-commerce";

$conn = new mysqli($host, $user, $password, $dbname)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();
?>
