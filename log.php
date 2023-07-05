<!DOCTYPE html>
<html>   
<head>
  <link rel = "stylesheet" href = "styles\project.css">
  <link rel="stylesheet" href="Styles\navbar.css">
  <script src = "project\JS\script.js"></script>
</head>

<body>
  <!-- Navigation bar  -->
  <nav>
      <div class="logo">
        <a href="home_registeredUser.php">
          <img src="Assets/Images/Logo.png" alt="Logo" width="100px" height="100px">
        </a>
      </div>
      <input type="checkbox" id="menu-toggle">
      <label for="menu-toggle" class="menu-icon">&#9776;</label>
      <ul class="menu">
        <li><a class="active" href="home_registeredUser.php">Home</a></li>
        <li><a href="reserve_page/main.php">Reserve</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
      <i onclick="location.href='Customer_profile.php';" class="fa-solid fa-user acount_icon"></i>
    </nav>
      
    <div class="container1">
        <div class="container2">
            <h1>Log In</h1>
            <form method="POST" action="login.php">
              <div class="container3">
                <label for="mail">Email</label><br>
                <input type="email" id="mail" name="mail" placeholder="Email"><br><br><br>
                <label for="pwd">password</label><br>
                <input type="password" id="pwd" name="pwd" placeholder="Password" pattern="(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least one digit, one special character, one lowercase letter, one uppercase letter, and be at least 8 characters long" required>
                <br><br>
                
              </div>
              <div class="btn-field">
                <button id="btn1" type="submit" name="loginBtn" class="bttn1">Login</button>
                <button id="btn2" type="button" class="bttn2" onclick="sign()">Sign Up</button>

                <br><br><br><br>

              </div>
              <span>Don't have an account? <a id="sign" href="sign.php">Sign Up</a></span>

              <hr class="line">
            </form>

        </div>

     </div>

    

            
            

<script>
   function sign(){

      window.location.href = "sign.php";
      
    }
    
 


</script>
    

    
</body>

</html>
