<!DOCTYPE html>
<html>
<head>
	<title>payment method</title>
	<link rel="stylesheet" href="Styles\payment.css" >
	<link rel="stylesheet" href="Styles\style.css">
	<link rel="stylesheet" href="Styles\myscript.css">
    <link rel="stylesheet" href="Styles/navbar.css">


    <script src="Js\jjj.js"></script>

</head>

<body id="bdy">
    <nav>
        <div class="logo">
          <a href="index.html">
            <img src="Assets/Images/Logo.png" alt="Logo" width="100px" height="100px">
          </a>
        </div>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon">&#9776;</label>
        <ul class="menu">
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="Reservations">Reservations</a></li>
          <li><a href="About">About Us</a></li>
          <li><a href="Contact">Contact Us</a></li>
        </ul>
        <button id="login_btn">Profile</button>
      </nav><br>
<div id="bodyd">
    <hr>
    <form method="POST" action="payment_php.php">
    <h2 style="background-color: rgb(248, 245, 245); padding: 40px 40px 40px 40px;">Payment method</h2>
    
    <div id="div1" class="divh"  onclick="zoom()">
        <input type="radio" name="radio1" value="credit" style="margin-left: 10%;">
         <label id="l1">Credit card payment or debit card payment</label>
         <br><br>
       <div style="margin-left: 500px" > <img src="Assets\Images\visa.png" alt="imgg" width="50px" height="30px">
        <img src="Assets\Images\master.png" alt="imgg" width="50px" height="30px">
        <img src="Assets\Images\mastro.png" alt="imgg" width="50px" height="30px"></div>
        <div style="margin-left: 25%;">
        <input id="txt" type="text" placeholder="First name " name="firstName" >
        <input id="txt1" type="text" placeholder ="Last name " name="lastName" ><br><br>
        <input id="txt2" type="text" placeholder="Card Number" name="cNumber" >
        <input id="txt3" type="text" placeholder="YY/MM" name="date" ><br><br>
        <input id="txt4" type="text"  placeholder="CVV" name="cvv" >
        <input id="txt5" type="text" placeholder="Price" name="price" >
        <button type="sybmit" value="SUBMIT" name="submit" style="border-radius: 12px; height: 30px;width: 80px;">SUBMIT</button></div>
        </div>
        </form>
    <br>
    <div  class="div2">
        <form method="POST" action="bank_transfer.php">
        <input type="radio" name ="radio1" value="trans" style="margin-left: 10%;"> 
        <label id="l1">Bank transfer</label>
        <div style="margin-left: 25%;">
        <input id="txt6" type="text" placeholder="Bank name " name="bankName" ><br><br>
        <input id="txt7" type="text" placeholder="Your name " name="yourName" ><br><br>
        <input id="txt8" type="text" placeholder="Branch name " name="branchName" ><br><br>
        <input id="txt9" type="text" placeholder="Email " name="email" ><br><br>
        <input id="txt10" type="text" placeholder="Price" name="price2" ><br><br>
        <input type="submit" value="SUBMIT"  style="border-radius: 12px; height: 30px;width: 80px; margin-left: 40px;" >
        </div>
    </div>
    </form>
    <div>
        <script src="Js\jjj.js"></script>
    </div>
</div>
</body>

</html>