<?php
    require "config.php";



    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $Email = $_POST["mail"];
    $mobileNo = $_POST["no"];
    $Message = $_POST["Msg"];

    $sql= "INSERT INTO contact_us (`firstName`, `lastName`, `Email`, `mobileNo`, `Message`) VALUES ('".$firstName."', '".$lastName."', '".$Email."', '".$mobileNo."', '".$Message."')";
    
        if($con->query($sql)){

            echo "Thank for contacting us";
        }
        else{

            echo "Error:".$con->error;
        }
    $con->close();


?>