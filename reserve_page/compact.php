<html>
<head>

  <title>Compact car</title>
  

</head>

<body>



<style>


body{
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



    .dropdown{
  position: absolute;
  top: 170px;
  right:-210px;
  padding: 10px 90px;
  border: 2px solid #000000;
  border-radius: 4px;
  color: #ffffff;
  font-size: 26px;
  background-color: rgb(239, 32, 32);
  background-repeat: no-repeat;
  background-position: right center;
  cursor: pointer;
}


.linkpage4{
  position: absolute;
  top:120px;  
  right: -1000px;
  color: black;
  text-transform: uppercase;
}

.audi{
  position: absolute;
  right: -740px;
  top: 140px;
  display: block;
  height: 250px;
  width: 590px;
}


.logos4{
  position: absolute;
  top: 210px;
  right:-1060 ;
  height: 80px;
  width: 350px;
}

.audia5type{
  position: absolute;
  top: 165px;
  right: -1010px;
  font-size: 16px;
  font-weight: bold;
}

.bookNbutton4{
  position: absolute;
  display: inline-block;
  padding: 10px 20px;
  background-color: red;
  color: white;
  border: none;
  cursor: pointer;
  top: 317px;
  right: -940px;
}

.linkpage5{
  position: absolute;
  top:430px;  
  right: -950px;
  color: black;
  text-transform: uppercase;
}

.chevy{
   position: absolute;
   right: -700px;
   top: 420px;
    display: block;
    height: 330px;
    width: 450px;
}



.premiumtype{
  position: absolute;
  top: 465px;
  right: -1010px;
  font-size: 16px;
  font-weight: bold;
}



.logos5{
  position: absolute;
  top: 510px;
  right:-1060 ;
  height: 80px;
  width: 350px;

}

.bookNbutton5{
  position: absolute;
  display: inline-block;
  padding: 10px 20px;
  background-color: red;
  color: white;
  border: none;
  cursor: pointer;
  top: 630px;
  right: -940px;
}



.linkpage9{
  position: absolute;
  top:750px;  
  right: -980px;
  color: black;
  text-transform: uppercase;
}




.logos9{
  position: absolute;
  top: 830px;
  right:-1060 ;
  height: 80px;
  width: 350px;
}


.renault{
  position: absolute;
    right: -700px;
    top: 780px;
  display: block;
  height: 290px;
  width: 430px;
}

.renaulttype{
  position: relative;
  top: 799px;
  right: -1010px;
  font-size: 16px;
  font-weight: bold;
}

.bookNbutton9{
  position: absolute;
  display: inline-block;
  padding: 10px 20px;
  background-color: red;
  color: white;
  border: none;
  cursor: pointer;
  top: 950px;
  right: -940px;
}



.articles{
        position: absolute  ;
        width: 500px;
        height: 555px;
        top:405px;
        right:-220px;
        opacity: 0.7;
      }



</style>



<select class="dropdown" onchange="navigateToPage(this)">
  <option value="">Select a Vehicle Category</option>
  <option value="compact.html">Compact Cars</option>
  <option value="luxery.html">Luxury Cars</option>
  <option value="SUV.html">SUV</option>
</select>

<script>
  function navigateToPage(selectElement) {
    var selectedValue = selectElement.value;
    if (selectedValue) {
      window.location.href = selectedValue;
    }
  }
</script>


<img src="images\article61.jpg" class="articles">



<h2>
  <a href="audi.html" class="linkpage4">Audi A5 Coupe</a>
</h2>

<h2>
  <a href="PREMIUM.html" class="linkpage5">Volvo S90</a>
</h2>

<h2>
  <a href="renault.html" class="linkpage9">Jaguar-I -PACE </a>
</h2>






<img src="images\audi.png" class="audi"alt="audi car">

<img src="images\volvo.jpg"class="chevy"alt="Volvo car">

<img src="images\jagu1.jpg" class="renault"alt="jauar">




<button type="button" class="bookNbutton4">Book Now</button>
<button type="button" class="bookNbutton5">Book Now</button>
<button type="button" class="bookNbutton9">Book Now</button>



<img src="images\logos.jpg" class="logos4" alt="Logo">
<img src="images\logos.jpg" class="logos5" alt="Logo">
<img src="images\logos.jpg" class="logos9" alt="Logo">



<p class ="audia5type">Automatic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 Seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrol</p>
<p class ="premiumtype">Automatic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 Seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diesel</p>
<p class ="renaulttype">Automatic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 Seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrol</p>










</body>

</html>