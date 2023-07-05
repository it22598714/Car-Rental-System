<?php
require_once 'config.php';
session_start();

// Check if the form is submitted
if (isset($_POST['search_button'])) {
  // Retrieve form data
  $pickupLocation = $_POST['set_pick_up_location'];
  $pickupDate = $_POST['set_pickup_date'];
  $pickupTime = $_POST['set_pickup_time'];
  $dropLocation = $_POST['set_drop_location'];
  $dropDate = $_POST['set_drop_date'];
  $dropTime = $_POST['set_drop_time'];
  $selectedCarID = $_POST['quick_car_select'];

  //Get customer ID from the session
  $customerID = $_SESSION['CID'];

  if (isset($customerID)) {

    // Generate reservation ID by adding 1 to the last 7 digits of the last reservation ID
    $getLastReservationIDQuery = "SELECT ID FROM Reservation ORDER BY ID DESC LIMIT 1";
    $getLastReservationIDResult = $con->query($getLastReservationIDQuery);
    $lastReservationID = $getLastReservationIDResult->fetch_assoc();
    $last7Digits = substr($lastReservationID['ID'], -7);
    $newReservationID = 'CRS' . str_pad(intval($last7Digits) + 1, 7, '0', STR_PAD_LEFT);

    // Insert reservation into the database
    $insertReservationQuery = "INSERT INTO Reservation (ID, Customer_ID, Car_ID, Pickup_location, Pickup_date, Pickup_time, Drop_location, Drop_date, Drop_time, Status)
                               VALUES ('$newReservationID', '$customerID', '$selectedCarID', '$pickupLocation', '$pickupDate', '$pickupTime', '$dropLocation', '$dropDate', '$dropTime', 'pending')";
    $insertReservationResult = $con->query($insertReservationQuery);

    // Update the Availability column of the selected car to 'no'
    $updateCarAvailabilityQuery = "UPDATE Car SET Availability = 'no' WHERE Car_ID = '$selectedCarID'";
    $updateCarAvailabilityResult = $con->query($updateCarAvailabilityQuery);

    if ($insertReservationResult && $updateCarAvailabilityResult) {
      // Reservation and car availability updated successfully
      echo '<div style="width:60%; margin-left:auto; margin-right:auto; margin-top:10%; padding:5%; background-color:#dbdbdb; border-radius:30px;">
            <h1>Reservation added successfully</h1><br>
            <button id="make_payment_button" style="background-color: #ffffff; color: #000000; border-radius: 5px; border: 3px solid #000000; font-size: 1.5vw; margin-left: auto; margin-right: auto; cursor: pointer; width: 14vw;"> Make Payment </button>
            </div>';
    } else {
      // Failed to insert reservation or update car availability
      echo 'Failed to add reservation.';
    }
  } else {
    // Customer not found
    echo 'Customer not found.';
  }
} else {
  // Invalid form submission
  echo 'Invalid request.';
}
?>

<script src="JS/process_reservation.js"></script>  