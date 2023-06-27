<?php
//Linking the configuration file
require 'con.php';


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
 
  $Name=$_POST['Name'];
  $Email=$_POST['Email'];
  $Subject=$_POST['Subject'];
  $Comment=$_POST['Comment'];
   

 
  $sql= "INSERT INTO feedback (`Name`, `Email`, `Subject`, `Comment`) VALUES ('".$Name."', '".$Email."', '".$Subject."', '".$Comment."')";
  if($conn->query($sql)){
  echo "added successfully";
  }
  else{
  echo "Error:". $conn->error;
  }
  $conn->close();
}
?>