<?php
// Include the database connection file (con.php)
require_once 'con.php';

// Fetch the delivery data from the database
$query = "SELECT id FROM feedback";
$result = mysqli_query($conn, $query);

// Generate the HTML content for the delivery table
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        $id=$row['id'];
   
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No deliveries found</td></tr>";
}

// Close the database connection
mysqli_close($conn);
?>
