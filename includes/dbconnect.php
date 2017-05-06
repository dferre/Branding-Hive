<?php
$conn = mysqli_connect("localhost", "mckay", "", "BrandingHive");
if(!$conn){
  // Remove for Live Version
  die("Connection Failed: ".mysqli_connect_error());
}

?>
