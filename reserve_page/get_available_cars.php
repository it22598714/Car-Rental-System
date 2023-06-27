<?php
require_once 'config.php';

// Fetch available cars from the database
$getAvailableCarsQuery = "SELECT Car_ID, Brand, Model FROM Car WHERE Availability = 'yes'";
$getAvailableCarsResult = $con->query($getAvailableCarsQuery);

if ($getAvailableCarsResult && $getAvailableCarsResult->num_rows > 0) {
  $cars = [];
  while ($row = $getAvailableCarsResult->fetch_assoc()) {
    $cars[] = $row;
  }
  echo json_encode($cars);
} else {
  echo 'No cars available.';
}
?>
