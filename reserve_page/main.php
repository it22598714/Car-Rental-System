<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reserve</title>
  <script src="https://kit.fontawesome.com/cd17775da3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="..\Styles\navbar.css">
  <link rel="stylesheet" href="images\style.css">
  

</head>
<body>



  <style>

  
    
    .reserve_section{
      padding-top:30px;
      padding-bottom:20px;
    }

    .rest_body{
      position: relative;
      width: 300px;
      height: 300px;
      position: relative;
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: cover;
      animation: change 30s infinite ease-in-out;
    }
    
    @keyframes change {
      0% {
        background-image: url('11.jpg');
      }
      25% {
        background-image: url("22.jpg");
      }
      50% {
        background-image: url("33.jpg");
      }
      75% {
        background-image: url("44.jpg");
      }
      100% {
        background-image: url("55.jpg");
      }
      
     
        
      }
      .articles{
        position: absolute  ;
        width: 500px;
        height: 555px;
        top:393px;  
        right:-220px;
        opacity: 0.7;
      }
    
    
    </style>


      <!-- Navigation bar  -->
      <nav>
        <div class="logo">
          <a href="index.php">
            <img src="../Assets/Images/Logo.png" alt="Logo" width="100px" height="100px">
          </a>
        </div>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon">&#9776;</label>
        <ul class="menu">
          <li><a href="index.php">Home</a></li>
          <li><a class="active" href="Reservations">Reserve</a></li>
          <li><a href="About">About Us</a></li>
          <li><a href="Contact">Contact Us</a></li>
        </ul>
<<<<<<< HEAD
        <i class="fa-solid fa-user acount_icon"></i>
=======
        <button id="login_btn">Login</button>
>>>>>>> 87bacef960e0e08fc21940dc148deb63bebc7eb2
      </nav>


    <div class="reserve_section">

  
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
<<<<<<< HEAD
                  <button type="submit" class="reserve_btn" name="search_button">Reserve Now</button>
=======
                  <button type="submit" name="search_button">Reserve Now</button>
>>>>>>> 87bacef960e0e08fc21940dc148deb63bebc7eb2
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


      </div>


<div class="rest_body">

<img src="images\article61.jpg" class="articles">


  
<<<<<<< HEAD
<button type="button" class="bookNbutton1 reserve_btn">Book Now</button>
<button type="button" class="bookNbutton2 reserve_btn">Book Now</button>
<button type="button" class="bookNbutton3 reserve_btn">Book Now</button>
<button type="button" class="bookNbutton4 reserve_btn">Book Now</button>
=======
<button type="button" class="bookNbutton1">Book Now</button>
<button type="button" class="bookNbutton2">Book Now</button>
<button type="button" class="bookNbutton3">Book Now</button>
<button type="button" class="bookNbutton4">Book Now</button>
>>>>>>> 87bacef960e0e08fc21940dc148deb63bebc7eb2
<button type="button" class="bookNbutton5">Book Now</button>
<button type="button" class="bookNbutton6">Book Now</button>
<button type="button" class="bookNbutton7">Book Now</button>
<button type="button" class="bookNbutton8">Book Now</button>
<button type="button" class="bookNbutton9">Book Now</button>
<button type="button" class="bookNbutton10">Book Now</button>



<!-- Vehicle Names-->

<h2>
 <a href="main2.php" class="linkpage1">BMW 7 serires</a>

<h2>
 <a href="masarati.php" class="linkpage2">MASERATI GR</a> 
</h2>

<h2>
<a href="raverover.php" class="linkpage3"> Range Rover Sport</a>
</h2>

<h2>
<a href="audi.php" class="linkpage4">Audi A5 Coupe</a>
</h2>

<h2>
<a href="PREMIUM.php" class="linkpage5">Volvo S90</a>
</h2>

<h2>
<a href="lexsus.php" class="linkpage6">LEXUS RC</a>
</h2>

<h2>
<a href="audiq7.php" class="linkpage7">Audi Q7</a>
</h2>

<h2>
 <a href="Volvo.php" class="linkpage8">Volvo XC90</a>
</h2>

<h2>
 <a href="renault.php" class="linkpage9">Jaguar-I -PACE </a>
</h2>

<h2>
<a href="bmws4.php" class="linkpage10">BMW 4 SERIES</a>
</h2>


<!-- vehiclse images -->

<img src="images\bmw.jpg" class="bmw"alt="bmw car">
<img src="images\masarati.jpg" class="masarati"alt="masarati car">
<img src="images\renj1.png" class="reng"alt="Range over">
<img src="images\audi.png" class="audi"alt="audi car">
<img src="images\volvo.jpg"class="chevy"alt="volovo car">
<img src="images\lexes.jpg" class="lexes" alt="lexes car">
<img src="images\audiq7.jpg" class="audiq7"alt="audiSUV">
<img src="images\volovo.jpg" class="volvo"alt="volovo">
<img src="images\jagu1.jpg" class="renault"alt="jauar">
<img src="images\bmw4.jpg" class="bmw4" alt="bmw s4">



<!-- vehiclse Types imagse-->

<img src="images\logos.jpg" class="logos1" alt="Logo">

<img src="images\logos.jpg" class="logos2" alt="Logo">

<img src="images\logos.jpg" class="logos3" alt="Logo">

<img src="images\logos.jpg" class="logos4" alt="Logo">

<img src="images\logos.jpg" class="logos5" alt="Logo">

<img src="images\logos.jpg" class="logos6" alt="Logo">

<img src="images\logos.jpg" class="logos7" alt="Logo">

<img src="images\logos.jpg" class="logos8" alt="Logo">

<img src="images\logos.jpg" class="logos9" alt="Logo">

<img src="images\logos.jpg" class="logos10" alt="Logo">






<!--Vehicle Types-->


<p class ="bmws7type">Automatic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 Seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrol</p>
<p class ="masaratitype">Mannul&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 Seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrol</p>
<p class ="rangerovertype">Automatic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6 Seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrol</p>
<p class ="audia5type">Automatic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 Seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrol</p>
<p class ="premiumtype">Automatic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 Seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diesel</p>
<p class ="lexusRctype">Mannul&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 Seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrol</p>
<p class ="audiq7type">Automatic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6 Seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diesel</p>
<p class ="volvoxc90type">Automatic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6 Seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diesel</p>
<p class ="renaulttype">Automatic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 Seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrol</p>
<p class ="bmws4type">Mannul&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 Seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrol</p>





<select class="dropdown" onchange="navigateToPage(this)">
<option value="">Select a Vehicle Category</option>
<option value="compact.php">Compact Cars</option>
<option value="Luxery.php">Luxury Cars</option>
<option value="SUV.php">SUV</option>
</select>

<script>
function navigateToPage(selectElement) {
  var selectedValue = selectElement.value;
  if (selectedValue) {
    window.location.href = selectedValue;
  }
}
</script>

</div>



</body>
</html>





</html>
