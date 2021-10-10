<?php

$conn = mysqli_connect("localhost","root","","sendmoney_db");

if (!$conn){

	die("Failed to connect to DataBase:".mysqli_connect_error());
}

?>