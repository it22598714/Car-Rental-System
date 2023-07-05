
<?php
session_start();
require "config.php";

if(isset( $_POST["loginBtn"]) ){

    if(isset( $_POST["mail"]) && isset($_POST["pwd"])){

        $email = mysqli_real_escape_string($con, $_POST['mail']);
        $log_password = mysqli_real_escape_string($con, $_POST['pwd']);
    
    
        
    
        if(empty($email)){
            header("Location:log.php?error=User name is required");
            exit();
        }else if(empty($log_password)){
            header("Location:log.php?error=password is required");
            exit();
        }else{
    
            $sql1 = "SELECT * FROM customer WHERE Email = '$email' AND Password = '$log_password'";
            $sql2 = "SELECT * FROM staff WHERE Email = '$email' AND Password = '$log_password'";
            $sql3 = "SELECT * FROM car_owner WHERE Email = '$email' AND Password = '$log_password'";
            
            $check = $con->query($sql1);
            $check2 = $con->query($sql2);
            $check3 = $con->query($sql3);
    
            if($check-> num_rows > 0){
                $data = $check->fetch_assoc();
    
                if ($data["Email"] == $email && $data["Password"] == $log_password){
                    
                    $_SESSION['CID'] = $data['ID'];
                
                    header("Location: home_registeredUser.php");
                    exit();
    
                }else{
                    header("Location:log.php?error=Incorect Email or password");
                    exit();
                }
               
            }
    
            else if($check2-> num_rows > 0){
                $data = $check2->fetch_assoc();
    
                if ($data["Email"] == $email && $data["Password"] == $log_password){
                    
                    $_SESSION['SID'] = $data['ID'];
                
                    header("Location: home_staff.php");
                    exit();
    
                }else{
                    header("Location:log.php?error=Incorect Email or password");
                    exit();
                }
               
            }
    
            else if($check3-> num_rows > 0){
                $data = $check3->fetch_assoc();
    
                if ($data["Email"] == $email && $data["Password"] == $log_password){
                    
                    $_SESSION['OID'] = $data['ID'];
                
                    header("Location: home_car_owner.php");
                    exit();
    
                }else{
                    header("Location:log.php?error=Incorect Email or password");
                    exit();
                }
               
            }
        }
    
    
    
    
    
    
    /*$result = $con -> query($sql);
    
    $result1= $result -> fetch_assoc();
    
    if ($username == $result1["User_Email"] && $log_password == $result1["User_Password"]){
        echo 'login sucsess';*/
    }
    
    

}

