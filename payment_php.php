 <?php
//Linking the configuration file
require 'con.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$firstName = $_POST['firstName'];
$lastName = $_POST["lastName"];
$cNumber = $_POST["cNumber"];
$date = $_POST["date"];
$cvv = $_POST["cvv"];
$price = $_POST["price"];


$sql= "INSERT INTO credit_card (`First_name`, `Last_name`, `CNumber`, `date`, `Cvv`, `Price`) VALUES ('".$firstName."', '".$lastName."', '".$cNumber."', '".$date."', '".$cvv."', '".$price."')";

if($conn->query($sql)){
    echo '<script>alert("Inserted successfully")</script>';
  
}
else{
echo "Error:". $conn->error;
}
$conn->close();
}
?>