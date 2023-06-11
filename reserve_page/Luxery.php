<html>
<head>

  <title>Luxury Cars</title>
  

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


.linkpage1{
  position: absolute;
  top:120px;  
  right: -1000px;
  color: black;
  text-transform: uppercase;
}

.bmw{
  position: absolute;
  right: -700px;
  top: 102px;
  display: block;
  height: 265px;
  width: 380px;
}


.logos4{
  position: absolute;
  top: 210px;
  right:-1060 ;
  height: 80px;
  width: 350px;
}

.bmws7type{
  position: absolute;
  top: 165px;
  right: -1010px;
  font-size: 16px;
  font-weight: bold;
}

.bookNbutton1{
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

.linkpage2{
  position: absolute;
  top:430px;  
  right: -950px;
  color: black;
  text-transform: uppercase;
}

.masarati{
   position: absolute;
   right: -700px;
   top: 450px;
    display: block;
    height: 265px;
    width: 380px;
}



.masaratitype{
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



.linkpage10{
  position: absolute;
  top:750px;  
  right: -980px;
  color: black;
  text-transform: uppercase;
}




.logos10{
  position: absolute;
  top: 830px;
  right:-1060 ;
  height: 80px;
  width: 350px;
}


.bmw4{
  position: absolute;
    right: -700px;
    top: 780px;
    display: block;
    height: 265px;
    width: 380px;
}

.bmws4type{
  position: relative;
  top: 799px;
  right: -1010px;
  font-size: 16px;
  font-weight: bold;
}

.bookNbutton10{
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
  <a href="main2.html" class="linkpage1">BMW 7 series</a>
<h2>

<h2>
  <a href="masarati.html" class="linkpage2">MASERATI GR</a>
</h2>

<h2>
  <a href="bmws4.html" class="linkpage10">BMW 4 SERIES</a>
</h2>





<img src="images\bmw.jpg" class="bmw"alt="bmw car">

<img src="images\masarati.jpg" class="masarati"alt="masarati car">

<img src="images\bmw4.jpg" class="bmw4" alt="bmw s4">





<button type="button" class="bookNbutton1">Book Now</button>
<button type="button" class="bookNbutton5">Book Now</button>
<button type="button" class="bookNbutton10">Book Now</button>



<img src="images\logos.jpg" class="logos4" alt="Logo">
<img src="images\logos.jpg" class="logos5" alt="Logo">
<img src="images\logos.jpg" class="logos10" alt="Logo">



<p class ="bmws7type">Automatic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 Seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrol</p>
<p class ="masaratitype">Mannul&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 Seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrol</p>
<p class ="bmws4type">Mannul&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 Seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrol</p>











</body>

</html>