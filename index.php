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
        <li><a href="Reservations">Reservations</a></li>
        <li><a href="About">About Us</a></li>
        <li><a href="Contact">Contact Us</a></li>
      </ul>
      <button id="login_btn">Login</button>
    </nav>

    <!-- First part of the home page  -->
    <div class="container1">
      <h1>Drive Way Car Rentals</h1>
      <p>Rent a car anywhere <br> Sri Lanka...</p>
      <button>. Reserve Now >> .</button>
    </div>
    
  </div>

  <!-- Second part of the home page  -->
  <div class="background2">
    <fieldset class="set_details">
      <legend></legend>
      <form class="set_details_form" action="" method="get">
        <div class="pickup_details">
          <label for="set_pick_up_location">Pick-up Location</label>
          <input type="text" id="set_pick_up_location" name="set_pick_up_location" value=""><br>
          <label for="set_pickup_date">Pick-up Date</label>
          <input type="date" id="set_pickup_date" name="set_pickup_date">
          <label for="set_pickup_time">Pick-up Time</label>
          <input type="time" id="set_pickup_time" name="set_pickup_time"> 
        </div>
        <div class="drop_details">
          <label for="set_drop_location">Drop-off Location</label>
          <input type="text" id="set_drop_location" name="set_drop_location" value=""><br>
          <label for="set_drop_date">Drop-off Date</label>
          <input type="date" id="set_drop_date" name="set_drop_date">
          <label for="set_drop_time">Drop Time</label>
          <input type="time" id="set_drop_time" name="set_drop_time">
        </div>
        <div class="search_button">
          <button type="submit" name="search_button">Search</button>
        </div>
      </form>
    </fieldset>
  </div>

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
      </div>
    </div>
  </div>


</body>
</html>