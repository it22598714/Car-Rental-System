<?php
require_once 'config.php'; 
$query = "SELECT * FROM contact_us";
$result = mysqli_query($con, $query);
$message = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (isset($_GET['Email'])) {
    $email = $_GET['Email'];

    // Prepare the delete query
    $query = "DELETE FROM contact_us WHERE Email = '$email'";

    // Execute the delete query
    if (mysqli_query($con, $query)) {
        // Delete successful
        echo "Message deleted successfully";
    } else {
        // Delete failed
        echo "Error deleting message: " . mysqli_error($con);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Messages</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">MESSAGES</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          
        </li>
      </ul>
    </div>
  </div>
</nav >

<div class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>firstName</th>
                <th>lastName</th>
                <th>Email</th>
                <th>mobileNo</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($message as $message): ?>
                <tr>
                    
                    <td><?php echo $message['firstName']; ?></td>
                    <td><?php echo $message['lastName']; ?></td>
                    <td><?php echo $message['Email']; ?></td>
                    <td><?php echo $message['mobileNo']; ?></td>
                    <td><?php echo $message['Message']; ?></td>
                    <td>
                        <form method="POST">
                        <button type="button" class="btn btn-primary" onclick="populateUpdateModal()">Update</button>
                            <button type='button' class='btn btn-danger' onclick="confirmDelete('<?php echo $message['Email']; ?>')">Delete</button>

                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

   
</div>


<script>
    function populateUpdateModal() {
        window.location.href = "update_messages.php";
    }

    jQuery(document).ready(function($) {
    // Handle form submission
    $("#updateForm").submit(function(e) {
        e.preventDefault();

        // Get the form data
        var formData = $(this).serialize();

        // Submit the form using AJAX
        jQuery.ajax({
            url: "update_msg.php",
            type: "POST",
            data: formData,
            success: function(response) {
                // Handle the response
                console.log(response);
                // Hide the update modal
                $('#updateModal').modal('hide');
                location.reload();
            },
            error: function(xhr, status, error) {
                console.log(error); 
            }
        });
    });

   
});
function confirmDelete(User_mail) {
    // Ask for confirmation
    if (confirm("Are you sure you want to delete this message?")) {
        // If confirmed, perform the AJAX request to delete the message
    
        jQuery.ajax({
            url: "delete_messages.php?Email=" + User_mail,
            type: "GET",
            success: function(response) {
                // Handle the response
                console.log(response);
        
                location.reload();
            },
            error: function(xhr, status, error) {
                console.log(error); // Handle any error that occurs during the AJAX request
            }
        });
    }
}

</script>

</body>
</html>
