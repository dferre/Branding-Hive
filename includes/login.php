<?php
session_start();
include 'dbconnect.php';


//var_dump($_POST['profilePicture']);


$un = $_POST['username'];
$pw = $_POST['password'];


$sql = "SELECT * FROM user WHERE username='$un' AND password='$pw'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){
  echo "Your Username or Password is incorrect";
} else {
  $_SESSION['id']= $row['id'];

}

header("Location: ../dashboard.php");
?>
