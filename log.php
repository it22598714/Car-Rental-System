<!DOCTYPE html>
<html>   
<head>
  <link rel = "stylesheet" href = "Styles\project.css">
  <script src = "G:\project\JS\script.js"></script>
</head>

<body>
      
    <div class="container1">
        <img id="logo" src =  "Assets\Images\logo.jpeg"> 
        <div class="container2">
            <h1>Log In</h1>
            <form method="POST" action="login.php">
              <div class="container3">
                <label for="mail">Email</label><br>
                <input type="email" id="mail" name="mail" placeholder="Email"><br><br><br>
                <label for="pwd">password</label><br>
                <input type="password" id="pwd" name="pwd" placeholder="Password" pattern="(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least one digit, one special character, one lowercase letter, one uppercase letter, and be at least 8 characters long" required>

                <p>Forgot Password? <a id="click" href="#">Click here</a></p>
              </div>
              <div class="btn-field">
                <button id="btn1" type="button" class="bttn1">Login</button>
                <button id="btn2" type="button" class="bttn2" onclick="sign()">Sign Up</button>

                <br><br><br><br>

              </div>
              <span>Don't have an account? <a id="sign" href="signup.html">Sign Up</a></span>

              <hr class="line">
            </form>

        </div>

     </div>

    

            
            


    

    
</body>

</html>
