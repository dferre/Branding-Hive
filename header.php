<?php
session_start();
include 'dbconnect.php';

$id = $_SESSION['id'];

// Get First Name
$s = "SELECT * FROM user WHERE id='$id'";
$r = mysqli_query($conn, $s);

if (!$roww = mysqli_fetch_assoc($r)){
  echo "Your Username or Password is incorrect";
} else {
  $_SESSION['first_name']= $roww['first_name'];

}

$first_name = $_SESSION['first_name'];

?>
