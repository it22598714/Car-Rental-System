<!DOCTYPE html>
<html lang="en">
<head>
    <title>Drive Way Car Rentals</title>
    <script src="https://kit.fontawesome.com/cd17775da3.js" crossorigin="anonymous"></script>
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
        <li><a href="reserve_page/main.php">Reserve</a></li>
        <li><a href="About">About Us</a></li>
        <li><a href="Contact">Contact Us</a></li>
      </ul>
      <i onclick="location.href='Customer_profile.php';" class="fa-solid fa-user acount_icon"></i>
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
      <fieldset class="set_details">
          <legend>Quick car Resevation</legend>
          <form class="set_details_form" action="process_reservation.php" method="post">
              <div class="pickup_details">
                  <label for="set_pick_up_location">Pick-up Location</label>
                  <input type="text" id="set_pick_up_location" name="set_pick_up_location" value=""><br>
                  <label for="set_pickup_date">Pick-up Date</label>
                  <input type="date" id="set_pickup_date" name="set_pickup_date">
                  <label for="set_pickup_time">Pick-up Time</label>
                  <input type="time" id="set_pickup_time" name="set_pickup_time"><br>
                  <label for="cus_fname">First name</label>
                  <input type="text" id="cus_fname" name="cus_fname" value="">
              </div>
              <div class="drop_details">
                  <label for="set_drop_location">Drop-off Location</label>
                  <input type="text" id="set_drop_location" name="set_drop_location" value=""><br>
                  <label for="set_drop_date">Drop-off Date</label>
                  <input type="date" id="set_drop_date" name="set_drop_date">
                  <label for="set_drop_time">Drop Time</label>
                  <input type="time" id="set_drop_time" name="set_drop_time"><br>
                  <label for="cus_lname">Last name</label>
                  <input type="text" id="cus_lname" name="cus_lname" value="">
              </div>
              <div class="search_button">
                  <select name="quick_car_select" id="quick_car_select">
                      <option value="0">Select Car</option>
                  </select>
                  <button type="submit" name="search_button">Reserve Now</button>
              </div>
          </form>
      </fieldset>
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
          <div class="category">
            <img src="Assets\Images\sedan.jpg" alt="">
            <h2>Sedan</h2>
          </div>
          <div class="category">
            <img src="Assets\Images\suv.png" alt="">
            <h2>SUV</h2>
          </div>
          <div class="category">
            <img src="Assets\Images\hatchback.png" alt="">
            <h2>Hatchback</h2>  
          </div>
          <div class="category">
            <img src="Assets\Images\convertiable.png" alt="">
            <h2>Convertible</h2>
          </div>
          <div class="category">
            <img src="Assets\Images\minivan.png" alt="">
            <h2>Minivan</h2>
          </div>
        </div>
        <div style="display:none;" class="navigation">
          <button class="prev-btn">&#8249;</button>
          <button class="next-btn">&#8250;</button>
        </div>
        <div class="viewall_button">
          <button>view all</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Fifth part of the home page -->
  <div class="background5">
    <div class="bg5contents">
      <h1>More than 5000 people are using our services</h1>
      <p>Contact us via our web site & experience our amazing customer service...</p>
      <button>. Contact us now .</button>
    </div>
  </div>

  <!-- Fifth part of the home page -->
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
          Choose a cal_from
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

  <!-- Sixth part of the home page -->
  <div class="background7">
    <div class="bg7_contents">
      <div class="bg7_header">
        <h1>Our Clients</h1>
      </div>
      <div class="bg7_clients">
        <div class="client" class="client1">
          <img src="images/client1.png" alt="client1">
          <p class="description">ssssssssssssssssssssssssssssss</p>
        </div>
        <div class="client" class="client2">
          <img src="images/client2.png" alt="client2">
          <p class="description"></p>
        </div>
        <div class="client" class="client3">
          <img src="images/client3.png" alt="client3">
          <p class="description"></p>
        </div>
        <div class="client" class="client4">
          <img src="images/client4.png" alt="client4">
          <p class="description"></p>
        </div>
      </div>
      <button>View all Feedbacks</button>
    </div>
  </div>


  <footer>
  <div class="top-section">
    <img src="Assets/Images/Logo.png" alt="Company Logo">
    <h3>Drive Way Car Rentals</h3>
    <div class="social-media-icons">
      <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
      <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
      <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
    </div>
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


</body>
</html>