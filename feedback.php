<?php
require_once 'con.php'; 
$query = "SELECT * FROM feedback";
$result = mysqli_query($connection, $query);
$feadback = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Adding dummy data to the navbar
$navbarItems = array("Home", "About", "Contact");
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the delete query
    $query = "DELETE FROM feedback WHERE id = '$id'";

    // Execute the delete query
    if (mysqli_query($conn, $query)) {
        // Delete successful
        echo "Delivery deleted successfully";
    } else {
        // Delete failed
        echo "Error deleting feedback: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Feed back </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">FEEDBACK</a>
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
</nav>

<div class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Comment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($feadback as $feedback): ?>
                <tr>
                    <td><?php echo $feedback['id']; ?></td>
                    <td><?php echo $feedback['Name']; ?></td>
                    <td><?php echo $feedback['Email']; ?></td>
                    <td><?php echo $feedback['Subject']; ?></td>
                    <td><?php echo $feedback['Comment']; ?></td>
                    <td>
                        <form method="POST">
                        <button type="button" class="btn btn-primary" onclick="populateUpdateModal()"
                           >Update</button>
                            <button type='button' class='btn btn-danger' onclick="confirmDelete(<?php echo $feedback['id']; ?>,)">Delete</button>

                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php $id=$feedback['Name']; ?>
   
</div>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container text-center">
        <span class="text-muted">car rental  <?php echo date('Y'); ?></span>
    </div>
</footer>

<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateForm" method="POST" action="feedback_view.php">
                    <input type="hidden" name="id" id="id" value="">
                    <div class="form-group">
                        <label for="Update_Name">Name</label>
                        <input type="text" class="form-control" id="Update_Name" name="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="update_Email">Email</label>
                        <input type="text" class="form-control" id="update_Email" name="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="update_Subject">Subject</label>
                        <input type="number" class="form-control" id="update_Subject" name="Subject" required>
                    </div>
                    <div class="form-group">
                        <label for="update_Comment">Comment</label>
                        <input type="number" step="0.01" class="form-control" id="update_Comment" name="Comment" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>


<input type="button" onclick="location.href='add_feedback.php';" value="ADD FEEDBACK" style="margin-left: 40% ; width: 220px; height: 45px" />



<script>
    function populateUpdateModal() {
        window.location.href = "edit.php";
    }

    jQuery(document).ready(function($) {
    // Handle form submission
    $("#updateForm").submit(function(e) {
        e.preventDefault();

        // Get the form data
        var formData = $(this).serialize();

        // Submit the form using AJAX
        jQuery.ajax({
            url: "update_feedbak.php",
            type: "POST",
            data: formData,
            success: function(response) {
                // Handle the response
                console.log(response);
                // Hide the update modal
                $('#updateModal').modal('hide');
                // Refresh the feedback table
                location.reload();
            },
            error: function(xhr, status, error) {
                console.log(error); // Handle any error that occurs during the AJAX request
            }
        });
    });

    // Function to refresh the feedback table
   
});
function confirmDelete(fID) {
    // Ask for confirmation
    if (confirm("Are you sure you want to delete this feedback?")) {
        // If confirmed, perform the AJAX request to delete the feedback
    
        jQuery.ajax({
            url: "delete_feedback.php?id=" + fID,
            type: "GET",
            success: function(response) {
                // Handle the response
                console.log(response);
                // Refresh the feedback table
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
