<html>
    <head>
        <link rel="stylesheet" href="Styles\Customer_profile_style.css.css">
 
    </head>

    <body>
        <?php 
            require "config.php"; // Including the configuration file

            // Fetching customer data from the database
            $sql0 = "SELECT * FROM customer WHERE ID = 'CCU3715456'";
            $result11 = $con->query($sql0);
            $result22 = $result11 -> fetch_assoc();

            // Fetching customer phone data from the database
            $sql11 = "SELECT * FROM customer_phone WHERE ID = 'CCU3715456'";
            $result33 = $con->query($sql11);
            $result44 = $result33 -> fetch_assoc();
           
        ?>
        <div class="container11">
                            <!-- Navigation bar  -->
            <nav>
                <!-- Logo -->
                <div class="logo">
                    <a href="index.php">
                        <img src="Assets/Images/Logo.png" alt="Logo" width="100px" height="100px">
                    </a>
                </div>
                 <!-- Menu toggle checkbox -->
                <input type="checkbox" id="menu-toggle">
                 <!-- Menu icon -->
                <label for="menu-toggle" class="menu-icon">&#9776;</label>
                 <!-- Menu list -->
                <ul class="menu">
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="Reservations">Reservations</a></li>
                    <li><a href="About">About Us</a></li>
                    <li><a href="Contact">Contact Us</a></li>
                </ul>
                <!-- Login button -->
                <button id="login_btn">Login</button>
            </nav>
            <!-- Account details section -->
            <div class="division22">
                <h1 class="header11" >Account details</h1>
                <form  method="post" action="Update1.php">
                    <div class="shower_name11">
                        <div class="shower_div11">

                            <label for="">First name</label>
                            <br>
                            <div class="shower11">
                                <input type="text" name="firstName11" value="<?php echo $result22["First_name"];?>"id="">
                            </div>
                        </div>
                        <div class="shower_div11">

                            <label for="">Last name</label>
                            <br>
                            <div class="shower11">
                                <input type="text" value="<?php echo $result22["Last_name"];?>" name="lastName11" id="">
                            </div>
                        </div>
                    </div>
                    <!-- ID input -->
                    <label for="">ID</label>
                    <br>
                    <div class="shower11">
                        <input type="text" value="<?php echo $result22["ID"];?>" name="ID11" id="">
                    </div>
                    <!-- NIC input -->
                    <label for="">NIC</label>
                    <br>
                    <div class="shower11">
                        <input type="text" value="<?php echo $result22["NIC"];?>" name="nic11" id="">
                    </div>
                    <!-- Admin ID input -->
                    <label for="">Admin ID</label>
                    <br>
                    <div class="shower11">
                        <input type="text" value="<?php echo $result22["Admin_ID"];?>"  name="AdminID11" id="">
                    </div>
                    <label for="">Password</label>
                    <br>
                    <div class="shower11">
                        <input type="text" value="<?php echo $result22["Password"];?>"  name="password" id="">
                    </div>
                    
                    
                    <input name="Button1" type="submit" value="Update" class="button1">
                    <input name="deleteaccount2" type="submit" value="Delete account" class="button1">
                    
                
                </form>
                
            </div>
          
            <div class="division33">
                <h1 class="header22" >Rental History</h1>
                <div class="division33-subdiv11">
                    <?php

                    $sql22 = "SELECT * FROM reservation where Customer_ID='CCU5463728' ;";

                    $result55 = $con-> query($sql22);
            
                        while($result66 = $result55-> fetch_assoc())
                        {
                            Echo '<table style="border:5px ridge black; width:100% ">
                            
                            <tr>
                            <td>Reservation ID</td>
                            <td>'.$result66["ID"].'</td>
                            </tr>
                            <tr>
                            <td>Car ID</td>
                            <td>'.$result66["Car_ID"].'</td>
                            </tr>
                            </tr>
                            <tr>
                            <tr>
                            <td>Pick up date</td>
                            <td>'.$result66["Pickup_date"].'</td>
                            </tr>
                            </tr>
                            <tr>
                            <td>Pick up time</td>
                            <td>'.$result66["Pickup_time"].'</td>
                            
                            </tr>
                            <tr>
                            <td>Drop location</td>
                            <td>'.$result66["Drop_location"].'</td>
                            
                            </tr>
                            </tr>
                            <tr>
                            <td>Drop date</td>
                            <td>'.$result66["Drop_date"].'</td>
                            </tr>
                            </tr>
                            <tr>
                            <td>Drop time</td>
                            <td>'.$result66["Drop_time"].'</td>
                            </tr>
                            </tr>
                            <tr>
                            <td>Rental duration</td>
                            <td>'.$result66["Rental_duration"].'</td>
                            </tr>
                            <tr>
                            <td>Rental price</td>
                            <td>'.$result66["Rental_price"].'</td>
                            </tr>
                            <tr>
                            <td>Status</td>
                            <td>'.$result66["Status"].'</td>
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