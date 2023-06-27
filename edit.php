

<html>
    <head>
        <title>
           edit feedback
        </title>
        <link rel="stylesheet" href="Styles/edit_php.css">
    </head>


<body >
     
<form method="POST" action="feedback_view_php.php">
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update </h5>
               
            </div >
            <div class="modal-body" id="reupdate" style="font-size: 30px; font-family: Helvetica;">

                <form id="updateForm" method="POST" action="otherphp.php">
                    ID <input type='number' id="id"  name="id" class="form_control" placeholder="Please enter your id num ">
                    <br>
                    <div class="form-group">
                        <label for="Name">Name </label>
                        <input type="text" class="form-control" id="Name" name="Name" required>
                    </div><br>

                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" class="form-control" id="Email" name="Email" required>
                    </div><br>
                    <div class="form-group">
                        <label for="Subject"> Subject</label>
                        <input type="text" class="form-control" id="Subject" name="Subject" required>
                    </div><br>
                    <div class="form-group">
                        <center><label for="Comment" >Comment</label></center>
                        
                        <textarea  class="" id="update_Comment" name="Comment"  rows="6px" cols="40px" style="margin-left: 5%;"></textarea>
                    </div>
                   <br>
                

                    <button type="submit" class="btn btn-primary" id="updatebtn" style="width: 80px;height: 40px;margin-left: 30%; background-color: #1f0788e5;" onclick="update()">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
</form>



    </body>