<?php
session_start();
require "config.php";

if(isset( $_POST["mail"]) && isset($_POST["pwd"])){

    $mail = mysqli_real_escape_string($conn, $_POST['mail']);
    $password = mysqli_real_escape_string($conn, $_POST['pwd']);


    

    if(empty($mail)){
        header("Location:log.php?error=User name is required");
        exit();
    }else if(empty($password)){
        header("Location:log.php?error=password is required");
        exit();
    }else{

        $sql = "SELECT * FROM customer WHERE Email = '$mail' AND Password = '$password'";
        
        $check = $conn->query($sql);

        if(mysqli_num_rows($check) === 1){
            $data = $check->fetch_assoc();

            if ($data["Email"] == $mail && $data["Password"] == $password){
                
                $_SESSION['user_name'] = $_POST['username'];
                $_SESSION['NIC'] = $data['NIC'];

                header("Location: ");
                exit();