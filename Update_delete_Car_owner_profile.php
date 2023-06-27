<?php
require "config.php";

if(isset ($_POST['Button'])){
     // If the 'Button' submit button is clicked, update the account details with the new values
    
     // Retrieve the new values from the form
    $new_firstname = $_POST['firstName'];
    $new_lastname = $_POST['lastName'];
    $new_email = $_POST['email'];
    $new_ID = $_POST['ID'];
    $new_NIC =$_POST['nic'];
    $new_password = $_POST['password'];
    $new_Admin_ID =$_POST['adminID'];
    
    // Update the car_owner table with the new values
    $sql2 = "UPDATE car_owner
    SET  
        Email='$new_email',
        Password ='$new_password',
        NIC='$new_NIC',
        First_name='$new_firstname',
        Last_name='$new_lastname',
        Admin_ID='$new_Admin_ID'

    WHERE ID='$new_ID'";

    if($conn->query($sql2)){
        header("Location:webhtmlfile.php?updated");/ Redirect to the specified page after successful update
        echo "Update successfully";
    }else{
        echo "Failed!try again";
    }    


}
if(isset($_POST['deleteaccount'])){

    // If the 'deleteaccount' submit button is clicked, delete the account
    $ID = $_POST['ID'];
    // Delete the car_owner record with the specified ID
    $sql_d = "DELETE FROM car_owner WHERE ID = '$ID'";

    if($conn->query($sql_d)){
        header("Location: login.php");// Redirect to the login page after successful deletion
    }else{
        echo "Failed! try ! again";
    }
}

?>