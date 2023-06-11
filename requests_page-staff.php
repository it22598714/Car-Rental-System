<?php require 'config.php'; ?>

<?php
    $sql = "SELECT r.*, c.First_name, c.Last_name, c.NIC, k.Brand, k.model
    FROM reservation r, customer c, car k
    WHERE r.Customer_ID = c.ID AND r.Car_ID = k.Car_ID AND r.Status='pending';";

    $result = mysqli_query($con, $sql);

    $reservations_arr = array(); // Create an empty array to store the fetched data

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $reservations_arr[] = $row;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <title>Requests</title>
    <script src="https://kit.fontawesome.com/cd17775da3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Styles/requests_page-staff_style.css">    
    <link rel="stylesheet" href="Styles/navbar.css">
</head>
<body>

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
        <li><a href="home-staff.php">Home</a></li>
        <li><a href="requests_page-staff.php" class="active" href="Reservations">Requests</a></li>
        <li><a>Messages</a></li>
      </ul>
      <i class="fa-solid fa-user acount_icon"></i>
    </nav>

    <div class="all_requests">

    <?php foreach ($reservations_arr as $reservation){

        $ID = $reservation['ID'];
        $Customer_ID = $reservation['Customer_ID'];
        $Pickup_location = $reservation['Pickup_location'];
        $Pickup_date = $reservation['Pickup_date'];
        $Pickup_time = $reservation['Pickup_time'];
        $Drop_location = $reservation['Drop_location'];
        $Drop_date = $reservation['Drop_date'];
        $Drop_time = $reservation['Drop_time'];
        $Rental_duration = $reservation['Rental_duration'];
        $Rental_price = $reservation['Rental_price'];
        $First_name = $reservation['First_name'];
        $Last_name = $reservation['Last_name'];
        $NIC = $reservation['NIC'];
        $Car_ID = $reservation['Car_ID'];
        $Brand = $reservation['Brand'];
        $model = $reservation['model'];
        
        echo '<div class="request" id="req1">    
        <div class="car_option_header">
            <h1><span id="car_name">'.$Car_ID.' - '.$Brand.' '.$model.'</span></h1>
            <span class="view_details_text view_details_button">view Details</span>
            <i id="dropdown_icon1" class="fa-solid fa-circle-chevron-down view_details_button"></i>    
        </div>
            <div id="request_details_req1" class="request_details">    
                <span><h3>Customer Details:</h3></span>
                <div class="cus_details">
                    <div class="cus_details_topics">
                        <span>Name : </span><br>
                        <span>NIC : </span> <br>
                    </div>
                    <div class="cus_details_filled_details">
                        <span style="width=50%;" class="filled_details" id="cus_name">'.$First_name.' '.$Last_name.'</span><br>
                        <span class="filled_details" id="cus_nic">'.$NIC.'</span><br>
                    </div>
                </div>
                <span><h3>Reservation Details:</h3></span>
                <div class="reservation_details">
                    <div class="reservation_details_topics">
                        <span>Pick up location : </span> <br>
                        <span>Pick up Date : </span> <br>
                        <span>Pick up Time : </span> <br>
                        <span>Drop off location : </span> <br>
                        <span>Drop off Date : </span> <br>
                        <span>Drop off Time : </span> <br>
                    </div>
                    <div class="reservation_details_filled_details">
                        <span class="filled_details" id="Pickup_location">'.$Pickup_location.'</span><br>
                        <span class="filled_details" id="pickup_date">'.$Pickup_date.'</span><br>
                        <span class="filled_details" id="pickup_time">'.$Pickup_time.'</span><br>
                        <span class="filled_details" id="Drop_location">'.$Drop_location.'</span><br>
                        <span class="filled_details" id="dropoff_date">'.$Drop_date.'</span><br>
                        <span class="filled_details" id="dropoff_time">'.$Drop_time.'</span><br>
                    </div>
                </div>
                <div class="buttons">
                    <form action="update_reservation.php" method="POST">
                        <input type="hidden" name="reservation_id" value="'.$ID.'">
                        <button type="submit" name="accept_btn">Accept</button>
                    </form>
                    <form action="delete_reservation.php" method="POST">
                        <input type="hidden" name="reservation_id" value="'.$ID.'">
                        <button type="submit" name="reject_btn">Reject</button>
                    </form>
                </div>
            </div>
    </div>';

    echo '<div class="request" id="req1">    
        <!-- ... -->
        <div class="buttons">
            
        </div>
    </div>';

    } 
    ?>

    </div>

    <script src="JS/requests_page-staff_app.js"></script>  
        
</body>
</html>
