<?php
//Linking the configuration file
require 'con.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
 
  $bankName=$_POST['bankName'];
  $yourName=$_POST['yourName'];
  $branchName=$_POST['branchName'];
  $email=$_POST['email'];
  $price2=$_POST['price2'];


$sql= "INSERT INTO bank_transfer (`Bank_name`, `Your_Name`, `Branch_Name`, `Email`, `Price`) VALUES ('".$bankName."', '".$yourName."', '".$branchName."', '".$email."', '".$price2."')";

  if($conn->query($sql)){
  echo "added successfully";
  }
  else{
  echo "Error:". $conn->error;
  }
  $conn->close();

}
  ?>