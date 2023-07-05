<html>
    <head>
        <link rel="stylesheet" href="Styles\Car_owner_profile_style.css.css"><!--link css file style.css-->
 
    </head>

    <body>
        <?php 
            require "config.php"; // Includes the config.php file
            session_start();

            $carOwnerID = $_SESSION['OID'];

            // Retrieves data from the "car_owner" table based on ID
            $sql = "SELECT * FROM car_owner WHERE ID = '$carOwnerID'";
            $result1 = $con->query($sql);
            $result2 = $result1 -> fetch_assoc();

             // Retrieves data from the "car_owner_phone" table based on car_owner_ID
            $sql1 = "SELECT * FROM car_owner_phone WHERE car_owner_ID = '$carOwnerID'";
            $result3 = $con->query($sql1);
            $result4 = $result3 -> fetch_assoc();
           
        ?>
        <div class="container">
                            <!-- Navigation bar  -->
            <nav>
                <div class="logo">
                    <a href="index.php">
                        <img src="Assets/Images/Logo.png" alt="Logo" width="100px" height="100px">
                    </a>
                </div>
                <input type="checkbox" id="menu-toggle">
                <label for="menu-toggle" class="menu-icon">&#9776;</label>
                <ul class="menu">
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="Reservations">Reservations</a></li>
                    <li><a href="About">About Us</a></li>
                    <li><a href="Contact">Contact Us</a></li>
                </ul>
                <button id="login_btn">Login</button>
            </nav>
            <div class="division2">
                <h1 class="header1" >Account details</h1>
                <form  method="post" action="Update.php">
                    <div class="shower_name">
                        <div class="shower_div">

                            <label for="">First name</label>
                            <br>
                            <div class="shower">
                                <input type="text" name="firstName" value="<?php echo $result2["First_name"];?>"id="">
                            </div>
                        </div>
                        <div class="shower_div">

                            <label for="">Last name</label>
                            <br>
                            <div class="shower">
                                <input type="text" value="<?php echo $result2["Last_name"];?>" name="lastName" id="">
                            </div>
                        </div>
                    </div>
                    <label for="">ID</label>
                    <br>
                    <div class="shower">
                        <input type="text" value="<?php echo $result2["ID"];?>" name="ID" id="">
                    </div>
                    <label for="">NIC</label>
                    <br>
                    <div class="shower">
                        <input type="text" value="<?php echo $result2["NIC"];?>" name="nic" id="">
                    </div>
                    <label for="">Email</label>
                    <br>
                    <div class="shower">
                        <input type="text" value="<?php echo $result2["Email"];?>"  name="email" id="">
                    </div>
                    <label for="">Password</label>
                    <br>
                    <div class="shower">
                        <input type="text" value="<?php echo $result2["Password"];?>"  name="password" id="">
                    </div>
                    <label for="">Admin ID</label>
                    <br>
                    <div class="shower">
                        <input type="text" value="<?php echo $result2["Admin_ID"];?>" name="adminID" id="">
                    </div>
                    <input name="Button" type="submit" value="Update" class="button1">
                    <input name="deleteaccount" type="submit" value="Delete account" class="button1">
                
                </form>
                
            </div>
           
            <div class="division3">
                <h1 class="header2" >Rental History</h1>
                <div class="division3-subdiv1">
                    <?php

                    $sql2 = "SELECT * FROM reservation r,car c where r.Car_ID=c.Car_ID AND c.Car_owner_ID='$carOwnerID' ; ";

                    $result5 = $con-> query($sql2);
            
                        while($result6 = $result5-> fetch_assoc())
                        {
                            Echo '<table style="border:5px ridge black; width:100% ">
                            
                            <tr>
                            <td>Reservation ID</td>
                            <td>'.$result6["ID"].'</td>
                            </tr>
                            <tr>
                            <td>Car ID</td>
                            <td>'.$result6["Car_ID"].'</td>
                            </tr>
                            </tr>
                            <tr>
                            <td>Brand</td>
                            <td>'.$result6["Brand"].'</td>
                            </tr>
                            <tr>
                            <td>Type</td>
                            <td>'.$result6["Type"].'</td>
                            </tr>
                            <tr>
                            <td>model</td>
                            <td>'.$result6["model"].'</td>
                            </tr>
                            <tr>
                            <td>Colour</td>
                            <td>'.$result6["Color"].'</td>
                            </tr>

                            <tr>
                            <td>Pick up date</td>
                            <td>'.$result6["Pickup_date"].'</td>
                            </tr>
                            </tr>
                            <tr>
                            <td>Pick up time</td>
                            <td>'.$result6["Pickup_time"].'</td>
                            
                            </tr>
                            <tr>
                            <td>Drop location</td>
                            <td>'.$result6["Drop_location"].'</td>
                            
                            </tr>
                            </tr>
                            <tr>
                            <td>Drop date</td>
                            <td>'.$result6["Drop_date"].'</td>
                            </tr>
                            </tr>
                            <tr>
                            <td>Drop time</td>
                            <td>'.$result6["Drop_time"].'</td>
                            </tr>
                            </tr>
                            <tr>
                            <td>Rental duration</td>
                            <td>'.$result6["Rental_duration"].'</td>
                            </tr>
                            <tr>
                            <td>Rental price</td>
                            <td>'.$result6["Rental_price"].'</td>
                            </tr>
                            <tr>
                            <td>Status</td>
                            <td>'.$result6["Status"].'</td>
                            </tr>
                            </table><br>';
                        }

                    

                    $con->close();
                    ?>
              </div>
            </div>
        </div>
      
    </body>
</html>