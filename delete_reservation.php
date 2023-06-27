<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reject_btn'])) {
    $reservationID = $_POST['reservation_id'];
    $carId = $_POST['car_id_of_reservation'];

    $deleteQuery = "DELETE FROM reservation WHERE ID = '$reservationID'";
    mysqli_query($con, $deleteQuery);

    $upateCarAvailability = "UPDATE car SET Availability = 'yes' WHERE Car_ID = '$carId' ";
    mysqli_query($con, $upateCarAvailability);

    // Redirect to the requests page
    header('Location: requests_page_staff.php');
    exit();
}
?>
