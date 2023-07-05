<?php
require "config.php";

if(isset ($_POST['Button1'])){

    $new_firstname11 = $_POST['firstName11'];
    $new_lastname11 = $_POST['lastName11'];
    $new_ID11 = $_POST['ID11'];
    $new_NIC11 =$_POST['nic11'];
    $new_Admin_ID11 =$_POST['AdminID11'];
    
    $sql3 = "UPDATE customer
    SET  
        First_name='$new_firstname11',
        Last_name='$new_lastname11',
        NIC='$new_NIC11',
        Admin_ID='$new_Admin_ID11'

    WHERE ID='$new_ID11'";

    if($con->query($sql3)){
        header("Location:Customer_profile.php?updated");
        echo "Update successfully";
    }else{
        echo "Failed!try again";
    }    


}

if(isset($_POST['deleteaccount2'])){

    $ID11 = $_POST['ID11'];

    $sql_d = "DELETE FROM customer WHERE ID = '$ID11'";

    if($con->query($sql_d)){
        header("Location: log.php");
    }else{
        echo "Failed! try ! again";
    }
}

?>