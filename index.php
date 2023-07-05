<!DOCTYPE html>
<html lang="en">
<head>
    <title>Drive Way Car Rentals</title>
    <link rel="stylesheet" href="Styles\style.css">
    <link rel="icon" href="Assets\Images\Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="Styles/navbar.css">
</head>
<body>
  <div class="background1">   <!-- Added first background image to this division  -->

    <!-- Navigation bar  -->
    <nav>
      <div class="logo">
        <a href="index.php">
          <img src="Assets/Images/Logo.png" alt="Logo" width="100px" height="100px">
        </a>
      </div>
      <input type="checkbox" id="menu-toggle">
      <label for="menu-toggle" class="menu-icon">&#9776;</label>
      <ul class="menu">
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="reserve_page\main.php">Cars</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="contact.php">Contact Us</a></li> 
        
      </ul>
      <button id="login_btn" onclick="location.href='log.php';" >Login</button>
    </nav>

    <!-- First part of the home page  -->
    <div class="container1">
      <h1>Drive Way Car Rentals</h1>
      <p>Rent a car anywhere <br> Sri Lanka...</p>
      <button>. Reserve Now >> .</button>
    </div>
    
  </div>

  <!-- Second part of the home page -->
  <div class="background2">
    <div class="headingSentence">
    <h2>Reserve a car in 1 minute..</h2>
    </div>
    <form class="set_details_form" action="process_reservation.php" method="post">
      <fieldset class="set_details">
          <legend><b>. Quick car Resevation .</b></legend>
            <div class="form_contents">
              <div class="pickup_details">
                  <label for="set_pick_up_location">Pick-up Location</label>
                  <input type="text" id="set_pick_up_location" name="set_pick_up_location" value=""><br>
                  <label for="set_pickup_date">Pick-up Date</label>
                  <input type="date" id="set_pickup_date" name="set_pickup_date">
                  <label for="set_pickup_time">Pick-up Time</label>
                  <input type="time" id="set_pickup_time" name="set_pickup_time"><br>
              </div>
              <div class="drop_details">
                  <label for="set_drop_location">Drop-off Location</label>
                  <input type="text" id="set_drop_location" name="set_drop_location" value=""><br>
                  <label for="set_drop_date">Drop-off Date</label>
                  <input type="date" id="set_drop_date" name="set_drop_date">
                  <label for="set_drop_time">Drop Time</label>
                  <input type="time" id="set_drop_time" name="set_drop_time"><br>
              </div>
              <div class="search_button">
                  <select name="quick_car_select" id="quick_car_select">
                      <option value="0">Select Car</option>
                  </select>
                  <button onclick="location.href='contact.php'">Reserve Now</button>
              </div>
            </div>
      </fieldset>
    </form>
  </div>


  
  <script>
  <?php
              // Include the config.php file for database connection
              include("config.php");

              // Fetch the available cars from the Car table where Availability is 'yes'
              $sql = "SELECT Car_ID, Brand, model FROM Car WHERE Availability = 'yes'";
              $result = $con->query($sql);

              // Check if there are any available cars
              if ($result->num_rows > 0) {
                  // Loop through each row and generate the options for the select dropdown
                  while ($row = $result->fetch_assoc()) {
                      $carID = $row['Car_ID'];
                      $brand = $row['Brand'];
                      $model = $row['model'];
                      echo "document.getElementById('quick_car_select').innerHTML += '<option value=\"$carID\">$brand $model</option>';\n";
                  }
              } else {
                  echo "document.getElementById('quick_car_select').innerHTML = '<option value=\"0\">No cars available</option>';\n";
              }
          ?>
  </script>



  <!-- Third part of the home page  -->
  <div class="background3">
    <div class="container_bg3">
      <h1>Best Prices in Sri Lanka</h1>
      <p>
        Best price guarantee - in the unlikely event
        you find a lower Hertz price, <br>we'll refund the
        difference
        <br>*No cancellation or change fees* <br>
        *When the booking is cancelled within two
        days of being made. <br>
        No credit card fees
      </p>
    </div>
  </div>

  <!-- Fourth part of the home page -->
  <div class="background4">
    <div class="container_bg4">
      <div class="car_categories">
        <div class="scroll_list">
          <div onclick="location='reserve_page/compact.php'" class="category">
            <img src="Assets\Images\hatchback.png" alt="">
            <h2>Compact</h2>
          </div>
          <div onclick="location='reserve_page/SUV.php'" class="category">
            <img src="Assets\Images\suv.png" alt="">
            <h2>SUV</h2>
          </div>
          <div onclick="location='reserve_page/luxery.php'" class="category">
            <img src="Assets/Images/sedan.jpg" alt="">
            <h2>Luxury</h2>  
          </div>
        </div>
        <div class="viewall_button">
          <button onclick="location='reserve_page/main.php'">view all</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Fifth part of the home page -->
  <div class="background5">
    <div class="bg5contents">
      <h1>More than 5000 people are using our services</h1>
      <p>Contact us via our web site & experience our amazing customer service...</p>
      <button onclick="location.href='contact.php'">. Contact us now .</button>
    </div>
  </div>

  <!-- sixthh part of the home page -->
  <div class="background6">
    <div class="bg6_contents">
      <div class="bg6_header">
        <h1>4 Simple steps to rent a car!</h1>
      </div>
      <div class="bg5_body">
        <div class="step1">
          Set Date & Location
        </div>
        <div class="step2">
          Choose a car_
        </div>
        <div class="step3">
          Make a reservation
        </div>
        <div class="step4">
          Enjoy your ride
        </div>
      </div>
    </div>
  </div>


  <footer>
  <div class="top-section">
    <img src="Assets/Images/Logo.png" alt="Company Logo">
    <h3>Drive Way Car Rentals</h3>
  </div>
  <div class="subtopics">
  <div class="contact-details">
    <h4>Contact Us</h4>
    <p>123 Main Street, Kaduwela</p>
    <p>Phone: 0112233676</p>
    <p>Email: drivewaycarrentals.com</p>
  </div>
  <div class="newsletter">
    <h4>Newsletter</h4>
    <p>Subscribe to our newsletter for updates.</p>
    <a href="contact.html">Contact Us</a>
  </div>
  <div class="customer-links">
    <h4>Customer Links</h4>
    <ul>
      <li><a href="#">FAQ</a></li>
      <li><a href="#">latest cars</a></li>
      <li><a href="#">Terms &amp; Conditions</a></li>
    </ul>
  </div>
  </div>
  <hr>
  <p>&copy; 2023 Company Name. All rights reserved.</p>
</footer>

<script src="JS\app.js"></script>

</body>
</html>