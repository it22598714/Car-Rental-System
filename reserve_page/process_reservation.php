<?php
require_once 'config.php';

// Check if the form is submitted
if (isset($_POST['search_button'])) {
  // Retrieve form data
  $pickupLocation = $_POST['set_pick_up_location'];
  $pickupDate = $_POST['set_pickup_date'];
  $pickupTime = $_POST['set_pickup_time'];
  $firstName = $_POST['cus_fname'];
  $dropLocation = $_POST['set_drop_location'];
  $dropDate = $_POST['set_drop_date'];
  $dropTime = $_POST['set_drop_time'];
  $lastName = $_POST['cus_lname'];
  $selectedCarID = $_POST['quick_car_select'];

  // Find customer ID based on first name and last name
  $findCustomerIDQuery = "SELECT ID FROM Customer WHERE First_name = '$firstName' AND Last_name = '$lastName'";
  $findCustomerIDResult = $con->query($findCustomerIDQuery);
  if ($findCustomerIDResult && $findCustomerIDResult->num_rows > 0) {
    $customerIDRow = $findCustomerIDResult->fetch_assoc();
    $customerID = $customerIDRow['ID'];

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
      echo 'Reservation added successfully.';
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
