<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['accept_btn'])) {
    $reservationID = $_POST['reservation_id'];


    $updateQuery = "UPDATE reservation SET Status = 'accepted' WHERE ID = '$reservationID'";
    mysqli_query($con, $updateQuery);

    // Redirect to the requests page
    header('Location: requests_page_staff.php');
    exit();
}
?>