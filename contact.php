<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us page</title>
    <link rel = "stylesheet" href = "Styles\project.css">
    <script src = "G:\project\JS\script.js"></script>
    <link rel = "stylesheet" href = "Styles\navbar.css">
<body>

       <div class="main">
        <nav>
            <div class="logo">
                <img src= "G:\project\Assets\Images\logo.jpeg"  width="100px" height="100px">
              
            </div>
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="menu-icon">&#9776;</label>
            <ul class="menu">
              <li><a href="index.html">Home</a></li>
              <li><a href="Reservations">Reservations</a></li>
              <li><a href="Aboutus.html">About Us</a></li>
              <li><a class="active" href="Contact">Contact Us</a></li>
            </ul>
          </nav>
          <div class="contact">
           <div class="title">
              <header>We'd love to hear from you</header>
           </div>
              <div class="input-box">
                <div class="form">
                <form method="POST" action="contactus.php" >
                    <input type="text" class="input-field" name="fname" placeholder="Fname" required><br><br>
                    <input type="text" class="input-field" name="lname" placeholder="Lname" required><br><br>
                    <input type="email" class="input-field" name="mail" placeholder="Email" required><br><br>
                    <input type="tel" class="input-field" name="no" placeholder="Mobile no" maxlength="10" pattern="[0-9]{3}[0-9]{3}[0-9]{4}"required><br><br>
                    <textarea id="msg" name="Msg" placeholder="Message" rows="7" cols="60" required></textarea><br><br>
                    <input type="submit" class="btn1" value="Send">    
                </form>
                </div>
                <div class="info">
                    <h1><u>Meet us</u></h1>
                    <div class="info-box">
                       <div>
                          <span><ion-icon name="location"></ion-icon></span>
                          <p>35/A, New Kandy road, <br>Kaduwela.</p>
                       </div>
                       <div>
                          <span><ion-icon name="mail"></ion-icon></span>
                          <a href="#">support.carrental@gmail.com</a>
                       </div>
                       <div><br>
                          <span><ion-icon name="call"></ion-icon></span>
                          <a href="#">01124555555</a>
                       </div>
                    </div>
                    
                </div>
                <div class="map"></div>
                    
              </div>
         </div>        
      </div> 
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>