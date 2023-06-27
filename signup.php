<?php
    require 'config.php';



    $getLastCustomerIDQuery = "SELECT ID FROM Customer ORDER BY ID DESC LIMIT 1";
    $getLastCustomerIDResult = $con->query($getLastCustomerIDQuery);
    $lastCustomerID = $getLastCustomerIDResult->fetch_assoc();
    $last7Digits = substr($lastCustomerID['ID'], -7);
    $newCustomerID = 'CCU' . str_pad(intval($last7Digits) + 1, 7, '0', STR_PAD_LEFT);
    
    $adminID = "CAD1005001";
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $Nic = $_POST["nic"];
    $email = $_POST["mail"];
    $password = $_POST["pwd"];

    
    $sql= "INSERT INTO customer (`ID`, `First_name`, `Last_name`, `NIC`, `Email`, `Password`, `Admin_ID`) VALUES ('".$newCustomerID."', '".$firstname."', '".$lastname."', '".$Nic."', '".$email."', '".$password."', '".$adminID."')";
        if($con->query($sql)){

            echo "Registration Successful";
        }
        else{

            echo "Error:".$con->error;
        }
    $con->close();

?>