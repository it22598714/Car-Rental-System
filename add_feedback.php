<!DOCTYPE html>
<<html>
<head>
	<title>Add feedback</title>
	<link rel="stylesheet" href="Styles\payment.css" >
	<link rel="stylesheet" href="Styles\style.css">
	<link rel="stylesheet" href="Styles\myscript.css">
    <link rel="stylesheet" href="Styles/navbar.css">

</head>

<body style="background-size: cover;" id="fbody">
  <div>  
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
      </nav>
  </div><br>
  
    <hr>
    <div >
    <h2 style="background-color: lightgrey; padding: 40px 40px 40px 40px;">Add Feedback</h2>
    <div id="bodyd2">
    <div id="form">
       <form method="POST" action="insert_data.php">
        Name <input type="text" id="tx1" placeholder="Name" name="Name"><br><br>
        Email <input type="text" id="tx2" placeholder="Email" name="Email"><br><br>
        Subject<input type="text" id="tx3" placeholder="Subject" name="Subject"><br><br>
        Comment<textarea cols="52" rows="5" style="margin-left: 4%;border-radius: 12px;" name="Comment"></textarea><br><br>
        Attchment  <input type="file" id="img" name="img" accept="image/*">
        <br><br>
        <input type="submit" value="Send" id="send">
       </form>

       
    </div>
    </div>
</body>
</html>