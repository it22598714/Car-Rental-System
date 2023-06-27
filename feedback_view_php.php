<?php


$Name = $_POST["Name"];
$Email = $_POST["Email"];
$Subject = $_POST["Subject"];
$Comment = $_POST["Comment"];
$id=$_POST["id"];

$servername = "localhost";
$username = "root";
$password = "";
$db = "car_rental";



$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);

}else{
$sql = "UPDATE feedback SET Name='$Name',Email='$Email',Subject='$Subject',Comment='$Comment'  WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
	echo "Records updated: ".$id;
   
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();
}
?>