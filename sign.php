<!DOCTYPE html>
<html>    
      <head>
        <link rel = "stylesheet" href = "styles\project.css">
        <script src = "JS\script.js"></script>
    </head>

<body>
      
    <div class="container1">
        <img id="logo" src =  "Assets\Images\logo.jpeg"> 
        <div class="container2">
            <h1>Sign Up</h1>
            <form method="POST" action="signup.php">
              <div class="container3">
                <label for="fname">First Name</label><br>
                <input type="text" id="fname" name="fname" placeholder="First Name" required><br>
                <label for="lname">Last Name</label><br>
                <input type="text" id="lname" name="lname" placeholder="Last Name" required><br>
                <label for="nic">NIC No</label><br>
                <input type="text" id="nic" name="nic" placeholder="NIC"  required><br>
                <label for="mail">Email</label><br>
                <input type="email" id="mail" name="mail" placeholder="Email" required><br>
                <label for="pwd">password</label><br>
                <input type="password" id="pwd" name="pwd" placeholder="Password" pattern="(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least one digit, one special character, one lowercase letter, one uppercase letter, and be at least 8 characters long" required>
                <br><br><br>
                
              </div>
              <div class="container4">
                <input  type="submit" id="bttn1" class="bttn-sign" value="Sign Up"><br><br>

                <span> Have an account? <a id="sign" href="log.php">Log In</a></span>

              </div>
            </form>

        </div>

     </div>

    

            
            


    

    
</body>

</html>
