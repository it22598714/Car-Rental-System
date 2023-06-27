<html>
<head>

  <title>SUV</title>
  

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


.linkpage3{
  position: absolute;
  top:120px;  
  right: -1000px;
  color: black;
  text-transform: uppercase;
}

.reng{
  position: absolute;
    right: -780px;
    top: 150px;
    display: block;
    height: 250px;
    width: 800px;
    
}


.logos3{
  position: absolute;
  top: 210px;
  right:-1060 ;
  height: 80px;
  width: 350px;
}

.rangerovertype{
  position: absolute;
  top: 165px;
  right: -1010px;
  font-size: 16px;
  font-weight: bold;
}

.bookNbutton3{
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

.linkpage7{
  position: absolute;
  top:430px;  
  right: -950px;
  color: black;
  text-transform: uppercase;
}

.audiq7{
    position: absolute;
    right: -700px;
    top: 450px;
    display: block;
    height: 290px;
    width: 420px;
    
}
.audiq7type{
  position: absolute;
  top: 465px;
  right: -1010px;
  font-size: 16px;
  font-weight: bold;

}


.logos7{
  position: absolute;
  top: 510px;
  right:-1060 ;
  height: 80px;
  width: 350px;

}

.bookNbutton7{
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



.linkpage8{
  position: absolute;
  top:730px;  
  right: -980px;
  color: black;
  text-transform: uppercase;
}


.volvo{
    position: absolute;
    right: -700px;
    top: 780px;
    display: block;
    height: 290px;
    width: 430px;
}

.logos8{
  position: absolute;
  top: 810px;
  right:-1060 ;
  height: 80px;
  width: 350px;
}

.volvoxc90type{
  position: absolute;
  top: 765px;
  right: -1010px;
  font-size: 16px;
  font-weight: bold;

}

.bookNbutton8{
  position: absolute;
  display: inline-block;
  padding: 10px 20px;
  background-color: red;
  color: white;
  border: none;
  cursor: pointer;
  top: 920px;
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
  <option value="Luxery.html">Luxery Cars</option>
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
  <a href="raverover.html" class="linkpage3"> Range Rover Sport</a>
</h2>

<h2>
  <a href="audiq7.html" class="linkpage7">Audi Q7</a>
</h2>

<h2>
  <a href="Volvo.html" class="linkpage8">Volvo XC90</a>
</h2>






<img src="images\renj1.png" class="reng"alt="Range over">

<img src="images\audiq7.jpg" class="audiq7"alt="audiSUV">

<img src="images\volovo.jpg" class="volvo"alt="volovo">




<button type="button" class="bookNbutton3">Book Now</button>
<button type="button" class="bookNbutton7">Book Now</button>
<button type="button" class="bookNbutton8">Book Now</button>



<img src="images\logos.jpg" class="logos3" alt="Logo">
<img src="images\logos.jpg" class="logos7" alt="Logo">
<img src="images\logos.jpg" class="logos8" alt="Logo">


<p class ="rangerovertype">Automatic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6 Seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrol</p>
<p class ="audiq7type">Automatic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6 Seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diesel</p>
<p class ="volvoxc90type">Automatic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6 Seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diesel</p>






</body>

</html>