<?php
session_start();

include 'db_connect.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
$result = $conn->query($sql);

 if (!$row = $result->fetch_assoc()) {
 	 echo"Login Failure";
 }
 else{
 	$_SESSION['id'] = $row['id'];
 	$_SESSION['first'] = $row['first'];
 	$_SESSION['last'] = $row['last'];

 }


header("Location:index.php")
?>