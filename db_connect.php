<?php

$conn = mysqli_connect("localhost","root","","test_db");

if (!$conn){

	die("Failed to connect to DataBase:".mysqli_connect_error());
}

?>
