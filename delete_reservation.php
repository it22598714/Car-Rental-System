<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reject_btn'])) {
    $reservationID = $_POST['reservation_id'];

    $deleteQuery = "DELETE FROM reservation WHERE ID = '$reservationID'";
    mysqli_query($con, $deleteQuery);

    // Redirect to the requests page
    header('Location: requests_page-staff.php');
    exit();
}
?>
